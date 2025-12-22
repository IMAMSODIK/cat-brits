@props(['tab'])

<div class="x-panel-inner">Content: One Choice</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">An inquiry into the existence of the gifted child</h3>

            <div class="passage-body">
                <p>
                    According to my colleague Prof Deborah Eyre, with whom I’ve collaborated on the book <i>Great Minds
                        and How to Crow Them</i>, the latest neuroscience and psychological research suggests most
                    individuals can reach levels of performance associated in school with the gifted and talented.
                    However, they must be taught the right attitudes and approaches to their learning and develop the
                    attributes of high performers—curiosity, persistence and hard work, for example an approach Eyre
                    calls ‘high performance learning’. Critically, they need the right support in developing those
                    approaches at home as well as at school.
                </p>

                <p>
                    Prof Anders Ericsson, an eminent education psychologist at Florida State University, US, is the
                    co-author of <i>Peak: Secrets from the New Science of Expertise</i>. After research going back to
                    1980 into diverse achievements, from music to memory to sport, he doesn’t think unique and innate
                    talents are at the heart of performance. Deliberate practice, that stretches you every step of the
                    way, and around 10,000 hours of it, is what produces the goods. It’s not a magic number—the highest
                    performers move on to doing a whole lot more, of course. Ericsson’s memory research is particularly
                    interesting because random students, trained in memory techniques for the study, went on to
                    outperform others thought to have innately superior memories—those who you might call gifted.
                </p>

                <p>
                    But it is perhaps the work of Benjamin Bloom, another distinguished American educationist working in
                    the 1980s, that gives the most pause for thought. Bloom’s team looked at a group of extraordinarily
                    high achieving people in disciplines as varied as ballet, swimming, piano, tennis, maths, sculpture
                    and neurology. He found a pattern of parents encouraging and supporting their children, often in
                    areas they enjoyed themselves. Bloom’s outstanding people had worked very hard and consistently at
                    something they had become hooked on when at a young age, and their parents all emerged as having
                    strong work ethics themselves.
                </p>

                <p>
                    Eyre says we know how high performers learn. From that she has developed a high performing learning
                    approach. She is working on this with a group of schools, both in Britain and abroad. Some spin-off
                    research, which looked in detail at 24 of the 3,000 children being studied who were succeeding
                    despite difficult circumstances, found something remarkable. Half were getting free school meals
                    because of poverty, more than half were living with a single parent, and four in five were living in
                    disadvantaged areas. Interviews uncovered strong evidence of an adult or adults in the child’s life
                    who valued and supported education, either in the immediate or extended family or in the child’s
                    wider community. Children talked about the need to work hard at school, to listen in class and keep
                    trying.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1-3</b></p>
                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.</p>
                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                </fieldset>

                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        What does Eyre believe is needed for children to equal ’gifted’ standards?
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-1" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">strict discipline from the teaching staff</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-1" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">assistance from their peers in the classroom</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-1" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">the development of a spirit of inquiry towards their studies</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-1" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">the determination to surpass everyone else’s achievements</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        What is the result of Ericsson’s research?
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-2" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">Very gifted students do not need to work on improving memory
                                skills.</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-2" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">Being born with a special gift is not the key factor in becoming
                                expert.</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-2" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">Including time for physical exercise is crucial in raising
                                performance.</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-2" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">10,000 hours of relevant and demanding work will create a
                                genius.</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        In the penultimate paragraph, it is stated the key to some deprived children's success is
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-3" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">a regular and nourishing diet at home.</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-3" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">the loving support of more than one parent.</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-3" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">a community which has well-funded facilities for learning.</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-3" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">the guidance of someone who recognises the benefits of
                                learning.</span>
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