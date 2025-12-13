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
                        <button class="start-btn" data-start="61" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-5</p>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    Before Queen Elizabeth I visited the castle in 1576,
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-1" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">repairs were carried out to the guest rooms.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-1" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">a new building was constructed for her.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-1" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">a fire damaged part of the main hall.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    In 1982, the castle was sold to
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-2" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">the government.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-2" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">the Fenys family.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-2" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">an entertainment company.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    In some of the rooms, visitors can
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-3" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">speak to experts on the history of the castle.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-3" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">interact with actors dressed as famous characters.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-3" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">see models of historical figures moving and talking.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    In the castle park, visitors can
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-4" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">see an 800-year-old tree.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-4" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">go to an art exhibition.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-4" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">visit a small zoo.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 5 -->
            <fieldset class="q-item" data-q="5">
                <legend class="q-text">
                    <span class="q-number">5</span>
                    At the end of the visit, the group will have
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">afternoon tea in the conservatory.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">the chance to meet the castle’s owners.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="nHmZBcocwalVytdH-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">a photograph together on the Great Staircase.</span>
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
