@props(['part', 'id'])

<fieldset class="q-item">
    <p>Questions 21-24</p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
    <p><b>Woolly mammoths on St Paul’s Island</b></p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">21</span>
        How will Rosie and Martin introduce their presentation?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">with a drawing of woolly mammoths in their natural habitat</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">with a timeline showing when woolly mammoths lived</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-6" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">with a video clip about woolly mammoths</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">22</span>
        What was surprising about the mammoth tooth found by Russell Graham?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">It was still embedded in the mammoth’s jawbone.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">It was from an unknown species of mammoth.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-7" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">It was not as old as mammoth remains from elsewhere.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">23</span>
        The students will use an animated diagram to demonstrate how the mammoths
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">became isolated on the island.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">spread from the island to other areas.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-8" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">coexisted with other animals on the island.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">24</span>
        According to Martin, what is unusual about the date of the mammoths’ extinction on the island?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">how exact it is</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">how early it is</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-9" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">how it was established</span>
        </label>
    </div>
</fieldset>


<fieldset class="q-item">
    <p>Questions 25-30</p>
    <p>
        What action will the students take for each of the following sections of their presentation?
    </p>
    <p>
        <i>
            Choose SIX answers from the box and write the correct letter,
            <b>A–H</b>, next to Questions.
        </i>
    </p>

    <p><b>Actions</b></p>
    <ul style="list-style:none;padding-left:0;margin-left:0;">
        <li><b>A</b> make it more interactive</li>
        <li><b>B</b> reduce visual input</li>
        <li><b>C</b> add personal opinions</li>
        <li><b>D</b> contact one of the researchers</li>
        <li><b>E</b> make detailed notes</li>
        <li><b>F</b> find information online</li>
        <li><b>G</b> check timing</li>
        <li><b>H</b> organise the content more clearly</li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <h3><b>Sections of presentation</b></h3>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
        <span class="q-number">25</span>
        <span style="flex:1;">
            Introduction
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-dropdown">
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
    <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
        <span class="q-number">26</span>
        <span style="flex:1;">
            Discovery of the mammoth tooth
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-dropdown">
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
    <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
        <span class="q-number">27</span>
        <span style="flex:1;">
            Initial questions asked by the researchers
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-dropdown">
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
    <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
        <span class="q-number">28</span>
        <span style="flex:1;">
            Further research carried out on the island
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-dropdown">
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
    <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
        <span class="q-number">29</span>
        <span style="flex:1;">
            Findings and possible explanations
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-5" class="q-dropdown">
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
    <legend class="q-text" style="display:flex;align-items:center;gap:6px;">
        <span class="q-number">30</span>
        <span style="flex:1;">
            Relevance to the present day
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-6" class="q-dropdown">
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
