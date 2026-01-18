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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-3-audio-1.mp3"></audio>
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
                                <h3>Advice on surfing holidays</h3>

                                <p><b>Jack’s advice</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="1">
                                            Recommends surfing for
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-wq6xHskL3uTj5VSU-1" class="q-text" placeholder="">
                                            holidays in the summer
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="2">
                                            Need to be quite
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-wq6xHskL3uTj5VSU-2" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Irish surfing locations</p>
                                <ul>
                                    <li>County Clare</li>
                                </ul>
                                
                                <p>
                                    <div class="q-list" data-type="nc" data-q="3">
                                        –  Lahinch has some good quality
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-3" class="q-text" placeholder="">
                                        and surf schools
                                    </div>
                                </p>

                                <p>There are famous cliffs nearby</p>
                                <ul>
                                    <li>County Mayo</li>
                                </ul>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="4">
                                        – Good surf school at
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-4" class="q-text" placeholder="">
                                        beach
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="5">
                                        – Surf camp lasts for one
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-5" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="6">
                                        – Can also explore the local
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-6" class="q-text" placeholder="">
                                        by kayak
                                    </div>
                                </p>

                                <p><b>Weather</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="7">
                                            Best month to go:
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-wq6xHskL3uTj5VSU-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="8">
                                            Average temperature in summer: approx.
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-wq6xHskL3uTj5VSU-8" class="q-text" placeholder="">
                                            degrees
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Costs</b></p>
                                <ul>
                                    <li>Equipment</li>
                                </ul>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="9">
                                        – Wetsuit and surfboard:
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-9" class="q-text" placeholder="">
                                        euros per day
                                    </div>
                                </p>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="10">
                                        – Also advisable to hire
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-10" class="q-text" placeholder="">
                                        for warmth
                                    </div>
                                </p>

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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-3-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- two_chocies --}}
                        <fieldset class="q-item">
                            <p>Questions 11-12</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="11" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which <b>TWO</b> facts are given about the school’s extended hours childcare service?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_chocies-wq6xHskL3uTj5VSU-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It started recently.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_chocies-wq6xHskL3uTj5VSU-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">More children attend after school than before school.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_chocies-wq6xHskL3uTj5VSU-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">An average of 50 children attend in the mornings.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_chocies-wq6xHskL3uTj5VSU-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">A child cannot attend both the before and after school sessions.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_chocies-wq6xHskL3uTj5VSU-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">The maximum number of children who can attend is 70.</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 13-15</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Boat trip round Tasmania</b></p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                How much does childcare cost for a complete afternoon session per child?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">£3.50</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">£5.70</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">£7.20</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                What does the manager say about food?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Children with allergies should bring their own food.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Children may bring healthy snacks with them.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Children are given a proper meal at 5 p.m.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                What is different about arrangements in the school holidays?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Children from other schools can attend.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Older children can attend.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-wq6xHskL3uTj5VSU-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">A greater number of children can attend.</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <h3>Questions 16-20</h3>
                            <p>What information is given about each of the following activities on offer?</p>
                            <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions.</i></p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Information</h3>
                            <p><b>A</b> has limited availability</p>
                            <p><b>B</b> is no longer available</p>
                            <p><b>C</b> is for over 8s only</p>
                            <p><b>D</b> requires help from parents</p>
                            <p><b>E</b> involves an additional fee</p>
                            <p><b>F</b> is a new activity</p>
                            <p><b>G</b> was requested by children</p>
                        </fieldset>

                        <p><b>Activities</b></p>

                        <fieldset class="q-item" data-type="matching_information" data-q="16">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    Spanish 
                                    <span class="q-question">
                                        <select name="matching_information-wq6xHskL3uTj5VSU-1" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="17">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">17</span>
                                <span style="flex: 1;">
                                    Music 
                                    <span class="q-question">
                                        <select name="matching_information-wq6xHskL3uTj5VSU-2" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="18">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">18</span>
                                <span style="flex: 1;">
                                    Painting 
                                    <span class="q-question">
                                        <select name="matching_information-wq6xHskL3uTj5VSU-3" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="19">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">19</span>
                                <span style="flex: 1;">
                                    Yoga 
                                    <span class="q-question">
                                        <select name="matching_information-wq6xHskL3uTj5VSU-4" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="20">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">20</span>
                                <span style="flex: 1;">
                                    Cooking 
                                    <span class="q-question">
                                        <select name="matching_information-wq6xHskL3uTj5VSU-5" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-3-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 21-24</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Holly’s Work Placement Tutorial</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    Holly has chosen the Orion Stadium placement because
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">it involves children.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">it is outdoors.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">it sounds like fun.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    Which aspect of safety does Dr Green emphasise most?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">ensuring children stay in the stadium</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">checking the equipment children will use</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">removing obstacles in changing rooms</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    What does Dr Green say about the spectators?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">They can be hard to manage.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They make useful volunteers.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They shouldn’t take photographs.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    What has affected the schedule in the past?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">bad weather</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">an injury</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-wq6xHskL3uTj5VSU-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">extra time</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <h3>Questions 25-30</h3>
                                <p>What do Holly and her tutor agree is an important aspect of each of the following events management skills?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Important aspects</h3>
                                <p><b>A</b> being flexible</p>
                                <p><b>B</b> focusing on details</p>
                                <p><b>C</b> having a smart appearance</p>
                                <p><b>D</b> hiding your emotions</p>
                                <p><b>E</b> relying on experts</p>
                                <p><b>F</b> trusting your own views</p>
                                <p><b>G</b> doing one thing at a time</p>
                                <p><b>H</b> thinking of the future</p>
                            </fieldset>

                            <p><b>Events management skills</b></p>

                            <fieldset class="q-item" data-type="matching_information" data-q="25">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">25</span>
                                    <span style="flex: 1;">
                                        Communication  
                                        <span class="q-question">
                                            <select name="matching_information-wq6xHskL3uTj5VSU-6" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="26">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">26</span>
                                    <span style="flex: 1;">
                                        Organisation  
                                        <span class="q-question">
                                            <select name="matching_information-wq6xHskL3uTj5VSU-7" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="27">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">27</span>
                                    <span style="flex: 1;">
                                        Time management 
                                        <span class="q-question">
                                            <select name="matching_information-wq6xHskL3uTj5VSU-8" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="28">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">28</span>
                                    <span style="flex: 1;">
                                        Creativity  
                                        <span class="q-question">
                                            <select name="matching_information-wq6xHskL3uTj5VSU-9" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="29">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">29</span>
                                    <span style="flex: 1;">
                                        Leadership  
                                        <span class="q-question">
                                            <select name="matching_information-wq6xHskL3uTj5VSU-10" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="30">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 30px;">
                                    <span class="q-number">6</span>
                                    <span style="flex: 1;">
                                        Networking  
                                        <span class="q-question">
                                            <select name="matching_information-wq6xHskL3uTj5VSU-11" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-3-audio-4.mp3"></audio>
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
                            <h3>Bird Migration Theory</h3>
                            <p>Most birds are believed to migrate seasonally.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Hibernation theory</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        It was believed that birds hibernated underwater or buried themselves in
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-11" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>This theory was later disproved by experiments on caged birds.</li>
                            </ul>

                            <p><b>Transmutation theory</b></p>
                            <ul>
                                <li>Aristotle believed birds changed from one species into another in summer and winter.</li>
                            </ul>

                            <p>
                                <div class="q-list" data-type="nc" data-q="32">
                                    – In autumn he observed that redstarts experience the loss of
                                    <span class="q-number-box">32</span>
                                    <input type="text" name="nc-wq6xHskL3uTj5VSU-12" class="q-text" placeholder="">
                                    and thought they then turned into robins.
                                </div>
                            </p>

                            <p>
                                <div class="q-list" data-type="nc" data-q="33">
                                    – Aristotle’s assumptions were logical because the two species of birds had a similar
                                    <span class="q-number-box">33</span>
                                    <input type="text" name="nc-wq6xHskL3uTj5VSU-13" class="q-text" placeholder="">
                                </div>
                            </p>

                            <p><b>17th century</b></p>

                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="34">
                                        Charles Morton popularised the idea that birds fly to the
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-14" class="q-text" placeholder="">
                                        in winter.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Scientific developments</b></p>

                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="35">
                                        In 1822, a stork was killed in Germany which had an African spear in its
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-15" class="q-text" placeholder="">
                                        in winter.
                                    </div>
                                </li>
                            </ul>

                            <p>
                                <div class="q-list" data-type="nc" data-q="36">
                                    – previously there had been no
                                    <span class="q-number-box">36</span>
                                    <input type="text" name="nc-wq6xHskL3uTj5VSU-16" class="q-text" placeholder="">
                                    that storks migrate to Africa
                                </div>
                            </p>

                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        Little was known about the
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-17" class="q-text" placeholder="">
                                        and journeys of migrating birds until the practice of ringing was established.
                                    </div>
                                </li>
                            </ul>  

                            <p>
                                <div class="q-list" data-type="nc" data-q="38">
                                    – It was thought large birds carried small birds on some journeys because they were considered incapable of travelling across huge
                                    <span class="q-number-box">38</span>
                                    <input type="text" name="nc-wq6xHskL3uTj5VSU-18" class="q-text" placeholder="">
                                </div>
                            </p>

                            <p>
                                <div class="q-list" data-type="nc" data-q="39">
                                    – Ringing depended on what is called the
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-wq6xHskL3uTj5VSU-19" class="q-text" placeholder="">
                                    of dead birds.
                                </div>
                            </p>

                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="40">
                                        In 1931, the first
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-wq6xHskL3uTj5VSU-20" class="q-text" placeholder="">
                                        to show the migration of European birds was printed.
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
