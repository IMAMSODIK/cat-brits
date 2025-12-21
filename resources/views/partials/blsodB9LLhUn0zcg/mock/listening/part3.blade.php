@props(['part', 'id'])

<fieldset class="q-item">
    <p>Questions 12-22</p>
    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">21</span>
        <span class="q-number">22</span>
        Which TWO educational skills were shown in the video of children doing origami?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">solving problems</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">following instructions</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">working cooperatively</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">learning through play</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">developing hand-eye coordination</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>Questions 23-27</p>
    <p>Which comment do the students make about each of the following children in the video?</p>
    <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A–G</b>, next to
            questions.</i></p>
    <p><b>Comments</b></p>

    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> demonstrated independence</li>
        <li><b>B</b> asked for teacher support</li>
        <li><b>C</b> developed a competitive attitude</li>
        <li><b>D</b> seemed to find the activity calming</li>
        <li><b>E</b> seemed pleased with the results</li>
        <li><b>F</b> seemed confused</li>
        <li><b>G</b> seemed to find the activity easy</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Children</b></h3>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">23</span>
        <span style="flex: 1;">
            Sid
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

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">24</span>
        <span style="flex: 1;">
            Jack
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

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">25</span>
        <span style="flex: 1;">
            Naomi
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

<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">26</span>
        <span style="flex: 1;">
            Anya
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

<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">27</span>
        <span style="flex: 1;">
            Zara
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
<fieldset class="q-item">
    <p>Questions 28-30</p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">28</span>
        Before starting an origami activity in class, the students think it is important for the teacher to
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">make models that demonstrate the different stages.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">check children understand the terminology involved.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">tell children not to worry if they find the activity difficult.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">29</span>
        The students agree that some teachers might be unwilling to use origami in class because
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">they may not think that crafts are important.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">they may not have the necessary skills.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-6" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">they may worry that it will take up too much time.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">30</span>
        Why do the students decide to use origami in their maths teaching practice?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-7" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">to correct a particular misunderstanding</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-7" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">to set a challenge</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][2] }}-{{ $id }}-7" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">to introduce a new concept</span>
        </label>
    </div>
</fieldset>