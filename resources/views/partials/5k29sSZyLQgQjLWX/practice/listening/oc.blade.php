@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-5</p>
                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                    <audio preload="auto" src="{{ $tab['audioUri'] }}">
                    </audio>

                    <div class="controls-container">
                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                        <div class="seek-container">
                            <input type="range" min="0" max="100" value="0" class="seekBar">
                            <div class="timeText"><span class="current">0:00</span>
                                <span class="duration">0:00</span>
                            </div>
                        </div>
                    </div>

                    <div class="start-buttons">
                        <button class="start-btn" data-start="61" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p><b>Questions 1–5</b></p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    What does Trevor find interesting about the purpose of children’s literature?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-1" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">the fact that authors may not realise what values they’re
                            teaching</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-1" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">the fact that literature can be entertaining and educational at the same
                            time</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-1" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">the fact that adults expect children to imitate characters in
                            literature</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    Trevor says the module about the purpose of children’s literature made him
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-2" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">analyse some of the stories that his niece reads.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-2" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">wonder how far popularity reflects good quality.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-2" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">decide to start writing some children’s stories.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    Stephanie is interested in the Pictures module because
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-3" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">she intends to become an illustrator.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-3" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">she can remember beautiful illustrations from her childhood.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-3" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">she believes illustrations are more important than words.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    Trevor and Stephanie agree that comics
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-4" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">are inferior to books.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-4" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">have the potential for being useful.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-4" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">discourage children from using their imagination.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 5 -->
            <fieldset class="q-item" data-q="5">
                <legend class="q-text">
                    <span class="q-number">5</span>
                    With regard to books aimed at only boys or only girls, Trevor was surprised
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">how long the distinction had gone unquestioned.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">how few books were aimed at both girls and boys.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="5k29sSZyLQgQjLWX-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">how many children enjoyed books intended for the opposite sex.</span>
                    </label>
                </div>
            </fieldset>

            <div style="text-align: center;">
                <button type="button" class="btn btn-primary try-again" id="again-{{ $tab['id'] }}"
                    style="display: none">
                    Try Again
                </button>
                <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
