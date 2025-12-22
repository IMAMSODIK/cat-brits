@props(['part', 'id'])
<fieldset class="q-item" data-q="1">
    <h3>Questions 1-7</h3>
    <p class="lead">
        Complete the notes below.
    </p>
    <p>Choose ONE WORD ONLY from the passage for each answer.</p>
    <p>Write your answers in boxes on your answer sheet.</p>
    <p>Britain’s Industrial Revolution</p>

    <div>
        <ul class="completion-list">
            <li>
                In Watt and Boulton’s steam engine, the movement of the
                <span class="q-number">1</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-1" class="q-text" placeholder="" />
                    </span>
                </span>
                was linked to a gear system.
            </li>

            <li>
                A greater supply of
                <span class="q-number">2</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-2" class="q-text" placeholder="" />
                    </span>
                </span>
                was required to power steam engines.
            </li>

            <li>
                Before the Industrial Revolution, spinners and weavers worked at home and in
                <span class="q-number">3</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-3" class="q-text" placeholder="" />
                    </span>
                </span>.
            </li>

            <li>
                Not as much
                <span class="q-number">4</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-4" class="q-text" placeholder="" />
                    </span>
                </span>
                was needed to produce cloth once the spinning jenny and power loom were invented.
            </li>

            <li>
                Smelting of iron ore with coke resulted in material that was better
                <span class="q-number">5</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-5" class="q-text" placeholder="" />
                    </span>
                </span>.
            </li>

            <li>
                Demand for iron increased with the growth of the
                <span class="q-number">6</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-6" class="q-text" placeholder="" />
                    </span>
                </span>.
            </li>

            <li>
                The new cities were dirty, crowded and lacked sufficient
                <span class="q-number">7</span>
                <span style="flex: 1;">
                    <span class="q-question">
                        <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-7" class="q-text" placeholder="" />
                    </span>
                </span>.
            </li>
        </ul>
    </div>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 8-13</h3>
    <p class="lead">
        Do the following statements agree with the information given in the
        Reading Passage?
    </p>
    <p>In boxes on your answer sheet, write</p>
    <ul class="legend">
        <li><strong>TRUE</strong> if the statement agrees with the claims of the writer</li>
        <li><strong>FALSE</strong> if the statement contradicts the claims of the writer</li>
        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks about this</li>
    </ul>
</fieldset>
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">8</span>
        Britain’s canal network grew rapidly so that more goods could be transported around the country.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-1" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-1" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-1" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">9</span>
        Costs in the iron industry rose when the technique of smelting iron ore with coke was
        introduced.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-2" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-2" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-2" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">10</span>
        Samuel Morse's communication system was more reliable than that developed by William Cooke and
        Charles Wheatstone.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-3" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-3" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-3" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">11</span>
        The economic benefits of industrialisation were limited to certain sectors of society.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-4" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-4" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-4" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">12</span>
        Some skilled weavers believed that the introduction of the new textile machines would lead to
        job losses.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-5" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-5" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-5" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">13</span>
        There was some sympathy among local people for the Luddites who were arrested near Huddersfield.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-6" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-6" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1]}}-{{ $id }}-6" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>