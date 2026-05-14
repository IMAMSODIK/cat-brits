@props(['tab'])
<div class="x-panel-inner">Content: Sentence Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>Why companies should welcome disorder</h3>
                <h3>A</h3>
                <p>Organisation is big business. Whether it is of our lives – all those inboxes and calendars – or how
                    companies are structured, a multi-billion dollar industry helps to meet this need.</p>
                <p>We have more strategies for time management, project management and self-organisation than at any
                    other time in human history. We are told that we ought to organize our company, our home life, our
                    week, our day and even our sleep, all as a means to becoming more productive. Every week, countless
                    seminars and workshops take place around the world to tell a paying public that they ought to
                    structure their lives in order to achieve this.</p>
                <p>This rhetoric has also crept into the thinking of business leaders and entrepreneurs, much to the
                    delight of self-proclaimed perfectionists with the need to get everything right. The number of
                    business schools and graduates has massively increased over the past 50 years, essentially teaching
                    people how to organise well.</p>
                <h3>B</h3>
                <p>Ironically, however, the number of business that fail has also steadily increased. Work-related
                    stress has increased. A large proportion of workers from all demographics claim to be dissatisfied
                    with the way their work is structured and the way they are managed.</p>
                <p>This begs the question: what has gone wrong? Why is it that on paper the drive for organisation seems
                    a sure shot for increasing productivity, but in reality falls well short of what is expected?</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-3</h3>
                    <p class="lead">Complete the sentences below.</p>
                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                    <p><i>Write your answers in boxes <b>35-37</b> on your answer sheet</i></p>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="1">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">1</span>
                        <span style="flex: 1;">
                            Numerous training sessions are aimed at people who feel they are not
                            <span class="q-question">
                                <input type="text" name="nHmZBcocwalVytdH-1" class="q-text" placeholder=""> enough.
                            </span>
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="2">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">2</span>
                        <span style="flex: 1;">
                            Being organised appeals to people who regard themselves as
                            <span class="q-question">
                                <input type="text" name="nHmZBcocwalVytdH-2" class="q-text" placeholder="">.
                            </span>
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item questions-item" data-q="3">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">3</span>
                        <span style="flex: 1;">
                            Many people feel
                            <span class="q-question">
                                <input type="text" name="nHmZBcocwalVytdH-3" class="q-text" placeholder=""> with
                                aspects of their work.
                            </span>
                        </span>
                    </legend>
                </fieldset>

                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display:none">
                        Try Again
                    </button>
                </div>
            </form>
        </aside>
    </div>
</div>
