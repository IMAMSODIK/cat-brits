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
                        <button class="start-btn" data-start="82" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete The Note Below</i></p>
                <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2">Job details from employment agency</th>
                </tr>

                <tr>
                    <td><b>Role:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <div class="q-item" data-q="1">
                            <span class="q-number-box">1</span>
                            <input type="text" name="yPLnQeqINAxbrnva-1" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><b>Location:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <div class="q-item" data-q="2">
                            Fordham
                            <span class="q-number-box">2</span>
                            <input type="text" name="yPLnQeqINAxbrnva-2" class="q-text" placeholder="">
                            Centre
                        </div>

                        <div class="q-item" data-q="3" style="margin-top:6px;">
                            <span class="q-number-box">3</span>
                            <input type="text" name="yPLnQeqINAxbrnva-3" class="q-text" placeholder="">
                            Road, Fordham
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>Work involves:</b></td>
                    <td></td>
                </tr>

                <tr>

                    <td>
                        <ul style="margin:0; padding-left:16px;">
                            <li>dealing with enquiries</li>

                            <li>
                                <div class="q-item" data-q="4">
                                    making
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-4" class="q-text" placeholder="">
                                    and reorganising them
                                </div>
                            </li>

                            <li>
                                <div class="q-item" data-q="5">
                                    maintaining the internal
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-5" class="q-text" placeholder="">
                                </div>
                            </li>

                            <li>general administration</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><b>Requirements:</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <ul style="margin:0; padding-left:16px;">
                            <li>
                                <div class="q-item" data-q="6">
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-6" class="q-text" placeholder="">
                                    (essential)
                                </div>
                            </li>

                            <li>
                                a calm and
                                <div class="q-item" data-q="7" style="display:inline-block;">
                                    <span class="q-number-box">7</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-7" class="q-text" placeholder="">
                                </div>
                                manner
                            </li>

                            <li>good IT skills</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><b>Other information:</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="q-item" data-q="8">
                            a
                            <span class="q-number-box">8</span>
                            <input type="text" name="yPLnQeqINAxbrnva-8" class="q-text" placeholder="">
                            job – further opportunities may be available
                        </div>

                        <div class="q-item" data-q="9" style="margin-top:8px;">
                            hours: 7.45 a.m. to
                            <span class="q-number-box">9</span>
                            <input type="text" name="yPLnQeqINAxbrnva-9" class="q-text" placeholder="">
                            p.m. Monday to Friday
                        </div>

                        <div class="q-item" data-q="10" style="margin-top:8px;">
                            <span class="q-number-box">10</span>
                            <input type="text" name="yPLnQeqINAxbrnva-10" class="q-text" placeholder="">
                            is available onsite
                        </div>
                    </td>
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