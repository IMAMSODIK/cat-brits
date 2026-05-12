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

    <style>
        .center-cell {
            text-align: center;
            vertical-align: middle;
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
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-fc_completion" aria-controls="panel-fc_completion"
                aria-selected="false" data-id="fc_completion">Flow Chart Completion</button>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-1.mp3">
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
                                        <button class="start-btn" data-start="76" type="button">Start from
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
                                <p><b>Copying photos to digital format</b></p>
                                <hr>
                                <p><b>Name of company: Picturerep</b></p>
                                <hr>

                                <p>Requirements</p>
                                <ul>
                                    <li>Maximum size of photos is 30 cm, minimum size 4 cm.</li>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            Photos must not be in a
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-1" class="q-text"
                                                placeholder="">
                                            or an album.
                                        </div>
                                    </li>
                                </ul>

                                <p>Cost</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            The cost for 360 photos is £
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-2" class="q-text"
                                                placeholder="">
                                            (including one disk).
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="3">
                                            Before the complete order is sent,
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-3" class="q-text"
                                                placeholder="">
                                            is required.
                                        </div>
                                    </li>
                                </ul>

                                <p>Services included in the price</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            Photos can be placed in a folder, e.g. with the name
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-4" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            The
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-5" class="q-text"
                                                placeholder="">
                                            and contrast can be improved if necessary.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            Photos which are very fragile will be scanned by
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-6" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Special restore service (costs extra)</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            It may be possible to remove an object from a photo, or change the
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-7" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            A photo which is not correctly in
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-8" class="q-text"
                                                placeholder="">
                                            cannot be fixed.
                                        </div>
                                    </li>
                                </ul>

                                <p>Other information</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="9">
                                            Orders are completed within
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-9" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="10">
                                            Send the photos in a box (not
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-10" class="q-text"
                                                placeholder="">
                                            ).
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-nc"
                                    style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening"
                                    data-count="10" id="submit-nc">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-2.mp3">
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

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Dartfield House school used to be
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">a tourist information centre.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">a private home.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">a local council building.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What is planned with regard to the lower school?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">All buildings on the main site will be improved.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The lower school site will be used for new
                                            homes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Additional school buildings will be constructed on the
                                            lower school site.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    The catering has been changed because of
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">long queuing times.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">changes to the school timetable.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">dissatisfaction with the menus.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    Parents are asked to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">help their children to decide in advance which serving
                                            point to use.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">make sure their children have enough money for
                                            food.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">advise their children on healthy food to eat.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    What does the speaker say about the existing canteen?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Food will still be served there.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Only staff will have access to it.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Pupils can take their food into it.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc"
                                    style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening"
                                    data-count="5" id="submit-oc">
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
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-2.mp3">
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
                                        <button class="start-btn" data-start="282" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-3</p>
                                <p>What comment does the speaker make about each of the following serving points in the
                                    Food Hall?</p>
                                <p>Choose <b>THREE</b> answers from the box and write the correct letter, <b>A-D</b>,
                                    next to Questions.</p>
                                <p><b>Comments</b></p>

                                <strong>A</strong>&nbsp;&nbsp; pupils help to plan menus <br>
                                <strong>B</strong>&nbsp;&nbsp; only vegetarian food<br>
                                <strong>C</strong>&nbsp;&nbsp; different food every week<br>
                                <strong>D</strong>&nbsp;&nbsp; daily change in menu<br>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Food available at serving points in Food Hall</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        World Adventures
                                        <span class="q-question">
                                            <select name="XW16JROLKCFE4BMH-1" class="q-dropdown">
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
                                        Street Life
                                        <span class="q-question">
                                            <select name="XW16JROLKCFE4BMH-2" class="q-dropdown">
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
                                        Speedy Italian
                                        <span class="q-question">
                                            <select name="XW16JROLKCFE4BMH-3" class="q-dropdown">
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
                                <button type="button" class="btn btn-primary try-again"
                                    id="again-matching_information" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening"
                                    data-count="3" id="submit-matching_information">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-2.mp3">
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
                                        <button class="start-btn" data-start="358" type="button">Start from
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
                                    Which <b>TWO</b> optional after-school lessons are new?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="XW16JROLKCFE4BMH-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">swimming</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XW16JROLKCFE4BMH-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">piano</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XW16JROLKCFE4BMH-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">acting</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XW16JROLKCFE4BMH-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">cycling</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XW16JROLKCFE4BMH-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">theatre sound and lighting</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-two_choices"
                                    style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening"
                                    data-count="2" id="submit-two_choices">
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
                                <p class="lead">Listen and answer questions 1-4</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-3.mp3">
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
                                <p>Questions 1-4</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Assignment on sleep and dreams</h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Luke read that one reason why we often forget dreams is that
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">our memories cannot cope with too much
                                            information.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">we might other wise be confused about what is
                                            real.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">we do not think they are important.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    What do Luke and Susie agree about dreams predicting the future?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It may just be due to chance.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It only happens with certain types of event.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It happens more often than some people think.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Susie says that a study on pre-school children having a short nap in the day
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">had controversial results.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">used faulty researh methodology.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">failed to reach any clear conclusions.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    In their last assignment, both students had problems with
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">statistical analysis.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">making an action plan.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XW16JROLKCFE4BMH-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">self-assessment</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc"
                                    style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening"
                                    data-count="4" id="submit-oc">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-fc_completion" class="x-panel" role="tabpanel" aria-labelledby="tab-fc_completion"
                hidden>
                <div class="x-panel-inner">Content: Flow Chart Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-fc_completion">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-3.mp3">
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
                                        <button class="start-btn" data-start="250" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Complete the flow chart below.</p>
                                <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            </fieldset>

                            <p style="text-align: center"><b>Assignment plan</b></p>
                            <fieldset class="q-item">
                                <table class="aligncenter">
                                    <tbody>
                                        <td>
                                        <td width="100%" class="center-cell">
                                            <p>Decide on research question:</p>
                                            <p>Is there a relationship between hours of sleep and number of dreams?</p>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class="aligncenter">
                                    <tbody>
                                        <td>
                                            <td width="100%" class="center-cell">
                                                <p>Decide on sample:</p>
                                                <p>
                                                <div class="q-list" data-q="1">
                                                    Twelve students from the
                                                    <span class="q-number-box">1</span>
                                                    <input type="text" name="XW16JROLKCFE4BMH-1" class="q-text"
                                                        placeholder="">
                                                    department
                                                </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <td>
                                            <td width="100%" class="center-cell">
                                                <p>Decide on methodology:</p>
                                                <p>Self-reporting</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <td>
                                            <td width="100%" class="center-cell">
                                                <p>Decide on procedure:</p>
                                                <p>
                                                <div class="q-list" data-q="2">
                                                    Answers on
                                                    <span class="q-number-box">2</span>
                                                    <input type="text" name="XW16JROLKCFE4BMH-2" class="q-text"
                                                        placeholder="">
                                                </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <td>
                                            <td width="100%" class="center-cell">
                                                <p>
                                                <div class="q-list" data-q="3">
                                                    Check ethical guidelines for working with
                                                    <span class="q-number-box">3</span>
                                                    <input type="text" name="XW16JROLKCFE4BMH-3" class="q-text"
                                                        placeholder="">
                                                </div>
                                                <div class="q-list" data-q="4">
                                                    Ensure that risk is assessed and
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="XW16JROLKCFE4BMH-4" class="q-text"
                                                        placeholder="">
                                                    is kept to a minimum
                                                </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <td>
                                            <td width="100%" class="center-cell">
                                                <p>
                                                <div class="q-list" data-q="5">
                                                    Analyse the results Calculate the correlation and make a
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="XW16JROLKCFE4BMH-5" class="q-text"
                                                        placeholder="">
                                                </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <p>
                                <div class="q-list center-cell" data-q="6">
                                    Analyse the results Calculate the correlation and make a
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="XW16JROLKCFE4BMH-6" class="q-text" placeholder="">
                                </div>
                                </p>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-fc_completion"
                                    style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening"
                                    data-count="6" id="submit-fc_completion">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-4.mp3">
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
                                <p><b>Health benefits of dance</b></p>
                                <p><b>Recent findings:</b></p>
                                <ul>
                                    <li>All forms of dance produce various hormones associated with feelings of
                                        happiness.</li>
                                    <li>Dancing with others has a more positive impact than dancing alone.</li>
                                    <li>
                                        <div class="q-list" data-q="1">
                                            An experiment on university students suggested that dance increases
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-11" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="2">
                                            For those with mental illness, dance could be used as a form of
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-12" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Benefits of dance for older people:</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="3">
                                            accessible for people with low levels of
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-13" class="q-text"
                                                placeholder="">
                                            when hunting or sleeping.
                                        </div>
                                    </li>
                                    <li>reduces the risk of heart disease</li>
                                    <li>
                                        <div class="q-list" data-q="4">
                                            better
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-14" class="q-text"
                                                placeholder="">
                                            reduces the risk of accidents
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="5">
                                            improves
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-15" class="q-text"
                                                placeholder="">
                                            function by making it work faster
                                        </div>
                                    </li>
                                    <li>improves participants’ general well-being</li>
                                    <li>
                                        <div class="q-list" data-q="6">
                                            gives people more
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-16" class="q-text"
                                                placeholder="">
                                            to take exercise
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="7">
                                            can lessen the feeling of
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-17" class="q-text"
                                                placeholder="">
                                            , very common in older people
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Benefits of Zumba:</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="8">
                                            A study at The University of Wisconsin showed that doing Zumba for 40
                                            minutes uses up as many
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="XW16JROLKCFE4BMH-18" class="q-text"
                                                placeholder="">
                                            as other quite intense forms of exercise.
                                        </div>
                                    </li>
                                    <li>The American Journal of Health Behavior study showed that:</li>
                                </ul>

                                <br>

                                <p>
                                <div class="q-list" data-q="9">
                                    – women suffering from
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="XW16JROLKCFE4BMH-19" class="q-text" placeholder="">
                                    benefited from doing Zumba.
                                </div>
                                </p>
                                <p>
                                <div class="q-list" data-q="10">
                                    – Zumba became a
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="XW16JROLKCFE4BMH-20" class="q-text" placeholder="">
                                    for the participants.
                                </div>
                                </p>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-nc2"
                                    style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening"
                                    data-count="10" id="submit-nc2">
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
            submitHelper("form-nc", "XW16JROLKCFE4BMH", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "XW16JROLKCFE4BMH", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "XW16JROLKCFE4BMH", "matching_information", $(this),
                "again-matching_information", "Matching Information");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "XW16JROLKCFE4BMH", "two_choices", $(this), "again-two_choices",
                "Two Choices");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "XW16JROLKCFE4BMH", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-fc_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-fc_completion", "XW16JROLKCFE4BMH", "fc_completion", $(this), "again-fc_completion",
                "Flow Chart Completion");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "XW16JROLKCFE4BMH", "nc", $(this), "again-nc2", "Note Completion");
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
                    'one': 5,
                    'matching': 3,
                    'mh': 2,
                    'one2': 4,
                    'fc_completion': 6,
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
