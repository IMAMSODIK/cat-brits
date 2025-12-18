@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-3</p>
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
                        <button class="start-btn" data-start="276" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-3</p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    Before starting an origami activity in class, the students think it is important for the teacher to
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">make models that demonstrate the different stages.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">check children understand the terminology involved.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">tell children not to worry if they find the activity difficult.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    The students agree that some teachers might be unwilling to use origami in class because
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-6" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">they may not think that crafts are important.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-6" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">they may not have the necessary skills.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-6" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">they may worry that it will take up too much time.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    Why do the students decide to use origami in their maths teaching practice?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-7" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">to correct a particular misunderstanding</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-7" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">to set a challenge</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="yPLnQeqINAxbrnva-7" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">to introduce a new concept</span>
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