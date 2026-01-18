@props(['part', 'id'])

<fieldset class="q-item">
    <p>Questions 11-14</p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">11</span>
        The museum building was originally
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">a factory.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">a private home.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">a hall of residence.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">12</span>
        The university uses part of the museum building as
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">teaching rooms.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">a research library.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">administration offices.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="13">
    <legend class="q-text">
        <span class="q-number">13</span>
        What does the guide say about the entrance fee?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Visitors decide whether or not they wish to pay.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">Only children and students receive a discount.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">The museum charges extra for special exhibitions.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="14">
    <legend class="q-text">
        <span class="q-number">14</span>
        What are visitors advised to leave in the cloakroom?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">cameras</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">coats</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">bags</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 15-20</p>
    <p>What information does the speaker give about each of the following areas of the museum?</p>
    <p><i>Choose SIX answers from the box and write the correct letter, <b>A–H</b>, next to questions.</i>
    </p>
    <p><b>Information</b></p>

    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> Parents must supervise their children.</li>
        <li><b>B</b> There are new things to see.</li>
        <li><b>C</b> It is closed today.</li>
        <li><b>D</b> This is only for school groups.</li>
        <li><b>E</b> There is a quiz for visitors.</li>
        <li><b>F</b> It features something created by students.</li>
        <li><b>G</b> An expert is here today.</li>
        <li><b>H</b> There is a one-way system.</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Areas of the Museum</b></h3>
</fieldset>

<fieldset class="q-item" data-q="15">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">15</span>
        <span style="flex: 1;">
            Four Seasons
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

<fieldset class="q-item" data-q="16">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            Farmhouse Kitchen
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

<fieldset class="q-item" data-q="17">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            A Year on the Farm
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

<fieldset class="q-item" data-q="18">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            Wagon Walk
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

<fieldset class="q-item" data-q="19">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">19</span>
        <span style="flex: 1;">
            Bees are Magic
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

<fieldset class="q-item" data-q="20">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">20</span>
        <span style="flex: 1;">
            The Pond
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