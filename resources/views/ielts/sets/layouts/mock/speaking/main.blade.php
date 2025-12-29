<div class="container" style="margin-top: 20px">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <h4 class="page-title mb-0">Mock Test Speaking Sessions</h4>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-primary request-session">
                            <i class="fas fa-plus me-2"></i>Request New Session
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    <!-- Desktop View -->
                    <div class="desktop-view">
                        @if ($sessions->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-heading me-2"></i>Title</th>
                                            <th><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</th>
                                            <th><i class="fas fa-clock me-2"></i>Proposed Time</th>
                                            <th><i class="fas fa-calendar-alt me-2"></i>Scheduled Time</th>
                                            <th><i class="fas fa-info-circle me-2"></i>Status</th>
                                            <th><i class="fas fa-cogs me-2"></i>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sessions as $session)
                                            <tr>
                                                <td class="fw-semibold">{{ $session->title }}</td>
                                                <td>{{ $session->teacher->name }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-clock text-muted me-2"></i>
                                                        {{ $session->proposed_time->format('M d, Y H:i') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($session->scheduled_time)
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-calendar-check text-success me-2"></i>
                                                            {{ $session->scheduled_time->format('M d, Y H:i') }}
                                                        </div>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @php
                                                        $badgeClass = 'badge-pending';
                                                        if ($session->status === 'accepted') {
                                                            $badgeClass = 'badge-accepted';
                                                        } elseif ($session->status === 'rejected') {
                                                            $badgeClass = 'badge-rejected';
                                                        } elseif ($session->status === 'completed') {
                                                            $badgeClass = 'badge-completed';
                                                        } elseif ($session->status === 'cancelled') {
                                                            $badgeClass = 'badge-cancelled';
                                                        }
                                                    @endphp
                                                    <span class="status-badge {{ $badgeClass }}">
                                                        <i class="fas fa-circle me-1" style="font-size: 0.5rem;"></i>
                                                        {{ ucfirst($session->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-buttons">
                                                        {{-- <a href="{{ route('mock-test.show', $session) }}"
                                                                class="btn btn-sm btn-info">
                                                                <i class="fas fa-eye me-1"></i>View
                                                            </a> --}}
                                                        <button class="btn btn-info btn-sm btn-detail"
                                                            data-id="{{ $session->id }}">
                                                            <i class="fa fa-eye"></i> Details
                                                        </button>
                                                        @if ($session->status === 'accepted' && $session->canStart())
                                                            <a href="{{ route('mock-test.start', $session) }}"
                                                                class="btn btn-sm btn-success">
                                                                <i class="fas fa-video me-1"></i>Join Session
                                                            </a>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="empty-state">
                                <i class="fas fa-calendar-times mb-4"></i>
                                <h4>No Mock Test Speaking Sessions Yet</h4>
                                <p>You haven't requested any Mock Test Speaking sessions yet. Start by requesting
                                    your first
                                    session!</p>
                                <button class="btn btn-primary request-session">
                                    <i class="fas fa-plus"></i>Request New Session
                                </button>
                            </div>
                        @endif
                    </div>

                    <!-- Mobile View -->
                    <div class="mobile-view">
                        @if ($sessions->count() > 0)
                            @foreach ($sessions as $session)
                                <div class="session-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold">{{ $session->title }}</h5>
                                        @php
                                            $badgeClass = 'badge-pending';
                                            if ($session->status === 'accepted') {
                                                $badgeClass = 'badge-accepted';
                                            } elseif ($session->status === 'rejected') {
                                                $badgeClass = 'badge-rejected';
                                            } elseif ($session->status === 'completed') {
                                                $badgeClass = 'badge-completed';
                                            } elseif ($session->status === 'cancelled') {
                                                $badgeClass = 'badge-cancelled';
                                            }
                                        @endphp
                                        <span class="status-badge {{ $badgeClass }}">
                                            {{ ucfirst($session->status) }}
                                        </span>
                                    </div>

                                    <div class="mb-2">
                                        <i class="fas fa-chalkboard-teacher text-primary me-2"></i>
                                        <strong>Teacher:</strong> {{ $session->teacher->name }}
                                    </div>

                                    <div class="mb-2">
                                        <i class="fas fa-clock text-primary me-2"></i>
                                        <strong>Proposed:</strong>
                                        {{ $session->proposed_time->format('M d, Y H:i') }}
                                    </div>

                                    <div class="mb-3">
                                        <i class="fas fa-calendar-alt text-primary me-2"></i>
                                        <strong>Scheduled:</strong>
                                        @if ($session->scheduled_time)
                                            {{ $session->scheduled_time->format('M d, Y H:i') }}
                                        @else
                                            <span class="text-muted">Not scheduled</span>
                                        @endif
                                    </div>

                                    <div class="action-buttons">
                                        {{-- <button href="{{ route('mock-test.show', $session) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-eye me-1"></i>Details
                                            </a> --}}
                                        <button class="btn btn-info btn-sm btn-detail" data-id="{{ $session->id }}">
                                            <i class="fa fa-eye"></i> Details
                                        </button>
                                        @if ($session->status === 'accepted' && $session->canStart())
                                            <a href="{{ route('mock-test.start', $session) }}"
                                                class="btn btn-sm btn-success">
                                                <i class="fas fa-video me-1"></i>Join
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="empty-state">
                                <i class="fas fa-calendar-times mb-4"></i>
                                <h4>No Sessions Yet</h4>
                                <p>Start by requesting your first Mock Test Speaking Session!</p>
                                <button class="btn btn-primary mt-3 request-session">
                                    <i class="fas fa-plus me-2"></i>Request Session
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
