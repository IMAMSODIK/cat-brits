<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>Header CAT Bahasa Inggris</title>
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
            background: var(--bg);
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
            background: #eef2ff;
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
            /* grid-template-columns: repeat(3, minmax(0, 1fr)); */
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
</head>

<body>
    <header class="app-header" role="banner">
        <div class="header-row" aria-label="Header CAT Bahasa Inggris">
            <div class="brand">
                <div class="logo" aria-hidden="true">LOGO</div>
                <div class="title-wrap">
                    <div class="app-title">CAT Bahasa Inggris</div>
                    <div class="app-subtitle">Latihan soal adaptif</div>
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
                <div class="k">Nama Sesi</div>
                <div class="v" id="siName">Placement Test - Bahasa Inggris</div>
            </div>
            <div class="kv right">
                <div class="k">Peserta</div>
                <div class="v" id="siUser">Ahmad Fauzi</div>
            </div>
        </div>
    </section>

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">True/False/Not Given</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Yes/No/Not Given</button>
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Matching Sentence ending</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Matching Headings</button>
            <button class="x-tab" role="tab" id="tab-tc" aria-controls="panel-tc" aria-selected="false"
                data-id="tc">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-sa" aria-controls="panel-sa" aria-selected="false"
                data-id="sa">Short Answer</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Konten: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Reading Passage</h3>
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
                            <form class="qa-body">
                                <fieldset class="q-item">
                                    <p class="lead">Do the following statements agree with the information given in the
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
                                            <input type="radio" name="q1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q1" value="C" />
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
                                            <input type="radio" name="q2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q2" value="C" />
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
                                            <input type="radio" name="q3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q3" value="C" />
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
                                            <input type="radio" name="q4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q4" value="C" />
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
                                            <input type="radio" name="q5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="q5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>

                        <div class="highlight-toolbar" id="highlightToolbar">
                            <div class="color-option yellow" data-color="yellow"></div>
                            <div class="color-option green" data-color="green"></div>
                            <div class="color-option blue" data-color="blue"></div>
                            <div class="color-option pink" data-color="pink"></div>
                            <div class="color-option orange" data-color="orange"></div>
                            <button id="highlightNote" title="Add Note">📝</button>
                            <button id="removeHighlight" title="Remove Highlight">✕</button>
                        </div>

                        <!-- Note Popup -->
                        <div class="note-popup" id="notePopup">
                            <textarea id="noteText" placeholder="Tulis catatan..."></textarea>
                            <div>
                                <button id="saveNote" class="save">Simpan</button>
                                <button id="cancelNote" class="cancel">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Konten: Yes/No/Not Given</div>
            </div>
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Konten: Matching Sentence ending</div>
            </div>
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Konten: One Choice</div>
            </div>
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Konten: Matching Headings</div>
            </div>
            <div id="panel-tc" class="x-panel" role="tabpanel" aria-labelledby="tab-tc" hidden>
                <div class="x-panel-inner">Konten: Table Completion</div>
            </div>
            <div id="panel-sa" class="x-panel" role="tabpanel" aria-labelledby="tab-sa" hidden>
                <div class="x-panel-inner">Konten: Short Answer</div>
            </div>
        </div>
    </section>

    <!-- Floating Question List -->
    <div class="floating-questions collapsed" id="floatingQuestions">
        <!-- Tombol Icon -->
        <button class="fq-fab" id="fqToggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Panel Soal -->
        <div class="fq-body" id="fqBody">
            <div class="fq-list" id="fqList"></div>
        </div>
    </div>

    <script>
        (function () {
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
            window.CATHeader = { startCountdown };

            // Events
            document.getElementById('infoBtn').addEventListener('click', function () {
                // Ganti dengan modal/informasi instruksi Anda
                alert('Instruksi:\n- Baca soal dengan cermat\n- Waktu berjalan otomatis\n- Klik "Selesai" untuk mengumpulkan');
            });

            document.getElementById('doneBtn').addEventListener('click', function () {
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
        document.addEventListener('DOMContentLoaded', function () {
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
                        btn.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
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
            let down = false, moved = false, startX = 0, startLeft = 0, pid = null;
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
                    } catch { }
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
                    xTabs.scrollBy({ left: e.deltaY, behavior: 'auto' });
                    e.preventDefault();
                }
            }, { passive: false });

            /* Keyboard navigation */
            tabs.forEach(btn => {
                btn.addEventListener('keydown', (e) => {
                    if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
                    e.preventDefault();
                    const idx = tabs.indexOf(btn);
                    const nextIdx = e.key === 'ArrowRight' ? (idx + 1) % tabs.length : (idx - 1 + tabs.length) % tabs.length;
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
        /* Interaksi: klik kartu opsi memilih radio; simpan jawaban; fokus aksesibel */
        document.addEventListener('DOMContentLoaded', function () {
            const section = document.querySelector('.reading-section');
            if (!section) return;

            // Toggle selected style saat memilih opsi
            section.addEventListener('click', function (e) {
                const opt = e.target.closest('.q-option');
                if (!opt) return;
                const fieldset = opt.closest('.q-item');
                const name = fieldset.querySelector('input[type="radio"]')?.name;
                if (!name) return;

                // Set radio
                const input = opt.querySelector('input[type="radio"]');
                if (input) input.checked = true;

                // Bersihkan state lalu tandai selected
                fieldset.querySelectorAll('.q-option').forEach(el => el.classList.remove('is-selected'));
                opt.classList.add('is-selected');
            });

            // Saat navigasi keyboard pada radio, sinkronkan highlight
            section.addEventListener('change', function (e) {
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

            // Optional: ambil jawaban cepat
            window.getAnswers = function () {
                const out = {};
                section.querySelectorAll('.q-item').forEach(fs => {
                    const name = fs.querySelector('input[type="radio"]')?.name;
                    const checked = fs.querySelector('input[type="radio"]:checked');
                    if (name) out[name] = checked ? checked.value : null;
                });
                return out;
            };
        });

        document.addEventListener("DOMContentLoaded", () => {
            const grid = document.querySelector(".resizable-grid");
            const handle = document.querySelector(".resize-handle");

            let isDragging = false;

            handle.addEventListener("mousedown", (e) => {
                e.preventDefault();
                isDragging = true;
                document.body.style.cursor = "col-resize";
            });

            window.addEventListener("mousemove", (e) => {
                if (!isDragging) return;

                const gridRect = grid.getBoundingClientRect();
                const totalWidth = gridRect.width;
                const offsetX = e.clientX - gridRect.left;

                // hitung proporsi untuk kiri & kanan
                const leftWidth = Math.max(250, offsetX);
                const rightWidth = Math.max(250, totalWidth - leftWidth - handle.offsetWidth);

                grid.style.gridTemplateColumns = `${leftWidth}px 6px ${rightWidth}px`;
            });

            window.addEventListener("mouseup", () => {
                if (isDragging) {
                    isDragging = false;
                    document.body.style.cursor = "default";
                }
            });
        });

    </script>

    <!-- script bagian highlight + note -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const passageBody = document.querySelector('.passage-body');
            const toolbar = document.getElementById('highlightToolbar');
            const notePopup = document.getElementById('notePopup');
            const noteText = document.getElementById('noteText');

            let currentSelection = null;
            let selectedColor = 'yellow';
            let currentHighlight = null;

            // === Show toolbar langsung setelah blok teks ===
            passageBody.addEventListener('mouseup', () => {
                const selection = window.getSelection();
                if (selection && !selection.isCollapsed) {
                    currentSelection = selection.getRangeAt(0);
                    const rect = currentSelection.getBoundingClientRect();
                    toolbar.style.display = 'flex';
                    toolbar.style.left = rect.left + window.scrollX + 'px';
                    toolbar.style.top = rect.top + window.scrollY - 40 + 'px';
                } else {
                    toolbar.style.display = 'none';
                }
            });

            // === Pilih warna highlight ===
            document.querySelectorAll('.color-option').forEach(option => {
                option.addEventListener('click', () => {
                    selectedColor = option.dataset.color;
                    applyHighlight(selectedColor, false);
                });
            });

            // === Fungsi highlight ===
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

                toolbar.style.display = 'none';
                window.getSelection().removeAllRanges();
                currentSelection = null;
            }

            // === Tambahkan catatan ===
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
                    toolbar.style.display = 'none';
                    window.getSelection().removeAllRanges();
                    currentSelection = null;
                }
            });

            // === Popup Note ===
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

            // Save note
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

            // === Klik highlight → buka note kalau ada ===
            passageBody.addEventListener('click', (e) => {
                if (e.target.classList.contains('highlight')) {
                    if (e.target.dataset.note) {
                        currentHighlight = e.target;
                        showNotePopup(e.target, e.target.dataset.note);
                    }
                }
            });

            // === Klik luar → tutup semua ===
            document.addEventListener('click', (e) => {
                if (!toolbar.contains(e.target) &&
                    !notePopup.contains(e.target) &&
                    !e.target.classList.contains('highlight') &&
                    !window.getSelection().toString()) {
                    toolbar.style.display = 'none';
                    hideNotePopup();
                }
            });
        });
    </script>


    <script>
        /* Floating Question List - otomatis update status */
        document.addEventListener('DOMContentLoaded', function () {
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
            });

            // Generate question numbers berdasarkan part aktif
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

                    // Scroll to question saat diklik
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
                    question.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    question.focus();
                }
            }

            // Update status soal (terjawab/belum)
            function updateQuestionStatus(partId) {
                const panel = document.getElementById(`panel-${partId}`);
                if (!panel) return;

                // Reset semua status
                fqList.querySelectorAll('.fq-item').forEach(item => {
                    item.classList.remove('answered', 'current');
                });

                // Cek setiap soal
                for (let i = 1; i <= questionCount; i++) {
                    const item = fqList.querySelector(`[data-q="${i}"][data-part="${partId}"]`);
                    if (!item) continue;

                    const question = panel.querySelector(`[data-q="${i}"]`);
                    if (!question) continue;

                    // Cek apakah sudah dijawab
                    const answered = question.querySelector('input[type="radio"]:checked');
                    if (answered) {
                        item.classList.add('answered');
                    }
                }
            }

            // Deteksi perubahan part aktif
            function watchPartChanges() {
                const observer = new MutationObserver((mutations) => {
                    mutations.forEach((mutation) => {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'data-active') {
                            const newPart = mutation.target.dataset.active;
                            if (newPart && newPart !== currentPart) {
                                currentPart = newPart;
                                // Update question list untuk part baru
                                updateQuestionListForPart(newPart);
                            }
                        }
                    });
                });

                const tabsContainer = document.querySelector('.x-tabs');
                if (tabsContainer) {
                    observer.observe(tabsContainer, { attributes: true, attributeFilter: ['data-active'] });
                }
            }

            // Update question list berdasarkan part
            function updateQuestionListForPart(partId) {
                // Jumlah soal per part (sesuaikan dengan kebutuhan)
                const questionCounts = {
                    'tfng': 5,
                    'ynng': 4,
                    'mse': 6,
                    'one': 8,
                    'mh': 7,
                    'tc': 5,
                    'sa': 3
                };

                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // Deteksi perubahan jawaban di semua part
            function watchAnswerChanges() {
                document.addEventListener('change', (e) => {
                    if (e.target.type === 'radio') {
                        const question = e.target.closest('[data-q]');
                        if (question) {
                            updateQuestionStatus(currentPart);
                        }
                    }
                });

                // Juga deteksi klik pada option cards
                document.addEventListener('click', (e) => {
                    const option = e.target.closest('.q-option');
                    if (option) {
                        setTimeout(() => updateQuestionStatus(currentPart), 50);
                    }
                });
            }

            // Init
            updateQuestionListForPart('tfng');
            watchPartChanges();
            watchAnswerChanges();

            // Update status setiap 2 detik (backup)
            setInterval(() => updateQuestionStatus(currentPart), 2000);
        });

        document.addEventListener('DOMContentLoaded', function () {
            const floatingQ = document.getElementById('floatingQuestions');
            const toggleBtn = document.getElementById('fqToggle');

            toggleBtn.addEventListener('click', () => {
                floatingQ.classList.toggle('expanded');
            });
        });

    </script>


</body>

</html>