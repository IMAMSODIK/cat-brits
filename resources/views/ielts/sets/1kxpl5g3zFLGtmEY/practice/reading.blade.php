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

    <!-- style bagian reading + questions -->
    <style>
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

        #panel-tc .q-options {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #panel-tc .q-number-box,
        #panel-nc .q-number-box,
        #panel-summary_completion .q-number-box,
        #panel-summary_completion2 .q-number-box {
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

        #panel-tc .q-text,
        #panel-nc .q-text,
        #panel-summary_completion .q-text,
        #panel-summary_completion2 .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        #panel-tc input {
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

        .q-option.correct {
            background-color: #c8f7c5;
            /* hijau muda */
            border: 2px solid #27ae60;
            border-radius: 6px;
        }

        .q-option.wrong {
            background-color: #f9c0c0;
            /* merah muda */
            border: 2px solid #e74c3c;
            border-radius: 6px;
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

                <div id="timer" class="timer" aria-live="polite" aria-label="Sisa waktu" style="display: none">
                    <i class="fa-regular fa-clock"></i>
                    <span id="timeText">00:00</span>
                </div>

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


    <section class="parts-section" aria-label="Pilihan Part Soal" id="part-soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="nc">
            <button class="x-tab is-active" role="tab" id="tab-nc" aria-controls="panel-nc" aria-selected="true"
                data-id="nc">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="false" data-id="tfng">True/False/Not Given</button>
            <button class="x-tab" role="tab" id="tab-matching_information" aria-controls="panel-matching_information" aria-selected="false"
                data-id="matching_information">Matching Information</button>
            <button class="x-tab" role="tab" id="tab-two_choices" aria-controls="panel-two_choices" aria-selected="false"
                data-id="two_choices">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-two_choices2" aria-controls="panel-two_choices2" aria-selected="false"
                data-id="two_choices2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-summary_completion" aria-controls="panel-summary_completion" aria-selected="false"
                data-id="summary_completion">Summary Completion</button>
            <button class="x-tab" role="tab" id="tab-matching_features" aria-controls="panel-matching_features" aria-selected="false"
                data-id="matching_features">Matching Features</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Yes/No/Not Given</button>
            <button class="x-tab" role="tab" id="tab-summary_completion2" aria-controls="panel-summary_completion2" aria-selected="false"
                data-id="summary_completion2">Summary Completion 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-nc" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-nc">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">THE IMPORTANCE OF CHILDREN’S PLAY</h3>
                            <div class="passage-body">
                                <p>Brick by brick, six-year-old Alice is building a magical kingdom. Imagining fairy-tale turrets and fire-breathing dragons, wicked witches and gallant heroes, she’s creating an enchanting world. Although she isn’t aware of it, this fantasy is helping her take her first steps towards her capacity for creativity and so it will have important repercussions in her adult life.</p>
                                <p>Minutes later, Alice has abandoned the kingdom in favour of playing schools with her younger brother. When she bosses him around as his ‘teacher’, she’s practising how to regulate her emotions through pretence. Later on, when they tire of this and settle down with a board game, she’s learning about the need to follow rules and take turns with a partner.</p>
                                <p>‘Play in all its rich variety is one of the highest achievements of the human species,’ says Dr David Whitebread from the Faculty of Education at the University of Cambridge, UK. ‘It underpins how we develop as intellectual, problem-solving adults and is crucial to our success as a highly adaptable species.’</p>
                                <p>Recognizing the importance of play is not new: over two millennia ago, the Greek philosopher Plato extolled its virtues as a means of developing skills for adult life, and ideas about play-based learning have been developing since the 19th century.</p>
                                <p>But we live in changing times, and Whitebread is mindful of a worldwide decline in play, pointing out that over half the people in the world now live in cities. ‘The opportunities for free play, which I experienced almost every day of my childhood, are becoming increasingly scarce,’ he says. Outdoor play is curtailed by perceptions of risk to do with traffic, as well as parents’ increased wish to protect their children from being the victims of crime, and by the emphasis on ‘earlier is better’ which is leading to greater competition in academic learning and schools.</p>
                                <p>International bodies like the United Nations and the European Union have begun to develop policies concerned with children’s right to play, and to consider implications for leisure facilities and educational programmes. But what they often lack is the evidence to base policies on.</p>
                                <p>‘The type of play we are interested in is child-initiated, spontaneous and unpredictable – but, as soon as you ask a five-year-old “to play”, then you as the researcher have intervened,’ explains Dr Sara Baker. ‘And we want to know what the long-term impact of play is. It’s a real challenge.’</p>
                                <p>Dr Jenny Gibson agrees, pointing out that although some of the steps in the puzzle of how and why play is important have been looked at, there is very little data on the impact it has on the child’s later life.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-nc">
                                <fieldset class="q-item">
                                    <h3>Questions 1-8</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3>Children’s play</h3>

                                    <p><b>Uses of children’s play</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="1">
                                                building a ‘magical kingdom’ may help develop
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="1kxpl5g3zFLGtmEY-1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="2">
                                                board games involve
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="1kxpl5g3zFLGtmEY-2" class="q-text" placeholder="">
                                                and turn-taking
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>Recent changes affecting children’s play</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="3">
                                                population of
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="1kxpl5g3zFLGtmEY-3" class="q-text" placeholder="">
                                                have grown
                                            </div>
                                        </li>
                                        <li>opportunities for free play are limited due to</li>
                                        <ul>
                                            <li>
                                                <div class="q-list" data-q="4">
                                                    fear of
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="1kxpl5g3zFLGtmEY-4" class="q-text" placeholder="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-list" data-q="5">
                                                    fear of
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="1kxpl5g3zFLGtmEY-5" class="q-text" placeholder="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-list" data-q="6">
                                                    increased 
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="1kxpl5g3zFLGtmEY-6" class="q-text" placeholder="">
                                                    in schools
                                                </div>
                                            </li>
                                        </ul>
                                    </ul>

                                    <p><b>International policies on children’s play</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="7">
                                                it is difficult to find
                                                <span class="q-number-box">7</span>
                                                <input type="text" name="1kxpl5g3zFLGtmEY-7" class="q-text" placeholder="">
                                                to support new policies
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="8">
                                                research needs to study the impact of play on the rest of the child’s
                                                <span class="q-number-box">8</span>
                                                <input type="text" name="1kxpl5g3zFLGtmEY-8" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-nc" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-nc">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng" hidden>
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>If playful experiences do facilitate this aspect of development, say the researchers, it could be extremely significant for educational practices, because the ability to self-regulate has been shown to be a key predictor of academic performance.</p>
                                <p>Gibson adds: ‘Playful behavior is also an important indicator of healthy social and emotional development. In my previous research, I investigated how observing children at play can give us important clues about their well-being and can even be useful in the diagnosis of neurodevelopmental disorders like autism.’</p>
                                <p>Whitebread’s recent research has involved developing a play-based approach to supporting children’s writing. ‘Many primary school children find writing difficult, but we showed in a previous study that a playful stimulus was far more effective than an instructional one.’ Children wrote longer and better-structured stories when they first played with dolls representing characters in the story. In the latest study, children first created their story with Lego*, with similar results. ‘Many teachers commented that they had always previously had children saying they didn’t know what to write about. With the Lego building, however, not a single child said this through the whole year of the project.’</p>
                                <p>Whitebread, who directs PEDAL, trained as a primary school teacher in the early 1970s, when, as he describes, ‘the teaching of young children was largely a quiet backwater, untroubled by any serious intellectual debate or controversy.’ Now, the landscape is very different, with hotly debated topics such as school starting age.</p>
                                <p>‘Somehow the importance of play has been lost in recent decades. It’s regarded as something trivial, or even as something negative that contrasts with “work”. Let’s not lose sight of its benefits, and the fundamental contributions it makes to human achievements in the arts, sciences and technology. Let’s make sure children have a rich diet of play experiences.’</p>
                                <hr>
                                <p>* Lego: coloured plastic building blocks and other pieces that can be joined together</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng">
                                <fieldset class="q-item">
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
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        Children with good self-control are known to be likely to do well at school later on.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        The way a child plays may provide information about possible medical problems.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Playing with dolls was found to benefit girls’ writing more than boys’ writing.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Children had problems thinking up ideas when they first created the story with Lego.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        People nowadays regard children’s play as less significant than they did in the past.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button  type="button" class="btn btn-primary try-again" id="again-tfng" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-tfng">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-matching_information" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching Information</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">The growth of bike-sharing schemes around the world</h3>
                            <div class="passage-body">
                                <p><i>How Dutch engineer Luud Schimmelpennink helped to devise urban bike-sharing schemes</i></p>
                                <h3>A</h3>
                                <p>The original idea for an urban bike-sharing scheme dates back to a summer’s day in Amsterdam in 1965. Provo, the organization that came up with the idea, was a group of Dutch activists who wanted to change society. They believed the scheme, which was known as the Witte Fietsenplan, was an answer to the perceived threats of air pollution and consumerism. In the centre of Amsterdam, they painted a small number of used bikes white. They also distributed leaflets describing the dangers of cars and inviting people to use the white bikes. The bikes were then left unlocked at various locations around the city, to be used by anyone in need of transport.</p>
                                <h3>B</h3>
                                <p>Luud Schimmelpennink, a Dutch industrial engineer who still lives and cycles in Amsterdam, was heavily involved in the original scheme. He recalls how the scheme succeeded in attracting a great deal of attention – particularly when it came to publicising Provo’s aims – but struggled to get off the ground. The police were opposed to Provo’s initiatives and almost as soon as the white bikes were distributed around the city, they removed them. However, for Schimmelpennink and for bike-sharing schemes in general, this was just the beginning. ‘The first Witte Fietsenplan was just a symbolic thing,’ he says. ‘We painted a few bikes white, that was all. Things got more serious when I became a member of the Amsterdam city council two years later.’</p>
                                <h3>C</h3>
                                <p>Schimmelpennink seized this opportunity to present a more elaborate Witte Fietsenplan to the city council. ‘My idea was that the municipality of Amsterdam would distribute 10,000 white bikes over the city, for everyone to use,’ he explains. ‘I made serious calculations. It turned out that a white bicycle – per person, per kilometer – would cost the municipality only 10% of what it contributed to public transport per person per kilometer.’ Nevertheless, the council unanimously rejected the plan. ‘They said that the bicycle belongs to the past. They saw a glorious future for the car,’ says Schimmelpennink. But he was not in the least discouraged.</p>
                                <h3>D</h3>
                                <p>Schimmelpennink never stopped believing in bike-sharing, and in the mid-90s, two Danes asked for his help to set up a system in Copenhagen. The result was the world’s first large-scale bike-share programme. It worked on a deposit: ‘You dropped a coin in the bike and when you returned it, you got your money back.’ After setting up the Danish system, Schimmelpennink decided to try his luck again in the Netherlands – and this time he succeeded in arousing the interest of the Dutch Ministry of Transport. ‘Times had changed,’ he recalls. ‘People had become more environmentally conscious, and the Danish experiment had proved that bike-sharing was a real possibility.’ A new Witte Fietsenplan was launched in 1999 in Amsterdam. However, riding a white bike was no longer free; it cost one guilder per trip and payment was made with a chip card developed by the Dutch bank Postbank. Schimmelpennink designed conspicuous, sturdy white bikes locked in special racks which could be opened with the chip card – the plan started with 250 bikes, distributed over five stations.</p>
                                <h3>E</h3>
                                <p>Theo Molenaar, who was a system designer for the project, worked alongside Schimmelpennink. ‘I remember when we were testing the bike racks, he announced that he had already designed better ones. But of course, we had to go through with the ones we had.’ The system, however, was prone to vandalism and theft. ‘After every weekend there would always be a couple of bikes missing,’ Molenaar says. ‘I really have no idea what people did with them, because they could instantly be recognised as white bikes.’ But the biggest blow came when Postbank decided to abolish the chip card, because it wasn’t profitable. ‘That chip card was pivotal to the system,’ Molenaar says. ‘To continue the project we would have needed to set up another system, but the business partner had lost interest.’</p>
                                <h3>F</h3>
                                <p>Schimmelpennink was disappointed, but – characteristically – not for long. In 2002 he got a call from the French advertising corporation JC Decaux, who wanted to set up his bike-sharing scheme in Vienna. ‘That went really well. After Vienna, they set up a system in Lyon. Then in 2007, Paris followed. That was a decisive moment in the history of bike-sharing.’ The huge and unexpected success of the Parisian bike-sharing programme, which now boasts more than 20,000 bicycles, inspired cities all over the world to set up their own schemes, all modelled on Schimmelpennink’s. ‘It’s wonderful that this happened,’ he says. ‘But financially I didn’t really benefit from it, because I never filed for a patent.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-matching_information">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-5</b></p>
                                    <p class="lead">The Reading Passage has seven paragraphs,  <b>A-G</b>.</p>
                                    <p>Which paragraph contains the following information?</p>
                                    <p class="lead">Write the correct letter, <b>A-G</b>, in boxes on your answer sheet <br> <b>NB</b> You may use any letter more than once.</p>
                                    <p><b>NB</b>  You may use any letter more than once.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            a description of how people misused a bike-sharing scheme
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            an explanation of why a proposed bike-sharing scheme was turned down
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            a reference to a person being unable to profit their work
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            an explanation of the potential savings a bike-sharing scheme would bring
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            a reference to the problems a bike-sharing scheme was intended to solve
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-matching_information" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-matching_information">
                                        Submit
                                    </button>
                                </div>
                                
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-two_choices" class="x-panel" role="tabpanel" aria-labelledby="tab-two_choices" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>D</h3>
                                <p>Schimmelpennink never stopped believing in bike-sharing, and in the mid-90s, two Danes asked for his help to set up a system in Copenhagen. The result was the world’s first large-scale bike-share programme. It worked on a deposit: ‘You dropped a coin in the bike and when you returned it, you got your money back.’ After setting up the Danish system, Schimmelpennink decided to try his luck again in the Netherlands – and this time he succeeded in arousing the interest of the Dutch Ministry of Transport. ‘Times had changed,’ he recalls. ‘People had become more environmentally conscious, and the Danish experiment had proved that bike-sharing was a real possibility.’ A new Witte Fietsenplan was launched in 1999 in Amsterdam. However, riding a white bike was no longer free; it cost one guilder per trip and payment was made with a chip card developed by the Dutch bank Postbank. Schimmelpennink designed conspicuous, sturdy white bikes locked in special racks which could be opened with the chip card – the plan started with 250 bikes, distributed over five stations.</p>
                                <h3>E</h3>
                                <p>Theo Molenaar, who was a system designer for the project, worked alongside Schimmelpennink. ‘I remember when we were testing the bike racks, he announced that he had already designed better ones. But of course, we had to go through with the ones we had.’ The system, however, was prone to vandalism and theft. ‘After every weekend there would always be a couple of bikes missing,’ Molenaar says. ‘I really have no idea what people did with them, because they could instantly be recognised as white bikes.’ But the biggest blow came when Postbank decided to abolish the chip card, because it wasn’t profitable. ‘That chip card was pivotal to the system,’ Molenaar says. ‘To continue the project we would have needed to set up another system, but the business partner had lost interest.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-two_choices">
                                
                                <fieldset class="q-item">
                                    <p>Questions 1-2</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        <span class="q-number">2</span>
                                        Which <b>TWO</b> of the following statements are made in the text about the Amsterdam bike-sharing scheme of 1999?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It was initially opposed by a government department.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It failed when a partner in the scheme withdrew support.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It aimed to be more successful than the Copenhagen scheme.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It was made possible by a change in people’s attitudes.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">It attracted interest from a range of bike designers.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button  type="button" class="btn btn-primary try-again" id="again-two_choices" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-two_choices">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-two_choices2" class="x-panel" role="tabpanel" aria-labelledby="tab-two_choices2" hidden>
                <div class="x-panel-inner">Content: Two Choices 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>G</h3>
                                <p>In Amsterdam today, 38% of all trips are made by bike and, along with Copenhagen, it is regarded as one of the two most cycle-friendly capitals in the world – but the city never got another Witte Fietsenplan. Molenaar believes this may be because everybody in Amsterdam already has a bike. Schimmelpennink, however, cannot see that this changes Amsterdam’s need for a bike-sharing scheme. ‘People who travel on the underground don’t carry their bikes around. But often they need additional transport to reach their final destination.’ Although he thinks it is strange that a city like Amsterdam does not have a successful bike-sharing scheme, he is optimistic about the future. ‘In the ‘60s we didn’t stand a chance because people were prepared to give their lives to keep cars in the city. But that mentality has totally changed. Today everybody longs for cities that are not dominated by cars.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-two_choices2">
                                
                                <fieldset class="q-item">
                                    <p>Questions 1-2</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        <span class="q-number">2</span>
                                        Which <b>TWO</b> of the following statements are made in the text about Amsterdam today?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-2[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">The majority of residents would like to prevent all cars from entering the city.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-2[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">There is little likelihood of the city having another bike-sharing scheme.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-2[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">More trips in the city are made by bike than by any other form of transport.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-2[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">A bike-sharing scheme would benefit residents who use public transport.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="1kxpl5g3zFLGtmEY-2[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">The city has a reputation as a place that welcomes cyclists.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button  type="button" class="btn btn-primary try-again" id="again-two_choices2" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-two_choices2">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-summary_completion" class="x-panel" role="tabpanel" aria-labelledby="tab-summary_completion" hidden>
                <div class="x-panel-inner">Content: Summary Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">The growth of bike-sharing schemes around the world</h3>
                            <div class="passage-body">
                                <p><i>How Dutch engineer Luud Schimmelpennink helped to devise urban bike-sharing schemes</i></p>
                                <h3>A</h3>
                                <p>The original idea for an urban bike-sharing scheme dates back to a summer’s day in Amsterdam in 1965. Provo, the organization that came up with the idea, was a group of Dutch activists who wanted to change society. They believed the scheme, which was known as the Witte Fietsenplan, was an answer to the perceived threats of air pollution and consumerism. In the centre of Amsterdam, they painted a small number of used bikes white. They also distributed leaflets describing the dangers of cars and inviting people to use the white bikes. The bikes were then left unlocked at various locations around the city, to be used by anyone in need of transport.</p>
                                <h1>B</h1>
                                <p>Luud Schimmelpennink, a Dutch industrial engineer who still lives and cycles in Amsterdam, was heavily involved in the original scheme. He recalls how the scheme succeeded in attracting a great deal of attention – particularly when it came to publicising Provo’s aims – but struggled to get off the ground. The police were opposed to Provo’s initiatives and almost as soon as the white bikes were distributed around the city, they removed them. However, for Schimmelpennink and for bike-sharing schemes in general, this was just the beginning. ‘The first Witte Fietsenplan was just a symbolic thing,’ he says. ‘We painted a few bikes white, that was all. Things got more serious when I became a member of the Amsterdam city council two years later.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion">
                                <fieldset class="q-item">
                                    <h3>Questions 1-4</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3>The first urban bike-sharing scheme</h3>
                                    <p>
                                        The first bike-sharing scheme was the idea of the Dutch group Provo. The people who belonged to this group were
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-1" class="q-text" placeholder="">
                                        . They were concerned about damage to the environment and about
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-2" class="q-text" placeholder="">
                                        , and believed that the bike-sharing scheme would draw attention to these issues. As well as painting some bikes white, they handed out
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-3" class="q-text" placeholder="">
                                        that condemned the use of cars.
                                    </p>
                                    <p>
                                        However, the scheme was not a great success: almost as quickly as Provo left the bikes around the city, the
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-4" class="q-text" placeholder="">
                                        Took them away. According to Schimmelpennink, the scheme was intended to be symbolic. The idea was to get people thinking about the issues.
                                    </p>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-summary_completion" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-summary_completion">
                                        Submit
                                    </button>
                                </div>
                                
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-matching_features" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_features" hidden>
                <div class="x-panel-inner">Content: Matching Features</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>Pfeffer (1994) emphasizes that in order to succeed in a global business environment, organizations must make investment in Human Resource Management (HRM) to allow them to acquire employees who possess better skills and capabilities than their competitors. This investment will be to their competitive advantage. Despite this recognition of the importance of employee development, the hospitality industry has historically been dominated by underdeveloped HR practices (Lucas, 2002).</p>
                                <p>Lucas also points out that ‘the substance of HRM practices does not appear to be designed to foster constructive relations with employees or to represent a managerial approach that enables developing and drawing out the full potential of people, even though employees may be broadly satisfied with many aspects of their work’ (Lucas, 2002). In addition, or maybe as a result, high employee turnover has been a recurring problem throughout the hospitality industry. Among the many cited reasons are low compensation, inadequate benefits, poor working conditions and compromised employee morale and attitudes (Maroudas et al., 2008).</p>
                                <p>Ng and Sorensen (2008) demonstrated that when managers provide recognition to employees, motivate employees to work together, and remove obstacles preventing effective performance, employees feel more obligated to stay with the company. This was succinctly summarized by Michel et al. (2013): ‘[P]roviding support to employees gives them the confidence to perform their jobs better and the motivation to stay with the organization.’ Hospitality organizations can therefore enhance employee motivation and retention through the development and improvement of their working conditions. These conditions are inherently linked to the working environment.</p>
                                <p>While it seems likely that employees’ reactions to their job characteristics could be affected by a predisposition to view their work environment negatively, no evidence exists to support this hypothesis (Spector et al., 2000). However, given the opportunity, many people will find something to complain about in relation to their workplace (Poulston, 2009). There is a strong link between the perceptions of employees and particular factors of their work environment that are separate from the work itself, including company policies, salary and vacations.</p>
                                <p>Such conditions are particularly troubling for the luxury hotel market, where high-quality service, requiring a sophisticated approach to HRM, is recognized as a critical source of competitive advantage (Maroudas et al., 2008). In a real sense, the services of hotel employees represent their industry (Schneider and Bowen, 1993). This representation has commonly been limited to guest experiences. This suggests that there has been a dichotomy between the guest environment provided in luxury hotels and the working conditions of their employees.</p>
                                <p>It is therefore essential for hotel management to develop HRM practices that enable them to inspire and retain competent employees. This requires an understanding of what motivates employees at different levels of management and different stages of their careers (Enz and Siguaw, 2000). This implies that it is beneficial for hotel managers to understand what practices are most favorable to increase employee satisfaction and retention.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-matching_features">
                                <fieldset class="q-item">
                                    <h3>Questions 1-5</h3>
                                    <p class="lead">Look at the following statements and the list of researchers below.</p>
                                    <p>Match each statement with the correct researcher, <b>A-F</b>.</p>
                                    <p><i>WWrite the correct letter, <b>A-F</b>, in boxes on your answer sheet.</i></p>
                                    <p><b>NB</b>  You may use any letter more than once.</p>
                                    <b>List of Researchers</b> <br>
                                    <strong>A</strong>&nbsp;&nbsp; Pfeffer<br>
                                    <strong>B</strong>&nbsp;&nbsp; Lucas<br>
                                    <strong>C</strong>&nbsp;&nbsp; Maroudas et al.<br>
                                    <strong>D</strong>&nbsp;&nbsp; Ng and Sorensen<br>
                                    <strong>E</strong>&nbsp;&nbsp; Enz and Siguaw<br>
                                    <strong>F</strong>&nbsp;&nbsp; Deery
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Hotel managers need to know what would encourage good staff to remain.
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            The actions of managers may make staff feel they shouldn’t move to a different employer.
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            Little is done in the hospitality industry to help workers improve their skills.
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            Staff are less likely to change jobs if cooperation is encouraged.
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            Dissatisfaction with pay is not the only reason why hospitality workers change jobs.
                                            <span class="q-question">
                                                <select name="1kxpl5g3zFLGtmEY-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-matching_features">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Yes/No/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>Lucas also points out that ‘the substance of HRM practices does not appear to be designed to foster constructive relations with employees or to represent a managerial approach that enables developing and drawing out the full potential of people, even though employees may be broadly satisfied with many aspects of their work’ (Lucas, 2002). In addition, or maybe as a result, high employee turnover has been a recurring problem throughout the hospitality industry. Among the many cited reasons are low compensation, inadequate benefits, poor working conditions and compromised employee morale and attitudes (Maroudas et al., 2008).</p>
                                <p>Ng and Sorensen (2008) demonstrated that when managers provide recognition to employees, motivate employees to work together, and remove obstacles preventing effective performance, employees feel more obligated to stay with the company. This was succinctly summarized by Michel et al. (2013): ‘[P]roviding support to employees gives them the confidence to perform their jobs better and the motivation to stay with the organization.’ Hospitality organizations can therefore enhance employee motivation and retention through the development and improvement of their working conditions. These conditions are inherently linked to the working environment.</p>
                                <p>While it seems likely that employees’ reactions to their job characteristics could be affected by a predisposition to view their work environment negatively, no evidence exists to support this hypothesis (Spector et al., 2000). However, given the opportunity, many people will find something to complain about in relation to their workplace (Poulston, 2009). There is a strong link between the perceptions of employees and particular factors of their work environment that are separate from the work itself, including company policies, salary and vacations.</p>
                                <p>Such conditions are particularly troubling for the luxury hotel market, where high-quality service, requiring a sophisticated approach to HRM, is recognized as a critical source of competitive advantage (Maroudas et al., 2008). In a real sense, the services of hotel employees represent their industry (Schneider and Bowen, 1993). This representation has commonly been limited to guest experiences. This suggests that there has been a dichotomy between the guest environment provided in luxury hotels and the working conditions of their employees.</p>
                                <p>It is therefore essential for hotel management to develop HRM practices that enable them to inspire and retain competent employees. This requires an understanding of what motivates employees at different levels of management and different stages of their careers (Enz and Siguaw, 2000). This implies that it is beneficial for hotel managers to understand what practices are most favorable to increase employee satisfaction and retention.</p>
                                <p>Herzberg (1966) proposes that people have two major types of needs, the first being extrinsic motivation factors relating to the context in which work is performed, rather than the work itself. These include working conditions and job security. When these factors are unfavorable, job dissatisfaction may result. Significantly, though, just fulfilling these needs does not result in satisfaction, but only in the reduction of dissatisfaction (Maroudas et al., 2008).</p>
                                <p>Employees also have intrinsic motivation needs or motivators, which include such factors as achievement and recognition. Unlike extrinsic factors, motivator factors may ideally result in job satisfaction (Maroudas et al., 2008). Herzberg’s (1966) theory discusses the need for a ‘balance’ of these two types of needs.</p>
                                <p>The impact of fun as a motivating factor at work has also been explored. For example, Tews, Michel and Stafford (2013) conducted a study focusing on staff from a chain of themed restaurants in the United States. It was found that fun activities had a favorable impact on performance and manager support for fun had a favorable impact in reducing turnover. Their findings support the view that fun may indeed have a beneficial effect, but the framing of that fun must be carefully aligned with both organizational goals and employee characteristics. ‘Managers must learn how to achieve the delicate balance of allowing employees the freedom to enjoy themselves at work while simultaneously high levels of performance’ (Tews et al., 2013).</p>
                                <p>Deery (2008) has recommended several actions that can be adopted at the organizational level to retain good staff as well as assist in balancing work and family life. Those particularly appropriate to the hospitality industry include allowing adequate breaks during the working day, staff functions that involve families, and providing health and well-being opportunities.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-ynng">
                                <fieldset class="q-item">
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
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        One reason for high staff turnover in the hospitality industry is poor morale.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Research has shown that staff have a tendency to dislike their workplace.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        An improvement in working conditions and job security makes staff satisfied with their jobs.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Staff should be allowed to choose when they take breaks during the working day.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button  type="button" class="btn btn-primary try-again" id="again-ynng" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-ynng">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-summary_completion2" class="x-panel" role="tabpanel" aria-labelledby="tab-summary_completion2" hidden>
                <div class="x-panel-inner">Content: Summary Completion 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>The impact of fun as a motivating factor at work has also been explored. For example, Tews, Michel and Stafford (2013) conducted a study focusing on staff from a chain of themed restaurants in the United States. It was found that fun activities had a favorable impact on performance and manager support for fun had a favorable impact in reducing turnover. Their findings support the view that fun may indeed have a beneficial effect, but the framing of that fun must be carefully aligned with both organizational goals and employee characteristics. ‘Managers must learn how to achieve the delicate balance of allowing employees the freedom to enjoy themselves at work while simultaneously high levels of performance’ (Tews et al., 2013).</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion2">
                                <fieldset class="q-item">
                                    <h3>Questions 1-5</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3>Fun at work</h3>
                                    <p>
                                        Tews, Michel and Stafford carried out research on staff in an American chain of
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-5" class="q-text" placeholder="">
                                        . They discovered that activities designed for staff to have fun improved their
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-6" class="q-text" placeholder="">
                                        , and that management involvement led to lower staff
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-7" class="q-text" placeholder="">
                                        . They also found that the activities needed to fit with both the company’s
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-8" class="q-text" placeholder="">
                                        and the
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-9" class="q-text" placeholder="">
                                        Of the staff. A balance was required between a degree of freedom and maintaining work standards.
                                    </p>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-summary_completion2" style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit-summary_completion2">
                                        Submit
                                    </button>
                                </div>

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

    <!-- Modal Wrapper -->
    <div id="resultModal" class="custom-modal">
        <div class="custom-modal-content">
            <div class="custom-modal-header">
                <div class="score-summary-header">
                    <div class="score-circle" id="scoreCircle">
                        <span id="scoreDisplay">0/0</span>
                        {{-- <small id="scorePercentage">0</small> --}}
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

    <script>
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
                    'Instructions:\n- Read the questions carefully\n- Click "Close" to quit the test'
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
            setActive('nc');
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
            let currentPart = 'nc';
            let questionCount = 0;

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
                    'nc': 5,
                    'tfng2': 5,
                    'ynng': 5,
                    'mse': 5,
                    'one': 4,
                    'mh': 8,
                    'tc': 5,
                    'sa': 3
                };
                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // Init
            updateQuestionListForPart('nc');
            watchPartChanges();
            watchAnswerChanges();
            setInterval(() => updateQuestionStatus(currentPart), 2000);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        // Pastikan modal tersembunyi saat halaman dimuat
        $("#resultModal").removeClass("show").hide();
        
        // Modal functions
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
            // closeModal();

            // $(".qa-body input[type=radio]").prop("checked", false);
            // $(".q-option").removeClass("correct wrong is-selected unanswered-highlight");
            // $("#resultsTableBody").empty();
            // $("#scoreDisplay").text("0/0");
            // // $("#scorePercentage").text("0");

            // setTimeout(function () {
            //     $('html, body').scrollTop($(".qa-body").offset().top);
            // }, 350);
            location.reload();
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

        function submitHelper(form, setId, tipe, button, againBtn) {
            let allAnswered = true;

            $(`#${form} fieldset[data-q]`).each(function () {
                let isAnswered = false;
                const inputs = $(this).find("input, select, textarea");

                inputs.each(function () {
                    if ($(this).is("input[type=radio], input[type=checkbox]") && $(this).is(":checked")) {
                        isAnswered = true;
                    } else if ($(this).is("input[type=text], textarea") && $(this).val().trim() !== "") {
                        isAnswered = true;
                    } else if ($(this).is("select") && $(this).val() !== "") {
                        isAnswered = true;
                    }
                });

                if (!isAnswered) {
                    allAnswered = false;
                    $(this).addClass("unanswered-highlight");
                } else {
                    $(this).removeClass("unanswered-highlight");
                }
            });

            if (!allAnswered) {
                alert("Please answer all questions before submitting!");
                return;
            }

            // ✅ KIRIM FORM DATA
            let formData = new FormData($(`#${form}`)[0]);
            formData.append("tipe", tipe);
            formData.append("_token", $("meta[name='csrf-token']").attr("content"));
            formData.append("set_id", setId);
            formData.append("kategori", 'reading');
            formData.append("tipe_test", 'practice');

            $.ajax({
                url: "/ielts/practice/check",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status === "ok") {
                        button.css('display', 'none');
                        $(`#${againBtn}`).css('display', '');

                        $(".q-option").removeClass("correct wrong");
                        $(".text-answer, .select-answer").removeClass("correct wrong");

                        let correctCount = response.score;
                        let total = Object.keys(response.results).length;
                        let tableRows = "";
                        let questionNumber = 1;

                        $.each(response.results, function(qid, data) {
                        let isCorrect = data.status === "correct";

                        // ✅ 2. Ambil CORRECT ANSWER dengan fallback
                        let correctAnswer = data.correct || '';
                        let userAnswer = data.user || '';
                        if (!correctAnswer && isCorrect) {
                            correctAnswer = userAnswer; // kalau benar tapi backend gak kirim kunci
                        }
                        if (!correctAnswer) {
                            correctAnswer = "NOT GIVEN";
                        }

                        // ✅ 3. Highlight input aslinya
                        let questionElement = $(`fieldset[data-q="${qid.replace(/[^0-9]/g, '')}"]`);
                        questionElement.find("input, select, textarea").each(function () {
                            if ($(this).is("input[type=radio], input[type=checkbox]")) {
                                if ($(this).is(":checked")) {
                                    if (isCorrect) {
                                        $(this).parent().addClass("correct");
                                    } else {
                                        $(this).parent().addClass("wrong");
                                        $(`input[name="${qid}"][value="${correctAnswer}"]`).parent().addClass("correct");
                                    }
                                }
                            } else {
                                if (isCorrect) {
                                    $(this).addClass("correct");
                                } else {
                                    $(this).addClass("wrong");
                                }
                            }
                        });

                        // ✅ 4. Bangun tabel baris
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


                        $("#scoreDisplay").text(`${correctCount}/${total}`);
                        // $("#scorePercentage").text(`${convertScore(correctCount)}`);

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
                        showModal(`Score: ${correctCount} / ${total}`);
                    }
                },
                error: function(xhr) {
                    alert("Terjadi kesalahan: " + xhr.status);
                    console.log(xhr.responseText);
                }
            });
        }

        $(".try-again").on("click", function(){
            location.reload();
        })

        $("#submit-tfng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng", "1kxpl5g3zFLGtmEY", "tfng", $(this), "again-tfng");
        });

        $("#submit-tfng2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng2", "1kxpl5g3zFLGtmEY", "tfng", $(this), "again-tfng2");
        });

        $("#submit-ynng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-ynng", "1kxpl5g3zFLGtmEY", "ynng", $(this), "again-ynng");
        });

        $("#submit-mse").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mse", "1kxpl5g3zFLGtmEY", "mse", $(this), "again-mse");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one", "1kxpl5g3zFLGtmEY", "oc", $(this), "again-oc");
        });

        $("#submit-mh").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mh", "1kxpl5g3zFLGtmEY", "mh", $(this), "again-mh");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "1kxpl5g3zFLGtmEY", "tc", $(this), "again-tc");
        });

        $("#submit-sa").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-sa", "1kxpl5g3zFLGtmEY", "sa", $(this), "again-sa");
        });
    </script>


</body>

</html>
