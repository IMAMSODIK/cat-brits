@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-7</p>

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
                        <button class="start-btn" data-start="91" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>

            <ul style="list-style: none; padding-left: 0; margin-bottom: 20px;">
                <li>
                    <strong>Opportunities for voluntary work in Southoe village</strong>
                    <ul>
                        <b>Library</b>
                        <li>
                            Help with
                            <div class="q-item" data-q="1" style="display:inline-block;">
                                <span class="q-number-box">1</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-1" class="q-text" placeholder="">
                            </div>
                            books (times to be arranged)
                        </li>
                        <li>
                            Help needed to keep
                            <div class="q-item" data-q="2" style="display:inline-block;">
                                <span class="q-number-box">2</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-2" class="q-text" placeholder="">
                            </div>
                            of books up to date
                        </li>
                        <li>
                            Library is in the
                            <div class="q-item" data-q="3" style="display:inline-block;">
                                <span class="q-number-box">3</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-3" class="q-text" placeholder="">
                            </div>
                            Room in the village hall
                        </li>
                        <b>Lunch club</b>
                        <li>
                            Help by providing
                            <div class="q-item" data-q="4" style="display:inline-block;">
                                <span class="q-number-box">4</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-4" class="q-text" placeholder="">
                            </div>
                        </li>
                        <li>
                            Help with hobbies such as
                            <div class="q-item" data-q="5" style="display:inline-block;">
                                <span class="q-number-box">5</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-5" class="q-text" placeholder="">
                            </div>
                        </li>
                        <b>Help for individuals needed next week</b>
                        <li>
                            Taking Mrs Carroll to
                            <div class="q-item" data-q="6" style="display:inline-block;">
                                <span class="q-number-box">6</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-6" class="q-text" placeholder="">
                            </div>
                        </li>
                        <li>
                            Work in the
                            <div class="q-item" data-q="7" style="display:inline-block;">
                                <span class="q-number-box">7</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-7" class="q-text" placeholder="">
                            </div>
                            at Mr Selsbury’s house
                        </li>
                    </ul>
                </li>
            </ul>

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
