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
        #panel-summary_completion .q-number-box{
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
        #panel-nc .q-text {
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

        #panel-sa input,
        #panel-sentence_completion input {
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
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="mh">
            <button class="x-tab is-active" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="true"
                data-id="mh">Matching Headings</button>
            <button class="x-tab" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="false" data-id="tfng">True/False/Not Given</button>
            <button class="x-tab" role="tab" id="tab-sentence_completion" aria-controls="panel-sentence_completion" aria-selected="false"
                data-id="sentence_completion">Sentence Completion</button>
            <button class="x-tab" role="tab" id="tab-matching_information" aria-controls="panel-matching_information" aria-selected="false"
                data-id="matching_information">Matching Information</button>
            <button class="x-tab" role="tab" id="tab-nc" aria-controls="panel-nc" aria-selected="true"
                data-id="nc">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2"
                aria-selected="false" data-id="tfng2">True/False/Not Given 2</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-summary_completion" aria-controls="panel-summary_completion" aria-selected="false"
                data-id="summary_completion">Summary Completion</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>

            <button class="x-tab" role="tab" id="tab-matching_features" aria-controls="panel-matching_features" aria-selected="false"
                data-id="matching_features">Matching Features</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Yes/No/Not Given</button>
        </div>

        <div class="x-panels">
            <div id="panel-mh" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-mh">
                <div class="x-panel-inner">Content: Matching Headings</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3 class="passage-title">B</h3>
                                <p>Tourism in the mass form as we know it today is a distinctly twentieth-century phenomenon. Historians suggest that the advent of mass tourism began in England during the industrial revolution with the rise of the middle class and the availability of relatively inexpensive transportation. The creation of the commercial airline industry following the Second World War and the subsequent development of the jet aircraft in the 1950s signalled the rapid growth and expansion of international travel. This growth led to the development of a major new industry: tourism. In turn, international tourism became the concern of a number of world governments since it not only provided new employment opportunities but also produced a means of earning foreign exchange.</p>
                                <h3 class="passage-title">C</h3>
                                <p>Tourism today has grown significantly in both economic and social importance. In most industrialised countries over the past few years the fastest growth has been seen in the area of services. One of the largest segments of the service industry, although largely unrecognised as an entity in some of these countries, is travel and tourism. According to the World Travel and Tourism Council (1992), Travel and tourism is the largest industry in the world on virtually any economic measure including value-added capital investment, employment and tax contributions. In 1992, the industry’s gross output was estimated to be $3.5 trillion, over 12 per cent of all consumer spending. The travel and tourism industry is the world’s largest employer the almost 130 million jobs, or almost 7 per cent of all employees. This industry is the world’s leading industrial contributor, producing over 6 per cent of the world’s national product and accounting for capital investment in excess of $422 billion in direct indirect and personal taxes each year. Thus, tourism has a profound impact both on the world economy and, because of the educative effect of travel and the effects on employment, on society itself.</p>
                                <h3 class="passage-title">D</h3>
                                <p>However, the major problems of the travel and tourism industry that have hidden, or obscured, its economic impact are the diversity and fragmentation of the industry itself. The travel industry includes: hotels, motels and other types of accommodation; restaurants and other food services; transportation services and facilities; amusements, attractions and other leisure facilities; gift shops and a large number of other enterprises. Since many of these businesses also serve local residents, the impact of spending by visitors can easily be overlooked or underestimated. In addition, Meis (1992) points out that the tourism industry involves concepts that have remained amorphous to both analysts and decision makers. Moreover, in all nations this problem has made it difficult for the industry to develop any type of reliable or credible tourism information base in order to estimate the contribution it makes to regional, national and global economies. However, the nature of this very diversity makes travel and tourism ideal vehicles for economic development in a wide variety of countries, regions or communities.</p>
                                <h3 class="passage-title">E</h3>
                                <p>Once the exclusive province of the wealthy, travel and tourism have become an institutionalised way of life for most of the population. In fact, McIntosh and Goeldner (1990) suggest that tourism has become the largest commodity in international trade for many nations and, for a significant number of other countries, it ranks second or third. For example, tourism is the major source of income in Bermuda, Greece, Italy, Spain, Switzerland and most Caribbean countries. In addition, Hawkins and Ritchie, quoting from data published by the American Express Company, suggest that the travel and tourism industry is the number one ranked employer in the Bahamas, Brazil, Canada, France, (the former) West Germany, Hong Kong, Italy, Jamaica, Japan, Singapore, the United Kingdom and the United States. However, because of problems of definition, which directly affect statistical measurement, it is not possible with any degree of certainty to provide precise, valid or reliable data about the extent of world-wide tourism participation or its economic impact. In many cases, similar difficulties arise when attempts are made to measure domestic tourism.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-mh">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-4</b></p>
                                    <p class="lead">The Reading Passage has five paragraphs, <b>A-E</b>.</p>
                                    <p>Choose the correct heading for paragraphs <b>B-E</b> from the list of headings below.</p>
                                    <p>Write the correct number, <b>i-vii</b>, in boxes on your answer sheet.</p>
                                    <p><b>List of Headings</b></p>
                                    <ul class="legend">
                                        <li><strong>i</strong> Economic and social significance of tourism</li>
                                        <li><strong>ii</strong> The development of mass tourism</li>
                                        <li><strong>iii</strong> Travel for the wealthy</li>
                                        <li><strong>iv</strong> Earning foreign exchange through tourism</li>
                                        <li><strong>v</strong>  Difficulty in recognising the economic effects of tourism</li>
                                        <li><strong>vi</strong> The contribution of air travel to tourism</li>
                                        <li><strong>vii</strong> The world impact of tourism</li>
                                        <li><strong>viii</strong> The history of travel</li>
                                    </ul>
                                    <table>
                                        <tr>
                                            <td><i>Example</i></td>
                                            <td><i>Answer</i></td>
                                        </tr>
                                        <tr>
                                            <td>Paragraph <b>A</b></td>
                                            <td><b>viii</b></td>
                                        </tr>
                                    </table>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>B</b>
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>C</b>
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>D</b>
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>E</b>
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-4" class="q-dropdown">
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

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-mh">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
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
                                <h3 class="passage-title">C</h3>
                                <p>Tourism today has grown significantly in both economic and social importance. In most industrialised countries over the past few years the fastest growth has been seen in the area of services. One of the largest segments of the service industry, although largely unrecognised as an entity in some of these countries, is travel and tourism. According to the World Travel and Tourism Council (1992), Travel and tourism is the largest industry in the world on virtually any economic measure including value-added capital investment, employment and tax contributions. In 1992, the industry’s gross output was estimated to be $3.5 trillion, over 12 per cent of all consumer spending. The travel and tourism industry is the world’s largest employer the almost 130 million jobs, or almost 7 per cent of all employees. This industry is the world’s leading industrial contributor, producing over 6 per cent of the world’s national product and accounting for capital investment in excess of $422 billion in direct indirect and personal taxes each year. Thus, tourism has a profound impact both on the world economy and, because of the educative effect of travel and the effects on employment, on society itself.</p>
                                <h3 class="passage-title">D</h3>
                                <p>However, the major problems of the travel and tourism industry that have hidden, or obscured, its economic impact are the diversity and fragmentation of the industry itself. The travel industry includes: hotels, motels and other types of accommodation; restaurants and other food services; transportation services and facilities; amusements, attractions and other leisure facilities; gift shops and a large number of other enterprises. Since many of these businesses also serve local residents, the impact of spending by visitors can easily be overlooked or underestimated. In addition, Meis (1992) points out that the tourism industry involves concepts that have remained amorphous to both analysts and decision makers. Moreover, in all nations this problem has made it difficult for the industry to develop any type of reliable or credible tourism information base in order to estimate the contribution it makes to regional, national and global economies. However, the nature of this very diversity makes travel and tourism ideal vehicles for economic development in a wide variety of countries, regions or communities.</p>
                                <h3 class="passage-title">E</h3>
                                <p>Once the exclusive province of the wealthy, travel and tourism have become an institutionalised way of life for most of the population. In fact, McIntosh and Goeldner (1990) suggest that tourism has become the largest commodity in international trade for many nations and, for a significant number of other countries, it ranks second or third. For example, tourism is the major source of income in Bermuda, Greece, Italy, Spain, Switzerland and most Caribbean countries. In addition, Hawkins and Ritchie, quoting from data published by the American Express Company, suggest that the travel and tourism industry is the number one ranked employer in the Bahamas, Brazil, Canada, France, (the former) West Germany, Hong Kong, Italy, Jamaica, Japan, Singapore, the United Kingdom and the United States. However, because of problems of definition, which directly affect statistical measurement, it is not possible with any degree of certainty to provide precise, valid or reliable data about the extent of world-wide tourism participation or its economic impact. In many cases, similar difficulties arise when attempts are made to measure domestic tourism.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-6</b></p>
                                    <p class="lead">Do the following statements agree with the information given in the Reading Passage?</p>
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
                                        The largest employment figures in the world are found in the travel and tourism industry.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Tourism contributes over six per cent of the Australian gross national product.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Tourism has a social impact because it promotes recreation.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Two main features of the travel and tourism industry make its economic significance difficult to ascertain.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        Visitor spending is always greater than the spending of residents in tourist areas.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        It is easy to show statistically how tourism affects individual economies.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-tfng">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-sentence_completion" class="x-panel" role="tabpanel" aria-labelledby="tab-sentence_completion" hidden>
                <div class="x-panel-inner">Content: Sentence Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3 class="passage-title">E</h3>
                                <p>Once the exclusive province of the wealthy, travel and tourism have become an institutionalised way of life for most of the population. In fact, McIntosh and Goeldner (1990) suggest that tourism has become the largest commodity in international trade for many nations and, for a significant number of other countries, it ranks second or third. For example, tourism is the major source of income in Bermuda, Greece, Italy, Spain, Switzerland and most Caribbean countries. In addition, Hawkins and Ritchie, quoting from data published by the American Express Company, suggest that the travel and tourism industry is the number one ranked employer in the Bahamas, Brazil, Canada, France, (the former) West Germany, Hong Kong, Italy, Jamaica, Japan, Singapore, the United Kingdom and the United States. However, because of problems of definition, which directly affect statistical measurement, it is not possible with any degree of certainty to provide precise, valid or reliable data about the extent of world-wide tourism participation or its economic impact. In many cases, similar difficulties arise when attempts are made to measure domestic tourism.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-sentence_completion">
                                <fieldset class="q-item">
                                    <h3>Questions 1-3</h3>
                                    <p class="lead">Complete the sentences below.</p>
                                    <p>Choose <b>NO MORE THAN THREE WORDS</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            In Greece, tourism the most important
                                            <span class="q-question">
                                                <input type="text" name="s4gzzYRpwLnhLRFf-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            The travel and tourism industry in Jamaica is the major
                                            <span class="q-question">
                                                <input type="text" name="s4gzzYRpwLnhLRFf-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            The problems associated with measuring international tourism are often reflected in the measurement of
                                            <span class="q-question">
                                                <input type="text" name="s4gzzYRpwLnhLRFf-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-sentence_completion">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
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
                            <div class="passage-body">
                                <h3 class="passage-title">B</h3>
                                <p>Summer leaves are green because they are full of chlorophyll, the molecule that captures sunlight converts that energy into new building materials for the tree. As fall approaches in the northern hemisphere, the amount of solar energy available declines considerably. For many trees – evergreen conifers being an exception – the best strategy is to abandon photosynthesis* until the spring. So rather than maintaining the now redundant leaves throughout the winter, the tree saves its precious resources and discards them. But before letting its leaves go, the tree dismantles their chlorophyll molecules and ships their valuable nitrogen back into the twigs. As chlorophyll is depleted, other colours that have been dominated by it throughout the summer begin to be revealed. This unmasking explains the autumn colours of yellow and orange, but not the brilliant reds and purples of trees such as the maple or sumac.</p>
                                <h3 class="passage-title">C</h3>
                                <p>The source of the red is widely known: it is created by anthocyanins, water-soluble plant pigments reflecting the red to blue range of the visible spectrum. They belong to a class of sugar-based chemical compounds also known as flavonoids. What’s puzzling is that anthocyanins are actually newly minted, made in the leaves at the same time as the tree is preparing to drop them. But it is hard to make sense of the manufacture of anthocyanins – why should a tree bother making new chemicals in its leaves when it’s already scrambling to withdraw and preserve the ones already there?</p>
                                <h3 class="passage-title">D</h3>
                                <p>Some theories about anthocyanins have argued that they might act as a chemical defence against attacks by insects or fungi, or that they might attract fruit-eating birds or increase a leaf’s tolerance to freezing. However there are problems with each of these theories, including the fact that leaves are red for such a relatively short period that the expense of energy needed to manufacture the anthocyanins would outweigh any anti-fungal or anti-herbivore activity achieved.</p>
                                <h3 class="passage-title">E</h3>
                                <p>It has also been proposed that trees may produce vivid red colours to convince herbivorous insects that they are healthy and robust and would be easily able to mount chemical defences against infestation. If insects paid attention to such advertisements, they might be prompted to lay their eggs on a duller, and presumably less resistant host. The flaw in this theory lies in the lack of proof to support it. No one has as yet ascertained whether more robust trees sport the brightest leaves, or whether insects make choices according to colour intensity.</p>
                                <h3 class="passage-title">F</h3>
                                <p>Perhaps the most plausible suggestion as to why leaves would go to the trouble of making anthocyanins when they’re busy packing up for the winter is the theory known as the ‘light screen’ hypothesis. It sounds paradoxical, because the idea behind this hypothesis is that the red pigment is made in autumn leaves to protect chlorophyll, the light-absorbing chemical, from too much light. Why does chlorophyll need protection when it is the natural world’s supreme light absorber? Why protect chlorophyll at a time when the tree is breaking it down to salvage as much of it as possible?</p>
                                <h3 class="passage-title">G</h3>
                                <p>Chlorophyll, although exquisitely evolved to capture the energy of sunlight, can sometimes be overwhelmed by it, especially in situations of drought, low temperatures, or nutrient deficiency. Moreover, the problem of oversensitivity to light is even more acute in the fall, when the leaf is busy preparing for winter by dismantling its internal machinery. The energy absorbed by the chlorophyll molecules of the unstable autumn leaf is not immediately channelled into useful products and processes, as it would be in an intact summer leaf. The weakened fall leaf then becomes vulnerable to the highly destructive effects of the oxygen created by the excited chlorophyll molecules.</p>
                                <h3 class="passage-title">H</h3>
                                <p>Even if you had never suspected that this is what was going on when leaves turn red, there are clues out there. One is straightforward: on many trees, the leaves that are the reddest are those on the side of the tree which gets most sun. Not only that, but the red is brighter on the upper side of the leaf. It has also been recognised for decades that the best conditions for intense red colours are dry, sunny days and cool nights, conditions that nicely match those that make leaves susceptible to excess light. And finally, trees such as maples usually get much redder the more north you travel in the northern hemisphere. It’s colder there, they’re more stressed, their chlorophyll is more sensitive and it needs more sunblock.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-matching_information">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-5</b></p>
                                    <p class="lead">The Reading Passage has nine paragraphs,  <b>A-I</b>.</p>
                                    <p>Which paragraph contains the following information?</p>
                                    <p class="lead">Write the correct letter, <b>A-l</b>, in boxes on your answer sheet <br> <b>NB</b> You may use any letter more than once.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            a description of the substance responsible for the red colouration of leaves
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            the reason why trees drop their leaves in autumn
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            some evidence to confirm a theory about the purpose of the red leaves
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            an explanation of the function of chlorophyll
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            a suggestion that the red colouration in leaves could serve as a warning signal
                                            <span class="q-question">
                                                <select name="s4gzzYRpwLnhLRFf-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-matching_information">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-nc" class="x-panel" role="tabpanel" aria-labelledby="tab-nc" hidden>
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3 class="passage-title">H</h3>
                                <p>Even if you had never suspected that this is what was going on when leaves turn red, there are clues out there. One is straightforward: on many trees, the leaves that are the reddest are those on the side of the tree which gets most sun. Not only that, but the red is brighter on the upper side of the leaf. It has also been recognised for decades that the best conditions for intense red colours are dry, sunny days and cool nights, conditions that nicely match those that make leaves susceptible to excess light. And finally, trees such as maples usually get much redder the more north you travel in the northern hemisphere. It’s colder there, they’re more stressed, their chlorophyll is more sensitive and it needs more sunblock.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-nc">
                                <fieldset class="q-item">
                                    <h3>Questions 1-4</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <p><b>Why believe the ‘light screen’ hypothesis?</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="1">
                                                The most vividly coloured red leaves are found on the side of the tree facing the
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="s4gzzYRpwLnhLRFf-1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="2">
                                                The 
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="s4gzzYRpwLnhLRFf-2" class="q-text" placeholder="">
                                                surfaces of leaves contain the most red pigment.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="3">
                                                Red leaves are most abundant when daytime weather conditions are
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="s4gzzYRpwLnhLRFf-3" class="q-text" placeholder="">
                                                and sunny.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="4">
                                                The intensity of the red colour of leaves increases as you go further
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="s4gzzYRpwLnhLRFf-4" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-nc">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2" hidden>
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3 class="passage-title">F</h3>
                                <p>Perhaps the most plausible suggestion as to why leaves would go to the trouble of making anthocyanins when they’re busy packing up for the winter is the theory known as the ‘light screen’ hypothesis. It sounds paradoxical, because the idea behind this hypothesis is that the red pigment is made in autumn leaves to protect chlorophyll, the light-absorbing chemical, from too much light. Why does chlorophyll need protection when it is the natural world’s supreme light absorber? Why protect chlorophyll at a time when the tree is breaking it down to salvage as much of it as possible?</p>
                                <h3 class="passage-title">G</h3>
                                <p>Chlorophyll, although exquisitely evolved to capture the energy of sunlight, can sometimes be overwhelmed by it, especially in situations of drought, low temperatures, or nutrient deficiency. Moreover, the problem of oversensitivity to light is even more acute in the fall, when the leaf is busy preparing for winter by dismantling its internal machinery. The energy absorbed by the chlorophyll molecules of the unstable autumn leaf is not immediately channelled into useful products and processes, as it would be in an intact summer leaf. The weakened fall leaf then becomes vulnerable to the highly destructive effects of the oxygen created by the excited chlorophyll molecules.</p>
                                <h3 class="passage-title">H</h3>
                                <p>Even if you had never suspected that this is what was going on when leaves turn red, there are clues out there. One is straightforward: on many trees, the leaves that are the reddest are those on the side of the tree which gets most sun. Not only that, but the red is brighter on the upper side of the leaf. It has also been recognised for decades that the best conditions for intense red colours are dry, sunny days and cool nights, conditions that nicely match those that make leaves susceptible to excess light. And finally, trees such as maples usually get much redder the more north you travel in the northern hemisphere. It’s colder there, they’re more stressed, their chlorophyll is more sensitive and it needs more sunblock.</p>
                                <h3 class="passage-title">I</h3>
                                <p>What is still not fully understood, however, is why some trees resort to producing red pigments while others don’t bother, and simply reveal their orange or yellow hues. Do these trees have other means at their disposal to prevent overexposure to light in autumn? Their story, though not as spectacular to the eye, will surely turn out to be as subtle and as complex.</p>
                                <hr>
                                <p>* photosynthesis: the production of new material from sunlight, water and carbon dioxide.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng2">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-3</b></p>
                                    <p class="lead">Do the following statements agree with the information given in the Reading Passage?</p>
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
                                        It is likely that the red pigments help to protect the leaf from freezing temperatures.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        The ‘light screen’ hypothesis would initially seem to contradict what is known about chlorophyll.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-8" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-8" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-8" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Leaves which turn colours other than red are more likely to be damaged by sunlight.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-9" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-9" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-9" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-tfng2">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p><b>B</b></p>
                                <p>Summer leaves are green because they are full of chlorophyll, the molecule that captures sunlight converts that energy into new building materials for the tree. As fall approaches in the northern hemisphere, the amount of solar energy available declines considerably. For many trees – evergreen conifers being an exception – the best strategy is to abandon photosynthesis* until the spring. So rather than maintaining the now redundant leaves throughout the winter, the tree saves its precious resources and discards them. But before letting its leaves go, the tree dismantles their chlorophyll molecules and ships their valuable nitrogen back into the twigs. As chlorophyll is depleted, other colours that have been dominated by it throughout the summer begin to be revealed. This unmasking explains the autumn colours of yellow and orange, but not the brilliant reds and purples of trees such as the maple or sumac.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-one">
                                <fieldset class="q-item">
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        For which of the following questions does the writer offer an explanation?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">why conifers remain green in winter</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">how leaves turn orange and yellow in autumn</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">how herbivorous insects choose which trees to lay their eggs in</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">why anthocyanins are restricted to certain trees</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-oc">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
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
                            <div class="passage-body">
                                <p><b>Beyond the blue horizon</b></p>
                                <p><i>Ancient voyagers who settled the far-flung islands of the Pacific Ocean</i></p>
                                <p>An important archaeological discovery on the island of Efate in the Pacific archipelago of Vanuatu has revealed traces of an ancient seafaring people, the distant ancestors of today’s Polynesians. The site came to light only by chance. An agricultural worker, digging in the grounds of a derelict plantation, scraped open a grave – the first of dozens in a burial ground some 3,000 years old. It is the oldest cemetery ever found in the Pacific islands, and it harbors the remains of an ancient people archaeologists call the Lapita.</p>
                                <p>They were daring blue-water adventurers who used basic canoes to rove across the ocean. But they were not just explorers. They were also pioneers who carried with them everything they would need to build new lives – their livestock, taro seedlings and stone tools. Within the span of several centuries, the Lapita stretched the boundaries of their world from the jungle-clad volcanoes of Papua New Guinea to the loneliest coral outliers of Tonga.</p>
                                <p>The Lapita left precious few clues about themselves, but Efate expands the volume of data available to researchers dramatically. The remains of 62 individuals have been uncovered so far, and archaeologists were also thrilled to find six complete Lapita pots. Other items included a Lapita burial urn with modeled birds arranged on the rim as though peering down at the human remains sealed inside. ‘It’s an important discovery,’ says Matthew Spriggs, professor of archaeology at the Australian National University and head of the international team digging up the site, ‘for it conclusively identifies the remains as Lapita.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion">
                                <fieldset class="q-item">
                                    <h3>Questions 1-5</h3>
                                    <p class="lead">Complete the summary using the list of words and phrases, <b>A-J</b>, below.</p>
                                    <p><i>Write the correct letter, <b>A-J</b>, in boxes</i></p>
                                    <table cellpadding="10">
                                        <tr>
                                            <td><b>A</b> proof</td>
                                        </tr>
                                        <tr>
                                            <td><b>B</b> plantation</td>
                                        </tr>
                                        <tr>
                                            <td><b>C</b> harbour</td>
                                        </tr>
                                        <tr>
                                            <td><b>D</b> bones</td>
                                        </tr>
                                        <tr>
                                            <td><b>E</b> data</td>
                                        </tr>
                                        <tr>
                                            <td><b>F</b> archaeological discovery</td>
                                        </tr>
                                        <tr>
                                            <td><b>G</b> burial urn</td>
                                        </tr>
                                        <tr>
                                            <td><b>H</b> source</td>
                                        </tr>
                                        <tr>
                                            <td><b>I</b> animals</td>
                                        </tr>
                                        <tr>
                                            <td><b>J</b> maps</td>
                                        </tr>
                                    </table>

                                    <h3>The Éfaté burial site</h3>

                                    <p>
                                        <div>
                                            A 3,000-year-old burial ground of a seafaring people called the Lapita has been found on an abandoned
                                            <span class="q-number-box">1</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="s4gzzYRpwLnhLRFf-1" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                    </select>
                                                </span>
                                            </span>
                                            on the Pacific island of Efate. The cemetery, which is a significant 
                                            <span class="q-number-box">2</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="s4gzzYRpwLnhLRFf-2" data-q="2" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                    </select>,
                                                </span>
                                            </span>
                                            was uncovered accidentally by an agricultural worker. The Lapita explored and colonised many Pacific islands over several centuries. They took many things with them on their voyages including
                                            <span class="q-number-box">3</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="s4gzzYRpwLnhLRFf-3" data-q="3" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                    </select>,
                                                </span>
                                            </span>
                                            and tools.
                                        </div>
                                    </p>

                                    <p>
                                        <div>
                                            The burial ground increases the amount of information about the Lapita available to scientists. A team of researchers, led by Matthew Spriggs from the Australian National University, are helping with the excavation of the site. Spriggs believes the
                                            <span class="q-number-box">4</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="s4gzzYRpwLnhLRFf-4" data-q="4" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                    </select>
                                                </span>
                                            </span>
                                            which was found at the site is very important since it confirms that the
                                            <span class="q-number-box">5</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="s4gzzYRpwLnhLRFf-5" data-q="5" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                    </select>
                                                </span>
                                            </span>
                                            found inside are Lapita.
                                        </div>
                                    </p>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-summary_completion">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-one2" class="x-panel" role="tabpanel" aria-labelledby="tab-one2" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>There is one stubborn question for which archaeology has yet to provide any answers: how did the Lapita accomplish the ancient equivalent of a moon landing, many times over? No-one has found one of their canoes or any rigging, which could reveal how the canoes were sailed. Nor do the oral histories and traditions of later Polynesians offer any insights, for they turn into myths long before they reach as far back in time as the Lapita.</p>
                                <p>‘All we can say for certain is that the Lapita had canoes that were capable of ocean voyages, and they had the ability to sail them,’ says Geoff Irwin, a professor of archaeology at the University of Auckland. Those sailing skills, he says, were developed and passed down over thousands of years by earlier mariners who worked their way through the archipelagoes of the western Pacific, making short crossings to nearby islands. The real adventure didn’t begin, however, until their Lapita descendants sailed out of sight of land, with empty horizons on every side. This must have been as difficult for them as landing on the moon is for us today. Certainly it distinguished them from their ancestors, but what gave them the courage to launch out on such risky voyages?</p>
                                <p>The Lapita’s thrust into the Pacific was eastward, against the prevailing trade winds, Irwin notes. Those nagging headwinds, he argues, may have been the key to their success. ‘They could sail out for days into the unknown and assess the area, secure in the knowledge that if they didn’t find anything, they could turn about and catch a swift ride back on the trade winds. This is what would have made the whole thing work.’ Once out there, skilled seafarers would have detected abundant leads to follow to land: seabirds, coconuts and twigs carried out to sea by the tides, and the afternoon pile-up of clouds on the horizon which often indicates an island in the distance.</p>
                                <p>For returning explorers, successful or not, the geography of their own archipelagoes would have provided a safety net. Without this to go by, overshooting their home ports, getting lost and sailing off into eternity would have been all too easy. Vanuatu, for example, stretches more than 500 miles in a northwest-southeast trend, its scores of intervisible islands forming a backstop for mariners riding the trade winds home.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-one2">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-4</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        According to the writer, there are difficulties explaining how the Lapita accomplished their journeys because
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">the canoes that have been discovered offer relatively few clues.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">archaeologists have shown limited interest in this area of research.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">little information relating to this period can be relied upon for accuracy.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">technological advances have altered the way such achievements are viewed.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        According to the sixth paragraph, what was extraordinary about the Lapita?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">They sailed beyond the point where land was visible.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Their cultural heritage discouraged the expression of fear.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">They were able to build canoes that withstood ocean voyages.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Their navigational skills were passed on from one generation to the next.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        What does ‘This’ refer to in the seventh paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">the Lapita’s seafaring talent</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">the Lapita s ability to detect signs of land</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">the Lapita’s extensive knowledge of the region</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">the Lapita’s belief they would be able to return home</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        According to the eighth paragraph, how was the geography of the region significant?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It played an important role in Lapita culture.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It meant there were relatively few storms at sea.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It provided a navigational aid for the Lapita.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It made a large number of islands habitabl</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-oc2">
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
                                <p>All this presupposes one essential detail, says Atholl Anderson, professor of prehistory at the Australian National University: the Lapita had mastered the advanced art of sailing against the wind. ‘And there’s no proof they could do any such thing,’ Anderson says. ‘There has been this assumption they did, and people have built canoes to re-create those early voyages based on that assumption. But nobody has any idea what their canoes looked like or how they were rigged.’</p>
                                <p>Rather than give all the credit to human skill, Anderson invokes the winds of chance. El Nino, the same climate disruption that affects the Pacific today, may have helped scatter the Lapita, Anderson suggests. He points out that climate data obtained from slow-growing corals around the Pacific indicate a series of unusually frequent El Ninos around the time of the Lapita expansion. By reversing the regular east-to-west flow of the trade winds for weeks at a time, these super El Ninos might have taken the Lapita on long unplanned voyages.</p>
                                <p>However they did it, the Lapita spread themselves a third of the way across the Pacific, then called it quits for reasons known only to them. Ahead lay the vast emptiness of the central Pacific and perhaps they were too thinly stretched to venture farther. They probably never numbered more than a few thousand in total, and in their rapid migration eastward they encountered hundreds of islands – more than 300 in Fiji alone.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-ynng">
                                <fieldset class="q-item">
                                    <h3>Questions 1-5</h3>
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
                                        It is now clear that the Lapita could sail into a prevailing wind.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Extreme climate conditions may have played a role in Lapita migration.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        The Lapita learnt to predict the duration of El Ninos.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        It remains unclear why the Lapita halted their expansion across the Pacific.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        It is likely that the majority of Lapita settled on Fiji.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-ynng">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
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
            setActive('mh');
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
            let currentPart = 'mh';
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
                    'mh': 4,
                    'tfng': 6,
                    'matching_information': 4,
                    'matching_features': 5,
                    'sentence_completion': 4,
                    'summary_completion': 5,
                    'one': 4,
                    'ynng': 5,
                };
                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // Init
            updateQuestionListForPart('mh');
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

        function submitHelper(form, setId, tipe) {
            let allAnswered = true;

            $(`#${form} select[data-q]`).each(function () {
                if (!$(this).closest("fieldset").length) {
                    const q = $(this).data("q");
                    $(this).wrap(`<fieldset data-q="${q}" class="temp-fieldset"></fieldset>`);
                }
            });


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

        $("#submit-mh").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mh", "s4gzzYRpwLnhLRFf", "mh");
        });

        $("#submit-tfng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng", "s4gzzYRpwLnhLRFf", "tfng");
        });

        $("#submit-tfng2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng2", "s4gzzYRpwLnhLRFf", "tfng");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "s4gzzYRpwLnhLRFf", "matching_information");
        });

        $("#submit-nc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc", "s4gzzYRpwLnhLRFf", "nc");
        });

        $("#submit-matching_features").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_features", "s4gzzYRpwLnhLRFf", "matching_features");
        });

        $("#submit-sentence_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-sentence_completion", "s4gzzYRpwLnhLRFf", "sentence_completion");
        });

        $("#submit-summary_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-summary_completion", "s4gzzYRpwLnhLRFf", "summary_completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one", "s4gzzYRpwLnhLRFf", "oc");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one2", "s4gzzYRpwLnhLRFf", "oc");
        });

        $("#submit-ynng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-ynng", "s4gzzYRpwLnhLRFf", "ynng");
        });
    </script>


</body>

</html>
