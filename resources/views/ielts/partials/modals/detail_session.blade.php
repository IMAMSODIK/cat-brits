<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Details - {{ $mockTest->title }}</title>

    <style>
        :root {
            --modal-primary-color: #4274ba;
            --modal-secondary-color: #3f37c9;
            --modal-accent-color: #4895ef;
            --modal-success-color: #4cc9f0;
            --modal-danger-color: #f72585;
            --modal-warning-color: #f8961e;
            --modal-light-color: #f8f9fa;
            --modal-dark-color: #212529;
            --modal-border-radius: 12px;
            --modal-box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --modal-transition: all 0.3s ease;
        }

        #detail_session .card {
            border: none;
            border-radius: var(--modal-border-radius);
            box-shadow: var(--modal-box-shadow);
            overflow: hidden;
            transition: var(--modal-transition);
            margin-bottom: 30px;
        }

        #detail_session .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        #detail_session .card-header {
            background: linear-gradient(135deg, var(--modal-primary-color), var(--modal-secondary-color));
            color: white;
            border-bottom: none;
            padding: 25px 30px;
            position: relative;
            overflow: hidden;
        }

        #detail_session .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        #detail_session .page-title {
            font-weight: 700;
            margin-bottom: 5px;
            position: relative;
            z-index: 1;
        }

        #detail_session .session-title {
            font-size: 1.8rem;
            margin-bottom: 0;
        }

        #detail_session .user-info {
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

        #detail_session .user-info i {
            font-size: 1.2rem;
        }

        #detail_session .card-body {
            padding: 30px;
        }

        #detail_session .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        #detail_session .info-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            border-left: 4px solid var(--modal-primary-color);
        }

        #detail_session .info-card h5 {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--modal-primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #detail_session .info-card h5 i {
            font-size: 1.2rem;
        }

        #detail_session .info-item {
            display: flex;
            justify-content: between;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f3f4;
        }

        #detail_session .info-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        #detail_session .info-label {
            font-weight: 600;
            color: var(--modal-dark-color);
            min-width: 120px;
        }

        #detail_session .info-value {
            color: #495057;
            flex: 1;
        }

        #detail_session .status-badge {
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        #detail_session .badge-pending {
            background: linear-gradient(135deg, #fff3cd, #ffc107);
            color: #856404;
        }

        #detail_session .badge-accepted {
            background: linear-gradient(135deg, #d1edff, #17a2b8);
            color: #0c5460;
        }

        #detail_session .badge-rejected {
            background: linear-gradient(135deg, #f8d7da, #dc3545);
            color: #721c24;
        }

        #detail_session .badge-completed {
            background: linear-gradient(135deg, #d4edda, #28a745);
            color: #155724;
        }

        #detail_session .badge-cancelled {
            background: linear-gradient(135deg, #e2e3e5, #6c757d);
            color: #383d41;
        }

        #detail_session .action-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #e9ecef;
        }

        #detail_session .btn {
            border: none;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        #detail_session .btn-primary {
            background: linear-gradient(135deg, var(--modal-primary-color), var(--modal-secondary-color));
            color: white;
        }

        #detail_session .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 15px rgba(67, 97, 238, 0.3);
            color: white;
        }

        #detail_session .btn-success {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
        }

        #detail_session .btn-success:hover {
            background: linear-gradient(135deg, #218838, #1e9e8a);
            transform: translateY(-2px);
            color: white;
        }

        #detail_session .btn-info {
            background: linear-gradient(135deg, #17a2b8, #6f42c1);
            color: white;
        }

        #detail_session .btn-info:hover {
            background: linear-gradient(135deg, #138496, #5a2d9c);
            transform: translateY(-2px);
            color: white;
        }

        #detail_session .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
        }

        #detail_session .btn-secondary:hover {
            background: linear-gradient(135deg, #5a6268, #343a40);
            transform: translateY(-2px);
            color: white;
        }

        #detail_session .btn-danger {
            background: linear-gradient(135deg, #dc3545, #e83e8c);
            color: white;
        }

        #detail_session .btn-danger:hover {
            background: linear-gradient(135deg, #c82333, #d91a7a);
            transform: translateY(-2px);
            color: white;
        }

        #detail_session .notes-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        #detail_session .notes-section h6 {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--modal-primary-color);
        }

        #detail_session .empty-note {
            color: #6c757d;
            font-style: italic;
        }

        #detail_session .floating-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 3rem;
            opacity: 0.1;
            z-index: 0;
        }

        @media (max-width: 768px) {
            #detail_session .card-header {
                padding: 20px;
            }

            #detail_session .card-body {
                padding: 20px;
            }

            #detail_session .info-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            #detail_session .info-card {
                padding: 20px;
            }

            #detail_session .action-buttons {
                flex-direction: column;
            }

            #detail_session .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container" id="detail_session">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                            </div>
                        @endif

                        <div class="info-grid">
                            <!-- Basic Information -->
                            <div class="info-card">
                                <h5><i class="fas fa-info-circle"></i> Session Information</h5>
                                <div class="info-item">
                                    <span class="info-label">Title:</span>
                                    <span class="info-value">{{ $mockTest->title }}</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Description:</span>
                                    <span class="info-value">{{ $mockTest->description ?: 'No description provided' }}</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Status:</span>
                                    <span class="info-value">
                                        @php
                                            $badgeClass = 'badge-pending';
                                            if ($mockTest->status === 'accepted') $badgeClass = 'badge-accepted';
                                            elseif ($mockTest->status === 'rejected') $badgeClass = 'badge-rejected';
                                            elseif ($mockTest->status === 'completed') $badgeClass = 'badge-completed';
                                            elseif ($mockTest->status === 'cancelled') $badgeClass = 'badge-cancelled';
                                        @endphp
                                        <span class="status-badge {{ $badgeClass }}">
                                            <i class="fas fa-circle me-1" style="font-size: 0.5rem;"></i>
                                            {{ ucfirst($mockTest->status) }}
                                        </span>
                                    </span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Duration:</span>
                                    <span class="info-value">{{ $mockTest->duration_minutes }} minutes</span>
                                </div>
                            </div>

                            <!-- Participants -->
                            <div class="info-card">
                                <h5><i class="fas fa-users"></i> Participants</h5>
                                <div class="info-item">
                                    <span class="info-label">Student:</span>
                                    <span class="info-value">
                                        <i class="fas fa-user-graduate me-1"></i>
                                        {{ $mockTest->student->name }}
                                    </span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Teacher:</span>
                                    <span class="info-value">
                                        <i class="fas fa-chalkboard-teacher me-1"></i>
                                        {{ $mockTest->teacher->name }}
                                    </span>
                                </div>
                            </div>

                            <!-- Schedule -->
                            <div class="info-card">
                                <h5><i class="fas fa-calendar-alt"></i> Schedule</h5>
                                <div class="info-item">
                                    <span class="info-label">Proposed Time:</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-value">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ $mockTest->proposed_time->format('F j, Y \a\t g:i A') }}
                                    </span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Scheduled Time:</span>
                                </div>
                                <div class="info-it">
                                    <span class="info-value">
                                        @if($mockTest->scheduled_time)
                                            <i class="fas fa-calendar-check me-1 text-success"></i>
                                            {{ $mockTest->scheduled_time->format('F j, Y \a\t g:i A') }}
                                        @else
                                            <span class="text-muted">Not scheduled yet</span>
                                        @endif
                                    </span>
                                </div>
                                @if($mockTest->status === 'accepted' && $mockTest->scheduled_time)
                                <div class="info-item">
                                    <span class="info-label">Time Remaining:</span>
                                    <span class="info-value">
                                        @if($mockTest->canStart())
                                            <span class="text-success">
                                                <i class="fas fa-check-circle me-1"></i>
                                                Session can be started now
                                            </span>
                                        @else
                                            <span class="text-info">
                                                <i class="fas fa-clock me-1"></i>
                                                Starts {{ $mockTest->scheduled_time->diffForHumans() }}
                                            </span>
                                        @endif
                                    </span>
                                </div>
                                @endif
                            </div>

                            <!-- Session Details -->
                            <div class="info-card">
                                <h5><i class="fas fa-cog"></i> Session Details</h5>
                                <div class="info-item">
                                    <span class="info-label">Room Name:</span>
                                    <span class="info-value">
                                        @if($mockTest->jitsi_room_name)
                                            <code>{{ $mockTest->jitsi_room_name }}</code>
                                        @else
                                            <span class="text-muted">Not generated yet</span>
                                        @endif
                                    </span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Recording:</span>
                                    <span class="info-value">
                                        @if($mockTest->recording_url)
                                            <div class="d-flex gap-2 flex-wrap">
                                                <a href="{{ route('mock-test.view-recording', $mockTest) }}" target="_blank" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-play me-1"></i>
                                                    View Recording
                                                </a>
                                                <a href="{{ route('mock-test.download-recording', $mockTest) }}" class="btn btn-sm btn-success">
                                                    <i class="fas fa-download me-1"></i>
                                                    Download
                                                </a>
                                            </div>
                                            @if($mockTest->recording_size)
                                                <small class="text-muted d-block mt-1">
                                                    Size: {{ number_format($mockTest->recording_size / 1024 / 1024, 2) }} MB
                                                    @if($mockTest->recording_duration)
                                                        | Duration: {{ gmdate('H:i:s', $mockTest->recording_duration) }}
                                                    @endif
                                                </small>
                                            @endif
                                        @else
                                            <span class="text-muted">No recording available</span>
                                        @endif
                                    </span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Created:</span>
                                    <span class="info-value">
                                        {{ $mockTest->created_at->format('F j, Y \a\t g:i A') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Teacher Notes -->
                        @if($mockTest->teacher_notes)
                        <div class="notes-section">
                            <h6><i class="fas fa-sticky-note me-2"></i>Teacher Notes</h6>
                            <p class="mb-0">{{ $mockTest->teacher_notes }}</p>
                        </div>
                        @endif

                        <!-- Rejection Reason -->
                        @if($mockTest->status === 'rejected' && $mockTest->rejection_reason)
                        <div class="notes-section" style="border-left: 4px solid var(--modal-danger-color);">
                            <h6><i class="fas fa-times-circle me-2"></i>Rejection Reason</h6>
                            <p class="mb-0">{{ $mockTest->rejection_reason }}</p>
                        </div>
                        @endif

                        <!-- Screen Sharing Data -->
                        @if($mockTest->screen_sharing_data && count($mockTest->screen_sharing_data) > 0)
                        <div class="notes-section" style="border-left: 4px solid var(--modal-accent-color);">
                            <h6><i class="fas fa-share-square me-2"></i>Screen Sharing Activity</h6>
                            <div class="mt-2">
                                @foreach($mockTest->screen_sharing_data as $activity)
                                <div class="mb-2 p-2 bg-light rounded">
                                    <small class="text-muted">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ \Carbon\Carbon::parse($activity['timestamp'])->format('M j, g:i A') }}
                                    </small>
                                    <div>
                                        <strong>{{ $activity['user'] }}</strong> -
                                        {{ $activity['action'] }} screen sharing
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="action-buttons">

                            @if(auth()->user()->isStudent())
                                @if($mockTest->status === 'pending')
                                    <form action="{{ route('mock-test.destroy', $mockTest) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this session?')">
                                            <i class="fas fa-trash me-2"></i>Delete Request
                                        </button>
                                    </form>
                                @endif

                                @if($mockTest->status === 'accepted' && $mockTest->canStart())
                                    <a href="{{ route('mock-test.start', $mockTest) }}" class="btn btn-success">
                                        <i class="fas fa-video me-2"></i>Join Session
                                    </a>
                                @endif
                            @endif

                            @if(auth()->user()->isTeacher())
                                @if($mockTest->status === 'accepted' && $mockTest->canStart())
                                    <a href="{{ route('mock-test.start', $mockTest) }}" class="btn btn-success">
                                        <i class="fas fa-play me-2"></i>Start Session
                                    </a>
                                @endif

                                @if($mockTest->status === 'accepted')
                                    <form action="{{ route('mock-test.end', $mockTest) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure you want to end this session?')">
                                            <i class="fas fa-stop me-2"></i>End Session
                                        </button>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accept Modal for Teachers -->
    @if(auth()->user()->isTeacher() && $mockTest->status === 'pending')
        <div class="modal fade" id="acceptModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('mock-test.accept', $mockTest) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-check-circle me-2"></i>Accept Mock Test Session
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <p class="text-muted">You are about to accept the session: <strong>"{{ $mockTest->title }}"</strong> from <strong>{{ $mockTest->student->name }}</strong>.</p>
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
                            <button type="button" class="btn btn-success">
                                <i class="fas fa-check me-1"></i>Accept Session
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <!-- Reject Modal for Teachers -->
    @if(auth()->user()->isTeacher() && $mockTest->status === 'pending')
        <div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('mock-test.reject', $mockTest) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-times-circle me-2"></i>Reject Mock Test Session
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <p class="text-muted">You are about to reject the session: <strong>"{{ $mockTest->title }}"</strong> from <strong>{{ $mockTest->student->name }}</strong>.</p>
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
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const proposedTimeInput = document.getElementById('proposed_time');
            if (proposedTimeInput) {
                const now = new Date();

                // Convert ke waktu lokal Indonesia (UTC+7)
                const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
                const jakartaTime = new Date(utc + (3600000 * 7)); // UTC+7

                // Tambah 3 menit
                jakartaTime.setMinutes(jakartaTime.getMinutes() + 3);

                // Format ke YYYY-MM-DDTHH:MM
                const year = jakartaTime.getFullYear();
                const month = String(jakartaTime.getMonth() + 1).padStart(2, '0');
                const day = String(jakartaTime.getDate()).padStart(2, '0');
                const hours = String(jakartaTime.getHours()).padStart(2, '0');
                const minutes = String(jakartaTime.getMinutes()).padStart(2, '0');

                const minDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
                proposedTimeInput.value = minDateTime;
                proposedTimeInput.min = minDateTime;
            }
        });

        $("#accept-session").on("click", function(){
            alert('test');
        })
    </script>
</body>
</html>
