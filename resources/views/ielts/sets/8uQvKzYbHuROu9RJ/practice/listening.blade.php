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
                aria-selected="true" data-id="tfng">Form Completion</button>
            <button class="x-tab" role="tab" id="tab-tc" aria-controls="panel-tc" aria-selected="false"
                data-id="tc">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 3</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-mh3" aria-controls="panel-mh3" aria-selected="false"
                data-id="mh3">Two Choices 3</button>
            <button class="x-tab" role="tab" id="tab-mh4" aria-controls="panel-mh4" aria-selected="false"
                data-id="mh4">Two Choices 4</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Note Completion</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Form Completion</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-form_completion">
                            <fieldset class="q-item">
                            <h3>Question 1-4</h3>
                                <p class="lead">Listen and answer questions 1-6 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-1.mp3">
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
                                        <button class="start-btn" data-start="75" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-4</p>
                                <p><i>Complete the form below.</i></p>
                                <p><i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i></p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2">
                                        <h1 style="text-align: center">Wayside Camera Club<br>membership form</h1>
                                    </th>
                                </tr>
                                <tr>
                                    <td>Name:</td>
                                    <td>Dan Green</td>
                                </tr>
                                <tr>
                                    <td>Email address:</td>
                                    <td>dan1068@market.com</td>
                                </tr>
                                <tr>
                                    <td>Home address:</td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            52
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="8uQvKzYbHuROu9RJ-1" class="q-text"
                                                placeholder="">
                                            Street, Peacetown
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Heard about us:</td>
                                    <td>
                                        <div class="q-item" data-q="2">
                                            from a
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="8uQvKzYbHuROu9RJ-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reasons for joining:</td>
                                    <td>
                                        <div class="q-item" data-q="3">
                                            to enter competitions to
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="8uQvKzYbHuROu9RJ-3" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Type of membership:</td>
                                    <td>
                                        <div class="q-item" data-q="4">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="8uQvKzYbHuROu9RJ-4" class="q-text"
                                                placeholder="">
                                            membership (£30)
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-form_completion" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-form_completion">
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
                            <h3>Question 1-6</h3>
                            <p class="lead">Listen and answer questions 1-6</p>

                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-1.mp3">
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
                                    <button class="start-btn" data-start="252" type="button">Start from
                                        here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-6</p>
                            <p>Complete the table below.</p>
                            <p>Write <b>NO MORE THAN TWO WORDS</b> for each answer.</p>
                        </fieldset>

                        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                            <tr>
                                <th colspan="3">
                                    <h1 style="text-align: center">Photography competitions</h1>
                                </th>
                            </tr>
                            <tr>
                                <th><b>Title of competition</b></th>
                                <th><b>Instructions</b></th>
                                <th><b>Feedback to Dan</b></th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="q-item" data-q="1">
                                        '
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-1" class="q-text"
                                            placeholder="">
                                        '
                                    </div>
                                </td>
                                <td>A scene in the home</td>
                                <td>The picture’s composition was not good.</td>
                            </tr>
                            <tr>
                                <td>‘Beautiful Sunsets’</td>
                                <td>
                                    <div class="q-item" data-q="2">
                                        Scene must show some
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-2" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="3">
                                        The 
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-3" class="q-text"
                                            placeholder="">
                                        was wrong.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="q-item" data-q="4">
                                        '
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-4" class="q-text"
                                            placeholder="">
                                        '
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="5">
                                        Scene must show
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-5" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="6">
                                        The photograph was too 
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-6" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div style="text-align: center;">
                            <button type="button" class="btn btn-primary try-again" id="again-tc" style="display: none">
                                Try Again
                            </button>
                            <button type="button" class="btn btn-primary" data-kategori="listening" data-count="6" id="submit-tc">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-2.mp3">
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
                                    Which <b>TWO</b> warnings does Dan give about picking mushrooms?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Don’t pick more than one variety of mushroom at a time.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Don’t pick mushrooms near busy roads.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Don’t eat mushrooms given to you.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Don’t eat mushrooms while picking them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Don’t pick old mushrooms.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-2.mp3">
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
                                        <button class="start-btn" data-start="122" type="button">Start from
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
                                    Which <b>TWO</b> ideas about wild mushrooms does Dan say are correct?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Mushrooms should always be peeled before eating.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Mushrooms eaten by animals may be unsafe.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Cooking destroys toxins in mushrooms.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Brightly coloured mushrooms can be edible.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">All poisonous mushrooms have a bad smell.</span>
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
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-2.mp3">
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
                                        <button class="start-btn" data-start="241" type="button">Start from
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
                                    What advice does Dan give about picking mushrooms in parks?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Choose wooded areas.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Don’t disturb wildlife.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Get there early.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Dan says it is a good idea for beginners to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">use a mushroom app.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">join a group.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">take a reference book.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    What does Dan say is important for conservation?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">selecting only fully grown mushrooms</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">picking a limited amount of mushrooms</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">avoiding areas where rare mushroom species grow</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    According to Dan, some varieties of wild mushrooms are in decline because there is
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">a huge demand for them from restaurants.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">a lack of rain in this part of the country.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">a rise in building developments locally.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    Dan says that when storing mushrooms, people should
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">keep them in the fridge for no more than two days.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">keep them in a brown bag in a dark room.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">leave them for a period after washing them.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    What does Dan say about trying new varieties of mushrooms?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Experiment with different recipes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Expect some to have a strong taste.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="8uQvKzYbHuROu9RJ-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Cook them for a long time.</span>
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
            <div id="panel-mh3" class="x-panel" role="tabpanel" aria-labelledby="tab-mh3" hidden>
                <div class="x-panel-inner">Content: Two Choices 3</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices3">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-3.mp3">
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
                                    Which <b>TWO</b> opinions about the Luddites do the students express?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Their actions were ineffective.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They are still influential today.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They have received unfair criticism.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">They were proved right.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Their attitude is understandable.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-3.mp3">
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
                                        <button class="start-btn" data-start="91" type="button">Start from
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
                                    Which <b>TWO</b> predictions about the future of work are the students doubtful about?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-7[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Work will be more rewarding.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-7[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Unemployment will fall.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-7[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">People will want to delay retiring.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-7[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Working hours will be shorter.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="8uQvKzYbHuROu9RJ-7[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">People will change jobs more frequently.</span>
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
            <div id="panel-matching" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-3.mp3">
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
                                        <button class="start-btn" data-start="186" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-6</h3>
                                <p>What comment do the students make about each of the following jobs?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Comments</h3>
                                <p><b>A</b> These jobs are likely to be at risk.</p>
                                <p><b>B</b> Their role has become more interesting in recent years.</p>
                                <p><b>C</b> The number of people working in this sector has fallen dramatically.</p>
                                <p><b>D</b> This job will require more qualifications.</p>
                                <p><b>E</b> Higher disposable income has led to a huge increase in jobs.</p>
                                <p><b>F</b> There is likely to be a significant rise in demand for this service.</p>
                                <p><b>G</b> Both employment and productivity have risen.</p>
                            </fieldset>

                            <p><b>Jobs</b></p>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Accountants  
                                        <span class="q-question">
                                            <select name="8uQvKzYbHuROu9RJ-1" class="q-dropdown">
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
                                        Hairdressers   
                                        <span class="q-question">
                                            <select name="8uQvKzYbHuROu9RJ-2" class="q-dropdown">
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
                                        Administrative staff  
                                        <span class="q-question">
                                            <select name="8uQvKzYbHuROu9RJ-3" class="q-dropdown">
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
                                        Agricultural workers
                                        <span class="q-question">
                                            <select name="8uQvKzYbHuROu9RJ-4" class="q-dropdown">
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
                                        Care workers
                                        <span class="q-question">
                                            <select name="8uQvKzYbHuROu9RJ-5" class="q-dropdown">
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
                                        Bank clerks  
                                        <span class="q-question">
                                            <select name="8uQvKzYbHuROu9RJ-6" class="q-dropdown">
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
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-10</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-4.mp3">
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
                                    <button class="start-btn" data-start="74" type="button">Start from
                                        here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-10</p>
                            <p>Complete the notes below.</p>
                            <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Space Traffic Management</h3>

                            <p><b>A Space Traffic Management system</b></p>
                            <ul>
                                <li>is a concept similar to Air Traffic Control, but for satellites rather than planes.</li>
                                <li>
                                    <div class="q-list" data-q="1">
                                        would aim to set up legal and
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-1" class="q-text"
                                            placeholder="">
                                        ways of improving safety.
                                    </div>
                                </li>
                                <li>does not actually exist at present.</li>
                            </ul>

                            <p>Problems in developing effective Space Traffic Management</p>
                            <ul>
                                <li>
                                    Satellites are now quite
                                    <span class="q-number-box">2</span>
                                    <span style="flex: 1;">
                                        <span class="q-question">
                                            <input type="text" name="8uQvKzYbHuROu9RJ-2" class="q-text" placeholder="">
                                        </span>
                                    </span>
                                    and therefore more widespread (e.g. there are constellations made up of
                                    <span class="q-number-box">3</span>
                                    <span style="flex: 1;">
                                        <span class="q-question">
                                            <input type="text" name="8uQvKzYbHuROu9RJ-3" class="q-text" placeholder="">
                                        </span>
                                    </span>
                                    of satellites).
                                </li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        At present, satellites are not required to transmit information to help with their
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-4" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="5">
                                        There are few systems for
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-5" class="q-text"
                                            placeholder="">
                                        satellites.
                                    </div>
                                </li>
                                <li>Small pieces of debris may be difficult to identify.</li>
                                <li>
                                    <div class="q-list" data-q="6">
                                        Operators may be unwilling to share details of satellites used for
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-6" class="q-text"
                                            placeholder="">
                                        or commercial reasons.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="7">
                                        It may be hard to collect details of the object’s 
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-7" class="q-text"
                                            placeholder="">
                                        at a given time.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        Scientists can only make a
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-8" class="q-text"
                                            placeholder="">
                                        about where the satellite will go.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Solutions</b></p>
                            <ul>
                                <li>Common standards should be agreed on for the presentation of information.</li>
                                <li>
                                    <div class="q-list" data-q="9">
                                        The information should be combined in one
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-9" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="10">
                                        A coordinated system must be designed to create 
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="8uQvKzYbHuROu9RJ-10" class="q-text"
                                            placeholder="">
                                        in its users.
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
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @include('ielts.sets.layouts.practice.listening_reading.components')
    @include('ielts.sets.layouts.practice.listening_reading.script')
    <script>
        $("#submit-form_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-form_completion", "8uQvKzYbHuROu9RJ", "form_completion", $(this), "again-form_completion", "Form Completion");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "8uQvKzYbHuROu9RJ", "tc", $(this), "again-tc", "Table Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "8uQvKzYbHuROu9RJ", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "8uQvKzYbHuROu9RJ", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "8uQvKzYbHuROu9RJ", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-two_choices3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices3", "8uQvKzYbHuROu9RJ", "two_choices", $(this), "again-two_choices3", "Two Choices");
        });

        $("#submit-two_choices4").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices4", "8uQvKzYbHuROu9RJ", "two_choices", $(this), "again-two_choices4", "Two Choices");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "8uQvKzYbHuROu9RJ", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-nc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc", "8uQvKzYbHuROu9RJ", "nc", $(this), "again-nc", "Note Completion");
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
                    'tfng': 4,
                    'tc': 6,
                    'mh': 2,
                    'mh2': 2,
                    'one': 6,
                    'mh3': 2,
                    'mh4': 2,
                    'matching': 6,
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
