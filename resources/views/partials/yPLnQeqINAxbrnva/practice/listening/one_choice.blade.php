@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-4</p>
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
                        <button class="start-btn" data-start="49" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-4</p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    The museum building was originally
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-1" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">a factory.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-1" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">a private home.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-1" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">a hall of residence.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    The university uses part of the museum building as
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-2" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">teaching rooms.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-2" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">a research library.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-2" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">administration offices.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    What does the guide say about the entrance fee?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-3" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">Visitors decide whether or not they wish to pay.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-3" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">Only children and students receive a discount.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-3" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">The museum charges extra for special exhibitions.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    What are visitors advised to leave in the cloakroom?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-4" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">cameras</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-4" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">coats</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-4" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">bags</span>
                    </label>
                </div>
            </fieldset>


            <div style="text-align: center;">
                <button type="button" class="btn btn-primary try-again" id="again-{{$tab['id']}}" style="display: none">
                    Try Again
                </button>
                <button type="button" class="btn btn-primary" id="submit-{{$tab['id']}}">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>