@props(['part', 'id'])

<fieldset class="q-item">
    <p>Questions 11-15</p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">11</span>
        Before Queen Elizabeth I visited the castle in 1576,
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">repairs were carried out to the guest rooms.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">a new building was constructed for her.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">a fire damaged part of the main hall.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">12</span>
        In 1982, the castle was sold to
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the government.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the Fenys family.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">an entertainment company.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="13">
    <legend class="q-text">
        <span class="q-number">13</span>
        In some of the rooms, visitors can
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">speak to experts on the history of the castle.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">interact with actors dressed as famous characters.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">see models of historical figures moving and talking.</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="14">
    <legend class="q-text">
        <span class="q-number">14</span>
        In the castle park, visitors can
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">see an 800-year-old tree.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">go to an art exhibition.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">visit a small zoo.</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="15">
    <legend class="q-text">
        <span class="q-number">15</span>
        At the end of the visit, the group will have
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">afternoon tea in the conservatory.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the chance to meet the castle’s owners.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0] }}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">a photograph together on the Great Staircase.</span>
        </label>
    </div>
</fieldset>


<fieldset class="q-item">
    <p>Questions 16–20</p>
    <p>Label the plan below.</p>
    <p>Write the correct letter, A-H, next to Questions</p>

    <div style="text-align: center;">
        <p><b>Branley Castle</b></p>
        <img src="{{ asset('own_assets/images/cambridge-ielts-14-academic-listening-test-2-16-20.jpg') }}"
            alt="">
    </div>
</fieldset>

@php
    $options = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
@endphp

<fieldset class="q-item" data-q="16">
    <legend class="q-text" style="display:flex;gap:6px;">
        <span class="q-number">16</span>
        <span style="flex:1;">
            Starting point for walking the walls
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-dropdown">
                    <option value=""></option>
                    @foreach ($options as $opt)
                        <option value="{{ $opt }}">{{ $opt }}</option>
                    @endforeach
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="17">
    <legend class="q-text" style="display:flex;gap:6px;">
        <span class="q-number">17</span>
        <span style="flex:1;">
            Bow and arrow display
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-dropdown">
                    <option value=""></option>
                    @foreach ($options as $opt)
                        <option value="{{ $opt }}">{{ $opt }}</option>
                    @endforeach
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="18">
    <legend class="q-text" style="display:flex;gap:6px;">
        <span class="q-number">18</span>
        <span style="flex:1;">
            Hunting birds display
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    @foreach ($options as $opt)
                        <option value="{{ $opt }}">{{ $opt }}</option>
                    @endforeach
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="19">
    <legend class="q-text" style="display:flex;gap:6px;">
        <span class="q-number">19</span>
        <span style="flex:1;">
            Traditional dancing
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-dropdown">
                    <option value=""></option>
                    @foreach ($options as $opt)
                        <option value="{{ $opt }}">{{ $opt }}</option>
                    @endforeach
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="20">
    <legend class="q-text" style="display:flex;gap:6px;">
        <span class="q-number">20</span>
        <span style="flex:1;">
            Shop
            <span class="q-question">
                <select name="{{ $part['tipe'][1] }}-{{ $id }}-5" class="q-dropdown">
                    <option value=""></option>
                    @foreach ($options as $opt)
                        <option value="{{ $opt }}">{{ $opt }}</option>
                    @endforeach
                </select>
            </span>
        </span>
    </legend>
</fieldset>
