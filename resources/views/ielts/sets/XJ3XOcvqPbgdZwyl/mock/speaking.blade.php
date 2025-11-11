<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>{{ $set->name }} | {{ ucfirst($section) }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <style>
        :root {
            --bg: #ffffff;
            --text: #0f172a;
            --muted: #64748b;
            --primary: #2563eb;
            --danger: #ef4444;
            --ring: rgba(37, 99, 235, 0.35);
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", sans-serif;
        }

        .app-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: #4274ba;
            box-shadow: var(--shadow);
            padding: max(8px, env(safe-area-inset-top)) 12px 8px 12px;
        }

        .header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            color: #4f46e5;
            font-weight: 700;
            letter-spacing: 0.5px;
            user-select: none;
        }

        .title-wrap {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .app-title {
            font-size: 14px;
            font-weight: 600;
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .app-subtitle {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 0 0 auto;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            border: 1px solid #e5e7eb;
            background: #fff;
            color: var(--text);
            border-radius: 10px;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.06s ease, box-shadow 0.12s ease, border-color 0.12s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            touch-action: manipulation;
        }

        .btn:active {
            transform: translateY(1px) scale(0.99);
        }

        .btn:focus-visible {
            outline: 2px solid var(--ring);
            outline-offset: 2px;
        }

        .btn-ghost {
            border-color: #e5e7eb;
            background: #fff;
        }

        .btn-primary {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
        }

        .btn-danger {
            background: var(--danger);
            border-color: var(--danger);
            color: #fff;
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            padding: 0;
            border-radius: 10px;
        }

        .timer {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-variant-numeric: tabular-nums;
            font-feature-settings: "tnum" 1, "ss01" 1;
            padding: 8px 12px;
            border-radius: 10px;
            background: #f8fafc;
            color: var(--text);
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            min-width: 84px;
            justify-content: center;
            font-weight: 700;
        }

        .timer.danger {
            background: #fef2f2;
            color: #b91c1c;
            border-color: #fecaca;
        }

        .timer .fa-clock {
            color: var(--primary);
        }

        .timer.danger .fa-clock {
            color: #ef4444;
        }

        /* Responsive tweaks */
        @media (max-width: 420px) {
            .app-title {
                font-size: 13px;
            }

            .app-subtitle {
                display: none;
            }

            .btn span.label {
                display: none;
            }

            .btn {
                padding: 8px 10px;
            }

            .timer {
                min-width: 76px;
                padding: 8px 10px;
            }
        }

        .resizable-grid {
            display: grid;
            grid-template-columns: minmax(250px, 1fr) 6px minmax(250px, 1fr);
            /* kiri - handle - kanan */
            gap: 0;
            align-items: stretch;
            height: 100%;
            /* opsional, biar penuh */
        }

        .resize-handle {
            background: #e5e7eb;
            cursor: col-resize;
            width: 6px;
            transition: background 0.2s;
        }

        .resize-handle:hover {
            background: #cbd5e1;
        }
    </style>

    <!-- style informasi ujian (di bawah header) -->
    <style>
        .session-info {
            background: #f8fafc;
            border-top: 1px solid #111113;
            border-bottom: 1px solid #e5e7eb;
            padding: 10px 12px;
        }

        .session-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px 12px;
        }

        .kv.right {
            text-align: right;
        }

        .kv {
            min-width: 0;
        }

        .k {
            font-size: 11px;
            color: #64748b;
            line-height: 1.1;
            margin-bottom: 2px;
        }

        .v {
            font-size: 13px;
            font-weight: 600;
            color: #0f172a;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 420px) {
            .session-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <style>
        /* Panel Styling */
        .x-panel {
            max-width: 700px;
            margin: 0 auto;
            padding: 1rem;
        }

        /* Progress Dots */
        .progress-dots {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin: 1rem 0;
        }

        .dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #ccc;
            transition: background 0.3s;
        }

        .dot.active {
            background: #007bff;
            /* biru utk soal aktif */
        }

        .dot.completed {
            background: #28a745;
            /* hijau kalau sudah record/upload */
        }


        /* Navigation */
        .sq-navigation {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .nav-buttons {
            display: flex;
            justify-content: space-between;
            gap: 0.5rem;
        }

        .sq-navigation button {
            flex: 1;
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 8px;
            background: #007bff;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sq-navigation button:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .sq-navigation button:hover:not(:disabled) {
            background: #0056b3;
        }

        .sq-text {
            text-align: center;
            font-size: 1.1rem;
        }

        /* Actions */
        .sq-actions {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin: 1rem 0;
        }

        .sq-record {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 50px;
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .sq-record:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }

        .sq-record.recorded {
            background: #28a745;
        }

        /* Submit */
        .sq-submit {
            text-align: center;
        }

        .sq-submit-btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            background: #28a745;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sq-submit-btn:hover {
            background: #218838;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .sq-navigation .nav-buttons {
                flex-direction: row;
            }

            .sq-text {
                font-size: 1rem;
            }

            .sq-actions {
                flex-direction: column;
            }

            .sq-record {
                width: 100%;
            }
        }

        .sq-upload-label {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .sq-upload-label:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        .sq-upload-label.uploaded {
            background: #28a745;
        }

        .q-item {
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 0 0 0 10px;
            margin-bottom: 30px;
        }
    </style>
</head>


<body>
    <header class="app-header" role="banner">
        <div class="header-row" aria-label="Header CAT Bahasa Inggris">
            <div class="brand">
                <div class="logo" aria-hidden="true">
                    <img class="" style="width: 50px;margin-left: 20px" src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
                </div>
            </div>

            <div class="actions">
                <button id="infoBtn" class="btn btn-ghost icon-btn" aria-label="Informasi">
                    <i class="fa-solid fa-circle-info"></i>
                </button>

                <div id="timer" class="timer" aria-live="polite" aria-label="Sisa waktu">
                    <i class="fa-regular fa-clock"></i>
                    <span id="timeText">00:00</span>
                </div>

                <button id="doneBtn" class="btn btn-danger">
                    <i class="fa-solid fa-flag-checkered"></i>
                    <span class="label">Selesai</span>
                </button>
            </div>
        </div>
    </header>

    <section class="session-info" aria-label="Keterangan Sesi">
        <div class="session-grid">
            <div class="kv">
                <div class="k">Set Information</div>
                <div class="v" id="siName">{{ $set->name }} - {{ ucfirst($section) }}</div>
            </div>
            <div class="kv right">
                <div class="k">User</div>
                <div class="v" id="siUser">{{ auth()->user()->name }}</div>
            </div>
        </div>
    </section>


    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">

                    <fieldset class="q-item">
                        <p><b>Questions 1-4</b></p>
                    </fieldset>

                    <div class="progress-dots" id="progressDots"></div>

                    <div class="speaking-question" data-q="1">
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev" disabled>Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text"><b>Question 1:</b> <br>How do you usually spend your weekends? [Why?]</div>
                        </div>

                        <div class="sq-actions">
                            <button class="sq-record">🎙️ Start Recording</button>
                        </div>

                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="2" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text"><b>Question 2:</b> <br>Which is your favorite part of the weekend? [Why?]
                            </div>
                        </div>

                        <div class="sq-actions">
                            <button class="sq-record">🎙️ Start Recording</button>
                        </div>

                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="3" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text"><b>Question 3:</b> <br>Do you think your weekends are long enough? [Why/Why
                                note?]</div>
                        </div>

                        <div class="sq-actions">
                            <button class="sq-record">🎙️ Start Recording</button>
                        </div>

                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="4" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next" disabled>Next</button>
                            </div>
                            <div class="sq-text"><b>Question 4:</b> <br>How important do you think it is to have free time at
                                the
                                weekends? [Why?]</div>
                        </div>

                        <div class="sq-actions">
                            <button class="sq-record">🎙️ Start Recording</button>
                        </div>

                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

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
                    // TODO: panggil handler waktu habis (auto-submit/alert) bila diperlukan
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
                    'Instruksi:\n- Baca soal dengan cermat\n- Waktu berjalan otomatis\n- Klik "Selesai" untuk mengumpulkan'
                );
            });

            document.getElementById('doneBtn').addEventListener('click', function() {
                const confirmFinish = confirm('Yakin ingin menyelesaikan tes sekarang?');
                if (confirmFinish) {
                    // TODO: trigger submit/finish callback
                    console.log('Tes diselesaikan');
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
            const questions = document.querySelectorAll('.speaking-question');
            const totalQuestions = questions.length;
            const progressDots = document.getElementById('progressDots');

            // Generate dots
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
                    // jangan auto completed, hanya update active
                });
            }

            function markCompleted(idx) {
                const dots = progressDots.querySelectorAll('.dot');
                if (dots[idx]) {
                    dots[idx].classList.add('completed');
                }
            }

            // Navigation
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
            document.querySelectorAll('.sq-record').forEach((btn, idx) => {
                btn.addEventListener('click', () => {
                    btn.textContent = "✅ Recorded";
                    btn.classList.add("recorded");
                    markCompleted(idx); // dot jadi hijau
                });
            });

            // Upload audio
            document.querySelectorAll('.sq-upload').forEach((input, idx) => {
                input.addEventListener('change', () => {
                    if (input.files.length > 0) {
                        const label = input.closest('.sq-actions').querySelector(
                            '.sq-upload-label');
                        if (label) {
                            label.textContent = "✅ Audio Uploaded";
                            label.classList.add("uploaded");
                        }
                        markCompleted(idx); // dot jadi hijau
                    }
                });
            });
        });
    </script>



</body>

</html>
