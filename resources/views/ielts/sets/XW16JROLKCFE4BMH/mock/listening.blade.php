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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-1.mp3"></audio>
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
                                <p><b>Copying photos to digital format</b></p>
                                <hr>
                                <p><b>Name of company: Picturerep</b></p>
                                <hr>

                                <p>Requirements</p>
                                <ul>
                                    <li>Maximum size of photos is 30 cm, minimum size 4 cm.</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="1">
                                            Photos must not be in a
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-1" class="q-text" placeholder="">
                                            or an album.
                                        </div>
                                    </li>
                                </ul>

                                <p>Cost</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="2">
                                            The cost for 360 photos is £
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-2" class="q-text" placeholder="">
                                            (including one disk).
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="3">
                                            Before the complete order is sent,
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-3" class="q-text" placeholder="">
                                            is required.
                                        </div>
                                    </li>
                                </ul>

                                <p>Services included in the price</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="4">
                                            Photos can be placed in a folder, e.g. with the name
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-4" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="5">
                                            The 
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-5" class="q-text" placeholder="">
                                            and contrast can be improved if necessary.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="6">
                                            Photos which are very fragile will be scanned by
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-6" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Special restore service (costs extra)</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="7">
                                            It may be possible to remove an object from a photo, or change the
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="8">
                                            A photo which is not correctly in
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-8" class="q-text" placeholder="">
                                            cannot be fixed.
                                        </div>
                                    </li>
                                </ul>

                                <p>Other information</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="9">
                                            Orders are completed within
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-9" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="10">
                                            Send the photos in a box (not
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-XW16JROLKCFE4BMH-10" class="q-text" placeholder="">
                                            ).
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 11-15</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                Dartfield House school used to be
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">a tourist information centre.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">a private home.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">a local council building.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                What is planned with regard to the lower school?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">All buildings on the main site will be improved.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">The lower school site will be used for new homes.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Additional school buildings will be constructed on the lower school site.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                The catering has been changed because of
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">long queuing times.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">changes to the school timetable.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">dissatisfaction with the menus.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                Parents are asked to
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">help their children to decide in advance which serving point to use.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">make sure their children have enough money for food.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">advise their children on healthy food to eat.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                What does the speaker say about the existing canteen?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-5" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Food will still be served there.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-5" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Only staff will have access to it.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-XW16JROLKCFE4BMH-5" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Pupils can take their food into it.</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <p>Questions 16-18</p>
                            <p>What comment does the speaker make about each of the following serving points in the Food Hall?</p>
                            <p>Choose <b>THREE</b> answers from the box and write the correct letter, <b>A-D</b>, next to Questions.</p>
                            <p><b>Comments</b></p>

                            <strong>A</strong>&nbsp;&nbsp; pupils help to plan menus
                            <strong>B</strong>&nbsp;&nbsp; only vegetarian food<br>
                            <strong>C</strong>&nbsp;&nbsp; different food every week<br>
                            <strong>D</strong>&nbsp;&nbsp; daily change in menu<br>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Food available at serving points in Food Hall</b></p>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="16">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    World Adventures
                                    <span class="q-question">
                                        <select name="matching_information-XW16JROLKCFE4BMH-1" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="17">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">17</span>
                                <span style="flex: 1;">
                                    Street Life
                                    <span class="q-question">
                                        <select name="matching_information-XW16JROLKCFE4BMH-2" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="18">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">18</span>
                                <span style="flex: 1;">
                                    Speedy Italian
                                    <span class="q-question">
                                        <select name="matching_information-XW16JROLKCFE4BMH-3" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        {{-- two_choices --}}
                        <fieldset class="q-item">
                            <p>Questions 19-20</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="19" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                <span class="q-number">20</span>
                                Which <b>TWO</b> optional after-school lessons are new?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XW16JROLKCFE4BMH-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">swimming</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XW16JROLKCFE4BMH-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">piano</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XW16JROLKCFE4BMH-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">acting</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XW16JROLKCFE4BMH-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">cycling</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XW16JROLKCFE4BMH-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">theatre sound and lighting</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- oc 2 --}}
                            <fieldset class="q-item">
                                <p>Questions 21-24</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-">
                                <h3>Assignment on sleep and dreams</h3>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    Luke read that one reason why we often forget dreams is that
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">our memories cannot cope with too much information.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">we might other wise be confused about what is real.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">we do not think they are important.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    What do Luke and Susie agree about dreams predicting the future?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It may just be due to chance.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It only happens with certain types of event.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It happens more often than some people think.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    Susie says that a study on pre-school children having a short nap in the day
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">had controversial results.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">used faulty researh methodology.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">failed to reach any clear conclusions.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    In their last assignment, both students had problems with
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">statistical analysis.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">making an action plan.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XW16JROLKCFE4BMH-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">self-assessment</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- fc_completion --}}
                            <fieldset class="q-item">
                                <p>Questions 25-30</p>
                                <p>Complete the flow chart below.</p>
                                <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            </fieldset>

                            <p style="text-align: center"><b>Assignment plan</b></p>
                            <fieldset class="q-item">
                                <table class=" aligncenter">
                                    <tbody>
                                        <tr>
                                            <td width="528">
                                                <p>Decide on research question:</p>
                                                <p>Is there a relationship between hours of sleep and number of dreams?</p>
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
                                                <p>Decide on sample:</p>
                                                <p>
                                                    <div class="q-list" data-type="fc_completion" data-q="25">
                                                        Twelve students from the
                                                        <span class="q-number-box">25</span>
                                                        <input type="text" name="fc_completion-XW16JROLKCFE4BMH-1" class="q-text" placeholder="">
                                                        department
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
                                                <p>Decide on methodology:</p>
                                                <p>Self-reporting</p>
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
                                                <p>Decide on procedure:</p>
                                                <p>
                                                    <div class="q-list" data-type="fc_completion" data-q="26">
                                                        Answers on 
                                                        <span class="q-number-box">26</span>
                                                        <input type="text" name="fc_completion-XW16JROLKCFE4BMH-2" class="q-text" placeholder="">
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
                                                    <div class="q-list" data-type="fc_completion" data-q="27">
                                                        Check ethical guidelines for working with
                                                        <span class="q-number-box">27</span>
                                                        <input type="text" name="fc_completion-XW16JROLKCFE4BMH-3" class="q-text" placeholder="">
                                                    </div>
                                                    <div class="q-list" data-type="fc_completion" data-q="28">
                                                        Ensure that risk is assessed and
                                                        <span class="q-number-box">28</span>
                                                        <input type="text" name="fc_completion-XW16JROLKCFE4BMH-4" class="q-text" placeholder="">
                                                        is kept to a minimum
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
                                                    <div class="q-list" data-type="fc_completion" data-q="29">
                                                        Analyse the results Calculate the correlation and make a 
                                                        <span class="q-number-box">29</span>
                                                        <input type="text" name="fc_completion-XW16JROLKCFE4BMH-5" class="q-text" placeholder="">
                                                    </div>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <p style="text-align: center">↓</p>

                            <fieldset class="q-item">
                                <p>
                                    <div class="q-list" data-type="fc_completion" data-q="30">
                                        Analyse the results Calculate the correlation and make a 
                                        <span class="q-number-box">30</span>
                                        <input type="text" name="fc_completion-XW16JROLKCFE4BMH-6" class="q-text" placeholder="">
                                    </div>
                                </p>
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-2-audio-4.mp3"></audio>
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
                            <p><b>Health benefits of dance</b></p>
                            <p><b>Recent findings:</b></p>
                            <ul>
                                <li>All forms of dance produce various hormones associated with feelings of happiness.</li>
                                <li>Dancing with others has a more positive impact than dancing alone.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        An experiment on university students suggested that dance increases
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-11" class="q-text" placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="32">
                                        For those with mental illness, dance could be used as a form of
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-12" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Benefits of dance for older people:</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="33">
                                        accessible for people with low levels of
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-13" class="q-text" placeholder="">
                                        when hunting or sleeping.
                                    </div>
                                </li>
                                <li>reduces the risk of heart disease</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="34">
                                        better 
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-14" class="q-text" placeholder="">
                                        reduces the risk of accidents
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="35">
                                        improves  
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-15" class="q-text" placeholder="">
                                        function by making it work faster
                                    </div>
                                </li>
                                <li>improves participants’ general well-being</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="36">
                                        gives people more
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-16" class="q-text" placeholder="">
                                        to take exercise
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        can lessen the feeling of
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-17" class="q-text" placeholder="">
                                        , very common in older people
                                    </div>
                                </li>
                            </ul>

                            <p><b>Benefits of Zumba:</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="38">
                                        A study at The University of Wisconsin showed that doing Zumba for 40 minutes uses up as many
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-XW16JROLKCFE4BMH-18" class="q-text" placeholder="">
                                        as other quite intense forms of exercise.
                                    </div>
                                </li>
                                <li>The American Journal of Health Behavior study showed that:</li>
                            </ul>

                            <br>

                            <p>
                                <div class="q-list" data-type="nc" data-q="39">
                                    – women suffering from
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-XW16JROLKCFE4BMH-19" class="q-text" placeholder="">
                                    benefited from doing Zumba.
                                </div>
                            </p>
                            <p>
                                <div class="q-list" data-type="nc" data-q="40">
                                    – Zumba became a
                                    <span class="q-number-box">40</span>
                                    <input type="text" name="nc-XW16JROLKCFE4BMH-20" class="q-text" placeholder="">
                                    for the participants.
                                </div>
                            </p>
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
