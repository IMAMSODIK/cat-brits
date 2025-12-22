@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">Athletes and stress</h3>
            <div class="passage-body">
                <h3>B</h3>
                <p>
                    For athletes, some level of performance stress is almost unavoidable. But there are many different
                    factors that dictate just how people’s minds and bodies respond to stressful events. Typically,
                    stress is the result of an exchange between two factors: demands and resources. An athlete may feel
                    stressed about an event if they feel the demands on them are greater than they can handle. These
                    demands include the high level of physical and mental effort required to succeed, and also the
                    athlete’s concerns about the difficulty of the event, their chance of succeeding, and any potential
                    dangers such as injury. Resources, on the other hand, are a person’s ability to cope with these
                    demands. These include factors such as the competitor’s degree of confidence, how much they believe
                    they can control the situation’s outcome, and whether they’re looking forward to the event or not.
                </p>

                <h3>C</h3>
                <p>
                    Each new demand or change in circumstances affects whether a person responds positively or
                    negatively to stress. Typically, the more resources a person feels they have in handling the
                    situation, the more positive their stress response. This positive stress response is called a
                    challenge state. But should the person feel there are too many demands placed on them, the more
                    likely they are to experience a negative stress response -known as a threat state. Research shows
                    that the challenge states lead to good performance, while threat states lead to poorer performance.
                    So, in Emma Raducanu’s case, a much larger audience, higher expectations and facing a more skilful
                    opponent, may all have led her to feel there were greater demands being placed on her at Wimbledon
                    -but she didn’t have the resources to tackle them. This led to her experiencing a threat response.
                </p>

                <h3>D</h3>
                <p>
                    Our challenge and threat responses essentially influence how our body responds to stressful
                    situations, as both affect the production of adrenaline and cortisol-also known as ‘stress
                    hormones’. During a challenge state, adrenaline increases the amount of blood pumped from the heart
                    and expands the blood vessels, which allows more energy to be delivered to the muscles and brain.
                    This increase of blood and decrease of pressure in the blood vessels has been consistently related
                    to superior sport performance in everything from cricket batting, to golf putting and football
                    penalty taking. But during a threat state, cortisol inhibits the positive effect of adrenaline,
                    resulting in tighter blood vessels, higher blood pressure, slower psychological responses, and a
                    faster heart rate. In short, a threat state makes people more anxious -they make worse decisions and
                    perform more poorly. In tennis players, cortisol has been associated with more unsuccessful serves
                    and greater anxiety.
                </p>

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

                <h3>F</h3>
                <p>
                    But there are many ways athletes can ensure they respond positively under pressure. Positive stress
                    responses can be promoted through the language that they and others – such as coaches or parents –
                    use. Psychologists can also help athletes change how they see their physiological responses – such
                    as helping them see a higher heart rate as excitement, rather than nerves. Developing psychological
                    skills, such as visualisation, can also help decrease physiological responses to threat.
                    Visualisation may involve the athlete recreating a mental picture of a time when they performed
                    well, or picturing themselves doing well in the future. This can help create a feeling of control
                    over the stressful event. Recreating competitive pressure during training can also help athletes
                    learn how to deal with stress. An example of this might be scoring athletes against their peers to
                    create a sense of competition. This would increase the demands which players experience compared to
                    a normal training session, while still allowing them to practise coping with stress.
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
                    <h3>Performance stress in athletes</h3>

                    <ul>
                        <li>
                            Performance stress involves many demands on the athlete, for example, coping with the
                            possible risk of
                            <span class="q-number">1</span>
                            <span style="flex: 1;">
                                <span class="q-question">
                                    <input type="text" name="0XIGAcSMlticROES-1" class="q-text" placeholder="">
                                </span>
                            </span>
                        </li>
                        <li>
                            Cortisol can cause tennis players to produce fewer good
                            <span class="q-number">2</span>
                            <span style="flex: 1;">
                                <span class="q-question">
                                    <input type="text" name="0XIGAcSMlticROES-2" class="q-text" placeholder="">
                                </span>
                            </span>
                        </li>
                        <li>
                            Psychologists can help athletes to view their physiological responses as the effect of a
                            positive feeling such as
                            <span class="q-number">3</span>
                            <span style="flex: 1;">
                                <span class="q-question">
                                    <input type="text" name="0XIGAcSMlticROES-3" class="q-text" placeholder="">
                                </span>
                            </span>
                        </li>
                        <li>
                            <span class="q-number">4</span>
                            <span style="flex: 1;">
                                <span class="q-question">
                                    <input type="text" name="0XIGAcSMlticROES-4" class="q-text" placeholder="">
                                </span>
                            </span>
                            is an example of a psychological technique which can reduce an athlete’s stress responses.
                        </li>
                    </ul>
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