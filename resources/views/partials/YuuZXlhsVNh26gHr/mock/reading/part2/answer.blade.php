@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 14–20</b></p>
    <p class="lead">The Reading Passage has nine paragraphs, <b>A–I</b>.</p>
    <p>Which paragraph contains the following information?</p>
    <p class="lead">
        Write the correct letter, <b>A–I</b>, in boxes on your answer sheet.
    </p>
</fieldset>

<fieldset class="q-item" data-q="14">
    <legend class="q-text">
        <span class="q-number">14</span>
        mention of factors driving a renewed interest in natural medicinal compounds
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="15">
    <legend class="q-text">
        <span class="q-number">15</span>
        how recent technological advances have made insect research easier
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="16">
    <legend class="q-text">
        <span class="q-number">16</span>
        examples of animals which use medicinal substances from nature
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="17">
    <legend class="q-text">
        <span class="q-number">17</span>
        reasons why it is challenging to use insects in drug research
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="18">
    <legend class="q-text">
        <span class="q-number">18</span>
        reference to how interest in drug research may benefit wildlife
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="19">
    <legend class="q-text">
        <span class="q-number">19</span>
        a reason why nature-based medicines fell out of favour for a period
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
            </select>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="20">
    <legend class="q-text">
        <span class="q-number">20</span>
        an example of an insect-derived medicine in use at the moment
        <span class="q-question">
            <select name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-dropdown">
                <option value=""></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
            </select>
        </span>
    </legend>
</fieldset>


<fieldset class="q-item">
    <p class="lead"><b>Questions 21–22</b></p>
    <p class="lead"><i>Choose TWO letters, <b>A–E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
    <p>
        <span class="q-number-box">21</span>
        <span class="q-number-box">22</span>
        Which <b>TWO</b> of the following make insects interesting for drug research?
    </p>
</fieldset>

<fieldset class="q-item" data-q="21" data-q-multi="1,2" data-max="2">
    <div class="q-options" role="group" aria-label="Question options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the huge number of individual insects in the world</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the variety of substances insects have developed to protect
                themselves</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the potential to extract and make use of insects’ genetic
                codes</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">the similarities between different species of insect</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">the manageable size of most insects</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 23–26</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>

    <h3>Research at Aberystwyth University</h3>

    <p>
    <div>
        Ross Piper and fellow zoologists at Aberystwyth University are using their
        expertise in
        <span class="q-number-box">23</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-1" class="q-text" data-q="23">
            </span>
        </span>
        when undertaking bioprospecting with insects. They are especially interested in
        the compounds that insects produce to overpower and preserve their
        <span class="q-number-box">24</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-2" class="q-text" data-q="24">
            </span>
        </span>.
    </div>
    </p>

    <p>
    <div>
        They are also interested in compounds which insects use to protect themselves
        from pathogenic bacteria and fungi found in their
        <span class="q-number-box">25</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-3" class="q-text" data-q="25">
            </span>
        </span>.
        Piper hopes that these substances will be useful in the development of drugs such
        as
        <span class="q-number-box">26</span>
        <span style="flex:1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-4" class="q-text" data-q="26">
            </span>
        </span>.
    </div>
    </p>
</fieldset>
