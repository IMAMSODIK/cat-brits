@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 35-37</h3>
    <p class="lead">Complete the sentences below.</p>
    <p>Choose <b>NO MORE THAN THREE WORDS</b> from the passage for each answer.</p>
    <p><i>Write your answers in boxes on your answer sheet</i></p>
</fieldset>

<fieldset class="q-item questions-item" data-q="35">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">35</span>
        <span style="flex: 1;">
            Numerous training sessions are aimed at people who feel they are not
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
                enough.
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item questions-item" data-q="36">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">36</span>
        <span style="flex: 1;">
            Being organised appeals to people who regard themselves as
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text"
                    placeholder="">.
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item questions-item" data-q="37">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">37</span>
        <span style="flex: 1;">
            Many people feel
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
                with
                aspects of their work.
            </span>
        </span>
    </legend>
</fieldset>

<p><b>Questions 38-40</b></p>
<fieldset class="q-item">
    <p class="lead">Do the following statements agree with the information given in
        the Reading Passage?
    </p>
    <p>In boxes on your answer sheet, write</p>
    <ul class="legend">
        <li><strong>TRUE</strong> if the statement agrees with the information</li>
        <li><strong>FALSE</strong> if the statement contradicts the information</li>
        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
    </ul>
</fieldset>
<fieldset class="q-item" data-q="38">
    <legend class="q-text">
        <span class="q-number">38</span>
        Both businesses and people aim at order without really considering its value.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item" data-q="39">
    <legend class="q-text">
        <span class="q-number">39</span>
        Innovation is most successful if the people involved have distinct roles.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item" data-q="40">
    <legend class="q-text">
        <span class="q-number">40</span>
        Google was inspired to adopt flexibility by the success of General Electric.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-11" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-11" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-11" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
