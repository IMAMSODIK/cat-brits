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
                        <button class="start-btn" data-start="63" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-7</h3>
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2">Enquiry about booking hotel room for event</th>
                </tr>

                <tr>
                    <td colspan="2">
                        Example: Andrew is the <b>...Events...</b> Manager
                    </td>
                </tr>

                <tr>
                    <td><b>Rooms</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="2">Adelphi Room</td>
                </tr>

                <tr>
                    <td>
                        number of people who can sit down to eat:
                        <div class="q-item" data-q="1" style="display:inline-block;">
                            <span class="q-number-box">1</span>
                            <input type="text" name="5k29sSZyLQgQjLWX-1" class="q-text" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        has a gallery suitable for musicians
                    </td>
                </tr>

                <tr>
                    <td>
                        can go out and see the
                        <div class="q-item" data-q="2" style="display:inline-block;">
                            <span class="q-number-box">2</span>
                            <input type="text" name="5k29sSZyLQgQjLWX-2" class="q-text" />
                        </div>
                        in pots on the terrace
                    </td>
                </tr>

                <tr>
                    <td>
                        terrace has a view of a group of
                        <div class="q-item" data-q="3" style="display:inline-block;">
                            <span class="q-number-box">3</span>
                            <input type="text" name="5k29sSZyLQgQjLWX-3" class="q-text" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">Carlton Room</td>
                </tr>

                <tr>
                    <td>
                        number of people who can sit down to eat: 110
                    </td>
                </tr>

                <tr>
                    <td>
                        has a
                        <div class="q-item" data-q="4" style="display:inline-block;">
                            <span class="q-number-box">4</span>
                            <input type="text" name="5k29sSZyLQgQjLWX-4" class="q-text" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        View of the lake
                    </td>
                </tr>

                <tr>
                    <td><b>Options</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Master of Ceremonies</td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        can give a
                        <div class="q-item" data-q="5" style="display:inline-block;">
                            <span class="q-number-box">5</span>
                            <input type="text" name="5k29sSZyLQgQjLWX-5" class="q-text" />
                        </div>
                        while people are eating
                    </td>
                </tr>

                <tr>
                    <td>
                        will provide
                        <div class="q-item" data-q="6" style="display:inline-block;">
                            <span class="q-number-box">6</span>
                            <input type="text" name="5k29sSZyLQgQjLWX-6" class="q-text" />
                        </div>
                        if there are any problems
                    </td>
                </tr>

                <tr>
                    <td>Accommodation:</td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        in the hotel rooms or
                        <div class="q-item" data-q="7" style="display:inline-block;">
                            <span class="q-number-box">7</span>
                            <input type="text" name="5k29sSZyLQgQjLWX-7" class="q-text" />
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
