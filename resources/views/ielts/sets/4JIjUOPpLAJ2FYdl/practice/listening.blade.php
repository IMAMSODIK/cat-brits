<!DOCTYPE html>
<html lang="id">

<head>
    @include('ielts.sets.layouts.practice.listening_reading.head')
    <!-- style bagian reading + questions -->
    <style>
        /* Layout container dengan jarak kiri-kanan seimbang */
        .reading-section {
            padding: 10px 12px 12px 12px;
            box-sizing: border-box;
        }

        /* Grid dua kolom (kiri naratif, kanan soal) */
        .reading-grid {
            display: grid;
            /* grid-template-columns: 1.1fr 1fr; */
            gap: 12px;
            align-items: stretch;
        }

        /* Panel kiri: naratif */
        .passage {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
            display: flex;
            flex-direction: column;
            min-height: 420px;
            max-height: min(72vh, 820px);
        }

        .passage-title {
            margin: 12px 12px 0 12px;
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
        }

        .passage-body {
            padding: 10px 12px 12px 12px;
            overflow: auto;
            /* scrollable */
            line-height: 1.6;
            color: #0f172a;
        }

        /* Panel kanan: instruksi + soal */
        .qa {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
            display: flex;
            flex-direction: column;
            min-height: 420px;
            max-height: min(72vh, 820px);
            overflow: hidden;
            /* biar sticky bekerja di dalam */
        }

        /* Instruksi sticky di atas */
        .qa-instructions {
            position: sticky;
            top: 0;
            z-index: 1;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            padding: 12px;
        }

        .qa-instructions .lead {
            font-weight: 700;
            margin: 0 0 6px 0;
        }

        .qa-instructions .legend {
            margin: 6px 0 0 18px;
            padding: 0;
        }

        .qa-instructions .legend li {
            margin: 2px 0;
        }

        /* Isi soal scrollable */
        .qa-body {
            padding: 10px 12px 12px 12px;
            overflow: auto;
            /* scrollable */
        }

        /* Soal */
        .q-item {
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 30px;
        }

        td .q-item {
            border: none !important;
            border-radius: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            box-shadow: none !important;
            outline: none !important;
            background: none !important;
        }

        .q-text {
            /* font-weight: 00; */
            color: #0f172a;
            margin: 0 0 8px 0;
        }

        .q-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 22px;
            height: 22px;
            border-radius: 999px;
            background: #eff6ff;
            color: #1d4ed8;
            font-size: 12px;
            margin-right: 8px;
        }

        /* Opsi */
        .q-options {
            display: grid;
            gap: 8px;
        }

        .q-option {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 10px 12px;
            cursor: pointer;
            user-select: none;
            transition: border-color .12s ease, background .12s ease, box-shadow .12s ease;
        }

        .q-option:hover {
            border-color: #cbd5e1;
            background: #f8fafc;
        }

        .q-option input {
            display: none;
        }

        .q-option .opt-code {
            font-weight: 800;
            color: #334155;
        }

        .q-option .opt-label {
            font-weight: 700;
            color: #0f172a;
        }

        /* State terpilih */
        .q-option.is-selected {
            border-color: #2563eb;
            background: #eef2ff;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, .20);
        }

        .q-option.is-selected .opt-code {
            color: #1d4ed8;
        }

        .q-option.is-selected .opt-label {
            color: #1d4ed8;
        }

        .q-dropdown {
            width: 50px;
            /* Lebar dropdown */
            padding: 6px 10px;
            /* Ruang dalam dropdown */
            border: 1px solid #ccc;
            /* Border abu-abu */
            border-radius: 6px;
            /* Sudut membulat */
            background-color: #fff;
            /* Warna background */
            font-size: 14px;
            /* Ukuran font */
            color: #333;
            /* Warna teks */
            appearance: none;
            /* Hilangkan style default browser */
            -webkit-appearance: none;
            /* Safari / Chrome */
            -moz-appearance: none;
            /* Firefox */
            cursor: pointer;
            /* Tanda pointer saat hover */
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        /* Hover & fokus */
        .q-dropdown:hover {
            border-color: #888;
        }

        .q-dropdown:focus {
            border-color: #3498db;
            box-shadow: 0 0 4px rgba(52, 152, 219, 0.4);
            outline: none;
        }

        /* Tambahan: arrow custom (opsional) */
        .q-dropdown-wrapper {
            position: relative;
            display: inline-block;
        }

        .q-dropdown-wrapper::after {
            content: "▾";
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #555;
            font-size: 12px;
        }


        /* Responsif: tumpuk vertikal di layar kecil */
        @media (max-width: 767px) {
            .reading-grid {
                grid-template-columns: 1fr;
                /* tumpuk atas-bawah */
                grid-template-rows: auto auto;
                /* reading di atas, soal di bawah */
            }
        }

        @media (max-width: 900px) {
            .reading-grid {
                grid-template-columns: 1fr;
            }

            .passage,
            .qa {
                max-height: none;
            }

            .q-options {
                grid-template-columns: 1fr;
            }
        }

        #panel-tfng .q-options,
        #panel-tfng2 .q-options,
        #panel-ynng .q-options,
        #panel-mse .q-options,
        #panel-tc .q-options {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #panel-tfng .q-number-box,
        #panel-tfng2 .q-number-box,
        #panel-ynng .q-number-box,
        #panel-mse .q-number-box,
        #panel-tc .q-number-box,
        #panel-nc2 .q-number-box {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 28px;
            height: 28px;
            font-weight: bold;
            border: 2px solid #333;
            border-radius: 4px;
            margin-left: 5px;
        }

        #panel-tfng .q-text,
        #panel-tfng2 .q-text,
        #panel-ynng .q-text,
        #panel-mse .q-text,
        #panel-tc .q-text,
        #panel-nc .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        #panel-nc2 input:not(.seekBar) {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-left: 5px;
            width: 120px;
        }

        #panel-sa input {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-left: 5px;
            width: 120px;
        }
    </style>
</head>

<body>
    @include('ielts.sets.layouts.practice.listening_reading.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-mh3" aria-controls="panel-mh3" aria-selected="false"
                data-id="mh3">Two Choices 3</button>
            <button class="x-tab" role="tab" id="tab-mh4" aria-controls="panel-mh4" aria-selected="false"
                data-id="mh4">Two Choices 4</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2"
                aria-selected="false" data-id="tfng2">Note Completion 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-1.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="102" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p><b>Complete the notes below.</b></p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Advice on Family Visit</b></p>

                                <p><b>Accommodation</b></p>
                                <p>
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="4JIjUOPpLAJ2FYdl-1" class="q-text" placeholder="">
                                    Hotel on George Street Cost of family room per night: £
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="4JIjUOPpLAJ2FYdl-2" class="q-text" placeholder="">
                                    (approx.)
                                </p>

                                <p><b>Recommended Trips</b></p>
                                <p>
                                    A
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="4JIjUOPpLAJ2FYdl-3" class="q-text" placeholder="">
                                    tour of the city centre (starts in Carlton Square) A trip by
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="4JIjUOPpLAJ2FYdl-4" class="q-text" placeholder="">
                                    to the old fort
                                </p>

                                <p><b>Science Museum</b></p>
                                <p>
                                    Best day to visit:
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="4JIjUOPpLAJ2FYdl-5" class="q-text" placeholder="">
                                    See the exhibition about
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="4JIjUOPpLAJ2FYdl-6" class="q-text" placeholder="">
                                    which opens soon
                                </p>

                                <p><b>Food</b></p>
                                <p>Clacton Market:</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            Good for
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-7" class="q-text" placeholder="">
                                            food
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            Need to have lunch before
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-8" class="q-text" placeholder="">
                                            p.m.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Theatre Tickets</b></p>
                                <p>
                                    Save up to
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="4JIjUOPpLAJ2FYdl-9" class="q-text" placeholder="">
                                    % on ticket prices at bargaintickets.com
                                </p>

                                <p><b>Free Activities</b></p>
                                <p>Blakewell Gardens:</p>
                                <ul>
                                    <li>Roots Music Festival</li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            Climb Telegraph Hill to see a view of the
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-10" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-nc" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="10" id="submit-nc">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-2.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="55" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-2</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which <b>TWO</b> things does the speaker say about visiting the football stadium with children?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Children can get their photo taken with a football player</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">There is a competition for children today</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Parents must stay with their children at all times</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Children will need sunhats and drinks</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">The café has a special offer on meals for children</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-two_choices" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="2" id="submit-two_choices">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-mh2" class="x-panel" role="tabpanel" aria-labelledby="tab-mh2" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-2.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="146" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-2</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which <b>TWO</b> features of the stadium tour are new this year?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">VIP tour</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">360 cinema experience</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">audio guide</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">dressing room tour</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">tours in other languages</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-two_choices2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="2" id="submit-two_choices2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-matching" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-2.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="261" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Which event in the history of football in the UK took place in each of the following years?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to questions.</i></p>
                                <p><b>Events in the history of football</b></p>

                                <strong>A</strong>&nbsp;&nbsp; the introduction of pay for the players
                                <strong>B</strong>&nbsp;&nbsp; a change to the design of the goal<br>
                                <strong>C</strong>&nbsp;&nbsp; the first use of lights for matches<br>
                                <strong>D</strong>&nbsp;&nbsp; the introduction of goalkeepers<br>
                                <strong>E</strong>&nbsp;&nbsp; the first international match<br>
                                <strong>F</strong>&nbsp;&nbsp; two changes to the rules of the game<br>
                                <strong>G</strong>&nbsp;&nbsp; the introduction of a fee for spectators<br>
                                <strong>H</strong>&nbsp;&nbsp; an agreement on the length of a game<br>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        1870 
                                        <span class="q-question">
                                            <select name="4JIjUOPpLAJ2FYdl-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">2</span>
                                    <span style="flex: 1;">
                                        1874 
                                        <span class="q-question">
                                            <select name="4JIjUOPpLAJ2FYdl-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">3</span>
                                    <span style="flex: 1;">
                                        1875 
                                        <span class="q-question">
                                            <select name="4JIjUOPpLAJ2FYdl-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">4</span>
                                    <span style="flex: 1;">
                                        1877 
                                        <span class="q-question">
                                            <select name="4JIjUOPpLAJ2FYdl-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">5</span>
                                    <span style="flex: 1;">
                                        1878 
                                        <span class="q-question">
                                            <select name="4JIjUOPpLAJ2FYdl-5" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">6</span>
                                    <span style="flex: 1;">
                                        1880 
                                        <span class="q-question">
                                            <select name="4JIjUOPpLAJ2FYdl-6" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-matching_information" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-matching_information">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-mh3" class="x-panel" role="tabpanel" aria-labelledby="tab-mh3" hidden>
                <div class="x-panel-inner">Content: Two Choices 3</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices3">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-3.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="50" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-2</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which <b>TWO</b> benefits for children of learning to write did both students find surprising?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">improved fine motor skills</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">improved memory</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">improved concentration</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">improved imagination</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">improved spatial awareness</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-two_choices3" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="2" id="submit-two_choices3">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-mh4" class="x-panel" role="tabpanel" aria-labelledby="tab-mh4" hidden>
                <div class="x-panel-inner">Content: Two Choices 4</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices4">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-3.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="148" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-2</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    For children with dyspraxia, which <b>TWO</b> problems with handwriting do the students think are easiest to correct?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-7[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">not spacing letters correctly</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-7[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">not writing in a straight line</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-7[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">applying too much pressure when writing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-7[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">confusing letter shapes</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="4JIjUOPpLAJ2FYdl-7[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">writing very slowly</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-two_choices4" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="2" id="submit-two_choices4">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-3.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="275" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    What does the woman say about using laptops to teach writing to children with dyslexia?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Children often lack motivation to learn that way</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Children become fluent relatively quickly</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Children react more positively if they make a mistake</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    When discussing whether to teach cursive or print writing, the woman thinks that
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">cursive writing disadvantages a certain group of children</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">print writing is associated with lower academic performance</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">most teachers in the UK prefer a traditional approach to handwriting</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    According to the students, what impact does poor handwriting have on exam performance?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">There is evidence to suggest grades are affected by poor handwriting</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Neat handwriting is less important now than it used to be</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Candidates write more slowly and produce shorter answers</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What prediction does the man make about the future of handwriting?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Touch typing will be taught before writing by hand</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Children will continue to learn to write by hand</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">People will dislike handwriting on digital devices</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    The woman is concerned that relying on digital devices has made it difficult for her to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">take detailed notes</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">spell and punctuate</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">read old documents</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    How do the students feel about their own handwriting?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">concerned they are unable to write quickly</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">embarrassed by comments made about it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="4JIjUOPpLAJ2FYdl-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">regretful that they have lost the habit</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-oc">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-4.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="89" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p><b>Complete the notes below.</b></p>
                                <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Research in the Area Around the Chem be Bird Sanctuary</b></p>
                                <p><b>The importance of birds of prey to local communities</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            They destroy
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-11" class="q-text" placeholder="">
                                            and other rodents.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            They help prevent farmers from being bitten by
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-12" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>They have been an important part of local culture for many years.</li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            They now support the economy by encouraging
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-13" class="q-text" placeholder="">
                                            in the area.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Falling numbers of birds of prey</b></p>
                                <ul>
                                    <li>The birds may be accidentally killed:</li>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="4">
                                                By 
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="4JIjUOPpLAJ2FYdl-14" class="q-text" placeholder="">
                                                when hunting or sleeping.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="5">
                                                By electrocution from power lines, especially during times of high
                                                <span class="q-number-box">5</span>
                                                <input type="text" name="4JIjUOPpLAJ2FYdl-15" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            Local farmers may illegally shoot them or
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-16" class="q-text" placeholder="">
                                            them.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Ways of protecting chickens from birds of prey</b></p>
                                <ul>
                                    <li>Clearing away vegetation (unhelpful).</li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            Providing a
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-17" class="q-text" placeholder="">
                                            for chickens (expensive).
                                        </div>
                                    </li>
                                    <li>Frightening birds of prey by:</li>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="8">
                                                Keeping a
                                                <span class="q-number-box">8</span>
                                                <input type="text" name="4JIjUOPpLAJ2FYdl-18" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="9">
                                                Making a
                                                <span class="q-number-box">9</span>
                                                <input type="text" name="4JIjUOPpLAJ2FYdl-19" class="q-text" placeholder="">
                                                (e.g., with metal objects).
                                            </div>
                                        </li>
                                    </ul>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            A
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="4JIjUOPpLAJ2FYdl-20" class="q-text" placeholder="">
                                            of methods is usually most effective.
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-nc2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="10" id="submit-nc2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @include('ielts.sets.layouts.practice.listening_reading.components')
    @include('ielts.sets.layouts.practice.listening_reading.script')
    <script>
        $("#submit-nc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc", "4JIjUOPpLAJ2FYdl", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "4JIjUOPpLAJ2FYdl", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "4JIjUOPpLAJ2FYdl", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "4JIjUOPpLAJ2FYdl", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-two_choices3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices3", "4JIjUOPpLAJ2FYdl", "two_choices", $(this), "again-two_choices3", "Two Choices");
        });

        $("#submit-two_choices4").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices4", "4JIjUOPpLAJ2FYdl", "two_choices", $(this), "again-two_choices4", "Two Choices");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "4JIjUOPpLAJ2FYdl", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "4JIjUOPpLAJ2FYdl", "nc", $(this), "again-nc2", "Note Completion");
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

            // 🧩 Toggle collapse floating panel
            fqToggle.addEventListener('click', () => {
                isCollapsed = !isCollapsed;
                floatingQ.classList.toggle('collapsed', isCollapsed);
                floatingQ.classList.toggle('expanded', !isCollapsed);
            });

            // 🧩 Generate list nomor soal
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

                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        scrollToQuestion(i, partId);
                    });

                    fqList.appendChild(item);
                }
            }

            // 🧭 Scroll ke soal
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

            // ✅ Update status soal
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

                    // Checkbox
                    const checkboxChecked = question.querySelectorAll('input[type="checkbox"]:checked');
                    if (checkboxChecked.length > 0) answered = true;

                    // Dropdown
                    const dropdown = question.querySelector('select.q-dropdown');
                    if (dropdown && dropdown.value !== '') answered = true;

                    // Text input
                    const textInput = question.querySelector('input[type="text"], textarea');
                    if (textInput && textInput.value.trim() !== '') answered = true;

                    // Soal multi-nomor (contoh: data-q-multi="1,2")
                    const multi = question.dataset.qMulti;
                    if (multi) {
                        const numbers = multi.split(',').map(n => n.trim());
                        const checkedCount = question.querySelectorAll('input[type="checkbox"]:checked').length;

                        numbers.forEach(num => {
                            const multiItem = fqList.querySelector(
                                `[data-q="${num}"][data-part="${partId}"]`);
                            if (!multiItem) return;

                            if (checkedCount > 0) multiItem.classList.add('answered');
                            else multiItem.classList.remove('answered');
                        });
                    } else {
                        if (answered) item.classList.add('answered');
                        else item.classList.remove('answered');
                    }
                }
            }

            // 🧠 Perubahan jawaban
            function watchAnswerChanges() {
                document.addEventListener('change', (e) => {
                    const input = e.target;
                    const question = input.closest('[data-q]');
                    const group = input.closest('.q-options');
                    const label = input.closest('.q-option');

                    if (!question) return;

                    // 🔹 Batasi jumlah checkbox
                    if (input.type === 'checkbox') {
                        const maxAllowed = parseInt(question.dataset.max || '0', 10);
                        if (maxAllowed > 0) {
                            const checkedBoxes = question.querySelectorAll(
                            'input[type="checkbox"]:checked');
                            if (checkedBoxes.length > maxAllowed) {
                                input.checked = false;
                                alert(`You can only select ${maxAllowed} answers for this question.`);
                                return;
                            }
                        }
                    }

                    // 🔹 Update warna label pilihan
                    if (group && label) {
                        if (input.type === 'checkbox') {
                            if (input.checked) label.classList.add('is-selected');
                            else label.classList.remove('is-selected');
                        } else {
                            group.querySelectorAll('.q-option').forEach(opt => opt.classList.remove(
                                'is-selected'));
                            if (input.checked) label.classList.add('is-selected');
                        }
                    }

                    // 🔄 Update status di floating panel
                    updateQuestionStatus(currentPart);
                });

                document.addEventListener('input', (e) => {
                    const question = e.target.closest('[data-q]');
                    if (question) updateQuestionStatus(currentPart);
                });

                document.addEventListener('click', (e) => {
                    const option = e.target.closest('.q-option');
                    if (option) setTimeout(() => updateQuestionStatus(currentPart), 50);
                });
            }

            // 🔁 Ganti part soal
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
                if (tabsContainer)
                    observer.observe(tabsContainer, {
                        attributes: true,
                        attributeFilter: ['data-active']
                    });
            }

            // 🔄 Update daftar soal tiap part
            function updateQuestionListForPart(partId) {
                const questionCounts = {
                    'tfng': 10,
                    'mh': 2,
                    'mh2': 2,
                    'matching': 6,
                    'mh3': 2,
                    'mh4': 2,
                    'one': 6,
                    'tfng2': 10
                };
                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // 🚀 Init
            updateQuestionListForPart('tfng');
            watchPartChanges();
            watchAnswerChanges();
            setInterval(() => updateQuestionStatus(currentPart), 2000);
        });
    </script>
</body>

</html>
