<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.mock.listening.head')

<body>
    @include('ielts.sets.layouts.mock.listening.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">Section 1</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Section 2</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Section 3</button>
            <button class="x-tab" role="tab" id="tab-mse" aria-controls="panel-mse" aria-selected="false"
                data-id="mse">Section 4</button>
        </div>
        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Section 1</div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="qa highlighted-content">
                        <form class="qa-body">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 1-10 the Reading Passage!</p>
                                <div class="audio-player">
                                    <audio
                                        src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Questions 1-6</b></p>
                                <p><i>Write <b>ONE WORD</b> for each answer.</i></p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0"
                                style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2">SELF-DRIVE TOURS IN THE USA</th>
                                </tr>
                                <tr>
                                    <td colspan="2"><i>Example</i></td>
                                </tr>
                                <tr>
                                    <td><b>Name:</b></td>
                                    <td><b>Andrea </b><i>......Brown.....</i></td>
                                </tr>
                                <tr>
                                    <td><b>Address:</b></td>
                                    <td>
                                        <div class="q-item" data-q="1" data-type="nc">
                                            24
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-XJ3XOcvqPbgdZwyl-1" class="q-text"
                                                placeholder="">
                                            road
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Postcode:</b></td>
                                    <td>BH5 2OP</td>
                                </tr>
                                <tr>
                                    <td><b>Phone:</b></td>
                                    <td>(mobile) 077 8664 3091</td>
                                </tr>
                                <tr>
                                    <td><b>Heard about company from:</b></td>
                                    <td>
                                        <div class="q-item" data-q="2" data-type="nc">
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Possible self-drive tours</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Trip One:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="3" data-type="nc">
                                                    Los Angeles: customer wants to visit some
                                                    <span class="q-number-box">3</span>
                                                    <input type="text" name="nc-XJ3XOcvqPbgdZwyl-3" class="q-text"
                                                        placeholder="">
                                                    parks with her children
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-item" data-q="4" data-type="nc">
                                                    Yosemite Park: customer wants to stay in a lodge, not a
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="nc-XJ3XOcvqPbgdZwyl-4" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Trip Two:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="5" data-type="nc">
                                                    Customer wants to see the
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="nc-XJ3XOcvqPbgdZwyl-5" class="q-text"
                                                        placeholder="">
                                                    on the way to Cambria
                                                </div>
                                            </li>
                                            <li>At Santa Monica: not interested in shopping</li>
                                            <li>
                                                Yosemite Park: customer wants to stay in a lodge, not a
                                                <div class="q-item" data-q="6" data-type="nc">
                                                    At San Diego, wants to spend time on the
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="nc-XJ3XOcvqPbgdZwyl-6" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>

                            <fieldset class="q-item">
                                <p><b>Questions 7-10</b></p>
                                <p>Complete the table below.</p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <table border="1" cellpadding="8" cellspacing="0"
                                style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th></th>
                                    <th><b>Number of days</b></th>
                                    <th><b>Total distance</b></th>
                                    <th><b>Price (per person)</b></th>
                                    <th><b>Includes</b></th>
                                </tr>
                                <tr>
                                    <th><b>Trip One</b></th>
                                    <td>12 days</td>
                                    <td>
                                        <div class="q-item" data-q="7" data-type="tc">
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="tc-XJ3XOcvqPbgdZwyl-1" class="q-text"
                                                placeholder="">
                                            km
                                        </div>
                                    </td>
                                    <td>£525</td>
                                    <td>
                                        <ul>
                                            <li>accommodation</li>
                                            <li>car</li>
                                            <li>
                                                <div class="q-item" data-q="8" data-type="tc">
                                                    one
                                                    <span class="q-number-box">8</span>
                                                    <input type="text" name="tc-XJ3XOcvqPbgdZwyl-2" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th><b>Trip Two</b></th>
                                    <td>9 days</td>
                                    <td>
                                        980 km
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="9" data-type="tc">
                                            £
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="tc-XJ3XOcvqPbgdZwyl-3" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>accommodation</li>
                                            <li>car</li>
                                            <li>
                                                <div class="q-item" data-q="10" data-type="tc">
                                                    <span class="q-number-box">10</span>
                                                    <input type="text" name="tc-XJ3XOcvqPbgdZwyl-4" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Section 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 11-20</p>
                            <div class="audio-player">
                                <audio
                                    src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Questions 11-12</b></p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="two_choices" data-q="1">
                            <legend class="q-text no-border">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which TWO facilities at the leisure club have recently been improved?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XJ3XOcvqPbgdZwyl-1[]" value="A">
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">the gym</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XJ3XOcvqPbgdZwyl-1[]" value="B">
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the tracks</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XJ3XOcvqPbgdZwyl-1[]" value="C">
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">the indoor pool</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XJ3XOcvqPbgdZwyl-1[]" value="D">
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">the outdoor pool</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-XJ3XOcvqPbgdZwyl-1[]" value="E">
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">the sports training for children</span>
                                </label>

                            </div>
                        </fieldset>


                        <fieldset class="q-item">
                            <p><b>Questions 13-20</b></p>
                            <p>Complete the notes below.</p>
                            <p>Write <b>NO MORE THEN TWO WORDS</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Joining the leisure club</b></p>
                            <p><i>Personal Assessment</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="3" data-type="nc">
                                        New members should describe any
                                        <span class="q-number-box">13</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-7" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="4" data-type="nc">
                                        The
                                        <span class="q-number-box">14</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-8" class="q-text"
                                            placeholder="">
                                        will be explained to you before you use the equipment.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="5" data-type="nc">
                                        You will be given a six-week
                                        <span class="q-number-box">15</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-9" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><i>Types of membership</i></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="6" data-type="nc">
                                        There is a compulsory £90
                                        <span class="q-number-box">16</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-10" class="q-text"
                                            placeholder="">
                                        fee for members.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="7" data-type="nc">
                                        Gold members are given
                                        <span class="q-number-box">17</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-11" class="q-text"
                                            placeholder="">
                                        to all the LP clubs.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8" data-type="nc">
                                        Premier members are given priority during
                                        <span class="q-number-box">18</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-12" class="q-text"
                                            placeholder="">
                                        hours.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="9" data-type="nc">
                                        Premier members can bring some
                                        <span class="q-number-box">19</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-13" class="q-text"
                                            placeholder="">
                                        every month.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="10" data-type="nc">
                                        Members should always take their
                                        <span class="q-number-box">20</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-14" class="q-text"
                                            placeholder="">
                                        with them.
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Section 3</div>
                <div class="reading-section">
                    <div class="qa highlighted-content">
                        <form class="qa-body">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 21-30</p>
                                <div class="audio-player">
                                    <audio
                                        src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 21-25</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>Global Design Competition</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    Students entering the design competition have to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">produce an energy-efficient design.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">adapt an existing energy-saving appliance.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">develop a new use for current technology.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    John chose a dishwasher because he wanted to make dishwashers
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">more appealing.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">more common.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">more economical.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    The stone in John’s ‘Rockpool’ design is used
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">for decoration.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to switch it on.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to stop water escaping.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    In the holding chamber, the carbon dioxide
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">changes back to a gas.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">dries the dishes.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">is allowed to cool.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5" data-type="oc">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    At the end of the cleaning process, the carbon dioxide
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">is released into the air.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">is disposed of with the waste.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-XJ3XOcvqPbgdZwyl-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">is collected ready to be re-used.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Questions 26-30</b></p>
                                <p>Complete the notes below.</p>
                                <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                            </fieldset>

                            <fieldset class="q-item" id="panel-sa">
                                <ul>
                                    <li>
                                        <div class="q-list" data-q="6" data-type="nc">
                                            John needs help preparing for his
                                            <span class="q-number-box">26</span>
                                            <input type="text" name="nc-XJ3XOcvqPbgdZwyl-15" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="7" data-type="nc">
                                            The professor advises John to make a
                                            <span class="q-number-box">27</span>
                                            <input type="text" name="nc-XJ3XOcvqPbgdZwyl-16" class="q-text"
                                                placeholder="">
                                            of his design.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="8" data-type="nc">
                                            John’s main problem is getting good quality
                                            <span class="q-number-box">28</span>
                                            <input type="text" name="nc-XJ3XOcvqPbgdZwyl-17" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="9" data-type="nc">
                                            The professor suggests John apply for a
                                            <span class="q-number-box">29</span>
                                            <input type="text" name="nc-XJ3XOcvqPbgdZwyl-18" class="q-text"
                                                placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-q="10" data-type="nc">
                                            The professor will check the
                                            <span class="q-number-box">30</span>
                                            <input type="text" name="nc-XJ3XOcvqPbgdZwyl-19" class="q-text"
                                                placeholder="">
                                            information in John’s written report.
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
                <div class="x-panel-inner">Content: Section 4</div>
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
                            <p>Complete the notes below.</p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3><b>THE SPIRIT BEAR</b></h3>
                            <p><b>General facts</b></p>
                            <ul>
                                <li>It is a white bear belonging to the black bear family.</li>
                                <li>
                                    <div class="q-list" data-q="1" data-type="nc">
                                        Its colour comes from an uncommon
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-20" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="2" data-type="nc">
                                        Local people believe that it has unusual
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-21" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="3" data-type="nc">
                                        They protect the bear from
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-22" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Habitat</b></p>
                            <ul>
                                <li>The bear’s relationship with the forest is complex.</li>
                                <li>
                                    <div class="q-list" data-q="4" data-type="nc">
                                        Tree roots stop
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-23" class="q-text"
                                            placeholder="">
                                        along salmon streams.
                                    </div>
                                </li>
                                <li>The bears’ feeding habits provide nutrients for forest vegetation.</li>
                                <li>
                                    <div class="q-list" data-q="5" data-type="nc">
                                        It is currently found on a small number of
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-24" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Threats</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="6" data-type="nc">
                                        Habitat is being lost due to deforestation and construction of
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-25" class="q-text"
                                            placeholder="">
                                        by logging companies.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="7" data-type="nc">
                                        Unrestricted
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-26" class="q-text"
                                            placeholder="">
                                        is affecting the salmon supply.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="8" data-type="nc">
                                        The bears’ existence is also threatened by their low rate of
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-27" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Going forward</b></p>
                            <ul>
                                <li>Interested parties are working together.</li>
                                <li>
                                    <div class="q-list" data-q="9" data-type="nc">
                                        Logging companies must improve their
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-28" class="q-text"
                                            placeholder="">
                                        by logging companies.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="10" data-type="nc">
                                        Maintenance and
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-XJ3XOcvqPbgdZwyl-29" class="q-text"
                                            placeholder="">
                                        of the spirit bears’ territory is needed.
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
