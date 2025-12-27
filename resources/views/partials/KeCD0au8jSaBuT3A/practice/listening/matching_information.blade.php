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
                        <button class="start-btn" data-start="242" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <p>Questions 1-5</p>
                <p>What does the speaker suggest would be helpful for each of the following areas of voluntary work?</p>
                <p>
                    <i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to
                        Questions</i>
                </p>
                <p><b>Helpful things volunteers might offer</b></p>

                <ul style="list-style: none; padding-left: 0; margin-left: 0;">
                    <li><b>A</b> experience on stage</li>
                    <li><b>B</b> original, new ideas</li>
                    <li><b>C</b> parenting skills</li>
                    <li><b>D</b> an understanding of food and diet</li>
                    <li><b>E</b> retail experience</li>
                    <li><b>F</b> a good memory</li>
                    <li><b>G</b> a good level of fitness</li>
                </ul>
            </fieldset>

            <fieldset class="q-item">
                <h3><b>Area of voluntary work</b></h3>
            </fieldset>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">1</span>
                    <span style="flex: 1;">
                        Fundraising
                        <span class="q-question">
                            <select name="KeCD0au8jSaBuT3A-1" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="2">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">2</span>
                    <span style="flex: 1;">
                        Litter collection
                        <span class="q-question">
                            <select name="KeCD0au8jSaBuT3A-2" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="3">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">3</span>
                    <span style="flex: 1;">
                        ‘Playmates’
                        <span class="q-question">
                            <select name="KeCD0au8jSaBuT3A-3" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="4">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">4</span>
                    <span style="flex: 1;">
                        Story club
                        <span class="q-question">
                            <select name="KeCD0au8jSaBuT3A-4" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <fieldset class="q-item" data-q="5">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">5</span>
                    <span style="flex: 1;">
                        First aid
                        <span class="q-question">
                            <select name="KeCD0au8jSaBuT3A-5" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
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
