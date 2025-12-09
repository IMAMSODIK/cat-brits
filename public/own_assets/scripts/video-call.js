/**
 * Video Call Handler using Jitsi Meet
 * With JaaS (primary) + Self-hosted (fallback) support
 */

(function($) {
    'use strict';

    // ===========================================
    // JITSI SERVER CONFIGURATION
    // ===========================================
    // Primary: JaaS (Jitsi as a Service) - 25 free minutes/month
    // Fallback: Self-hosted Jitsi server
    // ===========================================

    const JITSI_SERVERS = {
        // PRIMARY: JaaS by 8x8 (get your AppID at https://jaas.8x8.vc/)
        jaas: {
            domain: '8x8.vc',
            appId: 'vpaas-magic-cookie-2cdc40053c22434a96f43d5ea189dea0', // TODO: Ganti dengan AppID dari akun JaaS kamu sendiri, untuk sementara pakai ini:             appId: 'vpaas-magic-cookie-2cdc40053c22434a96f43d5ea189dea0', // TODO: Ganti dengan AppID dari akun JaaS kamu sendiri, untuk sementara pakai ini: vpaas-magic-cookie-2cdc40053c22434a96f43d5ea189dea0/ca41d8
            enabled: true // DISABLED - karena AppID tidak valid. Set true setelah dapat AppID sendiri
        },
        // FALLBACK: Self-hosted Jitsi (install on your own VPS)
        selfHosted: {
            domain: 'YOUR_DOMAIN.com', // Replace with your Jitsi server domain e.g., 'jitsi.yourdomain.com'
            enabled: false // Set to true after you setup your server
        },
        // DEVELOPMENT: Public servers (for testing only - requires login)
        public: {
            domain: 'meet.jit.si',
            enabled: false // Aktif untuk sementara - butuh login Google/GitHub
        }
    };

    // Configuration - will be set from blade
    let config = {
        domain: '',
        roomName: '',
        userName: '',
        userEmail: '',
        csrfToken: '',
        saveRecordingUrl: '',
        uploadChunkUrl: '',
        saveScreenSharingUrl: '',
        sessionEndTime: null,
        useJaaS: false,
        jaasAppId: ''
    };

    // State
    let api = null;
    let screenSharingEvents = [];
    let sessionStartTime = new Date();
    let timerInterval = null;
    let connectionTimeout = null;
    let isConnected = false;
    let currentServer = null;
    let fallbackAttempted = false;

    // Recording state
    let mediaRecorder = null;
    let recordedChunks = [];
    let isRecording = false;
    let recordingStartTime = null;
    let localStream = null;

    /**
     * Determine which server to use
     */
    function selectServer() {
        // Priority: JaaS > Self-hosted > Public
        if (JITSI_SERVERS.jaas.enabled && JITSI_SERVERS.jaas.appId !== 'YOUR_JAAS_APP_ID') {
            return {
                type: 'jaas',
                domain: JITSI_SERVERS.jaas.domain,
                appId: JITSI_SERVERS.jaas.appId
            };
        }

        if (JITSI_SERVERS.selfHosted.enabled && JITSI_SERVERS.selfHosted.domain !== 'YOUR_DOMAIN.com') {
            return {
                type: 'selfHosted',
                domain: JITSI_SERVERS.selfHosted.domain,
                appId: null
            };
        }

        return {
            type: 'public',
            domain: JITSI_SERVERS.public.domain,
            appId: null
        };
    }

    /**
     * Get fallback server
     */
    function getFallbackServer() {
        if (currentServer.type === 'jaas' && JITSI_SERVERS.selfHosted.enabled) {
            return {
                type: 'selfHosted',
                domain: JITSI_SERVERS.selfHosted.domain,
                appId: null
            };
        }

        if (currentServer.type === 'jaas' || currentServer.type === 'selfHosted') {
            return {
                type: 'public',
                domain: JITSI_SERVERS.public.domain,
                appId: null
            };
        }

        return null;
    }

    /**
     * Build room name based on server type
     */
    function buildRoomName(server, baseRoomName) {
        if (server.type === 'jaas' && server.appId) {
            // JaaS requires: AppID/roomName
            return server.appId + '/' + baseRoomName;
        }
        return baseRoomName;
    }

    /**
     * Initialize the video call module
     */
    window.VideoCall = {
        init: function(options) {
            $.extend(config, options);

            // Select appropriate server
            currentServer = selectServer();
            config.domain = currentServer.domain;

            console.log('=== VideoCall Initialization ===');
            console.log('Server Type:', currentServer.type);
            console.log('Domain:', config.domain);
            console.log('Base Room Name:', config.roomName);
            console.log('User Name:', config.userName);

            if (currentServer.type === 'jaas') {
                console.log('JaaS AppID:', currentServer.appId);
                console.log('Full Room:', buildRoomName(currentServer, config.roomName));
            }

            console.log('Full Jitsi URL: https://' + config.domain + '/' + buildRoomName(currentServer, config.roomName));
            console.log('================================');

            // Show room name in UI for debugging
            showRoomInfo();

            // Validate required config
            if (!config.roomName) {
                showError('Room name is not configured. Please contact support.');
                return;
            }

            // Setup UI events
            setupEventListeners();

            // Initialize Jitsi
            initializeJitsi();
        }
    };

    /**
     * Show room info in UI for debugging
     */
    function showRoomInfo() {
        // Remove existing room info
        $('#roomInfo').remove();
        $('#serverInfo').remove();

        // Server type badge color
        var serverColor = currentServer.type === 'jaas' ? 'rgba(76, 201, 240, 0.2)' :
                         currentServer.type === 'selfHosted' ? 'rgba(76, 175, 80, 0.2)' :
                         'rgba(255, 193, 7, 0.2)';

        var serverLabel = currentServer.type === 'jaas' ? '☁️ JaaS' :
                         currentServer.type === 'selfHosted' ? '🖥️ Self-hosted' :
                         '🌐 Public';

        // Add server info
        var serverInfoHtml = '<div id="serverInfo" class="meta-item" style="background: ' + serverColor + '; padding: 5px 10px; border-radius: 5px;">' +
            '<span>' + serverLabel + ' <small>(' + config.domain + ')</small></span>' +
            '</div>';
        $('.session-meta').append(serverInfoHtml);

        // Add room info
        var roomInfoHtml = '<div id="roomInfo" class="meta-item" style="background: rgba(67, 97, 238, 0.2); padding: 5px 10px; border-radius: 5px;">' +
            '<i class="fas fa-link"></i>' +
            '<span>Room: <strong>' + config.roomName + '</strong></span>' +
            '</div>';
        $('.session-meta').append(roomInfoHtml);
    }

    /**
     * Setup jQuery event listeners
     */
    function setupEventListeners() {
        // End session button
        $('#endSession').on('click', function(e) {
            e.preventDefault();
            endSession();
        });

        // Save recording button
        $('#saveRecording').on('click', function(e) {
            e.preventDefault();
            saveRecording();
        });

        // Toggle side panel
        $('#togglePanel').on('click', function() {
            var $panel = $('#sidePanel');
            var $icon = $('#panelIcon');

            $panel.toggleClass('active');
            $icon.toggleClass('fa-chevron-left fa-chevron-right');
        });

        // Retry connection button
        $(document).on('click', '#retryButton', function() {
            retryConnection();
        });

        // Auto-save screen sharing data every 30 seconds
        setInterval(saveFinalScreenSharingData, 30000);

        // Handle page unload
        $(window).on('beforeunload', function() {
            saveFinalScreenSharingData();
        });

        // Auto-end session when time is up
        if (config.sessionEndTime) {
            var timeUntilEnd = new Date(config.sessionEndTime) - new Date();
            if (timeUntilEnd > 0) {
                setTimeout(function() {
                    if (confirm('Session time is up! The session will end automatically.')) {
                        endSession();
                    }
                }, timeUntilEnd);
            }
        }
    }

    /**
     * Initialize Jitsi Meet
     */
    function initializeJitsi() {
        try {
            updateLoadingStatus('Connecting to ' + currentServer.type + ' server...');

            // Clear any existing timeout
            if (connectionTimeout) {
                clearTimeout(connectionTimeout);
            }

            // Clear previous Jitsi instance if exists
            if (api) {
                api.dispose();
                api = null;
            }

            // Clear meet container
            $('#meet').empty();

            // Build the room name based on server type
            var fullRoomName = buildRoomName(currentServer, config.roomName);

            console.log('Connecting to:', currentServer.type);
            console.log('Domain:', config.domain);
            console.log('Full Room Name:', fullRoomName);

            // Jitsi Meet options
            var options = {
                roomName: fullRoomName,
                width: '100%',
                height: '100%',
                parentNode: document.querySelector('#meet'),
                userInfo: {
                    displayName: config.userName,
                    email: config.userEmail
                },
                configOverwrite: {
                    // Disable prejoin for JaaS and self-hosted
                    prejoinPageEnabled: currentServer.type === 'public',
                    prejoinConfig: {
                        enabled: currentServer.type === 'public'
                    },

                    // Start settings
                    startWithAudioMuted: false,
                    startWithVideoMuted: false,

                    // Disable unnecessary features
                    enableWelcomePage: false,
                    enableClosePage: false,
                    disableDeepLinking: true,

                    // Connection
                    enableIceRestart: true,

                    // Language
                    defaultLanguage: 'en'
                },
                interfaceConfigOverwrite: {
                    DEFAULT_BACKGROUND: '#474747',
                    SHOW_JITSI_WATERMARK: false,
                    SHOW_WATERMARK_FOR_GUESTS: false,
                    SHOW_BRAND_WATERMARK: false,
                    SHOW_POWERED_BY: false,
                    SHOW_PROMOTIONAL_CLOSE_PAGE: false,
                    MOBILE_APP_PROMO: false,
                    HIDE_INVITE_MORE_HEADER: true,

                    // Simplified toolbar
                    TOOLBAR_BUTTONS: [
                        'microphone', 'camera', 'desktop', 'fullscreen',
                        'fodeviceselection', 'hangup', 'chat', 'settings',
                        'videoquality', 'filmstrip', 'tileview', 'raisehand'
                    ],

                    SETTINGS_SECTIONS: ['devices', 'language']
                }
            };

            // Create Jitsi instance
            api = new JitsiMeetExternalAPI(config.domain, options);

            // Hide loading immediately after iframe loads
            hideLoadingScreen();
            startSessionTimer();

            // Add event listeners
            api.addEventListener('videoConferenceJoined', handleConferenceJoined);
            api.addEventListener('videoConferenceLeft', handleConferenceLeft);
            api.addEventListener('participantJoined', handleParticipantJoined);
            api.addEventListener('participantLeft', handleParticipantLeft);
            api.addEventListener('readyToClose', handleReadyToClose);

            // Browser support check
            api.addEventListener('browserSupport', function(event) {
                console.log('Browser support:', event);
                if (!event.supported) {
                    showNotification('Your browser may not fully support video calls', 'warning');
                }
            });

            // Error handling - with fallback support
            api.addEventListener('errorOccurred', function(event) {
                console.error('Jitsi error:', event);

                // Check if this is a quota/limit error and try fallback
                var errorMessage = event.error || event.message || '';
                if (errorMessage.toLowerCase().includes('quota') ||
                    errorMessage.toLowerCase().includes('limit') ||
                    errorMessage.toLowerCase().includes('exceeded')) {

                    console.log('Quota/limit error detected, attempting fallback...');
                    tryFallbackServer();
                } else {
                    showNotification('Video call error: ' + (event.error || 'Unknown error'), 'error');
                }
            });

            // Set timeout to detect connection issues (try fallback after 30 seconds)
            connectionTimeout = setTimeout(function() {
                if (!isConnected) {
                    console.log('Connection timeout, trying fallback server...');
                    tryFallbackServer();
                }
            }, 30000);

            console.log('Jitsi API initialized - iframe should be visible now');

        } catch (error) {
            console.error('Error initializing Jitsi Meet:', error);
            tryFallbackServer();
        }
    }

    /**
     * Try fallback server if primary fails
     */
    function tryFallbackServer() {
        if (fallbackAttempted) {
            handleConnectionError('All servers failed. Please try again later.');
            return;
        }

        var fallback = getFallbackServer();
        if (fallback) {
            fallbackAttempted = true;
            console.log('=== SWITCHING TO FALLBACK SERVER ===');
            console.log('From:', currentServer.type, '(' + config.domain + ')');
            console.log('To:', fallback.type, '(' + fallback.domain + ')');
            console.log('====================================');

            showNotification('Switching to backup server...', 'warning');

            currentServer = fallback;
            config.domain = fallback.domain;

            // Update UI
            showRoomInfo();

            // Reinitialize with fallback server
            setTimeout(function() {
                initializeJitsi();
            }, 1000);
        } else {
            handleConnectionError('Failed to connect to video server. Please try again later.');
        }
    }

    /**
     * Handle conference joined
     */
    function handleConferenceJoined(event) {
        console.log('=== CONFERENCE JOINED ===');
        console.log('Event details:', event);
        console.log('Room name:', event.roomName);
        console.log('========================');

        isConnected = true;

        // Clear timeout if any
        if (connectionTimeout) {
            clearTimeout(connectionTimeout);
        }

        // Show success notification
        showNotification('Successfully joined the session! Waiting for other participants...', 'success');

        // Update UI with connection status
        updateParticipantCount();

        // Add screen sharing listener after join
        api.addEventListener('screenSharingStatusChanged', handleScreenSharing);
    }

    /**
     * Handle conference left
     */
    function handleConferenceLeft(event) {
        console.log('Left the conference', event);
        isConnected = false;
        stopSessionTimer();
        showNotification('You have left the session.', 'info');
    }

    /**
     * Handle participant joined
     */
    function handleParticipantJoined(event) {
        console.log('=== PARTICIPANT JOINED ===');
        console.log('Participant ID:', event.id);
        console.log('Display Name:', event.displayName);
        console.log('========================');

        var name = event.displayName || 'Someone';
        showNotification('🎉 ' + name + ' joined the session!', 'success');

        // Update participant count
        updateParticipantCount();
    }

    /**
     * Handle participant left
     */
    function handleParticipantLeft(event) {
        console.log('Participant left:', event);
        var name = event.displayName || 'Someone';
        showNotification(name + ' left the session', 'warning');

        // Update participant count
        updateParticipantCount();
    }

    /**
     * Update participant count in UI
     */
    function updateParticipantCount() {
        if (api) {
            var count = api.getNumberOfParticipants();
            console.log('Current participants in room:', count);

            // Update UI if element exists
            if ($('#participantCount').length === 0) {
                var countHtml = '<div id="participantCount" class="meta-item" style="background: rgba(76, 201, 240, 0.2); padding: 5px 10px; border-radius: 5px;">' +
                    '<i class="fas fa-users"></i>' +
                    '<span>Participants: <strong>' + count + '</strong></span>' +
                    '</div>';
                $('.session-meta').append(countHtml);
            } else {
                $('#participantCount strong').text(count);
            }
        }
    }

    /**
     * Handle ready to close
     */
    function handleReadyToClose() {
        console.log('Ready to close');
        endSession();
    }

    /**
     * Handle screen sharing status change
     */
    function handleScreenSharing(event) {
        if (event.on) {
            saveScreenSharingEvent('started', new Date());
            updateSharingActivity('Screen sharing started');
            showNotification('Screen sharing started', 'info');
        } else {
            saveScreenSharingEvent('stopped', new Date());
            updateSharingActivity('Screen sharing stopped');
            showNotification('Screen sharing stopped', 'info');
        }
    }

    /**
     * Handle connection error
     */
    function handleConnectionError(message) {
        console.error('Connection error:', message);

        // Clear timeout
        if (connectionTimeout) {
            clearTimeout(connectionTimeout);
        }

        // Show error in loading screen
        showError(message);
    }

    /**
     * Retry connection
     */
    function retryConnection() {
        // Reset state
        isConnected = false;

        // Dispose existing API
        if (api) {
            try {
                api.dispose();
            } catch (e) {
                console.error('Error disposing API:', e);
            }
            api = null;
        }

        // Show loading
        showLoading('Retrying connection...');

        // Reinitialize after delay
        setTimeout(function() {
            initializeJitsi();
        }, 1000);
    }

    /**
     * Show loading screen
     */
    function showLoading(message) {
        var $loading = $('#loadingScreen');
        $loading.find('.loading-text').text(message || 'Connecting to session...');
        $loading.find('.error-message').hide();
        $loading.find('.retry-btn').hide();
        $loading.find('.loading-spinner').show();
        $loading.show();
    }

    /**
     * Hide loading screen
     */
    function hideLoadingScreen() {
        $('#loadingScreen').fadeOut(300);
    }

    /**
     * Show error in loading screen
     */
    function showError(message) {
        var $loading = $('#loadingScreen');
        $loading.find('.loading-spinner').hide();
        $loading.find('.loading-text').text('Connection Error');
        $loading.find('.error-message').text(message).show();
        $loading.find('.retry-btn').show();
        $loading.show();
    }

    /**
     * Update loading status
     */
    function updateLoadingStatus(message) {
        $('#loadingScreen .loading-text').text(message);
        console.log('Status:', message);
    }

    /**
     * Show notification
     */
    function showNotification(message, type) {
        type = type || 'success';

        var $notification = $('#notification');
        var $text = $('#notificationText');
        var $icon = $notification.find('i');

        $text.text(message);
        $notification.removeClass('error warning info success');

        // Set icon based on type
        var iconClass = 'fas fa-check-circle';
        if (type === 'error') {
            iconClass = 'fas fa-exclamation-circle';
            $notification.addClass('error');
        } else if (type === 'warning') {
            iconClass = 'fas fa-exclamation-triangle';
            $notification.addClass('warning');
        } else if (type === 'info') {
            iconClass = 'fas fa-info-circle';
            $notification.addClass('info');
        } else {
            $notification.addClass('success');
        }

        $icon.attr('class', iconClass);
        $notification.addClass('show');

        setTimeout(function() {
            $notification.removeClass('show');
        }, 4000);
    }

    /**
     * Update sharing activity list
     */
    function updateSharingActivity(message) {
        var $list = $('#sharingActivity');
        var time = new Date().toLocaleTimeString();

        var $item = $('<li class="activity-item">' +
            message +
            '<div class="activity-time">' + time + '</div>' +
        '</li>');

        // Remove placeholder
        if ($list.find('.no-activity').length > 0) {
            $list.empty();
        }

        $list.prepend($item);

        // Keep only last 10
        if ($list.children().length > 10) {
            $list.children().last().remove();
        }
    }

    /**
     * Start session timer
     */
    function startSessionTimer() {
        sessionStartTime = new Date();

        timerInterval = setInterval(function() {
            var now = new Date();
            var diff = now - sessionStartTime;

            var hours = Math.floor(diff / 3600000);
            var minutes = Math.floor((diff % 3600000) / 60000);
            var seconds = Math.floor((diff % 60000) / 1000);

            var timeStr = pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);
            $('#sessionTimer').text(timeStr);
        }, 1000);
    }

    /**
     * Stop session timer
     */
    function stopSessionTimer() {
        if (timerInterval) {
            clearInterval(timerInterval);
            timerInterval = null;
        }
    }

    /**
     * Pad number with zero
     */
    function pad(num) {
        return num.toString().padStart(2, '0');
    }

    /**
     * End session
     */
    function endSession() {
        if (!confirm('Are you sure you want to end this session? This action cannot be undone.')) {
            return;
        }

        // Save data
        saveFinalScreenSharingData();

        // Stop timer
        stopSessionTimer();

        // Dispose Jitsi
        if (api) {
            try {
                api.dispose();
            } catch (e) {
                console.error('Error disposing API:', e);
            }
        }

        // Submit form
        $('#endSessionForm').submit();
    }

    /**
     * Save recording - Start/Stop recording toggle
     */
    function saveRecording() {
        if (isRecording) {
            stopRecording();
        } else {
            startRecording();
        }
    }

    /**
     * Start recording the session
     */
    async function startRecording() {
        try {
            // Get display media (screen) + audio
            const displayStream = await navigator.mediaDevices.getDisplayMedia({
                video: {
                    displaySurface: 'browser',
                    width: { ideal: 1920 },
                    height: { ideal: 1080 },
                    frameRate: { ideal: 30 }
                },
                audio: true
            });

            // Try to get user audio as well
            let audioStream = null;
            try {
                audioStream = await navigator.mediaDevices.getUserMedia({
                    audio: true,
                    video: false
                });
            } catch (e) {
                console.log('Could not get user audio:', e);
            }

            // Combine streams
            const tracks = [...displayStream.getTracks()];
            if (audioStream) {
                audioStream.getAudioTracks().forEach(track => {
                    tracks.push(track);
                });
            }

            localStream = new MediaStream(tracks);

            // Setup MediaRecorder
            const mimeType = getSupportedMimeType();
            mediaRecorder = new MediaRecorder(localStream, {
                mimeType: mimeType,
                videoBitsPerSecond: 2500000 // 2.5 Mbps
            });

            recordedChunks = [];
            recordingStartTime = new Date();

            mediaRecorder.ondataavailable = function(event) {
                if (event.data && event.data.size > 0) {
                    recordedChunks.push(event.data);
                }
            };

            mediaRecorder.onstop = function() {
                console.log('Recording stopped, processing...');
                processRecording();
            };

            // Handle stream end (user stops sharing)
            displayStream.getVideoTracks()[0].onended = function() {
                if (isRecording) {
                    stopRecording();
                }
            };

            // Start recording
            mediaRecorder.start(1000); // Collect data every second
            isRecording = true;

            // Update UI
            updateRecordingUI(true);
            showNotification('🔴 Recording started!', 'info');
            updateSharingActivity('Recording started');

            console.log('Recording started with mimeType:', mimeType);

        } catch (error) {
            console.error('Error starting recording:', error);

            if (error.name === 'NotAllowedError') {
                showNotification('Recording permission denied. Please allow screen sharing.', 'error');
            } else {
                showNotification('Error starting recording: ' + error.message, 'error');
            }
        }
    }

    /**
     * Stop recording
     */
    function stopRecording() {
        if (mediaRecorder && mediaRecorder.state !== 'inactive') {
            mediaRecorder.stop();
            isRecording = false;

            // Stop all tracks
            if (localStream) {
                localStream.getTracks().forEach(track => track.stop());
            }

            // Update UI
            updateRecordingUI(false);
            showNotification('Recording stopped. Processing...', 'info');
            updateSharingActivity('Recording stopped');
        }
    }

    /**
     * Get supported MIME type for recording
     */
    function getSupportedMimeType() {
        const types = [
            'video/webm;codecs=vp9,opus',
            'video/webm;codecs=vp8,opus',
            'video/webm;codecs=vp9',
            'video/webm;codecs=vp8',
            'video/webm',
            'video/mp4'
        ];

        for (const type of types) {
            if (MediaRecorder.isTypeSupported(type)) {
                return type;
            }
        }
        return 'video/webm';
    }

    /**
     * Process and upload recording
     */
    async function processRecording() {
        if (recordedChunks.length === 0) {
            showNotification('No recording data available', 'warning');
            return;
        }

        showNotification('Processing recording, please wait...', 'info');

        try {
            // Create blob from chunks
            const blob = new Blob(recordedChunks, { type: 'video/webm' });
            const duration = Math.floor((new Date() - recordingStartTime) / 1000);

            console.log('Recording blob size:', blob.size, 'bytes');
            console.log('Recording duration:', duration, 'seconds');

            // If file is small enough, upload directly
            if (blob.size < 50 * 1024 * 1024) { // Less than 50MB
                await uploadRecordingDirect(blob, duration);
            } else {
                // Upload in chunks for large files
                await uploadRecordingChunked(blob, duration);
            }

        } catch (error) {
            console.error('Error processing recording:', error);
            showNotification('Error processing recording: ' + error.message, 'error');

            // Offer download as fallback
            offerDownload();
        }
    }

    /**
     * Upload recording directly (for small files)
     */
    async function uploadRecordingDirect(blob, duration) {
        const formData = new FormData();
        formData.append('_token', config.csrfToken);
        formData.append('recording', blob, 'recording.webm');
        formData.append('duration', duration);

        try {
            const response = await fetch(config.saveRecordingUrl, {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                showNotification('✅ Recording saved successfully!', 'success');
                updateSharingActivity('Recording saved: ' + result.filename);
            } else {
                throw new Error(result.message || 'Upload failed');
            }
        } catch (error) {
            console.error('Upload error:', error);
            showNotification('Upload failed. Offering download instead.', 'warning');
            offerDownload();
        }
    }

    /**
     * Upload recording in chunks (for large files)
     */
    async function uploadRecordingChunked(blob, duration) {
        const chunkSize = 5 * 1024 * 1024; // 5MB chunks
        const totalChunks = Math.ceil(blob.size / chunkSize);
        const filename = 'recording_' + Date.now();

        showNotification('Uploading large recording (' + totalChunks + ' parts)...', 'info');

        for (let i = 0; i < totalChunks; i++) {
            const start = i * chunkSize;
            const end = Math.min(start + chunkSize, blob.size);
            const chunk = blob.slice(start, end);

            // Convert chunk to base64
            const base64Chunk = await blobToBase64(chunk);

            try {
                const response = await fetch(config.uploadChunkUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': config.csrfToken
                    },
                    body: JSON.stringify({
                        chunk: base64Chunk.split(',')[1], // Remove data URL prefix
                        chunkIndex: i,
                        totalChunks: totalChunks,
                        filename: filename,
                        duration: duration
                    })
                });

                const result = await response.json();

                if (!result.success) {
                    throw new Error(result.message || 'Chunk upload failed');
                }

                // Update progress
                const progress = Math.round(((i + 1) / totalChunks) * 100);
                showNotification('Uploading: ' + progress + '%', 'info');

                if (result.complete) {
                    showNotification('✅ Recording saved successfully!', 'success');
                    updateSharingActivity('Recording saved: ' + result.filename);
                }

            } catch (error) {
                console.error('Chunk upload error:', error);
                showNotification('Upload failed at part ' + (i + 1), 'error');
                offerDownload();
                return;
            }
        }
    }

    /**
     * Convert blob to base64
     */
    function blobToBase64(blob) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.onloadend = () => resolve(reader.result);
            reader.onerror = reject;
            reader.readAsDataURL(blob);
        });
    }

    /**
     * Offer download as fallback
     */
    function offerDownload() {
        if (recordedChunks.length === 0) return;

        const blob = new Blob(recordedChunks, { type: 'video/webm' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'recording_' + config.roomName + '_' + Date.now() + '.webm';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);

        showNotification('Recording downloaded to your device', 'success');
    }

    /**
     * Update recording UI
     */
    function updateRecordingUI(recording) {
        var $btn = $('#saveRecording');

        if (recording) {
            $btn.html('<i class="fas fa-stop"></i> Stop Recording');
            $btn.addClass('recording-active');

            // Add recording indicator
            if ($('#recordingIndicator').length === 0) {
                var indicator = '<div id="recordingIndicator" class="recording-indicator">' +
                    '<span class="recording-dot"></span> REC' +
                    '</div>';
                $('.session-header').append(indicator);
            }
        } else {
            $btn.html('<i class="fas fa-video"></i> Start Recording');
            $btn.removeClass('recording-active');
            $('#recordingIndicator').remove();
        }
    }

    /**
     * Save screen sharing event
     */
    function saveScreenSharingEvent(action, timestamp) {
        screenSharingEvents.push({
            action: action,
            timestamp: timestamp.toISOString(),
            user: config.userName
        });
    }

    /**
     * Save final screen sharing data
     */
    function saveFinalScreenSharingData() {
        if (screenSharingEvents.length === 0) {
            return;
        }

        $.ajax({
            url: config.saveScreenSharingUrl,
            method: 'POST',
            data: {
                _token: config.csrfToken,
                screen_data: screenSharingEvents
            },
            success: function(response) {
                console.log('Screen sharing data saved');
            },
            error: function(xhr, status, error) {
                console.error('Error saving screen sharing data:', error);
            }
        });
    }

})(jQuery);
