@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>G</h3>
                <p>
                    Guided play takes two forms. At a very basic level, adults can enrich the child’s environment by
                    providing objects or experiences that promote aspects of a curriculum. In the more direct form of
                    guided play, parents or other adults can support children’s play by joining in the fun as a
                    co-player, raising thoughtful questions, commenting on children’s discoveries, or encouraging
                    further exploration or new facets to the child’s activity. Although playful learning can be somewhat
                    structured, it must also be child-centered (Nicolopolou et al. 2006). Play should stem from the
                    child’s own desire.
                </p>
                <p>
                    Both free and guided play are essential elements in a child-centered approach to playful learning.
                    Intrinsically motivated free play provides the child with true autonomy, while guided play is an
                    avenue through which parents and educators can provide more targeted learning experiences. In either
                    case, play should be actively engaged, it should be predominantly child-directed, and it must be
                    fun.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1–4</h3>
                    <p class="lead">Complete the summary below.</p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                    <h3>Guided play</h3>

                    <p>
                    <div>
                        In the simplest form of guided play, an adult contributes to the environment in which the child
                        is playing. Alternatively, an adult can play with a child and develop the play, for instance by
                        <span class="q-number-box">1</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-5" class="q-text">
                            </span>
                        </span>
                        the child to investigate different aspects of their game. Adults can help children to learn
                        through play, and may make the activity rather structured, but it should still be based on the
                        child’s
                        <span class="q-number-box">2</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-6" class="q-text">
                            </span>
                        </span>to play.
                    </div>
                    <div>
                        Play without the intervention of adults gives children real
                        <span class="q-number-box">3</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-7" class="q-text">
                            </span>
                        </span>.
                        with adults, play can be
                        <span class="q-number-box">4</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-8" class="q-text">
                            </span>
                        </span>at particular goals. However, all forms of play should be an opportunity for children to
                        have fun.
                    </div>
                    </p>
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
