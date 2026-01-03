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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-1.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-10</p>
                                <p>Complete the notes below.</p>
                                <p><i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i></p>
                            </fieldset>

                            <table cellpadding="8" cellspacing="0"
                                style="border-collapse: collapse; margin-bottom: 20px;">
                                <tr>
                                    <th colspan="2">Transport Survey</th>
                                </tr>
                                <tr>
                                    <td colspan="2"><i>Example</i></td>
                                </tr>
                                <tr>
                                    <td><b>Travelled to town today:</b></td>
                                    <td><b>by </b><i>......bus.....</i></td>
                                </tr>
                                <tr>
                                    <td><b>Name:</b></td>
                                    <td>
                                        <div class="q-item" data-q="1" data-type="tfng">
                                            Luisa 
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="tfng-QmN0FYAE2DCXRPdC-1" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Address:</b></td>
                                    <td>
                                        <div class="q-item" data-q="2" data-type="tfng">
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="tfng-QmN0FYAE2DCXRPdC-2" class="q-text" placeholder="">
                                            White Stone Rd
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Area:</b></td>
                                    <td>Bradfield</td>
                                </tr>
                                <tr>
                                    <td><b>Postcode:</b></td>
                                    <td>
                                        <div class="q-item" data-q="3" data-type="tfng">
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="tfng-QmN0FYAE2DCXRPdC-3" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Occupation:</b></td>
                                    <td>
                                        <div class="q-item" data-q="4" data-type="tfng">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="tfng-QmN0FYAE2DCXRPdC-4" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Reason for visit to town:</b></td>
                                    <td>
                                        <div class="q-item" data-q="5" data-type="tfng">
                                        to go to the
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="tfng-QmN0FYAE2DCXRPdC-5" class="q-text" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><b>Suggestions for improvement</b>:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="6" data-type="tfng">
                                                    better 
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="tfng-QmN0FYAE2DCXRPdC-6" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                            <li>have more footpaths</li>
                                            <li>
                                                <div class="q-item" data-q="7" data-type="tfng">
                                                    more frequent
                                                    <span class="q-number-box">7</span>
                                                    <input type="text" name="tfng-QmN0FYAE2DCXRPdC-7" class="q-text"
                                                        placeholder="">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><b>Things that would encourage cycling to work</b>:</p>
                                        <ul>
                                            <li>
                                                <div class="q-item" data-q="8" data-type="tfng">
                                                    having  
                                                    <span class="q-number-box">8</span>
                                                    <input type="text" name="tfng-QmN0FYAE2DCXRPdC-8" class="q-text"
                                                        placeholder="">
                                                    parking places for bicycles
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-item" data-q="9" data-type="tfng">
                                                    being able to use a
                                                    <span class="q-number-box">9</span>
                                                    <input type="text" name="tfng-QmN0FYAE2DCXRPdC-9" class="q-text"
                                                        placeholder="">
                                                    at work
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-item" data-q="10" data-type="tfng">
                                                    the opportunity to have cycling
                                                    <span class="q-number-box">10</span>
                                                    <input type="text" name="tfng-QmN0FYAE2DCXRPdC-10" class="q-text"
                                                        placeholder="">
                                                     on busy roads
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
                <div class="x-panel-inner">Content: Part 2</div>
                <div class="qa highlighted-content">
                    <form class="qa-body">
                        <fieldset class="q-item">
                            <p class="lead">Listen and answer questions 11-20</p>
                            <div class="audio-player">
                                <audio
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-4</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3><b>New city developments</b></h3>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-type="oc">
                            <legend class="q-text">
                                <span class="q-number">1</span>
                                The idea for the two new developments in the city came from
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">local people.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the City Council.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">the SWRDC.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="2" data-type="oc">
                            <legend class="q-text">
                                <span class="q-number">2</span>
                                What is unusual about Brackenside pool?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">its architectural style</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">its heating system</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">its method of water treatment</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="3" data-type="oc">
                            <legend class="q-text">
                                <span class="q-number">3</span>
                                Local newspapers have raised worries about
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">the late opening date.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the cost of the project.</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">the size of the facilities.</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-q="4" data-type="oc">
                            <legend class="q-text">
                                <span class="q-number">4</span>
                                What decision has not yet been made about the pool?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">whose statue will be at the door</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">the exact opening times</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QmN0FYAE2DCXRPdC-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">who will open it</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 1-6</p>
                            <p>Which feature is related to each of the following areas of the world represented in the playground?</p>
                            <p><i>Choose SIX answers from the box and write the correct letter, <b>A-I</b>, next to questions</i></p>
                            <b>Features</b>

                            <table cellspacing="15">
                                <tr>
                                    <td><b>A</b></td>
                                    <td>ancient forts</td>
                                </tr>
                                <tr>
                                    <td><b>B</b></td>
                                    <td>waterways</td>
                                </tr>
                                <tr>
                                    <td><b>C</b></td>
                                    <td>ice and snow</td>
                                </tr>
                                <tr>
                                    <td><b>D</b></td>
                                    <td>jewels</td>
                                </tr>
                                <tr>
                                    <td><b>E</b></td>
                                    <td>local animals</td>
                                </tr>
                                <tr>
                                    <td><b>F</b></td>
                                    <td>mountains</td>
                                </tr>
                                <tr>
                                    <td><b>G</b></td>
                                    <td>music and film</td>
                                </tr>
                                <tr>
                                    <td><b>H</b></td>
                                    <td>space travel</td>
                                </tr>
                                <tr>
                                    <td><b>I</b></td>
                                    <td>volcanoes</td>
                                </tr>
                            </table>
                        </fieldset>

                        <fieldset class="q-item">
                            <h3><b>Areas of the world</b></h3>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">1</span>
                                <span style="flex: 1;">
                                    Asia  
                                    <span class="q-question">
                                        <select name="matching_information-QmN0FYAE2DCXRPdC-1" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="2" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">2</span>
                                <span style="flex: 1;">
                                    Antarctica 
                                    <span class="q-question">
                                        <select name="matching_information-QmN0FYAE2DCXRPdC-2" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="3" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">3</span>
                                <span style="flex: 1;">
                                    South America 
                                    <span class="q-question">
                                        <select name="matching_information-QmN0FYAE2DCXRPdC-3" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="4" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">4</span>
                                <span style="flex: 1;">
                                    North America 
                                    <span class="q-question">
                                        <select name="matching_information-QmN0FYAE2DCXRPdC-4" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="5" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">5</span>
                                <span style="flex: 1;">
                                    Europe  
                                    <span class="q-question">
                                        <select name="matching_information-QmN0FYAE2DCXRPdC-5" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                        </select>
                                    </span>
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset class="q-item" data-q="6" data-type="matching_information">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">6</span>
                                <span style="flex: 1;">
                                    Africa  
                                    <span class="q-question">
                                        <select name="matching_information-QmN0FYAE2DCXRPdC-6" class="q-dropdown">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-10-academic-listening-2-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-2</p>
                                <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which TWO hobbies was Thor Heyerdahl very interested in as a youth?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="checkbox" name="q1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">camping</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="q1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">climbing</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="q1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">collecting</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="q1" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">hunting</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="checkbox" name="q1" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">reading</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    <span class="q-number">2</span>
                                    Which do the speakers say are the TWO reasons why Heyerdahl went to live on an island?
                                </legend>
                                <div class="q-options" role="group" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="q2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">to examine ancient carvings</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="q2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to experience an isolated place</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="q2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to formulate a new theory</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="q2" value="D" />
                                        <span class="opt-code">D</span>
                                        <span class="opt-label">to learn survival skills</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="q2" value="E" />
                                        <span class="opt-code">E</span>
                                        <span class="opt-label">to study the impact of an extreme environment</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item">
                                <p>Questions 1-6</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3><b>The later life of Thor Heyerdahl</b></h3>
                            </fieldset>

                            <fieldset class="q-item" data-q="1">
                                <legend class="q-text">
                                    <span class="q-number">1</span>
                                    According to Victor and Olivia, academics thought that Polynesian migration from the east was impossible due to
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-1" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the fact that Eastern countries were far away.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-1" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the lack of materials for boat building.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-1" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the direction of the winds and currents.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="2">
                                <legend class="q-text">
                                    <span class="q-number">2</span>
                                    Which do the speakers agree was the main reason for Heyerdahl’s raft journey?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-2" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">to overcome a research setback</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-2" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to demonstrate a personal quality</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-2" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to test a new theory</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="3">
                                <legend class="q-text">
                                    <span class="q-number">3</span>
                                    What was most important to Heyerdahl about his raft journey?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-3" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">the fact that he was the first person to do it</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-3" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the speed of crossing the Pacific</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-3" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">the use of authentic construction methods</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="4">
                                <legend class="q-text">
                                    <span class="q-number">4</span>
                                    Why did Heyerdahl go to Easter Island?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-4" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">to build a stone statue</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-4" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">to sail a reed boat</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-4" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">to learn the local language</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-q="5">
                                <legend class="q-text">
                                    <span class="q-number">5</span>
                                    In Olivia’s opinion, Heyerdahl’s greatest influence was on
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">theories about Polynesian origins.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">the development of archaeological methodology</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">establishing archaeology as an academic subject.</span>
                                    </label>
                                </div>
                            </fieldset>
                            
                            <fieldset class="q-item" data-q="6">
                                <legend class="q-text">
                                    <span class="q-number">6</span>
                                    Which criticism do the speakers make of William Oliver’s textbook?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Its style is out of date.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">Its content is over-simplified.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="QmN0FYAE2DCXRPdC-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Its methodology is flawed.</span>
                                    </label>
                                </div>
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
