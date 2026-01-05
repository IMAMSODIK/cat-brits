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
        #panel-tc .q-number-box,
        #panel-tc2 .q-number-box {
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
        #panel-nc .q-text,
        #panel-tfng2 .q-text,
        #panel-ynng .q-text,
        #panel-mse .q-text,
        #panel-tc .q-text,
        #panel-tc2 .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 120px;
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
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-tc2" aria-controls="panel-tc2" aria-selected="false"
                data-id="tc2">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-matching2" aria-controls="panel-matching2" aria-selected="false"
                data-id="matching2">Matching 2</button>
            <button class="x-tab" role="tab" id="tab-nc" aria-controls="panel-nc" aria-selected="false"
                data-id="nc">Note Completion 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc">
                        <fieldset class="q-item">
                            <h3>Question 1-6</h3>
                            <p class="lead">Listen and answer questions 1-2</p>

                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-1.mp3">
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
                                    <button class="start-btn" data-start="93" type="button">Start from
                                        here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-6</p>
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                        </fieldset>

                        <h3 style="text-align: center">First day at work</h3>
                        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                            <tr>
                                <td>Name of supervisor</td>
                                <td>
                                    <div class="q-item" data-q="1">
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-1" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Where to leave coat and bag:</td>
                                <td>
                                    <div class="q-item" data-q="2">
                                        use 
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-2" class="q-text"
                                            placeholder="">
                                        in staffroom
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>See Tiffany in HR:</td>
                                <td>
                                    <div class="q-item" data-q="3">
                                        to give
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-3" class="q-text"
                                            placeholder="">
                                    </div>
                                    <div class="q-item" data-q="4">
                                        number to collect
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-4" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Location of HR office:</td>
                                <td>
                                    <div class="q-item" data-q="5">
                                        on
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-5" class="q-text"
                                            placeholder="">
                                        floor
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Supervisor’s mobile number:</td>
                                <td>
                                    <div class="q-item" data-q="6">
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-6" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                            </tr>
                        </table>

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
            <div id="panel-tc2" class="x-panel" role="tabpanel" aria-labelledby="tab-tc2" hidden>
                <div class="x-panel-inner">Content: Table Completion 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-tc2">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-4</p>

                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-1.mp3">
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
                                    <button class="start-btn" data-start="264" type="button">Start from
                                        here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-4</p>
                            <p><i>Complete the table below.</i></p>
                            <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                        </fieldset>

                        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                            <tr>
                                <th colspan="4">Responsibilities</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th><b>Task 1</b></th>
                                <th><b>Task 2</b></th>
                                <th><b>Notes</b></th>
                            </tr>
                            <tr>
                                <td>Bakery section</td>
                                <td>Check sell by dates</td>
                                <td>Change price labels</td>
                                <td>
                                    <div class="q-item" data-q="1">
                                        Use 
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-1" class="q-text"
                                            placeholder="">
                                        labels
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sushi takeaway counter</td>
                                <td>
                                    <div class="q-item" data-q="2">
                                        Re-stock with
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-2" class="q-text"
                                            placeholder="">
                                        boxes if needed
                                    </div>
                                </td>
                                <td>Wipe preparation area and clean the sink</td>
                                <td>Do not clean any knives</td>
                            </tr>
                            <tr>
                                <td>Meat and fish counters</td>
                                <td>Clean the serving area, including the weighing scales</td>
                                <td>
                                    <div class="q-item" data-q="3">
                                        Collect 
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-3" class="q-text"
                                            placeholder="">
                                        for the fish from the cold-room
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="4">
                                        Must wear special
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="IgWhHunhjhOYd3hb-4" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div style="text-align: center;">
                            <button type="button" class="btn btn-primary try-again" id="again-tc2" style="display: none">
                                Try Again
                            </button>
                            <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-tc2">
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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-2-.mp3">
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
                                        <button class="start-btn" data-start="44" type="button">Start from
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
                                    Which <b>TWO</b> problems with some training programmes for new runners does Liz mention?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">There is a risk of serious injury.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They are unsuitable for certain age groups.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They are unsuitable for people with health issues.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">It is difficult to stay motivated.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">There is a lack of individual support.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-2-.mp3">
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
                                        <button class="start-btn" data-start="104" type="button">Start from
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
                                    Which <b>TWO</b> tips does Liz recommend for new runners?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">doing two runs a week</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">running in the evening</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">going on runs with a friend</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">listening to music during runs</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="IgWhHunhjhOYd3hb-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">running very slowly</span>
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
                                <p class="lead">Listen and answer questions 1-4</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-2-.mp3">
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
                                        <button class="start-btn" data-start="205" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-3</h3>
                                <p>What reason prevented each of the following members of the Compton Park Runners Club from joining until recently? Write the correct letter, <b>A</b>, <b>B</b>, or <b>C</b>.</p>
                                <h3>Reasons</h3>
                                <p><b>A</b>. a lack of confidence</p>
                                <p><b>B</b>. a dislike of running</p>
                                <p><b>C</b>. a lack of time</p>
                            </fieldset>

                            <p><b>Club members</b></p>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Ceri  
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-1" class="q-dropdown">
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
                                        James   
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-2" class="q-dropdown">
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
                                        Leo   
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-3" class="q-dropdown">
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
                                        Mark
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-4" class="q-dropdown">
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
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-matching_information">
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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-2-.mp3">
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
                                        <button class="start-btn" data-start="304" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-2</p>
                                <p><i>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</i></p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    What does Liz say about running her first marathon?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It had always been her ambition.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Her husband persuaded her to do it.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">She nearly gave up before the end.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Liz says new runners should sign up for a race
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">every six months.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">within a few weeks of taking up running.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">after completing several practice runs.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="2" id="submit-oc">
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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="56" type="button">Start from
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
                                    Kieran thinks the packing advice given by Jane’s grandfather is
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">common sense.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">hard to follow.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">over-protective.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    How does Jane feel about the books her grandfather has given her?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">They are not worth keeping.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They should go to a collector.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They have sentimental value for her.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Jane and Kieran agree that hardback books should be
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">put out on display.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">given as gifts to visitors.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">more attractively designed.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    While talking about taking a book from a shelf, Jane
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">describes the mistakes other people make doing it.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">reflects on a significant childhood experience.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">explains why some books are easier to remove than others.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    What do Jane and Kieran suggest about new books?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Their parents liked buying them as presents.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They would like to buy more of them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="IgWhHunhjhOYd3hb-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Not everyone can afford them.</span>
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
            <div id="panel-matching2" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information2" hidden>
                <div class="x-panel-inner">Content: Matching 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-3.mp3">
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
                                        <button class="start-btn" data-start="290" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 1-5</h3>
                                <p>Where does Jane’s grandfather keep each of the following types of books in his shop?</p>
                                <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>.</i></p>
                                <h3>Location of books</h3>
                                <p><b>A</b> near the entrance</p>
                                <p><b>B</b> in the attic</p>
                                <p><b>C</b> at the back of the shop</p>
                                <p><b>D</b> on a high shelf</p>
                                <p><b>E</b> near the stairs</p>
                                <p><b>F</b> in a specially designed space</p>
                                <p><b>G</b> within the cafe</p>
                            </fieldset>

                            <p><b>Types of books</b></p>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        rare books
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-4" class="q-dropdown">
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
                                        children’s books
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-5" class="q-dropdown">
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
                                        unwanted books
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-6" class="q-dropdown">
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
                                        requested books
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-7" class="q-dropdown">
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
                                        coursebooks
                                        <span class="q-question">
                                            <select name="IgWhHunhjhOYd3hb-8" class="q-dropdown">
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
            <div id="panel-nc" class="x-panel" role="tabpanel" aria-labelledby="tab-nc" hidden>
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-4.mp3">
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
                                <p><i>Complete the notes below.</i></p>
                                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3 style="text-align: center">Tree planting</h3>
                                <p><b>Reforestation projects should:</b></p>

                                <p>– include a range of tree species</p>
                                <p>
                                    – not include invasive species because of possible
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-7" class="q-text" placeholder="">
                                    with native species
                                </p>
                                <p>
                                    – aim to capture carbon, protect the environment and provide sustainable sources of
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-8" class="q-text" placeholder="">
                                    for local people
                                </p>
                                <p>
                                    – use tree seeds with a high genetic diversity to increase resistance to
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-9" class="q-text" placeholder="">
                                    and climate change
                                </p>
                                <p>
                                    – plant trees on previously forested land which is in a bad condition, not select land which is being used for
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-10" class="q-text" placeholder="">
                                </p>

                                <p><b>Large-scale reforestation projects</b></p>
                                <p>
                                    – Base planning decisions on information from accurate
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-11" class="q-text" placeholder="">
                                </p>
                                <p>
                                    – Drones are useful for identifying areas in Brazil which are endangered by keeping
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-12" class="q-text" placeholder="">
                                    and illegal logging.
                                </p>

                                <p><b>Lampang Province, Northern Thailand</b></p>
                                <p>– A forest was restored in an area damaged by mining.</p>
                                <p>– A variety of native fig trees were planted, which are important for</p>
                                <p>+ supporting many wildlife species</p>
                                <p>
                                    + increasing the 
                                    <span class="q-number-box">7</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-13" class="q-text" placeholder="">
                                    of recovery by attracting animals and birds, e.g.,
                                    <span class="q-number-box">8</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-14" class="q-text" placeholder="">
                                    were soon attracted to the area.
                                </p>

                                <p><b>Involving local communities</b></p>
                                <p>
                                    – Destruction of mangrove forests in Madagascar made it difficult for people to make a living from
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-15" class="q-text" placeholder="">
                                </p>
                                <p>– The mangrove reforestation project:</p>
                                <p>+ provided employment for local people</p>
                                <p>+ restored a healthy ecosystem</p>
                                <p>
                                    + protects against the higher risk of
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="IgWhHunhjhOYd3hb-16" class="q-text" placeholder="">
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
            submitHelper("form-nc", "IgWhHunhjhOYd3hb", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-tc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc2", "IgWhHunhjhOYd3hb", "tc", $(this), "again-tc2", "Table Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "IgWhHunhjhOYd3hb", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "IgWhHunhjhOYd3hb", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "IgWhHunhjhOYd3hb", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "IgWhHunhjhOYd3hb", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "IgWhHunhjhOYd3hb", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-matching_information2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information2", "IgWhHunhjhOYd3hb", "matching_information", $(this), "again-matching_information2", "Matching Information");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "IgWhHunhjhOYd3hb", "nc", $(this), "again-nc2", "Matching Information");
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
                    'tc2': 4,
                    'mh': 2,
                    'mh2': 2,
                    'matching': 4,
                    'one': 2,
                    'one2': 5,
                    'matching2': 5,
                    'nc': 10,
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
