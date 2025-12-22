@props(['part', 'id'])
<fieldset class="q-item">
    <p><b>Questions 1-7</b></p>
    <p class="lead">Do the following statements agree with the information given in the Reading
        Passage?</p>
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
        Polar bears suffer from various health problems due to the build-up of fat under their skin.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">2</span>
        The study done by Liu and his colleagues compared different groups of polar bears.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">3</span>
        Liu and colleagues were the first researchers to compare polar bears and brown bears
        genetically.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">4</span>
        Polar bears are able to control their levels of bad cholesterol by genetic means.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">5</span>
        Female polar bears are able to survive for about six months without food.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">6</span>
        It was found that the bones of female polar bears were very weak when they came out of their
        dens in spring.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="7">
    <legend class="q-text">
        <span class="q-number">7</span>
        The polar bear’s mechanism for increasing bone density could also be used by people one day.
    </legend>
    <div class="q-options">
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7"
                value="TRUE" /><span class="opt-code">A</span><span class="opt-label">TRUE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7"
                value="FALSE" /><span class="opt-code">B</span><span class="opt-label">FALSE</span></label>
        <label class="q-option"><input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7"
                value="NOT GIVEN" /><span class="opt-code">C</span><span class="opt-label">NOT
                GIVEN</span></label>
    </div>
</fieldset>

{{-- 1 --}}

<fieldset class="q-item">
    <p>Questions 8-13</p>
    <p>Complete the table below.</p>
    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
</fieldset>

<table border="1" cellpadding="8" cellspacing="0"
    style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">

    <tr>
        <th colspan="2"><b>Reasons why polar bears should be protected</b></th>
    </tr>

    <tr>
        <td colspan="2">
            People think of bears as unintelligent and
            <div class="q-item" data-q="1" style="display:inline-block;">
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text"
                    placeholder="">
            </div>.
        </td>
    </tr>

    <tr>
        <td colspan="2"><b>However, this may not be correct. For example:</b></td>
    </tr>

    <tr>
        <td colspan="2">
            In Tennoji Zoo, a bear has been seen using a branch as a
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text"
                    placeholder="">
            </div>.
            This allowed him to knock down some
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text"
                    placeholder="">
            </div>.
        </td>
    </tr>

    <tr>
        <td colspan="2">
            A wild polar bear worked out a method of reaching a platform where a
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">11</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text"
                    placeholder="">
            </div>
            was located.
        </td>
    </tr>

    <tr>
        <td colspan="2">
            Polar bears have displayed behaviour such as conscious manipulation of objects and
            activity similar to a
            <div class="q-item" data-q="5" style="display:inline-block;">
                <span class="q-number-box">12</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-5" class="q-text"
                    placeholder="">
            </div>.
        </td>
    </tr>

    <tr>
        <td colspan="2"><b>Bears may also display emotions. For example:</b></td>
    </tr>

    <tr>
        <td colspan="2">
            They may make movements suggesting
            <div class="q-item" data-q="6" style="display:inline-block;">
                <span class="q-number-box">13</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-6" class="q-text"
                    placeholder="">
            </div>
            if disappointed when hunting.
        </td>
    </tr>

    <tr>
        <td colspan="2">
            They may form relationships with other species.
        </td>
    </tr>
</table>
