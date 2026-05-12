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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p>Complete the notes below.</p>
                                <p><i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Early Learning Childcare Centre Enrolment Form</b></p>
                                <p><i>Example</i></p>
                                <p>Parent or guardian: Carol <i>……….Smith……….</i></p>
                                <p><b>Personal Details</b></p>
                                <p>Child’s name: Kate</p>

                                <p>
                                    <div class="q-list" data-type="nc" data-q="1">
                                        Age:
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-1" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="2">
                                        Address:
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-2" class="q-text" placeholder="">
                                        Road, Woodside, 4032
                                    </div>
                                </p>
                                <p>
                                    Phone: 3345 9865
                                </p>
                                <p><b>Childcare Information</b></p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="3">
                                        Days enrolled for: Monday and
                                        <span class="q-number-box">3</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-3" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="4">
                                        Start time:
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-4" class="q-text" placeholder="">
                                        am
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="5">
                                        Childcare group: the
                                        <span class="q-number-box">5</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-5" class="q-text" placeholder="">
                                        group
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="6">
                                        Which meal/s are required each day?
                                        <span class="q-number-box">6</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-6" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="7">
                                        Medical conditions: needs
                                        <span class="q-number-box">7</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-7" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="8">
                                        Emergency contact: Jenny
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-8" class="q-text" placeholder="">
                                        Phone: 3346 7523
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="9">
                                        Relationship to child:
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-9" class="q-text" placeholder="">
                                    </div>
                                </p>
                                <p>
                                    <div class="q-list" data-type="nc" data-q="10">
                                        Will pay each
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="form_completion-s4gzzYRpwLnhLRFf-10" class="q-text" placeholder="">
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 11-12</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="11" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which TWO things does Alice say about the Dolphin Conservation Trust?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-s4gzzYRpwLnhLRFf-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Children make up most of the membership.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-s4gzzYRpwLnhLRFf-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">It’s the country’s largest conservation organisation.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-s4gzzYRpwLnhLRFf-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It helps finance campaigns for changes in fishing practices.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-s4gzzYRpwLnhLRFf-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">It employs several dolphin experts full-time.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-s4gzzYRpwLnhLRFf-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">Volunteers help in various ways.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 13-15</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                Why is Alice so pleased the Trust has won the Charity Commission award?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It has brought in extra money.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">It made the work of the trust better known.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It has attracted more members.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                Alice says oil exploration causes problems to dolphins because of
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">noise.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">oil leaks.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">movement of ships.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                Local newspapers have raised worries about
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">she saw one swimming near her home.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">she heard a speaker at her school.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-s4gzzYRpwLnhLRFf-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">she read a book about them.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 16-20</p>
                            <p>Which dolphin does Alice make each of the following comments about?</p>
                            <p><i>Write the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>, next to questions</i></p>
                            <p><b>Dolphins</b></p>

                            <table cellspacing="15">
                                <tr>
                                    <td><b>A</b></td>
                                    <td>Moondancer</td>
                                </tr>
                                <tr>
                                    <td><b>B</b></td>
                                    <td>Echo</td>
                                </tr>
                                <tr>
                                    <td><b>C</b></td>
                                    <td>Kiwi</td>
                                </tr>
                                <tr>
                                    <td><b>D</b></td>
                                    <td>Samson</td>
                                </tr>
                            </table>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3><b>Comments</b></h3>
                        </fieldset>

                        <fieldset class="q-item" data-type="matching_information" data-q="16">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    It has not been seen this year. 
                                    <span class="q-question">
                                        <select name="matching_information-s4gzzYRpwLnhLRFf-1" class="q-dropdown">
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
                                    It is photographed more than the others.
                                    <span class="q-question">
                                        <select name="matching_information-s4gzzYRpwLnhLRFf-2" class="q-dropdown">
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
                                    It is always very energetic.
                                    <span class="q-question">
                                        <select name="matching_information-s4gzzYRpwLnhLRFf-3" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="matching_information" data-q="19">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">19</span>
                                <span style="flex: 1;">
                                    It is the newest one in the scheme.
                                    <span class="q-question">
                                        <select name="matching_information-s4gzzYRpwLnhLRFf-4" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="matching_information" data-q="20">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">20</span>
                                <span style="flex: 1;">
                                    It has an unusual shape.
                                    <span class="q-question">
                                        <select name="matching_information-s4gzzYRpwLnhLRFf-5" class="q-dropdown">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-3-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 21-25</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    What helped Rob to prepare to play the character of a doctor?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the stories his grandfather told him</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the times when he watched his grandfather working</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the way he imagined his grandfather at work</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    In the play’s first scene, the boredom of village life was suggested by
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">repetition of words and phrases.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">scenery painted in dull colours.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">long pauses within conversations.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    What has Rob learned about himself through working in a group?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">He likes to have clear guidelines.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">He copes well with stress.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">He thinks she is a good leader.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    To support the production, research material was used which described
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">political developments.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">changing social attitudes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">economic transformations.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="25">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    What problem did the students overcome in the final rehearsal?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">one person forgetting their words</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">an equipment failure</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-s4gzzYRpwLnhLRFf-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the injury of one character</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 26-30</p>
                                <p>What action is needed for the following stages in doing the ‘year abroad’ option?</p>
                                <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A</b>-<b>G</b>, next to questions</i></p>
                                <p><b>Action</b></p>

                                <table cellspacing="15">
                                    <tr>
                                        <td><b>A</b></td>
                                        <td>be on time</td>
                                    </tr>
                                    <tr>
                                        <td><b>B</b></td>
                                        <td>get a letter of recommendation</td>
                                    </tr>
                                    <tr>
                                        <td><b>C</b></td>
                                        <td>plan for the final year</td>
                                    </tr>
                                    <tr>
                                        <td><b>D</b></td>
                                        <td>make sure the institution’s focus is relevant</td>
                                    </tr>
                                    <tr>
                                        <td><b>E</b></td>
                                        <td>show ability in Theatre Studies</td>
                                    </tr>
                                    <tr>
                                        <td><b>F</b></td>
                                        <td>make travel arrangements and bookings</td>
                                    </tr>
                                    <tr>
                                        <td><b>G</b></td>
                                        <td>ask for help</td>
                                    </tr>
                                </table>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>Stages in doing the ‘year abroad’ option</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="26">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">26</span>
                                    <span style="flex: 1;">
                                         in the second year of the course
                                        <span class="q-question">
                                            <select name="s4gzzYRpwLnhLRFf-6" class="q-dropdown">
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
                                        when first choosing where to go
                                        <span class="q-question">
                                            <select name="matching_information-s4gzzYRpwLnhLRFf-7" class="q-dropdown">
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
                                        when sending in your choices
                                        <span class="q-question">
                                            <select name="matching_information-s4gzzYRpwLnhLRFf-8" class="q-dropdown">
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
                                        when writing your personal statement
                                        <span class="q-question">
                                            <select name="matching_information-s4gzzYRpwLnhLRFf-9" class="q-dropdown">
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
                                        when doing the year abroad
                                        <span class="q-question">
                                            <select name="matching_information-s4gzzYRpwLnhLRFf-10" class="q-dropdown">
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
                                src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-4.mp3"></audio>
                            <input type="range" class="timeline" value="0" disabled>
                            <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                        </div>
                    </fieldset>

                    <fieldset class="q-item">
                        <p>Questions 31-40</p>
                    </fieldset>

                    <fieldset class="q-item">
                        <p>Complete the notes below.</p>
                        <p>Write <b>ONE WORD ONLY for each answer.</b></p>
                        <h3>‘Self-regulatory focus theory’ and leadership</h3>
                        <p><b>Self-regulatory focus theory</b></p>
                        
                        <p>People’s focus is to approach pleasure or avoid pain</p>
                        <p>
                            <div class="q-list" data-type="nc" data-q="31">
                                Promotion goals focus on
                                <span class="q-number-box">31</span>
                                <input type="text" name="nc-s4gzzYRpwLnhLRFf-1" class="q-text" placeholder="">
                            </div>
                        </p>
                        <p>Prevention goals emphasise avoiding punishment</p>
                        <p>Factors that affect people’s focus</p>
                        <p><b>The Chronic Factor</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="32">
                                    comes from one’s
                                    <span class="q-number-box">32</span>
                                    <input type="text" name="nc-s4gzzYRpwLnhLRFf-2" class="q-text" placeholder="">
                                </div>
                                <div class="q-list" data-type="nc" data-q="3">
                                    The
                                    <span class="q-number-box">33</span>
                                    <input type="text" name="nc-s4gzzYRpwLnhLRFf-33" class="q-text" placeholder="">
                                    Factor
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="34">
                                    we are more likely to focus on promotion goals when with a
                                    <span class="q-number-box">34</span>
                                    <input type="text" name="nc-s4gzzYRpwLnhLRFf-4" class="q-text" placeholder="">
                                    in certain countries
                                </div>
                            </li>
                            <li>
                                we are more likely to focus on prevention goals with our boss
                            </li>
                        </ul>

                        <p><b>External influences on businesses</b></p>
                        <p>
                            <div class="q-list" data-type="nc" data-q="35">
                                Promotion Focus: People think about an ideal version of themselves, their
                                <span class="q-number-box">35</span>
                                <input type="text" name="nc-s4gzzYRpwLnhLRFf-5" class="q-text" placeholder="">
                                and their gains.
                            </div>
                        </p>
                        <p>Prevention Focus: People think about their ‘ought’ self and their obligations</p>

                        <p><b>Leaders</b></p>
                        <p>
                            <div class="q-list" data-type="nc" data-q="36">
                                Leadership behaviour and
                                <span class="q-number-box">36</span>
                                <input type="text" name="nc-s4gzzYRpwLnhLRFf-6" class="q-text" placeholder="">
                                affects people’s focus
                            </div>
                        </p>
                        <p><i>Transformational Leaders:</i></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="37">
                                    pay special attention to the
                                    <span class="q-number-box">37</span>
                                    <input type="text" name="nc-s4gzzYRpwLnhLRFf-7" class="q-text" placeholder="">
                                    of their followers
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="38">
                                    passionately communicate a clear
                                    <span class="q-number-box">38</span>
                                    <input type="text" name="nc-s4gzzYRpwLnhLRFf-8" class="q-text" placeholder="">
                                </div>
                            </li>
                            <li>inspire promotion focus in followers</li>
                        </ul>

                        <p><i>Transactional Leaders:</i></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="39">
                                    create 
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-s4gzzYRpwLnhLRFf-9" class="q-text" placeholder="">
                                    to make expectations clear
                                </div>
                            </li>
                            <li>emphasise the results of a mistake</li>
                            <li>inspire prevention focus in followers</li>
                        </ul>

                        <p><b>Conclusion</b></p>
                        <p>
                            <div class="q-list" data-type="nc" data-q="40">
                                Promotion Focus is good for jobs requiring
                                <span class="q-number-box">40</span>
                                <input type="text" name="nc-s4gzzYRpwLnhLRFf-10" class="q-text" placeholder="">
                                to make expectations clear
                            </div>
                        </p>
                        <p>Prevention Focus is good for work such as a surgeon</p>
                        <p>Leaders’ actions affect which focus people use</p>
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
