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
            <div class="card d-none" id="filter-section">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="filter-status">
                                    <option value="">-- All --</option>
                                    <option value="1">Active</option>
                                    <option value="0">Nonactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" id="apply-filter">
                                <i class="fa fa-check me-2"></i> Apply Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-grid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            {{-- <div class="card-header pb-0 card-no-border">
                                <h4>Zero Configuration</h4>
                            </div> --}}
                            <div class="card-body">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Student</th>
                                                <th class="text-center">Category</th>
                                                <th class="text-center">Type</th>
                                                <th class="text-center">Set Information</th>
                                                <th class="text-center">Score</th>
                                                <th class="text-center">Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $index = 1;
                                            @endphp
                                            @foreach ($histories as $h)
                                                <tr>
                                                    <td>{{ $index++ }}</td>
                                                    <td>
                                                        <div class="user-cell">
                                                            <img src="{{($h->student->foto) ? asset('storage/foto_profile') . '/' . $h->student->foto : asset('own_assets/images/avatar.png')}}" alt="Foto User"
                                                                class="user-photo">
                                                            <div class="user-info">
                                                                <div class="user-name">{{$h->student->name}}</div>
                                                                <div class="user-email">{{$h->student->email}}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($h->kategori == 'reading')
                                                            <span class="badge text-bg-primary">{{ucfirst($h->kategori)}}</span>
                                                        @elseif ($h->kategori == 'writing')
                                                            <span class="badge text-bg-info">{{ucfirst($h->kategori)}}</span>
                                                        @elseif ($h->kategori == 'listening')
                                                            <span class="badge text-bg-success">{{ucfirst($h->kategori)}}</span>
                                                        @elseif ($h->kategori == 'speaking')
                                                            <span class="badge text-bg-warning">{{ucfirst($h->kategori)}}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @switch($h->tipe)
                                                            @case('tfng')
                                                                <span class="badge rounded-pill badge-primary">True / False / Not Given</span>
                                                                @break
                                                            @case('ynng')
                                                                <span class="badge rounded-pill badge-primary">Yes / No / Not Given</span>
                                                                @break
                                                            @case('mse')
                                                                <span class="badge rounded-pill badge-primary">Matching Sentence Ending</span>
                                                                @break
                                                            @case('oc')
                                                                <span class="badge rounded-pill badge-primary">One Choice</span>
                                                                @break
                                                            @case('mh')
                                                                <span class="badge rounded-pill badge-primary">Matching Headings</span>
                                                                @break
                                                            @case('tc')
                                                                <span class="badge rounded-pill badge-primary">Table Completion</span>
                                                                @break
                                                            @case('sa')
                                                                <span class="badge rounded-pill badge-primary">Short Answer</span>
                                                                @break
                                                            @case('nc')
                                                                <span class="badge rounded-pill badge-primary">Note Completion</span>
                                                                @break
                                                            @case('tc')
                                                                <span class="badge rounded-pill badge-primary">Table Completion</span>
                                                                @break
                                                            @case('two_choices')
                                                                <span class="badge rounded-pill badge-primary">Two Choices</span>
                                                                @break
                                                            @case('one_choices')
                                                                <span class="badge rounded-pill badge-primary">one Choices</span>
                                                                @break
                                                            @default
                                                                <span class="badge rounded-pill badge-primary">Unknown</span>
                                                        @endswitch
                                                    </td>
                                                    <td>
                                                        @if($h->setSoal)
                                                            <strong>{{ $h->setSoal->name }}</strong><br>
                                                        @else
                                                            <em class="text-muted">Set not found</em>
                                                        @endif
                                                    </td>
                                                    <td>{{$h->score}}/{{ $h->detailHistories->count() }}</td>
                                                    <td class="text-center">
                                                        {{ $h->created_at->format('d F Y') }} <br>
                                                        {{ $h->created_at->format('H:i') }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
