@props(['tab'])
<div class="x-panel-inner">Content: Two Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">Athletes and stress</h3>
            <div class="passage-body">
                <h3>E</h3>
                <p>
                    That said, anxiety is also a common experience for athletes when they’re under pressure. Anxiety can
                    increase heart rate and perspiration, cause heart palpitations, muscle tremors and shortness of
                    breath, as well as headaches, nausea, stomach pain, weakness and a desire to escape in more extreme
                    cases. Anxiety can also reduce concentration and self-control and cause overthinking. The intensity
                    with which a person experiences anxiety depends on the demands and resources they have. Anxiety may
                    also manifest itself in the form of excitement or nervousness depending on the stress response.
                    Negative stress responses can be damaging to both physical and mental health – and repeated episodes
                    of anxiety coupled with negative responses can increase risk of heart disease and depression.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1-2</b></p>
                    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
                    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
                    <p><span class="q-number-box">1</span><span class="q-number-box">2</span> Which
                        <b>TWO</b> facts about anxiety are mentioned in Paragraph E of the text?
                    </p>
                </fieldset>

                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-2[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">the factors which determine how severe it may be</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-2[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">how long it takes for its effects to become apparent</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-2[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">which of its symptoms is most frequently encountered</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-2[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">the types of athletes who are most likely to suffer from it</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-2[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">the harm that can result if athletes experience it too often</span>
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