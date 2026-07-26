@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 15-18</h3>
    <p>Complete the sentences below</p>
    <p class="lead">
        <i>Choose <b>NO MORE THAN THREE WORDS</b> from the passage for each answer.</i>
        <i>Write your answers in boxes 15-18 on your answer sheet.</i>
    </p>
</fieldset>

<fieldset class="q-item questions-item" data-q="15">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">15</span>
        <span style="flex: 1;">
            Language problems may come to the attention of the public when they have
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
            </span>
            , such as fatal accidents or social problems.
        </span>
    </legend>
</fieldset>

<fieldset class="q-item questions-item" data-q="16">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            Evidence of the extent of the language barrier has been gained from
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text"
                    placeholder="">.
            </span>
            of materials used by scientists such as books and periodicals.
        </span>
    </legend>
</fieldset>

<fieldset class="q-item questions-item" data-q="17">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            An example of British linguistic insularity is the use of English for materials such as
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item questions-item" data-q="18">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            An example of a part of the world where people may have difficulty in negotiating English is
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" placeholder="">
            </span>
        </span>
    </legend>
</fieldset>


<fieldset class="q-item">
    <p class="lead"><b>Questions 19-21</b></p>
    <p class="lead">
        Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.
    </p>
</fieldset>

<fieldset class="q-item" data-q="19">
    <legend class="q-text">
        <span class="q-number">19</span>
        According to the passage, 'They don't talk the same language' (paragraph 1), can refer to problems in ...
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">understanding metaphor.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">learning foreign languages.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">understanding dialect or style.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">dealing with technological change.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="20">
    <legend class="q-text">
        <span class="q-number">20</span>
        The case of the poisonous mushrooms (paragraph 2) suggests that American doctors .
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">should pay more attention to radio reports.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">only read medical articles if they are in English.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">are sometimes unwilling to try foreign treatments.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">do not always communicate effectively with their patients.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="21">
    <legend class="q-text">
        <span class="q-number">21</span>
        According to the writer, the linguistic insularity of British businesses ...
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">later spread to other countries.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">had a negative effect on their business.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">is not as bad now as it used to be in the past.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">made non-English-speaking companies turn to other markets.</span>
        </label>
    </div>
</fieldset>


<fieldset class="q-item">
    <p class="lead"><b>Questions 22-25</b></p>
    <p class="lead">
        Complete the sentences below.
    </p>
    <p class="lead">
        <i>Choose <b>NO MORE THAN THREE WORDS</b> from the passage for each answer. <br>
            rite your answers in boxes <b>22-25</b> on your answer sheet.</i>
    </p>
</fieldset>

<fieldset class="q-item">
    <p class="lead">
        List the FOUR main ways in which British companies have tried to solve the problem of the language barrier since
        the 1960s.
    </p>
</fieldset>


<fieldset class="q-item" data-q="22">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">22</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-1" class="q-text">
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="23">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">23</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-2" class="q-text">
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="24">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">24</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-3" class="q-text">
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="25">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">25</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-4" class="q-text">
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 26-27</b></p>
    <p class="lead">
        Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.
    </p>
</fieldset>

<fieldset class="q-item" data-q="26">
    <legend class="q-text">
        <span class="q-number">26</span>
        According to the writer, English-speaking people need to be aware that...
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">some foreigners have never met an English-speaking person.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">many foreigners have no desire to learn English.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">foreign languages may pose a greater problem in the future.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-4" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">English-speaking foreigners may have difficulty understanding English.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="27">
    <legend class="q-text">
        <span class="q-number">27</span>
        suitable title for this passage would be ...
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Overcoming the language barrier</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">How to survive an English-speaking world</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Global understanding - the key to personal progress</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][3] }}-{{ $id }}-5" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">The need for a common language</span>
        </label>
    </div>
</fieldset>
