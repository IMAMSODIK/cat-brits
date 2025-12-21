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
                        <button class="start-btn" data-start="87" type="button">Start from
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
                    <th colspan="2">Children’s Engineering Workshops</th>
                </tr>

                <tr>
                    <td><b>Tiny Engineers (ages 4–5)</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td><b>Activities:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <div class="q-item" data-q="1">
                            Create a cover for an
                            <span class="q-number-box">1</span>
                            <input type="text" name="blsodB9LLhUn0zcg-1" class="q-text" placeholder="">
                            so they can drop it from a height without breaking it.
                        </div>

                        <div class="q-item" data-q="2" style="margin-top:6px;">
                            Take part in a competition to build the tallest
                            <span class="q-number-box">2</span>
                            <input type="text" name="blsodB9LLhUn0zcg-2" class="q-text" placeholder="">
                        </div>

                        <div class="q-item" data-q="3" style="margin-top:6px;">
                            Make a
                            <span class="q-number-box">3</span>
                            <input type="text" name="blsodB9LLhUn0zcg-3" class="q-text" placeholder="">
                            powered by a balloon.
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><b>Junior Engineers (ages 6–8)</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td><b>Activities:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <div class="q-item" data-q="4">
                            Build model cars, trucks and
                            <span class="q-number-box">4</span>
                            <input type="text" name="blsodB9LLhUn0zcg-4" class="q-text" placeholder="">
                            and learn how to program them so they can move.
                        </div>

                        <div class="q-item" data-q="5" style="margin-top:6px;">
                            Take part in a competition to build the longest
                            <span class="q-number-box">5</span>
                            <input type="text" name="blsodB9LLhUn0zcg-5" class="q-text" placeholder="">
                            using card and wood.
                        </div>

                        <div class="q-item" data-q="6" style="margin-top:6px;">
                            Create a short
                            <span class="q-number-box">6</span>
                            <input type="text" name="blsodB9LLhUn0zcg-6" class="q-text" placeholder="">
                            with special software.
                        </div>

                        <div class="q-item" data-q="7" style="margin-top:6px;">
                            Build,
                            <span class="q-number-box">7</span>
                            <input type="text" name="blsodB9LLhUn0zcg-7" class="q-text" placeholder="">
                            and program a humanoid robot.
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><b>Cost:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Cost for a five-week block: £50</td>
                </tr>

                <tr>
                    <td><b>Schedule:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Held on
                        <span class="q-number-box">8</span>
                        <input type="text" name="blsodB9LLhUn0zcg-8" class="q-text" placeholder="">
                        from 10 am to 11 am
                    </td>
                </tr>

                <tr>
                    <td><b>Location:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Building 10A,
                        <span class="q-number-box">9</span>
                        <input type="text" name="blsodB9LLhUn0zcg-9" class="q-text" placeholder="">
                        Industrial Estate, Grasford
                    </td>
                </tr>

                <tr>
                    <td>
                        Plenty of
                        <span class="q-number-box">10</span>
                        <input type="text" name="blsodB9LLhUn0zcg-10" class="q-text" placeholder="">
                        is available.
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
