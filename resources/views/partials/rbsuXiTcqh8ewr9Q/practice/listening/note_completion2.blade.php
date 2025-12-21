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
                        <button class="start-btn" data-start="88" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete The Note Below</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>

            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2">Céide Fields</th>
                </tr>

                <!-- Discovery -->
                <tr>
                    <td colspan="2"><b>Discovery</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>
                                In the 1930s, a local teacher realised that stones beneath the bog surface were once
                                <div class="q-item" data-q="1" style="display:inline-block;">
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-11" class="q-text" placeholder="">
                                </div>.
                            </li>
                            <li>
                                His
                                <div class="q-item" data-q="2" style="display:inline-block;">
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-12" class="q-text" placeholder="">
                                </div>
                                became an archaeologist and undertook an investigation of the site:
                            </li>
                            <li>
                                – a traditional method used by local people to dig for
                                <div class="q-item" data-q="3" style="display:inline-block;">
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-13" class="q-text" placeholder="">
                                </div>
                                was used to identify where stones were located
                            </li>
                            <li>– carbon dating later proved the site was Neolithic.</li>
                            <li>
                                Items are well preserved in the bog because of a lack of
                                <div class="q-item" data-q="4" style="display:inline-block;">
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-14" class="q-text" placeholder="">
                                </div>.
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- Neolithic farmers -->
                <tr>
                    <td colspan="2"><b>Neolithic farmers</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>
                                Houses were
                                <div class="q-item" data-q="5" style="display:inline-block;">
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-15" class="q-text" placeholder="">
                                </div>
                                in shape and had a hole in the roof.
                            </li>
                            <li>Neolithic innovations include:</li>
                            <li>– cooking indoors</li>
                            <li>
                                – pots used for storage and to make
                                <div class="q-item" data-q="6" style="display:inline-block;">
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-16" class="q-text" placeholder="">
                                </div>.
                            </li>
                            <li>
                                Each field at Céide was large enough to support a big
                                <div class="q-item" data-q="7" style="display:inline-block;">
                                    <span class="q-number-box">7</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-17" class="q-text" placeholder="">
                                </div>.
                            </li>
                            <li>
                                The fields were probably used to restrict the grazing of animals – no evidence of
                                structures to house them during
                                <div class="q-item" data-q="8" style="display:inline-block;">
                                    <span class="q-number-box">8</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-18" class="q-text" placeholder="">
                                </div>.
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- Reasons for decline -->
                <tr>
                    <td colspan="2"><b>Reasons for the decline in farming</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>
                                a decline in
                                <div class="q-item" data-q="9" style="display:inline-block;">
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-19" class="q-text" placeholder="">
                                </div>
                                quality
                            </li>
                            <li>
                                an increase in
                                <div class="q-item" data-q="10" style="display:inline-block;">
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="rbsuXiTcqh8ewr9Q-20" class="q-text" placeholder="">
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