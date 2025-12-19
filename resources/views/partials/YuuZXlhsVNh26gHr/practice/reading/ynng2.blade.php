@props(['tab'])
<div class="x-panel-inner">Content: Yes/No/Not Given</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <p><b>The power of play</b></p>
                <p>Virtually every child, the world over, plays. The drive to play is so intense that children will do
                    so in any circumstances, for instance when they have no real toys, or when parents do not actively
                    encourage the behavior. In the eyes of a young child, running, pretending, and building are fun.
                    Researchers and educators know that these playful activities benefit the development of the whole
                    child across social, cognitive, physical, and emotional domains. Indeed, play is such an
                    instrumental component to healthy child development that the United Nation High Commission on Human
                    Rights (1989) recognized play as a fundamental right of every child.</p>

                <p>Yet, while experts continue to expound a powerful argument for the importance of play in children’s
                    lives, the actual time children spend playing continues to decrease. Today, children play eight
                    hours less each week than their counterparts did two decades ago (Elkind 2008). Under pressure of
                    rising academic standards, play is being replaced by test preparation in kindergartens and grade
                    schools, and parents who aim to give their preschoolers a leg up are led to believe that flashcards
                    and educational ‘toys’ are the path to success. Our society has created a false dichotomy between
                    play and learning.</p>

                <p>Through play, children learn to regulate their behavior, lay the foundations for later learning in
                    science and mathematics, figure out the complex negotiations of social relationships, build a
                    repertoire of creative problem-solving skills, and so much more. There is also an important role for
                    adults in guiding children through playful learning opportunities.</p>

                <p>Full consensus on a formal definition of play continues to elude the researchers and theorists who
                    study it. Definitions range from discrete descriptions of various types of play such as physical,
                    construction, language, or symbolic play (Miler & Almon 2009), to lists of broad criteria, based on
                    observations and attitudes, that are meant to capture the essence of all play behaviors (e.g. Rubin
                    et al. 1983).</p>

                <p>A majority of the contemporary definitions of play focus on several key criteria. The founder of the
                    National Institute for Play, Stuart Brown, has described play as ‘anything that spontaneously is
                    done for its own sake’. More specifically, he says it ‘appears purposeless, produces pleasure and
                    joy, [and] leads one to the next stage of mastery’ (as quoted in Tippett 2008). Similarly, Miller
                    and Almon (2009) say that play includes ‘activities that are freely chosen and directed by children
                    and arise from intrinsic motivation’. Often, play is defined along a continuum as more or less
                    playful using the following set of behavioral and dispositional criteria (e.g. Rubin et al. 1983).
                </p>

                <p>Play is pleasurable: Children must enjoy the activity or it is not play. It is intrinsically
                    motivated: Children engage in play simply for the satisfaction the behavior itself brings. It has no
                    extrinsically motivated function or goal. Play is process oriented: When children play, the means
                    are more important than the ends. It is freely chosen, spontaneous and voluntary. If a child is
                    pressured, they will likely not think of the activity as play. Play is actively engaged: Players
                    must be physically and/or mentally involved in the activity. Play is non-literal. It involves
                    make-believe.</p>

                <p>According to this view, children’s playful behaviors can range in degree from 0% to 100% playful.
                    Rubin and colleagues did not assign greater weight to any one dimension in determining playfulness;
                    however, other researchers have suggested that process orientation and a lack of obvious functional
                    purpose may be the most important aspects of play (e.g. Pellegrini 2009).</p>

                <p>From the perspective of a continuum, play can thus blend with other motives and attitudes that are
                    less playful, such as work. Unlike play, work is typically not viewed as enjoyable and it is
                    extrinsically motivated (i.e. it is goal oriented). Researcher Joan Goodman (1994) suggested that
                    hybrid forms of work and play are not a detriment to learning; rather, they can provide optimal
                    contexts for learning. For example, a child may be engaged in a difficult, goal-directed activity
                    set up by their teacher, but they may still be actively engaged and intrinsically motivated. At this
                    mid-point between play and work, the child’s motivation, coupled with guidance from an adult, can
                    create robust opportunities for playful learning.</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-5</h3>
                    <p class="lead">Do the following statements agree with the claims of the writer
                        in the Reading Passage?
                    </p>
                    <p><i>In boxes on your answer sheet, write</i></p>
                    <ul class="legend">
                        <li><strong>YES</strong> if the statement agrees with the claims of the writer</li>
                        <li><strong>NO</strong> if the statement contradicts the claims of the writer</li>
                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
                            about this</li>
                    </ul>
                </fieldset>

                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        Children need toys in order to play.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-4" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-4" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-4" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        It is a mistake to treat play and learning as separate types of activities.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-5" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-5" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-5" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        Play helps children to develop their artistic talents.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-6" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-6" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-6" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        Researchers have agreed on a definition of play.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-7" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-7" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-7" value="NOT GIVEN" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Work and play differ in terms of whether or not they have a target.
                    </legend>
                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-8" value="YES" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-8" value="NO" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="YuuZXlhsVNh26gHr-8" value="NOT GIVEN" />
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
                        style="display: none">
                        Try Again
                    </button>
                </div>
            </form>
        </aside>
    </div>
</div>
