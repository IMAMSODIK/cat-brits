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
                        <button class="start-btn" data-start="232" type="button">
                            Listen From Here
                        </button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p><b>Questions 1–4</b></p>
                <p>
                    What problem does Joe mention in connection with each of the following band members?
                </p>
                <p>
                    <i>Choose <b>FOUR</b> answers from the box and write the correct letter, <b>A–F</b>, next to
                        questions.</i>
                </p>

                <p><b>Problems</b></p>
                <ul style="list-style: none; padding-left: 0; margin-left: 0;">
                    <li><b>A</b> makes a lot of mistakes in rehearsals</li>
                    <li><b>B</b> keeps making unhelpful suggestions</li>
                    <li><b>C</b> has difficulty with rhythm</li>
                    <li><b>D</b> misses too many rehearsals</li>
                    <li><b>E</b> has a health problem</li>
                    <li><b>F</b> doesn’t mix with other students</li>
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
                            <select name="YuuZXlhsVNh26gHr-7" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
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
                            <select name="YuuZXlhsVNh26gHr-8" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
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
                            <select name="YuuZXlhsVNh26gHr-9" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
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
                            <select name="YuuZXlhsVNh26gHr-10" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
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
