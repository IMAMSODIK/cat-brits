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

        #panel-nc .q-number-box,
        #panel-summary_completion .q-number-box,
        #panel-summary_completion2 .q-number-box {
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

        #panel-nc .q-text,
        #panel-summary_completion .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        #panel-nc input,
        #panel-summary_completion input,
        #panel-sentence_completion input {
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
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="nc">
            <button class="x-tab is-active" role="tab" id="tab-nc" aria-controls="panel-nc"
                aria-selected="true" data-id="nc">Note Completion</button>
            <button class="x-tab" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">True/False/Not Given</button>
            <button class="x-tab" role="tab" id="tab-mh" aria-controls="panel-mh" aria-selected="false"
                data-id="mh">Matching Headings</button>
            <button class="x-tab" role="tab" id="tab-two_choices" aria-controls="panel-two_choices" aria-selected="false"
                data-id="two_choices">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-two_choices2" aria-controls="panel-two_choices2" aria-selected="false"
                data-id="two_choices2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-sentence_completion" aria-controls="panel-sentence_completion" aria-selected="false"
                data-id="sentence_completion">Sentence Completion</button>
            <button class="x-tab" role="tab" id="tab-matching_features" aria-controls="panel-matching_features" aria-selected="false"
                data-id="matching_features">Matching Features</button>
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Matching Sentence ending</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
        </div>

        <div class="x-panels">
            <div id="panel-nc" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-nc">
                <div class="x-panel-inner">Content: Note Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Frozen Food</h3>
                            <div class="passage-body">
                                <p><i>A US perspective on the development of the frozen food industry</i></p>
                                <p>At some point in history, humans discovered that ice preserved food. There is evidence that winter ice was stored to preserve food in the summer as far back as 10,000 years ago. Two thousand years ago, the inhabitants of South America’s Andean mountains had a unique means of conserving potatoes for later consumption. They froze them overnight, then trampled them to squeeze out the moisture, then dried them in the sun. This preserved their nutritional value – if not their aesthetic appeal.</p>
                                <p>Natural ice remained the main form of refrigeration until late in the 19th century. In the early 1800s, ship owners from Boston, USA, had enormous blocks of Arctic ice towed all over the Atlantic for the purpose of food preservation. In 1851, railroads first began putting blocks of ice in insulated rail cars to send butter from Ogdensburg, New York, to Boston.</p>
                                <p>Finally, in 1870, Australian inventors found a way to make ‘mechanical ice’. They used a compressor to force a gas-ammonia at first and later Freon-through a condenser. The compressed gas gave up some of its heat as it moved through the condenser. Then the gas was released quickly into a low-pressure evaporator coil where it became liquid and cold. Air was blown over the evaporator coil and then this cooled air passed into an insulated compartment, lowering its temperature to freezing point.</p>
                                <p>Initially, this process was invented to keep Australian beer cool even in hot weather. But Australian cattlemen were quick to realize that, if they could put this new invention on a ship, they could export meat across the oceans. In 1880, a shipment of Australian beef and mutton was sent, frozen, to England. While the food frozen this way was still palatable, there was some deterioration. During the freezing process, crystals formed within the cells of the food, and when the ice expanded and the cells burst, this spoilt the flavor and texture of the food.</p>
                                <p>The modern frozen food industry began with the indigenous Inuit people of Canada. In 1912, a biology student in Massachusetts, USA, named Clarence Birdseye, ran out of money and went to Labrador in Canada to trap and trade furs. While he was there, he became fascinated with how the Inuit would quickly freeze fish in the Arctic air. The fish looked and tasted fresh even months later.</p>
                                <p>Birdseye returned to the USA in 1917 and began developing mechanical freezers capable of quick-freezing food. Birdseye methodically kept inventing better freezers and gradually built a business selling frozen fish from Gloucester, Massachusetts. In 1929, his business was sold and became General Foods, but he stayed with the company as director of research, and his division continued to innovate.</p>
                                <p>Birdseye was responsible for several key innovations that made the frozen food industry possible. He developed quick-freezing techniques that reduced the damage that crystals caused, as well as the technique of freezing the product in the package it was to be sold in. He also introduced the use of cellophane, the first transparent material for food packaging, which allowed consumers to see the quality of the product. Birdseye products also came in convenient size packages that could be prepared with a minimum of effort.</p>
                                <p>But there were still obstacles. In the 1930s, few grocery stores could afford to buy freezers for a market that wasn’t established yet. So, Birdseye leased inexpensive freezer cases to them. He also leased insulated railroad cars so that he could ship his products nationwide. However, few consumers had freezers large enough or efficient enough to take advantage of the products.</p>
                                <p>Sales increased in the early 1940s, when World War II gave a boost to the frozen food industry because tin was being used for munitions. Canned foods were rationed to save tin for the war effort, while frozen foods were abundant and cheap. Finally, by the 1950s, refrigerator technology had developed far enough to make these appliances affordable for the average family. By 1953, 33 million US families owned a refrigerator, and manufacturers were gradually increasing the size of the freezer compartments in them.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-nc">
                                <fieldset class="q-item">
                                    <h3>Questions 1-7</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <p><b>The history of frozen food</b></p>
                                    <p><b>2,000 years ago, South America</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="1">
                                                People conserved the nutritional value of
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="bBhJMdwYSokWGAc9-1" class="q-text" placeholder="">
                                                , using a method of freezing then drying.
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>1851, USA</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="2">
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="bBhJMdwYSokWGAc9-2" class="q-text" placeholder="">
                                                was kept cool by ice during transportation in specially adapted trains.
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>1880, Australia</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="3">
                                                Two kinds of
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="bBhJMdwYSokWGAc9-3" class="q-text" placeholder="">
                                                 were the first frozen food shipped to England.
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>1917 onwards, USA</b></p>
                                    <ul>
                                        <li>Clarence Birdseye introduced innovations including:</li>
                                        <ul>
                                            <li>
                                                <div class="q-list" data-q="4">
                                                    quick-freezing methods, so that
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="bBhJMdwYSokWGAc9-4" class="q-text" placeholder="">
                                                    did not spoil the food.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-list" data-q="5">
                                                    packaging products with
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="bBhJMdwYSokWGAc9-5" class="q-text" placeholder="">
                                                    , so the product was visible.
                                                </div>
                                            </li>
                                        </ul>
                                    </ul>

                                    <p><b>Early 1940s, USA</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="6">
                                                Frozen food became popular because of a shortage of
                                                <span class="q-number-box">6</span>
                                                <input type="text" name="bBhJMdwYSokWGAc9-6" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>1950s, USA</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="7">
                                                A large number of homes now had a
                                                <span class="q-number-box">7</span>
                                                <input type="text" name="bBhJMdwYSokWGAc9-7" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-nc"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="7" id="submit-nc">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>Natural ice remained the main form of refrigeration until late in the 19th century. In the early 1800s, ship owners from Boston, USA, had enormous blocks of Arctic ice towed all over the Atlantic for the purpose of food preservation. In 1851, railroads first began putting blocks of ice in insulated rail cars to send butter from Ogdensburg, New York, to Boston.</p>
                                <p>Finally, in 1870, Australian inventors found a way to make ‘mechanical ice’. They used a compressor to force a gas-ammonia at first and later Freon-through a condenser. The compressed gas gave up some of its heat as it moved through the condenser. Then the gas was released quickly into a low-pressure evaporator coil where it became liquid and cold. Air was blown over the evaporator coil and then this cooled air passed into an insulated compartment, lowering its temperature to freezing point.</p>
                                <p>Initially, this process was invented to keep Australian beer cool even in hot weather. But Australian cattlemen were quick to realize that, if they could put this new invention on a ship, they could export meat across the oceans. In 1880, a shipment of Australian beef and mutton was sent, frozen, to England. While the food frozen this way was still palatable, there was some deterioration. During the freezing process, crystals formed within the cells of the food, and when the ice expanded and the cells burst, this spoilt the flavor and texture of the food.</p>
                                <p>The modern frozen food industry began with the indigenous Inuit people of Canada. In 1912, a biology student in Massachusetts, USA, named Clarence Birdseye, ran out of money and went to Labrador in Canada to trap and trade furs. While he was there, he became fascinated with how the Inuit would quickly freeze fish in the Arctic air. The fish looked and tasted fresh even months later.</p>
                                <p>Birdseye returned to the USA in 1917 and began developing mechanical freezers capable of quick-freezing food. Birdseye methodically kept inventing better freezers and gradually built a business selling frozen fish from Gloucester, Massachusetts. In 1929, his business was sold and became General Foods, but he stayed with the company as director of research, and his division continued to innovate.</p>
                                <p>Birdseye was responsible for several key innovations that made the frozen food industry possible. He developed quick-freezing techniques that reduced the damage that crystals caused, as well as the technique of freezing the product in the package it was to be sold in. He also introduced the use of cellophane, the first transparent material for food packaging, which allowed consumers to see the quality of the product. Birdseye products also came in convenient size packages that could be prepared with a minimum of effort.</p>
                                <p>But there were still obstacles. In the 1930s, few grocery stores could afford to buy freezers for a market that wasn’t established yet. So, Birdseye leased inexpensive freezer cases to them. He also leased insulated railroad cars so that he could ship his products nationwide. However, few consumers had freezers large enough or efficient enough to take advantage of the products.</p>
                                <p>Sales increased in the early 1940s, when World War II gave a boost to the frozen food industry because tin was being used for munitions. Canned foods were rationed to save tin for the war effort, while frozen foods were abundant and cheap. Finally, by the 1950s, refrigerator technology had developed far enough to make these appliances affordable for the average family. By 1953, 33 million US families owned a refrigerator, and manufacturers were gradually increasing the size of the freezer compartments in them.</p>
                                <p>1950s families were also looking for convenience at mealtimes, so the moment was right for the arrival of the ‘TV Dinner’. Swanson Foods was a large, nationally recognized producer of canned and frozen poultry. In 1954, the company adapted some of Birdseye’s freezing techniques, and with the help of a clever name and a huge advertising budget, it launched the first ‘TV Dinner’. This consisted of frozen turkey, potatoes and vegetables served in the same segmented aluminum tray that was used by airlines. The product was an instant success. Within a year, Swanson had sold 13 million TV dinners. American consumers couldn’t resist the combination of a trusted brand name, a single-serving package and the convenience of a meal that could be ready after only 25 minutes in a hot oven. By 1959, Americans were spending $2.7 billion annually on frozen foods, and half a billion of that was spent on ready-prepared meals such as the TV Dinner.</p>
                                <p>Today, the US frozen food industry has a turnover of over $67 billion annually, with $26.6 billion of that sold to consumers for home consumption. The remaining $40 billion in frozen food sales come through restaurants, cafeterias, hospitals and schools, and that represents a third of the total food service sales.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-6</b></p>
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
                                        The ice transportation business made some Boston ship owners very wealthy in the early 1800s.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        A disadvantage of the freezing process invented in Australia was that it affected the taste of food.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Clarence Birdseye travelled to Labrador in order to learn how the Inuit people froze fish.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Swanson Foods invested a great deal of money in the promotion of the TV Dinner.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        Swanson Foods developed a new style of container for the launch of the TV Dinner.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        The US frozen food industry is currently the largest in the world.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-6" value="NOT GIVEN" />
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
                                        data-count="6" id="submit-tfng">
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
                                <h3>Can the planet’s coral reefs be saved?</h3>
                                <h3>A</h3>
                                <p>Conservationists have put the final touches to a giant artificial reef they have been assembling at the world-renowned Zoological Society of London (London Zoo). Samples of the planet’s most spectacular corals – vivid green branching coral, yellow scroll, blue ridge and many more species – have been added to the giant tank along with fish that thrive in their presence: blue tang, clownfish and many others. The reef is in the zoo’s new gallery, Tiny Giants, which is dedicated to the minuscule invertebrate creatures that sustain life across the planet. The coral reef tank and its seven-metre-wide window form the core of the exhibition.</p>
                                <p>‘Coral reefs are the most diverse ecosystems on Earth and we want to show people how wonderful they are,’ said Paul Pearce-Kelly, senior curator of invertebrates and fish at the Zoological Society of London. ‘However, we also want to highlight the research and conservation efforts that are now being carried out to try to save them from the threat of global warming.’ They want people to see what is being done to try to save these wonders.</p>
                                <h3>B</h3>
                                <p>Corals are composed of tiny animals, known as polyps, with tentacles for capturing small marine creatures in the sea water. These polyps are transparent but get their brilliant tones of pink, orange, blue, green, etc. from algae that live within them, which in turn get protection, while their photosynthesising of the sun’s rays provides nutrients for the polyps. This comfortable symbiotic relationship has led to the growth of coral reefs that cover 0.1% of the planet’s ocean bed while providing homes for more than 25% of marine species, including fish, molluscs, sponges and shellfish.</p>
                                <h3>C</h3>
                                <p>As a result, coral reefs are often described as the ‘rainforests of the sea’, though the comparison is dismissed by some naturalists, including David Attenborough. ‘People say you cannot beat the rainforest,’ Attenborough has stated. ‘But that is simply not true. You go there and the first thing you think is: where are the birds? Where are the animals? They are hiding in the trees, of course. No, if you want beauty and wildlife, you want a coral reef. Put on a mask and stick your head under the water. The sight is mindblowing.’</p>
                                <h3>D</h3>
                                <p>Unfortunately, these majestic sights are now under very serious threat, with the most immediate problem coming in the form of thermal stress. Rising ocean temperatures are triggering bleaching events that strip reefs of their colour and eventually kill them. And that is just the start. Other menaces include ocean acidification, sea level increase, pollution by humans, deoxygenation and ocean current changes, while the climate crisis is also increasing habitat destruction. As a result, vast areas – including massive chunks of Australia’s Great Barrier Reef – have already been destroyed, and scientists advise that more than 90% of reefs could be lost by 2050 unless urgent action is taken to tackle global heating and greenhouse gas emissions.</p>
                                <p>Pearce-Kelly says that coral reefs have to survive really harsh conditions – wave erosion and other factors. And ‘when things start to go wrong in the oceans, then corals will be the first to react. And that is exactly what we are seeing now. Coral reefs are dying and they are telling us that all is not well with our planet.’</p>
                                <h3>E</h3>
                                <p>However, scientists are trying to pinpoint hardy types of coral that could survive our overheated oceans, and some of this research will be carried out at London Zoo. ‘Behind our … coral reef tank we have built laboratories where scientists will be studying coral species,’ said Pearce-Kelly. One aim will be to carry out research on species to find those that can survive best in warm, acidic waters. Another will be to try to increase coral breeding rates. ‘Coral spawn just once a year,’ he added. ‘However, aquarium-based research has enabled some corals to spawn artificially, which can assist coral reef restoration efforts. And if this can be extended for all species, we could consider the launching of coral-spawning programmes several times a year. That would be a big help in restoring blighted reefs.’</p>
                                <h3>F</h3>
                                <p>Research in these fields is being conducted in laboratories around the world, with the London Zoo centre linked to this global network. Studies carried out in one centre can then be tested in others. The resulting young coral can then be displayed in the tank in Tiny Giants. ‘The crucial point is that the progress we make in making coral better able to survive in a warming world can be shown to the public and encourage them to believe that we can do something to save the planet’s reefs,’ said Pearce-Kelly. ‘Saving our coral reefs is now a critically important ecological goal.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-mh">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-6</b></p>
                                    <p class="lead">Choose the correct heading for each section from the list of headings below.</p>
                                    <ul class="legend">
                                        <li><strong>i</strong> Tried and tested solutions</li>
                                        <li><strong>ii</strong> Cooperation beneath the waves</li>
                                        <li><strong>iii</strong> Working to lessen the problems</li>
                                        <li><strong>iv</strong> Disagreement about the accuracy of a certain phrase</li>
                                        <li><strong>v</strong> Two clear educational goals</li>
                                        <li><strong>vi</strong> Promoting hope</li>
                                        <li><strong>vii</strong> A warning of further trouble ahead</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>A</b>
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
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
                                                <select name="bBhJMdwYSokWGAc9-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
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
                                                <select name="bBhJMdwYSokWGAc9-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
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
                                                <select name="bBhJMdwYSokWGAc9-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
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
                                                <select name="bBhJMdwYSokWGAc9-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">6</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>G</b>
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-mh"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="6" id="submit-mh">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-two_choices" class="x-panel" role="tabpanel" aria-labelledby="tab-two_choices" hidden>
                <div class="x-panel-inner">Content: Two Choices</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>D</h3>
                                <p>Unfortunately, these majestic sights are now under very serious threat, with the most immediate problem coming in the form of thermal stress. Rising ocean temperatures are triggering bleaching events that strip reefs of their colour and eventually kill them. And that is just the start. Other menaces include ocean acidification, sea level increase, pollution by humans, deoxygenation and ocean current changes, while the climate crisis is also increasing habitat destruction. As a result, vast areas – including massive chunks of Australia’s Great Barrier Reef – have already been destroyed, and scientists advise that more than 90% of reefs could be lost by 2050 unless urgent action is taken to tackle global heating and greenhouse gas emissions. Pearce-Kelly says that coral reefs have to survive really harsh conditions – wave erosion and other factors. And ‘when things start to go wrong in the oceans, then corals will be the first to react. And that is exactly what we are seeing now. Coral reefs are dying and they are telling us that all is not well with our planet.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-two_choices">
                                
                                <fieldset class="q-item">
                                    <p>Questions 1-2</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        <span class="q-number">2</span>
                                        Which <b>TWO</b> of these causes of damage to coral reefs are mentioned by the writer of the text?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-1[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">a rising number of extreme storms</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-1[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">the removal of too many fish from the sea</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-1[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">the contamination of the sea from waste</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-1[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">increased disease among marine species</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-1[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">alterations in the usual flow of water in the seas</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-two_choices"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="2" id="submit-two_choices">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-two_choices2" class="x-panel" role="tabpanel" aria-labelledby="tab-two_choices2" hidden>
                <div class="x-panel-inner">Content: Two Choices 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>E</h3>
                                <p>However, scientists are trying to pinpoint hardy types of coral that could survive our overheated oceans, and some of this research will be carried out at London Zoo. ‘Behind our … coral reef tank we have built laboratories where scientists will be studying coral species,’ said Pearce-Kelly. One aim will be to carry out research on species to find those that can survive best in warm, acidic waters. Another will be to try to increase coral breeding rates. ‘Coral spawn just once a year,’ he added. ‘However, aquarium-based research has enabled some corals to spawn artificially, which can assist coral reef restoration efforts. And if this can be extended for all species, we could consider the launching of coral-spawning programmes several times a year. That would be a big help in restoring blighted reefs.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-two_choices2">
                                <fieldset class="q-item">
                                    <p>Questions 1-2</p>
                                    <p>Choose <b>TWO</b> letters, <b>A–E</b>.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        <span class="q-number">2</span>
                                        Which <b>TWO</b> of the following statements are true of the researchers at London Zoo?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-3[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">They are hoping to expand the numbers of different corals being bred in laboratories.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-3[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">They want to identify corals that can cope well with the changed sea conditions.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-3[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">They are looking at ways of creating artificial reefs that corals could grow on.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-3[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">They are trying out methods that would speed up reproduction in some corals.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="bBhJMdwYSokWGAc9-3[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">They are investigating materials that might protect reefs from higher temperatures.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-two_choices2"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="2" id="submit-two_choices2">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-sentence_completion" class="x-panel" role="tabpanel" aria-labelledby="tab-sentence_completion" hidden>
                <div class="x-panel-inner">Content: Sentence Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>B</h3>
                                <p>Corals are composed of tiny animals, known as polyps, with tentacles for capturing small marine creatures in the sea water. These polyps are transparent but get their brilliant tones of pink, orange, blue, green, etc. from algae that live within them, which in turn get protection, while their photosynthesising of the sun’s rays provides nutrients for the polyps. This comfortable symbiotic relationship has led to the growth of coral reefs that cover 0.1% of the planet’s ocean bed while providing homes for more than 25% of marine species, including fish, molluscs, sponges and shellfish.</p>
                                <h3>C</h3>
                                <p>As a result, coral reefs are often described as the ‘rainforests of the sea’, though the comparison is dismissed by some naturalists, including David Attenborough. ‘People say you cannot beat the rainforest,’ Attenborough has stated. ‘But that is simply not true. You go there and the first thing you think is: where are the birds? Where are the animals? They are hiding in the trees, of course. No, if you want beauty and wildlife, you want a coral reef. Put on a mask and stick your head under the water. The sight is mindblowing.’</p>
                                <h3>D</h3>
                                <p>Unfortunately, these majestic sights are now under very serious threat, with the most immediate problem coming in the form of thermal stress. Rising ocean temperatures are triggering bleaching events that strip reefs of their colour and eventually kill them. And that is just the start. Other menaces include ocean acidification, sea level increase, pollution by humans, deoxygenation and ocean current changes, while the climate crisis is also increasing habitat destruction. As a result, vast areas – including massive chunks of Australia’s Great Barrier Reef – have already been destroyed, and scientists advise that more than 90% of reefs could be lost by 2050 unless urgent action is taken to tackle global heating and greenhouse gas emissions.</p>
                                <p>Pearce-Kelly says that coral reefs have to survive really harsh conditions – wave erosion and other factors. And ‘when things start to go wrong in the oceans, then corals will be the first to react. And that is exactly what we are seeing now. Coral reefs are dying and they are telling us that all is not well with our planet.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-sentence_completion">
                                <fieldset class="q-item">
                                    <h3>Questions 1-3</h3>
                                    <p class="lead">Complete the sentences below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Corals have a number of
                                            <span class="q-question">
                                                <input type="text" name="bBhJMdwYSokWGAc9-1" class="q-text"
                                                    placeholder=""> which they use to collect their food.
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            Algae gain
                                            <span class="q-question">
                                                <input type="text" name="bBhJMdwYSokWGAc9-2" class="q-text"
                                                    placeholder="">
                                                from being inside the coral.
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            Increases in the warmth of the sea water can remove the
                                            <span class="q-question">
                                                <input type="text" name="bBhJMdwYSokWGAc9-3" class="q-text"
                                                    placeholder="">
                                                from coral.
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-sentence_completion"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="3" id="submit-sentence_completion">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-matching_features" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_features" hidden>
                <div class="x-panel-inner">Content: Matching Features</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>On the question of using robots to colonise other planets and exploit mineral resources, engineering Professor Daniel Wolpert replied, ‘I don’t see a pressing need to colonise other planets unless we can bring [these] resources back to Earth. The vast majority of Earth is currently inaccessible to us. Using robots to gather resources nearer to home would seem to be a better use of our robotic tools.’</p>
                                <p>Meanwhile, for anthropology Professor Kathleen Richardson, the idea of ‘colonisation’ of other planets seemed morally dubious: ‘I think whether we do something on Earth or on Mars we should always do it in the spirit of a genuine interest in “the Other”, not to impose a particular model, but to meet “the Other”.’</p>
                                <p>In response to the second question, ‘How soon will machine intelligence outstrip human intelligence?’, Rees mentions robots that are advanced enough to beat humans at chess, but then goes on to say, ‘Robots are still limited in their ability to sense their environment: they can’t yet recognise and move the pieces on a real chessboard as cleverly as a child can. Later this century, however, their more advanced successors may relate to their surroundings, and to people, as adeptly as we do. Moral questions then arise. … Should we feel guilty about exploiting [sophisticated robots]? Should we fret if they are underemployed, frustrated, or bored?’</p>
                                <p>Wolpert’s response to the question about machine intelligence outstripping human intelligence was this: ‘In a limited sense it already has. Machines can already navigate, remember and search for items with an ability that far outstrips humans. However, there is no machine that can identify visual objects or speech with the reliability and flexibility of humans…. Expecting a machine close to the creative intelligence of a human within the next 50 years would be highly ambitious.’</p>
                                <p>Richardson believes that our fear of machines becoming too advanced has more to do with human nature than anything intrinsic to the machines themselves. In her view, it stems from humans’ tendency to personify inanimate objects: we create machines based on representations of ourselves, imagine that machines think and behave as we do, and therefore see them as an autonomous threat. ‘One of the consequences of thinking that the problem lies with machines is that we tend to imagine they are greater and more powerful than they really are and subsequently they become so.’</p>
                                <p>This led on to the third question, ‘Should we be scared by advances in artificial intelligence?’ To this question, Rees replied, ‘Those who should be worried are the futurologists who believe in the so-called “singularity”.** … And another worry is that we are increasingly dependent on computer networks, and that these could behave like a single “brain” with a mind of its own, and with goals that may be contrary to human welfare. I think we should ensure that robots remain as no more than “idiot savants” lacking the capacity to outwit us, even though they may greatly surpass us in the ability to calculate and process information.’</p>
                                <p>Wolpert’s response was to say that we have already seen the damaging effects of artificial intelligence in the form of computer viruses. ‘But in this case,’ he says, ‘the real intelligence is the malicious designer. Critically, the benefits of computers outweigh the damage that computer viruses cause. Similarly, while there may be misuses of robotics in the near future, the benefits that they will bring are likely to outweigh these negative aspects.’</p>
                                <p>Richardson’s response to this question was this: ‘We need to ask why fears of artificial intelligence and robots persist; none have in fact risen up and challenged human supremacy.’ She believes that as robots have never shown themselves to be a threat to humans, it seems unlikely that they ever will. In fact, she went on, ‘Not all fear [robots]; many people welcome machine intelligence.’</p>
                                <p>In answer to the fourth question, What can science fiction tell us about robotics?’, Rees replied, ‘I sometimes advise students that it’s better to read first-rate science fiction than second-rate science more stimulating, and perhaps no more likely to be wrong.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-matching_features">
                                <fieldset class="q-item">
                                    <h3>Questions 1-7</h3>
                                    <p class="lead">Match each statement with the correct expert, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                                    <p><i>NB You may use any letter more than once.</i></p>
                                    <b>List of Experts</b>
                                    <ul class="legend">
                                        <li><strong>A</strong> Martin Rees</li>
                                        <li><strong>B</strong> Daniel Wolpert</li>
                                        <li><strong>C</strong> Kathleen Richardson</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            For our own safety, humans will need to restrict the abilities of robots.
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-1" class="q-dropdown">
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
                                            The risk of robots harming us is less serious than humans believe it to be. 
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-2" class="q-dropdown">
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
                                            It will take many decades for robot intelligence to be as imaginative as human intelligence.
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-3" class="q-dropdown">
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
                                            We may have to start considering whether we are treating robots fairly.
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-4" class="q-dropdown">
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
                                            Robots are probably of more help to us on Earth than in space.
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-5" class="q-dropdown">
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
                                            The ideas in high-quality science fiction may prove to be just as accurate as those found in the work of mediocre scientists.
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="7">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">7</span>
                                        <span style="flex: 1;">
                                            There are those who look forward to robots developing greater intelligence.
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-7" class="q-dropdown">
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
                                    <button type="button" class="btn btn-primary try-again" id="again-matching_features"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="7" id="submit-matching_features">
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
                                <p>Meanwhile, for anthropology Professor Kathleen Richardson, the idea of ‘colonisation’ of other planets seemed morally dubious: ‘I think whether we do something on Earth or on Mars we should always do it in the spirit of a genuine interest in “the Other”, not to impose a particular model, but to meet “the Other”.’</p>
                                <p>In response to the second question, ‘How soon will machine intelligence outstrip human intelligence?’, Rees mentions robots that are advanced enough to beat humans at chess, but then goes on to say, ‘Robots are still limited in their ability to sense their environment: they can’t yet recognise and move the pieces on a real chessboard as cleverly as a child can. Later this century, however, their more advanced successors may relate to their surroundings, and to people, as adeptly as we do. Moral questions then arise. … Should we feel guilty about exploiting [sophisticated robots]? Should we fret if they are underemployed, frustrated, or bored?’</p>
                                <p>Wolpert’s response to the question about machine intelligence outstripping human intelligence was this: ‘In a limited sense it already has. Machines can already navigate, remember and search for items with an ability that far outstrips humans. However, there is no machine that can identify visual objects or speech with the reliability and flexibility of humans…. Expecting a machine close to the creative intelligence of a human within the next 50 years would be highly ambitious.’</p>
                                <p>Richardson believes that our fear of machines becoming too advanced has more to do with human nature than anything intrinsic to the machines themselves. In her view, it stems from humans’ tendency to personify inanimate objects: we create machines based on representations of ourselves, imagine that machines think and behave as we do, and therefore see them as an autonomous threat. ‘One of the consequences of thinking that the problem lies with machines is that we tend to imagine they are greater and more powerful than they really are and subsequently they become so.’</p>
                                <p>This led on to the third question, ‘Should we be scared by advances in artificial intelligence?’ To this question, Rees replied, ‘Those who should be worried are the futurologists who believe in the so-called “singularity”.** … And another worry is that we are increasingly dependent on computer networks, and that these could behave like a single “brain” with a mind of its own, and with goals that may be contrary to human welfare. I think we should ensure that robots remain as no more than “idiot savants” lacking the capacity to outwit us, even though they may greatly surpass us in the ability to calculate and process information.’</p>
                                <p>Wolpert’s response was to say that we have already seen the damaging effects of artificial intelligence in the form of computer viruses. ‘But in this case,’ he says, ‘the real intelligence is the malicious designer. Critically, the benefits of computers outweigh the damage that computer viruses cause. Similarly, while there may be misuses of robotics in the near future, the benefits that they will bring are likely to outweigh these negative aspects.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-mse">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-3</b></p>
                                    <p class="lead">Complete each sentence with the correct ending, <b>A</b>–<b>D</b>, below.</p>
                                    <strong>A</strong>&nbsp;&nbsp; robots to explore outer space.
                                    <br><strong>B</strong>&nbsp;&nbsp; advances made in machine intelligence so far.
                                    <br><strong>C</strong>&nbsp;&nbsp; changes made to other planets for our own benefit.
                                    <br><strong>D</strong>&nbsp;&nbsp; the harm already done by artificial intelligence.
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            Richardson and Rees express similar views regarding the ethical aspect of
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-1" class="q-dropdown">
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
                                            Rees and Wolpert share an opinion about the extent of
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-2" class="q-dropdown">
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
                                            Wolpert disagrees with Richardson on the question of
                                            <span class="q-question">
                                                <select name="bBhJMdwYSokWGAc9-3" class="q-dropdown">
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
                                    <button type="button" class="btn btn-primary try-again" id="again-mse"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="3" id="submit-mse">
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
                                <p>In response to the second question, ‘How soon will machine intelligence outstrip human intelligence?’, Rees mentions robots that are advanced enough to beat humans at chess, but then goes on to say, ‘Robots are still limited in their ability to sense their environment: they can’t yet recognise and move the pieces on a real chessboard as cleverly as a child can. Later this century, however, their more advanced successors may relate to their surroundings, and to people, as adeptly as we do. Moral questions then arise. … Should we feel guilty about exploiting [sophisticated robots]? Should we fret if they are underemployed, frustrated, or bored?’</p>
                                <p>Wolpert’s response to the question about machine intelligence outstripping human intelligence was this: ‘In a limited sense it already has. Machines can already navigate, remember and search for items with an ability that far outstrips humans. However, there is no machine that can identify visual objects or speech with the reliability and flexibility of humans…. Expecting a machine close to the creative intelligence of a human within the next 50 years would be highly ambitious.’</p>
                                <p>Richardson believes that our fear of machines becoming too advanced has more to do with human nature than anything intrinsic to the machines themselves. In her view, it stems from humans’ tendency to personify inanimate objects: we create machines based on representations of ourselves, imagine that machines think and behave as we do, and therefore see them as an autonomous threat. ‘One of the consequences of thinking that the problem lies with machines is that we tend to imagine they are greater and more powerful than they really are and subsequently they become so.’</p>
                                <p>This led on to the third question, ‘Should we be scared by advances in artificial intelligence?’ To this question, Rees replied, ‘Those who should be worried are the futurologists who believe in the so-called “singularity”.** … And another worry is that we are increasingly dependent on computer networks, and that these could behave like a single “brain” with a mind of its own, and with goals that may be contrary to human welfare. I think we should ensure that robots remain as no more than “idiot savants” lacking the capacity to outwit us, even though they may greatly surpass us in the ability to calculate and process information.’</p>
                                <p>Wolpert’s response was to say that we have already seen the damaging effects of artificial intelligence in the form of computer viruses. ‘But in this case,’ he says, ‘the real intelligence is the malicious designer. Critically, the benefits of computers outweigh the damage that computer viruses cause. Similarly, while there may be misuses of robotics in the near future, the benefits that they will bring are likely to outweigh these negative aspects.’</p>
                                <p>Richardson’s response to this question was this: ‘We need to ask why fears of artificial intelligence and robots persist; none have in fact risen up and challenged human supremacy.’ She believes that as robots have never shown themselves to be a threat to humans, it seems unlikely that they ever will. In fact, she went on, ‘Not all fear [robots]; many people welcome machine intelligence.’</p>
                                <p>In answer to the fourth question, What can science fiction tell us about robotics?’, Rees replied, ‘I sometimes advise students that it’s better to read first-rate science fiction than second-rate science more stimulating, and perhaps no more likely to be wrong.’</p>
                                <p>As his response, Wolpert commented, ‘Science fiction has often been remarkable at predicting the future. Science fiction has painted a vivid spectrum of possible futures, from cute and helpful robots to dystopian robotic societies. Interestingly, almost no science fiction envisages a future without robots.’</p>
                                <p>Finally, on the question of science fiction, Richardson pointed out that in modern society, people tend to think there is reality on the one hand, and fiction and fantasy on the other. She then explained that the division did not always exist, and that scientists and technologists made this separation because they wanted to carve out the sphere of their work. ‘But the divide is not so clear cut, and that is why the worlds seem to collide at times,’ she said. ‘In some cases, we need to bring these different understandings together to get a whole perspective. Perhaps then, we won’t be so frightened that something we create as a copy of ourselves will be a [threat] to us.’</p>
                                <p>** singularity: the point when robots will be able to start creating ever more sophisticated versions of themselves</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-one">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-4</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        What point does Richardson make about fear of machines?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It has grown alongside the development of ever more advanced robots.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It is the result of our inclination to attribute human characteristics to non-human entities.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It has its origins in basic misunderstandings about how inanimate objects function.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It demonstrates a key difference between human intelligence and machine intelligence.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        What potential advance does Rees see as a cause for concern?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">robots outnumbering people</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">robots having abilities which humans do not</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">artificial intelligence developing independent thought</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">artificial intelligence taking over every aspect of our lives</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        What does Wolpert emphasize in his response to the question about science fiction?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">how science fiction influences our attitudes to robots</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">how fundamental robots are to the science fiction genre</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">how the image of robots in science fiction has changed over time</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">how reactions to similar portrayals of robots in science fiction may vary</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        What is Richardson doing in her comment about reality and fantasy?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">warning people not to confuse one with the other</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">outlining ways in which one has impacted on the other</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">recommending a change of approach in how people view them</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="bBhJMdwYSokWGAc9-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">explaining why scientists have a different perspective on them from other people</span>
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

        $("#submit-tfng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng", "bBhJMdwYSokWGAc9", "tfng", $(this), "again-tfng", "True, False or Not Given");
        });

        $("#submit-mh").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mh", "bBhJMdwYSokWGAc9", "mh", $(this), "again-mh", "Matching Headings");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "bBhJMdwYSokWGAc9", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "bBhJMdwYSokWGAc9", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-sentence_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-sentence_completion", "bBhJMdwYSokWGAc9", "sentence_completion", $(this), "again-sentence_completion", "Sentence Completion");
        });

        $("#submit-matching_features").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_features", "bBhJMdwYSokWGAc9", "matching_features", $(this), "again-matching_features", "Matching Features");
        });

        $("#submit-mse").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-mse", "bBhJMdwYSokWGAc9", "mse", $(this), "again-mse", "Matching Sentence Ending");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one", "bBhJMdwYSokWGAc9", "oc", $(this), "again-oc", "One Choice");
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

            /* Event delegation untuk klik tab (lebih andal) */
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
                if (moved && e && e.target.closest('.x-tab')) e.preventDefault(); /* cegah klik nyangkut */
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
            setActive('nc');
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
            let currentPart = 'nc';
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
                    'nc': 7,
                    'tfng': 6,
                    'mh': 6,
                    'two_choices': 2,
                    'two_choices2': 2,
                    'sentence_completion': 3,
                    'matching_features': 7,
                    'mse': 3,
                    'one': 4
                };
                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // Init
            updateQuestionListForPart('nc');
            watchPartChanges();
            watchAnswerChanges();
            setInterval(() => updateQuestionStatus(currentPart), 2000);
        });
    </script>


</body>

</html>
