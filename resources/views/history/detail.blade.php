@extends('layouts.template')

@section('own_style')
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
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>User Profile</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="media">
                                            @if ($user->foto)
                                                <img class="img-70 rounded-circle"
                                                    src="{{ asset('storage') . '/' . $user->foto }}" alt="Profile Picture">
                                            @else
                                                <img class="img-70 rounded-circle" src="{{ asset('own_assets/images/avatar.png') }}" alt="Profile Picture">
                                            @endif

                                            <div class="media-body">
                                                <h5 class="mb-1">{{ $user->name }}</h5>
                                                <p>{{ ucfirst($user->role) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" readonly value="{{ $user->email }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <form class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Mock Test Statistics</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card o-hidden small-widget">
                                        <div class="card-body total-project border-b-primary border-2"><span
                                                class="f-light f-w-500 f-14">Reading</span>
                                            <div class="project-details">
                                                <div class="project-counter">
                                                    <h2 class="f-w-600">{{ number_format($summary->reading_avg, 2) }}</h2>
                                                    <small> / {{ $summary->reading_attempt }} Attempts</small>
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

                                <div class="col-6">
                                    <div class="card o-hidden small-widget">
                                        <div class="card-body total-project border-b-primary border-2"><span
                                                class="f-light f-w-500 f-14">Listening</span>
                                            <div class="project-details">
                                                <div class="project-counter">
                                                    <h2 class="f-w-600">{{ number_format($summary->listening_avg, 2) }}</h2>
                                                    <small> / {{ $summary->listening_attempt }} Attempts</small>
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
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="card p-2">
                        <div class="card-header">
                            <h4 class="card-title mb-0">{{$user->name}}'s Activities</h4>
                        </div>
                        <div class="card-body">
                            <div class="vertical-scroll scroll-demo scroll-b-none">
                                <div class="activity-list d-flex flex-column gap-3">

                                    @forelse ($studentActivities as $activities)
                                        <div class="card shadow-sm border-0 w-100 mb-0">
                                            <div class="card-body p-3">

                                                <!-- Header -->
                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                    <img src="{{ $activities->student->foto
                                                        ? asset('storage/' . $activities->student->foto)
                                                        : asset('own_assets/images/avatar.png') }}"
                                                        class="rounded-circle" width="45" height="45" alt="User">

                                                    <div class="flex-grow-1">
                                                        <div class="fw-semibold">{{ $activities->student->name }}
                                                        </div>
                                                        <small class="text-primary">{{ $activities->setSoal->name }} |
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
                                    @empty
                                        <div class="text-center text-muted py-3">
                                            No recent activity
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card p-4">
                        <div class="card-header">
                            <h4>Student Activity (Last 12 Months)</h4>
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
                                                    $count = $activities[$date->toDateString()] ?? 0;

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
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="tambah-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Add Teacher</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="foto">Upload Teacher Photo</label>
                                            <input type="file" class="form-control input-air-primary" id="foto"
                                                accept="image/*">
                                            <div class="mt-3">
                                                <img id="preview-foto" src="#" alt="Photo Preview"
                                                    class="img-thumbnail d-none" style="max-width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="nama">Enter Teacher Name</label>
                                            <input type="text" class="form-control input-air-primary" id="nama"
                                                placeholder="Enter Teacher Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Enter Teacher Email</label>
                                            <input type="text" class="form-control input-air-primary" id="email"
                                                placeholder="Enter Teacher Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Enter Teacher Username</label>
                                            <input type="text" class="form-control input-air-primary" id="username"
                                                placeholder="Enter Teacher Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="token">Generate Teacher's Token</label>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-8">
                                        <input type="text" class="form-control input-air-primary" id="token"
                                            placeholder="Teacher's Token">
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-success w-100" id="generate-token">Generate Token</button>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-light" type="button" id="cancel-add" value="Cancel">
                                <button class="btn btn-primary me-3" type="button" id="store">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="edit-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Edit Data</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <input type="hidden" name="" id="id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_judul">Nama</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_judul"
                                                placeholder="Nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_deskripsi">Deskripsi</label>
                                            <div class="toolbar-box form-control input-air-primary">
                                                <div id="toolbar-desc"><span class="ql-formats"></span></div>
                                                <div class="quill-paragraph" id="edit_deskripsi"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-light" type="button" id="cancel-edit" value="Cancel">
                                <button class="btn btn-primary me-3" type="button" id="update">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-alert" id="alert" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenter1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img id="alert-image"></li>
                        </ul>
                        <h4 class="text-center pb-2" id="alert-title"></h4>
                        <p class="text-center" id="alert-message"></p>
                        <button class="btn btn-secondary d-flex m-auto" id="is-error" type="button"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img id="alert-image" src="{{ asset('own_assets/icon/confirm.gif') }}" width="300px">
                            </li>
                        </ul>
                        <h4 class="text-center pb-2" id="alert-title">Hapus Data</h4>
                        <p class="text-center" id="alert-message">Apakah anda yakin ingin menghapus data?</p>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-end">
                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-md-6 d-flex justify-content-start">
                                <button class="btn btn-danger" id="delete-confirmed" type="button"
                                    data-bs-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('own_script')
    <script src="{{ asset('own_assets/scripts/teacher.js') }}"></script>
    <script>
        document.getElementById('foto').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('preview-foto');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            }
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
