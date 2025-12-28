@props(['tab'])

<div class="x-panel-inner">Content: One Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <p>
                    ‘I think clearing up some of these misperceptions is really important,’ Rochman says. Among
                    scientists as well as in the media, she says, ‘A lot of the images about strandings and entanglement
                    and all of that cause the perception that plastic debris is killing everything in the ocean.’
                    Interrogating the existing scientific literature can help ecologists figure out which problems
                    really need addressing, and which ones they’d be better off – like the mussels – absorbing and
                    ignoring.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1-1</b></p>
                    <p class="lead">
                        Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.
                    </p>
                    <p><i>Write the correct letter in box on your answer sheet.</i></p>
                </fieldset>

                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        What would be the best title for this passage?
                    </legend>

                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-1" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">Assessing the threat of marine debris</span>
                        </label>

                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-1" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">Marine debris: who is to blame?</span>
                        </label>

                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-1" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">A new solution to the problem of marine debris</span>
                        </label>

                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-1" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">Marine debris: the need for international action</span>
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
