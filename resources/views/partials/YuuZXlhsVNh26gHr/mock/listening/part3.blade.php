@props(['part', 'id'])


<fieldset class="q-item">
    <p class="lead"><i>Complete The Notes Below</i></p>
    <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2" style="text-align: left;">
            Background on school marching band
        </th>
    </tr>

    <tr>
        <td colspan="2">
            It consists of around
            <div class="q-item" data-q="1" style="display:inline-block;">
                <span class="q-number-box">21</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-11" class="q-text"
                    placeholder="">
            </div>
            students.
        </td>
    </tr>

    <tr>
        <td colspan="2">
            It is due to play in a
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">22</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-12" class="q-text"
                    placeholder="">
            </div>
            band competition.
        </td>
    </tr>

    <tr>
        <td colspan="2">
            It has been invited to play in the town’s
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">23</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-13" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            They have listened to a talk by a
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">24</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-14" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            Joe will discuss a
            <div class="q-item" data-q="5" style="display:inline-block;">
                <span class="q-number-box">25</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-15" class="q-text"
                    placeholder="">
            </div>
            with the band.
        </td>
    </tr>

    <tr>
        <td colspan="2">
            Joe hopes the band will attend a
            <div class="q-item" data-q="6" style="display:inline-block;">
                <span class="q-number-box">26</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-16" class="q-text"
                    placeholder="">
            </div>
            next month.
        </td>
    </tr>
</table>


<fieldset class="q-item">
    <p><b>Questions 27–30</b></p>
    <p>
        What problem does Joe mention in connection with each of the following band members?
    </p>
    <p>
        <i>Choose <b>FOUR</b> answers from the box and write the correct letter, <b>A–F</b>, next to
            questions.</i>
    </p>

    <p><b>Problems</b></p>
    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> makes a lot of mistakes in rehearsals</li>
        <li><b>B</b> keeps making unhelpful suggestions</li>
        <li><b>C</b> has difficulty with rhythm</li>
        <li><b>D</b> misses too many rehearsals</li>
        <li><b>E</b> has a health problem</li>
        <li><b>F</b> doesn’t mix with other students</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Band members</b></h3>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">27</span>
        <span style="flex: 1;">
            flautist
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-7" class="q-dropdown">
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

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">28</span>
        <span style="flex: 1;">
            trumpeter
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-8" class="q-dropdown">
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

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">29</span>
        <span style="flex: 1;">
            trombonist
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-9" class="q-dropdown">
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

<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">30</span>
        <span style="flex: 1;">
            percussionist
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-10" class="q-dropdown">
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
