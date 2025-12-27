@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <p>
                    In the lab, P. dentata worker ants typically live for around 140 days. Giraldo focused on ants at
                    four age ranges: 20 to 22 days, 45 to 47 days, 95 to 97 days and 120 to 122 days. Unlike all
                    previous studies, which only estimated how old the ants were, her work tracked the ants from the
                    time the pupae became adults, so she knew their exact ages. Then she put them through a range of
                    tests.

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
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item" data-q="1">
                    <h3>Questions 1-8</h3>
                    <p class="lead">
                        Complete the notes below.
                    </p>
                    <p>Choose ONE WORD ONLY from the passage for each answer.</p>
                    <p>Write your answers in boxes on your answer sheet.</p>
                    <p>
                    <div>
                        <b>Ysabel Giraldo’s research</b>
                        <ul class="completion-list">
                            <li>
                                Focused on a total of
                                <span class="q-number">1</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-1" class="q-text" />
                                    </span>
                                </span>
                                different age groups of ants
                            </li>
                        </ul>
                        <b>Behaviour:</b>
                        <ul class="completion-list">
                            <li>
                                how well ants looked after their
                                <span class="q-number">2</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-2" class="q-text" />
                                    </span>
                                </span>
                            </li>

                            <li>
                                their ability to locate
                                <span class="q-number">3</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-3" class="q-text" />
                                    </span>
                                </span>
                                using a scent trail
                            </li>

                            <li>
                                the effect that
                                <span class="q-number">4</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-4" class="q-text" />
                                    </span>
                                </span>
                                had on them
                            </li>

                            <li>
                                how
                                <span class="q-number">5</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-5" class="q-text" />
                                    </span>
                                </span>
                                they attacked prey
                            </li>
                        </ul>
                        <b>Brains:</b>
                        <ul>
                            <li>
                                comparison between age and the
                                <span class="q-number">6</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-6" class="q-text" />
                                    </span>
                                </span>
                                of dying cells in the brains of ants
                            </li>

                            <li>
                                condition of synaptic complexes (areas in which
                                <span class="q-number">7</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-7" class="q-text" />
                                    </span>
                                </span>
                                meet) in the brain’s ‘mushroom bodies’
                            </li>

                            <li>
                                level of two
                                <span class="q-number">8</span>

                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-8" class="q-text" />
                                    </span>
                                </span>
                                in the brain associated with ageing
                            </li>
                        </ul>
                    </div>
                    </p>

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
