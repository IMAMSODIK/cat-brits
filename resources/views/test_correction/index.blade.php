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
                            <h2 class="f-w-600">{{ $video_request->count() }}</h2>
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
                            <h2 class="f-w-600">{{ $writing_request->count() }}</h2>
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
                        {{ $video_request->count() }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content">

                            @foreach ($video_request as $v)
                                <div class="list-group-item list-group-item-action list-hover-primary"
                                    style="cursor: pointer" data-id="{{ $v->id }}"
                                    data-video="{{ asset('storage/recordings/' . $v->video) }}"
                                    data-student="{{ $v->student->name }}">
                                    <div class="row">
                                        <div class="col-5 d-flex align-items-center">
                                            <video width="100%" controls class="preview-video"
                                                data-duration-target="duration-{{ $v->id }}">
                                                <source src="{{ asset('storage/recordings/' . $v->video) }}"
                                                    type="video/webm">
                                            </video>
                                        </div>

                                        <div class="col-7">
                                            <div class="list-content">
                                                <h6 class="mb-1">{{ $v->student->name }}</h6>

                                                <p class="mb-1 text-muted" style="font-size:13px;">
                                                    <i class="fa fa-calendar"></i> {{ $v->created_at->format('Y-m-d') }}
                                                    &nbsp; • &nbsp;
                                                    <i class="fa fa-clock"></i>
                                                    <span id="duration-{{ $v->id }}">Loading…</span>
                                                </p>

                                                <p class="text-primary" style="font-size: 13px;">
                                                    Topic: {{ $v->setSoal->title }}
                                                </p>

                                                <button class="btn btn-sm btn-primary mt-2">
                                                    <i class="fas fa-play-circle"></i> Review and Correct
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach


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
                        {{ $writing_request->count() }}
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


    <div class="modal fade" id="assessmentModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Video Assessment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <video id="modalVideoPlayer" width="100%" controls class="mb-3">
                        <source id="modalVideoSource" src="" type="video/mp4">
                    </video>

                    <form id="assessmentForm">

                        <input type="hidden" name="video_id" id="video_id">

                        <h5>Fluency & Coherence</h5>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="fc_repetition"> Repetition</div>
                            <div class="col-3"><input type="checkbox" name="fc_hesitation"> Hesitation</div>
                            <div class="col-3"><input type="checkbox" name="fc_speech_rate"> Speech Rate</div>
                            <div class="col-3"><input type="checkbox" name="fc_connectives"> Connectives</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="fc_discourse_markers"> Discourse Markers
                            </div>
                            <div class="col-3"><input type="checkbox" name="fc_relevant_answers"> Relevant Answers</div>
                            <div class="col-3">
                                Band:
                                <input type="number" step="0.1" max="9" name="fc_band"
                                    class="form-control">
                            </div>
                        </div>

                        <hr>

                        <h5>Lexical Resource</h5>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="lr_range_vocab"> Range of vocab</div>
                            <div class="col-3"><input type="checkbox" name="lr_idiomatic"> Idiomatic</div>
                            <div class="col-3"><input type="checkbox" name="lr_less_common"> Less common</div>
                            <div class="col-3"><input type="checkbox" name="lr_collocation"> Collocation</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="lr_paraphrase"> Paraphrase</div>
                            <div class="col-3">
                                Band:
                                <input type="number" step="0.1" max="9" name="lr_band"
                                    class="form-control">
                            </div>
                        </div>

                        <hr>

                        <h5>Grammar Range & Accuracy</h5>
                        <div class="row mb-3">
                            <div class="col-4"><input type="checkbox" name="gra_range_structure"> Range of structure
                            </div>
                            <div class="col-4"><input type="checkbox" name="gra_error_free"> Error-free</div>
                            <div class="col-4"><input type="checkbox" name="gra_grammar_features"> Grammar features
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            Band:
                            <input type="number" step="0.1" max="9" name="gra_band" class="form-control">
                        </div>

                        <hr>

                        <h5>Pronunciation</h5>
                        <div class="row mb-3">
                            <div class="col-4"><input type="checkbox" name="pr_features"> Features</div>
                            <div class="col-4"><input type="checkbox" name="pr_understood"> Easy to understand</div>
                            <div class="col-4">
                                Band:
                                <input type="number" step="0.1" max="9" name="pr_band"
                                    class="form-control">
                            </div>
                        </div>

                        <h5>Remark</h5>
                        <textarea class="form-control mb-3" name="remark" rows="4"></textarea>

                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" id="saveAssessmentBtn">Save Assessment</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('own_script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk memformat durasi
            function formatDuration(seconds) {
                const minutes = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${minutes}:${secs.toString().padStart(2, '0')}`;
            }

            // Fungsi untuk menangani durasi video
            function handleVideoDuration(video) {
                const targetId = $(video).data('duration-target');
                const durationSpan = $('#' + targetId);

                // Jika metadata sudah dimuat
                if (video.readyState >= 1) {
                    updateDuration(video, durationSpan);
                } else {
                    // Tunggu metadata dimuat
                    $(video).on('loadedmetadata', function() {
                        updateDuration(this, durationSpan);
                    });

                    // Fallback jika error
                    $(video).on('error', function() {
                        durationSpan.text('N/A');
                    });

                    // Timeout setelah 3 detik
                    setTimeout(() => {
                        if (durationSpan.text() === 'Loading…') {
                            durationSpan.text('N/A');
                        }
                    }, 3000);
                }
            }

            function updateDuration(videoElement, durationSpan) {
                if (videoElement.duration && !isNaN(videoElement.duration)) {
                    durationSpan.text(formatDuration(videoElement.duration));
                } else {
                    durationSpan.text('N/A');
                }
            }

            // Proses semua video
            $('.preview-video').each(function() {
                handleVideoDuration(this);
            });
        });

        // ketika list item diklik
        $(".list-group-item").on("click", function() {

            let video = $(this).data("video");
            let videoId = $(this).data("id");

            $("#modalVideoSource").attr("src", video);
            $("#video_id").val(videoId);

            $("#modalVideoPlayer")[0].load();

            $("#assessmentModal").modal("show");
        });

        $("#saveAssessmentBtn").on("click", function () {

    let formData = $("#assessmentForm").serialize();

    $.ajax({
        url: "{{ route('video.assessment.store') }}",
        type: "POST",
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            if (res.status === "success") {

                Swal.fire({
                    icon: "success",
                    title: "Saved!",
                    text: res.message,
                    timer: 1500,
                    showConfirmButton: false
                });

                $("#assessmentModal").modal("hide");
            } else {

                Swal.fire({
                    icon: "error",
                    title: "Failed",
                    text: "Failed to save assessment"
                });

            }
        },
        error: function (xhr) {

            let msg = xhr.responseJSON?.message ?? "Unknown server error";

            Swal.fire({
                icon: "error",
                title: "Server Error",
                text: msg
            });
        }
    });

});

    </script>
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
@endsection
