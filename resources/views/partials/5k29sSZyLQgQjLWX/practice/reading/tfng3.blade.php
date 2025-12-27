@props(['tab'])
<div class="x-panel-inner">{{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">How Bad Is Ocean Garbage, Really?</h3>

            <div class="passage-body">
                <p>
                    Chelsea Rochman, an ecologist at the University of California, Davis, has been trying to answer a
                    dismal
                    question: Is everything terrible, or are things just very, very bad?
                </p>

                <p>
                    Rochman is a member of the National Center for Ecological Analysis and Synthesis’s marine-debris
                    working
                    group, a collection of scientists who study, among other things, the growing problem of marine
                    debris,
                    also known as ocean trash. Plenty of studies have sounded alarm bells about the state of marine
                    debris;
                    in a recent paper published in the journal <i>Ecology</i>, Rochman and her colleagues set out to
                    determine
                    how many of those perceived risks are real.
                </p>

                <p>
                    Often, Rochman says, scientists will end a paper by speculating about the broader impacts of what
                    they’ve
                    found. For example, a study could show that certain seabirds eat plastic bags, and go on to warn
                    that
                    whole bird populations are at risk of dying out. ‘But the truth was that nobody had yet tested those
                    perceived threats,’ Rochman says. ‘There wasn’t a lot of information.’
                </p>

                <p>
                    Rochman and her colleagues examined more than a hundred papers on the impacts of marine debris that
                    were
                    published through 2013. Within each paper, they asked what threats scientists had studied – 366
                    perceived
                    threats in all – and what they’d actually found.
                </p>

                <p>
                    In 83 percent of cases, the perceived dangers of ocean trash were proven true. In the remaining
                    cases,
                    the working group found the studies had weaknesses in design and content which affected the validity
                    of
                    their conclusions – they lacked a control group, for example, or used faulty statistics.
                </p>

                <p>
                    Strikingly, Rochman says, only one well-designed study failed to find the effect it was looking for,
                    an
                    investigation of mussels ingesting microscopic bits. The plastic moved from the mussels’ stomachs to
                    their bloodstreams, scientists found, and stayed there for weeks – but didn’t seem to stress out the
                    shellfish.
                </p>

                <p>
                    While mussels may be fine eating trash, though, the analysis also gave a clearer picture of the many
                    ways
                    that ocean debris is bothersome.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1–7</h3>
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
                        Rochman and her colleagues were the first people to research the problem of marine debris.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-11" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-11" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-11" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 2 -->
                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        The creatures most in danger from ocean trash are certain seabirds.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-12" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-12" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-12" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 3 -->
                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        The studies Rochman has reviewed have already proved that populations of some birds will soon
                        become extinct.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-13" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-13" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-13" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 4 -->
                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        Rochman analysed papers on the different kinds of danger caused by ocean trash.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-14" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-14" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-14" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 5 -->
                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Most of the research analysed by Rochman and her colleagues was badly designed.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-15" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-15" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-15" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 6 -->
                <fieldset class="q-item" data-q="6">
                    <legend class="q-text">
                        <span class="q-number">6</span>
                        One study examined by Rochman was expecting to find that mussels were harmed by eating plastic.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-16" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-16" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-16" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 7 -->
                <fieldset class="q-item" data-q="7">
                    <legend class="q-text">
                        <span class="q-number">7</span>
                        Some mussels choose to eat plastic in preference to their natural diet.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-17" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-17" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-17" value="NOT GIVEN">
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
