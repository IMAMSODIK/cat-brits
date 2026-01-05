@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 1-5</b></p>
    <p class="lead">The Reading Passage has six paragraphs, <b>A-E</b>.</p>
    <p>Which paragraph contains the following information?</p>
    <p class="lead">Write the correct letter, <b>A-E</b>, in boxes on your answer
        sheet <b>NB</b> You may use any letter more than once.</p>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">1</span>
        <span style="flex: 1;">
            mention of several challenges to be overcome before a green roof can be
            installed.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">2</span>
        <span style="flex: 1;">
            reference to a city where green roofs have been promoted for many years.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>

                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">3</span>
        <span style="flex: 1;">
            a belief that existing green roofs should be used as a model for new ones.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">4</span>
        <span style="flex: 1;">
            examples of how green roofs can work in combination with other green urban
            initiatives.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">5</span>
        <span style="flex: 1;">
            the need to make a persuasive argument for the financial benefits of green
            roofs.
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][1] }}">
    <h3>Questions 6-9</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>
    <h3>Advantages of green roofs</h3>

    <p>
    <div>
        City rooftops covered with greenery have many advantages. These include
        lessening the likelihood that floods will occur, reducing how much money is
        spent on
        <span class="q-number-box">6</span>
        <span style="flex: 1;">
            <span class="q-question" data-q="6">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text"
                    placeholder="">
            </span>
        </span>
        and creating environments that are suitable for wildlife. In many cases, they
        can also be used for producing
        <span class="q-number-box">7</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text"
                    placeholder="">
            </span>
        </span>
    </div>
    </p>

    <p>
    <div>
        There are also social benefits of green roofs. For example, the medical
        profession recommends
        <span class="q-number-box">8</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text"
                    placeholder="">
            </span>
        </span>
        as an activity to help people cope with mental health issues. Studies have also
        shown that the availability of green spaces can prevent physical problems such
        as
        <span class="q-number-box">9</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text"
                    placeholder="">
            </span>
        </span>
    </div>
    </p>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 10-11</b></p>
    <p class="lead"><i>Choose Two Letters<b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
    <p><span class="q-number-box">10</span><span class="q-number-box">11</span> Which
        <b>TWO</b> advantages of using newer buildings for green roofs are mentioned in
        Paragraph C of the passage?
    </p>
</fieldset>
<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="1" data-q-multi="1,2" data-max="2">
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">a longer growing season for edible produce</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">more economical use of water</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">greater water-storage capacity</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">ability to cultivate more plant types</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">a large surface area for growing plants</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 12-13</b></p>
    <p class="lead"><i>Choose Two Letters<b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
    <p><span class="q-number-box">12</span><span class="q-number-box">13</span> Which
        <b>TWO</b> aims of new variations on the concept of green roofs are mentioned in
        Paragraph E of the passage?
    </p>
</fieldset>
<fieldset class="q-item" data-q="1" data-type="{{ $part['tipe'][3] }}" data-q-multi="1,2" data-max="2">
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">to provide habitats for a wide range of
                species</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">to grow plants successfully even in the wettest
                climates</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">to regulate the temperature of the immediate
                environment</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">to generate power from a sustainable source</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">to collect water to supply other buildings</span>
        </label>
    </div>
</fieldset>
