@props(['tab'])

<div class="x-panel-inner">Content: Talk on jobs in fashion design</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-6</p>
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
                        <button class="start-btn" data-start="69" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-6</p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <h2><b>Talk on jobs in fashion design</b></h2>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    What problem did Chantal have at the start of the talk?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-4" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">Her view of the speaker was blocked.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-4" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">She was unable to find an empty seat.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-4" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">The students next to her were talking.</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    What were Hugo and Chantal surprised to hear about the job market?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">It has become more competitive than it used to be.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">There is more variety in it than they had realised.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">Some areas of it are more exciting than others.</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    Hugo and Chantal agree that the speaker’s message was
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-6" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">unfair to them at times.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-6" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">hard for them to follow.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-6" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">critical of the industry.</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    What do Hugo and Chantal criticise about their school careers advice?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-7" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">when they received the advice</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-7" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">how much advice was given</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-7" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">who gave the advice</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="q-item" data-q="5">
                <legend class="q-text">
                    <span class="q-number">5</span>
                    When discussing their future, Hugo and Chantal disagree on
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-8" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">which is the best career in fashion.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-8" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">when to choose a career in fashion.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-8" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">why they would like a career in fashion.</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="q-item" data-q="6">
                <legend class="q-text">
                    <span class="q-number">6</span>
                    How does Hugo feel about being an unpaid assistant?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-9" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">He is realistic about the practice.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-9" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">He feels the practice is dishonest.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-9" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">He thinks others want to change the practice.</span>
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
