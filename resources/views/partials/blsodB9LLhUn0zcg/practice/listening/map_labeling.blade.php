@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-6</p>
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
                        <button class="start-btn" data-start="240" type="button">Start from here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-6</p>
                <p>Label the map below.</p>
                <p>Write the correct letter, <b>A</b>–<b>J</b>, next to Questions.</p>
                <img src="{{ asset('own_assets/images/cambridge-ielts-16-academic-listening-test-1-15-20.jpg') }}"
                    alt="Plan of Stevenson’s site">
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
                    <span class="q-number">1</span>
                    <span style="flex:1;">
                        coffee room
                        <span class="q-question">
                            <select name="blsodB9LLhUn0zcg-1" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
                    <span class="q-number">2</span>
                    <span style="flex:1;">
                        warehouse
                        <span class="q-question">
                            <select name="blsodB9LLhUn0zcg-2" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
                    <span class="q-number">3</span>
                    <span style="flex:1;">
                        staff canteen
                        <span class="q-question">
                            <select name="blsodB9LLhUn0zcg-3" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
                    <span class="q-number">4</span>
                    <span style="flex:1;">
                        meeting room
                        <span class="q-question">
                            <select name="blsodB9LLhUn0zcg-4" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <!-- Question 5 -->
            <fieldset class="q-item" data-q="5">
                <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
                    <span class="q-number">5</span>
                    <span style="flex:1;">
                        human resources
                        <span class="q-question">
                            <select name="blsodB9LLhUn0zcg-5" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <!-- Question 6 -->
            <fieldset class="q-item" data-q="6">
                <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
                    <span class="q-number">6</span>
                    <span style="flex:1;">
                        boardroom
                        <span class="q-question">
                            <select name="blsodB9LLhUn0zcg-6" class="q-dropdown">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                            </select>
                        </span>
                    </span>
                </legend>
            </fieldset>

            <div style="text-align:center;">
                <button type="button" class="btn btn-primary try-again" id="again-{{ $tab['id'] }}"
                    style="display:none">
                    Try Again
                </button>
                <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
