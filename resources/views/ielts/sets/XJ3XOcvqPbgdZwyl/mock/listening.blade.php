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

        .app-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: #4274ba;
            box-shadow: var(--shadow);
            padding: max(8px, env(safe-area-inset-top)) 12px 8px 12px;
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

    <!-- style bagian reading + questions -->
    <style>
        /* Layout container dengan jarak kiri-kanan seimbang */
        .reading-section {
            padding: 10px 12px 12px 12px;
            box-sizing: border-box;
        }

        /* Grid dua kolom (kiri naratif, kanan soal) */
        .reading-grid {
            display: grid;
            /* grid-template-columns: 1.1fr 1fr; */
            gap: 12px;
            align-items: stretch;
        }

        /* Panel kiri: naratif */
        .passage {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
            display: flex;
            flex-direction: column;
            min-height: 420px;
            max-height: min(72vh, 820px);
        }

        .passage-title {
            margin: 12px 12px 0 12px;
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
        }

        .passage-body {
            padding: 10px 12px 12px 12px;
            overflow: auto;
            /* scrollable */
            line-height: 1.6;
            color: #0f172a;
        }

        /* Panel kanan: instruksi + soal */
        .qa {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
            display: flex;
            flex-direction: column;
            min-height: 420px;
            max-height: min(72vh, 820px);
            overflow: hidden;
            /* biar sticky bekerja di dalam */
        }

        /* Instruksi sticky di atas */
        .qa-instructions {
            position: sticky;
            top: 0;
            z-index: 1;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            padding: 12px;
        }

        .qa-instructions .lead {
            font-weight: 700;
            margin: 0 0 6px 0;
        }

        .qa-instructions .legend {
            margin: 6px 0 0 18px;
            padding: 0;
        }

        .qa-instructions .legend li {
            margin: 2px 0;
        }

        /* Isi soal scrollable */
        .qa-body {
            padding: 10px 12px 12px 12px;
            overflow: auto;
            /* scrollable */
        }

        /* Soal */
        .q-item {
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 30px;
        }

        td .q-item {
            border: none !important;
            border-radius: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            box-shadow: none !important;
            outline: none !important;
            background: none !important;
        }

        .q-text {
            /* font-weight: 00; */
            color: #0f172a;
            margin: 0 0 8px 0;
        }

        .q-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 22px;
            height: 22px;
            border-radius: 999px;
            background: #eff6ff;
            color: #1d4ed8;
            font-size: 12px;
            margin-right: 8px;
        }

        /* Opsi */
        .q-options {
            display: grid;
            gap: 8px;
        }

        .q-option {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 10px 12px;
            cursor: pointer;
            user-select: none;
            transition: border-color .12s ease, background .12s ease, box-shadow .12s ease;
        }

        .q-option:hover {
            border-color: #cbd5e1;
            background: #f8fafc;
        }

        .q-option input {
            display: none;
        }

        .q-option .opt-code {
            font-weight: 800;
            color: #334155;
        }

        .q-option .opt-label {
            font-weight: 700;
            color: #0f172a;
        }

        /* State terpilih */
        .q-option.is-selected {
            border-color: #2563eb;
            background: #eef2ff;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, .20);
        }

        .q-option.is-selected .opt-code {
            color: #1d4ed8;
        }

        .q-option.is-selected .opt-label {
            color: #1d4ed8;
        }

        .q-dropdown {
            width: 50px;
            /* Lebar dropdown */
            padding: 6px 10px;
            /* Ruang dalam dropdown */
            border: 1px solid #ccc;
            /* Border abu-abu */
            border-radius: 6px;
            /* Sudut membulat */
            background-color: #fff;
            /* Warna background */
            font-size: 14px;
            /* Ukuran font */
            color: #333;
            /* Warna teks */
            appearance: none;
            /* Hilangkan style default browser */
            -webkit-appearance: none;
            /* Safari / Chrome */
            -moz-appearance: none;
            /* Firefox */
            cursor: pointer;
            /* Tanda pointer saat hover */
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        /* Hover & fokus */
        .q-dropdown:hover {
            border-color: #888;
        }

        .q-dropdown:focus {
            border-color: #3498db;
            box-shadow: 0 0 4px rgba(52, 152, 219, 0.4);
            outline: none;
        }

        /* Tambahan: arrow custom (opsional) */
        .q-dropdown-wrapper {
            position: relative;
            display: inline-block;
        }

        .q-dropdown-wrapper::after {
            content: "▾";
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #555;
            font-size: 12px;
        }


        /* Responsif: tumpuk vertikal di layar kecil */
        @media (max-width: 767px) {
            .reading-grid {
                grid-template-columns: 1fr;
                /* tumpuk atas-bawah */
                grid-template-rows: auto auto;
                /* reading di atas, soal di bawah */
            }
        }

        @media (max-width: 900px) {
            .reading-grid {
                grid-template-columns: 1fr;
            }

            .passage,
            .qa {
                max-height: none;
            }

            .q-options {
                grid-template-columns: 1fr;
            }
        }

        #panel-tfng .q-options,
        #panel-tfng2 .q-options,
        #panel-mse .q-options,
        #panel-tc .q-options {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #panel-tfng .q-number-box,
        #panel-tfng2 .q-number-box,
        #panel-mse .q-number-box,
        #panel-tc .q-number-box,
        #panel-sa .q-number-box {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 28px;
            height: 28px;
            font-weight: bold;
            border: 2px solid #333;
            border-radius: 4px;
            margin-left: 5px;
        }

        #panel-tfng .q-text,
        #panel-tfng2 .q-text,
        #panel-mse .q-text,
        #panel-tc .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* #panel-tfng input,
        #panel-tfng2 input,
        #panel-mse input,
        #panel-tc input {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-left: 5px;
            width: 120px;
        } */

        #panel-sa input {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-left: 5px;
            width: 120px;
        }
    </style>

    <style>
        /* Highlight Styles */
        .highlight {
            padding: 2px 0;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .highlight:hover {
            filter: brightness(90%);
        }

        .highlight-yellow {
            background-color: rgba(255, 255, 0, 0.3);
        }

        .highlight-green {
            background-color: rgba(0, 255, 0, 0.3);
        }

        .highlight-blue {
            background-color: rgba(0, 0, 255, 0.3);
        }

        .highlight-pink {
            background-color: rgba(255, 0, 255, 0.3);
        }

        .highlight-orange {
            background-color: rgba(255, 165, 0, 0.3);
        }

        /* Toolbar */
        .highlight-toolbar {
            position: absolute;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            padding: 6px 10px;
            z-index: 1000;
            display: none;
            flex-direction: row;
            align-items: center;
            gap: 6px;
        }

        .color-option {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
            transition: transform 0.2s;
        }

        .color-option:hover {
            transform: scale(1.1);
        }

        .color-option.selected {
            border-color: #333;
        }

        .color-option.yellow {
            background-color: rgba(255, 255, 0, 0.7);
        }

        .color-option.green {
            background-color: rgba(0, 255, 0, 0.7);
        }

        .color-option.blue {
            background-color: rgba(0, 0, 255, 0.7);
        }

        .color-option.pink {
            background-color: rgba(255, 0, 255, 0.7);
        }

        .color-option.orange {
            background-color: rgba(255, 165, 0, 0.7);
        }

        .highlight-toolbar button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 4px;
            border-radius: 4px;
        }

        .highlight-toolbar button:hover {
            background: #f0f0f0;
        }

        /* Note Popup */
        .note-popup {
            position: absolute;
            background: #fff;
            border: 1px solid #ccc;
            padding: 8px 12px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            max-width: 250px;
            font-size: 14px;
            z-index: 2000;
            display: none;
        }


        .note-popup textarea {
            width: 100%;
            height: 80px;
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 8px;
            resize: vertical;
        }

        .note-popup button {
            padding: 6px 12px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .note-popup button.save {
            background: #3498db;
            color: #fff;
        }

        .note-popup button.cancel {
            background: #95a5a6;
            color: #fff;
        }

        .note-indicator {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #e74c3c;
            border-radius: 50%;
            margin-left: 4px;
        }
    </style>

    <!-- style untuk floating informasi nomor soal -->
    <style>
        .floating-questions {
            position: fixed;
            bottom: 16px;
            right: 16px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(229, 231, 235, 0.6);
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.15);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        /* Floating Action Button (FAB) */
        .fq-fab {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            border: none;
            background: #2563eb;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .fq-fab:hover {
            background: #1d4ed8;
            transform: scale(1.05);
        }

        /* Panel soal */
        .fq-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 10px;
        }

        .floating-questions.expanded .fq-body {
            max-height: 400px;
            /* tampil penuh saat expanded */
            padding: 12px;
        }

        .fq-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(36px, 1fr));
            gap: 6px;
        }

        .fq-item {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            background: #f8fafc;
            color: #0f172a;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .fq-item:hover {
            background: #f1f5f9;
        }

        /* Status */
        .fq-item.answered {
            background: #dcfce7;
            border-color: #16a34a;
            color: #15803d;
        }

        .fq-item.current {
            background: #dbeafe;
            border-color: #2563eb;
            color: #1d4ed8;
        }

        /* Mobile full width panel */
        @media (max-width: 768px) {
            .floating-questions {
                bottom: 12px;
                right: 12px;
                left: auto;
                width: auto;
                max-width: 100%;
            }

            .floating-questions.expanded {
                width: calc(100% - 24px);
                right: 12px;
                left: 12px;
                border-radius: 16px;
            }

            .fq-list {
                grid-template-columns: repeat(auto-fill, minmax(44px, 1fr));
            }

            .fq-item {
                width: 44px;
                height: 44px;
                font-size: 14px;
            }
        }
    </style>

    {{-- style unutk audio player --}}
    <style>
        .audio-player {
            display: grid;
            grid-template-columns: auto 1fr auto auto;
            align-items: center;
            gap: 10px;
            margin-top: 8px;
            padding: 10px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
        }

        .ap-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: 1px solid #e5e7eb;
            background: #f8fafc;
            border-radius: 12px;
            cursor: pointer;
            font-size: 16px;
            transition: background .12s ease, border-color .12s ease, transform .06s ease;
        }

        .ap-btn:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
        }

        .ap-btn:active {
            transform: translateY(1px);
        }

        .ap-play {
            width: 44px;
            height: 44px;
            font-weight: 800;
        }

        .ap-icon {
            line-height: 1;
        }

        .ap-track {
            position: relative;
            height: 19px;
            background: #f1f5f9;
            border: 1px solid #e5e7eb;
            border-radius: 999px;
            overflow: hidden;
        }

        .ap-progress {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 0%;
            background: linear-gradient(90deg, #60a5fa, #2563eb);
            border-right: 1px solid rgba(0, 0, 0, 0.06);
        }

        .ap-seek {
            -webkit-appearance: none;
            appearance: none;
            position: relative;
            width: 100%;
            height: 8px;
            background: transparent;
            outline: none;
        }

        .ap-seek::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #2563eb;
            border: 2px solid #ffffff;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, .25);
            margin-top: -4px;
        }

        .ap-seek::-moz-range-thumb {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #2563eb;
            border: 2px solid #ffffff;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, .25);
        }

        .ap-time {
            font-variant-numeric: tabular-nums;
            font-size: 12px;
            font-weight: 700;
            color: #0f172a;
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 6px 8px;
        }

        .ap-time .ap-sep {
            opacity: .7;
            margin: 0 4px;
        }

        /* Mobile */
        @media (max-width: 520px) {
            .audio-player {
                grid-template-columns: auto 1fr auto;
                grid-template-areas: "play track time" "vol track time";
                gap: 8px;
            }

            .ap-play {
                grid-area: play;
            }

            .ap-track {
                grid-area: track;
            }

            .ap-time {
                grid-area: time;
            }

            .ap-vol {
                grid-area: vol;
            }
        }
    </style>
</head>

<body>
    <header class="app-header" role="banner">
        <div class="header-row" aria-label="Header CAT Bahasa Inggris">
            <div class="brand">
                <div class="logo" aria-hidden="true">
                    <div class="logo" aria-hidden="true">
                        <img class="" style="width: 50px;margin-left: 20px" src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="actions">
                <button id="infoBtn" class="btn btn-ghost icon-btn" aria-label="Informasi">
                    <i class="fa-solid fa-circle-info"></i>
                </button>

                <div id="timer" class="timer" aria-live="polite" aria-label="Sisa waktu">
                    <i class="fa-regular fa-clock"></i>
                    <span id="timeText">00:00</span>
                </div>

                <button id="doneBtn" class="btn btn-danger">
                    <i class="fa-solid fa-flag-checkered"></i>
                    <span class="label">Selesai</span>
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
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Part 4</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Part 1</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content">
                        <form class="qa-body">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage!</p>
                                <div class="audio-player" role="group" aria-label="Audio controls">
                                    <audio preload="metadata">
                                        <source
                                            src="{{ asset('own_assets/audio/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3') }}"
                                            type="audio/mpeg" />
                                    </audio>

                                    <button class="ap-btn ap-play" type="button" aria-label="Play audio">
                                        <span class="ap-icon ap-icon-play">►</span>
                                        <span class="ap-icon ap-icon-pause" style="display:none;">❚❚</span>
                                    </button>

                                    <div class="ap-track">
                                        <div class="ap-progress"></div>
                                        <input class="ap-seek" type="range" min="0" max="100"
                                            value="0" step="0.1" aria-label="Seek audio" />
                                    </div>

                                    <div class="ap-time">
                                        <span class="ap-current">0:00</span>
                                        <span class="ap-sep">/</span>
                                        <span class="ap-duration">0:00</span>
                                    </div>

                                    <button class="ap-btn ap-vol" type="button" aria-label="Mute/unmute">
                                        <span class="ap-icon">🔊</span>
                                    </button>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Questions 1-6</b></p>
                                <p><i>Write <b>ONE WORD</b> for each answer.</i></p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0"
                                style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2">SELF-DRIVE TOURS IN THE USA</th>
                                </tr>
                                <tr>
                                    <td colspan="2"><i>Example</i></td>
                                </tr>
                                <tr>
                                    <td><b>Name:</b></td>
                                    <td><b>Andrea </b><i>......Brown.....</i></td>
                                </tr>
                                <tr>
                                    <td><b>Address:</b></td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            24
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="q1" class="q-text" placeholder="">
                                            road
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Postcode:</b></td>
                                    <td>BH5 2OP</td>
                                </tr>
                                <tr>
                                    <td><b>Phone:</b></td>
                                    <td>(mobile) 077 8664 3091</td>
                                </tr>
                                <tr>
                                    <td><b>Heard about company from:</b></td>
                                    <td>
                                        <div class="q-item" data-q="2">
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="q1" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Possible self-drive tours</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Trip One:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="3">
                                                    Los Angeles: customer wants to visit some
                                                    <span class="q-number-box">3</span>
                                                    <input type="text" name="q1" class="q-text"
                                                        placeholder="">
                                                    parks with her children
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-item" data-q="4">
                                                    Yosemite Park: customer wants to stay in a lodge, not a
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="q1" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Trip Two:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="5">
                                                    Customer wants to see the
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="q1" class="q-text"
                                                        placeholder="">
                                                    on the way to Cambria
                                                </div>
                                            </li>
                                            <li>At Santa Monica: not interested in shopping</li>
                                            <li>
                                                Yosemite Park: customer wants to stay in a lodge, not a
                                                <div class="q-item" data-q="6">
                                                    At San Diego, wants to spend time on the
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="q1" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>

                            <fieldset class="q-item">
                                <p><b>Questions 7-10</b></p>
                                <p>Complete the table below.</p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <table border="1" cellpadding="8" cellspacing="0"
                                style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th></th>
                                    <th><b>Number of days</b></th>
                                    <th><b>Total distance</b></th>
                                    <th><b>Price (per person)</b></th>
                                    <th><b>Includes</b></th>
                                </tr>
                                <tr>
                                    <th><b>Trip One</b></th>
                                    <td>12 days</td>
                                    <td>
                                        <div class="q-item" data-q="7">
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="q1" class="q-text" placeholder="">
                                            km
                                        </div>
                                    </td>
                                    <td>£525</td>
                                    <td>
                                        <ul>
                                            <li>accommodation</li>
                                            <li>car</li>
                                            <li>
                                                <div class="q-item" data-q="8">
                                                    one
                                                    <span class="q-number-box">8</span>
                                                    <input type="text" name="q1" class="q-text" placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th><b>Trip Two</b></th>
                                    <td>9 days</td>
                                    <td>
                                        980 km
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="9">
                                            £
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="q1" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>accommodation</li>
                                            <li>car</li>
                                            <li>
                                                <div class="q-item" data-q="10">
                                                    <span class="q-number-box">10</span>
                                                    <input type="text" name="q1" class="q-text" placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 11-20</p>
                            <div class="audio-player" role="group" aria-label="Audio controls">
                                <audio preload="metadata">
                                    <source
                                        src="{{ asset('own_assets/audio/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-2.mp3') }}"
                                        type="audio/mpeg" />
                                </audio>

                                <button class="ap-btn ap-play" type="button" aria-label="Play audio">
                                    <span class="ap-icon ap-icon-play">►</span>
                                    <span class="ap-icon ap-icon-pause" style="display:none;">❚❚</span>
                                </button>

                                <div class="ap-track">
                                    <div class="ap-progress"></div>
                                    <input class="ap-seek" type="range" min="0" max="100"
                                        value="0" step="0.1" aria-label="Seek audio" />
                                </div>

                                <div class="ap-time">
                                    <span class="ap-current">0:00</span>
                                    <span class="ap-sep">/</span>
                                    <span class="ap-duration">0:00</span>
                                </div>

                                <button class="ap-btn ap-vol" type="button" aria-label="Mute/unmute">
                                    <span class="ap-icon">🔊</span>
                                </button>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Questions 1-2</b></p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which TWO facilities at the leisure club have recently been improved?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="q1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">the gym</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="q1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the tracks</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="q1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">the indoor pool</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="q1" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">the outdoor pool</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="q1" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">the sports training for children</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Questions 1-8</b></p>
                            <p>Complete the notes below.</p>
                            <p>Write <b>NO MORE THEN TWO WORDS</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Joining the leisure club</b></p>
                            <p><i>Personal Assessment</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="3">
                                        New members should describe any
                                        <span class="q-number-box">13</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        The
                                        <span class="q-number-box">14</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        will be explained to you before you use the equipment.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="5">
                                        You will be given a six-week
                                        <span class="q-number-box">15</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><i>Types of membership</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="6">
                                        There is a compulsory £90
                                        <span class="q-number-box">16</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        fee for members.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="7">
                                        Gold members are given
                                        <span class="q-number-box">17</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        to all the LP clubs.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        Premier members are given priority during
                                        <span class="q-number-box">18</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        hours.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="9">
                                        Premier members can bring some
                                        <span class="q-number-box">19</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        every month.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="10">
                                        Members should always take their
                                        <span class="q-number-box">20</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        with them.
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Part 3</div>
                    <div class="reading-section">
                        <div class="qa highlighted-content">
                            <form class="qa-body">
                                <fieldset class="q-item">
                                    <p class="lead">Listen and answer questions 21-30</p>
                                    <div class="audio-player" role="group" aria-label="Audio controls">
                                        <audio preload="metadata">
                                            <source
                                                src="{{ asset('own_assets/audio/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-3.mp3') }}"
                                                type="audio/mpeg" />
                                        </audio>

                                        <button class="ap-btn ap-play" type="button" aria-label="Play audio">
                                            <span class="ap-icon ap-icon-play">►</span>
                                            <span class="ap-icon ap-icon-pause" style="display:none;">❚❚</span>
                                        </button>

                                        <div class="ap-track">
                                            <div class="ap-progress"></div>
                                            <input class="ap-seek" type="range" min="0" max="100"
                                                value="0" step="0.1" aria-label="Seek audio" />
                                        </div>

                                        <div class="ap-time">
                                            <span class="ap-current">0:00</span>
                                            <span class="ap-sep">/</span>
                                            <span class="ap-duration">0:00</span>
                                        </div>

                                        <button class="ap-btn ap-vol" type="button" aria-label="Mute/unmute">
                                            <span class="ap-icon">🔊</span>
                                        </button>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item">
                                    <p>Questions 21-25</p>
                                    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3><b>Global Design Competition</b></h3>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">21</span>
                                        Students entering the design competition have to
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="q1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">produce an energy-efficient design.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">adapt an existing energy-saving appliance.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">develop a new use for current technology.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">22</span>
                                        John chose a dishwasher because he wanted to make dishwashers
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="q2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">more appealing.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">more common.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">more economical.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">23</span>
                                        The stone in John’s ‘Rockpool’ design is used
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="q3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">for decoration.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">to switch it on.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">to stop water escaping.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">24</span>
                                        In the holding chamber, the carbon dioxide
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="q4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">changes back to a gas.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">dries the dishes.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">is allowed to cool.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">25</span>
                                        At the end of the cleaning process, the carbon dioxide
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="q5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">is released into the air.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">is disposed of with the waste.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">is collected ready to be re-used.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item">
                                    <p><b>Questions 26-30</b></p>
                                    <p>Complete the notes below.</p>
                                    <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                                </fieldset>

                                <fieldset class="q-item" id="panel-sa">
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="6">
                                                John needs help preparing for his
                                                <span class="q-number-box">26</span>
                                                <input type="text" name="q1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="7">
                                                The professor advises John to make a
                                                <span class="q-number-box">27</span>
                                                <input type="text" name="q1" class="q-text" placeholder="">
                                                of his design.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="8">
                                                John’s main problem is getting good quality
                                                <span class="q-number-box">28</span>
                                                <input type="text" name="q1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="9">
                                                The professor suggests John apply for a
                                                <span class="q-number-box">29</span>
                                                <input type="text" name="q1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="10">
                                                The professor will check the
                                                <span class="q-number-box">30</span>
                                                <input type="text" name="q1" class="q-text" placeholder="">
                                                information in John’s written report.
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Content: Part 4</div>
                <div class="qa highlighted-content">
                    <form class="qa-body">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 31-40</p>
                            <div class="audio-player" role="group" aria-label="Audio controls">
                                <audio preload="metadata">
                                    <source
                                        src="{{ asset('own_assets/audio/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-4.mp3') }}"
                                        type="audio/mpeg" />
                                </audio>

                                <button class="ap-btn ap-play" type="button" aria-label="Play audio">
                                    <span class="ap-icon ap-icon-play">►</span>
                                    <span class="ap-icon ap-icon-pause" style="display:none;">❚❚</span>
                                </button>

                                <div class="ap-track">
                                    <div class="ap-progress"></div>
                                    <input class="ap-seek" type="range" min="0" max="100"
                                        value="0" step="0.1" aria-label="Seek audio" />
                                </div>

                                <div class="ap-time">
                                    <span class="ap-current">0:00</span>
                                    <span class="ap-sep">/</span>
                                    <span class="ap-duration">0:00</span>
                                </div>

                                <button class="ap-btn ap-vol" type="button" aria-label="Mute/unmute">
                                    <span class="ap-icon">🔊</span>
                                </button>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 31-40</p>
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3><b>THE SPIRIT BEAR</b></h3>
                            <p><b>General facts</b></p>
                            <ul>
                                <li>It is a white bear belonging to the black bear family.</li>
                                <li>
                                    <div class="q-list" data-q="1">
                                        Its colour comes from an uncommon
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="2">
                                        Local people believe that it has unusual
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="3">
                                        They protect the bear from
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Habitat</b></p>
                            <ul>
                                <li>The bear’s relationship with the forest is complex.</li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        Tree roots stop
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        along salmon streams.
                                    </div>
                                </li>
                                <li>The bears’ feeding habits provide nutrients for forest vegetation.</li>
                                <li>
                                    <div class="q-list" data-q="5">
                                        It is currently found on a small number of
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Threats</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="6">
                                        Habitat is being lost due to deforestation and construction of
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        by logging companies.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="7">
                                        Unrestricted
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        is affecting the salmon supply.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        The bears’ existence is also threatened by their low rate of
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Going forward</b></p>
                            <ul>
                                <li>Interested parties are working together.</li>
                                <li>
                                    <div class="q-list" data-q="9">
                                        Logging companies must improve their
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        by logging companies.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="10">
                                        Maintenance and
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="q1" class="q-text" placeholder="">
                                        of the spirit bears’ territory is needed.
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Question List -->
    <div class="floating-questions collapsed" id="floatingQuestions">
        <!-- Tombol Icon -->
        <button class="fq-fab" id="fqToggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Panel Soal -->
        <div class="fq-body" id="fqBody">
            <div class="fq-list" id="fqList"></div>
        </div>
    </div>

    <div class="highlight-toolbar" id="highlightToolbar">
        <div class="color-option yellow" data-color="yellow"></div>
        <div class="color-option green" data-color="green"></div>
        <div class="color-option blue" data-color="blue"></div>
        <div class="color-option pink" data-color="pink"></div>
        <div class="color-option orange" data-color="orange"></div>
        <button id="highlightNote" title="Add Note">📝</button>
        <button id="removeHighlight" title="Remove Highlight">✕</button>
    </div>

    <div class="note-popup" id="notePopup">
        <textarea id="noteText" placeholder="Tulis catatan..."></textarea>
        <div>
            <button id="saveNote" class="save">Simpan</button>
            <button id="cancelNote" class="cancel">Batal</button>
        </div>
    </div>

    <!-- script bagian audio player -->
    <script>
        (function setupAudioPlayers() {
            const players = document.querySelectorAll('.audio-player');

            players.forEach(player => {
                const audio = player.querySelector('audio');
                const playBtn = player.querySelector('.ap-play');
                const muteBtn = player.querySelector('.ap-vol');
                const seek = player.querySelector('.ap-seek');
                const progress = player.querySelector('.ap-progress');
                const cur = player.querySelector('.ap-current');
                const dur = player.querySelector('.ap-duration');
                const iconPlay = player.querySelector('.ap-icon-play');
                const iconPause = player.querySelector('.ap-icon-pause');
                const track = player.querySelector('.ap-track');

                function fmt(t) {
                    if (!isFinite(t)) return '0:00';
                    const m = Math.floor(t / 60);
                    const s = Math.floor(t % 60);
                    return m + ':' + String(s).padStart(2, '0');
                }

                // durasi
                audio.addEventListener('loadedmetadata', () => {
                    dur.textContent = fmt(audio.duration);
                });

                // update progress
                audio.addEventListener('timeupdate', () => {
                    cur.textContent = fmt(audio.currentTime);
                    const pct = (audio.currentTime / (audio.duration || 1)) * 100;
                    progress.style.width = pct + '%';
                    seek.value = pct;
                });

                // play/pause toggle
                playBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (audio.paused) audio.play();
                    else audio.pause();
                });

                audio.addEventListener('play', () => {
                    iconPlay.style.display = 'none';
                    iconPause.style.display = 'inline';
                    playBtn.setAttribute('aria-label', 'Pause audio');
                });

                audio.addEventListener('pause', () => {
                    iconPlay.style.display = 'inline';
                    iconPause.style.display = 'none';
                    playBtn.setAttribute('aria-label', 'Play audio');
                });

                // seek slider
                seek.addEventListener('input', (e) => {
                    e.stopPropagation();
                    if (!audio.duration) return;
                    const t = (parseFloat(seek.value) / 100) * audio.duration;
                    audio.currentTime = t;
                    console.log("Seek input →", t);
                });

                seek.addEventListener('change', (e) => {
                    e.stopPropagation();
                    if (!audio.duration) return;
                    const t = (parseFloat(seek.value) / 100) * audio.duration;
                    audio.currentTime = t;
                    console.log("Seek change →", t);
                });

                // klik progress bar
                track.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (!audio.duration) return;
                    const rect = track.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const pct = x / rect.width;
                    const t = pct * audio.duration;
                    audio.currentTime = t;
                    console.log("Track click →", t);
                });

                // mute toggle
                muteBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    audio.muted = !audio.muted;
                    muteBtn.querySelector('.ap-icon').textContent = audio.muted ? '🔇' : '🔊';
                    muteBtn.setAttribute('aria-label', audio.muted ? 'Unmute audio' : 'Mute audio');
                });
            });
        })();
    </script>


    <script>
        (function() {
            let remaining = 0;
            let t = null;
            const el = document.getElementById('timeText');
            const wrap = document.getElementById('timer');

            function format(mmss) {
                const m = Math.floor(mmss / 60);
                const s = mmss % 60;
                return String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
            }

            function tick() {
                if (remaining <= 0) {
                    clearInterval(t);
                    t = null;
                    el.textContent = '00:00';
                    wrap.classList.add('danger');
                    document.getElementById('doneBtn').disabled = true;
                    document.getElementById('doneBtn').style.opacity = 0.7;
                    document.getElementById('doneBtn').style.cursor = 'not-allowed';
                    // TODO: panggil handler waktu habis (auto-submit/alert) bila diperlukan
                    return;
                }
                remaining -= 1;
                el.textContent = format(remaining);
                // Kedipkan danger saat < 60 detik
                if (remaining <= 60) {
                    wrap.classList.add('danger');
                }
            }

            function startCountdown(seconds) {
                if (t) clearInterval(t);
                remaining = Math.max(0, Math.floor(seconds));
                el.textContent = format(remaining);
                wrap.classList.toggle('danger', remaining <= 60);
                document.getElementById('doneBtn').disabled = false;
                document.getElementById('doneBtn').style.opacity = 1;
                document.getElementById('doneBtn').style.cursor = 'pointer';
                t = setInterval(tick, 1000);
            }

            // Public API (opsional)
            window.CATHeader = {
                startCountdown
            };

            // Events
            document.getElementById('infoBtn').addEventListener('click', function() {
                // Ganti dengan modal/informasi instruksi Anda
                alert(
                    'Instruksi:\n- Baca soal dengan cermat\n- Waktu berjalan otomatis\n- Klik "Selesai" untuk mengumpulkan'
                );
            });

            document.getElementById('doneBtn').addEventListener('click', function() {
                const confirmFinish = confirm('Yakin ingin menyelesaikan tes sekarang?');
                if (confirmFinish) {
                    // TODO: trigger submit/finish callback
                    console.log('Tes diselesaikan');
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

    <!-- script bagian reading + questions  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Semua panel
            const panels = document.querySelectorAll('.x-panel');

            panels.forEach(panel => {
                const section = panel.querySelector('.reading-section');
                if (!section) return;

                // --- Pilihan soal (radio) ---
                section.addEventListener('click', function(e) {
                    const opt = e.target.closest('.q-option');
                    if (!opt) return;
                    const fieldset = opt.closest('.q-item');
                    const input = opt.querySelector('input[type="radio"]');
                    if (!fieldset || !input) return;

                    // Set radio checked
                    input.checked = true;

                    // Hapus highlight semua sibling
                    fieldset.querySelectorAll('.q-option').forEach(el => el.classList.remove(
                        'is-selected'));
                    opt.classList.add('is-selected');
                });

                section.addEventListener('change', function(e) {
                    const radio = e.target;
                    if (!(radio instanceof HTMLInputElement)) return;
                    if (radio.type !== 'radio') return;
                    const fieldset = radio.closest('.q-item');
                    if (!fieldset) return;
                    fieldset.querySelectorAll('.q-option').forEach(el => {
                        const r = el.querySelector('input[type="radio"]');
                        el.classList.toggle('is-selected', r && r.checked);
                    });
                });

                // --- Resize handle ---
                const grid = section.querySelector('.resizable-grid');
                const handle = section.querySelector('.resize-handle');
                if (!grid || !handle) return;

                let isDragging = false;

                handle.addEventListener('mousedown', e => {
                    e.preventDefault();
                    isDragging = true;
                    document.body.style.cursor = 'col-resize';
                });

                window.addEventListener('mousemove', e => {
                    if (!isDragging) return;
                    const gridRect = grid.getBoundingClientRect();
                    const totalWidth = gridRect.width;
                    const offsetX = e.clientX - gridRect.left;

                    const leftWidth = Math.max(250, offsetX);
                    const rightWidth = Math.max(250, totalWidth - leftWidth - handle.offsetWidth);

                    grid.style.gridTemplateColumns =
                        `${leftWidth}px ${handle.offsetWidth}px ${rightWidth}px`;
                });

                window.addEventListener('mouseup', () => {
                    if (isDragging) {
                        isDragging = false;
                        document.body.style.cursor = 'default';
                    }
                });

            }); // end forEach panel

            // Optional: function global ambil jawaban panel tertentu
            window.getPanelAnswers = function(panelEl) {
                const out = {};
                const section = panelEl.querySelector('.reading-section');
                if (!section) return out;

                section.querySelectorAll('.q-item').forEach(fs => {
                    const name = fs.querySelector('input[type="radio"]')?.name;
                    const checked = fs.querySelector('input[type="radio"]:checked');
                    if (name) out[name] = checked ? checked.value : null;
                });

                return out;
            };
        });
    </script>

    <!-- script bagian highlight + note -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toolbar = document.getElementById('highlightToolbar');
            const notePopup = document.getElementById('notePopup');
            const noteText = document.getElementById('noteText');

            let currentSelection = null;
            let selectedColor = 'yellow';
            let currentHighlight = null;
            let activePassage = null;

            // === Pilih warna highlight ===
            document.querySelectorAll('.color-option').forEach(option => {
                option.addEventListener('click', () => {
                    selectedColor = option.dataset.color;
                    applyHighlight(selectedColor, false);
                });
            });

            // === Toolbar tombol catatan ===
            document.getElementById('highlightNote').addEventListener('click', () => {
                if (currentSelection) {
                    applyHighlight(selectedColor, true);
                }
            });

            // === Hapus highlight ===
            document.getElementById('removeHighlight').addEventListener('click', () => {
                if (currentSelection) {
                    const node = currentSelection.startContainer.parentNode;
                    if (node.classList.contains('highlight')) {
                        const textNode = document.createTextNode(node.textContent);
                        node.replaceWith(textNode);
                    }
                    hideToolbar();
                    window.getSelection().removeAllRanges();
                    currentSelection = null;
                }
            });

            // === Save & Cancel Note ===
            document.getElementById('saveNote').addEventListener('click', () => {
                if (currentHighlight) {
                    const note = noteText.value.trim();
                    if (note) {
                        currentHighlight.dataset.note = note;
                        if (!currentHighlight.querySelector('.note-indicator')) {
                            const dot = document.createElement('span');
                            dot.className = 'note-indicator';
                            currentHighlight.appendChild(dot);
                        }
                    } else {
                        delete currentHighlight.dataset.note;
                        const dot = currentHighlight.querySelector('.note-indicator');
                        if (dot) dot.remove();
                    }
                }
                hideNotePopup();
            });

            document.getElementById('cancelNote').addEventListener('click', hideNotePopup);

            // === Init highlight di semua panel ===
            document.querySelectorAll('.x-panel').forEach(panel => {
                const passageBody = panel.querySelector('.highlighted-content');

                passageBody.addEventListener('mouseup', (e) => {
                    const selection = window.getSelection();
                    if (selection && !selection.isCollapsed) {
                        currentSelection = selection.getRangeAt(0);
                        activePassage = passageBody;
                        const rect = currentSelection.getBoundingClientRect();
                        showToolbar(rect);
                    } else {
                        hideToolbar();
                    }
                });

                // Klik highlight untuk buka note
                passageBody.addEventListener('click', e => {
                    if (e.target.classList.contains('highlight') && e.target.dataset.note) {
                        currentHighlight = e.target;
                        showNotePopup(e.target, e.target.dataset.note);
                    }
                });
            });

            // === Klik luar → tutup toolbar & note popup ===
            document.addEventListener('click', e => {
                if (!toolbar.contains(e.target) &&
                    !notePopup.contains(e.target) &&
                    (!e.target.classList.contains('highlight') || !e.target.closest('.highlighted-content')) &&
                    !window.getSelection().toString()) {
                    hideToolbar();
                    hideNotePopup();
                }
            });

            // === Fungsi helper ===
            function applyHighlight(color, withNote = false) {
                if (!currentSelection) return;

                const span = document.createElement('span');
                span.className = `highlight highlight-${color}`;
                span.textContent = currentSelection.toString();
                currentSelection.deleteContents();
                currentSelection.insertNode(span);

                if (withNote) {
                    currentHighlight = span;
                    showNotePopup(span);
                }

                hideToolbar();
                window.getSelection().removeAllRanges();
                currentSelection = null;
            }

            function showToolbar(rect) {
                toolbar.style.display = 'flex';
                toolbar.style.left = rect.left + window.scrollX + 'px';
                toolbar.style.top = rect.top + window.scrollY - 40 + 'px';
            }

            function hideToolbar() {
                toolbar.style.display = 'none';
                currentSelection = null;
            }

            function showNotePopup(highlightEl, existing = '') {
                noteText.value = existing;
                const rect = highlightEl.getBoundingClientRect();
                notePopup.style.display = 'block';
                notePopup.style.left = rect.left + window.scrollX + 'px';
                notePopup.style.top = rect.bottom + window.scrollY + 5 + 'px';
            }

            function hideNotePopup() {
                notePopup.style.display = 'none';
                currentHighlight = null;
            }
        });
    </script>

    <!-- script bagian floating question list -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const floatingQ = document.getElementById('floatingQuestions');
            const fqBody = document.getElementById('fqBody');
            const fqList = document.getElementById('fqList');
            const fqToggle = document.getElementById('fqToggle');

            if (!floatingQ || !fqBody || !fqList || !fqToggle) return;

            let isCollapsed = false;
            let currentPart = 'tfng';
            let questionCount = 0;

            // Toggle collapse
            fqToggle.addEventListener('click', () => {
                isCollapsed = !isCollapsed;
                floatingQ.classList.toggle('collapsed', isCollapsed);
                floatingQ.classList.toggle('expanded', !isCollapsed);
            });

            // Generate question numbers
            function generateQuestionList(partId, count) {
                fqList.innerHTML = '';
                questionCount = count;

                for (let i = 1; i <= count; i++) {
                    const item = document.createElement('a');
                    item.href = '#';
                    item.className = 'fq-item';
                    item.textContent = i;
                    item.dataset.q = i;
                    item.dataset.part = partId;

                    // Scroll ke soal saat diklik
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        scrollToQuestion(i, partId);
                    });

                    fqList.appendChild(item);
                }
            }

            // Scroll ke soal tertentu
            function scrollToQuestion(qNum, partId) {
                const panel = document.getElementById(`panel-${partId}`);
                if (!panel) return;

                const question = panel.querySelector(`[data-q="${qNum}"]`);
                if (question) {
                    question.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    question.focus();
                }
            }

            // Update status soal (radio, dropdown, text)
            function updateQuestionStatus(partId) {
                const panel = document.getElementById(`panel-${partId}`);
                if (!panel) return;

                fqList.querySelectorAll('.fq-item').forEach(item => {
                    item.classList.remove('answered', 'current');
                });

                for (let i = 1; i <= questionCount; i++) {
                    const item = fqList.querySelector(`[data-q="${i}"][data-part="${partId}"]`);
                    if (!item) continue;

                    const question = panel.querySelector(`[data-q="${i}"]`);
                    if (!question) continue;

                    let answered = false;

                    // Radio
                    const radioChecked = question.querySelector('input[type="radio"]:checked');
                    if (radioChecked) answered = true;

                    // Dropdown
                    const dropdown = question.querySelector('select.q-dropdown');
                    if (dropdown && dropdown.value !== '') answered = true;

                    // Text input
                    const textInput = question.querySelector('input[type="text"], textarea');
                    if (textInput && textInput.value.trim() !== '') answered = true;

                    if (answered) item.classList.add('answered');
                }
            }

            // Deteksi jawaban berubah
            function watchAnswerChanges() {
                document.addEventListener('input', (e) => {
                    const question = e.target.closest('[data-q]');
                    if (question) updateQuestionStatus(currentPart);
                });

                document.addEventListener('change', (e) => {
                    const question = e.target.closest('[data-q]');
                    if (question) updateQuestionStatus(currentPart);
                });

                document.addEventListener('click', (e) => {
                    const option = e.target.closest('.q-option');
                    if (option) setTimeout(() => updateQuestionStatus(currentPart), 50);
                });
            }

            // Deteksi perubahan part
            function watchPartChanges() {
                const observer = new MutationObserver((mutations) => {
                    mutations.forEach((mutation) => {
                        if (mutation.type === 'attributes' && mutation.attributeName ===
                            'data-active') {
                            const newPart = mutation.target.dataset.active;
                            if (newPart && newPart !== currentPart) {
                                currentPart = newPart;
                                updateQuestionListForPart(newPart);
                            }
                        }
                    });
                });

                const tabsContainer = document.querySelector('.x-tabs');
                if (tabsContainer) observer.observe(tabsContainer, {
                    attributes: true,
                    attributeFilter: ['data-active']
                });
            }

            // Update question list untuk part aktif
            function updateQuestionListForPart(partId) {
                const questionCounts = {
                    'tfng': 10,
                    'tfng2': 10,
                    'ynng': 10,
                    'mse': 10,
                };
                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // Init
            updateQuestionListForPart('tfng');
            watchPartChanges();
            watchAnswerChanges();
            setInterval(() => updateQuestionStatus(currentPart), 2000);
        });
    </script>
</body>

</html>
