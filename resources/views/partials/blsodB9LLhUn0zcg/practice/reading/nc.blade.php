@props(['tab'])

<div class="x-panel-inner">Content: Note Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3 class="passage-title">D</h3>
                <p>When finally completed, the Step Pyramid rose 62 meters high and was the tallest structure of its
                    time. The complex in which it was built was the size of a city in ancient Egypt and included a
                    temple, courtyards, shrines, and living quarters for the priests. It covered a region of 16 hectares
                    and was surrounded by a wall 10.5 meters high. The wall had 13 false doors cut into it with only one
                    true entrance cut into the south-east corner; the entire wall was then ringed by a trench 750 meters
                    long and 40 meters wide. The false doors and the trench were incorporated into the complex to
                    discourage unwanted visitors. If someone wished to enter, he or she would have needed to know in
                    advance how to find the location of the true opening in the wall. Djoser was so proud of his
                    accomplishment that he broke the tradition of having only his own name on the monument and had
                    Imhotep’s name carved on it as well.</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>
        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-nc">
                <fieldset class="q-item">
                    <h3>Questions 1-4</h3>
                    <p class="lead">Complete the notes below.</p>
                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                </fieldset>
                <fieldset class="q-item">
                    <p><b>The Step Pyramid of Djoser</b></p>
                    <ul>
                        <li>
                            <div class="q-list" data-q="1">
                                The complex that includes the Step Pyramid and its surroundings is considered to be as
                                big as an Egyptian
                                <span class="q-number-box">1</span>
                                <input type="text" name="blsodB9LLhUn0zcg-1" class="q-text" placeholder="">
                            </div>
                        </li>
                        <li>
                            <div class="q-list" data-q="2">
                                of the past. The area outside the pyramid included accommodation that was occupied by
                                <span class="q-number-box">2</span>
                                <input type="text" name="blsodB9LLhUn0zcg-2" class="q-text" placeholder="">
                                along with many other buildings and features.
                            </div>
                        </li>
                        <li>
                            <div class="q-list" data-q="3">
                                A wall ran around the outside of the complex and a number of false entrances were built
                                into this. In addition, a long
                                <span class="q-number-box">3</span>
                                <input type="text" name="blsodB9LLhUn0zcg-3" class="q-text" placeholder="">
                            </div>
                        </li>
                        <li>
                            <div class="q-list" data-q="4">
                                encircled the wall. As a result, any visitors who had not been invited were cleverly
                                prevented from entering the pyramid grounds unless they knew the
                                <span class="q-number-box">4</span>
                                <input type="text" name="blsodB9LLhUn0zcg-4" class="q-text" placeholder="">
                                of the real entrance.
                            </div>
                        </li>
                    </ul>
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
