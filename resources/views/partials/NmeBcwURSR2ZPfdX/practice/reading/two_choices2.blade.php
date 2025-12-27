@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">

                <h3>G.</h3>
                <p>
                    Many of the artefacts Barrett’s team recovered date from the beginning of the Viking Age, the 700s
                    through to the 900s CE. Trade networks connecting Scandinavia with Europe and the Middle East were
                    expanding around this time. Although we usually think of ships when we think of Scandinavian
                    expansion, these recent discoveries show that plenty of goods travelled on overland routes, like the
                    mountain passes of Oppland. And growing Norwegian towns, along with export markets, would have
                    created a booming demand for hides to fight off the cold, as well as antlers to make useful things
                    like combs. Business must have been good for hunters.
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
                        Which <b>TWO</b> of the following statements does the writer make about the Viking Age?
                    </p>
                </fieldset>

                <fieldset class="q-item" data-q="2" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 2 options">
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-2[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">Hunters at this time benefited from an increased demand for
                                goods.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-2[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">The beginning of the period saw the greatest growth in the wealth of
                                Vikings.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-2[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">Vikings did not rely on ships alone to transport goods.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-2[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">Norwegian towns at this time attracted traders from around the
                                world.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="NmeBcwURSR2ZPfdX-2[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">Vikings were primarily interested in their trading links with the
                                Middle East.</span>
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
