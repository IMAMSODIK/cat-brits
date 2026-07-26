@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 28-32</b></p>
    <p class="lead">Reading Passage 3 has six paragraphs,</p>
    <p>Which paragraph contains the following information?</p>
    <p class="lead">
        Write the correct letter, <b>A–F</b> in boxes 28-32 on your answer sheet.
    </p>
</fieldset>

<fieldset class="q-item" data-q="28">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">28</span>
        <span style="flex: 1;">
            A use for helium which makes an activity safer
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-dropdown">
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

<fieldset class="q-item" data-q="29">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">29</span>
        <span style="flex: 1;">
            The possibility of creating an alternative to helium
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-dropdown">
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

<fieldset class="q-item" data-q="30">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">30</span>
        <span style="flex: 1;">
            A term which describes the process of how helium is taken out of the ground
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-dropdown">
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

<fieldset class="q-item" data-q="31">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">31</span>
        <span style="flex: 1;">
            A reason why users of helium do not make efforts to conserve it
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-dropdown">
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

<fieldset class="q-item" data-q="32">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">32</span>
        <span style="flex: 1;">
            A contrast between helium's chemical properties and how non-scientists think about it
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-dropdown">
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


<fieldset class="q-item">
    <h3>Questions 33-36</h3>
    <p class="lead">Do the following statements agree with the information given in Reading Passage 3?
        In boxes <b>33 - 36</b> on your answer sheet, write
    </p>
    <ul class="legend">
        <li><strong>YES</strong> if the statement agrees with the information
        </li>
        <li><strong>NO</strong> if the statement contradicts the information
        </li>
        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
    </ul>
</fieldset>
<fieldset class="q-item" data-q="33">
    <legend class="q-text">
        <span class="q-number">33</span>
        Helium chooses to be on its own.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="34">
    <legend class="q-text">
        <span class="q-number">34</span>
        Helium is a very cold substance.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="35">
    <legend class="q-text">
        <span class="q-number">35</span>
        High-tech industries in Asia use more helium than laboratories and manufacturers in other parts of the world.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="36">
    <legend class="q-text">
        <span class="q-number">36</span>
        The US Congress understood the possible consequences of the HPA.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>


<fieldset class="q-item">
    <h3>Questions 37-40</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>

    <p>
    <div>
        Sobotka argues that big business and users of helium need to help look after helium stocks because prudent
        practice will not be encouraged through buying and selling alone. Richardson believes that the
        <span class="q-number-box">37</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-9" class="q-text" placeholder="">
            </span>
        </span>needs to be withdrawn, as the U.S. provides most of the world's helium. He argues that higher costs would
        mean people have
        <span class="q-number-box">38</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-10" class="q-text" placeholder="">
            </span>
        </span>to use the resource many times over. People should need a
        <span class="q-number-box">39</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-11" class="q-text" placeholder="">
            </span>
        </span> to access helium that we still have. Furthermore, a
        <span class="q-number-box">40</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-12" class="q-text" placeholder="">
            </span>
        </span> should ensure that helium is used carefully.
    </div>
    </p>
</fieldset>
