@extends('layouts.template')

@section('own_style')
    <style>
        .stat-card {
            border-radius: 10px;
            transition: transform .15s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
        }

        .submission-filter-badge {
            min-width: 90px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ ucfirst($kategori) }} Test Requests</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/test-correction') }}">Test Correction</a></li>
                        <li class="breadcrumb-item active">{{ ucfirst($kategori) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="edit-profile">

            {{-- TAB KATEGORI --}}
            <div class="mb-4">
                <div class="btn-group" role="group">
                    <a href="{{ route('test-correction.submissions', array_merge(['kategori' => 'writing'], $filters)) }}"
                        class="btn {{ $kategori === 'writing' ? 'btn-primary' : 'btn-outline-primary' }}">
                        <i class="fa fa-pen me-1"></i> Writing
                    </a>
                    <a href="{{ route('test-correction.submissions', array_merge(['kategori' => 'speaking'], $filters)) }}"
                        class="btn {{ $kategori === 'speaking' ? 'btn-primary' : 'btn-outline-primary' }}">
                        <i class="fa fa-microphone me-1"></i> Speaking
                    </a>
                </div>
            </div>

            {{-- STATISTIK --}}
            <div class="row mb-4">
                <div class="col-6 col-xl-3">
                    <div class="card stat-card">
                        <div class="card-body total-project border-b-primary border-2">
                            <span class="f-light f-w-500 f-14">Total Submissions</span>
                            <div class="project-details">
                                <div class="project-counter">
                                    <h2 class="f-w-600">{{ (int) $stats->total }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="card stat-card">
                        <div class="card-body total-project border-b-success border-2">
                            <span class="f-light f-w-500 f-14">Reviewed</span>
                            <div class="project-details">
                                <div class="project-counter">
                                    <h2 class="f-w-600 text-success" id="stat-reviewed">{{ (int) $stats->reviewed }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="card stat-card">
                        <div class="card-body total-project border-b-warning border-2">
                            <span class="f-light f-w-500 f-14">Not Reviewed</span>
                            <div class="project-details">
                                <div class="project-counter">
                                    <h2 class="f-w-600 text-warning" id="stat-pending">{{ (int) $stats->pending }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="card stat-card">
                        <div class="card-body total-project border-b-info border-2">
                            <span class="f-light f-w-500 f-14">Last 7 Days</span>
                            <div class="project-details">
                                <div class="project-counter">
                                    <h2 class="f-w-600 text-info">{{ (int) $stats->last_7_days }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FILTER & SEARCH (LIVE) --}}
            <div class="card mb-4">
                <div class="card-body">
                    <form id="submission-filter-form" onsubmit="return false;">
                        <input type="hidden" name="kategori" value="{{ $kategori }}">
                        <div class="row g-3 align-items-end">
                            <div class="col-12 col-md-4">
                                <label class="form-label">Search</label>
                                <div class="position-relative">
                                    <input type="text" name="q" class="form-control" id="search-input"
                                        placeholder="Student name, set name, or topic..."
                                        value="{{ $filters['q'] }}" autocomplete="off">
                                    <i class="fa fa-search position-absolute"
                                        style="right:12px; top:12px; color:#aaa"></i>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Review Status</label>
                                <select name="status" class="form-control" id="filter-status">
                                    <option value="">-- All --</option>
                                    <option value="pending" @selected($filters['status'] === 'pending')>Not Reviewed</option>
                                    <option value="reviewed" @selected($filters['status'] === 'reviewed')>Reviewed</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" id="filter-date"
                                    value="{{ $filters['date'] }}">
                            </div>
                            <div class="col-12 col-md-2 d-flex gap-2">
                                <button type="button" class="btn btn-light flex-fill" id="reset-filter" title="Reset">
                                    <i class="fa fa-rotate-left"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- DAFTAR SUBMISSION --}}
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">All {{ ucfirst($kategori) }} Submissions</h4>
                    <span class="badge bg-primary" id="submission-total-badge">Total: {{ $submissions->total() }}</span>
                </div>
                <div class="card-body" id="submission-list">
                    @include('test_correction.partials.submission_list')
                </div>
            </div>

        </div>
    </div>

    {{-- MODAL: WRITING ASSESSMENT --}}
    <div class="modal fade" id="writingAssessmentModal" tabindex="-1">
        <div class="modal-dialog modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Writing Assessment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6><b>Student Answer</b></h6>
                    <div id="writingAnswerBox" class="border rounded p-2 mb-3"
                        style="background:#f9f9f9; white-space:pre-wrap; max-height:300px; overflow:auto;">
                        Loading...
                    </div>

                    <form id="writingAssessmentForm">
                        <input type="hidden" name="writing_id" id="writing_id">

                        <div class="mb-3">
                            <label><b>Task Achievement (Band)</b></label>
                            <input type="number" step="0.1" max="9" min="0" name="ta_band" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label><b>Coherence & Cohesion (Band)</b></label>
                            <input type="number" step="0.1" max="9" min="0" name="cc_band" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label><b>Lexical Resource (Band)</b></label>
                            <input type="number" step="0.1" max="9" min="0" name="lr_band" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label><b>Grammatical Range & Accuracy (Band)</b></label>
                            <input type="number" step="0.1" max="9" min="0" name="gra_band" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label><b>Feedback</b></label>
                            <textarea name="feedback" rows="4" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="saveWritingAssessmentBtn">Save Assessment</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL: SPEAKING ASSESSMENT --}}
    <div class="modal fade" id="assessmentModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Video Assessment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <video id="modalVideoPlayer" width="100%" controls class="mb-3">
                        <source id="modalVideoSource" src="" type="video/webm">
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
                            <div class="col-3"><input type="checkbox" name="fc_discourse_markers"> Discourse Markers</div>
                            <div class="col-3"><input type="checkbox" name="fc_relevant_answers"> Relevant Answers</div>
                            <div class="col-3">Band: <input type="number" step="0.1" max="9" min="0" name="fc_band"
                                    class="form-control"></div>
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
                            <div class="col-3">Band: <input type="number" step="0.1" max="9" min="0" name="lr_band"
                                    class="form-control"></div>
                        </div>

                        <hr>

                        <h5>Grammatical Range & Accuracy</h5>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="gra_range_structure"> Range of structure</div>
                            <div class="col-3"><input type="checkbox" name="gra_error_free"> Error free sentences</div>
                            <div class="col-3"><input type="checkbox" name="gra_grammar_features"> Grammar features</div>
                            <div class="col-3">Band: <input type="number" step="0.1" max="9" min="0" name="gra_band"
                                    class="form-control"></div>
                        </div>

                        <hr>

                        <h5>Pronunciation</h5>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="pr_features"> Pronunciation features</div>
                            <div class="col-3"><input type="checkbox" name="pr_understood"> Easily understood</div>
                            <div class="col-3">Band: <input type="number" step="0.1" max="9" min="0" name="pr_band"
                                    class="form-control"></div>
                        </div>

                        <div class="mb-3">
                            <label><b>Remark</b></label>
                            <textarea name="remark" rows="3" class="form-control"></textarea>
                        </div>
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
            const listUrl = "{{ url('/test-correction/submissions') }}";
            const $list = $("#submission-list");
            const $badge = $("#submission-total-badge");

            // ==== LIVE SEARCH / FILTER ====
            let searchTimer = null;

            function fetchSubmissions(extraParams, pushUrl) {
                const params = {
                    kategori: "{{ $kategori }}",
                    q: $("#search-input").val(),
                    status: $("#filter-status").val(),
                    date: $("#filter-date").val(),
                    ...(extraParams || {})
                };

                $.ajax({
                    url: listUrl,
                    type: "GET",
                    data: params,
                    headers: {
                        "X-Requested-With": "XMLHttpRequest"
                    },
                    beforeSend: function() {
                        $list.css("opacity", ".5");
                    },
                    success: function(res) {
                        $list.css("opacity", "1");
                        $list.html(res.html);
                        $badge.text("Total: " + res.total);
                        if (pushUrl !== false) {
                            const qs = $.param(params);
                            history.pushState(null, "", listUrl + (qs ? "?" + qs : ""));
                        }
                    },
                    error: function() {
                        $list.css("opacity", "1");
                    }
                });
            }

            $("#search-input").on("input", function() {
                clearTimeout(searchTimer);
                searchTimer = setTimeout(() => fetchSubmissions({ page: 1 }), 350);
            });

            $("#filter-status, #filter-date").on("change", function() {
                fetchSubmissions({ page: 1 });
            });

            $("#reset-filter").on("click", function() {
                $("#search-input").val("");
                $("#filter-status").val("");
                $("#filter-date").val("");
                fetchSubmissions({ page: 1, q: "", status: "", date: "" });
            });

            // Pagination via AJAX
            $(document).on("click", "#submission-list .pagination a", function(e) {
                e.preventDefault();
                const page = new URL($(this).attr("href"), window.location.origin).searchParams.get("page") || 1;
                fetchSubmissions({ page });
            });

            // Tombol back/forward browser
            window.onpopstate = function() {
                location.reload();
            };

            const currentUserName = "{{ auth()->user()->name }}";
            const assessorCol = {{ $kategori === 'speaking' ? 6 : 7 }};

            function updateRow(id, kategoriBtn) {
                const btn = $(kategoriBtn + "[data-id='" + id + "']").first();
                if (!btn.length) return;
                btn.closest("tr").find(".submission-filter-badge").first()
                    .removeClass("bg-warning text-dark")
                    .addClass("bg-success")
                    .html('<i class="fa fa-check"></i> Reviewed');
                const cells = btn.closest("tr").children("td");
                if (cells.eq(assessorCol) && cells.eq(assessorCol).text().trim() === '-') {
                    cells.eq(assessorCol).text(currentUserName);
                }
                // mobile card
                btn.closest(".card").find(".submission-filter-badge").first()
                    .removeClass("bg-warning text-dark")
                    .addClass("bg-success")
                    .html('<i class="fa fa-check"></i> Reviewed');
            }

            function bumpStat(id, delta) {
                const el = $("#" + id);
                const v = parseInt(el.text(), 10);
                if (!isNaN(v)) el.text(Math.max(0, v + delta));
            }

            // ==== WRITING ====
            $(document).on("click", ".btn-review-writing", function() {
                let writingId = $(this).data("id");
                $("#writing_id").val(writingId);
                $("#writingAnswerBox").text("Loading...");

                $.ajax({
                    url: "/writing/get/" + writingId,
                    type: "GET",
                    success: function(res) {
                        $("#writingAnswerBox").text(res.answer);

                        const form = $("#writingAssessmentForm");
                        form[0].reset();
                        if (res.assessment) {
                            form.find("[name=ta_band]").val(res.assessment.ta_band);
                            form.find("[name=cc_band]").val(res.assessment.cc_band);
                            form.find("[name=lr_band]").val(res.assessment.lr_band);
                            form.find("[name=gra_band]").val(res.assessment.gra_band);
                            form.find("[name=feedback]").val(res.assessment.feedback);
                        }

                        $("#writingAssessmentModal").modal("show");
                    }
                });
            });

            $("#saveWritingAssessmentBtn").on("click", function() {
                const writingId = $("#writing_id").val();
                let formData = $("#writingAssessmentForm").serialize();

                $.ajax({
                    url: "{{ route('writing.assessment.store') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    },
                    success: function(res) {
                        if (res.status === "success") {
                            $("#writingAssessmentModal").modal("hide");
                            updateRow(writingId, ".btn-review-writing");
                            bumpStat("stat-reviewed", 1);
                            bumpStat("stat-pending", -1);
                            Swal.fire({
                                icon: "success",
                                title: "Saved",
                                text: res.message,
                                timer: 1800,
                                showConfirmButton: false
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Failed",
                                text: res.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: "error",
                            title: "Server Error",
                            text: xhr.responseJSON?.message ?? "Unknown error"
                        });
                    }
                });
            });

            // ==== SPEAKING ====
            $(document).on("click", ".btn-review-speaking", function() {
                let id = $(this).data("id");

                $.ajax({
                    url: "/video/get/" + id,
                    type: "GET",
                    success: function(res) {
                        if (res.status) {
                            $("#modalVideoSource").attr("src", res.data.url);
                            $("#video_id").val(id);
                            $("#modalVideoPlayer")[0].load();

                            // reset lalu isi nilai assessment sebelumnya
                            const form = $("#assessmentForm");
                            form[0].reset();
                            form.find("input[type=checkbox]").trigger("change");
                            if (res.data.assessment) {
                                const a = res.data.assessment;
                                form.find("[name=fc_band]").val(a.fc_band);
                                form.find("[name=lr_band]").val(a.lr_band);
                                form.find("[name=gra_band]").val(a.gra_band);
                                form.find("[name=pr_band]").val(a.pr_band);
                                form.find("[name=remark]").val(a.remark);
                                $.each(a.checkboxes || {}, function(name, checked) {
                                    const cb = form.find("[name=" + name + "]");
                                    cb.prop("checked", checked);
                                    if (checked) cb.trigger("change");
                                });
                            }

                            $("#assessmentModal").modal("show");
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Failed",
                                text: res.message || "Failed to load video"
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: "error",
                            title: "Server Error",
                            text: "Failed to load video"
                        });
                    }
                });
            });

            $("#saveAssessmentBtn").on("click", function() {
                const videoId = $("#video_id").val();
                let formData = $("#assessmentForm").serialize();

                $.ajax({
                    url: "{{ route('video.assessment.store') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr("content")
                    },
                    success: function(res) {
                        if (res.status === "success") {
                            $("#assessmentModal").modal("hide");
                            updateRow(videoId, ".btn-review-speaking");
                            bumpStat("stat-reviewed", 1);
                            bumpStat("stat-pending", -1);
                            Swal.fire({
                                icon: "success",
                                title: "Saved!",
                                text: res.message,
                                timer: 1800,
                                showConfirmButton: false
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Failed",
                                text: "Failed to save assessment"
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: "error",
                            title: "Server Error",
                            text: xhr.responseJSON?.message ?? "Unknown server error"
                        });
                    }
                });
            });
        });
    </script>
@endsection
