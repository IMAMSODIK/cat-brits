@props(['tab'])
<div class="x-panel-inner">Content: Two Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>C</h3>
                <p>
                    In North America, green roofs have become mainstream, with a wide array of
                    expansive, accessible and food-producing roofs installed in buildings. Again, city
                    leaders and authorities have helped push the movement forward – only recently, San
                    Francisco, USA, created a policy requiring new buildings to have green roofs.
                    Toronto, Canada, has policies dating from the 1990s, encouraging the development of
                    urban farms on rooftops. These countries also benefit from having newer buildings
                    than in many parts of the world, which makes it easier to install green roofs. Being
                    able to keep enough water at roof height and distribute it right across the rooftop
                    is crucial to maintaining the plants on any green roof – especially on ‘edible
                    roofs’ where fruit and vegetables are farmed. And it’s much easier to do this in
                    newer buildings, which can typically hold greater weight, than to retro-fit old
                    ones. Having a stronger roof also makes it easier to grow a greater variety of
                    plants, since the soil can be deeper.
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
                        <b>TWO</b> advantages of using newer buildings for green roofs are mentioned in
                        Paragraph C of the passage?
                    </p>
                </fieldset>
                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="yPLnQeqINAxbrnva-1[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">a longer growing season for edible produce</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="yPLnQeqINAxbrnva-1[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">more economical use of water</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="yPLnQeqINAxbrnva-1[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">greater water-storage capacity</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="yPLnQeqINAxbrnva-1[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">ability to cultivate more plant types</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="yPLnQeqINAxbrnva-1[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">a large surface area for growing plants</span>
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