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

{{-- style modal --}}
<style>
    /* Modal Styles */
    .custom-modal {
        display: none !important;
        /* Pastikan modal tersembunyi secara default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        padding: 15px;
        box-sizing: border-box;
        opacity: 0;
        /* Tambahkan opacity untuk transisi */
        transition: opacity 0.3s ease;
        /* Smooth transition */
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
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        max-height: 90vh;
        display: flex;
        flex-direction: column;
        margin: auto;
        transform: scale(0.9) translateY(-20px);
        /* State awal untuk animasi */
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
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        background: rgba(255, 255, 255, 0.2);
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
        background-color: rgba(255, 255, 255, 0.2);
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
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
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

        .result-table th,
        .result-table td {
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
    .q-item.unanswered-highlight {
        border: 2px solid red !important;
        background: #ffe6e6 !important;
    }
</style>

{{-- style unutk audio player --}}
<style>
    .audio-player:hover {
        transform: translateY(-3px);
    }

    .player-header {
        text-align: center;
        margin-bottom: 15px;
    }

    .player-title {
        font-size: 1.35rem;
        font-weight: 600;
        color: #333;
    }

    .player-subtitle {
        font-size: 0.9rem;
        color: #666;
    }

    .controls-container {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    /* ===== PLAY BUTTON ===== */
    .play-btn {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        border: none;
        cursor: pointer;
        color: white;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1rem;
    }

    .seek-container {
        flex: 1;
    }

    .seekBar,
    #seekBar,
    .seekBar {
        width: 100%;
        height: 7px;
        appearance: none;
        background: #e0e0e0;
        border-radius: 10px;
        outline: none;
        overflow: hidden;
    }

    .seekBar::-webkit-slider-thumb {
        appearance: none;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #2575fc;
        box-shadow: -400px 0 0 390px #2575fc;
    }

    .timeText {
        display: flex;
        justify-content: space-between;
        margin-top: 6px;
        font-size: 0.9rem;
        color: #444;
    }

    .start-buttons {
        display: flex;
        gap: 10px;
        margin-top: 15px;
        flex-wrap: wrap;
    }

    .start-btn {
        padding: 9px 15px;
        font-size: 0.9rem;
        background: rgba(37, 117, 252, 0.08);
        border: 1px solid rgba(37, 117, 252, 0.25);
        color: #2575fc;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.15s;
        white-space: nowrap;
    }

    .start-btn:hover {
        background: rgba(37, 117, 252, 0.15);
        transform: translateY(-2px);
    }

    .audio-info {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 18px;
        padding: 12px;
        background: #f4f7ff;
        border-radius: 10px;
    }

    .audio-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .audio-name {
        font-weight: 600;
        color: #333;
    }

    .audio-source {
        font-size: 0.8rem;
        color: #555;
    }

    /* =========================== */
    /*        RESPONSIVE CSS       */
    /* =========================== */

    /* Mobile (max 480px) */
    @media (max-width: 480px) {

        .audio-player {
            padding: 20px;
            border-radius: 16px;
        }

        .player-title {
            font-size: 1.15rem;
        }

        .play-btn {
            width: 44px;
            height: 44px;
            font-size: 0.85rem;
        }

        .start-btn {
            flex: 1;
            text-align: center;
        }

        .timeText {
            font-size: 0.75rem;
        }
    }

    /* Tablet (480px – 768px) */
    @media (max-width: 768px) {
        .audio-player {
            max-width: 100%;
        }

        .play-btn {
            width: 46px;
            height: 46px;
        }

        .start-btn {
            font-size: 0.85rem;
        }
    }

    /* Desktop Wide */
    @media (min-width: 1200px) {
        .audio-player {
            max-width: 100%;
        }
    }
</style>