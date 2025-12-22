@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">The pirates of the ancient Mediterranean</h3>
            <div class="passage-body">
                <p>
                    E. The ancient Greek world’s experience of piracy was different from that of Egyptian rulers. While
                    Egypt’s power was land-based, the ancient Greeks relied on the Mediterranean in almost all aspects
                    of life, from trade to warfare. Interestingly, in his works the Iliad and the Odyssey, the ancient
                    Greek writer Homer not only condones, but praises the lifestyle and actions of pirates.<span
                        class="q-number-box">1</span><span class="q-number-box">2</span> The
                    opinion remained unchanged in the following centuries. The ancient Greek historian Thucydides, for
                    instance, glorified pirates’ daring attacks on ships or even cities. For Greeks, piracy was a part
                    of everyday life. Even high-ranking members of the state were not beyond engaging in such
                    activities.<span class="q-number-box">1</span><span class="q-number-box">2</span> According to the
                    Greek orator Demosthenes, in 355 BCE, Athenian ambassadors made a
                    detour from their official travel to capture a ship sailing from Egypt, taking the wealth found
                    onboard for themselves! The Greeks’ liberal approach towards piracy does not mean they always
                    tolerated it, but attempts to curtail piracy were hampered by the large number of pirates operating
                    in the Mediterranean.
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
                        <b>TWO</b> Which TWO of the following statements does the writer make about piracy and ancient
                        Greece?
                    </p>
                </fieldset>
                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-2[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">
                                The state estimated that very few people were involved in piracy.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-2[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">Attitudes towards piracy changed shortly after the Iliad and the
                                Odyssey were written.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-2[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">
                                Important officials were known to occasionally take part in piracy.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-2[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">Every citizen regarded pirate attacks on cities as
                                unacceptable.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="rbsuXiTcqh8ewr9Q-2[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">A favourable view of piracy is evident in certain ancient Greek
                                texts.</span>
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