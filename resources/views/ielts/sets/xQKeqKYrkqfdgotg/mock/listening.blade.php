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
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- form_completion --}}

                            <fieldset class="q-item">
                                <p>Questions 1-4</p>
                                <p><i>Complete the form below.</i></p>
                                <p><i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i></p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2">
                                        <h1 style="text-align: center">Wayside Camera Club<br>membership form</h1>
                                    </th>
                                </tr>
                                <tr>
                                    <td>Name:</td>
                                    <td>Dan Green</td>
                                </tr>
                                <tr>
                                    <td>Email address:</td>
                                    <td>dan1068@market.com</td>
                                </tr>
                                <tr>
                                    <td>Home address:</td>
                                    <td>
                                        <div class="q-item" data-q="1">
                                            52
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="form_completion-xQKeqKYrkqfdgotg-1" class="q-text"
                                                placeholder="">
                                            Street, Peacetown
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Heard about us:</td>
                                    <td>
                                        <div class="q-item" data-q="2">
                                            from a
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="form_completion-xQKeqKYrkqfdgotg-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reasons for joining:</td>
                                    <td>
                                        <div class="q-item" data-q="3">
                                            to enter competitions to
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="form_completion-xQKeqKYrkqfdgotg-3" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Type of membership:</td>
                                    <td>
                                        <div class="q-item" data-q="4">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="form_completion-xQKeqKYrkqfdgotg-4" class="q-text"
                                                placeholder="">
                                            membership (£30)
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            {{-- tc --}}
                            <fieldset class="q-item">
                                <p>Questions 5-10</p>
                                <p>Complete the table below.</p>
                                <p>Write <b>NO MORE THAN TWO WORDS</b> for each answer.</p>
                            </fieldset>

                            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="3">
                                        <h1 style="text-align: center">Photography competitions</h1>
                                    </th>
                                </tr>
                                <tr>
                                    <th><b>Title of competition</b></th>
                                    <th><b>Instructions</b></th>
                                    <th><b>Feedback to Dan</b></th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-q="5">
                                            '
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="tc-xQKeqKYrkqfdgotg-1" class="q-text"
                                                placeholder="">
                                            '
                                        </div>
                                    </td>
                                    <td>A scene in the home</td>
                                    <td>The picture’s composition was not good.</td>
                                </tr>
                                <tr>
                                    <td>‘Beautiful Sunsets’</td>
                                    <td>
                                        <div class="q-item" data-q="6">
                                            Scene must show some
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="tc-xQKeqKYrkqfdgotg-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="7">
                                            The 
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="tc-xQKeqKYrkqfdgotg-3" class="q-text"
                                                placeholder="">
                                            was wrong.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-q="8">
                                            '
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="tc-xQKeqKYrkqfdgotg-4" class="q-text"
                                                placeholder="">
                                            '
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="9">
                                            Scene must show
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="tc-xQKeqKYrkqfdgotg-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-q="10">
                                            The photograph was too 
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="tc-xQKeqKYrkqfdgotg-6" class="q-text"
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
                                    src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- two_choices --}}

                        <fieldset class="q-item">
                            <p>Questions 11-12</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which <b>TWO</b> warnings does Dan give about picking mushrooms?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Don’t pick more than one variety of mushroom at a time.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Don’t pick mushrooms near busy roads.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Don’t eat mushrooms given to you.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Don’t eat mushrooms while picking them.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">Don’t pick old mushrooms.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 13-14</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                <span class="q-number">14</span>
                                Which <b>TWO</b> ideas about wild mushrooms does Dan say are correct?
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

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 15-20</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                What advice does Dan give about picking mushrooms in parks?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Choose wooded areas.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Don’t disturb wildlife.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Get there early.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="16">
                            <legend class="q-text">
                                <span class="q-number">16</span>
                                Dan says it is a good idea for beginners to
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 16 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">use a mushroom app.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">join a group.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">take a reference book.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="17">
                            <legend class="q-text">
                                <span class="q-number">17</span>
                                What does Dan say is important for conservation?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 17 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">selecting only fully grown mushrooms</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">picking a limited amount of mushrooms</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">avoiding areas where rare mushroom species grow</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="18">
                            <legend class="q-text">
                                <span class="q-number">18</span>
                                According to Dan, some varieties of wild mushrooms are in decline because there is
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 18 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">a huge demand for them from restaurants.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">a lack of rain in this part of the country.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">a rise in building developments locally.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="19">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                Dan says that when storing mushrooms, people should
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 19 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-5" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">keep them in the fridge for no more than two days.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-5" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">keep them in a brown bag in a dark room.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-5" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">leave them for a period after washing them.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="20">
                            <legend class="q-text">
                                <span class="q-number">20</span>
                                What does Dan say about trying new varieties of mushrooms?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 20 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-6" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Experiment with different recipes.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-6" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Expect some to have a strong taste.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-xQKeqKYrkqfdgotg-6" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Cook them for a long time.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 21-22</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> opinions about the Luddites do the students express?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Their actions were ineffective.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They are still influential today.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They have received unfair criticism.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">They were proved right.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Their attitude is understandable.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 23-24</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    <span class="q-number">24</span>
                                    Which <b>TWO</b> health risks associated with loneliness do the students agree are based on solid evidence?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">A weakened immune system</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Dementia</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Cancer</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Obesity</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-9[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Cardiovascular disease</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 25-26</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    <span class="q-number">26</span>
                                    Which <b>TWO</b> opinions do both the students express about the evolutionary theory of loneliness?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-11[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It has little practical relevance.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-11[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It needs further investigation.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-11[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It is misleading.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-11[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">It should be more widely accepted.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-xQKeqKYrkqfdgotg-11[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">It is difficult to understand.</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- oc --}}
                            <fieldset class="q-item">
                                <p>Questions 27-30</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="27">
                                <legend class="q-text">
                                    <span class="q-number">27</span>
                                    When comparing loneliness to depression, the students
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Doubt that there will ever be a medical cure for loneliness.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Claim that the link between loneliness and mental health is overstated.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Express frustration that loneliness is not taken more seriously.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="28">
                                <legend class="q-text">
                                    <span class="q-number">28</span>
                                    Why do the students decide to start their presentation with an example from their own experience?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">To explain how difficult loneliness can be</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">To highlight a situation that most students will recognise</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">To emphasise that feeling lonely is more common for men than women</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="29">
                                <legend class="q-text">
                                    <span class="q-number">29</span>
                                    The students agree that talking to strangers is a good strategy for dealing with loneliness because
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">It creates a sense of belonging.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It builds self-confidence.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">It makes people feel more positive.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="30">
                                <legend class="q-text">
                                    <span class="q-number">30</span>
                                    The students find it difficult to understand why solitude is considered to be
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Similar to loneliness.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Necessary for mental health.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-xQKeqKYrkqfdgotg-4" value="C" />
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

                        {{-- nc --}}
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
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-11" class="q-text" placeholder="">
                                on the river bank.
                            </p>
                            <p>
                                In 1957, the River Thames in London was declared biologically
                                <span class="q-number-box">32</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-12" class="q-text" placeholder="">
                            </p>

                            <p><b>Recent Improvements</b></p>
                            <p>
                                Seals and even a
                                <span class="q-number-box">33</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-13" class="q-text" placeholder="">
                                have been seen in the River Thames.
                            </p>
                            <p>
                                Riverside warehouses are converted to restaurants and
                                <span class="q-number-box">34</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-14" class="q-text" placeholder="">
                            </p>

                            <p>In Los Angeles, there are plans to:</p>

                            <p>
                                Build a riverside
                                <span class="q-number-box">35</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-15" class="q-text" placeholder="">
                            </p>

                            <p>
                                Display 
                                <span class="q-number-box">36</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-16" class="q-text" placeholder="">
                                projects.
                            </p>

                            <p>
                                In Paris,
                                <span class="q-number-box">37</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-17" class="q-text" placeholder="">
                                are created on the sides of the river every summer.
                            </p>

                            <p><b>Transport Possibilities</b></p>
                            <p>
                                Over 2 billion passengers already travel by
                                <span class="q-number-box">38</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-18" class="q-text" placeholder="">
                                in cities around the world.
                            </p>

                            <p>Changes in shopping habits mean the number of deliveries that are made is increasing.</p>

                            <p>
                                Instead of road transport, goods can be transported by large freight barges and electric
                                <span class="q-number-box">39</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-19" class="q-text" placeholder="">
                                , or, in future, by
                                <span class="q-number-box">30</span>
                                <input type="text" name="oc-xQKeqKYrkqfdgotg-20" class="q-text" placeholder="">
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
