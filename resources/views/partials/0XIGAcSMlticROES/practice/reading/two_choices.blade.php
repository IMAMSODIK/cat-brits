@props(['tab'])
<div class="x-panel-inner">Content: Two Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">Athletes and stress</h3>
            <div class="passage-body">
                <h3>A</h3>
                <p>
                    It isn’t easy being a professional athlete. Not only are the physical demands greater than most
                    people could handle, athletes also face intense psychological pressure during competition. This
                    is something that British tennis player Emma Raducanu wrote about on social media following her
                    withdrawal from the 2021 Wimbledon tournament. Though the young player had been doing well in
                    the tournament, she began having difficulty regulating her breathing and heart rate during a
                    match, which she later attributed to ’the accumulation of the excitement and the buzz’.
                </p>

                <h3>B</h3>
                <p>
                    For athletes, some level of performance stress is almost unavoidable. But there are many
                    different factors that dictate just how people’s minds and bodies respond to stressful events.
                    Typically, stress is the result of an exchange between two factors: demands and resources. An
                    athlete may feel stressed about an event if they feel the demands on them are greater than they
                    can handle. These demands include the high level of physical and mental effort required to
                    succeed, and also the athlete’s concerns about the difficulty of the event, their chance of
                    succeeding, and any potential dangers such as injury. Resources, on the other hand, are a
                    person’s ability to cope with these demands. These include factors such as the competitor’s
                    degree of confidence, how much they believe they can control the situation’s outcome, and
                    whether they’re looking forward to the event or not.
                </p>

                <h3>C</h3>
                <p>
                    Each new demand or change in circumstances affects whether a person responds positively or
                    negatively to stress. Typically, the more resources a person feels they have in handling the
                    situation, the more positive their stress response. This positive stress response is called a
                    challenge state. But should the person feel there are too many demands placed on them, the more
                    likely they are to experience a negative stress response -known as a threat state. Research
                    shows that the challenge states lead to good performance, while threat states lead to poorer
                    performance. So, in Emma Raducanu’s case, a much larger audience, higher expectations and facing
                    a more skilful opponent, may all have led her to feel there were greater demands being placed on
                    her at Wimbledon -but she didn’t have the resources to tackle them. This led to her experiencing
                    a threat response.
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
                        <b>TWO</b> facts about Emma Raducanu’s withdrawal from the Wimbledon tournament are mentioned in
                        the text?
                    </p>
                </fieldset>

                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-1[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">the stage at which she dropped out of the tournament</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-1[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">symptoms of her performance stress at the tournament</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-1[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">measures which she had taken to manage her stress levels</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-1[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">aspects of the Wimbledon tournament which increased her stress
                                levels</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="0XIGAcSMlticROES-1[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">reactions to her social media posts about her experience at
                                Wimbledon</span>
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