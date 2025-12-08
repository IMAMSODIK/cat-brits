@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-12">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <h2 class="f-w-600">Task Correction</h2>
                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-light f-w-500 f-14">Manage speaking corrections, essay corrections, and student
                                live test requests</span>

                        </div>
                        <div class="product-sub bg-primary-light">
                            <svg class="invoice-icon">
                                <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#color-swatch') }}"></use>
                            </svg>
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
        <div class="col-12 col-xl-4">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <span class="f-light f-w-500 f-14">Video Speaking Menunggu Koreksi</span>

                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-w-600">12</h2>
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

        <div class="col-12 col-xl-4">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <span class="f-light f-w-500 f-14">Essai Menunggu Koreksi</span>

                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-w-600">12</h2>
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

        <div class="col-12 col-xl-4">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <span class="f-light f-w-500 f-14">Request Video Call Live Test</span>

                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-w-600">12</h2>
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
    </div>

    <div class="row">
        <div class="col-12 col-xxl-4 col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Speaking Test Requests</h4>
                        <p class="f-m-light mt-1">
                            A list of students who submitted speaking tests.
                        </p>
                    </div>
                    <span class="badge bg-danger text-white">
                        12
                    </span>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content">
                            <a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="row">
                                    <div class="col-5 d-flex align-items-center">
                                        <video width="100%" controls>
                                            <source src="student-video.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="col-7">
                                        <div class="list-content">
                                            <h6 class="mb-1">John Doe</h6>
                                            <p class="mb-1 text-muted" style="font-size: 13px;">
                                                <i class="fa fa-calendar"></i>2025-01-14
                                                &nbsp; • &nbsp;
                                                <i class="fa fa-clock"></i>02:13
                                            </p>

                                            <p class="text-primary" style="font-size: 13px;">
                                                Topic: Education and Technology
                                            </p>
                                            <button class="btn btn-sm btn-primary mt-2">
                                                <i class="fas fa-play-circle"></i>
                                                Review and Correct
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="row">
                                    <div class="col-5 d-flex align-items-center">
                                        <video width="100%" controls>
                                            <source src="student-video.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="col-7">
                                        <div class="list-content">
                                            <h6 class="mb-1">John Doe</h6>
                                            <p class="mb-1 text-muted" style="font-size: 13px;">
                                                <i class="fa fa-calendar"></i>2025-01-14
                                                &nbsp; • &nbsp;
                                                <i class="fa fa-clock"></i>02:13
                                            </p>

                                            <p class="text-primary" style="font-size: 13px;">
                                                Topic: Education and Technology
                                            </p>
                                            <button class="btn btn-sm btn-primary mt-2">
                                                <i class="fas fa-play-circle"></i>
                                                Review and Correct
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="row">
                                    <div class="col-5 d-flex align-items-center">
                                        <video width="100%" controls>
                                            <source src="student-video.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="col-7">
                                        <div class="list-content">
                                            <h6 class="mb-1">John Doe</h6>
                                            <p class="mb-1 text-muted" style="font-size: 13px;">
                                                <i class="fa fa-calendar"></i>2025-01-14
                                                &nbsp; • &nbsp;
                                                <i class="fa fa-clock"></i>02:13
                                            </p>

                                            <p class="text-primary" style="font-size: 13px;">
                                                Topic: Education and Technology
                                            </p>
                                            <button class="btn btn-sm btn-primary mt-2">
                                                <i class="fas fa-play-circle"></i>
                                                Review and Correct
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xxl-4 col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Essay Correction Requests</h4>
                        <p class="f-m-light mt-1">
                            A list of students who submitted essays tests.
                        </p>
                    </div>
                    <span class="badge bg-danger text-white">
                        12
                    </span>
                </div>

                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content">

                            <!-- ITEM 1 -->
                            <a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="list-content">
                                            <h6 class="mb-1">John Doe</h6>

                                            <p class="mb-1 text-muted" style="font-size: 13px;">
                                                <i class="fa fa-calendar"></i> 2025-01-14
                                                &nbsp; • &nbsp;
                                                <i class="fa fa-clock"></i> 350 words
                                            </p>

                                            <p class="text-primary" style="font-size: 13px;">
                                                Topic: The Impact of Technology in Education
                                            </p>

                                            <button class="btn btn-sm btn-primary mt-2">
                                                <i class="fas fa-edit"></i>
                                                Review and Correct Document
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="list-content">
                                            <h6 class="mb-1">Jane Smith</h6>

                                            <p class="mb-1 text-muted" style="font-size: 13px;">
                                                <i class="fa fa-calendar"></i> 2025-01-10
                                                &nbsp; • &nbsp;
                                                <i class="fa fa-clock"></i> 287 words
                                            </p>

                                            <p class="text-primary" style="font-size: 13px;">
                                                Topic: Climate Change Solutions
                                            </p>

                                            <button class="btn btn-sm btn-primary mt-2">
                                                <i class="fas fa-edit"></i>
                                                Review and Correct Document
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xxl-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Live Video Call Test</h4>
                    <p class="f-m-light mt-1">Manage student requests and accepted live test sessions.</p>
                </div>

                <div class="card-body">
                    <ul class="nav nav-tabs" id="videoCallTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="request-tab" data-bs-toggle="tab"
                                data-bs-target="#requests" type="button" role="tab">
                                Requests & Acceptance
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="accepted-tab" data-bs-toggle="tab"
                                data-bs-target="#acceptedSessions" type="button" role="tab">
                                Accepted Sessions
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content mt-3" id="videoCallTabContent">
                        <div class="tab-pane fade show active" id="requests" role="tabpanel">
                            <div class="vertical-scroll scroll-demo scroll-b-none">
                                <div class="list-group main-lists-content">
                                    <a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                        <div class="row">
                                            <div class="col-12 col-md-8">
                                                <h6 class="mb-1">John Doe</h6>

                                                <p class="mb-1 text-muted" style="font-size: 13px;">
                                                    <i class="fa fa-calendar"></i> Request Date: 2025-01-14
                                                </p>

                                                <p class="text-primary" style="font-size: 13px;">
                                                    Preferred Time: 19:30 – 20:00
                                                </p>
                                            </div>
                                            <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                                                <button class="btn btn-sm btn-success mb-2">
                                                    <i class="fa fa-check"></i> Accept
                                                </button>

                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-times"></i> Reject
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="acceptedSessions" role="tabpanel">
                            <div class="vertical-scroll scroll-demo scroll-b-none">
                                <div class="list-group main-lists-content">
                                    <a class="list-group-item list-group-item-action list-hover-primary" href="#">
                                        <div class="row">
                                            <div class="col-12 col-md-8">
                                                <h6 class="mb-1">John Doe</h6>

                                                <p class="mb-1 text-muted" style="font-size: 13px;">
                                                    <i class="fa fa-calendar"></i> Scheduled: 2025-01-17
                                                    &nbsp; • &nbsp;
                                                    <i class="fa fa-clock"></i> 19:30 – 20:00
                                                </p>

                                                <p class="text-primary" style="font-size: 13px;">
                                                    Meeting Type: Mock Speaking Test
                                                </p>
                                            </div>
                                            <div class="col-12 col-md-4 d-flex align-items-center justify-content-end">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-video"></i> Join Session
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('own_script')
    <script src="{{ asset('own_assets/scripts/history.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/input-groups.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/product-tab.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/scrollable/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/scrollable/scrollable-custom.js') }}"></script>
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
@endsection
