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

    #panel-sentence_completion input {
      padding: 6px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      margin-left: 5px;
      width: 120px;
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

    #panel-tc .q-number-box,
    #panel-summary_completion .q-number-box,
    #panel-mh .q-number-box {
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
    #panel-mh .q-text,
    #panel-summary_completion .q-text {
      flex: 1;
      padding: 6px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      box-sizing: border-box;
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
    <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
      <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
        aria-selected="true" data-id="tfng">True/False/Not Given</button>
      <button class="x-tab" role="tab" id="tab-nc" aria-controls="panel-nc"
        aria-selected="false" data-id="nc">Note Completion</button>
      <button class="x-tab" role="tab" id="tab-matching_information" aria-controls="panel-matching_information" aria-selected="false"
        data-id="matching_information">Matching Information</button>
      <button class="x-tab" role="tab" id="tab-summary_completion" aria-controls="panel-summary_completion" aria-selected="false"
        data-id="summary_completion">Summary Completion</button>
      <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
        data-id="mh">Matching Headings</button>
      <button class="x-tab" role="tab" id="tab-sentence_completion" aria-controls="panel-sentence_completion" aria-selected="false"
        data-id="sentence_completion">Sentence Completion</button>
      <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="false"
        data-id="tfng2">True/False/Not Given 2</button>
    </div>

    <div class="x-panels">
      <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
        <div class="x-panel-inner">Content: True/False/Not Given</div>
        <div class="reading-section" aria-label="Reading and Questions">
          <div class="reading-grid resizable-grid highlighted-content">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
              <h3 class="passage-title">Alexander Henderson (1831-1913)</h3>
              <div class="passage-body">
                <p>Born in Scotland, Henderson emigrated to Canada in 1855 and become a well-known landscape photographer</p>
                <p>Alexander Henderson was born in Scotland in 1831 and was the son of a successful merchant. His grandfather, also called Alexander, had founded the family business, and later became the first chairman of the National Bank of Scotland. The family had extensive landholding in Scotland. Besides its residence in Edinburgh, it owned Press Estate, 650 acres of farmland about 35 miles southeast of the city. The family often stayed at Press Castle, the large mansion on the northern edge of the property, and Alexander spent much of his childhood in the area, playing on the beach near Eyemouth or fishing in the streams nearby.</p>
                <p>Even after he went to school at Murcheston Academy on the outskirts of Edinburgh, Henderson returned to Press at weekends. In 1849 he began a three-year apprenticeship to become an accountant. Although he never liked the prospect of a business career, he stayed with it to please his family. In October 1855, however, he emigrated to Canada with his wife Agnes Elder Robertson and they settled in Montreal.</p>
                <p>Henderson learned photography in Montreal around the year 1857 and quickly took it up as a serious amateur. He became a personal friend and colleague of the Scottish – Canadian photographer William Notman. The two men made a photographic excursion to Niagara Falls in 1860 and they cooperated on experiments with magnesium flares as a source of artificial light in 1865. They belonged to the same societies and were among the founding members of the Art Association of Montreal. Henderson acted as chairman of the association’s first meeting, which was held in Notman’s studio on 11 January 1860.</p>
                <p>In spite of their friendship, their styles of photography were quite different. While Notman’s landscapes were noted for their bold realism, Henderson for the first 20 years of his career produced romantic images, showing the strong influence of the British landscape tradition. His artistic and technical progress was rapid and in 1865 he published his first major collection of landscape photographs. The publication had limited circulation (only seven copies have ever been found), and was called Canadian Views and Studies. The contents of each copy vary significantly and have proved a useful source for evaluating Henderson’s early work.</p>
                <p>In 1866, he gave up his business to open a photographic studio, advertising himself as a portrait and landscape photographer. From about 1870 he dropped portraiture to specialize in landscape photography and other views. His numerous photographs of city life revealed in street scenes, houses, and markets are alive with human activity, and although his favourite subject was landscape he usually composed his scenes around such human pursuits as farming the land, cutting ice on a river, or sailing down a woodland stream. There was sufficient demand for these types of scenes and others he took depicting the lumber trade, steamboats and waterfalls to enable him to make a living. There was little competing hobby or amateur photography before the late 1880s because of the time-consuming techniques involved and the weight of equipment. People wanted to buy photographs as souvenirs of a trip or as gifts, and catering to this market, Henderson had stock photographs on display at his studio for mounting, framing, or inclusion in albums.</p>
                <p>Henderson frequently exhibited his photographs in Montreal and abroad, in London, Edinburgh, Dublin, Paris, New York, and Philadelphia. He met with greater success in 1877 and 1878 in New York when he won first prizes in the exhibition held by E and H T Anthony and Company for landscapes using the Lambertype process. In 1878 his work won second prize at the world exhibition in Paris.</p>
                <p>In the 1890s and 1880s Henderson travelled widely throughout Quebec and Ontario, in Canada, documenting the major cities of the two provinces and many of the villages in Quebec. He was especially fond of the wilderness and often travelled by canoe on the Blanche, du Lièvre, and other noted eastern rivers. He went on several occasions to the Maritimes and in 1872 he sailed by yacht along the lower north shore of the St Lawrence River. That same year, while in the lower St Lawrence River region, he took some photographs of the construction of the Intercolonial Railway. This undertaking led in 1875 to a commission from the railway to record the principal structures along the almost-completed line connecting Montreal to Halifax. Commissions from other railways followed. In 1876 he photographed bridges on the Quebec, Montreal, Ottawa and Occidental Railway between Montreal and Ottawa. In 1885 he went west along the Canadian Pacific Railway (CPR) as far as Rogers Pass in British Columbia, where he took photographs of the mountains and the progress of construction.</p>
                <p>In 1892 Henderson accepted a full-time position with the CPR as manager of a photographic department which he was to set up and administer. His duties included spending four months in the field each year. That summer he made his second trip west, photographing extensively along the railway line as far as Victoria. He continued in this post until 1897, when he retired completely from photography.</p>
                <p>When Henderson died in 1913, his huge collection of glass negatives was stored in the basement of his house. Today collections of his work are held at the National Archives of Canada, Ottawa, and the McCord Museum of Canadian History, Montreal.</p>
              </div>
            </article>
            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>
            <aside class="qa" aria-label="Questions">
              <form class="qa-body" id="form-tfng">
                <fieldset class="q-item">
                  <p><b>Question 1-8</b></p>
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
                    Henderson rarely visited the area around Press estate when he was younger.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-1" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-1" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-1" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                  <legend class="q-text">
                    <span class="q-number">2</span>
                    Henderson pursued a business career because it was what his family wanted.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-2" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-2" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-2" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                  <legend class="q-text">
                    <span class="q-number">3</span>
                    Henderson and Notman were surprised by the results of their 1865 experiment.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-3" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-3" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-3" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="4">
                  <legend class="q-text">
                    <span class="q-number">4</span>
                    There were many similarities between Henderson’s early landscapes and those of Notman.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-4" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-4" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-4" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="5">
                  <legend class="q-text">
                    <span class="q-number">5</span>
                    The studio that Henderson opened in 1866 was close to his home.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-5" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-5" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-5" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="6">
                  <legend class="q-text">
                    <span class="q-number">6</span>
                    Henderson gave up portraiture so that he could focus on taking photographs of scenery.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-6" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-6" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-6" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="7">
                  <legend class="q-text">
                    <span class="q-number">7</span>
                    When Henderson began work for the Intercolonial Railway, the Montreal to Halifax line had been finished.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-7" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-7" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-7" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="8">
                  <legend class="q-text">
                    <span class="q-number">8</span>
                    Henderson’s last work as a photographer was with the Canadian Pacific Railway.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 8 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-8" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-8" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-8" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <div style="text-align: center;">
                  <button type="button" class="btn btn-primary try-again" id="again-tfng" style="display: none">
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

      <!-- done -->

      <div id="panel-nc" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-nc">
        <div class="x-panel-inner">Content: Note Completion</div>
        <div class="reading-section" aria-label="Reading and Questions">
          <div class="reading-grid resizable-grid highlighted-content">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
              <h3 class="passage-title">Alexander Henderson (1831-1913)</h3>
              <div class="passage-body">
                <p>Born in Scotland, Henderson emigrated to Canada in 1855 and become a well-known landscape photographer</p>
                <p>Alexander Henderson was born in Scotland in 1831 and was the son of a successful merchant. His grandfather, also called Alexander, had founded the family business, and later became the first chairman of the National Bank of Scotland. The family had extensive landholding in Scotland. Besides its residence in Edinburgh, it owned Press Estate, 650 acres of farmland about 35 miles southeast of the city. The family often stayed at Press Castle, the large mansion on the northern edge of the property, and Alexander spent much of his childhood in the area, playing on the beach near Eyemouth or fishing in the streams nearby.</p>
                <p>Even after he went to school at Murcheston Academy on the outskirts of Edinburgh, Henderson returned to Press at weekends. In 1849 he began a three-year apprenticeship to become an accountant. Although he never liked the prospect of a business career, he stayed with it to please his family. In October 1855, however, he emigrated to Canada with his wife Agnes Elder Robertson and they settled in Montreal.</p>
                <p>Henderson learned photography in Montreal around the year 1857 and quickly took it up as a serious amateur. He became a personal friend and colleague of the Scottish – Canadian photographer William Notman. The two men made a photographic excursion to Niagara Falls in 1860 and they cooperated on experiments with magnesium flares as a source of artificial light in 1865. They belonged to the same societies and were among the founding members of the Art Association of Montreal. Henderson acted as chairman of the association’s first meeting, which was held in Notman’s studio on 11 January 1860.</p>
                <p>In spite of their friendship, their styles of photography were quite different. While Notman’s landscapes were noted for their bold realism, Henderson for the first 20 years of his career produced romantic images, showing the strong influence of the British landscape tradition. His artistic and technical progress was rapid and in 1865 he published his first major collection of landscape photographs. The publication had limited circulation (only seven copies have ever been found), and was called Canadian Views and Studies. The contents of each copy vary significantly and have proved a useful source for evaluating Henderson’s early work.</p>
                <p>In 1866, he gave up his business to open a photographic studio, advertising himself as a portrait and landscape photographer. From about 1870 he dropped portraiture to specialize in landscape photography and other views. His numerous photographs of city life revealed in street scenes, houses, and markets are alive with human activity, and although his favourite subject was landscape he usually composed his scenes around such human pursuits as farming the land, cutting ice on a river, or sailing down a woodland stream. There was sufficient demand for these types of scenes and others he took depicting the lumber trade, steamboats and waterfalls to enable him to make a living. There was little competing hobby or amateur photography before the late 1880s because of the time-consuming techniques involved and the weight of equipment. People wanted to buy photographs as souvenirs of a trip or as gifts, and catering to this market, Henderson had stock photographs on display at his studio for mounting, framing, or inclusion in albums.</p>
                <p>Henderson frequently exhibited his photographs in Montreal and abroad, in London, Edinburgh, Dublin, Paris, New York, and Philadelphia. He met with greater success in 1877 and 1878 in New York when he won first prizes in the exhibition held by E and H T Anthony and Company for landscapes using the Lambertype process. In 1878 his work won second prize at the world exhibition in Paris.</p>
                <p>In the 1890s and 1880s Henderson travelled widely throughout Quebec and Ontario, in Canada, documenting the major cities of the two provinces and many of the villages in Quebec. He was especially fond of the wilderness and often travelled by canoe on the Blanche, du Lièvre, and other noted eastern rivers. He went on several occasions to the Maritimes and in 1872 he sailed by yacht along the lower north shore of the St Lawrence River. That same year, while in the lower St Lawrence River region, he took some photographs of the construction of the Intercolonial Railway. This undertaking led in 1875 to a commission from the railway to record the principal structures along the almost-completed line connecting Montreal to Halifax. Commissions from other railways followed. In 1876 he photographed bridges on the Quebec, Montreal, Ottawa and Occidental Railway between Montreal and Ottawa. In 1885 he went west along the Canadian Pacific Railway (CPR) as far as Rogers Pass in British Columbia, where he took photographs of the mountains and the progress of construction.</p>
              </div>
            </article>

            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

            <aside class="qa" aria-label="Questions">
              <form class="qa-body" id="form-nc">
                <fieldset class="q-item">
                  <h3>Questions 1-5</h3>
                  <p class="lead">Complete the notes below.</p>
                  <p>Choose <b>ONE WORD AND/OR A NUMBER</b> from the passage for each answer.</p>
                  <p><i>Write your answers in boxes on your answer sheet.</i></p>
                  <p><b>Alexander Henderson</b></p>
                </fieldset>

                <fieldset class="q-item">
                  <p><b>Early life</b></p>
                  <ul>
                    <li>
                      <div class="q-list" data-q="1">
                        lwas born in Scotland in 1831 – father was a
                        <span class="q-number-box">1</span>
                        <input type="text" name="nHmZBcocwalVytdH-1" class="q-text" placeholder="">
                      </div>
                    </li>
                    <li> trained as an accountant, emigrated to Canada in 1855</li>
                  </ul>
                  <p><b>Start of a photographic career</b></p>
                  <ul>
                    <li>opened up a photographic studio in 1866</li>
                    <li>took photos of city life, but preferred landscape photography</li>
                    <li>
                      <div class="q-list" data-q="2">
                        people bought Henderson’s photos because photography took up considerable time and the
                        <span class="q-number-box">2</span>
                        <input type="text" name="nHmZBcocwalVytdH-2" class="q-text" placeholder="">
                        was heavy
                      </div>
                    </li>
                    <li>
                      <div class="q-list" data-q="3">
                        the photographs Henderson sold were
                        <span class="q-number-box">3</span>
                        <input type="text" name="nHmZBcocwalVytdH-3" class="q-text" placeholder="">
                        or souvenirs
                      </div>
                    </li>
                  </ul>

                  <p><b>Travelling as a professional photographer</b></p>
                  <ul>
                    <li>travelled widely in Quebec and Ontario in 1870s and 1880s</li>
                    <li>
                      <div class="q-list" data-q="4">
                        took many trips along eastern rivers in a
                        <span class="q-number-box">4</span>
                        <input type="text" name="nHmZBcocwalVytdH-4" class="q-text" placeholder="">
                      </div>
                    </li>
                    <li>worked for Canadian railways between 1875 and 1897</li>
                    <li>
                      <div class="q-list" data-q="5">
                        worked for CPR in 1885 and photographed the
                        <span class="q-number-box">5</span>
                        <input type="text" name="nHmZBcocwalVytdH-5" class="q-text" placeholder="">
                        and the railway at Rogers Pass
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

      <!-- done -->

      <div id="panel-matching_information" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
        <div class="x-panel-inner">Content: Matching Information</div>
        <div class="reading-section" aria-label="Reading and Questions">
          <div class="reading-grid resizable-grid highlighted-content">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
              <div class="passage-body">
                <h3>B</h3>
                <p>Short is calling for a sweeping reinvention of how skyscrapers and major public buildings are designed – to end the reliance on sealed buildings which exist solely via the ‘life support’ system of vast air conditioning units.</p>
                <p>Instead, he shows it is entirely possible to accommodate natural ventilation and cooling in large buildings by looking into the past, before the widespread introduction of air conditioning systems, which were ‘relentlessly and aggressively marketed’ by their inventors.</p>
                <h3>C</h3>
                <p>Short points out that to make most contemporary buildings habitable, they have to be sealed and air conditioned. The energy use and carbon emissions this generates is spectacular and largely unnecessary. Buildings in the West account for 40-50% of electricity usage, generating substantial carbon emissions, and the rest of the world is catching up at a frightening rate. Short regards glass, steel and air-conditioned skyscrapers as symbols of status, rather than practical ways of meeting our requirements. </p>
                <h3>D</h3>
                <p>Short’s book highlights a developing and sophisticated art and science of ventilating buildings through the 19th and earlier-20th centuries, including the design of ingeniously ventilated hospitals. Of particular interest were those built to the designs of John Shaw Billings, including the first Johns Hopkins Hospital in the US city of Baltimore (1873-1889).</p>
                <p>‘We spent three years digitally modelling Billings’ final designs,’ says Short. ‘We put pathogens* in the airstreams, modelled for someone with tuberculosis (TB) coughing in the wards and we found the ventilation systems in the room would have kept other patients safe from harm.</p>
                <p>—————</p>
                <p>* pathogens: microorganisms that can cause disease</p>
                <h3>E</h3>
                <p>‘We discovered that 19th-century hospital wards could generate up to 24 air changes an hour – that’s similar to the performance of a modern-day, computer-controlled operating theatre. We believe you could build wards based on these principles now.</p>
                <p>Single rooms are not appropriate for all patients. Communal wards appropriate for certain patients – older people with dementia, for example – would work just as well in today’s hospitals, at a fraction of the energy cost.’</p>
                <p>Professor Short contends the mindset and skill-sets behind these designs have been completely lost, lamenting the disappearance of expertly designed theatres, opera houses, and other buildings where up to half the volume of the building was given over to ensuring everyone got fresh air.</p>
                <h3>F</h3>
                <p>Much of the ingenuity present in 19th-century hospital and building design was driven by a panicked public clamouring for buildings that could protect against what was thought to be the lethal threat of miasmas – toxic air that spread disease. Miasmas were feared as the principal agents of disease and epidemics for centuries, and were used to explain the spread of infection from the Middle Ages right through to the cholera outbreaks in London and Paris during the 1850s. Foul air, rather than germs, was believed to be the main driver of ‘hospital fever’, leading to disease and frequent death. The prosperous steered clear of hospitals.</p>
                <p>While miasma theory has been long since disproved, Short has for the last 30 years advocated a return to some of the building design principles produced in its wake.</p>
              </div>
            </article>

            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

            <aside class="qa" aria-label="Questions">
              <form class="qa-body" id="form-matching_information">
                <fieldset class="q-item">
                  <p><b>Questions 1-5</b></p>
                  <p class="lead">The Reading Passage has nine section, A-I,</p>
                  <p class="lead">Which section contains the following information?</p>
                  <p>Write the correct letter,<b>A-I</b>, in boxes on your answer sheet.</p>
                </fieldset>

                <fieldset class="q-item" data-q="1">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">1</span>
                    <span style="flex: 1;">
                      why some people avoided hospitals in the 19th century
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-1" class="q-dropdown">
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
                      a suggestion that the popularity of tall buildings is linked to prestige
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-2" class="q-dropdown">
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
                      a comparison between the circulation of air in a 19th-century building and modern standards
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-3" class="q-dropdown">
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
                      how Short tested the circulation of air in a 19th-century building
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-4" class="q-dropdown">
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
                      an implication that advertising led to the large increase in the use of air conditioning
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-5" class="q-dropdown">
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

      <!-- done -->

      <div id="panel-summary_completion" class="x-panel" role="tabpanel" aria-labelledby="tab-summary_completion" hidden>
        <div class="x-panel-inner">Content: Summary Completion</div>
        <div class="reading-section" aria-label="Reading and Questions">
          <div class="reading-grid resizable-grid highlighted-content">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
              <div class="passage-body">
                <h3>D</h3>
                <p>Short’s book highlights a developing and sophisticated art and science of ventilating buildings through the 19th and earlier-20th centuries, including the design of ingeniously ventilated hospitals. Of particular interest were those built to the designs of John Shaw Billings, including the first Johns Hopkins Hospital in the US city of Baltimore (1873-1889).</p>
                <p>‘We spent three years digitally modelling Billings’ final designs,’ says Short. ‘We put pathogens* in the airstreams, modelled for someone with tuberculosis (TB) coughing in the wards and we found the ventilation systems in the room would have kept other patients safe from harm.</p>
                <p>—————</p>
                <p>* pathogens: microorganisms that can cause disease</p>
                <h3>E</h3>
                <p>‘We discovered that 19th-century hospital wards could generate up to 24 air changes an hour – that’s similar to the performance of a modern-day, computer-controlled operating theatre. We believe you could build wards based on these principles now.</p>
                <p>Single rooms are not appropriate for all patients. Communal wards appropriate for certain patients – older people with dementia, for example – would work just as well in today’s hospitals, at a fraction of the energy cost.’</p>
                <p>Professor Short contends the mindset and skill-sets behind these designs have been completely lost, lamenting the disappearance of expertly designed theatres, opera houses, and other buildings where up to half the volume of the building was given over to ensuring everyone got fresh air.</p>
                <h3>F</h3>
                <p>Much of the ingenuity present in 19th-century hospital and building design was driven by a panicked public clamouring for buildings that could protect against what was thought to be the lethal threat of miasmas – toxic air that spread disease. Miasmas were feared as the principal agents of disease and epidemics for centuries, and were used to explain the spread of infection from the Middle Ages right through to the cholera outbreaks in London and Paris during the 1850s. Foul air, rather than germs, was believed to be the main driver of ‘hospital fever’, leading to disease and frequent death. The prosperous steered clear of hospitals.</p>
                <p>While miasma theory has been long since disproved, Short has for the last 30 years advocated a return to some of the building design principles produced in its wake.</p>
              </div>
            </article>

            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

            <aside class="qa" aria-label="Questions">
              <form class="qa-body" id="form-summary_completion">
                <fieldset class="q-item">
                  <h3>Questions 1-8</h3>
                  <p class="lead">Complete the summary below.</p>
                  <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</p>
                  <p><i>on your answer sheet.</i></p>
                  <p><b>Ventilation in 19th-century hospital wards</b></p>
                  <p>
                    Professor Alan Short examined the work of John Shaw Billings, who influenced the architectural
                    <span class="q-number-box">1</span>
                    <input type="text" name="nHmZBcocwalVytdH-1" data-q="1" class="q-text" placeholder="">
                    of hospitals to ensure they had good ventilation. He calculated that
                    <span class="q-number-box">2</span>
                    <input type="text" name="nHmZBcocwalVytdH-2" data-q="2" class="q-text" placeholder="">
                    in the air coming from patients suffering form
                    <span class="q-number-box">3</span>
                    <input type="text" name="nHmZBcocwalVytdH-3" data-q="3" class="q-text" placeholder="">
                    would not have harmed other patients. He also found that the air in
                    <span class="q-number-box">4</span>
                    <input type="text" name="nHmZBcocwalVytdH-4" data-q="4" class="q-text" placeholder="">
                    In hospitals could change as often as in a modern operating theatre. He suggests that energy use could be reduced by locating more patients in
                    <span class="q-number-box">5</span>
                    <input type="text" name="nHmZBcocwalVytdH-5" data-q="5" class="q-text" placeholder="">
                    areas. A major reason for improving ventilation in 19th-century hospitals was the demand from the
                    <span class="q-number-box">6</span>
                    <input type="text" name="nHmZBcocwalVytdH-6" data-q="6" class="q-text" placeholder="">
                    for protection against bad air, known as
                    <span class="q-number-box">7</span>
                    <input type="text" name="nHmZBcocwalVytdH-7" data-q="7" class="q-text" placeholder="">
                    . These were blamed for the spread of disease for hundreds of years, including epidemics of
                    <span class="q-number-box">8</span>
                    <input type="text" name="nHmZBcocwalVytdH-8" data-q="8" class="q-text" placeholder="">
                    n London and Paris in the middle of the 19th century.
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
      <!-- done -->
      <div id="panel-sentence_completion" class="x-panel" role="tabpanel" aria-labelledby="tab-sentence_completion" hidden>
        <div class="x-panel-inner">Content: Sentence Completion</div>
        <div class="reading-section" aria-label="Reading and Questions">
          <div class="reading-grid resizable-grid highlighted-content">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
              <div class="passage-body">
                <h3>Why companies should welcome disorder</h3>
                <h3>A</h3>
                <p>Organisation is big business. Whether it is of our lives – all those inboxes and calendars – or how companies are structured, a multi-billion dollar industry helps to meet this need.</p>
                <p>We have more strategies for time management, project management and self-organisation than at any other time in human history. We are told that we ought to organize our company, our home life, our week, our day and even our sleep, all as a means to becoming more productive. Every week, countless seminars and workshops take place around the world to tell a paying public that they ought to structure their lives in order to achieve this.</p>
                <p>This rhetoric has also crept into the thinking of business leaders and entrepreneurs, much to the delight of self-proclaimed perfectionists with the need to get everything right. The number of business schools and graduates has massively increased over the past 50 years, essentially teaching people how to organise well.</p>
                <h3>B</h3>
                <p>Ironically, however, the number of business that fail has also steadily increased. Work-related stress has increased. A large proportion of workers from all demographics claim to be dissatisfied with the way their work is structured and the way they are managed.</p>
                <p>This begs the question: what has gone wrong? Why is it that on paper the drive for organisation seems a sure shot for increasing productivity, but in reality falls well short of what is expected?</p>
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
                      Numerous training sessions are aimed at people who feel they are not
                      <span class="q-question">
                        <input type="text" name="nHmZBcocwalVytdH-1" class="q-text"
                          placeholder=""> enough.
                      </span>
                    </span>
                  </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="2">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">2</span>
                    <span style="flex: 1;">
                      Being organised appeals to people who regard themselves as
                      <span class="q-question">
                        <input type="text" name="nHmZBcocwalVytdH-2" class="q-text"
                          placeholder="">.
                      </span>
                    </span>
                  </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="3">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">3</span>
                    <span style="flex: 1;">
                      Many people feel
                      <span class="q-question">
                        <input type="text" name="nHmZBcocwalVytdH-3" class="q-text"
                          placeholder=""> with aspects of their work.
                      </span>
                    </span>
                  </legend>
                </fieldset>

                <div style="text-align: center;">
                  <button type="button" class="btn btn-primary try-again" id="again-sentence_completion" style="display: none">
                    Try Again
                  </button>
                  <button type="button" class="btn btn-primary" id="submit-sentence_completion">
                    Submit
                  </button>
                </div>
              </form>
            </aside>
          </div>
        </div>
      </div>
      <!-- done -->
      <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
        <div class="x-panel-inner">Content: Matching Headings</div>
        <div class="reading-section" aria-label="Reading and Questions">
          <div class="reading-grid resizable-grid highlighted-content">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
              <div class="passage-body">
                <h3>Why companies should welcome disorder</h3>
                <h3 class="passage-title">A</h3>
                <p>Organisation is big business. Whether it is of our lives – all those inboxes and calendars – or how companies are structured, a multi-billion dollar industry helps to meet this need. </p>
                <p>We have more strategies for time management, project management and self-organisation than at any other time in human history. We are told that we ought to organize our company, our home life, our week, our day and even our sleep, all as a means to becoming more productive. Every week, countless seminars and workshops take place around the world to tell a paying public that they ought to structure their lives in order to achieve this.</p>
                <p>This rhetoric has also crept into the thinking of business leaders and entrepreneurs, much to the delight of self-proclaimed perfectionists with the need to get everything right. The number of business schools and graduates has massively increased over the past 50 years, essentially teaching people how to organise well.</p>
                <h3 class="passage-title">B</h3>
                <p>Ironically, however, the number of business that fail has also steadily increased. Work-related stress has increased. A large proportion of workers from all demographics claim to be dissatisfied with the way their work is structured and the way they are managed.</p>
                <p>This begs the question: what has gone wrong? Why is it that on paper the drive for organisation seems a sure shot for increasing productivity, but in reality falls well short of what is expected?</p>
                <h3 class="passage-title">C</h3>
                <p>This has been a problem for a while now. Frederick Taylor was one of the forefathers of scientific management. Writing in the first half of the 20th century, he designed a number of principles to improve the efficiency of the work process, which have since become widespread in modern companies. So the approach has been around for a while.</p>
                <h3 class="passage-title">D</h3>
                <p>New research suggests that this obsession with efficiency is misguided. The problem is not necessarily the management theories or strategies we use to organise our work; it’s the basic assumptions we hold in approaching how we work. Here it’s the assumption that order is a necessary condition for productivity. This assumption has also fostered the idea that disorder must be detrimental to organizational productivity. The result is that businesses and people spend time and money organising themselves for the sake of organising, rather than actually looking at the end goal and usefulness of such an effort.</p>
                <h3 class="passage-title">E</h3>
                <p>What’s more, recent studies show that order actually has diminishing returns. Order does increase productivity to a certain extent, but eventually the usefulness of the process of organisation, and the benefit it yields, reduce until the point where any further increase in order reduces productivity. Some argue that in a business, if the cost of formally structuring something outweighs the benefit of doing it, then that thing ought not to be formally structured. Instead, the resources involved can be better used elsewhere.</p>
                <h3 class="passage-title">F</h3>
                <p>In fact, research shows that, when innovating, the best approach is to create an environment devoid of structure and hierarchy and enable everyone involved to engage as one organic group. These environments can lead to new solutions that, under conventionally structured environments (filled with bottlenecks in term of information flow, power structures, rules, and routines) would never be reached.</p>
                <h3 class="passage-title">G</h3>
                <p>In recent times companies have slowly started to embrace this disorganisation. Many of them embrace it in terms of perception (embracing the idea of disorder, as opposed to fearing it) and in terms of process (putting mechanisms in place to reduce structure).</p>
                <p>For example, Oticon, a large Danish manufacturer of hearing aids, used what it called a ‘spaghetti’ structure in order to reduce the organisation’s rigid hierarchies. This involved scrapping formal job titles and giving staff huge amounts of ownership over their own time and projects. This approach proved to be highly successful initially, with clear improvements in worker productivity in all facets of the business.</p>
                <p>In similar fashion, the former chairman of General Electric embraced disorganisation, putting forward the idea of the ‘boundaryless’ organisation. Again, it involves breaking down the barriers between different parts of a company and encouraging virtual collaboration and flexible working. Google and a number of other tech companies have embraced (at least in part) these kinds of flexible structures, facilitated by technology and strong company values which glue people together.</p>
                <h3 class="passage-title">H</h3>
                <p>A word of warning to others thinking of jumping on this bandwagon: the evidence so far suggests disorder, much like order, also seems to have diminishing utility, and can also have detrimental effects on performance if overused. Like order, disorder should be embraced only so far as it is useful. But we should not fear it – nor venerate one over the other. This research also shows that we should continually question whether or not our existing assumptions work.</p>
              </div>
            </article>

            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>
            <aside class="qa" aria-label="Questions">
              <form class="qa-body" id="form-mh">
                <p><b>Questions 1-8</b></p>
                <fieldset class="q-item">
                  <p class="lead">The Reading Passage has eight sections, <b>A-H</b>.</p>
                  <p>Choose the correct heading for each section from the list of headings below.</p>
                  <p>Write the correct number, <b>i-ix</b>, in boxes on your answer sheet.</p>
                  <p><b>List of Headings</b></p>
                  <ul class="legend">
                    <li><strong>i</strong> Complaints about the impact of a certain approach</li>
                    <li><strong>ii</strong> Fundamental beliefs that are in fact incorrect</li>
                    <li><strong>iii</strong> Early recommendations concerning business activities</li>
                    <li><strong>iv</strong> Organisations that put a new approach into practice</li>
                    <li><strong>v</strong> Companies that have suffered from changing their approach</li>
                    <li><strong>vi</strong> What people are increasingly expected to do</li>
                    <li><strong>vii</strong> How to achieve outcomes that are currently impossible</li>
                    <li><strong>viii</strong> Neither approach guarantees continuous improvement</li>
                    <li><strong>ix</strong> Evidence that a certain approach can have more disadvantages that advantages</li>
                  </ul>
                </fieldset>
                <fieldset class="q-item" data-q="1">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">1</span>
                    <span style="flex: 1;">
                      Section <b>A</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-1" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <fieldset class="q-item" data-q="2">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">2</span>
                    <span style="flex: 1;">
                      Section <b>B</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-2" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <fieldset class="q-item" data-q="3">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">3</span>
                    <span style="flex: 1;">
                      Section <b>C</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-3" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <fieldset class="q-item" data-q="4">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">4</span>
                    <span style="flex: 1;">
                      Section <b>D</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-4" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <fieldset class="q-item" data-q="5">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">5</span>
                    <span style="flex: 1;">
                      Section <b>E</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-5" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <fieldset class="q-item" data-q="6">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">6</span>
                    <span style="flex: 1;">
                      Section <b>F</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-6" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <fieldset class="q-item" data-q="7">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">7</span>
                    <span style="flex: 1;">
                      Section <b>G</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-7" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <fieldset class="q-item" data-q="8">
                  <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">8</span>
                    <span style="flex: 1;">
                      Section <b>H</b>
                      <span class="q-question">
                        <select name="nHmZBcocwalVytdH-8" class="q-dropdown">
                          <option value=""></option>
                          <option value="i">i</option>
                          <option value="ii">ii</option>
                          <option value="iii">iii</option>
                          <option value="iv">iv</option>
                          <option value="v">v</option>
                          <option value="vi">vi</option>
                          <option value="vii">vii</option>
                          <option value="viii">viii</option>
                          <option value="ix">ix</option>
                        </select>
                      </span>
                    </span>
                  </legend>
                </fieldset>
                <div style="text-align: center;">
                  <button type="button" class="btn btn-primary try-again" id="again-mh" style="display: none">
                    Try Again
                  </button>
                  <button type="button" class="btn btn-primary" id="submit-mh">
                    Submit
                  </button>
                </div>
              </form>
            </aside>
          </div>
        </div>
      </div>
      <!-- done  -->

      <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
        <div class="x-panel-inner">Content: True/False/Not Given 2</div>
        <div class="reading-section" aria-label="Reading and Questions">
          <div class="reading-grid resizable-grid highlighted-content">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
              <div class="passage-body">
                <h3 class="passage-title">D</h3>
                <p>New research suggests that this obsession with efficiency is misguided. The problem is not necessarily the management theories or strategies we use to organise our work; it’s the basic assumptions we hold in approaching how we work. Here it’s the assumption that order is a necessary condition for productivity. This assumption has also fostered the idea that disorder must be detrimental to organizational productivity. The result is that businesses and people spend time and money organising themselves for the sake of organising, rather than actually looking at the end goal and usefulness of such an effort.</p>
                <h3 class="passage-title">E</h3>
                <p>What’s more, recent studies show that order actually has diminishing returns. Order does increase productivity to a certain extent, but eventually the usefulness of the process of organisation, and the benefit it yields, reduce until the point where any further increase in order reduces productivity. Some argue that in a business, if the cost of formally structuring something outweighs the benefit of doing it, then that thing ought not to be formally structured. Instead, the resources involved can be better used elsewhere.</p>
                <h3 class="passage-title">F</h3>
                <p>In fact, research shows that, when innovating, the best approach is to create an environment devoid of structure and hierarchy and enable everyone involved to engage as one organic group. These environments can lead to new solutions that, under conventionally structured environments (filled with bottlenecks in term of information flow, power structures, rules, and routines) would never be reached.</p>
                <h3 class="passage-title">G</h3>
                <p>In recent times companies have slowly started to embrace this disorganisation. Many of them embrace it in terms of perception (embracing the idea of disorder, as opposed to fearing it) and in terms of process (putting mechanisms in place to reduce structure).</p>
                <p>For example, Oticon, a large Danish manufacturer of hearing aids, used what it called a ‘spaghetti’ structure in order to reduce the organisation’s rigid hierarchies. This involved scrapping formal job titles and giving staff huge amounts of ownership over their own time and projects. This approach proved to be highly successful initially, with clear improvements in worker productivity in all facets of the business.</p>
                <p>In similar fashion, the former chairman of General Electric embraced disorganisation, putting forward the idea of the ‘boundaryless’ organisation. Again, it involves breaking down the barriers between different parts of a company and encouraging virtual collaboration and flexible working. Google and a number of other tech companies have embraced (at least in part) these kinds of flexible structures, facilitated by technology and strong company values which glue people together.</p>
              </div>
            </article>

            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

            <aside class="qa" aria-label="Questions">
              <form class="qa-body" id="form-tfng2">
                <p><b>Questions 1-3</b></p>
                <fieldset class="q-item">
                  <p class="lead">Do the following statements agree with the information given in
                    the Reading Passage?
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
                    Both businesses and people aim at order without really considering its value.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-9" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-9" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-9" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                  <legend class="q-text">
                    <span class="q-number">2</span>
                    Innovation is most successful if the people involved have distinct roles.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-10" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-10" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-10" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                  <legend class="q-text">
                    <span class="q-number">3</span>
                    Google was inspired to adopt flexibility by the success of General Electric.
                  </legend>
                  <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-11" value="TRUE" />
                      <span class="opt-code">A</span>
                      <span class="opt-label">TRUE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-11" value="FALSE" />
                      <span class="opt-code">B</span>
                      <span class="opt-label">FALSE</span>
                    </label>
                    <label class="q-option">
                      <input type="radio" name="nHmZBcocwalVytdH-11" value="NOT GIVEN" />
                      <span class="opt-code">C</span>
                      <span class="opt-label">NOT GIVEN</span>
                    </label>
                  </div>
                </fieldset>
                <div style="text-align: center;">
                  <button type="button" class="btn btn-primary try-again" id="again-tfng2" style="display: none">
                    Try Again
                  </button>
                  <button type="button" class="btn btn-primary" id="submit-tfng2">
                    Submit
                  </button>
                </div>
              </form>
            </aside>
          </div>
        </div>
      </div>
      <!-- done -->
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
    let scoreMap = [{
        min: 39,
        max: 40,
        score: 9.0
      },
      {
        min: 37,
        max: 38,
        score: 8.5
      },
      {
        min: 35,
        max: 36,
        score: 8.0
      },
      {
        min: 33,
        max: 34,
        score: 7.5
      },
      {
        min: 30,
        max: 32,
        score: 7.0
      },
      {
        min: 27,
        max: 29,
        score: 6.5
      },
      {
        min: 23,
        max: 26,
        score: 6.0
      },
      {
        min: 19,
        max: 22,
        score: 5.5
      },
      {
        min: 15,
        max: 18,
        score: 5.0
      },
      {
        min: 13,
        max: 14,
        score: 4.5
      },
      {
        min: 10,
        max: 12,
        score: 4.0
      },
      {
        min: 8,
        max: 9,
        score: 3.5
      },
      {
        min: 6,
        max: 7,
        score: 3.0
      },
      {
        min: 4,
        max: 5,
        score: 2.5
      }
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
          'tfng': 8,
          'tfng2': 3,
          'ynng': 5,
          'mse': 5,
          'one': 4,
          'mh': 8,
          'tc': 5,
          'sa': 3,
          'summary_completion': 8,
          'sentence_completion': 4
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

      $(`#${form} fieldset[data-q]`).each(function() {
        let isAnswered = false;
        const inputs = $(this).find("input, select, textarea");

        inputs.each(function() {
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
              questionElement.find("input, select, textarea").each(function() {
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

    $(".try-again").on("click", function() {
      location.reload();
    })

    $("#submit-tfng").on("click", function(e) {
      e.preventDefault();
      submitHelper("form-tfng", "nHmZBcocwalVytdH", "tfng", $(this), "again-tfng");
    });

    $("#submit-tfng2").on("click", function(e) {
      e.preventDefault();
      submitHelper("form-tfng2", "nHmZBcocwalVytdH", "tfng", $(this), "again-tfng2");
    });

    $("#submit-mh").on("click", function(e) {
      e.preventDefault();
      submitHelper("form-mh", "nHmZBcocwalVytdH", "mh", $(this), "again-mh");
    });

    $("#submit-nc").on("click", function(e) {
      e.preventDefault();
      submitHelper("form-nc", "nHmZBcocwalVytdH", "nc", $(this), "again-nc");
    });

    $("#submit-matching_information").on("click", function(e) {
      e.preventDefault();
      submitHelper("form-matching_information", "nHmZBcocwalVytdH", "matching_information", $(this), "again-matching_information");
    });

    $("#submit-summary_completion").on("click", function(e) {
      e.preventDefault();
      submitHelper("form-summary_completion", "nHmZBcocwalVytdH", "summary_completion", $(this), "again-summary_completion");
    });
    $("#submit-sentence_completion").on("click", function(e) {
      e.preventDefault();
      submitHelper("form-sentence_completion", "nHmZBcocwalVytdH", "sentence_completion", $(this), "again-sentence_completion");
    });
  </script>


</body>

</html>