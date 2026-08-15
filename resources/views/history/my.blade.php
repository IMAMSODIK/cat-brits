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

            function renderAssessment(a) {
                let html = '<div class="card border-success mb-3">' +
                    '<div class="card-header bg-success text-white"><strong>Assessment Result</strong></div>' +
                    '<div class="card-body">';

                if (a.type === 'writing') {
                    html += '<div class="row">' +
                        bandCard('Task Achievement', a.ta_band) +
                        bandCard('Coherence & Cohesion', a.cc_band) +
                        bandCard('Lexical Resource', a.lr_band) +
                        bandCard('Grammar', a.gra_band) +
                        bandCard('Overall Band', a.overall) +
                        '</div>';
                    if (a.feedback) {
                        html += '<div class="mt-2"><strong>Feedback:</strong><div class="border rounded p-2 mt-1" style="white-space:pre-wrap; background:#f8f9fa">' + esc(a.feedback) + '</div></div>';
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
                        html += '<div class="card mb-3">' +
                            '<div class="card-header"><strong>' + esc(t.soal_id) + '</strong></div>' +
                            '<div class="card-body" style="white-space:pre-wrap; max-height:400px; overflow:auto">' +
                            esc(t.jawaban_user) +
                            '</div></div>';
                        const a = d.assessments && d.assessments[t.soal_id];
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
