@extends('layouts.template')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>My Exam History</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">My History</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

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
                                                <img class="img-70 rounded-circle"
                                                    src="{{ asset('storage') . '/' . $user->foto }}" alt="Profile Picture">
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
                                <div class="mb-3">
                                    <label class="form-label">Total Tests Taken</label>
                                    <input class="form-control" readonly value="{{ $studentActivities->count() }} tests">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <form class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">My Mock Test Statistics</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card o-hidden small-widget">
                                        <div class="card-body total-project border-b-primary border-2"><span
                                                class="f-light f-w-500 f-14">Reading</span>
                                            <div class="project-details">
                                                <div class="project-counter">
                                                    <h2 class="f-w-600">{{ number_format($summary->reading_avg, 2) }}</h2>
                                                    <small> / {{ $summary->reading_attempt }} Attempts</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="card o-hidden small-widget">
                                        <div class="card-body total-project border-b-primary border-2"><span
                                                class="f-light f-w-500 f-14">Listening</span>
                                            <div class="project-details">
                                                <div class="project-counter">
                                                    <h2 class="f-w-600">{{ number_format($summary->listening_avg, 2) }}</h2>
                                                    <small> / {{ $summary->listening_attempt }} Attempts</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-12">
                    <div class="card p-2">
                        <div class="card-header">
                            <h4 class="card-title mb-0">My Activities</h4>
                        </div>
                        <div class="card-body">
                            <div class="vertical-scroll scroll-demo scroll-b-none">
                                <div class="activity-list d-flex flex-column gap-3">
                                    @forelse ($studentActivities as $activities)
                                        <div class="card shadow-sm border-0 w-100 mb-0">
                                            <div class="card-body p-3">

                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                    <div class="flex-grow-1">
                                                        <div class="fw-semibold">{{ $activities->setSoal->name ?? '-' }}
                                                        </div>
                                                        <small class="text-primary">{{ ucfirst($activities->kategori) }} |
                                                            {{ $activities->nama_tipe }}</small>
                                                    </div>

                                                    @if ($activities->tipe_test == 'practice')
                                                        <span class="badge bg-primary">Practice</span>
                                                    @else
                                                        <span class="badge bg-warning text-dark">Mock</span>
                                                    @endif
                                                </div>

                                                <div class="d-flex flex-column gap-1 small">
                                                    <div>
                                                        <span class="text-muted">Date:</span>
                                                        <strong>{{ $activities->created_at->format('d M Y H:i') }}</strong>
                                                    </div>

                                                    @if (in_array($activities->kategori, ['speaking', 'writing']))
                                                        <div>
                                                            <span class="text-muted">Assessor:</span>
                                                            @if ($activities->teacher_id)
                                                                <strong>{{ $activities->teacher->name }}</strong>
                                                            @else
                                                                <span class="text-warning">Not Yet Assessed</span>
                                                            @endif
                                                        </div>
                                                    @else
                                                        <div>
                                                            <span class="text-muted">Score:</span>
                                                            <strong>{{ $activities->score }}/{{ $activities->jumlah_soal }}</strong>
                                                            @if ($activities->score_conversion)
                                                                <span class="badge bg-info ms-1">Band {{ $activities->score_conversion }}</span>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mt-3">
                                                    <button class="btn btn-outline-primary btn-sm w-100 view-answers"
                                                        data-id="{{ $activities->id }}">
                                                        View Answers
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    @empty
                                        <div class="text-center text-muted py-3">
                                            No activity yet. Take your first test!
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="answer-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="answer-modal-title">My Answers</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="answer-modal-body">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('own_script')
    <style>
        #answer-modal .writing-question,
        #answer-modal .writing-student-answer {
            background: #f8fafd;
            border: 1px solid #dbe6f3;
            border-radius: 10px;
            padding: 1rem;
        }

        #answer-modal .writing-student-answer {
            background: #fff;
            white-space: pre-wrap;
            line-height: 1.7;
            max-height: 420px;
            overflow: auto;
        }

        #answer-modal .student-note {
            background: #fff3c4;
            border-bottom: 2px dotted #e6a817;
            border-radius: 2px;
            padding: 0 2px;
        }

        #answer-modal .student-note::after {
            content: "\f27a";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            color: #b3860a;
            font-size: .7em;
            margin-left: 3px;
            vertical-align: super;
        }

        #answer-modal .student-highlight {
            border-radius: 2px;
            padding: 0 2px;
        }

        #answer-modal .writing-criterion {
            border: 1px solid #dbe6f3;
            border-radius: 8px;
            padding: .75rem;
            height: 100%;
        }

        #answer-modal .tutor-comment {
            border-left: 3px solid #4274B9;
            background: #f8fafd;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const answerModal = new bootstrap.Modal(document.getElementById('answer-modal'));

            function esc(s) {
                const d = document.createElement('div');
                d.textContent = s == null ? '' : String(s);
                return d.innerHTML;
            }

            function bandCard(label, value) {
                return '<div class="col-6 col-md-2"><div class="border rounded p-2 text-center mb-2">' +
                    '<small class="text-muted d-block">' + esc(label) + '</small>' +
                    '<strong style="font-size:1.2rem">' + esc(value) + '</strong>' +
                    '</div></div>';
            }

            function renderHighlightedAnswer(answer, highlights) {
                const source = String(answer || '');
                const root = document.createElement('div');
                let cursor = 0;

                (Array.isArray(highlights) ? highlights : []).forEach(function(h) {
                    if (!h || !h.text) return;
                    const text = String(h.text);
                    const index = source.indexOf(text, cursor);
                    if (index < 0) return;

                    root.appendChild(document.createTextNode(source.slice(cursor, index)));
                    const span = document.createElement('span');
                    span.className = h.note ? 'student-note' : 'student-highlight';
                    span.textContent = text;
                    span.style.backgroundColor = h.note ? '#fff3c4' : (h.color || '#e0e0e0');
                    if (h.note) {
                        span.title = h.note;
                        span.setAttribute('aria-label', 'Tutor comment: ' + h.note);
                    }
                    root.appendChild(span);
                    cursor = index + text.length;
                });

                root.appendChild(document.createTextNode(source.slice(cursor)));
                return root.innerHTML;
            }

            function renderTutorComments(highlights) {
                const comments = (Array.isArray(highlights) ? highlights : [])
                    .filter(function(h) { return h && h.note; });

                if (!comments.length) return '';

                let html = '<div class="mt-3"><h6 class="fw-bold"><i class="far fa-comment-dots me-1"></i>Tutor Comments</h6>';
                comments.forEach(function(comment) {
                    html += '<div class="tutor-comment border rounded p-2 mb-2">' +
                        '<div class="small text-muted mb-1"><i class="fas fa-quote-left me-1"></i>Selected text</div>' +
                        '<div class="small mb-2">' + esc(comment.text) + '</div>' +
                        '<div style="white-space:pre-wrap">' + esc(comment.note) + '</div>' +
                        '</div>';
                });
                return html + '</div>';
            }

            function checklistItems(a, key, items) {
                const checklist = a.checklist || {};
                return items.map(function(item, index) {
                    const value = checklist[key + '_' + (index + 1)];
                    const badge = value === 'yes'
                        ? '<span class="badge bg-success">Yes</span>'
                        : value === 'no'
                            ? '<span class="badge bg-danger">No</span>'
                            : '<span class="badge bg-secondary">-</span>';
                    return '<div class="d-flex justify-content-between gap-2 border-bottom py-2">' +
                        '<span>' + esc(item) + '</span>' + badge + '</div>';
                }).join('');
            }

            function renderAssessment(a) {
                let html = '<div class="card mb-3" style="border-color:#4274B9">' +
                    '<div class="card-header text-white" style="background:#4274B9"><strong><i class="fas fa-clipboard-check me-1"></i> Writing Score Prediction Checklist</strong></div>' +
                    '<div class="card-body">';

                if (a.type === 'writing') {
                    html += '<div class="row">' +
                        bandCard('Task Achievement', a.ta_band) +
                        bandCard('Coherence & Cohesion', a.cc_band) +
                        bandCard('Lexical Resource', a.lr_band) +
                        bandCard('Grammatical Range & Accuracy', a.gra_band) +
                        bandCard('Overall Band', a.overall) +
                        bandCard('Prediction Score', a.predicted_band ?? '-') +
                        '</div>';

                    const criteria = [
                        {
                            key: 'ta',
                            title: 'Task Achievement',
                            band: a.ta_band,
                            notes: a.ta_notes,
                            items: [
                                'Did the candidate write at least 150 words?',
                                'Did the candidate provide an overview?',
                                'Did the candidate identify the key features?',
                                'Did the candidate provide supporting details for the key features?',
                                'Did the candidate use an appropriate format?'
                            ]
                        },
                        {
                            key: 'cc',
                            title: 'Coherence and Cohesion',
                            band: a.cc_band,
                            notes: a.cc_notes,
                            items: [
                                'Did the candidate organise information and ideas logically?',
                                'Did the candidate use cohesive devices?',
                                'Did the candidate use referencing and substitution?'
                            ]
                        },
                        {
                            key: 'lr',
                            title: 'Lexical Resource',
                            band: a.lr_band,
                            notes: a.lr_notes,
                            items: [
                                'Did the candidate use a range of vocabulary?',
                                'Did the candidate use academic style?',
                                'Did the candidate use collocation?',
                                'Did the candidate use correct spelling and word formation?'
                            ]
                        },
                        {
                            key: 'gra',
                            title: 'Grammatical Range and Accuracy',
                            band: a.gra_band,
                            notes: a.gra_notes,
                            items: [
                                'Did the candidate use a range of structures?',
                                'Did the candidate produce correct grammar and punctuation?'
                            ]
                        }
                    ];

                    html += '<div class="row g-2 mt-1">';
                    criteria.forEach(function(c) {
                        html += '<div class="col-md-6"><div class="writing-criterion">' +
                            '<div class="d-flex justify-content-between align-items-center mb-2">' +
                            '<strong>' + esc(c.title) + '</strong>' +
                            '<span class="badge" style="background:#4274B9">Band ' + esc(c.band) + '</span></div>' +
                            checklistItems(a, c.key, c.items) +
                            (c.notes ? '<div class="mt-2 small"><strong>Notes:</strong><div class="text-muted" style="white-space:pre-wrap">' + esc(c.notes) + '</div></div>' : '') +
                            '</div></div>';
                    });
                    html += '</div>';

                    if (a.feedback) {
                        html += '<div class="mt-3"><strong>Additional Remark:</strong><div class="border rounded p-2 mt-1" style="white-space:pre-wrap; background:#f8f9fa">' + esc(a.feedback) + '</div></div>';
                    }
                } else {
                    html += '<div class="row">' +
                        bandCard('Fluency & Coherence', a.fc_band) +
                        bandCard('Lexical Resource', a.lr_band) +
                        bandCard('Grammar', a.gra_band) +
                        bandCard('Pronunciation', a.pr_band) +
                        bandCard('Overall Band', a.overall) +
                        '</div>';
                    if (a.remark) {
                        html += '<div class="mt-2"><strong>Remark:</strong><div class="border rounded p-2 mt-1" style="white-space:pre-wrap; background:#f8f9fa">' + esc(a.remark) + '</div></div>';
                    }
                }

                html += '</div></div>';
                return html;
            }

            function renderAnswers(d) {
                const title = document.getElementById('answer-modal-title');
                title.textContent = (d.set_name ? d.set_name + ' - ' : '') + d.nama_tipe +
                    ' (' + (d.tipe_test === 'mock' ? 'Mock Test' : 'Practice') + ')';

                let html = '<div class="mb-3 small text-muted">' + esc(d.created_at);

                if (d.kategori === 'reading' || d.kategori === 'listening') {
                    html += ' &bull; Score: <strong>' + esc(d.score) + '/' + esc(d.jumlah_soal) + '</strong>';
                    if (d.score_conversion) {
                        html += ' &bull; Band: <strong>' + esc(d.score_conversion) + '</strong>';
                    }
                } else if (d.assessor) {
                    html += ' &bull; Assessor: <strong>' + esc(d.assessor) + '</strong>';
                }
                html += '</div>';

                if (!d.details || !d.details.length) {
                    html += '<div class="alert alert-warning mb-0">No answers recorded for this attempt.</div>';
                } else if (d.kategori === 'writing') {
                    d.details.forEach(function(t) {
                        const a = d.assessments && d.assessments[t.soal_id];
                        const answer = t.jawaban_user || '';
                        const wordCount = answer.trim() ? answer.trim().split(/\s+/).length : 0;

                        html += '<div class="card mb-3">' +
                            '<div class="card-header d-flex justify-content-between align-items-center">' +
                            '<strong><i class="fas fa-pen me-1"></i>' + esc(a?.task || t.soal_id) + '</strong>' +
                            '<span class="badge text-dark" style="background:#eef4fb"><i class="fas fa-calculator me-1"></i>' + wordCount + ' words</span>' +
                            '</div><div class="card-body">';

                        if (a?.question) {
                            html += '<div class="mb-3"><h6 class="fw-bold"><i class="fas fa-file-alt me-1"></i> Question</h6>' +
                                '<div class="writing-question">' + a.question + '</div></div>';
                        }

                        html += '<h6 class="fw-bold"><i class="fas fa-user-edit me-1"></i> My Answer</h6>' +
                            '<div class="writing-student-answer">' +
                            renderHighlightedAnswer(answer, a?.answer_highlights || []) +
                            '</div>' +
                            renderTutorComments(a?.answer_highlights || []) +
                            '</div></div>';

                        if (a) html += renderAssessment(a);
                    });
                } else if (d.kategori === 'speaking') {
                    d.details.forEach(function(t) {
                        const url = d.video_urls[t.soal_id];
                        html += '<div class="card mb-3">' +
                            '<div class="card-header"><strong>' + esc(t.soal_id) + '</strong></div>' +
                            '<div class="card-body">' +
                            (url ?
                                '<video controls preload="metadata" style="max-width:100%" src="' + url + '"></video>' :
                                '<span class="text-muted">Recording file: ' + esc(t.jawaban_user) + '</span>') +
                            '</div></div>';
                        const a = d.assessments && d.assessments[t.soal_id];
                        if (a) html += renderAssessment(a);
                    });
                } else {
                    html += '<div class="table-responsive"><table class="table table-sm table-bordered align-middle">' +
                        '<thead><tr><th style="width:60px">#</th><th>My Answer</th><th>Correct Answer</th><th class="text-center" style="width:100px">Status</th></tr></thead><tbody>';
                    d.details.forEach(function(t, i) {
                        html += '<tr><td>' + (i + 1) + '</td>' +
                            '<td>' + (t.jawaban_user ? esc(t.jawaban_user) : '<span class="text-muted">-</span>') + '</td>' +
                            '<td>' + esc(t.jawaban_benar) + '</td>' +
                            '<td class="text-center">' + (t.status ?
                                '<span class="badge bg-success">Correct</span>' :
                                '<span class="badge bg-danger">Wrong</span>') + '</td></tr>';
                    });
                    html += '</tbody></table></div>';
                }

                document.getElementById('answer-modal-body').innerHTML = html;
            }

            document.querySelectorAll('.view-answers').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const body = document.getElementById('answer-modal-body');
                    body.innerHTML = '<div class="text-center py-5"><div class="spinner-border text-primary"></div></div>';
                    answerModal.show();

                    fetch('/history/answers/' + id, {
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                        .then(function(r) {
                            return r.json();
                        })
                        .then(function(res) {
                            if (!res.status) throw new Error(res.message || 'Failed to load answers.');
                            renderAnswers(res.data);
                        })
                        .catch(function(err) {
                            body.innerHTML = '<div class="alert alert-danger mb-0">' + esc(err.message) + '</div>';
                        });
                });
            });
        });
    </script>
@endsection
