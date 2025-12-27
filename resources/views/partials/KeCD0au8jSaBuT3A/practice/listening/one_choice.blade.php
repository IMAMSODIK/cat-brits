@props(['tab'])

<div class="x-panel-inner">Content: Becoming a volunteer for ACE</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-3</p>
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
                        <button class="start-btn" data-start="57" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-3</p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    Why does the speaker apologise about the seats?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-1" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">They are too small.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-1" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">There are not enough of them.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-1" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">Some of them are very close together.</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    What does the speaker say about the age of volunteers?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-2" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">The age of volunteers is less important than other factors.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-2" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">Young volunteers are less reliable than older ones.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-2" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">Most volunteers are about 60 years old.</span>
                    </label>
                </div>
            </fieldset>

            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    What does the speaker say about training?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-3" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">It is continuous.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-3" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">It is conducted by a manager.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="KeCD0au8jSaBuT3A-3" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">It takes place online.</span>
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
