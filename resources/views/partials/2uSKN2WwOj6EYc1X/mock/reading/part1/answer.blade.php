@props(['part', 'id'])
<fieldset class="q-item">
    <h3 class="lead"><b>Question 1-6</b></h3>
    <p class="lead">The Reading Passage has seven paragraphs, <b>A-F</b>.</p>
    <p>Choose the correct heading for paragraphs from the list of headings below.</p>
    <p>Write the correct number, <b>i-x</b>, in boxes on your answer sheet.</p>
    <p><b>List of Headings</b></p>
    <ul class="legend">
        <li><strong>i</strong> The areas and artefacts within the pyramid itself</li>
        <li><strong>i</strong> Locations and features of different seaweeds</li>
        <li><strong>ii</strong> Various products of seaweeds</li>
        <li><strong>iii</strong> Use of seaweeds in Japan</li>
        <li><strong>iv</strong> Seaweed species around the globe</li>
        <li><strong>v</strong> Nutritious value of seaweeds</li>
        <li><strong>vi</strong> Why it doesn’t dry or sink</li>
        <li><strong>vii</strong> Where to find red seaweeds</li>
        <li><strong>viii</strong> Underuse of native species</li>
        <li><strong>ix</strong> Mystery solved</li>
        <li><strong>x</strong> How seaweeds reproduce and grow</li>
    </ul>
</fieldset>
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">1</span>
        Section <b>A</b>
        <select name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-dropdown">
            <option value=""></option>
            <option value="i">i</option>
            <option value="ii">ii</option>
            <option value="iii">iii</option>
            <option value="iv">iv</option>
            <option value="v">v</option>
            <option value="vi">vi</option>
            <option value="vii">vii</option>
            <option value="viii">viii</option>
            <option value="ix">ix</option>
            <option value="x">x</option>
        </select>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">2</span>
        Section <b>B</b>
        <select name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-dropdown">
            <option value=""></option>
            <option value="i">i</option>
            <option value="ii">ii</option>
            <option value="iii">iii</option>
            <option value="iv">iv</option>
            <option value="v">v</option>
            <option value="vi">vi</option>
            <option value="vii">vii</option>
            <option value="viii">viii</option>
            <option value="ix">ix</option>
            <option value="x">x</option>
        </select>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">3</span>
        Section <b>C</b>
        <select name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-dropdown">
            <option value=""></option>
            <option value="i">i</option>
            <option value="ii">ii</option>
            <option value="iii">iii</option>
            <option value="iv">iv</option>
            <option value="v">v</option>
            <option value="vi">vi</option>
            <option value="vii">vii</option>
            <option value="viii">viii</option>
            <option value="ix">ix</option>
            <option value="x">x</option>
        </select>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">4</span>
        Section <b>D</b>
        <select name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-dropdown">
            <option value=""></option>
            <option value="i">i</option>
            <option value="ii">ii</option>
            <option value="iii">iii</option>
            <option value="iv">iv</option>
            <option value="v">v</option>
            <option value="vi">vi</option>
            <option value="vii">vii</option>
            <option value="viii">viii</option>
            <option value="ix">ix</option>
            <option value="x">x</option>
        </select>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">5</span>
        Section <b>E</b>
        <select name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-dropdown">
            <option value=""></option>
            <option value="i">i</option>
            <option value="ii">ii</option>
            <option value="iii">iii</option>
            <option value="iv">iv</option>
            <option value="v">v</option>
            <option value="vi">vi</option>
            <option value="vii">vii</option>
            <option value="viii">viii</option>
            <option value="ix">ix</option>
            <option value="x">x</option>
        </select>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">6</span>
        Section <b>F</b>
        <select name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-dropdown">
            <option value=""></option>
            <option value="i">i</option>
            <option value="ii">ii</option>
            <option value="iii">iii</option>
            <option value="iv">iv</option>
            <option value="v">v</option>
            <option value="vi">vi</option>
            <option value="vii">vii</option>
            <option value="viii">viii</option>
            <option value="ix">ix</option>
            <option value="x">x</option>
        </select>
    </legend>
</fieldset>

<fieldset class="q-item">
    <p>
    <h3>Questions 7-10</h3>
    </p>
    <p>Complete the flow chart below.</p>
    <p>Choose <b>NO MORE THAN THREE WORDS</b> from the passage for each answer.</p>
    <p><b>Sports Super Centre</b></p>
    <p><i>Write your answers in boxes <b>7-10</b> on your answer sheet.</i></p>
    <div class="d-flex">
        <img src="{{ asset('own_assets/images/P02-4.png') }}" alt="Sports Super Centre"
            style="max-width: 100%; height: auto;" />
    </div>
    <fieldset class="q-item" data-q="1">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="1">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text" />
            </span>
        </legend>
    </fieldset>

    <fieldset class="q-item" data-q="2">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="2">
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text" />
            </span>
        </legend>
    </fieldset>
    <fieldset class="q-item" data-q="3">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="3">
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text" />
            </span>
        </legend>
    </fieldset>
    <fieldset class="q-item" data-q="4">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="4">
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text" />
            </span>
        </legend>
    </fieldset>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 11–13</b></p>
    <p class="lead">Classify the following description as relating to</p>
    <p><b>A.</b> Green seaweeds</p>
    <p><b>B.</b> Brown seaweeds</p>
    <p><b>C.</b> Red seaweed</p>
    <p>Which section contains the following information?</p>
    <p class="lead">
        Write the correct letter, <b>A, B, </b>or <b>C</b>, on your answer sheet.
    </p>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">11</span>
        Can resist exposure to sunlight at high-water mark
        <span class="q-question">
            <select name="{{ $part['tipe'][2] }}-{{ $id }}-1" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">12</span>
        Grow in far open sea water
        <span class="q-question">
            <select name="{{ $part['tipe'][2] }}-{{ $id }}-2" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">13</span>
        Share their habitat with karengo
        <span class="q-question">
            <select name="{{ $part['tipe'][2] }}-{{ $id }}-3" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </span>
    </legend>
</fieldset>
