<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('form').forEach(function (form) {
            form.setAttribute('autocomplete', 'off');
        });
        document.querySelectorAll('input').forEach(function (input) {
            input.setAttribute('autocomplete', 'off');
            input.setAttribute('autocorrect', 'off');
            input.setAttribute('autocapitalize', 'off');
            input.setAttribute('spellcheck', 'false');
        });
        document.querySelectorAll('textarea').forEach(function (textarea) {
            textarea.setAttribute('autocomplete', 'off');
            textarea.setAttribute('autocorrect', 'off');
            textarea.setAttribute('autocapitalize', 'off');
            textarea.setAttribute('spellcheck', 'false');
        });
    });
</script>
<script>
    document.addEventListener('change', function (e) {
        const checkbox = e.target;
        if (checkbox.type !== 'checkbox') return;

        const fieldset = checkbox.closest('fieldset.q-item[data-type="two_choices"]');
        if (!fieldset) return;

        const max = parseInt(fieldset.dataset.max || 2, 10);
        const checked = fieldset.querySelectorAll('input[type="checkbox"]:checked');

        if (checked.length > max) {
            checkbox.checked = false;
            alert('You can only select ' + max + ' answers for this question.');
        }
    });
</script>
    
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

                $('.q-item, .q-list, .q-text, .q-dropdown').each(function() {
                    const type = $(this).data('type');
                    const qnum = $(this).data('q');

                    if (!type) return;

                    let name = null;
                    let answer = null;

                    switch (type) {

                        case 'summary_completion': {
                            let field;

                            if ($(this).is('input[type="text"], select')) {
                                field = $(this);
                            } else {
                                field = $(this).find('input[type="text"], select').first();
                            }
                            if (field && field.length) {
                                name = field.attr('name');
                                answer = field.val() || null;
                            }
                            break;
                        }
                        case 'tfng':
                        case 'oc':
                        case 'ynng': {
                            const checked = $(this).find('input[type="radio"]:checked');
                            if (checked.length) {
                                name = checked.attr('name');
                                answer = checked.val();
                            } else {
                                const first = $(this).find('input[type="radio"]').first();
                                if (first.length) name = first.attr('name');
                            }
                            break;
                        }

                        case 'sa':
                        case 'tc':
                        case 'nc':
                        case 'sentence_completion':
                        case 'diagram_labeling': {
                            let input;

                            if ($(this).is('input[type="text"]')) {
                                input = $(this);
                            } else {
                                input = $(this).find('input[type="text"]').first();
                            }

                            if (input.length) {
                                name = input.attr('name');
                                answer = input.val() || null;
                            }
                            break;
                        }

                        case 'mh':
                        case 'mse':
                        case 'matching_information':
                        case 'matching_features': {
                            let field;
                            if ($(this).is('input[type="text"], select')) {
                                field = $(this);
                            } else {
                                field = $(this).find('input[type="text"], select').first();
                            }

                            if (field && field.length) {
                                name = field.attr('name');
                                answer = field.val() || null;
                            }

                            break;
                        }

                        case 'two_choices': {
                            const first = $(this).find('input[type="checkbox"]').first();
                            const selected = $(this).find('input[type="checkbox"]:checked');

                            name = first.attr('name') || ('q' + qnum);
                            answer = selected.map(function() {
                                return $(this).val();
                            }).get();
                            break;
                        }
                    }

                    results.push({
                        type,
                        name,
                        answer,
                        question: qnum
                    });
                });

                $.ajax({
                    url: '/ielts/mock-test/check',
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        set_id: '{{ $set->kode }}',
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

                $('.q-item, .q-list, .q-text, .q-dropdown').each(function() {
                    const type = $(this).data('type');
                    const qnum = $(this).data('q');

                    if (!type) return;

                    let name = null;
                    let answer = null;

                    switch (type) {

                        case 'summary_completion': {
                            let field;

                            if ($(this).is('input[type="text"], select')) {
                                field = $(this);
                            } else {
                                field = $(this).find('input[type="text"], select').first();
                            }
                            if (field && field.length) {
                                name = field.attr('name');
                                answer = field.val() || null;
                            }
                            break;
                        }
                        case 'tfng':
                        case 'oc':
                        case 'ynng': {
                            const checked = $(this).find('input[type="radio"]:checked');
                            if (checked.length) {
                                name = checked.attr('name');
                                answer = checked.val();
                            } else {
                                const first = $(this).find('input[type="radio"]').first();
                                if (first.length) name = first.attr('name');
                            }
                            break;
                        }

                        case 'sa':
                        case 'tc':
                        case 'nc':
                        case 'sentence_completion':
                        case 'diagram_labeling': {
                            let input;

                            if ($(this).is('input[type="text"]')) {
                                input = $(this);
                            } else {
                                input = $(this).find('input[type="text"]').first();
                            }

                            if (input.length) {
                                name = input.attr('name');
                                answer = input.val() || null;
                            }
                            break;
                        }

                        case 'mh':
                        case 'mse':
                        case 'matching_information':
                        case 'matching_features': {
                            let field;
                            if ($(this).is('input[type="text"], select')) {
                                field = $(this);
                            } else {
                                field = $(this).find('input[type="text"], select').first();
                            }

                            if (field && field.length) {
                                name = field.attr('name');
                                answer = field.val() || null;
                            }

                            break;
                        }

                        case 'two_choices': {
                            const first = $(this).find('input[type="checkbox"]').first();
                            const selected = $(this).find('input[type="checkbox"]:checked');

                            name = first.attr('name') || ('q' + qnum);
                            answer = selected.map(function() {
                                return $(this).val();
                            }).get();
                            break;
                        }
                    }

                    results.push({
                        type,
                        name,
                        answer,
                        question: qnum
                    });
                });

                console.log(results);

                $.ajax({
                    url: '/ielts/mock-test/check',
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        set_id: '{{ $set->kode }}',
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
        startCountdown(60 * 60);
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
    function retryQuiz() {
        location.reload();
    }
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

