<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>{{ $set->name }} | {{ ucfirst($section) }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        /* #panel-tfng .q-options,
        #panel-tfng2 .q-options {
            display: flex;
            align-items: center;
            gap: 10px;
        } */

        #panel-tfng .q-number-box,
        #panel-tfng2 .q-number-box,
        #panel-ynng .q-number-box {
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
        #panel-ynng .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        #panel-tfng input,
        #panel-tfng2 input,
        #panel-ynng input {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-left: 5px;
            width: 120px;
        }

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
            left: 16px;
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
                left: 12px;
                left: auto;
                width: auto;
                max-width: 100%;
            }

            .floating-questions.expanded {
                width: calc(100% - 24px);
                left: 12px;
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

    <style>
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 10px;
            background-color: #fccb2a;
            color: rgb(255, 255, 255);
            border: none;
            border-radius: 10%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .floating-btn:hover {
            background-color: #fff309;
            transform: scale(1.1);
        }
    </style>

    {{-- style modal --}}
    <style>
        /* Modal Styles */
        .custom-modal {
            display: none !important; /* Pastikan modal tersembunyi secara default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            padding: 15px;
            box-sizing: border-box;
            opacity: 0; /* Tambahkan opacity untuk transisi */
            transition: opacity 0.3s ease; /* Smooth transition */
        }

        /* State ketika modal ditampilkan */
        .custom-modal.show {
            display: flex !important;
            justify-content: center;
            align-items: center;
            opacity: 1;
        }

        .custom-modal-content {
            background: #fff;
            padding: 0;
            width: 100%;
            max-width: 700px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
            margin: auto;
            transform: scale(0.9) translateY(-20px); /* State awal untuk animasi */
            transition: transform 0.3s ease;
        }

        /* Animasi ketika modal muncul */
        .custom-modal.show .custom-modal-content {
            transform: scale(1) translateY(0);
        }

        /* ... CSS lainnya tetap sama ... */
        .custom-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 25px;
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .score-summary-header {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .score-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
        }

        .score-circle span {
            font-size: 1.2rem;
            line-height: 1;
        }

        .score-circle small {
            font-size: 0.8rem;
            opacity: 0.9;
            margin-top: 2px;
        }

        .modal-title {
            margin-left: 15px;
            font-size: 1.4rem;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: white;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background-color 0.2s;
            margin-left: 15px;
        }

        .modal-close:hover {
            background-color: rgba(255,255,255,0.2);
        }

        .custom-modal-body {
            padding: 20px;
            overflow-y: auto;
            flex-grow: 1;
        }

        .score-summary {
            display: none;
        }

        .result-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .result-table th {
            background-color: #f1f8ff;
            padding: 14px 12px;
            text-align: center;
            font-weight: 600;
            color: #2c3e50;
            border-bottom: 2px solid #e1e8ed;
        }

        .result-table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e1e8ed;
            transition: background-color 0.2s;
        }

        .result-table tr:hover td {
            background-color: #f9f9f9;
        }

        .answer-correct { 
            color: #27ae60; 
            font-weight: bold; 
        }
        
        .answer-wrong { 
            color: #e74c3c; 
            font-weight: bold; 
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status-badge.correct {
            background-color: rgba(39, 174, 96, 0.15);
            color: #27ae60;
        }

        .status-badge.wrong {
            background-color: rgba(231, 76, 60, 0.15);
            color: #e74c3c;
        }

        .status-icon {
            margin-right: 5px;
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            padding: 20px;
            border-top: 1px solid #e1e8ed;
            gap: 10px;
        }

        .modal-btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
        }

        .btn-primary {
            background-color: #3498db;
            color: white;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .btn-secondary {
            background-color: #ecf0f1;
            color: #2c3e50;
        }

        .btn-secondary:hover {
            background-color: #dde4e6;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .custom-modal {
                padding: 10px;
            }
            
            .custom-modal-content {
                max-height: 95vh;
            }
            
            .custom-modal-header {
                padding: 15px 20px;
            }
            
            .score-circle {
                width: 60px;
                height: 60px;
            }
            
            .score-circle span {
                font-size: 1rem;
            }
            
            .score-circle small {
                font-size: 0.7rem;
            }
            
            .modal-title {
                font-size: 1.2rem;
                margin-left: 10px;
            }
            
            .modal-close {
                width: 35px;
                height: 35px;
                font-size: 24px;
            }
            
            .custom-modal-body {
                padding: 15px;
            }
            
            .result-table {
                font-size: 0.9rem;
            }
            
            .result-table th, .result-table td {
                padding: 10px 8px;
            }
            
            .modal-actions {
                flex-direction: column;
            }
            
            .modal-btn {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .custom-modal {
                padding: 5px;
            }
            
            .result-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            
            .score-circle {
                width: 50px;
                height: 50px;
            }
            
            .score-circle span {
                font-size: 0.9rem;
            }
            
            .score-circle small {
                font-size: 0.6rem;
            }
            
            .status-badge {
                font-size: 0.8rem;
                padding: 4px 8px;
            }
        }
    </style>

    {{-- other --}}
    <style>
        .unanswered-highlight {
            border: 2px solid red;
            background: #ffe6e6;
        }
    </style>
</head>

<body>
    <header class="app-header" role="banner">
        <div class="header-row" aria-label="Header CAT Bahasa Inggris">
            <div class="brand">
                <div class="logo" aria-hidden="true">
                    <img class="" style="width: 70px;margin-left: 50px" src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
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

                <button onclick="confirmExit()" class="btn btn-danger">
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
                <div class="x-panel-inner">Content: Part 1</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Roman tunnels</h3>
                            <div class="passage-body">
                                <p><i><b>The Romans, who once controlled areas of Europe, North Africa and Asia Minor, adopted the construction techniques of other civilizations to build tunnels in their territories</b></i></p>
                                <p>The Persians, who lived in present-day Iran, were one of the first civilizations to build tunnels that provided a reliable supply of water to human settlements in dry areas. In the early first millennium BCE, they introduced the qanat method of tunnel construction, which consisted of placing posts over a hill in a straight line, to ensure that the tunnel kept to its route, and then digging vertical shafts down into the ground at regular intervals. Underground, workers removed the earth from between the ends of the shafts, creating a tunnel. The excavated soil was taken up to the surface using the shafts, which also provided ventilation during the work. Once the tunnel was completed, it allowed water to flow from the top of a hillside down towards a canal, which supplied water for human use. Remarkably, some qanats built by the Persians 2,700 years ago are still in use today.</p>
                                <p>They later passed on their knowledge to the Romans, who also used the qanat method to construct water-supply tunnels for agriculture. Roman qanat tunnels were constructed with vertical shafts dug at intervals of between 30 and 60 meters. The shafts were equipped with handholds and footholds to help those climbing in and out of them and were covered with a wooden or stone lid. To ensure that the shafts were vertical, Romans hung a plumb line from a rod placed across the top of each shaft and made sure that the weight at the end of it hung in the center of the shaft. Plumb lines were also used to measure the depth of the shaft and to determine the slope of the tunnel. The 5.6 kilometer Long Claudius tunnel, built in 41 CE to drain the Fucine Lake in central Italy, had shafts that were up to 122 meters deep, took 11 years to build and involved approximately 30,000 workers.</p>
                                <p>By the 6th century BCE, a second method of tunnel construction appeared called the counter- excavation method, in which the tunnel was constructed from both ends. It was used to cut through high mountains when the qanat method was not a practical alternative. This method required greater planning and advanced knowledge of surveying, mathematics and geometry as both ends of a tunnel had to meet correctly at the center of the mountain. Adjustments to the direction of the tunnel also had to be made whenever builders encountered geological problems or when it deviated from its set path. They constantly checked the tunnel’s advancing direction.</p>
                                <p>For example, by looking back at the light that penetrated through the tunnel mouth, and made corrections whenever necessary. Large deviations could happen, and they could result in one end of the tunnel not being usable. An inscription written on the side of a 428-meter tunnel, built by the Romans as part of the Saldae aqueduct system in modern-day Algeria, describes how the two teams of builders missed each other in the mountain and how the later construction of a lateral link between both corridors corrected the initial error.</p>
                                <p>The Romans dug tunnels for their roads using the counter-excavation method, whenever they encountered obstacles such as hills or mountains that were too high for roads to pass over. An example is the 37-meter-long, 6-meter-high, Furlo Pass Tunnel built in Italy in 69-79 CE. Remarkably, a modern road still uses this tunnel today. Tunnels were also built for mineral extraction. Miners would locate a mineral vein and then pursue it with shafts and tunnels underground. Traces of such tunnels used to mine gold can still be found at the Dolaucothi mines in Wales. When the sole purpose of a tunnel was mineral extraction, construction required less planning, as the tunnel route was determined by the mineral vein.</p>
                                <p>Roman tunnel projects were carefully planned and carried out. The length of time it took to construct a tunnel depended on the method being used and the type of rock being excavated. The qanat construction method was usually faster than the counter-excavation method as it was more straightforward. This was because the mountain could be excavated not only from the tunnel mouths but also from shafts. The type of rock could also influence construction times. When the rock was hard, the Romans employed a technique called fire quenching which consisted of heating the rock with fire, and then suddenly cooling it with cold water so that it would crack.</p>
                                <p>Progress through hard rock could be very slow, and it was not uncommon for tunnels to take years, if not decades, to be built. Construction marks left on a Roman tunnel in Bologna show that the rate of advance through solid rock was 30 centimeters per day. In contrast, the rate of advance of the Claudius tunnel can be calculated at 1.4 meters per day. Most tunnels had inscriptions showing the names of patrons who ordered construction and sometimes the name of the architect. For example, the 1.4-kilometer Cevlik tunnel in Turkey, built to divert the floodwater threatening the harbor of the ancient city of Seleuceia Pieria, had inscriptions on the entrance, still visible today, that also indicate that the tunnel was started in 69 CE and was completed in 81 CE.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- diagram_labeling --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 1-6</b></p>
                                    <p class="lead">Label the diagrams below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                    <img src="{{asset('own_assets/images/ielts-reading-testscambridge-ielts-16-academic-reading-test-4-1-3.jpg')}}" width="100%" alt="">
                                    <img src="{{asset('own_assets/images/ielts-reading-testscambridge-ielts-16-academic-reading-test-4-4-6.jpg')}}" width="100%" alt="">
                                </fieldset>
                                <fieldset class="q-item questions-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-4" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-5" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="6">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">6</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-6" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 7-10</b></p>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-q="7">
                                    <legend class="q-text">
                                        <span class="q-number">7</span>
                                        The counter-excavation method completely replaced the qanat method in the 6th century BCE.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="8">
                                    <legend class="q-text">
                                        <span class="q-number">8</span>
                                        Only experienced builders were employed to construct a tunnel using the counter-excavation method.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 8 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="9">
                                    <legend class="q-text">
                                        <span class="q-number">9</span>
                                        The information about a problem that occurred during the construction of the Saldae aqueduct system was found in an ancient book.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 9 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="10">
                                    <legend class="q-text">
                                        <span class="q-number">10</span>
                                        The mistake made by the builders of the Saldae aqueduct system was that the two parts of the tunnel failed to meet.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 10 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- sa --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 11-13</b></p>
                                    <p class="lead">Answer the questions below.</p>
                                    <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="11">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">11</span>
                                        <span style="flex: 1;">
                                            What type of mineral were the Dolaucothi mines in Wales built to extract?
                                            <span class="q-question">
                                                <input type="text" name="sa-TqMfMy8BLvZp0JDm-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="12">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">12</span>
                                        <span style="flex: 1;">
                                            In addition to the patron, whose name might be carved onto a tunnel?
                                            <span class="q-question">
                                                <input type="text" name="sa-TqMfMy8BLvZp0JDm-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="13">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">13</span>
                                        <span style="flex: 1;">
                                            What part of Seleuceia Pieria was the Çevlik tunnel built to protect?
                                            <span class="q-question">
                                                <input type="text" name="sa-TqMfMy8BLvZp0JDm-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Changes in reading habits</h3>
                            <div class="passage-body">
                                <p><i><b>What are the implications of the way we read today?</b></i></p>
                                <p>Look around on your next plane trip. The iPad is the new pacifier for babies and toddlers. Younger school-aged children read stories on smartphones; older kids don’t read at all, but hunch over video games. Parents and other passengers read on tablets or skim a flotilla of email and news feeds. Unbeknown to most of us, an invisible, game-changing transformation links everyone in this picture: the neuronal circuit that underlies the brain’s ability to read is subtly, rapidly changing and this has implications for everyone from the pre-reading toddler to the expert adult.</p>
                                <p>As work in neurosciences indicates, the acquisition of literacy necessitated a new circuit in our species’ brain more than 6,000 years ago. That circuit evolved from a very simple mechanism for decoding basic information, like the number of goats in one’s herd, to the present, highly elaborated reading brain. My research depicts how the present reading brain enables the development of some of our most important intellectual and affective processes: internalized knowledge, analogical reasoning, and inference; perspective-taking and empathy; critical analysis and the generation of insight. Research surfacing in many parts of the world now cautions that each of these essential ‘deep reading’ processes may be under threat as we move into digital- based modes of reading.</p>
                                <p>This is not a simple, binary issue of print versus digital reading and technological innovation. As MIT scholar Sherry Turkle has written, we do not err as a society when we innovate but when we ignore what we disrupt or diminish while innovating. In this hinge moment between print and digital cultures, society needs to confront what is diminishing in the expert reading circuit, what our children and older students are not developing, and what we can do about it.</p>
                                <p>We know from research that the reading circuit is not given to human beings through a genetic blueprint like vision or language; it needs an environment to develop. Further, it will adapt to that environment’s requirements — from different writing systems to the characteristics of whatever medium is used. If the dominant medium advantages processes that are fast, multi-task oriented and well-suited for large volumes of information, like the current digital medium, so will the reading circuit. As UCLA psychologist Patricia Greenfield writes, the result is that less attention and time will be allocated to slower, time-demanding deep reading processes.</p>
                                <p>Increasing reports from educators and from researchers in psychology and the humanities bear this out. English literature scholar and teacher Mark Edmundson describes how many college students actively avoid the classic literature of the 19th and 20th centuries in favour of something simpler as they no longer have the patience to read longer, denser, more difficult texts. We should be less concerned with students’ ‘cognitive impatience’, however, than by what may underlie it: the potential inability of large numbers of students to read with a level of critical analysis sufficient to comprehend the complexity of thought and argument found in more demanding texts.</p>
                                <p>Multiple studies show that digital screen use may be causing a variety of troubling downstream effects on reading comprehension in older high school and college students. In Stavanger, Norway, psychologist Anne Mangen and her colleagues studied how high school students comprehend the same material in different mediums. Mangen’s group asked subjects questions about a short story whose plot had universal student appeal; half of the students read the story on a tablet, the other half in paperback. Results indicated that students who read on print were superior in their comprehension to screen-reading peers, particularly in their ability to sequence detail and reconstruct the plot in chronological order.</p>
                                <p>Ziming Liu from San Jose State University has conducted a series of studies which indicate that the ‘new norm’ in reading is skimming, involving word-spotting and browsing through the text. Many readers now use a pattern when reading in which they sample the first line and then word- spot through the rest of the text. When the reading brain skims like this, it reduces time allocated to deep reading processes. In other words, we don’t have time to grasp complexity, to understand another’s feelings, to perceive beauty, and to create thoughts of the reader’s own.</p>
                                <p>The possibility that critical analysis, empathy and other deep reading processes could become the unintended ‘collateral damage’ of our digital culture is not a straightforward binary issue about print versus digital reading. It is about how we all have begun to read on various mediums and how that changes not only what we read, but also the purposes for which we read. Nor is it only about the young. The subtle atrophy of critical analysis and empathy affects us all equally. It affects our ability to navigate a constant bombardment of information. It incentivizes a retreat to the most familiar stores of unchecked information, which require and receive no analysis, leaving us susceptible to false information and irrational ideas.</p>
                                <p>There’s an old rule in neuroscience that does not alter with age: use it or lose it. It is a very hopeful principle when applied to critical thought in the reading brain because it implies choice. The story of the changing reading brain is hardly finished. We possess both the science and the technology to identify and redress the changes in how we read before they become entrenched. If we work to understand exactly what we will lose, alongside the extraordinary new capacities that the digital world has brought us, there is as much reason for excitement as caution.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 14-17</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-q="14">
                                    <legend class="q-text">
                                        <span class="q-number">14</span>
                                        What is the writer’s main point in the first paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Our use of technology is having a hidden effect on us.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Technology can be used to help youngsters to read.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Travellers should be encouraged to use technology on planes.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Playing games is a more popular use of technology than reading.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="15">
                                    <legend class="q-text">
                                        <span class="q-number">15</span>
                                        What main point does Sherry Turkle make about innovation?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Technological innovation has led to a reduction in print reading.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">We should pay attention to what might be lost when innovation occurs.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">We should encourage more young people to become involved in innovation.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">There is a difference between developing products and developing ideas.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="16">
                                    <legend class="q-text">
                                        <span class="q-number">16</span>
                                        What point is the writer making in the fourth paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 16 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Humans have an inborn ability to read and write.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Reading can be done using many different mediums.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Writing systems make unexpected demands on the brain.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Some brain circuits adjust to whatever is required of them.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="17">
                                    <legend class="q-text">
                                        <span class="q-number">17</span>
                                        According to Mark Edmundson, the attitude of college students
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 17 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">has changed the way he teaches.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">has influenced what they select to read.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">does not worry him as much as it does others.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">does not match the views of the general public.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 18-22</h3>
                                    <p class="lead">Complete the summary using the list of words, <b>A-H</b>, below.</p>
                                    <p>Write the correct letter, A-H, in boxes on your answer sheet.</p>

                                    <table cellspacing="20" class="q-table q-table-letters">
                                        <tr>
                                            <td><b>A</b></td><td>fast</td>
                                            <td><b>B</b></td><td>isolated</td>
                                            <td><b>C</b></td><td>emotional</td>
                                            <td><b>D</b></td><td>worrying</td>
                                        </tr>
                                        <tr>
                                            <td><b>E</b></td><td>many</td>
                                            <td><b>F</b></td><td>hard</td>
                                            <td><b>G</b></td><td>combined</td>
                                            <td><b>H</b></td><td>thorough</td>
                                        </tr>
                                    </table>

                                    <h3>Studies on digital screen use</h3>

                                    <p>
                                        There have been many studies on digital screen use, showing some
                                        <span class="q-number-box">18</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-1" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        trends. Psychologist Anne Mangen gave high-school students a short story to read, half using digital and half using print mediums. Her team then used a question-and-answer technique to find out how
                                        <span class="q-number-box">19</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-2" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        each group’s understanding of the plot was. The findings showed a clear pattern in the responses, with those who read screens finding the order of information
                                        <span class="q-number-box">20</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-3" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        to recall.
                                    </p>

                                    <p>
                                        Studies by Ziming Liu show that students are tending to read
                                        <span class="q-number-box">21</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-4" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        words and phrases in a text to save time. This approach, she says, gives the reader a superficial understanding of the
                                        <span class="q-number-box">22</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-5" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        content of material, leaving no time for thought.
                                    </p>
                                </fieldset>

                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 23-26</b></p>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>YES</strong> if the statement agrees with the information</li>
                                        <li><strong>NO</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
                                            about this.</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-q="23">
                                    <legend class="q-text">
                                        <span class="q-number">23</span>
                                        The medium we use to read can affect our choice of reading content.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="24">
                                    <legend class="q-text">
                                        <span class="q-number">24</span>
                                        Some age groups are more likely to lose their complex reading skills than others.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="25">
                                    <legend class="q-text">
                                        <span class="q-number">25</span>
                                        False information has become more widespread in today’s digital era.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="26">
                                    <legend class="q-text">
                                        <span class="q-number">26</span>
                                        We still have opportunities to rectify the problems that technology is presenting.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 26 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Konten: Part 3</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Attitudes towards Artificial Intelligence</h3>
                            <div class="passage-body">
                                <h3 class="passage-title">A</h3>
                                <p>Artificial intelligence (AI) can already predict the future. Police forces are using it to map when and where crime is likely to occur. Doctors can use it to predict when a patient is most likely to have a heart attack or stroke. Researchers are even trying to give AI imagination so it can plan for unexpected consequences.</p>
                                <p>Many decisions in our lives require a good forecast, and AI is almost always better at forecasting than we are. Yet for all these technological advances, we still seem to deeply lack confidence in Al predictions. Recent cases show that people don’t like relying on AI and prefer to trust human experts, even if these experts are wrong.</p>
                                <p>If we want AI to really benefit people, we need to find a way to get people to trust it. To do that, we need to understand why people are so reluctant to trust AI in the first place.</p>
                                <h3 class="passage-title">B</h3>
                                <p>Take the case of Watson for Oncology, one of technology giant IBM’s supercomputer programs. Their attempt to promote this program to cancer doctors was a PR disaster. The AI promised to deliver top-quality recommendations on the treatment of 12 cancers that accounted for 80% of the world’s eases. But when doctors first interacted with Watson, they found themselves in a rather difficult situation. On the one hand, if Watson provided guidance about a treatment that coincided with their own opinions, physicians did not see much point in Watson’s recommendations. The supercomputer was simply telling them what they already knew, and these recommendations did not change the actual treatment.</p>
                                <p>On the other hand, if Watson generated a recommendation that contradicted the experts’ opinion, doctors would typically conclude that Watson wasn’t competent. And the machine wouldn’t be able to explain why its treatment was plausible because its machine-learning algorithms were simply too complex to be fully understood by humans. Consequently, this has caused even more suspicion and disbelief, leading many doctors to ignore the seemingly outlandish AI recommendations and stick to their own expertise.</p>
                                <h3 class="passage-title">C</h3>
                                <p>This is just one example of people’s lack of confidence in AI and their reluctance to accept what AI has to offer. Trust in other people is often based on our understanding of how others think and having experience of their reliability. This helps create a psychological feeling of safety. AI, on the other hand, is still fairly new and unfamiliar to most people. Even if it can be technically explained (and that’s not always the case), AI’s decision-making process is usually too difficult for most people to comprehend. And interacting with something we don’t understand can cause anxiety and give us a sense that we’re losing control.</p>
                                <p>Many people are also simply not familiar with many instances of AI actually working, because it often happens in the background. Instead they are acutely aware of instances where AI goes wrong. Embarrassing AI failures receive a disproportionate amount of media attention, emphasising the message that we cannot rely on technology. Machine learning is not foolproof, in part because the humans who design it aren’t.</p>
                                <h3 class="passage-title">D</h3>
                                <p>Feelings about AI run deep. In a recent experiment, people from a range of backgrounds were given various sci-fi films about AI to watch and then asked questions about automation in everyday life. It was found that, regardless of whether the film they watched depicted AI in a positive or negative light, simply watching a cinematic vision of our technological future polarised the participants’ attitudes. Optimists became more extreme in their enthusiasm for AI and sceptics became even more guarded.</p>
                                <p>This suggests people use relevant evidence about AI in a biased manner to support their existing attitudes, a deep-rooted human tendency known as “confirmation bias”. As AI is represented more and more in media and entertainment, it could lead to a society split between those who benefit from AI and those who reject it. More pertinently, refusing to accept the advantages offered by AI could place a large group of people at a serious disadvantage.</p>
                                <h3 class="passage-title">E</h3>
                                <p>Fortunately, we already have some ideas about how to improve trust in AI. Simply having previous experience with AI can significantly improve people’s opinions about the technology, as was found in the study mentioned above. Evidence also suggests the more you use other technologies such as the internet, the more you trust them.</p>
                                <p>Another solution may be to reveal more about the algorithms which AI uses and the purposes they serve. Several high-profile social media companies and online marketplaces already release transparency reports about government requests and surveillance disclosures. A similar practice for AI could help people have a better understanding of the way algorithmic decisions are made.</p>
                                <h3 class="passage-title">F</h3>
                                <p>Research suggests that allowing people some control over AI decision-making could also improve trust and enable AI to learn from human experience. For example, one study showed that when people were allowed the freedom to slightly modify an algorithm, they felt more satisfied with its decisions, more likely to believe it was superior and more likely to use it in the future.</p>
                                <p>We don’t need to understand the intricate inner workings of AI systems, but if people are given a degree of responsibility for how they are implemented, they will be more willing to accept AI into their lives.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- mh --}}
                                <fieldset class="q-item">
                                    <h3>Questions 27-32</h3>
                                    <p class="lead">The Reading Passage has six sections, <b>A-F</b>.</p>
                                    <p>Choose the correct heading for each section from the list of headings below.</p>
                                    <p>Write the correct number, <b>i-viii</b>, in boxes on your answer sheet.</p>
                                    <p><b>List of Headings</b></p>
                                    <ul class="legend">
                                        <li><strong>i</strong> An increasing divergence of attitudes towards AI</li>
                                        <li><strong>ii</strong> Reasons why we have more faith in human judgement than in AI</li>
                                        <li><strong>iii</strong> The superiority of AI projections over those made by humans</li>
                                        <li><strong>iv</strong> The process by which AI can help us make good decisions</li>
                                        <li><strong>v</strong> The advantages of involving users in AI processes</li>
                                        <li><strong>vi</strong> Widespread distrust of an AI innovation</li>
                                        <li><strong>vii</strong> Encouraging openness about how AI functions</li>
                                        <li><strong>viii</strong> A surprisingly successful AI application</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="27">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">27</span>
                                        <span style="flex: 1;">
                                            Section <b>A</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="28">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">28</span>
                                        <span style="flex: 1;">
                                            Section <b>B</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="29">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">29</span>
                                        <span style="flex: 1;">
                                            Section <b>C</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="30">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">30</span>
                                        <span style="flex: 1;">
                                            Section <b>D</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="31">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">31</span>
                                        <span style="flex: 1;">
                                            Section <b>E</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="32">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">32</span>
                                        <span style="flex: 1;">
                                            Section <b>F</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 33-35</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-q="33">
                                    <legend class="q-text">
                                        <span class="q-number">33</span>
                                        What is the writer doing in Section A?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 33 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">providing a solution to a concern</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">justifying an opinion about an issue</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">highlighting the existence of a problem</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">explaining the reasons for a phenomenon</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="34">
                                    <legend class="q-text">
                                        <span class="q-number">34</span>
                                        According to Section C, why might some people be reluctant to accept AI?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 34 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">They are afraid it will replace humans in decision-making jobs.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Its complexity makes them feel that they are at a disadvantage.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">They would rather wait for the technology to be tested over a period of time.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Misunderstandings about how it works make it seem more challenging than it is.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="35">
                                    <legend class="q-text">
                                        <span class="q-number">35</span>
                                        What does the writer say about the media in Section C of the text?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 35 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It leads the public to be mistrustful of AI.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It devotes an excessive amount of attention to AI.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Its reports of incidents involving AI are often inaccurate.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It gives the impression that AI failures are due to designer error.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 36-40</b></p>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>YES</strong> if the statement agrees with the information</li>
                                        <li><strong>NO</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
                                            about this.</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-q="36">
                                    <legend class="q-text">
                                        <span class="q-number">36</span>
                                        Subjective depictions of AI in sci-fi films make people change their opinions about automation.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 36 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="37">
                                    <legend class="q-text">
                                        <span class="q-number">37</span>
                                        Portrayals of AI in media and entertainment are likely to become more positive.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 37 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-6" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-6" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="38">
                                    <legend class="q-text">
                                        <span class="q-number">38</span>
                                        Rejection of the possibilities of AI may have a negative effect on many people’s lives.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 38 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-7" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-7" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="39">
                                    <legend class="q-text">
                                        <span class="q-number">39</span>
                                        Familiarity with AI has very little impact on people’s attitudes to the technology.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 39 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-8" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-8" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-8" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="40">
                                    <legend class="q-text">
                                        <span class="q-number">40</span>
                                        AI applications which users are able to modify are more likely to gain consumer approval.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 40 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-9" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-9" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-9" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
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

    <button class="floating-btn" id="try-again" onclick="retryQuiz()" style="display: none">
        <i class="fas fa-paper-plane" style="margin-right: 10px"></i> Try Again
    </button>

    <button class="floating-btn" id="doneBtn">
        <i class="fas fa-paper-plane" style="margin-right: 10px"></i> Submit
    </button>

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

    <div id="resultModal" class="custom-modal">
        <div class="custom-modal-content">
            <div class="custom-modal-header">
                <div class="score-summary-header">
                    <div class="score-circle" id="scoreCircle">
                        <span id="scoreDisplay">0/0</span>
                        <small id="scorePercentage">0</small>
                    </div>
                    <div class="modal-title">Your Results</div>
                </div>
                <button class="modal-close" onclick="closeModal()">×</button>
            </div>

            <div class="custom-modal-body">
                <!-- Results Table -->
                <table class="result-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Your Answer</th>
                            <th>Correct Answer</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="resultsTableBody">
                        <!-- Results will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
            
            <!-- Action Buttons -->
            <div class="modal-actions">
                <button class="modal-btn btn-secondary" onclick="closeModal()">Close</button>
                <button class="modal-btn btn-primary" onclick="retryQuiz()">Try Again</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        function confirmExit() {
            if (confirm('Are you sure you want to end the test?')) {
                location.href = '/ielts/categories?set-id={{ $set->kode }}';
            }
        }
        
        let scoreMap = [
            {min: 39, max: 40, score: 9.0},
            {min: 37, max: 38, score: 8.5},
            {min: 35, max: 36, score: 8.0},
            {min: 33, max: 34, score: 7.5},
            {min: 30, max: 32, score: 7.0},
            {min: 27, max: 29, score: 6.5},
            {min: 23, max: 26, score: 6.0},
            {min: 19, max: 22, score: 5.5},
            {min: 15, max: 18, score: 5.0},
            {min: 13, max: 14, score: 4.5},
            {min: 10, max: 12, score: 4.0},
            {min: 8,  max: 9,  score: 3.5},
            {min: 6,  max: 7,  score: 3.0},
            {min: 4,  max: 5,  score: 2.5}
        ];

        function convertScore(correctCount) {
            for (let row of scoreMap) {
                if (correctCount >= row.min && correctCount <= row.max) {
                    return row.score;
                }
            }
            return 0; // jika kurang dari 4 benar
        }
    </script>

    <script>

        function showModal(title = "Hasil Jawaban Anda") {
            $("#modalScoreTitle").text(title);
            $("#resultModal").addClass("show");
            $("body").css("overflow", "hidden");
        }

        function closeModal() {
            $("#resultModal").removeClass("show");
            $("body").css("overflow", "auto");
            
            // Pastikan modal benar-benar tersembunyi setelah animasi
            setTimeout(function() {
                $("#resultModal").hide();
            }, 300);
        }

        function retryQuiz() {
            closeModal();

            location.reload()
        }

        $(document).on("click", ".modal-close, .btn-secondary", function() {
            closeModal();
        });

        $(document).on("click", function(e) {
            if (e.target.id === "resultModal") {
                closeModal();
            }
        });

        $(document).on("keydown", function(e) {
            if (e.key === "Escape") {
                closeModal();
            }
        });

        $(document).ready(function () {
            $("#resultModal").removeClass("show").hide();
        });
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
                    
                    let results = [];

                    $('.q-item').each(function () {
                        const type = $(this).data('type'); 
                        const qnum = $(this).data('q');

                        if (typeof type === 'undefined') return;

                        let name = null;
                        let answer = null;

                        switch (type) {
                            case 'tfng':
                            case 'oc':
                            case 'ynng':
                                const checked = $(this).find('input[type="radio"]:checked');
                                if (checked.length > 0) {
                                    name = checked.attr('name');
                                    answer = checked.val();
                                } else {
                                    // fallback jika belum dipilih
                                    const anyRadio = $(this).find('input[type="radio"]').first();
                                    if (anyRadio.length > 0) {
                                        name = anyRadio.attr('name');
                                    }
                                }
                                break;

                            case 'sa':
                            case 'tc':
                                const input = $(this).find('input[type="text"]');
                                if (input.length > 0) {
                                    name = input.attr('name');
                                    answer = input.val();
                                }
                                break;

                            case 'mh':
                            case 'mse':
                                const select = $(this).find('select');
                                if (select.length > 0) {
                                    name = select.attr('name');
                                    answer = select.val();
                                }
                                break;
                        }

                        results.push({
                            type: type,
                            name: name,
                            answer: answer || null,
                            question: qnum || null
                        });
                    });

                    $.ajax({
                        url: '/ielts/mock-test/check',
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            set_id: 'TqMfMy8BLvZp0JDm',
                            kategori: 'reading',
                            answers: results,
                            tipe_test: 'practice'
                        },
                        success: function (response) {
                            $("#try-again").css('display', '');
                            $("#doneBtn").css('display', 'none');

                            if (response.status === 'ok') {
                                let correctCount = 0;
                                let total = Object.keys(response.results).length;
                                let tableRows = '';
                                let questionNumber = 1;

                                $.each(response.results, function (key, data) {
                                    let isCorrect = data.status === 'correct';
                                    if (isCorrect) correctCount++;

                                    let correctAnswer = data.correct || '';
                                    let userAnswer = data.user || '';
                                    if (!correctAnswer && isCorrect) correctAnswer = userAnswer;
                                    if (!correctAnswer) correctAnswer = 'NOT GIVEN';

                                    tableRows += `
                                        <tr>
                                            <td><strong>${questionNumber++}</strong></td>
                                            <td><span class="answer-display ${isCorrect ? 'answer-correct' : 'answer-wrong'}">${userAnswer}</span></td>
                                            <td><span class="answer-display answer-correct-option">${correctAnswer}</span></td>
                                            <td>
                                                <span class="status-badge ${isCorrect ? 'correct' : 'wrong'}">
                                                    <span class="status-icon">${isCorrect ? '✅' : '❌'}</span>
                                                    ${isCorrect ? 'Correct' : 'Wrong'}
                                                </span>
                                            </td>
                                        </tr>
                                    `;
                                });

                                // Update skor di UI
                                $("#scoreDisplay").text(`${correctCount}/${total}`);
                                $("#scorePercentage").text(`${convertScore(correctCount)}`);

                                let percentage = (correctCount / total) * 100;
                                let scoreCircle = $(".score-circle");
                                if (percentage >= 80) {
                                    scoreCircle.css("background", "linear-gradient(135deg, #27ae60, #2ecc71)");
                                } else if (percentage >= 60) {
                                    scoreCircle.css("background", "linear-gradient(135deg, #f39c12, #e67e22)");
                                } else {
                                    scoreCircle.css("background", "linear-gradient(135deg, #e74c3c, #c0392b)");
                                }

                                $("#resultsTableBody").html(tableRows);

                                // tampilkan modal hasil
                                showModal(`Score: ${correctCount} / ${total}`);
                            } else {
                                alert('Terjadi kesalahan: ' + response.message);
                            }
                        },
                        error: function (xhr) {
                            console.error(xhr.responseText);
                            alert('Terjadi kesalahan: ' + xhr.status);
                        }
                    });
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
                    'Instructions:\n- Read the questions carefully\n- The timer runs automatically\n- Click "Finish" to submit'
                );

            });

            document.getElementById('doneBtn').addEventListener('click', function() {
                const confirmFinish = confirm('Do you want to end the test now?');
                if (confirmFinish) {
                    let results = [];

                    $('.q-item').each(function () {
                        const type = $(this).data('type'); 
                        const qnum = $(this).data('q');

                        if (typeof type === 'undefined') return;

                        let name = null;
                        let answer = null;

                        switch (type) {
                            case 'tfng':
                            case 'oc':
                            case 'ynng':
                                const checked = $(this).find('input[type="radio"]:checked');
                                if (checked.length > 0) {
                                    name = checked.attr('name');
                                    answer = checked.val();
                                } else {
                                    // fallback jika belum dipilih
                                    const anyRadio = $(this).find('input[type="radio"]').first();
                                    if (anyRadio.length > 0) {
                                        name = anyRadio.attr('name');
                                    }
                                }
                                break;

                            case 'sa':
                            case 'tc':
                                const input = $(this).find('input[type="text"]');
                                if (input.length > 0) {
                                    name = input.attr('name');
                                    answer = input.val();
                                }
                                break;

                            case 'mh':
                            case 'mse':
                                const select = $(this).find('select');
                                if (select.length > 0) {
                                    name = select.attr('name');
                                    answer = select.val();
                                }
                                break;
                        }

                        results.push({
                            type: type,
                            name: name,
                            answer: answer || null,
                            question: qnum || null
                        });
                    });

                    $.ajax({
                        url: '/ielts/mock-test/check',
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            set_id: 'TqMfMy8BLvZp0JDm',
                            kategori: 'reading',
                            answers: results,
                            tipe_test: 'practice'
                        },
                        success: function (response) {
                            $("#try-again").css('display', '');
                            $("#doneBtn").css('display', 'none');

                            if (response.status === 'ok') {
                                let correctCount = 0;
                                let total = Object.keys(response.results).length;
                                let tableRows = '';
                                let questionNumber = 1;

                                $.each(response.results, function (key, data) {
                                    let isCorrect = data.status === 'correct';
                                    if (isCorrect) correctCount++;

                                    let correctAnswer = data.correct || '';
                                    let userAnswer = data.user || '';
                                    if (!correctAnswer && isCorrect) correctAnswer = userAnswer;
                                    if (!correctAnswer) correctAnswer = 'NOT GIVEN';

                                    tableRows += `
                                        <tr>
                                            <td><strong>${questionNumber++}</strong></td>
                                            <td><span class="answer-display ${isCorrect ? 'answer-correct' : 'answer-wrong'}">${userAnswer}</span></td>
                                            <td><span class="answer-display answer-correct-option">${correctAnswer}</span></td>
                                            <td>
                                                <span class="status-badge ${isCorrect ? 'correct' : 'wrong'}">
                                                    <span class="status-icon">${isCorrect ? '✅' : '❌'}</span>
                                                    ${isCorrect ? 'Correct' : 'Wrong'}
                                                </span>
                                            </td>
                                        </tr>
                                    `;
                                });

                                // Update skor di UI
                                $("#scoreDisplay").text(`${correctCount}/${total}`);
                                $("#scorePercentage").text(`${convertScore(correctCount)}`);

                                let percentage = (correctCount / total) * 100;
                                let scoreCircle = $(".score-circle");
                                if (percentage >= 80) {
                                    scoreCircle.css("background", "linear-gradient(135deg, #27ae60, #2ecc71)");
                                } else if (percentage >= 60) {
                                    scoreCircle.css("background", "linear-gradient(135deg, #f39c12, #e67e22)");
                                } else {
                                    scoreCircle.css("background", "linear-gradient(135deg, #e74c3c, #c0392b)");
                                }

                                $("#resultsTableBody").html(tableRows);

                                // tampilkan modal hasil
                                showModal(`Score: ${correctCount} / ${total}`);
                            } else {
                                alert('Terjadi kesalahan: ' + response.message);
                            }
                        },
                        error: function (xhr) {
                            console.error(xhr.responseText);
                            alert('Terjadi kesalahan: ' + xhr.status);
                        }
                    });
                }
            });

            // Mulai countdown (contoh: 15 menit)
            startCountdown(13 * 60);
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
        function retryQuiz() {
            location.reload();
        }
        
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
                    'tfng': 13,
                    'tfng2': 13,
                    'ynng': 14,
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
