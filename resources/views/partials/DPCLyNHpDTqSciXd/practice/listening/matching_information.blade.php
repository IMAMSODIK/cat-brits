@props(['tab'])

<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-6</p>
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
                        <button class="start-btn" data-start="276" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p>Questions 1-6</p>
                <p>Which activity is offered at each of the following locations on the farm?</p>
                <p>
                    <i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to
                        Questions</i>
                </p>
                <h3><b>Activities</b></h3>
                <ul style="list-style: none; padding-left: 0; margin-left: 0;">
                    <li><b>A</b> shopping</li>
                    <li><b>B</b> watching cows being milked</li>
                    <li><b>C</b> seeing old farming equipment</li>
                    <li><b>D</b> eating and drinking</li>
                    <li><b>E</b> starting a trip</li>
                    <li><b>F</b> seeing rare breeds of animals</li>
                    <li><b>G</b> helping to look after animals</li>
                    <li><b>H</b> using farming tools</li>
                </ul>
            </fieldset>

            <fieldset class="q-item">
                <h3><b>Locations on the farm</b></h3>
            </fieldset>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">1</span>
                    <span style="flex: 1;">
                        dairy
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-1" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="2">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">2</span>
                    <span style="flex: 1;">
                        large barn
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-2" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="3">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">3</span>
                    <span style="flex: 1;">
                        small barn
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-3" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="4">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">4</span>
                    <span style="flex: 1;">
                        stables
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-4" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="5">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">5</span>
                    <span style="flex: 1;">
                        shed
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-5" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="6">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">6</span>
                    <span style="flex: 1;">
                        parkland
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-6" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>


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
