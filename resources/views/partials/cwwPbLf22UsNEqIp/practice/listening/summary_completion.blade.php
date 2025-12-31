@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><b>Part 1: </b>Listen and answer questions 1-6</p>
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
                        <button class="start-btn" data-start="44" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p>
                <h3>Questions 1–3</h3>
                </p>
                <p>Complete the summary below</p>
                <p>Write <b>NO MORE THAN TWO WORDS</b> for each answer..</p>
            </fieldset>
            <div>
                If soil is healthy, it is a
                <span class="q-number-box">1</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="cwwPbLf22UsNEqIp-1" class="q-text" placeholder="">
                    </span>
                </span>
                teeming with life such as
                worms, fungi and bacteria. If plants are grown in poor soil, they will lack
                <span class="q-number-box">2</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="cwwPbLf22UsNEqIp-2" class="q-text" placeholder="">
                    </span>
                </span>
                and human health will suffer. Plants are nourished by
                organic matter,
                <span class="q-number-box">3</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="cwwPbLf22UsNEqIp-3" class="q-text" placeholder="">
                    </span>
                </span>
                and other essential elements which
                are broken down by insects and other organisms in a synergistic
                relationship.
                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary try-again" id="again-{{ $tab['id'] }}"
                        style="display: none">
                        Try Again
                    </button>
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
