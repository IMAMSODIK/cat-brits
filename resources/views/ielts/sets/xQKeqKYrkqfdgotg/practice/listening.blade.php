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
        #panel-nc .q-text,
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
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-mh2" aria-controls="panel-mh2" aria-selected="false"
                data-id="mh2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-mh3" aria-controls="panel-mh3" aria-selected="false"
                data-id="mh3">Two Choices 3</button>
            <button class="x-tab" role="tab" id="tab-mh5" aria-controls="panel-mh5" aria-selected="false"
                data-id="mh5">Two Choices 4</button>
            <button class="x-tab" role="tab" id="tab-mh6" aria-controls="panel-mh6" aria-selected="false"
                data-id="mh6">Two Choices 5</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-nc" aria-controls="panel-nc" aria-selected="false"
                data-id="nc">Note Completion 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc">
                        <fieldset class="q-item">
                            <h3>Question 1-10</h3>
                            <p class="lead">Listen and answer questions 1-10</p>

                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-1.mp3">
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
                                    <button class="start-btn" data-start="95" type="button">Start from
                                        here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-10</p>
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                        </fieldset>

                        <h3>Restaurant Recommendations</h3>
                        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                            <tr>
                                <th><b>Name of restaurant</b></th>
                                <th><b>Location</b></th>
                                <th><b>Reason for recommendation</b></th>
                                <th><b>Other comments</b></th>
                            </tr>
                            <tr>
                                <td>The Junction</td>
                                <td>Greyson Street, near the station</td>
                                <td>
                                    <div class="q-item" data-q="1">
                                        Good for people who are especially keen on
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-1" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="2">
                                        Quite expensive The 
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-2" class="q-text"
                                            placeholder="">
                                        is a good place for a drink
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Paloma</td>
                                <td>In Bow Street next to the cinema</td>
                                <td>
                                    <div class="q-item" data-q="3">
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-3" class="q-text"
                                            placeholder="">
                                        food, good for sharing
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="4">
                                        Staff are very friendly Need to pay £50 deposit A limited selection of 
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-4" class="q-text"
                                            placeholder="">
                                        food on the menu
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="q-item" data-q="5">
                                        The 
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-5" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="6">
                                        At the top of a
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-6" class="q-text"
                                            placeholder="">
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="7">
                                        A famous chef <br>All the
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-7" class="q-text"
                                            placeholder="">
                                        are very good <br>Only uses
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-8" class="q-text"
                                            placeholder="">
                                        ingredients
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-q="9">
                                        Set lunch costs £
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-9" class="q-text"
                                            placeholder="">
                                        per person <br> Portions probably of 
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="xQKeqKYrkqfdgotg-10" class="q-text"
                                            placeholder="">
                                        size
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
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="73" type="button">Start from
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
                                    Heather says pottery differs from other art forms because
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It lasts longer in the ground.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It is practised by more people.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It can be repaired more easily.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Archaeologists sometimes identify the use of ancient pottery from
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">The clay it was made with.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The marks that are on it.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">The basic shape of it.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    Some people join Heather’s pottery class because they want to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Create an item that looks very old.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Find something that they are good at.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Make something that will outlive them.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What does Heather value most about being a potter?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Its calming effect</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Its messy nature</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Its physical benefits</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    Most of the visitors to Edelman Pottery
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Bring friends to join courses.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Have never made a pot before.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Try to learn techniques too quickly.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    Heather reminds her visitors that they should
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Put on their aprons.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Change their clothes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Take off their jewellery.</span>
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
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-2.mp3">
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
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which <b>TWO</b> things does Heather explain about kilns?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">What their function is</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">When they were invented</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Ways of keeping them safe</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Where to put one in your home</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">What some people use instead of one</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-2.mp3">
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
                                        <button class="start-btn" data-start="422" type="button">Start from
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
                                    Which points does Heather make about a potter’s tools?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Mushrooms should always be peeled before eating.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Mushrooms eaten by animals may be unsafe.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Cooking destroys toxins in mushrooms.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Brightly coloured mushrooms can be edible.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-3[]" value="E" />
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
            <div id="panel-mh3" class="x-panel" role="tabpanel" aria-labelledby="tab-mh3" hidden>
                <div class="x-panel-inner">Content: Two Choices 3</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices3">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-3.mp3">
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
                                <p>Questions 1-2</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which <b>TWO</b> things do the students both believe are responsible for the increase in loneliness?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Social media</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Smaller nuclear families</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Urban design</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Longer lifespans</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">A mobile workforce</span>
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
            <div id="panel-mh5" class="x-panel" role="tabpanel" aria-labelledby="tab-mh5" hidden>
                <div class="x-panel-inner">Content: Two Choices 5</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices5">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-3.mp3">
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
                                        <button class="start-btn" data-start="151" type="button">Start from
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
                                    Which <b>TWO</b> health risks associated with loneliness do the students agree are based on solid evidence?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-7[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">A weakened immune system</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-7[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Dementia</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-7[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Cancer</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-7[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Obesity</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-7[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Cardiovascular disease</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-two_choices5" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="2" id="submit-two_choices5">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-mh6" class="x-panel" role="tabpanel" aria-labelledby="tab-mh6" hidden>
                <div class="x-panel-inner">Content: Two Choices 6</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-two_choices6">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-2</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-3.mp3">
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
                                        <button class="start-btn" data-start="227" type="button">Start from
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
                                    Which <b>TWO</b> opinions do both the students express about the evolutionary theory of loneliness?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-9[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It has little practical relevance.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-9[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It needs further investigation.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-9[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It is misleading.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-9[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">It should be more widely accepted.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="xQKeqKYrkqfdgotg-9[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">It is difficult to understand.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-two_choices6" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="2" id="submit-two_choices6">
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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-3.mp3">
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
                                        <button class="start-btn" data-start="73" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-4</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    When comparing loneliness to depression, the students
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Doubt that there will ever be a medical cure for loneliness.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Claim that the link between loneliness and mental health is overstated.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Express frustration that loneliness is not taken more seriously.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Why do the students decide to start their presentation with an example from their own experience?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">To explain how difficult loneliness can be</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">To highlight a situation that most students will recognise</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">To emphasise that feeling lonely is more common for men than women</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    The students agree that talking to strangers is a good strategy for dealing with loneliness because
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It creates a sense of belonging.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It builds self-confidence.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It makes people feel more positive.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    The students find it difficult to understand why solitude is considered to be
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-10" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Similar to loneliness.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-10" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Necessary for mental health.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="xQKeqKYrkqfdgotg-10" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">An enjoyable experience.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary try-again" id="again-oc2" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-oc2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-nc" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-nc" hidden>
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="qa">
                        <form class="qa-body" id="form-nc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-4.mp3">
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
                                <p>Questions 1-10</p>
                                <p><b>Complete the notes below.</b></p>
                                <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Reclaiming Urban Rivers</h3>
                                <p><b>Historical Background</b></p>

                                <p>Nearly all major cities were built on a river.</p>
                                <p>Rivers were traditionally used for transport, fishing, and recreation.</p>
                                <p>Industrial development and rising populations later led to:</p>
                                <p>-More sewage from houses being discharged into the river.</p>
                                <p>
                                    -Pollution from
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-11" class="q-text" placeholder="">
                                    on the river bank.
                                </p>
                                <p>
                                    In 1957, the River Thames in London was declared biologically
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-12" class="q-text" placeholder="">
                                </p>

                                <p><b>Recent Improvements</b></p>
                                <p>
                                    Seals and even a
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-13" class="q-text" placeholder="">
                                    have been seen in the River Thames.
                                </p>
                                <p>
                                    Riverside warehouses are converted to restaurants and
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-14" class="q-text" placeholder="">
                                </p>

                                <p>In Los Angeles, there are plans to:</p>

                                <p>
                                    Build a riverside
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-15" class="q-text" placeholder="">
                                </p>

                                <p>
                                    Display 
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-16" class="q-text" placeholder="">
                                    projects.
                                </p>

                                <p>
                                    In Paris,
                                    <span class="q-number-box">7</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-17" class="q-text" placeholder="">
                                    are created on the sides of the river every summer.
                                </p>

                                <p><b>Transport Possibilities</b></p>
                                <p>
                                    Over 2 billion passengers already travel by
                                    <span class="q-number-box">8</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-18" class="q-text" placeholder="">
                                    in cities around the world.
                                </p>

                                <p>Changes in shopping habits mean the number of deliveries that are made is increasing.</p>

                                <p>
                                    Instead of road transport, goods can be transported by large freight barges and electric
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-19" class="q-text" placeholder="">
                                    , or, in future, by
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="xQKeqKYrkqfdgotg-20" class="q-text" placeholder="">
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
            submitHelper("form-nc", "xQKeqKYrkqfdgotg", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "xQKeqKYrkqfdgotg", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "xQKeqKYrkqfdgotg", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "xQKeqKYrkqfdgotg", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-two_choices3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices3", "xQKeqKYrkqfdgotg", "two_choices", $(this), "again-two_choices3", "Two Choices");
        });

        $("#submit-two_choices4").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices4", "xQKeqKYrkqfdgotg", "two_choices", $(this), "again-two_choices4", "Two Choices");
        });

        $("#submit-two_choices5").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices5", "xQKeqKYrkqfdgotg", "two_choices", $(this), "again-two_choices5", "Two Choices");
        });

        $("#submit-two_choices6").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices6", "xQKeqKYrkqfdgotg", "two_choices", $(this), "again-two_choices6", "Two Choices");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "xQKeqKYrkqfdgotg", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "xQKeqKYrkqfdgotg", "nc", $(this), "again-nc2", "Note Completion");
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
                    'one': 6,
                    'mh': 2,
                    'mh2': 2,
                    'mh3': 2,
                    'mh5': 2,
                    'mh6': 2,
                    'one2': 4,
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
