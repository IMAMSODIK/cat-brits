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
            --app-header-height: max(80px, calc(60px + env(safe-area-inset-top)));
            --session-info-height: 52px;
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
            position: sticky;
            top: var(--app-header-height);
            z-index: 45;
            box-sizing: border-box;
            height: var(--session-info-height);
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
            :root {
                --session-info-height: 90px;
            }

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

            position: sticky;
            top: calc(var(--app-header-height) + var(--session-info-height));
            z-index: 40;
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
