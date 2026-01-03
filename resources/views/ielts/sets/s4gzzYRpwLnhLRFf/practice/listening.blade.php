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
        #panel-nc .q-number-box,
        #panel-tfng2 .q-number-box,
        #panel-ynng .q-number-box,
        #panel-mse .q-number-box,
        #panel-tc .q-number-box {
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
        #panel-nc .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* #panel-tfng input,
        #panel-tfng2 input,
        #panel-ynng input,
        #panel-mse input,
        #panel-tc input {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-left: 5px;
            width: 120px;
        } */

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
                aria-selected="true" data-id="tfng">Form Completion</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-matching_information" aria-controls="panel-matching_information" aria-selected="false"
                data-id="matching_information">Matching</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-matching_information2" aria-controls="panel-matching_information2" aria-selected="false"
                data-id="matching_information2">Matching 2</button>                
            <button class="x-tab" role="tab" id="tab-nc" aria-controls="panel-nc" aria-selected="true"
                data-id="nc">Note Completion</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: From Completion</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-form_completion">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-1.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0" class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="61" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p>Complete the notes below.</p>
                                <p><i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Early Learning Childcare Centre Enrolment Form</b></p>
                                <p><i>Example</i></p>
                                <p>Parent or guardian: Carol <i>……….Smith……….</i></p>
                                <p><b>Personal Details</b></p>
                                <p>Child’s name: Kate</p>

                                <p>
                                    <div class="q-list" data-q="1">
                                        Age:
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-1" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-q="2">
                                        Address:
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-2" class="q-text" placeholder="">
                                        Road, Woodside, 4032
                                    </div>
                                </p>
                                <p>
                                    Phone: 3345 9865
                                </p>
                                <p><b>Childcare Information</b></p>
                                <p>
                                    <div class="q-list" data-q="3">
                                        Days enrolled for: Monday and
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-3" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-q="4">
                                        Start time:
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-4" class="q-text" placeholder="">
                                        am
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-q="5">
                                        Childcare group: the
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-5" class="q-text" placeholder="">
                                        group
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-q="6">
                                        Which meal/s are required each day?
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-6" class="q-text" placeholder="">
                                        group
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-q="7">
                                        Medical conditions: needs
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-7" class="q-text" placeholder="">
                                        group
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-q="8">
                                        Emergency contact: Jenny
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-8" class="q-text" placeholder="">
                                        Phone: 3346 7523
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-q="9">
                                        Relationship to child:
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-9" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <b>Phone: 3345 9865</b>
                                </p>
                                <p>
                                    <div class="q-list" data-q="10">
                                        Will pay each
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-10" class="q-text" placeholder="">
                                    </div>
                                </p>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-form_completion" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="10" id="submit-form_completion">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-2.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0" class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="61" type="button">Start from here</button>
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
                                    Which TWO things does Alice say about the Dolphin Conservation Trust?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="s4gzzYRpwLnhLRFf-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Children make up most of the membership.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="s4gzzYRpwLnhLRFf-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It’s the country’s largest conservation organisation.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="s4gzzYRpwLnhLRFf-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It helps finance campaigns for changes in fishing practices.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="s4gzzYRpwLnhLRFf-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">It employs several dolphin experts full-time.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="s4gzzYRpwLnhLRFf-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Volunteers help in various ways.</span>
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
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-3</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-2.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0" class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="138" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-3</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Why is Alice so pleased the Trust has won the Charity Commission award?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It has brought in extra money.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It made the work of the trust better known.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It has attracted more members.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Alice says oil exploration causes problems to dolphins because of
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">noise.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">oil leaks.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">movement of ships.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Local newspapers have raised worries about
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">she saw one swimming near her home.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">she heard a speaker at her school.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">she read a book about them.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="3" id="submit-oc">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-matching_information" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-2.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0" class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="258" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p>Which dolphin does Alice make each of the following comments about?</p>
                                <p><i>Write the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>, next to questions</i></p>
                                <p><b>Dolphins</b></p>

                                <table cellspacing="15">
                                    <tr>
                                        <td><b>A</b></td>
                                        <td>Moondancer</td>
                                    </tr>
                                    <tr>
                                        <td><b>B</b></td>
                                        <td>Echo</td>
                                    </tr>
                                    <tr>
                                        <td><b>C</b></td>
                                        <td>Kiwi</td>
                                    </tr>
                                    <tr>
                                        <td><b>D</b></td>
                                        <td>Samson</td>
                                    </tr>
                                </table>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>Comments</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        It has not been seen this year. 
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">2</span>
                                    <span style="flex: 1;">
                                        It is photographed more than the others.
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">3</span>
                                    <span style="flex: 1;">
                                        It is always very energetic.
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">4</span>
                                    <span style="flex: 1;">
                                        It is the newest one in the scheme.
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">5</span>
                                    <span style="flex: 1;">
                                        It has an unusual shape.
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-5" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-matching_information" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="5" id="submit-matching_information">
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
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-3.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0" class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="63" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    What helped Rob to prepare to play the character of a doctor?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the stories his grandfather told him</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the times when he watched his grandfather working</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the way he imagined his grandfather at work</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    In the play’s first scene, the boredom of village life was suggested by
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">repetition of words and phrases.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">scenery painted in dull colours.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">long pauses within conversations.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    What has Rob learned about himself through working in a group?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">He likes to have clear guidelines.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">He copes well with stress.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">He thinks he is a good leader.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    To support the production, research material was used which described
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">political developments.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">changing social attitudes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">economic transformations.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    What problem did the students overcome in the final rehearsal?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">one person forgetting their words</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">an equipment failure</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="s4gzzYRpwLnhLRFf-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the injury of one character</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="5" id="submit-oc2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-matching_information2" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information2" hidden>
                <div class="x-panel-inner">Content: Matching 2</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-3.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="100" value="0" class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="273" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p>What action is needed for the following stages in doing the ‘year abroad’ option?</p>
                                <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A</b>-<b>G</b>, next to questions</i></p>
                                <p><b>Action</b></p>

                                <table cellspacing="15">
                                    <tr>
                                        <td><b>A</b></td>
                                        <td>be on time</td>
                                    </tr>
                                    <tr>
                                        <td><b>B</b></td>
                                        <td>get a letter of recommendation</td>
                                    </tr>
                                    <tr>
                                        <td><b>C</b></td>
                                        <td>plan for the final year</td>
                                    </tr>
                                    <tr>
                                        <td><b>D</b></td>
                                        <td>make sure the institution’s focus is relevant</td>
                                    </tr>
                                    <tr>
                                        <td><b>E</b></td>
                                        <td>show ability in Theatre Studies</td>
                                    </tr>
                                    <tr>
                                        <td><b>F</b></td>
                                        <td>make travel arrangements and bookings</td>
                                    </tr>
                                    <tr>
                                        <td><b>G</b></td>
                                        <td>ask for help</td>
                                    </tr>
                                </table>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>Stages in doing the ‘year abroad’ option</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                         in the second year of the course
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-6" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">2</span>
                                    <span style="flex: 1;">
                                        when first choosing where to go
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-7" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">3</span>
                                    <span style="flex: 1;">
                                        when sending in your choices
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-8" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">4</span>
                                    <span style="flex: 1;">
                                        when writing your personal statement
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-9" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">5</span>
                                    <span style="flex: 1;">
                                        when doing the year abroad
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-10" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-matching_information2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="5" id="submit-matching_information2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-nc" class="x-panel" role="tabpanel" aria-labelledby="tab-nc">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-10</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-4.mp3">
                                </audio>

                                <div class="controls-container">
                                    <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                    <div class="seek-container">
                                        <input type="range" min="0" max="100" value="0" class="seekBar">
                                        <div class="timeText"><span class="current">0:00</span>
                                            <span class="duration">0:00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="start-buttons">
                                    <button class="start-btn" data-start="88" type="button">Start from here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-10</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY for each answer.</b></p>
                            <h3>‘Self-regulatory focus theory’ and leadership</h3>
                            <p><b>Self-regulatory focus theory</b></p>
                            
                            <p>People’s focus is to approach pleasure or avoid pain</p>
                            <p>
                                <div class="q-list" data-q="1">
                                    Promotion goals focus on
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="s4gzzYRpwLnhLRFf-1" class="q-text" placeholder="">
                                </div>
                            </p>
                            <p>Prevention goals emphasise avoiding punishment</p>
                            <p>Factors that affect people’s focus</p>
                            <p><b>The Chronic Factor</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="2">
                                        comes from one’s
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-2" class="q-text" placeholder="">
                                    </div>
                                    <div class="q-list" data-q="3">
                                        The
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-3" class="q-text" placeholder="">
                                        Factor
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        we are more likely to focus on promotion goals when with a
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-4" class="q-text" placeholder="">
                                        in certain countries
                                    </div>
                                </li>
                                <li>
                                    we are more likely to focus on prevention goals with our boss
                                </li>
                            </ul>

                            <p><b>External influences on businesses</b></p>
                            <p>
                                <div class="q-list" data-q="5">
                                    Promotion Focus: People think about an ideal version of themselves, their
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="s4gzzYRpwLnhLRFf-5" class="q-text" placeholder="">
                                    and their gains.
                                </div>
                            </p>
                            <p>Prevention Focus: People think about their ‘ought’ self and their obligations</p>

                            <p><b>Leaders</b></p>
                            <p>
                                <div class="q-list" data-q="6">
                                    Leadership behaviour and
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="s4gzzYRpwLnhLRFf-6" class="q-text" placeholder="">
                                    affects people’s focus
                                </div>
                            </p>
                            <p><i>Transformational Leaders:</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="7">
                                        pay special attention to the
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-7" class="q-text" placeholder="">
                                        of their followers
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        passionately communicate a clear
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-8" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>inspire promotion focus in followers</li>
                            </ul>

                            <p><i>Transactional Leaders:</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="9">
                                        create 
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="s4gzzYRpwLnhLRFf-9" class="q-text" placeholder="">
                                        to make expectations clear
                                    </div>
                                </li>
                                <li>emphasise the results of a mistake</li>
                                <li>inspire prevention focus in followers</li>
                            </ul>

                            <p><b>Conclusion</b></p>
                            <p>
                                <div class="q-list" data-q="10">
                                    Promotion Focus is good for jobs requiring
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="s4gzzYRpwLnhLRFf-10" class="q-text" placeholder="">
                                    to make expectations clear
                                </div>
                            </p>
                            <p>Prevention Focus is good for work such as a surgeon</p>
                            <p>Leaders’ actions affect which focus people use</p>
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
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @include('ielts.sets.layouts.practice.listening_reading.components')
    @include('ielts.sets.layouts.practice.listening_reading.script')
    <script>
        $("#submit-nc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc", "s4gzzYRpwLnhLRFf", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "s4gzzYRpwLnhLRFf", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-matching_information2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information2", "s4gzzYRpwLnhLRFf", "matching_information", $(this), "again-matching_information2", "Matching Information");
        });

        $("#submit-form_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-form_completion", "s4gzzYRpwLnhLRFf", "form_completion", $(this), "again-form_completion", "Form Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "s4gzzYRpwLnhLRFf", "oc", $(this), "again-oc", "One Choices");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "s4gzzYRpwLnhLRFf", "oc", $(this), "again-oc2", "One Choices");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "s4gzzYRpwLnhLRFf", "tc", $(this), "again-tc", "Table Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "s4gzzYRpwLnhLRFf", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "s4gzzYRpwLnhLRFf", "two_choices", $(this), "again-two_choices2", "Two Choices");
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
                    question.scrollIntoView({ behavior: 'smooth', block: 'center' });
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
                            const multiItem = fqList.querySelector(`[data-q="${num}"][data-part="${partId}"]`);
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
                            const checkedBoxes = question.querySelectorAll('input[type="checkbox"]:checked');
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
                            group.querySelectorAll('.q-option').forEach(opt => opt.classList.remove('is-selected'));
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
                        if (mutation.type === 'attributes' && mutation.attributeName === 'data-active') {
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
                    observer.observe(tabsContainer, { attributes: true, attributeFilter: ['data-active'] });
            }

            // 🔄 Update daftar soal tiap part
            function updateQuestionListForPart(partId) {
                const questionCounts = {
                    'tfng': 10,
                    'tfng2': 8,
                    'ynng': 5,
                    'mse': 5,
                    'one': 3,
                    'mh': 2,
                    'tc': 4,
                    'nc': 10
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
