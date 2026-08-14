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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    {{-- panel video call --}}
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }

        /* Card Header */
        .card-header {
            background: #4274ba;
            color: white;
            padding: 20px 25px;
            border-radius: 12px 12px 0 0;
            border-bottom: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-title {
            font-size: 22px;
            font-weight: 600;
            margin: 0;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
        }

        .user-info i {
            font-size: 18px;
        }

        .btn-primary:hover {
            background: #4274ba;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Card Body */
        .card-body {
            padding: 25px;
        }

        /* Alert */
        .alert-success {
            background: #f0fdf4;
            color: #166534;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
        }

        /* Desktop Table */
        .desktop-view {
            display: block;
        }

        .table-responsive {
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
        }

        .table {
            margin: 0;
            width: 100%;
            border-collapse: collapse;
        }

        .table thead {
            background: #f1f5f9;
        }

        .table thead th {
            padding: 16px 20px;
            text-align: left;
            font-weight: 600;
            color: #475569;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e2e8f0;
        }

        .table thead th i {
            color: #4274ba;
            margin-right: 8px;
        }

        .table tbody tr {
            border-bottom: 1px solid #f1f5f9;
            transition: background 0.2s ease;
        }

        .table tbody tr:hover {
            background: #f8fafc;
        }

        .table tbody tr:last-child {
            border-bottom: none;
        }

        .table tbody td {
            padding: 18px 20px;
            color: #475569;
            font-size: 14px;
        }

        .table tbody .fw-semibold {
            font-weight: 600;
            color: #1e293b;
        }

        /* Status Badges */
        .status-badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .badge-pending {
            background: #fef3c7;
            color: #92400e;
            border: 1px solid #fbbf24;
        }

        .badge-accepted {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #10b981;
        }

        .badge-rejected {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #ef4444;
        }

        .badge-completed {
            background: #dbeafe;
            color: #1e40af;
            border: 1px solid #3b82f6;
        }

        .badge-cancelled {
            background: #f3f4f6;
            color: #374151;
            border: 1px solid #9ca3af;
        }

        .status-badge i {
            font-size: 8px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-sm {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s ease;
            border: 1px solid transparent;
        }

        .btn-info {
            background: #f0f9ff;
            color: #0369a1;
            border-color: #bae6fd;
        }

        .btn-info:hover {
            background: #e0f2fe;
            transform: translateY(-1px);
        }

        .btn-success {
            background: #f0fdf4;
            color: #15803d;
            border-color: #bbf7d0;
        }

        .btn-success:hover {
            background: #dcfce7;
            transform: translateY(-1px);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 50px 20px;
            color: #64748b;
        }

        .empty-state i {
            font-size: 48px;
            color: #cbd5e1;
        }

        .empty-state h4 {
            font-size: 18px;
            color: #475569;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .empty-state p {
            font-size: 14px;
            max-width: 400px;
            margin: 0 auto 20px;
            line-height: 1.5;
        }

        /* Mobile View */
        .mobile-view {
            display: none;
        }

        .session-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .session-card h5 {
            font-size: 16px;
            color: #1e293b;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .session-card .mb-2,
        .session-card .mb-3 {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #475569;
            font-size: 14px;
        }

        .session-card i {
            color: #4274ba;
            width: 16px;
            text-align: center;
        }

        .session-card .text-muted {
            color: #94a3b8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .desktop-view {
                display: none;
            }

            .mobile-view {
                display: block;
            }

            .card-header {
                flex-direction: column;
                gap: 16px;
                text-align: center;
                padding: 20px;
            }

            .user-info {
                justify-content: center;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-sm {
                width: 100%;
                justify-content: center;
            }

            .card-body {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 12px;
            }

            .container {
                padding: 0;
            }

            .card {
                border-radius: 8px;
            }

            .session-card {
                padding: 16px;
            }
        }

        /* Simple Animations */
        .table tbody tr {
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Time Icons */
        .table tbody td .d-flex i {
            color: #94a3b8;
            margin-right: 8px;
        }

        .text-success {
            color: #10b981;
        }

        .text-muted {
            color: #94a3b8;
        }
    </style>

    <style>
        /* Modal Custom Styles */
        #requestSessionModal .modal-dialog {
            max-width: 700px;
        }

        #requestSessionModal .modal-content {
            border-radius: 16px;
            border: none;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        #requestSessionModal .modal-header {
            background: linear-gradient(135deg, #4274ba 0%, #2c5a9a 100%);
            color: white;
            padding: 25px 30px;
            border-bottom: none;
            position: relative;
        }

        #requestSessionModal .modal-header::before {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #4facfe, #00f2fe, #4facfe);
        }

        #requestSessionModal .modal-title {
            font-weight: 700;
            font-size: 22px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        #requestSessionModal .modal-title::before {
            content: '🎯';
            font-size: 20px;
        }

        #requestSessionModal .btn-close {
            border-radius: 50%;
            padding: 10px;
            background-size: 12px;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        #requestSessionModal .btn-close:hover {
            opacity: 1;
            transform: rotate(90deg);
        }

        #requestSessionModal .modal-body {
            padding: 30px;
            max-height: 70vh;
            overflow-y: auto;
        }

        /* Info Box */
        #requestSessionModal .info-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border: 1px solid #bae6fd;
            border-radius: 12px;
            padding: 18px 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        #requestSessionModal .info-box i {
            color: #4274ba;
            font-size: 20px;
            margin-top: 2px;
        }

        #requestSessionModal .info-box p {
            margin: 0;
            color: #1e40af;
            font-size: 14.5px;
            line-height: 1.5;
        }

        /* Form Styles */
        #requestSessionModal .form-group {
            margin-bottom: 25px;
        }

        #requestSessionModal .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
        }

        #requestSessionModal .form-label i {
            color: #4274ba;
            font-size: 16px;
            width: 20px;
        }

        #requestSessionModal .form-control,
        .form-select {
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 14px 16px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        #requestSessionModal .form-control:focus,
        .form-select:focus {
            border-color: #4274ba;
            box-shadow: 0 0 0 4px rgba(66, 116, 186, 0.1);
            outline: none;
            background: white;
        }

        #requestSessionModal .form-control::placeholder {
            color: #9ca3af;
        }

        #requestSessionModal textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* Form Actions */
        #requestSessionModal .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #e5e7eb;
        }

        #requestSessionModal .btn {
            padding: 14px 28px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            border: none;
        }

        #requestSessionModal .btn-primary {
            background: linear-gradient(135deg, #4274ba 0%, #2c5a9a 100%);
            color: white;
            flex: 1;
            box-shadow: 0 4px 15px rgba(66, 116, 186, 0.2);
        }

        #requestSessionModal .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(66, 116, 186, 0.3);
            background: linear-gradient(135deg, #3a68a8 0%, #254d87 100%);
        }

        #requestSessionModal .btn-secondary {
            background: #f3f4f6;
            color: #374151;
            border: 1px solid #d1d5db;
            flex: 1;
        }

        #requestSessionModal .btn-secondary:hover {
            background: #e5e7eb;
            transform: translateY(-2px);
            color: #1f2937;
        }

        /* Floating Icon */
        #requestSessionModal .floating-icon {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 80px;
            opacity: 0.1;
        }

        /* Scrollbar Styling */
        #requestSessionModal .modal-body::-webkit-scrollbar {
            width: 8px;
        }

        #requestSessionModal .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        #requestSessionModal .modal-body::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #4274ba 0%, #2c5a9a 100%);
            border-radius: 4px;
        }

        #requestSessionModal .modal-body::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #3a68a8 0%, #254d87 100%);
        }

        /* Animation */
        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-30px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        #requestSessionModal .modal-content {
            animation: modalSlideIn 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Responsive */
        @media (max-width: 768px) {
            #requestSessionModal .modal-dialog {
                margin: 15px;
            }

            #requestSessionModal .modal-body {
                padding: 20px;
            }

            #requestSessionModal .form-actions {
                flex-direction: column;
            }

            #requestSessionModal .btn {
                width: 100%;
            }

            #requestSessionModal .floating-icon {
                display: none;
            }
        }

        /* Teacher Selection Highlight */
        #requestSessionModal .form-select option {
            padding: 12px;
        }

        /* Required Field Indicator */
        #requestSessionModal .form-label::after {
            content: '*';
            color: #ef4444;
            margin-left: 4px;
        }

        /* Loading State */
        #requestSessionModal .btn-primary.loading {
            position: relative;
            color: transparent;
        }

        #requestSessionModal .btn-primary.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>


<body>
    <header class="app-header" role="banner">
        <div class="header-row" aria-label="Header CAT Bahasa Inggris">
            <div class="brand">
                <div class="logo" aria-hidden="true">
                    <img class="" style="width: 70px;margin-left: 50px"
                        src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
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

                {{-- <button id="doneBtn" class="btn btn-danger">
                    <i class="fa-solid fa-flag-checkered"></i>
                    <span class="label">Finish</span>
                </button> --}}
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

    <div class="container" style="margin-top: 20px">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <h4 class="page-title mb-0">Mock Test Speaking Sessions</h4>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-primary request-session">
                                <i class="fas fa-plus me-2"></i>Request New Session
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            </div>
                        @endif

                        <!-- Desktop View -->
                        <div class="desktop-view">
                            @if ($sessions->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th><i class="fas fa-heading me-2"></i>Title</th>
                                                <th><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</th>
                                                <th><i class="fas fa-clock me-2"></i>Proposed Time</th>
                                                <th><i class="fas fa-calendar-alt me-2"></i>Scheduled Time</th>
                                                <th><i class="fas fa-info-circle me-2"></i>Status</th>
                                                <th><i class="fas fa-cogs me-2"></i>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sessions as $session)
                                                <tr>
                                                    <td class="fw-semibold">{{ $session->title }}</td>
                                                    <td>{{ $session->teacher->name }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-clock text-muted me-2"></i>
                                                            {{ $session->proposed_time->format('M d, Y H:i') }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($session->scheduled_time)
                                                            <div class="d-flex align-items-center">
                                                                <i class="fas fa-calendar-check text-success me-2"></i>
                                                                {{ $session->scheduled_time->format('M d, Y H:i') }}
                                                            </div>
                                                        @else
                                                            <span class="text-muted">-</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @php
                                                            $badgeClass = 'badge-pending';
                                                            if ($session->status === 'accepted') {
                                                                $badgeClass = 'badge-accepted';
                                                            } elseif ($session->status === 'rejected') {
                                                                $badgeClass = 'badge-rejected';
                                                            } elseif ($session->status === 'completed') {
                                                                $badgeClass = 'badge-completed';
                                                            } elseif ($session->status === 'cancelled') {
                                                                $badgeClass = 'badge-cancelled';
                                                            }
                                                        @endphp
                                                        <span class="status-badge {{ $badgeClass }}">
                                                            <i class="fas fa-circle me-1"
                                                                style="font-size: 0.5rem;"></i>
                                                            {{ ucfirst($session->status) }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <a href="{{ route('mock-test.show', $session) }}"
                                                                class="btn btn-sm btn-info">
                                                                <i class="fas fa-eye me-1"></i>View
                                                            </a>
                                                            @if ($session->status === 'accepted' && $session->canStart())
                                                                <a href="{{ route('mock-test.start', $session) }}"
                                                                    class="btn btn-sm btn-success">
                                                                    <i class="fas fa-video me-1"></i>Join Session
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="empty-state">
                                    <i class="fas fa-calendar-times mb-4"></i>
                                    <h4>No Mock Test Speaking Sessions Yet</h4>
                                    <p>You haven't requested any Mock Test Speaking sessions yet. Start by requesting
                                        your first
                                        session!</p>
                                    <button class="btn btn-primary request-session">
                                        <i class="fas fa-plus"></i>Request New Session
                                    </button>
                                </div>
                            @endif
                        </div>

                        <!-- Mobile View -->
                        <div class="mobile-view">
                            @if ($sessions->count() > 0)
                                @foreach ($sessions as $session)
                                    <div class="session-card">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="fw-bold">{{ $session->title }}</h5>
                                            @php
                                                $badgeClass = 'badge-pending';
                                                if ($session->status === 'accepted') {
                                                    $badgeClass = 'badge-accepted';
                                                } elseif ($session->status === 'rejected') {
                                                    $badgeClass = 'badge-rejected';
                                                } elseif ($session->status === 'completed') {
                                                    $badgeClass = 'badge-completed';
                                                } elseif ($session->status === 'cancelled') {
                                                    $badgeClass = 'badge-cancelled';
                                                }
                                            @endphp
                                            <span class="status-badge {{ $badgeClass }}">
                                                {{ ucfirst($session->status) }}
                                            </span>
                                        </div>

                                        <div class="mb-2">
                                            <i class="fas fa-chalkboard-teacher text-primary me-2"></i>
                                            <strong>Teacher:</strong> {{ $session->teacher->name }}
                                        </div>

                                        <div class="mb-2">
                                            <i class="fas fa-clock text-primary me-2"></i>
                                            <strong>Proposed:</strong>
                                            {{ $session->proposed_time->format('M d, Y H:i') }}
                                        </div>

                                        <div class="mb-3">
                                            <i class="fas fa-calendar-alt text-primary me-2"></i>
                                            <strong>Scheduled:</strong>
                                            @if ($session->scheduled_time)
                                                {{ $session->scheduled_time->format('M d, Y H:i') }}
                                            @else
                                                <span class="text-muted">Not scheduled</span>
                                            @endif
                                        </div>

                                        <div class="action-buttons">
                                            <a href="{{ route('mock-test.show', $session) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-eye me-1"></i>Details
                                            </a>
                                            @if ($session->status === 'accepted' && $session->canStart())
                                                <a href="{{ route('mock-test.start', $session) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-video me-1"></i>Join
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="empty-state">
                                    <i class="fas fa-calendar-times mb-4"></i>
                                    <h4>No Sessions Yet</h4>
                                    <p>Start by requesting your first Mock Test Speaking Session!</p>
                                    <button class="btn btn-primary mt-3 request-session">
                                        <i class="fas fa-plus me-2"></i>Request Session
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="requestSessionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Mock Test Speaking Session</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="info-box">
                        <i class="fas fa-info-circle"></i>
                        <p>Please fill out all the required information to request a mock test speaking session. Your
                            teacher
                            will review and respond to your request.</p>
                    </div>

                    <form id="mockTestForm">
                        <div class="form-group">
                            <label for="teacher_id" class="form-label">
                                <i class="fas fa-chalkboard-teacher"></i> Select Teacher
                            </label>
                            <select name="teacher_id" id="teacher_id" class="form-select" required>
                                <option value="">Choose a teacher...</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a teacher.</div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="form-label">
                                <i class="fas fa-heading"></i> Session Title
                            </label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="e.g., IELTS Speaking Practice Test" required>
                            <div class="invalid-feedback">Please enter a session title.</div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="form-label">
                                <i class="fas fa-align-left"></i> Description
                            </label>
                            <textarea name="description" id="description" class="form-control" rows="4"
                                placeholder="Briefly describe what you'd like to focus on during this session..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="proposed_time" class="form-label">
                                <i class="fas fa-calendar-alt"></i> Proposed Time
                            </label>
                            <input type="datetime-local" name="proposed_time" id="proposed_time"
                                class="form-control" required min="{{ date('Y-m-d\TH:i') }}">
                            <div class="invalid-feedback">Please select a future date and time.</div>
                        </div>

                        <div class="form-group">
                            <label for="duration_minutes" class="form-label">
                                <i class="fas fa-clock"></i> Duration
                            </label>
                            <select name="duration_minutes" id="duration_minutes" class="form-select" required>
                                <option value="30">30 minutes</option>
                                <option value="45">45 minutes</option>
                                <option value="60" selected>60 minutes</option>
                                <option value="90">90 minutes</option>
                                <option value="120">120 minutes</option>
                            </select>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-primary" id="submitRequestBtn">
                                <i class="fas fa-paper-plane me-2"></i> Submit Request
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-arrow-left me-2"></i> Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('form').forEach(function(form) {
                form.setAttribute('autocomplete', 'off');
            });
            document.querySelectorAll('input').forEach(function(input) {
                input.setAttribute('autocomplete', 'off');
                input.setAttribute('autocorrect', 'off');
                input.setAttribute('autocapitalize', 'off');
                input.setAttribute('spellcheck', 'false');
            });
            document.querySelectorAll('textarea').forEach(function(textarea) {
                textarea.setAttribute('autocomplete', 'off');
                textarea.setAttribute('autocorrect', 'off');
                textarea.setAttribute('autocapitalize', 'off');
                textarea.setAttribute('spellcheck', 'false');
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation to table rows
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach((row, index) => {
                row.style.animationDelay = `${index * 0.1}s`;
            });

            // Add hover effects to session cards
            const sessionCards = document.querySelectorAll('.session-card');
            sessionCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            let modal = null;

            function initModal() {
                modal = new bootstrap.Modal(document.getElementById('requestSessionModal'));
            }

            $(document).on('click', '.request-session', function(e) {
                e.preventDefault();
                setDefaultDateTime();
                initModal();
                modal.show();
            });

            function setDefaultDateTime() {
                const now = new Date();
                const tomorrow = new Date(now);
                tomorrow.setDate(tomorrow.getDate() + 1);
                tomorrow.setHours(10, 0, 0, 0);

                const formattedDateTime = tomorrow.toISOString().slice(0, 16);
                $('#proposed_time').val(formattedDateTime);
            }

            function validateForm() {
                let isValid = true;
                $('.form-control, .form-select').removeClass('is-invalid');
                $('.invalid-feedback').hide();

                if (!$('#teacher_id').val()) {
                    $('#teacher_id').addClass('is-invalid').next('.invalid-feedback').show();
                    isValid = false;
                }

                if (!$('#title').val().trim()) {
                    $('#title').addClass('is-invalid').next('.invalid-feedback').show();
                    isValid = false;
                }

                const proposedTime = new Date($('#proposed_time').val());
                const now = new Date();
                if (!proposedTime || proposedTime <= now) {
                    $('#proposed_time').addClass('is-invalid').next('.invalid-feedback').show();
                    isValid = false;
                }

                return isValid;
            }

            function showSuccessMessage() {
                const form = $('#sessionRequestForm');
                const successHTML = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Success!</strong> Your session request has been submitted. The teacher will review it soon.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;

                form.before(successHTML);

                setTimeout(() => {
                    $('.alert-success').alert('close');
                }, 5000);
            }

            function resetForm() {
                $('#sessionRequestForm')[0].reset();
                setDefaultDateTime();
                $('.form-control, .form-select').removeClass('is-invalid');
                $('.invalid-feedback').hide();
                $('.alert-success').alert('close');
            }

            $('.form-control, .form-select').on('blur', function() {
                if (this.checkValidity()) {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid').addClass('is-invalid');
                }
            });

            $('#description').on('input', function() {
                const charCount = $(this).val().length;
                const counter = $(this).parent().find('.char-counter') ||
                    $(
                        '<small class="char-counter text-muted" style="display:block; margin-top:5px;"></small>'
                        )
                    .insertAfter($(this));

                counter.text(`${charCount}/500 characters`);

                if (charCount > 400) {
                    counter.css('color', '#ef4444');
                } else if (charCount > 300) {
                    counter.css('color', '#f59e0b');
                } else {
                    counter.css('color', '#6b7280');
                }
            });

            $(document).on('keydown', function(e) {
                if (e.key === 'Escape' && modal) {
                    modal.hide();
                    resetForm();
                }
            });

            $("#submitRequestBtn").on("click", function() {
                let form = $("#mockTestForm");

                let formData = {
                    teacher_id: $("#teacher_id").val(),
                    title: $("#title").val(),
                    description: $("#description").val(),
                    proposed_time: $("#proposed_time").val(),
                    duration_minutes: $("#duration_minutes").val(),
                    _token: "{{ csrf_token() }}"
                };

                $.ajax({
                    url: "{{ route('mock-test.post') }}",
                    method: "POST",
                    data: formData,
                    beforeSend: function() {
                        $("#submitRequestBtn").prop("disabled", true).html(`
                        <i class="fas fa-spinner fa-spin"></i> Processing...
                    `);
                    },
                    success: function(response) {
                        Swal.fire({
                            toast: true,
                            position: "top-end",
                            icon: "success",
                            title: "Mock test request submitted!",
                            showConfirmButton: false,
                            timer: 2500
                        });

                        setTimeout(() => {
                            location.reload();
                        }, 1200);
                    },
                    error: function(xhr) {
                        try {
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                $(".is-invalid").removeClass("is-invalid");

                                for (let field in errors) {
                                    $(`#${field}`).addClass("is-invalid");
                                }

                                Swal.fire({
                                    toast: true,
                                    position: "top-end",
                                    icon: "error",
                                    title: "Please check your input.",
                                    showConfirmButton: false,
                                    timer: 2500
                                });

                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Error!",
                                    text: "Something went wrong. Please try again.",
                                });
                            }

                        } catch (e) {
                            Swal.fire({
                                icon: "error",
                                title: "Unexpected Error",
                                text: e.message,
                            });
                        }

                    },
                    complete: function() {
                        $("#submitRequestBtn").prop("disabled", false).html(`
                        <i class="fas fa-paper-plane me-2"></i> Submit Request
                    `);
                    }
                });

            });

            setDefaultDateTime();
        });
    </script>

</body>

</html>
