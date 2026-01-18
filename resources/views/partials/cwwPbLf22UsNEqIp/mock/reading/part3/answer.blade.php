@props(['part', 'id'])
<fieldset class="q-item">
    <p><b>Questions 28–31</b></p>
    <p>The Reading Passage has six sections, <b>A–F</b>.</p>
    <p>Which section contains the following information?</p>
    <p>Write the correct letter, <b>A–F</b>, in boxes on your answer sheet.</p>
</fieldset>

<fieldset class="q-item" data-q="28">
    <legend class="q-text">
        <span class="q-number">28</span>
        A use for helium which makes an activity safer
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
    </legend>
</fieldset>

<fieldset class="q-item" data-q="29">
    <legend class="q-text">
        <span class="q-number">29</span>
        The possibility of creating an alternative to helium
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
    </legend>
</fieldset>

<fieldset class="q-item" data-q="30">
    <legend class="q-text">
        <span class="q-number">30</span>
        A term which describes the process of how helium is taken out of the ground
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="31">
    <legend class="q-text">
        <span class="q-number">31</span>
        A reason why users of helium do not make efforts to conserve it
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="32">
    <legend class="q-text">
        <span class="q-number">32</span>
        A contrast between helium's chemical properties and how non-scientists think about it
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <p><b>Questions 33–36</b></p>
    <p>Do the following statements agree with the information given in Reading Passage 1?</p>
    <p>In boxes on your answer sheet, write YES if the statement agrees with the information, NO if it
        contradicts, or NOT GIVEN if there is no information.</p>
</fieldset>

<fieldset class="q-item" data-q="36">
    <legend class="q-text">
        <span class="q-number">36</span>
        Helium chooses to be on its own.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 33 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7" value="NOT GIVEN" />
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
    <div class="q-options" role="radiogroup" aria-label="Question 34 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="35">
    <legend class="q-text">
        <span class="q-number">35</span>
        High-tech industries in Asia use more helium than laboratories and manufacturers in other parts
        of the world.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 35 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="NOT GIVEN" />
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
    <div class="q-options" role="radiogroup" aria-label="Question 36 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>


<fieldset class="q-item">
    <p><b>Questions 37–40</b></p>
    <p>Complete the summary below.</p>
    <p><i>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>

    <div>
        <p>
            Sobotka argues that big business and users of helium need to help look after helium
            stocks
            because prudent practice will not be encouraged through buying and selling alone.
            Richardson
            believes that the
            <span class="q-number-box">37</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-12" class="q-text"
                        placeholder="" data-q="37">
                </span>
            </span> needs to be withdrawn, as the U.S. provides most of the world's helium. He
            argues
            that higher costs would mean people have
            <span class="q-number-box">38</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-13" class="q-text"
                        placeholder="" data-q="38">
                </span>
            </span> to use the resource many times over. People should need a
            <span class="q-number-box">39</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-14" class="q-text"
                        placeholder="" data-q="39">
                </span>
            </span> to access helium that we still have. Furthermore, a
            <span class="q-number-box">40</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-15" class="q-text"
                        placeholder="" data-q="40">
                </span>
            </span> should ensure that helium is used carefully.
        </p>
    </div>
</fieldset>
