@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 1-5</h3>
    <p class="lead">Complete the notes below.</p>
    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
    <p><i>Write your answers in boxes on your answer sheet</i></p>
</fieldset>
<fieldset class="q-item">
    <p><b>The Dead Sea Scrolls</b></p>
    <ul>
        <p><b>Discovery</b></p>
        <p>Qumran, 1946/7</p>
        <li>
            three Bedouin shepherds in their teens were near an opening on side of cliff
        </li>
        <li>
            <div class="q-list" data-q="1">
                heard a noise of breaking when one teenager threw a
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
            </div>
        </li>
        <li>
            <div class="q-list" data-q="2">
                teenagers went into the
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" placeholder="">
                and found a number of containers
            </div>
        </li>
        <li>
            <div class="q-list" data-q="3">
                made of
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
            </div>
        </li>
        <p><b>The scrolls</b></p>
        <li>
            date from between 150 BCE and 70 CE
        </li>
        <li>
            <div class="q-list" data-q="4">
                thought to have been written by group of people known as the
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" placeholder="">
            </div>
        </li>
        <li>
            <div class="q-list" data-q="5">
                written mainly in the
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" placeholder="">
                language
            </div>
        </li>
        <li>
            most are on religious topics, written using ink on parchment or papyrus
        </li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <p><b>Questions 6-13</b></p>
    <p class="lead">Do the following statements agree with the information given in the Reading
        Passage?</p>
    <p>In boxes on your answer sheet, write</p>
    <ul class="legend">
        <li><strong>TRUE</strong> if the statement agrees with the information</li>
        <li><strong>FALSE</strong> if the statement contradicts the information</li>
        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">6</span>
        The Bedouin teenagers who found the scrolls were disappointed by how little money they received
        for them.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">7</span>
        There is agreement among academics about the origin of the Dead Sea Scrolls.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">8</span>
        Most of the books of the Bible written on the scrolls are incomplete.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">9</span>
        The information on the Copper Scroll is written in an unusual way.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">10</span>
        Mar Samuel was given some of the scrolls as a gift.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">11</span>
        In the early 1950s, a number of educational establishments in the US were keen to buy scrolls
        from Mar Samuel.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">7</span>
        The scroll that was pieced together in 2017 contains information about annual occasions in the
        Qumran area 2,000 years ago.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="8">
    <legend class="q-text">
        <span class="q-number">13</span>
        Academics at the University of Haifa are currently researching how to decipher the final scroll.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>
