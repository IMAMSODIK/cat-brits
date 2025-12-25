@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">

    <style>
        .bg-reading {
            background-image: url('{{ asset($set->thumbnail_reading) }}');
        }

        .bg-listening {
            background-image: url('{{ asset($set->thumbnail_listening) }}');
        }

        .bg-writing {
            background-image: url('{{ asset($set->thumbnail_writing) }}');
        }

        .bg-speaking {
            background-image: url('{{ asset($set->thumbnail_speaking) }}');
        }

        .boost-up-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,
                    rgba(0, 0, 0, 0.66),
                    rgba(0, 0, 0, 0.22));
            z-index: 0;
        }

        .boost-up-card .content {
            position: relative;
            z-index: 1;
        }

        .boost-up-card {
            position: relative;
            min-height: 150px;
            background-size: cover;
            background-position: center;
            border-radius: 14px;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        /* Overlay */
        .boost-up-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, .65),
                    rgba(0, 0, 0, .35));
            z-index: 0;
        }

        .boost-up-card>div {
            position: relative;
            z-index: 1;
        }

        /* Card hover */
        .boost-up-card:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .35);
        }

        /* Button */
        .take-test-btn {
            background: rgba(255, 255, 255, .15);
            border: 1px solid rgba(255, 255, 255, .5);
            color: #fff;
            padding: 8px 18px;
            border-radius: 30px;
            font-weight: 600;
            transition: all .3s ease;
        }

        /* Button hover */
        .boost-up-card:hover .take-test-btn {
            background: #ffffff;
            color: #000;
            transform: translateX(5px);
        }
    </style>
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12">
                <h4>{{ $set->name }}</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid product-wrapper sidebaron">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @else
            <h5 class="mb-3">Practice</h5>
            <div class="product-grid">
                <div class="product-wrapper-grid" style="opacity: 1;">
                    <div class="row data-ctr">
                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/practice?set-id={{ $set->kode }}&section=reading'">
                            <div class="card boost-up-card bg-reading overflow-hidden">
                                <div class="p-4 content">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">
                                            IELTS READING TEST
                                        </h6>
                                    </div>

                                    <div class="img-boostup">
                                        <img class="img-boostup-img-1"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                            alt="boostup">
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/practice?set-id={{ $set->kode }}&section=listening'">
                            <div class="card boost-up-card bg-listening overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">IELTS LISTENING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                            alt="boostup"></div>

                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/practice?set-id={{ $set->kode }}&section=speaking'">
                            <div class="card boost-up-card bg-speaking overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">IELTS SPEAKING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                            alt="boostup"></div>

                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/practice?set-id={{ $set->kode }}&section=writing'">
                            <div class="card boost-up-card bg-writing overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">IELTS WRITING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                            alt="boostup"></div>
                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h5 class="mb-3">Mock Test</h5>
            <div class="product-grid">
                <div class="product-wrapper-grid" style="opacity: 1;">
                    <div class="row data-ctr">
                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/mock-test/instructuion?set-id={{ $set->kode }}&section=reading'">
                            <div class="card boost-up-card bg-reading overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">IELTS READING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-2"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                            alt="boostup"></div>

                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/mock-test/instructuion?set-id={{ $set->kode }}&section=listening'">
                            <div class="card boost-up-card bg-listening overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">IELTS LISTENING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-2"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                            alt="boostup"></div>

                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/mock-test/instructuion?set-id={{ $set->kode }}&section=speaking'">
                            <div class="card boost-up-card bg-speaking overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">IELTS SPEAKING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-2"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                            alt="boostup"></div>
                                    
                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;"
                            onclick="location.href='/ielts/mock-test/instructuion?set-id={{ $set->kode }}&section=writing'">
                            <div class="card boost-up-card bg-writing overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2 z-1">IELTS WRITING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-2"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                            alt="boostup"></div>

                                    <div class="mt-4">
                                        <button class="btn take-test-btn w-100">
                                            Take Test →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/input-groups.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/product-tab.js') }}"></script>
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
