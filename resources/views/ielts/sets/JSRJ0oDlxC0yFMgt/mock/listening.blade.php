<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.mock.listening.head')

<body>
    

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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- nc --}}
                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p>Complete the notes below.</p>
                                <p>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</p>
                            </fieldset>

                            <h3>Restaurant Recommendations</h3>
                            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th><b>Name of restaurant</b></th>
                                    <th><b>Location</b></th>
                                    <th><b>Reason for recommendation</b></th>
                                    <th><b>Other comments</b></th>
                                </tr>
                                <tr>
                                    <td>The Junction</td>
                                    <td>Greyson Street, near the station</td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            Good for people who are especially keen on
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="2">
                                            Quite expensive The 
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-2" class="q-text"
                                                placeholder="">
                                            is a good place for a drink
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paloma</td>
                                    <td>In Bow Street next to the cinema</td>
                                    <td>
                                        <div class="q-item" data-q="3">
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-3" class="q-text"
                                                placeholder="">
                                            food, good for sharing
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="4">
                                            Staff are very friendly Need to pay £50 deposit A limited selection of 
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-4" class="q-text"
                                                placeholder="">
                                            food on the menu
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-q="5">
                                            The 
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="6">
                                            At the top of a
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-6" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="7">
                                            A famous chef <br>All the
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-7" class="q-text"
                                                placeholder="">
                                            are very good <br>Only uses
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-8" class="q-text"
                                                placeholder="">
                                            ingredients
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="9">
                                            Set lunch costs £
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-9" class="q-text"
                                                placeholder="">
                                            per person <br> Portions probably of 
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-10" class="q-text"
                                                placeholder="">
                                            size
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
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 11-16</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                Heather says pottery differs from other art forms because
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">It lasts longer in the ground.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">It is practised by more people.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It can be repaired more easily.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                Archaeologists sometimes identify the use of ancient pottery from
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">The clay it was made with.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">The marks that are on it.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">The basic shape of it.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                Some people join Heather’s pottery class because they want to
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Create an item that looks very old.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Find something that they are good at.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Make something that will outlive them.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                What does Heather value most about being a potter?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Its calming effect</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Its messy nature</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Its physical benefits</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                Most of the visitors to Edelman Pottery
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-5" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Bring friends to join courses.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-5" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Have never made a pot before.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-5" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Try to learn techniques too quickly.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="16">
                            <legend class="q-text">
                                <span class="q-number">16</span>
                                Heather reminds her visitors that they should
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 166 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-6" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Put on their aprons.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-6" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Change their clothes.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-6" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Take off their jewellery.</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- two_choices --}}
                        <fieldset class="q-item">
                            <p>Questions 17-18</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">17</span>
                                <span class="q-number">18</span>
                                Which <b>TWO</b> things does Heather explain about kilns?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">What their function is</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">When they were invented</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Ways of keeping them safe</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Where to put one in your home</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">What some people use instead of one</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 19-20</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                <span class="q-number">20</span>
                                Which points does Heather make about a potter’s tools?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Mushrooms should always be peeled before eating.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Mushrooms eaten by animals may be unsafe.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Cooking destroys toxins in mushrooms.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Brightly coloured mushrooms can be edible.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-3[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">All poisonous mushrooms have a bad smell.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- two_chocies --}}
                            <fieldset class="q-item">
                                <p>Questions 21-22</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> things do the students both believe are responsible for the increase in loneliness?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_chocies-xQKeqKYrkqfdgotg-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Social media</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_chocies-xQKeqKYrkqfdgotg-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Smaller nuclear families</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_chocies-xQKeqKYrkqfdgotg-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Urban design</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_chocies-xQKeqKYrkqfdgotg-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Longer lifespans</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_chocies-xQKeqKYrkqfdgotg-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">A mobile workforce</span>
                                    </label>
                                </div>
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

                        {{-- nc --}}
                        <fieldset class="q-item">
                            <p>Questions 13-40</p>
                            <p><b>Complete the notes below.</b></p>
                            <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Pockets</h3>
                            <p><b>Reason for choice of subject</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="31">
                                        They are
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-11" class="q-text" placeholder="">
                                        but can be overlooked by consumers and designers.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Pockets in men’s clothes</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="32">
                                        Men started to wear
                                        <span class="q-number-box">32</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-12" class="q-text" placeholder="">
                                            in the 18th century.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="33">
                                        A
                                        <span class="q-number-box">33</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-13" class="q-text" placeholder="">
                                            sewed pockets into the lining of the garments.
                                    </div>
                                </li>
                                <li>The wearer could use the pockets for small items.</li>
                                <li>
                                    <div class="q-list" data-q="34">
                                        Bigger pockets might be made for men who belonged to a certain type of 
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-14" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Pockets in women’s clothes</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-q="35">
                                        Women’s pockets were less
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-15" class="q-text" placeholder="">
                                        than men’s.
                                    </div>
                                </li>
                                <li>Women were very concerned about pickpockets.</li>
                                <li>
                                    <div class="q-list" data-q="36">
                                        Pockets were produced in pairs using
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-16" class="q-text" placeholder="">
                                        to link them together.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="37">
                                        Pockets hung from the women’s
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-17" class="q-text" placeholder="">
                                        under skirts and petticoats.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="38">
                                        Items such as
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-18" class="q-text" placeholder="">
                                        could be reached through a gap in the material.
                                    </div>
                                </li>
                                <li>Pockets, of various sizes, stayed inside clothing for many decades.</li>
                                <li>
                                    <div class="q-list" data-q="39">
                                        When dresses changed shape, hidden pockets had a negative effect on the
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-19" class="q-text" placeholder="">
                                        of women.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-q="40">
                                        Bags called ‘pouches’ became popular, before women carried a
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-JSRJ0oDlxC0yFMgt-20" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Question List -->
    <div class="floating-questions collapsed" id="floatingQuestions">
        <!-- Tombol Icon -->
        <button class="fq-fab" id="fqToggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Panel Soal -->
        <div class="fq-body" id="fqBody">
            <div class="fq-list" id="fqList"></div>
        </div>
    </div>

    <button class="floating-btn" id="try-again" onclick="retryQuiz()" style="display: none">
        <i class="fas fa-paper-plane" style="margin-right: 10px"></i> Try Again
    </button>

    <button class="floating-btn" id="doneBtn">
        <i class="fas fa-paper-plane" style="margin-right: 10px"></i> Submit
    </button>

    <div class="highlight-toolbar" id="highlightToolbar">
        <div class="color-option yellow" data-color="yellow"></div>
        <div class="color-option green" data-color="green"></div>
        <div class="color-option blue" data-color="blue"></div>
        <div class="color-option pink" data-color="pink"></div>
        <div class="color-option orange" data-color="orange"></div>
        <button id="highlightNote" title="Add Note">📝</button>
        <button id="removeHighlight" title="Remove Highlight">✕</button>
    </div>

    <div class="note-popup" id="notePopup">
        <textarea id="noteText" placeholder="Tulis catatan..."></textarea>
        <div>
            <button id="saveNote" class="save">Simpan</button>
            <button id="cancelNote" class="cancel">Batal</button>
        </div>
    </div>

    <div id="resultModal" class="custom-modal">
        <div class="custom-modal-content">
            <div class="custom-modal-header">
                <div class="score-summary-header">
                    <div class="score-circle" id="scoreCircle">
                        <span id="scoreDisplay">0/0</span>
                        <small id="scorePercentage">0</small>
                    </div>
                    <div class="modal-title">Your Results</div>
                </div>
                <button class="modal-close" onclick="closeModal()">×</button>
            </div>

            <div class="custom-modal-body">
                <!-- Results Table -->
                <table class="result-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Your Answer</th>
                            <th>Correct Answer</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="resultsTableBody">
                        <!-- Results will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>

            <!-- Action Buttons -->
            <div class="modal-actions">
                <button class="modal-btn btn-secondary" onclick="closeModal()">Close</button>
                <button class="modal-btn btn-primary" onclick="retryQuiz()">Try Again</button>
            </div>
        </div>
    </div>

    <!-- MODAL CONFIRMATION -->
    <div id="confirmModal">
        <div class="box">
            <h3>Audio Notice</h3>
            <p>The audio in this section can only be played once for each part.</p>
            <button id="confirmYes">Yes, continue</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        function confirmExit() {
            if (confirm('Are you sure you want to end the test?')) {
                location.href = '/ielts/categories?set-id={{ $set->kode }}';
            }
        }
        let scoreMap = [{
                score: 9.0,
                min: 39,
                max: 40
            },
            {
                score: 8.5,
                min: 37,
                max: 38
            },
            {
                score: 8.0,
                min: 35,
                max: 36
            },
            {
                score: 7.5,
                min: 32,
                max: 34
            },
            {
                score: 7.0,
                min: 30,
                max: 31
            },
            {
                score: 6.5,
                min: 26,
                max: 29
            },
            {
                score: 6.0,
                min: 23,
                max: 25
            },
            {
                score: 5.5,
                min: 18,
                max: 22
            },
            {
                score: 5.0,
                min: 16,
                max: 17
            },
            {
                score: 4.5,
                min: 13,
                max: 15
            },
            {
                score: 4.0,
                min: 11,
                max: 12
            },
            {
                score: 3.5,
                min: 8,
                max: 10
            },
            {
                score: 3.0,
                min: 6,
                max: 7
            },
            {
                score: 2.5,
                min: 4,
                max: 5
            },
        ];

        function convertScore(correctCount) {
            for (let row of scoreMap) {
                if (correctCount >= row.min && correctCount <= row.max) {
                    return row.score;
                }
            }
            return 0; // jika kurang dari 4 benar
        }
    </script>

    <script>
        function showModal(title = "Hasil Jawaban Anda") {
            $("#modalScoreTitle").text(title);
            $("#resultModal").addClass("show");
            $("body").css("overflow", "hidden");
        }

        function closeModal() {
            $("#resultModal").removeClass("show");
            $("body").css("overflow", "auto");

            // Pastikan modal benar-benar tersembunyi setelah animasi
            setTimeout(function() {
                $("#resultModal").hide();
            }, 300);
        }

        function retryQuiz() {
            closeModal();

            location.reload()
        }

        $(document).on("click", ".modal-close, .btn-secondary", function() {
            closeModal();
        });

        $(document).on("click", function(e) {
            if (e.target.id === "resultModal") {
                closeModal();
            }
        });

        $(document).on("keydown", function(e) {
            if (e.key === "Escape") {
                closeModal();
            }
        });

        $(document).ready(function() {
            $("#resultModal").removeClass("show").hide();
        });
    </script>

    <!-- script bagian audio player -->
    <script>
        (function setupAudioPlayers() {
            const players = document.querySelectorAll('.audio-player');

            players.forEach(player => {
                const audio = player.querySelector('audio');
                const playBtn = player.querySelector('.ap-play');
                const muteBtn = player.querySelector('.ap-vol');
                const seek = player.querySelector('.ap-seek');
                const progress = player.querySelector('.ap-progress');
                const cur = player.querySelector('.ap-current');
                const dur = player.querySelector('.ap-duration');
                const iconPlay = player.querySelector('.ap-icon-play');
                const iconPause = player.querySelector('.ap-icon-pause');
                const track = player.querySelector('.ap-track');

                function fmt(t) {
                    if (!isFinite(t)) return '0:00';
                    const m = Math.floor(t / 60);
                    const s = Math.floor(t % 60);
                    return m + ':' + String(s).padStart(2, '0');
                }

                // durasi
                audio.addEventListener('loadedmetadata', () => {
                    dur.textContent = fmt(audio.duration);
                });

                // update progress
                audio.addEventListener('timeupdate', () => {
                    cur.textContent = fmt(audio.currentTime);
                    const pct = (audio.currentTime / (audio.duration || 1)) * 100;
                    progress.style.width = pct + '%';
                    seek.value = pct;
                });

                // play/pause toggle
                playBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (audio.paused) audio.play();
                    else audio.pause();
                });

                audio.addEventListener('play', () => {
                    iconPlay.style.display = 'none';
                    iconPause.style.display = 'inline';
                    playBtn.setAttribute('aria-label', 'Pause audio');
                });

                audio.addEventListener('pause', () => {
                    iconPlay.style.display = 'inline';
                    iconPause.style.display = 'none';
                    playBtn.setAttribute('aria-label', 'Play audio');
                });

                // seek slider
                seek.addEventListener('input', (e) => {
                    e.stopPropagation();
                    if (!audio.duration) return;
                    const t = (parseFloat(seek.value) / 100) * audio.duration;
                    audio.currentTime = t;
                    console.log("Seek input →", t);
                });

                seek.addEventListener('change', (e) => {
                    e.stopPropagation();
                    if (!audio.duration) return;
                    const t = (parseFloat(seek.value) / 100) * audio.duration;
                    audio.currentTime = t;
                    console.log("Seek change →", t);
                });

                // klik progress bar
                track.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (!audio.duration) return;
                    const rect = track.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const pct = x / rect.width;
                    const t = pct * audio.duration;
                    audio.currentTime = t;
                    console.log("Track click →", t);
                });

                // mute toggle
                muteBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    audio.muted = !audio.muted;
                    muteBtn.querySelector('.ap-icon').textContent = audio.muted ? '🔇' : '🔊';
                    muteBtn.setAttribute('aria-label', audio.muted ? 'Unmute audio' : 'Mute audio');
                });
            });
        })();
    </script>


    <script>
        (function() {
            let remaining = 0;
            let t = null;
            const el = document.getElementById('timeText');
            const wrap = document.getElementById('timer');

            function format(mmss) {
                const m = Math.floor(mmss / 60);
                const s = mmss % 60;
                return String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
            }

            function tick() {
                if (remaining <= 0) {
                    clearInterval(t);
                    t = null;
                    el.textContent = '00:00';
                    wrap.classList.add('danger');
                    document.getElementById('doneBtn').disabled = true;
                    document.getElementById('doneBtn').style.opacity = 0.7;
                    document.getElementById('doneBtn').style.cursor = 'not-allowed';

                    $("#retake").css("display", "");

                    let results = [];

                    $('.q-item, .q-list').each(function() {
                        // Skip jika elemen ini berada di dalam .q-list lain (menghindari duplikasi)
                        if ($(this).closest('.q-list').length && !$(this).is('.q-list')) return;

                        const type = $(this).data('type');
                        const qnum = $(this).data('q');

                        if (typeof type === 'undefined') return;

                        let name = null;
                        let answer = null;

                        switch (type) {
                            case 'tfng':
                            case 'oc':
                            case 'ynng':
                                const checked = $(this).find('input[type="radio"]:checked');
                                if (checked.length > 0) {
                                    name = checked.attr('name');
                                    answer = checked.val();
                                } else {
                                    const anyRadio = $(this).find('input[type="radio"]').first();
                                    if (anyRadio.length > 0) name = anyRadio.attr('name');
                                }
                                break;

                            case 'sa':
                            case 'tc':
                            case 'nc':
                                const input = $(this).find('input[type="text"]');
                                if (input.length > 0) {
                                    name = input.attr('name');
                                    answer = input.val();
                                }
                                break;

                            case 'mh':
                            case 'mse':
                                const select = $(this).find('select');
                                if (select.length > 0) {
                                    name = select.attr('name');
                                    answer = select.val();
                                }
                                break;
                        }

                        results.push({
                            type: type,
                            name: name,
                            answer: answer || null,
                            question: qnum || null
                        });
                    });

                    $.ajax({
                        url: '/ielts/mock-test/check',
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            set_id: 'JSRJ0oDlxC0yFMgt',
                            kategori: 'listening',
                            answers: results,
                            tipe_test: 'mock'
                        },
                        success: function(response) {
                            $("#try-again").css('display', '');
                            $("#doneBtn").css('display', 'none');

                            if (response.status === 'ok') {
                                let correctCount = 0;
                                let total = Object.keys(response.results).length;
                                let tableRows = '';
                                let questionNumber = 1;

                                $.each(response.results, function(key, data) {
                                    let isCorrect = data.status === 'correct';
                                    if (isCorrect) correctCount++;

                                    let correctAnswer = data.correct || '';
                                    let userAnswer = data.user || '';
                                    if (!correctAnswer && isCorrect) correctAnswer = userAnswer;
                                    if (!correctAnswer) correctAnswer = 'NOT GIVEN';

                                    tableRows += `
                                        <tr>
                                            <td><strong>${questionNumber++}</strong></td>
                                            <td><span class="answer-display ${isCorrect ? 'answer-correct' : 'answer-wrong'}">${userAnswer}</span></td>
                                            <td><span class="answer-display answer-correct-option">${correctAnswer}</span></td>
                                            <td>
                                                <span class="status-badge ${isCorrect ? 'correct' : 'wrong'}">
                                                    <span class="status-icon">${isCorrect ? '✅' : '❌'}</span>
                                                    ${isCorrect ? 'Correct' : 'Wrong'}
                                                </span>
                                            </td>
                                        </tr>
                                    `;
                                });

                                // Update skor di UI
                                $("#scoreDisplay").text(`${correctCount}/${total}`);
                                $("#scorePercentage").text(`${convertScore(correctCount)}`);

                                let percentage = (correctCount / total) * 100;
                                let scoreCircle = $(".score-circle");
                                if (percentage >= 80) {
                                    scoreCircle.css("background",
                                        "linear-gradient(135deg, #27ae60, #2ecc71)");
                                } else if (percentage >= 60) {
                                    scoreCircle.css("background",
                                        "linear-gradient(135deg, #f39c12, #e67e22)");
                                } else {
                                    scoreCircle.css("background",
                                        "linear-gradient(135deg, #e74c3c, #c0392b)");
                                }

                                $("#resultsTableBody").html(tableRows);

                                // tampilkan modal hasil
                                showModal(`Score: ${correctCount} / ${total}`);
                            } else {
                                alert('Terjadi kesalahan: ' + response.message);
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                            alert('Terjadi kesalahan: ' + xhr.status);
                        }
                    });

                    return;
                }
                remaining -= 1;
                el.textContent = format(remaining);
                // Kedipkan danger saat < 60 detik
                if (remaining <= 60) {
                    wrap.classList.add('danger');
                }
            }

            function startCountdown(seconds) {
                if (t) clearInterval(t);
                remaining = Math.max(0, Math.floor(seconds));
                el.textContent = format(remaining);
                wrap.classList.toggle('danger', remaining <= 60);
                document.getElementById('doneBtn').disabled = false;
                document.getElementById('doneBtn').style.opacity = 1;
                document.getElementById('doneBtn').style.cursor = 'pointer';
                t = setInterval(tick, 1000);
            }

            // Public API (opsional)
            window.CATHeader = {
                startCountdown
            };

            // Events
            document.getElementById('infoBtn').addEventListener('click', function() {
                // Ganti dengan modal/informasi instruksi Anda
                alert(
                    'Instructions:\n- Read the questions carefully\n- The timer runs automatically\n- Click "Finish" to submit'
                );

            });
            // Mulai countdown (contoh: 15 menit)
            startCountdown(13 * 60);
        })();
    </script>

    <!-- script bagian part soal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const section = document.querySelector('.parts-section');
            if (!section) return;

            const xTabs = section.querySelector('.x-tabs');
            const tabs = Array.from(xTabs.querySelectorAll('.x-tab'));
            const panels = Array.from(section.querySelectorAll('.x-panel'));

            function updateEdgeHints() {
                const max = xTabs.scrollWidth - xTabs.clientWidth;
                const x = Math.round(xTabs.scrollLeft);
                xTabs.classList.toggle('has-left', x > 0);
                xTabs.classList.toggle('has-right', x < max - 1);
            }

            function setActive(id) {
                tabs.forEach(btn => {
                    const active = btn.dataset.id === id;
                    btn.classList.toggle('is-active', active);
                    btn.setAttribute('aria-selected', active ? 'true' : 'false');
                    btn.tabIndex = active ? 0 : -1;
                    if (active) {
                        btn.scrollIntoView({
                            behavior: 'smooth',
                            inline: 'center',
                            block: 'nearest'
                        });
                    }
                });
                panels.forEach(p => {
                    const open = p.id === `panel-${id}`;
                    if (open) {
                        p.removeAttribute('hidden');
                        p.classList.add('is-open');
                    } else {
                        p.setAttribute('hidden', '');
                        p.classList.remove('is-open');
                    }
                });
                xTabs.dataset.active = id;
            }

            /* Event delegation untuk klik tab (lebih andal) */
            xTabs.addEventListener('click', (e) => {
                const btn = e.target.closest('.x-tab');
                if (!btn || !xTabs.contains(btn)) return;
                setActive(btn.dataset.id);
            });

            /* Drag/Swipe pada .x-tabs */
            let down = false,
                moved = false,
                startX = 0,
                startLeft = 0,
                pid = null;
            xTabs.addEventListener('pointerdown', (e) => {
                // Hanya izinkan drag jika bukan klik pada tab
                if (e.target.closest('.x-tab')) {
                    down = false;
                    return;
                }
                down = true;
                moved = false;
                pid = e.pointerId;
                xTabs.setPointerCapture(pid);
                startX = e.clientX;
                startLeft = xTabs.scrollLeft;
            });
            xTabs.addEventListener('pointermove', (e) => {
                if (!down) return;
                const dx = e.clientX - startX;
                if (Math.abs(dx) > 3) moved = true;
                xTabs.scrollLeft = startLeft - dx;
            });

            function endDrag(e) {
                if (pid) {
                    try {
                        xTabs.releasePointerCapture(pid);
                    } catch {}
                }
                pid = null;
                down = false;
                if (moved && e && e.target.closest('.x-tab')) e.preventDefault(); /* cegah klik nyangkut */
                moved = false;
            }
            xTabs.addEventListener('pointerup', endDrag);
            xTabs.addEventListener('pointercancel', endDrag);
            xTabs.addEventListener('pointerleave', endDrag);

            /* Wheel vertikal -> horizontal (trackpad/mouse) */
            xTabs.addEventListener('wheel', (e) => {
                if (Math.abs(e.deltaY) > Math.abs(e.deltaX) && xTabs.scrollWidth > xTabs.clientWidth) {
                    xTabs.scrollBy({
                        left: e.deltaY,
                        behavior: 'auto'
                    });
                    e.preventDefault();
                }
            }, {
                passive: false
            });

            /* Keyboard navigation */
            tabs.forEach(btn => {
                btn.addEventListener('keydown', (e) => {
                    if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
                    e.preventDefault();
                    const idx = tabs.indexOf(btn);
                    const nextIdx = e.key === 'ArrowRight' ? (idx + 1) % tabs.length : (idx - 1 +
                        tabs.length) % tabs.length;
                    tabs[nextIdx].focus();
                    tabs[nextIdx].click();
                });
            });

            /* Init */
            updateEdgeHints();
            xTabs.addEventListener('scroll', updateEdgeHints);
            window.addEventListener('resize', updateEdgeHints);
            setActive('tfng');
        });
    </script>

    <!-- script bagian reading + questions  -->
    <script>
        $(document).on('change', '.q-option input', function() {
            let parent = $(this).closest('.q-item');
            let option = $(this).closest('.q-option');

            if (this.type === "radio") {
                parent.find('.q-option').removeClass('is-selected');
                option.addClass('is-selected');
            }

            if (this.type === "checkbox") {
                option.toggleClass('is-selected', this.checked);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Semua panel
            const panels = document.querySelectorAll('.x-panel');

            panels.forEach(panel => {
                const section = panel.querySelector('.reading-section');
                if (!section) return;

                // --- Pilihan soal (radio) ---
                section.addEventListener('click', function(e) {
                    const opt = e.target.closest('.q-option');
                    if (!opt) return;
                    const fieldset = opt.closest('.q-item');
                    const input = opt.querySelector('input[type="radio"]');
                    if (!fieldset || !input) return;

                    // Set radio checked
                    input.checked = true;

                    // Hapus highlight semua sibling
                    fieldset.querySelectorAll('.q-option').forEach(el => el.classList.remove(
                        'is-selected'));
                    opt.classList.add('is-selected');
                });

                section.addEventListener('change', function(e) {
                    const radio = e.target;
                    if (!(radio instanceof HTMLInputElement)) return;
                    if (radio.type !== 'radio') return;
                    const fieldset = radio.closest('.q-item');
                    if (!fieldset) return;
                    fieldset.querySelectorAll('.q-option').forEach(el => {
                        const r = el.querySelector('input[type="radio"]');
                        el.classList.toggle('is-selected', r && r.checked);
                    });
                });

                // --- Resize handle ---
                const grid = section.querySelector('.resizable-grid');
                const handle = section.querySelector('.resize-handle');
                if (!grid || !handle) return;

                let isDragging = false;

                handle.addEventListener('mousedown', e => {
                    e.preventDefault();
                    isDragging = true;
                    document.body.style.cursor = 'col-resize';
                });

                window.addEventListener('mousemove', e => {
                    if (!isDragging) return;
                    const gridRect = grid.getBoundingClientRect();
                    const totalWidth = gridRect.width;
                    const offsetX = e.clientX - gridRect.left;

                    const leftWidth = Math.max(250, offsetX);
                    const rightWidth = Math.max(250, totalWidth - leftWidth - handle.offsetWidth);

                    grid.style.gridTemplateColumns =
                        `${leftWidth}px ${handle.offsetWidth}px ${rightWidth}px`;
                });

                window.addEventListener('mouseup', () => {
                    if (isDragging) {
                        isDragging = false;
                        document.body.style.cursor = 'default';
                    }
                });

            }); // end forEach panel

            // Optional: function global ambil jawaban panel tertentu
            window.getPanelAnswers = function(panelEl) {
                const out = {};
                const section = panelEl.querySelector('.reading-section');
                if (!section) return out;

                section.querySelectorAll('.q-item').forEach(fs => {
                    const name = fs.querySelector('input[type="radio"]')?.name;
                    const checked = fs.querySelector('input[type="radio"]:checked');
                    if (name) out[name] = checked ? checked.value : null;
                });

                return out;
            };
        });
    </script>

    <!-- script bagian highlight + note -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toolbar = document.getElementById('highlightToolbar');
            const notePopup = document.getElementById('notePopup');
            const noteText = document.getElementById('noteText');

            let currentSelection = null;
            let selectedColor = 'yellow';
            let currentHighlight = null;
            let activePassage = null;

            // === Pilih warna highlight ===
            document.querySelectorAll('.color-option').forEach(option => {
                option.addEventListener('click', () => {
                    selectedColor = option.dataset.color;
                    applyHighlight(selectedColor, false);
                });
            });

            // === Toolbar tombol catatan ===
            document.getElementById('highlightNote').addEventListener('click', () => {
                if (currentSelection) {
                    applyHighlight(selectedColor, true);
                }
            });

            // === Hapus highlight ===
            document.getElementById('removeHighlight').addEventListener('click', () => {
                if (currentSelection) {
                    const node = currentSelection.startContainer.parentNode;
                    if (node.classList.contains('highlight')) {
                        const textNode = document.createTextNode(node.textContent);
                        node.replaceWith(textNode);
                    }
                    hideToolbar();
                    window.getSelection().removeAllRanges();
                    currentSelection = null;
                }
            });

            // === Save & Cancel Note ===
            document.getElementById('saveNote').addEventListener('click', () => {
                if (currentHighlight) {
                    const note = noteText.value.trim();
                    if (note) {
                        currentHighlight.dataset.note = note;
                        if (!currentHighlight.querySelector('.note-indicator')) {
                            const dot = document.createElement('span');
                            dot.className = 'note-indicator';
                            currentHighlight.appendChild(dot);
                        }
                    } else {
                        delete currentHighlight.dataset.note;
                        const dot = currentHighlight.querySelector('.note-indicator');
                        if (dot) dot.remove();
                    }
                }
                hideNotePopup();
            });

            document.getElementById('cancelNote').addEventListener('click', hideNotePopup);

            // === Init highlight di semua panel ===
            document.querySelectorAll('.x-panel').forEach(panel => {
                const passageBody = panel.querySelector('.highlighted-content');

                passageBody.addEventListener('mouseup', (e) => {
                    const selection = window.getSelection();
                    if (selection && !selection.isCollapsed) {
                        currentSelection = selection.getRangeAt(0);
                        activePassage = passageBody;
                        const rect = currentSelection.getBoundingClientRect();
                        showToolbar(rect);
                    } else {
                        hideToolbar();
                    }
                });

                // Klik highlight untuk buka note
                passageBody.addEventListener('click', e => {
                    if (e.target.classList.contains('highlight') && e.target.dataset.note) {
                        currentHighlight = e.target;
                        showNotePopup(e.target, e.target.dataset.note);
                    }
                });
            });

            // === Klik luar → tutup toolbar & note popup ===
            document.addEventListener('click', e => {
                if (!toolbar.contains(e.target) &&
                    !notePopup.contains(e.target) &&
                    (!e.target.classList.contains('highlight') || !e.target.closest(
                        '.highlighted-content')) &&
                    !window.getSelection().toString()) {
                    hideToolbar();
                    hideNotePopup();
                }
            });

            // === Fungsi helper ===
            function applyHighlight(color, withNote = false) {
                if (!currentSelection) return;

                const span = document.createElement('span');
                span.className = `highlight highlight-${color}`;
                span.textContent = currentSelection.toString();
                currentSelection.deleteContents();
                currentSelection.insertNode(span);

                if (withNote) {
                    currentHighlight = span;
                    showNotePopup(span);
                }

                hideToolbar();
                window.getSelection().removeAllRanges();
                currentSelection = null;
            }

            function showToolbar(rect) {
                toolbar.style.display = 'flex';
                toolbar.style.left = rect.left + window.scrollX + 'px';
                toolbar.style.top = rect.top + window.scrollY - 40 + 'px';
            }

            function hideToolbar() {
                toolbar.style.display = 'none';
                currentSelection = null;
            }

            function showNotePopup(highlightEl, existing = '') {
                noteText.value = existing;
                const rect = highlightEl.getBoundingClientRect();
                notePopup.style.display = 'block';
                notePopup.style.left = rect.left + window.scrollX + 'px';
                notePopup.style.top = rect.bottom + window.scrollY + 5 + 'px';
            }

            function hideNotePopup() {
                notePopup.style.display = 'none';
                currentHighlight = null;
            }
        });
    </script>

    <!-- script bagian floating question list -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const floatingQ = document.getElementById('floatingQuestions');
            const fqBody = document.getElementById('fqBody');
            const fqList = document.getElementById('fqList');
            const fqToggle = document.getElementById('fqToggle');

            if (!floatingQ || !fqBody || !fqList || !fqToggle) return;

            let isCollapsed = false;
            let currentPart = 'tfng';
            let questionCount = 0;

            // Toggle collapse
            fqToggle.addEventListener('click', () => {
                isCollapsed = !isCollapsed;
                floatingQ.classList.toggle('collapsed', isCollapsed);
                floatingQ.classList.toggle('expanded', !isCollapsed);
            });

            // Generate question numbers
            function generateQuestionList(partId, count) {
                fqList.innerHTML = '';
                questionCount = count;

                for (let i = 1; i <= count; i++) {
                    const item = document.createElement('a');
                    item.href = '#';
                    item.className = 'fq-item';
                    item.textContent = i;
                    item.dataset.q = i;
                    item.dataset.part = partId;

                    // Scroll ke soal saat diklik
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        scrollToQuestion(i, partId);
                    });

                    fqList.appendChild(item);
                }
            }

            // Scroll ke soal tertentu
            function scrollToQuestion(qNum, partId) {
                const panel = document.getElementById(`panel-${partId}`);
                if (!panel) return;

                const question = panel.querySelector(`[data-q="${qNum}"]`);
                if (question) {
                    question.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    question.focus();
                }
            }

            // Update status soal (radio, dropdown, text)
            function updateQuestionStatus(partId) {
                const panel = document.getElementById(`panel-${partId}`);
                if (!panel) return;

                fqList.querySelectorAll('.fq-item').forEach(item => {
                    item.classList.remove('answered', 'current');
                });

                for (let i = 1; i <= questionCount; i++) {
                    const item = fqList.querySelector(`[data-q="${i}"][data-part="${partId}"]`);
                    if (!item) continue;

                    const question = panel.querySelector(`[data-q="${i}"]`);
                    if (!question) continue;

                    let answered = false;

                    // Radio
                    const radioChecked = question.querySelector('input[type="radio"]:checked');
                    if (radioChecked) answered = true;

                    // Dropdown
                    const dropdown = question.querySelector('select.q-dropdown');
                    if (dropdown && dropdown.value !== '') answered = true;

                    // Text input
                    const textInput = question.querySelector('input[type="text"], textarea');
                    if (textInput && textInput.value.trim() !== '') answered = true;

                    if (answered) item.classList.add('answered');
                }
            }

            // Deteksi jawaban berubah
            function watchAnswerChanges() {
                document.addEventListener('input', (e) => {
                    const question = e.target.closest('[data-q]');
                    if (question) updateQuestionStatus(currentPart);
                });

                document.addEventListener('change', (e) => {
                    const question = e.target.closest('[data-q]');
                    if (question) updateQuestionStatus(currentPart);
                });

                document.addEventListener('click', (e) => {
                    const option = e.target.closest('.q-option');
                    if (option) setTimeout(() => updateQuestionStatus(currentPart), 50);
                });
            }

            // Deteksi perubahan part
            function watchPartChanges() {
                const observer = new MutationObserver((mutations) => {
                    mutations.forEach((mutation) => {
                        if (mutation.type === 'attributes' && mutation.attributeName ===
                            'data-active') {
                            const newPart = mutation.target.dataset.active;
                            if (newPart && newPart !== currentPart) {
                                currentPart = newPart;
                                updateQuestionListForPart(newPart);
                            }
                        }
                    });
                });

                const tabsContainer = document.querySelector('.x-tabs');
                if (tabsContainer) observer.observe(tabsContainer, {
                    attributes: true,
                    attributeFilter: ['data-active']
                });
            }

            // Update question list untuk part aktif
            function updateQuestionListForPart(partId) {
                const questionCounts = {
                    'tfng': 10,
                    'tfng2': 10,
                    'ynng': 10,
                    'mse': 10,
                };
                const count = questionCounts[partId] || 5;
                generateQuestionList(partId, count);
                updateQuestionStatus(partId);
            }

            // Init
            updateQuestionListForPart('tfng');
            watchPartChanges();
            watchAnswerChanges();
            setInterval(() => updateQuestionStatus(currentPart), 2000);
        });
    </script>

    <script>
        /* ====== Audio tab controller (fixed stop-on-switch) ====== */

        let currentAudio = null;
        let currentTimerId = null;

        // format mm:ss
        function formatTime(sec) {
            sec = isNaN(sec) ? 0 : Math.floor(sec);
            const m = Math.floor(sec / 60);
            const s = sec % 60;
            return `${m}:${s < 10 ? '0' : ''}${s}`;
        }

        // reset UI for a panel's audio (progress+time)
        function resetPanelUI(panel) {
            const prog = panel.querySelector(".timeline");
            const cur = panel.querySelector(".current");
            const dur = panel.querySelector(".duration");
            if (prog) prog.value = 0;
            if (cur) cur.textContent = "0:00";
            if (dur) {
                // leave duration as-is (if already loaded) or show 0:00
                if (!panel.querySelector("audio").duration || isNaN(panel.querySelector("audio").duration)) {
                    dur.textContent = "0:00";
                }
            }
            // if you used a visual progress element instead of range, reset its width:
            const visualProg = panel.querySelector(".seekbar-progress");
            if (visualProg) visualProg.style.width = "0%";
        }

        // stop & reset current audio (completely)
        function stopCurrentAudio() {
            if (!currentAudio) return;

            // pause & reset time
            try {
                currentAudio.pause();
                currentAudio.currentTime = 0;
            } catch (e) {
                /* ignore */
            }

            // clear interval timer if any
            if (currentTimerId) {
                clearInterval(currentTimerId);
                currentTimerId = null;
            }

            // reset UI for the panel that had currentAudio
            const panel = currentAudio.closest(".x-panel");
            if (panel) resetPanelUI(panel);

            // unset currentAudio reference
            currentAudio = null;
        }

        // start timer to update UI every 1 second
        function startPanelTimer(audio, panel) {
            // clear existing
            if (currentTimerId) {
                clearInterval(currentTimerId);
                currentTimerId = null;
            }

            const prog = panel.querySelector(".timeline");
            const cur = panel.querySelector(".current");
            const dur = panel.querySelector(".duration");
            const visualProg = panel.querySelector(".seekbar-progress");

            currentTimerId = setInterval(() => {
                if (!audio.duration || isNaN(audio.duration)) return;
                const pct = (audio.currentTime / audio.duration) * 100;
                if (prog) prog.value = pct;
                if (visualProg) visualProg.style.width = pct + "%";
                if (cur) cur.textContent = formatTime(audio.currentTime);
                if (dur) dur.textContent = formatTime(audio.duration);
            }, 1000);
        }

        // play audio for a panel (only if not already played)
        function playPanelAudio(panel) {
            const audio = panel.querySelector("audio");
            if (!audio) return;

            // already played once? skip
            if (audio.dataset.played === "yes") {
                return;
            }

            // if another audio is playing -> stop it first
            if (currentAudio && currentAudio !== audio) {
                stopCurrentAudio();
            }

            // mark as current
            currentAudio = audio;

            // prepare UI duration if metadata already available
            const durEl = panel.querySelector(".duration");
            if (audio.duration && !isNaN(audio.duration) && durEl) {
                durEl.textContent = formatTime(audio.duration);
            }

            // mute trick for autoplay compatibility
            audio.muted = true;

            // play
            audio.play().then(() => {
                // mark one-time-play
                audio.dataset.played = "yes";

                // unmute shortly after play to avoid autoplay block in some browsers
                setTimeout(() => {
                    try {
                        audio.muted = false;
                    } catch (e) {}
                }, 150);

                // update status UI by starting timer per-second
                startPanelTimer(audio, panel);

                // make sure ended handler resets UI/timer
                audio.onended = () => {
                    // clear timer
                    if (currentTimerId) {
                        clearInterval(currentTimerId);
                        currentTimerId = null;
                    }
                    // finalize progress UI
                    const visualProg = panel.querySelector(".seekbar-progress");
                    if (visualProg) visualProg.style.width = "100%";
                    const cur = panel.querySelector(".current");
                    const dur = panel.querySelector(".duration");
                    if (cur) cur.textContent = formatTime(audio.duration || 0);
                    if (dur) dur.textContent = formatTime(audio.duration || 0);

                    // mark played and unset currentAudio
                    audio.dataset.played = "yes";
                    currentAudio = null;
                };

            }).catch(err => {
                // autoplay blocked — you may need user confirmation (modal)
                console.warn("Autoplay blocked:", err);
                // cleanup currentAudio reference if failed
                currentAudio = null;
            });

            // prevent seeking by user (just in case)
            audio.addEventListener("seeking", function() {
                this.currentTime = this._lastTime || 0;
            });
            audio.addEventListener("timeupdate", function() {
                this._lastTime = this.currentTime;
            });
        }

        /* ========== Tab switching logic (compatible with your x-tab / x-panel) ========== */
        document.querySelectorAll(".x-tab").forEach(tab => {
            tab.addEventListener("click", () => {
                // activate tab classes
                document.querySelectorAll(".x-tab").forEach(t => t.classList.remove("is-active"));
                tab.classList.add("is-active");

                // show corresponding panel
                const id = tab.dataset.id;
                const panelId = `panel-${id}`;
                document.querySelectorAll(".x-panel").forEach(p => p.classList.remove("active", "is-open"));
                const targetPanel = document.getElementById(panelId);
                if (!targetPanel) return;
                targetPanel.classList.add("active", "is-open");

                // STOP any currently playing audio when switching to a different panel
                // (this ensures audio always stops)
                if (currentAudio && currentAudio.closest(".x-panel") !== targetPanel) {
                    stopCurrentAudio();
                }

                // play audio on the newly opened panel (if it has one and not played yet)
                const audio = targetPanel.querySelector("audio");
                if (audio && audio.dataset.played !== "yes") {
                    playPanelAudio(targetPanel);
                }
            });
        });

        /* ========== Initial modal confirm & autoplay first panel ========== */
        const modal = document.getElementById("confirmModal");
        const confirmBtn = document.getElementById("confirmYes");

        if (modal && confirmBtn) {
            // show modal on load
            window.addEventListener("load", () => {
                modal.style.display = "flex";
            });
            confirmBtn.addEventListener("click", () => {
                modal.style.display = "none";
                // play currently active panel
                const firstPanel = document.querySelector(".x-panel.active") || document.querySelector(".x-panel");
                if (firstPanel) playPanelAudio(firstPanel);
            });
        } else {
            // if no modal, autoplay first panel immediately (with mute trick)
            window.addEventListener("load", () => {
                const firstPanel = document.querySelector(".x-panel.active") || document.querySelector(".x-panel");
                if (firstPanel) playPanelAudio(firstPanel);
            });
        }
    </script>

    <script>
        document.getElementById('doneBtn').addEventListener('click', function () {

            const confirmFinish = confirm('Do you want to end the test now?');
            if (!confirmFinish) return;

            stopCurrentAudio();

            let results = [];

            $('.q-item, .q-list').each(function () {

                // Abaikan item dalam q-list (anak)
                if ($(this).closest('.q-list').length && !$(this).is('.q-list')) return;

                const type = $(this).data('type');
                let qnum = $(this).data('q');

                // FIX utama error Undefined array key 'question'
                if (qnum === undefined || qnum === null || qnum === "") {
                    qnum = results.length + 1; 
                }

                if (!type) return; // skip yang tidak punya type

                let name = null;
                let answer = null;

                switch (type) {

                    // ========================== RADIO ==========================
                    case 'tfng':
                    case 'oc':
                    case 'ynng': {

                        const selected = $(this).find('input[type="radio"]:checked');

                        if (selected.length > 0) {
                            name = selected.attr('name');
                            answer = selected.val();
                        } else {
                            const firstRadio = $(this).find('input[type="radio"]').first();
                            name = firstRadio.attr('name') || ('q' + qnum);
                            answer = null;
                        }

                        break;
                    }

                    // ========================== TEXT INPUT ==========================
                    case 'sa':
                    case 'tc':
                    case 'nc': {

                        const inp = $(this).find('input[type="text"]');

                        if (inp.length > 0) {
                            name = inp.attr('name');
                            answer = inp.val();
                        }

                        break;
                    }

                    // ========================== TWO CHECKBOX ==========================
                    case 'two_choices': {

                        const first = $(this).find('input[type="checkbox"]').first();
                        const selected = $(this).find('input[type="checkbox"]:checked');

                        name = first.attr('name') || ('q' + qnum);

                        answer = selected.map(function () {
                            return $(this).val();
                        }).get();

                        // jika jawaban kosong → answer = []
                        break;
                    }

                    // ========================== SELECT ==========================
                    case 'mh':
                    case 'mse': {

                        const sel = $(this).find('select');

                        if (sel.length > 0) {
                            name = sel.attr('name');
                            answer = sel.val();
                        }

                        break;
                    }
                }

                // >>>> FIX PENTING untuk elak error Undefined array key 'question'
                if (!name) name = 'q' + qnum;

                results.push({
                    type: type,
                    name: name,
                    answer: (answer !== '' && answer !== undefined ? answer : null),
                    question: qnum || null
                });

            });

            console.log(results);

            // ========================== AJAX ==========================
            $.ajax({
                url: '/ielts/mock-test/check',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    set_id: 'JSRJ0oDlxC0yFMgt',
                    kategori: 'listening',
                    answers: results,
                    tipe_test: 'mock'
                },
                success: function (response) {
                    $("#try-again").css('display', '');
                    $("#doneBtn").css('display', 'none');

                    if (response.status === 'ok') {
                        let correctCount = 0;
                        let total = Object.keys(response.results).length;
                        let tableRows = '';
                        let questionNumber = 1;

                        $.each(response.results, function (key, data) {
                            let isCorrect = data.status === 'correct';
                            if (isCorrect) correctCount++;

                            let correctAnswer = data.correct || '';
                            let userAnswer = data.user || '';
                            if (!correctAnswer && isCorrect) correctAnswer = userAnswer;
                            if (!correctAnswer) correctAnswer = 'NOT GIVEN';

                            tableRows += `
                                <tr>
                                    <td><strong>${questionNumber++}</strong></td>
                                    <td><span class="answer-display ${isCorrect ? 'answer-correct' : 'answer-wrong'}">${userAnswer}</span></td>
                                    <td><span class="answer-display answer-correct-option">${correctAnswer}</span></td>
                                    <td>
                                        <span class="status-badge ${isCorrect ? 'correct' : 'wrong'}">
                                            <span class="status-icon">${isCorrect ? '✅' : '❌'}</span>
                                            ${isCorrect ? 'Correct' : 'Wrong'}
                                        </span>
                                    </td>
                                </tr>`;
                        });

                        $("#scoreDisplay").text(`${correctCount}/${total}`);
                        $("#scorePercentage").text(`${convertScore(correctCount)}`);

                        let percentage = (correctCount / total) * 100;
                        let scoreCircle = $(".score-circle");

                        if (percentage >= 80) {
                            scoreCircle.css("background", "linear-gradient(135deg, #27ae60, #2ecc71)");
                        } else if (percentage >= 60) {
                            scoreCircle.css("background", "linear-gradient(135deg, #f39c12, #e67e22)");
                        } else {
                            scoreCircle.css("background", "linear-gradient(135deg, #e74c3c, #c0392b)");
                        }

                        $("#resultsTableBody").html(tableRows);

                        showModal(`Score: ${correctCount} / ${total}`);
                    } else {
                        alert('Terjadi kesalahan: ' + response.message);
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan: ' + xhr.status);
                }
            });

        });

    </script>
</body>

</html>
