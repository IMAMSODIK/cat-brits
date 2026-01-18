@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 1-7</h3>
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2">Enquiry about booking hotel room for event</th>
    </tr>

    <tr>
        <td colspan="2">
            Example: Andrew is the <b>...Events...</b> Manager
        </td>
    </tr>

    <tr>
        <td><b>Rooms</b></td>
        <td></td>
    </tr>

    <tr>
        <td colspan="2">Adelphi Room</td>
    </tr>

    <tr>
        <td>
            number of people who can sit down to eat:
            <div class="q-item" data-q="1" style="display:inline-block;">
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" />
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            has a gallery suitable for musicians
        </td>
    </tr>

    <tr>
        <td>
            can go out and see the
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" />
            </div>
            in pots on the terrace
        </td>
    </tr>

    <tr>
        <td>
            terrace has a view of a group of
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" />
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">Carlton Room</td>
    </tr>

    <tr>
        <td>
            number of people who can sit down to eat: 110
        </td>
    </tr>

    <tr>
        <td>
            has a
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" />
            </div>
        </td>
    </tr>

    <tr>
        <td>
            View of the lake
        </td>
    </tr>

    <tr>
        <td><b>Options</b></td>
        <td></td>
    </tr>

    <tr>
        <td>Master of Ceremonies</td>
        <td></td>
    </tr>

    <tr>
        <td>
            can give a
            <div class="q-item" data-q="5" style="display:inline-block;">
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" />
            </div>
            while people are eating
        </td>
    </tr>

    <tr>
        <td>
            will provide
            <div class="q-item" data-q="6" style="display:inline-block;">
                <span class="q-number-box">6</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text" />
            </div>
            if there are any problems
        </td>
    </tr>

    <tr>
        <td>Accommodation:</td>
        <td></td>
    </tr>

    <tr>
        <td>
            in the hotel rooms or
            <div class="q-item" data-q="7" style="display:inline-block;">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text" />
            </div>
        </td>
    </tr>
</table>

<fieldset class="q-item">
    <p><b>Questions 8–10</b></p>
    <p>What is said about using each of the following hotel facilities?</p>
    <p><i>Choose <b>THREE</b> answers from the box and write the correct letter, <b>A–C</b>, next to the
            questions.</i></p>

    <p><b>Availability</b></p>
    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> included in cost of hiring room</li>
        <li><b>B</b> available at extra charge</li>
        <li><b>C</b> not available</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="8">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">8</span>
        <span style="flex: 1;">
            outdoor swimming pool
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-dropdown">
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
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">9</span>
        <span style="flex: 1;">
            gym
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-dropdown">
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
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">10</span>
        <span style="flex: 1;">
            tennis courts
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>
