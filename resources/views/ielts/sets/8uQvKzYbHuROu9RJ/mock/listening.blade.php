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
                                        <div class="q-item" data-type="form_completion" data-q="1">
                                            52
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="form_completion-8uQvKzYbHuROu9RJ-1" class="q-text"
                                                placeholder="">
                                            Street, Peacetown
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Heard about us:</td>
                                    <td>
                                        <div class="q-item" data-type="form_completion" data-q="2">
                                            from a
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="form_completion-8uQvKzYbHuROu9RJ-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reasons for joining:</td>
                                    <td>
                                        <div class="q-item" data-type="form_completion" data-q="3">
                                            to enter competitions to
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="form_completion-8uQvKzYbHuROu9RJ-3" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Type of membership:</td>
                                    <td>
                                        <div class="q-item" data-type="form_completion" data-q="4">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="form_completion-8uQvKzYbHuROu9RJ-4" class="q-text"
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
                                        <div class="q-item" data-type="tc" data-q="5">
                                            '
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="tc-8uQvKzYbHuROu9RJ-1" class="q-text"
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
                                        <div class="q-item" data-type="tc" data-q="6">
                                            Scene must show some
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="tc-8uQvKzYbHuROu9RJ-2" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="7">
                                            The 
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="tc-8uQvKzYbHuROu9RJ-3" class="q-text"
                                                placeholder="">
                                            was wrong.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="8">
                                            '
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="tc-8uQvKzYbHuROu9RJ-4" class="q-text"
                                                placeholder="">
                                            '
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="9">
                                            Scene must show
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="tc-8uQvKzYbHuROu9RJ-5" class="q-text"
                                                placeholder="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="tc" data-q="10">
                                            The photograph was too 
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="tc-8uQvKzYbHuROu9RJ-6" class="q-text"
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

                        <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                <span class="q-number">12</span>
                                Which <b>TWO</b> warnings does Dan give about picking mushrooms?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Don’t pick more than one variety of mushroom at a time.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Don’t pick mushrooms near busy roads.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Don’t eat mushrooms given to you.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Don’t eat mushrooms while picking them.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">Don’t pick old mushrooms.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 13-14</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                <span class="q-number">14</span>
                                Which <b>TWO</b> ideas about wild mushrooms does Dan say are correct?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Mushrooms should always be peeled before eating.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Mushrooms eaten by animals may be unsafe.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Cooking destroys toxins in mushrooms.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Brightly coloured mushrooms can be edible.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-3[]" value="E" />
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

                        <fieldset class="q-item" data-type="oc" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                What advice does Dan give about picking mushrooms in parks?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Choose wooded areas.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Don’t disturb wildlife.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Get there early.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="16">
                            <legend class="q-text">
                                <span class="q-number">16</span>
                                Dan says it is a good idea for beginners to
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 16 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">use a mushroom app.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">join a group.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">take a reference book.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="17">
                            <legend class="q-text">
                                <span class="q-number">17</span>
                                What does Dan say is important for conservation?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 17 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">selecting only fully grown mushrooms</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">picking a limited amount of mushrooms</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">avoiding areas where rare mushroom species grow</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="18">
                            <legend class="q-text">
                                <span class="q-number">18</span>
                                According to Dan, some varieties of wild mushrooms are in decline because there is
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 18 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">a huge demand for them from restaurants.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">a lack of rain in this part of the country.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">a rise in building developments locally.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="19">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                Dan says that when storing mushrooms, people should
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 19 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-5" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">keep them in the fridge for no more than two days.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-5" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">keep them in a brown bag in a dark room.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-5" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">leave them for a period after washing them.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="20">
                            <legend class="q-text">
                                <span class="q-number">20</span>
                                What does Dan say about trying new varieties of mushrooms?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 20 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-6" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Experiment with different recipes.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-6" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Expect some to have a strong taste.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-8uQvKzYbHuROu9RJ-6" value="C" />
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

                            <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    <span class="q-number">22</span>
                                    Which <b>TWO</b> opinions about the Luddites do the students express?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-5[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Their actions were ineffective.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-5[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">They are still influential today.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-5[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">They have received unfair criticism.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-5[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">They were proved right.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-5[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">Their attitude is understandable.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 23-24</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    <span class="q-number">24</span>
                                    Which <b>TWO</b> predictions about the future of work are the students doubtful about?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-7[]" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Work will be more rewarding.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-7[]" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Unemployment will fall.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-7[]" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">People will want to delay retiring.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-7[]" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">Working hours will be shorter.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="two_choices-8uQvKzYbHuROu9RJ-7[]" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">People will change jobs more frequently.</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <h3>Questions 25-30</h3>
                                <p>What comment do the students make about each of the following jobs?</p>
                                <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions.</i></p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Comments</h3>
                                <p><b>A</b> These jobs are likely to be at risk.</p>
                                <p><b>B</b> Their role has become more interesting in recent years.</p>
                                <p><b>C</b> The number of people working in this sector has fallen dramatically.</p>
                                <p><b>D</b> This job will require more qualifications.</p>
                                <p><b>E</b> Higher disposable income has led to a huge increase in jobs.</p>
                                <p><b>F</b> There is likely to be a significant rise in demand for this service.</p>
                                <p><b>G</b> Both employment and productivity have risen.</p>
                            </fieldset>

                            <p><b>Jobs</b></p>

                            <fieldset class="q-item" data-type="matching_information" data-q="25">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">25</span>
                                    <span style="flex: 1;">
                                        Accountants  
                                        <span class="q-question">
                                            <select name="matching_information-8uQvKzYbHuROu9RJ-1" class="q-dropdown">
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
                                        Hairdressers   
                                        <span class="q-question">
                                            <select name="matching_information-8uQvKzYbHuROu9RJ-2" class="q-dropdown">
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
                                        Administrative staff  
                                        <span class="q-question">
                                            <select name="matching_information-8uQvKzYbHuROu9RJ-3" class="q-dropdown">
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
                                        Agricultural workers
                                        <span class="q-question">
                                            <select name="matching_information-8uQvKzYbHuROu9RJ-4" class="q-dropdown">
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
                                        Care workers
                                        <span class="q-question">
                                            <select name="matching_information-8uQvKzYbHuROu9RJ-5" class="q-dropdown">
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
                                        Bank clerks  
                                        <span class="q-question">
                                            <select name="matching_information-8uQvKzYbHuROu9RJ-6" class="q-dropdown">
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
                                    src="https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-3-audio-4.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- nc --}}
                        <fieldset class="q-item">
                            <p>Questions 31-40</p>
                            <p>Complete the notes below.</p>
                            <p><i>Write <b>ONE WORD ONLY</b> for each answer.</i></p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3>Space Traffic Management</h3>

                            <p><b>A Space Traffic Management system</b></p>
                            <ul>
                                <li>is a concept similar to Air Traffic Control, but for satellites rather than planes.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        would aim to set up legal and
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-1" class="q-text"
                                            placeholder="">
                                        ways of improving safety.
                                    </div>
                                </li>
                                <li>does not actually exist at present.</li>
                            </ul>

                            <p>Problems in developing effective Space Traffic Management</p>
                            <ul>
                                <li>
                                    Satellites are now quite
                                    <span class="q-number-box">32</span>
                                    <span style="flex: 1;">
                                        <span class="q-question">
                                            <input type="text" name="nc-8uQvKzYbHuROu9RJ-2" data-type="nc" data-q="2" class="q-text" placeholder="">
                                        </span>
                                    </span>
                                    and therefore more widespread (e.g. there are constellations made up of
                                    <span class="q-number-box">33</span>
                                    <span style="flex: 1;">
                                        <span class="q-question">
                                            <input type="text" name="nc-8uQvKzYbHuROu9RJ-3" data-type="nc" data-q="3" class="q-text" placeholder="">
                                        </span>
                                    </span>
                                    of satellites).
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="34">
                                        At present, satellites are not required to transmit information to help with their
                                        <span class="q-number-box">34</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-4" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="35">
                                        There are few systems for
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-5" class="q-text"
                                            placeholder="">
                                        satellites.
                                    </div>
                                </li>
                                <li>Small pieces of debris may be difficult to identify.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="36">
                                        Operators may be unwilling to share details of satellites used for
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-6" class="q-text"
                                            placeholder="">
                                        or commercial reasons.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        It may be hard to collect details of the object’s 
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-7" class="q-text"
                                            placeholder="">
                                        at a given time.
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="38">
                                        Scientists can only make a
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-8" class="q-text"
                                            placeholder="">
                                        about where the satellite will go.
                                    </div>
                                </li>
                            </ul>

                            <p><b>Solutions</b></p>
                            <ul>
                                <li>Common standards should be agreed on for the presentation of information.</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="39">
                                        The information should be combined in one
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-9" class="q-text"
                                            placeholder="">
                                    </div>
                                </li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="40">
                                        A coordinated system must be designed to create 
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="nc-8uQvKzYbHuROu9RJ-10" class="q-text"
                                            placeholder="">
                                        in its users.
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
