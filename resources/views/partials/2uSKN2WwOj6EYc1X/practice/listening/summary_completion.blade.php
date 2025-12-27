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
                <h3>Questions 1–6</h3>
                </p>
                <p>Complete the summary below</p>
                <p>Write <b>NO MORE THAN TWO WORDS</b> for each answer..</p>
            </fieldset>

            <p>
            <div>
                Hearing aids
                <span class="q-number-box">1</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-1" class="q-text" placeholder="">
                    </span>
                </span>
                normal sounds, so they are good for mild hearing loss but
                not for severe loss. Cochlear implants help some people a lot, but do not work so well for
                everyone. The brain gets different
                <span class="q-number-box">2</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-2" class="q-text" placeholder="">
                    </span>
                </span>
                from an implant, so users must relearn
                how to hear. Cochlear implants are not a cure. Users need ongoing training in
                <span class="q-number-box">3</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-3" class="q-text" placeholder="">
                    </span>
                </span>
                lip-reading and sign language. The surgery can damage nerves. It may
                also destroy any
                <span class="q-number-box">4</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-4" class="q-text" placeholder="">
                    </span>
                </span>
                ; in such cases, those users cannot go back to using a
                hearing aid. The most important factor for selecting users is the
                <span class="q-number-box">5</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-5" class="q-text" placeholder="">
                    </span>
                </span>
                of their
                deafness, and also age and previous speaking ability. Finally, the condition of the nerve
                cells in the cochlea is a factor, because
                <span class="q-number-box">6</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-6" class="q-text" placeholder="">
                    </span>
                </span>
                can damage these cells.
            </div>
            </p>

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
