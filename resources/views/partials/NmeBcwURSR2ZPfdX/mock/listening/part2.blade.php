@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 11–12</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">11</span>
        <span class="q-number">12</span>
        According to Megan, what are the TWO main advantages of working in the agriculture and horticulture
        sectors?
    </legend>

    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the active lifestyle</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the above-average salaries</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the flexible working opportunities</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">the opportunities for overseas travel</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">the chance to be in a natural environment</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p>
    <h3>Questions 13–14</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="2" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">13</span>
        <span class="q-number">14</span>
        Which TWO of the following are likely to be disadvantages for people working outdoors?
    </legend>

    <div class="q-options" role="group" aria-label="Question 2 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the increasing risk of accidents</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">being in a very quiet location</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">difficult weather conditions at times</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">the cost of housing</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">the level of physical fitness required</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p><b>Questions 15–20</b></p>
    <p>What information does Megan give about each of the following job opportunities?</p>
    <p><i>Choose SIX answers from the box and write the correct letter, <b>A–H</b>, next to the
            questions.</i></p>

    <p><b>Information</b></p>
    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> not a permanent job</li>
        <li><b>B</b> involves leading a team</li>
        <li><b>C</b> experience not essential</li>
        <li><b>D</b> intensive work but also fun</li>
        <li><b>E</b> chance to earn more through overtime</li>
        <li><b>F</b> chance for rapid promotion</li>
        <li><b>G</b> accommodation available</li>
        <li><b>H</b> local travel involved</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">15</span>
        <span style="flex: 1;">
            Fresh food commercial manager
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-1" class="q-dropdown">
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
            Agronomist
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-2" class="q-dropdown">
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
            Fresh produce buyer
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-3" class="q-dropdown">
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
            Garden centre sales manager
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-4" class="q-dropdown">
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
            Tree technician
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-5" class="q-dropdown">
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
            Farm worker
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-6" class="q-dropdown">
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
