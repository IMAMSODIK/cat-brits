@props(['tab'])

<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><b>Part 1: </b>Listen and answer questions 1-7</p>
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
                        <button class="start-btn" data-start="275" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p>
                <h3>Questions 1-7</h3>
                </p>
                <p>Label the map below.</p>
                <p>Write <b>NO MORE THAN THREE WORDS</b> for each answer.</p>
                <p><b>Daisy day care centre</b></p>
                <div class="d-flex">
                    <img src="{{ asset('own_assets/images/p01-1.png') }}" alt="Farley House Map"
                        style="max-width: 100%; height: auto;" />
                </div>

            </fieldset>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-item" data-q="1">
                        <span class="q-number-box">1</span>
                        <input type="text" name="2uSKN2WwOj6EYc1X-1" class="q-text" />
                    </span>
                </legend>
            </fieldset>


            <fieldset class="q-item" data-q="2">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-item" data-q="2">
                        <span class="q-number-box">2</span>
                        <input type="text" name="2uSKN2WwOj6EYc1X-2" class="q-text" />
                    </span>
                </legend>
            </fieldset>
            <fieldset class="q-item" data-q="3">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-item" data-q="3">
                        <span class="q-number-box">3</span>
                        <input type="text" name="2uSKN2WwOj6EYc1X-3" class="q-text" />
                    </span>
                </legend>
            </fieldset>
            <fieldset class="q-item" data-q="4">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-item" data-q="4">
                        <span class="q-number-box">4</span>
                        <input type="text" name="2uSKN2WwOj6EYc1X-4" class="q-text" />
                    </span>
                </legend>
            </fieldset>
            <fieldset class="q-item" data-q="5">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-item" data-q="5">
                        <span class="q-number-box">5</span>
                        <input type="text" name="2uSKN2WwOj6EYc1X-5" class="q-text" />
                    </span>
                </legend>
            </fieldset>
            <fieldset class="q-item" data-q="6">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-item" data-q="6">
                        <span class="q-number-box">6</span>
                        <input type="text" name="2uSKN2WwOj6EYc1X-6" class="q-text" />
                    </span>
                </legend>
            </fieldset>
            <fieldset class="q-item" data-q="7">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-item" data-q="7">
                        <span class="q-number-box">7</span>
                        <input type="text" name="2uSKN2WwOj6EYc1X-7" class="q-text" />
                    </span>
                </legend>
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
