@extends('layouts.template')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Teachers</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button class="btn btn-success" id="tambah-data">Add Teacher</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @else
                                <div class="table-responsive custom-scrollbar">
                                    <table class="display" id="data-table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%; " class="text-center">No. </th>
                                                <th style="">Teacher</th>
                                                <th style="">Email</th>
                                                <th style="">Token</th>
                                                <th style="width: 10%; " class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $index = 1; @endphp
                                            @foreach ($data as $d)
                                                <tr>
                                                    <td style="" class="text-center">{{ $index++ }}</td>
                                                    <td class="py-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-3">
                                                                <img src="{{ $d->foto ? asset('storage/profile') . '/' . $d->foto : asset('own_assets/images/avatar.png') }}"
                                                                    alt="User Photo" class="rounded"
                                                                    style="width: 60px; height: 60px; object-fit: cover;">
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <strong>{{ $d->name }}</strong>
                                                                <small class="text-muted">{{ '@' . $d->username }}</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="">{{ $d->email }}</td>
                                                    <td style="">{{ $d->token }}</td>
                                                    <td class="text-center">
                                                        <ul class="action d-flex justify-content-center">
                                                            <li class="edit" data-id="{{ $d->id }}"> <a
                                                                    href="#"><i class="icon-pencil-alt"
                                                                        style="font-size: 25px"></i></a></li>
                                                            <li class="delete" data-id="{{ $d->id }}"><a
                                                                    href="#"><i class="icon-trash"
                                                                        style="font-size: 25px"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
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
                                            <input type="file" class="form-control input-air-primary" id="foto" accept="image/*">
                                            <div class="mt-3">
                                                <img id="preview-foto" src="#" alt="Photo Preview" class="img-thumbnail d-none" style="max-width: 150px;">
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
                                        <input type="text" class="form-control input-air-primary" id="token" placeholder="Teacher's Token">
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
        document.getElementById('foto').addEventListener('change', function (event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('preview-foto');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            }
        });
    </script>
@endsection
