@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-3</p>

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
                        <button class="start-btn" data-start="74" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-3</h3>
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>NO MORE THAN ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>
            <ul>
                <h3><b>Problems :</b></h3>
                <li>
                    Erosion
                </li>
                <li>
                    <span class="q-item" data-q="1">
                        <span class="q-number-box">1</span>
                        <input type="text" name="cwwPbLf22UsNEqIp-6" class="q-text" />
                    </span>
                    from various sources, including chemical fertilisers
                </li>
                <h3><b>Conventional farming methods:</b></h3>
                <li>
                    monoculture
                </li>
                <li>
                    synthetic fertiliser & chemicals used for<span class="q-item" data-q="2">
                        <span class="q-number-box">2</span>
                        <input type="text" name="cwwPbLf22UsNEqIp-7" class="q-text" />
                    </span>
                </li>
                <li>
                    genetically modified seeds
                </li>
                <li>
                    pesticide fungicide sprayed on crops after picking
                </li>
                <li>
                    no need for documentation of<span class="q-number-box">3</span>
                    <input type="text" name="cwwPbLf22UsNEqIp-8" class="q-text" />
                    </span>
                </li>
                <h3><b>Organic farming methods:</b></h3>
                <li>
                    crop rotation
                </li>
                <li>
                    covering crops
                </li>
                <li>
                    use of insects as natural<span class="q-number-box">4</span>
                    <input type="text" name="cwwPbLf22UsNEqIp-9" class="q-text" />
                    </span>
                </li>
                <li>
                    addition of manure & green waste
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
