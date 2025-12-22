@props(['part', 'id'])

<fieldset class="q-item">
    <h3>Questions 21-24</h3>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 7 -->
<fieldset class="q-item" data-q="7">
    <legend class="q-text">
        <span class="q-number">21</span>
        At first, Don thought the topic of recycling footwear might be too
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">limited in scope.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">hard to research.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">boring for listeners.</span>
        </label>
    </div>
</fieldset>

<!-- Question 8 -->
<fieldset class="q-item" data-q="8">
    <legend class="q-text">
        <span class="q-number">22</span>
        When discussing trainers, Bella and Don disagree about
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 8 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">how popular they are among young people.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">how suitable they are for school.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">how quickly they wear out.</span>
        </label>
    </div>
</fieldset>

<!-- Question 9 -->
<fieldset class="q-item" data-q="9">
    <legend class="q-text">
        <span class="q-number">23</span>
        Bella says that she sometimes recycles shoes because
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 9 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">they no longer fit.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">she no longer likes them.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">they are no longer in fashion.</span>
        </label>
    </div>
</fieldset>

<!-- Question 10 -->
<fieldset class="q-item" data-q="10">
    <legend class="q-text">
        <span class="q-number">24</span>
        What did the article say that confused Don?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 10 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-10" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Public consumption of footwear has risen.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-10" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">Less footwear is recycled now than in the past.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-10" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">People dispose of more footwear than they used to.</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p>Questions 25-28</p>
    <p>What reasons did the recycling manager give for rejecting footwear, according to the students?</p>
    <p><i>Choose FOUR answers from the box and write the correct letter, <b>A–F</b>, next to questions.</i>
    </p>
    <p><b>Reason</b></p>

    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> One shoe was missing</li>
        <li><b>B</b> The colour of one shoe had faded</li>
        <li><b>C</b> One shoe had a hole in it</li>
        <li><b>D</b> The shoes were brand new</li>
        <li><b>E</b> The shoes were too dirty</li>
        <li><b>F</b> The stitching on the shoes was broken</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Footwear</b></h3>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">25</span>
        <span style="flex: 1;">
            The high-heeled shoes
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">26</span>
        <span style="flex: 1;">
            The ankle boots
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">27</span>
        <span style="flex: 1;">
            The baby shoes
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">28</span>
        <span style="flex: 1;">
            The trainers
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 29-30</h3>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 11 -->
<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">29</span>
        Why did the project to make ‘new’ shoes out of old shoes fail?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 11 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-11" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">People believed the 'new' pairs of shoes were unhygienic.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-11" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">There were not enough good parts to use in the old shoes.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-11" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">The shoes in the ‘new’ pairs were not completely alike.</span>
        </label>
    </div>
</fieldset>

<!-- Question 12 -->
<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">30</span>
        Bella and Don agree that they can present their topic
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 12 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-12" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">from a new angle.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-12" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">with relevant images.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-12" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">in a straightforward way.</span>
        </label>
    </div>
</fieldset>