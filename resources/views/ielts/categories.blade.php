@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>{{ $title }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid product-wrapper sidebaron">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @else
            <h5>Practice</h5>
            <div class="product-grid">
                <div class="product-wrapper-grid" style="opacity: 1;">
                    <div class="row data-ctr">
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/practice?set-id={{ $set_id }}&section=reading'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS READING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/practice?set-id={{ $set_id }}&section=listening'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS LISTENING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/practice?set-id={{ $set_id }}&section=speaking'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS SPEAKING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/practice?set-id={{ $set_id }}&section=writing'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS WRITING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <hr>
            <h5>Mock Test</h5>
            <div class="product-grid">
                <div class="product-wrapper-grid" style="opacity: 1;">
                    <div class="row data-ctr">
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/mock-test?set-id={{ $set_id }}&section=reading'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS READING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/mock-test?set-id={{ $set_id }}&section=listening'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS LISTENING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/mock-test?set-id={{ $set_id }}&section=speaking'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS SPEAKING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3" style="cursor: pointer;" onclick="location.href='/ielts/mock-test?set-id={{ $set_id }}&section=writing'">
                            <div class="card boost-up-card overflow-hidden">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-30 f-w-700 mb-2 z-1">IELTS WRITING TEST</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup1.png')}}" alt="boostup"><img
                                            class="img-boostup-img-2" src="{{asset('dashboard_assets/assets/images/dashboard-3/boostup2.png')}}"
                                            alt="boostup"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="modal fade modal-alert" id="alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
        aria-hidden="true">
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
