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
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-2-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-5</p>
                                <p><i>Complete the notes below.</i></p>
                                <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Working at Milo’s Restaurants</h3>

                                <p><b>Benefits</b></p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="1">
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-JSRJ0oDlxC0yFMgt-1" class="q-text" placeholder="">
                                            provided for all staff
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="2">
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-JSRJ0oDlxC0yFMgt-2" class="q-text" placeholder="">
                                            during weekdays at all Milo’s Restaurants
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="3">
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-JSRJ0oDlxC0yFMgt-3" class="q-text" placeholder="">
                                            provided after midnight
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Person specification</b></p>
                                <ul>
                                    <li>must be prepared to work well in a team</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="4">
                                            must care about maintaining a high standard of
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-JSRJ0oDlxC0yFMgt-4" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="5">
                                            must have a qualification in
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-JSRJ0oDlxC0yFMgt-5" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 6-10</p>
                                <p><i>Complete the table below.</i></p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <table border="1" cellpadding="8" cellspacing="0"
                                style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th><b>Location</b></th>
                                    <th><b>Job title</b></th>
                                    <th><b>Responsibilities include</b></th>
                                    <th><b>Pay and conditions</b></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="6">
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="tc-JSRJ0oDlxC0yFMgt-1" class="q-text"
                                                placeholder="">
                                            Street
                                        </div>
                                    </td>
                                    <th>Breakfast supervisor</th>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="7">
                                            Checking portions, etc. are correct <br>Making sure 
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="tc-JSRJ0oDlxC0yFMgt-2" class="q-text"
                                                placeholder="">
                                            is clean
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="8">
                                            Starting salary £
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="tc-JSRJ0oDlxC0yFMgt-3" class="q-text"
                                                placeholder="">
                                            per hour Start work at 5.30 a.m.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>City Road</td>
                                    <td>Junior chef</td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="9">
                                            Maintaining stock and organising
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="tc-JSRJ0oDlxC0yFMgt-4" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="10">
                                            Annual salary £23,000 <br>No work on a
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="tc-JSRJ0oDlxC0yFMgt-5" class="q-text"
                                                placeholder="">
                                            once a month
                                        </div>
                                    </td>
                                </tr>
                            </table>
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
                                    src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-2-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 11-12</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="two_choices" data-q="11" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                What are the <b>TWO</b> main reasons why this site has been chosen for the housing development?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It has suitable geographical features.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">There is easy access to local facilities.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It has good connections with the airport.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">The land is of little agricultural value.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">It will be convenient for workers.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 13-14</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="two_choices" data-q="13" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                <span class="q-number">14</span>
                                Which <b>TWO</b> aspects of the planned housing development have people given positive feedback about?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">the facilities for cyclists</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the impact on the environment</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">the encouragement of good relations between residents</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">the low cost of all the accommodation</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-3[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">the rural location</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 15-20</p>
                            <p>Label the map below</p>
                            <p>Write the correct letter, <b>A-l</b>, next to Questions.</p>
                            <img src="{{asset('own_assets/images/cambridge-ielts-18-academic-listening-test-2-15-20.jpg')}}" alt="">
                        </fieldset>

                        <fieldset class="q-item" data-type="map_labeling" data-q="15">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    School 
                                    <span class="q-question">
                                        <select name="map_labeling-JSRJ0oDlxC0yFMgt-1" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="16">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    Sports centre 
                                    <span class="q-question">
                                        <select name="map_labeling-JSRJ0oDlxC0yFMgt-2" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="17">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">17</span>
                                <span style="flex: 1;">
                                    Clinic  
                                    <span class="q-question">
                                        <select name="map_labeling-JSRJ0oDlxC0yFMgt-3" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="18">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">18</span>
                                <span style="flex: 1;">
                                    Community centre 
                                    <span class="q-question">
                                        <select name="map_labeling-JSRJ0oDlxC0yFMgt-4" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="19">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">19</span>
                                <span style="flex: 1;">
                                    Supermarket  
                                    <span class="q-question">
                                        <select name="map_labeling-JSRJ0oDlxC0yFMgt-5" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="20">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">20</span>
                                <span style="flex: 1;">
                                    Playground  
                                    <span class="q-question">
                                        <select name="map_labeling-JSRJ0oDlxC0yFMgt-6" class="q-dropdown">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-2-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 21-24</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    Why do the students think the Laki eruption of 1783 is so important?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It was the most severe eruption in modern times.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It led to the formal study of volcanoes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It had a profound effect on society.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    What surprised Adam about observations made at the time?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the number of places producing them</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the contradictions in them</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the lack of scientific data to support them</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    According to Michelle, what did the contemporary sources say about the Laki haze?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">People thought it was similar to ordinary fog.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It was associated with health issues.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It completely blocked out the sun for weeks.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    Adam corrects Michelle when she claims that Benjamin Franklin
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">came to the wrong conclusion about the cause of the haze.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">was the first to identify the reason for the haze.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-JSRJ0oDlxC0yFMgt-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">supported the opinions of other observers about the haze.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 25-26</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="25" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    <span class="q-number">26</span>
                                    Which <b>TWO</b> issues following the Laki eruption surprised the students?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">how widespread the effects were</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">how long-lasting the effects were</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the number of deaths it caused</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">the speed at which the volcanic ash cloud spread</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-JSRJ0oDlxC0yFMgt-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">how people ignored the warning signs</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Questions 27-30</h3>
                                <p>What comment do the students make about the impact of the Laki eruption on the following countries?</p>
                                <p><i>Choose <b>FOUR</b> answers from the box and write the correct letter, <b>A-F</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Comments</h3>
                                <p><b>A</b> This country suffered the most severe loss of life.</p>
                                <p><b>B</b> The impact on agriculture was predictable.</p>
                                <p><b>C</b> There was a significant increase in deaths of young people.</p>
                                <p><b>D</b> Animals suffered from a sickness.</p>
                                <p><b>E</b> This country saw the highest rise in food prices in the world.</p>
                                <p><b>F</b> It caused a particularly harsh winter.</p>
                            </fieldset>

                            <p><b>Countries</b></p>

                            <fieldset class="q-item" data-type="matching_information" data-q="27">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">27</span>
                                    <span style="flex: 1;">
                                        Iceland 
                                        <span class="q-question">
                                            <select name="matching_information-JSRJ0oDlxC0yFMgt-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="28">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">28</span>
                                    <span style="flex: 1;">
                                        Egypt  
                                        <span class="q-question">
                                            <select name="matching_information-JSRJ0oDlxC0yFMgt-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="29">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">29</span>
                                    <span style="flex: 1;">
                                        UK  
                                        <span class="q-question">
                                            <select name="matching_information-JSRJ0oDlxC0yFMgt-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="30">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">30</span>
                                    <span style="flex: 1;">
                                        USA  
                                        <span class="q-question">
                                            <select name="matching_information-JSRJ0oDlxC0yFMgt-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
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
                                    src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-2-audio-4.mp3"></audio>
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
                            <h3>Pockets</h3>
                            <p><b>Reason for choice of subject</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        They are
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-6" class="q-text" placeholder="">
                                        but can be overlooked by consumers and designers.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Pockets in men’s clothes</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="32">
                                        Men started to wear
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-7" class="q-text" placeholder="">
                                            in the 18th century.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="33">
                                        A
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-8" class="q-text" placeholder="">
                                            sewed pockets into the lining of the garments.
                                    </div>
                                </li>
                                <li>The wearer could use the pockets for small items.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="34">
                                        Bigger pockets might be made for men who belonged to a certain type of 
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-9" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Pockets in women’s clothes</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="35">
                                        Women’s pockets were less
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-10" class="q-text" placeholder="">
                                        than men’s.
                                    </div>
                                </li>
                                <li>Women were very concerned about pickpockets.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="36">
                                        Pockets were produced in pairs using
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-11" class="q-text" placeholder="">
                                        to link them together.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        Pockets hung from the women’s
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-12" class="q-text" placeholder="">
                                        under skirts and petticoats.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="38">
                                        Items such as
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-13" class="q-text" placeholder="">
                                        could be reached through a gap in the material.
                                    </div>
                                </li>
                                <li>Pockets, of various sizes, stayed inside clothing for many decades.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="39">
                                        When dresses changed shape, hidden pockets had a negative effect on the
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-14" class="q-text" placeholder="">
                                        of women.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="40">
                                        Bags called ‘pouches’ became popular, before women carried a
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-15" class="q-text" placeholder="">
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
