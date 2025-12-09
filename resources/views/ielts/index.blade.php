@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">
    <style>
        .product-wrapper-grid {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 15px 0;
        }

        .custom-card {
            height: 260px;
            /* Diperkecil dari 320px */
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.25, 0.8, 0.25, 1);
            border-radius: 10px;
            /* Diperkecil dari 12px */
            border: none;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.07);
            /* Shadow lebih ringan */
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        /* Hover effect */
        .custom-card:hover {
            transform: translateY(-5px);
            /* Efek hover lebih kecil */
            box-shadow: 0 10px 20px rgba(33, 107, 212, 0.12);
            /* Shadow lebih ringan */
        }

        /* Card header dengan ukuran lebih kecil */
        .custom-card .card-header {
            background: linear-gradient(90deg, #216bd4 0%, #4a90e2 100%);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            /* Diperkecil */
            padding: 15px 12px;
            /* Padding diperkecil */
            border-bottom: none;
            position: relative;
            overflow: hidden;
            min-height: 70px;
            /* Tinggi header dikurangi */
            display: flex;
            align-items: center;
        }

        .custom-card .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
        }

        .card-title {
            font-weight: 700;
            font-size: 1.1rem;
            /* Font lebih kecil */
            margin: 0;
            position: relative;
            z-index: 1;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Maksimal 2 baris */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Card body yang lebih kompak */
        .custom-card .card-body {
            padding: 15px 12px;
            /* Padding diperkecil */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card-text {
            color: #555;
            line-height: 1.5;
            font-size: 0.9rem;
            /* Font lebih kecil */
            margin-bottom: 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Jumlah baris dikurangi */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Card footer yang lebih kecil */
        .custom-card .card-footer {
            background-color: rgba(248, 249, 255, 0.9);
            border-top: 1px solid rgba(74, 144, 226, 0.15);
            padding: 12px 12px;
            /* Padding diperkecil */
            border-radius: 0 0 10px 10px;
            /* Diperkecil */
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 55px;
            /* Tinggi footer dikurangi */
        }

        .set-code {
            font-weight: 600;
            color: #216bd4;
            font-size: 0.85rem;
            /* Font lebih kecil */
            background: white;
            padding: 4px 10px;
            /* Padding lebih kecil */
            border-radius: 15px;
            /* Border radius lebih kecil */
            border: 1px solid rgba(33, 107, 212, 0.2);
        }

        .access-btn {
            color: #4a90e2;
            font-size: 0.8rem;
            /* Font lebih kecil */
            font-weight: 600;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }

        .access-btn:hover {
            color: #216bd4;
        }

        .access-btn i {
            margin-left: 4px;
            font-size: 0.8rem;
            /* Ikon lebih kecil */
            transition: transform 0.2s ease;
        }

        .custom-card:hover .access-btn i {
            transform: translateX(3px);
        }

        /* Responsive adjustments untuk card kecil */
        @media (max-width: 768px) {
            .custom-card {
                height: 240px;
                /* Lebih kecil di tablet */
            }

            .card-title {
                font-size: 1rem;
            }

            .card-text {
                font-size: 0.85rem;
                -webkit-line-clamp: 3;
            }

            .custom-card .card-header {
                padding: 12px 10px;
                min-height: 65px;
            }
        }

        @media (max-width: 576px) {
            .col-6 {
                padding-left: 6px;
                padding-right: 6px;
            }

            .custom-card {
                height: 220px;
                /* Lebih kecil di mobile */
                margin-bottom: 12px;
            }

            .custom-card .card-header {
                padding: 10px 8px;
                min-height: 60px;
            }

            .card-title {
                font-size: 0.95rem;
                -webkit-line-clamp: 2;
            }

            .custom-card .card-body {
                padding: 12px 8px;
            }

            .card-text {
                font-size: 0.82rem;
                -webkit-line-clamp: 2;
                /* Lebih sedikit baris di mobile */
            }

            .custom-card .card-footer {
                padding: 10px 8px;
                min-height: 50px;
            }

            .set-code {
                font-size: 0.8rem;
                padding: 3px 8px;
            }

            .access-btn {
                font-size: 0.75rem;
            }
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
                        <div class="col-6 col-md-4">
                            <div class="card custom-card"
                                onclick="location.href='/ielts/categories?set-id={{ $set->kode }}'">
                                <div class="card-header">
                                    <h5 class="card-title">{{ $set->name }}</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $set->thumbnail }}</p>
                                </div>
                                <div class="card-footer">
                                    <span class="access-btn">View <i class="fas fa-arrow-right"></i></span>
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
