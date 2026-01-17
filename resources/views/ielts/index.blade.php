@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">
    <style>
        .boostup-name {
            height: 30px;
        }
        .product-wrapper-grid {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 15px 0;
        }

        /* Untuk grid yang lebih padat */
        .data-ctr {
            margin: 0 -8px;
            /* Mengurangi margin untuk kepadatan lebih */
        }

        .data-ctr>div[class*="col-"] {
            padding-left: 8px;
            padding-right: 8px;
        }
    </style>

    <style>
        /* CARD UTAMA */
        .boost-up-card {
            position: relative;
            height: 100%;
            border-radius: 18px;
            cursor: pointer;
            transition: all 0.35s ease;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            background: radial-gradient(circle, #306abc 80%, #4274BA 50%)
        }

        /* HOVER EFFECT */
        .boost-up-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.25);
        }

        /* CONTENT */
        .boost-up-card .p-4 {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* BUTTON */
        .btn-showcase {
            margin-top: auto;
        }

        .btn-showcase .btn {
            padding: 8px 18px;
            font-size: 14px;
            border-radius: 10px;
            backdrop-filter: blur(6px);
            transition: all 0.3s ease;
        }

        /* BUTTON HOVER */
        .boost-up-card:hover .btn {
            background: rgba(255, 255, 255, 0.15);
            border-color: #fff;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>IELTS Sets</h4>
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
            <div class="product-wrapper-grid">
                <div class="row data-ctr">
                    @foreach ($sets as $set)
                        <div class="col-6 col-lg-3 col-xl-3 col-md-3 mb-3">
                            <div class="card boost-up-card overflow-hidden"
                                onclick="location.href='/ielts/categories?set-id={{ $set->kode }}'">
                                <div class="p-4">
                                    <div class="row">
                                        <h6 class="text-white f-20 f-w-700 mb-2">{{ $set->name }}</h6>
                                    </div>
                                    <div class="img-boostup"><img class="img-boostup-img-1"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                            alt="boostup"><img class="img-boostup-img-2"
                                            src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                            alt="boostup"></div>
                                    <div class="btn-showcase text-start">
                                        <button class="btn btn-pill btn-outline-light-2x b-r-8" type="button">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
