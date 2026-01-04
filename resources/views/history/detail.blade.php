@extends('layouts.template')

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
                                                <img class="img-70 rounded-circle" src="{{ asset('storage') . '/' . $d->foto }}" alt="Profile Picture">
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
                                        <div class="card-body total-project border-b-primary border-2"><span class="f-light f-w-500 f-14">Reading</span>
                                            <div class="project-details"> 
                                                <div class="project-counter"> 
                                                    <h2 class="f-w-600">{{ number_format($summary->reading_avg, 2) }}</h2><small> / {{ $summary->reading_attempt }} Attempts</small>
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
                                        <div class="card-body total-project border-b-primary border-2"><span class="f-light f-w-500 f-14">Listening</span>
                                            <div class="project-details"> 
                                                <div class="project-counter"> 
                                                    <h2 class="f-w-600">{{ number_format($summary->listening_avg, 2) }}</h2><small> / {{ $summary->listening_attempt }} Attempts</small>
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
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Add projects And Upload</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="table-responsive add-project custom-scrollbar">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a class="text-inherit" href="#">Untrammelled prevents </a></td>
                                        <td>28 May 2018</td>
                                        <td><span class="status-icon bg-success"></span> Completed</td>
                                        <td>$56,908</td>
                                        <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-primary btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-pencil"></i> Edit</a><a class="icon"
                                                href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm"
                                                href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a
                                                class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-danger btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-trash"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                                        <td>12 June 2018</td>
                                        <td><span class="status-icon bg-danger"></span> On going</td>
                                        <td>$45,087</td>
                                        <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-primary btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-pencil"></i> Edit</a><a class="icon"
                                                href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm"
                                                href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a
                                                class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-danger btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-trash"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                                        <td>12 July 2018</td>
                                        <td><span class="status-icon bg-warning"></span> Pending</td>
                                        <td>$60,123</td>
                                        <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-primary btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-pencil"></i> Edit</a><a class="icon"
                                                href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm"
                                                href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a
                                                class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-danger btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-trash"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                                        <td>14 June 2018</td>
                                        <td><span class="status-icon bg-warning"></span> Pending</td>
                                        <td>$70,435</td>
                                        <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-primary btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-pencil"></i> Edit</a><a class="icon"
                                                href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm"
                                                href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a
                                                class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-danger btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-trash"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                                        <td>25 June 2018</td>
                                        <td><span class="status-icon bg-success"></span> Completed</td>
                                        <td>$15,987</td>
                                        <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-primary btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-pencil"></i> Edit</a><a class="icon"
                                                href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm"
                                                href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a
                                                class="icon" href="javascript:void(0)"></a><a
                                                class="btn btn-danger btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-trash"></i> Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
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
@endsection
