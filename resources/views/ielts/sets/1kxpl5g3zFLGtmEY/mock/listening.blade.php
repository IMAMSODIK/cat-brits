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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- nc --}}
                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p>Complete the form below.</p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0"
                                style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2"><h3>CRIME REPORT FORM</h3></th>
                                </tr>
                                <tr>
                                    <td><b>Type of crime:</b></td>
                                    <td>theft</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><i>Example</i></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>Louise <i>…Taylor…</i></td>
                                </tr>
                                <tr>
                                    <td><b>Nationality</b></td>
                                    <td>
                                        <div class="q-item" data-q="1" data-type="nc">
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of birth</td>
                                    <td>14 December 1977</td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>interior designer</td>
                                </tr>
                                <tr>
                                    <td>Reason for visit</td>
                                    <td>
                                        <div class="q-item" data-q="2" data-type="nc">
                                            business (to buy antique
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-2" class="q-text"
                                                placeholder="">
                                            )
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Length of stay</td>
                                    <td>two months</td>
                                </tr>
                                <tr>
                                    <td>Current address</td>
                                    <td>
                                        <div class="q-item" data-q="3" data-type="nc">
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-3" class="q-text"
                                                placeholder="">
                                            Apartments (No 15)
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Details of theft</b></td>
                                </tr>
                                <tr>
                                    <td>Items stolen</td>
                                    <td>
                                        <div class="q-item" data-q="4" data-type="nc">
                                            – a wallet containing approximately £
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-4" class="q-text"
                                                placeholder="">
                                        </div>
                                        <div class="q-item" data-q="5" data-type="nc">
                                            – a
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of theft</td>
                                    <td>
                                        <div class="q-item" data-q="6" data-type="nc">
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-6" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Possible time and place of theft</b></td>
                                </tr>
                                <tr>
                                    <td>Location </td>
                                    <td>
                                        <div class="q-item" data-q="7" data-type="nc">
                                            outside the
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-7" class="q-text"
                                                placeholder="">
                                            at about 4 pm
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Details of suspect</td>
                                    <td>
                                        <div class="q-item" data-q="8" data-type="nc">
                                            – some boys asked for the
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-8" class="q-text"
                                                placeholder="">
                                            then ran off
                                        </div>
                                        <br>
                                        – one had a T-shirt with a picture of a tiger
                                        <br>
                                        <div class="q-item" data-q="9" data-type="nc">
                                            – he was about 12, slim build with
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-9" class="q-text"
                                                placeholder="">
                                            hair
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Crime reference number allocated</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-q="10" data-type="nc">
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-10" class="q-text"
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-2.mp3"></audio>
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
                                Which <b>TWO</b> pieces of advice for the first week of an apprenticeship does the manager give?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">get to know colleagues</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">learn from any mistakes</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">ask lots of questions</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">react positively to feedback</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">enjoy new challenges</span>
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
                                Which <b>TWO</b> things does the manager say mentors can help with?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">confidence-building</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">making career plans</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">completing difficult tasks</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">making a weekly timetable</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">reviewing progress</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- matching_information --}}
                        <fieldset class="q-item">
                            <p>Questions 15-20</p>
                            <p>What does the manager say about each of the following aspects of the company policy for apprentices?</p>
                            <p>Write the correct letter, <b>A</b>, <b>B</b> or <b>C</b>, next to Questions.</p>

                            <strong>A</strong>&nbsp;&nbsp; It is encouraged. <br>
                            <strong>B</strong>&nbsp;&nbsp; There are some restrictions.<br>
                            <strong>C</strong>&nbsp;&nbsp; It is against the rules.
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Company policy for apprentices</h3>
                        </fieldset>

                        <fieldset class="q-item" data-q="15" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">15</span>
                                <span style="flex: 1;">
                                    Using the internet
                                    <span class="q-question">
                                        <select name="matching_information-1kxpl5g3zFLGtmEY-1" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="16" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">16</span>
                                <span style="flex: 1;">
                                    Flexible working
                                    <span class="q-question">
                                        <select name="matching_information-1kxpl5g3zFLGtmEY-2" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="17" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">17</span>
                                <span style="flex: 1;">
                                    Booking holidays
                                    <span class="q-question">
                                        <select name="matching_information-1kxpl5g3zFLGtmEY-3" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="18" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">18</span>
                                <span style="flex: 1;">
                                    Working overtime
                                    <span class="q-question">
                                        <select name="matching_information-1kxpl5g3zFLGtmEY-4" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="19" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">19</span>
                                <span style="flex: 1;">
                                    Wearing trainers
                                    <span class="q-question">
                                        <select name="matching_information-1kxpl5g3zFLGtmEY-5" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="20" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">20</span>
                                <span style="flex: 1;">
                                    Bringing food to work
                                    <span class="q-question">
                                        <select name="matching_information-1kxpl5g3zFLGtmEY-6" class="q-dropdown">
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-3.mp3"></audio>
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
                                <h3>Cities built by the sea</h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="21" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    Carla and Rob were surprised to learn that coastal cities
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">contain nearly half the world’s population.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">include most of the world’s largest cities.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">are growing twice as fast as other cities.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="22" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    According to Rob, building coastal cities near to rivers
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">may bring pollution to the cities.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">may reduce the land available for agriculture.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">may mean the countryside is spoiled by industry.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="23" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    What mistake was made when building water drainage channels in Miami in the 1950s?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">There were not enough for them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They were made of unsuitable materials.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They did not allow for the effects of climate change.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="24" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    What do Rob and Carla think that the authorities in Miami should do immediately?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">take measures to restore ecosystems</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">pay for a new flood prevention system</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">stop disposing of waste materials into the ocean</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="25" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    What do they agree should be the priority for international action?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">greater coordination of activities</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">more sharing of information</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-1kxpl5g3zFLGtmEY-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">agreement on shared policies</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <p>Questions 26-30</p>
                                <p>What decision do the students make about each of the following parts of their presentation?</p>
                                <p>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions.</p>
                                <p><b>Decisions</b></p>

                                <strong>A</strong>&nbsp;&nbsp; use visuals<br>
                                <strong>B</strong>&nbsp;&nbsp; keep it short<br>
                                <strong>C</strong>&nbsp;&nbsp; involve other students<br>
                                <strong>D</strong>&nbsp;&nbsp; check the information is accurate<br>
                                <strong>E</strong>&nbsp;&nbsp; provide a handout<br>
                                <strong>F</strong>&nbsp;&nbsp; focus on one example<br>
                                <strong>G</strong>&nbsp;&nbsp; do online research<br>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Parts of the presentation</h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="26" data-type="matching_information">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">26</span>
                                    <span style="flex: 1;">
                                        Historical background
                                        <span class="q-question">
                                            <select name="matching_information-1kxpl5g3zFLGtmEY-7" class="q-dropdown">
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

                            <fieldset class="q-item" data-q="27" data-type="matching_information">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">27</span>
                                    <span style="flex: 1;">
                                        Geographical factors
                                        <span class="q-question">
                                            <select name="matching_information-1kxpl5g3zFLGtmEY-8" class="q-dropdown">
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

                            <fieldset class="q-item" data-q="28" data-type="matching_information">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">28</span>
                                    <span style="flex: 1;">
                                        Past mistakes
                                        <span class="q-question">
                                            <select name="matching_information-1kxpl5g3zFLGtmEY-9" class="q-dropdown">
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

                            <fieldset class="q-item" data-q="29" data-type="matching_information">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">29</span>
                                    <span style="flex: 1;">
                                        Future risks
                                        <span class="q-question">
                                            <select name="matching_information-1kxpl5g3zFLGtmEY-10" class="q-dropdown">
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

                            <fieldset class="q-item" data-q="30" data-type="matching_information">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">30</span>
                                    <span style="flex: 1;">
                                        International implications
                                        <span class="q-question">
                                            <select name="matching_information-1kxpl5g3zFLGtmEY-11" class="q-dropdown">
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
                                src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-1-audio-4.mp3"></audio>
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
                        <p><b>Marine renewable energy (ocean energy)</b></p>
                        <p><i>Introduction</i></p>
                        <p>
                            More energy required because of growth in population and
                            <span class="q-number-box">31</span>
                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-11" data-q="31" data-type="nc" class="q-text"
                                placeholder="">
                        </p>
                        <p>What’s needed:</p>
                        <ul>
                            <li>renewable energy sources</li>
                            <li>methods that won’t create pollution</li>
                        </ul>

                        <p><b>Wave energy</b></p>
                        <p>
                            Advantage: waves provide a 
                            <span class="q-number-box">32</span>
                            <input type="text" name="nc-1kxpl5g3zFLGtmEY-12" data-q="32" data-type="nc" class="q-text"
                                placeholder="">
                            source of renewable energy
                        </p>
                        <p>Electricity can be generated using offshore or onshore systems</p>
                        <p>Onshore systems may use a reservoir</p>
                        
                        <p><b>Problems:</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-q="33" data-type="nc">
                                    waves can move in any
                                    <span class="q-number-box">33</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-13" class="q-text"
                                        placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-q="34" data-type="nc">
                                    movement of sand, etc. on the
                                    <span class="q-number-box">34</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-14" class="q-text"
                                        placeholder="">
                                    of the ocean may be affected
                                </div>
                            </li>
                        </ul>

                        <p><b>Tidal energy</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-q="35" data-type="nc">
                                    Tides are more
                                    <span class="q-number-box">35</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-15" data-type="nc" class="q-text"
                                        placeholder="">
                                </div>
                            </li>
                        </ul>

                        <p>Planned tidal lagoon in Wales:</p>
                        <ul>
                            <li>
                                <div class="q-list" data-q="36" data-type="nc">
                                    will be created in a
                                    <span class="q-number-box">36</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-16" data-type="nc" class="q-text"
                                        placeholder="">
                                    at Swansea
                                </div>
                            </li>
                            <li>breakwater (dam) containing 16 turbines</li>
                            <li>rising tide forces water through turbines, generating electricity</li>
                            <li>
                                <div class="q-list" data-q="37" data-type="nc">
                                    stored water is released through
                                    <span class="q-number-box">37</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-17" data-type="nc" class="q-text"
                                        placeholder="">
                                    , driving the turbines in the reverse direction
                                </div>
                            </li>
                        </ul>

                        <p><b>Advantages:</b></p>
                        <ul>
                            <li>not dependent on weather</li>
                            <li>
                                <div class="q-list" data-q="38" data-type="nc">
                                    no
                                    <span class="q-number-box">38</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-18" data-type="nc" class="q-text"
                                        placeholder="">
                                    is required to make it work
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-q="39" data-type="nc">
                                    likely to create a number of
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-19" data-type="nc" class="q-text"
                                        placeholder="">
                                </div>
                            </li>
                        </ul>

                        <p><b>Problem:</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-q="40" data-type="nc">
                                    may ham fish and birds, e.g. by affecting
                                    <span class="q-number-box">40</span>
                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-20" data-type="nc" class="q-text"
                                        placeholder="">
                                    and building up silt
                                </div>
                            </li>
                        </ul>

                        <p><b>Ocean thermal energy conversion</b></p>
                        <p>Uses a difference in temperature between the surface and lower levels</p>
                        <p>Water brought to the surface in a pipe</p>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.listening.component')
    @include('ielts.sets.layouts.mock.listening.script')
</body>

</html>
