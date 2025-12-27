@props(['tab'])
<div class="x-panel-inner">Content: Sentence Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>G</h3>
                <p>Thinnings and dense and dead wood removal for fire prevention also center on the production of
                    low-use wood. However, it is important to remember that some retention of what many would classify
                    as low-use wood is very important. The tops of trees that have been cut down should be left on the
                    site so that their nutrients cycle back into the soil. In addition, trees with many cavities are
                    extremely important habitats for insect predators like woodpeckers, bats and small mammals. They
                    help control problem insects and increase the health and resilience of the forest. It is also
                    important to remember that not all small trees are low-use. For example, many species like hawthorn
                    provide food for wildlife. Finally, rare species of trees in a forest should also stay behind as
                    they add to its structural diversity.</p>

                <p>—————</p>
                <p><i>*Stand – An area covered with trees that have common features (e.g. size)</i></p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-5</h3>
                    <p class="lead"><i>Complete the sentences below.</i></p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="1">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">1</span>
                        <span style="flex: 1;">
                            Some dead wood is removed to avoid the possibility of
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-4" class="q-text" placeholder="">
                            </span>.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="2">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">2</span>
                        <span style="flex: 1;">
                            The
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-5" class="q-text" placeholder="">
                            </span>
                            from the tops of cut trees can help improve soil quality.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="3">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">3</span>
                        <span style="flex: 1;">
                            Some damaged trees should be left, as their
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-6" class="q-text" placeholder="">
                            </span>
                            provide habitats for a range of creatures.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="4">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">4</span>
                        <span style="flex: 1;">
                            Some trees that are small, such as
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-7" class="q-text" placeholder="">
                            </span>,
                            are a source of food for animals and insects.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="5">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">5</span>
                        <span style="flex: 1;">
                            Any trees that are
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-8" class="q-text" placeholder="">
                            </span>
                            should be left to grow, as they add to the variety of species in the forest.
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
