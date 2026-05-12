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
                        <button class="start-btn" data-start="74" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <div style="padding-left: 0; margin-bottom: 20px;">
                <h3><strong>The impact of digital technology on the Icelandic language</strong></h3>
                <strong>The Icelandic language</strong>

                <ul>
                    <li>
                        has approximately
                        <div class="q-item" data-q="1" style="display:inline-block;">
                            <span class="q-number-box">1</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-8" class="q-text" placeholder="">
                        </div>
                        speakers.
                    </li>
                    <li>
                        has a
                        <div class="q-item" data-q="2" style="display:inline-block;">
                            <span class="q-number-box">2</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-9" class="q-text" placeholder="">
                        </div>
                        that is still growing
                    </li>
                    <li>has not changed a lot over the last thousand years</li>
                    <li>
                        has its own words for computer-based concepts, such as web browser and
                        <div class="q-item" data-q="3" style="display:inline-block;">
                            <span class="q-number-box">3</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-10" class="q-text" placeholder="">
                        </div>
                    </li>
                </ul>

                <strong>Young speakers</strong>
                <ul>
                    <li>
                        are big users of digital technology, such as
                        <div class="q-item" data-q="4" style="display:inline-block;">
                            <span class="q-number-box">4</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-11" class="q-text" placeholder="">
                        </div>
                    </li>
                    <li>
                        are becoming
                        <div class="q-item" data-q="5" style="display:inline-block;">
                            <span class="q-number-box">5</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-12" class="q-text" placeholder="">
                        </div>
                        very quickly
                    </li>
                    <li>
                        are having discussions using only English while they are in the
                        <div class="q-item" data-q="6" style="display:inline-block;">
                            <span class="q-number-box">6</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-13" class="q-text" placeholder="">
                        </div>
                        at school
                    </li>
                    <li>
                        are better able to identify the content of a
                        <div class="q-item" data-q="7" style="display:inline-block;">
                            <span class="q-number-box">7</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-14" class="q-text" placeholder="">
                        </div>
                        in English than Icelandic
                    </li>
                </ul>

                <strong>Technology and internet companies</strong>
                <ul>
                    <li>
                        write very little in Icelandic because of the small number of speakers and because of how
                        complicated its
                        <div class="q-item" data-q="8" style="display:inline-block;">
                            <span class="q-number-box">8</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-15" class="q-text" placeholder="">
                        </div>
                        is
                    </li>
                </ul>

                <strong>The Icelandic government</strong>
                <ul>
                    <li>has set up a fund to support the production of more digital content in the language</li>
                    <li>believes that Icelandic has a secure future</li>
                    <li>
                        is worried that young Icelanders may lose their
                        <div class="q-item" data-q="9" style="display:inline-block;">
                            <span class="q-number-box">9</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-16" class="q-text" placeholder="">
                        </div>
                        as Icelanders
                    </li>
                    <li>
                        is worried about the consequences of children not being
                        <div class="q-item" data-q="10" style="display:inline-block;">
                            <span class="q-number-box">10</span>
                            <input type="text" name="DPCLyNHpDTqSciXd-17" class="q-text" placeholder="">
                        </div>
                        in either Icelandic or English
                    </li>
                </ul>
            </div>

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
