@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 1-3</h3>
    <p class="lead"><i>Complete the sentences below.</i></p>
    <p><i>Choose <b>NO MORE THAN TWO WORDS AND/OR A NUMBER</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet</i></p>
</fieldset>

<fieldset class="q-item questions-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">1</span>
        <span style="flex: 1;">
            Vertical tubes are used to grow strawberries,
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
            </span>
            and herbs.
        </span>
    </legend>
</fieldset>

<fieldset class="q-item questions-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">2</span>
        <span style="flex: 1;">
            There will eventually be a daily harvest of as much as
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" placeholder="">
            </span>
            in weight of fruit and vegetables.
        </span>
    </legend>
</fieldset>

<fieldset class="q-item questions-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">3</span>
        <span style="flex: 1;">
            It may be possible that the farm’s produce will account for as much as 10% of the city’s
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
            </span>
            overall.
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <p><i>Questions 4-7</i></p>
    <p><i>Complete the table below.</i></p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
</fieldset>

<p style="text-align: center"><b>Intensive farming versus aeroponic urban farming</b></p>

<table border="1" cellpadding="8" cellspacing="0"
    style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">

    <tr style="text-align: center">
        <td></td>
        <td><b>Growth</b></td>
        <td><b>Selection</b></td>
        <td><b>Sale</b></td>
    </tr>

    <tr>
        <td>Intensive farming</td>
        <td>
            <ul>
                <li>
                    wide range of
                    <div class="q-item" data-q="4" style="display:inline-block;">
                        <span class="q-number-box">4</span>
                        <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text" placeholder="">
                    </div> used
                </li>
                <li>techniques pollute air</li>
            </ul>
        </td>
        <td>
            <ul>
                <li>Quality not good</li>
                <li>
                    varieties of fruit and vegetables chosen that can survive long
                    <div class="q-item" data-q="5" style="display:inline-block;">
                        <span class="q-number-box">5</span>
                        <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text" placeholder="">
                    </div>
                </li>
            </ul>
        </td>
        <td>
            <ul>
                <li>
                    <div class="q-item" data-q="6" style="display:inline-block;">
                        <span class="q-number-box">6</span>
                        <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text"
                            placeholder="">
                    </div>
                    receive very little of overall income
                </li>
            </ul>
        </td>
    </tr>

    <tr>
        <td>Aeroponic urban farming</td>
        <td>
            <ul>
                <li>no soil used</li>
                <li>nutrients added to water, which is recycled</li>
            </ul>
        </td>
        <td>
            produce chosen because of its
            <div class="q-item" data-q="7" style="display:inline-block;">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text"
                    placeholder="">
            </div>
        </td>
        <td></td>
    </tr>
</table>
<fieldset class="q-item">
    <p><b>Questions 8-13</b></p>
    <p class="lead">Do the following statements agree with the information given in the Reading
        Passage?</p>
    <p>In boxes on your answer sheet, write</p>
    <ul class="legend">
        <li><strong>TRUE</strong> if the statement agrees with the information</li>
        <li><strong>FALSE</strong> if the statement contradicts the information</li>
        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="8">
    <legend class="q-text">
        <span class="q-number">8</span>
        Urban farming can take place above or below ground.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-1" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-1" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-1" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="9">
    <legend class="q-text">
        <span class="q-number">9</span>
        Some of the equipment used in aeroponic farming can be made by hand.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-2" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-2" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-2" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="10">
    <legend class="q-text">
        <span class="q-number">10</span>
        Urban farming relies more on electricity than some other types of farming.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">11</span>
        Fruit and vegetables grown on an aeroponic urban farm are cheaper than traditionally grown
        organic produce.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">12</span>
        Most produce can be grown on an aeroponic urban farm at any time of the year.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="13">
    <legend class="q-text">
        <span class="q-number">13</span>
        Beans take longer to grow on an urban farm than other vegetables.
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="TRUE" />
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="FALSE" />
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="NOT GIVEN" />
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
