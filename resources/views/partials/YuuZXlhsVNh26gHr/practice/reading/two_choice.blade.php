@props(['tab'])
<div class="x-panel-inner">Content: Two Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>D</h3>
                <p>
                    Insects are the undisputed masters of the terrestrial domain, where they occupy
                    every possible niche. Consequently, they have a bewildering array of interactions
                    with other organisms, something which has driven the evolution of an enormous
                    range of very interesting compounds for defensive and offensive purposes. Their
                    remarkable diversity exceeds that of every other group of animals on the planet
                    combined. Yet even though insects are far and away the most diverse animals in
                    existence, their potential as sources of therapeutic compounds is yet to be
                    realised.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1–2</b></p>
                    <p class="lead"><i>Choose TWO letters, <b>A–E</b>.</i></p>
                    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
                    <p>
                        <span class="q-number-box">1</span>
                        <span class="q-number-box">2</span>
                        Which <b>TWO</b> of the following make insects interesting for drug research?
                    </p>
                </fieldset>

                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question options">
                        <label class="q-option">
                            <input type="checkbox" name="YuuZXlhsVNh26gHr-1[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">the huge number of individual insects in the world</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="YuuZXlhsVNh26gHr-1[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">the variety of substances insects have developed to protect
                                themselves</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="YuuZXlhsVNh26gHr-1[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">the potential to extract and make use of insects’ genetic
                                codes</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="YuuZXlhsVNh26gHr-1[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">the similarities between different species of insect</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="YuuZXlhsVNh26gHr-1[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">the manageable size of most insects</span>
                        </label>
                    </div>
                </fieldset>

                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display: none">
                        Try Again
                    </button>
                </div>

            </form>
        </aside>
    </div>
</div>
