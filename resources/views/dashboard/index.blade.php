@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/echart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/date-picker.css') }}">
    <style>
        .activity-calendar {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-size: 14px;
            max-width: 100%;
            overflow: hidden;
        }

        .calendar-wrapper {
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }

        .weekdays {
            display: flex;
            flex-direction: column;
            gap: 3px;
            margin-top: 28px;
            min-width: 30px;
        }

        .weekday {
            height: 14px;
            line-height: 14px;
            color: #666;
            font-size: 11px;
            text-align: right;
            padding-right: 8px;
        }

        .calendar-body {
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .months {
            display: flex;
            margin-bottom: 8px;
            margin-left: -2px;
            height: 20px;
            align-items: flex-end;
            font-size: 11px;
            color: #666;
        }

        .month-label {
            min-width: 14px;
            text-align: left;
            white-space: nowrap;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(53, 14px);
            grid-auto-rows: 14px;
            gap: 3px;
        }

        .day-box {
            width: 14px;
            height: 14px;
            border-radius: 2px;
            background: #ebedf0;
            cursor: pointer;
            position: relative;
            transition: transform 0.1s ease;
        }

        .day-box:hover {
            transform: scale(1.1);
            z-index: 1;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1);
        }

        .day-box:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            background: #333;
            color: white;
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 11px;
            white-space: nowrap;
            z-index: 10;
            pointer-events: none;
        }

        .level-0 {
            background: #ebedf0;
        }

        .level-1 {
            background: #9be9a8;
        }

        .level-2 {
            background: #40c463;
        }

        .level-3 {
            background: #30a14e;
        }

        .level-4 {
            background: #216e39;
        }

        .legend {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 15px;
            font-size: 12px;
            color: #666;
        }

        h4 {
            margin: 0 0 15px 0;
            font-weight: 600;
            color: #333;
        }
    </style>

    <style>
        .ranking-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 40px;
        }

        .ranking-section {
            flex: 1;
            min-width: 300px;
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
            color: #2c3e50;
            font-size: 1.2rem;
        }

        .bottom-rankers .section-title {
            color: #e74c3c;
        }

        .top-rankers .section-title {
            color: #3498db;
        }

        .ranking-item {
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .ranking-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .bottom-rankers .ranking-item {
            background: linear-gradient(90deg, #fff5f5 0%, #ffeaea 100%);
            border-left: 5px solid #e74c3c;
        }

        .top-rankers .ranking-item {
            background: linear-gradient(90deg, #f5f9ff 0%, #ebf3ff 100%);
            border-left: 5px solid #3498db;
        }

        .rank {
            font-weight: 800;
            min-width: 70px;
            text-align: center;
            font-size: 1rem;
        }

        .bottom-rankers .rank {
            color: #e74c3c;
        }

        .top-rankers .rank {
            color: #3498db;
        }

        .rank-1 {
            background: linear-gradient(90deg, #e8f5e9 0%, #c8e6c9 100%);
            border-left: 5px solid #4caf50 !important;
        }

        .rank-1 .rank {
            color: #4caf50;
        }


        .rank-5 {
            opacity: 0.9;
        }

        .rank-4 {
            opacity: 0.8;
        }

        .rank-3 {
            opacity: 0.9;
        }

        .rank-2 {
            opacity: 0.95;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 20px;
            font-weight: bold;
        }

        .bottom-avatar {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
        }

        .top-avatar {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
        }

        .rank-1 .avatar {
            background: linear-gradient(135deg, #4caf50 0%, #4caf50 100%);
        }

        .user-info {
            flex-grow: 1;
        }

        .user-name {
            font-weight: 700;
            font-size: 1rem color: #2c3e50;
            margin-bottom: 5px;
        }

        .score {
            color: #7f8c8d;
            display: flex;
            align-items: center;
        }

        .score-value {
            font-weight: 700;
            margin-left: 5px;
        }

        .top-rankers .score-value {
            color: #e74c3c;
        }

        .bottom-rankers .score-value {
            color: #3498db;
        }

        .rank-1 .score-value {
            color: #ff9800;
        }

        .medal {
            margin-right: 10px;
        }

        .gold {
            color: #ffd700;
        }

        .silver {
            color: #c0c0c0;
        }

        .bronze {
            color: #cd7f32;
        }

        @media (max-width: 768px) {
            .ranking-container {
                flex-direction: column;
            }

            .ranking-section {
                min-width: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Dashboard</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}">
                                    </use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- user information --}}
    @if (auth()->user()->role == 'admin')
        <div class="card">
            <div class="card-header">
                <h5>Users Information</h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row size-column">
                        <div class="row">
                            <div class="col-xl-3 col-6">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-project border-b-primary border-2"><span
                                            class="f-light f-w-500 f-14">Total Users</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countUsers }}</h2> <small
                                                    class="f-light f-w-500 f-14">(Users)</small>
                                            </div>
                                            <div class="product-sub bg-primary-light">
                                                <i class="fa fa-users text-dark"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-Progress border-b-warning border-2"> <span
                                            class="f-light f-w-500 f-14">Total Admin</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countAdmin }}</h2>
                                                <small class="f-light f-w-500 f-14">(Admin)</small>
                                            </div>
                                            <div class="product-sub bg-warning-light">
                                                <i class="fa fa-user-secret text-dark" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6" style="cursor: pointer" onclick="location.href = '/teacher'">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-Complete border-b-secondary border-2"><span
                                            class="f-light f-w-500 f-14">Total Teachers</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countTeacher }}</h2>
                                                <small class="f-light f-w-500 f-14">(Teachers)</small>
                                            </div>
                                            <div class="product-sub bg-secondary-light">
                                                <i class="fa fa-chalkboard-teacher text-dark" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6" style="cursor: pointer" onclick="location.href = '/students'">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Total
                                            Students</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countStudent }}</h2>
                                                <small class="f-light f-w-500 f-14">(Students)</small>
                                            </div>
                                            <div class="product-sub bg-light-light">
                                                <i class="fa fa-user-graduate text-dark"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- sets information --}}
    @if (auth()->user()->role == 'admin')
        <div class="card">
            <div class="card-header">
                <h5>Sets Information</h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row size-column">
                        <div class="row">
                            <div class="col-xl-3 col-6" style="cursor: pointer" onclick="location.href = '/ielts'">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-project border-b-primary border-2"><span
                                            class="f-light f-w-500 f-14">Total IELTS</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countIelts }}</h2>
                                                <small class="f-light f-w-500 f-14">(Sets)</small>
                                            </div>
                                            <div class="product-sub bg-primary-light">
                                                <i class="fa fa-language text-dark"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6" style="cursor: pointer" onclick="location.href = '/toefl'">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-Progress border-b-primary border-2"> <span
                                            class="f-light f-w-500 f-14">Total TOEFL</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countToefl }}</h2>
                                                <small class="f-light f-w-500 f-14">(Sets)</small>
                                            </div>
                                            <div class="product-sub bg-primary-light">
                                                <i class="fa fa-graduation-cap text-dark" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6" style="cursor: pointer" onclick="location.href = '/ge'">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-Complete border-b-primary border-2"><span
                                            class="f-light f-w-500 f-14">Total GE</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countGe }}</h2>
                                                <small class="f-light f-w-500 f-14">(Sets)</small>
                                            </div>
                                            <div class="product-sub bg-primary-light">
                                                <i class="fa fa-book text-dark" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6" style="cursor: pointer" onclick="location.href = '/sat'">
                                <div class="card o-hidden small-widget">
                                    <div class="card-body total-Complete border-b-primary border-2">
                                        <span class="f-light f-w-500 f-14">Total SAT</span>
                                        <div class="project-details">
                                            <div class="project-counter">
                                                <h2 class="f-w-600">{{ $countSat }}</h2>
                                                <small class="f-light f-w-500 f-14">(Sets)</small>
                                            </div>
                                            <div class="product-sub bg-primary-light">
                                                <i class="fa fa-pencil-alt text-dark"></i>
                                            </div>
                                        </div>
                                        <ul class="bubbles">
                                            <li class="bubble"> </li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                            <li class="bubble"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- recent activity --}}
    <div class="card">
        <div class="card-header">
            <h5>Recent Activities</h5>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row size-column">
                    <div class="row">
                        {{-- new user --}}
                        @if (auth()->user()->role == 'admin')
                            <div class="col-sm-5 box-col-6">
                                <div class="card height-equal">
                                    <div
                                        class="card-header card-no-border total-revenue d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">New User</h4>
                                        <span class="text-primary cursor-pointer">
                                            <button onclick="location.href='/students-verification'"
                                                class="btn btn-primary">View All</button>
                                        </span>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="new-user">
                                            <ul>
                                                @foreach ($unverifStudent as $unverif)
                                                    <li>
                                                        <div class="space-common d-flex user-name"><img
                                                                class="img-40 rounded-circle img-fluid me-2"
                                                                src="{{ asset('own_assets/images/avatar.png') }}"
                                                                alt="user" />
                                                            <div class="common-space w-100">
                                                                <div>
                                                                    <h6> <a class="f-w-500 f-14 "
                                                                            href="/students-verification">{{ $unverif->name }}</a>
                                                                    </h6>
                                                                    <span
                                                                        class="f-light f-w-500 f-12">{{ $unverif->email }}</span>
                                                                </div>
                                                                <div class="product-sub">
                                                                    <div class="dropdown">
                                                                        <div id="dropdownMenuButtonicon31"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false" role="menu">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- student activity --}}
                        @if (auth()->user()->role == 'admin')
                            <div class="col-md-7 col-12">
                                <div class="card height-equal">
                                    <div
                                        class="card-header card-no-border d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">Student Activity</h4>
                                    </div>

                                    <div class="card-body pt-0">
                                        <div class="activity-list d-flex flex-column gap-3">
                                            
                                            @foreach ($studentActivities as $activities)
                                            {{dd($activities)}}
                                                <div class="card shadow-sm border-0 w-100 mb-0">
                                                    <div class="card-body p-3">

                                                        <!-- Header -->
                                                        <div class="d-flex align-items-center gap-3 mb-2">
                                                            <img src="{{ $activities->student->foto
                                                                ? asset('storage/' . $activities->student->foto)
                                                                : asset('own_assets/images/avatar.png') }}"
                                                                class="rounded-circle" width="45" height="45"
                                                                alt="User">

                                                            <div class="flex-grow-1">
                                                                <div class="fw-semibold">{{ $activities->student->name }}
                                                                </div>
                                                                <small
                                                                    class="text-primary">{{ $activities->setSoal->name }}
                                                                    |
                                                                    {{ ucfirst($activities->kategori) }}</small>
                                                            </div>

                                                            @if ($activities->tipe_test == 'practice')
                                                                <span class="badge bg-primary">Practice</span>
                                                            @else
                                                                <span class="badge bg-warning text-dark">Mock</span>
                                                            @endif
                                                        </div>

                                                        <div class="d-flex flex-column gap-1 small">
                                                            <div>
                                                                <span class="text-muted">Test Type:</span>
                                                                <strong>{{ $activities->nama_tipe }}</strong>
                                                            </div>

                                                            @if (in_array($activities->kategori, ['speaking', 'writing']))
                                                                <div>
                                                                    <span class="text-muted">Assessor:</span>
                                                                    @if ($activities->teacher_id)
                                                                        <strong>{{ $activities->teacher->name }}</strong>
                                                                    @else
                                                                        <span class="text-warning">Not Yet Assessed</span>
                                                                    @endif
                                                                </div>
                                                            @else
                                                                <div>
                                                                    <span class="text-muted">Score:</span>
                                                                    <strong>{{ $activities->score }}/{{ $activities->jumlah_soal }}</strong>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        @if (in_array($activities->kategori, ['speaking', 'writing']) && $activities->teacher_id)
                                                            <div class="mt-3">
                                                                <button class="btn btn-outline-primary btn-sm w-100">
                                                                    View Details
                                                                </button>
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                @if (auth()->user()->role == 'admin')
                    <hr>
                @endif

                {{-- teacher and admin --}}
                @if (in_array(auth()->user()->role, ['admin', 'teacher']))
                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="card o-hidden small-widget">
                                <div class="card-body total-project border-b-primary border-2">
                                    <span class="f-light f-w-500 f-14">Speaking Video Awaiting Review</span>

                                    <div class="project-details">
                                        <div class="project-counter">
                                            <h2 class="f-w-600">{{ $videoRequest->count() }}</h2>
                                        </div>

                                        <div class="product-sub bg-primary-light">
                                            <i class="fas fa-video text-primary"></i>
                                        </div>
                                    </div>

                                    <ul class="bubbles">
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6">
                            <div class="card o-hidden small-widget">
                                <div class="card-body total-project border-b-primary border-2">
                                    <span class="f-light f-w-500 f-14">Essay Awaiting Review</span>

                                    <div class="project-details">
                                        <div class="project-counter">
                                            <h2 class="f-w-600">{{ $writingRequest->count() }}</h2>
                                        </div>

                                        <div class="product-sub bg-primary-light">
                                            <i class="fas fa-file-alt text-primary"></i>
                                        </div>
                                    </div>

                                    <ul class="bubbles">
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4>Speaking Test Requests</h4>
                                        <p class="f-m-light mt-1">
                                            A list of students who submitted speaking tests.
                                        </p>
                                    </div>
                                    <span class="badge bg-danger text-white">
                                        {{ $videoRequest->count() }}
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-scroll scroll-demo scroll-b-none">
                                        <div class="list-group main-lists-content">

                                            @forelse ($videoRequest as $v)
                                                <div class="list-group-item list-group-item-action list-hover-primary btn-review-speaking"
                                                    style="cursor: pointer" data-id="{{ $v->id }}"
                                                    data-video="{{ asset('storage/recordings/' . $v->video) }}"
                                                    data-student="{{ $v->student->name }}">
                                                    <div class="row">
                                                        <div class="col-5 d-flex align-items-center">
                                                            <video width="100%" controls class="preview-video"
                                                                data-duration-target="duration-{{ $v->id }}">
                                                                <source
                                                                    src="{{ asset('storage/recordings/' . $v->video) }}"
                                                                    type="video/webm">
                                                            </video>
                                                        </div>

                                                        <div class="col-7">
                                                            <div class="list-content">
                                                                <h6 class="mb-1">{{ $v->student->name }}</h6>

                                                                <p class="mb-1 text-muted" style="font-size:13px;">
                                                                    <i class="fa fa-calendar"></i>
                                                                    {{ $v->created_at->format('Y-m-d') }}
                                                                    &nbsp; • &nbsp;
                                                                    <i class="fa fa-clock"></i>
                                                                    <span
                                                                        id="duration-{{ $v->id }}">Loading…</span>
                                                                </p>
                                                                <p class="text-dark" style="font-size: 13px;">
                                                                    <b>Topic: {{ $v->setSoal->name }}</b><br>
                                                                    {{ $v->setSoal->thumbnail }} <br>
                                                                    <small class="text-primary">Part {{ $v->part_soal }}
                                                                        &nbsp; • &nbsp;
                                                                        Number {{ $v->no_soal }}</small>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @empty
                                                <div class="text-center text-muted py-3">
                                                    No writing submissions found.
                                                </div>
                                            @endforelse

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4>Writing Test Requests</h4>
                                        <p class="f-m-light mt-1">
                                            A list of students who submitted writing tests.
                                        </p>
                                    </div>
                                    <span class="badge bg-danger text-white">
                                        {{ $writingRequest->count() }}
                                    </span>
                                </div>

                                <div class="card-body">
                                    <div class="vertical-scroll scroll-demo scroll-b-none">
                                        <div class="list-group main-lists-content">

                                            @forelse ($writingRequest as $w)
                                                <div style="cursor: pointer" data-id="{{ $w->id }}"
                                                    class="list-group-item list-group-item-action list-hover-primary btn-review-writing">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="list-content">

                                                                <!-- STUDENT NAME -->
                                                                <h6 class="mb-1">
                                                                    {{ $w->student->name ?? 'Unknown Student' }}
                                                                </h6>

                                                                <!-- DATE + WORD COUNT -->
                                                                <p class="mb-1 text-muted" style="font-size: 13px;">
                                                                    <i class="fa fa-calendar"></i>
                                                                    {{ $w->created_at->format('Y-m-d') }}

                                                                    &nbsp; • &nbsp;

                                                                    <i class="fa fa-clock"></i>
                                                                    {{ str_word_count($w->answer) }} words
                                                                </p>

                                                                <!-- TOPIC -->
                                                                <p class="text-dark" style="font-size: 13px;">
                                                                    <b>Topic: {{ $w->setSoal->name }}</b><br>
                                                                    {{ $w->setSoal->thumbnail }} <br>
                                                                    <small class="text-primary">{{ $w->task }} &nbsp;
                                                                        •
                                                                        &nbsp; Number
                                                                        {{ $w->no_soal }}</small>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="text-center text-muted py-3">
                                                    No writing submissions found.
                                                </div>
                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- video call statistics --}}
                    {{-- <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="card o-hidden small-widget">
                                <div class="card-body total-project border-b-primary border-2">
                                    <span class="f-light f-w-500 f-14">Request Video Call Live Test</span>

                                    <div class="project-details">
                                        <div class="project-counter">
                                            <h2 class="f-w-600">{{ $pendingSessions->count() }}</h2>
                                        </div>

                                        <div class="product-sub bg-primary-light">
                                            <i class="fas fa-phone-alt text-primary"></i>
                                        </div>
                                    </div>

                                    <ul class="bubbles">
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6">
                            <div class="card o-hidden small-widget">
                                <div class="card-body total-project border-b-primary border-2">
                                    <span class="f-light f-w-500 f-14">Upcoming Sessions</span>

                                    <div class="project-details">
                                        <div class="project-counter">
                                            <h2 class="f-w-600">{{ $upcomingSessions->count() }}</h2>
                                        </div>

                                        <div class="product-sub bg-primary-light">
                                            <i class="fas fa-phone-alt text-primary"></i>
                                        </div>
                                    </div>

                                    <ul class="bubbles">
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                        <li class="bubble"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="row video-call-row">
                        <div class="col-12 col-xxl-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Live Video Call Test</h4>
                                    <p class="f-m-light mt-1">Manage student requests and accepted live test sessions.</p>
                                </div>

                                <div class="card-body">

                                    <ul class="nav nav-tabs" id="videoCallTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#requests"
                                                type="button">
                                                Requests
                                                <span class="badge bg-primary ms-1">{{ $pendingSessions->count() }}</span>
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#acceptedSessions"
                                                type="button">
                                                Accepted
                                                <span class="badge bg-success ms-1">{{ $upcomingSessions->count() }}</span>
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-3">

                                        <div class="tab-pane fade show active" id="requests">

                                            @if ($pendingSessions->isEmpty())
                                                <div class="text-center py-4 text-muted">
                                                    <i class="fa fa-inbox fa-2x mb-2"></i>
                                                    <p class="mb-0">No pending requests</p>
                                                </div>
                                            @else
                                                <div class="table-responsive d-none d-md-block">
                                                    <table class="table table-bordered align-middle">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>Student</th>
                                                                <th>Teacher</th>
                                                                <th>Title</th>
                                                                <th>Proposed Time</th>
                                                                <th>Duration</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pendingSessions as $session)
                                                                <tr>
                                                                    <td>{{ $session->student->name }}</td>
                                                                    <td>{{ $session->teacher->name }}</td>
                                                                    <td>{{ $session->title }}</td>
                                                                    <td><i class="fa fa-calendar text-primary me-1"></i>
                                                                        {{ $session->proposed_time->format('M d, Y H:i') }}
                                                                    </td>
                                                                    <td><span
                                                                            class="badge bg-info">{{ $session->duration_minutes }}
                                                                            min</span></td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-info btn-sm btn-detail"
                                                                            data-id="{{ $session->id }}">
                                                                            <i class="fa fa-eye"></i> Details
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="d-block d-md-none">
                                                    @foreach ($pendingSessions as $session)
                                                        <div class="card mb-3 shadow-sm">
                                                            <div class="card-body">
                                                                <strong>Student:</strong> {{ $session->student->name }} <br>
                                                                <strong>Teacher:</strong> {{ $session->teacher->name }} <br>
                                                                <strong>Title:</strong> {{ $session->title }} <br>
                                                                <strong>Proposed:</strong>
                                                                {{ $session->proposed_time->format('M d, Y H:i') }} <br>
                                                                <strong>Duration:</strong> {{ $session->duration_minutes }} min
                                                                <br>

                                                                <div class="mt-3">
                                                                    <button class="btn btn-info btn-sm btn-detail"
                                                                        data-id="{{ $session->id }}">
                                                                        <i class="fa fa-eye"></i> Details
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                        </div>

                                        <div class="tab-pane fade" id="acceptedSessions">

                                            @if ($upcomingSessions->isEmpty())
                                                <div class="text-center py-4 text-muted">
                                                    <i class="fa fa-calendar-times fa-2x mb-2"></i>
                                                    <p class="mb-0">No upcoming accepted sessions</p>
                                                </div>
                                            @else
                                                <div class="table-responsive d-none d-md-block">
                                                    <table class="table table-bordered align-middle">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>Student</th>
                                                                <th>Teacher</th>
                                                                <th>Title</th>
                                                                <th>Scheduled Time</th>
                                                                <th>Duration</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($upcomingSessions as $session)
                                                                <tr>
                                                                    <td>{{ $session->student->name }}</td>
                                                                    <td>{{ $session->teacher->name }}</td>
                                                                    <td>{{ $session->title }}</td>
                                                                    <td><i class="fa fa-clock text-success me-1"></i>
                                                                        {{ $session->scheduled_time->format('M d, Y H:i') }}
                                                                    </td>
                                                                    <td><span
                                                                            class="badge bg-success">{{ $session->duration_minutes }}
                                                                            min</span></td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-info btn-sm btn-detail"
                                                                            data-id="{{ $session->id }}">
                                                                            <i class="fa fa-eye"></i> Details
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="d-block d-md-none">
                                                    @foreach ($upcomingSessions as $session)
                                                        <div class="card mb-3 shadow-sm">
                                                            <div class="card-body">
                                                                <strong>Student:</strong> {{ $session->student->name }} <br>
                                                                <strong>Teacher:</strong> {{ $session->teacher->name }} <br>
                                                                <strong>Title:</strong> {{ $session->title }} <br>
                                                                <strong>Scheduled:</strong>
                                                                {{ $session->scheduled_time->format('M d, Y H:i') }} <br>
                                                                <strong>Duration:</strong> {{ $session->duration_minutes }} min
                                                                <br>

                                                                <div class="mt-3">
                                                                    <button class="btn btn-info btn-sm btn-detail"
                                                                        data-id="{{ $session->id }}">
                                                                        <i class="fa fa-eye"></i> Details
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> --}}
                @endif

                <div class="row">
                    <div class="col-12 col-lg-6 mb-3">
                        <div class="ranking-section top-rankers">
                            <h2 class="section-title">
                                <i class="fas fa-crown"></i> 5 Top Reading
                            </h2>

                            @foreach ($score[0][0] as $index => $item)
                                @php
                                    $rank = $index + 1;
                                    $rankClass = match ($rank) {
                                        1 => 'rank-1',
                                        5 => 'rank-5',
                                        default => '',
                                    };

                                    $medal = match ($rank) {
                                        1 => 'gold',
                                        2 => 'silver',
                                        3 => 'bronze',
                                        default => null,
                                    };

                                    $avatar = strtoupper(substr($item->name, 0, 1));
                                @endphp

                                <div class="ranking-item {{ $rankClass }}" style="cursor: pointer" onclick="window.location.href='/history/detail?id={{$item->student_id}}'">
                                    <div class="rank">{{ $rank }}</div>

                                    <div class="avatar top-avatar">
                                        @if ($item->foto)
                                            <img class="b-r-10" src="{{ asset('storage') . '/' . $item->foto }}" width="100%" alt="Profile Picture">
                                        @else
                                            {{ $avatar }}
                                        @endif
                                    </div>

                                    <div class="user-info">
                                        <div class="user-name">{{ $item->name }}</div>

                                        <div class="score">
                                            @if ($medal)
                                                <span class="medal {{ $medal }}">
                                                    <i class="fas fa-medal"></i>
                                                </span>
                                            @endif
                                            Skor:
                                            <span class="score-value">
                                                {{ number_format($item->avg_score, 2) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @if (in_array(auth()->user()->role, ['admin', 'teacher']))
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="ranking-section bottom-rankers">
                                <h2 class="section-title">
                                    <i class="fas fa-sort-amount-down-alt"></i> 5 Bottom Reading
                                </h2>

                                @php
                                    $totalParticipants = $score[0][2] ?? count($score[1][1]);
                                    $bottomCount = count($score[0][1]);
                                @endphp

                                @foreach ($score[0][1] as $index => $item)
                                    @php
                                        $rank = $totalParticipants - $bottomCount + $index + 1;
                                        $avatar = strtoupper(substr($item->name, 0, 1));
                                    @endphp

                                    <div class="ranking-item" style="cursor: pointer" onclick="window.location.href='/history/detail?id={{$item->student_id}}'">
                                        <div class="rank">{{ $rank }}</div>

                                        <div class="avatar bottom-avatar">
                                            @if ($item->foto)
                                                <img class="b-r-10" src="{{ asset('storage') . '/' . $item->foto }}" width="100%" alt="Profile Picture">
                                            @else
                                                {{ $avatar }}
                                            @endif
                                        </div>

                                        <div class="user-info">
                                            <div class="user-name">{{ $item->name }}</div>

                                            <div class="score">
                                                Skor:
                                                <span class="score-value">
                                                    {{ number_format($item->avg_score, 2) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="col-12 col-lg-6 mb-3">
                        <div class="ranking-section top-rankers">
                            <h2 class="section-title">
                                <i class="fas fa-crown"></i> 5 Top Listening
                            </h2>

                            @foreach ($score[1][0] as $index => $item)
                                @php
                                    $rank = $index + 1;
                                    $avatar = strtoupper(substr($item->name, 0, 1));
                                @endphp

                                <div class="ranking-item {{ $rank === 1 ? 'rank-1' : '' }}" style="cursor: pointer" onclick="window.location.href='/history/detail?id={{$item->student_id}}'">
                                    <div class="rank">{{ $rank }}</div>

                                    <div class="avatar top-avatar">
                                        @if ($item->foto)
                                            <img class="b-r-10" src="{{ asset('storage') . '/' . $item->foto }}" width="100%" alt="Profile Picture">
                                        @else
                                            {{ $avatar }}
                                        @endif
                                    </div>

                                    <div class="user-info">
                                        <div class="user-name">{{ $item->name }}</div>

                                        <div class="score">
                                            @if ($rank === 1)
                                                <span class="medal gold"><i class="fas fa-medal"></i></span>
                                            @elseif ($rank === 2)
                                                <span class="medal silver"><i class="fas fa-medal"></i></span>
                                            @elseif ($rank === 3)
                                                <span class="medal bronze"><i class="fas fa-medal"></i></span>
                                            @endif
                                            Skor:
                                            <span class="score-value">{{ number_format($item->avg_score, 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @if (in_array(auth()->user()->role, ['admin', 'teacher']))
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="ranking-section bottom-rankers">
                                <h2 class="section-title">
                                    <i class="fas fa-sort-amount-down-alt"></i> 5 Bottom Listening
                                </h2>

                                @php
                                    $totalParticipants = $score[1][2] ?? count($score[1][1]);
                                    $bottomCount = count($score[1][1]);
                                @endphp

                                @foreach ($score[1][1] as $index => $item)
                                    @php
                                        $rank = $totalParticipants - $bottomCount + $index + 1;
                                        $avatar = strtoupper(substr($item->name, 0, 1));
                                    @endphp

                                    <div class="ranking-item" style="cursor: pointer" onclick="window.location.href='/history/detail?id={{$item->student_id}}'">
                                        <div class="rank">{{ $rank }}</div>

                                        <div class="avatar bottom-avatar">
                                            @if ($item->foto)
                                                <img class="b-r-10" src="{{ asset('storage') . '/' . $item->foto }}" width="100%" alt="Profile Picture">
                                            @else
                                                {{ $avatar }}
                                            @endif
                                        </div>

                                        <div class="user-info">
                                            <div class="user-name">{{ $item->name }}</div>

                                            <div class="score">
                                                Skor:
                                                <span class="score-value">{{ number_format($item->avg_score, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if (in_array(auth()->user()->role, ['admin', 'teacher']))
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-header">
                    <h4>Student Activities (Last 12 Months)</h4>
                </div>
                <div class="card-body">
                    <div class="activity-calendar">
                        <div class="calendar-wrapper">

                            <div class="calendar-body">
                                {{-- Months --}}
                                <div class="months" id="months-container">
                                    @php
                                        $currentMonth = '';
                                        $monthCursor = $start->copy()->startOfWeek();
                                    @endphp

                                    @for ($i = 0; $i < 53; $i++)
                                        @php
                                            $weekStart = $monthCursor->copy();
                                            $monthName = $weekStart->format('M');
                                        @endphp

                                        @if ($monthName !== $currentMonth)
                                            <div class="month-label" style="grid-column: {{ $i + 1 }}">
                                                {{ $monthName }}
                                            </div>
                                            @php $currentMonth = $monthName; @endphp
                                        @endif

                                        @php $monthCursor->addWeek(); @endphp
                                    @endfor
                                </div>

                                {{-- Calendar Grid --}}
                                <div class="calendar-grid">
                                    @php
                                        $date = $start->copy()->startOfWeek();
                                    @endphp

                                    @while ($date <= $end)
                                        @php
                                            $count = $courseActivities[$date->toDateString()] ?? 0;

                                            if ($count == 0) {
                                                $level = 0;
                                            } elseif ($count <= 10) {
                                                $level = 1;
                                            } elseif ($count <= 30) {
                                                $level = 2;
                                            } elseif ($count <= 60) {
                                                $level = 3;
                                            } else {
                                                $level = 4;
                                            }

                                            $tooltip =
                                                $date->format('d M Y') .
                                                ' - ' .
                                                $count .
                                                ' test' .
                                                ($count != 1 ? 's' : '');
                                        @endphp

                                        <div class="day-box level-{{ $level }}"
                                            data-tooltip="{{ $tooltip }}" title="{{ $tooltip }}">
                                        </div>

                                        @php $date->addDay(); @endphp
                                    @endwhile
                                </div>
                            </div>
                        </div>

                        {{-- Legend --}}
                        <div class="legend">
                            <span style="margin-right: 4px;">Less</span>
                            <div class="day-box level-0"></div>
                            <div class="day-box level-1"></div>
                            <div class="day-box level-2"></div>
                            <div class="day-box level-3"></div>
                            <div class="day-box level-4"></div>
                            <span style="margin-left: 4px;">More</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- <div class="container-fluid">
        <div class="row size-column">
            <div class="col-xl-8 col-md-12 box-col-12">
                <div class="card">
                    <div class="card-header sales-chart card-no-border">
                        <h4>Revenue Growth </h4>
                        <div class="sales-chart-dropdown">
                            <ul class="balance-data">
                                <li> <span class="circle bg-warning"> </span><span class="ms-1 f-w-400">Marketing Sale
                                    </span></li>
                                <li> <span class="circle bg-primary"> </span><span class="ms-1 f-w-400">Online
                                        Sale</span>
                                </li>
                            </ul>
                            <div class="sales-chart-dropdown-select">
                                <div class="card-header-right-icon online-store">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle dropdown-toggle-store"
                                            id="dropdownMenuButtonToggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">This Year</button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButtonToggle"><span class="dropdown-item">Last
                                                Month</span><span class="dropdown-item">Last Week</span><span
                                                class="dropdown-item">Today </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-12">
                                <div class="revenuegrowth">
                                    <div class="revenuegrowth-chart" id="revenuegrowth"></div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 d-xxl-block d-none ">
                                <div class="revenuegrowth-details">
                                    <div class="growth-details"><span class="f-light f-12  text-uppercase">Total
                                            Sales</span>
                                        <h4 class="f-w-500 mb-2">$56.265.08 </h4>
                                        <div class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                            <p class="mb-0 f-w-500 f-12">Compared to </p><span
                                                class="f-light f-12 f-w-500 ">(+40.15% than)</span>
                                            <p class="mb-0 f-w-500 f-12">last year </p>
                                        </div>
                                    </div>
                                    <div class="growth-details"><span class="f-light f-12  text-uppercase">Total
                                            Purchase
                                        </span>
                                        <h4 class="f-w-500 mb-2">$42,256.26 </h4>
                                        <div class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                            <p class="mb-0 f-w-500 f-12">Compared to </p><span
                                                class="txt-secondary f-12 f-w-500">(-20.25% than) </span>
                                            <p class="mb-0 f-w-500 f-12">last year </p>
                                        </div>
                                    </div>
                                    <div class="growth-details"> <span class="f-light f-12  text-uppercase">Total
                                            Returns</span>
                                        <h4 class="f-w-500 mb-2">$5,215.62 </h4>
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <p class="mb-0 f-w-500 f-12">Compared to </p><span
                                                class=" f-w-500 f-light f-12">(+18.15% than) </span>
                                            <p class="mb-0 f-w-500 f-12">last year </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 box-col-none">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card boost-up-card overflow-hidden">
                            <div class="p-4">
                                <div class="boostup-name row">
                                    <h6 class="text-white f-28 f-w-700 mb-2 z-1 ">Boost up your sale</h6>
                                    <p class="text-white f-14 f-w-500 col-9 line-clamp">
                                        by upgrading your account you can increase your sale by 30% more.</p>
                                </div>
                                <div class="img-boostup"><img class="img-boostup-img-1"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                        alt="boostup"><img class="img-boostup-img-2"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                        alt="boostup"></div>
                                <div class="btn-showcase text-start"> <a href="pricing.html">
                                        <button class="btn btn-pill btn-outline-light-2x b-r-8" type="button">Upgrade
                                            Now</button></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue pb-0">
                                <h4>Deliveries</h4>
                                <div class="icon-menu-header">
                                    <svg>
                                        <use
                                            href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#more-horizontal') }}">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                    <table class="percentage-data w-100">
                                        <thead>
                                            <tr>
                                                <th class="f-light f-12 f-w-500" scope="col">Particular</th>
                                                <th class="f-light f-12 f-w-500" scope="col">Percentage</th>
                                                <th class="f-light f-12 f-w-500 text-end" scope="col">Total Amount
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="f-w-400 f-10"> <a class="line-clamp" href="cart.html">On
                                                        Time
                                                        Delivery</a></td>
                                                <td>
                                                    <div class="progress-value d-flex gap-2 align-items-center">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 75%  " aria-valuenow="75"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div><span>80%</span>
                                                    </div>
                                                </td>
                                                <td class="f-w-500 f-10 text-end">$45,452.23</td>
                                            </tr>
                                            <tr>
                                                <td class="f-w-400 f-10"> <a class="line-clamp"
                                                        href="cart.html">Delayed
                                                        Delivery</a></td>
                                                <td>
                                                    <div class="progress-value d-flex gap-2 align-items-center">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 15%" aria-valuenow="15"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div><span>15% </span>
                                                    </div>
                                                </td>
                                                <td class="f-w-500 f-10 text-end">$15,256.23</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border total-revenue">
                        <h4>Top Product </h4><a href="product.html">View All </a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="top-product-card">
                            <ul>
                                <li class="d-flex top-product gap-2">
                                    <div><img class="img-fluid product-img"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/product/1.png') }}"
                                            alt="product" /></div>
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="product-details">
                                            <div><span class="badge rounded-pill badge-light text-dark">SKU90400</span>
                                            </div><a class="f-10 f-w-500  line-clamp" href="product.html">Huawai Smart
                                                Watch</a><span class="f-10 f-w-500 txt-primary">$39.02</span>
                                        </div>
                                        <div class="product-items">
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY
                                                    :</span><span class="f-10 f-w-500">12</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue :
                                                </span><span class="f-10 f-w-500  ">$51</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit
                                                    :</span><span class="f-10 f-w-500 ">$15</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex top-product gap-2">
                                    <div><img class="img-fluid product-img"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/product/2.png') }}"
                                            alt="product" /></div>
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="product-details">
                                            <div><span class="badge rounded-pill badge-light text-dark">SKU78589</span>
                                            </div><a class="f-10 f-w-500  line-clamp" href="product.html">Noise -
                                                Wireless
                                                Headphone</a><span class="f-10 f-w-500 txt-primary">$45.26</span>
                                        </div>
                                        <div class="product-items">
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY
                                                    :</span><span class="f-10 f-w-500">19</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue :
                                                </span><span class="f-10 f-w-500  ">$8</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit
                                                    :</span><span class="f-10 f-w-500 "> $9</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex top-product gap-2">
                                    <div><img class="img-fluid product-img"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/product/3.png') }}"
                                            alt="product" /></div>
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="product-details">
                                            <div><span class="badge rounded-pill badge-light text-dark">SKU78599</span>
                                            </div><a class="f-10 f-w-500  line-clamp" href="product.html">Men &amp;
                                                Women
                                                Footwear</a><span class="f-10 f-w-500 txt-primary">$45.62</span>
                                        </div>
                                        <div class="product-items">
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY :
                                                </span><span class="f-10 f-w-500">9</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue
                                                    :</span><span class="f-10 f-w-500  "> $15</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit :
                                                </span><span class="f-10 f-w-500 ">$18</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex top-product gap-2">
                                    <div><img class="img-fluid product-img"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/product/4.png') }}"
                                            alt="product" /></div>
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="product-details">
                                            <div><span class="badge rounded-pill badge-light text-dark">SKU78596</span>
                                            </div><a class="f-10 f-w-500  line-clamp" href="product.html">Anime White
                                                Half
                                                Sleev T-shirt</a><span class="f-10 f-w-500 txt-primary">$589.26</span>
                                        </div>
                                        <div class="product-items">
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY
                                                    :</span><span class="f-10 f-w-500">9</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue :
                                                </span><span class="f-10 f-w-500  ">$7</span></div>
                                            <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit
                                                    :</span><span class="f-10 f-w-500 ">$42</span></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 box-col-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border total-revenue">
                        <h4>New User </h4><a href="product.html">View All</a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="new-user">
                            <ul>
                                <li>
                                    <div class="space-common d-flex user-name"><img
                                            class="img-40 rounded-circle img-fluid me-2"
                                            src="{{ asset('dashboard_assets/assets/images/user/22.png') }}"
                                            alt="user" />
                                        <div class="common-space w-100">
                                            <div>
                                                <h6> <a class="f-w-500 f-14 " href="user-profile.html">Smith John</a>
                                                </h6>
                                                <span class="f-light f-w-500 f-12">India</span>
                                            </div>
                                            <div class="product-sub">
                                                <div class="dropdown">
                                                    <div id="dropdownMenuButtonicon31" data-bs-toggle="dropdown"
                                                        aria-expanded="false" role="menu">
                                                        <svg class="invoice-icon">
                                                            <use
                                                                href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#more-vertical') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButtonicon31"><span
                                                            class="dropdown-item">Last Month </span><span
                                                            class="dropdown-item">Last Week</span><span
                                                            class="dropdown-item">Last Day </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-common d-flex user-name"><img
                                            class="img-40 rounded-circle img-fluid me-2"
                                            src="{{ asset('dashboard_assets/assets/images/user/28.png') }}"
                                            alt="user" />
                                        <div class="common-space w-100">
                                            <div>
                                                <h6> <a class="f-w-500 f-14 " href="user-profile.html">Robert Fox</a>
                                                </h6>
                                                <span class="f-light f-w-500 f-12">Afghanistan</span>
                                            </div>
                                            <div class="product-sub">
                                                <div class="dropdown">
                                                    <div id="dropdownMenuButtonicon32" data-bs-toggle="dropdown"
                                                        aria-expanded="false" role="menu">
                                                        <svg class="invoice-icon">
                                                            <use
                                                                href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#more-vertical') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButtonicon32"><span
                                                            class="dropdown-item">Last Month </span><span
                                                            class="dropdown-item">Last Week</span><span
                                                            class="dropdown-item">Last Day </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-common d-flex user-name"><img
                                            class="img-40 rounded-circle img-fluid me-2"
                                            src="{{ asset('dashboard_assets/assets/images/user/26.png') }}"
                                            alt="user" />
                                        <div class="common-space w-100">
                                            <div>
                                                <h6> <a class="f-w-500 f-14 " href="user-profile.html">Darlene
                                                        Robtson</a>
                                                </h6><span class="f-light f-w-500 f-12">Georgia</span>
                                            </div>
                                            <div class="product-sub">
                                                <div class="dropdown">
                                                    <div id="dropdownMenuButtonicon33" data-bs-toggle="dropdown"
                                                        aria-expanded="false" role="menu">
                                                        <svg class="invoice-icon">
                                                            <use
                                                                href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#more-vertical') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButtonicon33"><span
                                                            class="dropdown-item">Last Month </span><span
                                                            class="dropdown-item">Last Week</span><span
                                                            class="dropdown-item">Last Day </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-common d-flex user-name"><img
                                            class="img-40 rounded-circle img-fluid me-2"
                                            src="{{ asset('dashboard_assets/assets/images/user/24.png') }}"
                                            alt="user" />
                                        <div class="common-space w-100">
                                            <div>
                                                <h6> <a class="f-w-500 f-14 " href="user-profile.html">Floyd Miles</a>
                                                </h6><span class="f-light f-w-500 f-12">Pakistan</span>
                                            </div>
                                            <div class="product-sub">
                                                <div class="dropdown">
                                                    <div id="dropdownMenuButtonicon34" data-bs-toggle="dropdown"
                                                        aria-expanded="false" role="menu">
                                                        <svg class="invoice-icon">
                                                            <use
                                                                href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#more-vertical') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButtonicon34"><span
                                                            class="dropdown-item">Last Month </span><span
                                                            class="dropdown-item">Last Week</span><span
                                                            class="dropdown-item">Last Day </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-common d-flex user-name"><img
                                            class="img-40 rounded-circle img-fluid me-2"
                                            src="{{ asset('dashboard_assets/assets/images/user/49.png') }}"
                                            alt="user" />
                                        <div class="common-space w-100">
                                            <div>
                                                <h6> <a class="f-w-500 f-14 " href="user-profile.html">Jacob Jones</a>
                                                </h6><span class="f-light f-w-500 f-12">Monaco</span>
                                            </div>
                                            <div class="product-sub">
                                                <div class="dropdown">
                                                    <div id="dropdownMenuButtonicon35" data-bs-toggle="dropdown"
                                                        aria-expanded="false" role="menu">
                                                        <svg class="invoice-icon">
                                                            <use
                                                                href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#more-vertical') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButtonicon35"><span
                                                            class="dropdown-item">Last Month </span><span
                                                            class="dropdown-item">Last Week</span><span
                                                            class="dropdown-item">Last Day </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-sm-6 box-col-6">
                <div class="card height-equal">
                    <div class="card-header card-no-border total-revenue pb-0">
                        <h4>Team Activity </h4><a href="product.html">View All </a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="activity-table table-responsive custom-scrollbar">
                            <table class="order-table overflow-hidden project-table w-100 activity-log">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="team-activity">
                                                <div class="activity-data d-flex align-items-center gap-3">
                                                    <div class="common-space gap-2 ">
                                                        <div class="user-activity me-3"><img
                                                                class="rounded-circle p-1 img-fluid me-3 img-50"
                                                                src="{{ asset('dashboard_assets/assets/images/user/50.png') }}"
                                                                alt="user"><a class="f-10 f-w-500 username"
                                                                href="edit-profile.html">Floyd Miles</a></div>
                                                        <div class="activity-time"><span class="f-light f-w-500 f-10">5
                                                                min ago</span></div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <p class="f-w-400 f-10">Floyd has moved to the warehouse.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-activity">
                                                <div class="activity-data d-flex align-items-center gap-3">
                                                    <div class="common-space gap-2 ">
                                                        <div class="user-activity me-3"><img
                                                                class="rounded-circle p-1 img-fluid me-3 img-50"
                                                                src="{{ asset('dashboard_assets/assets/images/user/51.png') }}"
                                                                alt="user"><a class="f-10 f-w-500 username"
                                                                href="edit-profile.html">Ralph Edwards</a></div>
                                                        <div class="activity-time"><span class="f-light f-w-500 f-10">6
                                                                min ago</span></div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <p class="f-w-400 f-10">Ralph has solved Mr.williams project.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-activity">
                                                <div class="activity-data d-flex align-items-center gap-3">
                                                    <div class="common-space gap-2 ">
                                                        <div class="user-activity me-3"><img
                                                                class="rounded-circle p-1 img-fluid me-3 img-50"
                                                                src="{{ asset('dashboard_assets/assets/images/user/33.png') }}"
                                                                alt="user"><a class="f-10 f-w-500 username"
                                                                href="edit-profile.html">Esther Howard</a></div>
                                                        <div class="activity-time"><span class="f-light f-w-500 f-10">10
                                                                min ago</span></div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <p class="f-w-400 f-10">Esther has changed his to active, now.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-activity">
                                                <div class="activity-data d-flex align-items-center gap-3">
                                                    <div class="common-space gap-2 ">
                                                        <div class="user-activity me-3"><img
                                                                class="rounded-circle p-1 img-fluid me-3 img-50"
                                                                src="{{ asset('dashboard_assets/assets/images/user/52.png') }}"
                                                                alt="user"><a class="f-10 f-w-500 username"
                                                                href="edit-profile.html">Jacob Jones</a></div>
                                                        <div class="activity-time"><span class="f-light f-w-500 f-10">11
                                                                min ago</span></div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <p class="f-w-400 f-10">Jacob has make changes in sold it.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-activity">
                                                <div class="activity-data d-flex align-items-center gap-3">
                                                    <div class="common-space gap-2 ">
                                                        <div class="user-activity me-3"><img
                                                                class="rounded-circle p-1 img-fluid me-3 img-50"
                                                                src="{{ asset('dashboard_assets/assets/images/user/53.png') }}"
                                                                alt="user"><a class="f-10 f-w-500 username"
                                                                href="edit-profile.html">Theresa Webb</a></div>
                                                        <div class="activity-time"><span class="f-light f-w-500 f-10">12
                                                                min ago</span></div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <p class="f-w-400 f-10">Theresa has complete old task and new one.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-activity">
                                                <div class="activity-data d-flex align-items-center gap-3">
                                                    <div class="common-space gap-2 ">
                                                        <div class="user-activity me-3"><img
                                                                class="rounded-circle p-1 img-fluid me-3 img-50"
                                                                src="{{ asset('dashboard_assets/assets/images/user/54.png') }}"
                                                                alt="user"><a class="f-10 f-w-500 username"
                                                                href="edit-profile.html">Annette Black</a></div>
                                                        <div class="activity-time"><span class="f-light f-w-500 f-10">12
                                                                min ago</span></div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <p class="f-w-400 f-10">Annette has send all the stock to
                                                            department.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border total-revenue pb-0">
                        <h4>User Visits by Day </h4>
                        <div class="sales-chart-dropdown">
                            <ul class="balance-data">
                                <li> <span class="circle bg-primary"></span><span class="f-light ms-1">Chrome </span>
                                </li>
                                <li><span class="circle bg-primary-1"> </span><span class="f-light ms-1">Firefox </span>
                                </li>
                                <li> <span class="circle bg-primary-2"> </span><span class="f-light ms-1">Safari</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-0">
                        <div class="user-visitsCharts">
                            <div id="visitsCharts"> </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="common-space">
                            <div><a class="f-w-600 f-14 " href="index.html">Most Visited Day</a><span
                                    class="f-light f-w-500 f-14 d-block">Total 59.6k visits on Sunday </span></div>
                            <div class="visited-dropdown">
                                <svg class="mb-0">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#arrow-down') }}">
                                    </use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border total-revenue">
                        <h4>Latest Transaction</h4><a href="product.html">View All</a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-order table-responsive custom-scrollbar">
                            <table class=" w-100 tranaction-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-name"><a class=" f-14 f-w-500"
                                                    href="product.html">Darrell Steward</a></div>
                                        </td>
                                        <td class="f-14 f-w-500">16 Nov, 2024</td>
                                        <td class="f-14 f-w-500">$456.23</td>
                                        <td>
                                            <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name"><a class=" f-14 f-w-500"
                                                    href="product.html">Floyd
                                                    Miles</a></div>
                                        </td>
                                        <td class="f-14 f-w-500">22 Jan, 2024</td>
                                        <td class="f-14 f-w-500">$550.73</td>
                                        <td>
                                            <div class="txt-secondary"><span class="f-w-500 f-13">Failed</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name"><a class=" f-14 f-w-500"
                                                    href="product.html">Ralph
                                                    Edwards</a></div>
                                        </td>
                                        <td class="f-14 f-w-500">31 Dec, 2024</td>
                                        <td class="f-14 f-w-500">$785.26</td>
                                        <td>
                                            <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name"><a class=" f-14 f-w-500"
                                                    href="product.html">Jerome
                                                    Bell</a></div>
                                        </td>
                                        <td class="f-14 f-w-500">16 Nov, 2024</td>
                                        <td class="f-14 f-w-500">$458.14</td>
                                        <td>
                                            <div class="txt-secondary"><span class="f-w-500 f-13">Failed</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name"><a class=" f-14 f-w-500"
                                                    href="product.html">Theresa Webb</a></div>
                                        </td>
                                        <td class="f-14 f-w-500">16 Feb, 2024</td>
                                        <td class="f-14 f-w-500">$263.24</td>
                                        <td>
                                            <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name"><a class=" f-14 f-w-500"
                                                    href="product.html">Courtney Henry</a></div>
                                        </td>
                                        <td class="f-14 f-w-500">01 Nov, 2024</td>
                                        <td class="f-14 f-w-500">$785.14</td>
                                        <td>
                                            <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid">
        <div class="row size-column">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i>
                    {{ session('error') }}

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
        </div>
    </div>

    <div class="modal fade" id="detailModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Session Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body" id="detailModalContent">
                    <div class="p-5 text-center">
                        <i class="fa fa-spinner fa-spin fa-2x"></i>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('own_script')
    <script src="{{ asset('dashboard_assets/assets/js/chart/echart/esl.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/chart/echart/pie-chart/facePrint.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/chart/echart/pie-chart/testHelper.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/chart/echart/pie-chart/custom-transition-texture.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/chart/echart/data/symbols.js') }}"></script>

    <script src="{{ asset('dashboard_assets/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/dashboard/dashboard_3.js') }}"></script>

    <script>
        $(document).on("click", ".btn-detail", function() {
            let id = $(this).data("id");

            $("#detailModalContent").html(`
                <div class="p-5 text-center">
                    <i class="fa fa-spinner fa-spin fa-2x"></i>
                </div>
            `);

            $("#detailModal").modal("show");

            $.ajax({
                url: "/mock-test/" + id + "/show-dashboard",
                method: "GET",
                success: function(res) {
                    $("#detailModalContent").html(res.html);
                },
                error: function() {
                    $("#detailModalContent").html(`
                        <div class="alert alert-danger m-3">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            Failed to load session details.
                        </div>
                    `);
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthContainer = document.getElementById('months-container');
            const monthLabels = monthContainer.querySelectorAll('.month-label');

            // Reset container months
            monthContainer.innerHTML = '';
            monthContainer.style.position = 'relative';
            monthContainer.style.height = '20px';

            @php
                $date = $start->copy()->startOfWeek();
                $currentMonth = '';
                $monthStartCol = 1;
                $lastMonthCol = 1;

                for ($i = 0; $i < 53; $i++) {
                    $weekStart = $date->copy();
                    $monthName = $weekStart->format('M');

                    if ($monthName !== $currentMonth) {
                        if ($currentMonth !== '') {
                            echo "addMonthLabel('{$currentMonth}', {$monthStartCol}, {$lastMonthCol});";
                        }
                        $currentMonth = $monthName;
                        $monthStartCol = $i + 1;
                    }
                    $lastMonthCol = $i + 1;
                    $date->addWeek();
                }

                // Add last month
                if ($currentMonth !== '') {
                    echo "addMonthLabel('{$currentMonth}', {$monthStartCol}, {$lastMonthCol});";
                }
            @endphp

            function addMonthLabel(monthName, startCol, endCol) {
                const label = document.createElement('div');
                label.className = 'month-label';
                label.textContent = monthName;
                label.style.position = 'absolute';
                label.style.left = ((startCol - 1) * 17) + 'px'; // 14px + 3px gap
                label.style.width = ((endCol - startCol + 1) * 17) + 'px';
                monthContainer.appendChild(label);
            }
        });
    </script>
@endsection
