@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">

    <style>
        .user-cell {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 5px 0;
        }

        .user-photo {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e0e0e0;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .user-name {
            font-weight: 600;
            color: #222;
        }

        .user-email {
            font-size: 0.9em;
            color: #666;
        }

        #filter-section fieldset {
            border: 1px solid #dee2e6 !important;
            background-color: #fafafa;
            transition: background 0.3s ease;
        }

        #filter-section fieldset:hover {
            background-color: #f5f9ff;
        }

        #filter-section legend {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        #filter-section .form-check-label {
            font-weight: 500;
        }

        #filter-section select,
        #filter-section input[type="date"] {
            border-radius: 8px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-4">
                    <h4>{{ $pageTitle }}</h4>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <button class="btn btn-primary" id="filter">
                        <i class="fa fa-filter me-2"></i> Filter
                    </button>
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
            <div class="card shadow-sm d-none" id="filter-section">
                <div class="card-header bg-light border-bottom">
                    <h5 class="mb-0 text-primary fw-bold">
                        <i class="fa fa-filter me-2"></i> Filter Options
                    </h5>
                </div>
                <div class="card-body">
                    <form id="filterForm">
                        <!-- CATEGORY FILTER -->
                        <fieldset class="border rounded p-3 mb-4">
                            <legend class="w-auto px-3 text-primary fw-semibold">
                                <i class="fa fa-list me-1"></i> Category
                            </legend>
                            <div class="row g-2">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="category[]" value="listening"
                                            id="catListening">
                                        <label class="form-check-label" for="catListening">Listening</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="category[]" value="speaking"
                                            id="catSpeaking">
                                        <label class="form-check-label" for="catSpeaking">Speaking</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="category[]" value="reading"
                                            id="catReading">
                                        <label class="form-check-label" for="catReading">Reading</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="category[]" value="writing"
                                            id="catWriting">
                                        <label class="form-check-label" for="catWriting">Writing</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- TYPE FILTER -->
                        <fieldset class="border rounded p-3 mb-4">
                            <legend class="w-auto px-3 text-primary fw-semibold">
                                <i class="fa fa-sliders me-1"></i> Type
                            </legend>
                            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type[]" value="two_choices"
                                            id="typeTwoChoices">
                                        <label class="form-check-label" for="typeTwoChoices">Two Choices</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type[]" value="oc"
                                            id="typeOC">
                                        <label class="form-check-label" for="typeOC">One Choice (OC)</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type[]" value="nc"
                                            id="typeNC">
                                        <label class="form-check-label" for="typeNC">No Choice (NC)</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type[]" value="essay"
                                            id="typeEssay">
                                        <label class="form-check-label" for="typeEssay">Essay</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type[]" value="matching"
                                            id="typeMatching">
                                        <label class="form-check-label" for="typeMatching">Matching</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <!-- SETS FILTER -->
                        <fieldset class="border rounded p-3 mb-4">
                            <legend class="w-auto px-3 text-primary fw-semibold">
                                <i class="fa fa-layer-group me-1"></i> Sets
                            </legend>
                            <div class="form-group">
                                <select name="set" id="setSelect" class="form-select">
                                    <option value="">-- Select Set --</option>
                                    <option value="set1">Set 1</option>
                                    <option value="set2">Set 2</option>
                                    <option value="set3">Set 3</option>
                                </select>
                            </div>
                        </fieldset>

                        <!-- DATE RANGE FILTER -->
                        <fieldset class="border rounded p-3 mb-4">
                            <legend class="w-auto px-3 text-primary fw-semibold">
                                <i class="fa fa-calendar me-1"></i> Date Range
                            </legend>
                            <div class="row g-2 align-items-end">
                                <div class="col-md-6">
                                    <label for="dateStart" class="form-label fw-semibold">From</label>
                                    <input type="date" id="dateStart" name="date_start" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="dateEnd" class="form-label fw-semibold">To</label>
                                    <input type="date" id="dateEnd" name="date_end" class="form-control">
                                </div>
                            </div>
                        </fieldset>

                        <!-- ACTION BUTTONS -->
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-3">
                            <button type="reset" class="btn btn-outline-secondary" id="reset-filter">
                                <i class="fa fa-undo me-2"></i> Reset
                            </button>
                            <button type="button" class="btn btn-primary" id="apply-filter">
                                <i class="fa fa-check me-2"></i> Apply Filter
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="product-grid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-3" id="historyContainer"></div>
                                <div class="text-center mt-4">
                                    <button id="loadMoreBtn" class="btn btn-outline-primary">
                                        <i class="fa fa-chevron-down me-1"></i> Load More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Enter Teacher Email</label>
                                            <input type="text" class="form-control input-air-primary" id="email"
                                                placeholder="Enter Teacher Name">
                                        </div>
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
                                            <label class="form-label" for="edit_foto">Upload Teacher Photo</label>
                                            <input type="file" class="form-control input-air-primary" id="edit_foto"
                                                accept="image/*">
                                            <div class="mt-3">
                                                <img id="preview-edit_foto" src="#" alt="Photo Preview"
                                                    class="img-thumbnail d-none" style="max-width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_nama">Enter Teacher Name</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_nama"
                                                placeholder="Enter Teacher Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_email">Enter Teacher Email</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_email"
                                                placeholder="Enter Teacher Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end" style="width: 100%">
                                <input class="btn btn-light" type="button" id="cancel-edit" value="Cancel">
                                <button class="btn btn-primary" type="button" id="update">Update</button>
                                <button class="btn btn-warning" type="button" id="reset">Reset Pasword</button>
                                <button class="btn btn-danger" type="button" id="delete">Deactivate</button>
                                <button class="btn btn-info" type="button" id="activate">Activate</button>
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
    <script src="{{ asset('own_assets/scripts/history.js') }}"></script>
@endsection
