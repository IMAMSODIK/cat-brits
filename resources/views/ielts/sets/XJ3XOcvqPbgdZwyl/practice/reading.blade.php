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

        #panel-tc .q-number-box {
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

        #panel-tc .q-text {
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
                    <img class="" style="width: 50px;margin-left: 20px" src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
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
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">True/False/Not Given</button>
            <button class="x-tab" role="tab" id="tab-sa" aria-controls="panel-sa" aria-selected="false"
                data-id="sa">Short Answer</button>
            <button class="x-tab" role="tab" id="tab-tc" aria-controls="panel-tc" aria-selected="false"
                data-id="tc">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Matching Headings</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">True/False/Not Given 2</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Matching Sentence ending</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Yes/No/Not Given</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Stepwells</h3>
                            <div class="passage-body">
                                <p>A millennium ago, stepwells were fundamental to life in the driest parts of India.
                                    Although many have been neglected, recent restoration has returned them to their
                                    former glory. Richard Cox travelled to north-western India to document these
                                    spectacular monuments from a bygone era.</p>
                                <p>During the sixth and seventh centuries, the inhabitants of the modern-day states of
                                    Gujarat and Rajasthan in North-western India developed a method of gaining access to
                                    clean, fresh groundwater during the dry season for drinking, bathing, watering
                                    animals and irrigation. However, the significance of this invention – the stepwell –
                                    goes beyond its utilitarian application.</p>
                                <p>Unique to the region, stepwells are often architecturally complex and vary widely in
                                    size and shape. During their heyday, they were places of gathering, of leisure, of
                                    relaxation and of worship for villagers of all but the lowest castes. Most stepwells
                                    are found dotted around the desert areas of Gujarat (where they are called vav) and
                                    Rajasthan (where they are known as baori), while a few also survive in Delhi. Some
                                    were located in or near villages as public spaces for the community; others were
                                    positioned beside roads as resting places for travellers.</p>
                                <p>As their name suggests, stepwells comprise a series of stone steps descending from
                                    ground level to the water source (normally an underground aquifer) as it recedes
                                    following the rains. When the water level was high, the user needed only to descend
                                    a few steps to reach it; when it was low, several levels would have to be
                                    negotiated.</p>
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
                                        Examples of ancient stepwells can be found all over the world.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Stepwells had a range of functions, in addition to those related to water
                                        collection.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        The few existing stepwells in Delhi are more attractive than those found
                                        elsewhere.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        It took workers many years to build the stone steps characteristic of stepwells.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        The number of steps above the water level in a stepwell altered during the
                                        course of a year.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="NOT GIVEN" />
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
            <div id="panel-sa" class="x-panel" role="tabpanel" aria-labelledby="tab-sa" hidden>
                <div class="x-panel-inner">Content: Short Answer</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>Some wells are vast, open craters with hundreds of steps paving each sloping side,
                                    often in tiers. Others are more elaborate, with long stepped passages leading to the
                                    water via several storeys. Built from stone and supported by pillars, they also
                                    included pavilions that sheltered visitors from the relentless heat. But perhaps the
                                    most impressive features are the intricate decorative sculptures that embellish many
                                    stepwells, showing activities from fighting and dancing to everyday acts such as
                                    women combing their hair and churning butter.</p>
                                <p>Down the centuries, thousands of wells were constructed throughout northwestern
                                    India, but the majority have now fallen into disuse; many are derelict and dry, as
                                    groundwater has been diverted for industrial use and the wells no longer reach the
                                    water table. Their condition hasn’t been helped by recent dry spells: southern
                                    Rajasthan suffered an eight-year drought between 1996 and 2004.</p>
                                <p>However, some important sites in Gujarat have recently undergone major restoration,
                                    and the state government announced in June last year that it plans to restore the
                                    stepwells throughout the state.</p>
                                <p>In Patan, the state’s ancient capital, the stepwell of Rani Ki Vav (Queen’s Stepwell)
                                    is perhaps the finest current example. It was built by Queen Udayamati during the
                                    late 11th century, but became silted up following a flood during the 13th century.
                                    But the Archaeological Survey of India began restoring it in the 1960s, and today
                                    it’s in pristine condition. At 65 metres long, 20 metres wide and 27 metres deep,
                                    Rani Ki Vav features 500 distinct sculptures carved into niches throughout the
                                    monument, depicting gods such as Vishnu and Parvati in various incarnations.
                                    Incredibly, in January 2001, this ancient structure survived a devastating
                                    earthquake that measured 7.6 on the Richter scale.</p>
                                <p>Another example is the Surya Kund in Modhera, northern Gujarat, next to the Sun
                                    Temple, built by King Bhima I in 1026 to honour the sun god Surya. It actually
                                    resembles a tank (kund means reservoir or pond) rather than a well, but displays the
                                    hallmarks of stepwell architecture, including four sides of steps that descend to
                                    the bottom in a stunning geometrical formation. The terraces house 108 small,
                                    intricately carved shrines between the sets of steps.</p>
                                <p>Rajasthan also has a wealth of wells. The ancient city of Bundi, 200 kilometres south
                                    of Jaipur, is renowned for its architecture, including its stepwells. One of the
                                    larger examples is Raniji Ki Baori, which was built by the queen of the region,
                                    Nathavatji, in 1699. At 46 metres deep, 20 metres wide and 40 metres long, the
                                    intricately carved monument is one of 21 baoris commissioned in the Bundi area by
                                    Nathavatji.</p>
                                <p>In the old ruined town of Abhaneri, about 95 kilometres east of Jaipur, is Chand
                                    Baori, one of India’s oldest and deepest wells; aesthetically, it’s perhaps one of
                                    the most dramatic. Built in around 850 AD next to the temple of Harshat Mata, the
                                    baori comprises hundreds of zigzagging steps that run along three of its sides,
                                    steeply descending 11 storeys, resulting in a striking geometric pattern when seen
                                    from afar. On the fourth side, verandas which are supported by ornate pillars
                                    overlook the steps.</p>
                                <p>Still in public use is Neemrana Ki Baori, located just off the Jaipur–Dehli highway.
                                    Constructed in around 1700, it’s nine storeys deep, with the last two being
                                    underwater. At ground level, there are 86 colonnaded openings from where the visitor
                                    descends 170 steps to the deepest water source.</p>
                                <p>Today, following years of neglect, many of these monuments to medieval engineering
                                    have been saved by the Archaeological Survey of India, which has recognised the
                                    importance of preserving them as part of the country’s rich history. Tourists flock
                                    to wells in far-flung corners of northwestern India to gaze in wonder at these
                                    architectural marvels from 1,000 years ago, which serve as a reminder of both the
                                    ingenuity and artistry of ancient civilisations and of the value of water to human
                                    existence.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-sa">
                                <fieldset class="q-item">
                                    <p class="lead">Answer the questions below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Which part of some stepwells provided shade for people?
                                            <span class="q-question">
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            What type of serious climatic event, which took place in southern Rajasthan,
                                            is mentioned in the article?
                                            <span class="q-question">
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            Who are frequent visitors to stepwells nowadays?
                                            <span class="q-question">
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-sa">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tc" class="x-panel" role="tabpanel" aria-labelledby="tab-tc" hidden>
                <div class="x-panel-inner">Content: Table Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>In Patan, the state’s ancient capital, the stepwell of Rani Ki Vav (Queen’s Stepwell)
                                    is perhaps the finest current example. It was built by Queen Udayamati during the
                                    late 11th century, but became silted up following a flood during the 13th century.
                                    But the Archaeological Survey of India began restoring it in the 1960s, and today
                                    it’s in pristine condition. At 65 metres long, 20 metres wide and 27 metres deep,
                                    Rani Ki Vav features 500 distinct sculptures carved into niches throughout the
                                    monument, depicting gods such as Vishnu and Parvati in various incarnations.
                                    Incredibly, in January 2001, this ancient structure survived a devastating
                                    earthquake that measured 7.6 on the Richter scale.</p>
                                <p>Another example is the Surya Kund in Modhera, northern Gujarat, next to the Sun
                                    Temple, built by King Bhima I in 1026 to honour the sun god Surya. It actually
                                    resembles a tank (kund means reservoir or pond) rather than a well, but displays the
                                    hallmarks of stepwell architecture, including four sides of steps that descend to
                                    the bottom in a stunning geometrical formation. The terraces house 108 small,
                                    intricately carved shrines between the sets of steps.</p>
                                <p>Rajasthan also has a wealth of wells. The ancient city of Bundi, 200 kilometres south
                                    of Jaipur, is renowned for its architecture, including its stepwells. One of the
                                    larger examples is Raniji Ki Baori, which was built by the queen of the region,
                                    Nathavatji, in 1699. At 46 metres deep, 20 metres wide and 40 metres long, the
                                    intricately carved monument is one of 21 baoris commissioned in the Bundi area by
                                    Nathavatji.</p>
                                <p>In the old ruined town of Abhaneri, about 95 kilometres east of Jaipur, is Chand
                                    Baori, one of India’s oldest and deepest wells; aesthetically, it’s perhaps one of
                                    the most dramatic. Built in around 850 AD next to the temple of Harshat Mata, the
                                    baori comprises hundreds of zigzagging steps that run along three of its sides,
                                    steeply descending 11 storeys, resulting in a striking geometric pattern when seen
                                    from afar. On the fourth side, verandas which are supported by ornate pillars
                                    overlook the steps.</p>
                                <p>Still in public use is Neemrana Ki Baori, located just off the Jaipur–Dehli highway.
                                    Constructed in around 1700, it’s nine storeys deep, with the last two being
                                    underwater. At ground level, there are 86 colonnaded openings from where the visitor
                                    descends 170 steps to the deepest water source.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tc">
                                <fieldset class="q-item">
                                    <p class="lead">Complete the table below</p>
                                    <p>Choose <b>ONE WORD AND/OR A NUMBER</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <table border="1" cellpadding="8" cellspacing="0"
                                    style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                    <tr>
                                        <th>Stepwells</th>
                                        <th>Date</th>
                                        <th>Features</th>
                                        <th>Other Notes</th>
                                    </tr>
                                    <tr>
                                        <td><b>Rani Ki Vav</b></td>
                                        <td>Late 11th century</td>
                                        <td>As many as 500 sculptures decorate the monument</td>
                                        <td>
                                            <div class="q-item" data-q="1">
                                                Restored in the 1990s Excellent condition, despite the
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-1" class="q-text"
                                                    placeholder="">
                                                of 2001.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Surya Kund</b></td>
                                        <td>1026</td>
                                        <td>
                                            <div class="q-item" data-q="2">
                                                Steps on the
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                    placeholder="">
                                                produce a geometric pattern Carved shrines.
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-item" data-q="3">
                                                Looks more like a
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-3" class="q-text"
                                                    placeholder="">
                                                than a well.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Raniji Ki Baori</b></td>
                                        <td>1699</td>
                                        <td>Intricately carved monument</td>
                                        <td>One of 21 baoris in the area commissioned by Queen Nathavatji</td>
                                    </tr>
                                    <tr>
                                        <td><b>Chand Baori</b></td>
                                        <td>850 AD</td>
                                        <td>Steps take you down 11 storeys to the bottom</td>
                                        <td>
                                            <div class="q-item" data-q="4">
                                                Old, deep and very dramatic Has
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-4" class="q-text"
                                                    placeholder="">
                                                which provide a view to the steps.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Neemrana Ki Baori</b></td>
                                        <td>1700</td>
                                        <td>
                                            <div class="q-item" data-q="5">
                                                Has two
                                                <span class="q-number-box">5</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-5" class="q-text"
                                                    placeholder="">
                                                levels.
                                            </div>
                                        </td>
                                        <td>
                                            Used by public today
                                        </td>
                                    </tr>
                                </table>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" id="submit-tc">
                                        Submit
                                    </button>
                                    <button class="btn btn-info" type="button" onclick="retryQuiz()">Try Again</button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Content: Matching Headings</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>EUROPEAN TRANSPORT SYSTEMS 1990-2010</h3>
                                <p>What have been the trends and what are the prospects for European transport systems?
                                </p>
                                <h3 class="passage-title">A</h3>
                                <p>It is difficult to conceive of vigorous economic growth without an efficient
                                    transport system. Although modern information technologies can reduce the demand for
                                    physical transport by facilitating teleworking and teleservices, the requirement for
                                    transport continues to increase. There are two key factors behind this trend. For
                                    passenger transport, the determining factor is the spectacular growth in car use.
                                    The number of cars on European Union (EU) roads saw an increase of three million
                                    cars each year from 1990 to 2010, and in the next decade the EU will see a further
                                    substantial increase in its fleet.</p>
                                <h3 class="passage-title">B</h3>
                                <p>As far as goods transport is concerned, growth is due to a large extent to changes in
                                    the European economy and its system of production. In the last 20 years, as internal
                                    frontiers have been abolished, the EU has moved from a ‘stock’ economy to a ‘flow’
                                    economy. This phenomenon has been emphasised by the relocation of some industries,
                                    particularly those which are labour intensive, to reduce production costs, even
                                    though the production site is hundreds or even thousands of kilometres away from the
                                    final assembly plant or away from users.</p>
                                <h3 class="passage-title">C</h3>
                                <p>The strong economic growth expected in countries which are candidates for entry to
                                    the EU will also increase transport flows, in particular road haulage traffic. In
                                    1998, some of these countries already exported more than twice their 1990 volumes
                                    and imported more than five times their 1990 volumes. And although many candidate
                                    countries inherited a transport system which encourages rail, the distribution
                                    between modes has tipped sharply in favour of road transport since the 1990s.
                                    Between 1990 and 1998, road haulage increased by 19.4%, while during the same period
                                    rail haulage decreased by 43.5%, although – and this could benefit the enlarged EU –
                                    it is still on average at a much higher level than in existing member states.</p>
                                <h3 class="passage-title">D</h3>
                                <p>However, a new imperative-sustainable development – offers an opportunity for
                                    adapting the EU’s common transport policy. This objective, agreed by the Gothenburg
                                    European Council, has to be achieved by integrating environmental considerations
                                    into Community policies, and shifting the balance between modes of transport lies at
                                    the heart of its strategy. The ambitious objective can only be fully achieved by
                                    2020, but proposed measures are nonetheless a first essential step towards a
                                    sustainable transport system which will ideally be in place in 30 years’ time, that
                                    is by 2040.</p>
                                <h3 class="passage-title">E</h3>
                                <p>In 1998, energy consumption in the transport sector was to blame for 28% of emissions
                                    of CO2, the leading greenhouse gas. According to the latest estimates, if nothing is
                                    done to reverse the traffic growth trend, CO2 emissions from transport can be
                                    expected to increase by around 50% to 1,113 billion tonnes by 2020, compared with
                                    the 739 billion tonnes recorded in 1990. Once again, road transport is the main
                                    culprit since it alone accounts for 84% of the CO2 emissions attributable to
                                    transport. Using alternative fuels and improving energy efficiency is thus both an
                                    ecological necessity and a technological challenge.</p>
                                <h3 class="passage-title">F</h3>
                                <p>At the same time greater efforts must be made to achieve a modal shift. Such a change
                                    cannot be achieved overnight, all the less so after over half a century of constant
                                    deterioration in favour of road. This has reached such a pitch that today rail
                                    freight services are facing marginalisation, with just 8% of market share, and with
                                    international goods trains struggling along at an average speed of 18km/h. Three
                                    possible options have emerged.</p>
                                <h3 class="passage-title">G</h3>
                                <p>The first approach would consist of focusing on road transport solely through
                                    pricing. This option would not be accompanied by complementary measures in the other
                                    modes of transport. In the short term it might curb the growth in road transport
                                    through the better loading ratio of goods vehicles and occupancy rates of passenger
                                    vehicles expected as a result of the increase in the price of transport. However,
                                    the lack of measures available to revitalise other modes of transport would make it
                                    impossible for more sustainable modes of transport to take up the baton.</p>
                                <h3 class="passage-title">H</h3>
                                <p>The second approach also concentrates on road transport pricing but is accompanied by
                                    measures to increase the efficiency of the other modes (better quality of services,
                                    logistics, technology). However, this approach does not include investment in new
                                    infrastructure, nor does it guarantee better regional cohesion. It could help to
                                    achieve greater uncoupling than the first approach, but road transport would keep
                                    the lion’s share of the market and continue to concentrate on saturated arteries,
                                    despite being the most polluting of the modes. It is therefore not enough to
                                    guarantee the necessary shift of the balance.</p>
                                <h3 class="passage-title">I</h3>
                                <p>The third approach, which is not new, comprises a series of measures ranging from
                                    pricing to revitalising alternative modes of transport and targeting investment in
                                    the trans-European network. This integrated approach would allow the market shares
                                    of the other modes to return to their 1998 levels and thus make a shift of balance.
                                    It is far more ambitious than it looks, bearing in mind the historical imbalance in
                                    favour of roads for the last fifty years, but would achieve a marked break in the
                                    link between road transport growth and economic growth, without placing restrictions
                                    on the mobility of people and goods.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-mh">
                                <fieldset class="q-item">
                                    <p class="lead">The Reading Passage has nine paragraphs, <b>A-I</b>.</p>
                                    <p>Choose the correct heading for paragraphs <b>A-E</b> and <b>G-I</b> from the list
                                        of headings below.</p>
                                    <p>Write the correct number, <b>i-xi</b>, in boxes on your answer sheet.</p>
                                    <p><b>List of Headings</b></p>
                                    <ul class="legend">
                                        <li><strong>i</strong> A fresh and important long-term goal</li>
                                        <li><strong>ii</strong> Charging for roads and improving other transport methods
                                        </li>
                                        <li><strong>iii</strong> Changes affecting the distances goods may be
                                            transported</li>
                                        <li><strong>iv</strong> Taking all the steps necessary to change transport
                                            patterns</li>
                                        <li><strong>v</strong> The environmental costs of road transport</li>
                                        <li><strong>vi</strong> The escalating cost of rail transport</li>
                                        <li><strong>vii</strong> The need to achieve transport rebalance</li>
                                        <li><strong>viii</strong> The rapid growth of private transport</li>
                                        <li><strong>ix</strong> Plans to develop major road networks</li>
                                        <li><strong>x</strong> Restricting road use through charging policies alone</li>
                                        <li><strong>xi</strong> Transport trends in countries awaiting EU admission</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>A</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>B</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>C</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>D</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>E</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">6</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>G</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="7">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">7</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>H</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-7" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="8">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">8</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>I</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-8" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
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
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: True/False/Not Given 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3 class="passage-title">A</h3>
                                <p>It is difficult to conceive of vigorous economic growth without an efficient
                                    transport system. Although modern information technologies can reduce the demand for
                                    physical transport by facilitating teleworking and teleservices, the requirement for
                                    transport continues to increase. There are two key factors behind this trend. For
                                    passenger transport, the determining factor is the spectacular growth in car use.
                                    The number of cars on European Union (EU) roads saw an increase of three million
                                    cars each year from 1990 to 2010, and in the next decade the EU will see a further
                                    substantial increase in its fleet.</p>
                                <h3 class="passage-title">B</h3>
                                <p>As far as goods transport is concerned, growth is due to a large extent to changes in
                                    the European economy and its system of production. In the last 20 years, as internal
                                    frontiers have been abolished, the EU has moved from a ‘stock’ economy to a ‘flow’
                                    economy. This phenomenon has been emphasised by the relocation of some industries,
                                    particularly those which are labour intensive, to reduce production costs, even
                                    though the production site is hundreds or even thousands of kilometres away from the
                                    final assembly plant or away from users.</p>
                                <h3 class="passage-title">C</h3>
                                <p>The strong economic growth expected in countries which are candidates for entry to
                                    the EU will also increase transport flows, in particular road haulage traffic. In
                                    1998, some of these countries already exported more than twice their 1990 volumes
                                    and imported more than five times their 1990 volumes. And although many candidate
                                    countries inherited a transport system which encourages rail, the distribution
                                    between modes has tipped sharply in favour of road transport since the 1990s.
                                    Between 1990 and 1998, road haulage increased by 19.4%, while during the same period
                                    rail haulage decreased by 43.5%, although – and this could benefit the enlarged EU –
                                    it is still on average at a much higher level than in existing member states.</p>
                                <h3 class="passage-title">D</h3>
                                <p>However, a new imperative-sustainable development – offers an opportunity for
                                    adapting the EU’s common transport policy. This objective, agreed by the Gothenburg
                                    European Council, has to be achieved by integrating environmental considerations
                                    into Community policies, and shifting the balance between modes of transport lies at
                                    the heart of its strategy. The ambitious objective can only be fully achieved by
                                    2020, but proposed measures are nonetheless a first essential step towards a
                                    sustainable transport system which will ideally be in place in 30 years’ time, that
                                    is by 2040.</p>
                                <h3 class="passage-title">E</h3>
                                <p>In 1998, energy consumption in the transport sector was to blame for 28% of emissions
                                    of CO2, the leading greenhouse gas. According to the latest estimates, if nothing is
                                    done to reverse the traffic growth trend, CO2 emissions from transport can be
                                    expected to increase by around 50% to 1,113 billion tonnes by 2020, compared with
                                    the 739 billion tonnes recorded in 1990. Once again, road transport is the main
                                    culprit since it alone accounts for 84% of the CO2 emissions attributable to
                                    transport. Using alternative fuels and improving energy efficiency is thus both an
                                    ecological necessity and a technological challenge.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng2">
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
                                        The need for transport is growing, despite technological developments.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        To reduce production costs, some industries have been moved closer to their
                                        relevant consumers.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Cars are prohibitively expensive in some EU candidate countries.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-8" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-8" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-8" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        The Gothenburg European Council was set up 30 years ago.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-9" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-9" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-9" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        By the end of this decade, CO2 emissions from transport are predicted to reach
                                        739 billion tonnes.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-10" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-10" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-10" value="NOT GIVEN" />
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
                                <p>One of the most famous photographs in the story of rock’n’roll emphasises Ciaidini’s
                                    views. The 1956 picture of singers Elvis Presley, Carl Perkins, Johnny Cash and
                                    Jerry Lee Lewis jamming at a piano in Sun Studios in Memphis tells a hidden story.
                                    Sun’s ‘million-dollar quartet’ could have been a quintet. Missing from the picture
                                    is Roy Orbison’ a greater natural singer than Lewis, Perkins or Cash. Sam Phillips,
                                    who owned Sun, wanted to revolutionise popular music with songs that fused black and
                                    white music, and country and blues. Presley, Cash, Perkins and Lewis instinctively
                                    understood Phillips’s ambition and believed in it. Orbison wasn’t inspired by the
                                    goal, and only ever achieved one hit with the Sun label.</p>
                                <p>The value fit matters, says Cialdini, because innovation is, in part, a process of
                                    change, and under that pressure we, as a species, behave differently, ‘When things
                                    change, we are hard-wired to play it safe.’ Managers should therefore adopt an
                                    approach that appears counterintuitive -they should explain what stands to be lost
                                    if the company fails to seize a particular opportunity. Studies show that we
                                    invariably take more gambles when threatened with a loss than when offered a reward.
                                </p>
                                <p>Managing innovation is a delicate art. It’s easy for a company to be pulled in
                                    conflicting directions as the marketing, product development, and finance
                                    departments each get different feedback from different sets of people. And without a
                                    system which ensures collaborative exchanges within the company, it’s also easy for
                                    small ‘pockets of innovation’ to disappear. Innovation is a contact sport. You can’t
                                    brief people just by saying, ‘We’re going in this direction and I’m going to take
                                    you with me.’</p>
                                <p>Cialdini believes that this ‘follow-the-leader syndrome, is dangerous, not least
                                    because it encourages bosses to go it alone. ‘It’s been scientifically proven that
                                    three people will be better than one at solving problems, even if that one person is
                                    the smartest person in the field.’ To prove his point, Cialdini cites an interview
                                    with molecular biologist James Watson. Watson, together with Francis Crick,
                                    discovered the structure of DNA, the genetic information carrier of all living
                                    organisms. ‘When asked how they had cracked the code ahead of an array of highly
                                    accomplished rival investigators, he said something that stunned me. He said he and
                                    Crick had succeeded because they were aware that they weren’t the most intelligent
                                    of the scientists pursuing the answer. The smartest scientist was called Rosalind
                                    Franklin who, Watson said, “was so intelligent she rarely sought advice”.’</p>
                                <p>Teamwork taps into one of the basic drivers of human behaviour. ‘The principle of
                                    social proof is so pervasive that we don’t even recognise it,’ says Cialdini. ‘If
                                    your project is being resisted, for example, by a group of veteran employees, ask
                                    another old-timer to speak up for it.’ Cialdini is not alone in advocating this
                                    strategy. Research shows that peer power, used horizontally not vertically, is much
                                    more powerful than any boss’s speech.</p>
                                <p>Writing, visualising and prototyping can stimulate the flow of new ideas. Cialdini
                                    cites scores of research papers and historical events that prove that even something
                                    as simple as writing deepens every individual’s engagement in the project. It is, he
                                    says, the reason why all those competitions on breakfast cereal packets encouraged
                                    us to write in saying, in no more than 10 words: ‘I like Kellogg’s Com Flakes
                                    because… .’ The very act of writing makes us more likely to believe it.</p>
                                <p>Authority doesn’t have to inhibit innovation but it often does. The wrong kind of
                                    leadership will lead to what Cialdini calls ‘captainitis, the regrettable tendency
                                    of team members to opt out of team responsibilities that are properly theirs’. He
                                    calls it captainitis because, he says, ‘crew members of multipilot aircraft exhibit
                                    a sometimes deadly passivity when the flight captain makes a clearly wrong-headed
                                    decision’. This behaviour is not, he says, unique to air travel, but can happen in
                                    any workplace where the leader is overbearing.</p>
                                <p>At the other end of the scale is the 1980s Memphis design collective, a group of
                                    young designers for whom ‘the only rule was that there were no rules’. This
                                    environment encouraged a free interchange of ideas, which led to more creativity
                                    with form, function, colour and materials that revolutionised attitudes to furniture
                                    design.</p>
                                <p>Many theorists believe the ideal boss should lead from behind, taking pride in
                                    collective accomplishment and giving credit where it is due. Cialdini says: ‘Leaders
                                    should encourage everyone to contribute and simultaneously assure all concerned that
                                    every recommendation is important to making the right decision and will be given
                                    full attention.’ The frustrating thing about innovation is that there are many
                                    approaches, but no magic formula. However, a manager who wants to create a truly
                                    innovative culture can make their job a lot easier by recognising these
                                    psychological realities.</p>
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
                                        The example of the ‘million-dollar quartet’ underlines the writer’s point about
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">recognising talent.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">working as a team.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">having a shared objective.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">being an effective leader.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        James Watson suggests that he and Francis Crick won the race to discover the DNA
                                        code because they
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">were conscious of their own limitations.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">brought complementary skills to their
                                                partnership.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">were determined to outperform their brighter
                                                rivals.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">encouraged each other to realise their joint
                                                ambition.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        The writer mentions competitions on breakfast cereal packets as an example of
                                        how to
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">inspire creative thinking.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">generate concise writing.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">promote loyalty to a group.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">strengthen commitment to an idea.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        In the last paragraph, the writer suggests that it is important for employees to
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">be aware of their company’s goals.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">feel that their contributions are valued.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">have respect for their co-workers‟
                                                achievements.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">understand why certain management decisions are
                                                made.</span>
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
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Content: Matching Sentence Ending</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>For Robert B. Cialdini, Professor of Psychology at Arizona State University, one
                                    reason that companies don’t succeed as often as they should is that innovation
                                    starts with recruitment. Research shows that the fit between an employee’s values
                                    and a company’s values makes a difference to what contribution they make and
                                    whether, two years after they join, they’re still at the company. Studies at Harvard
                                    Business School show that, although some individuals may be more creative than
                                    others, almost every individual can be creative in the right circumstances.</p>
                                <p>One of the most famous photographs in the story of rock’n’roll emphasises Ciaidini’s
                                    views. The 1956 picture of singers Elvis Presley, Carl Perkins, Johnny Cash and
                                    Jerry Lee Lewis jamming at a piano in Sun Studios in Memphis tells a hidden story.
                                    Sun’s ‘million-dollar quartet’ could have been a quintet. Missing from the picture
                                    is Roy Orbison’ a greater natural singer than Lewis, Perkins or Cash. Sam Phillips,
                                    who owned Sun, wanted to revolutionise popular music with songs that fused black and
                                    white music, and country and blues. Presley, Cash, Perkins and Lewis instinctively
                                    understood Phillips’s ambition and believed in it. Orbison wasn’t inspired by the
                                    goal, and only ever achieved one hit with the Sun label.</p>
                                <p>The value fit matters, says Cialdini, because innovation is, in part, a process of
                                    change, and under that pressure we, as a species, behave differently, ‘When things
                                    change, we are hard-wired to play it safe.’ Managers should therefore adopt an
                                    approach that appears counterintuitive -they should explain what stands to be lost
                                    if the company fails to seize a particular opportunity. Studies show that we
                                    invariably take more gambles when threatened with a loss than when offered a reward.
                                </p>
                                <p>Managing innovation is a delicate art. It’s easy for a company to be pulled in
                                    conflicting directions as the marketing, product development, and finance
                                    departments each get different feedback from different sets of people. And without a
                                    system which ensures collaborative exchanges within the company, it’s also easy for
                                    small ‘pockets of innovation’ to disappear. Innovation is a contact sport. You can’t
                                    brief people just by saying, ‘We’re going in this direction and I’m going to take
                                    you with me.’</p>
                                <p>Cialdini believes that this ‘follow-the-leader syndrome, is dangerous, not least
                                    because it encourages bosses to go it alone. ‘It’s been scientifically proven that
                                    three people will be better than one at solving problems, even if that one person is
                                    the smartest person in the field.’ To prove his point, Cialdini cites an interview
                                    with molecular biologist James Watson. Watson, together with Francis Crick,
                                    discovered the structure of DNA, the genetic information carrier of all living
                                    organisms. ‘When asked how they had cracked the code ahead of an array of highly
                                    accomplished rival investigators, he said something that stunned me. He said he and
                                    Crick had succeeded because they were aware that they weren’t the most intelligent
                                    of the scientists pursuing the answer. The smartest scientist was called Rosalind
                                    Franklin who, Watson said, “was so intelligent she rarely sought advice”.’</p>
                                <p>Teamwork taps into one of the basic drivers of human behaviour. ‘The principle of
                                    social proof is so pervasive that we don’t even recognise it,’ says Cialdini. ‘If
                                    your project is being resisted, for example, by a group of veteran employees, ask
                                    another old-timer to speak up for it.’ Cialdini is not alone in advocating this
                                    strategy. Research shows that peer power, used horizontally not vertically, is much
                                    more powerful than any boss’s speech.</p>
                                <p>Writing, visualising and prototyping can stimulate the flow of new ideas. Cialdini
                                    cites scores of research papers and historical events that prove that even something
                                    as simple as writing deepens every individual’s engagement in the project. It is, he
                                    says, the reason why all those competitions on breakfast cereal packets encouraged
                                    us to write in saying, in no more than 10 words: ‘I like Kellogg’s Com Flakes
                                    because… .’ The very act of writing makes us more likely to believe it.</p>
                                <p>Authority doesn’t have to inhibit innovation but it often does. The wrong kind of
                                    leadership will lead to what Cialdini calls ‘captainitis, the regrettable tendency
                                    of team members to opt out of team responsibilities that are properly theirs’. He
                                    calls it captainitis because, he says, ‘crew members of multipilot aircraft exhibit
                                    a sometimes deadly passivity when the flight captain makes a clearly wrong-headed
                                    decision’. This behaviour is not, he says, unique to air travel, but can happen in
                                    any workplace where the leader is overbearing.</p>
                                <p>At the other end of the scale is the 1980s Memphis design collective, a group of
                                    young designers for whom ‘the only rule was that there were no rules’. This
                                    environment encouraged a free interchange of ideas, which led to more creativity
                                    with form, function, colour and materials that revolutionised attitudes to furniture
                                    design.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-mse">
                                <fieldset class="q-item">
                                    <p class="lead">Complete each sentence with the correct ending, A-G, below.
                                    </p>
                                    <p>Write the correct letter, <b>A-G</b>, in boxes on your answer sheet</p>
                                    <ul class="legend">
                                        <li><strong>A</strong> take chances.</li>
                                        <li><strong>B</strong> share their ideas.</li>
                                        <li><strong>C</strong> become competitive.</li>
                                        <li><strong>D</strong> get promotion.</li>
                                        <li><strong>E</strong> avoid risk.</li>
                                        <li><strong>F</strong> ignore their duties.</li>
                                        <li><strong>G</strong> remain in their jobs.</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            The physical surroundings in which a person works play a key role in
                                            determining their creativity.
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-1" class="q-dropdown">
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
                                            At times of change, people tend to
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-2" class="q-dropdown">
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
                                            If people are aware of what they might lose, they will often
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-3" class="q-dropdown">
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
                                            People working under a dominant boss are liable to
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-4" class="q-dropdown">
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
                                            Employees working in organisations with few rules are more likely to
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-5" class="q-dropdown">
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
                                    <button type="button" class="btn btn-primary" id="submit-mse">
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
                                <h3 class="passage-title">The psychology of innovation</h3>
                                <p><i>Why are so few companies truly innovative?</i></p>
                                <p>Innovation is key to business survival, and companies put substantial resources into
                                    inspiring employees to develop new ideas. There are, nevertheless, people working in
                                    luxurious, state-of-the-art centres designed to stimulate innovation who find that
                                    their environment doesn’t make them feel at all creative. And there are those who
                                    don’t have a budget, or much space, but who innovate successfully.</p>
                                <p>For Robert B. Cialdini, Professor of Psychology at Arizona State University, one
                                    reason that companies don’t succeed as often as they should is that innovation
                                    starts with recruitment. Research shows that the fit between an employee’s values
                                    and a company’s values makes a difference to what contribution they make and
                                    whether, two years after they join, they’re still at the company. Studies at Harvard
                                    Business School show that, although some individuals may be more creative than
                                    others, almost every individual can be creative in the right circumstances.</p>
                                <p>One of the most famous photographs in the story of rock’n’roll emphasises Ciaidini’s
                                    views. The 1956 picture of singers Elvis Presley, Carl Perkins, Johnny Cash and
                                    Jerry Lee Lewis jamming at a piano in Sun Studios in Memphis tells a hidden story.
                                    Sun’s ‘million-dollar quartet’ could have been a quintet. Missing from the picture
                                    is Roy Orbison’ a greater natural singer than Lewis, Perkins or Cash. Sam Phillips,
                                    who owned Sun, wanted to revolutionise popular music with songs that fused black and
                                    white music, and country and blues. Presley, Cash, Perkins and Lewis instinctively
                                    understood Phillips’s ambition and believed in it. Orbison wasn’t inspired by the
                                    goal, and only ever achieved one hit with the Sun label.</p>
                                <p>The value fit matters, says Cialdini, because innovation is, in part, a process of
                                    change, and under that pressure we, as a species, behave differently, ‘When things
                                    change, we are hard-wired to play it safe.’ Managers should therefore adopt an
                                    approach that appears counterintuitive -they should explain what stands to be lost
                                    if the company fails to seize a particular opportunity. Studies show that we
                                    invariably take more gambles when threatened with a loss than when offered a reward.
                                </p>
                                <p>Managing innovation is a delicate art. It’s easy for a company to be pulled in
                                    conflicting directions as the marketing, product development, and finance
                                    departments each get different feedback from different sets of people. And without a
                                    system which ensures collaborative exchanges within the company, it’s also easy for
                                    small ‘pockets of innovation’ to disappear. Innovation is a contact sport. You can’t
                                    brief people just by saying, ‘We’re going in this direction and I’m going to take
                                    you with me.’</p>
                                <p>Cialdini believes that this ‘follow-the-leader syndrome, is dangerous, not least
                                    because it encourages bosses to go it alone. ‘It’s been scientifically proven that
                                    three people will be better than one at solving problems, even if that one person is
                                    the smartest person in the field.’ To prove his point, Cialdini cites an interview
                                    with molecular biologist James Watson. Watson, together with Francis Crick,
                                    discovered the structure of DNA, the genetic information carrier of all living
                                    organisms. ‘When asked how they had cracked the code ahead of an array of highly
                                    accomplished rival investigators, he said something that stunned me. He said he and
                                    Crick had succeeded because they were aware that they weren’t the most intelligent
                                    of the scientists pursuing the answer. The smartest scientist was called Rosalind
                                    Franklin who, Watson said, “was so intelligent she rarely sought advice”.’</p>
                                <p>Teamwork taps into one of the basic drivers of human behaviour. ‘The principle of
                                    social proof is so pervasive that we don’t even recognise it,’ says Cialdini. ‘If
                                    your project is being resisted, for example, by a group of veteran employees, ask
                                    another old-timer to speak up for it.’ Cialdini is not alone in advocating this
                                    strategy. Research shows that peer power, used horizontally not vertically, is much
                                    more powerful than any boss’s speech.</p>
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
                                        The physical surroundings in which a person works play a key role in determining
                                        their creativity.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Most people have the potential to be creative.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Teams work best when their members are of equally matched intelligence.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        It is easier for smaller companies to be innovative.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        A manager’s approval of an idea is more persuasive than that of a colleague.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="NOT GIVEN" />
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
                        <small id="scorePercentage">0%</small>
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

        document.getElementById("doneBtn").addEventListener("click", function() {
            window.history.back();
        });
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
                    'tfng': 5,
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
            updateQuestionListForPart('tfng');
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
            closeModal();

            $("#form-tfng input[type=radio]").prop("checked", false);
            $(".q-option").removeClass("correct wrong is-selected unanswered-highlight");
            $("#resultsTableBody").empty();
            $("#scoreDisplay").text("0/0");
            $("#scorePercentage").text("0%");

            setTimeout(function () {
                $('html, body').scrollTop($("#form-tfng").offset().top);
            }, 350);
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

                        let correctCount = 0;
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
                        $("#scorePercentage").text(`${Math.round((correctCount/total)*100)}%`);

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

        $("#submit-tfng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng", "XJ3XOcvqPbgdZwyl", "tfng");
        });

        $("#submit-tfng2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng2", "XJ3XOcvqPbgdZwyl", "tfng");
        });

        $("#submit-ynng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-ynng", "XJ3XOcvqPbgdZwyl", "ynng");
        });

        $("#submit-mse").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mse", "XJ3XOcvqPbgdZwyl", "mse");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one", "XJ3XOcvqPbgdZwyl", "oc");
        });

        $("#submit-mh").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mh", "XJ3XOcvqPbgdZwyl", "mh");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "XJ3XOcvqPbgdZwyl", "tc");
        });

        $("#submit-sa").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-sa", "XJ3XOcvqPbgdZwyl", "sa");
        });
    </script>


</body>

</html>
