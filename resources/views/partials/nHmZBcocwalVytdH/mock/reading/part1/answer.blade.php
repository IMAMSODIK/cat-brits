@props(['part', 'id'])
<fieldset class="q-item">
    <p><b>Question 1-8</b></p>
    <p class="lead">Do the following statements agree with the information given in
        the
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
        Henderson rarely visited the area around Press estate when he was younger.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">2</span>
        Henderson pursued a business career because it was what his family wanted.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">3</span>
        Henderson and Notman were surprised by the results of their 1865 experiment.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">4</span>
        There were many similarities between Henderson’s early landscapes and those of Notman.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">5</span>
        The studio that Henderson opened in 1866 was close to his home.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">6</span>
        Henderson gave up portraiture so that he could focus on taking photographs of scenery.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="7">
    <legend class="q-text">
        <span class="q-number">7</span>
        When Henderson began work for the Intercolonial Railway, the Montreal to Halifax line had been
        finished.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="8">
    <legend class="q-text">
        <span class="q-number">8</span>
        Henderson’s last work as a photographer was with the Canadian Pacific Railway.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 8 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

{{-- note --}}

<fieldset class="q-item">
    <h3>Questions 9-13</h3>
    <p class="lead">Complete the notes below.</p>
    <p>Choose <b>ONE WORD AND/OR A NUMBER</b> from the passage for each answer.</p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>
    <p><b>Alexander Henderson</b></p>
</fieldset>

<fieldset class="q-item">
    <p><b>Early life</b></p>
    <ul>
        <li>
            <div class="q-list" data-q="1">
                lwas born in Scotland in 1831 – father was a
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text"
                    placeholder="">
            </div>
        </li>
        <li> trained as an accountant, emigrated to Canada in 1855</li>
    </ul>
    <p><b>Start of a photographic career</b></p>
    <ul>
        <li>opened up a photographic studio in 1866</li>
        <li>took photos of city life, but preferred landscape photography</li>
        <li>
            <div class="q-list" data-q="2">
                people bought Henderson’s photos because photography took up considerable time and the
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text"
                    placeholder="">
                was heavy
            </div>
        </li>
        <li>
            <div class="q-list" data-q="3">
                the photographs Henderson sold were
                <span class="q-number-box">11</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text"
                    placeholder="">
                or souvenirs
            </div>
        </li>
    </ul>

    <p><b>Travelling as a professional photographer</b></p>
    <ul>
        <li>travelled widely in Quebec and Ontario in 1870s and 1880s</li>
        <li>
            <div class="q-list" data-q="4">
                took many trips along eastern rivers in a
                <span class="q-number-box">12</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text"
                    placeholder="">
            </div>
        </li>
        <li>worked for Canadian railways between 1875 and 1897</li>
        <li>
            <div class="q-list" data-q="5">
                worked for CPR in 1885 and photographed the
                <span class="q-number-box">13</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-5" class="q-text"
                    placeholder="">
                and the railway at Rogers Pass
            </div>
        </li>
    </ul>
</fieldset>
