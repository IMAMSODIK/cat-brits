@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 1-3</b></p>
    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
        <b>D</b>.
    </p>
    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
</fieldset>
<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="1">
    <legend class="q-text">
        <span class="q-number">1</span>
        What can we learn from the first paragraph?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">where the notion of innate intelligence first
                began</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">when ideas about the nature of intelligence began
                to shift</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">how scientists have responded to changing views of
                intelligence</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">why thinkers turned away from the idea of
                intelligence being fixed</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="2">
    <legend class="q-text">
        <span class="q-number">2</span>
        The second paragraph describes how schools encourage students to
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">identify their personal ambitions.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">help each other to realise their goals.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">have confidence in their potential to
                succeed.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">concentrate on where their particular strengths
                lie.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][0] }}" data-q="3">
    <legend class="q-text">
        <span class="q-number">3</span>
        In the third paragraph, the writer suggests that students with a fixed mindset
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">tend to be less competitive.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">generally have a low sense of self-esteem.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">will only work hard if they are given constant
                encouragement.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">are afraid to push themselves beyond what they see
                as their limitations.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 1-6</h3>
    <p class="lead"><i>Look at the following statements and the list of people
            below.</i></p>
    <p>Match each statement with the correct person or people, <b>A-E</b>.</p>
    <p><i><b>NB</b> You may use any letter more than once.</i></p>
    <p><b>List of People</b></p>
    <ul class="legend">
        <li><strong>A</strong> Alfred Binet</li>
        <li><strong>B</strong> Carol Dweck</li>
        <li><strong>C</strong> Andrew Gelman</li>
        <li><strong>D</strong> Timothy Bates</li>
        <li><strong>E</strong> David Yeager and Gregory Walton</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][1] }}" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">1</span>
        <span style="flex: 1;">
            The methodology behind the growth mindset studies was not strict enough
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-1" class="q-dropdown">
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

<fieldset class="q-item" data-type="{{ $part['tipe'][1] }}" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">2</span>
        <span style="flex: 1;">
            The idea of the growth mindset has been incorrectly interpreted.
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-2" class="q-dropdown">
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

<fieldset class="q-item" data-type="{{ $part['tipe'][1] }}" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">3</span>
        <span style="flex: 1;">
            Intellectual ability is an unchangeable feature of each individual.
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-3" class="q-dropdown">
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

<fieldset class="q-item" data-type="{{ $part['tipe'][1] }}" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">4</span>
        <span style="flex: 1;">
            The growth mindset should be promoted without students being aware of it.
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-4" class="q-dropdown">
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

<fieldset class="q-item" data-type="{{ $part['tipe'][1] }}" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">5</span>
        <span style="flex: 1;">
            The growth mindset is not simply about boosting students’ morale.
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-5" class="q-dropdown">
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
<fieldset class="q-item" data-type="{{ $part['tipe'][1] }}" data-q="6">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">6</span>
        <span style="flex: 1;">
            Research shows that the growth mindset has no effect on academic
            achievement.
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-6" class="q-dropdown">
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

<fieldset class="q-item">
    <h3>Questions 1-4</h3>
    <p class="lead">Do the following statements agree with the views of the writer in
        The Reading Passage?
    </p>
    <p><i>In boxes on your answer sheet, write</i></p>
    <ul class="legend">
        <li><strong>YES</strong> if the statement agrees with the views of the writer
        </li>
        <li><strong>NO</strong> if the statement contradicts the views of the writer
        </li>
        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
            about this</li>
    </ul>
</fieldset>
<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="1">
    <legend class="q-text">
        <span class="q-number">1</span>
        Dweck has handled criticisms of her work in an admirable way.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-1" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-1" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-1" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="2">
    <legend class="q-text">
        <span class="q-number">2</span>
        Students’ self-perception is a more effective driver of self-confidence than
        actual achievement is.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-2" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-2" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-2" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="3">
    <legend class="q-text">
        <span class="q-number">3</span>
        Recent evidence about growth mindset interventions has attracted unfair coverage
        in the media.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-3" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-3" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-3" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-type="{{ $part['tipe'][2] }}" data-q="4">
    <legend class="q-text">
        <span class="q-number">4</span>
        Deliberate attempts to encourage students to strive for high achievement may
        have a negative effect.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-4" value="YES" />
            <span class="opt-code">A</span>
            <span class="opt-label">YES</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-4" value="NO" />
            <span class="opt-code">B</span>
            <span class="opt-label">NO</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2]}}-{{ $id }}-4" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>