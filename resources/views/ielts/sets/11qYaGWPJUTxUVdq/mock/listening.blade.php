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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- nc --}}
                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                            </fieldset>
                            <fieldset class="q-item">
                                <h3>THORNDYKE’S BUILDERS</h3>
                                <p><i>Example</i></p>
                                <p>Customer heard about Thorndyke’s from a <i>.....friend.....</i></p>
                            </fieldset>
                            <fieldset class="q-item">
                                <p>
                                    <strong>Name: </strong>&nbsp;&nbsp; Edith 
                                    <span class="q-number-box">1</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-1" class="q-text" placeholder="" data-type="nc" data-q="1">
                                </p>
                                <p>
                                    <strong>Address: </strong>&nbsp;&nbsp; Flat 4,
                                </p>
                                <p>
                                    <span class="q-number-box">2</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-2" class="q-text" placeholder="" data-type="nc" data-q="2">
                                    Park Flats
                                </p>
                                <p>
                                    (Behind the
                                    <span class="q-number-box">3</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-3" class="q-text" placeholder="" data-type="nc" data-q="3">
                                    )
                                </p>
                                <p>
                                    <b>Phone number:   875934</b>
                                </p>
                                <p>
                                    <b>Best time to contact customer: </b>during the
                                    <span class="q-number-box">4</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-4" class="q-text" placeholder="" data-type="nc" data-q="4">
                                </p>
                                <p>
                                    <b>Where to park: </b>opposite entrance next to the
                                    <span class="q-number-box">5</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-5" class="q-text" placeholder="" data-type="nc" data-q="5">
                                </p>
                                <p>
                                    Needs full quote showing all the jobs and the
                                    <span class="q-number-box">6</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-6" class="q-text" placeholder="" data-type="nc" data-q="6">
                                </p>
                            </fieldset>

                            {{-- tc --}}
                            <fieldset class="q-item">
                                <p>Questions 7-10</p>
                                <p>Complete the table below.</p>
                                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                            </fieldset>
                            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <th><b>Area</b></th>
                                    <th><b>Work to be done</b></th>
                                    <th><b>Notes</b></th>
                                </tr>

                                <tr>
                                    <td rowspan="2"><b>Kitchen</b></td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="7">
                                            Replace the
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="tc-11qYaGWPJUTxUVdq-1" class="q-text">
                                            in the door
                                        </div>
                                        <hr>
                                        <div class="q-item" data-type="tc" data-q="8" style="margin-top: 10px;">
                                            Paint wall above the
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="tc-11qYaGWPJUTxUVdq-2" class="q-text">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="note-item">
                                            Fix tomorrow
                                        </div>
                                        <hr>
                                        <div class="q-item" data-type="tc" data-q="9" style="margin-top: 10px;">
                                            Strip paint and plaster approximately one
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="tc-11qYaGWPJUTxUVdq-3" class="q-text">
                                            in advance
                                        </div>
                                    </td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td><b>Garden</b></td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="10">
                                            One 
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="11qYaGWPJUTxUVdq-4" class="q-text">
                                            needs replacing (end of garden)
                                        </div>
                                    </td>
                                    <td></td>
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 11-15</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>
                        <fieldset class="q-item">
                            <h3><b>MANHAM PORT</b></h3>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                Why did a port originally develop at Manham?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It was safe from enemy attack.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">It was convenient for river transport.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It had a good position on the sea coast.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                What caused Manham’s sudden expansion during the Industrial Revolution?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">the improvement in mining techniques</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the increase in demand for metals</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">the discovery of tin in the area</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                Why did rocks have to be sent away from Manham to be processed?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">shortage of fuel</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">poor transport systems</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">lack of skills among local people</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                What happened when the port declined in the twentieth century?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">The workers went away.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Traditional skills were lost.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Buildings were used for new purposes.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                What did the Manham Trust hope to do?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-5" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">discover the location of the original port</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-5" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">provide jobs for the unemployed</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-11qYaGWPJUTxUVdq-5" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">rebuild the port complex</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- tc 2 --}}
                        <fieldset class="q-item">
                            <p>Questions 16-20</p>
                            <p>Complete the table below.</p>
                            <p><i>Write <b>NO MORE THAN TWO WORDS</b> for each answer.</i></p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Tourist attractions in Manham</h3>
                        </fieldset>

                        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <th><b>Place</b></th>
                                <th><b>Features and activities</b></th>
                                <th><b>Advice</b></th>
                            </tr>

                            <tr>
                                <td>copper mine</td>
                                <td>
                                    <div class="q-item" data-type="tc" data-q="16">
                                        specially adapted miners'
                                        <span class="q-number-box">16</span>
                                        <input type="text" name="tc-11qYaGWPJUTxUVdq-5" class="q-text">
                                        take visitors into the mountain
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-type="tc" data-q="17" style="margin-top: 10px;">
                                        the mine is
                                        <span class="q-number-box">17</span>
                                        <input type="text" name="tc-11qYaGWPJUTxUVdq-6" class="q-text">
                                        and enclosed – unsuitable for children and animals
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>village school</td>
                                <td>
                                    <div class="q-item" data-type="tc" data-q="18" style="margin-top: 10px;">
                                        classrooms and a special exhibition of 
                                        <span class="q-number-box">18</span>
                                        <input type="text" name="tc-11qYaGWPJUTxUVdq-7" class="q-text">
                                    </div>
                                </td>
                                <td>
                                    <div class="q-item" data-type="tc" data-q="19" style="margin-top: 10px;">
                                        a
                                        <span class="q-number-box">19</span>
                                        <input type="text" name="tc-11qYaGWPJUTxUVdq-8" class="q-text">
                                        is recommended
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>‘The George’ (old sailing ship)</td>
                                <td>the ship’s wheel (was lost but has now been restored)</td>
                                <td>
                                    <div class="q-item" data-type="tc" data-q="20" style="margin-top: 10px;">
                                        children shouldn’t use the
                                        <span class="q-number-box">20</span>
                                        <input type="text" name="tc-11qYaGWPJUTxUVdq-9" class="q-text">
                                    </div>
                                </td>
                            </tr>
                        </table>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- tc 1 --}}
                            <fieldset class="q-item">
                                <p>Questions 21-22</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="21" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> skills did Laura improve as a result of her work placement?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-1[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">communication</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-1[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">design</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-1[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">IT</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-1[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">marketing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-1[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">organisation</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- tc 2 --}}
                            <fieldset class="q-item">
                                <p>Questions 13-24</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="23" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    <span class="q-number">24</span>
                                    Which <b>TWO</b> immediate benefits did the company get from Laura’s work placement?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-3[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">updates for its software</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-3[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">cost savings</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-3[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">an improved image</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-3[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">new clients</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-11qYaGWPJUTxUVdq-3[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">a growth in sales</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching information --}}
                            <fieldset class="q-item">
                                <p>Questions 25-30</p>
                                <p>What source of information should Tim use at each of the following stages of the work placement?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-G</b>, next to questions.</i></p>
                                <p><b>Sources of information</b></p>
                                <strong>A</strong>&nbsp;&nbsp; company manager <br>
                                <strong>B</strong>&nbsp;&nbsp; company’s personnel department<br>
                                <strong>C</strong>&nbsp;&nbsp; personal tutor<br>
                                <strong>D</strong>&nbsp;&nbsp; psychology department<br>
                                <strong>E</strong>&nbsp;&nbsp; mentor<br>
                                <strong>F</strong>&nbsp;&nbsp; university careers officer<br>
                                <strong>G</strong>&nbsp;&nbsp; internet<br>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Stages of the work placement procedure</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="25">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">25</span>
                                    <span style="flex: 1;">
                                        obtaining booklet
                                        <span class="q-question">
                                            <select name="matching_information-11qYaGWPJUTxUVdq-1" class="q-dropdown">
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
                                        discussing options
                                        <span class="q-question">
                                            <select name="matching_information-11qYaGWPJUTxUVdq-2" class="q-dropdown">
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
                                        getting updates
                                        <span class="q-question">
                                            <select name="matching_information-11qYaGWPJUTxUVdq-3" class="q-dropdown">
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
                                        responding to invitation for interview
                                        <span class="q-question">
                                            <select name="matching_information-11qYaGWPJUTxUVdq-4" class="q-dropdown">
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
                                        informing about outcome of interview
                                        <span class="q-question">
                                            <select name="matching_information-11qYaGWPJUTxUVdq-5" class="q-dropdown">
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
                                    <span class="q-number">30</span>
                                    <span style="flex: 1;">
                                        requesting a reference
                                        <span class="q-question">
                                            <select name="matching_information-11qYaGWPJUTxUVdq-6" class="q-dropdown">
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
        </div>
        <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
            <div class="x-panel-inner">Content: Part 4</div>
            <div class="qa highlighted-content">
                <form class="qa-body">
                    <fieldset class="q-item">
                        <p class="lead">Listen and answer questions 31-40</p>
                        <div class="audio-player">
                            <audio
                                src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-4-audio-4.mp3"></audio>
                            <input type="range" class="timeline" value="0" disabled>
                            <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                        </div>
                    </fieldset>

                    <fieldset class="q-item">
                        <p>Questions 31-33</p>
                        <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                    </fieldset>

                    {{-- oc --}}
                    <fieldset class="q-item">
                        <h3><b>Nanotechnology: technology on a small scale</b></h3>
                    </fieldset>

                    <fieldset class="q-item" data-type="oc" data-q="31">
                        <legend class="q-text">
                            <span class="q-number">31</span>
                            The speaker says that one problem with nanotechnology is that
                        </legend>
                        <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-6" value="A" />
                                <span class="opt-code">A</span>
                                <span class="opt-label">it could threaten our way of life.</span>
                            </label>
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-6" value="B" />
                                <span class="opt-code">B</span>
                                <span class="opt-label">it could be used to spy on people.</span>
                            </label>
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-6" value="C" />
                                <span class="opt-code">C</span>
                                <span class="opt-label">it is misunderstood by the public.</span>
                            </label>
                        </div>
                    </fieldset>

                    <fieldset class="q-item" data-type="oc" data-q="32">
                        <legend class="q-text">
                            <span class="q-number">32</span>
                            According to the speaker, some scientists believe that nono-particles
                        </legend>
                        <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-7" value="A" />
                                <span class="opt-code">A</span>
                                <span class="opt-label">should be restricted to secure environments.</span>
                            </label>
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-7" value="B" />
                                <span class="opt-code">B</span>
                                <span class="opt-label">should be used with more caution.</span>
                            </label>
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-7" value="C" />
                                <span class="opt-code">C</span>
                                <span class="opt-label">should only be developed for essential products.</span>
                            </label>
                        </div>
                    </fieldset>

                    <fieldset class="q-item" data-type="oc" data-q="33">
                        <legend class="q-text">
                            <span class="q-number">33</span>
                            In the speaker’s opinion, research into nanotechnology
                        </legend>
                        <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-8" value="A" />
                                <span class="opt-code">A</span>
                                <span class="opt-label">has yet to win popular support.</span>
                            </label>
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-8" value="B" />
                                <span class="opt-code">B</span>
                                <span class="opt-label">could be seen as unethical.</span>
                            </label>
                            <label class="q-option">
                                <input type="radio" name="oc-11qYaGWPJUTxUVdq-8" value="C" />
                                <span class="opt-code">C</span>
                                <span class="opt-label">ought to be continued.</span>
                            </label>
                        </div>
                    </fieldset>

                    {{-- nc 2 --}}
                    <fieldset class="q-item">
                        <p>Questions 34-40</p>
                        <p>Complete the notes below.</p>
                        <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                    </fieldset>

                    <fieldset class="q-item">
                        <h3>Uses of Nanotechnology</h3>
                        <p><b>Transport</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="34">
                                    Nanotechnology could allow the development of stronger
                                    <span class="q-number-box">34</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-7" class="q-text" placeholder="">
                                </div>
                            </li>
                            <li>Planes would be much lighter in weight.</li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="35">
                                    <span class="q-number-box">35</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-8" class="q-text" placeholder="">
                                    travel will be made available to the masses.
                                </div>
                            </li>
                        </ul>

                        <p><b>Technology</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="36">
                                    Computers will be even smaller, faster, and will have a greater
                                    <span class="q-number-box">36</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-9" class="q-text" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="37">
                                    <span class="q-number-box">37</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-10" class="q-text" placeholder="">
                                    Energy will become more affordable.
                                </div>
                            </li>
                        </ul>

                        <p><b>The Environment</b></p>
                        <ul>
                            <li>Nano-robots could rebuild the ozone layer.</li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="38">
                                    Pollutants such as
                                    <span class="q-number-box">38</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-11" class="q-text" placeholder="">
                                    could be removed from water
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="39">
                                    There will be no
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-12" class="q-text" placeholder="">
                                    from manufacturing.
                                </div>
                            </li>
                        </ul>

                        <p><b>Health and Medicine</b></p>
                        <ul>
                            <li>New methods of food production could eradicate famine.</li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="40">
                                    Analysis of medical
                                    <span class="q-number-box">40</span>
                                    <input type="text" name="nc-11qYaGWPJUTxUVdq-13" class="q-text" placeholder="">
                                    will be speeded up.
                                </div>
                            </li>
                            <li>
                                Life expectancy could be increased.
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.listening.component')
    @include('ielts.sets.layouts.mock.listening.script')
</body>

</html>
