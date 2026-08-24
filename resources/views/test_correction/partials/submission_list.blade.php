@if ($submissions->isEmpty())
    <div class="text-center text-muted py-5">
        <i class="fa fa-inbox fa-2x mb-2"></i>
        <p class="mb-0">No submissions found.</p>
    </div>
@else
    {{-- DESKTOP TABLE --}}
    <div class="table-responsive d-none d-md-block">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Student</th>
                    <th>Set / Topic</th>
                    @if ($kategori === 'speaking')
                        <th>Part</th>
                    @else
                        <th>Task</th>
                        <th>Words</th>
                    @endif
                    <th>Type</th>
                    <th>Submitted</th>
                    <th>Status</th>
                    <th>Assessor</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($submissions as $s)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ $s->student?->foto
                                    ? asset('storage/' . $s->student->foto)
                                    : asset('own_assets/images/avatar.png') }}"
                                    class="rounded-circle" width="35" height="35" alt="">
                                <div>
                                    <div class="fw-semibold">{{ $s->student->name ?? 'Unknown' }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="fw-semibold">{{ $s->setSoal?->name ?? '-' }}</div>
                            <small class="text-muted">{{ Str::limit($s->setSoal?->thumbnail ?? '', 40) }}</small>
                        </td>
                        @if ($kategori === 'speaking')
                            <td>Part {{ $s->part_soal }} <small class="text-muted">#{{ $s->no_soal }}</small></td>
                        @else
                            <td>{{ $s->task }}</td>
                            <td>{{ str_word_count($s->answer) }}</td>
                        @endif
                        <td>
                            <span class="badge {{ $s->tipe == 'mock' ? 'bg-warning text-dark' : 'bg-primary' }}">
                                {{ $s->tipe == 'mock' ? 'Mock' : 'Practice' }}
                            </span>
                        </td>
                        <td>{{ $s->created_at->format('d M Y H:i') }}</td>
                        <td>
                            @if ($s->teacher_id)
                                <span class="badge bg-success submission-filter-badge">Reviewed</span>
                            @else
                                <span class="badge bg-warning text-dark submission-filter-badge">Not Reviewed</span>
                            @endif
                        </td>
                        <td>{{ $s->teacher->name ?? '-' }}</td>
                        <td class="text-center">
                            <div class="d-inline-flex gap-1">
                                <button class="btn btn-sm btn-primary {{ $kategori === 'speaking' ? 'btn-review-speaking' : 'btn-review-writing' }}"
                                    data-id="{{ $s->id }}">
                                    <i class="fa fa-edit"></i> Review
                                </button>
                                @if ($kategori === 'writing')
                                    <button class="btn btn-sm btn-danger btn-delete-writing" data-id="{{ $s->id }}"
                                        title="Delete submission">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- MOBILE CARDS --}}
    <div class="d-block d-md-none">
        @foreach ($submissions as $s)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <strong>{{ $s->student->name ?? 'Unknown' }}</strong>
                                        @if ($s->teacher_id)
                                            <span class="badge bg-success submission-filter-badge">Reviewed</span>
                                        @else
                                            <span class="badge bg-warning text-dark submission-filter-badge">Not Reviewed</span>
                                        @endif
                                    </div>
                    <div class="small text-muted">
                        {{ $s->setSoal->name ?? '-' }} •
                        {{ $s->tipe == 'mock' ? 'Mock' : 'Practice' }} •
                        {{ $s->created_at->format('d M Y') }}
                    </div>
                    <div class="small">
                        @if ($kategori === 'speaking')
                            Part {{ $s->part_soal }}
                        @else
                            {{ $s->task }} ({{ str_word_count($s->answer) }} words)
                        @endif
                    </div>
                    <div class="mt-2">
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-primary {{ $kategori === 'speaking' ? 'btn-review-speaking' : 'btn-review-writing' }}"
                                data-id="{{ $s->id }}">
                                <i class="fa fa-edit"></i> Review
                            </button>
                            @if ($kategori === 'writing')
                                <button class="btn btn-sm btn-danger btn-delete-writing" data-id="{{ $s->id }}"
                                    title="Delete submission">
                                    <i class="fa fa-trash"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- PAGINATION --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $submissions->links() }}
    </div>
@endif
