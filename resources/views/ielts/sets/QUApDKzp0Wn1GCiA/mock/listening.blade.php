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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-1.mp3"></audio>
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
                                <h3>Buckworth Conservation Group</h3>
                                <p><b>Regular activities</b></p>

                                <p>Beach</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="1">
                                            making sure the beach does not have
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-1" class="q-text" placeholder="">
                                            on it
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="2">
                                            no 
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-2" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Nature reserve</p>
                                <ul>
                                    <li>maintaining paths</li>
                                    <li>nesting boxes for birds installed</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="3">
                                            next task is taking action to attract
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-3" class="q-text" placeholder="">
                                            to the place
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="4">
                                            identifying types of
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-4" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="5">
                                            building a new
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-5" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>        
                                
                                <p><b>Forthcoming events</b></p>
                                <p>Saturday</p>
                                <ul>
                                    <li>meet at Dunsmore Beach car park</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="6">
                                            walk across the sands and reach the
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-6" class="q-text" placeholder="">
                                            to the place
                                        </div>
                                    </li>
                                    <li>take a picnic</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="7">
                                            wear appropriate
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-7" class="q-text" placeholder="">
                                        </div>
                                    </li>
                                </ul>

                                <p>Woodwork session</p>
                                <ul>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="8">
                                            suitable for
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-8" class="q-text" placeholder="">
                                            to participate in
                                        </div>
                                    </li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="9">
                                            making 
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-9" class="q-text" placeholder="">
                                            out of wood
                                        </div>
                                    </li>
                                    <li>17th, from 10 a.m. to 3 p.m.</li>
                                    <li>
                                        <div class="q-list" data-type="nc" data-q="10">
                                            cost of session (no camping): £
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-QUApDKzp0Wn1GCiA-10" class="q-text" placeholder="">
                                            out of wood
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 11-14</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Boat trip round Tasmania</b></p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                What is the maximum number of people who can stand on each side of the boat?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">9</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">15</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">18</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                What colour are the tour boats?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">dark red</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">jet black</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">light green</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                Which lunchbox is suitable for someone who doesn’t eat meat or fish?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Lunchbox 1</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Lunchbox 2</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Lunchbox 3</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                What should people do with their litter?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">take it home</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">hand it to a member of staff</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-QUApDKzp0Wn1GCiA-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">put it in the bins provided on the boat</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- two_choices --}}
                        <fieldset class="q-item">
                            <p>Questions 15-16</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="two_choices" data-q="1" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                <span class="q-number">16</span>
                                Which <b>TWO</b> features of the lighthouse does Lou mention?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-1[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">why it was built</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-1[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">who built it</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-1[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">how long it took to build</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-1[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">who staffed it</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-1[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">what it was built with</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 17-18</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">17</span>
                                <span class="q-number">18</span>
                                Which <b>TWO</b> types of creature might come close to the boat?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-3[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">sea eagles</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-3[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">fur seals</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-3[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">dolphins</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-3[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">whales</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-3[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">penguins</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item">
                            <p>Questions 19-20</p>
                            <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                            <legend class="q-text">
                                <span class="q-number">19</span>
                                <span class="q-number">20</span>
                                Which <b>TWO</b> points does Lou make about the caves?
                            </legend>
                            <div class="q-options" role="group" aria-label="Question 1 options">
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-5[]" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Only large tourist boats can visit them.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-5[]" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">The entrances to them are often blocked.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-5[]" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">It is too dangerous for individuals to go near them.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-5[]" value="D" />
                                    <span class="opt-code">D</span>
                                    <span class="opt-label">Someone will explain what is inside them.</span>
                                </label>
                                <label class="q-option">
                                    <input type="checkbox" name="two_choices-QUApDKzp0Wn1GCiA-5[]" value="E" />
                                    <span class="opt-code">E</span>
                                    <span class="opt-label">They cannot be reached on foot.</span>
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
                                        src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- oc --}}
                            <fieldset class="q-item">
                                <p>Questions 21-26</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <p><b>Work experience for veterinary science students</b></p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    What problem did both Diana and Tim have when arranging their work experience?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-5" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">make initial contact with suitable farms</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-5" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">organising transport to and from the farm</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-5" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">finding a placement for the required length of time</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    Tim was pleased to be able to help
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-6" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">a lamb that had a broken leg.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-6" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">a sheep that was having difficult giving birth.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-6" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">a newly born lamb that was having trouble feeding.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                    Diana says the sheep on her farm
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">were of various different varieties.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">were mainly reared for their meat.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">had better quality wool than sheep on the hills.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    What did the students learn about adding supplements to chicken feed?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">These should only be given if specially needed.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">It is worth paying extra for the most effective ones.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">The amount given at one time should be limited.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="25">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    What happened when Diana was working with dairy cows?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">She identified some cows incorrectly.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">She accidentally threw some milk away.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">She made a mistake when storing milk.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="26">
                                <legend class="q-text">
                                    <span class="q-number">26</span>
                                    What did both farmers mention about vets and farming?
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 26 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-10" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">Vets are failing to cope with some aspects of animal health.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-10" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">There needs to be a fundamental change in the training of vets.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-QUApDKzp0Wn1GCiA-10" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">Some jobs could be done by the farmer rather than by a vet.</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <h3>Questions 27-30</h3>
                                <p>What opinion do the students give about each of the following modules on their veterinary science course?</p>
                                <p>Choose <b>FOUR</b> answers from the box and write the correct letter, <b>A-F</b>, next to questions.</p>
                            </fieldset>

                            <fieldset class="q-item">
                                <h3>Opinions</h3>
                                <p><b>A</b> Tim found this easier than expected.</p>
                                <p><b>B</b> Tim thought this was not very clearly organised.</p>
                                <p><b>C</b> Diana may do some further study on this.</p>
                                <p><b>D</b> They both found the reading required for this was difficult.</p>
                                <p><b>E</b> Tim was shocked at something he learned on this module.</p>
                                <p><b>F</b> They were both surprised how little is known about some aspects of this.</p>
                            </fieldset>

                            <p><b>Modules on Veterinary Science course</b></p>

                            <fieldset class="q-item" data-type="matching_information" data-q="27">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">27</span>
                                    <span style="flex: 1;">
                                        Medical terminology
                                        <span class="q-question">
                                            <select name="matching_information-QUApDKzp0Wn1GCiA-1" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="28">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">28</span>
                                    <span style="flex: 1;">
                                        Diet and nutrition
                                        <span class="q-question">
                                            <select name="matching_information-QUApDKzp0Wn1GCiA-2" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="29">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">29</span>
                                    <span style="flex: 1;">
                                        Animal disease
                                        <span class="q-question">
                                            <select name="matching_information-QUApDKzp0Wn1GCiA-3" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </span>
                                    </span>
                                </legend>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="30">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">30</span>
                                    <span style="flex: 1;">
                                        Wildlife medication
                                        <span class="q-question">
                                            <select name="matching_information-QUApDKzp0Wn1GCiA-4" class="q-dropdown">
                                                <option value=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
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
                                    src="https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-1-audio-4.mp3"></audio>
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
                            <h3>Labyrinths</h3>
                        </fieldset>

                        <fieldset class="q-item">
                            <p><b>Definition</b></p>
                            <ul>
                                <li>a winding spiral path leading to a central area</li>
                            </ul>

                            <p><b>Labyrinths compared with mazes</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="31">
                                        Mazes are a type of
                                        <span class="q-number-box">31</span>
                                        <input type="text" name="nc-QUApDKzp0Wn1GCiA-11" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p>–
                                <div class="q-list" data-type="nc" data-q="32">
                                    <span class="q-number-box">32</span>
                                    <input type="text" name="nc-QUApDKzp0Wn1GCiA-12" class="q-text" placeholder="">
                                    is needed to navigate through a maze
                                </div>
                            </p>
                            <p>–
                                <div class="q-list" data-type="nc" data-q="33">
                                    the word ‘maze’ is derived from a word meaning a feeling of
                                    <span class="q-number-box">33</span>
                                    <input type="text" name="nc-QUApDKzp0Wn1GCiA-13" class="q-text" placeholder="">
                                </div>
                            </p>
                            <ul>
                                <li>Labyrinths represent a journey through life</li>
                            </ul>
                            <p>–
                                <div class="q-list" data-type="nc" data-q="34">
                                    they have frequently been used in
                                    <span class="q-number-box">34</span>
                                    <input type="text" name="nc-QUApDKzp0Wn1GCiA-14" class="q-text" placeholder="">
                                    and prayer
                                </div>
                            </p>

                            <p><b>Early examples of the labyrinth spiral</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="35">
                                        Ancient carvings on
                                        <span class="q-number-box">35</span>
                                        <input type="text" name="nc-QUApDKzp0Wn1GCiA-15" class="q-text" placeholder="">
                                        have been found across many cultures
                                    </div>
                                </li>
                                <li>The Pima, a Native American tribe, wove the symbol on baskets</li>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="36">
                                        Ancient Greeks used the symbol on
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="nc-QUApDKzp0Wn1GCiA-16" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>

                            <p><b>Walking labyrinths</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="37">
                                        The largest surviving example of a turf labyrinth once had a big
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="nc-QUApDKzp0Wn1GCiA-17" class="q-text" placeholder="">
                                        at its centre
                                    </div>
                                </li>
                            </ul>

                            <p><b>Labyrinths nowadays</b></p>
                            <ul>
                                <li>
                                    <div class="q-list" data-type="nc" data-q="38">
                                        Believed to have a beneficial impact on mental and physical health, e.g., walking a maze can reduce a person’s
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="nc-QUApDKzp0Wn1GCiA-18" class="q-text" placeholder="">
                                        rate
                                    </div>
                                </li>
                                <li>Used in medical and health and fitness settings and also prisons</li>
                                <li>Popular with patients, visitors and staff in hospitals</li>
                            </ul>

                            <p>–
                                <div class="q-list" data-type="nc" data-q="39">
                                    patients who can’t walk can use ‘finger labyrinths’ made from
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-QUApDKzp0Wn1GCiA-19" class="q-text" placeholder="">
                                </div>
                            </p>

                            <p>–
                                <div class="q-list" data-type="nc" data-q="40">
                                    research has shown that Alzheimer’s sufferers experience less
                                    <span class="q-number-box">40</span>
                                    <input type="text" name="nc-QUApDKzp0Wn1GCiA-20" class="q-text" placeholder="">
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
