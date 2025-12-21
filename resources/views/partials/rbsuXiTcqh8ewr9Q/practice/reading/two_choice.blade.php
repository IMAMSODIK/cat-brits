@props(['tab'])
<div class="x-panel-inner">Content: Two Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">The pirates of the ancient Mediterranean</h3>

            <div class="passage-body">
                <p>
                    B. Although piracy in the Mediterranean is first recorded in ancient Egypt during the reign of
                    Pharaoh Amenhotep III (c 1390-1353 BCE), it is reasonable to assume it predated this powerful
                    civilisation. This is partly due to the great importance the Mediterranean held at this time, and
                    partly due to its geography. While the Mediterranean region is predominantly fertile, some parts are
                    rugged and hilly, even mountainous. In the ancient times, the inhabitants of these areas relied
                    heavily on marine resources, including fish and salt. Most had their own boats, possessed good
                    seafaring skills, and unsurpassed knowledge of the local coastline and sailing routes. Thus, it is
                    not surprising that during hardships, these men turned to piracy. Geography itself further benefited
                    the pirates, with the numerous coves along the coast providing places for them to hide their boats
                    and strike undetected. Before the invention of ocean-going caravels in the 15th century, ships could
                    not easily cross long distances over open water. Thus, in the ancient world most were restricted to
                    a few well- known navigable routes that followed the coastline. Caught in a trap, a slow merchant
                    ship laden with goods had no other option but to surrender. In addition, knowledge of the local area
                    helped the pirates to avoid retaliation once a state fleet arrived.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1-2</b></p>
                    <p class="lead"><i>Choose Two Letters<b>A-E</b>.</i></p>
                    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
                    <p><span class="q-number-box">1</span><span class="q-number-box">2</span> Which
                        <b>TWO</b> of the following statements does the writer make about inhabitants of the
                        Mediterranean region in the ancient world?
                    </p>
                </fieldset>
                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-1[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">They often used stolen vessels to carry out pirate attacks.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-1[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">They managed to escape capture by the authorities because they knew
                                the area so well.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-1[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label"> They paid for information about the routes merchant ships would
                                take.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-1[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label"> They depended more on the sea for their livelihood than on
                                farming.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-1[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label"> They stored many of the goods taken in pirate attacks in coves
                                along
                                the coastline.</span>
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