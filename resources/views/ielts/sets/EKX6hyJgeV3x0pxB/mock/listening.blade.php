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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio1.mp3"></audio>
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
                                <p>Local Councils can Arrange Practical Support to Help those Caring for Elderly people at Home.</p>
                                <p>This can give the carer:</p>
                                <ul>
                                    <li>time for other responsibilities</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="1">
                                            a
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Assessment of mother’s needs</b></p>
                                <p>This may include discussion of:</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="2">
                                            how much
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-2" class="q-text"
                                                placeholder="">
                                            the caring involves
                                        </div>
                                    </li>
                                </ul>

                                <p>What types of tasks are involved, e.g.:</p>
                                <ul>
                                    <li>help with dressing</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="3">
                                            helping her have a
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-3" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>shopping</li>
                                    <li>helping with meals</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="4">
                                            dealing with
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-4" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Any aspects of caring that are especially difficult, e.g.:</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="5">
                                            loss of 
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="6">
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-6" class="q-text"
                                                placeholder="">
                                            her
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="7">
                                            preventing a
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-7" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Types of support that may be offered to carers</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="8">
                                            transport costs, e.g. cost of a
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-8" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="9">
                                            car-related costs, e.g. fuel and
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-9" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>help with housework</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="10">
                                            help to reduce
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-EKX6hyJgeV3x0pxB-10" class="q-text"
                                                placeholder="">
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
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-part-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <p>Questions 11-16</p>
                            <p>What is the role of the volunteers in each of the following activities?</p>
                            <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-I</b>, next to questions.</i></p>
                            <p><b>Community Volunteering and Local Festival Events</b></p>
                            <p><b>Information</b></p>
                            <strong>A</strong>&nbsp;&nbsp; providing entertainment
                            <strong>B</strong>&nbsp;&nbsp; providing publicity about a council service<br>
                            <strong>C</strong>&nbsp;&nbsp; contacting local businesses<br>
                            <strong>D</strong>&nbsp;&nbsp; giving advice to visitors<br>
                            <strong>E</strong>&nbsp;&nbsp; collecting feedback on events<br>
                            <strong>F</strong>&nbsp;&nbsp; selling tickets<br>
                            <strong>G</strong>&nbsp;&nbsp; introducing guest speakers at an event<br>
                            <strong>H</strong>&nbsp;&nbsp; encouraging cooperation between local organisations<br>
                            <strong>I</strong>&nbsp;&nbsp; helping people find their seats<br>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="11">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">11</span>
                                <span style="flex: 1;">
                                    walking around the town centre
                                    <span class="q-question">
                                        <select name="matching_information-EKX6hyJgeV3x0pxB-1" class="q-dropdown">
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
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="12">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">12</span>
                                <span style="flex: 1;">
                                    helping at concerts
                                    <span class="q-question">
                                        <select name="matching_information-EKX6hyJgeV3x0pxB-2" class="q-dropdown">
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
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="13">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">13</span>
                                <span style="flex: 1;">
                                    getting involved with community groups
                                    <span class="q-question">
                                        <select name="matching_information-EKX6hyJgeV3x0pxB-3" class="q-dropdown">
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
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="14">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">14</span>
                                <span style="flex: 1;">
                                    helping with a magazine
                                    <span class="q-question">
                                        <select name="matching_information-EKX6hyJgeV3x0pxB-4" class="q-dropdown">
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
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="15">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    participating at lunches for retired people
                                    <span class="q-question">
                                        <select name="matching_information-EKX6hyJgeV3x0pxB-5" class="q-dropdown">
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
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="16">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    helping with the website
                                    <span class="q-question">
                                        <select name="matching_information-EKX6hyJgeV3x0pxB-6" class="q-dropdown">
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
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 17-20</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="17">
                            <legend class="q-text">
                                <span class="q-number">17</span>
                                Which event requires the largest number of volunteers?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 17 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">the music festival</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the science festival</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">the book festival</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="18">
                            <legend class="q-text">
                                <span class="q-number">18</span>
                                What is the most important requirement for volunteers at the festivals?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 18 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">interpersonal skills</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">personal interest in the event</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">flexibility</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="19">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                New volunteers will start working in the week beginning
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 10 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">2 September</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">9 September</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">23 September</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="20">
                            <legend class="q-text">
                                <span class="q-number">20</span>
                                What is the next annual event for volunteers?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 20 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">a boat trip</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">a barbecue</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-EKX6hyJgeV3x0pxB-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">a party</span>
                                </label>
                            </div>
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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 21-25</p>
                                <p>What is Rosie and Colin’s opinion about each of the following aspects of human geography?</p>
                                <p>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions</p>
                                <p><b>Urban Development and Human Geography Discussion</b></p>
                                <p><b>Opinion</b></p>
                                <strong>A</strong>&nbsp;&nbsp; The information given about this was too vague.<br>
                                <strong>B</strong>&nbsp;&nbsp; This may not be relevant to their course.<br>
                                <strong>C</strong>&nbsp;&nbsp; This will involve only a small number of statistics.<br>
                                <strong>D</strong>&nbsp;&nbsp; It will be easy to find facts about this.<br>
                                <strong>E</strong>&nbsp;&nbsp; The facts about this may not be reliable.<br>
                                <strong>F</strong>&nbsp;&nbsp; No useful research has been done on this.<br>
                                <strong>G</strong>&nbsp;&nbsp; The information provided about this was interesting.<br>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="21">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">21</span>
                                    <span style="flex: 1;">
                                        Population 
                                        <span class="q-question">
                                            <select name="matching_information-EKX6hyJgeV3x0pxB-7" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="22">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">22</span>
                                    <span style="flex: 1;">
                                        Health 
                                        <span class="q-question">
                                            <select name="matching_information-EKX6hyJgeV3x0pxB-8" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="23">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">23</span>
                                    <span style="flex: 1;">
                                        Economies 
                                        <span class="q-question">
                                            <select name="matching_information-EKX6hyJgeV3x0pxB-8" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="24">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">24</span>
                                    <span style="flex: 1;">
                                        Culture 
                                        <span class="q-question">
                                            <select name="matching_information-EKX6hyJgeV3x0pxB-9" class="q-dropdown">
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

                            <fieldset class="q-item" data-type="matching_information" data-q="25">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">25</span>
                                    <span style="flex: 1;">
                                        Poverty 
                                        <span class="q-question">
                                            <select name="matching_information-EKX6hyJgeV3x0pxB-10" class="q-dropdown">
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

                            {{-- oc2 --}}
                            <fieldset class="q-item">
                                <p>Questions 26-30</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="26">
                                <legend class="q-text">
                                    <span class="q-number">26</span>
                                    Rosie says that in her own city the main problem is
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 26 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Crime</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Housing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Unemployment</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="27">
                                <legend class="q-text">
                                    <span class="q-number">27</span>
                                    What recent additions to the outskirts of their cities are both students happy about?  
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Conference centres</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Sports centres</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Retail centres</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="28">
                                <legend class="q-text">
                                    <span class="q-number">28</span>
                                    The students agree that developing disused industrial sites may  
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Have unexpected costs</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Damage the urban environment</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Destroy valuable historical buildings</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="29">
                                <legend class="q-text">
                                    <span class="q-number">29</span>
                                    The students will mention Masdar City as an example of an attempt to achieve  
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Daily collections for waste recycling</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Sustainable energy use</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Free transport for everyone</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="30">
                                <legend class="q-text">
                                    <span class="q-number">30</span>
                                    When discussing the ecotown of Greenhill Abbots, Colin is uncertain about
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">What its objectives were</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Why there was opposition to it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-EKX6hyJgeV3x0pxB-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">How much of it has actually been built</span>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
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
                                src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-2-audio-part-4.mp3"></audio>
                            <input type="range" class="timeline" value="0" disabled>
                            <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                        </div>
                    </fieldset>

                    {{-- nc2 --}}
                    <fieldset class="q-item">
                        <p>Questions 31-40</p>
                    </fieldset>

                    <fieldset class="q-item">
                        <p>Complete the notes below.</p>
                        <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        <p><b>Developing Food Trends</b></p>
                        
                        <p>
                            <div class="q-list" data-type="nc" data-q="31">
                                The growth in interest in food fashions started with
                                <span class="q-number-box">31</span>
                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-11" class="q-text" placeholder="">
                                of food being shared on social media.
                            </div>
                        </p>
                        <p>The UK food industry is constantly developing products which are newor different.</p>
                        <p>Influencers on social media become ‘ambassadors’ for a brand.</p>
                        <p>
                            <div class="q-list" data-type="nc" data-q="32">
                                Sales of
                                <span class="q-number-box">32</span>
                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-12" class="q-text" placeholder="">
                                food brands have grown rapidly this way.
                            </div>
                        </p>
                        <p>Supermarkets track demand for ingredients on social media.</p>
                        <p>
                            <div class="q-list" data-type="nc" data-q="33">
                                Famous 
                                <span class="q-number-box">33</span>
                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-13" class="q-text" placeholder="">
                                are influential.
                            </div>
                        </p>

                        <p><b>Marketing campaigns</b></p>
                        <p><b>The avocado:</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="34">
                                    were invited to visit growers in South Africa.
                                    <span class="q-number-box">34</span>
                                    <input type="text" name="nc-EKX6hyJgeV3x0pxB-14" class="q-text" placeholder="">
                                    The 
                                </div>
                                <div class="q-list" data-type="nc" data-q="35">
                                    Advertising focused on its
                                    <span class="q-number-box">35</span>
                                    <input type="text" name="nc-EKX6hyJgeV3x0pxB-15" class="q-text" placeholder="">
                                    benefits.
                                </div>
                            </li>
                        </ul>

                        <p><b>Oat milk:</b></p>
                        <ul>
                            <li>
                                A Swedish brand’s media campaign received publicity by upsetting competitors.
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="36">
                                    Promotion in the USA through
                                    <span class="q-number-box">36</span>
                                    <input type="text" name="nc-EKX6hyJgeV3x0pxB-16" class="q-text" placeholder="">
                                    shops reduced the need for advertising.
                                </div>
                                <div class="q-list" data-type="nc" data-q="37">
                                    It appealed to consumers who are concerned about the
                                    <span class="q-number-box">37</span>
                                    <input type="text" name="nc-EKX6hyJgeV3x0pxB-17" class="q-text" placeholder="">
                                    benefits.
                                </div>
                            </li>
                        </ul>

                        <p><b>Norwegian skrei:</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="38">
                                    has helped strengthen the
                                    <span class="q-number-box">38</span>
                                    <input type="text" name="nc-EKX6hyJgeV3x0pxB-18" class="q-text" placeholder="">
                                    of Norwegian seafood.
                                </div>
                            </li>
                            <li>Ethical concerns</li>
                        </ul>

                        <p><b>Norwegian skrei:</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="39">
                                    Its success led to an increase in its
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-EKX6hyJgeV3x0pxB-19" class="q-text" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="40">
                                    Overuse of resources resulted in poor quality
                                    <span class="q-number-box">40</span>
                                    <input type="text" name="nc-EKX6hyJgeV3x0pxB-20" class="q-text" placeholder="">
                                </div>
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.listening.component')
    @include('ielts.sets.layouts.mock.listening.script')

    </script>
</body>

</html>
