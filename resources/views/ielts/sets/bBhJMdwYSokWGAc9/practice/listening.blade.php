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
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-map_labeling" aria-controls="panel-map_labeling" aria-selected="false"
                data-id="map_labeling">Map Labeling</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-matching" aria-controls="panel-matching" aria-selected="false"
                data-id="matching">Matching</button>
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
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-1.mp3">
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
                                        <button class="start-btn" data-start="100" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p><b>Complete the notes below.</b></p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <th><b>Name of company</b></th>
                                    <th><b>	Information about costs</b></th>
                                    <th><b>Additional notes</b></th>
                                </tr>

                                <tr>
                                    <td>Peak Rentals</td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            Prices range from $105 to $
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-1" class="q-text">
                                            per room per month.
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="2" style="margin-top: 10px;">
                                            The furniture is very 
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-2" class="q-text">
                                            Delivers in 1-2 days
                                        </div>
                                        <div class="q-item" data-q="3" style="margin-top: 10px;">
                                            Special offer: <br>free 
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-3" class="q-text">
                                            with every living room set
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-q="4">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-4" class="q-text">
                                            and Oliver
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="5">
                                            Mid-range prices <br> 12% monthly free for
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-5" class="q-text">
                                        </div>
                                    </td>
                                    <td>Also offers a cleaning service</td>
                                </tr>
                                <tr>
                                    <td>Larch Furniture</td>
                                    <td>
                                        <div class="q-item" data-q="6">
                                            Offers cheapest prices for renting furniture and
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-6" class="q-text">
                                            items
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="7">
                                            Must have own
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-7" class="q-text">
                                            Minimum contract length: six months
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-q="8">
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-8" class="q-text">
                                            Rentals
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="9">
                                            See the
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-9" class="q-text">
                                            for the most up-to-date prices
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="10">
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="bBhJMdwYSokWGAc9-10" class="q-text">
                                            are allowed within 7 days of delivery
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
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-2.mp3">
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
                                        <button class="start-btn" data-start="78" type="button">Start from
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
                                    Who was responsible for starting the community project?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">The castle owners</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">A national charity</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">The local council</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    How was the gold coin found?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Heavy rain had removed some of the soil</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The ground was dug up by wild rabbits</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">A person with a metal detector searched the area</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    What led the archaeologists to believe there was an ancient village on this site?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">The lucky discovery of old records</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The bases of several structures visible in the grass</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">The unusual stones found near the castle</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    What are the team still hoping to find?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Everyday pottery</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Animal bones</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Pieces of jewellery</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    What was found on the other side of the river to the castle?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">The remains of a large palace</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The outline of fields</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">A number of small huts</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    What do the team plan to do after work ends this summer?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Prepare a display for a museum</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Take part in a television programme</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Start to organise school visits</span>
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
            <div id="panel-map_labeling" class="x-panel" role="tabpanel" aria-labelledby="tab-map_labeling" hidden>
                <div class="x-panel-inner">Content: Map Labeling</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-map_labeling">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-4</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-2.mp3">
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
                                        <button class="start-btn" data-start="303" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-4</p>
                                <p>Label the map below. Drag the correct letter, <b>A</b>–<b>G</b>, next to Questions</p>
                                <img src="{{asset('own_assets/images/cambridge-ielts-20-academic-reading-test-3–17-20.jpg')}}" alt="">
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        bridge foundations
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-1" class="q-dropdown">
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
                                        rubbish pit
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-2" class="q-dropdown">
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
                                        meeting hall
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-3" class="q-dropdown">
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
                                        fish pond
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-4" class="q-dropdown">
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
                                <button type="button" class="btn btn-primary try-again" id="again-map_labeling" style="display: none">
                                    Try Again
                                </button>
                                <button type="button" class="btn btn-primary" data-kategori="listening" data-count="4" id="submit-map_labeling">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-one2" class="x-panel" role="tabpanel" aria-labelledby="tab-one2" hidden>
                <div class="x-panel-inner">Content: One Choice </div>
                <div class="reading-section">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-oc2">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-6</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-3.mp3">
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
                                    Finn was pleased to discover that their topic
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">was not familiar to their module leader.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">had not been chosen by other students.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">did not prove to be difficult to research.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Maya says a mistaken belief about theatre programmes is that
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">theatres pay companies to produce them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">few theatre-goers buy them nowadays.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">they contain far more adverts than previously.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                     Finn was surprised that, in early British theatre, programmes
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">were difficult for audiences to obtain.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">were given out free of charge.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">were seen as a kind of contract.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    Maya feels their project should include an explanation of why companies of actors
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-10" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">promoted their own plays.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-10" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">performed plays outdoors.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-10" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">had to tour with their plays.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    Finn and Maya both think that, compared to nineteenth-century programmes, those from the eighteenth century
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-11" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">were more original.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-11" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">were more colourful.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-11" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">were more informative.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    Maya doesn’t fully understand why, in the twentieth century,
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-12" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">very few theatre programmes were printed in the USA.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-12" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">British theatre programmes failed to develop for so long.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="bBhJMdwYSokWGAc9-12" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">theatre programmes in Britain copied fashions from the USA</span>
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
            <div id="panel-matching" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content" aria-label="Questions">
                        <form class="qa-body" id="form-matching_information">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-4</p>
                                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                    <audio preload="auto"
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-3.mp3">
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
                                        <button class="start-btn" data-start="329" type="button">Start from
                                            here</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-4</p>
                                <p>What comment is made about the programme for each of the following shows?</p>
                                <p>Choose <b>FOUR</b> answers from the box and write the correct letter, A–F, next to Questions</p>
                                <p><b>Comments about the programme</b></p>
                                <strong>A</strong>.&nbsp;&nbsp; Its origin is somewhat controversial<br>
                                <strong>B</strong>.&nbsp;&nbsp; It is historically significant for a country<br>
                                <strong>C</strong>.&nbsp;&nbsp; It was effective at attracting audiences<br>
                                <strong>D</strong>.&nbsp;&nbsp; It is included in a recent project<br>
                                <strong>E</strong>.&nbsp;&nbsp; It contains insights into the show<br>
                                <strong>F</strong>.&nbsp;&nbsp; It resembles an artwork<br>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">1</span>
                                    <span style="flex: 1;">
                                        Ruy Blas 
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">2</span>
                                    <span style="flex: 1;">
                                        Man of La Mancha
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">3</span>
                                    <span style="flex: 1;">
                                        The Tragedy of Jane Shore 
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">4</span>
                                    <span style="flex: 1;">
                                        The Sailors’ Festival
                                        <span class="q-question">
                                            <select name="bBhJMdwYSokWGAc9-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
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
            <div id="panel-nc2" class="x-panel" role="tabpanel" aria-labelledby="tab-nc2">
                <div class="x-panel-inner">Content: Note Completion 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body" id="form-nc2">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 1-10</p>
                            <div class="audio-player" data-player role="group" aria-label="Audio controls">
                                <audio preload="auto"
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-4.mp3">
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
                                    <button class="start-btn" data-start="71" type="button">Start from here</button>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-10</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            <p><b>Inclusive Design</b></p>
                            
                            <p><b>Definition</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="1">
                                        Designing products that can be accessed by a diverse range of people without the need for any
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-11" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="2">
                                        Not the same as universal design: that is design for everyone, including catering for people with
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-12" class="q-text" placeholder="">
                                        problems.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Examples of Inclusive Design</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="3">
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-13" class="q-text" placeholder="">
                                        which are adjustable, avoiding back or neck problems
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="4">
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-14" class="q-text" placeholder="">
                                        in public toilets which are easier to use
                                    </div>
                                </li>
                            </ul>

                            <p>To assist the elderly:</p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="5">
                                        Designers avoid using
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-15" class="q-text" placeholder="">
                                        in interfaces
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="6">
                                        People can make commands using a mouse, keyboard, or their
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-16" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Impact of Non-Inclusive Designs</b></p>
                            <p>Access:</p>
                            <ul>
                                <li>Loss of independence for disabled people.</li>
                            </ul>

                            <p>Safety:</p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="7">
                                        Seatbelts are especially problematic for
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-17" class="q-text" placeholder="">
                                        women.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8">
                                        PPE jackets are often unsuitable because of the size of women’s
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-18" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="9">
                                        PPE for female
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-19" class="q-text" placeholder="">
                                        officers dealing with emergencies is the worst.
                                    </div>
                                </li>
                            </ul>

                            <p>Comfort in the Workplace:</p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="10">
                                        The 
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="bBhJMdwYSokWGAc9-20" class="q-text" placeholder="">
                                        in offices is often too low for women.
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
            submitHelper("form-nc", "bBhJMdwYSokWGAc9", "nc", $(this), "again-nc", "Note Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc", "bBhJMdwYSokWGAc9", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-map_labeling").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-map_labeling", "bBhJMdwYSokWGAc9", "map_labeling", $(this), "again-map_labeling", "Map Labeling");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-oc2", "bBhJMdwYSokWGAc9", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "bBhJMdwYSokWGAc9", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-nc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-nc2", "bBhJMdwYSokWGAc9", "nc", $(this), "again-nc2", "Note Completion");
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
                    'map_labeling': 4,
                    'one2': 6,
                    'matching': 4,
                    'nc2': 10
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
