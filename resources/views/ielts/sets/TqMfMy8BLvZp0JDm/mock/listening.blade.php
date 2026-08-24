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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-1.mp3"></audio>
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
                                <h3>Holiday rental</h3>
                                <p><b>Owner’s names</b>: Jack Fitzgerald and Shirley Fitzgerald</p>

                                <p>Granary Cottage</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="1">
                                            available for week beginning
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-1" class="q-text" placeholder="">
                                            May
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="2">
                                            cost for the week: £
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-2" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="3">
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-3" class="q-text" placeholder="">
                                        Cottage
                                    </div>
                                </p>

                                <ul>
                                    <li>cost for the week: £480</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="4">
                                            building was originally a
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-4" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="5">
                                            walk through doors from living room into a
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-5" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="6">
                                            several 
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-6" class="q-text" placeholder="">
                                            spaces at the front
                                        </div>
                                    </li>
                                    <li>bathroom has a shower</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="7">
                                            central heating and stove that burns
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="8">
                                            views of old
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-8" class="q-text" placeholder="">
                                            from living room
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="9">
                                            view of hilltop
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-9" class="q-text" placeholder="">
                                            from the bedroom
                                        </div>
                                    </li>
                                </ul>

                                <p><b>Payment</b></p>
                                <ul>
                                    <li>deposit: £144</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="10">
                                            deadline for final payment: end of
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-TqMfMy8BLvZp0JDm-10" class="q-text" placeholder="">
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 11-14</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Local council report on traffic and highways</b></p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                A survey found people’s main concern about traffic in the area was
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">cuts to public transport.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">poor maintenance of roads.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">changes in the type of traffic.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                Which change will shortly be made to the cycle path next to the river?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It will be widened.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">It will be extended.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It will be resurfaced.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                Plans for a pedestrian crossing have been postponed because
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">the Post Office has moved.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the proposed location is unsafe.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">funding is not available at present.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                On Station Road, notices have been erected
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">telling cyclists not to leave their bikes outside the station ticket office.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">asking motorists to switch off engines when waiting at the level crossing.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">warning pedestrians to leave enough time when crossing the railway line.</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- map_labeling --}}
                        <fieldset class="q-item">
                            <h3>Questions 15-20</h3>
                            <p>Label the map below.</p>
                            <p><i>Write the correct letter, <b>A-I</b>, next to Questions.</i></p>
                        </fieldset>

                        <div class="map-side-by-side">
                            <div class="map-figure">
                                <h3>Recreation ground after proposed changes</h3>
                                <img src="{{asset('own_assets/images/cambridge-ielts-16-academic-listening-test-4-15-20.jpg')}}" alt="Recreation ground map" width="100%">
                            </div>

                            <div class="map-questions">
                                <fieldset class="q-item" data-type="map_labeling" data-q="15">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    New car park
                                    <span class="q-question">
                                        <select name="map_labeling-TqMfMy8BLvZp0JDm-1" class="q-dropdown">
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
                                    New cricket pitch
                                    <span class="q-question">
                                        <select name="map_labeling-TqMfMy8BLvZp0JDm-2" class="q-dropdown">
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
                                    Children’s playground
                                    <span class="q-question">
                                        <select name="map_labeling-TqMfMy8BLvZp0JDm-3" class="q-dropdown">
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
                                    Skateboard ramp 
                                    <span class="q-question">
                                        <select name="map_labeling-TqMfMy8BLvZp0JDm-4" class="q-dropdown">
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
                                    Pavilion 
                                    <span class="q-question">
                                        <select name="map_labeling-TqMfMy8BLvZp0JDm-5" class="q-dropdown">
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
                                    Notice board
                                    <span class="q-question">
                                        <select name="map_labeling-TqMfMy8BLvZp0JDm-6" class="q-dropdown">
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
                            </div>
                        </div>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- two_choices --}}
                            <fieldset class="q-item">
                                <p>Questions 21-22</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="21" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> benefits of city bike-sharing schemes do the students agree are the most important?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">reducing noise pollution</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">reducing traffic congestion</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">improving air quality</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">encouraging health and fitness</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">making cycling affordable</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- two_choices 2 --}}
                            <fieldset class="q-item">
                                <p>Questions 23-24</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="23" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    <span class="q-number">24</span>
                                    Which <b>TWO</b> things do the students think are necessary for successful bike-sharing schemes?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Bikes should have a GPS system.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">The app should be easy to use.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Public awareness should be raised.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Only one scheme should be available.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-TqMfMy8BLvZp0JDm-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">There should be a large network of cycle lanes.</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <h3>Questions 25-30</h3>
                                <p>What is the speakers’ opinion of the bike-sharing schemes in each of the following cities?</p>
                                <p>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Opinion of bike-sharing scheme</h3>
                                <p><b>A</b> They agree it has been disappointing.</p>
                                <p><b>B</b> They think it should be cheaper.</p>
                                <p><b>C</b> They are surprised it has been so successful.</p>
                                <p><b>D</b> They agree that more investment is required.</p>
                                <p><b>E</b> They think the system has been well designed.</p>
                                <p><b>F</b> They disagree about the reasons for its success.</p>
                                <p><b>G</b> They think it has expanded too quickly.</p>
                            </fieldset>

                            <p><b>Cities</b></p>

                            <fieldset class="q-item" data-type="matching_information" data-q="25">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">25</span>
                                    <span style="flex: 1;">
                                        Amsterdam 
                                        <span class="q-question">
                                            <select name="matching_information-TqMfMy8BLvZp0JDm-1" class="q-dropdown">
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
                                        Dublin 
                                        <span class="q-question">
                                            <select name="matching_information-TqMfMy8BLvZp0JDm-2" class="q-dropdown">
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
                                        London 
                                        <span class="q-question">
                                            <select name="matching_information-TqMfMy8BLvZp0JDm-3" class="q-dropdown">
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
                                        Buenos Aires
                                        <span class="q-question">
                                            <select name="matching_information-TqMfMy8BLvZp0JDm-4" class="q-dropdown">
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
                                        New York
                                        <span class="q-question">
                                            <select name="matching_information-TqMfMy8BLvZp0JDm-5" class="q-dropdown">
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
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">30</span>
                                    <span style="flex: 1;">
                                        Sydney 
                                        <span class="q-question">
                                            <select name="matching_information-TqMfMy8BLvZp0JDm-6" class="q-dropdown">
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-4-audio-4.mp3"></audio>
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
                            <h3>THE EXTINCTION OF THE DODO BIRD</h3>
                            <p>The dodo was a large flightless bird which used to inhabit the island of Mauritius.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>History</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        1507 – Portuguese ships transporting
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-11" class="q-text" placeholder="">
                                        stopped at the island to collect food and water.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="32">
                                        1638 – The Dutch established a
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-12" class="q-text" placeholder="">
                                        on the island.
                                    </div>
                                </li>
                                <li>They killed the dodo birds for their meat.</li>
                                <li>The last one was killed in 1681.</li>
                            </ul>

                            <p><b>Description</b></p>
                            <ul>
                                <li>The only record we have is written descriptions and pictures (possibly unreliable).</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="33">
                                        A Dutch painting suggests the dodo was very
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-13" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="34">
                                        The only remaining soft tissue is a dried
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-14" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="35">
                                        Recent studies of a dodo skeleton suggest the birds were capable of rapid
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-15" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="36">
                                        It’s thought they were able to use their small wings to maintain
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-16" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        Their 
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-17" class="q-text" placeholder="">
                                        was of average size.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="38">
                                        Their sense of
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-18" class="q-text" placeholder="">
                                        enabled them to find food.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Reasons for extinction</b></p>
                            <ul>
                                <li>Hunting was probably not the main cause.</li>
                                <li>Sailors brought dogs and monkeys.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="39">
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-19" class="q-text" placeholder="">
                                        also escaped onto the island and ate the birds’ eggs.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="40">
                                        The arrival of farming meant the
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-TqMfMy8BLvZp0JDm-20" class="q-text" placeholder="">
                                        was destroyed.
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
