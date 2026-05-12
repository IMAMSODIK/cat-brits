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
                        <button class="start-btn" data-start="77" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete The Notes Below</i></p>
                <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>
            <table cellpadding="5" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th colspan="2" style="text-align: left;">
                        Concerts in university arts festival
                    </th>
                </tr>
                <tr>
                    <td colspan="2"><b>Concert 1</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>Australian composer: Liza Lim</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                studied piano and
                                <div class="q-item" data-q="1" style="display:inline-block;">
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-17" class="q-text">
                                </div>
                                before turning to composition
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                performers and festivals around the world have given her a lot of commissions
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                compositions show a great deal of
                                <div class="q-item" data-q="2" style="display:inline-block;">
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-18" class="q-text">
                                </div>
                                and are drawn from various cultural sources
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                her music is very expressive and also
                                <div class="q-item" data-q="3" style="display:inline-block;">
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-19" class="q-text">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                festival will include her
                                <div class="q-item" data-q="4" style="display:inline-block;">
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-20" class="q-text">
                                </div>
                                called The Oresteia
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                Lim described the sounds in The Oresteia as
                                <div class="q-item" data-q="5" style="display:inline-block;">
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-21" class="q-text">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>British composers: Ralph Vaughan Williams, Frederick Delius</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Concert 2</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>British composers: Benjamin Britten, Judith Weir</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>Australian composer: Ross Edwards</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>festival will include The Tower of Remoteness, inspired by nature</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                The Tower of Remoteness is performed by piano and
                                <div class="q-item" data-q="6" style="display:inline-block;">
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-22" class="q-text">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>compositions include music for children</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                celebrates Australia’s cultural
                                <div class="q-item" data-q="7" style="display:inline-block;">
                                    <span class="q-number-box">7</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-23" class="q-text">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Concert 3</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>Australian composer: Carl Vine</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>played cornet then piano</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                studied
                                <div class="q-item" data-q="8" style="display:inline-block;">
                                    <span class="q-number-box">8</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-24" class="q-text">
                                </div>
                                before studying music
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>worked in Sydney as a pianist and composer</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                became well known as composer of music for
                                <div class="q-item" data-q="9" style="display:inline-block;">
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-25" class="q-text">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>
                                festival will include his music for the 1996
                                <div class="q-item" data-q="10" style="display:inline-block;">
                                    <span class="q-number-box">10</span>
                                    <input type="text" name="YuuZXlhsVNh26gHr-26" class="q-text">
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul>
                            <li>British composers: Edward Elgar, Thomas Adès</li>
                        </ul>
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
