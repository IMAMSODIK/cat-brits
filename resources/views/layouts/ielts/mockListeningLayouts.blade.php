<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.mock.listening.head')

<body>
    @include('ielts.sets.layouts.mock.listening.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        @yield('content')
        <x-tabs.listening-mock :tabs="$tabs" />
    </section>

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

    <!-- MODAL CONFIRMATION -->
    <div id="confirmModal">
        <div class="box">
            <h3>Audio Notice</h3>
            <p>The audio in this section can only be played once for each part.</p>
            <button id="confirmYes">Yes, continue</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        function confirmExit() {
            if (confirm('Are you sure you want to end the test?')) {
                location.href = '/ielts/categories?set-id={{ $set->kode }}';
            }
        }
        let scoreMap = [{
                score: 9.0,
                min: 39,
                max: 40
            },
            {
                score: 8.5,
                min: 37,
                max: 38
            },
            {
                score: 8.0,
                min: 35,
                max: 36
            },
            {
                score: 7.5,
                min: 32,
                max: 34
            },
            {
                score: 7.0,
                min: 30,
                max: 31
            },
            {
                score: 6.5,
                min: 26,
                max: 29
            },
            {
                score: 6.0,
                min: 23,
                max: 25
            },
            {
                score: 5.5,
                min: 18,
                max: 22
            },
            {
                score: 5.0,
                min: 16,
                max: 17
            },
            {
                score: 4.5,
                min: 13,
                max: 15
            },
            {
                score: 4.0,
                min: 11,
                max: 12
            },
            {
                score: 3.5,
                min: 8,
                max: 10
            },
            {
                score: 3.0,
                min: 6,
                max: 7
            },
            {
                score: 2.5,
                min: 4,
                max: 5
            },
        ];

        function convertScore(correctCount) {
            for (let row of scoreMap) {
                if (correctCount >= row.min && correctCount <= row.max) {
                    return row.score;
                }
            }
            return 0; // jika kurang dari 4 benar
        }
    </script>

    <script>
        function showModal(title = "Hasil Jawaban Anda") {
            $("#modalScoreTitle").text(title);
            $("#resultModal").addClass("show");
            $("body").css("overflow", "hidden");
        }

        function closeModal() {
            $("#resultModal").removeClass("show");
            $("body").css("overflow", "auto");

            // Pastikan modal benar-benar tersembunyi setelah animasi
            setTimeout(function() {
                $("#resultModal").hide();
            }, 300);
        }

        function retryQuiz() {
            closeModal();

            location.reload()
        }

        $(document).on("click", ".modal-close, .btn-secondary", function() {
            closeModal();
        });

        $(document).on("click", function(e) {
            if (e.target.id === "resultModal") {
                closeModal();
            }
        });

        $(document).on("keydown", function(e) {
            if (e.key === "Escape") {
                closeModal();
            }
        });

        $(document).ready(function() {
            $("#resultModal").removeClass("show").hide();
        });
    </script>

    {{-- timer listening sebelumnya --}}
    {{-- <script>
    (function() {
        let remaining = 0;
        let t = null;
        const el = document.getElementById('timeText');
        const wrap = document.getElementById('timer');

        function format(mmss) {
            const m = Math.floor(mmss / 60);
            const s = mmss % 60;
            return String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
        }

        function tick() {
            if (remaining <= 0) {
                clearInterval(t);
                t = null;
                el.textContent = '00:00';
                wrap.classList.add('danger');
                document.getElementById('doneBtn').disabled = true;
                document.getElementById('doneBtn').style.opacity = 0.7;
                document.getElementById('doneBtn').style.cursor = 'not-allowed';

                $("#retake").css("display", "");

                let results = [];

                $('.q-item, .q-list').each(function() {
                    // Skip jika elemen ini berada di dalam .q-list lain (menghindari duplikasi)
                    if ($(this).closest('.q-list').length && !$(this).is('.q-list')) return;

                    const type = $(this).data('type');
                    const qnum = $(this).data('q');

                    if (typeof type === 'undefined') return;

                    let name = null;
                    let answer = null;

                    switch (type) {
                        case 'tfng':
                        case 'oc':
                        case 'ynng':
                            const checked = $(this).find('input[type="radio"]:checked');
                            if (checked.length > 0) {
                                name = checked.attr('name');
                                answer = checked.val();
                            } else {
                                const anyRadio = $(this).find('input[type="radio"]').first();
                                if (anyRadio.length > 0) name = anyRadio.attr('name');
                            }
                            break;

                        case 'sa':
                        case 'tc':
                        case 'nc':
                            const input = $(this).find('input[type="text"]');
                            if (input.length > 0) {
                                name = input.attr('name');
                                answer = input.val();
                            }
                            break;

                        case 'mh':
                        case 'mse':
                            const select = $(this).find('select');
                            if (select.length > 0) {
                                name = select.attr('name');
                                answer = select.val();
                            }
                            break;
                    }

                    results.push({
                        type: type,
                        name: name,
                        answer: answer || null,
                        question: qnum || null
                    });
                });

                $.ajax({
                    url: '/ielts/mock-test/check',
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        set_id: '{{$set->kode}}',
                        kategori: 'listening',
                        answers: results,
                        tipe_test: 'mock'
                    },
                    success: function(response) {
                        $("#try-again").css('display', '');
                        $("#doneBtn").css('display', 'none');

                        if (response.status === 'ok') {
                            let correctCount = 0;
                            let total = Object.keys(response.results).length;
                            let tableRows = '';
                            let questionNumber = 1;

                            $.each(response.results, function(key, data) {
                                let isCorrect = data.status === 'correct';
                                if (isCorrect) correctCount++;

                                let correctAnswer = data.correct || '';
                                let userAnswer = data.user || '';
                                if (!correctAnswer && isCorrect) correctAnswer = userAnswer;
                                if (!correctAnswer) correctAnswer = 'NOT GIVEN';

                                tableRows += `
                                        <tr>
                                            <td><strong>${questionNumber++}</strong></td>
                                            <td><span class="answer-display ${isCorrect ? 'answer-correct' : 'answer-wrong'}">${userAnswer}</span></td>
                                            <td><span class="answer-display answer-correct-option">${correctAnswer}</span></td>
                                            <td>
                                                <span class="status-badge ${isCorrect ? 'correct' : 'wrong'}">
                                                    <span class="status-icon">${isCorrect ? '✅' : '❌'}</span>
                                                    ${isCorrect ? 'Correct' : 'Wrong'}
                                                </span>
                                            </td>
                                        </tr>
                                    `;
                            });

                            // Update skor di UI
                            $("#scoreDisplay").text(`${correctCount}/${total}`);
                            $("#scorePercentage").text(`${convertScore(correctCount)}`);

                            let percentage = (correctCount / total) * 100;
                            let scoreCircle = $(".score-circle");
                            if (percentage >= 80) {
                                scoreCircle.css("background",
                                    "linear-gradient(135deg, #27ae60, #2ecc71)");
                            } else if (percentage >= 60) {
                                scoreCircle.css("background",
                                    "linear-gradient(135deg, #f39c12, #e67e22)");
                            } else {
                                scoreCircle.css("background",
                                    "linear-gradient(135deg, #e74c3c, #c0392b)");
                            }

                            $("#resultsTableBody").html(tableRows);

                            // tampilkan modal hasil
                            showModal(`Score: ${correctCount} / ${total}`);
                        } else {
                            alert('Terjadi kesalahan: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert('Terjadi kesalahan: ' + xhr.status);
                    }
                });

                return;
            }
            remaining -= 1;
            el.textContent = format(remaining);
            // Kedipkan danger saat < 60 detik
            if (remaining <= 60) {
                wrap.classList.add('danger');
            }
        }

        function startCountdown(seconds) {
            if (t) clearInterval(t);
            remaining = Math.max(0, Math.floor(seconds));
            el.textContent = format(remaining);
            wrap.classList.toggle('danger', remaining <= 60);
            document.getElementById('doneBtn').disabled = false;
            document.getElementById('doneBtn').style.opacity = 1;
            document.getElementById('doneBtn').style.cursor = 'pointer';
            t = setInterval(tick, 1000);
        }

        // Public API (opsional)
        window.CATHeader = {
            startCountdown
        };

        // Events
        document.getElementById('infoBtn').addEventListener('click', function() {
            // Ganti dengan modal/informasi instruksi Anda
            alert(
                'Instructions:\n- Read the questions carefully\n- The timer runs automatically\n- Click "Finish" to submit'
            );

        });
        // Mulai countdown (contoh: 15 menit)
        startCountdown(13 * 60);
    })();
</script> --}}

    <!-- script bagian part soal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const section = document.querySelector('.parts-section');
            if (!section) return;

            const xTabs = section.querySelector('.x-tabs');
            const tabs = Array.from(xTabs.querySelectorAll('.x-tab'));
            const panels = Array.from(section.querySelectorAll('.x-panel'));

            function updateEdgeHints() {
                const max = xTabs.scrollWidth - xTabs.clientWidth;
                const x = Math.round(xTabs.scrollLeft);
                xTabs.classList.toggle('has-left', x > 0);
                xTabs.classList.toggle('has-right', x < max - 1);
            }

            function setActive(id) {
                tabs.forEach(btn => {
                    const active = btn.dataset.id === id;
                    btn.classList.toggle('is-active', active);
                    btn.setAttribute('aria-selected', active ? 'true' : 'false');
                    btn.tabIndex = active ? 0 : -1;
                    if (active) {
                        btn.scrollIntoView({
                            behavior: 'smooth',
                            inline: 'center',
                            block: 'nearest'
                        });
                    }
                });
                panels.forEach(p => {
                    const open = p.id === `panel-${id}`;
                    if (open) {
                        p.removeAttribute('hidden');
                        p.classList.add('is-open');
                    } else {
                        p.setAttribute('hidden', '');
                        p.classList.remove('is-open');
                    }
                });
                xTabs.dataset.active = id;
            }

            /* Event delegation untuk klik tab (lebih andal) */
            xTabs.addEventListener('click', (e) => {
                const btn = e.target.closest('.x-tab');
                if (!btn || !xTabs.contains(btn)) return;
                setActive(btn.dataset.id);
            });

            /* Drag/Swipe pada .x-tabs */
            let down = false,
                moved = false,
                startX = 0,
                startLeft = 0,
                pid = null;
            xTabs.addEventListener('pointerdown', (e) => {
                // Hanya izinkan drag jika bukan klik pada tab
                if (e.target.closest('.x-tab')) {
                    down = false;
                    return;
                }
                down = true;
                moved = false;
                pid = e.pointerId;
                xTabs.setPointerCapture(pid);
                startX = e.clientX;
                startLeft = xTabs.scrollLeft;
            });
            xTabs.addEventListener('pointermove', (e) => {
                if (!down) return;
                const dx = e.clientX - startX;
                if (Math.abs(dx) > 3) moved = true;
                xTabs.scrollLeft = startLeft - dx;
            });

            function endDrag(e) {
                if (pid) {
                    try {
                        xTabs.releasePointerCapture(pid);
                    } catch {}
                }
                pid = null;
                down = false;
                if (moved && e && e.target.closest('.x-tab')) e.preventDefault(); /* cegah klik nyangkut */
                moved = false;
            }
            xTabs.addEventListener('pointerup', endDrag);
            xTabs.addEventListener('pointercancel', endDrag);
            xTabs.addEventListener('pointerleave', endDrag);

            /* Wheel vertikal -> horizontal (trackpad/mouse) */
            xTabs.addEventListener('wheel', (e) => {
                if (Math.abs(e.deltaY) > Math.abs(e.deltaX) && xTabs.scrollWidth > xTabs.clientWidth) {
                    xTabs.scrollBy({
                        left: e.deltaY,
                        behavior: 'auto'
                    });
                    e.preventDefault();
                }
            }, {
                passive: false
            });

            /* Keyboard navigation */
            tabs.forEach(btn => {
                btn.addEventListener('keydown', (e) => {
                    if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
                    e.preventDefault();
                    const idx = tabs.indexOf(btn);
                    const nextIdx = e.key === 'ArrowRight' ? (idx + 1) % tabs.length : (idx - 1 +
                        tabs.length) % tabs.length;
                    tabs[nextIdx].focus();
                    tabs[nextIdx].click();
                });
            });

            /* Init */
            updateEdgeHints();
            xTabs.addEventListener('scroll', updateEdgeHints);
            window.addEventListener('resize', updateEdgeHints);
            setActive(Object.keys(@json($tabs).data)[0]);
        });
    </script>

    <!-- script bagian reading + questions  -->
    <script>
        $(document).on('change', '.q-option input', function() {
            let parent = $(this).closest('.q-item');
            let option = $(this).closest('.q-option');

            if (this.type === "radio") {
                parent.find('.q-option').removeClass('is-selected');
                option.addClass('is-selected');
            }

            if (this.type === "checkbox") {
                option.toggleClass('is-selected', this.checked);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Semua panel
            const panels = document.querySelectorAll('.x-panel');

            panels.forEach(panel => {
                const section = panel.querySelector('.reading-section');
                if (!section) return;

                // --- Pilihan soal (radio) ---
                section.addEventListener('click', function(e) {
                    const opt = e.target.closest('.q-option');
                    if (!opt) return;
                    const fieldset = opt.closest('.q-item');
                    const input = opt.querySelector('input[type="radio"]');
                    if (!fieldset || !input) return;

                    // Set radio checked
                    input.checked = true;

                    // Hapus highlight semua sibling
                    fieldset.querySelectorAll('.q-option').forEach(el => el.classList.remove(
                        'is-selected'));
                    opt.classList.add('is-selected');
                });

                section.addEventListener('change', function(e) {
                    const radio = e.target;
                    if (!(radio instanceof HTMLInputElement)) return;
                    if (radio.type !== 'radio') return;
                    const fieldset = radio.closest('.q-item');
                    if (!fieldset) return;
                    fieldset.querySelectorAll('.q-option').forEach(el => {
                        const r = el.querySelector('input[type="radio"]');
                        el.classList.toggle('is-selected', r && r.checked);
                    });
                });

                // --- Resize handle ---
                const grid = section.querySelector('.resizable-grid');
                const handle = section.querySelector('.resize-handle');
                if (!grid || !handle) return;

                let isDragging = false;

                handle.addEventListener('mousedown', e => {
                    e.preventDefault();
                    isDragging = true;
                    document.body.style.cursor = 'col-resize';
                });

                window.addEventListener('mousemove', e => {
                    if (!isDragging) return;
                    const gridRect = grid.getBoundingClientRect();
                    const totalWidth = gridRect.width;
                    const offsetX = e.clientX - gridRect.left;

                    const leftWidth = Math.max(250, offsetX);
                    const rightWidth = Math.max(250, totalWidth - leftWidth - handle.offsetWidth);

                    grid.style.gridTemplateColumns =
                        `${leftWidth}px ${handle.offsetWidth}px ${rightWidth}px`;
                });

                window.addEventListener('mouseup', () => {
                    if (isDragging) {
                        isDragging = false;
                        document.body.style.cursor = 'default';
                    }
                });

            }); // end forEach panel

            // Optional: function global ambil jawaban panel tertentu
            window.getPanelAnswers = function(panelEl) {
                const out = {};
                const section = panelEl.querySelector('.reading-section');
                if (!section) return out;

                section.querySelectorAll('.q-item').forEach(fs => {
                    const name = fs.querySelector('input[type="radio"]')?.name;
                    const checked = fs.querySelector('input[type="radio"]:checked');
                    if (name) out[name] = checked ? checked.value : null;
                });

                return out;
            };
        });
    </script>

    <!-- script bagian highlight + note -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toolbar = document.getElementById('highlightToolbar');
            const notePopup = document.getElementById('notePopup');
            const noteText = document.getElementById('noteText');

            let currentSelection = null;
            let selectedColor = 'yellow';
            let currentHighlight = null;
            let activePassage = null;

            // === Pilih warna highlight ===
            document.querySelectorAll('.color-option').forEach(option => {
                option.addEventListener('click', () => {
                    selectedColor = option.dataset.color;
                    applyHighlight(selectedColor, false);
                });
            });

            // === Toolbar tombol catatan ===
            document.getElementById('highlightNote').addEventListener('click', () => {
                if (currentSelection) {
                    applyHighlight(selectedColor, true);
                }
            });

            // === Hapus highlight ===
            document.getElementById('removeHighlight').addEventListener('click', () => {
                if (currentSelection) {
                    const node = currentSelection.startContainer.parentNode;
                    if (node.classList.contains('highlight')) {
                        const textNode = document.createTextNode(node.textContent);
                        node.replaceWith(textNode);
                    }
                    hideToolbar();
                    window.getSelection().removeAllRanges();
                    currentSelection = null;
                }
            });

            // === Save & Cancel Note ===
            document.getElementById('saveNote').addEventListener('click', () => {
                if (currentHighlight) {
                    const note = noteText.value.trim();
                    if (note) {
                        currentHighlight.dataset.note = note;
                        if (!currentHighlight.querySelector('.note-indicator')) {
                            const dot = document.createElement('span');
                            dot.className = 'note-indicator';
                            currentHighlight.appendChild(dot);
                        }
                    } else {
                        delete currentHighlight.dataset.note;
                        const dot = currentHighlight.querySelector('.note-indicator');
                        if (dot) dot.remove();
                    }
                }
                hideNotePopup();
            });

            document.getElementById('cancelNote').addEventListener('click', hideNotePopup);

            // === Init highlight di semua panel ===
            document.querySelectorAll('.x-panel').forEach(panel => {
                const passageBody = panel.querySelector('.highlighted-content');

                passageBody.addEventListener('mouseup', (e) => {
                    const selection = window.getSelection();
                    if (selection && !selection.isCollapsed) {
                        currentSelection = selection.getRangeAt(0);
                        activePassage = passageBody;
                        const rect = currentSelection.getBoundingClientRect();
                        showToolbar(rect);
                    } else {
                        hideToolbar();
                    }
                });

                // Klik highlight untuk buka note
                passageBody.addEventListener('click', e => {
                    if (e.target.classList.contains('highlight') && e.target.dataset.note) {
                        currentHighlight = e.target;
                        showNotePopup(e.target, e.target.dataset.note);
                    }
                });
            });

            // === Klik luar → tutup toolbar & note popup ===
            document.addEventListener('click', e => {
                if (!toolbar.contains(e.target) &&
                    !notePopup.contains(e.target) &&
                    (!e.target.classList.contains('highlight') || !e.target.closest(
                        '.highlighted-content')) &&
                    !window.getSelection().toString()) {
                    hideToolbar();
                    hideNotePopup();
                }
            });

            // === Fungsi helper ===
            function applyHighlight(color, withNote = false) {
                if (!currentSelection) return;

                const span = document.createElement('span');
                span.className = `highlight highlight-${color}`;
                span.textContent = currentSelection.toString();
                currentSelection.deleteContents();
                currentSelection.insertNode(span);

                if (withNote) {
                    currentHighlight = span;
                    showNotePopup(span);
                }

                hideToolbar();
                window.getSelection().removeAllRanges();
                currentSelection = null;
            }

            function showToolbar(rect) {
                toolbar.style.display = 'flex';
                toolbar.style.left = rect.left + window.scrollX + 'px';
                toolbar.style.top = rect.top + window.scrollY - 40 + 'px';
            }

            function hideToolbar() {
                toolbar.style.display = 'none';
                currentSelection = null;
            }

            function showNotePopup(highlightEl, existing = '') {
                noteText.value = existing;
                const rect = highlightEl.getBoundingClientRect();
                notePopup.style.display = 'block';
                notePopup.style.left = rect.left + window.scrollX + 'px';
                notePopup.style.top = rect.bottom + window.scrollY + 5 + 'px';
            }

            function hideNotePopup() {
                notePopup.style.display = 'none';
                currentHighlight = null;
            }
        });
    </script>

    <!-- script bagian floating question list -->
    <script>
document.addEventListener('DOMContentLoaded', () => {

    const fqList = document.getElementById('fqList');
    const floatingQ = document.getElementById('floatingQuestions');
    const fqToggle = document.getElementById('fqToggle');

    if (!fqList) return;

    let activeNumber = null;
    let questionMap = [];

    /* ======================================
    1. KUMPULKAN SEMUA SOAL
    ====================================== */
    function collectQuestions() {
        questionMap = [];
        const used = new Set();

        // ambil semua elemen dengan data-q di seluruh dokumen
        document.querySelectorAll('[data-q]').forEach(el => {
            const baseQ = parseInt(el.dataset.q, 10);
            if (isNaN(baseQ)) return;

            // TWO_CHOICES
            if (el.dataset.type === 'two_choices') {
                const count = 2; // default 2 nomor
                for (let i = 0; i < count; i++) {
                    const qNum = baseQ + i;
                    if (!used.has(qNum)) {
                        questionMap.push({ number: qNum, el });
                        used.add(qNum);
                    }
                }
            } else if (el.dataset.qMulti) {
                const count = el.dataset.qMulti.split(',').length;
                for (let i = 0; i < count; i++) {
                    const qNum = baseQ + i;
                    if (!used.has(qNum)) {
                        questionMap.push({ number: qNum, el });
                        used.add(qNum);
                    }
                }
            } else {
                if (!used.has(baseQ)) {
                    questionMap.push({ number: baseQ, el });
                    used.add(baseQ);
                }
            }
        });

        // urutkan nomor
        questionMap.sort((a, b) => a.number - b.number);
    }

    /* ======================================
    2. RENDER FLOATING LIST
    ====================================== */
    function renderList() {
        fqList.innerHTML = '';

        questionMap.forEach(q => {
            const a = document.createElement('a');
            a.href = '#';
            a.className = 'fq-item';
            a.textContent = q.number;
            a.dataset.q = q.number;

            a.addEventListener('click', e => {
                e.preventDefault();
                activeNumber = q.number;
                q.el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                updateStatus();
            });

            fqList.appendChild(a);
        });

        updateStatus();
    }

    /* ======================================
    3. CEK TERJAWAB (SMART)
    ====================================== */
    function isAnswered(el, subNumber = null) {
        if (!el) return false;

        // RADIO
        if (el.querySelector('input[type="radio"]:checked')) return true;

        // CHECKBOX (two_choices)
        if (el.dataset.type === 'two_choices') {
            const checkedBox = el.querySelectorAll('input[type="checkbox"]:checked');
            if (!checkedBox.length) return false;

            const count = checkedBox.length;
            const baseQ = parseInt(el.dataset.q, 10);

            if (subNumber !== null) {
                const numberIndex = subNumber - baseQ + 1;
                return numberIndex <= count;
            }

            return count >= 1;
        }

        // CHECKBOX biasa
        const checkedBox = el.querySelectorAll('input[type="checkbox"]:checked');
        if (checkedBox.length > 0) return true;

        // TEXT / TEXTAREA
        const t = el.querySelector('input[type="text"], textarea');
        if (t && t.value.trim() !== '') return true;

        // SELECT
        const s = el.querySelector('select');
        if (s && s.value !== '') return true;

        // jika elemen itu sendiri input / select
        if (el.matches('input[type="text"], textarea') && el.value.trim() !== '') return true;
        if (el.matches('select') && el.value !== '') return true;

        return false;
    }

    /* ======================================
    4. UPDATE STATUS FLOATING
    ====================================== */
    function updateStatus() {
        fqList.querySelectorAll('.fq-item').forEach(item => {
            item.classList.remove('answered', 'current');

            const qNum = parseInt(item.dataset.q, 10);
            const qObj = questionMap.find(q => {
                if (q.number === qNum) return true;
                if (q.el.dataset.type === 'two_choices') {
                    const base = parseInt(q.el.dataset.q, 10);
                    return qNum >= base && qNum < base + 2;
                }
                return false;
            });
            if (!qObj) return;

            if (qObj.el.dataset.type === 'two_choices') {
                if (isAnswered(qObj.el, qNum)) item.classList.add('answered');
            } else {
                if (isAnswered(qObj.el)) item.classList.add('answered');
            }

            if (activeNumber === qNum) item.classList.add('current');
        });
    }

    /* ======================================
    5. WATCH INPUT
    ====================================== */
    ['input', 'change', 'click'].forEach(evt => {
        document.addEventListener(evt, e => {
            if (e.target.closest('[data-q]')) {
                setTimeout(updateStatus, 50);
            }
        });
    });

    /* ======================================
    6. TOGGLE FLOATING
    ====================================== */
    if (fqToggle && floatingQ) {
        fqToggle.addEventListener('click', () => {
            floatingQ.classList.toggle('collapsed');
            floatingQ.classList.toggle('expanded');
        });
    }

    /* ======================================
    7. INIT + REFRESH
    ====================================== */
    function init() {
        collectQuestions();
        renderList();
    }

    init();
    setInterval(init, 2000);

});
</script>

    {{-- audio logic sebelumnya --}}
    {{-- <script>
    let currentAudio = null;
    let currentTimerId = null;

    function formatTime(sec) {
        sec = isNaN(sec) ? 0 : Math.floor(sec);
        const m = Math.floor(sec / 60);
        const s = sec % 60;
        return `${m}:${s < 10 ? '0' : ''}${s}`;
    }

    function resetPanelUI(panel) {
        const prog = panel.querySelector(".timeline");
        const cur = panel.querySelector(".current");
        const dur = panel.querySelector(".duration");
        if (prog) prog.value = 0;
        if (cur) cur.textContent = "0:00";
        if (dur) {
            if (!panel.querySelector("audio").duration || isNaN(panel.querySelector("audio").duration)) {
                dur.textContent = "0:00";
            }
        }
        const visualProg = panel.querySelector(".seekbar-progress");
        if (visualProg) visualProg.style.width = "0%";
    }

    function stopCurrentAudio() {
        if (!currentAudio) return;
        try {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        } catch (e) {
        }

        if (currentTimerId) {
            clearInterval(currentTimerId);
            currentTimerId = null;
        }

        const panel = currentAudio.closest(".x-panel");
        if (panel) resetPanelUI(panel);

        currentAudio = null;
    }

    function startPanelTimer(audio, panel) {
        if (currentTimerId) {
            clearInterval(currentTimerId);
            currentTimerId = null;
        }

        const prog = panel.querySelector(".timeline");
        const cur = panel.querySelector(".current");
        const dur = panel.querySelector(".duration");
        const visualProg = panel.querySelector(".seekbar-progress");

        currentTimerId = setInterval(() => {
            if (!audio.duration || isNaN(audio.duration)) return;
            const pct = (audio.currentTime / audio.duration) * 100;
            if (prog) prog.value = pct;
            if (visualProg) visualProg.style.width = pct + "%";
            if (cur) cur.textContent = formatTime(audio.currentTime);
            if (dur) dur.textContent = formatTime(audio.duration);
        }, 1000);
    }

    function playPanelAudio(panel) {
        const audio = panel.querySelector("audio");
        if (!audio) return;

        if (audio.dataset.played === "yes") {
            return;
        }

        if (currentAudio && currentAudio !== audio) {
            stopCurrentAudio();
        }

        currentAudio = audio;

        const durEl = panel.querySelector(".duration");
        if (audio.duration && !isNaN(audio.duration) && durEl) {
            durEl.textContent = formatTime(audio.duration);
        }

        audio.muted = true;

        audio.play().then(() => {
            audio.dataset.played = "yes";

            setTimeout(() => {
                try {
                    audio.muted = false;
                } catch (e) {}
            }, 150);

            startPanelTimer(audio, panel);

            audio.onended = () => {
                if (currentTimerId) {
                    clearInterval(currentTimerId);
                    currentTimerId = null;
                }
                const visualProg = panel.querySelector(".seekbar-progress");
                if (visualProg) visualProg.style.width = "100%";
                const cur = panel.querySelector(".current");
                const dur = panel.querySelector(".duration");
                if (cur) cur.textContent = formatTime(audio.duration || 0);
                if (dur) dur.textContent = formatTime(audio.duration || 0);

                audio.dataset.played = "yes";
                currentAudio = null;
            };

        }).catch(err => {
            console.warn("Autoplay blocked:", err);
            currentAudio = null;
        });

        audio.addEventListener("seeking", function() {
            this.currentTime = this._lastTime || 0;
        });
        audio.addEventListener("timeupdate", function() {
            this._lastTime = this.currentTime;
        });
    }

    document.querySelectorAll(".x-tab").forEach(tab => {
        tab.addEventListener("click", () => {
            document.querySelectorAll(".x-tab").forEach(t => t.classList.remove("is-active"));
            tab.classList.add("is-active");

            const id = tab.dataset.id;
            const panelId = `panel-${id}`;
            document.querySelectorAll(".x-panel").forEach(p => p.classList.remove("active", "is-open"));
            const targetPanel = document.getElementById(panelId);
            if (!targetPanel) return;
            targetPanel.classList.add("active", "is-open");

            if (currentAudio && currentAudio.closest(".x-panel") !== targetPanel) {
                stopCurrentAudio();
            }

            const audio = targetPanel.querySelector("audio");
            if (audio && audio.dataset.played !== "yes") {
                playPanelAudio(targetPanel);
            }
        });
    });

    const modal = document.getElementById("confirmModal");
    const confirmBtn = document.getElementById("confirmYes");

    if (modal && confirmBtn) {        
        window.addEventListener("load", () => {
            modal.style.display = "flex";
        });
        confirmBtn.addEventListener("click", () => {
            modal.style.display = "none";            
            const firstPanel = document.querySelector(".x-panel.active") || document.querySelector(".x-panel");
            if (firstPanel) playPanelAudio(firstPanel);
        });
    } else {        
        window.addEventListener("load", () => {
            const firstPanel = document.querySelector(".x-panel.active") || document.querySelector(".x-panel");
            if (firstPanel) playPanelAudio(firstPanel);
        });
    }
</script> --}}

    <script>
        let panels = [];
        let audios = [];
        let currentIndex = 0;
        let timerId = null;
        let allFinished = false;

        /* ================= UTIL ================= */
        function formatTime(sec) {
            sec = Math.floor(sec || 0);
            return `${Math.floor(sec / 60)}:${String(sec % 60).padStart(2, "0")}`;
        }

        function activatePanel(index) {
            panels.forEach(p => p.classList.remove("active", "is-open"));
            panels[index].classList.add("active", "is-open");

            document.querySelectorAll(".x-tab").forEach(t => {
                t.classList.toggle(
                    "is-active",
                    t.dataset.id === panels[index].id.replace("panel-", "")
                );
            });
        }

        function startTimer(audio, panel) {
            clearInterval(timerId);

            const prog = panel.querySelector(".timeline");
            const cur = panel.querySelector(".current");
            const dur = panel.querySelector(".duration");

            timerId = setInterval(() => {
                if (!audio.duration) return;
                if (prog) prog.value = (audio.currentTime / audio.duration) * 100;
                if (cur) cur.textContent = formatTime(audio.currentTime);
                if (dur) dur.textContent = formatTime(audio.duration);
            }, 500);
        }

        /* ================= CORE ================= */
        function playIndex(index) {
            if (index >= audios.length) {
                allFinished = true;
                onAllAudiosFinished();
                return;
            }

            currentIndex = index;

            const panel = panels[index];
            const audio = audios[index];

            activatePanel(index);

            audio.currentTime = 0;
            audio.play();
            startTimer(audio, panel);

            audio.onended = () => {
                clearInterval(timerId);
                playIndex(index + 1);
            };
        }

        function onAllAudiosFinished() {
            document.getElementById('doneBtn').disabled = true;
            document.getElementById('doneBtn').style.opacity = 0.7;
            document.getElementById('doneBtn').style.cursor = 'not-allowed';

            $("#retake").css("display", "");

            const data = [];
            let prevData = {
                name: null,
                index: 0,
                answer: null
            };
            const element = $('.qa-body');

            element
                .find('input, textarea, select, checkbox, radio')
                .not(':disabled')
                .each(function(index, elem) {
                    const name = $(this).attr('name');
                    const type = $(this).attr('type');
                    let value = null;

                    if (type === 'radio') {
                        if ($(this).is(':checked')) {
                            value = $(this).val();
                        }
                    } else if (type === 'checkbox') {
                        if ($(this).is(':checked')) {
                            value = $(this).val();
                        }
                    } else {
                        value = $(this).val();
                    }


                    if (prevData.name === name) {
                        if (value != null) {
                            if (data[prevData.index - 1].answer != "" && type === 'checkbox') {
                                data[prevData.index - 1].answer = `['${prevData.answer}', '${value}']`;
                            } else {
                                data[prevData.index - 1].answer = value;
                            }
                            prevData.answer = value;
                        }
                    } else {
                        data.push({
                            name: name,
                            answer: type === 'checkbox' ? `[${value}]` : value
                        });
                        prevData = {
                            name: name,
                            index: prevData.index + 1,
                            answer: value
                        }
                    }
                });

            console.log(data);
            $.ajax({
                url: '/ielts/mock-test/check-v2',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    data: data,
                    kategori: @json($tabs['kategori']),
                },
                success: function(response) {
                    $("#try-again").css('display', '');
                    $("#doneBtn").css('display', 'none');

                    if (response.status === 'ok') {
                        let correctCount = 0;
                        let total = Object.keys(response.results).length;
                        let tableRows = '';
                        let questionNumber = 1;

                        $.each(response.results, function(key, data) {
                            let isCorrect = data.status === 'correct';
                            if (isCorrect) correctCount++;

                            let correctAnswer = data.correct || '';
                            let userAnswer = data.user || '';
                            if (!correctAnswer && isCorrect) correctAnswer = userAnswer;
                            if (!correctAnswer) correctAnswer = '';

                            tableRows += `
                                <tr>
                                    <td><strong>${questionNumber++}</strong></td>
                                    <td><span class="answer-display ${isCorrect ? 'answer-correct' : 'answer-wrong'}">${userAnswer}</span></td>
                                    <td><span class="answer-display answer-correct-option">${correctAnswer}</span></td>
                                    <td>
                                        <span class="status-badge ${isCorrect ? 'correct' : 'wrong'}">
                                            <span class="status-icon">${isCorrect ? '✅' : '❌'}</span>
                                            ${isCorrect ? 'Correct' : 'Wrong'}
                                        </span>
                                    </td>
                                </tr>
                            `;
                        });

                        // Update skor di UI
                        $("#scoreDisplay").text(`${correctCount}/${total}`);
                        $("#scorePercentage").text(`${convertScore(correctCount)}`);

                        let percentage = (correctCount / total) * 100;
                        let scoreCircle = $(".score-circle");
                        if (percentage >= 80) {
                            scoreCircle.css("background",
                                "linear-gradient(135deg, #27ae60, #2ecc71)");
                        } else if (percentage >= 60) {
                            scoreCircle.css("background",
                                "linear-gradient(135deg, #f39c12, #e67e22)");
                        } else {
                            scoreCircle.css("background",
                                "linear-gradient(135deg, #e74c3c, #c0392b)");
                        }

                        $("#resultsTableBody").html(tableRows);

                        // tampilkan modal hasil
                        showModal(`Score: ${correctCount} / ${total}`);
                    } else {
                        alert('Terjadi kesalahan: ' + response.message);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan: ' + xhr.status);
                }
            });
        }

        /* ================= INIT ================= */
        document.addEventListener("DOMContentLoaded", () => {
            panels = Array.from(document.querySelectorAll(".x-panel"));
            audios = panels.map(p => p.querySelector("audio"));
        });

        /* ================= POPUP ANDA ================= */
        const modal = document.getElementById("confirmModal");
        const confirmBtn = document.getElementById("confirmYes");

        if (modal && confirmBtn) {
            window.addEventListener("load", () => {
                modal.style.display = "flex";
            });

            confirmBtn.addEventListener("click", () => {
                modal.style.display = "none";
                playIndex(0); // 🔥 START PLAYLIST DI SINI
            });
        }
    </script>

    <script>
        function stopAllAudio() {
            if (!audios || audios.length === 0) return;

            audios.forEach(audio => {
                try {
                    audio.pause();
                    audio.currentTime = 0;
                } catch (e) {}
            });

            clearInterval(timerId);
        }

        document.getElementById('doneBtn').addEventListener('click', function() {

            const confirmFinish = confirm('Do you want to end the test now?');
            if (!confirmFinish) return;

            stopAllAudio();
            const data = [];
            let prevData = {
                name: null,
                index: 0,
                answer: null
            };
            const element = $('.qa-body');

            element
                .find('input, textarea, select, checkbox, radio')
                .not(':disabled')
                .each(function(index, elem) {
                    const name = $(this).attr('name');
                    const type = $(this).attr('type');
                    let value = null;

                    if (type === 'radio') {
                        if ($(this).is(':checked')) {
                            value = $(this).val();
                        }
                    } else if (type === 'checkbox') {
                        if ($(this).is(':checked')) {
                            value = $(this).val();
                        }
                    } else {
                        value = $(this).val();
                    }


                    if (prevData.name === name) {
                        if (value != null) {
                            if (data[prevData.index - 1].answer != "" && type === 'checkbox') {
                                data[prevData.index - 1].answer = `['${prevData.answer}', '${value}']`;
                            } else {
                                data[prevData.index - 1].answer = value;
                            }
                            prevData.answer = value;
                        }
                    } else {
                        data.push({
                            name: name,
                            answer: type === 'checkbox' ? `[${value}]` : value
                        });
                        prevData = {
                            name: name,
                            index: prevData.index + 1,
                            answer: value
                        }
                    }
                });

            console.log(data)

            // ========================== AJAX ==========================
            $.ajax({
                url: '/ielts/mock-test/check-v2',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    data: data,
                    kategori: @json($tabs['kategori']),
                },
                success: function(response) {
                    $("#try-again").css('display', '');
                    $("#doneBtn").css('display', 'none');

                    if (response.status === 'ok') {
                        let correctCount = 0;
                        let total = Object.keys(response.results).length;
                        let tableRows = '';
                        let questionNumber = 1;

                        $.each(response.results, function(key, data) {
                            let isCorrect = data.status === 'correct';
                            if (isCorrect) correctCount++;

                            let correctAnswer = data.correct || '';
                            let userAnswer = data.user || '';
                            if (!correctAnswer && isCorrect) correctAnswer = userAnswer;
                            if (!correctAnswer) correctAnswer = '';

                            tableRows += `
                                <tr>
                                    <td><strong>${questionNumber++}</strong></td>
                                    <td><span class="answer-display ${isCorrect ? 'answer-correct' : 'answer-wrong'}">${userAnswer}</span></td>
                                    <td><span class="answer-display answer-correct-option">${correctAnswer}</span></td>
                                    <td>
                                        <span class="status-badge ${isCorrect ? 'correct' : 'wrong'}">
                                            <span class="status-icon">${isCorrect ? '✅' : '❌'}</span>
                                            ${isCorrect ? 'Correct' : 'Wrong'}
                                        </span>
                                    </td>
                                </tr>`;
                        });

                        $("#scoreDisplay").text(`${correctCount}/${total}`);
                        $("#scorePercentage").text(`${convertScore(correctCount)}`);

                        let percentage = (correctCount / total) * 100;
                        let scoreCircle = $(".score-circle");

                        if (percentage >= 80) {
                            scoreCircle.css("background", "linear-gradient(135deg, #27ae60, #2ecc71)");
                        } else if (percentage >= 60) {
                            scoreCircle.css("background", "linear-gradient(135deg, #f39c12, #e67e22)");
                        } else {
                            scoreCircle.css("background", "linear-gradient(135deg, #e74c3c, #c0392b)");
                        }

                        $("#resultsTableBody").html(tableRows);

                        showModal(`Score: ${correctCount} / ${total}`);
                    } else {
                        alert('Terjadi kesalahan: ' + response.message);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan: ' + xhr.status);
                }
            });

        });
    </script>

</body>

</html>
