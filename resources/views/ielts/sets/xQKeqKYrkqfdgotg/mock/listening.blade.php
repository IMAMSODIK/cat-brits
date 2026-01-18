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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

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
                                        <div class="q-item" data-type="nc" data-q="1">
                                            Good for people who are especially keen on
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-1" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="2">
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
                                        <div class="q-item" data-type="nc" data-q="3">
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-3" class="q-text"
                                                placeholder="">
                                            food, good for sharing
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="4">
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
                                        <div class="q-item" data-type="nc" data-q="5">
                                            The 
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="6">
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
                                            <input type="text" data-type="nc" name="nc-xQKeqKYrkqfdgotg-7" class="q-text"
                                                placeholder="">
                                            are very good <br>Only uses
                                            <span class="q-number-box">8</span>
                                            <input type="text" data-type="nc" name="nc-xQKeqKYrkqfdgotg-8" class="q-text"
                                                placeholder="">
                                            ingredients
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="9">
                                            Set lunch costs £
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-9" data-type="nc" data-q="9" class="q-text"
                                                placeholder="">
                                            per person <br> Portions probably of 
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-xQKeqKYrkqfdgotg-10" data-type="nc" data-q="10" class="q-text"
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

                        <fieldset class="q-item">
                            <p>Questions 11-16</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset data-type="oc" class="q-item" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                Heather says pottery differs from other art forms because
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
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

                        <fieldset data-type="oc" class="q-item" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                Archaeologists sometimes identify the use of ancient pottery from
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 2 options">
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

                        <fieldset data-type="oc" class="q-item" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                Some people join Heather’s pottery class because they want to
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
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

                        <fieldset data-type="oc" class="q-item" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                What does Heather value most about being a potter?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
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

                        <fieldset data-type="oc" class="q-item" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                Most of the visitors to Edelman Pottery
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
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

                        <fieldset data-type="oc" class="q-item" data-q="16">
                            <legend class="q-text">
                                <span class="q-number">16</span>
                                Heather reminds her visitors that they should
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
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

                        <fieldset class="q-item">
                            <p>Questions 17-18</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="two_choices" data-q="17" data-q-multi="1,2" data-max="2">
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

                        <fieldset class="q-item" data-type="two_choices" data-q="19" data-q-multi="1,2" data-max="2">
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

                            <fieldset class="q-item">
                                <p>Questions 21-22</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="two_choices" data-q="21" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> things do the students both believe are responsible for the increase in loneliness?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Social media</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Smaller nuclear families</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Urban design</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Longer lifespans</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">A mobile workforce</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 23-24</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="two_choices" data-q="23" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    <span class="q-number">24</span>
                                    Which <b>TWO</b> health risks associated with loneliness do the students agree are based on solid evidence?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-7[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">A weakened immune system</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-7[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Dementia</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-7[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Cancer</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-7[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Obesity</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-7[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Cardiovascular disease</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 25-26</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="two_choices" data-q="25" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    <span class="q-number">26</span>
                                    Which <b>TWO</b> opinions do both the students express about the evolutionary theory of loneliness?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It has little practical relevance.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It needs further investigation.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It is misleading.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">It should be more widely accepted.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">It is difficult to understand.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 27-30</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset data-type="oc" class="q-item" data-q="27">
                                <legend class="q-text">
                                    <span class="q-number">27</span>
                                    When comparing loneliness to depression, the students
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Doubt that there will ever be a medical cure for loneliness.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Claim that the link between loneliness and mental health is overstated.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Express frustration that loneliness is not taken more seriously.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset data-type="oc" class="q-item" data-q="28">
                                <legend class="q-text">
                                    <span class="q-number">28</span>
                                    Why do the students decide to start their presentation with an example from their own experience?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">To explain how difficult loneliness can be</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">To highlight a situation that most students will recognise</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">To emphasise that feeling lonely is more common for men than women</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset data-type="oc" class="q-item" data-q="29">
                                <legend class="q-text">
                                    <span class="q-number">29</span>
                                    The students agree that talking to strangers is a good strategy for dealing with loneliness because
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It creates a sense of belonging.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It builds self-confidence.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It makes people feel more positive.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset data-type="oc" class="q-item" data-q="30">
                                <legend class="q-text">
                                    <span class="q-number">30</span>
                                    The students find it difficult to understand why solitude is considered to be
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-10" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Similar to loneliness.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-10" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Necessary for mental health.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-10" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">An enjoyable experience.</span>
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
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-1-audio-4.mp3"></audio>
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
                            <h3>Reclaiming Urban Rivers</h3>
                            <p><b>Historical Background</b></p>

                            <p>Nearly all major cities were built on a river.</p>
                            <p>Rivers were traditionally used for transport, fishing, and recreation.</p>
                            <p>Industrial development and rising populations later led to:</p>
                            <p>-More sewage from houses being discharged into the river.</p>
                            <p>
                                -Pollution from
                                <span class="q-number-box">31</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-11" data-q="31" data-type="nc" class="q-text" placeholder="">
                                on the river bank.
                            </p>
                            <p>
                                In 1957, the River Thames in London was declared biologically
                                <span class="q-number-box">32</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-12" data-q="32" data-type="nc" class="q-text" placeholder="">
                            </p>

                            <p><b>Recent Improvements</b></p>
                            <p>
                                Seals and even a
                                <span class="q-number-box">33</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-13" data-q="33" data-type="nc" class="q-text" placeholder="">
                                have been seen in the River Thames.
                            </p>
                            <p>
                                Riverside warehouses are converted to restaurants and
                                <span class="q-number-box">34</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-14" data-q="34" data-type="nc" class="q-text" placeholder="">
                            </p>

                            <p>In Los Angeles, there are plans to:</p>

                            <p>
                                Build a riverside
                                <span class="q-number-box">35</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-15" data-q="35" data-type="nc" class="q-text" placeholder="">
                            </p>

                            <p>
                                Display 
                                <span class="q-number-box">36</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-16" data-q="36" data-type="nc" class="q-text" placeholder="">
                                projects.
                            </p>

                            <p>
                                In Paris,
                                <span class="q-number-box">37</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-17" data-q="37" data-type="nc" class="q-text" placeholder="">
                                are created on the sides of the river every summer.
                            </p>

                            <p><b>Transport Possibilities</b></p>
                            <p>
                                Over 2 billion passengers already travel by
                                <span class="q-number-box">38</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-18" data-q="38" data-type="nc" class="q-text" placeholder="">
                                in cities around the world.
                            </p>

                            <p>Changes in shopping habits mean the number of deliveries that are made is increasing.</p>

                            <p>
                                Instead of road transport, goods can be transported by large freight barges and electric
                                <span class="q-number-box">39</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-19" data-q="39" data-type="nc" class="q-text" placeholder="">
                                , or, in future, by
                                <span class="q-number-box">40</span>
                                <input type="text" name="nc-xQKeqKYrkqfdgotg-20" data-q="40" data-type="nc" class="q-text" placeholder="">
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
