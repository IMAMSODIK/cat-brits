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
                        <button class="start-btn" data-start="62" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1–5</p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    During the visit to Malatte, in France, members especially enjoyed
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-1" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">going to a theme park.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-1" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">experiencing a river trip.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-1" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">visiting a cheese factory.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    What will happen in Stanthorpe to mark the 25th anniversary of the Twinning Association?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-2" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">A tree will be planted.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-2" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">A garden seat will be bought.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-2" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">A footbridge will be built.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    Which event raised most funds this year?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-3" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">the film show</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-3" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">the pancake evening</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-3" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">the cookery demonstration</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    For the first evening with the French visitors host families are advised to
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-4" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">take them for a walk round the town.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-4" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">go to a local restaurant.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-4" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">have a meal at home.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 5 -->
            <fieldset class="q-item" data-q="5">
                <legend class="q-text">
                    <span class="q-number">5</span>
                    On Saturday evening there will be the chance to
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">listen to a concert.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">watch a match.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="rbsuXiTcqh8ewr9Q-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">take part in a competition.</span>
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