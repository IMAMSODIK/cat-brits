<div class="modal fade" id="writingAssessmentModal" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-scrollable" id="writingModalDialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="writingModalTitle">Writing Assessment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" name="writing_id" id="writing_id">

                <div id="writingChecklistWrap">
                    <h5 class="text-center fw-bold mb-3">Writing Score Prediction Checklist</h5>

                    <div class="row g-2 mb-3">
                        <div class="col-md-4">
                            <div class="border rounded p-2 h-100">
                                <div class="text-muted small">Student</div>
                                <div class="fw-bold" id="wcStudent">-</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border rounded p-2 h-100">
                                <div class="text-muted small">Test Set Code</div>
                                <div class="fw-bold" id="wcSetCode">-</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border rounded p-2 h-100">
                                <div class="text-muted small">Assessment Date</div>
                                <div class="fw-bold" id="wcAssessDate">-</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border rounded p-2 h-100">
                                <div class="text-muted small mb-1">Prediction Score</div>
                                <input type="number" step="0.5" min="0" max="9"
                                    class="form-control form-control-sm fw-bold" name="predicted_band"
                                    id="wc_predicted_band" placeholder="Auto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border rounded p-2 h-100">
                                <div class="text-muted small">Submission Date</div>
                                <div class="fw-bold" id="wcSubmitDate">-</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border rounded p-2 h-100">
                                <div class="text-muted small">Tutor</div>
                                <div class="fw-bold" id="wcTutor">-</div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <h6 class="fw-bold mb-1">Soal <span class="badge bg-secondary" id="wcTaskLabel"></span></h6>
                            <div id="wcQuestionBox" class="border rounded p-2"
                                style="background:#f9f9f9; max-height:300px; overflow:auto;"></div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <h6 class="fw-bold mb-1 d-flex justify-content-between align-items-center">
                                <span>Student Answer</span>
                                <span class="badge text-dark fw-semibold" id="wcWordCount"
                                    style="background:#eef4fb;"><i class="fas fa-calculator me-1"></i><span
                                        id="wcWordCountVal">0</span> words</span>
                            </h6>
                            <div id="wcAnswerBox" class="border rounded p-2" contenteditable="plaintext-only"
                                spellcheck="false"
                                style="background:#f9f9f9; white-space:pre-wrap; max-height:300px; overflow:auto;"></div>
                            <div class="form-text"><i class="fas fa-highlighter me-1"></i>Select text to highlight.</div>

                            <div id="wcHlToolbar" style="display:none;">
                                <button type="button" class="wc-hl-btn" data-color="#ffeb3b"
                                    style="background:#ffeb3b" title="Yellow"></button>
                                <button type="button" class="wc-hl-btn" data-color="#a5d6a7"
                                    style="background:#a5d6a7" title="Green"></button>
                                <button type="button" class="wc-hl-btn" data-color="#ef9a9a"
                                    style="background:#ef9a9a" title="Red"></button>
                                <button type="button" class="wc-hl-btn" data-color="#90caf9"
                                    style="background:#90caf9" title="Blue"></button>
                                <button type="button" class="wc-hl-note" title="Add comment on selected text"><i
                                        class="far fa-comment-dots"></i></button>
                                <button type="button" class="wc-hl-eraser" title="Remove highlight"><i
                                        class="fas fa-eraser"></i></button>
                            </div>
                        </div>
                    </div>

                    @php
                        $wcCriteria = [
                            [
                                'key' => 'ta',
                                'title' => 'Task Achievement',
                                'items' => [
                                    'Did the candidate write at least 150 words?',
                                    'Did the candidate provide an overview?',
                                    'Did the candidate identify the key features?',
                                    'Did the candidate provide supporting details for the key features?',
                                    'Did the candidate use an appropriate format?',
                                ],
                            ],
                            [
                                'key' => 'cc',
                                'title' => 'Coherence and Cohesion',
                                'items' => [
                                    'Did the candidate organise information and ideas logically?',
                                    'Did the candidate use cohesive devices?',
                                    'Did the candidate use referencing and substitution?',
                                ],
                            ],
                            [
                                'key' => 'lr',
                                'title' => 'Lexical Resource',
                                'items' => [
                                    'Did the candidate use a range of vocabulary?',
                                    'Did the candidate use academic style?',
                                    'Did the candidate use collocation?',
                                    'Did the candidate use correct spelling and word formation?',
                                ],
                            ],
                            [
                                'key' => 'gra',
                                'title' => 'Grammatical Range and Accuracy',
                                'items' => [
                                    'Did the candidate use a range of structures?',
                                    'Did the candidate produce correct grammar and punctuation?',
                                ],
                            ],
                        ];
                    @endphp

                    <form id="writingChecklistForm">
                        <input type="hidden" name="answer_highlights" id="wc_answer_highlights" value="[]">
                        @foreach ($wcCriteria as $ci => $c)
                            <div class="border rounded mb-3">
                                <div class="bg-light px-3 py-2 fw-bold border-bottom rounded-top">
                                    {{ $ci + 1 }}. {{ $c['title'] }}
                                </div>
                                <div class="p-3">
                                    @foreach ($c['items'] as $ii => $item)
                                        <div class="d-flex justify-content-between align-items-center py-1 {{ $ii < count($c['items']) - 1 ? 'border-bottom' : '' }}">
                                            <span class="pe-2">{{ $item }}</span>
                                            <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input wc-check" type="radio"
                                                        name="checklist[{{ $c['key'] }}_{{ $ii + 1 }}]"
                                                        id="wc_{{ $c['key'] }}_{{ $ii + 1 }}_yes" value="yes">
                                                    <label class="form-check-label" for="wc_{{ $c['key'] }}_{{ $ii + 1 }}_yes">Yes</label>
                                                </div>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input wc-check" type="radio"
                                                        name="checklist[{{ $c['key'] }}_{{ $ii + 1 }}]"
                                                        id="wc_{{ $c['key'] }}_{{ $ii + 1 }}_no" value="no">
                                                    <label class="form-check-label" for="wc_{{ $c['key'] }}_{{ $ii + 1 }}_no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="row g-2 mt-3">
                                        <div class="col-md-3">
                                            <label class="form-label fw-bold mb-1">Band Score</label>
                                            <input type="number" step="0.5" min="0" max="9"
                                                name="{{ $c['key'] }}_band" id="wc_{{ $c['key'] }}_band"
                                                class="form-control wc-band">
                                        </div>
                                        <div class="col-md-9">
                                            <label class="form-label fw-bold mb-1">Notes</label>
                                            <textarea name="{{ $c['key'] }}_notes" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="border rounded p-3 mb-2" style="background:#eef4fb; border-color:#dde7f4 !important;">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold mb-1">Overall Band Score</label>
                                    <input type="number" step="0.5" min="0" max="9" name="overall_band"
                                        id="wc_overall_band" class="form-control">
                                    <div class="form-text">Auto-calculated from the four band scores - editable.</div>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label fw-bold mb-1">Additional Remark</label>
                                    <textarea name="feedback" rows="2" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <div id="writingSaveProgress" class="d-none align-items-center gap-2 text-muted small"
                    role="status" aria-live="polite">
                    <div class="progress flex-grow-1"><div class="progress-bar"></div></div>
                    <span>Saving assessment...</span>
                </div>
                <button class="btn btn-primary" id="saveWritingAssessmentBtn">Save Assessment</button>
            </div>
        </div>
    </div>
</div>
