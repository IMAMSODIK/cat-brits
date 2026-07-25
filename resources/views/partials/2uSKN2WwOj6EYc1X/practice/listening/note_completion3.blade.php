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
                        <button class="start-btn" data-start="87" type="button">Start from
                            here</button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="q-item">
                <h3>Questions 1-10</h3>
                <p class="lead"><i>Complete the notes below.</i></p>
                <p>Write <strong>NO MORE THAN THREE WORDS AND/OR A NUMBER</strong> for each answer.</p>
            </fieldset>

            <div>
                <b>Novel:</b>
                <span class="q-number">1</span>
                <span style="flex:1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-14" class="q-text" />
                    </span>
                </span>

                <p><b>Protagonists:</b> Mary Lennox; Colin Craven</p>

                <b>Time period:</b> Early in the
                <span class="q-number">2</span>
                <span style="flex:1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-15" class="q-text" />
                    </span>
                </span>

                <p>Mary moves to the UK – meets Colin who thinks he’ll never be able to
                    <span class="q-number">3</span>
                    <span style="flex:1;">
                        <span class="q-question">
                            <input type="text" name="2uSKN2WwOj6EYc1X-16" class="q-text" />
                        </span>
                    </span>. They become friends.</p>

                <b>Point of view</b> “Omniscient” – narrator knows all about characters’ feelings, opinions and
                <span class="q-number">4</span>
                <span style="flex:1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-17" class="q-text" />
                    </span>
                </span>

                <p><b>Audience:</b> Good for children – story simple to follow</p>

                <b>Symbols</b> (physical items that represent
                <span class="q-number">5</span>
                <span style="flex:1;">
                    <span class="q-question">
                        <input type="text" name="2uSKN2WwOj6EYc1X-18" class="q-text" />
                    </span>
                </span>
                ):
                <ul>
                    <li>the robin redbreast</li>
                    <li>
                        <span class="q-number">6</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="2uSKN2WwOj6EYc1X-19" class="q-text" />
                            </span>
                        </span>
                    </li>
                    <li>the portrait of Mistress Craven</li>
                </ul>

                <b>Motifs</b> (patterns in the story):
                <ul class="completion-list">
                    <li>the Garden of Eden</li>
                    <li>
                        Secrecy – metaphorical and literal transition from
                        <span class="q-number">7</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="2uSKN2WwOj6EYc1X-20" class="q-text" />
                            </span>
                        </span>
                    </li>
                </ul>

                <b>Themes:</b> Connections between
                <ul>
                    <li>
                        <span class="q-number">8</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="2uSKN2WwOj6EYc1X-21" class="q-text" />
                            </span>
                        </span>
                        and outlook
                    </li>
                    <li>
                        <span class="q-number">9</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="2uSKN2WwOj6EYc1X-22" class="q-text" />
                            </span>
                        </span>
                        and well-being
                    </li>
                    <li>
                        Individuals and the need for
                        <span class="q-number">10</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="2uSKN2WwOj6EYc1X-23" class="q-text" />
                            </span>
                        </span>
                    </li>
                </ul>
            </div>

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
