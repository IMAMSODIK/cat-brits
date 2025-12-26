@props(['tab'])
<div class="x-panel-inner">Content: True/False/Not Given</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">Urban farming</h3>
            <div class="passage-body">
                <p>
                    Urban farming is not, of course, a new phenomenon. Inner-city agriculture is booming from Shanghai
                    to Detroit and Tokyo to Bangkok. Strawberries are being grown in disused shipping containers,
                    mushrooms in underground carparks. Aeroponic farming, he says, is ‘virtuous’. The equipment weighs
                    little, can be installed on almost any flat surface and is cheap to buy: roughly €100 to €150 per
                    square metre. It is cheap to run, too, consuming a tiny fraction of the electricity used by some
                    techniques.
                </p>
                <p>
                    Produce grown this way typically sells at prices that, while generally higher than those of classic
                    intensive agriculture, are lower than soil-based organic growers. There are limits to what farmers
                    can grow this way, of course, and much of the produce is suited to the summer months. ‘Root
                    vegetables we cannot do, at least not yet,’ he says. ‘Radishes are OK, but carrots, potatoes, that
                    kind of thing- the roots are simply too long. Fruit trees are obviously not an option. And beans
                    tend to take up a lot of space for not much return.’ Nevertheless, urban farming of the kind being
                    practised in Paris is one part of a bigger and fast-changing picture that is bringing food
                    production closer to our lives.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p><b>Questions 1-6</b></p>
                    <p class="lead">Do the following statements agree with the information given in the Reading
                        Passage?</p>
                    <p>In boxes on your answer sheet, write</p>
                    <ul class="legend">
                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                    </ul>
                </fieldset>

                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        Urban farming can take place above or below ground.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-1" value="TRUE" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-1" value="FALSE" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-1" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        Some of the equipment used in aeroponic farming can be made by hand.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-2" value="TRUE" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-2" value="FALSE" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-2" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        Urban farming relies more on electricity than some other types of farming.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-3" value="TRUE" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-3" value="FALSE" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-3" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        Fruit and vegetables grown on an aeroponic urban farm are cheaper than traditionally grown
                        organic produce.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-4" value="TRUE" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-4" value="FALSE" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-4" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Most produce can be grown on an aeroponic urban farm at any time of the year.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-5" value="TRUE" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-5" value="FALSE" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-5" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="6">
                    <legend class="q-text">
                        <span class="q-number">6</span>
                        Beans take longer to grow on an urban farm than other vegetables.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-6" value="TRUE" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-6" value="FALSE" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="KeCD0au8jSaBuT3A-6" value="NOT GIVEN" />
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
                        style="display: none">
                        Try Again
                    </button>
                </div>
            </form>
        </aside>
    </div>
</div>
