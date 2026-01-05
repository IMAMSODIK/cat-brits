@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 27-30</h3>
    <p class="lead">Do the following statements agree with the claims of the writer
        in The Reading Passage?
    </p>
    <p><i>In boxes on your answer sheet, write</i></p>
    <ul class="legend">
        <li><strong>YES</strong> if the statement agrees with the claims of the writer
        </li>
        <li><strong>NO</strong> if the statement contradicts the claims of the writer
        </li>
        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
            about this</li>
    </ul>
</fieldset>
<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="1">
    <legend class="q-text">
        <span class="q-number">27</span>
        Wegener’s ideas about continental drift were widely disputed while he was alive.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="2">
    <legend class="q-text">
        <span class="q-number">28</span>
        The idea that the continents remained fixed in place was defended in a number of
        respected scientific publications.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="3">
    <legend class="q-text">
        <span class="q-number">29</span>
        Wegener relied on a limited range of scientific fields to support his theory of
        continental drift
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="4">
    <legend class="q-text">
        <span class="q-number">30</span>
        The similarities between Wegener’s theory of continental drift and modern-day
        plate tectonics are enormous.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <h3>Questions 31-36</h3>
    <p class="lead">Complete the summary using the list of phrases,
        <strong>A-J</strong>, below.
    </p>
    <p><i>Write the correct letter, <strong>A-J</strong>, in boxes on your answer sheet.
    </p>
    <table cellpadding="10">
        <tr>
            <td><b>A</b> modest fame</td>
            <td><b>B</b> vast range</td>
            <td><b>C</b> record-breaking achievement</td>
            <td><b>D</b> research methods</td>

        </tr>
        <tr>
            <td><b>E</b> select group</td>
            <td><b>F</b> professional interests</td>
            <td><b>G</b> scientific debate</td>
            <td><b>H</b> hazardous exploration</td>


        </tr>
        <tr>
            <td><b>I</b> biographer’s perspective</td>
            <td><b>J</b> narrow investigation</td>
        </tr>
    </table>

    <p>
    <div>
        One of the remarkable things about Wegener from a
        <span class="q-number-box">31</span>
        <span style="flex: 1;">
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-5" data-q="1" class="q-dropdown">
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
        is that although he proposed a theory of continental drift, he was not a
        geologist. His
        <span class="q-number-box">32</span>
        <span style="flex: 1;">
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-6" data-q="2" class="q-dropdown">
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
        were limited to atmospheric physics. However, at the time he proposed his theory
        of continental drift in 1912, he was already a person of
        <span class="q-number-box">33</span>
        <span style="flex: 1;">
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-7" data-q="3" class="q-dropdown">
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
        . Six years previously, there had been his
        <span class="q-number-box">34</span>
        <span style="flex: 1;">
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-8" data-q="4" class="q-dropdown">
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
        of 52 hours in a hot-air balloon, followed by his well-publicised but
        <span class="q-number-box">35</span>
        <span style="flex: 1;">
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-9" data-q="5" class="q-dropdown">
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
        of Greenland’s coast. With the publication of his textbook on thermodynamics, he
        had also come to the attention of a
        <span class="q-number-box">36</span>
        <span style="flex: 1;">
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-10" data-q="6" class="q-dropdown">
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
        of German scientists.
    </div>
    </p>
</fieldset>
<fieldset class="q-item">
    <p class="lead"><b>Questions 37-40</b></p>
    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
        <b>D</b>.
    </p>
    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
</fieldset>
<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="1">
    <legend class="q-text">
        <span class="q-number">37</span>
        What is Mott T Greene doing in the fifth paragraph?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">describing what motivated him to write the
                book</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">explaining why it is desirable to read the whole
                book</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="c" />
            <span class="opt-code">C</span>
            <span class="opt-label">suggesting why Wegener pursued so many
                different careers</span>
        </label>

        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">indicating what aspects of Wegener’s life interested
                him most
            </span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="2">
    <legend class="q-text">
        <span class="q-number">38</span>
        What is said about Wegener in the sixth paragraph?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">He was not a particularly ambitious person.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">He kept a record of all his scientific
                observations.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">He did not adopt many of the scientific practices of
                the time.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">He enjoyed discussing new discoveries with other
                scientists.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="3">
    <legend class="q-text">
        <span class="q-number">39</span>
        What does Greene say about some other famous scientists?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Their published works had a greater impact than
                Wegener’s did.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">They had fewer doubts about their scientific ideas
                than Wegener did.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Their scientific ideas were more controversial than
                Wegener’s.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">They are easier subjects to write about than
                Wegener.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="4">
    <legend class="q-text">
        <span class="q-number">40</span>
        What is Greene’s main point in the final paragraph?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">It is not enough in life to have good
                intentions.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">People need to plan carefully if they want to
                succeed.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">People have little control over many aspects of
                their lives.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">It is important that people ensure they have the
                freedom to act</span>
        </label>
    </div>
</fieldset>
