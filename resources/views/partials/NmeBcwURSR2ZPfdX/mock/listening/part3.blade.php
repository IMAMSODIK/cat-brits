@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 21–22</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="21" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">21</span>
        <span class="q-number">22</span>
        Which TWO points does Adam make about his experiment on artificial sweeteners?
    </legend>

    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-3[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">The results were what he had predicted.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-3[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">The experiment was simple to set up</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-3[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">A large sample of people was tested.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-3[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">The subjects were unaware of what they were drinking.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-3[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">The test was repeated several times for each person.</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p>
    <h3>Questions 23–24</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="23" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">23</span>
        <span class="q-number">24</span>
        Which TWO problems did Rosie have when measuring the fat content of nuts?
    </legend>

    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-4[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">She used the wrong sort of nuts.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-4[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">She used an unsuitable chemical.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-4[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">She did not grind the nuts finely enough.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-4[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">The information on the nut package was incorrect.</span>
        </label>

        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-4[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">The weighing scales may have been unsuitable.</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p><b>Questions 25–30</b></p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="25">
    <legend class="q-text">
        <span class="q-number">25</span>
        Adam suggests that restaurants could reduce obesity if their menus
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">offered fewer options.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">had more low-calorie foods.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">were organised in a particular way.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="26">
    <legend class="q-text">
        <span class="q-number">26</span>
        The students agree that food manufacturers deliberately
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">make calorie counts hard to understand.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">fail to provide accurate calorie counts.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">use ineffective methods to reduce calories.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="27">
    <legend class="q-text">
        <span class="q-number">27</span>
        What does Rosie say about levels of exercise in England?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">The amount recommended is much too low.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">Most people overestimate how much they do.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Women now exercise more than they used to.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="28">
    <legend class="q-text">
        <span class="q-number">28</span>
        Adam refers to the location and width of stairs in a train station to illustrate
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">practical changes that can influence people’s behaviour.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">methods of helping people who have mobility problems.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">ways of preventing accidents by controlling crowd movement.</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="29">
    <legend class="q-text">
        <span class="q-number">29</span>
        What do the students agree about including reference to exercise in their presentation?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">They should probably leave it out.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">They need to do more research on it.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">They should discuss this with their tutor.</span>
        </label>
    </div>
</fieldset>

<!-- Question 6 -->
<fieldset class="q-item" data-q="30">
    <legend class="q-text">
        <span class="q-number">30</span>
        What are the students going to do next for their presentation?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">prepare some slides for it</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">find out how long they have for it</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">decide on its content and organisation</span>
        </label>
    </div>
</fieldset>
