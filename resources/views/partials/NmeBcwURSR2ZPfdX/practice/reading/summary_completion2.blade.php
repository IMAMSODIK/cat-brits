@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>B</h3>
                <p>
                    Organic materials like textiles and hides are relatively rare finds at archaeological sites.
                    This is because unless they’re protected from the microorganisms that cause decay, they tend not
                    to last long. Extreme cold is one reliable way to keep artefacts relatively fresh for a few
                    thousand years, but once thawed out, these materials experience degradation relatively swiftly.
                </p>
                <p>
                    With climate change shrinking ice cover around the world, glacial archaeologists need to race
                    the clock to find newly revealed artefacts, preserve them, and study them.
                    If something fragile dries and is windblown it might very soon be lost to science, or an arrow might
                    be exposed and
                    then covered again by the next snow and remain well-preserved. The unpredictability means that
                    glacial archaeologists have to be systematic in their approach to fieldwork.
                </p>

                <h3>C</h3>
                <p>
                    Over a nine-year period, a team of archaeologists, which included Lars Pilo of Oppland County
                    Council, Norway, and James Barrett of the McDonald Institute for Archaeological Research,
                    surveyed patches of ice in Oppland, an area of south-central Norway that is home to some of the
                    country’s highest mountains.
                    Reindeer once congregated on these icy patches in the later summer months to escape biting insects,
                    and from the late Stone Age, hunters followed.
                    In addition, trade routes threaded through the mountain passes of Oppland, linking settlements in
                    Norway to
                    the rest of Europe.
                </p>
                <p>
                    The slow but steady movement of glaciers tends to destroy anything at their bases, so the team
                    focused on stationary patches of ice, mostly above 1,400 metres.
                    That ice is found amid fields of frost-weathered boulders, fallen rocks, and exposed bedrock that
                    for nine months of the year
                    is buried beneath snow.
                </p>
                <p>
                    ‘Fieldwork is hard work — hiking with all our equipment, often camping on permafrost — but very
                    rewarding. You’re rescuing the archaeology, bringing the melting ice to wider attention,
                    discovering a unique environmental history and really connecting with the natural environment,’
                    says Barrett.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-3</h3>
                    <p class="lead">Complete the summary below.</p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                    <p>
                    <div>
                        Organic materials such as animal skins and textiles are not discovered very often at
                        archaeological sites. They have little protection against
                        <span class="q-number-box">1</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="NmeBcwURSR2ZPfdX-9" class="q-text" placeholder="">
                            </span>
                        </span>
                        , which means that they decay relatively quickly. But this is not always the case. If
                        temperatures are low enough, fragile artefacts can be preserved for thousands of years.
                    </div>
                    </p>

                    <p>
                    <div>
                        A team of archaeologists have been working in the mountains in Oppland in Norway to recover
                        artefacts revealed by shrinking ice cover. In the past, there were trade routes through these
                        mountains and
                        <span class="q-number-box">2</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="NmeBcwURSR2ZPfdX-10" class="q-text" placeholder="">
                            </span>
                        </span>
                        gathered there in the summer months to avoid being attacked by
                        <span class="q-number-box">3</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="NmeBcwURSR2ZPfdX-11" class="q-text" placeholder="">
                            </span>
                        </span>
                        on lower ground. The people who used these mountains left things behind and it is those objects
                        that are of interest to archaeologists.
                    </div>
                    </p>
                </fieldset>


                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display: none">Try
                        Again</button>
                </div>
            </form>
        </aside>
    </div>
</div>
