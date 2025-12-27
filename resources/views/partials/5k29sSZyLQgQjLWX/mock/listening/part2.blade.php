@props(['part', 'id'])
<fieldset class="q-item">
    <p><b>Questions 11–16</b></p>
    <p>What information does the speaker give about each of the following excursions?</p>
    <p><i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A–H</b>, next to the
            questions.</i></p>

    <p><b>Information</b></p>
    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> all downhill</li>
        <li><b>B</b> suitable for beginners</li>
        <li><b>C</b> only in good weather</li>
        <li><b>D</b> food included</li>
        <li><b>E</b> no charge</li>
        <li><b>F</b> swimming possible</li>
        <li><b>G</b> fully booked today</li>
        <li><b>H</b> transport not included</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">11</span>
        <span style="flex: 1;">
            dolphin watching
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-dropdown">
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
        <span class="q-number">12</span>
        <span style="flex: 1;">
            forest walk
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-dropdown">
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
        <span class="q-number">13</span>
        <span style="flex: 1;">
            cycle trip
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-dropdown">
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
        <span class="q-number">14</span>
        <span style="flex: 1;">
            local craft tour
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-dropdown">
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
        <span class="q-number">15</span>
        <span style="flex: 1;">
            observatory trip
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-dropdown">
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
        <span class="q-number">16</span>
        <span style="flex: 1;">
            horse riding
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-dropdown">
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

<fieldset class="q-item">
    <p>
    <h3>Questions 17–18</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">7</span>
        <span class="q-number">8</span>
        Which TWO things does the speaker say about the attraction called <i>Musical Favourites</i>?
    </legend>

    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">You pay extra for drinks.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">You must book it in advance.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">You get a reduction if you buy two tickets.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">You can meet the performers.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">You can take part in the show.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>
    <h3>Questions 19–20</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">1</span>
        <span class="q-number">2</span>
        Which TWO things does the speaker say about the <i>Castle Feast</i>?
    </legend>

    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Visitors can dance after the meal.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">There is a choice of food.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Visitors wear historical costume.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">Knives and forks are not used.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">The entertainment includes horse races.</span>
        </label>
    </div>
</fieldset>
