<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.mock.listening.head')

<body>
    @include('ielts.sets.layouts.mock.listening.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">Part 1</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Part 2</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Part 3</button>
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Part 4</button>
        </div>
        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Part 1</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content">
                        <form class="qa-body">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage!</p>
                                <div class="audio-player">
                                    <audio
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- nc --}}
                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p><b>Complete the notes below.</b></p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Advice on Family Visit</b></p>

                                <p><b>Accommodation</b></p>
                                <p>
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="nc-4JIjUOPpLAJ2FYdl-1" data-q="1" data-type="nc" class="q-text" placeholder="">
                                    Hotel on George Street Cost of family room per night: £
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="nc-4JIjUOPpLAJ2FYdl-2" data-q="2" data-type="nc" class="q-text" placeholder="">
                                    (approx.)
                                </p>

                                <p><b>Recommended Trips</b></p>
                                <p>
                                    A
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="nc-4JIjUOPpLAJ2FYdl-3" data-q="3" data-type="nc" class="q-text" placeholder="">
                                    tour of the city centre (starts in Carlton Square) A trip by
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="nc-4JIjUOPpLAJ2FYdl-4" data-q="4" data-type="nc" class="q-text" placeholder="">
                                    to the old fort
                                </p>

                                <p><b>Science Museum</b></p>
                                <p>
                                    Best day to visit:
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="nc-4JIjUOPpLAJ2FYdl-5" data-q="5" data-type="nc" class="q-text" placeholder="">
                                    See the exhibition about
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="nc-4JIjUOPpLAJ2FYdl-6" data-q="6" data-type="nc" class="q-text" placeholder="">
                                    which opens soon
                                </p>

                                <p><b>Food</b></p>
                                <p>Clacton Market:</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="7" data-type="nc">
                                            Good for
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-4JIjUOPpLAJ2FYdl-7" class="q-text" placeholder="">
                                            food
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="8" data-type="nc">
                                            Need to have lunch before
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-4JIjUOPpLAJ2FYdl-8" class="q-text" placeholder="">
                                            p.m.
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Theatre Tickets</b></p>
                                <p>
                                    Save up to
                                    <span class="q-number-box">9</span>
                                    <input type="text" name="nc-4JIjUOPpLAJ2FYdl-9" data-q="9" data-type="nc" class="q-text" placeholder="">
                                    % on ticket prices at bargaintickets.com
                                </p>

                                <p><b>Free Activities</b></p>
                                <p>Blakewell Gardens:</p>
                                <ul>
                                    <li>Roots Music Festival</li>
                                    <li>
                                        <div class="q-list" data-q="10" data-type="nc">
                                            Climb Telegraph Hill to see a view of the
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-4JIjUOPpLAJ2FYdl-10" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 11-20</p>
                            <div class="audio-player">
                                <audio
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- two_choices 1 --}}
                        <fieldset class="q-item">
                            <p>Questions 11-12</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="11" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which <b>TWO</b> things does the speaker say about visiting the football stadium with children?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Children can get their photo taken with a football player</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">There is a competition for children today</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Parents must stay with their children at all times</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Children will need sunhats and drinks</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">The café has a special offer on meals for children</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- two_choices 2 --}}
                        <fieldset class="q-item">
                            <p>Questions 13-14</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="13" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                <span class="q-number">14</span>
                                Which <b>TWO</b> features of the stadium tour are new this year?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">VIP tour</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">360 cinema experience</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">audio guide</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">dressing room tour</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-3[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">tours in other languages</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <p>Questions 15-20</p>
                            <p>Which event in the history of football in the UK took place in each of the following years?</p>
                            <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to questions.</i></p>
                            <p><b>Events in the history of football</b></p>

                            <strong>A</strong>&nbsp;&nbsp; the introduction of pay for the players
                            <strong>B</strong>&nbsp;&nbsp; a change to the design of the goal<br>
                            <strong>C</strong>&nbsp;&nbsp; the first use of lights for matches<br>
                            <strong>D</strong>&nbsp;&nbsp; the introduction of goalkeepers<br>
                            <strong>E</strong>&nbsp;&nbsp; the first international match<br>
                            <strong>F</strong>&nbsp;&nbsp; two changes to the rules of the game<br>
                            <strong>G</strong>&nbsp;&nbsp; the introduction of a fee for spectators<br>
                            <strong>H</strong>&nbsp;&nbsp; an agreement on the length of a game<br>
                        </fieldset>

                        <fieldset class="q-item" data-q="15" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    1870 
                                    <span class="q-question">
                                        <select name="matching_information-4JIjUOPpLAJ2FYdl-1" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="16" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    1874 
                                    <span class="q-question">
                                        <select name="matching_information-4JIjUOPpLAJ2FYdl-2" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="17" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">17</span>
                                <span style="flex: 1;">
                                    1875 
                                    <span class="q-question">
                                        <select name="matching_information-4JIjUOPpLAJ2FYdl-3" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="18" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">18</span>
                                <span style="flex: 1;">
                                    1877 
                                    <span class="q-question">
                                        <select name="matching_information-4JIjUOPpLAJ2FYdl-4" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="19" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">19</span>
                                <span style="flex: 1;">
                                    1878 
                                    <span class="q-question">
                                        <select name="matching_information-4JIjUOPpLAJ2FYdl-5" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="20" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">20</span>
                                <span style="flex: 1;">
                                    1880 
                                    <span class="q-question">
                                        <select name="matching_information-4JIjUOPpLAJ2FYdl-6" class="q-dropdown">
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
                    </form>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Part 3</div>
                <div class="reading-section">
                    <div class="qa highlighted-content">
                        <form class="qa-body">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 21-30</p>
                                <div class="audio-player">
                                    <audio
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- two_choices 3 --}}
                            <fieldset class="q-item">
                                <p>Questions 21-22</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="21" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> benefits for children of learning to write did both students find surprising?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">improved fine motor skills</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">improved memory</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">improved concentration</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">improved imagination</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">improved spatial awareness</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- two_choices 4 --}}
                            <fieldset class="q-item">
                                <p>Questions 23-24</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="23" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    <span class="q-number">24</span>
                                    For children with dyspraxia, which <b>TWO</b> problems with handwriting do the students think are easiest to correct?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-7[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">not spacing letters correctly</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-7[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">not writing in a straight line</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-7[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">applying too much pressure when writing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-7[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">confusing letter shapes</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-4JIjUOPpLAJ2FYdl-7[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">writing very slowly</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- oc --}}
                            <fieldset class="q-item">
                                <p>Questions 25-30</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="25">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    What does the woman say about using laptops to teach writing to children with dyslexia?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Children often lack motivation to learn that way</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Children become fluent relatively quickly</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Children react more positively if they make a mistake</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="26">
                                <legend class="q-text">
                                    <span class="q-number">26</span>
                                    When discussing whether to teach cursive or print writing, the woman thinks that
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 26 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">cursive writing disadvantages a certain group of children</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">print writing is associated with lower academic performance</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">most teachers in the UK prefer a traditional approach to handwriting</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="27">
                                <legend class="q-text">
                                    <span class="q-number">27</span>
                                    According to the students, what impact does poor handwriting have on exam performance?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">There is evidence to suggest grades are affected by poor handwriting</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Neat handwriting is less important now than it used to be</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Candidates write more slowly and produce shorter answers</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="28">
                                <legend class="q-text">
                                    <span class="q-number">28</span>
                                    What prediction does the man make about the future of handwriting?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Touch typing will be taught before writing by hand</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Children will continue to learn to write by hand</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">People will dislike handwriting on digital devices</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="29">
                                <legend class="q-text">
                                    <span class="q-number">29</span>
                                    The woman is concerned that relying on digital devices has made it difficult for her to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">take detailed notes</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">spell and punctuate</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">read old documents</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="30">
                                <legend class="q-text">
                                    <span class="q-number">30</span>
                                    How do the students feel about their own handwriting?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">concerned they are unable to write quickly</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">embarrassed by comments made about it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-4JIjUOPpLAJ2FYdl-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">regretful that they have lost the habit</span>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Content: Part 4</div>
                <div class="qa highlighted-content">
                    <form class="qa-body">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 31-40</p>
                            <div class="audio-player">
                                <audio
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-4-audio-part-4.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- nc2 --}}
                        <fieldset class="q-item">
                            <p>Questions 31-40</p>
                            <p><b>Complete the notes below.</b></p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Research in the Area Around the Chem be Bird Sanctuary</b></p>
                            <p><b>The importance of birds of prey to local communities</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        They destroy
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-4JIjUOPpLAJ2FYdl-11" class="q-text" placeholder="">
                                        and other rodents.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="32">
                                        They help prevent farmers from being bitten by
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="nc-4JIjUOPpLAJ2FYdl-12" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>They have been an important part of local culture for many years.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="33">
                                        They now support the economy by encouraging
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="nc-4JIjUOPpLAJ2FYdl-13" class="q-text" placeholder="">
                                        in the area.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Falling numbers of birds of prey</b></p>
                            <ul>
                                <li>The birds may be accidentally killed:</li>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="34">
                                            By 
                                            <span class="q-number-box">34</span>
                                            <input type="text" name="nc-4JIjUOPpLAJ2FYdl-14" class="q-text" placeholder="">
                                            when hunting or sleeping.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="35">
                                            By electrocution from power lines, especially during times of high
                                            <span class="q-number-box">35</span>
                                            <input type="text" name="nc-4JIjUOPpLAJ2FYdl-15" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="36">
                                        Local farmers may illegally shoot them or
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-4JIjUOPpLAJ2FYdl-16" class="q-text" placeholder="">
                                        them.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Ways of protecting chickens from birds of prey</b></p>
                            <ul>
                                <li>Clearing away vegetation (unhelpful).</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        Providing a
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-4JIjUOPpLAJ2FYdl-17" class="q-text" placeholder="">
                                        for chickens (expensive).
                                    </div>
                                </li>
                                <li>Frightening birds of prey by:</li>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="38">
                                            Keeping a
                                            <span class="q-number-box">38</span>
                                            <input type="text" name="nc-4JIjUOPpLAJ2FYdl-18" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="39">
                                            Making a
                                            <span class="q-number-box">39</span>
                                            <input type="text" name="nc-4JIjUOPpLAJ2FYdl-19" class="q-text" placeholder="">
                                            (e.g., with metal objects).
                                        </div>
                                    </li>
                                </ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="40">
                                        A
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-4JIjUOPpLAJ2FYdl-20" class="q-text" placeholder="">
                                        of methods is usually most effective.
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.listening.component')
    @include('ielts.sets.layouts.mock.listening.script')
</body>

</html>
