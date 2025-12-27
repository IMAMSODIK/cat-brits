@props(['tab'])
<div class="x-panel-inner">Content: Transport survey</div>
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
                        <button class="start-btn" data-start="81" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete the notes below</i></p>
                <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2">Transport survey</th>
                </tr>
                <tr>
                    <td><i>Name</i></td>
                </tr>
                <tr>
                    <td>Sadie Jones</td>
                </tr>

                <tr>
                    <td><b>Year of birth 1991</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <b>Postcode</b>
                        <div class="q-item" data-q="1" style="display:inline-block;">
                            <span class="q-number-box">1</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-1" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><b>Travelling by bus</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Date of bus journey:
                        <div class="q-item" data-q="2" style="display:inline-block;">
                            <span class="q-number-box">2</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-2" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        Reason for trip: shopping and visit to the
                        <div class="q-item" data-q="3" style="display:inline-block;">
                            <span class="q-number-box">3</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-3" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        Travelled by bus because cost of
                        <div class="q-item" data-q="4" style="display:inline-block;">
                            <span class="q-number-box">4</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-4" class="q-text" placeholder="">
                        </div>
                        too high
                    </td>
                </tr>

                <tr>
                    <td>
                        Got on bus at
                        <div class="q-item" data-q="5" style="display:inline-block;">
                            <span class="q-number-box">5</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-5" class="q-text" placeholder="">
                        </div>
                        Street
                    </td>
                </tr>

                <tr>
                    <td><b>Complaints about bus service</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        bus today was
                        <div class="q-item" data-q="6" style="display:inline-block;">
                            <span class="q-number-box">6</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-6" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        frequency of buses in the
                        <div class="q-item" data-q="7" style="display:inline-block;">
                            <span class="q-number-box">7</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-7" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><b>Travelling by car</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Goes to the
                        <div class="q-item" data-q="8" style="display:inline-block;">
                            <span class="q-number-box">8</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-8" class="q-text" placeholder="">
                        </div>
                        by car
                    </td>
                </tr>

                <tr>
                    <td><b>Travelling by bicycle</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Dislikes travelling by bike in the city centre because of the
                        <div class="q-item" data-q="9" style="display:inline-block;">
                            <span class="q-number-box">9</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-9" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        Doesn’t own a bike because of a lack of
                        <div class="q-item" data-q="10" style="display:inline-block;">
                            <span class="q-number-box">10</span>
                            <input type="text" name="KeCD0au8jSaBuT3A-10" class="q-text" placeholder="">
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
