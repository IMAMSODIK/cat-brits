@props(['tab'])

<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-6</p>
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
                        <button class="start-btn" data-start="297" type="button">
                            Start from here
                        </button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1-6</p>
                <p>
                    What action will the students take for each of the following sections of their presentation?
                </p>
                <p>
                    <i>
                        Choose SIX answers from the box and write the correct letter,
                        <b>A–H</b>, next to Questions.
                    </i>
                </p>

                <p><b>Actions</b></p>
                <ul style="list-style:none;padding-left:0;margin-left:0;">
                    <li><b>A</b> make it more interactive</li>
                    <li><b>B</b> reduce visual input</li>
                    <li><b>C</b> add personal opinions</li>
                    <li><b>D</b> contact one of the researchers</li>
                    <li><b>E</b> make detailed notes</li>
                    <li><b>F</b> find information online</li>
                    <li><b>G</b> check timing</li>
                    <li><b>H</b> organise the content more clearly</li>
                </ul>
            </fieldset>

            <fieldset class="q-item">
                <h3><b>Sections of presentation</b></h3>
            </fieldset>

            <fieldset class="q-item" data-q="1">
                <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
                    <span class="q-number">1</span>
                    <span style="flex:1;">
                        Introduction
                        <span class="q-question">
                            <select name="nHmZBcocwalVytdH-1" class="q-dropdown">
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
                <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
                    <span class="q-number">2</span>
                    <span style="flex:1;">
                        Discovery of the mammoth tooth
                        <span class="q-question">
                            <select name="nHmZBcocwalVytdH-2" class="q-dropdown">
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
                <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
                    <span class="q-number">3</span>
                    <span style="flex:1;">
                        Initial questions asked by the researchers
                        <span class="q-question">
                            <select name="nHmZBcocwalVytdH-3" class="q-dropdown">
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
                <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
                    <span class="q-number">4</span>
                    <span style="flex:1;">
                        Further research carried out on the island
                        <span class="q-question">
                            <select name="nHmZBcocwalVytdH-4" class="q-dropdown">
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
                <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
                    <span class="q-number">5</span>
                    <span style="flex:1;">
                        Findings and possible explanations
                        <span class="q-question">
                            <select name="nHmZBcocwalVytdH-5" class="q-dropdown">
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
                <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
                    <span class="q-number">6</span>
                    <span style="flex:1;">
                        Relevance to the present day
                        <span class="q-question">
                            <select name="nHmZBcocwalVytdH-6" class="q-dropdown">
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
