@props(['part', 'id'])


<h2>Oniton Hall</h2>
<!-- Question 1 -->
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">11</span>
        Many past owners made changes to
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the gardens.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the house.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the farm.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">12</span>
        Sir Edward Downes built Oniton Hall because he wanted
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">a place for discussing politics.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">a place to display his wealth.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">a place for artists and writers.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">13</span>
        Visitors can learn about the work of servants in the past from
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">audio guides.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">photographs.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label"> people in costume.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">14</span>
        What is new for children at Onion Hall?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">clothes for dressing up</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">mini tractors</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the adventure playground</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 15-20</p>
    <p>Which activity is offered at each of the following locations on the farm?</p>
    <p>
        <i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to
            Questions</i>
    </p>
    <h3><b>Activities</b></h3>
    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> shopping</li>
        <li><b>B</b> watching cows being milked</li>
        <li><b>C</b> seeing old farming equipment</li>
        <li><b>D</b> eating and drinking</li>
        <li><b>E</b> starting a trip</li>
        <li><b>F</b> seeing rare breeds of animals</li>
        <li><b>G</b> helping to look after animals</li>
        <li><b>H</b> using farming tools</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Locations on the farm</b></h3>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">15</span>
        <span style="flex: 1;">
            dairy
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            large barn
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            small barn
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            stables
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">19</span>
        <span style="flex: 1;">
            shed
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-5" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">20</span>
        <span style="flex: 1;">
            parkland
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-6" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>
