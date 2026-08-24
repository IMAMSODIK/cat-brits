@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section highlighted-content" aria-label="Reading and Questions">
    <div class="qa">
        <form class="qa-body" id="form-{{ $tab['id'] }}">
            <fieldset class="q-item">
                <p class="lead">Listen and answer questions 1–5 </p>
                <div class="audio-player" data-player role="group" aria-label="Audio controls">
                    <audio preload="auto" src="{{ $tab['audioUri'] }}"></audio>
                    <div class="controls-container">
                        <button class="play-btn" type="button">
                            <i class="fas fa-play"></i>
                        </button>
                        <div class="seek-container">
                            <input type="range" min="0" max="100" value="0" class="seekBar">
                            <div class="timeText">
                                <span class="current">0:00</span>
                                <span class="duration">0:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="start-buttons">
                        <button class="start-btn" data-start="284" type="button">
                            Start from here
                        </button>
                    </div>
                </div>
            </fieldset>

            <fieldset class="q-item">
                <p>Questions 1–5</p>
                <p>Label the plan below.</p>
                <p>Write the correct letter, A-H, next to Questions</p>
            </fieldset>

            @php
                $options = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
            @endphp

            <div class="map-side-by-side">
                <div class="map-figure">
                    <p><b>Branley Castle</b></p>
                    <img src="{{ asset('own_assets/images/cambridge-ielts-14-academic-listening-test-2-16-20.jpg') }}"
                        alt="Branley Castle plan">
                </div>

                <div class="map-questions">
                    <fieldset class="q-item" data-q="1">
                        <legend class="q-text" style="display:flex;gap:6px;">
                            <span class="q-number">1</span>
                            <span style="flex:1;">
                                Starting point for walking the walls
                                <span class="q-question">
                                    <select name="nHmZBcocwalVytdH-1" class="q-dropdown">
                                        <option value=""></option>
                                        @foreach ($options as $opt)
                                            <option value="{{ $opt }}">{{ $opt }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </span>
                        </legend>
                    </fieldset>

                    <fieldset class="q-item" data-q="2">
                        <legend class="q-text" style="display:flex;gap:6px;">
                            <span class="q-number">2</span>
                            <span style="flex:1;">
                                Bow and arrow display
                                <span class="q-question">
                                    <select name="nHmZBcocwalVytdH-2" class="q-dropdown">
                                        <option value=""></option>
                                        @foreach ($options as $opt)
                                            <option value="{{ $opt }}">{{ $opt }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </span>
                        </legend>
                    </fieldset>

                    <fieldset class="q-item" data-q="3">
                        <legend class="q-text" style="display:flex;gap:6px;">
                            <span class="q-number">3</span>
                            <span style="flex:1;">
                                Hunting birds display
                                <span class="q-question">
                                    <select name="nHmZBcocwalVytdH-3" class="q-dropdown">
                                        <option value=""></option>
                                        @foreach ($options as $opt)
                                            <option value="{{ $opt }}">{{ $opt }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </span>
                        </legend>
                    </fieldset>

                    <fieldset class="q-item" data-q="4">
                        <legend class="q-text" style="display:flex;gap:6px;">
                            <span class="q-number">4</span>
                            <span style="flex:1;">
                                Traditional dancing
                                <span class="q-question">
                                    <select name="nHmZBcocwalVytdH-4" class="q-dropdown">
                                        <option value=""></option>
                                        @foreach ($options as $opt)
                                            <option value="{{ $opt }}">{{ $opt }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </span>
                        </legend>
                    </fieldset>

                    <fieldset class="q-item" data-q="5">
                        <legend class="q-text" style="display:flex;gap:6px;">
                            <span class="q-number">5</span>
                            <span style="flex:1;">
                                Shop
                                <span class="q-question">
                                    <select name="nHmZBcocwalVytdH-5" class="q-dropdown">
                                        <option value=""></option>
                                        @foreach ($options as $opt)
                                            <option value="{{ $opt }}">{{ $opt }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </span>
                        </legend>
                    </fieldset>
                </div>
            </div>

            <div style="text-align:center;">
                <button type="button" class="btn btn-primary try-again" id="again-plan_labeling" style="display:none">
                    Try Again
                </button>
                <button type="button" class="btn btn-primary" id="submit-plan_labeling">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
