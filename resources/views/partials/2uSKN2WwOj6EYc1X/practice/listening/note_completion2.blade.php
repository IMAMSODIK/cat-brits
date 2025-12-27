@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-3</p>

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
                        <button class="start-btn" data-start="74" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-3</h3>
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>NO MORE THAN ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>


            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">1</span>
                    <span style="flex: 1;">
                        The official ratio of adults to children who are two or older is one adult to
                        <span class="q-question">
                            <input type="text" name="2uSKN2WwOj6EYc1X-11" class="q-text" />
                        </span>
                        children.
                    </span>
                </legend>
            </fieldset>
            <fieldset class="q-item" data-q="2">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">2</span>
                    <span style="flex: 1;">
                        Parents who are often late may be asked to
                        <span class="q-question">
                            <input type="text" name="2uSKN2WwOj6EYc1X-12" class="q-text" />
                        </span>
                    </span>
                </legend>
            </fieldset>
            <fieldset class="q-item" data-q="3">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">3</span>
                    <span style="flex: 1;">
                        The quickest waiting time for a place in the Day Care is
                        <span class="q-question">
                            <input type="text" name="2uSKN2WwOj6EYc1X-13" class="q-text" />
                        </span>
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
