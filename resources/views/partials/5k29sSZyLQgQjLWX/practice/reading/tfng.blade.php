@props(['tab'])
<div class="x-panel-inner">{{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <p>
                    Such age-defying feats are rare in the animal kingdom. Naked mole rats can live for almost 30 years
                    and stay fit for nearly their entire lives. They can still reproduce even when old, and they never
                    get cancer. But the vast majority of animals deteriorate with age just like people do. Like the
                    naked mole rat, ants are social creatures that usually live in highly organised colonies. ‘It’s this
                    social complexity that makes P. dentata useful for studying aging in people,’ says Giraldo, now at
                    the California Institute of Technology. Humans are also highly social, a trait that has been
                    connected to healthier aging. By contrast, most animal studies of aging use mice, worms or fruit
                    flies, which all lead much more isolated lives.
                </p>

                <p>
                    In the lab, P. dentata worker ants typically live for around 140 days. Giraldo focused on ants at
                    four age ranges: 20 to 22 days, 45 to 47 days, 95 to 97 days and 120 to 122 days. Unlike all
                    previous studies, which only estimated how old the ants were, her work tracked the ants from the
                    time the pupae became adults, so she knew their exact ages. Then she put them through a range of
                    tests.
                </p>

                <p>
                    Giraldo watched how well the ants took care of the young of the colony, recording how often each ant
                    attended to, carried and fed them. She compared how well 20-day-old and 95-day-old ants followed the
                    telltale scent that the insects usually leave to mark a trail to food. She tested how ants responded
                    to light and also measured how active they were by counting how often ants in a small dish walked
                    across a line. And she experimented with how ants react to live prey: a tethered fruit fly. Giraldo
                    expected the older ants to perform poorly in all these tasks. But the elderly insects were all good
                    caretakers and trail-followers – the 95-day-old ants could track the scent even longer than their
                    younger counterparts. They all responded do light well, and the older ants were more active. And
                    when it came to reacting to prey, the older ants attacked the poor fruit fly just as aggressively as
                    the young ones did, flaring their mandibles or pulling at the fly’s legs.
                </p>

                <p>
                    Then Giraldo compared the brains of 20-day-old and 95-day-ole ants, identifying any cells that were
                    close to death. She saw no major differences with age, nor was there any difference in the location
                    of the dying cells, showing that age didn’t seem to affect specific brain functions. Ants and other
                    insects have structures in their brains called mushroom bodies, which are important for processing
                    information, learning and memory. She also wanted to see if aging affects the density of synaptic
                    complexes within these structures – regions where neurons come together. Again, the answer was no.
                    what was more, the old ants didn’t experience any drop in the levels of either serotonin or dopamine
                    – brain chemicals whose decline often coincides with aging. In humans, for example, a decrease in
                    serotonin has been linked to Alzheimer’s disease.
                </p>

                <p>
                    ‘This is the first time anyone has looked at both behavioral and neural changes in these ants so
                    thoroughly,’ says Giraldo, who recently published the findings in the Proceeding of the Royal
                    Society B. Scientists have looked at some similar aspects in bees, but the results of recent bee
                    studies were mixed – some studies showed age-related declines, which biologists call senescence, and
                    others didn’t. ‘For now, the study raises more questions than it answers,’ Giraldo says, ‘including
                    how P. dentata stays in such good shape.’
                </p>

                <p>
                    Also, if the ants don’t deteriorate with age, why do they die at all? Out in the wild, the ants
                    probably don’t live for a full 140 days thanks to predators, disease and just being in an
                    environment that’s much harsher than the comforts of the lab. ‘The lucky ants that do live into old
                    age may suffer a steep decline just before dying,’ Giraldo says, but she can’t say for sure because
                    her study wasn’t designed to follow an ant’s final moments.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-5</h3>
                    <p class="lead">
                        Do the following statements agree with the information given in the
                        Reading Passage?
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
                        Pheidole dentata ants are the only known animals which remain active for almost their whole
                        lives.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-1" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-1" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-1" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 2 -->
                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        Ysabel Giraldo was the first person to study Pheidole dentata ants using precise data about the
                        insects’ ages.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-2" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-2" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-2" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 3 -->
                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        The ants in Giraldo’s experiments behaved as she had predicted that they would.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-3" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-3" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-3" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 4 -->
                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        The recent studies of bees used different methods of measuring age-related decline.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-4" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-4" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-4" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 5 -->
                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Pheidole dentata ants kept in laboratory conditions tend to live longer lives.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-5" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-5" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-5" value="NOT GIVEN">
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
