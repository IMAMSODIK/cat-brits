@props(['tab'])
<div class="x-panel-inner">Content: Two Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>B</h3>
                <p>
                    Djoser was the first king of the Third Dynasty of Egypt and the first to build in stone. Prior to
                    Djoser’s reign, tombs were rectangular monuments made of dried clay brick, which covered underground
                    passages where the deceased person was buried. For reasons which remain unclear, Djoser’s main
                    official, whose name was Imhotep, conceived of building a taller, more impressive tomb for his king
                    by stacking stone slabs on top of one another, progressively making them smaller, to form the shape
                    now known as the Step Pyramid. Djoser is thought to have reigned for 19 years, but some historians
                    and scholars attribute a much longer time for his rule, owing to the number and size of the
                    monuments he built.
                </p>
                <h3>C</h3>
                <p>
                    The Step Pyramid has been thoroughly examined and investigated over the last century, and it is now
                    known that the building process went through many different stages. Historian Marc Van de Mieroop
                    comments on this, writing ‘Much experimentation was involved, which is especially clear in the
                    construction of the pyramid in the center of the complex. It had several plans … before it became
                    the first Step Pyramid in history, piling six levels on top of one another … The weight of the
                    enormous mass was a challenge for the builders, who placed the stones at an inward incline in order
                    to prevent the monument breaking up.’
                </p>
                <h3>D</h3>
                <p>
                    When finally completed, the Step Pyramid rose 62 meters high and was the tallest structure of its
                    time. The complex in which it was built was the size of a city in ancient Egypt and included a
                    temple, courtyards, shrines, and living quarters for the priests. It covered a region of 16 hectares
                    and was surrounded by a wall 10.5 meters high. The wall had 13 false doors cut into it with only one
                    true entrance cut into the south-east corner; the entire wall was then ringed by a trench 750 meters
                    long and 40 meters wide. The false doors and the trench were incorporated into the complex to
                    discourage unwanted visitors. If someone wished to enter, he or she would have needed to know in
                    advance how to find the location of the true opening in the wall. Djoser was so proud of his
                    accomplishment that he broke the tradition of having only his own name on the monument and had
                    Imhotep’s name carved on it as well.
                </p>
                <h3>E</h3>
                <p>
                    The burial chamber of the tomb, where the king’s body was laid to rest, was dug beneath the base of
                    the pyramid, surrounded by a vast maze of long tunnels that had rooms off them to discourage
                    robbers. One of the most mysterious discoveries found inside the pyramid was a large number of stone
                    vessels. Over 40,000 of these vessels, of various forms and shapes, were discovered in storerooms of
                    the pyramid’s underground passages. They are inscribed with the names of rulers from the First and
                    Second Dynasties of Egypt and made from different kinds of stone. There is no agreement among
                    scholars and archaeologists on why the vessels were placed in the tomb of Djoser or what they were
                    supposed to represent. The archaeologist Jean-Philippe Lauer, who excavated most of the pyramid and
                    complex, believes they were originally stored and then given a ‘proper burial’ by Djoser in his
                    pyramid to honor his predecessors. There are other historians, however, who claim the vessels were
                    dumped into the shafts as yet another attempt to prevent grave robbers from getting to the king’s
                    burial chamber.
                </p>
                <h3>F</h3>
                <p>
                    Unfortunately, all of the precautions and intricate design of the underground network did not
                    prevent ancient robbers from finding a way in. Djoser’s grave goods, and even his body, were stolen
                    at some point in the past and all archaeologists found were a small number of his valuables
                    overlooked by the thieves. There was enough left throughout the pyramid and its complex, however, to
                    astonish and amaze the archaeologists who excavated it.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>
        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1-2</b></p>
                    <p class="lead"><i>Choose TWO letters, <b>A-E</b>.</i></p>
                    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
                    <p>
                        <span class="q-number-box">1</span>
                        <span class="q-number-box">2</span>
                        Which <b>TWO</b> of the following points does the writer make about King Djoser?
                    </p>
                </fieldset>
                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="blsodB9LLhUn0zcg-1[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">Initially he had to be persuaded to build in stone rather than
                                clay.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="blsodB9LLhUn0zcg-1[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">There is disagreement concerning the length of his reign.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="blsodB9LLhUn0zcg-1[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">He failed to appreciate Imhotep’s part in the design of the Step
                                Pyramid.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="blsodB9LLhUn0zcg-1[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">A few of his possessions were still in his tomb when archaeologists
                                found it.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="blsodB9LLhUn0zcg-1[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">He criticised the design and construction of other pyramids in
                                Egypt.</span>
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
