@props(['part', 'id'])
<!-- Question 1 -->
<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">11</span>
        Stevenson’s was founded in
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">1923.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">1924.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">1926.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">12</span>
        Originally, Stevenson’s manufactured goods for
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the healthcare industry.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the automotive industry.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the machine tools industry.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="13">
    <legend class="q-text">
        <span class="q-number">13</span>
        What does the speaker say about the company premises?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">The company has recently moved.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">The company has no plans to move.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">The company is going to move shortly.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="14">
    <legend class="q-text">
        <span class="q-number">14</span>
        The programme for the work experience group includes
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">time to do research.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">meetings with a teacher.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">talks by staff.</span>
        </label>
    </div>
</fieldset>

{{-- sadsd --}}

<fieldset class="q-item">
    <p>Questions 15-20</p>
    <p>Label the map below.</p>
    <p>Write the correct letter, <b>A</b>–<b>J</b>, next to Questions.</p>
    <img src="{{ asset('own_assets/images/cambridge-ielts-16-academic-listening-test-1-15-20.jpg') }}"
        alt="Plan of Stevenson’s site">
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="15">
    <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
        <span class="q-number">15</span>
        <span style="flex:1;">
            coffee room
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
                    <option value="I">I</option>
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="16">
    <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
        <span class="q-number">16</span>
        <span style="flex:1;">
            warehouse
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
                    <option value="I">I</option>
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="17">
    <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
        <span class="q-number">17</span>
        <span style="flex:1;">
            staff canteen
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
                    <option value="I">I</option>
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="18">
    <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
        <span class="q-number">18</span>
        <span style="flex:1;">
            meeting room
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
                    <option value="I">I</option>
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="19">
    <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
        <span class="q-number">19</span>
        <span style="flex:1;">
            human resources
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
                    <option value="I">I</option>
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<!-- Question 6 -->
<fieldset class="q-item" data-q="20">
    <legend class="q-text" style="display:flex; align-items:center; gap:6px;">
        <span class="q-number">20</span>
        <span style="flex:1;">
            boardroom
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
                    <option value="I">I</option>
                    <option value="J">J</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>
