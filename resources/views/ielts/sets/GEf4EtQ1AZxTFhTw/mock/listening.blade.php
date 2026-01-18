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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-3-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- nc --}}
                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Complete the form below.</p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Local food shops</b></p>
                                <p><b>Where to go</b></p>

                                <p>– Kite Place</p>
                                <p>
                                    – near the
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="nc-GEf4EtQ1AZxTFhTw-1" class="q-text"
                                        placeholder="" data-q="1">
                                </p>

                                <p><b>Fish market</b></p>
                                <p>
                                    – cross the
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="nc-GEf4EtQ1AZxTFhTw-2" class="q-text"
                                        placeholder="" data-q="2">
                                    and turn right
                                </p>
                                <p>
                                    – best to go before
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="nc-GEf4EtQ1AZxTFhTw-3" class="q-text"
                                        placeholder="" data-q="3">
                                    pm, earlier than closing time
                                </p>

                                <p><b>Organic shop</b></p>
                                <p>
                                    – called 
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="nc-GEf4EtQ1AZxTFhTw-4" class="q-text"
                                        placeholder="" data-q="4">
                                </p>
                                <p>– below a restaurant in the large, grey building</p>
                                <p>
                                    – look for the large
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="nc-GEf4EtQ1AZxTFhTw-5" class="q-text"
                                        placeholder="" data-q="5">
                                    outside
                                </p>

                                <p><b>Supermarket</b></p>
                                <p>
                                    – take a
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="nc-GEf4EtQ1AZxTFhTw-6" class="q-text"
                                        placeholder="" data-q="6">
                                    minibus, number 289
                                </p>
                            </fieldset>

                            {{-- tc --}}
                            <fieldset class="q-item">
                                <p>Questions 7-10</p>
                                <p>Complete the table below.</p>
                                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                            </fieldset>

                            <table border="1" cellpadding="8" cellspacing="0"
                                style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr colspan="3"><h3 style="text-align: center">Shopping</h3></tr>
                                <tr>
                                    <th></th>
                                    <th><b>To buy</b></th>
                                    <th><b>Other ideas</b></th>
                                </tr>
                                <tr>
                                    <th><b>Fish market</b></th>
                                    <td>a dozen prawns</td>
                                    <td>
                                        <div class="q-item" data-q="7">
                                            a handful of
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="tc-GEf4EtQ1AZxTFhTw-1" class="q-text"
                                                placeholder="">
                                            (type of seaweed)
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><b>Organic shop</b></th>
                                    <td>
                                        <div class="q-item" data-q="8">
                                            beans and a
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="tc-GEf4EtQ1AZxTFhTw-2" class="q-text"
                                                placeholder="">
                                            for dessert
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="9">
                                            spices and
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="tc-GEf4EtQ1AZxTFhTw-3" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><b>Bakery</b></th>
                                    <td>a brown loaf</td>
                                    <td>
                                        <div class="q-item" data-q="10">
                                            a
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="tc-GEf4EtQ1AZxTFhTw-4" class="q-text"
                                                placeholder="">
                                            tart
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
                                    src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-3-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <p>Questions 11-16</p>
                            <p>What information is given about each of the following festival workshops?</p>
                            <p>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>.</p>

                            <strong>A</strong>&nbsp;&nbsp; involves painting and drawing <br>
                            <strong>B</strong>&nbsp;&nbsp; will be led by a prize-winning author <br>
                            <strong>C</strong>&nbsp;&nbsp; is aimed at children with a disability <br>
                            <strong>D</strong>&nbsp;&nbsp; involves a drama activity <br>
                            <strong>E</strong>&nbsp;&nbsp; focuses on new relationships<br>
                            <strong>F</strong>&nbsp;&nbsp; is aimed at a specific age group<br>
                            <strong>G</strong>&nbsp;&nbsp; explores an unhappy feeling<br>
                            <strong>H</strong>&nbsp;&nbsp; raises awareness of a particular culture<br>
                        </fieldset>

                        <fieldset class="q-item" data-q="11">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">11</span>
                                <span style="flex: 1;">
                                    Superheroes 
                                    <span class="q-question">
                                        <select name="matching_information-GEf4EtQ1AZxTFhTw-1" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="12">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">12</span>
                                <span style="flex: 1;">
                                    Just do it
                                    <span class="q-question">
                                        <select name="matching_information-GEf4EtQ1AZxTFhTw-2" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="13">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">13</span>
                                <span style="flex: 1;">
                                    Count on me
                                    <span class="q-question">
                                        <select name="matching_information-GEf4EtQ1AZxTFhTw-13" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="14">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">14</span>
                                <span style="flex: 1;">
                                    Speak up
                                    <span class="q-question">
                                        <select name="matching_information-GEf4EtQ1AZxTFhTw-4" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="15">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    Jump for joy
                                    <span class="q-question">
                                        <select name="matching_information-GEf4EtQ1AZxTFhTw-5" class="q-dropdown">
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

                        <fieldset class="q-item" data-q="16">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    Sticks and stones
                                    <span class="q-question">
                                        <select name="GEf4EtQ1AZxTFhTw-6" class="q-dropdown">
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

                        {{-- two_choices --}}
                        <fieldset class="q-item">
                            <p>Questions 17-18</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="17" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">17</span>
                                <span class="q-number">18</span>
                                Which <b>TWO</b> reasons does the speaker give for recommending Alive and Kicking
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It will appeal to both boys and girls.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">The author is well known.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It has colourful illustrations.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">It is funny.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">It deals with an important topic.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 19-02</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="19" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                <span class="q-number">20</span>
                                Which <b>TWO</b> pieces of advice does the speaker give to parents about reading?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Encourage children to write down new vocabulary.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Allow children to listen to audio books.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Get recommendations from librarians.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Give children a choice about what they read.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-GEf4EtQ1AZxTFhTw-3[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">Only read aloud to children until they can read independently.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-3-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- oc --}}
                            <fieldset class="q-item">
                                <p>Questions 21-25</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Science experiment for Year 12 students</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    Science experiment for Year 12 students
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">worried that they are not making progress</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">challenged by their poor behaviour in class</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">frustrated at their lack of interest in the subject</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    How does Jake react to Clare’s suggestion about an experiment based on children’s diet?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">He is concerned that the results might not be meaningful.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">He feels some of the data might be difficult to obtain.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">He suspects that the conclusions might be upsetting.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    What problem do they agree may be involved in an experiment involving animals?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Any results may not apply to humans.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It may be complicated to get permission.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Students may not be happy about animal experiments.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    What question do they decide the experiment should address?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Are mice capable of controlling their food intake?</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Does an increase in sugar lead to health problems?</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">How much do supplements of different kinds affect health?</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="25">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    Clare might also consider doing another experiment involving
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">other types of food supplement.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">different genetic strains of mice.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-GEf4EtQ1AZxTFhTw-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">varying amounts of exercise.</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- fc_completion --}}
                            <fieldset class="q-item">
                                <p>Questions 26-30</p>
                                <p>Complete the flow chart below.</p>
                                <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-H</b>.</i></p>

                                <strong>A</strong>&nbsp;&nbsp; size<br>
                                <strong>B</strong>&nbsp;&nbsp; escape<br>
                                <strong>C</strong>&nbsp;&nbsp; age<br>
                                <strong>D</strong>&nbsp;&nbsp; water<br>
                                <strong>E</strong>&nbsp;&nbsp; cereal<br>
                                <strong>F</strong>&nbsp;&nbsp; calculations<br>
                                <strong>G</strong>&nbsp;&nbsp; changes<br>
                                <strong>H</strong>&nbsp;&nbsp; colour<br>
                            </fieldset>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <tr>
                                            <td width="528">
                                                <p>
                                                    <div class="q-list" data-q="26">
                                                        Choose mice which are all the same
                                                        <span class="q-number-box">26</span>
                                                        <select name="fc_completion-GEf4EtQ1AZxTFhTw-1" class="q-dropdown">
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
                                                    </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <tr>
                                            <td width="528">
                                                <p>
                                                    <div class="q-list" data-q="27">
                                                        Divide the mice into two groups, each with a different
                                                        <span class="q-number-box">27</span>
                                                        <select name="fc_completion-GEf4EtQ1AZxTFhTw-2" class="q-dropdown">
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
                                                    </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <tr>
                                            <td width="528">
                                                <p>Put each group in a separate cage.</p>
                                                <p>Feed group A commercial mouse food.</p>
                                                <p>
                                                    <div class="q-list" data-q="28">
                                                        Feed group B the same, but also sugar contained in
                                                        <span class="q-number-box">28</span>
                                                        <select name="fc_completion-GEf4EtQ1AZxTFhTw-3" class="q-dropdown">
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
                                                    </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <tr>
                                            <td width="528">
                                                <p>Take measurements using an electronic scale.</p>
                                                <p>
                                                    <div class="q-list" data-q="29">
                                                        Place them in a weighing chamber to prevent
                                                        <span class="q-number-box">29</span>
                                                        <select name="fc_completion-GEf4EtQ1AZxTFhTw-4" class="q-dropdown">
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
                                                    </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <tr>
                                            <td width="528">
                                                <p>
                                                    <div class="q-list" data-q="30">
                                                        Do all necessary
                                                        <span class="q-number-box">30</span>
                                                        <select name="fc_completion-GEf4EtQ1AZxTFhTw-5" class="q-dropdown">
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
                                                    </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-3-audio-4.mp3"></audio>
                            <input type="range" class="timeline" value="0" disabled>
                            <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                        </div>
                    </fieldset>

                    <fieldset class="q-item">
                        <p>Questions 31-40</p>
                        <p>Complete the notes below.</p>
                        <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                    </fieldset>

                    <fieldset class="q-item">
                        <h3 style="text-align: center">Microplastics</h3>
                        <p>
                            fibres from some
                            <span class="q-number-box">31</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-7" class="q-text"
                                placeholder="" data-q="31">
                            during washing
                        </p>

                        <p>the breakdown of large pieces of plastic</p>
                        <p>waste from industry</p>
                        <p>the action of vehicle tyres on roads</p>

                        <p><b>Effects of microplastics</b></p>
                        <p>
                            They cause injuries to the
                            <span class="q-number-box">32</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-8" class="q-text"
                                placeholder="" data-q="32">
                            of wildlife and affect their digestive systems.
                        </p>

                        <p>
                            They enter the food chain, e.g., in bottled and tap water,
                            <span class="q-number-box">33</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-9" class="q-text"
                                placeholder="" data-q="33">
                            and seafood.
                        </p>

                        <p>
                            They may not affect human health, but they are already banned in skin cleaning products and
                            <span class="q-number-box">34</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-10" class="q-text"
                                placeholder="" data-q="34">
                            in some countries.
                        </p>

                        <p>
                            Microplastics enter the soil through the air, rain and
                            <span class="q-number-box">35</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-11" class="q-text"
                                placeholder="" data-q="35">
                        </p>

                        <p><b>Microplastics in the soil – a study by Anglia Ruskin University</b></p>
                        <p>
                            Earthworms are important because they add
                            <span class="q-number-box">36</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-12" class="q-text"
                                placeholder="" data-q="36">
                            to the soil.
                        </p>

                        <p>
                            The study aimed to find whether microplastics in earthworms affect the
                            <span class="q-number-box">37</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-14" class="q-text"
                                placeholder="" data-q="37">
                            of plants.
                        </p>

                        <p>The study found that microplastics caused:</p>
                        <p>
                            <span class="q-number-box">38</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-15" class="q-text"
                                placeholder="" data-q="38">
                            loss in earthworms
                        </p>

                        <p>fewer seeds to germinate</p>
                        <p>
                            a rise in the level of
                            <span class="q-number-box">39</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-16" class="q-text"
                                placeholder="" data-q="39">
                            in the soil.
                        </p>

                        <p>The study concluded:</p>
                        <p>soil should be seen as an important natural process.</p>
                        <p>
                            changes to soil damage both ecosystems and
                            <span class="q-number-box">40</span>
                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-17" class="q-text"
                                placeholder="" data-q="40">
                        </p>

                    </fieldset>
                </form>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.listening.component')
    @include('ielts.sets.layouts.mock.listening.script')
</body>

</html>
