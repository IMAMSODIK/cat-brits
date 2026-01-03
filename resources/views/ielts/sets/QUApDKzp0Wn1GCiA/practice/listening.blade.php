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
        #panel-fc_completion .q-number-box,
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
        #panel-fc_completion .q-text,
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
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-mh3" aria-controls="panel-mh3" aria-selected="false"
                data-id="mh3">Two Choices 3</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="false"
                data-id="tfng2">Note Completion 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-1.mp3">
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
                                        <button class="start-btn" data-start="82" type="button">Start from
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
                                <h3>Buckworth Conservation Group</h3>
                                <p><b>Regular activities</b></p>

                                <p>Beach</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            making sure the beach does not have
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-1" class="q-text"
                                                placeholder="">
                                            on it
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            no
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Nature reserve</p>
                                <ul>
                                    <li>maintaining paths</li>
                                    <li>nesting boxes for birds installed</li>
                                    <li>
                                        <div class="q-list" data-q="3">
                                            next task is taking action to attract
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-3" class="q-text"
                                                placeholder="">
                                            to the place
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            identifying types of
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-4" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            building a new
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Forthcoming events</b></p>
                                <p>Saturday</p>
                                <ul>
                                    <li>meet at Dunsmore Beach car park</li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            walk across the sands and reach the
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-6" class="q-text"
                                                placeholder="">
                                            to the place
                                        </div>
                                    </li>
                                    <li>take a picnic</li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            wear appropriate
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-7" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Woodwork session</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            suitable for
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-8" class="q-text"
                                                placeholder="">
                                            to participate in
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="9">
                                            making
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-9" class="q-text"
                                                placeholder="">
                                            out of wood
                                        </div>
                                    </li>
                                    <li>17th, from 10 a.m. to 3 p.m.</li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            cost of session (no camping): £
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-10" class="q-text"
                                                placeholder="">
                                            out of wood
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
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-4</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-2.mp3">
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
                                <p>Questions 1-4</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Boat trip round Tasmania</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    What is the maximum number of people who can stand on each side of the boat?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">9</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">15</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">18</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What colour are the tour boats?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">dark red</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">jet black</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">light green</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Which lunchbox is suitable for someone who doesn’t eat meat or fish?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Lunchbox 1</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Lunchbox 2</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Lunchbox 3</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What should people do with their litter?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">take it home</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">hand it to a member of staff</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">put it in the bins provided on the boat</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-oc">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="215" type="button">Start from
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
                                    Which <b>TWO</b> features of the lighthouse does Lou mention?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">why it was built</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">who built it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">how long it took to build</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">who staffed it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">what it was built with</span>
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
                <div class="x-panel-inner">Content: Two Choices 2</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="277" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-2</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="3" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which <b>TWO</b> types of creature might come close to the boat?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">sea eagles</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">fur seals</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">dolphins</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">whales</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">penguins</span>
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
            <div id="panel-mh3" class="x-panel" role="tabpanel" aria-labelledby="tab-mh3" hidden>
                <div class="x-panel-inner">Content: Two Choices 3</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices3">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="331" type="button">Start from
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
                                    Which <b>TWO</b> points does Lou make about the caves?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Only large tourist boats can visit them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The entrances to them are often blocked.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It is too dangerous for individuals to go near
                                            them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Someone will explain what is inside them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QUApDKzp0Wn1GCiA-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">They cannot be reached on foot.</span>
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
            <div id="panel-one2" class="x-panel" role="tabpanel" aria-labelledby="tab-one2" hidden>
                <div class="x-panel-inner">Content: One Choice 2</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-3.mp3">
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
                                        <button class="start-btn" data-start="68" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Work experience for veterinary science students</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    What problem did both Diana and Tim have when arranging their work experience?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">make initial contact with suitable farms</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">organising transport to and from the farm</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">finding a placement for the required length of
                                            time</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Tim was pleased to be able to help
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">a lamb that had a broken leg.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">a sheep that was having difficult giving birth.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">a newly born lamb that was having trouble
                                            feeding.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Diana says the sheep on her farm
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">were of various different varieties.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">were mainly reared for their meat.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">had better quality wool than sheep on the hills.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What did the students learn about adding supplements to chicken feed?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">These should only be given if specially needed.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It is worth paying extra for the most effective
                                            ones.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">The amount given at one time should be limited.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    What happened when Diana was working with dairy cows?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">She identified some cows incorrectly.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">She accidentally threw some milk away.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">She made a mistake when storing milk.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    What did both farmers mention about vets and farming?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Vets are failing to cope with some aspects of animal
                                            health.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">There needs to be a fundamental change in the training
                                            of vets.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QUApDKzp0Wn1GCiA-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Some jobs could be done by the farmer rather than by a
                                            vet.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-oc2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-matching" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information"
                hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-4</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-3.mp3">
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
                                        <button class="start-btn" data-start="312" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-4</h3>
                                <p>What opinion do the students give about each of the following modules on their
                                    veterinary science course?</p>
                                <p>Choose <b>FOUR</b> answers from the box and write the correct letter, <b>A-F</b>,
                                    next to questions.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Opinions</h3>
                                <p><b>A</b> Tim found this easier than expected.</p>
                                <p><b>B</b> Tim thought this was not very clearly organised.</p>
                                <p><b>C</b> Diana may do some further study on this.</p>
                                <p><b>D</b> They both found the reading required for this was difficult.</p>
                                <p><b>E</b> Tim was shocked at something he learned on this module.</p>
                                <p><b>F</b> They were both surprised how little is known about some aspects of this.</p>
                            </fieldset>

                            <p><b>Modules on Veterinary Science course</b></p>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Medical terminology
                                        <span class="q-question">
                                            <select name="QUApDKzp0Wn1GCiA-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">2</span>
                                    <span style="flex: 1;">
                                        Diet and nutrition
                                        <span class="q-question">
                                            <select name="QUApDKzp0Wn1GCiA-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">3</span>
                                    <span style="flex: 1;">
                                        Animal disease
                                        <span class="q-question">
                                            <select name="QUApDKzp0Wn1GCiA-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">4</span>
                                    <span style="flex: 1;">
                                        Wildlife medication
                                        <span class="q-question">
                                            <select name="QUApDKzp0Wn1GCiA-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-matching_information" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-matching_information">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-4.mp3">
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
                                        <button class="start-btn" data-start="71" type="button">Start from
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
                                <h3>Labyrinths</h3>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Definition</b></p>
                                <ul>
                                    <li>a winding spiral path leading to a central area</li>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            1507 – Portuguese ships transporting
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-11" class="q-text"
                                                placeholder="">
                                            stopped at the island to collect food and water.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            1638 – The Dutch established a
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-12" class="q-text"
                                                placeholder="">
                                            on the island.
                                        </div>
                                    </li>
                                    <li>They killed the dodo birds for their meat.</li>
                                    <li>The last one was killed in 1681.</li>
                                </ul>

                                <p><b>Description</b></p>
                                <ul>
                                    <li>The only record we have is written descriptions and pictures (possibly
                                        unreliable).</li>
                                </ul>

                                <p><b>Labyrinths compared with mazes</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            Mazes are a type of
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>–
                                <div class="q-list" data-q="2">
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="QUApDKzp0Wn1GCiA-2" class="q-text" placeholder="">
                                    is needed to navigate through a maze
                                </div>
                                </p>
                                <p>–
                                <div class="q-list" data-q="3">
                                    the word ‘maze’ is derived from a word meaning a feeling of
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="QUApDKzp0Wn1GCiA-3" class="q-text" placeholder="">
                                </div>
                                </p>
                                <ul>
                                    <li>Labyrinths represent a journey through life</li>
                                </ul>
                                <p>–
                                <div class="q-list" data-q="4">
                                    they have frequently been used in
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="QUApDKzp0Wn1GCiA-4" class="q-text" placeholder="">
                                    and prayer
                                </div>
                                </p>

                                <p><b>Early examples of the labyrinth spiral</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            Ancient carvings on
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-5" class="q-text"
                                                placeholder="">
                                            have been found across many cultures
                                        </div>
                                    </li>
                                    <li>The Pima, a Native American tribe, wove the symbol on baskets</li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            Ancient Greeks used the symbol on
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-6" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Walking labyrinths</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            The largest surviving example of a turf labyrinth once had a big
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-7" class="q-text"
                                                placeholder="">
                                            at its centre
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Labyrinths nowadays</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            Believed to have a beneficial impact on mental and physical health, e.g.,
                                            walking a maze can reduce a person’s
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="QUApDKzp0Wn1GCiA-8" class="q-text"
                                                placeholder="">
                                            rate
                                        </div>
                                    </li>
                                    <li>Used in medical and health and fitness settings and also prisons</li>
                                    <li>Popular with patients, visitors and staff in hospitals</li>
                                </ul>

                                <p>–
                                <div class="q-list" data-q="9">
                                    patients who can’t walk can use ‘finger labyrinths’ made from
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="QUApDKzp0Wn1GCiA-9" class="q-text" placeholder="">
                                </div>
                                </p>

                                <p>–
                                <div class="q-list" data-q="10">
                                    research has shown that Alzheimer’s sufferers experience less
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="QUApDKzp0Wn1GCiA-10" class="q-text" placeholder="">
                                </div>
                                </p>
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
            submitHelper("form-nc", "QUApDKzp0Wn1GCiA", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "QUApDKzp0Wn1GCiA", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "QUApDKzp0Wn1GCiA", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "QUApDKzp0Wn1GCiA", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-two_choices3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices3", "QUApDKzp0Wn1GCiA", "two_choices", $(this), "again-two_choices3", "Two Choices");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "QUApDKzp0Wn1GCiA", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "QUApDKzp0Wn1GCiA", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "QUApDKzp0Wn1GCiA", "nc", $(this), "again-nc2", "Note Completion");
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
                    'one': 4,
                    'mh': 2,
                    'mh2': 2,
                    'mh3': 2,
                    'one2': 6,
                    'matching': 4,
                    'tfng2': 10,
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
