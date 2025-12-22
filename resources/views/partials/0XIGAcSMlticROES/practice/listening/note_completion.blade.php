@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead"><strong>Part 1:</strong> Listen and answer questions 1-10</p>

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
                        <button class="start-btn" data-start="72" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p class="lead"><i>Complete The Note Below</i></p>
                <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
            </fieldset>

            <h3>Introduction</h3>
            <ul style="padding-left:18px;">
                <li>More than 1,000 species, 0.05–1.2 millimetres long.</li>
                <li>
                    Also known as water ‘bears’ (due to how they
                    <div class="q-item" data-q="1" style="display:inline-block;">
                        <span class="q-number-box">1</span>
                        <input type="text" name="0XIGAcSMlticROES-1" class="q-text" placeholder="">
                    </div>)
                    and ‘moss piglets’.
                </li>
            </ul>

            <h3>Physical appearance</h3>
            <ul style="padding-left:18px;">
                <li>A
                    <div class="q-item" data-q="2" style="display:inline-block;">
                        <span class="q-number-box">2</span>
                        <input type="text" name="0XIGAcSMlticROES-2" class="q-text" placeholder="">
                    </div>
                    round body and four pairs of legs
                </li>
                <li>Claws or
                    <div class="q-item" data-q="3" style="display:inline-block;">
                        <span class="q-number-box">3</span>
                        <input type="text" name="0XIGAcSMlticROES-3" class="q-text" placeholder="">
                    </div>
                    for gripping
                </li>
                <li>Absence of respiratory organs</li>
                <li>Body filled with a liquid that carries both
                    <div class="q-item" data-q="4" style="display:inline-block;">
                        <span class="q-number-box">4</span>
                        <input type="text" name="0XIGAcSMlticROES-4" class="q-text" placeholder="">
                    </div>
                    and blood
                </li>
                <li>Mouth shaped like a
                    <div class="q-item" data-q="5" style="display:inline-block;">
                        <span class="q-number-box">5</span>
                        <input type="text" name="0XIGAcSMlticROES-5" class="q-text" placeholder="">
                    </div>
                    with teeth called stylets
                </li>
            </ul>

            <h3>Habitat</h3>
            <ul style="padding-left:18px;">
                <li>Often found at the bottom of a lake or on plants</li>
                <li>Very resilient and can exist in very low or high
                    <div class="q-item" data-q="6" style="display:inline-block;">
                        <span class="q-number-box">6</span>
                        <input type="text" name="0XIGAcSMlticROES-6" class="q-text" placeholder="">
                    </div>
                </li>
            </ul>

            <h3>Cryptobiosis</h3>
            <ul style="padding-left:18px;">
                <li>In dry conditions, they roll into a ball called a ‘tun’</li>
                <li>They stay alive with a much lower metabolism than usual</li>
                <li>A type of
                    <div class="q-item" data-q="7" style="display:inline-block;">
                        <span class="q-number-box">7</span>
                        <input type="text" name="0XIGAcSMlticROES-7" class="q-text" placeholder="">
                    </div>
                    ensures their DNA is not damaged
                </li>
                <li>Research is underway to find out how many days they can stay alive in
                    <div class="q-item" data-q="8" style="display:inline-block;">
                        <span class="q-number-box">8</span>
                        <input type="text" name="0XIGAcSMlticROES-8" class="q-text" placeholder="">
                    </div>
                </li>
            </ul>

            <h3>Feeding</h3>
            <ul style="padding-left:18px;">
                <li>Consume liquids, e.g., those found in moss or
                    <div class="q-item" data-q="9" style="display:inline-block;">
                        <span class="q-number-box">9</span>
                        <input type="text" name="0XIGAcSMlticROES-9" class="q-text" placeholder="">
                    </div>
                </li>
                <li>May eat other tardigrades</li>
            </ul>

            <h3>Conservation status</h3>
            <ul style="padding-left:18px;">
                <li>They are not considered to be
                    <div class="q-item" data-q="10" style="display:inline-block;">
                        <span class="q-number-box">10</span>
                        <input type="text" name="0XIGAcSMlticROES-10" class="q-text" placeholder="">
                    </div>
                </li>
            </ul>


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