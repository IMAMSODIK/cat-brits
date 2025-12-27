@props(['tab'])

<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Part 1: Listen and answer questions 1–4</p>

                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                    <audio preload="auto" src="{{ $tab['audioUri'] }}"></audio>

                    <div class="controls-container">
                        <button class="play-btn" type="button"><i class="fas fa-play"></i></button>
                        <div class="seek-container">
                            <input type="range" min="0" max="100" value="0" class="seekBar">
                            <div class="timeText">
                                <span class="current">0:00</span>
                                <span class="duration">0:00</span>
                            </div>
                        </div>
                    </div>

                    <div class="start-buttons">
                        <button class="start-btn" data-start="200" type="button">
                            Listen From Here
                        </button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p><b>Questions 1–5</b></p>
                <p>
                    Which opinion do the speakers give about each of the following aspects of The Emporium’s production
                    of Romeo and Juliet?
                </p>
                <p>
                    <i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A–G</b>, next to
                        questions.</i>
                </p>
                <p><b>Opinions</b></p>
                <ul style="list-style: none; padding-left: 0; margin-left: 0;">
                    <li><b>A</b> They both expected this to be more traditional.</li>
                    <li><b>B</b> They both thought this was original.</li>
                    <li><b>C</b> They agree this created the right atmosphere.</li>
                    <li><b>D</b> They agree this was a major strength.</li>
                    <li><b>E</b> They were both disappointed by this.</li>
                    <li><b>F</b> They disagree about why this was an issue.</li>
                    <li><b>G</b> They disagree about how this could be improved.</li>
                </ul>
            </fieldset>

            <fieldset class="q-item">
                <h3><b>Band members</b></h3>
            </fieldset>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                    <span class="q-number">1</span>
                    <span style="flex: 1;">
                        flautist
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-7" class="q-dropdown">
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
                        trumpeter
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-8" class="q-dropdown">
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
                        trombonist
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-9" class="q-dropdown">
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
                        percussionist
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-10" class="q-dropdown">
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
                        percussionist
                        <span class="q-question">
                            <select name="DPCLyNHpDTqSciXd-11" class="q-dropdown">
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
