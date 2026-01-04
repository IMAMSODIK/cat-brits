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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- nc --}}
                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p><b>Complete the notes below.</b></p>
                                <p>Write <b>ONE WORD</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Easy Life Cleaning Services</h3>

                                <p><b>Basic cleaning package offered</b></p>
                                <ul>
                                    <li>Cleaning all surfaces</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="1">
                                            Cleaning the
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-15gOXcE7omDCL1uE-1" class="q-text" placeholder="">
                                            throughout the apartment
                                        </div>
                                    </li>
                                    <li>Cleaning shower, sinks, toilet etc.</li>
                                </ul>

                                <p><b>Additional services agreed</b></p>
                                <ul>
                                    <li>Every week</li>
                                </ul>
                                
                                <p>
                                    <div class="q-list" data-type="nc" data-q="2">
                                        –  Cleaning the
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-2" class="q-text" placeholder="">
                                    </div>
                                </p>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="3">
                                        –  Ironing clothes –
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-3" class="q-text" placeholder="">
                                        only
                                    </div>
                                    <ul>
                                        <li>Every month</li>
                                    </ul>
                                </p>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="4">
                                        –  Cleaning all the
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-4" class="q-text" placeholder="">
                                        from the inside
                                    </div>
                                </p>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="5">
                                        –  Washing down the
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-5" class="q-text" placeholder="">
                                    </div>
                                </p>

                                <p><b>Other possibilities</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="6">
                                            They can organise a plumber or an
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-15gOXcE7omDCL1uE-6" class="q-text" placeholder="">
                                            if necessary.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="7">
                                            A special cleaning service is available for customers who are allergic to
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-15gOXcE7omDCL1uE-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Information on the cleaners</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="8">
                                            Before being hired, all cleaners have a background check carried out by the
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-15gOXcE7omDCL1uE-8" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>References are required.</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="9">
                                            All cleaners are given 
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-15gOXcE7omDCL1uE-9" class="q-text" placeholder="">
                                            for two weeks.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="10">
                                            Customers send a
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-15gOXcE7omDCL1uE-10" class="q-text" placeholder="">
                                            after each visit.
                                        </div>
                                    </li>
                                    <li>Usually, each customer has one regular cleaner.</li>
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 11-14</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                Many hotel managers are unaware that their staff often leave because of
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">a lack of training.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">long hours.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">low pay.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                What is the impact of high staff turnover on managers?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">an increased workload</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">low morale</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">an inability to meet targets</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                What mistake should managers always avoid?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">failing to treat staff equally</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">reorganising shifts without warning</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">neglecting to have enough staff during busy periods</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                What unexpected benefit did Dunwich Hotel notice after improving staff retention rates?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">a fall in customer complaints</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">an increase in loyalty club membership</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-15gOXcE7omDCL1uE-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">a rise in spending per customer</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <h3>Questions 15-20</h3>
                            <p>Which way of reducing staff turnover was used in each of the following hotels?</p>
                            <p><i>Write the correct letter, <b>A</b>, <b>B</b> or <b>C</b>, next to Questions.</i></p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Ways of reducing staff turnover</h3>
                            <p><b>A</b> improving relationships and teamwork</p>
                            <p><b>B</b> offering incentives and financial benefits</p>
                            <p><b>C</b> providing career opportunities</p>
                        </fieldset>

                        <p><b>Hotels</b></p>

                        <fieldset class="q-item" data-type="matching_information" data-q="15">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    The Sun Club 
                                    <span class="q-question">
                                        <select name="matching_information-15gOXcE7omDCL1uE-1" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="16">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    The Portland
                                    <span class="q-question">
                                        <select name="matching_information-15gOXcE7omDCL1uE-2" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="17">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">17</span>
                                <span style="flex: 1;">
                                    Bluewater Hotels
                                    <span class="q-question">
                                        <select name="matching_information-15gOXcE7omDCL1uE-3" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="18">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">18</span>
                                <span style="flex: 1;">
                                    Pentlow Hotels
                                    <span class="q-question">
                                        <select name="matching_information-15gOXcE7omDCL1uE-4" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="19">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">19</span>
                                <span style="flex: 1;">
                                    Green Planet
                                    <span class="q-question">
                                        <select name="matching_information-15gOXcE7omDCL1uE-5" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="20">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 206px;">
                                <span class="q-number">20</span>
                                <span style="flex: 1;">
                                    The Amesbury
                                    <span class="q-question">
                                        <select name="matching_information-15gOXcE7omDCL1uE-6" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 21-22</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> points do Thomas and Jeanne make about Thomas’s sporting activities at school?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">He should have felt more positive about them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The training was too challenging for him.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">He could have worked harder at them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">His parents were disappointed in him.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">His fellow students admired him.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 23-24</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    <span class="q-number">24</span>
                                    Which <b>TWO</b> feelings did Thomas experience when he was in Kenya?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">disbelief</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">relief</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">stress</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">gratitude</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-15gOXcE7omDCL1uE-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">homesickness</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <h3>Questions 25-30</h3>
                                <p>What comment do the students make about the development of each of the following items of sporting equipment?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Comments about the development of the equipment</h3>
                                <p><b>A</b> It could cause excessive sweating.</p>
                                <p><b>B</b> The material was being mass produced for another purpose.</p>
                                <p><b>C</b> People often needed to make their own.</p>
                                <p><b>D</b> It often had to be replaced.</p>
                                <p><b>E</b> The material was expensive.</p>
                                <p><b>F</b> It was unpopular among spectators.</p>
                                <p><b>G</b> It caused injuries.</p>
                                <p><b>H</b> No one ring it liked it at first.</p>
                            </fieldset>

                            <p><b>Items of sporting equipment</b></p>

                            <fieldset class="q-item" data-type="matching_information" data-q="25">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">25</span>
                                    <span style="flex: 1;">
                                        the table tennis bat
                                        <span class="q-question">
                                            <select name="matching_information-15gOXcE7omDCL1uE-7" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="26">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">26</span>
                                    <span style="flex: 1;">
                                        the cricket helmet
                                        <span class="q-question">
                                            <select name="matching_information-15gOXcE7omDCL1uE-8" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="27">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">27</span>
                                    <span style="flex: 1;">
                                        the cycle helmet 
                                        <span class="q-question">
                                            <select name="matching_information-15gOXcE7omDCL1uE-9" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="28">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">28</span>
                                    <span style="flex: 1;">
                                        the golf club
                                        <span class="q-question">
                                            <select name="matching_information-15gOXcE7omDCL1uE-10" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="29">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">29</span>
                                    <span style="flex: 1;">
                                        the hockey stick 
                                        <span class="q-question">
                                            <select name="matching_information-15gOXcE7omDCL1uE-11" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="30">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">30</span>
                                    <span style="flex: 1;">
                                        the football 
                                        <span class="q-question">
                                            <select name="matching_information-15gOXcE7omDCL1uE-12" class="q-dropdown">
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
            </div>
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Content: Part 4</div>
                <div class="qa highlighted-content">
                    <form class="qa-body">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 31-40</p>
                            <div class="audio-player">
                                <audio
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-4-audio-4.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 31-40</p>
                            <p><b>Complete the notes below.</b></p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Maple syrup</h3>
                            <p><b>What is maple syrup?</b></p>
                            <ul>
                                <li>made from the sap of the maple tree</li>
                                <li>added to food or used in cooking</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        colour described as
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-11" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="32">
                                        very 
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-12" class="q-text" placeholder="">
                                        compared to refined sugar
                                    </div>
                                </li>
                            </ul>

                            <p><b>The maple tree</b></p>
                            <ul>
                                <li>has many species</li>
                                <li>needs sunny days and cool nights</li>
                                <li>maple leaf has been on the Canadian flag since 1964</li>
                                <li>needs moist soil but does not need fertiliser as well</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="33">
                                        best growing conditions and
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-13" class="q-text" placeholder="">
                                        are in Canada and North America
                                    </div>
                                </li>
                            </ul>

                            <p><b>Early maple sugar producers</b></p>
                            <ul>
                                <li>made holes in the tree trunks</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="34">
                                        used hot
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-14" class="q-text" placeholder="">
                                        to heat the sap
                                    </div>
                                </li>
                                <li>used tree bark to make containers for collection</li>
                                <li>sweetened food and drink with sugar</li>
                            </ul>

                            <p><b>Today’s maple syrup</b></p>

                            <p><i>The trees</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="35">
                                        Tree trunks may not have the correct
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-15" class="q-text" placeholder="">
                                        until they have been growing for 40 years.
                                    </div>
                                </li>
                                <li>The changing temperature and movement of water within the tree produces the sap.</li>
                            </ul>

                            <p><i>The production</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="36">
                                        A tap drilled into the trunk and a 
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-16" class="q-text" placeholder="">
                                        carries the sap into a bucket.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        Large pans of sap called evaporators are heated by means of a 
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-17" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="38">
                                        A lot of
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-18" class="q-text" placeholder="">
                                        is produced during the evaporation process.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="39">
                                        ‘Sugar sand’ is removed because it makes the syrup look
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-19" class="q-text" placeholder="">
                                        and affects the taste.
                                    </div>
                                </li>
                                <li>The syrup is ready for use.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="40">
                                        A huge quantity of sap is needed to make a
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-15gOXcE7omDCL1uE-20" class="q-text" placeholder="">
                                        of maple syrup.
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
