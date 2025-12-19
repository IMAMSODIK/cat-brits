@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>

<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">

            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-6 the Reading Passage?</p>
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
                        <button class="start-btn" data-start="75" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1–10</p>
                <p>Complete the notes below.</p>
                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
            </fieldset>

            <fieldset class="q-item">
                <h3><b>The history of weather forecasting</b></h3>

                <p><b>Ancient cultures</b></p>
                <ul>
                    <li>
                        many cultures invented
                        <span class="q-number-box">1</span>
                        <input type="text" name="nHmZBcocwalVytdH-11" class="q-text">
                        and other ceremonies to make the weather gods friendly
                    </li>
                    <li>
                        people needed to observe and interpret the sky to ensure their
                        <span class="q-number-box">2</span>
                        <input type="text" name="nHmZBcocwalVytdH-12" class="q-text">
                    </li>
                    <li>
                        around 650 BC, Babylonians started forecasting using weather phenomena such as
                        <span class="q-number-box">3</span>
                        <input type="text" name="nHmZBcocwalVytdH-13" class="q-text">
                    </li>
                    <li>
                        by 300 BC, the Chinese had a calendar made up of a number of
                        <span class="q-number-box">4</span>
                        <input type="text" name="nHmZBcocwalVytdH-14" class="q-text">
                        connected with the weather
                    </li>
                </ul>

                <p><b>Ancient Greeks</b></p>
                <ul>
                    <li>
                        Aristotle also described haloes and
                        <span class="q-number-box">5</span>
                        <input type="text" name="nHmZBcocwalVytdH-15" class="q-text">
                    </li>
                </ul>

                <p><b>Middle Ages</b></p>
                <ul>
                    <li>
                        proverbs about the significance of the colour of the
                        <span class="q-number-box">6</span>
                        <input type="text" name="nHmZBcocwalVytdH-16" class="q-text">
                        passed on accurate information
                    </li>
                </ul>

                <p><b>15th–19th centuries</b></p>
                <ul>
                    <li>
                        15th century: scientists recognised value of
                        <span class="q-number-box">7</span>
                        <input type="text" name="nHmZBcocwalVytdH-17" class="q-text">
                        for the first time
                    </li>
                    <li>
                        Galileo invented the
                        <span class="q-number-box">8</span>
                        <input type="text" name="nHmZBcocwalVytdH-18" class="q-text">
                    </li>
                    <li>
                        18th century: Franklin identified the movement of
                        <span class="q-number-box">9</span>
                        <input type="text" name="nHmZBcocwalVytdH-19" class="q-text">
                    </li>
                    <li>
                        19th century: data from different locations could be sent to the same place by
                        <span class="q-number-box">10</span>
                        <input type="text" name="nHmZBcocwalVytdH-20" class="q-text">
                    </li>
                </ul>
            </fieldset>

            <div style="text-align: center;">
                <button type="button" class="btn btn-primary try-again" id="again-{{ $tab['id'] }}"
                    style="display:none">
                    Try Again
                </button>

                <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                    Submit
                </button>
            </div>

        </form>
    </div>
</div>
