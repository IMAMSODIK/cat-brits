@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-10</p>

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
                <h3>Questions 1-10</h3>
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>

            <fieldset class="q-item">
                <p><b>Hand knitting</b></p>
                <b>Interest in knitting</b>
                <ul>
                    <li>Knitting has a long history around the world.</li>
                    <li>
                        <div class="q-list" data-q="1">
                            We imagine someone like a
                            <span class="q-number-box">1</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-1" class="q-text" placeholder="">
                            knitting.
                        </div>
                    </li>
                    <li>
                        <div class="q-list" data-q="2">
                            A
                            <span class="q-number-box">2</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-2" class="q-text" placeholder="">
                            ago, knitting was expected to disappear.
                        </div>
                    </li>
                    <li>The number of knitting classes is now increasing</li>
                    <li>
                        <div class="q-list" data-q="3">
                            People are buying more
                            <span class="q-number-box">3</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-3" class="q-text" placeholder="">
                            for knitting nowadays.
                        </div>
                    </li>
                </ul>

                <b>Benefits of knitting</b>
                <ul>
                    <li>
                        <div class="q-list" data-q="4">
                            gives support in times of
                            <span class="q-number-box">4</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-4" class="q-text" placeholder="">
                            difficulty
                        </div>
                    </li>
                    <li>
                        <div class="q-list" data-q="5">
                            requires only
                            <span class="q-number-box">5</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-5" class="q-text" placeholder="">
                            skills and little money to start
                        </div>
                    </li>
                    <li>reduces stress in a busy life</li>
                </ul>

                <b>Early knitting</b>
                <ul>
                    <li>The origins are not known.</li>
                    <li>
                        <div class="q-list" data-q="6">
                            Findings show early knitted items to be
                            <span class="q-number-box">6</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-6" class="q-text" placeholder="">
                            in shape.
                        </div>
                    </li>
                    <li>
                        <div class="q-list" data-q="7">
                            The first needles were made of natural materials such as wood and
                            <span class="q-number-box">7</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-7" class="q-text" placeholder="">
                            .
                        </div>
                    </li>
                    <li>
                        <div class="q-list" data-q="8">
                            Early yarns felt
                            <span class="q-number-box">8</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-8" class="q-text" placeholder="">
                            to touch.
                        </div>
                    </li>
                    <li>Wool became the most popular yarn for spinning.</li>
                    <li>
                        <div class="q-list" data-q="9">
                            Geographical areas had their own
                            <span class="q-number-box">9</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-9" class="q-text" placeholder="">
                            of knitting.
                        </div>
                    </li>
                    <li>
                        <div class="q-list" data-q="10">
                            Everyday tasks like looking after
                            <span class="q-number-box">10</span>
                            <input type="text" name="NmeBcwURSR2ZPfdX-10" class="q-text" placeholder="">
                            were done while knitting.
                        </div>
                    </li>
                </ul>
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
