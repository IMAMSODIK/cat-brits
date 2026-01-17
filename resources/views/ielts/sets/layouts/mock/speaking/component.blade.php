{{-- modal request session --}}
<div class="modal fade" id="requestSessionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Request Mock Test Speaking Session</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="info-box">
                    <i class="fas fa-info-circle"></i>
                    <p>Please fill out all the required information to request a mock test speaking session. Your
                        student
                        will review and respond to your request.</p>
                </div>

                <form id="mockTestForm">
                    <div class="form-group">
                        <label for="teacher_id" class="form-label">
                            <i class="fas fa-chalkboard-teacher"></i> Select Student
                        </label>
                        <input type="hidden" id="set-id" value="{{ $set->id }}">
                        <select name="teacher_id" id="teacher_id" class="form-select" required>
                            <option value="">Choose a student...</option>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a student.</div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">
                            <i class="fas fa-heading"></i> Session Title
                        </label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="Mock Test Speaking {{ $set->name }}"
                            placeholder="e.g., IELTS Speaking Practice Test" required>
                        <div class="invalid-feedback">Please enter a session title.</div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">
                            <i class="fas fa-align-left"></i> Description
                        </label>
                        <textarea name="description" id="description" class="form-control" rows="4"
                            placeholder="Briefly describe what you'd like to focus on during this session..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="proposed_time" class="form-label">
                            <i class="fas fa-calendar-alt"></i> Proposed Time
                        </label>
                        <input type="datetime-local" name="proposed_time" id="proposed_time" class="form-control"
                            required step="60">
                        <div class="invalid-feedback">Please select a future date and time.</div>
                    </div>

                    <div class="form-group">
                        <label for="duration_minutes" class="form-label">
                            <i class="fas fa-clock"></i> Duration
                        </label>
                        <input name="duration_minutes" id="duration_minutes" class="form-control" type="text"
                            readonly value="30 Minutes">
                        {{-- <select name="duration_minutes" id="duration_minutes" class="form-select" required>
                                <option value="30">30 minutes</option>
                                <option value="45">45 minutes</option>
                                <option value="60" selected>60 minutes</option>
                                <option value="90">90 minutes</option>
                                <option value="120">120 minutes</option>
                            </select> --}}
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-primary" id="submitRequestBtn">
                            <i class="fas fa-paper-plane me-2"></i> Submit Request
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-arrow-left me-2"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- modal detial session --}}
<div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Session Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body" id="detailModalContent">
                <div class="p-5 text-center">
                    <i class="fa fa-spinner fa-spin fa-2x"></i>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
