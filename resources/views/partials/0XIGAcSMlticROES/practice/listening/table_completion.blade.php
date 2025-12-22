@props(['tab'])

<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-4</p>
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
                        <button class="start-btn" data-start="313" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-4</h3>
                <p class="lead"><i>Complete The Note Below</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th>Time</th>
                    <th>Activity</th>
                    <th>Notes</th>
                </tr>

                <tr>
                    <td>5 minutes</td>
                    <td>tuning guitars</td>
                    <td>
                        using an app or by
                        <div class="q-item" data-q="1" style="display:inline-block;">
                            <span class="q-number-box">1</span>
                            <input type="text" name="0XIGAcSMlticROES-1" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>10 minutes</td>
                    <td>strumming chords using our thumbs</td>
                    <td>
                        keeping time while the teacher is
                        <div class="q-item" data-q="2" style="display:inline-block;">
                            <span class="q-number-box">2</span>
                            <input type="text" name="0XIGAcSMlticROES-2" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>15 minutes</td>
                    <td>playing songs</td>
                    <td>
                        often listening to a
                        <div class="q-item" data-q="3" style="display:inline-block;">
                            <span class="q-number-box">3</span>
                            <input type="text" name="0XIGAcSMlticROES-3" class="q-text" placeholder="">
                        </div>
                        of a song
                    </td>
                </tr>

                <tr>
                    <td>10 minutes</td>
                    <td>playing single notes and simple tunes</td>
                    <td>
                        playing together, then
                        <div class="q-item" data-q="4" style="display:inline-block;">
                            <span class="q-number-box">4</span>
                            <input type="text" name="0XIGAcSMlticROES-4" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>5 minutes</td>
                    <td>noting things to practise at home</td>
                    <td></td>
                </tr>
            </table>



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