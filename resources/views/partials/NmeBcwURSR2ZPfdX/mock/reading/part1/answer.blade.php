@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 1-5</h3>
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
        <span class="q-number">1</span>
        The Romans’ shipbuilding skills were passed on to the Greeks and the Egyptians.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">2</span>
        Skilled craftsmen were needed for the mortise and tenon method of fixing planks.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">3</span>
        The later practice used by Mediterranean shipbuilders involved building the hull before the
        frame.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">4</span>
        The Romans called the Mediterranean Sea Mare Nostrum because they dominated its use.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">5</span>
        Most rowers on ships were people from the Roman army.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <h3>Questions 6-13</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>

    <p>
    <div>
        Warships were designed so that they were
        <span class="q-number-box">6</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text"
                    placeholder="" data-q="6">
            </span>
        </span>
        and moved quickly. They often remained afloat after battles and were able to sail close to land
        as they lacked any additional weight. A battering ram made of
        <span class="q-number-box">7</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text"
                    placeholder="" data-q="7">
            </span>
        </span>
        was included in the design for attacking and damaging the timber and oars of enemy ships.
        Warships, such as the ‘trireme’, had rowers on three different
        <span class="q-number-box">8</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text"
                    placeholder="" data-q="8">
            </span>
        </span>
        .
    </div>
    </p>

    <p>
    <div>
        Unlike warships, merchant ships had a broad
        <span class="q-number-box">9</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text"
                    placeholder="" data-q="9">
            </span>
        </span>
        that lay far below the surface of the sea. Merchant ships were steered through the water with
        the help of large rudders and a tiller bar. They had both square and
        <span class="q-number-box">10</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-5" class="q-text"
                    placeholder="" data-q="10">
            </span>
        </span>
        sails. On merchant ships and warships,
        <span class="q-number-box">11</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-6" class="q-text"
                    placeholder="" data-q="11">
            </span>
        </span>
        was used to ensure rowers moved their oars in and out of the water at the same time.
    </div>
    </p>

    <p>
    <div>
        Quantities of agricultural goods such as
        <span class="q-number-box">12</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-7" class="q-text"
                    placeholder="" data-q="12">
            </span>
        </span>
        were transported by merchant ships to two main ports in Italy. The ships were pulled to the
        shore by
        <span class="q-number-box">13</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-8" class="q-text"
                    placeholder="" data-q="13">
            </span>
        </span>
        . When the weather was clear and they could see islands or land, sailors used landmarks that
        they knew to help them navigate their route.
    </div>
    </p>
</fieldset>
