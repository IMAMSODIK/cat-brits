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
                <p class="lead"><i>Complete the notes below</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>

            <ul style="margin:0; padding-left:18px;">

                <li>
                    <b>ATLIT-YAM</b>
                    <ul>
                        <li>was a village on coast of eastern Mediterranean</li>
                        <li>thrived until about 7,000 BC</li>
                        <li>stone homes had a courtyard</li>
                        <li>
                            had a semicircle of large stones round a
                            <span class="q-item" data-q="1">
                                <span class="q-number-box">1</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-8" class="q-text">
                            </span>
                        </li>
                        <li>cause of destruction unknown – now under the sea</li>
                        <li>biggest settlement from the prehistoric period found on the seabed</li>
                        <li>
                            research carried out into structures,
                            <span class="q-item" data-q="2">
                                <span class="q-number-box">2</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-9" class="q-text">
                            </span>
                            and human remains
                        </li>
                    </ul>
                </li>

                <li>
                    <b>TRADITIONAL AUTONOMOUS UNDERWATER VEHICLES (AUVs)</b>
                    <ul>
                        <li>
                            used in the oil industry, e.g. to make
                            <span class="q-item" data-q="3">
                                <span class="q-number-box">3</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-10" class="q-text">
                            </span>
                        </li>
                        <li>
                            problems: they were expensive and
                            <span class="q-item" data-q="4">
                                <span class="q-number-box">4</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-11" class="q-text">
                            </span>
                        </li>
                    </ul>
                </li>

                <li>
                    <b>LATEST AUVs</b>
                    <ul>
                        <li>much easier to use, relatively cheap, sophisticated</li>
                        <li>
                            Marzamemi, Sicily: found ancient Roman ships carrying architectural elements made of
                            <span class="q-item" data-q="5">
                                <span class="q-number-box">5</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-12" class="q-text">
                            </span>
                        </li>
                    </ul>
                </li>

                <li>
                    <b>Underwater internet</b>
                    <ul>
                        <li>
                            <span class="q-item" data-q="6">
                                <span class="q-number-box">6</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-13" class="q-text">
                            </span>
                            is used for short distance communication, acoustic waves for long distance
                        </li>
                        <li>plans for communication with researchers by satellite</li>
                        <li>
                            AUV can send data to another AUV that has better
                            <span class="q-item" data-q="7">
                                <span class="q-number-box">7</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-14" class="q-text">
                            </span>,
                            for example
                        </li>
                    </ul>
                </li>

                <li>
                    <b>Planned research in Gulf of Baratti</b>
                    <ul>
                        <li>
                            one ship carrying
                            <span class="q-item" data-q="8">
                                <span class="q-number-box">8</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-15" class="q-text">
                            </span>
                            supplies; tablets may have been used for cleaning the
                            <span class="q-item" data-q="9">
                                <span class="q-number-box">9</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-16" class="q-text">
                            </span>
                        </li>
                        <li>
                            others carrying containers of olive oil or
                            <span class="q-item" data-q="10">
                                <span class="q-number-box">10</span>
                                <input type="text" name="5k29sSZyLQgQjLWX-17" class="q-text">
                            </span>
                        </li>
                    </ul>
                </li>

            </ul>


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
