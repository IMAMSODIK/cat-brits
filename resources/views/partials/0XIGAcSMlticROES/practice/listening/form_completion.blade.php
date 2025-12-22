@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-6</p>

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
                        <button class="start-btn" data-start="91" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-6</h3>
                <p class="lead"><i>Complete The Note Below</i></p>
                <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <div class="q-item" data-q="1">
                <p><b>Coordinator:</b>
                    <span class="q-number-box">1</span>
                    <input type="text" name="0XIGAcSMlticROES-1" class="q-text" placeholder="">
                </p>
            </div>

            <div class="q-item" data-q="2">
                <p><b>Level:</b>
                    <span class="q-number-box">2</span>
                    <input type="text" name="0XIGAcSMlticROES-2" class="q-text" placeholder="">
                </p>
            </div>

            <div class="q-item" data-q="3">
                <p><b>Place:</b> the
                    <span class="q-number-box">3</span>
                    <input type="text" name="0XIGAcSMlticROES-3" class="q-text" placeholder="">
                </p>
            </div>

            <div class="q-item" data-q="4">
                <p>
                    <span class="q-number-box">4</span>
                    <input type="text" name="0XIGAcSMlticROES-4" class="q-text" placeholder="">
                    Street
                </p>
            </div>
            <p>First floor, Room T347</p>


            <div class="q-item" data-q="5">
                <p><b>Time:</b> Thursday morning at
                    <span class="q-number-box">5</span>
                    <input type="text" name="0XIGAcSMlticROES-5" class="q-text" placeholder="">
                </p>
            </div>

            <div class="q-item" data-q="6">
                <p><b>Recommended website:</b> ‘The perfect
                    <span class="q-number-box">6</span>
                    <input type="text" name="0XIGAcSMlticROES-6" class="q-text" placeholder="">
                    ’
                </p>
            </div>



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