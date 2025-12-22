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
                        <button class="start-btn" data-start="321" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-2</h3>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 11 -->
            <fieldset class="q-item" data-q="11">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    Why did the project to make ‘new’ shoes out of old shoes fail?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-11" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">People believed the 'new' pairs of shoes were unhygienic.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-11" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">There were not enough good parts to use in the old shoes.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-11" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">The shoes in the ‘new’ pairs were not completely alike.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 12 -->
            <fieldset class="q-item" data-q="12">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    Bella and Don agree that they can present their topic
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-12" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">from a new angle.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-12" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">with relevant images.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-12" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">in a straightforward way.</span>
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