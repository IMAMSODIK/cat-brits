@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-2</p>
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
                        <button class="start-btn" data-start="120" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-2</p>
                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
            </fieldset>

            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    <span class="q-number">2</span>
                    Which TWO ways that volunteers can benefit from volunteering are mentioned?
                </legend>
                <div class="q-options" role="group" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="checkbox" name="YuuZXlhsVNh26gHr-3[]" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">learning how to be part of a team</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="YuuZXlhsVNh26gHr-3[]" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">having a sense of purpose</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="YuuZXlhsVNh26gHr-3[]" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">realising how lucky they are</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="YuuZXlhsVNh26gHr-3[]" value="D" />
                        <span class="opt-code">D</span>
                        <span class="opt-label">improved ability at time management</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="YuuZXlhsVNh26gHr-3[]" value="E" />
                        <span class="opt-code">E</span>
                        <span class="opt-label">boosting their employment prospects</span>
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
