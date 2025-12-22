@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section">
    <div class="qa highlighted-content" aria-label="Questions">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1-4</p>
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
                        <button class="start-btn" data-start="47" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-4</h3>
                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
            </fieldset>

            <!-- Question 7 -->
            <fieldset class="q-item" data-q="7">
                <legend class="q-text">
                    <span class="q-number">1</span>
                    At first, Don thought the topic of recycling footwear might be too
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-7" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">limited in scope.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-7" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">hard to research.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-7" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">boring for listeners.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 8 -->
            <fieldset class="q-item" data-q="8">
                <legend class="q-text">
                    <span class="q-number">2</span>
                    When discussing trainers, Bella and Don disagree about
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 8 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-8" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">how popular they are among young people.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-8" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">how suitable they are for school.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-8" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">how quickly they wear out.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 9 -->
            <fieldset class="q-item" data-q="9">
                <legend class="q-text">
                    <span class="q-number">3</span>
                    Bella says that she sometimes recycles shoes because
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 9 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-9" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">they no longer fit.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-9" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">she no longer likes them.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-9" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">they are no longer in fashion.</span>
                    </label>
                </div>
            </fieldset>

            <!-- Question 10 -->
            <fieldset class="q-item" data-q="10">
                <legend class="q-text">
                    <span class="q-number">4</span>
                    What did the article say that confused Don?
                </legend>
                <div class="q-options" role="radiogroup" aria-label="Question 10 options">
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-10" value="A" />
                        <span class="opt-code">A</span>
                        <span class="opt-label">Public consumption of footwear has risen.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-10" value="B" />
                        <span class="opt-code">B</span>
                        <span class="opt-label">Less footwear is recycled now than in the past.</span>
                    </label>
                    <label class="q-option">
                        <input type="radio" name="0XIGAcSMlticROES-10" value="C" />
                        <span class="opt-code">C</span>
                        <span class="opt-label">People dispose of more footwear than they used to.</span>
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