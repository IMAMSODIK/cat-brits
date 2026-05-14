<!DOCTYPE html>
<html lang="id">

<head>
    @include('ielts.sets.layouts.practice.listening_reading.head')

    <!-- style bagian reading + questions -->
    <style>
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

        #panel-tc .q-options {
            display: flex;
            align-items: center;
            gap: 10px;
        }

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

        #panel-tc .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        #panel-tc input {
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

        .q-option.correct {
            background-color: #c8f7c5;
            /* hijau muda */
            border: 2px solid #27ae60;
            border-radius: 6px;
        }

        .q-option.wrong {
            background-color: #f9c0c0;
            /* merah muda */
            border: 2px solid #e74c3c;
            border-radius: 6px;
        }
    </style>
</head>


<body>

    @include('ielts.sets.layouts.practice.listening_reading.header')

    <section class="parts-section" aria-label="Pilihan Part Soal" id="part-soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">True/False/Not Given</button>
            <button class="x-tab" role="tab" id="tab-sa" aria-controls="panel-sa" aria-selected="false"
                data-id="sa">Short Answer</button>
            <button class="x-tab" role="tab" id="tab-tc" aria-controls="panel-tc" aria-selected="false"
                data-id="tc">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Matching Headings</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">True/False/Not Given 2</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Matching Sentence ending</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Yes/No/Not Given</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Stepwells</h3>
                            <div class="passage-body">
                                <p><i>A millennium ago, stepwells were fundamental to life in the driest parts of India.
                                        Although many have been neglected, recent restoration has returned them to their
                                        former glory. Richard Cox travelled to north-western India to document these
                                        spectacular monuments from a bygone era.</i></p>
                                <p>During the sixth and seventh centuries, the inhabitants of the modern-day states of
                                    Gujarat and Rajasthan in North-western India developed a method of gaining access to
                                    clean, fresh groundwater during the dry season for drinking, bathing, watering
                                    animals and irrigation. However, the significance of this invention – the stepwell –
                                    goes beyond its utilitarian application.</p>
                                <p>Unique to the region, stepwells are often architecturally complex and vary widely in
                                    size and shape. During their heyday, they were places of gathering, of leisure, of
                                    relaxation and of worship for villagers of all but the lowest castes. Most stepwells
                                    are found dotted around the desert areas of Gujarat (where they are called vav) and
                                    Rajasthan (where they are known as baori), while a few also survive in Delhi. Some
                                    were located in or near villages as public spaces for the community; others were
                                    positioned beside roads as resting places for travellers.</p>
                                <p>As their name suggests, stepwells comprise a series of stone steps descending from
                                    ground level to the water source (normally an underground aquifer) as it recedes
                                    following the rains. When the water level was high, the user needed only to descend
                                    a few steps to reach it; when it was low, several levels would have to be
                                    negotiated.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng">
                                <fieldset class="q-item">
                                    <h3>Question 1-5</h3>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        Examples of ancient stepwells can be found all over the world.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Stepwells had a range of functions, in addition to those related to water
                                        collection.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        The few existing stepwells in Delhi are more attractive than those found
                                        elsewhere.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        It took workers many years to build the stone steps characteristic of stepwells.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        The number of steps above the water level in a stepwell altered during the
                                        course of a year.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-tfng"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-tfng">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-sa" class="x-panel" role="tabpanel" aria-labelledby="tab-sa" hidden>
                <div class="x-panel-inner">Content: Short Answer</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>Some wells are vast, open craters with hundreds of steps paving each sloping side,
                                    often in tiers. Others are more elaborate, with long stepped passages leading to the
                                    water via several storeys. Built from stone and supported by pillars, they also
                                    included pavilions that sheltered visitors from the relentless heat. But perhaps the
                                    most impressive features are the intricate decorative sculptures that embellish many
                                    stepwells, showing activities from fighting and dancing to everyday acts such as
                                    women combing their hair and churning butter.</p>
                                <p>Down the centuries, thousands of wells were constructed throughout northwestern
                                    India, but the majority have now fallen into disuse; many are derelict and dry, as
                                    groundwater has been diverted for industrial use and the wells no longer reach the
                                    water table. Their condition hasn’t been helped by recent dry spells: southern
                                    Rajasthan suffered an eight-year drought between 1996 and 2004.</p>
                                <p>However, some important sites in Gujarat have recently undergone major restoration,
                                    and the state government announced in June last year that it plans to restore the
                                    stepwells throughout the state.</p>
                                <p>In Patan, the state’s ancient capital, the stepwell of Rani Ki Vav (Queen’s Stepwell)
                                    is perhaps the finest current example. It was built by Queen Udayamati during the
                                    late 11th century, but became silted up following a flood during the 13th century.
                                    But the Archaeological Survey of India began restoring it in the 1960s, and today
                                    it’s in pristine condition. At 65 metres long, 20 metres wide and 27 metres deep,
                                    Rani Ki Vav features 500 distinct sculptures carved into niches throughout the
                                    monument, depicting gods such as Vishnu and Parvati in various incarnations.
                                    Incredibly, in January 2001, this ancient structure survived a devastating
                                    earthquake that measured 7.6 on the Richter scale.</p>
                                <p>Another example is the Surya Kund in Modhera, northern Gujarat, next to the Sun
                                    Temple, built by King Bhima I in 1026 to honour the sun god Surya. It actually
                                    resembles a tank (kund means reservoir or pond) rather than a well, but displays the
                                    hallmarks of stepwell architecture, including four sides of steps that descend to
                                    the bottom in a stunning geometrical formation. The terraces house 108 small,
                                    intricately carved shrines between the sets of steps.</p>
                                <p>Rajasthan also has a wealth of wells. The ancient city of Bundi, 200 kilometres south
                                    of Jaipur, is renowned for its architecture, including its stepwells. One of the
                                    larger examples is Raniji Ki Baori, which was built by the queen of the region,
                                    Nathavatji, in 1699. At 46 metres deep, 20 metres wide and 40 metres long, the
                                    intricately carved monument is one of 21 baoris commissioned in the Bundi area by
                                    Nathavatji.</p>
                                <p>In the old ruined town of Abhaneri, about 95 kilometres east of Jaipur, is Chand
                                    Baori, one of India’s oldest and deepest wells; aesthetically, it’s perhaps one of
                                    the most dramatic. Built in around 850 AD next to the temple of Harshat Mata, the
                                    baori comprises hundreds of zigzagging steps that run along three of its sides,
                                    steeply descending 11 storeys, resulting in a striking geometric pattern when seen
                                    from afar. On the fourth side, verandas which are supported by ornate pillars
                                    overlook the steps.</p>
                                <p>Still in public use is Neemrana Ki Baori, located just off the Jaipur–Dehli highway.
                                    Constructed in around 1700, it’s nine storeys deep, with the last two being
                                    underwater. At ground level, there are 86 colonnaded openings from where the visitor
                                    descends 170 steps to the deepest water source.</p>
                                <p>Today, following years of neglect, many of these monuments to medieval engineering
                                    have been saved by the Archaeological Survey of India, which has recognised the
                                    importance of preserving them as part of the country’s rich history. Tourists flock
                                    to wells in far-flung corners of northwestern India to gaze in wonder at these
                                    architectural marvels from 1,000 years ago, which serve as a reminder of both the
                                    ingenuity and artistry of ancient civilisations and of the value of water to human
                                    existence.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-sa">
                                <fieldset class="q-item">
                                    <h3>Question 1-3</h3>

                                    <p class="lead">Answer the questions below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Which part of some stepwells provided shade for people?
                                            <span class="q-question">
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            What type of serious climatic event, which took place in southern Rajasthan,
                                            is mentioned in the article?
                                            <span class="q-question">
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            Who are frequent visitors to stepwells nowadays?
                                            <span class="q-question">
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-sa"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="3" id="submit-sa">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tc" class="x-panel" role="tabpanel" aria-labelledby="tab-tc" hidden>
                <div class="x-panel-inner">Content: Table Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>In Patan, the state’s ancient capital, the stepwell of Rani Ki Vav (Queen’s Stepwell)
                                    is perhaps the finest current example. It was built by Queen Udayamati during the
                                    late 11th century, but became silted up following a flood during the 13th century.
                                    But the Archaeological Survey of India began restoring it in the 1960s, and today
                                    it’s in pristine condition. At 65 metres long, 20 metres wide and 27 metres deep,
                                    Rani Ki Vav features 500 distinct sculptures carved into niches throughout the
                                    monument, depicting gods such as Vishnu and Parvati in various incarnations.
                                    Incredibly, in January 2001, this ancient structure survived a devastating
                                    earthquake that measured 7.6 on the Richter scale.</p>
                                <p>Another example is the Surya Kund in Modhera, northern Gujarat, next to the Sun
                                    Temple, built by King Bhima I in 1026 to honour the sun god Surya. It actually
                                    resembles a tank (kund means reservoir or pond) rather than a well, but displays the
                                    hallmarks of stepwell architecture, including four sides of steps that descend to
                                    the bottom in a stunning geometrical formation. The terraces house 108 small,
                                    intricately carved shrines between the sets of steps.</p>
                                <p>Rajasthan also has a wealth of wells. The ancient city of Bundi, 200 kilometres south
                                    of Jaipur, is renowned for its architecture, including its stepwells. One of the
                                    larger examples is Raniji Ki Baori, which was built by the queen of the region,
                                    Nathavatji, in 1699. At 46 metres deep, 20 metres wide and 40 metres long, the
                                    intricately carved monument is one of 21 baoris commissioned in the Bundi area by
                                    Nathavatji.</p>
                                <p>In the old ruined town of Abhaneri, about 95 kilometres east of Jaipur, is Chand
                                    Baori, one of India’s oldest and deepest wells; aesthetically, it’s perhaps one of
                                    the most dramatic. Built in around 850 AD next to the temple of Harshat Mata, the
                                    baori comprises hundreds of zigzagging steps that run along three of its sides,
                                    steeply descending 11 storeys, resulting in a striking geometric pattern when seen
                                    from afar. On the fourth side, verandas which are supported by ornate pillars
                                    overlook the steps.</p>
                                <p>Still in public use is Neemrana Ki Baori, located just off the Jaipur–Dehli highway.
                                    Constructed in around 1700, it’s nine storeys deep, with the last two being
                                    underwater. At ground level, there are 86 colonnaded openings from where the visitor
                                    descends 170 steps to the deepest water source.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tc">
                                <fieldset class="q-item">
                                    <h3>Question 1-5</h3>
                                    <p class="lead">Complete the table below</p>
                                    <p>Choose <b>ONE WORD AND/OR A NUMBER</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <table border="1" cellpadding="8" cellspacing="0"
                                    style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                    <tr>
                                        <th>Stepwells</th>
                                        <th>Date</th>
                                        <th>Features</th>
                                        <th>Other Notes</th>
                                    </tr>
                                    <tr>
                                        <td><b>Rani Ki Vav</b></td>
                                        <td>Late 11th century</td>
                                        <td>As many as 500 sculptures decorate the monument</td>
                                        <td>
                                            <div class="q-item" data-q="1">
                                                Restored in the 1990s Excellent condition, despite the
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-1" class="q-text"
                                                    placeholder="">
                                                of 2001.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Surya Kund</b></td>
                                        <td>1026</td>
                                        <td>
                                            <div class="q-item" data-q="2">
                                                Steps on the
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                    placeholder="">
                                                produce a geometric pattern Carved shrines.
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-item" data-q="3">
                                                Looks more like a
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-3" class="q-text"
                                                    placeholder="">
                                                than a well.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Raniji Ki Baori</b></td>
                                        <td>1699</td>
                                        <td>Intricately carved monument</td>
                                        <td>One of 21 baoris in the area commissioned by Queen Nathavatji</td>
                                    </tr>
                                    <tr>
                                        <td><b>Chand Baori</b></td>
                                        <td>850 AD</td>
                                        <td>Steps take you down 11 storeys to the bottom</td>
                                        <td>
                                            <div class="q-item" data-q="4">
                                                Old, deep and very dramatic <br><br>
                                                Has <span class="q-number-box">4</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-4" class="q-text"
                                                    placeholder="">
                                                which provide a view to the steps.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Neemrana Ki Baori</b></td>
                                        <td>1700</td>
                                        <td>
                                            <div class="q-item" data-q="5">
                                                Has two
                                                <span class="q-number-box">5</span>
                                                <input type="text" name="XJ3XOcvqPbgdZwyl-5" class="q-text"
                                                    placeholder="">
                                                levels.
                                            </div>
                                        </td>
                                        <td>
                                            Used by public today
                                        </td>
                                    </tr>
                                </table>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-tc"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-tc">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-mh" class="x-panel" role="tabpanel" aria-labelledby="tab-mh" hidden>
                <div class="x-panel-inner">Content: Matching Headings</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>EUROPEAN TRANSPORT SYSTEMS 1990-2010</h3>
                                <p>What have been the trends and what are the prospects for European transport systems?
                                </p>
                                <h3 class="passage-title">A</h3>
                                <p>It is difficult to conceive of vigorous economic growth without an efficient
                                    transport system. Although modern information technologies can reduce the demand for
                                    physical transport by facilitating teleworking and teleservices, the requirement for
                                    transport continues to increase. There are two key factors behind this trend. For
                                    passenger transport, the determining factor is the spectacular growth in car use.
                                    The number of cars on European Union (EU) roads saw an increase of three million
                                    cars each year from 1990 to 2010, and in the next decade the EU will see a further
                                    substantial increase in its fleet.</p>
                                <h3 class="passage-title">B</h3>
                                <p>As far as goods transport is concerned, growth is due to a large extent to changes in
                                    the European economy and its system of production. In the last 20 years, as internal
                                    frontiers have been abolished, the EU has moved from a ‘stock’ economy to a ‘flow’
                                    economy. This phenomenon has been emphasised by the relocation of some industries,
                                    particularly those which are labour intensive, to reduce production costs, even
                                    though the production site is hundreds or even thousands of kilometres away from the
                                    final assembly plant or away from users.</p>
                                <h3 class="passage-title">C</h3>
                                <p>The strong economic growth expected in countries which are candidates for entry to
                                    the EU will also increase transport flows, in particular road haulage traffic. In
                                    1998, some of these countries already exported more than twice their 1990 volumes
                                    and imported more than five times their 1990 volumes. And although many candidate
                                    countries inherited a transport system which encourages rail, the distribution
                                    between modes has tipped sharply in favour of road transport since the 1990s.
                                    Between 1990 and 1998, road haulage increased by 19.4%, while during the same period
                                    rail haulage decreased by 43.5%, although – and this could benefit the enlarged EU –
                                    it is still on average at a much higher level than in existing member states.</p>
                                <h3 class="passage-title">D</h3>
                                <p>However, a new imperative-sustainable development – offers an opportunity for
                                    adapting the EU’s common transport policy. This objective, agreed by the Gothenburg
                                    European Council, has to be achieved by integrating environmental considerations
                                    into Community policies, and shifting the balance between modes of transport lies at
                                    the heart of its strategy. The ambitious objective can only be fully achieved by
                                    2020, but proposed measures are nonetheless a first essential step towards a
                                    sustainable transport system which will ideally be in place in 30 years’ time, that
                                    is by 2040.</p>
                                <h3 class="passage-title">E</h3>
                                <p>In 1998, energy consumption in the transport sector was to blame for 28% of emissions
                                    of CO2, the leading greenhouse gas. According to the latest estimates, if nothing is
                                    done to reverse the traffic growth trend, CO2 emissions from transport can be
                                    expected to increase by around 50% to 1,113 billion tonnes by 2020, compared with
                                    the 739 billion tonnes recorded in 1990. Once again, road transport is the main
                                    culprit since it alone accounts for 84% of the CO2 emissions attributable to
                                    transport. Using alternative fuels and improving energy efficiency is thus both an
                                    ecological necessity and a technological challenge.</p>
                                <h3 class="passage-title">F</h3>
                                <p>At the same time greater efforts must be made to achieve a modal shift. Such a change
                                    cannot be achieved overnight, all the less so after over half a century of constant
                                    deterioration in favour of road. This has reached such a pitch that today rail
                                    freight services are facing marginalisation, with just 8% of market share, and with
                                    international goods trains struggling along at an average speed of 18km/h. Three
                                    possible options have emerged.</p>
                                <h3 class="passage-title">G</h3>
                                <p>The first approach would consist of focusing on road transport solely through
                                    pricing. This option would not be accompanied by complementary measures in the other
                                    modes of transport. In the short term it might curb the growth in road transport
                                    through the better loading ratio of goods vehicles and occupancy rates of passenger
                                    vehicles expected as a result of the increase in the price of transport. However,
                                    the lack of measures available to revitalise other modes of transport would make it
                                    impossible for more sustainable modes of transport to take up the baton.</p>
                                <h3 class="passage-title">H</h3>
                                <p>The second approach also concentrates on road transport pricing but is accompanied by
                                    measures to increase the efficiency of the other modes (better quality of services,
                                    logistics, technology). However, this approach does not include investment in new
                                    infrastructure, nor does it guarantee better regional cohesion. It could help to
                                    achieve greater uncoupling than the first approach, but road transport would keep
                                    the lion’s share of the market and continue to concentrate on saturated arteries,
                                    despite being the most polluting of the modes. It is therefore not enough to
                                    guarantee the necessary shift of the balance.</p>
                                <h3 class="passage-title">I</h3>
                                <p>The third approach, which is not new, comprises a series of measures ranging from
                                    pricing to revitalising alternative modes of transport and targeting investment in
                                    the trans-European network. This integrated approach would allow the market shares
                                    of the other modes to return to their 1998 levels and thus make a shift of balance.
                                    It is far more ambitious than it looks, bearing in mind the historical imbalance in
                                    favour of roads for the last fifty years, but would achieve a marked break in the
                                    link between road transport growth and economic growth, without placing restrictions
                                    on the mobility of people and goods.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-mh">
                                <fieldset class="q-item">
                                    <h3>Question 1-8</h3>
                                    <p class="lead">The Reading Passage has nine paragraphs, <b>A-I</b>.</p>
                                    <p>Choose the correct heading for paragraphs <b>A-E</b> and <b>G-I</b> from the list
                                        of headings below.</p>
                                    <p>Write the correct number, <b>i-xi</b>, in boxes on your answer sheet.</p>
                                    <p><b>List of Headings</b></p>
                                    <ul class="legend">
                                        <li><strong>i</strong> A fresh and important long-term goal</li>
                                        <li><strong>ii</strong> Charging for roads and improving other transport methods
                                        </li>
                                        <li><strong>iii</strong> Changes affecting the distances goods may be
                                            transported</li>
                                        <li><strong>iv</strong> Taking all the steps necessary to change transport
                                            patterns</li>
                                        <li><strong>v</strong> The environmental costs of road transport</li>
                                        <li><strong>vi</strong> The escalating cost of rail transport</li>
                                        <li><strong>vii</strong> The need to achieve transport rebalance</li>
                                        <li><strong>viii</strong> The rapid growth of private transport</li>
                                        <li><strong>ix</strong> Plans to develop major road networks</li>
                                        <li><strong>x</strong> Restricting road use through charging policies alone</li>
                                        <li><strong>xi</strong> Transport trends in countries awaiting EU admission</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>A</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>B</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>C</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>D</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>E</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">6</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>F</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="7">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">7</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>G</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-7" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="8">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">8</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>H</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-8" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- <fieldset class="q-item" data-q="9">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">9</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>I</b>
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-9" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                    <option value="ix">ix</option>
                                                    <option value="x">x</option>
                                                    <option value="xi">xi</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset> --}}

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-mh"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="8" id="submit-mh">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: True/False/Not Given 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3 class="passage-title">A</h3>
                                <p>It is difficult to conceive of vigorous economic growth without an efficient
                                    transport system. Although modern information technologies can reduce the demand for
                                    physical transport by facilitating teleworking and teleservices, the requirement for
                                    transport continues to increase. There are two key factors behind this trend. For
                                    passenger transport, the determining factor is the spectacular growth in car use.
                                    The number of cars on European Union (EU) roads saw an increase of three million
                                    cars each year from 1990 to 2010, and in the next decade the EU will see a further
                                    substantial increase in its fleet.</p>
                                <h3 class="passage-title">B</h3>
                                <p>As far as goods transport is concerned, growth is due to a large extent to changes in
                                    the European economy and its system of production. In the last 20 years, as internal
                                    frontiers have been abolished, the EU has moved from a ‘stock’ economy to a ‘flow’
                                    economy. This phenomenon has been emphasised by the relocation of some industries,
                                    particularly those which are labour intensive, to reduce production costs, even
                                    though the production site is hundreds or even thousands of kilometres away from the
                                    final assembly plant or away from users.</p>
                                <h3 class="passage-title">C</h3>
                                <p>The strong economic growth expected in countries which are candidates for entry to
                                    the EU will also increase transport flows, in particular road haulage traffic. In
                                    1998, some of these countries already exported more than twice their 1990 volumes
                                    and imported more than five times their 1990 volumes. And although many candidate
                                    countries inherited a transport system which encourages rail, the distribution
                                    between modes has tipped sharply in favour of road transport since the 1990s.
                                    Between 1990 and 1998, road haulage increased by 19.4%, while during the same period
                                    rail haulage decreased by 43.5%, although – and this could benefit the enlarged EU –
                                    it is still on average at a much higher level than in existing member states.</p>
                                <h3 class="passage-title">D</h3>
                                <p>However, a new imperative-sustainable development – offers an opportunity for
                                    adapting the EU’s common transport policy. This objective, agreed by the Gothenburg
                                    European Council, has to be achieved by integrating environmental considerations
                                    into Community policies, and shifting the balance between modes of transport lies at
                                    the heart of its strategy. The ambitious objective can only be fully achieved by
                                    2020, but proposed measures are nonetheless a first essential step towards a
                                    sustainable transport system which will ideally be in place in 30 years’ time, that
                                    is by 2040.</p>
                                <h3 class="passage-title">E</h3>
                                <p>In 1998, energy consumption in the transport sector was to blame for 28% of emissions
                                    of CO2, the leading greenhouse gas. According to the latest estimates, if nothing is
                                    done to reverse the traffic growth trend, CO2 emissions from transport can be
                                    expected to increase by around 50% to 1,113 billion tonnes by 2020, compared with
                                    the 739 billion tonnes recorded in 1990. Once again, road transport is the main
                                    culprit since it alone accounts for 84% of the CO2 emissions attributable to
                                    transport. Using alternative fuels and improving energy efficiency is thus both an
                                    ecological necessity and a technological challenge.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng2">
                                <fieldset class="q-item">
                                    <h3>Question 1-5</h3>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        The need for transport is growing, despite technological developments.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        To reduce production costs, some industries have been moved closer to their
                                        relevant consumers.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Cars are prohibitively expensive in some EU candidate countries.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-8" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-8" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-8" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        The Gothenburg European Council was set up 30 years ago.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-9" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-9" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-9" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        By the end of this decade, CO2 emissions from transport are predicted to reach
                                        739 billion tonnes.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-10" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-10" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-10" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-tfng2"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-tfng2">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-one" class="x-panel" role="tabpanel" aria-labelledby="tab-one" hidden>
                <div class="x-panel-inner">Content: One Choice</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>One of the most famous photographs in the story of rock’n’roll emphasises Ciaidini’s
                                    views. The 1956 picture of singers Elvis Presley, Carl Perkins, Johnny Cash and
                                    Jerry Lee Lewis jamming at a piano in Sun Studios in Memphis tells a hidden story.
                                    Sun’s ‘million-dollar quartet’ could have been a quintet. Missing from the picture
                                    is Roy Orbison’ a greater natural singer than Lewis, Perkins or Cash. Sam Phillips,
                                    who owned Sun, wanted to revolutionise popular music with songs that fused black and
                                    white music, and country and blues. Presley, Cash, Perkins and Lewis instinctively
                                    understood Phillips’s ambition and believed in it. Orbison wasn’t inspired by the
                                    goal, and only ever achieved one hit with the Sun label.</p>
                                <p>The value fit matters, says Cialdini, because innovation is, in part, a process of
                                    change, and under that pressure we, as a species, behave differently, ‘When things
                                    change, we are hard-wired to play it safe.’ Managers should therefore adopt an
                                    approach that appears counterintuitive -they should explain what stands to be lost
                                    if the company fails to seize a particular opportunity. Studies show that we
                                    invariably take more gambles when threatened with a loss than when offered a reward.
                                </p>
                                <p>Managing innovation is a delicate art. It’s easy for a company to be pulled in
                                    conflicting directions as the marketing, product development, and finance
                                    departments each get different feedback from different sets of people. And without a
                                    system which ensures collaborative exchanges within the company, it’s also easy for
                                    small ‘pockets of innovation’ to disappear. Innovation is a contact sport. You can’t
                                    brief people just by saying, ‘We’re going in this direction and I’m going to take
                                    you with me.’</p>
                                <p>Cialdini believes that this ‘follow-the-leader syndrome, is dangerous, not least
                                    because it encourages bosses to go it alone. ‘It’s been scientifically proven that
                                    three people will be better than one at solving problems, even if that one person is
                                    the smartest person in the field.’ To prove his point, Cialdini cites an interview
                                    with molecular biologist James Watson. Watson, together with Francis Crick,
                                    discovered the structure of DNA, the genetic information carrier of all living
                                    organisms. ‘When asked how they had cracked the code ahead of an array of highly
                                    accomplished rival investigators, he said something that stunned me. He said he and
                                    Crick had succeeded because they were aware that they weren’t the most intelligent
                                    of the scientists pursuing the answer. The smartest scientist was called Rosalind
                                    Franklin who, Watson said, “was so intelligent she rarely sought advice”.’</p>
                                <p>Teamwork taps into one of the basic drivers of human behaviour. ‘The principle of
                                    social proof is so pervasive that we don’t even recognise it,’ says Cialdini. ‘If
                                    your project is being resisted, for example, by a group of veteran employees, ask
                                    another old-timer to speak up for it.’ Cialdini is not alone in advocating this
                                    strategy. Research shows that peer power, used horizontally not vertically, is much
                                    more powerful than any boss’s speech.</p>
                                <p>Writing, visualising and prototyping can stimulate the flow of new ideas. Cialdini
                                    cites scores of research papers and historical events that prove that even something
                                    as simple as writing deepens every individual’s engagement in the project. It is, he
                                    says, the reason why all those competitions on breakfast cereal packets encouraged
                                    us to write in saying, in no more than 10 words: ‘I like Kellogg’s Com Flakes
                                    because… .’ The very act of writing makes us more likely to believe it.</p>
                                <p>Authority doesn’t have to inhibit innovation but it often does. The wrong kind of
                                    leadership will lead to what Cialdini calls ‘captainitis, the regrettable tendency
                                    of team members to opt out of team responsibilities that are properly theirs’. He
                                    calls it captainitis because, he says, ‘crew members of multipilot aircraft exhibit
                                    a sometimes deadly passivity when the flight captain makes a clearly wrong-headed
                                    decision’. This behaviour is not, he says, unique to air travel, but can happen in
                                    any workplace where the leader is overbearing.</p>
                                <p>At the other end of the scale is the 1980s Memphis design collective, a group of
                                    young designers for whom ‘the only rule was that there were no rules’. This
                                    environment encouraged a free interchange of ideas, which led to more creativity
                                    with form, function, colour and materials that revolutionised attitudes to furniture
                                    design.</p>
                                <p>Many theorists believe the ideal boss should lead from behind, taking pride in
                                    collective accomplishment and giving credit where it is due. Cialdini says: ‘Leaders
                                    should encourage everyone to contribute and simultaneously assure all concerned that
                                    every recommendation is important to making the right decision and will be given
                                    full attention.’ The frustrating thing about innovation is that there are many
                                    approaches, but no magic formula. However, a manager who wants to create a truly
                                    innovative culture can make their job a lot easier by recognising these
                                    psychological realities.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-one">
                                <fieldset class="q-item">
                                    <h3>Question 1-4</h3>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        The example of the ‘million-dollar quartet’ underlines the writer’s point about
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">recognising talent.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">working as a team.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">having a shared objective.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">being an effective leader.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        James Watson suggests that he and Francis Crick won the race to discover the DNA
                                        code because they
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">were conscious of their own limitations.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">brought complementary skills to their
                                                partnership.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">were determined to outperform their brighter
                                                rivals.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">encouraged each other to realise their joint
                                                ambition.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        The writer mentions competitions on breakfast cereal packets as an example of
                                        how to
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">inspire creative thinking.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">generate concise writing.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">promote loyalty to a group.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">strengthen commitment to an idea.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        In the last paragraph, the writer suggests that it is important for employees to
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">be aware of their company’s goals.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">feel that their contributions are valued.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">have respect for their co-workers‟
                                                achievements.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">understand why certain management decisions are
                                                made.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-oc"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="4" id="submit-oc">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Content: Matching Sentence Ending</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>For Robert B. Cialdini, Professor of Psychology at Arizona State University, one
                                    reason that companies don’t succeed as often as they should is that innovation
                                    starts with recruitment. Research shows that the fit between an employee’s values
                                    and a company’s values makes a difference to what contribution they make and
                                    whether, two years after they join, they’re still at the company. Studies at Harvard
                                    Business School show that, although some individuals may be more creative than
                                    others, almost every individual can be creative in the right circumstances.</p>
                                <p>One of the most famous photographs in the story of rock’n’roll emphasises Ciaidini’s
                                    views. The 1956 picture of singers Elvis Presley, Carl Perkins, Johnny Cash and
                                    Jerry Lee Lewis jamming at a piano in Sun Studios in Memphis tells a hidden story.
                                    Sun’s ‘million-dollar quartet’ could have been a quintet. Missing from the picture
                                    is Roy Orbison’ a greater natural singer than Lewis, Perkins or Cash. Sam Phillips,
                                    who owned Sun, wanted to revolutionise popular music with songs that fused black and
                                    white music, and country and blues. Presley, Cash, Perkins and Lewis instinctively
                                    understood Phillips’s ambition and believed in it. Orbison wasn’t inspired by the
                                    goal, and only ever achieved one hit with the Sun label.</p>
                                <p>The value fit matters, says Cialdini, because innovation is, in part, a process of
                                    change, and under that pressure we, as a species, behave differently, ‘When things
                                    change, we are hard-wired to play it safe.’ Managers should therefore adopt an
                                    approach that appears counterintuitive -they should explain what stands to be lost
                                    if the company fails to seize a particular opportunity. Studies show that we
                                    invariably take more gambles when threatened with a loss than when offered a reward.
                                </p>
                                <p>Managing innovation is a delicate art. It’s easy for a company to be pulled in
                                    conflicting directions as the marketing, product development, and finance
                                    departments each get different feedback from different sets of people. And without a
                                    system which ensures collaborative exchanges within the company, it’s also easy for
                                    small ‘pockets of innovation’ to disappear. Innovation is a contact sport. You can’t
                                    brief people just by saying, ‘We’re going in this direction and I’m going to take
                                    you with me.’</p>
                                <p>Cialdini believes that this ‘follow-the-leader syndrome, is dangerous, not least
                                    because it encourages bosses to go it alone. ‘It’s been scientifically proven that
                                    three people will be better than one at solving problems, even if that one person is
                                    the smartest person in the field.’ To prove his point, Cialdini cites an interview
                                    with molecular biologist James Watson. Watson, together with Francis Crick,
                                    discovered the structure of DNA, the genetic information carrier of all living
                                    organisms. ‘When asked how they had cracked the code ahead of an array of highly
                                    accomplished rival investigators, he said something that stunned me. He said he and
                                    Crick had succeeded because they were aware that they weren’t the most intelligent
                                    of the scientists pursuing the answer. The smartest scientist was called Rosalind
                                    Franklin who, Watson said, “was so intelligent she rarely sought advice”.’</p>
                                <p>Teamwork taps into one of the basic drivers of human behaviour. ‘The principle of
                                    social proof is so pervasive that we don’t even recognise it,’ says Cialdini. ‘If
                                    your project is being resisted, for example, by a group of veteran employees, ask
                                    another old-timer to speak up for it.’ Cialdini is not alone in advocating this
                                    strategy. Research shows that peer power, used horizontally not vertically, is much
                                    more powerful than any boss’s speech.</p>
                                <p>Writing, visualising and prototyping can stimulate the flow of new ideas. Cialdini
                                    cites scores of research papers and historical events that prove that even something
                                    as simple as writing deepens every individual’s engagement in the project. It is, he
                                    says, the reason why all those competitions on breakfast cereal packets encouraged
                                    us to write in saying, in no more than 10 words: ‘I like Kellogg’s Com Flakes
                                    because… .’ The very act of writing makes us more likely to believe it.</p>
                                <p>Authority doesn’t have to inhibit innovation but it often does. The wrong kind of
                                    leadership will lead to what Cialdini calls ‘captainitis, the regrettable tendency
                                    of team members to opt out of team responsibilities that are properly theirs’. He
                                    calls it captainitis because, he says, ‘crew members of multipilot aircraft exhibit
                                    a sometimes deadly passivity when the flight captain makes a clearly wrong-headed
                                    decision’. This behaviour is not, he says, unique to air travel, but can happen in
                                    any workplace where the leader is overbearing.</p>
                                <p>At the other end of the scale is the 1980s Memphis design collective, a group of
                                    young designers for whom ‘the only rule was that there were no rules’. This
                                    environment encouraged a free interchange of ideas, which led to more creativity
                                    with form, function, colour and materials that revolutionised attitudes to furniture
                                    design.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-mse">
                                <fieldset class="q-item">
                                    <h3>Question 1-5</h3>
                                    <p class="lead">Complete each sentence with the correct ending, A-G, below.
                                    </p>
                                    <p>Write the correct letter, <b>A-G</b>, in boxes on your answer sheet</p>
                                    <ul class="legend">
                                        <li><strong>A</strong> take chances.</li>
                                        <li><strong>B</strong> share their ideas.</li>
                                        <li><strong>C</strong> become competitive.</li>
                                        <li><strong>D</strong> get promotion.</li>
                                        <li><strong>E</strong> avoid risk.</li>
                                        <li><strong>F</strong> ignore their duties.</li>
                                        <li><strong>G</strong> remain in their jobs.</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Employees whose values match those of their employers are more likely to
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-1" class="q-dropdown">
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
                                            At times of change, people tend to
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-2" class="q-dropdown">
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
                                            If people are aware of what they might lose, they will often
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-3" class="q-dropdown">
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
                                            People working under a dominant boss are liable to
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-4" class="q-dropdown">
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
                                            Employees working in organisations with few rules are more likely to
                                            <span class="q-question">
                                                <select name="XJ3XOcvqPbgdZwyl-5" class="q-dropdown">
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
                                    <button type="button" class="btn btn-primary try-again" id="again-mse"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-mse">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Yes/No/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3 class="passage-title">The psychology of innovation</h3>
                                <p><i>Why are so few companies truly innovative?</i></p>
                                <p>Innovation is key to business survival, and companies put substantial resources into
                                    inspiring employees to develop new ideas. There are, nevertheless, people working in
                                    luxurious, state-of-the-art centres designed to stimulate innovation who find that
                                    their environment doesn’t make them feel at all creative. And there are those who
                                    don’t have a budget, or much space, but who innovate successfully.</p>
                                <p>For Robert B. Cialdini, Professor of Psychology at Arizona State University, one
                                    reason that companies don’t succeed as often as they should is that innovation
                                    starts with recruitment. Research shows that the fit between an employee’s values
                                    and a company’s values makes a difference to what contribution they make and
                                    whether, two years after they join, they’re still at the company. Studies at Harvard
                                    Business School show that, although some individuals may be more creative than
                                    others, almost every individual can be creative in the right circumstances.</p>
                                <p>One of the most famous photographs in the story of rock’n’roll emphasises Ciaidini’s
                                    views. The 1956 picture of singers Elvis Presley, Carl Perkins, Johnny Cash and
                                    Jerry Lee Lewis jamming at a piano in Sun Studios in Memphis tells a hidden story.
                                    Sun’s ‘million-dollar quartet’ could have been a quintet. Missing from the picture
                                    is Roy Orbison’ a greater natural singer than Lewis, Perkins or Cash. Sam Phillips,
                                    who owned Sun, wanted to revolutionise popular music with songs that fused black and
                                    white music, and country and blues. Presley, Cash, Perkins and Lewis instinctively
                                    understood Phillips’s ambition and believed in it. Orbison wasn’t inspired by the
                                    goal, and only ever achieved one hit with the Sun label.</p>
                                <p>The value fit matters, says Cialdini, because innovation is, in part, a process of
                                    change, and under that pressure we, as a species, behave differently, ‘When things
                                    change, we are hard-wired to play it safe.’ Managers should therefore adopt an
                                    approach that appears counterintuitive -they should explain what stands to be lost
                                    if the company fails to seize a particular opportunity. Studies show that we
                                    invariably take more gambles when threatened with a loss than when offered a reward.
                                </p>
                                <p>Managing innovation is a delicate art. It’s easy for a company to be pulled in
                                    conflicting directions as the marketing, product development, and finance
                                    departments each get different feedback from different sets of people. And without a
                                    system which ensures collaborative exchanges within the company, it’s also easy for
                                    small ‘pockets of innovation’ to disappear. Innovation is a contact sport. You can’t
                                    brief people just by saying, ‘We’re going in this direction and I’m going to take
                                    you with me.’</p>
                                <p>Cialdini believes that this ‘follow-the-leader syndrome, is dangerous, not least
                                    because it encourages bosses to go it alone. ‘It’s been scientifically proven that
                                    three people will be better than one at solving problems, even if that one person is
                                    the smartest person in the field.’ To prove his point, Cialdini cites an interview
                                    with molecular biologist James Watson. Watson, together with Francis Crick,
                                    discovered the structure of DNA, the genetic information carrier of all living
                                    organisms. ‘When asked how they had cracked the code ahead of an array of highly
                                    accomplished rival investigators, he said something that stunned me. He said he and
                                    Crick had succeeded because they were aware that they weren’t the most intelligent
                                    of the scientists pursuing the answer. The smartest scientist was called Rosalind
                                    Franklin who, Watson said, “was so intelligent she rarely sought advice”.’</p>
                                <p>Teamwork taps into one of the basic drivers of human behaviour. ‘The principle of
                                    social proof is so pervasive that we don’t even recognise it,’ says Cialdini. ‘If
                                    your project is being resisted, for example, by a group of veteran employees, ask
                                    another old-timer to speak up for it.’ Cialdini is not alone in advocating this
                                    strategy. Research shows that peer power, used horizontally not vertically, is much
                                    more powerful than any boss’s speech.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-ynng">
                                <fieldset class="q-item">
                                    <h3>Question 1-5</h3>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>YES</strong> if the statement agrees with the information</li>
                                        <li><strong>NO</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
                                            about this.</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        The physical surroundings in which a person works play a key role in determining
                                        their creativity.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Most people have the potential to be creative.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Teams work best when their members are of equally matched intelligence.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        It is easier for smaller companies to be innovative.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        A manager’s approval of an idea is more persuasive than that of a colleague.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XJ3XOcvqPbgdZwyl-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-ynng"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-ynng">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @include('ielts.sets.layouts.practice.listening_reading.components')
    @include('ielts.sets.layouts.practice.listening_reading.script')

    {{-- fungsi untuk submit --}}
    <script>
        $("#submit-tfng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng", "XJ3XOcvqPbgdZwyl", "tfng", $(this), "again-tfng",
            "True, False or Not Given");
        });

        $("#submit-tfng2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng2", "XJ3XOcvqPbgdZwyl", "tfng", $(this), "again-tfng2",
                "True, False or Not Given");
        });

        $("#submit-ynng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-ynng", "XJ3XOcvqPbgdZwyl", "ynng", $(this), "again-ynng", "Yes, No or Not Given");
        });

        $("#submit-mse").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mse", "XJ3XOcvqPbgdZwyl", "mse", $(this), "again-mse", "Matching Sentence Ending");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one", "XJ3XOcvqPbgdZwyl", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-mh").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mh", "XJ3XOcvqPbgdZwyl", "mh", $(this), "again-mh", "Matching Heading");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "XJ3XOcvqPbgdZwyl", "tc", $(this), "again-tc", "Table Completion");
        });

        $("#submit-sa").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-sa", "XJ3XOcvqPbgdZwyl", "sa", $(this), "again-sa", "Short Answer");
        });
    </script>

    <!-- script bagian part soal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const section = document.querySelector('.parts-section');
            if (!section) return;

            const xTabs = section.querySelector('.x-tabs');
            const tabs = Array.from(xTabs.querySelectorAll('.x-tab'));
            const panels = Array.from(section.querySelectorAll('.x-panel'));

            function updateEdgeHints() {
                const max = xTabs.scrollWidth - xTabs.clientWidth;
                const x = Math.round(xTabs.scrollLeft);
                xTabs.classList.toggle('has-left', x > 0);
                xTabs.classList.toggle('has-right', x < max - 1);
            }

            function setActive(id) {
                tabs.forEach(btn => {
                    const active = btn.dataset.id === id;
                    btn.classList.toggle('is-active', active);
                    btn.setAttribute('aria-selected', active ? 'true' : 'false');
                    btn.tabIndex = active ? 0 : -1;
                    if (active) {
                        btn.scrollIntoView({
                            behavior: 'smooth',
                            inline: 'center',
                            block: 'nearest'
                        });
                    }
                });
                panels.forEach(p => {
                    const open = p.id === `panel-${id}`;
                    if (open) {
                        p.removeAttribute('hidden');
                        p.classList.add('is-open');
                    } else {
                        p.setAttribute('hidden', '');
                        p.classList.remove('is-open');
                    }
                });
                xTabs.dataset.active = id;
            }

            xTabs.addEventListener('click', (e) => {
                const btn = e.target.closest('.x-tab');
                if (!btn || !xTabs.contains(btn)) return;
                setActive(btn.dataset.id);
            });

            /* Drag/Swipe pada .x-tabs */
            let down = false,
                moved = false,
                startX = 0,
                startLeft = 0,
                pid = null;
            xTabs.addEventListener('pointerdown', (e) => {
                // Hanya izinkan drag jika bukan klik pada tab
                if (e.target.closest('.x-tab')) {
                    down = false;
                    return;
                }
                down = true;
                moved = false;
                pid = e.pointerId;
                xTabs.setPointerCapture(pid);
                startX = e.clientX;
                startLeft = xTabs.scrollLeft;
            });
            xTabs.addEventListener('pointermove', (e) => {
                if (!down) return;
                const dx = e.clientX - startX;
                if (Math.abs(dx) > 3) moved = true;
                xTabs.scrollLeft = startLeft - dx;
            });

            function endDrag(e) {
                if (pid) {
                    try {
                        xTabs.releasePointerCapture(pid);
                    } catch {}
                }
                pid = null;
                down = false;
                if (moved && e && e.target.closest('.x-tab')) e.preventDefault();
                moved = false;
            }
            xTabs.addEventListener('pointerup', endDrag);
            xTabs.addEventListener('pointercancel', endDrag);
            xTabs.addEventListener('pointerleave', endDrag);

            /* Wheel vertikal -> horizontal (trackpad/mouse) */
            xTabs.addEventListener('wheel', (e) => {
                if (Math.abs(e.deltaY) > Math.abs(e.deltaX) && xTabs.scrollWidth > xTabs.clientWidth) {
                    xTabs.scrollBy({
                        left: e.deltaY,
                        behavior: 'auto'
                    });
                    e.preventDefault();
                }
            }, {
                passive: false
            });

            /* Keyboard navigation */
            tabs.forEach(btn => {
                btn.addEventListener('keydown', (e) => {
                    if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
                    e.preventDefault();
                    const idx = tabs.indexOf(btn);
                    const nextIdx = e.key === 'ArrowRight' ? (idx + 1) % tabs.length : (idx - 1 +
                        tabs.length) % tabs.length;
                    tabs[nextIdx].focus();
                    tabs[nextIdx].click();
                });
            });

            /* Init */
            updateEdgeHints();
            xTabs.addEventListener('scroll', updateEdgeHints);
            window.addEventListener('resize', updateEdgeHints);
            setActive('tfng');
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

            fqToggle.addEventListener('click', () => {
                isCollapsed = !isCollapsed;
                floatingQ.classList.toggle('collapsed', isCollapsed);
                floatingQ.classList.toggle('expanded', !isCollapsed);
            });

            // Generate question numbers
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

                    // Scroll ke soal saat diklik
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        scrollToQuestion(i, partId);
                    });

                    fqList.appendChild(item);
                }
            }

            // Scroll ke soal tertentu
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

            // Update status soal (radio, dropdown, text)
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

                    // Dropdown
                    const dropdown = question.querySelector('select.q-dropdown');
                    if (dropdown && dropdown.value !== '') answered = true;

                    // Text input
                    const textInput = question.querySelector('input[type="text"], textarea');
                    if (textInput && textInput.value.trim() !== '') answered = true;

                    if (answered) item.classList.add('answered');
                }
            }

            // Deteksi jawaban berubah
            function watchAnswerChanges() {
                document.addEventListener('input', (e) => {
                    const question = e.target.closest('[data-q]');
                    if (question) updateQuestionStatus(currentPart);
                });

                document.addEventListener('change', (e) => {
                    const question = e.target.closest('[data-q]');
                    if (question) updateQuestionStatus(currentPart);
                });

                document.addEventListener('click', (e) => {
                    const option = e.target.closest('.q-option');
                    if (option) setTimeout(() => updateQuestionStatus(currentPart), 50);
                });
            }

            // Deteksi perubahan part
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
                if (tabsContainer) observer.observe(tabsContainer, {
                    attributes: true,
                    attributeFilter: ['data-active']
                });
            }

            // Update question list untuk part aktif
            function updateQuestionListForPart(partId) {
                const questionCounts = {
                    'tfng': 5,
                    'tfng2': 5,
                    'ynng': 5,
                    'mse': 5,
                    'one': 4,
                    'mh': 8,
                    'tc': 5,
                    'sa': 3
                };
                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // Init
            updateQuestionListForPart('tfng');
            watchPartChanges();
            watchAnswerChanges();
            setInterval(() => updateQuestionStatus(currentPart), 2000);
        });
    </script>

</body>

</html>
