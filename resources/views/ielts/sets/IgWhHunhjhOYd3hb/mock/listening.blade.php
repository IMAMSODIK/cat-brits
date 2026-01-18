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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- nc --}}

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Complete the notes below.</p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <h3 style="text-align: center">First day at work</h3>
                            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <td>Name of supervisor</td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="1">
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-IgWhHunhjhOYd3hb-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Where to leave coat and bag:</td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="2">
                                            use 
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-IgWhHunhjhOYd3hb-2" class="q-text"
                                                placeholder="">
                                            in staffroom
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>See Tiffany in HR:</td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="3">
                                            to give
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-IgWhHunhjhOYd3hb-3" class="q-text"
                                                placeholder="">
                                        </div>
                                        <div class="q-item" data-type="nc" data-q="4">
                                            number to collect
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-IgWhHunhjhOYd3hb-4" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Location of HR office:</td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="5">
                                            on
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-IgWhHunhjhOYd3hb-5" class="q-text"
                                                placeholder="">
                                            floor
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Supervisor’s mobile number:</td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="6">
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-IgWhHunhjhOYd3hb-6" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            {{-- tc --}}
                            <fieldset class="q-item">
                                <p>Questions 7-10</p>
                                <p><i>Complete the table below.</i></p>
                                <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                            </fieldset>

                            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="4">Responsibilities</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th><b>Task 1</b></th>
                                    <th><b>Task 2</b></th>
                                    <th><b>Notes</b></th>
                                </tr>
                                <tr>
                                    <td>Bakery section</td>
                                    <td>Check sell by dates</td>
                                    <td>Change price labels</td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="7">
                                            Use 
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="tc-IgWhHunhjhOYd3hb-1" class="q-text"
                                                placeholder="">
                                            labels
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sushi takeaway counter</td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="8">
                                            Re-stock with
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="tc-IgWhHunhjhOYd3hb-2" class="q-text"
                                                placeholder="">
                                            boxes if needed
                                        </div>
                                    </td>
                                    <td>Wipe preparation area and clean the sink</td>
                                    <td>Do not clean any knives</td>
                                </tr>
                                <tr>
                                    <td>Meat and fish counters</td>
                                    <td>Clean the serving area, including the weighing scales</td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="9">
                                            Collect 
                                            <span class="q-number-box">9</span>
                                            <input type="text" data-type="tc" name="tc-IgWhHunhjhOYd3hb-3" class="q-text"
                                                placeholder="">
                                            for the fish from the cold-room
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="10">
                                            Must wear special
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="tc-IgWhHunhjhOYd3hb-4" class="q-text"
                                                placeholder="">
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
                                    src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-2-.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- two_choices --}}
                        <fieldset class="q-item">
                            <p>Questions 11-12</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="11" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which <b>TWO</b> problems with some training programmes for new runners does Liz mention?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">There is a risk of serious injury.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">They are unsuitable for certain age groups.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">They are unsuitable for people with health issues.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">It is difficult to stay motivated.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">There is a lack of individual support.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 13-14</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="13" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                <span class="q-number">14</span>
                                Which <b>TWO</b> tips does Liz recommend for new runners?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">doing two runs a week</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">running in the evening</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">going on runs with a friend</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">listening to music during runs</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-IgWhHunhjhOYd3hb-3[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">running very slowly</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <h3>Questions 15-18</h3>
                            <p>What reason prevented each of the following members of the Compton Park Runners Club from joining until recently? Write the correct letter, <b>A</b>, <b>B</b>, or <b>C</b>.</p>
                            <h3>Reasons</h3>
                            <p><b>A</b>. a lack of confidence</p>
                            <p><b>B</b>. a dislike of running</p>
                            <p><b>C</b>. a lack of time</p>
                        </fieldset>

                        <p><b>Club members</b></p>

                        <fieldset class="q-item" data-type="matching_information" data-q="15">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    Ceri  
                                    <span class="q-question">
                                        <select name="matching_information-IgWhHunhjhOYd3hb-1" class="q-dropdown">
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
                                    James   
                                    <span class="q-question">
                                        <select name="matching_information-IgWhHunhjhOYd3hb-2" class="q-dropdown">
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
                                    Leo   
                                    <span class="q-question">
                                        <select name="matching_information-IgWhHunhjhOYd3hb-3" class="q-dropdown">
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
                                    Mark
                                    <span class="q-question">
                                        <select name="matching_information-IgWhHunhjhOYd3hb-4" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 19-20</p>
                            <p><i>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</i></p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="19">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                What does Liz say about running her first marathon?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 19 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-IgWhHunhjhOYd3hb-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It had always been her ambition.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-IgWhHunhjhOYd3hb-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Her husband persuaded her to do it.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-IgWhHunhjhOYd3hb-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">She nearly gave up before the end.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="20">
                            <legend class="q-text">
                                <span class="q-number">20</span>
                                Liz says new runners should sign up for a race
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 20 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-IgWhHunhjhOYd3hb-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">every six months.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-IgWhHunhjhOYd3hb-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">within a few weeks of taking up running.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-IgWhHunhjhOYd3hb-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">after completing several practice runs.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- oc --}}
                            <fieldset class="q-item">
                                <p>Questions 21-25</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    Kieran thinks the packing advice given by Jane’s grandfather is
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">common sense.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">hard to follow.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">over-protective.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    How does Jane feel about the books her grandfather has given her?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">They are not worth keeping.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They should go to a collector.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They have sentimental value for her.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    Jane and Kieran agree that hardback books should be
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">put out on display.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">given as gifts to visitors.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">more attractively designed.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    While talking about taking a book from a shelf, Jane
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">describes the mistakes other people make doing it.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">reflects on a significant childhood experience.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">explains why some books are easier to remove than others.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="25">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    What do Jane and Kieran suggest about new books?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Their parents liked buying them as presents.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They would like to buy more of them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-IgWhHunhjhOYd3hb-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Not everyone can afford them.</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <h3>Questions 26-30</h3>
                                <p>Where does Jane’s grandfather keep each of the following types of books in his shop?</p>
                                <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>.</i></p>
                                <h3>Location of books</h3>
                                <p><b>A</b> near the entrance</p>
                                <p><b>B</b> in the attic</p>
                                <p><b>C</b> at the back of the shop</p>
                                <p><b>D</b> on a high shelf</p>
                                <p><b>E</b> near the stairs</p>
                                <p><b>F</b> in a specially designed space</p>
                                <p><b>G</b> within the cafe</p>
                            </fieldset>

                            <p><b>Types of books</b></p>

                            <fieldset class="q-item" data-type="matching_information" data-q="26">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">26</span>
                                    <span style="flex: 1;">
                                        rare books
                                        <span class="q-question">
                                            <select name="matching_information-IgWhHunhjhOYd3hb-4" class="q-dropdown">
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
                                        children’s books
                                        <span class="q-question">
                                            <select name="matching_information-IgWhHunhjhOYd3hb-5" class="q-dropdown">
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
                                        unwanted books
                                        <span class="q-question">
                                            <select name="matching_information-IgWhHunhjhOYd3hb-6" class="q-dropdown">
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
                                        requested books
                                        <span class="q-question">
                                            <select name="matching_information-IgWhHunhjhOYd3hb-7" class="q-dropdown">
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
                                        coursebooks
                                        <span class="q-question">
                                            <select name="matching_information-IgWhHunhjhOYd3hb-8" class="q-dropdown">
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
                                    src="https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-4-audio-4.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- nc --}}
                        <fieldset class="q-item">
                            <p>Questions 31-40</p>
                            <p><i>Complete the notes below.</i></p>
                            <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3 style="text-align: center">Tree planting</h3>
                            <p><b>Reforestation projects should:</b></p>

                            <p>– include a range of tree species</p>
                            <p>
                                – not include invasive species because of possible
                                <span class="q-number-box">31</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-7" data-q="31" data-type="nc" class="q-text" placeholder="">
                                with native species
                            </p>
                            <p>
                                – aim to capture carbon, protect the environment and provide sustainable sources of
                                <span class="q-number-box">32</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-8" data-q="32" data-type="nc" class="q-text" placeholder="">
                                for local people
                            </p>
                            <p>
                                – use tree seeds with a high genetic diversity to increase resistance to
                                <span class="q-number-box">33</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-9" data-q="33" data-type="nc" class="q-text" placeholder="">
                                and climate change
                            </p>
                            <p>
                                – plant trees on previously forested land which is in a bad condition, not select land which is being used for
                                <span class="q-number-box">34</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-10" data-q="34" data-type="nc" class="q-text" placeholder="">
                            </p>

                            <p><b>Large-scale reforestation projects</b></p>
                            <p>
                                – Base planning decisions on information from accurate
                                <span class="q-number-box">35</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-11" data-q="35" data-type="nc" class="q-text" placeholder="">
                            </p>
                            <p>
                                – Drones are useful for identifying areas in Brazil which are endangered by keeping
                                <span class="q-number-box">36</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-12" data-q="36" data-type="nc" class="q-text" placeholder="">
                                and illegal logging.
                            </p>

                            <p><b>Lampang Province, Northern Thailand</b></p>
                            <p>– A forest was restored in an area damaged by mining.</p>
                            <p>– A variety of native fig trees were planted, which are important for</p>
                            <p>+ supporting many wildlife species</p>
                            <p>
                                + increasing the 
                                <span class="q-number-box">37</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-13" data-q="37" data-type="nc" class="q-text" placeholder="">
                                of recovery by attracting animals and birds, e.g.,
                                <span class="q-number-box">38</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-14" data-q="38" data-type="nc" class="q-text" placeholder="">
                                were soon attracted to the area.
                            </p>

                            <p><b>Involving local communities</b></p>
                            <p>
                                – Destruction of mangrove forests in Madagascar made it difficult for people to make a living from
                                <span class="q-number-box">39</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-15" data-q="39" data-type="nc" class="q-text" placeholder="">
                            </p>
                            <p>– The mangrove reforestation project:</p>
                            <p>+ provided employment for local people</p>
                            <p>+ restored a healthy ecosystem</p>
                            <p>
                                + protects against the higher risk of
                                <span class="q-number-box">40</span>
                                <input type="text" name="nc-IgWhHunhjhOYd3hb-16" data-q="40" data-type="nc" class="q-text" placeholder="">
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
