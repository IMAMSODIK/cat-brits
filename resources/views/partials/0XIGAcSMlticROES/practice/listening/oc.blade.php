@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-6</p>
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
                        <button class="start-btn" data-start="69" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-6</h3>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 1 -->
            <fieldset class="q-item" data-q="1">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    What made David leave London and move to Northsea?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-1" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">He was eager to develop a hobby.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-1" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">He wanted to work shorter hours.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-1" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">He found his job in website design unsatisfying.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 2 -->
            <fieldset class="q-item" data-q="2">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    The Lifeboat Institution in Northsea was built with money provided by
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-2" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">a local organisation.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-2" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">a local resident.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-2" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">the local council.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 3 -->
            <fieldset class="q-item" data-q="3">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    In his health assessment, the doctor was concerned about the fact that David
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-3" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">might be colour blind.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-3" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">was rather short-sighted.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-3" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">had undergone eye surgery.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 4 -->
            <fieldset class="q-item" data-q="4">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    After arriving at the lifeboat station, they aim to launch the boat within
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-4" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">five minutes.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-4" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">six to eight minutes.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-4" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">eight and a half minutes.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 5 -->
            <fieldset class="q-item" data-q="5">
                <legend class="q-text">
                    <span class="q-number">5</span>
                    As a ‘helmsman’, David has the responsibility of deciding
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-5" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">who will be the members of his crew.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-5" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">what equipment it will be necessary to take.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-5" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">if the lifeboat should be launched.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 6 -->
            <fieldset class="q-item" data-q="6">
                <legend class="q-text">
                    <span class="q-number">6</span>
                    As well as going out on the lifeboat, David
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-6" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">gives talks on safety at sea.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-6" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">helps with fundraising.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-6" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">recruits new volunteers.</span>
                    </label>
                </div>
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