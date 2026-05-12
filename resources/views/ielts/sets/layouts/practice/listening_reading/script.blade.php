{{-- konversi nilai --}}
<script>
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
        return 0;
    }
</script>

{{-- timer (tidak dipakai dipractice) --}}
<script>
    (function() {
        // let remaining = 0;
        // let t = null;
        // const el = document.getElementById('timeText');
        // const wrap = document.getElementById('timer');

        // function format(mmss) {
        //     const m = Math.floor(mmss / 60);
        //     const s = mmss % 60;
        //     return String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
        // }

        // function tick() {
        //     if (remaining <= 0) {
        //         clearInterval(t);
        //         t = null;
        //         el.textContent = '00:00';
        //         wrap.classList.add('danger');
        //         document.getElementById('doneBtn').disabled = true;
        //         document.getElementById('doneBtn').style.opacity = 0.7;
        //         document.getElementById('doneBtn').style.cursor = 'not-allowed';
        //         // TODO: panggil handler waktu habis (auto-submit/alert) bila diperlukan
        //         return;
        //     }
        //     remaining -= 1;
        //     el.textContent = format(remaining);
        //     // Kedipkan danger saat < 60 detik
        //     if (remaining <= 60) {
        //         wrap.classList.add('danger');
        //     }
        // }

        // function startCountdown(seconds) {
        //     if (t) clearInterval(t);
        //     remaining = Math.max(0, Math.floor(seconds));
        //     el.textContent = format(remaining);
        //     wrap.classList.toggle('danger', remaining <= 60);
        //     document.getElementById('doneBtn').disabled = false;
        //     document.getElementById('doneBtn').style.opacity = 1;
        //     document.getElementById('doneBtn').style.cursor = 'pointer';
        //     t = setInterval(tick, 1000);
        // }

        // // Public API (opsional)
        // window.CATHeader = {
        //     startCountdown
        // };

        // // Mulai countdown (contoh: 15 menit)
        // startCountdown(15 * 60);

        document.getElementById('infoBtn').addEventListener('click', function() {
            alert(
                'Instructions:\n- Read the questions carefully\n- Click "Close" to quit the test'
            );

        });

        document.getElementById('doneBtn').addEventListener('click', function() {
            const confirmFinish = confirm('Do you want to end the test now?');
            if (confirmFinish) {
                window.history.back();
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
            if (moved && e && e.target.closest('.x-tab')) e.preventDefault();
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


{{-- script audio players --}}
{{-- <script>
    (function setupAudioPlayers() {
        const players = document.querySelectorAll('.audio-player');

        players.forEach(player => {
            const audio = player.querySelector('audio');
            const playBtn = player.querySelector('.ap-play');
            const muteBtn = player.querySelector('.ap-vol');
            const seek = player.querySelector('.ap-seek');
            const progress = player.querySelector('.ap-progress');
            const cur = player.querySelector('.ap-current');
            const dur = player.querySelector('.ap-duration');
            const iconPlay = player.querySelector('.ap-icon-play');
            const iconPause = player.querySelector('.ap-icon-pause');
            const track = player.querySelector('.ap-track');

            function fmt(t) {
                if (!isFinite(t)) return '0:00';
                const m = Math.floor(t / 60);
                const s = Math.floor(t % 60);
                return m + ':' + String(s).padStart(2, '0');
            }

            // durasi
            audio.addEventListener('loadedmetadata', () => {
                dur.textContent = fmt(audio.duration);
            });

            // update progress
            audio.addEventListener('timeupdate', () => {
                cur.textContent = fmt(audio.currentTime);
                const pct = (audio.currentTime / (audio.duration || 1)) * 100;
                progress.style.width = pct + '%';
                seek.value = pct;
            });

            // play/pause toggle
            playBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                if (audio.paused) audio.play();
                else audio.pause();
            });

            audio.addEventListener('play', () => {
                iconPlay.style.display = 'none';
                iconPause.style.display = 'inline';
                playBtn.setAttribute('aria-label', 'Pause audio');
            });

            audio.addEventListener('pause', () => {
                iconPlay.style.display = 'inline';
                iconPause.style.display = 'none';
                playBtn.setAttribute('aria-label', 'Play audio');
            });

            // seek slider
            seek.addEventListener('input', (e) => {
                e.stopPropagation();
                if (!audio.duration) return;
                const t = (parseFloat(seek.value) / 100) * audio.duration;
                audio.currentTime = t;
                console.log("Seek input →", t);
            });

            seek.addEventListener('change', (e) => {
                e.stopPropagation();
                if (!audio.duration) return;
                const t = (parseFloat(seek.value) / 100) * audio.duration;
                audio.currentTime = t;
                console.log("Seek change →", t);
            });

            // klik progress bar
            track.addEventListener('click', (e) => {
                e.stopPropagation();
                if (!audio.duration) return;
                const rect = track.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const pct = x / rect.width;
                const t = pct * audio.duration;
                audio.currentTime = t;
                console.log("Track click →", t);
            });

            // mute toggle
            muteBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                audio.muted = !audio.muted;
                muteBtn.querySelector('.ap-icon').textContent = audio.muted ? '🔇' : '🔊';
                muteBtn.setAttribute('aria-label', audio.muted ? 'Unmute audio' : 'Mute audio');
            });
        });
    })();
</script> --}}

<script>
    let currentPlaying = null;

    document.querySelectorAll("[data-player]").forEach(player => {

        const audio = player.querySelector("audio");
        const btnPlay = player.querySelector(".play-btn");
        const icon = btnPlay.querySelector("i");
        const seekBar = player.querySelector(".seekBar");
        const curT = player.querySelector(".current");
        const durT = player.querySelector(".duration");

        let isSeeking = false;

        // =============== STOP AUDIO LAIN ===============
        function stopOtherPlayers() {
            if (currentPlaying && currentPlaying !== audio) {
                currentPlaying.pause();
                const otherBtn = currentPlaying.closest("[data-player]").querySelector(".play-btn i");
                otherBtn.className = "fas fa-play";
            }
            currentPlaying = audio;
        }

        // =============== PLAY / PAUSE ===============
        btnPlay.addEventListener("click", () => {
            stopOtherPlayers();

            if (audio.paused) {
                audio.play();
                icon.className = "fas fa-pause";
            } else {
                audio.pause();
                icon.className = "fas fa-play";
            }
        });

        // =============== START FROM X ===============
        player.querySelectorAll(".start-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                const offset = parseFloat(btn.dataset.start);

                stopOtherPlayers();
                audio.currentTime = offset;
                audio.play();
                icon.className = "fas fa-pause";
            });
        });

        // =============== SEEK BAR ===============
        seekBar.addEventListener("input", () => {
            // Jangan izinkan seek sebelum metadata siap
            if (!audio.duration || isNaN(audio.duration)) return;

            isSeeking = true;
            audio.currentTime = (seekBar.value / 100) * audio.duration;
        });

        seekBar.addEventListener("change", () => {
            isSeeking = false;
        });


        setInterval(() => {
            if (!audio.duration) return;

            if (!isSeeking) {
                seekBar.value = (audio.currentTime / audio.duration) * 100;
            }

            curT.textContent = format(audio.currentTime);
            durT.textContent = format(audio.duration);

        }, 200);

        audio.addEventListener("loadedmetadata", () => {
            durT.textContent = format(audio.duration);
        });

        function format(t) {
            if (!t) return "0:00";
            const m = Math.floor(t / 60);
            const s = Math.floor(t % 60).toString().padStart(2, "0");
            return `${m}:${s}`;
        }
    });

    $(".x-tab").on("click", function() {
        if (currentPlaying) {
            currentPlaying.pause();

            // Kembalikan icon play pada player tersebut
            const btn = currentPlaying.closest("[data-player]").querySelector(".play-btn i");
            btn.className = "fas fa-play";
        }
    });
</script>

{{-- main --}}
{{-- script berfungsi untuk menampilkan modal, retry quiz dan proses submit --}}
<script>
    $("#resultModal").removeClass("show").hide();

    function showModal(title = "Hasil Jawaban Anda") {
        $("#modalScoreTitle").text(title);
        $("#resultModal").addClass("show");
        $("body").css("overflow", "hidden");
    }

    function closeModal() {
        $("#resultModal").removeClass("show");
        $("body").css("overflow", "auto");

        setTimeout(function() {
            $("#resultModal").hide();
        }, 300);
    }

    function retryQuiz() {
        // closeModal();

        // $(".qa-body input[type=radio]").prop("checked", false);
        // $(".q-option").removeClass("correct wrong is-selected unanswered-highlight");
        // $("#resultsTableBody").empty();
        // $("#scoreDisplay").text("0/0");
        // // $("#scorePercentage").text("0");

        // setTimeout(function () {
        //     $('html, body').scrollTop($(".qa-body").offset().top);
        // }, 350);
        location.reload();
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

    function submitHelper(form, setId, tipe, button, againBtn, namaTipe) {
        let allAnswered = true;

        $(`#${form} select[data-q]`).each(function() {
            if (!$(this).closest("fieldset").length) {
                const q = $(this).data("q");
                $(this).wrap(`<fieldset data-q="${q}" class="temp-fieldset"></fieldset>`);
            }
        });

        $(`#${form} input[type="text"]`).each(function() {
            if (!$(this).closest("fieldset[data-q]").length) {
                const q = $(this).prevAll(".q-number-box").first().text();
                if (q) {
                    $(this).wrap(`<fieldset data-q="${q}" class="temp-fieldset q-item"></fieldset>`);
                }
            }
        });

        $(`#${form} fieldset[data-q]`).each(function() {
            let isAnswered = false;
            const inputs = $(this).find("input, select, textarea");

            inputs.each(function() {
                if ($(this).is("input[type=radio], input[type=checkbox]") && $(this).is(":checked")) {
                    isAnswered = true;
                } else if ($(this).is("input[type=text], textarea") && $(this).val().trim() !== "") {
                    isAnswered = true;
                } else if ($(this).is("select") && $(this).val() !== "") {
                    isAnswered = true;
                }
            });

            if (!isAnswered) {
                allAnswered = false;
                $(this).addClass("unanswered-highlight");
            } else {
                $(this).removeClass("unanswered-highlight");
            }
        });

        if (!allAnswered) {
            alert("Please answer all questions before submitting!");
            return;
        }

        let formData = new FormData($(`#${form}`)[0]);
        formData.append("tipe", tipe);
        formData.append("_token", $("meta[name='csrf-token']").attr("content"));
        formData.append("set_id", setId);
        formData.append("kategori", button.data('kategori'));
        formData.append("tipe_test", 'practice');
        formData.append("jumlah_soal", button.data('count'));
        formData.append("nama_tipe", namaTipe);

        $.ajax({
            url: "/ielts/practice/check",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status === "ok") {
                    button.css('display', 'none');
                    $(`#${againBtn}`).css('display', '');

                    $(".q-option").removeClass("correct wrong");
                    $(".text-answer, .select-answer").removeClass("correct wrong");

                    let correctCount = response.score;
                    let total = Object.keys(response.results).length;
                    let tableRows = "";
                    let questionNumber = 1;

                    $.each(response.results, function(qid, data) {
                        let isCorrect = data.status === "correct";

                        // 2. Ambil CORRECT ANSWER dengan fallback
                        let correctAnswer = data.correct || '';
                        let userAnswer = data.user || '';
                        if (!correctAnswer && isCorrect) {
                            correctAnswer = userAnswer; // kalau benar tapi backend gak kirim kunci
                        }
                        if (!correctAnswer) {
                            correctAnswer = "NOT GIVEN";
                        }

                        // 3. Highlight input aslinya
                        let questionElement = $(`fieldset[data-q="${qid.replace(/[^0-9]/g, '')}"]`);
                        questionElement.find("input, select, textarea").each(function() {
                            if ($(this).is("input[type=radio], input[type=checkbox]")) {
                                if ($(this).is(":checked")) {
                                    if (isCorrect) {
                                        $(this).parent().addClass("correct");
                                    } else {
                                        $(this).parent().addClass("wrong");
                                        $(`input[name="${qid}"][value="${correctAnswer}"]`)
                                            .parent().addClass("correct");
                                    }
                                }
                            } else {
                                if (isCorrect) {
                                    $(this).addClass("correct");
                                } else {
                                    $(this).addClass("wrong");
                                }
                            }
                        });

                        // 4. Buat tabel baris
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


                    $("#scoreDisplay").text(`${correctCount}/${total}`);
                    // $("#scorePercentage").text(`${convertScore(correctCount)}`);

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
                }
            },
            error: function(xhr) {
                alert("Terjadi kesalahan: " + xhr.status);
                console.log(xhr.responseText);
            }
        });
    }

    $(".try-again").on("click", function() {
        location.reload();
    })
</script>
