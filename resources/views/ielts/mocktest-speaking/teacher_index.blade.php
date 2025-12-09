<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Dashboard - Mock Test Sessions</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --warning-color: #f8961e;
            --success-color: #4cc9f0;
            --danger-color: #f72585;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --border-radius: 12px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
            padding: 20px 0;
        }
        
        .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            transition: var(--transition);
            margin-bottom: 30px;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-bottom: none;
            padding: 25px 30px;
            position: relative;
            overflow: hidden;
        }
        
        .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .section-title {
            font-weight: 700;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .section-title i {
            font-size: 1.3rem;
            opacity: 0.9;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 15px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
        }
        
        .user-info i {
            font-size: 1.2rem;
        }
        
        .card-body {
            padding: 30px;
        }
        
        .empty-state {
            text-align: center;
            padding: 50px 20px;
            color: #6c757d;
        }
        
        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.5;
        }
        
        .empty-state h5 {
            margin-bottom: 10px;
            color: #495057;
        }
        
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table thead th {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-bottom: 2px solid #dee2e6;
            font-weight: 700;
            color: var(--dark-color);
            padding: 15px 12px;
            vertical-align: middle;
        }
        
        .table tbody tr {
            transition: var(--transition);
        }
        
        .table tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
            transform: translateY(-1px);
        }
        
        .table tbody td {
            padding: 15px 12px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f3f4;
        }
        
        .btn {
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.85rem;
        }
        
        .btn-sm {
            padding: 6px 12px;
            font-size: 0.8rem;
        }
        
        .btn-success {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
        }
        
        .btn-success:hover {
            background: linear-gradient(135deg, #218838, #1e9e8a);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
            color: white;
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545, #e83e8c);
            color: white;
        }
        
        .btn-danger:hover {
            background: linear-gradient(135deg, #c82333, #d91a7a);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
            color: white;
        }
        
        .btn-info {
            background: linear-gradient(135deg, #17a2b8, #6f42c1);
            color: white;
        }
        
        .btn-info:hover {
            background: linear-gradient(135deg, #138496, #5a2d9c);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(23, 162, 184, 0.3);
            color: white;
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
        }
        
        .btn-warning {
            background: linear-gradient(135deg, var(--warning-color), #e85d04);
            color: white;
        }
        
        .action-buttons {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }
        
        .session-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border-left: 4px solid var(--primary-color);
            transition: var(--transition);
        }
        
        .session-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .session-card.pending {
            border-left-color: var(--warning-color);
        }
        
        .session-card.upcoming {
            border-left-color: var(--success-color);
        }
        
        .mobile-view {
            display: none;
        }
        
        /* Modal Styles */
        .modal-content {
            border: none;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-bottom: none;
            padding: 20px 25px;
        }
        
        .modal-title {
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .modal-body {
            padding: 25px;
        }
        
        .modal-footer {
            border-top: 1px solid #e9ecef;
            padding: 20px 25px;
        }
        
        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 10px 15px;
            transition: var(--transition);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.15);
        }
        
        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark-color);
        }
        
        .count-badge {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 50px;
            padding: 4px 12px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-left: 10px;
        }
        
        @media (max-width: 768px) {
            .desktop-view {
                display: none;
            }
            
            .mobile-view {
                display: block;
            }
            
            .card-header {
                padding: 20px;
            }
            
            .card-body {
                padding: 20px;
            }
            
            .session-card {
                padding: 15px;
            }
            
            .action-buttons {
                justify-content: flex-start;
                margin-top: 10px;
            }
        }
        
        .floating-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 3rem;
            opacity: 0.1;
            z-index: 0;
        }
        
        .time-badge {
            background: linear-gradient(135deg, var(--accent-color), var(--primary-color));
            color: white;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Pending Requests -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <h4 class="section-title mb-0">
                                <i class="fas fa-clock"></i>
                                Pending Mock Test Requests
                                <span class="count-badge">{{ $pendingSessions->count() }}</span>
                            </h4>
                        </div>
                        <div class="user-info">
                            <i class="fas fa-user-circle"></i>
                            <span>{{ auth()->user()->name }}</span>
                        </div>
                        <i class="fas fa-hourglass-half floating-icon"></i>
                    </div>
                    <div class="card-body">
                        <!-- Desktop View -->
                        <div class="desktop-view">
                            @if($pendingSessions->isEmpty())
                                <div class="empty-state">
                                    <i class="fas fa-inbox"></i>
                                    <h5>No Pending Requests</h5>
                                    <p>You don't have any pending mock test requests at the moment.</p>
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th><i class="fas fa-user-graduate me-2"></i>Student</th>
                                                <th><i class="fas fa-heading me-2"></i>Title</th>
                                                <th><i class="fas fa-clock me-2"></i>Proposed Time</th>
                                                <th><i class="fas fa-hourglass me-2"></i>Duration</th>
                                                <th><i class="fas fa-cogs me-2"></i>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pendingSessions as $session)
                                                <tr>
                                                    <td class="fw-semibold">{{ $session->student->name }}</td>
                                                    <td>{{ $session->title }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-calendar text-primary me-2"></i>
                                                            {{ $session->proposed_time->format('M d, Y H:i') }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="time-badge">{{ $session->duration_minutes }} minutes</span>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#acceptModal{{ $session->id }}">
                                                                <i class="fas fa-check me-1"></i>Accept
                                                            </button>
                                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $session->id }}">
                                                                <i class="fas fa-times me-1"></i>Reject
                                                            </button>
                                                            <a href="{{ route('mock-test.show', $session) }}" class="btn btn-sm btn-info">
                                                                <i class="fas fa-eye me-1"></i>Details
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>

                        <!-- Mobile View -->
                        <div class="mobile-view">
                            @if($pendingSessions->isEmpty())
                                <div class="empty-state">
                                    <i class="fas fa-inbox"></i>
                                    <h5>No Pending Requests</h5>
                                    <p>You don't have any pending mock test requests at the moment.</p>
                                </div>
                            @else
                                @foreach ($pendingSessions as $session)
                                    <div class="session-card pending">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="fw-bold text-truncate">{{ $session->title }}</h6>
                                            <span class="time-badge">{{ $session->duration_minutes }}min</span>
                                        </div>
                                        
                                        <div class="mb-2">
                                            <i class="fas fa-user-graduate text-primary me-2"></i>
                                            <strong>Student:</strong> {{ $session->student->name }}
                                        </div>
                                        
                                        <div class="mb-3">
                                            <i class="fas fa-clock text-primary me-2"></i>
                                            <strong>Proposed:</strong> {{ $session->proposed_time->format('M d, Y H:i') }}
                                        </div>
                                        
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#acceptModal{{ $session->id }}">
                                                <i class="fas fa-check me-1"></i>Accept
                                            </button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $session->id }}">
                                                <i class="fas fa-times me-1"></i>Reject
                                            </button>
                                            <a href="{{ route('mock-test.show', $session) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye me-1"></i>Details
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Upcoming Sessions -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="section-title mb-0">
                            <i class="fas fa-calendar-check"></i>
                            Upcoming Sessions
                            <span class="count-badge">{{ $upcomingSessions->count() }}</span>
                        </h4>
                        <i class="fas fa-video floating-icon"></i>
                    </div>
                    <div class="card-body">
                        <!-- Desktop View -->
                        <div class="desktop-view">
                            @if($upcomingSessions->isEmpty())
                                <div class="empty-state">
                                    <i class="fas fa-calendar-times"></i>
                                    <h5>No Upcoming Sessions</h5>
                                    <p>You don't have any upcoming mock test sessions scheduled.</p>
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th><i class="fas fa-user-graduate me-2"></i>Student</th>
                                                <th><i class="fas fa-heading me-2"></i>Title</th>
                                                <th><i class="fas fa-calendar-alt me-2"></i>Scheduled Time</th>
                                                <th><i class="fas fa-hourglass me-2"></i>Duration</th>
                                                <th><i class="fas fa-cogs me-2"></i>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($upcomingSessions as $session)
                                                <tr>
                                                    <td class="fw-semibold">{{ $session->student->name }}</td>
                                                    <td>{{ $session->title }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-calendar-check text-success me-2"></i>
                                                            {{ $session->scheduled_time->format('M d, Y H:i') }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="time-badge">{{ $session->duration_minutes }} minutes</span>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            @if($session->canStart())
                                                                <a href="{{ route('mock-test.start', $session) }}" class="btn btn-sm btn-success">
                                                                    <i class="fas fa-play me-1"></i>Start Session
                                                                </a>
                                                            @else
                                                                <button class="btn btn-sm btn-secondary" disabled>
                                                                    <i class="fas fa-clock me-1"></i>Starts {{ $session->scheduled_time->diffForHumans() }}
                                                                </button>
                                                            @endif
                                                            <a href="{{ route('mock-test.show', $session) }}" class="btn btn-sm btn-info">
                                                                <i class="fas fa-eye me-1"></i>Details
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>

                        <!-- Mobile View -->
                        <div class="mobile-view">
                            @if($upcomingSessions->isEmpty())
                                <div class="empty-state">
                                    <i class="fas fa-calendar-times"></i>
                                    <h5>No Upcoming Sessions</h5>
                                    <p>You don't have any upcoming mock test sessions scheduled.</p>
                                </div>
                            @else
                                @foreach ($upcomingSessions as $session)
                                    <div class="session-card upcoming">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="fw-bold text-truncate">{{ $session->title }}</h6>
                                            <span class="time-badge">{{ $session->duration_minutes }}min</span>
                                        </div>
                                        
                                        <div class="mb-2">
                                            <i class="fas fa-user-graduate text-primary me-2"></i>
                                            <strong>Student:</strong> {{ $session->student->name }}
                                        </div>
                                        
                                        <div class="mb-3">
                                            <i class="fas fa-calendar-check text-success me-2"></i>
                                            <strong>Scheduled:</strong> {{ $session->scheduled_time->format('M d, Y H:i') }}
                                        </div>
                                        
                                        <div class="action-buttons">
                                            @if($session->canStart())
                                                <a href="{{ route('mock-test.start', $session) }}" class="btn btn-sm btn-success">
                                                    <i class="fas fa-play me-1"></i>Start
                                                </a>
                                            @else
                                                <button class="btn btn-sm btn-secondary" disabled>
                                                    <i class="fas fa-clock me-1"></i>{{ $session->scheduled_time->diffForHumans() }}
                                                </button>
                                            @endif
                                            <a href="{{ route('mock-test.show', $session) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye me-1"></i>Details
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    @foreach ($pendingSessions as $session)
        <!-- Accept Modal -->
        <div class="modal fade" id="acceptModal{{ $session->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('mock-test.accept', $session) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-check-circle me-2"></i>Accept Mock Test Session
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <p class="text-muted">You are about to accept the session: <strong>"{{ $session->title }}"</strong> from <strong>{{ $session->student->name }}</strong>.</p>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Scheduled Time:</label>
                                <input type="datetime-local" name="scheduled_time" class="form-control" required min="{{ now()->format('Y-m-d\TH:i') }}">
                                <div class="form-text">Please select a time that works for both you and the student.</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Notes (Optional):</label>
                                <textarea name="teacher_notes" class="form-control" rows="3" placeholder="Add any notes or instructions for the student..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i>Cancel
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check me-1"></i>Accept Session
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Reject Modal -->
        <div class="modal fade" id="rejectModal{{ $session->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('mock-test.reject', $session) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-times-circle me-2"></i>Reject Mock Test Session
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <p class="text-muted">You are about to reject the session: <strong>"{{ $session->title }}"</strong> from <strong>{{ $session->student->name }}</strong>.</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Reason for Rejection:</label>
                                <textarea name="rejection_reason" class="form-control" rows="4" placeholder="Please provide a reason for rejecting this session..." required></textarea>
                                <div class="form-text">This feedback will be shared with the student.</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i>Cancel
                            </button>
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-times me-1"></i>Reject Session
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            // Format to YYYY-MM-DDTHH:MM (removing seconds and milliseconds)
            now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
            document.getElementById('proposed_time').min = now.toISOString().slice(0, 16);
            
            // Add some interactivity to form elements
            const formControls = document.querySelectorAll('.form-control, .form-select');
            formControls.forEach(control => {
                control.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                control.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation to table rows
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach((row, index) => {
                row.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Add hover effects to session cards
            const sessionCards = document.querySelectorAll('.session-card');
            sessionCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Set minimum datetime for scheduled time inputs
            const datetimeInputs = document.querySelectorAll('input[type="datetime-local"]');
            datetimeInputs.forEach(input => {
                const now = new Date();
                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                input.min = now.toISOString().slice(0, 16);
            });
        });
    </script>
</body>
</html>