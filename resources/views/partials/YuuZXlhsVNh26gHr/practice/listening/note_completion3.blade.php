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
            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
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
                        Australian composer: Liza Lim
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        studied piano and
                        <div class="q-item" data-q="1" style="display:inline-block;">
                            <span class="q-number-box">1</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-17" class="q-text">
                        </div>
                        before turning to composition
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        performers and festivals around the world have given her a lot of commissions
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        compositions show a great deal of
                        <div class="q-item" data-q="2" style="display:inline-block;">
                            <span class="q-number-box">2</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-18" class="q-text">
                        </div>
                        and are drawn from various cultural sources
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        her music is very expressive and also
                        <div class="q-item" data-q="3" style="display:inline-block;">
                            <span class="q-number-box">3</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-19" class="q-text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        festival will include her
                        <div class="q-item" data-q="4" style="display:inline-block;">
                            <span class="q-number-box">4</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-20" class="q-text">
                        </div>
                        called The Oresteia
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Lim described the sounds in The Oresteia as
                        <div class="q-item" data-q="5" style="display:inline-block;">
                            <span class="q-number-box">5</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-21" class="q-text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        British composers: Ralph Vaughan Williams, Frederick Delius
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Concert 2</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        British composers: Benjamin Britten, Judith Weir
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Australian composer: Ross Edwards
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        festival will include The Tower of Remoteness, inspired by nature
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        The Tower of Remoteness is performed by piano and
                        <div class="q-item" data-q="6" style="display:inline-block;">
                            <span class="q-number-box">6</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-22" class="q-text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        compositions include music for children
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        celebrates Australia’s cultural
                        <div class="q-item" data-q="7" style="display:inline-block;">
                            <span class="q-number-box">7</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-23" class="q-text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Concert 3</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        Australian composer: Carl Vine
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        played cornet then piano
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        studied
                        <div class="q-item" data-q="8" style="display:inline-block;">
                            <span class="q-number-box">8</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-24" class="q-text">
                        </div>
                        before studying music
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        worked in Sydney as a pianist and composer
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        became well known as composer of music for
                        <div class="q-item" data-q="9" style="display:inline-block;">
                            <span class="q-number-box">9</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-25" class="q-text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        festival will include his music for the 1996
                        <div class="q-item" data-q="10" style="display:inline-block;">
                            <span class="q-number-box">10</span>
                            <input type="text" name="YuuZXlhsVNh26gHr-26" class="q-text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        British composers: Edward Elgar, Thomas Adès
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
