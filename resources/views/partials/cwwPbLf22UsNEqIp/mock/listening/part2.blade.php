@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 11-17</h3>
    </p>
    <p>Label the map below.</p>
    <p>Write <b>NO MORE THAN THREE WORDS</b> for each answer.</p>
    <p><b>Sports Super Centre</b></p>
    <div class="d-flex">
        <img src="{{ asset('own_assets/images/P02-1.png') }}" alt="Sports Super Centre"
            style="max-width: 100%; height: auto;" />
    </div>

</fieldset>
<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="1">
            <span class="q-number-box">11</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="2">
            <span class="q-number-box">12</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="3">
            <span class="q-number-box">13</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="4">
            <span class="q-number-box">14</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="5">
            <span class="q-number-box">15</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="6">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="6">
            <span class="q-number-box">16</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="7">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="7">
            <span class="q-number-box">17</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text" />
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <p><b>Question 18</b></p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">18</span>
        The sports centre is open on public holidays from ...
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">7 a.m. to 5 p.m.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">5 a.m. to 7 p.m.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">5 a.m. to 9 p.m.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>
    <h3>Questions 19–20</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="2" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">19</span>
        <span class="q-number">20</span>
        Which TWO services are covered by the membership fee?
    </legend>

    <div class="q-options" role="group" aria-label="Question 2 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">personal training</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">swim squads</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">childminding</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">programme design</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">tennis lessons</span>
        </label>
    </div>
</fieldset>
