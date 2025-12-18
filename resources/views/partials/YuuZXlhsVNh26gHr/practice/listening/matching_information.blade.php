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
                        <button class="start-btn" data-start="231" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p>Questions 1-6</p>
                <p>What information does the speaker give about each of the following areas of the museum?</p>
                <p><i>Choose SIX answers from the box and write the correct letter, <b>A–H</b>, next to questions.</i>
                </p>
                <p><b>Information</b></p>

                <ul style="list-style: none; padding-left: 0; margin-left: 0;">
                    <li><b>A</b> Parents must supervise their children.</li>
                    <li><b>B</b> There are new things to see.</li>
                    <li><b>C</b> It is closed today.</li>
                    <li><b>D</b> This is only for school groups.</li>
                    <li><b>E</b> There is a quiz for visitors.</li>
                    <li><b>F</b> It features something created by students.</li>
                    <li><b>G</b> An expert is here today.</li>
                    <li><b>H</b> There is a one-way system.</li>
                </ul>
            </fieldset>

            <fieldset class="q-item">
                <h3><b>Areas of the Museum</b></h3>
            </fieldset>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">1</span>
                    <span style="flex: 1;">
                        Four Seasons
                        <span class="q-question">
                            <select name="yPLnQeqINAxbrnva-1" class="q-dropdown">
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
                        Farmhouse Kitchen
                        <span class="q-question">
                            <select name="yPLnQeqINAxbrnva-2" class="q-dropdown">
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
                        A Year on the Farm
                        <span class="q-question">
                            <select name="yPLnQeqINAxbrnva-3" class="q-dropdown">
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
                        Wagon Walk
                        <span class="q-question">
                            <select name="yPLnQeqINAxbrnva-4" class="q-dropdown">
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
                        Bees are Magic
                        <span class="q-question">
                            <select name="yPLnQeqINAxbrnva-5" class="q-dropdown">
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
                        The Pond
                        <span class="q-question">
                            <select name="yPLnQeqINAxbrnva-6" class="q-dropdown">
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