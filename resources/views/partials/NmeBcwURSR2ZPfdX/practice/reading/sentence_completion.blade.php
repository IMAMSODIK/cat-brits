@props(['tab'])
<div class="x-panel-inner">Content: Sentence Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>G</h3>
                <p>Some plants mainly use day length as an indicator of the season. Other species, such as
                    daffodils, have considerable temperature sensitivity, and can flower months in advance during a
                    warm winter. In fact, the discovery of the dual role of phytochromes provides the science behind
                    a well-known rhyme long used to predict the coming season: oak before ash we’ll have a splash,
                    ash before oak we’re in for a soak.</p>
                <p>
                    Wigge explains: ‘Oak trees rely much more on temperature, likely using phytochromes as
                    thermometers to dictate development, whereas ash trees rely on measuring day length to determine
                    their seasonal timing. A warmer spring, and consequently a higher likeliness of a hot summer,
                    will result in oak leafing before ash. A cold spring will see the opposite. As the British know
                    only too well, a colder summer is likely to be a rain-soaked one.’
                </p>
                <h3>H</h3>
                <p>
                    The new findings are the culmination of twelve years of research involving scientists from
                    Germany, Argentina and the US, as well as the Cambridge team. The work was done in a model
                    system, using a mustard plant called Arabidopsis, but Wigge says the phytochrome genes necessary
                    for temperature sensing are found in crop plants as well. ‘Recent advances in plant genetics now
                    mean that scientists are able to rapidly identify the genes controlling these processes in crop
                    plants, and even alter their activity using precise molecular “scalpels”,’ adds Wigge.
                    ‘Cambridge is uniquely well-positioned to do this kind of research as we have outstanding
                    collaborators nearby who work on more applied aspects of plant biology, and can help us transfer
                    this new knowledge into the field.’
                </p>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-3</h3>
                    <p class="lead">Complete the sentences below.</p>
                    <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</p>
                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="1">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">1</span>
                        <span style="flex: 1;">
                            Daffodils are likely to flower early in response to
                            <span class="q-question">
                                <input type="text" name="NmeBcwURSR2ZPfdX-1" class="q-text" placeholder="">
                            </span>
                            weather.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="2">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">2</span>
                        <span style="flex: 1;">
                            If ash trees come into leaf before oak trees, the weather in
                            <span class="q-question">
                                <input type="text" name="NmeBcwURSR2ZPfdX-2" class="q-text" placeholder="">
                            </span>
                            will probably be wet.
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="3">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">3</span>
                        <span style="flex: 1;">
                            The research was carried out using a particular species of
                            <span class="q-question">
                                <input type="text" name="NmeBcwURSR2ZPfdX-3" class="q-text" placeholder="">
                            </span>.
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
