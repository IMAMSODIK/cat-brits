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
                        <button class="start-btn" data-start="300" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>
            <div style="overflow-x:auto;">
                <table border="1" cellpadding="8" cellspacing="0"
                    style="border-collapse: collapse; width: 100%; text-align: justify;">
                    <tr style="text-align: center;">
                        <th colspan="4">Village social events</th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Event</th>
                        <th>Location</th>
                        <th>Help needed</th>
                    </tr>
                    <tr>
                        <td>19 Oct</td>
                        <td>
                            <div class="q-item" data-q="1" style="display:inline-block;">
                                <span class="q-number-box">1</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-1" class="q-text" placeholder="">
                            </div>
                        </td>
                        <td>Village hall</td>
                        <td>providing refreshments</td>
                    </tr>
                    <tr>
                        <td>18 Nov</td>
                        <td>dance</td>
                        <td>Village hall</td>
                        <td>
                            checking
                            <div class="q-item" data-q="2" style="display:inline-block;">
                                <span class="q-number-box">2</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-2" class="q-text" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>31 Dec</td>
                        <td>New Year’s Eve party</td>
                        <td>Mountfort Hotel</td>
                        <td>
                            designing the
                            <div class="q-item" data-q="3" style="display:inline-block;">
                                <span class="q-number-box">3</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-3" class="q-text" placeholder="">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
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
