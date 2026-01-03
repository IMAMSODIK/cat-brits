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
        setActive('tfng');
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
                'tfng': 10,
                'tfng2': 10,
                'ynng': 10,
                'mse': 10,
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

        let results = [];

        $('.q-item, .q-text, .q-list').each(function() {
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
        let results = [];

        $('.q-item, .q-text, .q-list').each(function() {

            // Abaikan item dalam q-list (anak)
            if ($(this).closest('.q-list').length && !$(this).is('.q-list')) return;

            const type = $(this).data('type');
            let qnum = $(this).data('q');

            // FIX utama error Undefined array key 'question'
            if (qnum === undefined || qnum === null || qnum === "") {
                qnum = results.length + 1;
            }

            if (!type) return; // skip yang tidak punya type

            let name = null;
            let answer = null;

            switch (type) {

                // ========================== RADIO ==========================
                case 'tfng':
                case 'oc':
                case 'ynng': {

                    const selected = $(this).find('input[type="radio"]:checked');

                    if (selected.length > 0) {
                        name = selected.attr('name');
                        answer = selected.val();
                    } else {
                        const firstRadio = $(this).find('input[type="radio"]').first();
                        name = firstRadio.attr('name') || ('q' + qnum);
                        answer = null;
                    }

                    break;
                }

                // ========================== TEXT INPUT ==========================
                case 'sa':
                case 'tc':
                case 'nc': {

                    if ($(this).is('input[type="text"]')) {
                        // ✅ q-text langsung
                        name = $(this).attr('name');
                        answer = $(this).val();
                    } else {
                        // ✅ container
                        const inp = $(this).find('input[type="text"]');
                        if (inp.length > 0) {
                            name = inp.attr('name');
                            answer = inp.val();
                        }
                    }

                    break;
                }

                // ========================== TWO CHECKBOX ==========================
                case 'two_choices': {

                    const first = $(this).find('input[type="checkbox"]').first();
                    const selected = $(this).find('input[type="checkbox"]:checked');

                    name = first.attr('name') || ('q' + qnum);

                    answer = selected.map(function() {
                        return $(this).val();
                    }).get();

                    // jika jawaban kosong → answer = []
                    break;
                }

                // ========================== SELECT ==========================
                case 'mh':
                case 'mse':
                case 'matching_information': {

                    const sel = $(this).find('select');

                    if (sel.length > 0) {
                        name = sel.attr('name');
                        answer = sel.val();
                    }

                    break;
                }
            }

            // >>>> FIX PENTING untuk elak error Undefined array key 'question'
            if (!name) name = 'q' + qnum;

            results.push({
                type: type,
                name: name,
                answer: (answer !== '' && answer !== undefined ? answer : null),
                question: qnum || null
            });

        });

        console.log(results);

        // ========================== AJAX ==========================
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
