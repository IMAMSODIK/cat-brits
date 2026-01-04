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
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-matching2" aria-controls="panel-matching2" aria-selected="false"
                data-id="matching2">Matching 2</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-nc2" aria-controls="panel-nc2" aria-selected="true"
                data-id="nc2">Note Completion 2</button>
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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio1.mp3">
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
                                        <button class="start-btn" data-start="85" type="button">Start from
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
                                <p>Local Councils can Arrange Practical Support to Help those Caring for Elderly people at Home.</p>
                                <p>This can give the carer:</p>
                                <ul>
                                    <li>time for other responsibilities</li>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            a
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Assessment of mother’s needs</b></p>
                                <p>This may include discussion of:</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            how much
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-2" class="q-text"
                                                placeholder="">
                                            the caring involves
                                        </div>
                                    </li>
                                </ul>

                                <p>What types of tasks are involved, e.g.:</p>
                                <ul>
                                    <li>help with dressing</li>
                                    <li>
                                        <div class="q-list" data-q="3">
                                            helping her have a
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-3" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>shopping</li>
                                    <li>helping with meals</li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            dealing with
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-4" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Any aspects of caring that are especially difficult, e.g.:</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            loss of 
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-6" class="q-text"
                                                placeholder="">
                                            her
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            preventing a
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-7" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Types of support that may be offered to carers</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            transport costs, e.g. cost of a
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-8" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="9">
                                            car-related costs, e.g. fuel and
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-9" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>help with housework</li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            help to reduce
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="EKX6hyJgeV3x0pxB-10" class="q-text"
                                                placeholder="">
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
            <div id="panel-matching" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-part-2.mp3">
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
                                        <button class="start-btn" data-start="57" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>What is the role of the volunteers in each of the following activities?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-I</b>, next to questions.</i></p>
                                <p><b>Community Volunteering and Local Festival Events</b></p>
                                <p><b>Information</b></p>
                                <strong>A</strong>&nbsp;&nbsp; providing entertainment
                                <strong>B</strong>&nbsp;&nbsp; providing publicity about a council service<br>
                                <strong>C</strong>&nbsp;&nbsp; contacting local businesses<br>
                                <strong>D</strong>&nbsp;&nbsp; giving advice to visitors<br>
                                <strong>E</strong>&nbsp;&nbsp; collecting feedback on events<br>
                                <strong>F</strong>&nbsp;&nbsp; selling tickets<br>
                                <strong>G</strong>&nbsp;&nbsp; introducing guest speakers at an event<br>
                                <strong>H</strong>&nbsp;&nbsp; encouraging cooperation between local organisations<br>
                                <strong>I</strong>&nbsp;&nbsp; helping people find their seats<br>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        walking around the town centre
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-1" class="q-dropdown">
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
                                        helping at concerts
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-2" class="q-dropdown">
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
                                        getting involved with community groups
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-3" class="q-dropdown">
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
                                        helping with a magazine
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-4" class="q-dropdown">
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
                                        participating at lunches for retired people
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-5" class="q-dropdown">
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
                                        helping with the website
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-6" class="q-dropdown">
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
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-part-2.mp3">
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
                                        <button class="start-btn" data-start="265" type="button">Start from
                                            here</button>
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
                                    Which event requires the largest number of volunteers?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the music festival</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the science festival</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the book festival</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What is the most important requirement for volunteers at the festivals?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">interpersonal skills</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">personal interest in the event</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">flexibility</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    New volunteers will start working in the week beginning
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">2 September</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">9 September</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">23 September</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What is the next annual event for volunteers?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">a boat trip</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">a barbecue</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">a party</span>
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
            <div id="panel-matching2" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information2" hidden>
                <div class="x-panel-inner">Content: Matching 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-3.mp3">
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
                                        <button class="start-btn" data-start="49" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p>What is Rosie and Colin’s opinion about each of the following aspects of human geography?</p>
                                <p>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions</p>
                                <p><b>Urban Development and Human Geography Discussion</b></p>
                                <p><b>Opinion</b></p>
                                <strong>A</strong>&nbsp;&nbsp; The information given about this was too vague.<br>
                                <strong>B</strong>&nbsp;&nbsp; This may not be relevant to their course.<br>
                                <strong>C</strong>&nbsp;&nbsp; This will involve only a small number of statistics.<br>
                                <strong>D</strong>&nbsp;&nbsp; It will be easy to find facts about this.<br>
                                <strong>E</strong>&nbsp;&nbsp; The facts about this may not be reliable.<br>
                                <strong>F</strong>&nbsp;&nbsp; No useful research has been done on this.<br>
                                <strong>G</strong>&nbsp;&nbsp; The information provided about this was interesting.<br>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Population 
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-7" class="q-dropdown">
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
                                        Health 
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-8" class="q-dropdown">
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
                                        Economies 
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-9" class="q-dropdown">
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
                                        Culture 
                                        <span class="q-question">
                                            <select name="EKX6hyJgeV3x0pxB-10" class="q-dropdown">
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
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-matching_information2">
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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-3.mp3">
                                    </audio>

                                    <div class="controls-container">
                                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                                        <div class="seek-container">
                                            <input type="range" min="0" max="200" value="0"
                                                class="seekBar">
                                            <div class="timeText"><span class="current">0:00</span>
                                                <span class="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="start-buttons">
                                        <button class="start-btn" data-start="265" type="button">Start from
                                            here</button>
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
                                    Rosie says that in her own city the main problem is
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Crime</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Housing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Unemployment</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What recent additions to the outskirts of their cities are both students happy about?  
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Conference centres</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Sports centres</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Retail centres</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    The students agree that developing disused industrial sites may  
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Have unexpected costs</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Damage the urban environment</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Destroy valuable historical buildings</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    The students will mention Masdar City as an example of an attempt to achieve  
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Daily collections for waste recycling</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Sustainable energy use</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Free transport for everyone</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    When discussing the ecotown of Greenhill Abbots, Colin is uncertain about
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">What its objectives were</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Why there was opposition to it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="EKX6hyJgeV3x0pxB-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">How much of it has actually been built</span>
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
            <div id="panel-nc2" class="x-panel" role="tabpanel" aria-labelledby="tab-nc2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc2">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-10</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-part-4.mp3">
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
                                    <button class="start-btn" data-start="85" type="button">Start from here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-10</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            <p><b>Developing Food Trends</b></p>
                            
                            <p>
                                <div class="q-list" data-q="1">
                                    The growth in interest in food fashions started with
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="EKX6hyJgeV3x0pxB-11" class="q-text" placeholder="">
                                    of food being shared on social media.
                                </div>
                            </p>
                            <p>The UK food industry is constantly developing products which are newor different.</p>
                            <p>Influencers on social media become ‘ambassadors’ for a brand.</p>
                            <p>
                                <div class="q-list" data-q="2">
                                    Sales of
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="EKX6hyJgeV3x0pxB-12" class="q-text" placeholder="">
                                    food brands have grown rapidly this way.
                                </div>
                            </p>
                            <p>Supermarkets track demand for ingredients on social media.</p>
                            <p>
                                <div class="q-list" data-q="3">
                                    Famous 
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="EKX6hyJgeV3x0pxB-13" class="q-text" placeholder="">
                                    are influential.
                                </div>
                            </p>

                            <p><b>Marketing campaigns</b></p>
                            <p><b>The avocado:</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="4">
                                        were invited to visit growers in South Africa.
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="EKX6hyJgeV3x0pxB-14" class="q-text" placeholder="">
                                        The 
                                    </div>
                                    <div class="q-list" data-q="5">
                                        Advertising focused on its
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="EKX6hyJgeV3x0pxB-15" class="q-text" placeholder="">
                                        benefits.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Oat milk:</b></p>
                            <ul>
                                <li>
                                    A Swedish brand’s media campaign received publicity by upsetting competitors.
                                </li>
                                <li>
                                    <div class="q-list" data-q="6">
                                        Promotion in the USA through
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="EKX6hyJgeV3x0pxB-16" class="q-text" placeholder="">
                                        shops reduced the need for advertising.
                                    </div>
                                    <div class="q-list" data-q="7">
                                        It appealed to consumers who are concerned about the
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="EKX6hyJgeV3x0pxB-17" class="q-text" placeholder="">
                                        benefits.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Norwegian skrei:</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="8">
                                        has helped strengthen the
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="EKX6hyJgeV3x0pxB-18" class="q-text" placeholder="">
                                        of Norwegian seafood.
                                    </div>
                                </li>
                                <li>Ethical concerns</li>
                            </ul>

                            <p><b>Norwegian skrei:</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="9">
                                        Its success led to an increase in its
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="EKX6hyJgeV3x0pxB-19" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="10">
                                        Overuse of resources resulted in poor quality
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="EKX6hyJgeV3x0pxB-20" class="q-text" placeholder="">
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
            submitHelper("form-nc", "EKX6hyJgeV3x0pxB", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "EKX6hyJgeV3x0pxB", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "EKX6hyJgeV3x0pxB", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-matching_information2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information2", "EKX6hyJgeV3x0pxB", "matching_information", $(this), "again-matching_information2", "Matching Information");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "EKX6hyJgeV3x0pxB", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "EKX6hyJgeV3x0pxB", "nc", $(this), "again-nc2", "Note Completion");
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
                    'matching': 6,
                    'one': 4,
                    'matching2': 4,
                    'one2': 5,
                    'nc2': 10,
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
