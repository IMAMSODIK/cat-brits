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
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-matching2" aria-controls="panel-matching2" aria-selected="false"
                data-id="matching2">Matching 2</button>
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
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-1.mp3">
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
                                        <button class="start-btn" data-start="81" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p><b>Complete the notes below.</b></p>
                                <p>Write <b>ONE WORD</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Easy Life Cleaning Services</h3>

                                <p><b>Basic cleaning package offered</b></p>
                                <ul>
                                    <li>Cleaning all surfaces</li>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            Cleaning the
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-1" class="q-text" placeholder="">
                                            throughout the apartment
                                        </div>
                                    </li>
                                    <li>Cleaning shower, sinks, toilet etc.</li>
                                </ul>

                                <p><b>Additional services agreed</b></p>
                                <ul>
                                    <li>Every week</li>
                                </ul>
                                
                                <p>
                                    <div class="q-list" data-q="2">
                                        –  Cleaning the
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="15gOXcE7omDCL1uE-2" class="q-text" placeholder="">
                                    </div>
                                </p>

                                <p>
                                    <div class="q-list" data-q="3">
                                        –  Ironing clothes –
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="15gOXcE7omDCL1uE-3" class="q-text" placeholder="">
                                        only
                                    </div>
                                    <ul>
                                        <li>Every month</li>
                                    </ul>
                                </p>

                                <p>
                                    <div class="q-list" data-q="4">
                                        –  Cleaning all the
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="15gOXcE7omDCL1uE-4" class="q-text" placeholder="">
                                        from the inside
                                    </div>
                                </p>

                                <p>
                                    <div class="q-list" data-q="5">
                                        –  Washing down the
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="15gOXcE7omDCL1uE-5" class="q-text" placeholder="">
                                    </div>
                                </p>

                                <p><b>Other possibilities</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            They can organise a plumber or an
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-6" class="q-text" placeholder="">
                                            if necessary.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            A special cleaning service is available for customers who are allergic to
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Information on the cleaners</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            Before being hired, all cleaners have a background check carried out by the
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-8" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>References are required.</li>
                                    <li>
                                        <div class="q-list" data-q="9">
                                            All cleaners are given 
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-9" class="q-text" placeholder="">
                                            for two weeks.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            Customers send a
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-10" class="q-text" placeholder="">
                                            after each visit.
                                        </div>
                                    </li>
                                    <li>Usually, each customer has one regular cleaner.</li>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-2.mp3">
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
                                        <button class="start-btn" data-start="53" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-4</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Many hotel managers are unaware that their staff often leave because of
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">a lack of training.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">long hours.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">low pay.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What is the impact of high staff turnover on managers?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">an increased workload</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">low morale</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">an inability to meet targets</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    What mistake should managers always avoid?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">failing to treat staff equally</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">reorganising shifts without warning</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">neglecting to have enough staff during busy periods</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What unexpected benefit did Dunwich Hotel notice after improving staff retention rates?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">a fall in customer complaints</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">an increase in loyalty club membership</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="15gOXcE7omDCL1uE-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">a rise in spending per customer</span>
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
            <div id="panel-matching" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-2.mp3">
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
                                        <button class="start-btn" data-start="272" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-6</h3>
                                <p>Which way of reducing staff turnover was used in each of the following hotels?</p>
                                <p><i>Write the correct letter, <b>A</b>, <b>B</b> or <b>C</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Ways of reducing staff turnover</h3>
                                <p><b>A</b> improving relationships and teamwork</p>
                                <p><b>B</b> offering incentives and financial benefits</p>
                                <p><b>C</b> providing career opportunities</p>
                            </fieldset>

                            <p><b>Hotels</b></p>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        The Sun Club 
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">2</span>
                                    <span style="flex: 1;">
                                        The Portland
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">3</span>
                                    <span style="flex: 1;">
                                        Bluewater Hotels
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">4</span>
                                    <span style="flex: 1;">
                                        Pentlow Hotels
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">5</span>
                                    <span style="flex: 1;">
                                        Green Planet
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-5" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">6</span>
                                    <span style="flex: 1;">
                                        The Amesbury
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-6" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
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
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="40" type="button">Start from
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
                                    Which <b>TWO</b> points do Thomas and Jeanne make about Thomas’s sporting activities at school?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">He should have felt more positive about them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The training was too challenging for him.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">He could have worked harder at them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">His parents were disappointed in him.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">His fellow students admired him.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="78" type="button">Start from
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
                                    Which <b>TWO</b> feelings did Thomas experience when he was in Kenya?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">disbelief</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">relief</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">stress</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">gratitude</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">homesickness</span>
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
            <div id="panel-matching2" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information2" hidden>
                <div class="x-panel-inner">Content: Matching 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="182" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-6</h3>
                                <p>What comment do the students make about the development of each of the following items of sporting equipment?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Comments about the development of the equipment</h3>
                                <p><b>A</b> It could cause excessive sweating.</p>
                                <p><b>B</b> The material was being mass produced for another purpose.</p>
                                <p><b>C</b> People often needed to make their own.</p>
                                <p><b>D</b> It often had to be replaced.</p>
                                <p><b>E</b> The material was expensive.</p>
                                <p><b>F</b> It was unpopular among spectators.</p>
                                <p><b>G</b> It caused injuries.</p>
                                <p><b>H</b> No one ring it liked it at first.</p>
                            </fieldset>

                            <p><b>Items of sporting equipment</b></p>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        the table tennis bat
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-7" class="q-dropdown">
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
                                        the cricket helmet
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-8" class="q-dropdown">
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
                                        the cycle helmet 
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-9" class="q-dropdown">
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
                                        the golf club
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-10" class="q-dropdown">
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
                                        the hockey stick 
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-11" class="q-dropdown">
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
                                        the football 
                                        <span class="q-question">
                                            <select name="15gOXcE7omDCL1uE-12" class="q-dropdown">
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
                                <button type="button" class="btn btn-primary try-again" id="again-matching_information2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-matching_information2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-4.mp3">
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
                                        <button class="start-btn" data-start="70" type="button">Start from
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
                                <h3>Maple syrup</h3>
                                <p><b>What is maple syrup?</b></p>
                                <ul>
                                    <li>made from the sap of the maple tree</li>
                                    <li>added to food or used in cooking</li>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            colour described as
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-11" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            very 
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-12" class="q-text" placeholder="">
                                            compared to refined sugar
                                        </div>
                                    </li>
                                </ul>

                                <p><b>The maple tree</b></p>
                                <ul>
                                    <li>has many species</li>
                                    <li>needs sunny days and cool nights</li>
                                    <li>maple leaf has been on the Canadian flag since 1964</li>
                                    <li>needs moist soil but does not need fertiliser as well</li>
                                    <li>
                                        <div class="q-list" data-q="3">
                                            best growing conditions and
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-13" class="q-text" placeholder="">
                                            are in Canada and North America
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Early maple sugar producers</b></p>
                                <ul>
                                    <li>made holes in the tree trunks</li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            used hot
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-14" class="q-text" placeholder="">
                                            to heat the sap
                                        </div>
                                    </li>
                                    <li>used tree bark to make containers for collection</li>
                                    <li>sweetened food and drink with sugar</li>
                                </ul>

                                <p><b>Today’s maple syrup</b></p>

                                <p><i>The trees</i></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            Tree trunks may not have the correct
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-15" class="q-text" placeholder="">
                                            until they have been growing for 40 years.
                                        </div>
                                    </li>
                                    <li>The changing temperature and movement of water within the tree produces the sap.</li>
                                </ul>

                                <p><i>The production</i></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            A tap drilled into the trunk and a 
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-16" class="q-text" placeholder="">
                                            carries the sap into a bucket.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            Large pans of sap called evaporators are heated by means of a 
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-17" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            A lot of
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-18" class="q-text" placeholder="">
                                            is produced during the evaporation process.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="9">
                                            ‘Sugar sand’ is removed because it makes the syrup look
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-19" class="q-text" placeholder="">
                                            and affects the taste.
                                        </div>
                                    </li>
                                    <li>The syrup is ready for use.</li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            A huge quantity of sap is needed to make a
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="15gOXcE7omDCL1uE-20" class="q-text" placeholder="">
                                            of maple syrup.
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
            submitHelper("form-nc", "15gOXcE7omDCL1uE", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "15gOXcE7omDCL1uE", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "15gOXcE7omDCL1uE", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "15gOXcE7omDCL1uE", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "15gOXcE7omDCL1uE", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-matching_information2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information2", "15gOXcE7omDCL1uE", "matching_information", $(this), "again-matching_information2", "Matching Information");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "15gOXcE7omDCL1uE", "nc", $(this), "again-nc2", "Note Completion");
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
                    'matching': 6,
                    'mh': 2,
                    'mh2': 2,
                    'matching2': 6,
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
