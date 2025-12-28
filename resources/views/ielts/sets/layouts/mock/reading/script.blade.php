<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script>
    function confirmExit() {
        if (confirm('Are you sure you want to end the test?')) {
            location.href = '/ielts/categories?set-id={{ $set->kode }}';
        }
    }

    let scoreMap = [{
            min: 39,
            max: 40,
            score: 9.0
        },
        {
            min: 37,
            max: 38,
            score: 8.5
        },
        {
            min: 35,
            max: 36,
            score: 8.0
        },
        {
            min: 33,
            max: 34,
            score: 7.5
        },
        {
            min: 30,
            max: 32,
            score: 7.0
        },
        {
            min: 27,
            max: 29,
            score: 6.5
        },
        {
            min: 23,
            max: 26,
            score: 6.0
        },
        {
            min: 19,
            max: 22,
            score: 5.5
        },
        {
            min: 15,
            max: 18,
            score: 5.0
        },
        {
            min: 13,
            max: 14,
            score: 4.5
        },
        {
            min: 10,
            max: 12,
            score: 4.0
        },
        {
            min: 8,
            max: 9,
            score: 3.5
        },
        {
            min: 6,
            max: 7,
            score: 3.0
        },
        {
            min: 4,
            max: 5,
            score: 2.5
        }
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

<script>
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

                let results = [];

                $('.q-item').each(function() {
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
                                // fallback jika belum dipilih
                                const anyRadio = $(this).find('input[type="radio"]').first();
                                if (anyRadio.length > 0) {
                                    name = anyRadio.attr('name');
                                }
                            }
                            break;

                        case 'sa':
                        case 'tc':
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
                        set_id: 'XJ3XOcvqPbgdZwyl',
                        kategori: 'reading',
                        answers: results,
                        tipe_test: 'practice'
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

        document.getElementById('doneBtn').addEventListener('click', function() {
            const confirmFinish = confirm('Do you want to end the test now?');
            if (confirmFinish) {
                let results = [];

                $('.q-item').each(function() {
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
                                // fallback jika belum dipilih
                                const anyRadio = $(this).find('input[type="radio"]').first();
                                if (anyRadio.length > 0) {
                                    name = anyRadio.attr('name');
                                }
                            }
                            break;

                        case 'sa':
                        case 'tc':
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
                        set_id: 'XJ3XOcvqPbgdZwyl',
                        kategori: 'reading',
                        answers: results,
                        tipe_test: 'practice'
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
                                if (!correctAnswer && isCorrect) correctAnswer =
                                    userAnswer;
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
            }
        });

        // Mulai countdown (contoh: 15 menit)
        startCountdown(13 * 60);
    })();
</script>

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
        setActive('tfng');
    });
</script>

<!-- script bagian reading + questions  -->
<script>
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
    function retryQuiz() {
        location.reload();
    }

    document.addEventListener('DOMContentLoaded', function() {
        const floatingQ = document.getElementById('floatingQuestions');
        const fqBody = document.getElementById('fqBody');
        const fqList = document.getElementById('fqList');
        const fqToggle = document.getElementById('fqToggle');

        if (!floatingQ || !fqBody || !fqList || !fqToggle) return;

        let isCollapsed = false;
        let currentPart = 'tfng';
        let questionCount = 0;

        // Toggle collapse
        fqToggle.addEventListener('click', () => {
            isCollapsed = !isCollapsed;
            floatingQ.classList.toggle('collapsed', isCollapsed);
            floatingQ.classList.toggle('expanded', !isCollapsed);
        });

        // Generate question numbers
        function generateQuestionList(partId, count) {
            fqList.innerHTML = '';
            questionCount = count;

            for (let i = 1; i <= count; i++) {
                const item = document.createElement('a');
                item.href = '#';
                item.className = 'fq-item';
                item.textContent = i;
                item.dataset.q = i;
                item.dataset.part = partId;

                // Scroll ke soal saat diklik
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    scrollToQuestion(i, partId);
                });

                fqList.appendChild(item);
            }
        }

        // Scroll ke soal tertentu
        function scrollToQuestion(qNum, partId) {
            const panel = document.getElementById(`panel-${partId}`);
            if (!panel) return;

            const question = panel.querySelector(`[data-q="${qNum}"]`);
            if (question) {
                question.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
                question.focus();
            }
        }

        // Update status soal (radio, dropdown, text)
        function updateQuestionStatus(partId) {
            const panel = document.getElementById(`panel-${partId}`);
            if (!panel) return;

            fqList.querySelectorAll('.fq-item').forEach(item => {
                item.classList.remove('answered', 'current');
            });

            for (let i = 1; i <= questionCount; i++) {
                const item = fqList.querySelector(`[data-q="${i}"][data-part="${partId}"]`);
                if (!item) continue;

                const question = panel.querySelector(`[data-q="${i}"]`);
                if (!question) continue;

                let answered = false;

                // Radio
                const radioChecked = question.querySelector('input[type="radio"]:checked');
                if (radioChecked) answered = true;

                // Dropdown
                const dropdown = question.querySelector('select.q-dropdown');
                if (dropdown && dropdown.value !== '') answered = true;

                // Text input
                const textInput = question.querySelector('input[type="text"], textarea');
                if (textInput && textInput.value.trim() !== '') answered = true;

                if (answered) item.classList.add('answered');
            }
        }

        // Deteksi jawaban berubah
        function watchAnswerChanges() {
            document.addEventListener('input', (e) => {
                const question = e.target.closest('[data-q]');
                if (question) updateQuestionStatus(currentPart);
            });

            document.addEventListener('change', (e) => {
                const question = e.target.closest('[data-q]');
                if (question) updateQuestionStatus(currentPart);
            });

            document.addEventListener('click', (e) => {
                const option = e.target.closest('.q-option');
                if (option) setTimeout(() => updateQuestionStatus(currentPart), 50);
            });
        }

        // Deteksi perubahan part
        function watchPartChanges() {
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.type === 'attributes' && mutation.attributeName ===
                        'data-active') {
                        const newPart = mutation.target.dataset.active;
                        if (newPart && newPart !== currentPart) {
                            currentPart = newPart;
                            updateQuestionListForPart(newPart);
                        }
                    }
                });
            });

            const tabsContainer = document.querySelector('.x-tabs');
            if (tabsContainer) observer.observe(tabsContainer, {
                attributes: true,
                attributeFilter: ['data-active']
            });
        }

        // Update question list untuk part aktif
        function updateQuestionListForPart(partId) {
            const questionCounts = {
                'tfng': 13,
                'tfng2': 13,
                'ynng': 14,
            };
            const count = questionCounts[partId] || 5;
            generateQuestionList(partId, count);
            updateQuestionStatus(partId);
        }

        // Init
        updateQuestionListForPart('tfng');
        watchPartChanges();
        watchAnswerChanges();
        setInterval(() => updateQuestionStatus(currentPart), 2000);
    });
</script>

<script>
    function makeDraggable(el) {
        let isDragging = false;
        let startX, startY, initialX, initialY;

        const startDrag = (e) => {
            isDragging = true;
            const evt = e.touches ? e.touches[0] : e;
            startX = evt.clientX;
            startY = evt.clientY;

            const rect = el.getBoundingClientRect();
            initialX = rect.left;
            initialY = rect.top;

            document.addEventListener("mousemove", drag);
            document.addEventListener("mouseup", stopDrag);
            document.addEventListener("touchmove", drag);
            document.addEventListener("touchend", stopDrag);
        };

        const drag = (e) => {
            if (!isDragging) return;
            const evt = e.touches ? e.touches[0] : e;

            const dx = evt.clientX - startX;
            const dy = evt.clientY - startY;

            el.style.left = initialX + dx + "px";
            el.style.top = initialY + dy + "px";
            el.style.right = "auto";
            el.style.bottom = "auto";
        };

        const stopDrag = () => {
            isDragging = false;
            document.removeEventListener("mousemove", drag);
            document.removeEventListener("mouseup", stopDrag);
            document.removeEventListener("touchmove", drag);
            document.removeEventListener("touchend", stopDrag);
        };

        el.addEventListener("mousedown", startDrag);
        el.addEventListener("touchstart", startDrag);
    }

    // aktifkan drag untuk semua floating button
    document.querySelectorAll(".floating-btn").forEach(btn => {
        makeDraggable(btn);
    });
</script>
