<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mock Test Sessions</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
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
        
        .page-title {
            font-weight: 700;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
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
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            transition: var(--transition);
            position: relative;
            z-index: 1;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 15px rgba(67, 97, 238, 0.3);
        }
        
        .card-body {
            padding: 30px;
        }
        
        .alert-success {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border: none;
            border-radius: 8px;
            color: #155724;
            padding: 15px 20px;
            margin-bottom: 25px;
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
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .table tbody td {
            padding: 15px 12px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f3f4;
        }
        
        .status-badge {
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-pending {
            background: linear-gradient(135deg, #fff3cd, #ffc107);
            color: #856404;
        }
        
        .badge-accepted {
            background: linear-gradient(135deg, #d1edff, #17a2b8);
            color: #0c5460;
        }
        
        .badge-rejected {
            background: linear-gradient(135deg, #f8d7da, #dc3545);
            color: #721c24;
        }
        
        .badge-completed {
            background: linear-gradient(135deg, #d4edda, #28a745);
            color: #155724;
        }
        
        .badge-cancelled {
            background: linear-gradient(135deg, #e2e3e5, #6c757d);
            color: #383d41;
        }
        
        .btn-sm {
            padding: 6px 12px;
            font-size: 0.85rem;
            border-radius: 6px;
            margin: 2px;
            transition: var(--transition);
        }
        
        .btn-info {
            background: linear-gradient(135deg, #17a2b8, #138496);
            border: none;
            color: white;
        }
        
        .btn-info:hover {
            background: linear-gradient(135deg, #138496, #117a8b);
            color: white;
            transform: translateY(-1px);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #28a745, #20c997);
            border: none;
            color: white;
        }
        
        .btn-success:hover {
            background: linear-gradient(135deg, #218838, #1e9e8a);
            color: white;
            transform: translateY(-1px);
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
        
        .empty-state h4 {
            margin-bottom: 10px;
            color: #495057;
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
        
        .mobile-view {
            display: none;
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
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .card-body {
                padding: 20px;
            }
            
            .user-info {
                justify-content: center;
            }
            
            .session-card {
                padding: 15px;
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
        
        .action-buttons {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <h4 class="page-title mb-0">My Mock Test Sessions</h4>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="user-info">
                                <i class="fas fa-user-circle"></i>
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                            <a href="{{ route('mock-test.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Request New Session
                            </a>
                        </div>
                        <i class="fas fa-calendar-check floating-icon"></i>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            </div>
                        @endif

                        <!-- Desktop View -->
                        <div class="desktop-view">
                            @if($sessions->count() > 0)
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
                                                        @if($session->scheduled_time)
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
                                                            if ($session->status === 'accepted') $badgeClass = 'badge-accepted';
                                                            elseif ($session->status === 'rejected') $badgeClass = 'badge-rejected';
                                                            elseif ($session->status === 'completed') $badgeClass = 'badge-completed';
                                                            elseif ($session->status === 'cancelled') $badgeClass = 'badge-cancelled';
                                                        @endphp
                                                        <span class="status-badge {{ $badgeClass }}">
                                                            <i class="fas fa-circle me-1" style="font-size: 0.5rem;"></i>
                                                            {{ ucfirst($session->status) }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <a href="{{ route('mock-test.show', $session) }}" class="btn btn-sm btn-info">
                                                                <i class="fas fa-eye me-1"></i>View
                                                            </a>
                                                            @if($session->status === 'accepted' && $session->canStart())
                                                                <a href="{{ route('mock-test.start', $session) }}" class="btn btn-sm btn-success">
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
                                    <i class="fas fa-calendar-times"></i>
                                    <h4>No Mock Test Sessions Yet</h4>
                                    <p>You haven't requested any mock test sessions yet. Start by requesting your first session!</p>
                                    <a href="{{ route('mock-test.create') }}" class="btn btn-primary mt-3">
                                        <i class="fas fa-plus me-2"></i>Request Your First Session
                                    </a>
                                </div>
                            @endif
                        </div>

                        <!-- Mobile View -->
                        <div class="mobile-view">
                            @if($sessions->count() > 0)
                                @foreach ($sessions as $session)
                                    <div class="session-card">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="fw-bold">{{ $session->title }}</h5>
                                            @php
                                                $badgeClass = 'badge-pending';
                                                if ($session->status === 'accepted') $badgeClass = 'badge-accepted';
                                                elseif ($session->status === 'rejected') $badgeClass = 'badge-rejected';
                                                elseif ($session->status === 'completed') $badgeClass = 'badge-completed';
                                                elseif ($session->status === 'cancelled') $badgeClass = 'badge-cancelled';
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
                                            <strong>Proposed:</strong> {{ $session->proposed_time->format('M d, Y H:i') }}
                                        </div>
                                        
                                        <div class="mb-3">
                                            <i class="fas fa-calendar-alt text-primary me-2"></i>
                                            <strong>Scheduled:</strong> 
                                            @if($session->scheduled_time)
                                                {{ $session->scheduled_time->format('M d, Y H:i') }}
                                            @else
                                                <span class="text-muted">Not scheduled</span>
                                            @endif
                                        </div>
                                        
                                        <div class="action-buttons">
                                            <a href="{{ route('mock-test.show', $session) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye me-1"></i>Details
                                            </a>
                                            @if($session->status === 'accepted' && $session->canStart())
                                                <a href="{{ route('mock-test.start', $session) }}" class="btn btn-sm btn-success">
                                                    <i class="fas fa-video me-1"></i>Join
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="empty-state">
                                    <i class="fas fa-calendar-times"></i>
                                    <h4>No Sessions Yet</h4>
                                    <p>Start by requesting your first mock test session!</p>
                                    <a href="{{ route('mock-test.create') }}" class="btn btn-primary mt-3">
                                        <i class="fas fa-plus me-2"></i>Request Session
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
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
        });
    </script>
</body>
</html>