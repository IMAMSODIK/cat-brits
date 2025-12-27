@props(['tab'])
<div class="x-panel-inner">Content: Sentence Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>Urban farming</h3>
                <p><i>In Paris, urban farmers are trying a soil-free approach to agriculture that uses less space and
                        fewer
                        resources. Could it help cities face the threats to our food supplies?</i></p>

                <p>On top of a striking new exhibition hall in southern Paris, the world’s largest urban rooftop farm
                    has started to bear fruit. Strawberries that are small, intensely flavoured and resplendently red
                    sprout abundantly from large plastic tubes. Peer inside and you see the tubes are completely hollow,
                    the roots of dozens of strawberry plants dangling down inside them. From identical vertical tubes
                    nearby burst row upon row of lettuces; near those are aromatic herbs, such as basil, sage and
                    peppermint. Opposite, in narrow, horizontal trays packed not with soil but with coconut fibre, grow
                    cherry tomatoes, shiny aubergines and brightly coloured chards.</p>

                <p>Pascal Hardy, an engineer and sustainable development consultant, began experimenting with vertical
                    farming and aeroponic growing towers – as the soil-free plastic tubes are known – on his Paris
                    apartment block roof five years ago. The urban rooftop space above the exhibition hall is somewhat
                    bigger: 14,000 square metres and almost exactly the size of a couple of football pitches. Already,
                    the team of young urban farmers who tend it have picked, in one day, 3,000 lettuces and 150 punnets
                    of strawberries.</p>

                <p>When the remaining two thirds of the vast open area are in production, 20 staff will harvest up to
                    1,000 kg of perhaps 35 different varieties of fruit and vegetables, every day. ‘We’re not ever,
                    obviously, going to feed the whole city this way,’ cautions Hardy. ‘In the urban environment you’re
                    working with very significant practical constraints, clearly, on what you can do and where. But if
                    enough unused space can be developed like this, there’s no reason why you shouldn’t eventually
                    target maybe between 5% and 10% of consumption.’</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-3</h3>
                    <p class="lead"><i>Complete the sentences below.</i></p>
                    <p><i>Choose <b>NO MORE THAN TWO WORDS AND/OR A NUMBER</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="1">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">1</span>
                        <span style="flex: 1;">
                            Vertical tubes are used to grow strawberries,
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-1" class="q-text" placeholder="">
                            </span>
                            and herbs.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="2">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">2</span>
                        <span style="flex: 1;">
                            There will eventually be a daily harvest of as much as
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-2" class="q-text" placeholder="">
                            </span>
                            in weight of fruit and vegetables.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="3">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">3</span>
                        <span style="flex: 1;">
                            It may be possible that the farm’s produce will account for as much as 10% of the city’s
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-3" class="q-text" placeholder="">
                            </span>
                            overall.
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
