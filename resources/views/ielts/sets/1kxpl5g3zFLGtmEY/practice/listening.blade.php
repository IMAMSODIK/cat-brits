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
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-matching2" aria-controls="panel-matching2" aria-selected="false"
                data-id="matching2">Matching 2</button>
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
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-1.mp3">
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
                                        <button class="start-btn" data-start="89" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p>Complete the form below.</p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0"
                                style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2"><h3>CRIME REPORT FORM</h3></th>
                                </tr>
                                <tr>
                                    <td><b>Type of crime:</b></td>
                                    <td>theft</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><i>Example</i></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>Louise <i>…Taylor…</i></td>
                                </tr>
                                <tr>
                                    <td><b>Nationality</b></td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of birth</td>
                                    <td>14 December 1977</td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>interior designer</td>
                                </tr>
                                <tr>
                                    <td>Reason for visit</td>
                                    <td>
                                        <div class="q-item" data-q="2">
                                            business (to buy antique
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-2" class="q-text"
                                                placeholder="">
                                            )
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Length of stay</td>
                                    <td>two months</td>
                                </tr>
                                <tr>
                                    <td>Current address</td>
                                    <td>
                                        <div class="q-item" data-q="3">
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-3" class="q-text"
                                                placeholder="">
                                            Apartments (No 15)
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Details of theft</b></td>
                                </tr>
                                <tr>
                                    <td>Items stolen</td>
                                    <td>
                                        <div class="q-item" data-q="4">
                                            – a wallet containing approximately £
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-4" class="q-text"
                                                placeholder="">
                                        </div>
                                        <div class="q-item" data-q="5">
                                            – a
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of theft</td>
                                    <td>
                                        <div class="q-item" data-q="6">
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-6" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Possible time and place of theft</b></td>
                                </tr>
                                <tr>
                                    <td>Location </td>
                                    <td>
                                        <div class="q-item" data-q="7">
                                            outside the
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-7" class="q-text"
                                                placeholder="">
                                            at about 4 pm
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Details of suspect</td>
                                    <td>
                                        <div class="q-item" data-q="8">
                                            – some boys asked for the
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-8" class="q-text"
                                                placeholder="">
                                            then ran off
                                        </div>
                                        <br>
                                        – one had a T-shirt with a picture of a tiger
                                        <br>
                                        <div class="q-item" data-q="9">
                                            – he was about 12, slim build with
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-9" class="q-text"
                                                placeholder="">
                                            hair
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Crime reference number allocated</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-q="10">
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="1kxpl5g3zFLGtmEY-10" class="q-text"
                                                placeholder="">
                                        </div>
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
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="48" type="button">Start from
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
                                    Which <b>TWO</b> pieces of advice for the first week of an apprenticeship does the manager give?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">get to know colleagues</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">learn from any mistakes</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">ask lots of questions</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">react positively to feedback</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">enjoy new challenges</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="125" type="button">Start from
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
                                    Which <b>TWO</b> things does the manager say mentors can help with?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">confidence-building</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">making career plans</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">completing difficult tasks</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">making a weekly timetable</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="1kxpl5g3zFLGtmEY-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">reviewing progress</span>
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
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="210" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>What does the manager say about each of the following aspects of the company policy for apprentices?</p>
                                <p>Write the correct letter, <b>A</b>, <b>B</b> or <b>C</b>, next to Questions.</p>

                                <strong>A</strong>&nbsp;&nbsp; It is encouraged. <br>
                                <strong>B</strong>&nbsp;&nbsp; There are some restrictions.<br>
                                <strong>C</strong>&nbsp;&nbsp; It is against the rules.
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Company policy for apprentices</h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Using the internet
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-1" class="q-dropdown">
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
                                        Flexible working
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-2" class="q-dropdown">
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
                                        Booking holidays
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-3" class="q-dropdown">
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
                                        Working overtime
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-4" class="q-dropdown">
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
                                        Wearing trainers
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-5" class="q-dropdown">
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
                                        Bringing food to work
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-6" class="q-dropdown">
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
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-3.mp3">
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
                                        <button class="start-btn" data-start="68" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Cities built by the sea</h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Carla and Rob were surprised to learn that coastal cities
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">contain nearly half the world’s population.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">include most of the world’s largest cities.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">are growing twice as fast as other cities.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    According to Rob, building coastal cities near to rivers
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">may bring pollution to the cities.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">may reduce the land available for agriculture.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">may mean the countryside is spoiled by industry.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    What mistake was made when building water drainage channels in Miami in the 1950s?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">There were not enough for them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They were made of unsuitable materials.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They did not allow for the effects of climate change.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What do Rob and Carla think that the authorities in Miami should do immediately?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">take measures to restore ecosystems</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">pay for a new flood prevention system</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">stop disposing of waste materials into the ocean</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    What do they agree should be the priority for international action?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">greater coordination of activities</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">more sharing of information</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="1kxpl5g3zFLGtmEY-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">agreement on shared policies</span>
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
            <div id="panel-matching2" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information2" hidden>
                <div class="x-panel-inner">Content: Matching 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-5</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-3.mp3">
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
                                        <button class="start-btn" data-start="278" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p>What decision do the students make about each of the following parts of their presentation?</p>
                                <p>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions.</p>
                                <p><b>Decisions</b></p>

                                <strong>A</strong>&nbsp;&nbsp; use visuals<br>
                                <strong>B</strong>&nbsp;&nbsp; keep it short<br>
                                <strong>C</strong>&nbsp;&nbsp; involve other students<br>
                                <strong>D</strong>&nbsp;&nbsp; check the information is accurate<br>
                                <strong>E</strong>&nbsp;&nbsp; provide a handout<br>
                                <strong>F</strong>&nbsp;&nbsp; focus on one example<br>
                                <strong>G</strong>&nbsp;&nbsp; do online research<br>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Parts of the presentation</h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Historical background
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-7" class="q-dropdown">
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
                                        Geographical factors
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-8" class="q-dropdown">
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
                                        Past mistakes
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-9" class="q-dropdown">
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
                                        Future risks
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-10" class="q-dropdown">
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
                                        International implications
                                        <span class="q-question">
                                            <select name="1kxpl5g3zFLGtmEY-11" class="q-dropdown">
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
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc2">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-10</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-4.mp3">
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
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Marine renewable energy (ocean energy)</b></p>
                            <p><i>Introduction</i></p>
                            <p>
                                More energy required because of growth in population and
                                <span class="q-number-box">1</span>
                                <input type="text" name="1kxpl5g3zFLGtmEY-11" class="q-text"
                                    placeholder="">
                            </p>

                            <p>What’s needed:</p>
                            <ul>
                                <li>renewable energy sources</li>
                                <li>methods that won’t create pollution</li>
                            </ul>

                            <p><b>Wave energy</b></p>
                            <p>
                                Advantage: waves provide a 
                                <span class="q-number-box">2</span>
                                <input type="text" name="1kxpl5g3zFLGtmEY-12" class="q-text"
                                    placeholder="">
                                source of renewable energy
                            </p>
                            <p>Electricity can be generated using offshore or onshore systems</p>
                            <p>Onshore systems may use a reservoir</p>
                            
                            <p><b>Problems:</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="3">
                                        waves can move in any
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-13" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        movement of sand, etc. on the
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-14" class="q-text"
                                            placeholder="">
                                        of the ocean may be affected
                                    </div>
                                </li>
                            </ul>

                            <p><b>Tidal energy</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="5">
                                        Tides are more
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-15" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p>Planned tidal lagoon in Wales:</p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="6">
                                        will be created in a
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-16" class="q-text"
                                            placeholder="">
                                        at Swansea
                                    </div>
                                </li>
                                <li>breakwater (dam) containing 16 turbines</li>
                                <li>rising tide forces water through turbines, generating electricity</li>
                                <li>
                                    <div class="q-list" data-q="7">
                                        stored water is released through
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-17" class="q-text"
                                            placeholder="">
                                        , driving the turbines in the reverse direction
                                    </div>
                                </li>
                            </ul>

                            <p><b>Advantages:</b></p>
                            <ul>
                                <li>not dependent on weather</li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        no
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-18" class="q-text"
                                            placeholder="">
                                        is required to make it work
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="9">
                                        likely to create a number of
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-19" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Problem:</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="10">
                                        may harm fish and birds, e.g. by affecting
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="1kxpl5g3zFLGtmEY-20" class="q-text"
                                            placeholder="">
                                        and building up silt
                                    </div>
                                </li>
                            </ul>

                            <p><b>Ocean thermal energy conversion</b></p>
                            <p>Uses a difference in temperature between the surface and lower levels</p>
                            <p>Water brought to the surface in a pipe</p>
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
            submitHelper("form-nc", "1kxpl5g3zFLGtmEY", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "1kxpl5g3zFLGtmEY", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "1kxpl5g3zFLGtmEY", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "1kxpl5g3zFLGtmEY", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-matching_information2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information2", "1kxpl5g3zFLGtmEY", "matching_information", $(this), "again-matching_information2", "Matching Information");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "1kxpl5g3zFLGtmEY", "nc", $(this), "again-nc2", "Note Completion");
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
                    'mh': 2,
                    'mh2': 2,
                    'matching': 6,
                    'one': 5,
                    'matching2': 5,
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
