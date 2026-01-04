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
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-1.mp3"></audio>
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

                            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <th><b>Name of company</b></th>
                                    <th><b>	Information about costs</b></th>
                                    <th><b>Additional notes</b></th>
                                </tr>

                                <tr>
                                    <td>Peak Rentals</td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="1">
                                            Prices range from $105 to $
                                            <span class="q-number-box">1</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-1" class="q-text">
                                            per room per month.
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="2" style="margin-top: 10px;">
                                            The furniture is very 
                                            <span class="q-number-box">2</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-2" class="q-text">
                                            Delivers in 1-2 days
                                        </div>
                                        <div class="q-item" data-type="nc" data-q="3" style="margin-top: 10px;">
                                            Special offer: <br>free 
                                            <span class="q-number-box">3</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-3" class="q-text">
                                            with every living room set
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="4">
                                            <span class="q-number-box">4</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-4" class="q-text">
                                            and Oliver
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="5">
                                            Mid-range prices <br> 12% monthly free for
                                            <span class="q-number-box">5</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-5" class="q-text">
                                        </div>
                                    </td>
                                    <td>Also offers a cleaning service</td>
                                </tr>
                                <tr>
                                    <td>Larch Furniture</td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="6">
                                            Offers cheapest prices for renting furniture and
                                            <span class="q-number-box">6</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-6" class="q-text">
                                            items
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="7">
                                            Must have own
                                            <span class="q-number-box">7</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-7" class="q-text">
                                            Minimum contract length: six months
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="8">
                                            <span class="q-number-box">8</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-8" class="q-text">
                                            Rentals
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="9">
                                            See the
                                            <span class="q-number-box">9</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-9" class="q-text">
                                            for the most up-to-date prices
                                        </div>
                                    </td>
                                    <td>
                                        <div class="q-item" data-type="nc" data-q="10">
                                            <span class="q-number-box">10</span>
                                            <input type="text" name="nc-bBhJMdwYSokWGAc9-10" class="q-text">
                                            are allowed within 7 days of delivery
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
                                    src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-2.mp3"></audio>
                                <input type="range" class="timeline" value="0" disabled>
                                <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                            </div>
                        </fieldset>

                        {{-- oc --}}
                        <fieldset class="q-item">
                            <p>Questions 11-16</p>
                            <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="11">
                            <legend class="q-text">
                                <span class="q-number">11</span>
                                Who was responsible for starting the community project?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-1" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">The castle owners</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-1" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">A national charity</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-1" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">The local council</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="12">
                            <legend class="q-text">
                                <span class="q-number">12</span>
                                How was the gold coin found?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-2" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Heavy rain had removed some of the soil</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-2" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">The ground was dug up by wild rabbits</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-2" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">A person with a metal detector searched the area</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="13">
                            <legend class="q-text">
                                <span class="q-number">13</span>
                                What led the archaeologists to believe there was an ancient village on this site?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-3" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">The lucky discovery of old records</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-3" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">The bases of several structures visible in the grass</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-3" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">The unusual stones found near the castle</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="14">
                            <legend class="q-text">
                                <span class="q-number">14</span>
                                What are the team still hoping to find?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-4" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Everyday pottery</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-4" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Animal bones</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-4" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Pieces of jewellery</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="15">
                            <legend class="q-text">
                                <span class="q-number">15</span>
                                What was found on the other side of the river to the castle?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-5" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">The remains of a large palace</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-5" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">The outline of fields</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-5" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">A number of small huts</span>
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="q-item" data-type="oc" data-q="16">
                            <legend class="q-text">
                                <span class="q-number">16</span>
                                What do the team plan to do after work ends this summer?
                            </legend>
                            <div class="q-options" role="radiogroup" aria-label="Question 16 options">
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-6" value="A" />
                                    <span class="opt-code">A</span>
                                    <span class="opt-label">Prepare a display for a museum</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-6" value="B" />
                                    <span class="opt-code">B</span>
                                    <span class="opt-label">Take part in a television programme</span>
                                </label>
                                <label class="q-option">
                                    <input type="radio" name="oc-bBhJMdwYSokWGAc9-6" value="C" />
                                    <span class="opt-code">C</span>
                                    <span class="opt-label">Start to organise school visits</span>
                                </label>
                            </div>
                        </fieldset>

                        {{-- map_labeling --}}
                        <fieldset class="q-item">
                            <p>Questions 17-20</p>
                            <p>Label the map below. Drag the correct letter, <b>A</b>–<b>G</b>, next to Questions</p>
                            <img src="{{asset('own_assets/images/cambridge-ielts-20-academic-reading-test-3–17-20.jpg')}}" alt="">
                        </fieldset>

                        <fieldset class="q-item" data-type="map_labeling" data-q="17">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">17</span>
                                <span style="flex: 1;">
                                    bridge foundations
                                    <span class="q-question">
                                        <select name="map_labeling-bBhJMdwYSokWGAc9-1" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="18">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">18</span>
                                <span style="flex: 1;">
                                    rubbish pit
                                    <span class="q-question">
                                        <select name="map_labeling-bBhJMdwYSokWGAc9-2" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="19">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">19</span>
                                <span style="flex: 1;">
                                    meeting hall
                                    <span class="q-question">
                                        <select name="map_labeling-bBhJMdwYSokWGAc9-3" class="q-dropdown">
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

                        <fieldset class="q-item" data-type="map_labeling" data-q="20">
                            <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                <span class="q-number">20</span>
                                <span style="flex: 1;">
                                    fish pond
                                    <span class="q-question">
                                        <select name="map_labeling-bBhJMdwYSokWGAc9-4" class="q-dropdown">
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
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Part 3</div>
                <div class="reading-section">
                    <div class="qa highlighted-content">
                        <form class="qa-body">
                            <fieldset class="q-item">
                                <p class="lead">Listen and answer questions 21-30</p>
                                <div class="audio-player">
                                    <audio
                                        src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-3.mp3"></audio>
                                    <input type="range" class="timeline" value="0" disabled>
                                    <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                                </div>
                            </fieldset>

                            {{-- oc --}}
                            <fieldset class="q-item">
                                <p>Questions 21-26</p>
                                <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="21">
                                <legend class="q-text">
                                    <span class="q-number">21</span>
                                    Finn was pleased to discover that their topic
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-7" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">was not familiar to their module leader.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-7" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">had not been chosen by other students.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-7" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">did not prove to be difficult to research.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="22">
                                <legend class="q-text">
                                    <span class="q-number">22</span>
                                    Maya says a mistaken belief about theatre programmes is that
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-8" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">theatres pay companies to produce them.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-8" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">few theatre-goers buy them nowadays.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-8" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">they contain far more adverts than previously.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="23">
                                <legend class="q-text">
                                    <span class="q-number">23</span>
                                     Finn was surprised that, in early British theatre, programmes
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-9" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">were difficult for audiences to obtain.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-9" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">were given out free of charge.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-9" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">were seen as a kind of contract.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="24">
                                <legend class="q-text">
                                    <span class="q-number">24</span>
                                    Maya feels their project should include an explanation of why companies of actors
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-10" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">promoted their own plays.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-10" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">performed plays outdoors.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-10" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">had to tour with their plays.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="25">
                                <legend class="q-text">
                                    <span class="q-number">25</span>
                                    Finn and Maya both think that, compared to nineteenth-century programmes, those from the eighteenth century
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-11" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">were more original.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-11" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">were more colourful.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-11" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">were more informative.</span>
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="q-item" data-type="oc" data-q="26">
                                <legend class="q-text">
                                    <span class="q-number">26</span>
                                    Maya doesn’t fully understand why, in the twentieth century,
                                </legend>
                                <div class="q-options" role="radiogroup" aria-label="Question 26 options">
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-12" value="A" />
                                        <span class="opt-code">A</span>
                                        <span class="opt-label">very few theatre programmes were printed in the USA.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-12" value="B" />
                                        <span class="opt-code">B</span>
                                        <span class="opt-label">British theatre programmes failed to develop for so long.</span>
                                    </label>
                                    <label class="q-option">
                                        <input type="radio" name="oc-bBhJMdwYSokWGAc9-12" value="C" />
                                        <span class="opt-code">C</span>
                                        <span class="opt-label">theatre programmes in Britain copied fashions from the USA</span>
                                    </label>
                                </div>
                            </fieldset>

                            {{-- matching_information --}}
                            <fieldset class="q-item">
                                <p>Questions 27-30</p>
                                <p>What comment is made about the programme for each of the following shows?</p>
                                <p>Choose <b>FOUR</b> answers from the box and write the correct letter, A–F, next to Questions</p>
                                <p><b>Comments about the programme</b></p>
                                <strong>A</strong>.&nbsp;&nbsp; Its origin is somewhat controversial<br>
                                <strong>B</strong>.&nbsp;&nbsp; It is historically significant for a country<br>
                                <strong>C</strong>.&nbsp;&nbsp; It was effective at attracting audiences<br>
                                <strong>D</strong>.&nbsp;&nbsp; It is included in a recent project<br>
                                <strong>E</strong>.&nbsp;&nbsp; It contains insights into the show<br>
                                <strong>F</strong>.&nbsp;&nbsp; It resembles an artwork<br>
                            </fieldset>

                            <fieldset class="q-item" data-type="matching_information" data-q="27">
                                <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                    <span class="q-number">27</span>
                                    <span style="flex: 1;">
                                        Ruy Blas 
                                        <span class="q-question">
                                            <select name="matching_information-bBhJMdwYSokWGAc9-1" class="q-dropdown">
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
                                        Man of La Mancha
                                        <span class="q-question">
                                            <select name="matching_information-bBhJMdwYSokWGAc9-2" class="q-dropdown">
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
                                        The Tragedy of Jane Shore 
                                        <span class="q-question">
                                            <select name="matching_information-bBhJMdwYSokWGAc9-3" class="q-dropdown">
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
                                        The Sailors’ Festival
                                        <span class="q-question">
                                            <select name="matching_information-bBhJMdwYSokWGAc9-4" class="q-dropdown">
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
        </div>
        <div id="panel-mse" class="x-panel" role="tabpanel" aria-labelledby="tab-mse" hidden>
            <div class="x-panel-inner">Content: Part 4</div>
            <div class="qa highlighted-content">
                <form class="qa-body">
                    <fieldset class="q-item">
                        <p class="lead">Listen and answer questions 31-40</p>
                        <div class="audio-player">
                            <audio
                                src="https://engnovate.com/wp-content/uploads/2025/07/cambridge-ielts-20-academic-listening-3-audio-part-4.mp3"></audio>
                            <input type="range" class="timeline" value="0" disabled>
                            <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                        </div>
                    </fieldset>

                    {{-- nc2 --}}
                    <fieldset class="q-item">
                        <p>Questions 31-40</p>
                    </fieldset>

                    <fieldset class="q-item">
                        <p>Complete the notes below.</p>
                        <p>Write <b>ONE WORD ONLY</b> for each answer.</p>
                        <p><b>Inclusive Design</b></p>
                        
                        <p><b>Definition</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="31">
                                    Designing products that can be accessed by a diverse range of people without the need for any
                                    <span class="q-number-box">31</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-11" class="q-text" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="32">
                                    Not the same as universal design: that is design for everyone, including catering for people with
                                    <span class="q-number-box">32</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-12" class="q-text" placeholder="">
                                    problems.
                                </div>
                            </li>
                        </ul>

                        <p><b>Examples of Inclusive Design</b></p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="33">
                                    <span class="q-number-box">33</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-13" class="q-text" placeholder="">
                                    which are adjustable, avoiding back or neck problems
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="34">
                                    <span class="q-number-box">34</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-14" class="q-text" placeholder="">
                                    in public toilets which are easier to use
                                </div>
                            </li>
                        </ul>

                        <p>To assist the elderly:</p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="35">
                                    Designers avoid using
                                    <span class="q-number-box">35</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-15" class="q-text" placeholder="">
                                    in interfaces
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="36">
                                    People can make commands using a mouse, keyboard, or their
                                    <span class="q-number-box">36</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-16" class="q-text" placeholder="">
                                </div>
                            </li>
                        </ul>

                        <p><b>Impact of Non-Inclusive Designs</b></p>
                        <p>Access:</p>
                        <ul>
                            <li>Loss of independence for disabled people.</li>
                        </ul>

                        <p>Safety:</p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="37">
                                    Seatbelts are especially problematic for
                                    <span class="q-number-box">37</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-17" class="q-text" placeholder="">
                                    women.
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="38">
                                    PPE jackets are often unsuitable because of the size of women’s
                                    <span class="q-number-box">38</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-18" class="q-text" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="q-list" data-type="nc" data-q="39">
                                    PPE for female
                                    <span class="q-number-box">39</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-19" class="q-text" placeholder="">
                                    officers dealing with emergencies is the worst.
                                </div>
                            </li>
                        </ul>

                        <p>Comfort in the Workplace:</p>
                        <ul>
                            <li>
                                <div class="q-list" data-type="nc" data-q="40">
                                    The 
                                    <span class="q-number-box">40</span>
                                    <input type="text" name="nc-bBhJMdwYSokWGAc9-20" class="q-text" placeholder="">
                                    in offices is often too low for women.
                                </div>
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.listening.component')
    @include('ielts.sets.layouts.mock.listening.script')
</body>

</html>
