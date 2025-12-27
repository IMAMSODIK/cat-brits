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
                        <button class="start-btn" data-start="34" type="button">Start from
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
                    Which TWO things do the students agree they need to include in their review of Romeo and Juliet?
                </legend>
                <div class="q-options" role="group" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="checkbox" name="DPCLyNHpDTqSciXd-1[]" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">analysis of the text</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="DPCLyNHpDTqSciXd-1[]" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">a summary of the plot</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="DPCLyNHpDTqSciXd-1[]" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">a description of the theatre</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="DPCLyNHpDTqSciXd-1[]" value="D" />
                        <span class="opt-code">D</span>
                        <span class="opt-label">a personal reaction</span>
                    </label>
                    <label class="q-option">
                        <input type="checkbox" name="DPCLyNHpDTqSciXd-1[]" value="E" />
                        <span class="opt-code">E</span>
                        <span class="opt-label">a reference to particular scenes</span>
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
