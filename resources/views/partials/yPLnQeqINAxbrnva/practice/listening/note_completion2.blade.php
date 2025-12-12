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
                        <button class="start-btn" data-start="72" type="button">Start from
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
                    <th colspan="2">Victor Hugo</th>
                </tr>

                <!-- Les Misérables -->
                <tr>
                    <td colspan="2"><b>His novel, Les Misérables</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>It has been adapted for theatre and cinema.</li>
                            <li>
                                We know more about its overall
                                <div class="q-item" data-q="1" style="display:inline-block;">
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-11" class="q-text" placeholder="">
                                </div>
                                than about its author.
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- Early career -->
                <tr>
                    <td colspan="2"><b>His early career</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>In Paris, his career was successful and he led the Romantic movement.</li>
                            <li>
                                He spoke publicly about social issues, such as
                                <div class="q-item" data-q="2" style="display:inline-block;">
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-12" class="q-text" placeholder="">
                                </div>
                                and education.
                            </li>
                            <li>Napoleon III disliked his views and exiled him.</li>
                        </ul>
                    </td>
                </tr>

                <!-- Exile -->
                <tr>
                    <td colspan="2"><b>His exile from France</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>
                                Victor Hugo had to live elsewhere in
                                <div class="q-item" data-q="3" style="display:inline-block;">
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-13" class="q-text" placeholder="">
                                </div>.
                            </li>
                            <li>
                                He used his income from the sale of some
                                <div class="q-item" data-q="4" style="display:inline-block;">
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-14" class="q-text" placeholder="">
                                </div>
                                he had written to buy a house on Guernsey.
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- House on Guernsey -->
                <tr>
                    <td colspan="2"><b>His house on Guernsey</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>Victor Hugo lived in this house until the end of the Empire in France.</li>
                            <li>
                                The ground floor contains portraits,
                                <div class="q-item" data-q="5" style="display:inline-block;">
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-15" class="q-text" placeholder="">
                                </div>
                                and tapestries that he valued.
                            </li>
                            <li>
                                He bought cheap
                                <div class="q-item" data-q="6" style="display:inline-block;">
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-16" class="q-text" placeholder="">
                                </div>
                                made of wood and turned this into beautiful wall carvings.
                            </li>
                            <li>
                                The first floor consists of furnished areas with wallpaper and
                                <div class="q-item" data-q="7" style="display:inline-block;">
                                    <span class="q-number-box">7</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-17" class="q-text" placeholder="">
                                </div>
                                that have a Chinese design.
                            </li>
                            <li>The library still contains many of his favourite books.</li>
                            <li>
                                He wrote in a room at the top of the house that had a view of the
                                <div class="q-item" data-q="8" style="display:inline-block;">
                                    <span class="q-number-box">8</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-18" class="q-text" placeholder="">
                                </div>.
                            </li>
                            <li>
                                He entertained other writers as well as poor
                                <div class="q-item" data-q="9" style="display:inline-block;">
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-19" class="q-text" placeholder="">
                                </div>
                                in his house.
                            </li>
                            <li>
                                Victor Hugo’s
                                <div class="q-item" data-q="10" style="display:inline-block;">
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="yPLnQeqINAxbrnva-20" class="q-text" placeholder="">
                                </div>
                                gave ownership of the house to the city of Paris in 1927.
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