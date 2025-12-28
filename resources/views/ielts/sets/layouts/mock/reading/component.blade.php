<!-- Floating Question List -->
<div class="floating-questions collapsed" id="floatingQuestions">
    <!-- Tombol Icon -->
    <button class="fq-fab" id="fqToggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Panel Soal -->
    <div class="fq-body" id="fqBody">
        <div class="fq-list" id="fqList"></div>
    </div>
</div>

<button class="floating-btn" id="try-again" onclick="retryQuiz()" style="display: none">
    <i class="fas fa-paper-plane" style="margin-right: 10px"></i> Try Again
</button>

<button class="floating-btn" id="doneBtn">
    <i class="fas fa-paper-plane" style="margin-right: 10px"></i> Submit
</button>

<div class="highlight-toolbar" id="highlightToolbar">
    <div class="color-option yellow" data-color="yellow"></div>
    <div class="color-option green" data-color="green"></div>
    <div class="color-option blue" data-color="blue"></div>
    <div class="color-option pink" data-color="pink"></div>
    <div class="color-option orange" data-color="orange"></div>
    <button id="highlightNote" title="Add Note">📝</button>
    <button id="removeHighlight" title="Remove Highlight">✕</button>
</div>

<div class="note-popup" id="notePopup">
    <textarea id="noteText" placeholder="Tulis catatan..."></textarea>
    <div>
        <button id="saveNote" class="save">Simpan</button>
        <button id="cancelNote" class="cancel">Batal</button>
    </div>
</div>

<div id="resultModal" class="custom-modal">
    <div class="custom-modal-content">
        <div class="custom-modal-header">
            <div class="score-summary-header">
                <div class="score-circle" id="scoreCircle">
                    <span id="scoreDisplay">0/0</span>
                    <small id="scorePercentage">0</small>
                </div>
                <div class="modal-title">Your Results</div>
            </div>
            <button class="modal-close" onclick="closeModal()">×</button>
        </div>

        <div class="custom-modal-body">
            <!-- Results Table -->
            <table class="result-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Your Answer</th>
                        <th>Correct Answer</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="resultsTableBody">
                    <!-- Results will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <!-- Action Buttons -->
        <div class="modal-actions">
            <button class="modal-btn btn-secondary" onclick="closeModal()">Close</button>
            <button class="modal-btn btn-primary" onclick="retryQuiz()">Try Again</button>
        </div>
    </div>
</div>
