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
        #panel-tc2 .q-number-box,
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
        #panel-tc2 .q-text,
        #panel-nc2 .q-text {
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
                aria-selected="true" data-id="tfng">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-tc" aria-controls="panel-tc" aria-selected="false"
                data-id="tc">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-tc2" aria-controls="panel-tc2" aria-selected="false"
                data-id="tc2">Table Completion 2</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice</button>
            <button class="x-tab" role="tab" id="tab-nc2" aria-controls="panel-nc2"
                aria-selected="false" data-id="nc2">Note Completion 2</button>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-1.mp3">
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
                                        <button class="start-btn" data-start="58" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>THORNDYKE’S BUILDERS</h3>
                                <p><i>Example</i></p>
                                <p>Customer heard about Thorndyke’s from a <i>.....friend.....</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>
                                    <strong>Name: </strong>&nbsp;&nbsp; Edith 
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="11qYaGWPJUTxUVdq-1" class="q-text" placeholder="">
                                </p>
                                <p>
                                    <strong>Address: </strong>&nbsp;&nbsp; Flat 4,
                                </p>
                                <p>
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="11qYaGWPJUTxUVdq-2" class="q-text" placeholder="">
                                    Park Flats
                                </p>
                                <p>
                                    (Behind the
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="11qYaGWPJUTxUVdq-3" class="q-text" placeholder="">
                                    )
                                </p>
                                <p>
                                    <b>Phone number:   875934</b>
                                </p>
                                <p>
                                    <b>Best time to contact customer: </b>during the
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="11qYaGWPJUTxUVdq-4" class="q-text" placeholder="">
                                </p>
                                <p>
                                    <b>Where to park: </b>opposite entrance next to the
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="11qYaGWPJUTxUVdq-5" class="q-text" placeholder="">
                                </p>
                                <p>
                                    Needs full quote showing all the jobs and the
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="11qYaGWPJUTxUVdq-6" class="q-text" placeholder="">
                                </p>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-nc" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-nc">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-tc" class="x-panel" role="tabpanel" aria-labelledby="tab-tc" hidden>
                <div class="x-panel-inner">Content: Table Completion</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-tc">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-4</p>

                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-1.mp3">
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
                                    <button class="start-btn" data-start="270" type="button">Start from
                                        here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-4</p>
                            <p>Complete the table below.</p>
                            <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                        </fieldset>

                        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <th><b>Area</b></th>
                                <th><b>Work to be done</b></th>
                                <th><b>Notes</b></th>
                            </tr>

                            <tr>
                                <td rowspan="2"><b>Kitchen</b></td>
                                <td>
                                    <div class="q-item" data-q="1">
                                        Replace the
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-1" class="q-text">
                                        in the door
                                    </div>
                                    <hr>
                                    <div class="q-item" data-q="2" style="margin-top: 10px;">
                                        Paint wall above the
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-2" class="q-text">
                                    </div>
                                </td>
                                <td>
                                    <div class="note-item">
                                        Fix tomorrow
                                    </div>
                                    <hr>
                                    <div class="q-item" data-q="3" style="margin-top: 10px;">
                                        Strip paint and plaster approximately one
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-3" class="q-text">
                                        in advance
                                    </div>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td><b>Garden</b></td>
                                <td>
                                    <div class="q-item" data-q="4">
                                        One 
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-4" class="q-text">
                                        needs replacing (end of garden)
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </table>

                        <div style="text-align: center;">
                            <button type="button" class="btn btn-primary try-again" id="again-tc" style="display: none">
                                Try Again
                            </button>
                            <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-tc">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-2.mp3">
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
                                        <button class="start-btn" data-start="54" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>MANHAM PORT</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Why did a port originally develop at Manham?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It was safe from enemy attack.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It was convenient for river transport.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It had a good position on the sea coast.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What caused Manham’s sudden expansion during the Industrial Revolution?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the improvement in mining techniques</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the increase in demand for metals</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the discovery of tin in the area</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Why did rocks have to be sent away from Manham to be processed?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">shortage of fuel</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">poor transport systems</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">lack of skills among local people</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What happened when the port declined in the twentieth century?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">The workers went away.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Traditional skills were lost.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Buildings were used for new purposes.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    What did the Manham Trust hope to do?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">discover the location of the original port</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">provide jobs for the unemployed</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">rebuild the port complex</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="5" id="submit-oc">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-tc2" class="x-panel" role="tabpanel" aria-labelledby="tab-tc2" hidden>
                <div class="x-panel-inner">Content: Table Completion 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-tc2">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-4</p>

                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-2.mp3">
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
                                    <button class="start-btn" data-start="251" type="button">Start from
                                        here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-5</p>
                            <p>Complete the table below.</p>
                            <p><i>Write <b>NO MORE THAN TWO WORDS</b> for each answer.</i></p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Tourist attractions in Manham</h3>
                        </fieldset>

                        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <th><b>Place</b></th>
                                <th><b>Features and activities</b></th>
                                <th><b>Advice</b></th>
                            </tr>

                            <tr>
                                <td>copper mine</td>
                                <td>
                                    <div class="q-item" data-q="1">
                                        specially adapted miners
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-5" class="q-text">
                                        take visitors into the mountain
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="2" style="margin-top: 10px;">
                                        the mine is
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-6" class="q-text">
                                        and enclosed – unsuitable for children and animals
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>village school</td>
                                <td>
                                    <div class="q-item" data-q="3" style="margin-top: 10px;">
                                        classrooms and a special exhibition of 
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-7" class="q-text">
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="4" style="margin-top: 10px;">
                                        a
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-8" class="q-text">
                                        is recommended
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>‘The George’ (old sailing ship)</td>
                                <td>the ship’s wheel (was lost but has now been restored)</td>
                                <td>
                                    <div class="q-item" data-q="5" style="margin-top: 10px;">
                                        children shouldn’t use the
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="11qYaGWPJUTxUVdq-9" class="q-text">
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div style="text-align: center;" class="mt-2">
                            <button type="button" class="btn btn-primary try-again" id="again-tc2" style="display: none">
                                Try Again
                            </button>
                            <button type="button" class="btn btn-primary" data-kategori="listening" data-count="5" id="submit-tc2">
                                Submit
                            </button>
                        </div>
                    </form>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="43" type="button">Start from
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
                                    Which <b>TWO</b> skills did Laura improve as a result of her work placement?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">communication</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">design</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">IT</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">marketing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">organisation</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="130" type="button">Start from
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
                                    Which <b>TWO</b> immediate benefits did the company get from Laura’s work placement?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">updates for its software</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">cost savings</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">an improved image</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">new clients</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="11qYaGWPJUTxUVdq-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">a growth in sales</span>
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
            <div id="panel-matching" class="x-panel" role="tabpanel"                            aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="132" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>What source of information should Tim use at each of the following stages of the work placement?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-G</b>, next to questions.</i></p>
                                <p><b>Sources of information</b></p>
                                <strong>A</strong>&nbsp;&nbsp; company manager
                                <strong>B</strong>&nbsp;&nbsp; company’s personnel department<br>
                                <strong>C</strong>&nbsp;&nbsp; personal tutor<br>
                                <strong>D</strong>&nbsp;&nbsp; psychology department<br>
                                <strong>E</strong>&nbsp;&nbsp; mentor<br>
                                <strong>F</strong>&nbsp;&nbsp; university careers officer<br>
                                <strong>G</strong>&nbsp;&nbsp; internet<br>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Stages of the work placement procedure</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        obtaining booklet
                                        <span class="q-question">
                                            <select name="11qYaGWPJUTxUVdq-1" class="q-dropdown">
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
                                        discussing options
                                        <span class="q-question">
                                            <select name="11qYaGWPJUTxUVdq-2" class="q-dropdown">
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
                                        getting updates
                                        <span class="q-question">
                                            <select name="11qYaGWPJUTxUVdq-3" class="q-dropdown">
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
                                        responding to invitation for interview
                                        <span class="q-question">
                                            <select name="11qYaGWPJUTxUVdq-4" class="q-dropdown">
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
                                        informing about outcome of interview
                                        <span class="q-question">
                                            <select name="11qYaGWPJUTxUVdq-5" class="q-dropdown">
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

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">6</span>
                                    <span style="flex: 1;">
                                        requesting a reference
                                        <span class="q-question">
                                            <select name="11qYaGWPJUTxUVdq-6" class="q-dropdown">
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
            <div id="panel-one2" class="x-panel" role="tabpanel" aria-labelledby="tab-one2" hidden>
                <div class="x-panel-inner">Content: One Choice 2</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-3</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-4.mp3">
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
                                        <button class="start-btn" data-start="65" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-3</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>Nanotechnology: technology on a small scale</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    The speaker says that one problem with nanotechnology is that
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">it could threaten our way of life.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">it could be used to spy on people.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">it is misunderstood by the public.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="7">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    According to the speaker, some scientists believe that nono-particles
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">should be restricted to secure environments.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">should be used with more caution.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">should only be developed for essential products.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="8">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    In the speaker’s opinion, research into nanotechnology
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">has yet to win popular support.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">could be seen as unethical.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="11qYaGWPJUTxUVdq-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">ought to be continued.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="3" id="submit-oc2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-nc2" class="x-panel" role="tabpanel" aria-labelledby="tab-nc2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-7 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-4.mp3">
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
                                        <button class="start-btn" data-start="204" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-7</p>
                                <p>Complete the notes below.</p>
                                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Uses of Nanotechnology</h3>
                                <p><b>Transport</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            Nanotechnology could allow the development of stronger
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>Planes would be much lighter in weight.</li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-8" class="q-text" placeholder="">
                                            travel will be made available to the masses.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Technology</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="3">
                                            Computers will be even smaller, faster, and will have a greater
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-9" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-10" class="q-text" placeholder="">
                                            Energy will become more affordable.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>The Environment</b></p>
                                <ul>
                                    <li>Nano-robots could rebuild the ozone layer.</li>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            Pollutants such as
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-11" class="q-text" placeholder="">
                                            could be removed from water
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            There will be no
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-12" class="q-text" placeholder="">
                                            from manufacturing.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Health and Medicine</b></p>
                                <ul>
                                    <li>New methods of food production could eradicate famine.</li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            Analysis of medical
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-13" class="q-text" placeholder="">
                                            will be speeded up.
                                        </div>
                                    </li>
                                    <li>
                                        Life expectancy could be increased.
                                    </li>
                                </ul>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-nc2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="7" id="submit-nc2">
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
            submitHelper("form-nc", "11qYaGWPJUTxUVdq", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "11qYaGWPJUTxUVdq", "nc", $(this), "again-nc2", "Note Completion");
        });

        $("#submit-nc3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc3", "11qYaGWPJUTxUVdq", "nc", $(this), "again-nc3", "Note Completion");
        });

        $("#submit-nc4").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc4", "11qYaGWPJUTxUVdq", "nc", $(this), "again-nc4", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "11qYaGWPJUTxUVdq", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "11qYaGWPJUTxUVdq", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "11qYaGWPJUTxUVdq", "tc", $(this), "again-tc", "Table Completion");
        });

        $("#submit-tc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc2", "11qYaGWPJUTxUVdq", "tc", $(this), "again-tc2", "Table Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "11qYaGWPJUTxUVdq", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "11qYaGWPJUTxUVdq", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "11qYaGWPJUTxUVdq", "matching_information", $(this), "again-matching_information", "Matching Information");
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
                    'tfng': 6,
                    'tfng2': 8,
                    'ynng': 5,
                    'mse': 5,
                    'one': 5,
                    'one2': 3,
                    'mh': 2,
                    'tc': 4,
                    'mh2': 2,
                    'nc2': 7,
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
