@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 27–31</h3>
    <p class="lead">
        <i>Look at the following statements and the list of researchers below.</i>
    </p>
    <p>
        Match each statement with the correct researcher, <b>A–G</b>.
    </p>
    <p>
        Write the correct letter, <b>A–G</b>, in boxes on your answer sheet.
    </p>

    <p><b>List of Researchers</b></p>
    <ul class="legend">
        <li><strong>A</strong> Elkind</li>
        <li><strong>B</strong> Miller &amp; Almon</li>
        <li><strong>C</strong> Rubin et al.</li>
        <li><strong>D</strong> Stuart Brown</li>
        <li><strong>E</strong> Pellegrini</li>
        <li><strong>F</strong> Joan Goodman</li>
        <li><strong>G</strong> Girsch-Pasek et al.</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="27">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">27</span>
        <span style="flex:1;">
            Play can be divided into a number of separate categories.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="28">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">28</span>
        <span style="flex:1;">
            Adults’ intended goals affect how they play with children.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="29">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">29</span>
        <span style="flex:1;">
            Combining work with play may be the best way for children to learn.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="30">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">30</span>
        <span style="flex:1;">
            Certain elements of play are more significant than others.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-11" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="31">
    <legend class="q-text" style="display:flex; gap:6px;">
        <span class="q-number">31</span>
        <span style="flex:1;">
            Activities can be classified on a scale of playfulness.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-12" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 32-36</h3>
    <p class="lead">Do the following statements agree with the claims of the writer
        in the Reading Passage?
    </p>
    <p><i>In boxes on your answer sheet, write</i></p>
    <ul class="legend">
        <li><strong>YES</strong> if the statement agrees with the claims of the writer</li>
        <li><strong>NO</strong> if the statement contradicts the claims of the writer</li>
        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
            about this</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="32">
    <legend class="q-text">
        <span class="q-number">32</span>
        Children need toys in order to play.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
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

<fieldset class="q-item" data-q="33">
    <legend class="q-text">
        <span class="q-number">33</span>
        It is a mistake to treat play and learning as separate types of activities.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="34">
    <legend class="q-text">
        <span class="q-number">34</span>
        Play helps children to develop their artistic talents.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="35">
    <legend class="q-text">
        <span class="q-number">35</span>
        Researchers have agreed on a definition of play.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
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

<fieldset class="q-item" data-q="36">
    <legend class="q-text">
        <span class="q-number">36</span>
        Work and play differ in terms of whether or not they have a target.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
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

<fieldset class="q-item">
    <h3>Questions 37–40</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>

    <h3>Guided play</h3>

    <p>
    <div>
        In the simplest form of guided play, an adult contributes to the environment in which the child
        is playing. Alternatively, an adult can play with a child and develop the play, for instance by
        <span class="q-number-box">37</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-5" class="q-text" data-q="37">
            </span>
        </span>
        the child to investigate different aspects of their game. Adults can help children to learn
        through play, and may make the activity rather structured, but it should still be based on the
        child’s
        <span class="q-number-box">38</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-6" class="q-text" data-q="38">
            </span>
        </span>to play.
    </div>
    <div>
        Play without the intervention of adults gives children real
        <span class="q-number-box">39</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-7" class="q-text" data-q="39">
            </span>
        </span>.
        with adults, play can be
        <span class="q-number-box">40</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-8" class="q-text" data-q="40">
            </span>
        </span>at particular goals. However, all forms of play should be an opportunity for children to
        have fun.
    </div>
    </p>
</fieldset>
