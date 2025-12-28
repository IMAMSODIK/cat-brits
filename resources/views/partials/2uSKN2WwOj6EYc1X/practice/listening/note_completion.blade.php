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
                <h3>Questions 1-10</h3>
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>NO MORE THAN THREE WORDS AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px; width: 100%;">
                <tr>
                    <th colspan="2">Harry's Hire Company</th>
                </tr>

                <tr>
                    <td><b>Hire for:</b></td>
                    <td><i><b>Birthday party</b></i></td>
                </tr>


                <tr>
                    <td><u><b>Equipment Hire:</b></u></td>
                    <td></td>
                </tr>


                <tr>
                    <td><b>Day and date of event:</b></td>
                    <td>
                        <span class="q-item" data-q="1">
                            <span class="q-number-box">1</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-1" class="q-text" />
                        </span>
                        November
                    </td>
                </tr>

                <tr>
                    <td><b>Number attending event:</b></td>
                    <td>
                        <div class="q-item" data-q="2">
                            <span class="q-number-box">2</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-2" class="q-text" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>Rental:</b></td>
                    <td>5 dozen dinner plates, bowls</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5 dozen sets of: <span class="q-item" data-q="3">
                            <span class="q-number-box">3</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-3" class="q-text" />
                        </span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>40 plastic: <span class="q-item" data-q="4">
                            <span class="q-number-box">4</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-4" class="q-text" />
                        </span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4 dozen each small / medium glasses</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Six: <span class="q-item" data-q="5">
                            <span class="q-number-box">5</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-5" class="q-text" />
                        </span></td>
                </tr>
                <tr>
                    <td><b>Costings:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td><b>Weekend Package:</b></td>
                    <td>5 p.m Fri - 10 a.m Mon: $1600 + tax</td>
                </tr>

                <tr>
                    <td>
                        <span class="q-item" data-q="6">
                            <span class="q-number-box">6</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-6" class="q-text" />
                        </span>
                        <b>Package:</b>
                    </td>
                    <td>
                        5 p.m Sat - 10 a.m Mon: $1350 + tax
                    </td>
                </tr>

                <tr>
                    <td>
                        <span class="q-item" data-q="7">
                            <span class="q-number-box">7</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-7" class="q-text" />
                        </span>
                        <b>Package:</b>
                    </td>
                    <td>
                        $50 (within 10 km)
                    </td>
                </tr>
                <tr>
                    <td><b>Breakage Insurance:</b></td>
                    <td>$60</td>
                </tr>

                <tr>
                    <td> <b>replacement cost:</b></td>
                    <td>plates, bowls - $3.55 per item</td>
                </tr>
                <tr>
                    <td></td>
                    <td>small glasses
                        <span class="q-item" data-q="8">
                            <span class="q-number-box">8</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-8" class="q-text" />
                        </span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>medium glasses - $4.40 per item</td>
                </tr>
                <tr>
                    <td><b>Costumer Detail:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Full name:</td>
                    <td>
                        <div class="q-item" data-q="9">
                            <span class="q-number-box">9</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-9" class="q-text" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>
                        28B Sandstone Close, Martinsborough
                    </td>
                </tr>

                <tr>
                    <td>Contact number:</td>
                    <td>
                        084
                        <span class="q-item" data-q="10">
                            <span class="q-number-box">10</span>
                            <input type="text" name="2uSKN2WwOj6EYc1X-10" class="q-text" />
                        </span>
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
