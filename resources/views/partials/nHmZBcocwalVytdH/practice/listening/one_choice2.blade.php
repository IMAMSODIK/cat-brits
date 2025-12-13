@props(['tab'])

<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-4</p>
                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                    <audio preload="auto" src="{{ $tab['audioUri'] }}"></audio>

                    <div class="controls-container">
                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                        <div class="seek-container">
                            <input type="range" min="0" max="100" value="0" class="seekBar">
                            <div class="timeText">
                                <span class="current">0:00</span>
                                <span class="duration">0:00</span>
                            </div>
                        </div>
                    </div>

                    <div class="start-buttons">
                        <button class="start-btn" data-start="63" type="button">
                            Start from here
                        </button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-4</p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                <p><b>Woolly mammoths on St Paul’s Island</b></p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    How will Rosie and Martin introduce their presentation?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-6" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">with a drawing of woolly mammoths in their natural habitat</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-6" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">with a timeline showing when woolly mammoths lived</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-6" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">with a video clip about woolly mammoths</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    What was surprising about the mammoth tooth found by Russell Graham?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-7" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">It was still embedded in the mammoth’s jawbone.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-7" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">It was from an unknown species of mammoth.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-7" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">It was not as old as mammoth remains from elsewhere.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    The students will use an animated diagram to demonstrate how the mammoths
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-8" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">became isolated on the island.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-8" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">spread from the island to other areas.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-8" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">coexisted with other animals on the island.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    According to Martin, what is unusual about the date of the mammoths’ extinction on the island?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-9" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">how exact it is</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-9" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">how early it is</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-9" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">how it was established</span>
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
