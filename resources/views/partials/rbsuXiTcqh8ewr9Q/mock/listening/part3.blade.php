@props(['part', 'id'])

<fieldset class="q-item">
    <p>
    <h3>Questions 21–22</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">21</span>
        <span class="q-number">22</span>
        Which TWO things did Colin find most satisfying about his bread reuse project?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0]}}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">receiving support from local restaurants</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0]}}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">finding a good way to prevent waste</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0]}}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">overcoming problems in a basic process</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0]}}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">experimenting with designs and colours</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][0]}}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">learning how to apply 3-D printing</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p>
    <h3>Questions 23–24</h3>
    </p>
    <p>Choose <b>TWO</b> letters <b>A–E</b>.</p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <span class="q-number">23</span>
        <span class="q-number">24</span>
        Which TWO ways do the students agree that touch-sensitive sensors for food labels could be developed
        in future?
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">for use on medical products</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">to show that food is no longer fit to eat</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">for use with drinks as well as foods</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">to provide applications for blind people</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">to indicate the weight of certain foods</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p>Questions 25–30</p>
    <p>What is the students’ opinion about each of the following food trends?</p>
    <p><i>Choose SIX answers from the box and write the correct letter, <b>A–H</b>, next to questions.</i>
    </p>
    <p><b>Opinions</b></p>

    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> This is only relevant to young people.</li>
        <li><b>B</b> This may have disappointing results.</li>
        <li><b>C</b> This already seems to be widespread.</li>
        <li><b>D</b> Retailers should do more to encourage this.</li>
        <li><b>E</b> More financial support is needed for this.</li>
        <li><b>F</b> Most people know little about this.</li>
        <li><b>G</b> There should be stricter regulations about this.</li>
        <li><b>H</b> This could be dangerous.</li>
    </ul>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">25</span>
        <span style="flex: 1;">
            Use of local products
            <span class="q-question">
                <select name="{{ $part['tipe'][2]}}-{{ $id }}-1" class="q-dropdown">
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

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">26</span>
        <span style="flex: 1;">
            Reduction in unnecessary packaging
            <span class="q-question">
                <select name="{{ $part['tipe'][2]}}-{{ $id }}-2" class="q-dropdown">
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

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">27</span>
        <span style="flex: 1;">
            Gluten-free and lactose-free food
            <span class="q-question">
                <select name="{{ $part['tipe'][2]}}-{{ $id }}-3" class="q-dropdown">
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

<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">28</span>
        <span style="flex: 1;">
            Use of branded products related to celebrity chefs
            <span class="q-question">
                <select name="{{ $part['tipe'][2]}}-{{ $id }}-4" class="q-dropdown">
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

<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">29</span>
        <span style="flex: 1;">
            Development of ‘ghost kitchens’ for takeaway food
            <span class="q-question">
                <select name="{{ $part['tipe'][2]}}-{{ $id }}-5" class="q-dropdown">
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

<fieldset class="q-item" data-q="6">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">30</span>
        <span style="flex: 1;">
            Use of mushrooms for common health concerns
            <span class="q-question">
                <select name="{{ $part['tipe'][2]}}-{{ $id }}-6" class="q-dropdown">
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