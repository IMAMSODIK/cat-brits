<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>{{ $set->name }} | {{ ucfirst($section) }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        :root {
            --bg: #ffffff;
            --text: #0f172a;
            --muted: #64748b;
            --primary: #2563eb;
            --danger: #ef4444;
            --ring: rgba(37, 99, 235, 0.35);
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", sans-serif;
        }

        button {
            align-items: center;
            /* sejajarkan ikon dan teks di tengah vertikal */
            justify-content: center;
            /* pusatkan isi tombol */
            gap: 8px;
            /* jarak antara ikon dan teks */
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .app-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: #4274BA;
            box-shadow: var(--shadow);
            padding: max(20px, env(safe-area-inset-top)) 12px 20px 12px;
        }

        .header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            color: #4f46e5;
            font-weight: 700;
            letter-spacing: 0.5px;
            user-select: none;
        }

        .title-wrap {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .app-title {
            font-size: 14px;
            font-weight: 600;
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .app-subtitle {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 0 0 auto;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            border: 1px solid #e5e7eb;
            background: #fff;
            color: var(--text);
            border-radius: 10px;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.06s ease, box-shadow 0.12s ease, border-color 0.12s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            touch-action: manipulation;
        }

        .btn:active {
            transform: translateY(1px) scale(0.99);
        }

        .btn:focus-visible {
            outline: 2px solid var(--ring);
            outline-offset: 2px;
        }

        .btn-ghost {
            border-color: #e5e7eb;
            background: #fff;
        }

        .btn-primary {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
        }

        .btn-danger {
            background: var(--danger);
            border-color: var(--danger);
            color: #fff;
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            padding: 0;
            border-radius: 10px;
        }

        .timer {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-variant-numeric: tabular-nums;
            font-feature-settings: "tnum" 1, "ss01" 1;
            padding: 8px 12px;
            border-radius: 10px;
            background: #f8fafc;
            color: var(--text);
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            min-width: 84px;
            justify-content: center;
            font-weight: 700;
        }

        .timer.danger {
            background: #fef2f2;
            color: #b91c1c;
            border-color: #fecaca;
        }

        .timer .fa-clock {
            color: var(--primary);
        }

        .timer.danger .fa-clock {
            color: #ef4444;
        }

        /* Responsive tweaks */
        @media (max-width: 420px) {
            .app-title {
                font-size: 13px;
            }

            .app-subtitle {
                display: none;
            }

            .btn span.label {
                display: none;
            }

            .btn {
                padding: 8px 10px;
            }

            .timer {
                min-width: 76px;
                padding: 8px 10px;
            }
        }

        .resizable-grid {
            display: grid;
            grid-template-columns: minmax(250px, 1fr) 6px minmax(250px, 1fr);
            /* kiri - handle - kanan */
            gap: 0;
            align-items: stretch;
            height: 100%;
            /* opsional, biar penuh */
        }

        .resize-handle {
            background: #e5e7eb;
            cursor: col-resize;
            width: 6px;
            transition: background 0.2s;
        }

        .resize-handle:hover {
            background: #cbd5e1;
        }
    </style>

    <!-- style informasi ujian (di bawah header) -->
    <style>
        .session-info {
            background: #f8fafc;
            border-top: 1px solid #111113;
            border-bottom: 1px solid #e5e7eb;
            padding: 10px 12px;
        }

        .session-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px 12px;
        }

        .kv.right {
            text-align: right;
        }

        .kv {
            min-width: 0;
        }

        .k {
            font-size: 11px;
            color: #64748b;
            line-height: 1.1;
            margin-bottom: 2px;
        }

        .v {
            font-size: 13px;
            font-weight: 600;
            color: #0f172a;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 420px) {
            .session-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- style bagian part soal -->
    <style>
        .parts-section {
            padding: 10px 12px 0 12px !important;
            box-sizing: border-box;
        }

        /* Opsional: pastikan konten panel tidak menempel ke tepi */
        .parts-section .x-panels {
            margin-top: 10px;
            margin-right: 0;
            /* biarkan ikut padding parent */
        }

        /* Scroll container = x-tabs */
        .x-tabs {
            display: inline-flex;
            /* baris horizontal */
            flex-wrap: nowrap;
            /* jangan pindah baris */
            gap: 8px;
            width: 100%;
            padding: 8px 12px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);

            overflow-x: auto;
            /* inti scroll horizontal */
            overflow-y: hidden;
            white-space: nowrap;
            /* cegah wrap */
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x proximity;
            -ms-overflow-style: none;
            scrollbar-width: thin;

            position: relative;
            /* untuk edge hint */
        }

        .x-tabs::-webkit-scrollbar {
            height: 6px;
        }

        .x-tabs::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 999px;
        }

        .x-tabs::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Tab pill */
        .x-tab {
            flex: 0 0 auto;
            /* tiap tab lebar kontennya, tidak menyusut */
            scroll-snap-align: start;
            border: 1px solid #e5e7eb;
            background: #f8fafc;
            color: #0f172a;
            border-radius: 999px;
            padding: 10px 14px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: .2px;
            cursor: pointer;
            transition: background .15s ease, color .15s ease, border-color .15s ease, transform .06s ease;
            user-select: none;
        }

        .x-tab:hover {
            border-color: #cbd5e1;
            background: #f1f5f9;
        }

        .x-tab:active {
            transform: translateY(1px);
        }

        .x-tab.is-active {
            color: #0b5dd7;
            background: #e8f0ff;
            border-color: #c7ddff;
        }

        /* Edge shadow hint (kiri/kanan) langsung di x-tabs */
        .x-tabs::before,
        .x-tabs::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 20px;
            pointer-events: none;
            opacity: 0;
            transition: opacity .15s ease;
        }

        .x-tabs::before {
            left: 0;
            background: linear-gradient(90deg, #fff 0%, rgba(255, 255, 255, 0) 100%);
        }

        .x-tabs::after {
            right: 0;
            background: linear-gradient(270deg, #fff 0%, rgba(255, 255, 255, 0) 100%);
        }

        .x-tabs.has-left::before {
            opacity: 1;
        }

        .x-tabs.has-right::after {
            opacity: 1;
        }

        /* Panels */
        .x-panels {
            margin-top: 10px;
        }

        .x-panel {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
        }

        .x-panel[hidden] {
            display: none;
        }

        .x-panel.is-open {
            display: block;
        }

        .x-panel-inner {
            padding: 12px;
            font-size: 14px;
            color: #0f172a;
        }

        /* Mobile tuning */
        @media (max-width: 768px) {
            .x-tab {
                padding: 10px 12px;
                font-size: 14px;
            }
        }

        @media (max-width: 420px) {
            .x-tab {
                padding: 10px 10px;
                font-size: 13px;
            }
        }
    </style>

    <style>
        /* Panel Styling */
        .x-panel {
            max-width: 1000px;
            margin: 0 auto;
            padding: 1rem;
        }

        /* Progress Dots */
        .progress-dots {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin: 1rem 0;
        }

        .dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #ccc;
            transition: background 0.3s;
        }

        .dot.active {
            background: #007bff;
            /* biru utk soal aktif */
        }

        .dot.completed {
            background: #28a745;
            /* hijau kalau sudah record/upload */
        }


        /* Navigation */
        .sq-navigation {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .nav-buttons {
            display: flex;
            justify-content: space-between;
            gap: 0.5rem;
        }

        .sq-navigation button {
            flex: 1;
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 8px;
            background: #007bff;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sq-navigation button:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .sq-navigation button:hover:not(:disabled) {
            background: #0056b3;
        }

        .sq-text {
            text-align: center;
            font-size: 1.1rem;
        }

        /* Actions */
        .sq-actions {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin: 1rem 0;
        }

        .sq-record {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 50px;
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .sq-record:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }

        .sq-record.recorded {
            background: #28a745;
        }

        /* Submit */
        .sq-submit {
            text-align: center !important;
        }

        .sq-submit-btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            background: #28a745;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sq-submit-btn:hover {
            background: #218838;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .sq-navigation .nav-buttons {
                flex-direction: row;
            }

            .sq-text {
                font-size: 1rem;
            }

            .sq-actions {
                flex-direction: column;
            }

            .sq-record {
                width: 100%;
            }
        }

        .sq-upload-label {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .sq-upload-label:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        .sq-upload-label.uploaded {
            background: #28a745;
        }

        .q-item {
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 0 0 0 10px;
            margin-bottom: 30px;
        }
    </style>

    <style>
        .video-container {
            display: flex;
            gap: 20px;
            margin: 15px 0;
        }

        .video-player,
        .recorder-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .video-wrapper,
        .recorder-wrapper {
            background-color: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        /* .video-placeholder,
        .recorder-placeholder {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #666;
        }

        .video-placeholder i,
        .recorder-placeholder i {
            font-size: 48px;
            margin-bottom: 10px;
            color: #4274BA;
        } */

        .recorder-placeholder,
        .video-placeholder {
            width: 100%;
            aspect-ratio: 16 / 9;
            position: relative;
            background: #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .preview-video,
        .video-element {
            width: 100%;
            height: 100%;
            object-fit: contain !important;
            background: black;
        }

        .placeholder-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #555;
        }


        .video-controls,
        .recorder-controls {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 15px;
        }

        .video-controls button,
        .recorder-controls button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #4274BA;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .video-controls button:hover,
        .recorder-controls button:hover {
            background: #2c5282;
            transform: translateY(-2px);
        }

        .recorder-controls .record-btn {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
        }

        .recorder-controls .record-btn:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }

        .recorder-controls .stop-btn {
            background: #dc3545;
        }

        .recorder-controls .stop-btn:hover {
            background: #c82333;
        }

        .recording-indicator {
            display: none;
            align-items: center;
            gap: 8px;
            color: #dc3545;
            font-weight: 600;
            margin-top: 10px;
        }

        .recording-indicator.active {
            display: flex;
        }

        .recording-dot {
            width: 12px;
            height: 12px;
            background-color: #dc3545;
            border-radius: 50%;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        .timer {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .video-container {
                flex-direction: column;
            }

            .video-player,
            .recorder-container {
                width: 100%;
            }
        }

        @media (max-width: 480px) {

            .video-controls button,
            .recorder-controls button {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .sq-submit-btn {
                padding: 10px 25px;
                font-size: 1rem;
            }
        }

        video {
            width: 100%;
            height: auto;
            display: block;
        }

        .recorded-video {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 2px dashed #4274BA;
            text-align: center;
            display: block;
            width: fit-content;
            margin: 20px auto;
        }

        .recorded-video h4 {
            color: #4274BA;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .recorded-video video {
            width: 100%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>


<body>
    <header class="app-header" role="banner">
        <div class="header-row" aria-label="Header CAT Bahasa Inggris">
            <div class="brand">
                <div class="logo" aria-hidden="true">
                    <div class="logo" aria-hidden="true">
                        <img class="" style="width: 70px;margin-left: 50px"
                            src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="actions">
                <button id="infoBtn" class="btn btn-ghost icon-btn" aria-label="Informasi">
                    <i class="fa-solid fa-circle-info"></i>
                </button>

                {{-- <div id="timer" class="timer" aria-live="polite" aria-label="Sisa waktu">
                    <i class="fa-regular fa-clock"></i>
                    <span id="timeText">00:00</span>
                </div> --}}

                <button id="doneBtn" class="btn btn-danger">
                    <i class="fa-solid fa-flag-checkered"></i>
                    <span class="label">Close</span>
                </button>
            </div>
        </div>
    </header>

    <section class="session-info" aria-label="Keterangan Sesi">
        <div class="session-grid">
            <div class="kv">
                <div class="k">Set Information</div>
                <div class="v" id="siName">{{ $set->name }} - {{ ucfirst($section) }}</div>
            </div>
            <div class="kv right">
                <div class="k">User</div>
                <div class="v" id="siUser">{{ auth()->user()->name }}</div>
            </div>
        </div>
    </section>


    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">Part 1</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Part 2</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Part 3</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">

                    <fieldset class="q-item">
                        <p><b>Questions 1-4</b></p>
                    </fieldset>

                    <div class="progress-dots"></div>

                    <div class="speaking-question" data-q="1" data-part="1">
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
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 1.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                    <div class="speaking-question" data-q="2" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 2.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                    <div class="speaking-question" data-q="3" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 3.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                    <div class="speaking-question" data-q="4" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 4.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                    <div class="speaking-question" data-q="5" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 5.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                    <div class="speaking-question" data-q="6" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 6.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                    <div class="speaking-question" data-q="7" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 7.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                    <div class="speaking-question" data-q="8" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next" disabled>Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C10-t1/Part 1 - Question 8.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
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
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
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

                </div>
            </div>

            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>

                <fieldset class="q-item">
                    <p><b>Questions 1-1</b></p>
                </fieldset>

                <div class="progress-dots" style="display: none"></div>

                <div class="speaking-question" data-q="1" data-part="2">
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev" disabled>Previous</button>
                            <button class="sq-next" disabled>Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C10-t1/PART 2.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
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
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
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
            </div>

            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Part 3</div>

                <fieldset class="q-item">
                    <p><b>Questions 1-6</b></p>
                </fieldset>

                <div class="progress-dots"></div>

                <div class="speaking-question" data-q="1" data-part="3">
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
                                                <source
                                                    src="{{ asset('own_assets/videos/C10-t1/Part 3 - Question 1.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
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
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
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

                <div class="speaking-question" data-q="2" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C10-t1/Part 3 - Question 2.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
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
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
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

                <div class="speaking-question" data-q="3" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C10-t1/Part 3 - Question 3.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
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
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
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

                <div class="speaking-question" data-q="4" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C10-t1/Part 3 - Question 4.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
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
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
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

                <div class="speaking-question" data-q="5" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C10-t1/Part 3 - Question 5.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
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
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
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

                <div class="speaking-question" data-q="6" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next" disabled>Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C10-t1/Part 3 - Question 6.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
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
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
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
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        (function() {
            // let remaining = 0;
            // let t = null;
            // const el = document.getElementById('timeText');
            // const wrap = document.getElementById('timer');

            // function format(mmss) {
            //     const m = Math.floor(mmss / 60);
            //     const s = mmss % 60;
            //     return String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
            // }

            // function tick() {
            //     if (remaining <= 0) {
            //         clearInterval(t);
            //         t = null;
            //         el.textContent = '00:00';
            //         wrap.classList.add('danger');
            //         document.getElementById('doneBtn').disabled = true;
            //         document.getElementById('doneBtn').style.opacity = 0.7;
            //         document.getElementById('doneBtn').style.cursor = 'not-allowed';
            //         // TODO: panggil handler waktu habis (auto-submit/alert) bila diperlukan
            //         return;
            //     }
            //     remaining -= 1;
            //     el.textContent = format(remaining);
            //     // Kedipkan danger saat < 60 detik
            //     if (remaining <= 60) {
            //         wrap.classList.add('danger');
            //     }
            // }

            // function startCountdown(seconds) {
            //     if (t) clearInterval(t);
            //     remaining = Math.max(0, Math.floor(seconds));
            //     el.textContent = format(remaining);
            //     wrap.classList.toggle('danger', remaining <= 60);
            //     document.getElementById('doneBtn').disabled = false;
            //     document.getElementById('doneBtn').style.opacity = 1;
            //     document.getElementById('doneBtn').style.cursor = 'pointer';
            //     t = setInterval(tick, 1000);
            // }

            // // Public API (opsional)
            // window.CATHeader = {
            //     startCountdown
            // };

            // Events
            document.getElementById('infoBtn').addEventListener('click', function() {
                // Ganti dengan modal/informasi instruksi Anda
                alert(
                    'Instructions:\n- Read the questions carefully\n- The timer runs automatically\n- Click "Close" to quit the test'
                );

            });

            document.getElementById('doneBtn').addEventListener('click', function() {
                const confirmFinish = confirm('Do you want to end the test now?');
                if (confirmFinish) {
                    window.history.back();
                }
            });

            // Mulai countdown (contoh: 15 menit)
            startCountdown(15 * 60);
        })();
    </script>

    <!-- script bagian part soal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const section = document.querySelector('.parts-section');
            if (!section) return;

            const xTabs = section.querySelector('.x-tabs');
            const tabs = Array.from(xTabs.querySelectorAll('.x-tab'));
            const panels = Array.from(section.querySelectorAll('.x-panel'));

            function updateEdgeHints() {
                const max = xTabs.scrollWidth - xTabs.clientWidth;
                const x = Math.round(xTabs.scrollLeft);
                xTabs.classList.toggle('has-left', x > 0);
                xTabs.classList.toggle('has-right', x < max - 1);
            }

            function setActive(id) {
                tabs.forEach(btn => {
                    const active = btn.dataset.id === id;
                    btn.classList.toggle('is-active', active);
                    btn.setAttribute('aria-selected', active ? 'true' : 'false');
                    btn.tabIndex = active ? 0 : -1;
                    if (active) {
                        btn.scrollIntoView({
                            behavior: 'smooth',
                            inline: 'center',
                            block: 'nearest'
                        });
                    }
                });
                panels.forEach(p => {
                    const open = p.id === `panel-${id}`;
                    if (open) {
                        p.removeAttribute('hidden');
                        p.classList.add('is-open');
                    } else {
                        p.setAttribute('hidden', '');
                        p.classList.remove('is-open');
                    }
                });
                xTabs.dataset.active = id;
            }

            /* Event delegation untuk klik tab (lebih andal) */
            xTabs.addEventListener('click', (e) => {
                const btn = e.target.closest('.x-tab');
                if (!btn || !xTabs.contains(btn)) return;
                setActive(btn.dataset.id);
            });

            /* Drag/Swipe pada .x-tabs */
            let down = false,
                moved = false,
                startX = 0,
                startLeft = 0,
                pid = null;
            xTabs.addEventListener('pointerdown', (e) => {
                // Hanya izinkan drag jika bukan klik pada tab
                if (e.target.closest('.x-tab')) {
                    down = false;
                    return;
                }
                down = true;
                moved = false;
                pid = e.pointerId;
                xTabs.setPointerCapture(pid);
                startX = e.clientX;
                startLeft = xTabs.scrollLeft;
            });
            xTabs.addEventListener('pointermove', (e) => {
                if (!down) return;
                const dx = e.clientX - startX;
                if (Math.abs(dx) > 3) moved = true;
                xTabs.scrollLeft = startLeft - dx;
            });

            function endDrag(e) {
                if (pid) {
                    try {
                        xTabs.releasePointerCapture(pid);
                    } catch {}
                }
                pid = null;
                down = false;
                if (moved && e && e.target.closest('.x-tab')) e.preventDefault(); /* cegah klik nyangkut */
                moved = false;
            }
            xTabs.addEventListener('pointerup', endDrag);
            xTabs.addEventListener('pointercancel', endDrag);
            xTabs.addEventListener('pointerleave', endDrag);

            /* Wheel vertikal -> horizontal (trackpad/mouse) */
            xTabs.addEventListener('wheel', (e) => {
                if (Math.abs(e.deltaY) > Math.abs(e.deltaX) && xTabs.scrollWidth > xTabs.clientWidth) {
                    xTabs.scrollBy({
                        left: e.deltaY,
                        behavior: 'auto'
                    });
                    e.preventDefault();
                }
            }, {
                passive: false
            });

            /* Keyboard navigation */
            tabs.forEach(btn => {
                btn.addEventListener('keydown', (e) => {
                    if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
                    e.preventDefault();
                    const idx = tabs.indexOf(btn);
                    const nextIdx = e.key === 'ArrowRight' ? (idx + 1) % tabs.length : (idx - 1 +
                        tabs.length) % tabs.length;
                    tabs[nextIdx].focus();
                    tabs[nextIdx].click();
                });
            });

            /* Init */
            updateEdgeHints();
            xTabs.addEventListener('scroll', updateEdgeHints);
            window.addEventListener('resize', updateEdgeHints);
            setActive('tfng');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            function initSpeakingPanel(panelId) {
                const panel = document.querySelector(panelId);
                if (!panel) return;

                const questions = panel.querySelectorAll('.speaking-question');
                const totalQuestions = questions.length;
                console.log(totalQuestions);
                const progressDots = panel.querySelector('.progress-dots');

                // Clear dots sebelum generate ulang
                progressDots.innerHTML = "";

                // Generate dots sesuai jumlah soal di panel ini
                for (let i = 0; i < totalQuestions; i++) {
                    const dot = document.createElement('div');
                    dot.classList.add('dot');
                    if (i === 0) dot.classList.add('active');
                    progressDots.appendChild(dot);
                }

                function updateProgress(currentIdx) {
                    const dots = progressDots.querySelectorAll('.dot');
                    dots.forEach((dot, idx) => {
                        dot.classList.remove('active');
                        if (idx === currentIdx) dot.classList.add('active');
                    });
                }

                function markCompleted(idx) {
                    const dots = progressDots.querySelectorAll('.dot');
                    if (dots[idx]) dots[idx].classList.add('completed');
                }

                // Navigation (previous/next)
                questions.forEach((q, idx) => {
                    const prevBtn = q.querySelector('.sq-prev');
                    const nextBtn = q.querySelector('.sq-next');

                    if (prevBtn) {
                        prevBtn.addEventListener('click', () => {
                            q.hidden = true;
                            questions[idx - 1].hidden = false;
                            updateProgress(idx - 1);
                        });
                    }
                    if (nextBtn) {
                        nextBtn.addEventListener('click', () => {
                            q.hidden = true;
                            questions[idx + 1].hidden = false;
                            updateProgress(idx + 1);
                        });
                    }
                });

                // Record button simulation
                panel.querySelectorAll('.sq-record').forEach((btn, idx) => {
                    btn.addEventListener('click', () => {
                        btn.textContent = "✅ Recorded";
                        btn.classList.add("recorded");
                        markCompleted(idx);
                    });
                });

                // Upload audio
                panel.querySelectorAll('.sq-upload').forEach((input, idx) => {
                    input.addEventListener('change', () => {
                        if (input.files.length > 0) {
                            const label = input.closest('.sq-actions').querySelector(
                                '.sq-upload-label');
                            if (label) {
                                label.textContent = "✅ Audio Uploaded";
                                label.classList.add("uploaded");
                            }
                            markCompleted(idx);
                        }
                    });
                });
            }

            // ✅ Inisialisasi untuk masing-masing panel
            initSpeakingPanel('#panel-tfng');
            initSpeakingPanel('#panel-tfng2');
            initSpeakingPanel('#panel-ynng');
        });
    </script>

    <script>
        (function() {

            const hasMediaDevices = !!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia);
            const hasMediaRecorder = typeof MediaRecorder !== "undefined";

            // simple beep
            function playBeep() {
                const audioCtx = new AudioContext();
                const oscillator = audioCtx.createOscillator();
                oscillator.type = "sine";
                oscillator.frequency.value = 900;
                oscillator.connect(audioCtx.destination);
                oscillator.start();
                setTimeout(() => oscillator.stop(), 200);
            }

            document.querySelectorAll(".speaking-question").forEach(container => {

                /* ------------------------------
                   VIDEO PLAYER
                ------------------------------ */
                const instructionVideo = container.querySelector('.video-player video');
                const playBtn = container.querySelector(".play-btn");
                const pauseBtn = container.querySelector(".pause-btn");

                if (playBtn && pauseBtn && instructionVideo) {
                    playBtn.addEventListener("click", () => {
                        instructionVideo.play();
                        playBtn.disabled = true;
                        pauseBtn.disabled = false;
                    });

                    pauseBtn.addEventListener("click", () => {
                        instructionVideo.pause();
                        playBtn.disabled = false;
                        pauseBtn.disabled = true;
                    });

                    instructionVideo.addEventListener("ended", () => {
                        playBtn.disabled = false;
                        pauseBtn.disabled = true;
                    });
                }


                /* ------------------------------
                   RECORDER ELEMENTS
                ------------------------------ */
                const preview = container.querySelector(".preview-video");
                const recordBtn = container.querySelector(".record-btn");
                const stopBtn = container.querySelector(".stop-btn");
                const indicator = container.querySelector(".recording-indicator");
                const timerDisplay = container.querySelector(".timer");
                const recordedVideo = container.querySelector(".recorded-video-element");
                const recordedContainer = container.querySelector(".recorded-video");

                const warningBox = document.createElement("div");
                warningBox.style.color = "red";
                warningBox.style.fontWeight = "bold";
                warningBox.style.marginTop = "5px";
                warningBox.style.display = "none";
                warningBox.textContent = "";
                container.querySelector(".recorder-container").appendChild(warningBox);


                /* ------------------------------
                   STATE
                ------------------------------ */
                let mediaRecorder = null;
                let currentStream = null;
                let recordedChunks = [];
                let timerInterval = null;
                let seconds = 0;
                let isRecording = false;

                const MAX_RECORD_SECONDS = 10; // change freely


                /* ------------------------------
                   TIMER
                ------------------------------ */
                function resetTimer() {
                    seconds = 0;
                    timerDisplay.textContent = "00:00";
                    timerDisplay.style.color = "#000";
                    warningBox.style.display = "none";
                }

                function startTimer() {
                    resetTimer();

                    timerInterval = setInterval(() => {
                        seconds++;

                        const m = String(Math.floor(seconds / 60)).padStart(2, "0");
                        const s = String(seconds % 60).padStart(2, "0");
                        timerDisplay.textContent = `${m}:${s}`;

                        const remaining = MAX_RECORD_SECONDS - seconds;

                        // last 10 seconds → turn red + show warning text
                        if (remaining <= 10) {
                            timerDisplay.style.color = "red";
                            warningBox.style.display = "block";
                            warningBox.textContent =
                                `Recording will auto-stop in ${remaining} seconds…`;
                        }

                        // last 3 seconds → beep
                        if (remaining <= 3 && remaining > 0) {
                            playBeep();
                        }

                        // auto-stop
                        if (seconds >= MAX_RECORD_SECONDS) {
                            stopRecordingFlow();
                        }

                    }, 1000);
                }

                function stopTimer() {
                    if (timerInterval) clearInterval(timerInterval);
                    timerInterval = null;
                }


                /* ------------------------------
                   CAMERA
                ------------------------------ */
                async function initCamera() {
                    if (!hasMediaDevices) throw new Error("Media devices not supported.");

                    const stream = await navigator.mediaDevices.getUserMedia({
                        video: true,
                        audio: true
                    });
                    preview.srcObject = stream;
                    currentStream = stream;
                    return stream;
                }

                function stopCamera() {
                    if (!currentStream) return;
                    currentStream.getTracks().forEach(t => t.stop());
                    currentStream = null;
                    preview.srcObject = null;
                }


                /* ------------------------------
                   START RECORDING
                ------------------------------ */
                async function startRecordingFlow() {
                    if (isRecording) return;

                    try {
                        const stream = await initCamera();
                        recordedChunks = [];

                        let options = {};
                        if (MediaRecorder.isTypeSupported("video/webm;codecs=vp8,opus")) {
                            options.mimeType = "video/webm;codecs=vp8,opus";
                        }

                        mediaRecorder = new MediaRecorder(stream, options);

                        mediaRecorder.ondataavailable = e => {
                            if (e.data.size > 0) recordedChunks.push(e.data);
                        };

                        mediaRecorder.onstop = () => {
                            const blob = new Blob(recordedChunks, {
                                type: "video/webm"
                            });
                            const url = URL.createObjectURL(blob);
                            recordedVideo.src = url;
                            recordedContainer.style.display = "block";

                            stopCamera();
                            isRecording = false;
                        };

                        mediaRecorder.start();
                        isRecording = true;

                        recordBtn.disabled = true;
                        stopBtn.disabled = false;
                        indicator.classList.add("active");

                        startTimer();
                    } catch (err) {
                        console.error("Start recording failed:", err);
                        alert("Failed to start recording.");
                    }
                }


                /* ------------------------------
                   STOP RECORDING
                ------------------------------ */
                function stopRecordingFlow() {
                    if (!isRecording) return;

                    try {
                        if (mediaRecorder && mediaRecorder.state !== "inactive") {
                            mediaRecorder.stop();
                        }
                    } catch (e) {
                        console.error("Stopping error:", e);
                    }

                    recordBtn.disabled = false;
                    stopBtn.disabled = true;
                    indicator.classList.remove("active");

                    stopTimer();
                    resetTimer();
                }


                /* ------------------------------
                   EVENTS
                ------------------------------ */
                recordBtn.addEventListener("click", () => startRecordingFlow());
                stopBtn.addEventListener("click", () => stopRecordingFlow());
                stopBtn.disabled = true;

            });

        })();
    </script>

    <script>
        $(function() {

            $(".speaking-question").each(function() {

                const block = $(this);
                const submitBtn = block.find(".sq-submit-btn");
                const recordedVideoElement = block.find(".recorded-video-element");

                submitBtn.on("click", function() {

                    // cek apakah video pernah direkam
                    const videoEl = recordedVideoElement.get(0);

                    if (!videoEl || !videoEl.src) {
                        alert("Please record a video first before submitting.");
                        return;
                    }

                    const videoURL = videoEl.src;

                    // ambil blob dari objectURL browser
                    fetch(videoURL)
                        .then(r => r.blob())
                        .then(blob => {

                            const formData = new FormData();

                            // filename unik
                            const filename =
                                `recording_q${block.data("q") || ""}_${Date.now()}.webm`;

                            formData.append("video", blob, filename);
                            formData.append("question_id", block.data("q") || "");
                            formData.append("part", block.data("part") || "");
                            formData.append("timestamp", Date.now());
                            formData.append("set_id", "XJ3XOcvqPbgdZwyl");
                            formData.append("tipe", "speaking");
                            formData.append("kategori", "speaking");
                            formData.append("_token", $("meta[name='csrf-token']").attr(
                                "content"));

                            console.log("Submitting video:", filename, blob);

                            $.ajax({
                                url: "/ielts/practice/check",
                                method: "POST",
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(res) {
                                    alert("Video submitted successfully!");
                                    setInterval(function() {
                                        location.reload();
                                    }, 1000)
                                },
                                error: function(xhr) {
                                    console.error("Upload error:", xhr);
                                    alert("Failed to submit the video.");
                                }
                            });

                        })
                        .catch(err => {
                            console.error("Blob convert error:", err);
                            alert("Unable to process the recorded video.");
                        });

                });

            });

        });
    </script>



</body>

</html>
