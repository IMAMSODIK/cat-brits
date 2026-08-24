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

        #writingAssessmentModal .modal-dialog.modal-xl {
            max-width: 1320px;
            width: calc(100% - 40px);
        }

        #writingAssessmentModal .modal-body {
            max-height: 72vh;
            overflow-y: auto;
        }

        #writingAssessmentModal #wcAnswerBox,
        #writingAssessmentModal #wcQuestionBox {
            line-height: 1.7;
        }

        #writingAssessmentModal #wcAnswerBox {
            color: #212529;
            cursor: default;
            user-select: text;
        }

        #writingAssessmentModal #wcAnswerBox .wc-hl {
            border-radius: 2px;
            padding: 0 1px;
        }

        #writingAssessmentModal #wcAnswerBox .wc-note {
            background: #fff3c4;
            border-bottom: 2px dotted #e6a817;
            border-radius: 2px;
            padding: 0 1px;
            cursor: pointer;
        }

        #writingAssessmentModal #wcAnswerBox .wc-note::after {
            content: "\f27a";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: .7em;
            color: #b3860a;
            margin-left: 3px;
            vertical-align: super;
        }

        #writingAssessmentModal #wcHlToolbar {
            position: absolute;
            z-index: 1060;
            display: flex;
            align-items: center;
            gap: 6px;
            background: #fff;
            border: 1px solid #dde7f4;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(66, 116, 185, .25);
            padding: 6px 10px;
        }

        #writingAssessmentModal #wcHlToolbar .wc-hl-btn {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 0 0 1px #c9d6e8;
            cursor: pointer;
            padding: 0;
        }

        #writingAssessmentModal #wcHlToolbar .wc-hl-eraser,
        #writingAssessmentModal #wcHlToolbar .wc-hl-note {
            border: none;
            background: transparent;
            color: #4274B9;
            cursor: pointer;
            padding: 0 2px;
        }

        #writingAssessmentModal > .swal2-container {
            z-index: 2000;
            box-sizing: border-box;
            padding: 1rem;
        }

        #writingAssessmentModal > .swal2-container .swal2-popup {
            width: 32em;
            max-width: calc(100% - 2rem);
            box-sizing: border-box;
        }

        #writingAssessmentModal > .swal2-container .swal2-textarea {
            display: block;
            width: 90%;
            max-width: 90%;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            resize: vertical;
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

    {{-- MODAL: WRITING SCORE PREDICTION CHECKLIST --}}
    @include('test_correction.partials.writing_assessment_modal')

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
                const rowBadge = btn.closest("tr").find(".submission-filter-badge").first();
                const cardBadge = btn.closest(".card").find(".submission-filter-badge").first();
                const wasPending = (rowBadge.length ? rowBadge : cardBadge).hasClass("bg-warning");
                const badge = rowBadge.length ? rowBadge : cardBadge;
                badge
                    .removeClass("bg-warning text-dark")
                    .addClass("bg-success")
                    .html('<i class="fa fa-check"></i> Reviewed');
                const cells = btn.closest("tr").children("td");
                if (cells.eq(assessorCol) && cells.eq(assessorCol).text().trim() === '-') {
                    cells.eq(assessorCol).text(currentUserName);
                }
                return wasPending;
            }

            function bumpStat(id, delta) {
                const el = $("#" + id);
                const v = parseInt(el.text(), 10);
                if (!isNaN(v)) el.text(Math.max(0, v + delta));
            }

            // ==== WRITING SCORE PREDICTION CHECKLIST ====
            $(document).on("click", ".btn-review-writing", function() {
                const writingId = $(this).data("id");
                $("#writing_id").val(writingId);

                $.ajax({
                    url: "/writing/get/" + writingId,
                    type: "GET",
                    success: function(res) {
                        $("#wcStudent").text(res.student || "-");
                        $("#wcSetCode").text(res.topic || "-");
                        $("#wcTaskLabel").text(res.task || "");
                        $("#wcSubmitDate").text(res.submitted_at || "-");
                        $("#wcTutor").text(res.tutor || "-");
                        $("#wcAssessDate").text(res.assessed_at || new Date().toLocaleDateString("en-GB", {
                            weekday: "long",
                            day: "numeric",
                            month: "long",
                            year: "numeric"
                        }));

                        $("#wcAnswerBox").text(res.answer || "-");
                        $("#wcQuestionBox").html(res.question || "<em class='text-muted'>Question not available.</em>");
                        $("#writingModalDialog").addClass("modal-xl");

                        const answer = res.answer || "";
                        $("#wcWordCountVal").text(answer.trim() ? answer.trim().split(/\s+/).length : 0);
                        wcApplyStoredHighlights(res.assessment?.answer_highlights || []);

                        const form = $("#writingChecklistForm");
                        form[0].reset();
                        form.find("input[type=radio]").prop("checked", false);
                        $("#wc_predicted_band, #wc_overall_band").val("");

                        if (res.assessment) {
                            const assessment = res.assessment;
                            form.find("[name=ta_band]").val(assessment.ta_band);
                            form.find("[name=cc_band]").val(assessment.cc_band);
                            form.find("[name=lr_band]").val(assessment.lr_band);
                            form.find("[name=gra_band]").val(assessment.gra_band);
                            form.find("[name=ta_notes]").val(assessment.ta_notes);
                            form.find("[name=cc_notes]").val(assessment.cc_notes);
                            form.find("[name=lr_notes]").val(assessment.lr_notes);
                            form.find("[name=gra_notes]").val(assessment.gra_notes);
                            form.find("[name=feedback]").val(assessment.feedback);
                            $("#wc_overall_band").val(assessment.overall_band ?? "");
                            $("#wc_predicted_band").val(assessment.predicted_band ?? "");

                            Object.keys(assessment.checklist || {}).forEach(function(key) {
                                form.find("[name='checklist[" + key + "]'][value='" + assessment.checklist[key] + "']")
                                    .prop("checked", true);
                            });
                        }

                        wcSyncHighlights();
                        $("#writingAssessmentModal").modal("show");
                    },
                    error: function() {
                        Swal.fire({
                            icon: "error",
                            title: "Server Error",
                            text: "Failed to load writing submission"
                        });
                    }
                });
            });

            let wcSelRange = null;

            function wcTextNodes(container) {
                const walker = document.createTreeWalker(container, NodeFilter.SHOW_TEXT);
                const nodes = [];
                while (walker.nextNode()) nodes.push(walker.currentNode);
                return nodes;
            }

            function wcSelectionOffsets(container, range) {
                let start = null, end = null, pos = 0;
                for (const node of wcTextNodes(container)) {
                    const len = node.nodeValue.length;
                    if (node === range.startContainer) start = pos + range.startOffset;
                    if (node === range.endContainer) end = pos + range.endOffset;
                    pos += len;
                }
                return start !== null && end !== null ? [start, end] : null;
            }

            function wcWrapOffsets(container, start, end, color, note) {
                const nodes = wcTextNodes(container);
                let pos = 0;
                for (const node of nodes) {
                    const len = node.nodeValue.length;
                    const s = Math.max(start, pos);
                    const e = Math.min(end, pos + len);
                    if (s < e) {
                        const relS = s - pos;
                        const relE = e - pos;
                        let target = node;
                        if (relE < len) target.splitText(relE);
                        if (relS > 0) target = target.splitText(relS);
                        const span = document.createElement("span");
                        if (note) {
                            span.className = "wc-note";
                            span.setAttribute("data-note", note);
                            span.title = note;
                        } else {
                            span.className = "wc-hl";
                            span.style.backgroundColor = color;
                        }
                        target.parentNode.replaceChild(span, target);
                        span.appendChild(target);
                    }
                    pos += len;
                    if (pos >= end) break;
                }
            }

            function wcUnwrapSelection(container, range) {
                $(container).find("span.wc-hl, span.wc-note").each(function() {
                    const spanRange = document.createRange();
                    spanRange.selectNodeContents(this);
                    if (range.compareBoundaryPoints(Range.END_TO_START, spanRange) < 0 &&
                        range.compareBoundaryPoints(Range.START_TO_END, spanRange) > 0) {
                        const parent = this.parentNode;
                        while (this.firstChild) parent.insertBefore(this.firstChild, this);
                        parent.removeChild(this);
                        parent.normalize();
                    }
                });
            }

            function wcApplyStoredHighlights(highlights) {
                if (!Array.isArray(highlights) || !highlights.length) return;
                const box = document.getElementById("wcAnswerBox");
                const full = box.textContent;
                let from = 0;
                highlights.forEach(function(highlight) {
                    if (!highlight || !highlight.text) return;
                    const index = full.indexOf(highlight.text, from);
                    if (index >= 0) {
                        wcWrapOffsets(box, index, index + highlight.text.length, highlight.color, highlight.note || null);
                        from = index + highlight.text.length;
                    }
                });
            }

            function wcSyncHighlights() {
                const data = $("#wcAnswerBox span.wc-hl, #wcAnswerBox span.wc-note").map(function() {
                    return {
                        text: this.textContent,
                        color: this.className.indexOf("wc-note") >= 0 ? null : this.style.backgroundColor,
                        note: this.getAttribute("data-note") || null
                    };
                }).get();
                $("#wc_answer_highlights").val(JSON.stringify(data));
            }

            function wcShowToolbar(x, y) {
                const toolbar = $("#wcHlToolbar");
                const column = toolbar.closest(".position-relative");
                const rect = column[0].getBoundingClientRect();
                toolbar.show().css({
                    left: Math.min(Math.max(x - rect.left - 60, 0), rect.width - 130),
                    top: y - rect.top + 12
                });
            }

            function wcDisableModalFocusTrap() {
                try {
                    const modal = document.getElementById("writingAssessmentModal");
                    const instance = window.bootstrap && bootstrap.Modal ? bootstrap.Modal.getInstance(modal) : null;
                    if (instance && instance._focustrap) instance._focustrap.deactivate();
                } catch (e) {}
            }

            function wcFitCommentDialog() {
                const input = Swal.getInput();
                if (!input) return;
                input.style.width = "90%";
                input.style.maxWidth = "90%";
                input.style.marginLeft = "auto";
                input.style.marginRight = "auto";
                input.focus();
            }

            $(document).on("mouseup keyup", "#wcAnswerBox", function() {
                const selection = window.getSelection();
                if (!selection || selection.rangeCount === 0 || selection.isCollapsed) return;
                const range = selection.getRangeAt(0);
                if (!this.contains(range.commonAncestorContainer)) return;
                wcSelRange = range.cloneRange();
                const rect = range.getBoundingClientRect();
                wcShowToolbar(rect.left + rect.width / 2, rect.bottom);
            });

            $(document).on("mousedown", function(e) {
                if (!$(e.target).closest("#wcHlToolbar, #wcAnswerBox").length) {
                    $("#wcHlToolbar").hide();
                    wcSelRange = null;
                }
            });

            $(document).on("click", "#wcHlToolbar .wc-hl-btn", function() {
                if (!wcSelRange) return;
                const box = document.getElementById("wcAnswerBox");
                const offsets = wcSelectionOffsets(box, wcSelRange);
                if (offsets && offsets[1] > offsets[0]) {
                    wcWrapOffsets(box, offsets[0], offsets[1], $(this).data("color"));
                    wcSyncHighlights();
                }
                $("#wcHlToolbar").hide();
                window.getSelection().removeAllRanges();
                wcSelRange = null;
            });

            $(document).on("click", "#wcHlToolbar .wc-hl-note", function() {
                if (!wcSelRange) return;
                const box = document.getElementById("wcAnswerBox");
                const offsets = wcSelectionOffsets(box, wcSelRange);
                $("#wcHlToolbar").hide();
                if (!offsets || offsets[1] <= offsets[0]) {
                    wcSelRange = null;
                    return;
                }

                wcDisableModalFocusTrap();
                Swal.fire({
                    title: '<span style="font-size:1.2rem;">Add Comment</span>',
                    input: "textarea",
                    inputPlaceholder: "Write a comment about the selected text...",
                    target: document.getElementById("writingAssessmentModal"),
                    showCancelButton: true,
                    confirmButtonText: '<i class="fas fa-check"></i> Save',
                    cancelButtonText: "Cancel",
                    confirmButtonColor: "#4274B9",
                    focusConfirm: false,
                    didOpen: wcFitCommentDialog
                }).then(function(result) {
                    if (result.isConfirmed && result.value && result.value.trim()) {
                        wcWrapOffsets(box, offsets[0], offsets[1], null, result.value.trim());
                        wcSyncHighlights();
                    }
                    window.getSelection().removeAllRanges();
                    wcSelRange = null;
                });
            });

            $(document).on("click", "#wcAnswerBox span.wc-note", function(e) {
                e.stopPropagation();
                const span = this;
                wcDisableModalFocusTrap();
                Swal.fire({
                    title: '<span style="font-size:1.2rem;"><i class="far fa-comment-dots"></i> Comment</span>',
                    input: "textarea",
                    inputValue: span.getAttribute("data-note") || "",
                    target: document.getElementById("writingAssessmentModal"),
                    showCancelButton: true,
                    showDenyButton: true,
                    confirmButtonText: '<i class="fas fa-check"></i> Update',
                    denyButtonText: '<i class="fas fa-trash"></i> Delete',
                    cancelButtonText: "Close",
                    confirmButtonColor: "#4274B9",
                    denyButtonColor: "#d33",
                    didOpen: wcFitCommentDialog
                }).then(function(result) {
                    if (result.isConfirmed && result.value && result.value.trim()) {
                        span.setAttribute("data-note", result.value.trim());
                        span.title = result.value.trim();
                        wcSyncHighlights();
                    } else if (result.isDenied) {
                        const parent = span.parentNode;
                        while (span.firstChild) parent.insertBefore(span.firstChild, span);
                        parent.removeChild(span);
                        parent.normalize();
                        wcSyncHighlights();
                    }
                });
            });

            $(document).on("click", "#wcHlToolbar .wc-hl-eraser", function() {
                if (!wcSelRange) return;
                wcUnwrapSelection(document.getElementById("wcAnswerBox"), wcSelRange);
                wcSyncHighlights();
                $("#wcHlToolbar").hide();
                window.getSelection().removeAllRanges();
                wcSelRange = null;
            });

            $(document).on("change", ".wc-check", function() {
                const names = new Set($(".wc-check").map(function() { return this.name; }).get());
                const yes = $(".wc-check[value='yes']:checked").length;
                if (names.size > 0) $("#wc_predicted_band").val(Math.round((yes / names.size) * 9 * 2) / 2);
            });

            $(document).on("input change", ".wc-band", function() {
                const bands = ["ta", "cc", "lr", "gra"].map(function(key) {
                    return parseFloat($("#wc_" + key + "_band").val());
                });
                if (bands.every(function(value) { return !isNaN(value); })) {
                    const average = bands.reduce(function(a, b) { return a + b; }, 0) / bands.length;
                    $("#wc_overall_band").val(Math.round(average * 10) / 10);
                }
            });

            function setWritingSaveLoading(isLoading) {
                const button = $("#saveWritingAssessmentBtn");
                button.prop("disabled", isLoading).toggleClass("is-loading", isLoading);
                button.html(isLoading
                    ? '<i class="fas fa-spinner fa-spin me-2"></i>Saving Assessment'
                    : "Save Assessment");
                $("#writingSaveProgress").toggleClass("d-none", !isLoading).toggleClass("d-flex", isLoading);
                $("#writingChecklistForm").find("input, textarea, button").prop("disabled", isLoading);
            }

            $("#saveWritingAssessmentBtn").on("click", function() {
                const writingId = $("#writing_id").val();
                const form = $("#writingChecklistForm");
                wcSyncHighlights();

                const missing = ["ta", "cc", "lr", "gra"].filter(function(key) {
                    return $("#wc_" + key + "_band").val() === "";
                });
                if (missing.length) {
                    Swal.fire({
                        icon: "warning",
                        title: "Incomplete",
                        text: "Please fill all band scores before saving."
                    });
                    return;
                }

                $.ajax({
                    url: "{{ route('writing.assessment.store') }}",
                    type: "POST",
                    data: "writing_id=" + encodeURIComponent(writingId) + "&" + form.serialize(),
                    beforeSend: function() { setWritingSaveLoading(true); },
                    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                    success: function(res) {
                        if (res.status === "success") {
                            $("#writingAssessmentModal").modal("hide");
                            if (updateRow(writingId, ".btn-review-writing")) {
                                bumpStat("stat-reviewed", 1);
                                bumpStat("stat-pending", -1);
                            }
                            Swal.fire({
                                icon: "success",
                                title: "Saved",
                                text: res.message,
                                timer: 1800,
                                showConfirmButton: false
                            });
                        } else {
                            Swal.fire({ icon: "error", title: "Failed", text: res.message });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: "error",
                            title: "Server Error",
                            text: xhr.responseJSON?.message ?? "Unknown error"
                        });
                    },
                    complete: function() { setWritingSaveLoading(false); }
                });
            });

            $(document).on("click", ".btn-delete-writing", function(e) {
                e.preventDefault();
                e.stopPropagation();

                const writingId = $(this).data("id");

                Swal.fire({
                    icon: "warning",
                    title: "Delete submission?",
                    text: "This writing submission and its assessment will be permanently deleted.",
                    showCancelButton: true,
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel",
                    confirmButtonColor: "#d33"
                }).then(function(result) {
                    if (!result.isConfirmed) return;

                    $.ajax({
                        url: "{{ url('/writing') }}/" + writingId,
                        type: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                        },
                        success: function(res) {
                            if (res.status !== "success") {
                                Swal.fire({ icon: "error", title: "Failed", text: res.message });
                                return;
                            }

                            Swal.fire({
                                icon: "success",
                                title: "Deleted",
                                text: res.message,
                                timer: 1200,
                                showConfirmButton: false
                            }).then(function() {
                                window.location.reload();
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: "error",
                                title: "Server Error",
                                text: xhr.responseJSON?.message ?? "Failed to delete submission"
                            });
                        }
                    });
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
                            if (updateRow(videoId, ".btn-review-speaking")) {
                                bumpStat("stat-reviewed", 1);
                                bumpStat("stat-pending", -1);
                            }
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
