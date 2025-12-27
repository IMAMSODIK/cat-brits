@props(['tab'])
<div class="x-panel-inner">Content: Sentence Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">

                <h3>B</h3>
                <p>
                    Wild tomatoes, which are native to the Andes region in South America, produce pea-sized fruits. Over
                    many generations, peoples such as the Aztecs and Incas transformed the plant by selecting and
                    breeding plants with mutations* in their genetic structure, which resulted in desirable traits such
                    as larger fruit.
                </p>

                <p>
                    But every time a single plant with a mutation is taken from a larger population for breeding, much
                    genetic diversity is lost. And sometimes the desirable mutations come with less desirable traits.
                    For instance, the tomato strains grown for supermarkets have lost much of their flavour.
                </p>

                <p>
                    By comparing the genomes of modern plants to those of their wild relatives, biologists have been
                    working out what genetic changes occurred as plants were domesticated. The teams in Brazil and China
                    have now used this knowledge to reintroduce these changes from scratch while maintaining or even
                    enhancing the desirable traits of wild strains.
                </p>

                <h3>C</h3>
                <p>
                    Kudla’s team made six changes altogether. For instance, they tripled the size of fruit by editing a
                    gene called FRUIT WEIGHT, and increased the number of tomatoes per truss by editing another called
                    MULTIFLORA.
                </p>

                <p>
                    While the historical domestication of tomatoes reduced levels of the red pigment lycopene – thought
                    to have potential health benefits – the team in Brazil managed to boost it instead. The wild tomato
                    has twice as much lycopene as cultivated ones; the newly domesticated one has five times as much.
                </p>

                <p>
                    ‘They are quite tasty,’ says Kudla. ‘A little bit strong. And very aromatic.’
                </p>

                <p>
                    The team in China re-domesticated several strains of wild tomatoes with desirable traits lost in
                    domesticated tomatoes. In this way they managed to create a strain resistant to a common disease
                    called bacterial spot race, which can devastate yields. They also created another strain that is
                    more salt tolerant – and has higher levels of vitamin C.
                </p>

            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-3</h3>
                    <p class="lead"><i>Complete the sentences below.</i></p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="1">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">1</span>
                        <span style="flex: 1;">
                            An undesirable trait such as loss of
                            <span class="q-question">
                                <input type="text" name="DPCLyNHpDTqSciXd-1" class="q-text" placeholder="">
                            </span>
                            may be caused by a mutation in a tomato gene.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="2">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">2</span>
                        <span style="flex: 1;">
                            By modifying one gene in a tomato plant, researchers made the tomato three times its
                            original
                            <span class="q-question">
                                <input type="text" name="DPCLyNHpDTqSciXd-2" class="q-text" placeholder="">
                            </span>
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="3">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">3</span>
                        <span style="flex: 1;">
                            A type of tomato which was not badly affected by
                            <span class="q-question">
                                <input type="text" name="DPCLyNHpDTqSciXd-3" class="q-text" placeholder="">
                            </span>
                            , and was rich in vitamin C, was produced by a team of researchers in China.
                        </span>
                    </legend>
                </fieldset>

                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display:none">
                        Try Again
                    </button>
                </div>
            </form>
        </aside>
    </div>
</div>
