<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    (function() {
        // Events
        document.getElementById('infoBtn').addEventListener('click', function() {
            // Ganti dengan modal/informasi instruksi Anda
            alert(
                'Instructions:\n- Read the questions carefully\n- Click "Close" to quit the test'
            );
        });

        document.getElementById('doneBtn').addEventListener('click', function() {
            const confirmFinish = confirm('Do you want to end the test now?');
            if (confirmFinish) {
                window.location.href = $(this).data('url');
            }
        });
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
            const passageBody = panel.querySelector('.passage-body');

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
                (!e.target.classList.contains('highlight') || !e.target.closest('.passage-body')) &&
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

<script>
    (function() {

        let remaining = 0;
        let timer = null;
        let alreadySubmitted = false;

        const el = document.getElementById('timeText');
        const wrap = document.getElementById('timer');
        const doneBtn = document.getElementById('doneBtn');

        function format(sec) {
            const m = Math.floor(sec / 60);
            const s = sec % 60;
            return String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
        }

        function forceSubmit() {
            if (alreadySubmitted) return;
            alreadySubmitted = true;

            // Disable tombol
            // doneBtn.disabled = true;
            // doneBtn.style.opacity = 0.7;
            // doneBtn.style.cursor = 'not-allowed';

            // 🔥 Trigger submit form writing
            $('.response-form').each(function() {
                const form = $(this);
                const textarea = form.find('.js-response');

                if (textarea.val().trim() !== '') {
                    form.trigger('submit');
                }
            });
        }

        function tick() {
            if (remaining <= 0) {
                clearInterval(timer);
                timer = null;

                el.textContent = '00:00';
                wrap.classList.add('danger');

                forceSubmit();
                return;
            }

            remaining--;
            el.textContent = format(remaining);

            if (remaining <= 60) {
                wrap.classList.add('danger');
            }
        }

        function startCountdown(seconds) {
            clearInterval(timer);
            alreadySubmitted = false;

            remaining = Math.max(0, Math.floor(seconds));
            el.textContent = format(remaining);
            wrap.classList.toggle('danger', remaining <= 60);

            doneBtn.disabled = false;
            doneBtn.style.opacity = 1;
            doneBtn.style.cursor = 'pointer';

            timer = setInterval(tick, 1000);
        }

        // Public API
        window.CATHeader = {
            startCountdown
        };

        // INFO BUTTON
        document.getElementById('infoBtn')?.addEventListener('click', () => {
            alert(
                'Instructions:\n' +
                '- Write your response carefully\n' +
                '- Timer runs automatically\n' +
                '- When time is up, your answer is submitted automatically'
            );
        });

        // 🚀 START (contoh 15 menit)
        startCountdown(60 * 60);

    })();
</script>


<script>
    $(document).ready(function() {
        const form = $("#combined-writing-form");
        const textareas = form.find(".js-response");
        const submitBtn = form.find(".js-submit-all");
        const clearBtn = form.find(".js-clear-all");
        const successMessage = form.find(".js-success");

        textareas.each(function() {
            const textarea = $(this);
            const charCount = textarea.closest(".form-group").find(".char-count");

            function updateCharCount() {
                const words = textarea.val().trim() === "" ? 0 : textarea.val().trim().split(/\s+/)
                    .length;
                charCount.text(words);

                let allFilled = true;
                textareas.each(function() {
                    if ($(this).val().trim() === "") allFilled = false;
                });
                submitBtn.prop("disabled", !allFilled);
            }

            function autoResize() {
                textarea.css("height", "auto");
                textarea.css("height", Math.max(200, textarea[0].scrollHeight) + "px");
            }

            textarea.on("input", function() {
                updateCharCount();
                autoResize();
            });

            // INIT
            updateCharCount();
            autoResize();
        });

        /* CLEAR ALL BUTTON */
        clearBtn.on("click", function() {
            if (confirm("Are you sure you want to clear all text?")) {
                textareas.val("");
                textareas.each(function() {
                    $(this).trigger("input");
                });
                textareas.first().focus();
            }
        });

        /* FORM SUBMISSION */
        form.on("submit", function(e) {
            e.preventDefault();

            let answersData = [];
            let isValid = true;

            textareas.each(function() {
                const textarea = $(this);
                const val = textarea.val().trim();

                if (!val) {
                    isValid = false;
                }

                answersData.push({
                    task: textarea.data("task"),
                    answer: val,
                    no_soal: textarea.data("no-soal")
                });
            });

            if (!isValid) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Perhatian',
                    text: 'Harap isi semua task sebelum melakukan submit.'
                });
                return;
            }

            submitBtn.text("Submitting...");
            submitBtn.prop("disabled", true);

            $.ajax({
                url: "/ielts/practice/check",
                type: "POST",
                data: {
                    tipe: "mock",
                    set_id: form.data("set-id"),
                    kategori: "writing",
                    tasks: answersData, // Mengirim data array berisi jawaban masing-masing task
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    submitBtn.text("Submit All Tasks");
                    submitBtn.prop("disabled", false);

                    if (res.status) {
                        successMessage.show();

                        // SweetAlert dengan tombol OK untuk refresh
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: res.message || 'Task submitted successfully',
                            confirmButtonText: 'OK',
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: res.message || "Unexpected error."
                        });
                    }
                },
                error: function(xhr) {
                    submitBtn.text("Submit All Tasks");
                    submitBtn.prop("disabled", false);

                    console.log("=== AJAX ERROR DEBUG ===");
                    console.log("STATUS:", xhr.status);
                    console.log("RESPONSE:", xhr.responseText);

                    Swal.fire({
                        icon: 'error',
                        title: 'Server Error',
                        text: 'Terjadi kesalahan pada server: ' + xhr.status
                    });
                }
            });
        });

        /* MOBILE SCROLL FIX */
        if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            textareas.on("focus", function() {
                const currentTextarea = $(this);
                setTimeout(() => {
                    currentTextarea[0].scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });
                }, 300);
            });
        }
    });
</script>
