@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-title">
                <h3>Plant ‘thermometer’ triggers springtime growth by measuring night-time heat</h3>
            </div>
            <div class="passage-body">
                <h4><b>A photoreceptor molecule in plant cells has been found to have a second job as a thermometer
                        after
                        dark – allowing plants to read seasonal temperature changes. Scientists say the discovery could
                        help
                        breed crops that are more resilient to the temperatures expected to result from climate change.
                    </b>
                </h4>
                <h3>A</h3>
                <p>
                    An international team of scientists led by the University of Cambridge has discovered that the
                    ‘thermometer’ molecule in plants enables them to develop according to seasonal temperature changes.
                    Researchers have revealed that molecules called phytochromes — used by plants to detect light during
                    the day actually change their function in darkness to become cellular temperature gauges that
                    measure the heat of the night. The new findings, published in the journal Science, show that
                    phytochromes control genetic switches in response to temperature as well as light to dictate plant
                    development.
                </p>

                <h3>B</h3>
                <p>
                    At night, these molecules change states, and the pace at which they change is ‘directly proportional
                    to temperature’, say scientists, who compare phytochromes to mercury in a thermometer. The warmer it
                    is, the faster the molecular change — stimulating plant growth.
                </p>

                <h3>C</h3>
                <p>
                    Farmers and gardeners have known for hundreds of years how responsive plants are to temperature:
                    warm winters cause many trees and flowers to bud early, something humans have long used to predict
                    weather and harvest times for the coming year. The latest research pinpoints for the first time a
                    molecular mechanism in plants that reacts to temperature — often triggering the buds of spring we
                    long to see at the end of winter.
                </p>

                <h3>D</h3>
                <p>
                    With weather and temperatures set to become ever more unpredictable due to climate change,
                    researchers say the discovery that this light-sensing molecule also functions as the internal
                    thermometer in plant cells could help us breed tougher crops. ‘It is estimated that agricultural
                    yields will need to double by 2050, but climate change is a major threat to achieving this. Key
                    crops such as wheat and rice are sensitive to high temperatures. Thermal stress reduces crop yields
                    by around 10% for every one degree increase in temperature,’ says lead researcher Dr Philip Wigge
                    from Cambridge’s Sainsbury Laboratory. ‘Discovering the molecules that allow plants to sense
                    temperature has the potential to accelerate the breeding of crops resilient to thermal stress and
                    climate change.’
                </p>

                <h3>E</h3>
                <p>
                    In their active state, phytochrome molecules bind themselves to DNA to restrict plant growth. During
                    the day, sunlight activates the molecules, slowing down growth. If a plant finds itself in shade,
                    phytochromes are quickly inactivated — enabling it to grow faster to find sunlight again. This is
                    how plants compete to escape each other’s shade. ‘Light-driven changes to phytochrome activity occur
                    very fast, in less than a second,’ says Wigge. </p>
                <p>At night, however, it’s a different story. Instead of
                    a rapid deactivation following sundown, the molecules gradually change from their active to inactive
                    state. This is called ‘dark reversion’. ‘Just as mercury rises in a thermometer, the rate at which
                    phytochromes revert to their inactive state during the night is a direct measure of temperature,’
                    says Wigge.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-6</h3>
                    <p class="lead">
                        Do the following statements agree with the information given in the Reading Passage?
                    </p>
                    <p>In boxes on your answer sheet, write</p>
                    <ul class="legend">
                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                    </ul>
                </fieldset>

                <!-- Question 1 -->
                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        The Cambridge scientists’ discovery of the ‘thermometer molecule’ caused surprise among other
                        scientists.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-6" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-6" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-6" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 2 -->
                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        The target for agricultural production by 2050 could be missed.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-7" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-7" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-7" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 3 -->
                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        Wheat and rice suffer from a rise in temperatures.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-8" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-8" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-8" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 4 -->
                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        It may be possible to develop crops that require less water.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-9" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-9" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-9" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 5 -->
                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Plants grow faster in sunlight than in shade.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-10" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-10" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-10" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 6 -->
                <fieldset class="q-item" data-q="6">
                    <legend class="q-text">
                        <span class="q-number">6</span>
                        Phytochromes change their state at the same speed day and night.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-11" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-11" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-11" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>


                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}"
                        style="display: none">Try
                        Again</button>
                </div>
            </form>

        </aside>
    </div>
</div>
