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
            <button class="x-tab" role="tab" id="tab-tc" aria-controls="panel-tc" aria-selected="false"
                data-id="tc">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Note Completion 2</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Note Completion 3</button>
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Note Completion 4</button>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3">
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
                                <p><i>Write <b>ONE WORD</b> for each answer.</i></p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0"
                                style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2">SELF-DRIVE TOURS IN THE USA</th>
                                </tr>
                                <tr>
                                    <td colspan="2"><i>Example</i></td>
                                </tr>
                                <tr>
                                    <td><b>Name:</b></td>
                                    <td><b>Andrea </b><i>......Brown.....</i></td>
                                </tr>
                                <tr>
                                    <td><b>Address:</b></td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            24
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="XJ3XOcvqPbgdZwyl-1" class="q-text"
                                                placeholder="">
                                            road
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Postcode:</b></td>
                                    <td>BH5 2OP</td>
                                </tr>
                                <tr>
                                    <td><b>Phone:</b></td>
                                    <td>(mobile) 077 8664 3091</td>
                                </tr>
                                <tr>
                                    <td><b>Heard about company from:</b></td>
                                    <td>
                                        <div class="q-item" data-q="2">
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Possible self-drive tours</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Trip One:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="3">
                                                    Los Angeles: customer wants to visit some
                                                    <span class="q-number-box">3</span>
                                                    <input type="text" name="XJ3XOcvqPbgdZwyl-3" class="q-text"
                                                        placeholder="">
                                                    parks with her children
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-item" data-q="4">
                                                    Yosemite Park: customer wants to stay in a lodge, not a
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="XJ3XOcvqPbgdZwyl-4" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Trip Two:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="5">
                                                    Customer wants to see the
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="XJ3XOcvqPbgdZwyl-5" class="q-text"
                                                        placeholder="">
                                                    on the way to Cambria
                                                </div>
                                            </li>
                                            <li>At Santa Monica: not interested in shopping</li>
                                            <li>
                                                Yosemite Park: customer wants to stay in a lodge, not a
                                                <div class="q-item" data-q="6">
                                                    At San Diego, wants to spend time on the
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="XJ3XOcvqPbgdZwyl-6" class="q-text"
                                                        placeholder="">
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3">
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
                            <p>Questions 1-4</p>
                            <p>Complete the table below.</p>
                            <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                        </fieldset>

                        <table border="1" cellpadding="8" cellspacing="0"
                            style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                            <tr>
                                <th></th>
                                <th><b>Number of days</b></th>
                                <th><b>Total distance</b></th>
                                <th><b>Price (per person)</b></th>
                                <th><b>Includes</b></th>
                            </tr>
                            <tr>
                                <th><b>Trip One</b></th>
                                <td>12 days</td>
                                <td>
                                    <div class="q-item" data-q="1">
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-1" class="q-text"
                                            placeholder="">
                                        km
                                    </div>
                                </td>
                                <td>£525</td>
                                <td>
                                    <ul>
                                        <li>accommodation</li>
                                        <li>car</li>
                                        <li>
                                            <div class="q-item" data-q="2">
                                                one
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                    placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th><b>Trip Two</b></th>
                                <td>9 days</td>
                                <td>
                                    980 km
                                </td>
                                <td>
                                    <div class="q-item" data-q="3">
                                        £
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-3" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                                <td>
                                    <ul>
                                        <li>accommodation</li>
                                        <li>car</li>
                                        <li>
                                            <div class="q-item" data-q="4">
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-4" class="q-text"
                                                    placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                </td>
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
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="30" type="button">Start from
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
                                    Which TWO facilities at the leisure club have recently been improved?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="XJ3XOcvqPbgdZwyl-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the gym</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XJ3XOcvqPbgdZwyl-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the tracks</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XJ3XOcvqPbgdZwyl-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the indoor pool</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XJ3XOcvqPbgdZwyl-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">the outdoor pool</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="XJ3XOcvqPbgdZwyl-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">the sports training for children</span>
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
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc2">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-8</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-2.mp3">
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
                            <p>Questions 1-8</p>
                            <p>Complete the notes below.</p>
                            <p>Write <b>NO MORE THEN TWO WORDS</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Joining the leisure club</b></p>
                            <p><i>Personal Assessment</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="1">
                                        New members should describe any
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-7" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="2">
                                        The
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-8" class="q-text"
                                            placeholder="">
                                        will be explained to you before you use the equipment.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="3">
                                        You will be given a six-week
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-9" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><i>Types of membership</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="4">
                                        There is a compulsory £90
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-10" class="q-text"
                                            placeholder="">
                                        fee for members.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="5">
                                        Gold members are given
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-11" class="q-text"
                                            placeholder="">
                                        to all the LP clubs.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="6">
                                        Premier members are given priority during
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-12" class="q-text"
                                            placeholder="">
                                        hours.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="7">
                                        Premier members can bring some
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-13" class="q-text"
                                            placeholder="">
                                        every month.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        Members should always take their
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-14" class="q-text"
                                            placeholder="">
                                        with them.
                                    </div>
                                </li>
                            </ul>
                        </fieldset>

                        <div style="text-align: center;">
                            <button type="button" class="btn btn-primary try-again" id="again-nc2" style="display: none">
                                Try Again
                            </button>
                            <button type="button" class="btn btn-primary" data-kategori="listening" data-count="8" id="submit-nc2">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-3.mp3">
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
                                <h3><b>Global Design Competition</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Students entering the design competition have to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">produce an energy-efficient design.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">adapt an existing energy-saving appliance.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">develop a new use for current technology.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    John chose a dishwasher because he wanted to make dishwashers
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">more appealing.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">more common.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">more economical.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    The stone in John’s ‘Rockpool’ design is used
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">for decoration.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to switch it on.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to stop water escaping.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    In the holding chamber, the carbon dioxide
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">changes back to a gas.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">dries the dishes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">is allowed to cool.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    At the end of the cleaning process, the carbon dioxide
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">is released into the air.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">is disposed of with the waste.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">is collected ready to be re-used.</span>
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
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Note Completion 3</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc3">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-5</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-3.mp3">
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
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <ul>
                                <li>
                                    <div class="q-list" data-q="1">
                                        John needs help preparing for his
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-15" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="2">
                                        The professor advises John to make a
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-16" class="q-text"
                                            placeholder="">
                                        of his design.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="3">
                                        John’s main problem is getting good quality
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-17" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        The professor suggests John apply for a
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-18" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="5">
                                        The professor will check the
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-19" class="q-text"
                                            placeholder="">
                                        information in John’s written report.
                                    </div>
                                </li>
                            </ul>
                        </fieldset>

                        <div style="text-align: center;">
                            <button type="button" class="btn btn-primary try-again" id="again-nc3" style="display: none">
                                Try Again
                            </button>
                            <button type="button" class="btn btn-primary" data-kategori="listening" data-count="5" id="submit-nc3">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Content: Note Completion 4</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc4">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-10</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-4.mp3">
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
                                    <button class="start-btn" data-start="90" type="button">Start from here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-10</p>
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3><b>THE SPIRIT BEAR</b></h3>
                            <p><b>General facts</b></p>
                            <ul>
                                <li>It is a white bear belonging to the black bear family.</li>
                                <li>
                                    <div class="q-list" data-q="1">
                                        Its colour comes from an uncommon
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-20" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="2">
                                        Local people believe that it has unusual
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-21" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="3">
                                        They protect the bear from
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-22" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Habitat</b></p>
                            <ul>
                                <li>The bear’s relationship with the forest is complex.</li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        Tree roots stop
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-23" class="q-text"
                                            placeholder="">
                                        along salmon streams.
                                    </div>
                                </li>
                                <li>The bears’ feeding habits provide nutrients for forest vegetation.</li>
                                <li>
                                    <div class="q-list" data-q="5">
                                        It is currently found on a small number of
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-24" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Threats</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="6">
                                        Habitat is being lost due to deforestation and construction of
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-25" class="q-text"
                                            placeholder="">
                                        by logging companies.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="7">
                                        Unrestricted
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-26" class="q-text"
                                            placeholder="">
                                        is affecting the salmon supply.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        The bears’ existence is also threatened by their low rate of
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-27" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Going forward</b></p>
                            <ul>
                                <li>Interested parties are working together.</li>
                                <li>
                                    <div class="q-list" data-q="9">
                                        Logging companies must improve their
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-28" class="q-text"
                                            placeholder="">
                                        by logging companies.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="10">
                                        Maintenance and
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="XJ3XOcvqPbgdZwyl-29" class="q-text"
                                            placeholder="">
                                        of the spirit bears’ territory is needed.
                                    </div>
                                </li>
                            </ul>
                        </fieldset>

                        <div style="text-align: center;">
                            <button type="button" class="btn btn-primary try-again" id="again-nc4" style="display: none">
                                Try Again
                            </button>
                            <button type="button" class="btn btn-primary" data-kategori="listening" data-count="10" id="submit-nc4">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    @include('ielts.sets.layouts.practice.listening_reading.components')
    @include('ielts.sets.layouts.practice.listening_reading.script')

    {{-- fungsi untuk submit --}}
    <script>
        $("#submit-nc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc", "XJ3XOcvqPbgdZwyl", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "XJ3XOcvqPbgdZwyl", "nc", $(this), "again-nc2", "Note Completion");
        });

        $("#submit-nc3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc3", "XJ3XOcvqPbgdZwyl", "nc", $(this), "again-nc3", "Note Completion");
        });

        $("#submit-nc4").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc4", "XJ3XOcvqPbgdZwyl", "nc", $(this), "again-nc4", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "XJ3XOcvqPbgdZwyl", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "XJ3XOcvqPbgdZwyl", "tc", $(this), "again-tc", "Table Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "XJ3XOcvqPbgdZwyl", "two_choices", $(this), "again-two_choices", "Two Choices");
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
                    'tc': 4,
                    'mh': 2,
                    'tfng2': 8,
                    'one': 5,
                    'ynng': 5,
                    'mse': 10,
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
