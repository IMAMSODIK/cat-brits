@props(['part', 'id'])


<fieldset class="q-item">
    <p>Questions 21-26</p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<h2><b>Talk on jobs in fashion design</b></h2>

<fieldset class="q-item" data-q="21">
    <legend class="q-text">
        <span class="q-number">21</span>
        What problem did Chantal have at the start of the talk?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Her view of the speaker was blocked.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">She was unable to find an empty seat.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">The students next to her were talking.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="22">
    <legend class="q-text">
        <span class="q-number">22</span>
        What were Hugo and Chantal surprised to hear about the job market?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">It has become more competitive than it used to be.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">There is more variety in it than they had realised.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Some areas of it are more exciting than others.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="23">
    <legend class="q-text">
        <span class="q-number">23</span>
        Hugo and Chantal agree that the speaker’s message was
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">unfair to them at times.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">hard for them to follow.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">critical of the industry.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="24">
    <legend class="q-text">
        <span class="q-number">24</span>
        What do Hugo and Chantal criticise about their school careers advice?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">when they received the advice</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">how much advice was given</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">who gave the advice</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="25">
    <legend class="q-text">
        <span class="q-number">25</span>
        When discussing their future, Hugo and Chantal disagree on
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">which is the best career in fashion.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">when to choose a career in fashion.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">why they would like a career in fashion.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="26">
    <legend class="q-text">
        <span class="q-number">26</span>
        How does Hugo feel about being an unpaid assistant?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">He is realistic about the practice.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">He feels the practice is dishonest.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">He thinks others want to change the practice.</span>
        </label>
    </div>
</fieldset>


<fieldset class="q-item">
    <p>Questions 27-28</p>
    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="27" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">27</span>
        <span class="q-number">28</span>
        Which TWO mistakes did the speaker admit she made in her first job?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">being dishonest to her employer</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">paying too much attention to how she looked</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">expecting to become well known</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">trying to earn a lot of money</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">openly disliking her client</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 29-30</p>
    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="29" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">29</span>
        <span class="q-number">30</span>
        Which TWO pieces of retail information do Hugo and Chantal agree would be useful?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-3[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the reasons people return fashion items</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-3[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">how much time people have to shop for clothes</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-3[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">fashion designs people want but can’t find</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-3[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">the best time of year for fashion buying</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-3[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">the most popular fashion sizes</span>
        </label>
    </div>
</fieldset>
