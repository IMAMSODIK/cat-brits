@props(['part', 'id'])

<fieldset class="q-item">
    <p>Questions 21-22</p>
    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="21" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">21</span>
        <span class="q-number">22</span>
        Which TWO parts of the introductory stage to their art projects do Jess and Tom agree were useful?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the Bird Park visit</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the workshop sessions</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the Natural History Museum visit</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">the projects done in previous years</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label"> the handouts with research sources</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 23-24</p>
    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="23" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">23</span>
        <span class="q-number">24</span>
        In which <b>TWO</b> ways do both Jess and Tom decide to change their proposals?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox"name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">by giving a rationale for their action plans</span>
        </label>
        <label class="q-option">
            <input type="checkbox"name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">by being less specific about the outcome</span>
        </label>
        <label class="q-option">
            <input type="checkbox"name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">by adding a video diary presentation</span>
        </label>
        <label class="q-option">
            <input type="checkbox"name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">by providing a timeline and a mind map</span>
        </label>
        <label class="q-option">
            <input type="checkbox"name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">by making their notes more evaluative</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p>Questions 25-30</p>
    <p>What information does the speaker give about each of the following areas of the museum?</p>
    <p><i>Choose SIX answers from the box and write the correct letter, <b>A–H</b>, next to questions.</i>
    </p>
    <p><b>Personal Meanings</b></p>

    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> a childhood memory</li>
        <li><b>B</b> hope for the future</li>
        <li><b>C</b> fast movement</li>
        <li><b>D</b> a potential threat</li>
        <li><b>E</b> the power of colour</li>
        <li><b>F</b> the continuity of life</li>
        <li><b>G</b> protection of nature</li>
        <li><b>H</b> a confused attitude to nature</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Pictures</b></h3>
</fieldset>

<fieldset class="q-item" data-q="25">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">25</span>
        <span style="flex: 1;">
            Falcon (Landseer)
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-1" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="26">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">26</span>
        <span style="flex: 1;">
            Fish hawk (Audubon)
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-2" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="27">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">27</span>
        <span style="flex: 1;">
            Kingfisher (van Gogh)
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="28">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">28</span>
        <span style="flex: 1;">
            Portrait of William Wells
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-4" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="29">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">29</span>
        <span style="flex: 1;">
            Vairumati (Gauguin)
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-5" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="30">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">30</span>
        <span style="flex: 1;">
            Portrait of Giovanni de Medici
            <span class="q-question">
                <select name="{{ $part['tipe'][2] }}-{{ $id }}-6" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>
