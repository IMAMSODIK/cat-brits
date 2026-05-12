@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Complete the notes below.</p>

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
                        <button class="start-btn" data-start="56" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete the notes below</i></p>
                <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="5" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2">Flanders Conference Hotel</th>
                </tr>
                <tr>
                    <td><i>Example</i></td>
                </tr>
                <tr>
                    <td>Customer Services Manager: <i>…………Angela……….</i>.</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><b>Date available</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>weekend beginning February 4th</td>
                </tr>
                <tr>
                    <td><b>Conference facilities</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>
                                the
                                <div class="q-item" data-q="1" style="display:inline-block;">
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-1" class="q-text" placeholder="">
                                </div>
                                room for talks
                                (projector and
                                <div class="q-item" data-q="2" style="display:inline-block;">
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-2" class="q-text" placeholder="">
                                </div>
                                available)
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>
                        <ul>
                            <li>
                                area for coffee and an
                                <div class="q-item" data-q="3" style="display:inline-block;">
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-3" class="q-text" placeholder="">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>
                        <ul>
                            <li>
                                free
                                <div class="q-item" data-q="4" style="display:inline-block;">
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-4" class="q-text" placeholder="">
                                </div>
                                throughout
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>
                        <ul>
                            <li>
                                a standard buffet lunch costs $
                                <div class="q-item" data-q="5" style="display:inline-block;">
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-5" class="q-text" placeholder="">
                                </div>
                                per head
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><b>Accommodation</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Rooms will cost $
                        <div class="q-item" data-q="6" style="display:inline-block;">
                            <span class="q-number-box">6</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-6" class="q-text" placeholder="">
                        </div>
                        including breakfast.
                    </td>
                </tr>

                <tr>
                    <td><b>Other facilities</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        The hotel also has a spa and rooftop
                        <div class="q-item" data-q="7" style="display:inline-block;">
                            <span class="q-number-box">7</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-7" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        There’s a free shuttle service to the
                        <div class="q-item" data-q="8" style="display:inline-block;">
                            <span class="q-number-box">8</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-8" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><b>Location</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Wilby Street (quite near the
                        <div class="q-item" data-q="9" style="display:inline-block;">
                            <span class="q-number-box">9</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-9" class="q-text" placeholder="">
                        </div>
                        )
                    </td>
                </tr>

                <tr>
                    <td>
                        near to restaurants and many
                        <div class="q-item" data-q="10" style="display:inline-block;">
                            <span class="q-number-box">10</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-10" class="q-text" placeholder="">
                        </div>
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
