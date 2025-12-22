@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-10 the Reading Passage?</p>
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
                        <button class="start-btn" data-start="50" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p>Questions 1-10</p>
                <p>Complete the notes below.</p>
                <p><i>Write <b>ONE WORD</b> for each answer.</i></p>
            </fieldset>
            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2">TOTAL HEALTH CLINIC<br>PATIENT DETAILS</th>
                </tr>
                <tr>
                    <td colspan="2"><b>Personal information</b></td>
                </tr>
                <tr>
                    <td colspan="2"><i>Example</i></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Julie Anne <i>......Garcia.....</i></td>
                </tr>
                <tr>
                    <td>Contact phone</td>
                    <td>
                        <span class="q-number-box">1</span>
                        <input type="text" name="nHmZBcocwalVytdH-1" class="q-text">
                    </td>
                </tr>
                <tr>
                    <td>Date of birth</td>
                    <td>
                        <span class="q-number-box">2</span>
                        <input type="text" name="nHmZBcocwalVytdH-2" class="q-text">
                        , 1992
                    </td>
                </tr>
                <tr>
                    <td>Occupation</td>
                    <td>
                        works as a
                        <span class="q-number-box">3</span>
                        <input type="text" name="nHmZBcocwalVytdH-3" class="q-text">
                    </td>
                </tr>
                <tr>
                    <td>Insurance company</td>
                    <td>
                        <span class="q-number-box">4</span>
                        <input type="text" name="nHmZBcocwalVytdH-4" class="q-text">
                        Life Insurance
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Details of the problem</b></td>
                </tr>
                <tr>
                    <td>Type of problem</td>
                    <td>
                        pain in her left
                        <span class="q-number-box">5</span>
                        <input type="text" name="nHmZBcocwalVytdH-5" class="q-text">
                    </td>
                </tr>
                <tr>
                    <td>When it began</td>
                    <td>
                        <span class="q-number-box">6</span>
                        <input type="text" name="nHmZBcocwalVytdH-6" class="q-text">
                        ago
                    </td>
                </tr>
                <tr>
                    <td>Action already taken</td>
                    <td>has taken painkillers and applied ice</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Other information</b></td>
                </tr>
                <tr>
                    <td>Sports played</td>
                    <td>
                        belongs to a
                        <span class="q-number-box">7</span>
                        <input type="text" name="nHmZBcocwalVytdH-7" class="q-text">
                        club
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        goes
                        <span class="q-number-box">8</span>
                        <input type="text" name="nHmZBcocwalVytdH-8" class="q-text">
                        regularly
                    </td>
                </tr>
                <tr>
                    <td>Medical history</td>
                    <td>
                        injured her
                        <span class="q-number-box">9</span>
                        <input type="text" name="nHmZBcocwalVytdH-9" class="q-text">
                        last year
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>no allergies</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        no regular medication apart from
                        <span class="q-number-box">10</span>
                        <input type="text" name="nHmZBcocwalVytdH-10" class="q-text">
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
