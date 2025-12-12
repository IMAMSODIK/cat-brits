@props(['tab'])
<div class="x-panel-inner">Content: Yes/No/Not Given</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <p><b>Alfred Wegener: science, exploration and the theory of continental drift</b></p>
                <p><i>by Mott T Greene</i></p>
                <p><b>Introduction</b></p>
                <p>This is a book about the life and scientific work of Alfred Wegener, whose reputation
                    today rests with his theory of continental displacements, better known as
                    ‘continental drift’. Wegener proposed this theory in 1912 and developed it
                    extensively for nearly 20 years. His book on the subject, The Origin of Continents
                    and Oceans, went through four editions and was the focus of an international
                    controversy in his lifetime and for some years after his death.</p>
                <p>Wegener’s basic idea was that many mysteries about the Earth’s history could be
                    solved if one supposed that the continents moved laterally, rather than supposing
                    that they remained fixed in place. Wegener showed in great detail how such
                    continental movements were plausible and how they worked, using evidence from a
                    large number of sciences including geology, geophysics, paleontology, and
                    climatology. Wegener’s idea – that the continents move – is at the heart of the
                    theory that guides Earth sciences today: namely plate tectonics. Plate tectonics is
                    in many respects quite different from Wegener’s proposal, in the same way that
                    modern evolutionary theory is very different from the ideas Charles Darwin proposed
                    in the 1850s about biological evolution. Yet plate tectonics is a descendant of
                    Alfred Wegener’s theory of continental drift, in quite the same way that modern
                    evolutionary theory is a descendant of Darwin’s theory of natural selection.</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-4</h3>
                    <p class="lead">Do the following statements agree with the claims of the writer
                        in The Reading Passage?
                    </p>
                    <p><i>In boxes on your answer sheet, write</i></p>
                    <ul class="legend">
                        <li><strong>YES</strong> if the statement agrees with the claims of the writer
                        </li>
                        <li><strong>NO</strong> if the statement contradicts the claims of the writer
                        </li>
                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
                            about this</li>
                    </ul>
                </fieldset>
                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        Wegener’s ideas about continental drift were widely disputed while he was alive.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-5" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-5" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-5" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        The idea that the continents remained fixed in place was defended in a number of
                        respected scientific publications.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-6" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-6" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-6" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        Wegener relied on a limited range of scientific fields to support his theory of
                        continental drift
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-7" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-7" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-7" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        The similarities between Wegener’s theory of continental drift and modern-day
                        plate tectonics are enormous.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-8" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-8" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="yPLnQeqINAxbrnva-8" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
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