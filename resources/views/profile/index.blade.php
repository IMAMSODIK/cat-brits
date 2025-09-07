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
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="cardheader"></div>
                        <div class="user-image">
                            <div class="avatar"><img alt="" src="../assets/images/user/7.jpg"></div>
                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-envelope"></i>   Email</h6>
                                                <span>Marekjecno@yahoo.com</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-calendar"></i>   BOD</h6><span>02 January 1988</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank" href="">Mark jecno</a></div>
                                        <div class="desc">designer</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-phone"></i>   Contact Us</h6><span>India +91
                                                    123-456-7890</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-location-arrow"></i>   Location</h6><span>B69 Near
                                                    Schoool Demo Home</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="follow">
                                <div class="row">
                                    <div class="col-6 text-md-end border-right">
                                        <div class="follow-num counter">25869</div><span>Follower</span>
                                    </div>
                                    <div class="col-6 text-md-start">
                                        <div class="follow-num counter">659887</div><span>Following</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->
                <!-- user profile second-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media"><img class="img-thumbnail rounded-circle me-3"
                                            src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>Dressing is a way of life. My customers are successful working women. I want people to be
                                afraid of the women I dress. Age is something only in your head or a stereotype. </p>
                            <div class="img-container">
                                <div class="my-gallery" id="aniimated-thumbnials" itemscope="">
                                    <figure itemprop="associatedMedia" itemscope=""><a
                                            href="../assets/images/other-images/profile-style-img3.png"
                                            itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded"
                                                src="../assets/images/other-images/profile-style-img3.png"
                                                itemprop="thumbnail" alt="gallery"></a>
                                        <figcaption itemprop="caption description">Image caption 1</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="like-comment">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label><span
                                            class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label><span
                                            class="ms-2 counter">569</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile second-style end-->
                <!-- user profile third-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media"><img class="img-thumbnail rounded-circle me-3"
                                            src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                                tend to repeat predefined chunks as necessary, making this the first true generator on the
                                Internet.</p>
                            <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                        href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl"
                                        data-size="1600x950"><img class="img-fluid rounded"
                                            src="../assets/images/other-images/profile-style-img.png" itemprop="thumbnail"
                                            alt="gallery"></a>
                                    <figcaption itemprop="caption description">Image caption 1</figcaption>
                                </figure>
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                        href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl"
                                        data-size="1600x950"><img class="img-fluid rounded"
                                            src="../assets/images/other-images/profile-style-img.png" itemprop="thumbnail"
                                            alt="gallery"></a>
                                    <figcaption itemprop="caption description">Image caption 2</figcaption>
                                </figure>
                            </div>
                            <div class="like-comment">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label><span
                                            class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label><span
                                            class="ms-2 counter">569</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile third-style end-->
                <!-- user profile fourth-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media"><img class="img-thumbnail rounded-circle me-3"
                                            src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <p>Contrary to popular belief, is not simply random text. It has roots in a piece of classical
                                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                                words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                                classical literature, discovered the undoubtable source .Contrary to popular belief, Lorem
                                Ipsum is not simply random text. It has roots in a piece of classical Latin literature from
                                45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                                Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                                classical literature, discovered the undoubtable source</p>
                            <div class="like-comment mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item border-right pe-3">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-heart"></i></a>  Like</label><span
                                            class="ms-2 counter">2659</span>
                                    </li>
                                    <li class="list-inline-item ms-2">
                                        <label class="m-0"><a href="#"><i
                                                    class="fa fa-comment"></i></a>  Comment</label><span
                                            class="ms-2 counter">569</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile fourth-style end-->
                <!-- user profile fifth-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media"><img class="img-thumbnail rounded-circle me-3"
                                            src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 col-xl-4">
                                    <div class="my-gallery" id="aniimated-thumbnials-3" itemscope="">
                                        <figure itemprop="associatedMedia" itemscope=""><a
                                                href="../assets/images/blog/img.png" itemprop="contentUrl"
                                                data-size="1600x950"><img class="img-fluid rounded"
                                                    src="../assets/images/blog/img.png" itemprop="thumbnail"
                                                    alt="gallery"></a>
                                            <figcaption itemprop="caption description">Image caption 1</figcaption>
                                        </figure>
                                    </div>
                                    <div class="like-comment mt-4 like-comment-sm-mb">
                                        <ul class="list-inline">
                                            <li class="list-inline-item border-right pe-3">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-heart"></i></a>  Like</label><span
                                                    class="ms-2 counter">2659</span>
                                            </li>
                                            <li class="list-inline-item ms-2">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-comment"></i></a>  Comment</label><span
                                                    class="ms-2 counter">569</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                        up one of the more obscure Latin words, consecteturContrary to popular belief, Lorem
                                        Ipsum is not simply random text. It has roots in a piece of classical Latin
                                        literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                        Latin words, consectetur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile fifth-style end-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="pswp__bg"></div>
                    <div class="pswp__scroll-wrap">
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>
                        <div class="pswp__ui pswp__ui--hidden">
                            <div class="pswp__top-bar">
                                <div class="pswp__counter"></div>
                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>
                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
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
@endsection
