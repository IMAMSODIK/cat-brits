@props(['part', 'id'])
<fieldset class="q-item">
    <p>Questions 21-22</p>
    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="21" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">21</span>
        <span class="q-number">22</span>
        Which TWO things do the students agree they need to include in their review of Romeo and Juliet?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">analysis of the text</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">a summary of the plot</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">a description of the theatre</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">a personal reaction</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">a reference to particular scenes</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p><b>Questions 23–27</b></p>
    <p>
        Which opinion do the speakers give about each of the following aspects of The Emporium’s production
        of Romeo and Juliet?
    </p>
    <p>
        <i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A–G</b>, next to
            questions.</i>
    </p>
    <p><b>Opinions</b></p>
    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> They both expected this to be more traditional.</li>
        <li><b>B</b> They both thought this was original.</li>
        <li><b>C</b> They agree this created the right atmosphere.</li>
        <li><b>D</b> They agree this was a major strength.</li>
        <li><b>E</b> They were both disappointed by this.</li>
        <li><b>F</b> They disagree about why this was an issue.</li>
        <li><b>G</b> They disagree about how this could be improved.</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Band members</b></h3>
</fieldset>

<fieldset class="q-item" data-q="23">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">23</span>
        <span style="flex: 1;">
            flautist
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-7" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="24">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">24</span>
        <span style="flex: 1;">
            trumpeter
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-8" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="25">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">25</span>
        <span style="flex: 1;">
            trombonist
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-9" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="26">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">26</span>
        <span style="flex: 1;">
            percussionist
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-10" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="27">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">27</span>
        <span style="flex: 1;">
            percussionist
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-11" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="28">
    <legend class="q-text">
        <span class="q-number">28</span>
        The students think the story of Romeo and Juliet is still relevant for young people today because
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">it illustrates how easily conflict can start.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">it deals with problems that families experience.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">it teaches them about relationships.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="29">
    <legend class="q-text">
        <span class="q-number">29</span>
        The students found watching Romeo and Juliet in another language
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">frustrating.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">demanding.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">moving.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="30">
    <legend class="q-text">
        <span class="q-number">30</span>
        Why do the students think Shakespeare’s plays have such international appeal?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-7" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">The stories are exciting.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-7" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">There are recognisable characters.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-7" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">They can be interpreted in many ways.</span>
        </label>
    </div>
</fieldset>
