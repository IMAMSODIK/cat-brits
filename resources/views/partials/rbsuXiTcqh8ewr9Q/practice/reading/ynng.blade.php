@props(['tab'])
<div class="x-panel-inner">Content: Yes/No/Not Given</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">The persistence and peril of misinformation</h3>
            <div class="passage-body">
                <p>This leads us to our third observation: a campaign to correct misinformation, even if rhetorically
                    compelling, requires resources and planning to accomplish necessary reach and frequency. For
                    corrective campaigns to be persuasive, audiences need to be able to comprehend them, which requires
                    either effort to frame messages in ways that are accessible or effort to educate and sensitize
                    audiences to the possibility of misinformation. That some audiences might be unaware of the
                    potential for misinformation also suggests the utility of media literacy efforts as early as
                    elementary school. Even with journalists and scholars pointing to the phenomenon of ‘fake news’,
                    people do not distinguish between demonstrably false stories and those based in fact when scanning
                    and processing written information.
                </p>
                <p>We live at a time when widespread misinformation is common. Yet at this time many people also are
                    passionately developing potential solutions and remedies. The journey forward undoubtedly will be a
                    long and arduous one. Future remedies will require not only continued theoretical consideration but
                    also the development and maintenance of consistent monitoring tools and a recognition among fellow
                    members of society that claims which find prominence in the media that are insufficiently based in
                    scientific consensus and social reality should be countered. Misinformation arises as a result of
                    human fallibility and human information needs. To overcome the worst effects of the phenomenon, we
                    will need coordinated efforts over time, rather than any singular one-time panacea we could hope to
                    offer.</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-4</h3>
                    <p class="lead">
                        Do the following statements agree with the claims of the writer?
                    </p>
                    <p><i>In boxes on your answer sheet, write</i></p>
                    <ul class="legend">
                        <li><strong>YES</strong> if the statement agrees with the claims of the writer</li>
                        <li><strong>NO</strong> if the statement contradicts the claims of the writer</li>
                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks about this</li>
                    </ul>
                </fieldset>

                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        Campaigns designed to correct misinformation will fail to achieve their purpose if people
                        are unable to understand them.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-1" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-1" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-1" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        Attempts to teach elementary school students about misinformation have been opposed.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-2" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-2" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-2" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        It may be possible to overcome the problem of misinformation in a relatively short period.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-3" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-3" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-3" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        The need to keep up with new information is hugely exaggerated in today’s world.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-4" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-4" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="rbsuXiTcqh8ewr9Q-4" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
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