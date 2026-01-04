@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 1-3</b></p>
    <p class="lead">Reading Passage 1 has six paragraphs,</p>
    <p>Which paragraph contains the following information?</p>
    <p class="lead">
        Write the correct letter, <b>A–F</b> in boxes 1-3 on your answer sheet.
    </p>
    <p><b>NB</b> You may use any letter more than once.</p>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">1</span>
        <span style="flex: 1;">
            mention of false assumptions about why people procrastinate
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

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">2</span>
        <span style="flex: 1;">
            reference to the realisation that others also procrastinate
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

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">3</span>
        <span style="flex: 1;">
            neurological evidence of a link between procrastination and emotion
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
<fieldset class="q-item">
    <h3>Questions 4-9</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>

    <b>What makes us procrastinate?</b>
    <p>
    <div>
        Many people think that procrastination is the result of
        <span class="q-number-box">4</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text" placeholder="">
            </span>
        </span>
        Others believe it to
        be the result of an inability to organise time efficiently.But scientific studies suggest that
        procrastination is actually due to poor mood management. The tasks we are most likely
        to put off are those that could damage our self-esteem or cause us to feel
        <span class="q-number-box">5</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text" placeholder="">
            </span>
        </span>
        when we think about them. Research comparing chronic procrastinators with other
        people even found differences in the brain regions associated with regulating emotions
        and identifying
        <span class="q-number-box">6</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text"
                    placeholder="">
            </span>
        </span>
        Emotionally loaded and difficult tasks often cause us to
        procrastinate. Getting ready to take
        <span class="q-number-box">7</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text"
                    placeholder="">
            </span>
        </span>
        might be a typical example of one
        such task. People who are likely to procrastinate tend to be either
        <span class="q-number-box">8</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-5" class="q-text"
                    placeholder="">
            </span>
        </span>
        or those with low self-esteem. Procrastination is only a short-term measure for
        managing emotions. It’s often followed by a feeling of
        <span class="q-number-box">9</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-6" class="q-text"
                    placeholder="">
            </span>
        </span>
        which worsens our
        mood and leads to more procrastination.
    </div>
    </p>
</fieldset>
<fieldset class="q-item">
    <p class="lead"><b>Questions 10-11</b></p>
    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
    <p>
        <span class="q-number-box">10</span>
        <span class="q-number-box">11</span>
        Which <b>TWO</b> comparisons between employees who often procrastinate and those who
        do not are mentioned in the text?
    </p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Their salaries are lower.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">The quality of their work is inferior.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">They don’t keep their jobs for as long.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">They don’t enjoy their working lives as much.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">They have poorer relationships with colleagues..</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 12-13</b></p>
    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
    <p>
        <span class="q-number-box">12</span>
        <span class="q-number-box">13</span>
        Which <b>TWO</b> recommendations for getting out of a cycle of procrastination does the
        writer give?
    </p>
</fieldset>

<fieldset class="q-item" data-q="2" data-q-multi="1,2" data-max="2">
    <div class="q-options" role="group" aria-label="Question 2 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">not judging ourselves harshly</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">setting ourselves manageable aims.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">rewarding ourselves for tasks achieved</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">prioritising tasks according to their importance</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">avoiding things that stop us concentrating on our tasks</span>
        </label>
    </div>
</fieldset>
