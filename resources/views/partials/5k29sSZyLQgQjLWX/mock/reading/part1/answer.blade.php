@props(['part', 'id'])
<fieldset class="q-item" data-q="1">
    <h3>Questions 1-8</h3>
    <p class="lead">
        Complete the notes below.
    </p>
    <p>Choose ONE WORD ONLY from the passage for each answer.</p>
    <p>Write your answers in boxes on your answer sheet.</p>
    <p>
    <div>
        <b>Ysabel Giraldo’s research</b>
        <ul class="completion-list">
            <li>
                Focused on a total of
                <span class="q-number">1</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" />
                    </span>
                </span>
                different age groups of ants
            </li>
        </ul>
        <b>Behaviour:</b>
        <ul class="completion-list">
            <li>
                how well ants looked after their
                <span class="q-number">2</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" />
                    </span>
                </span>
            </li>

            <li>
                their ability to locate
                <span class="q-number">3</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" />
                    </span>
                </span>
                using a scent trail
            </li>

            <li>
                the effect that
                <span class="q-number">4</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" />
                    </span>
                </span>
                had on them
            </li>

            <li>
                how
                <span class="q-number">5</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" />
                    </span>
                </span>
                they attacked prey
            </li>
        </ul>
        <b>Brains:</b>
        <ul>
            <li>
                comparison between age and the
                <span class="q-number">6</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text" />
                    </span>
                </span>
                of dying cells in the brains of ants
            </li>

            <li>
                condition of synaptic complexes (areas in which
                <span class="q-number">7</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text" />
                    </span>
                </span>
                meet) in the brain’s ‘mushroom bodies’
            </li>

            <li>
                level of two
                <span class="q-number">8</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text" />
                    </span>
                </span>
                in the brain associated with ageing
            </li>
        </ul>
    </div>
    </p>

</fieldset>
<fieldset class="q-item">
    <h3>Questions 9-13</h3>
    <p class="lead">
        Do the following statements agree with the information given in the
        Reading Passage?
    </p>
    <p>In boxes on your answer sheet, write</p>
    <ul class="legend">
        <li><strong>TRUE</strong> if the statement agrees with the information</li>
        <li><strong>FALSE</strong> if the statement contradicts the information</li>
        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
    </ul>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">9</span>
        Pheidole dentata ants are the only known animals which remain active for almost their whole
        lives.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">10</span>
        Ysabel Giraldo was the first person to study Pheidole dentata ants using precise data about the
        insects’ ages.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">11</span>
        The ants in Giraldo’s experiments behaved as she had predicted that they would.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">12</span>
        The recent studies of bees used different methods of measuring age-related decline.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">13</span>
        Pheidole dentata ants kept in laboratory conditions tend to live longer lives.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
