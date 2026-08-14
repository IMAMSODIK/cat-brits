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

        // Events
        document.getElementById('infoBtn').addEventListener('click', function() {
            alert(
                'Instructions:\n- Listen Instruction Video carefully\n- Click "Close" to quit the test'
            );

        });

        document.getElementById('doneBtn').addEventListener('click', function() {
            const confirmFinish = confirm('Do you want to end the test now?');
            if (confirmFinish) {
                window.history.back();
            }
        });

        // Mulai countdown (contoh: 15 menit)
        startCountdown(15 * 60);
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

<script>
    document.addEventListener('DOMContentLoaded', function() {

        function initSpeakingPanel(panelId) {
            const panel = document.querySelector(panelId);
            if (!panel) return;

            const questions = panel.querySelectorAll('.speaking-question');
            const totalQuestions = questions.length;
            console.log(totalQuestions);
            const progressDots = panel.querySelector('.progress-dots');

            // Clear dots sebelum generate ulang
            progressDots.innerHTML = "";

            // Generate dots sesuai jumlah soal di panel ini
            for (let i = 0; i < totalQuestions; i++) {
                const dot = document.createElement('div');
                dot.classList.add('dot');
                if (i === 0) dot.classList.add('active');
                progressDots.appendChild(dot);
            }

            function updateProgress(currentIdx) {
                const dots = progressDots.querySelectorAll('.dot');
                dots.forEach((dot, idx) => {
                    dot.classList.remove('active');
                    if (idx === currentIdx) dot.classList.add('active');
                });
            }

            function markCompleted(idx) {
                const dots = progressDots.querySelectorAll('.dot');
                if (dots[idx]) dots[idx].classList.add('completed');
            }

            // Navigation (previous/next)
            questions.forEach((q, idx) => {
                const prevBtn = q.querySelector('.sq-prev');
                const nextBtn = q.querySelector('.sq-next');

                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        q.hidden = true;
                        questions[idx - 1].hidden = false;
                        updateProgress(idx - 1);
                    });
                }
                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        q.hidden = true;
                        questions[idx + 1].hidden = false;
                        updateProgress(idx + 1);
                    });
                }
            });

            // Record button simulation
            panel.querySelectorAll('.sq-record').forEach((btn, idx) => {
                btn.addEventListener('click', () => {
                    btn.textContent = "✅ Recorded";
                    btn.classList.add("recorded");
                    markCompleted(idx);
                });
            });

            // Upload audio
            panel.querySelectorAll('.sq-upload').forEach((input, idx) => {
                input.addEventListener('change', () => {
                    if (input.files.length > 0) {
                        const label = input.closest('.sq-actions').querySelector(
                            '.sq-upload-label');
                        if (label) {
                            label.textContent = "✅ Audio Uploaded";
                            label.classList.add("uploaded");
                        }
                        markCompleted(idx);
                    }
                });
            });
        }

        // ✅ Inisialisasi untuk masing-masing panel
        initSpeakingPanel('#panel-tfng');
        initSpeakingPanel('#panel-tfng2');
        initSpeakingPanel('#panel-ynng');
    });
</script>

<script>
    (function() {

        const hasMediaDevices = !!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia);
        const hasMediaRecorder = typeof MediaRecorder !== "undefined";

        // simple beep
        function playBeep() {
            const audioCtx = new AudioContext();
            const oscillator = audioCtx.createOscillator();
            oscillator.type = "sine";
            oscillator.frequency.value = 900;
            oscillator.connect(audioCtx.destination);
            oscillator.start();
            setTimeout(() => oscillator.stop(), 200);
        }

        document.querySelectorAll(".speaking-question").forEach(container => {

            /* ------------------------------
               VIDEO PLAYER
            ------------------------------ */
            const instructionVideo = container.querySelector('.video-player video');
            const playBtn = container.querySelector(".play-btn");
            const pauseBtn = container.querySelector(".pause-btn");

            if (playBtn && pauseBtn && instructionVideo) {
                playBtn.addEventListener("click", () => {
                    instructionVideo.play();
                    playBtn.disabled = true;
                    pauseBtn.disabled = false;
                });

                pauseBtn.addEventListener("click", () => {
                    instructionVideo.pause();
                    playBtn.disabled = false;
                    pauseBtn.disabled = true;
                });

                instructionVideo.addEventListener("ended", () => {
                    playBtn.disabled = false;
                    pauseBtn.disabled = true;
                });
            }


            /* ------------------------------
               RECORDER ELEMENTS
            ------------------------------ */
            const preview = container.querySelector(".preview-video");
            const recordBtn = container.querySelector(".record-btn");
            const stopBtn = container.querySelector(".stop-btn");
            const indicator = container.querySelector(".recording-indicator");
            const timerDisplay = container.querySelector(".timer");
            const recordedVideo = container.querySelector(".recorded-video-element");
            const recordedContainer = container.querySelector(".recorded-video");

            const warningBox = document.createElement("div");
            warningBox.style.color = "red";
            warningBox.style.fontWeight = "bold";
            warningBox.style.marginTop = "5px";
            warningBox.style.display = "none";
            warningBox.textContent = "";
            container.querySelector(".recorder-container").appendChild(warningBox);


            /* ------------------------------
               STATE
            ------------------------------ */
            let mediaRecorder = null;
            let currentStream = null;
            let recordedChunks = [];
            let timerInterval = null;
            let seconds = 0;
            let isRecording = false;

            const MAX_RECORD_SECONDS = 180; // change freely


            /* ------------------------------
               TIMER
            ------------------------------ */
            function resetTimer() {
                seconds = 0;
                timerDisplay.textContent = "00:00";
                timerDisplay.style.color = "#000";
                warningBox.style.display = "none";
            }

            function startTimer() {
                resetTimer();

                timerInterval = setInterval(() => {
                    seconds++;

                    const m = String(Math.floor(seconds / 60)).padStart(2, "0");
                    const s = String(seconds % 60).padStart(2, "0");
                    timerDisplay.textContent = `${m}:${s}`;

                    const remaining = MAX_RECORD_SECONDS - seconds;

                    // last 10 seconds → turn red + show warning text
                    if (remaining <= 10) {
                        timerDisplay.style.color = "red";
                        warningBox.style.display = "block";
                        warningBox.textContent =
                            `Recording will auto-stop in ${remaining} seconds…`;
                    }

                    // last 3 seconds → beep
                    if (remaining <= 3 && remaining > 0) {
                        playBeep();
                    }

                    // auto-stop
                    if (seconds >= MAX_RECORD_SECONDS) {
                        stopRecordingFlow();
                    }

                }, 1000);
            }

            function stopTimer() {
                if (timerInterval) clearInterval(timerInterval);
                timerInterval = null;
            }


            /* ------------------------------
               CAMERA
            ------------------------------ */
            async function initCamera() {
                if (!hasMediaDevices) throw new Error("Media devices not supported.");

                const stream = await navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: true
                });
                preview.srcObject = stream;
                currentStream = stream;
                return stream;
            }

            function stopCamera() {
                if (!currentStream) return;
                currentStream.getTracks().forEach(t => t.stop());
                currentStream = null;
                preview.srcObject = null;
            }


            /* ------------------------------
               START RECORDING
            ------------------------------ */
            async function startRecordingFlow() {
                if (isRecording) return;

                try {
                    const stream = await initCamera();
                    recordedChunks = [];

                    let options = {};
                    if (MediaRecorder.isTypeSupported("video/webm;codecs=vp8,opus")) {
                        options.mimeType = "video/webm;codecs=vp8,opus";
                    }

                    mediaRecorder = new MediaRecorder(stream, options);

                    mediaRecorder.ondataavailable = e => {
                        if (e.data.size > 0) recordedChunks.push(e.data);
                    };

                    mediaRecorder.onstop = () => {
                        const blob = new Blob(recordedChunks, {
                            type: "video/webm"
                        });
                        const url = URL.createObjectURL(blob);
                        recordedVideo.src = url;
                        recordedContainer.style.display = "block";

                        stopCamera();
                        isRecording = false;
                    };

                    mediaRecorder.start();
                    isRecording = true;

                    recordBtn.disabled = true;
                    stopBtn.disabled = false;
                    indicator.classList.add("active");

                    startTimer();
                } catch (err) {
                    console.error("Start recording failed:", err);
                    alert("Failed to start recording.");
                }
            }


            /* ------------------------------
               STOP RECORDING
            ------------------------------ */
            function stopRecordingFlow() {
                if (!isRecording) return;

                try {
                    if (mediaRecorder && mediaRecorder.state !== "inactive") {
                        mediaRecorder.stop();
                    }
                } catch (e) {
                    console.error("Stopping error:", e);
                }

                recordBtn.disabled = false;
                stopBtn.disabled = true;
                indicator.classList.remove("active");

                stopTimer();
                resetTimer();
            }


            /* ------------------------------
               EVENTS
            ------------------------------ */
            recordBtn.addEventListener("click", () => startRecordingFlow());
            stopBtn.addEventListener("click", () => stopRecordingFlow());
            stopBtn.disabled = true;

        });

    })();
</script>

<script>
    $(function() {

        $(".speaking-question").each(function() {

            const block = $(this);
            const submitBtn = block.find(".sq-submit-btn");
            const recordedVideoElement = block.find(".recorded-video-element");

            submitBtn.on("click", function() {

                // cek apakah video pernah direkam
                const videoEl = recordedVideoElement.get(0);

                if (!videoEl || !videoEl.src) {
                    alert("Please record a video first before submitting.");
                    return;
                }

                const videoURL = videoEl.src;

                // ambil blob dari objectURL browser
                fetch(videoURL)
                    .then(r => r.blob())
                    .then(blob => {

                        const formData = new FormData();

                        // filename unik
                        const filename =
                            `recording_q${block.data("q") || ""}_${Date.now()}.webm`;

                        formData.append("video", blob, filename);
                        formData.append("question_id", block.data("q") || "");
                        formData.append("part", block.data("part") || "");
                        formData.append("timestamp", Date.now());
                        formData.append("set_id", "{{$set->kode}}");
                        formData.append("tipe", "speaking");
                        formData.append("kategori", "speaking");
                        formData.append("_token", $("meta[name='csrf-token']").attr(
                            "content"));

                        console.log("Submitting video:", filename, blob);

                        $.ajax({
                            url: "/ielts/practice/check",
                            method: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(res) {
                                alert("Video submitted successfully!");
                                setInterval(function() {
                                    location.reload();
                                }, 1000)
                            },
                            error: function(xhr) {
                                console.error("Upload error:", xhr);
                                alert("Failed to submit the video.");
                            }
                        });

                    })
                    .catch(err => {
                        console.error("Blob convert error:", err);
                        alert("Unable to process the recorded video.");
                    });

            });

        });

    });
</script>
