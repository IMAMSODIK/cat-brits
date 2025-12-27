@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <p>
                    Within the studies they looked at, most of the proven threats came from plastic debris, rather than
                    other
                    materials like metal or wood. Most of the dangers also involved large pieces of debris – animals
                    getting
                    entangled in trash, for example, or eating it and severely injuring themselves.
                </p>

                <p>
                    But a lot of ocean debris is ‘microplastic’, or pieces smaller than five millimeters. These may be
                    ingredients
                    used in cosmetics and toiletries, fibers shed by synthetic clothing in the wash, or eroded remnants
                    of larger
                    debris. Compared to the number of studies investigating large-scale debris, Rochman’s group found
                    little
                    research on the effects of these tiny bits. ‘There are a lot of open questions still for
                    microplastic,’
                    Rochman says, though she notes that more papers on the subject have been published since 2013, the
                    cutoff
                    point for the group’s analysis.
                </p>

                <p>
                    There are also, she adds, a lot of open questions about the ways that ocean debris can lead to
                    sea-creature
                    death. Many studies have looked at how plastic affects an individual animal, or that animal’s
                    tissues or
                    cells, rather than whole populations. And in the lab, scientists often use higher concentrations of
                    plastic
                    than what’s really in the ocean. None of that tells us how many birds or fish or sea turtles could
                    die from
                    plastic pollution – or how deaths in one species could affect that animal’s predators, or the rest
                    of the
                    ecosystem.
                </p>

                <p>
                    ‘We need to be asking more ecologically relevant questions,’ Rochman says. Usually, scientists don’t
                    know
                    exactly how disasters such as a tanker accidentally spilling its whole cargo of oil and polluting
                    huge areas
                    of the ocean will affect the environment until after they’ve happened. ‘We don’t ask the right
                    questions
                    early enough,’ she says. But if ecologists can understand how the slow-moving effect of ocean trash
                    is
                    damaging ecosystems, they might be able to prevent things from getting worse.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item" data-q="1">
                    <h3>Questions 1–6</h3>
                    <p class="lead">Complete the notes below.</p>
                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                    <p>Write your answers in boxes on your answer sheet.</p>

                    <div>
                        <h3>Findings related to marine debris</h3>
                        <h3>Studies of marine debris found the biggest threats were</h3>
                        <ul class="completion-list">
                            <li>
                                plastic (not metal or wood) and
                                bits of debris
                                that were
                                <span class="q-number">1</span>
                                <span style="flex:1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-9" class="q-text" />
                                    </span>
                                </span>
                                (harmful to animals)
                            </li>

                            <li>
                                There was little research into
                                <span class="q-number">2</span>
                                <span style="flex:1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-10" class="q-text" />
                                    </span>
                                </span>
                                e.g. from synthetic fibres
                            </li>
                        </ul>

                        <b>Drawbacks of the studies examined</b>
                        <ul class="completion-list">
                            <li>
                                most of them focused on individual animals, not entire
                                <span class="q-number">3</span>
                                <span style="flex:1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-11" class="q-text" />
                                    </span>
                                </span>
                            </li>

                            <li>
                                the
                                <span class="q-number">4</span>
                                <span style="flex:1;">
                                    <span class="q-question">
                                        <input type="text" name="5k29sSZyLQgQjLWX-12" class="q-text" />
                                    </span>
                                </span>
                                of plastic used in the lab did not always reflect those in the ocean
                            </li>

                            <li>
                                there was insufficient information
                                <ul>
                                    <li>on numbers of animals which could be affected</li>
                                    <li>the
                                        impact of a
                                        reduction in numbers on the
                                        <span class="q-number">5</span>
                                        <span style="flex:1;">
                                            <span class="q-question">
                                                <input type="text" name="5k29sSZyLQgQjLWX-13" class="q-text" />
                                            </span>
                                        </span>
                                        of that species
                                    </li>
                                    <li> the impact on the ecosystem
                                    </li>
                            </li>
                        </ul>
                        </li>
                        </ul>
                        <p>
                            Rochman says more information is needed on the possible impact of future
                            <span class="q-number">6</span>
                            <span style="flex:1;">
                                <span class="q-question">
                                    <input type="text" name="5k29sSZyLQgQjLWX-14" class="q-text" />
                                </span>
                            </span>
                            (e.g. involving oil)
                        </p>
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
