@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-6 the Reading Passage?</p>
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
                        <button class="start-btn" data-start="58" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-6</p>
                <p><i>Write <b>ONE WORD</b> for each answer.</i></p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2">SELF-DRIVE TOURS IN THE USA</th>
                </tr>
                <tr>
                    <td colspan="2"><i>Example</i></td>
                </tr>
                <tr>
                    <td><b>Name:</b></td>
                    <td><b>Andrea </b><i>......Brown.....</i></td>
                </tr>
                <tr>
                    <td><b>Address:</b></td>
                    <td>
                        <div class="q-item" data-q="1">
                            24
                            <span class="q-number-box">1</span>
                            <input type="text" name="yPLnQeqINAxbrnva-1" class="q-text" placeholder="">
                            road
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>Postcode:</b></td>
                    <td>BH5 2OP</td>
                </tr>
                <tr>
                    <td><b>Phone:</b></td>
                    <td>(mobile) 077 8664 3091</td>
                </tr>
                <tr>
                    <td><b>Heard about company from:</b></td>
                    <td>
                        <div class="q-item" data-q="2">
                            <span class="q-number-box">2</span>
                            <input type="text" name="yPLnQeqINAxbrnva-2" class="q-text" placeholder="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Possible self-drive tours</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Trip One:</p>
                        <ul>
                            <li>
                                <div class="q-item" data-q="3">
                                    Los Angeles: customer wants to visit some
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-3" class="q-text" placeholder="">
                                    parks with her children
                                </div>
                            </li>
                            <li>
                                <div class="q-item" data-q="4">
                                    Yosemite Park: customer wants to stay in a lodge, not a
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-4" class="q-text" placeholder="">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Trip Two:</p>
                        <ul>
                            <li>
                                <div class="q-item" data-q="5">
                                    Customer wants to see the
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-5" class="q-text" placeholder="">
                                    on the way to Cambria
                                </div>
                            </li>
                            <li>At Santa Monica: not interested in shopping</li>
                            <li>
                                Yosemite Park: customer wants to stay in a lodge, not a
                                <div class="q-item" data-q="6">
                                    At San Diego, wants to spend time on the
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-6" class="q-text" placeholder="">
                                </div>
                            </li>
                        </ul>
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