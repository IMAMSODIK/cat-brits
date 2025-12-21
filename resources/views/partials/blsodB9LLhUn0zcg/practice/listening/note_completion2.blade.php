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
                        <button class="start-btn" data-start="71" type="button">Start from
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
                    <th colspan="2">Stoicism</th>
                </tr>

                <!-- Relevance -->
                <tr>
                    <td colspan="2"><b>Relevance of Stoicism</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        Stoicism is still relevant today because of its
                        <div class="q-item" data-q="1" style="display:inline-block;">
                            <span class="q-number-box">1</span>
                            <input type="text" name="blsodB9LLhUn0zcg-11" class="q-text">
                        </div>
                        appeal.
                    </td>
                </tr>

                <!-- Ancient Stoics -->
                <tr>
                    <td colspan="2"><b>Ancient Stoics</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>Stoicism was founded over 2,000 years ago in Greece.</li>
                            <li>
                                The Stoics’ ideas are surprisingly well known, despite not being intended for
                                <div class="q-item" data-q="2" style="display:inline-block;">
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="blsodB9LLhUn0zcg-12" class="q-text">
                                </div>.
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- Stoic principles -->
                <tr>
                    <td colspan="2"><b>Stoic principles</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>Happiness could be achieved by leading a virtuous life.</li>
                            <li>Controlling emotions was essential.</li>
                            <li>
                                Epictetus said that external events cannot be controlled but the
                                <div class="q-item" data-q="3" style="display:inline-block;">
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="blsodB9LLhUn0zcg-13" class="q-text">
                                </div>
                                people make in response can be controlled.
                            </li>
                            <li>
                                A Stoic is someone who has a different view on experiences which others would consider
                                as
                                <div class="q-item" data-q="4" style="display:inline-block;">
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="blsodB9LLhUn0zcg-14" class="q-text">
                                </div>.
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- Influence -->
                <tr>
                    <td colspan="2"><b>The influence of Stoicism</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>
                                George Washington organised a
                                <div class="q-item" data-q="5" style="display:inline-block;">
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="blsodB9LLhUn0zcg-15" class="q-text">
                                </div>
                                about Cato to motivate his men.
                            </li>
                            <li>The French artist Delacroix was a Stoic.</li>
                            <li>
                                Adam Smith’s ideas on
                                <div class="q-item" data-q="6" style="display:inline-block;">
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="blsodB9LLhUn0zcg-16" class="q-text">
                                </div>
                                were influenced by Stoicism.
                            </li>
                            <li>Some of today’s political leaders are inspired by the Stoics.</li>
                            <li>
                                Cognitive Behaviour Therapy (CBT)
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <ul style="margin:0; padding-left:18px;">
                            <li>
                                the treatment for
                                <div class="q-item" data-q="7" style="display:inline-block;">
                                    <span class="q-number-box">7</span>
                                    <input type="text" name="blsodB9LLhUn0zcg-17" class="q-text">
                                </div>
                                is based on ideas from Stoicism.
                            </li>
                            <li>
                                people learn to base their thinking on
                                <div class="q-item" data-q="8" style="display:inline-block;">
                                    <span class="q-number-box">8</span>
                                    <input type="text" name="blsodB9LLhUn0zcg-18" class="q-text">
                                </div>.
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- Business -->
                <tr>
                    <td colspan="2">
                        In business, people benefit from Stoicism by identifying obstacles as
                        <div class="q-item" data-q="9" style="display:inline-block;">
                            <span class="q-number-box">9</span>
                            <input type="text" name="blsodB9LLhUn0zcg-19" class="q-text">
                        </div>.
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><b>Relevance of Stoicism</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        It requires a lot of
                        <div class="q-item" data-q="10" style="display:inline-block;">
                            <span class="q-number-box">10</span>
                            <input type="text" name="blsodB9LLhUn0zcg-20" class="q-text">
                        </div>
                        but Stoicism can help people to lead a good life.
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        It teaches people that having a strong character is more important than anything else.
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
