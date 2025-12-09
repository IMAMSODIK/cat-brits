<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mock Test Session - {{ $mockTest->title }}</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Jitsi Meet External API -->
    <script src='https://meet.jit.si/external_api.js'></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --success-color: #4cc9f0;
            --danger-color: #f72585;
            --warning-color: #f8961e;
            --dark-bg: #1a1a1a;
            --header-bg: #2d2d2d;
            --card-bg: #363636;
            --text-light: #ffffff;
            --text-muted: #b0b0b0;
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--dark-bg);
            color: var(--text-light);
            overflow: hidden;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, var(--header-bg), #252525);
            padding: 15px 25px;
            border-bottom: 3px solid var(--primary-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            position: relative;
            flex-wrap: wrap;
            gap: 10px;
        }

        .session-info {
            flex: 1;
            min-width: 200px;
        }

        .session-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .session-title i {
            color: var(--accent-color);
        }

        .session-meta {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .meta-item i {
            color: var(--accent-color);
            width: 16px;
        }

        .user-info {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            backdrop-filter: blur(10px);
        }

        .user-info i {
            color: var(--success-color);
        }

        .controls {
            display: flex;
            gap: 12px;
        }

        .control-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
            min-width: 120px;
            justify-content: center;
        }

        .control-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .end-btn {
            background: linear-gradient(135deg, var(--danger-color), #d00000);
            color: white;
        }

        .save-btn {
            background: linear-gradient(135deg, var(--success-color), #0096c7);
            color: white;
        }

        .timer-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            backdrop-filter: blur(10px);
        }

        .timer {
            font-weight: 600;
            color: var(--text-light);
            font-family: 'Courier New', monospace;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            display: flex;
            position: relative;
            overflow: hidden;
        }

        #meet {
            width: 100%;
            height: 100%;
            background: #000;
        }

        /* Side Panel */
        .side-panel {
            width: 300px;
            background: var(--header-bg);
            border-left: 1px solid #444;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 100;
        }

        .side-panel.active {
            transform: translateX(0);
        }

        .panel-section {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 15px;
        }

        .panel-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .panel-title i {
            color: var(--accent-color);
        }

        .activity-list {
            list-style: none;
            max-height: 200px;
            overflow-y: auto;
            padding: 0;
            margin: 0;
        }

        .activity-item {
            padding: 8px 0;
            border-bottom: 1px solid #444;
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-time {
            font-size: 0.75rem;
            color: var(--accent-color);
            margin-top: 2px;
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, var(--success-color), #0096c7);
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 10000;
            transform: translateX(150%);
            transition: transform 0.3s ease;
        }

        .notification.show {
            transform: translateX(0);
        }

        .notification.error {
            background: linear-gradient(135deg, var(--danger-color), #d00000);
        }

        .notification.warning {
            background: linear-gradient(135deg, var(--warning-color), #e85d04);
        }

        .notification.info {
            background: linear-gradient(135deg, var(--accent-color), var(--primary-color));
        }

        /* Toggle Panel Button */
        .toggle-panel {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 101;
            transition: var(--transition);
        }

        .toggle-panel:hover {
            background: var(--secondary-color);
            transform: translateY(-50%) scale(1.1);
        }

        /* Loading Screen */
        .loading-screen {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--dark-bg);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            gap: 20px;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 4px solid #333;
            border-top: 4px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-text {
            font-size: 1.1rem;
            color: var(--text-muted);
        }

        .error-message {
            color: var(--danger-color);
            text-align: center;
            max-width: 400px;
            padding: 0 20px;
            display: none;
        }

        .retry-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            display: none;
        }

        .retry-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 12px 15px;
            }

            .session-title {
                font-size: 1.1rem;
            }

            .control-btn {
                padding: 8px 15px;
                font-size: 0.8rem;
                min-width: auto;
            }

            .user-info,
            .timer-container {
                padding: 6px 12px;
                font-size: 0.85rem;
            }

            .side-panel {
                width: 100%;
            }

            .controls {
                width: 100%;
                justify-content: center;
            }
        }

        /* Hidden Form */
        #endSessionForm {
            display: none;
        }

        /* Recording Button Active State */
        .save-btn.recording-active {
            background: linear-gradient(135deg, #ff0000, #cc0000);
            animation: pulse-recording 1.5s infinite;
        }

        @keyframes pulse-recording {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.7);
            }
            50% {
                box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
            }
        }

        /* Recording Indicator */
        .recording-indicator {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(255, 0, 0, 0.9);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 1001;
            animation: pulse-recording 1.5s infinite;
        }

        .recording-dot {
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 50%;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="session-info">
                <div class="session-title">
                    <i class="fas fa-video"></i>
                    {{ $mockTest->title }}
                </div>
                <div class="session-meta">
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Duration: {{ $mockTest->duration_minutes }} minutes</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-door-open"></i>
                        <span>Room: {{ $mockTest->jitsi_room_name ?? 'Not assigned' }}</span>
                    </div>
                </div>
            </div>

            <div class="user-info">
                <i class="fas fa-user-circle"></i>
                <span>{{ auth()->user()->name }}</span>
            </div>

            <div class="timer-container">
                <i class="fas fa-stopwatch"></i>
                <span class="timer" id="sessionTimer">00:00:00</span>
            </div>

            <div class="controls">
                <button id="saveRecording" class="control-btn save-btn">
                    <i class="fas fa-video"></i>
                    <span>Start Recording</span>
                </button>
                <button id="endSession" class="control-btn end-btn">
                    <i class="fas fa-phone-slash"></i>
                    <span>End</span>
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Loading Screen -->
            <div class="loading-screen" id="loadingScreen">
                <div class="loading-spinner"></div>
                <p class="loading-text">Connecting to session...</p>
                <p class="error-message"></p>
                <button class="retry-btn" id="retryButton">
                    <i class="fas fa-redo me-2"></i> Retry Connection
                </button>
            </div>

            <!-- Jitsi Meet Container -->
            <div id="meet"></div>

            <!-- Toggle Panel Button -->
            <button class="toggle-panel" id="togglePanel">
                <i class="fas fa-chevron-left" id="panelIcon"></i>
            </button>

            <!-- Side Panel -->
            <div class="side-panel" id="sidePanel">
                <div class="panel-section">
                    <div class="panel-title">
                        <i class="fas fa-share-square"></i>
                        Screen Sharing Activity
                    </div>
                    <ul class="activity-list" id="sharingActivity">
                        <li class="activity-item no-activity">No screen sharing activity yet</li>
                    </ul>
                </div>

                <div class="panel-section">
                    <div class="panel-title">
                        <i class="fas fa-info-circle"></i>
                        Session Information
                    </div>
                    <div class="activity-item">
                        <strong>Teacher:</strong> {{ $mockTest->teacher->name }}
                    </div>
                    <div class="activity-item">
                        <strong>Student:</strong> {{ $mockTest->student->name }}
                    </div>
                    @if ($mockTest->scheduled_time)
                        <div class="activity-item">
                            <strong>Scheduled End:</strong>
                            {{ $mockTest->scheduled_time->addMinutes($mockTest->duration_minutes)->format('M d, Y H:i') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Notification -->
        <div class="notification" id="notification">
            <i class="fas fa-check-circle"></i>
            <span id="notificationText">Operation completed successfully!</span>
        </div>

        <!-- Hidden Form -->
        <form id="endSessionForm" action="{{ route('mock-test.end', $mockTest) }}" method="POST">
            @csrf
        </form>
    </div>

    <!-- Video Call JS -->
    <script src="{{ asset('own_assets/scripts/video-call.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Initialize video call
            VideoCall.init({
                domain: 'meet.jit.si',
                roomName: '{{ $mockTest->jitsi_room_name ?? '' }}',
                userName: '{{ auth()->user()->name }}',
                userEmail: '{{ auth()->user()->email }}',
                csrfToken: '{{ csrf_token() }}',
                saveRecordingUrl: '{{ route('mock-test.save-recording', $mockTest) }}',
                uploadChunkUrl: '{{ route('mock-test.upload-chunk', $mockTest) }}',
                saveScreenSharingUrl: '{{ route('mock-test.save-screen-sharing', $mockTest) }}',
                @if ($mockTest->scheduled_time)
                    sessionEndTime: '{{ $mockTest->scheduled_time->addMinutes($mockTest->duration_minutes)->toISOString() }}'
                @else
                    sessionEndTime: null
                @endif
            });
        });
    </script>
</body>

</html>
