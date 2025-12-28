@props(['part', 'id'])
<fieldset class="q-item">
    <p><b>Questions 21–25</b></p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">21</span>
        What does Trevor find interesting about the purpose of children’s literature?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the fact that authors may not realise what values they’re
                teaching</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the fact that literature can be entertaining and educational at the same
                time</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the fact that adults expect children to imitate characters in
                literature</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">22</span>
        Trevor says the module about the purpose of children’s literature made him
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">analyse some of the stories that his niece reads.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">wonder how far popularity reflects good quality.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">decide to start writing some children’s stories.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">23</span>
        Stephanie is interested in the Pictures module because
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">she intends to become an illustrator.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">she can remember beautiful illustrations from her childhood.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">she believes illustrations are more important than words.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">24</span>
        Trevor and Stephanie agree that comics
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">are inferior to books.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">have the potential for being useful.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">discourage children from using their imagination.</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">25</span>
        With regard to books aimed at only boys or only girls, Trevor was surprised
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">how long the distinction had gone unquestioned.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">how few books were aimed at both girls and boys.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">how many children enjoyed books intended for the opposite sex.</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p><b>Questions 26–30</b></p>
    <p>What comment is made about each of these stories?</p>
    <p><i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A–G</b>, next to the
            questions.</i></p>

    <p><b>Comments</b></p>
    <ul style="list-style: none; padding-left: 0; margin-left: 0;">
        <li><b>A</b> translated into many other languages</li>
        <li><b>B</b> hard to read</li>
        <li><b>C</b> inspired a work in a different area of art</li>
        <li><b>D</b> more popular than the author’s other works</li>
        <li><b>E</b> original title refers to another book</li>
        <li><b>F</b> started a new genre</li>
        <li><b>G</b> unlikely topic</li>
    </ul>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">26</span>
        <span style="flex: 1;">
            Perrault’s fairy tales
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

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">27</span>
        <span style="flex: 1;">
            The Swiss Family Robinson
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

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">28</span>
        <span style="flex: 1;">
            The Nutcracker and the Mouse King
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-12" class="q-dropdown">
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

<!-- Question 4 -->
<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">29</span>
        <span style="flex: 1;">
            The Lord of the Rings
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-13" class="q-dropdown">
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

<!-- Question 5 -->
<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">30</span>
        <span style="flex: 1;">
            War Horse
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-14" class="q-dropdown">
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
