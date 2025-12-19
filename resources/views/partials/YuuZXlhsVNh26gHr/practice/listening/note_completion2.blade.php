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
                        <button class="start-btn" data-start="61" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete The Notes Below</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2" style="text-align: left;">
                        Background on school marching band
                    </th>
                </tr>

                <tr>
                    <td colspan="2">
                        It consists of around
                        <div class="q-item" data-q="1" style="display:inline-block;">
                            <span class="q-number-box">1</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-11" class="q-text" placeholder="">
                        </div>
                        students.
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        It is due to play in a
                        <div class="q-item" data-q="2" style="display:inline-block;">
                            <span class="q-number-box">2</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-12" class="q-text" placeholder="">
                        </div>
                        band competition.
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        It has been invited to play in the town’s
                        <div class="q-item" data-q="3" style="display:inline-block;">
                            <span class="q-number-box">3</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-13" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        They have listened to a talk by a
                        <div class="q-item" data-q="4" style="display:inline-block;">
                            <span class="q-number-box">4</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-14" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        Joe will discuss a
                        <div class="q-item" data-q="5" style="display:inline-block;">
                            <span class="q-number-box">5</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-15" class="q-text" placeholder="">
                        </div>
                        with the band.
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        Joe hopes the band will attend a
                        <div class="q-item" data-q="6" style="display:inline-block;">
                            <span class="q-number-box">6</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-16" class="q-text" placeholder="">
                        </div>
                        next month.
                    </td>
                </tr>
            </table>




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
