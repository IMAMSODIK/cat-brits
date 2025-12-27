@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>E</h3>
                <p>
                    Barrett’s team radiocarbon-dated 153 of the artefacts and compared those dates to the timing of
                    major environmental changes in the region — such as periods of cooling or warming — and major social
                    and economic shifts — such as the growth of farming settlements and the spread of international
                    trade networks leading up to the Viking Age. They found that some periods had produced lots of
                    artefacts, which indicates that people had been pretty active in the mountains during those times.
                    But there were few or no signs of activity during other periods.
                </p>

                <h3>F</h3>
                <p>
                    What was surprising, according to Barrett, was the timing of these periods. Oppland’s mountains
                    present daunting terrain and in periods of extreme cold, glaciers could block the higher mountain
                    passes and make travel in the upper reaches of the mountains extremely difficult. Archaeologists
                    assumed people would stick to lower elevations during a time like the Late Antique Little Ice Age, a
                    short period of deeper-than-usual cold from about 536-600 CE. But it turned out that hunters kept
                    regularly venturing into the mountains even when the climate turned cold, based on the amount of
                    stuff they had apparently dropped there.
                </p>
                <p>
                    ‘Remarkably, though, the finds from the ice may have continued through this period, perhaps
                    suggesting that the importance of mountain hunting increased to supplement failing agricultural
                    harvests in times of low temperatures,’ says Barrett. A colder turn in the Scandinavian climate
                    would likely have meant widespread crop failures, so more people would have depended on hunting to
                    make up for those losses.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1-2</b></p>
                    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
                    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
                    <p>
                        <span class="q-number-box">1</span>
                        <span class="q-number-box">2</span>
                        Which <b>TWO</b> of the following statements does the writer make about the discoveries of
                        Barrett’s team?
                    </p>
                </fieldset>

                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-1[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">Artefacts found in the higher mountain passes were limited to skiing
                                equipment.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-1[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">Hunters went into the mountains even during periods of extreme
                                cold.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-1[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">The number of artefacts from certain time periods was relatively
                                low.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-1[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">Radiocarbon dating of artefacts produced some unreliable
                                results.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-1[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">More artefacts were found in Oppland than at any other mountain
                                site.</span>
                        </label>
                    </div>
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
