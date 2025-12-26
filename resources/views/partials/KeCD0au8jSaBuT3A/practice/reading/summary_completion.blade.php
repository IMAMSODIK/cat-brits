@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>C</h3>
                <p>
                    Even as our ability to monitor space objects increases, so too does the total number of items in
                    orbit. That means companies, governments and other players in space are collaborating in new ways to
                    avoid a shared threat. International groups such as the Inter-Agency Space Debris Coordination
                    Committee have developed guidelines on space sustainability. Those include inactivating satellites
                    at the end of their useful life by venting pressurised materials or leftover fuel that might lead to
                    explosions. The intergovernmental groups also advise lowering satellites deep enough into the
                    atmosphere that they will burn up or disintegrate within 25 years. But so far, only about half of
                    all
                    missions have abided by this 25-year goal, says Holger Krag, head of the European Space Agency’s
                    space-debris office in Darmstadt, Germany. Operators of the planned large constellations of
                    satellites
                    say they will be responsible stewards in their enterprises in space, but Krag worries that problems
                    could increase, despite their best intentions. ‘What happens to those that fail or go bankrupt?’ he
                    asks. They are probably not going to spend money to remove their satellites from space.’
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-4</h3>
                    <p class="lead">Complete the summary below.</p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                    <h3>The Inter-Agency Space Debris Coordination Committee</h3>

                    <p>
                    <div>
                        The committee gives advice on how the
                        <span class="q-number-box">1</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-1" class="q-text" placeholder="">
                            </span>
                        </span>
                        of space can be achieved.
                    </div>
                    </p>

                    <p>
                    <div>
                        The committee advises that when satellites are no longer active, any unused
                        <span class="q-number-box">2</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-2" class="q-text" placeholder="">
                            </span>
                        </span>
                        or pressurised material that could cause
                        <span class="q-number-box">3</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-3" class="q-text" placeholder="">
                            </span>
                        </span>
                        should be removed.
                    </div>
                    </p>

                    <p>
                    <div>
                        Although operators of large satellite constellations accept that they have obligations as
                        stewards of space, Holger Krag points out that the operators that become
                        <span class="q-number-box">4</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="KeCD0au8jSaBuT3A-4" class="q-text" placeholder="">
                            </span>
                        </span>
                        are unlikely to prioritise removing their satellites from space.
                    </div>
                    </p>
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
