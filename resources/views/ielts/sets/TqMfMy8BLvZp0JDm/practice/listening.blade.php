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
                data-id="matching">Map Labeling</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-matching2" aria-controls="panel-matching2" aria-selected="false"
                data-id="matching2">Matching</button>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-1.mp3">
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
                                        <button class="start-btn" data-start="88" type="button">Start from
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
                                <h3>Holiday rental</h3>
                                <p><b>Owner’s names</b>: Jack Fitzgerald and Shirley Fitzgerald</p>

                                <p>Granary Cottage</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            available for week beginning
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-1" class="q-text" placeholder="">
                                            May
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            cost for the week: £
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-2" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>
                                    <div class="q-list" data-q="3">
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="TqMfMy8BLvZp0JDm-3" class="q-text" placeholder="">
                                        <p>Cottage</p>
                                    </div>
                                </p>

                                <ul>
                                    <li>cost for the week: £480</li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            building was originally a
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-4" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            walk through doors from living room into a
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-5" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            several 
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-6" class="q-text" placeholder="">
                                            spaces at the front
                                        </div>
                                    </li>
                                    <li>bathroom has a shower</li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            central heating and stove that burns
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            views of old
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-8" class="q-text" placeholder="">
                                            from living room
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="9">
                                            view of hilltop
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-9" class="q-text" placeholder="">
                                            from the bedroom
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Payment</b></p>
                                <ul>
                                    <li>deposit: £144</li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            deadline for final payment: end of
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-10" class="q-text" placeholder="">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-2.mp3">
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
                                <p>Questions 1-5</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Local council report on traffic and highways</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    A survey found people’s main concern about traffic in the area was
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">cuts to public transport.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">poor maintenance of roads.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">changes in the type of traffic.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Which change will shortly be made to the cycle path next to the river?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It will be widened.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It will be extended.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It will be resurfaced.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Plans for a pedestrian crossing have been postponed because
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the Post Office has moved.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the proposed location is unsafe.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">funding is not available at present.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    On Station Road, notices have been erected
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">telling cyclists not to leave their bikes outside the station ticket office.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">asking motorists to switch off engines when waiting at the level crossing.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="TqMfMy8BLvZp0JDm-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">warning pedestrians to leave enough time when crossing the railway line.</span>
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
                <div class="x-panel-inner">Content: Map Labeling</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-map_labeling">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-2.mp3">
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
                                        <button class="start-btn" data-start="226" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-6</h3>
                                <p>Label the map below.</p>
                                <p><i>Write the correct letter, <b>A-I</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Recreation ground after proposed changes</h3>
                                <img src="{{asset('own_assets/images/cambridge-ielts-16-academic-listening-test-4-15-20.jpg')}}" alt="" width="100%">
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        New car park
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-1" class="q-dropdown">
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
                                        New cricket pitch
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-2" class="q-dropdown">
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
                                        Children’s playground
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-3" class="q-dropdown">
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
                                        Skateboard ramp 
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-4" class="q-dropdown">
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
                                        Pavilion 
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-5" class="q-dropdown">
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
                                        Notice board
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-6" class="q-dropdown">
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
                                <button type="button" class="btn btn-primary try-again" id="again-map_labeling" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-map_labeling">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-3.mp3">
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
                                    Which <b>TWO</b> benefits of city bike-sharing schemes do the students agree are the most important?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">reducing noise pollution</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">reducing traffic congestion</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">improving air quality</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">encouraging health and fitness</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">making cycling affordable</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="105" type="button">Start from
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
                                    Which <b>TWO</b> things do the students think are necessary for successful bike-sharing schemes?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Bikes should have a GPS system.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The app should be easy to use.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Public awareness should be raised.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Only one scheme should be available.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="TqMfMy8BLvZp0JDm-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">There should be a large network of cycle lanes.</span>
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
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="239" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-6</h3>
                                <p>What is the speakers’ opinion of the bike-sharing schemes in each of the following cities?</p>
                                <p>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Opinion of bike-sharing scheme</h3>
                                <p><b>A</b> They agree it has been disappointing.</p>
                                <p><b>B</b> They think it should be cheaper.</p>
                                <p><b>C</b> They are surprised it has been so successful.</p>
                                <p><b>D</b> They agree that more investment is required.</p>
                                <p><b>E</b> They think the system has been well designed.</p>
                                <p><b>F</b> They disagree about the reasons for its success.</p>
                                <p><b>G</b> They think it has expanded too quickly.</p>
                            </fieldset>

                            <p><b>Cities</b></p>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Amsterdam 
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-1" class="q-dropdown">
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
                                        Dublin 
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-2" class="q-dropdown">
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
                                        London 
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-3" class="q-dropdown">
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
                                        Buenos Aires
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-4" class="q-dropdown">
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
                                        New York
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-5" class="q-dropdown">
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
                                        Sydney 
                                        <span class="q-question">
                                            <select name="TqMfMy8BLvZp0JDm-6" class="q-dropdown">
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
                                <button type="button" class="btn btn-primary try-again" id="again-matching" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-matching">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-4.mp3">
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
                                <h3>THE EXTINCTION OF THE DODO BIRD</h3>
                                <p>The dodo was a large flightless bird which used to inhabit the island of Mauritius.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>History</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            1507 – Portuguese ships transporting
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-11" class="q-text" placeholder="">
                                            stopped at the island to collect food and water.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            1638 – The Dutch established a
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-12" class="q-text" placeholder="">
                                            on the island.
                                        </div>
                                    </li>
                                    <li>They killed the dodo birds for their meat.</li>
                                    <li>The last one was killed in 1681.</li>
                                </ul>

                                <p><b>Description</b></p>
                                <ul>
                                    <li>The only record we have is written descriptions and pictures (possibly unreliable).</li>
                                    <li>
                                        <div class="q-list" data-q="3">
                                            A Dutch painting suggests the dodo was very
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-13" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            The only remaining soft tissue is a dried
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-14" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            Recent studies of a dodo skeleton suggest the birds were capable of rapid
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-15" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            It’s thought they were able to use their small wings to maintain
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-16" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            Their 
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-17" class="q-text" placeholder="">
                                            was of average size.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            Their sense of
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-18" class="q-text" placeholder="">
                                            enabled them to find food.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Reasons for extinction</b></p>
                                <ul>
                                    <li>Hunting was probably not the main cause.</li>
                                    <li>Sailors brought dogs and monkeys.</li>
                                    <li>
                                        <div class="q-list" data-q="9">
                                            also escaped onto the island and ate the birds’ eggs.
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-18" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            The arrival of farming meant the
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="TqMfMy8BLvZp0JDm-20" class="q-text" placeholder="">
                                            was destroyed.
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
            submitHelper("form-nc", "TqMfMy8BLvZp0JDm", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "TqMfMy8BLvZp0JDm", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-map_labeling").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-map_labeling", "TqMfMy8BLvZp0JDm", "map_labeling", $(this), "again-map_labeling", "Map Labeling");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "TqMfMy8BLvZp0JDm", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "TqMfMy8BLvZp0JDm", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-matching").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching", "TqMfMy8BLvZp0JDm", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "TqMfMy8BLvZp0JDm", "nc", $(this), "again-nc2", "Note Completion");
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
