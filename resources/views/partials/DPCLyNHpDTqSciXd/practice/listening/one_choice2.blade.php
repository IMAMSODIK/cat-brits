@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
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
                        <button class="start-btn" data-start="279" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    The students think the story of Romeo and Juliet is still relevant for young people today because
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">it illustrates how easily conflict can start.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">it deals with problems that families experience.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">it teaches them about relationships.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    The students found watching Romeo and Juliet in another language
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-6" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">frustrating.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-6" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">demanding.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-6" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">moving.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    Why do the students think Shakespeare’s plays have such international appeal?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-7" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">The stories are exciting.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-7" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">There are recognisable characters.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="DPCLyNHpDTqSciXd-7" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">They can be interpreted in many ways.</span>
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
