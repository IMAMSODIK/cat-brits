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
        #panel-tc .q-number-box,
        #panel-summary_completion .q-number-box,
        #panel-summary_completion2 .q-number-box,
        #panel-summary_completion3 .q-number-box {
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
        #panel-tc .q-text,
        #panel-summary_completion .q-text {
            flex: 1;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        #panel-nc input,
        #panel-tc input,
        #panel-summary_completion input,
        #panel-summary_completion2 input,
        #panel-matching_information2 input,
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
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">True/False/Not Given</button>
            <button class="x-tab" role="tab" id="tab-tc" aria-controls="panel-tc"
                aria-selected="false" data-id="tc">Table Completion</button>
            <button class="x-tab" role="tab" id="tab-matching_information" aria-controls="panel-matching_information" aria-selected="false"
                data-id="matching_information">Matching Information</button>
            <button class="x-tab" role="tab" id="tab-summary_completion" aria-controls="panel-summary_completion" aria-selected="false"
                data-id="summary_completion">Summary Completion</button>
            <button class="x-tab" role="tab" id="tab-two_choices" aria-controls="panel-two_choices" aria-selected="false"
                data-id="two_choices">Two Choices</button>
            <button class="x-tab" role="tab" id="tab-two_choices2" aria-controls="panel-two_choices2" aria-selected="false"
                data-id="two_choices2">Two Choices 2</button>
            <button class="x-tab" role="tab" id="tab-matching_information2" aria-controls="panel-matching_information2" aria-selected="false"
                data-id="matching_information2">Matching Information 2</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="false"
                data-id="tfng2">True/False/Not Given 2</button>
            <button class="x-tab" role="tab" id="tab-summary_completion2" aria-controls="panel-summary_completion2" aria-selected="false"
                data-id="summary_completion2">Summary Completion 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Bats to the rescue</h3>
                            <div class="passage-body">
                                <p><i>How Madagascar’s bats are helping to save the rainforest</i></p>
                                <p>There are few places in the world where relations between agriculture and conservation are more strained. Madagascar’s forests are being converted to agricultural land at a rate of one percent every year. Much of this destruction is fuelled by the cultivation of the country’s main staple crop: rice. And a key reason for this destruction is that insect pests are destroying vast quantities of what is grown by local subsistence farmers, leading them to clear forest to create new paddy fields. The result is devastating habitat and biodiversity loss on the island, but not all species are suffering. In fact, some of the island’s insectivorous bats are currently thriving and this has important implications for farmers and conservationists alike.</p>
                                <p>Enter University of Cambridge zoologist Ricardo Rocha. He’s passionate about conservation, and bats. More specifically, he’s interested in how bats are responding to human activity and deforestation in particular. Rocha’s new study shows that several species of bats are giving Madagascar’s rice farmers a vital pest control service by feasting on plagues of insects. And this, he believes, can ease the financial pressure on farmers to turn forest into fields.</p>
                                <p>Bats comprise roughly one-fifth of all mammal species in Madagascar and thirty-six recorded bat species are native to the island, making it one of the most important regions for conservation of this animal group anywhere in the world.</p>
                                <p>Co-leading an international team of scientists, Rocha found that several species of indigenous bats are taking advantage of habitat modification to hunt insects swarming above the country’s rice fields. They include the Malagasy mouse-eared bat, Major’s long-fingered bat, the Malagasy white-bellied free-tailed bat and Peters’ wrinkle-lipped bat.</p>
                                <p>‘These winner species are providing a valuable free service to Madagascar as biological pest suppressors,’ says Rocha. ‘We found that six species of bat are preying on rice pests, including the paddy swarming caterpillar and grass webworm. The damage which these insects cause puts the island’s farmers under huge financial pressure and that encourages deforestation.’</p>
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
                                        Many Madagascan forests are being destroyed by attacks from insects.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Loss of habitat has badly affected insectivorous bats in Madagascar.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Ricardo Rocha has carried out studies of bats in different parts of the world.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Habitat modification has resulted in indigenous bats in Madagascar becoming useful to farmers.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        The Malagasy mouse-eared bat is more common than other indigenous bat species in Madagascar.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        Bats may feed on paddy swarming caterpillars and grass webworms.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-6" value="NOT GIVEN" />
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
            <div id="panel-tc" class="x-panel" role="tabpanel" aria-labelledby="tab-tc" hidden>
                <div class="x-panel-inner">Content: Table Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <article class="passage" aria-label="Reading Passage" tabindex="0">
                                <div class="passage-body">
                                    <p>Rocha and his team used state-of-the-art ultrasonic recorders to record over a thousand bat ‘feeding buzzes’ (echolocation sequences used by bats to target their prey) at 54 sites, in order to identify the favourite feeding spots of the bats. They next used DNA barcoding techniques to analyse droppings collected from bats at the different sites.</p>
                                    <p>The recordings revealed that bat activity over rice fields was much higher than it was in continuous forest – seven times higher over rice fields which were on flat ground, and sixteen times higher over fields on the sides of hills – leaving no doubt that the animals are preferentially foraging in these man-made ecosystems. The researchers suggest that the bats favour these fields because lack of water and nutrient run-off make these crops more susceptible to insect pest infestations. DNA analysis showed that all six species of bat had fed on economically important insect pests. While the findings indicated that rice farming benefits most from the bats, the scientists also found indications that the bats were consuming pests of other crops, including the black twig borer (which infests coffee plants), the sugarcane cicada, the macadamia nut-borer, and the sober tabby (a pest of citrus fruits).</p>
                                    <p>‘The effectiveness of bats as pest controllers has already been proven in the USA and Catalonia,’ said co-author James Kemp, from the University of Lisbon. ‘But our study is the first to show this happening in Madagascar, where the stakes for both farmers and conservationists are so high.’</p>
                                    <p>Local people may have a further reason to be grateful to their bats. While the animal is often associated with spreading disease, Rocha and his team found evidence that Malagasy bats feed not just on crop pests but also on mosquitoes – carriers of malaria, Rift Valley fever virus and elephantiasis – as well as blackflies, which spread river blindness.</p>
                                    <p>Rocha points out that the relationship is complicated. When food is scarce, bats become a crucial source of protein for local people. Even the children will hunt them. And as well as roosting in trees, the bats sometimes roost in buildings, but are not welcomed there because they make them unclean. At the same time, however, they are associated with sacred caves and the ancestors, so they can be viewed as beings between worlds, which makes them very significant in the culture of the people. And one potential problem is that while these bats are benefiting from farming, at the same time deforestation is reducing the places where they can roost, which could have long-term effects on their numbers. Rocha says, ‘With the right help, we hope that farmers can promote this mutually beneficial relationship by installing bat houses.’</p>
                                </div>
                            </article>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tc">
                                <fieldset class="q-item">
                                    <p>Questions 1-7</p>
                                    <p>Complete the table below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                </fieldset>

                                <table border="1" cellpadding="8" cellspacing="0"
                                    style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                    <tr>
                                        <th colspan="2"><b>The study carried out by Rocha’s team</b></th>
                                    </tr>
                                    <tr>
                                        <td><b>Aim</b></td>
                                        <td>
                                            <ul>
                                                <li>to investigate the feeding habits of bats in farmland near the Ranomafana National Park</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Method</b></td>
                                        <td>
                                            <ul>
                                                <li>ultrasonic recording to identify favourite feeding spots</li>
                                                <li>
                                                    <div class="q-item" data-q="1">
                                                        DNA analysis of bat
                                                        <span class="q-number-box">1</span>
                                                        <input type="text" name="15gOXcE7omDCL1uE-1" class="q-text"
                                                            placeholder="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Findings</b></td>
                                        <td>
                                            <ul>
                                                <li>the bats</li>
                                            </ul>
                                            <p>–  were most active in rice fields located on hills</p>
                                            <p>
                                                <div class="q-item" data-q="2">
                                                    – ate pests of rice,
                                                    <span class="q-number-box">2</span>
                                                    <input type="text" name="15gOXcE7omDCL1uE-2" class="q-text"
                                                        placeholder="">
                                                    , sugarcane, nuts and fruit
                                                </div>
                                            </p>
                                            <p>
                                                <div class="q-item" data-q="3">
                                                    – prevent the spread of disease by eating
                                                    <span class="q-number-box">3</span>
                                                    <input type="text" name="15gOXcE7omDCL1uE-3" class="q-text"
                                                        placeholder="">
                                                    and blackflies
                                                </div>
                                            </p>
                                            <ul>
                                                <li>local attitudes to bats are mixed:</li>
                                            </ul>
                                            <p>
                                                <div class="q-item" data-q="4">
                                                    – they provide food rich in
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="15gOXcE7omDCL1uE-4" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </p>
                                            <p>
                                                <div class="q-item" data-q="5">
                                                    – the buildings where they roost become
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="15gOXcE7omDCL1uE-5" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </p>
                                            <p>
                                                <div class="q-item" data-q="6">
                                                    – they play an important role in local
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="15gOXcE7omDCL1uE-6" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Recommendation</b></td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <div class="q-item" data-q="7">
                                                        farmers should provide special
                                                        <span class="q-number-box">7</span>
                                                        <input type="text" name="15gOXcE7omDCL1uE-7" class="q-text"
                                                            placeholder="">
                                                        to support the bat population
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-tc"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="7" id="submit-tc">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-matching_information" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information" hidden>
                <div class="x-panel-inner">Content: Matching Information</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Does education fuel economic growth?</h3>
                            <div class="passage-body">
                                <h3 class="passage-title">A</h3>
                                <p>Over the last decade, a huge database about the lives of southwest German villagers between 1600 and 1900 has been compiled by a team led by Professor Sheilagh Ogilvie at Cambridge University’s Faculty of Economics. It includes court records, guild ledgers, parish registers, village censuses, tax lists and – the most recent addition – 9,000 handwritten inventories listing over a million personal possessions belonging to ordinary women and men across three centuries. Ogilvie, who discovered the inventories in the archives of two German communities 30 years ago, believes they may hold the answer to a conundrum that has long puzzled economists: the lack of evidence for a causal link between education and a country’s economic growth.</p>
                                <h3 class="passage-title">B</h3>
                                <p>As Ogilvie explains, ‘Education helps us to work more productively, invent better technology, and earn more … surely it must be critical for economic growth? But, if you look back through history, there’s no evidence that having a high literacy rate made a country industrialise earlier.’ Between 1600 and 1900, England had only mediocre literacy rates by European standards, yet its economy grew fast and it was the first country to industrialise. During this period, Germany and Scandinavia had excellent literacy rates, but their economies grew slowly and they industrialised late. ‘Modern cross-country analyses have also struggled to find evidence that education causes economic growth, even though there is plenty of evidence that growth increases education,’ she adds.</p>
                                <h3 class="passage-title">C</h3>
                                <p>In the handwritten inventories that Ogilvie is analysing are the belongings of women and men at marriage, remarriage and death. From badger skins to Bibles, sewing machines to scarlet bodices – the villagers’ entire worldly goods are included. Inventories of agricultural equipment and craft tools reveal economic activities; ownership of books and education-related objects like pens and slates suggests how people learned. In addition, the tax lists included in the database record the value of farms, workshops, assets and debts; signatures and people’s estimates of their age indicate literacy and numeracy levels; and court records reveal obstacles (such as the activities of the guilds*) that stifled industry.</p>
                                <p>Previous studies usually had just one way of linking education with economic growth – the presence of schools and printing presses, perhaps, or school enrolment, or the ability to sign names. According to Ogilvie, the database provides multiple indicators for the same individuals, making it possible to analyse links between literacy, numeracy, wealth, and industriousness, for individual women and men over the long term.</p>
                                <h3 class="passage-title">D</h3>
                                <p>Ogilvie and her team have been building the vast database of material possessions on top of their full demographic reconstruction of the people who lived in these two German communities. ‘We can follow the same people – and their descendants – across 300 years of educational and economic change,’ she says. Individual lives have unfolded before their eyes. Stories like that of the 24-year-olds Ana Regina and Magdalena Riethmullerin, who were chastised in 1707 for reading books in church instead of listening to the sermon. ‘This tells us they were continuing to develop their reading skills at least a decade after leaving school,’ explains Ogilvie. The database also reveals the case of Juliana Schweickherdt, a 50-year-old spinster living in the small Black Forest community of Wildberg, who was reprimanded in 1752 by the local weavers’ guild for ‘weaving cloth and combing wool, counter to the guild ordinance’. When Juliana continued taking jobs reserved for male guild members, she was summoned before the guild court and told to pay a fine equivalent to one third of a servant’s annual wage. It was a small act of defiance by today’s standards, but it reflects a time when laws in Germany and elsewhere regulated people’s access to labour markets. The dominance of guilds not only prevented people from using their skills, but also held back even the simplest industrial innovation.</p>
                                <h3 class="passage-title">E</h3>
                                <p>The data-gathering phase of the project has been completed and now, according to Ogilvie, it is time ‘to ask the big questions’. One way to look at whether education causes economic growth is to ‘hold wealth constant’. This involves following the lives of different people with the same level of wealth over a period of time. If wealth is constant, it is possible to discover whether education was, for example, linked to the cultivation of new crops, or to the adoption of industrial innovations like sewing machines. The team will also ask what aspect of education helped people engage more with productive and innovative activities. Was it, for instance, literacy, numeracy, book ownership, years of schooling? Was there a threshold level – a tipping point – that needed to be reached to affect economic performance?</p>
                                <h3 class="passage-title">F</h3>
                                <p>Ogilvie hopes to start finding answers to these questions over the next few years. One thing is already clear, she says: the relationship between education and economic growth is far from straightforward. ‘German-speaking central Europe is an excellent laboratory for testing theories of economic growth,’ she explains. Between 1600 and 1900, literacy rates and book ownership were high and yet the region remained poor. It was also the case that local guilds and merchant associations were extremely powerful and legislated against anything that undermined their monopolies. In villages throughout the region, guilds blocked labour migration and resisted changes that might reduce their influence.</p>
                                <p>‘Early findings suggest that the potential benefits of education for the economy can be held back by other barriers, and this has implications for today,’ says Ogilvie. ‘Huge amounts are spent improving education in developing countries, but this spending can fail to deliver economic growth if restrictions block people – especially women and the poor – from using their education in economically productive ways. If economic institutions are poorly set up, for instance, education can’t lead to growth.’</p>
                                <p><i>*guild: an association of artisans or merchants which oversees the practice of their craft or trade in a particular area</i></p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-matching_information">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-5</b></p>
                                    <p class="lead">The Reading Passage has six paragraphs, <b>A-F</b>.</p>
                                    <p>Which section contains the following information?</p>
                                    <p><i>Write the correct letter, <b>A-F</b>, in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            an explanation of the need for research to focus on individuals with a fairly consistent income
                                            <span class="q-question">
                                                <select name="15gOXcE7omDCL1uE-1" class="q-dropdown">
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
                                            examples of the sources the database has been compiled from 
                                            <span class="q-question">
                                                <select name="15gOXcE7omDCL1uE-2" class="q-dropdown">
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
                                            an account of one individual’s refusal to obey an order
                                            <span class="q-question">
                                                <select name="15gOXcE7omDCL1uE-3" class="q-dropdown">
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
                                            a reference to a region being particularly suited to research into the link between education and economic growth
                                            <span class="q-question">
                                                <select name="15gOXcE7omDCL1uE-4" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            examples of the items included in a list of personal possessions
                                            <span class="q-question">
                                                <select name="15gOXcE7omDCL1uE-5" class="q-dropdown">
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
                                    <button type="button" class="btn btn-primary try-again" id="again-matching_information"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-matching_information">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-summary_completion" class="x-panel" role="tabpanel" aria-labelledby="tab-summary_completion" hidden>
                <div class="x-panel-inner">Content: Summary Completion</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>D</h3>
                                <p>Ogilvie and her team have been building the vast database of material possessions on top of their full demographic reconstruction of the people who lived in these two German communities. ‘We can follow the same people – and their descendants – across 300 years of educational and economic change,’ she says. Individual lives have unfolded before their eyes. Stories like that of the 24-year-olds Ana Regina and Magdalena Riethmullerin, who were chastised in 1707 for reading books in church instead of listening to the sermon. ‘This tells us they were continuing to develop their reading skills at least a decade after leaving school,’ explains Ogilvie. The database also reveals the case of Juliana Schweickherdt, a 50-year-old spinster living in the small Black Forest community of Wildberg, who was reprimanded in 1752 by the local weavers’ guild for ‘weaving cloth and combing wool, counter to the guild ordinance’. When Juliana continued taking jobs reserved for male guild members, she was summoned before the guild court and told to pay a fine equivalent to one third of a servant’s annual wage. It was a small act of defiance by today’s standards, but it reflects a time when laws in Germany and elsewhere regulated people’s access to labour markets. The dominance of guilds not only prevented people from using their skills, but also held back even the simplest industrial innovation.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion">
                                <fieldset class="q-item">
                                    <h3>Questions 1-4</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                                    <h3>Demographic reconstruction of two German communities</h3>

                                    <p>
                                        The database that Ogilvie and her team has compiled sheds light on the lives of a range of individuals, as well as those of their
                                        <span class="q-number-box">1</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                        , over a 300-year period. For example, Ana Regina and Magdalena Riethmüllerin were reprimanded for reading while they should have been paying attention to a
                                        <span class="q-number-box">2</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </p>

                                    <p>
                                        There was also Juliana Schweickherdt, who came to the notice of the weavers’ guild in the year 1752 for breaking guild rules. As a punishment, she was later given a 
                                        <span class="q-number-box">3</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                        Cases like this illustrate how the guilds could prevent
                                        <span class="q-number-box">4</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-4" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                         and stop skilled people from working
                                    </p>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-summary_completion"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="4" id="submit-summary_completion">
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
                                <h3>B</h3>
                                <p>As Ogilvie explains, ‘Education helps us to work more productively, invent better technology, and earn more … surely it must be critical for economic growth? But, if you look back through history, there’s no evidence that having a high literacy rate made a country industrialise earlier.’ Between 1600 and 1900, England had only mediocre literacy rates by European standards, yet its economy grew fast and it was the first country to industrialise. During this period, Germany and Scandinavia had excellent literacy rates, but their economies grew slowly and they industrialised late. ‘Modern cross-country analyses have also struggled to find evidence that education causes economic growth, even though there is plenty of evidence that growth increases education,’ she adds.</p>
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
                                        Which <b>TWO</b> of the following statements does the writer make about literacy rates in Section B?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Very little research has been done into the link between high literacy rates and improved earnings.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Literacy rates in Germany between 1600 and 1900 were very good.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">There is strong evidence that high literacy rates in the modern world result in economic growth.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">England is a good example of how high literacy rates helped a country industrialise.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-1[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">Economic growth can help to improve literacy rates.</span>
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
                                <h3>F</h3>
                                <b>Ogilvie hopes to start finding answers to these questions over the next few years. One thing is already clear, she says: the relationship between education and economic growth is far from straightforward. ‘German-speaking central Europe is an excellent laboratory for testing theories of economic growth,’ she explains. Between 1600 and 1900, literacy rates and book ownership were high and yet the region remained poor. It was also the case that local guilds and merchant associations were extremely powerful and legislated against anything that undermined their monopolies. In villages throughout the region, guilds blocked labour migration and resisted changes that might reduce their influence.</b>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-two_choices2">
                                
                                <fieldset class="q-item">
                                    <p>Questions 1-2</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        <span class="q-number">2</span>
                                        Which <b>TWO</b> of the following statements does the writer make in Section F about guilds in German-speaking Central Europe between 1600 and 1900?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">They helped young people to learn a skill.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">They were opposed to people moving to an area for work.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">They kept better records than guilds in other parts of the world.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">They opposed practices that threatened their control over a trade.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="15gOXcE7omDCL1uE-3[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">They predominantly consisted of wealthy merchants.</span>
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
            <div id="panel-matching_information2" class="x-panel" role="tabpanel" aria-labelledby="tab-matching_information2" hidden>
                <div class="x-panel-inner">Content: Matching Information 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Does education fuel economic growth?</h3>
                            <div class="passage-body">
                                <h3 class="passage-title">A</h3>
                                <p>Over the last decade, a huge database about the lives of southwest German villagers between 1600 and 1900 has been compiled by a team led by Professor Sheilagh Ogilvie at Cambridge University’s Faculty of Economics. It includes court records, guild ledgers, parish registers, village censuses, tax lists and – the most recent addition – 9,000 handwritten inventories listing over a million personal possessions belonging to ordinary women and men across three centuries. Ogilvie, who discovered the inventories in the archives of two German communities 30 years ago, believes they may hold the answer to a conundrum that has long puzzled economists: the lack of evidence for a causal link between education and a country’s economic growth.</p>
                                <h3 class="passage-title">B</h3>
                                <p>As Ogilvie explains, ‘Education helps us to work more productively, invent better technology, and earn more … surely it must be critical for economic growth? But, if you look back through history, there’s no evidence that having a high literacy rate made a country industrialise earlier.’ Between 1600 and 1900, England had only mediocre literacy rates by European standards, yet its economy grew fast and it was the first country to industrialise. During this period, Germany and Scandinavia had excellent literacy rates, but their economies grew slowly and they industrialised late. ‘Modern cross-country analyses have also struggled to find evidence that education causes economic growth, even though there is plenty of evidence that growth increases education,’ she adds.</p>
                                <h3 class="passage-title">C</h3>
                                <p>In the handwritten inventories that Ogilvie is analysing are the belongings of women and men at marriage, remarriage and death. From badger skins to Bibles, sewing machines to scarlet bodices – the villagers’ entire worldly goods are included. Inventories of agricultural equipment and craft tools reveal economic activities; ownership of books and education-related objects like pens and slates suggests how people learned. In addition, the tax lists included in the database record the value of farms, workshops, assets and debts; signatures and people’s estimates of their age indicate literacy and numeracy levels; and court records reveal obstacles (such as the activities of the guilds*) that stifled industry.</p>
                                <p>Previous studies usually had just one way of linking education with economic growth – the presence of schools and printing presses, perhaps, or school enrolment, or the ability to sign names. According to Ogilvie, the database provides multiple indicators for the same individuals, making it possible to analyse links between literacy, numeracy, wealth, and industriousness, for individual women and men over the long term.</p>
                                <h3 class="passage-title">D</h3>
                                <p>Ogilvie and her team have been building the vast database of material possessions on top of their full demographic reconstruction of the people who lived in these two German communities. ‘We can follow the same people – and their descendants – across 300 years of educational and economic change,’ she says. Individual lives have unfolded before their eyes. Stories like that of the 24-year-olds Ana Regina and Magdalena Riethmullerin, who were chastised in 1707 for reading books in church instead of listening to the sermon. ‘This tells us they were continuing to develop their reading skills at least a decade after leaving school,’ explains Ogilvie. The database also reveals the case of Juliana Schweickherdt, a 50-year-old spinster living in the small Black Forest community of Wildberg, who was reprimanded in 1752 by the local weavers’ guild for ‘weaving cloth and combing wool, counter to the guild ordinance’. When Juliana continued taking jobs reserved for male guild members, she was summoned before the guild court and told to pay a fine equivalent to one third of a servant’s annual wage. It was a small act of defiance by today’s standards, but it reflects a time when laws in Germany and elsewhere regulated people’s access to labour markets. The dominance of guilds not only prevented people from using their skills, but also held back even the simplest industrial innovation.</p>
                                <h3 class="passage-title">E</h3>
                                <p>The data-gathering phase of the project has been completed and now, according to Ogilvie, it is time ‘to ask the big questions’. One way to look at whether education causes economic growth is to ‘hold wealth constant’. This involves following the lives of different people with the same level of wealth over a period of time. If wealth is constant, it is possible to discover whether education was, for example, linked to the cultivation of new crops, or to the adoption of industrial innovations like sewing machines. The team will also ask what aspect of education helped people engage more with productive and innovative activities. Was it, for instance, literacy, numeracy, book ownership, years of schooling? Was there a threshold level – a tipping point – that needed to be reached to affect economic performance?</p>
                                <h3 class="passage-title">F</h3>
                                <p>Ogilvie hopes to start finding answers to these questions over the next few years. One thing is already clear, she says: the relationship between education and economic growth is far from straightforward. ‘German-speaking central Europe is an excellent laboratory for testing theories of economic growth,’ she explains. Between 1600 and 1900, literacy rates and book ownership were high and yet the region remained poor. It was also the case that local guilds and merchant associations were extremely powerful and legislated against anything that undermined their monopolies. In villages throughout the region, guilds blocked labour migration and resisted changes that might reduce their influence.</p>
                                <p>‘Early findings suggest that the potential benefits of education for the economy can be held back by other barriers, and this has implications for today,’ says Ogilvie. ‘Huge amounts are spent improving education in developing countries, but this spending can fail to deliver economic growth if restrictions block people – especially women and the poor – from using their education in economically productive ways. If economic institutions are poorly set up, for instance, education can’t lead to growth.’</p>
                                <p><i>*guild: an association of artisans or merchants which oversees the practice of their craft or trade in a particular area</i></p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-matching_information2">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-6</b></p>
                                    <p class="lead">The Reading Passage has eight paragraphs, <b>A-H</b>.</p>
                                    <p>Which paragraph contains the following information?</p>
                                    <p><i>Write the correct letter, <b>A-H</b>, in boxes on your answer sheet.</i></p>
                                    <p><i><b>NB</b> You may use any letter more than once.</i></p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            a reference to earlier examples of blindfold chess
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-6" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            an outline of what blindfold chess involves
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-7" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            a claim that Gareyev’s skill is limited to chess
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-8" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            why Gareyev’s skill is of interest to scientists
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-9" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            an outline of Gareyev’s priorities
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-10" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">6</span>
                                        <span style="flex: 1;">
                                            a reason why the last part of a game may be difficult
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-11" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-matching_information2"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="6" id="submit-matching_information2">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2" hidden>
                <div class="x-panel-inner">Content: True/False/Not Given 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Timur Gareyev – blindfold chess champion</h3>
                            <div class="passage-body">
                                <h3>A</h3>
                                <p>Next month, a chess player named Timur Gareyev will take on nearly 50 opponents at once. But that is not the hard part. While his challengers will play the games as normal, Gareyev himself will be blindfolded. Even by world record standards, it sets a high bar for human performance. The 28-year-old already stands out in the rarefied world of blindfold chess. He has a fondness for bright clothes and unusual hairstyles, and he gets his kicks from the adventure sport of BASE jumping. He has already proved himself a strong chess player, too. In a 10-hour chess marathon in 2013, Gareyev played 33 games in his head simultaneously. He won 29 and lost none. The skill has become his brand: he calls himself the Blindfold King.</p>
                                <h3>B</h3>
                                <p>But Gareyev’s prowess has drawn interest from beyond the chess-playing community. In the hope of understanding how he and others like him can perform such mental feats, researchers at the University of California in Los Angeles (UCLA) called him in for tests. They now have their first results. The ability to play a game of chess with your eyes closed is not a far reach for most accomplished players,’ said Jesse Rissman, who runs a memory lab at UCLA. ‘But the thing that’s so remarkable about Timur and a few other individuals is the number of games they can keep active at once. To me it is simply astonishing.’</p>
                                <h3>C</h3>
                                <p>Gareyev learned to play chess in his native Uzbekistan when he was six years old. Tutored by his grandfather, he entered his first tournament aged eight and soon became obsessed with competitions. At 16, he was crowned Asia’s youngest ever chess grandmaster. He moved to the US soon after, and as a student helped his university win its first national chess championship. In 2013, Gareyev was ranked the third best chess player in the US.</p>
                                <h3>D</h3>
                                <p>To the uninitiated, blindfold chess seems to call for superhuman skill. But displays of the feat go back centuries. The first recorded game in Europe was played in 13th-century Florence. In 1947, the Argentinian grandmaster Miguel Najdorf played 45 simultaneous games in his mind, winning 39 in the 24-hour session.</p>
                                <h3>E</h3>
                                <p>Accomplished players can develop the skill of playing blind even without realising it. The nature of the game is to run through possible moves in the mind to see how they play out. From this, regular players develop a memory for the patterns the pieces make, the defences and attacks. ‘You recreate it in your mind,’ said Gareyev. ‘A lot of players are capable of doing what I’m doing.’ The real mental challenge comes from playing multiple games at once in the head. Not only must the positions of each piece on every board be memorised, they must be recalled faithfully when needed, updated with each player’s moves, and then reliably stored again, so the brain can move on to the next board. First moves can be tough to remember because they are fairly uninteresting. But the ends of games are taxing too, as exhaustion sets in. When Gareyev is tired, his recall can get patchy. He sometimes makes moves based on only a fragmented memory of the pieces’ positions.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng2">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-4</b></p>
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
                                        In the forthcoming games, all the participants will be blindfolded.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Gareyev has won competitions in BASE jumping.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-8" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-8" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-8" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        UCLA is the first university to carry out research into blindfold chess players.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-9" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-9" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-9" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Good chess players are likely to be able to play blindfold chess.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-10" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-10" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="15gOXcE7omDCL1uE-10" value="NOT GIVEN" />
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
                                        data-count="4" id="submit-tfng2">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-summary_completion2" class="x-panel" role="tabpanel" aria-labelledby="tab-summary_completion2" hidden>
                <div class="x-panel-inner">Content: Summary Completion 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <h3>F</h3>
                                <p>The scientists first had Gareyev perform some standard memory tests. These assessed his ability to hold numbers, pictures and words in mind. One classic test measures how many numbers a person can repeat, both forwards and backwards, soon after hearing them. Most people manage about seven. ‘He was not exceptional on any of these standard tests,’ said Rissman. ‘We didn’t find anything other than playing chess that he seems to be supremely gifted at.’ But next came the brain scans. With Gareyev lying down in the machine, Rissman looked at how well connected the various regions of the chess player’s brain were. Though the results are tentative and as yet unpublished, the scans found much greater than average communication between parts of Gareyev’s brain that make up what is called the frontoparietal control network. Of 63 people scanned alongside the chess player, only one or two scored more highly on the measure. ‘You use this network in almost any complex task. It helps you to allocate attention, keep rules in mind, and work out whether you should be responding or not,’ said Rissman.</p>
                                <h3>G</h3>
                                <p>It was not the only hint of something special in Gareyev’s brain. The scans also suggest that Gareyev’s visual network is more highly connected to other brain parts than usual. Initial results suggest that the areas of his brain that process visual images – such as chess boards – may have stronger links to other brain regions, and so be more powerful than normal. While the analyses are not finalised yet, they may hold the first clues to Gareyev’s extraordinary ability.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion2">
                                <fieldset class="q-item">
                                    <h3>Questions 1-4</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>

                                    <h3>How the research was carried out</h3>

                                    <p>
                                        The researchers started by testing Gareyev’s 
                                        <span class="q-number-box">1</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-5" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                        ; for example, he was required to recall a string of
                                        <span class="q-number-box">2</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-6" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                        in order and also in reverse order. Although his performance was normal, scans showed an unusual amount of 
                                        <span class="q-number-box">3</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-7" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                        within the areas of Gareyev’s brain that are concerned with directing attention. In addition, the scans raised the possibility of unusual strength in the parts of his brain that deal with
                                        <span class="q-number-box">4</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="15gOXcE7omDCL1uE-8" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                        input.
                                    </p>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-summary_completion2"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="4" id="submit-summary_completion2">
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
        $("#submit-tfng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng", "15gOXcE7omDCL1uE", "tfng", $(this), "again-tfng", "True, False or Not Given");
        });

        $("#submit-tc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tc", "15gOXcE7omDCL1uE", "tc", $(this), "again-tc", "Table Completion");
        });

        $("#submit-matching_information").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information", "15gOXcE7omDCL1uE", "matching_information", $(this), "again-matching_information", "Matching Information");
        });

        $("#submit-summary_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-summary_completion", "15gOXcE7omDCL1uE", "summary_completion", $(this), "again-summary_completion", "Summary Completion");
        });

        $("#submit-two_choices").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices", "15gOXcE7omDCL1uE", "two_choices", $(this), "again-two_choices", "Two Choices");
        });

        $("#submit-two_choices2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-two_choices2", "15gOXcE7omDCL1uE", "two_choices", $(this), "again-two_choices2", "Two Choices");
        });

        $("#submit-matching_information2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-matching_information2", "15gOXcE7omDCL1uE", "matching_information", $(this), "again-matching_information2", "Matching Information");
        });

        $("#submit-tfng2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng2", "15gOXcE7omDCL1uE", "tfng", $(this), "again-tfng2", "True, False or Not Given");
        });

        $("#submit-summary_completion2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-summary_completion2", "15gOXcE7omDCL1uE", "summary_completion", $(this), "again-summary_completion2", "Summary Completion");
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
                    'tc': 7,
                    'matching_information': 5,
                    'summary_completion': 4,
                    'two_choices': 2,
                    'two_choices2': 2,
                    'matching_information2': 6,
                    'tfng2': 4,
                    'summary_completion2': 4
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
