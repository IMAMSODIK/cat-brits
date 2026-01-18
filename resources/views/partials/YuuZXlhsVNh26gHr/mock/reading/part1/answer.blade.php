@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 1–3</b></p>
    <p class="lead">The Reading Passage has ten sections, <b>A–J</b>.</p>
    <p>Which section contains the following information?</p>
    <p class="lead">
        Write the correct letter, <b>A–J</b>, in boxes on your answer sheet.
    </p>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">1</span>
        <span style="flex: 1;">
            information about how non-scientists’ assumptions about intelligence influence
            their behavior towards others
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-dropdown">
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
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">2</span>
        <span style="flex: 1;">
            a reference to lack of clarity over the definition of intelligence
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-dropdown">
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
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">3</span>
        <span style="flex: 1;">
            the point that a researcher’s implicit and explicit theories may be very
            different
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-dropdown">
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
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 4–6</h3>
    <p class="lead">
        Do the following statements agree with the claims of the writer in the Reading Passage?
    </p>
    <p><i>In boxes on your answer sheet, write</i></p>
    <ul class="legend">
        <li><strong>YES</strong> if the statement agrees with the claims of the writer</li>
        <li><strong>NO</strong> if the statement contradicts the claims of the writer</li>
        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks about this</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">4</span>
        Slow language development in children is likely to prove disappointing to their parents.
    </legend>
    <div class="q-options" role="radiogroup">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="YES">
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="NO">
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">5</span>
        People’s expectations of what children should gain from education are universal.
    </legend>
    <div class="q-options" role="radiogroup">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="YES">
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="NO">
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">6</span>
        Scholars may discuss theories without fully understanding each other.
    </legend>
    <div class="q-options" role="radiogroup">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="YES">
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="NO">
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 7–13</h3>
    <p class="lead">
        <i>Look at the following statements and the list of theories below.</i>
    </p>
    <p>
        Match each statement with the correct theory, <b>A, B</b> or <b>C</b>.
    </p>
    <p>
        Write the correct letter, <b>A, B</b> or <b>C</b>, in boxes on your answer sheet.
    </p>
    <p><i><b>NB</b> You may use any letter more than once.</i></p>

    <p><b>List of Theories</b></p>
    <ul class="legend">
        <li><strong>A</strong> Hamiltonian</li>
        <li><strong>B</strong> Jeffersonian</li>
        <li><strong>C</strong> Jacksonian</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="7">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">7</span>
        <span style="flex:1;">
            It is desirable for the same possibilities to be open to everyone.
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-1" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="8">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">8</span>
        <span style="flex:1;">
            No section of society should have preferential treatment at the expense of another.
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-2" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="9">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">9</span>
        <span style="flex:1;">
            People should only gain benefits on the basis of what they actually achieve.
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="10">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">10</span>
        <span style="flex:1;">
            Variation in intelligence begins at birth.
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-4" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="11">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">11</span>
        <span style="flex:1;">
            The more intelligent people should be in positions of power.
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-5" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="12">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">12</span>
        <span style="flex:1;">
            Everyone can develop the same abilities.
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-6" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="13">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">13</span>
        <span style="flex:1;">
            People of low intelligence are likely to lead uncontrolled lives.
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-7" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>
