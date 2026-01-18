@props(['part', 'id'])

<fieldset class="q-item">
    <p>Questions 11-13</p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">11</span>
        Why does the speaker apologise about the seats?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">They are too small.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">There are not enough of them.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Some of them are very close together.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">12</span>
        What does the speaker say about the age of volunteers?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">The age of volunteers is less important than other factors.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">Young volunteers are less reliable than older ones.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Most volunteers are about 60 years old.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="13">
    <legend class="q-text">
        <span class="q-number">13</span>
        What does the speaker say about training?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">It is continuous.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">It is conducted by a manager.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">It takes place online.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 14-15</p>
    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="14" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">14</span>
        <span class="q-number">15</span>
        Which TWO issues does the speaker ask the audience to consider before they apply to be volunteers?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">their financial situation</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">their level of commitment</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">their work experience</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">their ambition</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">their availability</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 16-20</p>
    <p>What does the speaker suggest would be helpful for each of the following areas of voluntary work?</p>
    <p>
        <i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to
            Questions</i>
    </p>
    <p><b>Helpful things volunteers might offer</b></p>

    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> experience on stage</li>
        <li><b>B</b> original, new ideas</li>
        <li><b>C</b> parenting skills</li>
        <li><b>D</b> an understanding of food and diet</li>
        <li><b>E</b> retail experience</li>
        <li><b>F</b> a good memory</li>
        <li><b>G</b> a good level of fitness</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Area of voluntary work</b></h3>
</fieldset>

<fieldset class="q-item" data-q="16">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            Fundraising
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
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="17">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            Litter collection
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
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="18">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            ‘Playmates’
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
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="19">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">19</span>
        <span style="flex: 1;">
            Story club
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
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="20">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">20</span>
        <span style="flex: 1;">
            First aid
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
                </select>
            </span>
        </span>
    </legend>
</fieldset>
