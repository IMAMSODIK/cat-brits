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
        #panel-tc .q-text {
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
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-matching_information" aria-controls="panel-matching_information" aria-selected="false"
                data-id="matching_information">Matching</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Note Completion 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-1.mp3">
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
                                        <button class="start-btn" data-start="53" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p>Complete the notes below.</p>
                                <p><i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i></p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0"
                                style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2">Transport Survey</th>
                                </tr>
                                <tr>
                                    <td colspan="2"><i>Example</i></td>
                                </tr>
                                <tr>
                                    <td><b>Travelled to town today:</b></td>
                                    <td><b>by </b><i>......bus.....</i></td>
                                </tr>
                                <tr>
                                    <td><b>Name:</b></td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            Luisa 
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="QmN0FYAE2DCXRPdC-1" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Address:</b></td>
                                    <td>
                                        <div class="q-item" data-q="2">
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="QmN0FYAE2DCXRPdC-2" class="q-text" placeholder="">
                                            White Stone Rd
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Area:</b></td>
                                    <td>Bradfield</td>
                                </tr>
                                <tr>
                                    <td><b>Postcode:</b></td>
                                    <td>
                                        <div class="q-item" data-q="3">
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="QmN0FYAE2DCXRPdC-3" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Occupation:</b></td>
                                    <td>
                                        <div class="q-item" data-q="4">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="QmN0FYAE2DCXRPdC-4" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Reason for visit to town:</b></td>
                                    <td>
                                        <div class="q-item" data-q="5">
                                        to go to the
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="QmN0FYAE2DCXRPdC-5" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><b>Suggestions for improvement</b>:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="6">
                                                    better 
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="QmN0FYAE2DCXRPdC-6" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                            <li>have more footpaths</li>
                                            <li>
                                                <div class="q-item" data-q="7">
                                                    more frequent
                                                    <span class="q-number-box">7</span>
                                                    <input type="text" name="QmN0FYAE2DCXRPdC-7" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><b>Things that would encourage cycling to work</b>:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="8">
                                                    having  
                                                    <span class="q-number-box">8</span>
                                                    <input type="text" name="QmN0FYAE2DCXRPdC-8" class="q-text"
                                                        placeholder="">
                                                    parking places for bicycles
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-item" data-q="9">
                                                    being able to use a
                                                    <span class="q-number-box">9</span>
                                                    <input type="text" name="QmN0FYAE2DCXRPdC-9" class="q-text"
                                                        placeholder="">
                                                    at work
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-item" data-q="10">
                                                    the opportunity to have cycling
                                                    <span class="q-number-box">10</span>
                                                    <input type="text" name="QmN0FYAE2DCXRPdC-10" class="q-text"
                                                        placeholder="">
                                                     on busy roads
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>

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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-2.mp3">
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
                                        <button class="start-btn" data-start="44" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-4</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>New city developments</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    The idea for the two new developments in the city came from
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">local people.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the City Council.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the SWRDC.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What is unusual about Brackenside pool?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">its architectural style</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">its heating system</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">its method of water treatment</span>
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
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the late opening date.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the cost of the project.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the size of the facilities.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What decision has not yet been made about the pool?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">whose statue will be at the door</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the exact opening times</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">who will open it</span>
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
            <div id="panel-matching_information" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-2.mp3">
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
                                        <button class="start-btn" data-start="208" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Which feature is related to each of the following areas of the world represented in the playground?</p>
                                <p><i>Choose SIX answers from the box and write the correct letter, <b>A-I</b>, next to questions</i></p>
                                <b>Features</b>

                                <table cellspacing="15">
                                    <tr>
                                        <td><b>A</b></td>
                                        <td>ancient forts</td>
                                    </tr>
                                    <tr>
                                        <td><b>B</b></td>
                                        <td>waterways</td>
                                    </tr>
                                    <tr>
                                        <td><b>C</b></td>
                                        <td>ice and snow</td>
                                    </tr>
                                    <tr>
                                        <td><b>D</b></td>
                                        <td>jewels</td>
                                    </tr>
                                    <tr>
                                        <td><b>E</b></td>
                                        <td>local animals</td>
                                    </tr>
                                    <tr>
                                        <td><b>F</b></td>
                                        <td>mountains</td>
                                    </tr>
                                    <tr>
                                        <td><b>G</b></td>
                                        <td>music and film</td>
                                    </tr>
                                    <tr>
                                        <td><b>H</b></td>
                                        <td>space travel</td>
                                    </tr>
                                    <tr>
                                        <td><b>I</b></td>
                                        <td>volcanoes</td>
                                    </tr>
                                </table>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>Areas of the world</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Asia  
                                        <span class="q-question">
                                            <select name="QmN0FYAE2DCXRPdC-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">2</span>
                                    <span style="flex: 1;">
                                        Antarctica 
                                        <span class="q-question">
                                            <select name="QmN0FYAE2DCXRPdC-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">3</span>
                                    <span style="flex: 1;">
                                        South America 
                                        <span class="q-question">
                                            <select name="QmN0FYAE2DCXRPdC-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">4</span>
                                    <span style="flex: 1;">
                                        North America 
                                        <span class="q-question">
                                            <select name="QmN0FYAE2DCXRPdC-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">5</span>
                                    <span style="flex: 1;">
                                        Europe  
                                        <span class="q-question">
                                            <select name="QmN0FYAE2DCXRPdC-5" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">6</span>
                                    <span style="flex: 1;">
                                        Africa  
                                        <span class="q-question">
                                            <select name="QmN0FYAE2DCXRPdC-6" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-3.mp3">
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
                                        <button class="start-btn" data-start="47" type="button">Start from here</button>
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
                                    Which TWO hobbies was Thor Heyerdahl very interested in as a youth?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">camping</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">climbing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">collecting</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">hunting</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">reading</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-3.mp3">
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
                                        <button class="start-btn" data-start="93" type="button">Start from here</button>
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
                                    Which do the speakers say are the TWO reasons why Heyerdahl went to live on an island?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">to examine ancient carvings</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to experience an isolated place</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to formulate a new theory</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">to learn survival skills</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="QmN0FYAE2DCXRPdC-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">to study the impact of an extreme environment</span>
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
            <div id="panel-one2" class="x-panel" role="tabpanel" aria-labelledby="tab-one2" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-3.mp3">
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
                                        <button class="start-btn" data-start="198" type="button">Start from here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>The later life of Thor Heyerdahl</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    According to Victor and Olivia, academics thought that Polynesian migration from the east was impossible due to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the fact that Eastern countries were far away.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the lack of materials for boat building.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the direction of the winds and currents.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Which do the speakers agree was the main reason for Heyerdahl’s raft journey?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">to overcome a research setback</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to demonstrate a personal quality</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to test a new theory</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    What was most important to Heyerdahl about his raft journey?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the fact that he was the first person to do it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the speed of crossing the Pacific</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the use of authentic construction methods</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    Why did Heyerdahl go to Easter Island?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">to build a stone statue</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to sail a reed boat</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to learn the local language</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    In Olivia’s opinion, Heyerdahl’s greatest influence was on
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">theories about Polynesian origins.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the development of archaeological methodology</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">establishing archaeology as an academic subject.</span>
                                    </label>
                                </div>
                            </fieldset>
                            
                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    Which criticism do the speakers make of William Oliver’s textbook?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-10" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Its style is out of date.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-10" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Its content is over-simplified.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-10" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Its methodology is flawed.</span>
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
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc2">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-10</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-4.mp3">
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
                                    <button class="start-btn" data-start="72" type="button">Start from here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-10</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>THE FUTURE OF MANAGEMENT</b></p>
                            <p><b>Business markets</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="11">
                                        greater
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-11" class="q-text" placeholder="">
                                        among companies
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="12">
                                        increase in power of large
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-12" class="q-text" placeholder="">
                                        Companies
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="13">
                                        rising 
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-13" class="q-text" placeholder="">
                                        in certain countries
                                    </div>
                                </li>
                            </ul>

                            <p><b>External influences on businesses</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="14">
                                        more discussion with
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-14" class="q-text" placeholder="">
                                        before making business decisions
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="15">
                                        environmental concerns which may lead to more
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-15" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Business structures</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="16">
                                        more teams will be formed to work on a particular
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-16" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="17">
                                        businesses may need to offer hours that are
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-17" class="q-text" placeholder="">
                                        , or the chance to work remotely
                                    </div>
                                </li>
                            </ul>

                            <p><b>Management styles</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="18">
                                        increasing need for managers to provide good
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-18" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="19">
                                        changes influenced by
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-19" class="q-text" placeholder="">
                                        taking senior roles
                                    </div>
                                </li>
                            </ul>

                            <p><b>Changes in the economy</b></p>
                            <ul>
                                <li>
                                    service sector continues to be important
                                </li>
                                <li>
                                    increasing value of intellectual property
                                </li>
                                <li>
                                    <div class="q-list" data-q="20">
                                        more and more
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="QmN0FYAE2DCXRPdC-20" class="q-text" placeholder="">
                                        workers
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
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @include('ielts.sets.layouts.practice.listening_reading.components')
    @include('ielts.sets.layouts.practice.listening_reading.script')

    <script>
        $("#submit-nc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc", "QmN0FYAE2DCXRPdC", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "QmN0FYAE2DCXRPdC", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "QmN0FYAE2DCXRPdC", "nc", $(this), "again-nc2", "Note Completion");
        });

        $("#submit-nc3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc3", "QmN0FYAE2DCXRPdC", "nc", $(this), "again-nc3", "Note Completion");
        });

        $("#submit-nc4").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc4", "QmN0FYAE2DCXRPdC", "nc", $(this), "again-nc4", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "QmN0FYAE2DCXRPdC", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "QmN0FYAE2DCXRPdC", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "QmN0FYAE2DCXRPdC", "tc", $(this), "again-tc", "Table Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "QmN0FYAE2DCXRPdC", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "QmN0FYAE2DCXRPdC", "two_choices2", $(this), "again-two_choices2", "Two Choices");
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
                    'matching_information': 6,
                    'mh': 2,
                    'mh2': 2,
                    'one2': 6,
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