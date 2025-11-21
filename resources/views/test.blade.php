<!-- Updated version without IDs, using classes and data attributes for reusability -->
<div class="speaking-question" data-q="1">
    <div class="sq-navigation">
        <div class="nav-buttons">
            <button class="sq-prev" disabled>Previous</button>
            <button class="sq-next">Next</button>
        </div>
        <div class="sq-text">
            <div class="video-container">
                <div class="video-player">
                    <h3>Instruction Video</h3>
                    <div class="video-wrapper">
                        <div class="video-placeholder">
                            <video class="video-element" data-role="instruction-video">
                                <source src="{{ asset('own_assets/videos/XJ3XOcvqPbgdZwyl-1.mp4') }}" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                        </div>
                    </div>
                    <div class="video-controls">
                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                        <button class="pause-btn" disabled><i class="fas fa-pause"></i> Pause</button>
                    </div>
                </div>

                <div class="recorder-container">
                    <h3>Answer Recorder</h3>
                    <div class="recorder-wrapper">
                        <div class="recorder-placeholder">
                            <video class="preview-video" autoplay muted playsinline></video>
                            <div class="recorder-placeholder">
                                <i class="fas fa-video"></i>
                                <p>Camera Preview</p>
                            </div>
                        </div>
                    </div>
                    <div class="recorder-controls">
                        <button class="record-btn"><i class="fas fa-video"></i> Start Recording</button>
                        <button class="stop-btn" disabled><i class="fas fa-stop"></i> Stop</button>
                    </div>
                    <div class="recording-indicator">
                        <div class="recording-dot"></div>
                        <span>Recording in progress...</span>
                    </div>
                    <div class="timer" data-timer>00:00</div>

                    <div class="recorded-video" style="display:none; margin-top:15px;">
                        <h4>Recorded Video:</h4>
                        <video class="recorded-video-element" controls></video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sq-submit">
        <button class="sq-submit-btn">Submit</button>
    </div>
</div>

<script>
    // Updated script to support multiple .speaking-question instances

    document.querySelectorAll('.speaking-question').forEach((container) => {
        // Video controls
        const video = container.querySelector('video[data-role="instruction-video"]') || container
            .querySelector('#myVideo');
        const playBtn = container.querySelector('.play-btn');
        const pauseBtn = container.querySelector('.pause-btn');

        if (video && playBtn && pauseBtn) {
            playBtn.addEventListener('click', () => {
                video.play();
                playBtn.disabled = true;
                pauseBtn.disabled = false;
            });

            pauseBtn.addEventListener('click', () => {
                video.pause();
                playBtn.disabled = false;
                pauseBtn.disabled = true;
            });

            video.addEventListener('ended', () => {
                playBtn.disabled = false;
                pauseBtn.disabled = true;
            });
        }

        // Recorder
        const recordBtn = container.querySelector('.record-btn');
        const stopBtn = container.querySelector('.stop-btn');
        const indicator = container.querySelector('.recording-indicator');
        const timerDisplay = container.querySelector('.timer');
        const preview = container.querySelector('.preview-video') || container.querySelector('#preview');
        const recordedVideo = container.querySelector('.recorded-video-element') || container.querySelector(
            '#recordedVideo');
        const recordedContainer = container.querySelector('.recorded-video');

        let mediaRecorder;
        let recordedChunks = [];
        let timerInterval;
        let seconds = 0;
        let currentStream = null;

        async function initCamera() {
            try {
                currentStream = await navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: true
                });
                preview.srcObject = currentStream;
                return currentStream;
            } catch (err) {
                alert('Camera or microphone access denied.');
                console.error(err);
            }
        }

        function stopCamera() {
            if (currentStream) {
                currentStream.getTracks().forEach(track => track.stop());
                preview.srcObject = null;
            }
        }

        if (recordBtn && stopBtn) {
            recordBtn.addEventListener('click', async () => {
                const stream = await initCamera();
                recordedChunks = [];
                mediaRecorder = new MediaRecorder(stream);

                mediaRecorder.ondataavailable = event => {
                    if (event.data.size > 0) recordedChunks.push(event.data);
                };

                mediaRecorder.onstop = () => {
                    const blob = new Blob(recordedChunks, {
                        type: 'video/webm'
                    });
                    const url = URL.createObjectURL(blob);
                    recordedVideo.src = url;
                    if (recordedContainer) recordedContainer.style.display = 'block';
                    stopCamera();
                };

                mediaRecorder.start();
                recordBtn.disabled = true;
                stopBtn.disabled = false;
                if (indicator) indicator.classList.add('active');

                seconds = 0;
                timerInterval = setInterval(() => {
                    seconds++;
                    const min = Math.floor(seconds / 60);
                    const sec = seconds % 60;
                    timerDisplay.textContent =
                        `${min.toString().padStart(2, '0')}:${sec.toString().padStart(2, '0')}`;
                }, 1000);
            });

            stopBtn.addEventListener('click', () => {
                if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                    mediaRecorder.stop();
                }

                recordBtn.disabled = false;
                stopBtn.disabled = true;
                if (indicator) indicator.classList.remove('active');
                clearInterval(timerInterval);
            });
        }
    });

    (function() {
        const MAX_RECORD_SECONDS = 10;

        document.querySelectorAll('.speaking-question').forEach(container => {

            // === Inject Progress Bar & Warning Area ===
            if (!container.querySelector('.record-progress')) {
                const bar = document.createElement('div');
                bar.className = 'record-progress';
                bar.style.cssText =
                    'width:0%;height:6px;background:#4caf50;margin-top:8px;transition:width 0.3s ease;';
                container.querySelector('.recorder-container').prepend(bar);
            }

            if (!container.querySelector('.record-warning')) {
                const warn = document.createElement('div');
                warn.className = 'record-warning';
                warn.style.cssText = 'margin-top:6px;font-weight:bold;color:#333;display:none;';
                warn.innerText = '';
                container.querySelector('.recorder-container').append(warn);
            }

            const progressBar = container.querySelector('.record-progress');
            const warningLabel = container.querySelector('.record-warning');


            // === Beep Sounds ===
            const beep1 = new Audio("https://actions.google.com/sounds/v1/alarms/beep_short.ogg");
            const beep2 = new Audio("https://actions.google.com/sounds/v1/alarms/beep_short.ogg");
            const beep3 = new Audio("https://actions.google.com/sounds/v1/alarms/beep_short.ogg");


            // === Original Script Elements ===

            const instructionVideo = container.querySelector('.video-player video');
            const playBtn = container.querySelector('.play-btn');
            const pauseBtn = container.querySelector('.pause-btn');

            const recordBtn = container.querySelector('.record-btn');
            const stopBtn = container.querySelector('.stop-btn');
            const indicator = container.querySelector('.recording-indicator');
            const timerDisplay = container.querySelector('.timer');
            const preview = container.querySelector('.preview-video');
            const recordedVideo = container.querySelector('.recorded-video-element');
            const recordedContainer = container.querySelector('.recorded-video');

            let mediaRecorder = null;
            let currentStream = null;
            let timerInterval = null;
            let seconds = 0;
            let isRecording = false;
            let recordedChunks = [];



            // === Timer Helpers ===

            function resetTimerDisplay() {
                seconds = 0;
                timerDisplay.textContent = '00:00';
                progressBar.style.width = '0%';
                warningLabel.style.display = 'none';
            }

            function startTimer() {
                resetTimerDisplay();

                timerInterval = setInterval(() => {
                    seconds++;
                    const min = Math.floor(seconds / 60).toString().padStart(2, '0');
                    const sec = (seconds % 60).toString().padStart(2, '0');
                    timerDisplay.textContent = `${min}:${sec}`;

                    // Progress bar update
                    const pct = Math.min((seconds / MAX_RECORD_SECONDS) * 100, 100);
                    progressBar.style.width = pct + '%';

                    // Last 10 seconds countdown
                    if (MAX_RECORD_SECONDS - seconds <= 10 && MAX_RECORD_SECONDS - seconds > 0) {
                        warningLabel.style.display = 'block';
                        warningLabel.style.color = 'red';
                        warningLabel.innerText =
                            `Recording stops in ${MAX_RECORD_SECONDS - seconds} seconds...`;
                    }

                    // Beep last 3 seconds
                    if (MAX_RECORD_SECONDS - seconds === 3) beep1.play();
                    if (MAX_RECORD_SECONDS - seconds === 2) beep2.play();
                    if (MAX_RECORD_SECONDS - seconds === 1) beep3.play();

                    // Auto-stop
                    if (seconds >= MAX_RECORD_SECONDS) {
                        stopRecordingFlow();
                    }
                }, 1000);
            }

            function stopTimer() {
                clearInterval(timerInterval);
                timerInterval = null;
            }


            // === Camera ===

            async function initCamera() {
                currentStream = await navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: true
                });
                preview.srcObject = currentStream;
                return currentStream;
            }

            function stopCamera() {
                if (currentStream) {
                    currentStream.getTracks().forEach(t => t.stop());
                    currentStream = null;
                }
                preview.srcObject = null;
            }


            // === Recording Flow ===

            async function startRecordingFlow() {
                if (isRecording) return;

                const stream = await initCamera();
                recordedChunks = [];

                mediaRecorder = new MediaRecorder(stream);

                mediaRecorder.ondataavailable = e => {
                    if (e.data.size > 0) recordedChunks.push(e.data);
                };

                mediaRecorder.onstop = () => {
                    const blob = new Blob(recordedChunks, {
                        type: 'video/webm'
                    });
                    const url = URL.createObjectURL(blob);
                    recordedVideo.src = url;
                    recordedContainer.style.display = 'block';
                    stopCamera();
                };

                mediaRecorder.start();
                isRecording = true;

                // UI updates
                recordBtn.disabled = true;
                stopBtn.disabled = false;
                indicator.classList.add('active');

                startTimer();
            }


            function stopRecordingFlow() {
                if (!isRecording) return;

                if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                    mediaRecorder.stop();
                }

                isRecording = false;
                recordBtn.disabled = false;
                stopBtn.disabled = true;
                indicator.classList.remove('active');

                stopTimer();
            }


            // === Event Bind ===

            recordBtn.addEventListener('click', startRecordingFlow);
            stopBtn.addEventListener('click', stopRecordingFlow);

        });
    })();
</script>
