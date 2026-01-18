@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 11-16</h3>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">11</span>
        What made David leave London and move to Northsea?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">He was eager to develop a hobby.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">He wanted to work shorter hours.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">He found his job in website design unsatisfying.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">12</span>
        The Lifeboat Institution in Northsea was built with money provided by
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">a local organisation.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">a local resident.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the local council.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="13">
    <legend class="q-text">
        <span class="q-number">13</span>
        In his health assessment, the doctor was concerned about the fact that David
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">might be colour blind.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">was rather short-sighted.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">had undergone eye surgery.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="14">
    <legend class="q-text">
        <span class="q-number">14</span>
        After arriving at the lifeboat station, they aim to launch the boat within
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">five minutes.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">six to eight minutes.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">eight and a half minutes.</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="15">
    <legend class="q-text">
        <span class="q-number">15</span>
        As a ‘helmsman’, David has the responsibility of deciding
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">who will be the members of his crew.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">what equipment it will be necessary to take.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">if the lifeboat should be launched.</span>
        </label>
    </div>
</fieldset>

<!-- Question 6 -->
<fieldset class="q-item" data-q="16">
    <legend class="q-text">
        <span class="q-number">16</span>
        As well as going out on the lifeboat, David
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">gives talks on safety at sea.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">helps with fundraising.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">recruits new volunteers.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 17-18</p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="17" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">17</span>
        <span class="q-number">18</span>
        Which TWO things does David say about the lifeboat volunteer training?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">The residential course developed his leadership skills.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">The training in use of ropes and knots was quite brief.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">The training exercises have built up his mental strength.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">The casualty care activities were particularly challenging for
                him.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">The wave tank activities provided practice in survival
                techniques.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 19-20</p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="19" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">19</span>
        <span class="q-number">20</span>
        Which TWO things does David find most motivating about the work he does?
    </legend>
    <div class="q-options" role="group" aria-label="Question 2 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">working as part of a team</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">experiences when working in winter</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">being thanked by those he has helped</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">the fact that it keeps him fit</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">the chance to develop new equipment</span>
        </label>
    </div>
</fieldset>