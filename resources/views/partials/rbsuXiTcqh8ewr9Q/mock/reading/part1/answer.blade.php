@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 1-7</h3>
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

<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">1</span>
        People had expected Andy Murray to become the world’s top tennis player for
        at least five years before 2016.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">2</span>
        The change that Andy Murray made to his rackets attracted a lot of attention.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">3</span>
        Most of the world’s top players take a professional racket stringer on tour
        with them.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">4</span>
        Mike and Bob Bryan use rackets that are light in comparison to the majority
        of rackets.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-4" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-4" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-4" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">5</span>
        Werner Fischer played with a spaghetti-strung racket that he designed himself.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-5" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-5" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-5" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">6</span>
        The weather can affect how professional players adjust the strings on their
        rackets.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-6" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-6" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-6" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="7">
    <legend class="q-text">
        <span class="q-number">7</span>
        It was believed that the change Pete Sampras made to his rackets contributed
        to his strong serve.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-7" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-7" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-7" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 8-13</h3>
    <p class="lead">
        Complete the notes below.
    </p>
    <p>Choose ONE WORD ONLY from the passage for each answer.</p>
    <p>Write your answers in boxes on your answer sheet.</p>
    <p>The tennis racket and how it has changed</p>

    <p>
    <div>
        <ul class="completion-list">
            <li>
                Mike and Bob Bryan made changes to the types of
                <span class="q-number">8</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-1" class="q-text" placeholder="" data-q="11"/>
                    </span>
                </span>
                used on their racket frames.
            </li>

            <li>
                Players were not allowed to use the spaghetti-strung racket because of the amount of
                <span class="q-number">9</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-2" class="q-text" placeholder="" data-q="11"/>
                    </span>
                </span>
                it created.
            </li>

            <li>
                Changes to rackets can be regarded as being as important as players’ diets or the
                <span class="q-number">10</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-3" class="q-text" placeholder="" data-q="11"/>
                    </span>
                </span>
                they do.
            </li>

            <li>
                All rackets used to have natural strings made from the
                <span class="q-number">11</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-4" class="q-text" placeholder="" data-q="11"/>
                    </span>
                </span>
                of animals.
            </li>

            <li>
                Pete Sampras had metal
                <span class="q-number">12</span>

                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-5" class="q-text" placeholder="" data-q="12"/>
                    </span>
                </span>
                put into the frames of his rackets.
            </li>

            <li>
                Gongalo Oliveira changed the
                <span class="q-number">13</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-6" class="q-text" placeholder="" data-q="13"/>
                    </span>
                </span>
                on his racket handles.
            </li>
        </ul>

    </div>
    </p>
</fieldset>