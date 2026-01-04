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
        #panel-summary_completion2 input,
        #panel-summary_completion3 input,
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
            <button class="x-tab" role="tab" id="tab-summary_completion" aria-controls="panel-summary_completion" aria-selected="false"
                data-id="summary_completion">Summary Completion</button>
            <button class="x-tab" role="tab" id="tab-one" aria-controls="panel-one" aria-selected="false"
                data-id="one">One Choice</button>
            <button class="x-tab" role="tab" id="tab-summary_completion2"   aria-controls="panel-summary_completion2" aria-selected="false"
                data-id="summary_completion2">Summary Completion 2</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Yes/No/Not Given</button>
            <button class="x-tab" role="tab" id="tab-one2" aria-controls="panel-one2" aria-selected="false"
                data-id="one2">One Choice 2</button>
            <button class="x-tab" role="tab" id="tab-summary_completion3"   aria-controls="panel-summary_completion3" aria-selected="false"
                data-id="summary_completion3">Summary Completion 3</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="false"
                data-id="tfng2">True/False/Not Given 2</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">The White Horse of Uffington</h3>
                            <div class="passage-body">
                                <p>The cutting of huge figures or geoglyphs into the earth of English hillsides has taken place for more than 3,000 years. There are 56 hill figures scattered around England, with the vast majority on the chalk downlands of the country’s southern counties. The figures include giants, horses, crosses and regimental badges. Although the majority of these geoglyphs date within the last 300 years or so, there are one or two that are much older.</p>
                                <p>The most famous of these figures is perhaps also the most mysterious — the Uffington White Horse in Oxfordshire. The White Horse has recently been re-dated and shown to be even older than its previously assigned ancient pre-Roman Iron Age date. More controversial is the date of the enigmatic Long Man of Wilmington in Sussex. While many historians are convinced the figure is prehistoric, others believe that it was the work of an artistic monk from a nearby priory and was created between the 11th and 15th centuries.</p>
                                <p>The method of cutting these huge figures was simply to remove the overlying grass to reveal the gleaming white chalk below. However, the grass would soon grow over the geoglyph again unless it was regularly cleaned or scoured by a fairly large team of people. One reason that the vast majority of hill figures have disappeared is that when the traditions associated with the figures faded, people no longer bothered or remembered to clear away the grass to expose the chalk outline. Furthermore, over hundreds of years the outlines would sometimes change due to people not always cutting in exactly the same place, thus creating a different shape to the original geoglyph. The fact that any ancient hill figures survive at all in England today is testament to the strength and continuity of local customs and beliefs which, in one case at least, must stretch back over millennia.</p>
                                <p>The Uffington White Horse is a unique, stylised representation of a horse consisting of a long, sleek back, thin disjointed legs, a streaming tail, and a bird-like beaked head. The elegant creature almost melts into the landscape. The horse is situated 2.5 km from Uffington village on a steep slope close to the Late Bronze Age (c. 7th century BCE) hillfort of Uffington Castle and below the Ridgeway, a long-distance Neolithic track.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-8</b></p>
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
                                        Most geoglyphs in England are located in a particular area of the country.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        There are more geoglyphs in the shape of a horse than any other creature.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        A recent dating of the Uffington White Horse indicates that people were mistaken about its
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Historians have come to an agreement about the origins of the Long Man of Wilmington.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        Geoglyphs were created by people placing white chalk on the hillside.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        Many geoglyphs in England are no longer visible.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="7">
                                    <legend class="q-text">
                                        <span class="q-number">7</span>
                                        The shape of some geoglyphs has been altered over time.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="8">
                                    <legend class="q-text">
                                        <span class="q-number">8</span>
                                        The fame of the Uffington White Horse is due to its size.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 8 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-8" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-8" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-8" value="NOT GIVEN" />
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
                                        data-count="8" id="submit-tfng">
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
                                <p>The Uffington White Horse is a unique, stylised representation of a horse consisting of a long, sleek back, thin disjointed legs, a streaming tail, and a bird-like beaked head. The elegant creature almost melts into the landscape. The horse is situated 2.5 km from Uffington village on a steep slope close to the Late Bronze Age (c. 7th century BCE) hillfort of Uffington Castle and below the Ridgeway, a long-distance Neolithic track.</p>
                                <p>The Uffington Horse is also surrounded by Bronze Age burial mounds. It is not far from the Bronze Age cemetery of Lambourn Seven Barrows, which consists of more than 30 well-preserved burial mounds. The carving has been placed in such a way as to make it extremely difficult to see from close quarters, and like many geoglyphs is best appreciated from the air. Nevertheless, there are certain areas of the Vale of the White Horse, the valley containing and named after the enigmatic creature, from which an adequate impression may be gained. Indeed on a clear day the carving can be seen from up to 30 km away.</p>
                                <p>The earliest evidence of a horse at Uffington is from the 1070s CE when ‘White Horse Hill’ is mentioned in documents from the nearby Abbey of Abingdon, and the first reference to the horse itself is soon after, in 1190 CE. However, the carving is believed to date back much further than that. Due to the similarity of the Uffington White Horse to the stylised depictions of horses on 1st century BCE coins, it had been thought that the creature must also date to that period.</p>
                                <p>However, in 1995 Optically Stimulated Luminescence (OSL) testing was carried out by the Oxford Archaeological Unit on soil from two of the lower layers of the horse’s body, and from another cut near the base. The result was a date for the horse’s construction somewhere between 1400 and 600 BCE — in other words, it had a Late Bronze Age or Early Iron Age origin.</p>
                                <p>The latter end of this date range would tie the carving of the horse in with occupation of the nearby Uffington hillfort, indicating that it may represent a tribal emblem marking the land of the inhabitants of the hillfort. Alternatively, the carving may have been carried out during a Bronze or Iron Age ritual. Some researchers see the horse as representing the Celtic horse goddess Epona, who was worshipped as a protector of horses, and for her associations with fertility. However, the cult of Epona was not imported from Gaul (France) until around the first century CE. This date is at least six centuries after the Uffington Horse was probably carved. Nevertheless, the horse had great ritual and economic significance during the Bronze and Iron Ages, as attested by its depictions on jewellery and other metal objects. It is possible that the carving represents a goddess in native mythology, such as Rhiannon, described in later Welsh mythology as a beautiful woman dressed in gold and riding a white horse.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion">
                                <fieldset class="q-item">
                                    <h3>Questions 1-5</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p>Write your answers in boxes on your answer sheet.</p>

                                    <h3>The Uffington White Horse</h3>
                                    <p>The location of the Uffington White Horse:</p>

                                    <ul>
                                        <li>a distance of 2.5 km from Uffington village</li>
                                        <li>
                                            <div class="q-list" data-q="1">
                                                near an ancient road known as the
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="XW16JROLKCFE4BMH-1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>close to an ancient cemetery that has a number of burial mounds</li>
                                    </ul>

                                    <p><b>Dating the Uffington White Horse:</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-q="2">
                                                first reference to White Horse Hill appears in
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="XW16JROLKCFE4BMH-2" class="q-text" placeholder="">
                                                from the 1070s
                                            </div>
                                        </li>
                                        <li>horses shown on coins from the period 100 BCE – 1 BCE are similar in appearance</li>
                                        <li>
                                            <div class="q-list" data-q="3">
                                                according to analysis of the surrounding
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="XW16JROLKCFE4BMH-3" class="q-text" placeholder="">
                                                , the Horse is Late Bronze Age / Early Iron Age
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>Possible reasons for creation of the Uffington White Horse:</b></p>
                                    <ul>
                                        <li>an emblem to indicate land ownership</li>
                                        <li>formed part of an ancient ritual</li>
                                        <li>
                                            <div class="q-list" data-q="4">
                                                was a representation of goddess Epona – associated with protection of horses and
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="XW16JROLKCFE4BMH-4" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-q="5">
                                                was a representation of a Welsh goddess called
                                                <span class="q-number-box">5</span>
                                                <input type="text" name="XW16JROLKCFE4BMH-5" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                    
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-summary_completion"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-summary_completion">
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
                            <h3 class="passage-title">I contain multitudes</h3>
                            <div class="passage-body">
                                <p><i>Wendy Moore reviews Ed Yong’s book about microbes</i></p>
                                <p><b>Microbes</b>, most of them bacteria, have populated this planet since long before animal life developed and they will outlive us. Invisible to the naked eye, they are ubiquitous. They inhabit the soil, air, rocks and water and are present within every form of life, from seaweed and coral to dogs and humans. And, as Yong explains in his utterly absorbing and hugely important book, we mess with them at our peril.</p>
                                <p>Every species has its own colony of microbes, called a ‘microbiome’, and these microbes vary not only between species but also between individuals and within different parts of each individual. What is amazing is that while the number of human cells in the average person is about 30 trillion, the number of microbial ones is higher — about 39 trillion. At best, Yong informs us, we are only 50 per cent human. Indeed, some scientists even suggest we should think of each species and its microbes as a single unit, dubbed a ‘holobiont’.</p>
                                <p>In each human there are microbes that live only in the stomach, the mouth or the armpit and by and large they do so peacefully. So ‘bad’ microbes are just microbes out of context. Microbes that sit contentedly in the human gut (where there are more microbes than there are stars in the galaxy) can become deadly if they find their way into the bloodstream. These communities are constantly changing too. The right hand shares just one sixth of its microbes with the left hand. And, of course, we are surrounded by microbes. Every time we eat, we swallow a million microbes in each gram of food; we are continually swapping microbes with other humans, pets and the world at large.</p>
                                <p>It’s a fascinating topic and Yong, a young British science journalist, is an extraordinarily adept guide. Writing with lightness and panache, he has a knack of explaining complex science in terms that are both easy to understand and totally enthralling. Yong is on a mission. Leading us gently by the hand, he takes us into the world of microbes — a bizarre, alien planet — in a bid to persuade us to love them as much as he does. By the end, we do.</p>
                                <p>For most of human history we had no idea that microbes existed. The first man to see these extraordinarily potent creatures was a Dutch lens-maker called Antony van Leeuwenhoek in the 1670s. Using microscopes of his own design that could magnify up to 270 times, he examined a drop of water from a nearby lake and found it teeming with tiny creatures he called ‘animalcules’. It wasn’t until nearly two hundred years later that the research of French biologist Louis Pasteur indicated that some microbes caused disease. It was Pasteur’s ‘germ theory’ that gave bacteria the poor image that endures today.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-one">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-3</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        What point does the writer make about microbes in the first paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">They adapt quickly to their environment.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">The risk they pose has been exaggerated.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">They are more plentiful in animal life than plant life.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">They will continue to exist for longer than the human race.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        In the second paragraph, the writer is impressed by the fact that
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">each species tends to have vastly different microbes.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">some parts of the body contain relatively few microbes.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">the average individual has more microbial cells than human ones.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">scientists have limited understanding of how microbial cells behave.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        What is the writer doing in the fifth paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">explaining how a discovery was made</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">comparing scientists’ theories about microbes</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">describing confusion among scientists</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">giving details of how microbes cause disease</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-oc"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="3" id="submit-oc">
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
                                <p>Yong’s book is in many ways a plea for microbial tolerance, pointing out that while fewer than one hundred species of bacteria bring disease, many thousands more play a vital role in maintaining our health. The book also acknowledges that our attitude towards bacteria is not a simple one. We tend to see the dangers posed by bacteria, yet at the same time we are sold yoghurts and drinks that supposedly nurture ‘friendly’ bacteria. In reality, says Yong, bacteria should not be viewed as either friends or foes, villains or heroes. Instead we should realise we have a symbiotic relationship, that can be mutually beneficial or mutually destructive.</p>
                                <p>What then do these millions of organisms do? The answer is pretty much everything. New research is now unravelling the ways in which bacteria aid digestion, regulate our immune systems, eliminate toxins, produce vitamins, affect our behaviour and even combat obesity. ‘They actually help us become who we are,’ says Yong. But we are facing a growing problem. Our obsession with hygiene, our overuse of antibiotics and our unhealthy, low-fibre diets are disrupting the bacterial balance and may be responsible for soaring rates of allergies and immune problems, such as inflammatory bowel disease (IBD).</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion2">
                                <fieldset class="q-item">
                                    <h3>Questions 1-4</h3>
                                    <p class="lead">Complete the summary using the list of words, <b>A-H</b>, below.</p>
                                    <p><i>Write the correct letter, A-H, in boxes on your answer sheet.</i></p>
                                    <table cellspacing="20" class="q-table q-table-letters">
                                        <tr>
                                            <td><b>A</b></td>
                                            <td>solution</td>
                                            <td><b>B</b></td>
                                            <td>partnership</td>
                                            <td><b>C</b></td>
                                            <td>destruction</td>
                                        </tr>
                                        <tr>
                                            <td><b>D</b></td>
                                            <td>exaggeration</td>
                                            <td><b>E</b></td>
                                            <td>cleanliness</td>
                                            <td><b>F</b></td>
                                            <td>regulations</td>
                                        </tr>
                                        <tr>
                                            <td><b>G</b></td>
                                            <td>illness</td>
                                            <td><b>H</b></td>
                                            <td>nutrition</td>
                                        </tr>
                                    </table>
                                    <p><b>We should be more tolerant of microbes</b></p>
                                    <p>
                                        Yong’s book argues that we should be more tolerant of microbes. Many have a beneficial effect, and only a relatively small number lead to
                                        <span class="q-number-box">1</span>
                                        <span style="flex: 1;">
                                                <span class="q-question">
                                                <select name="XW16JROLKCFE4BMH-6" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                </select>
                                                </span>
                                        </span>
                                        . And although it is misleading to think of microbes as ‘friendly’, we should also stop thinking of them as the enemy. In fact, we should accept that our relationship with microbes is one based on
                                        <span class="q-number-box">2</span>
                                        <span style="flex: 1;">
                                                <span class="q-question">
                                                <select name="XW16JROLKCFE4BMH-7" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                </select>
                                                </span>
                                        </span>
                                        .
                                    </p>

                                    <p>
                                        New research shows that microbes have numerous benefits for humans. Amongst other things, they aid digestion, remove poisons, produce vitamins and may even help reduce obesity. However, there is a growing problem. Our poor
                                        <span class="q-number-box">3</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="XW16JROLKCFE4BMH-8" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        , our overuse of antibiotics, and our excessive focus on
                                        <span class="q-number-box">4</span>
                                        <span style="flex: 1;">
                                                <span class="q-question">
                                                <select name="XW16JROLKCFE4BMH-9" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                </select>
                                                </span>
                                        </span>
                                        are upsetting the bacterial balance and may be contributing to the huge increase in allergies and immune system problems.
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
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Yes/No/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>The most recent research actually turns accepted norms upside down. For example, there are studies indicating that the excessive use of household detergents and antibacterial products actually destroys the microbes that normally keep the more dangerous germs at bay. Other studies show that keeping a dog as a pet gives children early exposure to a diverse range of bacteria, which may help protect them against allergies later.</p>
                                <p>The readers of Yong’s book must be prepared for a decidedly unglamorous world. Among the less appealing case studies is one about a fungus that is wiping out entire populations of frogs and that can be halted by a rare microbial bacterium. Another is about squid that carry luminescent bacteria that protect them against predators. However, if you can overcome your distaste for some of the investigations, the reasons for Yong’s enthusiasm become clear. The microbial world is a place of wonder. Already, in an attempt to stop mosquitoes spreading dengue fever — a disease that infects 400 million people a year — mosquitoes are being loaded with a bacterium to block the disease. In the future, our ability to manipulate microbes means we could construct buildings with useful microbes built into their walls to fight off infections. Just imagine a neonatal hospital ward coated in a specially mixed cocktail of microbes so that babies get the best start in life.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-ynng">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-6</b></p>
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
                                        It is possible that using antibacterial products in the home fails to have the desired effect.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        It is a good idea to ensure that children come into contact with as few bacteria as possible.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        Yong’s book contains more cause studies than are necessary.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        The case study about bacteria that prevent squid from being attacked may have limited appeal.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        Efforts to control dengue fever have been surprisingly successful
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        Microbes that reduce the risk of infection have already been put inside the walls of some hospital wards.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="NOT GIVEN" />
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
                                        data-count="6" id="submit-ynng">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-one2" class="x-panel" role="tabpanel" aria-labelledby="tab-one2" hidden>
                <div class="x-panel-inner">Content: One Choice 2</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">How to make wise decisions</h3>
                            <div class="passage-body">
                                <p>Across cultures, wisdom has been considered one of the most revered human qualities. Although the truly wise may seem few and far between, empirical research examining wisdom suggests that it isn’t an exceptional trait possessed by a small handful of bearded philosophers after all — in fact, the latest studies suggest that most of us have the ability to make wise decisions, given the right context.</p>
                                <p>‘It appears that experiential, situational, and cultural factors are even more powerful in shaping wisdom than previously imagined,’ says Associate Professor Igor Grossmann of the University of Waterloo in Ontario, Canada. ‘Recent empirical findings from cognitive, developmental, social, and personality psychology cumulatively suggest that people’s ability to reason wisely varies dramatically across experiential and situational contexts. Understanding the role of such contextual factors offers unique insights into understanding wisdom in daily life, as well as how it can be enhanced and taught.’</p>
                                <p>It seems that it’s not so much that some people simply possess wisdom and others lack it, but that our ability to reason wisely depends on a variety of external factors. ‘It is impossible to characterize thought processes attributed to wisdom without considering the role of contextual factors,’ explains Grossmann. ‘In other words, wisdom is not solely an “inner quality” but rather unfolds as a function of situations people happen to be in. Some situations are more likely to promote wisdom than others.’</p>
                                <p>Coming up with a definition of wisdom is challenging, but Grossmann and his colleagues have identified four key characteristics as part of a framework of wise reasoning. One is intellectual humility or recognition of the limits of our own knowledge, and another is appreciation of perspectives wider than the issue at hand. Sensitivity to the possibility of change in social relations is also key, along with compromise or integration of different attitudes and beliefs.</p>
                                <p>Grossmann and his colleagues have also found that one of the most reliable ways to support wisdom in our own day-to-day decisions is to look at scenarios from a third-party perspective, as though giving advice to a friend. Research suggests that when adopting a first-person viewpoint we focus on ‘the focal features of the environment’ and when we adopt a third-person, ‘observer’ viewpoint we reason more broadly and focus more on interpersonal and moral ideals such as justice and impartiality. Looking at problems from this more expansive viewpoint appears to foster cognitive processes related to wise decisions.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-one2">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-4</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        What point does the writer make in the first paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Wisdom appears to be unique to the human race.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">A basic assumption about wisdom may be wrong.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Concepts of wisdom may depend on the society we belong to.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">There is still much to be discovered about the nature of wisdom.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        What does Igor Grossmann suggest about the ability to make wise decisions?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It can vary greatly from one person to another.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Earlier research into it was based on unreliable data.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">The importance of certain influences on it was underestimated.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-5" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Various branches of psychology define it according to their own criteria.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        According to the third paragraph, Grossmann claims that the level of wisdom an individual shows
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">can be greater than they think it is.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">will be different in different circumstances.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">may be determined by particular aspects of their personality.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-6" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">should develop over time as a result of their life experiences.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        What is described in the fifth paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-7" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">a difficulty encountered when attempting to reason wisely</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-7" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">an example of the type of person who is likely to reason wisely</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-7" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">a controversial view about the benefits of reasoning wisely</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-7" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">a recommended strategy that can help people to reason wisely</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-oc2"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="4" id="submit-oc2">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-summary_completion3" class="x-panel" role="tabpanel" aria-labelledby="tab-summary_completion3" hidden>
                <div class="x-panel-inner">Content: Summary Completion 3</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>
                                    Coming up with a definition of wisdom is challenging, but Grossmann and his colleagues have identified four key characteristics as part of a framework of wise reasoning. One is intellectual humility or recognition of the limits of our own knowledge, and another is appreciation of perspectives wider than the issue at hand. Sensitivity to the possibility of change in social relations is also key, along with compromise or integration of different attitudes and beliefs.
                                </p>
                                <p>
                                    Grossmann and his colleagues have also found that one of the most reliable ways to support wisdom in our own day-to-day decisions is to look at scenarios from a third-party perspective, as though giving advice to a friend. Research suggests that when adopting a first-person viewpoint we focus on ‘the focal features of the environment’ and when we adopt a third-person, ‘observer’ viewpoint we reason more broadly and focus more on interpersonal and moral ideals such as justice and impartiality. Looking at problems from this more expansive viewpoint appears to foster cognitive processes related to wise decisions.
                                </p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-summary_completion3">
                                <fieldset class="q-item">
                                    <h3>Questions 1-5</h3>
                                    <p class="lead">Complete the summary using the list of words, <b>A-J</b>, below.</p>
                                    <p><i>Write the correct letter, A-J, in boxes on your answer sheet.</i></p>

                                    <table cellspacing="20" class="q-table q-table-letters">
                                        <tr>
                                            <td><b>A</b></td><td>opinions</td>
                                            <td><b>B</b></td><td>confidence</td>
                                            <td><b>C</b></td><td>view</td>
                                        </tr>
                                        <tr>
                                            <td><b>D</b></td><td>modesty</td>
                                            <td><b>E</b></td><td>problems</td>
                                            <td><b>F</b></td><td>objectivity</td>
                                        </tr>
                                        <tr>
                                            <td><b>G</b></td><td>fairness</td>
                                            <td><b>H</b></td><td>experiences</td>
                                            <td><b>I</b></td><td>range</td>
                                        </tr>
                                        <tr>
                                            <td><b>J</b></td><td>reasons</td>
                                        </tr>
                                    </table>

                                    <p><b>The characteristics of wise reasoning</b></p>
                                    <p>
                                        Igor Grossmann and colleagues have established four characteristics which enable us to make wise decisions. It is important to have a certain degree of
                                        <span class="q-number-box">1</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="XW16JROLKCFE4BMH-10" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                </select>
                                            </span>
                                        </span>
                                        regarding the extent of our knowledge, and to take into account
                                        <span class="q-number-box">2</span>
                                        <span class="q-question">
                                                <select name="XW16JROLKCFE4BMH-11" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                </select>
                                            </span>
                                        which may not be the same as our own. We should also be able to take a broad
                                        <span class="q-number-box">3</span>
                                        <span class="q-question">
                                                <select name="XW16JROLKCFE4BMH-12" data-q="1" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                        <option value="J">J</option>
                                                </select>
                                            </span>
                                        of any situation. Another key characteristic is being aware of the likelihood of alterations in the way that people relate to each other.
                                    </p>

                                    <p>
                                        Grossmann also believes that it is better to regard scenarios with
                                        <span class="q-number-box">4</span>
                                        <span class="q-question">
                                            <select name="XW16JROLKCFE4BMH-13" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                    <option value="J">J</option>
                                            </select>
                                        </span>
                                        . By avoiding the first-person perspective, we focus more on
                                        <span class="q-number-box">5</span>
                                        <span class="q-question">
                                            <select name="XW16JROLKCFE4BMH-14" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                    <option value="J">J</option>
                                            </select>
                                        </span>
                                        and on other moral ideals, which in turn leads to wiser decision-making.
                                    </p>
                                </fieldset>

                                <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary try-again" id="again-summary_completion3"
                                        style="display: none">
                                        Try Again
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kategori="reading"
                                        data-count="5" id="submit-summary_completion3">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2" hidden>
                <div class="x-panel-inner">Content: True/False/Not Given</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid highlighted-content">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">The White Horse of Uffington</h3>
                            <div class="passage-body">
                                <p>For example, in one experiment that took place during the peak of a recent economic recession, graduating college seniors were asked to reflect on their job prospects. The students were instructed to imagine their career either ‘as if you were a distant observer’ or ‘before your own eyes as if you were right there’. Participants in the group assigned to the ‘distant observer’ role displayed more wisdom-related reasoning (intellectual humility and recognition of change) than did participants in the control group.</p>
                                <p>In another study, couples in long-term romantic relationships were instructed to visualize an unresolved relationship conflict either through the eyes of an outsider or from their own perspective. Participants then discussed the incident with their partner for 10 minutes, after which they wrote down their thoughts about it. Couples in the ‘other’s eyes’ condition were significantly more likely to rely on wise reasoning — recognizing others’ perspectives and searching for a compromise — compared to the couples in the egocentric condition.</p>
                                <p>‘<b>Ego-decentering</b> promotes greater focus on others and enables a bigger picture, conceptual view of the experience, affording recognition of intellectual humility and change,’ says Grossmann.</p>
                                <p>We might associate wisdom with intelligence or particular personality traits, but research shows only a small positive relationship between wise thinking and crystallized intelligence and the personality traits of openness and agreeableness. ‘It is remarkable how much people can vary in their wisdom from one situation to the next, and how much stronger such contextual effects are for understanding the relationship between wise judgment and its social and affective outcomes as compared to the generalized “traits”,’ Grossmann explains. ‘That is, knowing how wisely a person behaves in a given situation is more informative for understanding their emotions or likelihood to forgive [or] retaliate as compared to knowing whether the person may be wise “in general”.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body" id="form-tfng2">
                                <fieldset class="q-item">
                                    <p><b>Questions 1-5</b></p>
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
                                        Students participating in the job prospects experiment could choose one of two perspectives to take.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-9" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-9" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-9" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Participants in the couples experiment were aware that they were taking part in a study about wise reasoning.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-10" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-10" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-10" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        In the couples experiments, the length of the couples’ relationships had an impact on the results.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-11" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-11" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-11" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        In both experiments, the participants who looked at the situation from a more detached viewpoint tended to make wiser decisions.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-12" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-12" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-12" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        Grossmann believes that a person’s wisdom is determined by their intelligence to only a very limited extent.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-13" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-13" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="XW16JROLKCFE4BMH-13" value="NOT GIVEN" />
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
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @include('ielts.sets.layouts.practice.listening_reading.components')
    @include('ielts.sets.layouts.practice.listening_reading.script')
    <script>
        $("#submit-tfng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng", "XW16JROLKCFE4BMH", "tfng", $(this), "again-tfng", "True, False or Not Given");
        });

        $("#submit-summary_completion").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-summary_completion", "XW16JROLKCFE4BMH", "summary_completion", $(this), "again-summary_completion", "Summary Completion");
        });

        $("#submit-oc").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one", "XW16JROLKCFE4BMH", "oc", $(this), "again-oc", "One Choice");
        });

        $("#submit-summary_completion2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-summary_completion2", "XW16JROLKCFE4BMH", "summary_completion", $(this), "again-summary_completion2", "Summary Completion");
        });

        $("#submit-ynng").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-ynng", "XW16JROLKCFE4BMH", "ynng", $(this), "again-ynng", "yes, No or Not Given");
        });

        $("#submit-oc2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-one2", "XW16JROLKCFE4BMH", "oc", $(this), "again-oc2", "One Choice");
        });

        $("#submit-summary_completion3").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-summary_completion3", "XW16JROLKCFE4BMH", "summary_completion", $(this), "again-summary_completion3", "Summary Completion");
        });

        $("#submit-tfng2").on("click", function(e) {
            e.preventDefault();
            submitHelper("form-tfng2", "XW16JROLKCFE4BMH", "tfng", $(this), "again-tfng2", "True, False or Not Given");
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
                    'tfng': 8,
                    'summary_completion': 5,
                    'one': 3,
                    'summary_completion2': 4,
                    'ynng': 6,
                    'one2': 4,
                    'summary_completion3': 5,
                    'tfng2': 5,
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
