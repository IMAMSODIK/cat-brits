@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
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
                        <button class="start-btn" data-start="193" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p><b>Questions 1–6</b></p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    Adam suggests that restaurants could reduce obesity if their menus
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-1" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">offered fewer options.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-1" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">had more low-calorie foods.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-1" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">were organised in a particular way.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    The students agree that food manufacturers deliberately
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-2" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">make calorie counts hard to understand.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-2" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">fail to provide accurate calorie counts.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-2" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">use ineffective methods to reduce calories.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    What does Rosie say about levels of exercise in England?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-3" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">The amount recommended is much too low.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-3" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">Most people overestimate how much they do.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-3" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">Women now exercise more than they used to.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    Adam refers to the location and width of stairs in a train station to illustrate
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-4" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">practical changes that can influence people’s behaviour.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-4" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">methods of helping people who have mobility problems.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-4" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">ways of preventing accidents by controlling crowd movement.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 5 -->
            <fieldset class="q-item" data-q="5">
                <legend class="q-text">
                    <span class="q-number">5</span>
                    What do the students agree about including reference to exercise in their presentation?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">They should probably leave it out.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">They need to do more research on it.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">They should discuss this with their tutor.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 6 -->
            <fieldset class="q-item" data-q="6">
                <legend class="q-text">
                    <span class="q-number">6</span>
                    What are the students going to do next for their presentation?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-6" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">prepare some slides for it</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-6" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">find out how long they have for it</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="NmeBcwURSR2ZPfdX-6" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">decide on its content and organisation</span>
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
