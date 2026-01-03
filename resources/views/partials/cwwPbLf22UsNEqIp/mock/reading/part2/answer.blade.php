@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 14-17</h3>
    </p>
    <p>Label the diagram below.</p>
    <p>Choose <b>NO MORE THAN THREE WORDS</b> from the passage for each answer.</p>
    <p><b>Three Tools Made By Crows</b></p>
    <p><i>Write your answers in boxes <b>14-17</b> on your answer sheet.</i></p>
    <div class="d-flex">
        <img src="{{ asset('own_assets/images/P02-4.png') }}" alt="Sports Super Centre"
            style="max-width: 100%; height: auto;" />
    </div>
    <fieldset class="q-item" data-q="1">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="1">
                <span class="q-number-box">14</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" />
            </span>
        </legend>
    </fieldset>
    <fieldset class="q-item" data-q="2">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="2">
                <span class="q-number-box">15</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text" />
            </span>
        </legend>
    </fieldset>
    <fieldset class="q-item" data-q="3">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="3">
                <span class="q-number-box">16</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text" />
            </span>
        </legend>
    </fieldset>
    <fieldset class="q-item" data-q="4">
        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
            <span class="q-item" data-q="4">
                <span class="q-number-box">17</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text" />
            </span>
        </legend>
    </fieldset>
</fieldset>
<fieldset class="q-item">
    <h3>Questions 18-23</h3>
    <p class="lead">
        Do the following statements agree with the information given in Reading Passage 1?
    </p>
    <p>In boxes <b>18-23</b> on your answer sheet, write</p>
    <ul class="legend">
        <li><strong>TRUE</strong> if the statement agrees with the information</li>
        <li><strong>FALSE</strong> if the statement contradicts the information</li>
        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
    </ul>
</fieldset>
<!-- Question 1 -->
<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">18</span>
        There appears to be a fixed pattern for the padanus probe’s construction.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-1" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">19</span>
        There is plenty of evidence to indicate how the crows manufacture the padanus
        probe.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-2" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">20</span>
        Crows seem to practice a number of times before making a usable padanus probe.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-3" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="4">
    <legend class="q-text">
        <span class="q-number">21</span>
        The researchers suspect the crows have a mental image of the padanus probe
        before they create it.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-4" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="5">
    <legend class="q-text">
        <span class="q-number">22</span>
        Research into how the padanus probe is made has helped to explain the
        toolmaking skills of many other bird species.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-5" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item" data-q="6">
    <legend class="q-text">
        <span class="q-number">23</span>
        The researchers believe the ability to make the padanus probe is passed down to
        the crows in their genes.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-6" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p class="lead"><b>Questions 24-26</b></p>
    <p>Choose <b>THREE</b> letters, <b>A-G</b>.</p>
    <p class="lead">Write the correct letters in boxes 24-26 on your answer sheet.
    <p>According to the information in the passage, which <b>THREE</b> of the following features are
        probably common to both New Caledonian crows and human beings?</i>
    </p>
    <ol>
        <li>keeping the same mate for life</li>
        <li>having few natural predators</li>
        <li>having a bias to the right when working</li>
        <li>being able to process sequential tasks</li>
        <li>living in extended family groups</li>
        <li>eating a variety of foodstuffs</li>
        <li>being able to diverse habitats</li>
    </ol>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text">
        <span class="q-number">24</span>
        Question <b>1</b>
        <select name="{{ $part['tipe'][2] }}-{{ $id }}-1" class="q-dropdown">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="2">
    <legend class="q-text">
        <span class="q-number">25</span>
        Question <b>2</b>
        <select name="{{ $part['tipe'][2] }}-{{ $id }}-2" class="q-dropdown">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="3">
    <legend class="q-text">
        <span class="q-number">26</span>
        Question <b>3</b>
        <select name="{{ $part['tipe'][2] }}-{{ $id }}-3" class="q-dropdown">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
    </legend>
</fieldset>
