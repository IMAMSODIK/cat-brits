@props(['tab'])

<div class="x-panel-inner">Content: Yes/No/Not Given</div>

<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">

        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">

                <p>
                    The notions of insight, creativity and genius are often invoked, but they remain vague and of
                    doubtful scientific utility, especially when one considers the diverse and enduring contributions of
                    individuals such as Plato, Leonardo da Vinci, Shakespeare, Beethoven, Galileo, Newton, Kepler,
                    Curie, Pasteur and Edison. These notions merely label rather than explain the evolution of human
                    innovations. We need another approach, and there is a promising candidate.
                </p>

                <p>
                    The Law of Effect was advanced by psychologist Edward Thorndike in 1898, some 40 years after Charles
                    Darwin published his groundbreaking work on biological evolution, On the Origin of Species. This
                    simple law holds that organisms tend to repeat successful behaviors and to refrain from performing
                    unsuccessful ones. Just like Darwin’s Law of Natural Selection, the Law of Effect involves an
                    entirely mechanical process of variation and selection, without any end objective in sight.
                </p>

                <p>
                    Of course, the origin of human innovation demands much further study. In particular, the provenance
                    of the raw material on which the Law of Effect operates is not as clearly known as that of the
                    genetic mutations on which the Law of Natural Selection operates. The generation of novel ideas and
                    behaviors may not be entirely random, but constrained by prior successes and failures – of the
                    current individual (such as Bohr) or of predecessors (such as Nicholson).
                </p>

                <p>
                    The time seems right for abandoning the naive notions of intelligent design and genius, and for
                    scientifically exploring the true origins of creative behavior.
                </p>

            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">

                <fieldset class="q-item">
                    <h3>Questions 1-5</h3>
                    <p class="lead">
                        Do the following statements agree with the claims of the writer in the Reading Passage?
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
                        Acknowledging people such as Plato or da Vinci as geniuses will help us understand the process
                        by which great minds create new ideas.
                    </legend>
                    <div class="q-options" role="radiogroup">
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-1" value="YES">
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-1" value="NO">
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-1" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        The Law of Effect was discovered at a time when psychologists were seeking a scientific reason
                        why creativity occurs.
                    </legend>
                    <div class="q-options" role="radiogroup">
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-2" value="YES">
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-2" value="NO">
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-2" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        The Law of Effect states that no planning is involved in the behaviour of organisms.
                    </legend>
                    <div class="q-options" role="radiogroup">
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-3" value="YES">
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-3" value="NO">
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-3" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        The Law of Effect sets out clear explanations about the sources of new ideas and behaviours.
                    </legend>
                    <div class="q-options" role="radiogroup">
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-4" value="YES">
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-4" value="NO">
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-4" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Many scientists are now turning away from the notion of intelligent design and genius.
                    </legend>
                    <div class="q-options" role="radiogroup">
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-5" value="YES">
                            <span class="opt-code">A</span>
                            <span class="opt-label">YES</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-5" value="NO">
                            <span class="opt-code">B</span>
                            <span class="opt-label">NO</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="DPCLyNHpDTqSciXd-5" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">Submit</button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display:none">
                        Try Again
                    </button>
                </div>

            </form>
        </aside>
    </div>
</div>
