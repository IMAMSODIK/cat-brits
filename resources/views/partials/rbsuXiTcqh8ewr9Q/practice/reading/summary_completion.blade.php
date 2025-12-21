@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3 class="passage-title">The pirates of the ancient Mediterranean</h3>
                <p>
                    F. The rising power of ancient Rome required the Roman Republic to deal with piracy in the
                    Mediterranean. While piracy was a serious issue for the Republic, Rome profited greatly from its
                    existence. Pirate raids provided a steady source of slaves, essential for Rome’s agriculture and
                    mining industries. But this arrangement could work only while the pirates left Roman interests
                    alone. Pirate attacks on grain ships, which were essential to Roman citizens, led to angry voices in
                    the Senate, demanding punishment of the culprits. Rome, however, did nothing, further encouraging
                    piracy. By the 1st century BCE, emboldened pirates kidnapped prominent Roman dignitaries, asking for
                    a large ransom to be paid. Their most famous hostage was none other than Julius Caesar, captured in
                    75 BCE.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item" data-q="1">
                    <h3>Questions 1-3</h3>
                    <p class="lead">Complete the summary below.</p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                    <h3>Ancient Rome and piracy</h3>
                    <p>
                    <div>
                        Piracy was an issue ancient Rome had to deal with, but it also brought some benefits for
                        Rome. For example, pirates supplied slaves that were important for Rome’s industries.
                        However, attacks on vessels transporting
                        <span class="q-number-box">1</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="rbsuXiTcqh8ewr9Q-1" class="q-text" placeholder="">
                            </span>
                        </span>
                        resulted in calls for
                        <span class="q-number-box">2</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="rbsuXiTcqh8ewr9Q-2" class="q-text" placeholder="">
                            </span>
                        </span>
                        for the pirates responsible. Nevertheless, piracy continued, with some pirates demanding a
                        <span class="q-number-box">3</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="rbsuXiTcqh8ewr9Q-3" class="q-text" placeholder="">
                            </span>
                        </span>
                        for the return of the Roman officials they captured.
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