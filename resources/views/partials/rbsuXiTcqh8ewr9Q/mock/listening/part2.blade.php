@props(['part', 'id'])

<fieldset class="q-item">
    <p>Questions 11–15</p>
    <p>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</p>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="11">
    <legend class="q-text">
        <span class="q-number">11</span>
        During the visit to Malatte, in France, members especially enjoyed
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">going to a theme park.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">experiencing a river trip.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-1" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">visiting a cheese factory.</span>
        </label>
    </div>
</fieldset>

<!-- Question 2 -->
<fieldset class="q-item" data-q="12">
    <legend class="q-text">
        <span class="q-number">12</span>
        What will happen in Stanthorpe to mark the 25th anniversary of the Twinning Association?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">A tree will be planted.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">A garden seat will be bought.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-2" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">A footbridge will be built.</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="13">
    <legend class="q-text">
        <span class="q-number">13</span>
        Which event raised most funds this year?
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the film show</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">the pancake evening</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-3" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">the cookery demonstration</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="14">
    <legend class="q-text">
        <span class="q-number">14</span>
        For the first evening with the French visitors host families are advised to
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-4" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">take them for a walk round the town.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-4" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">go to a local restaurant.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-4" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">have a meal at home.</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="15">
    <legend class="q-text">
        <span class="q-number">15</span>
        On Saturday evening there will be the chance to
    </legend>
    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-5" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">listen to a concert.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-5" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">watch a match.</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][0]}}-{{ $id }}-5" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">take part in a competition.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p>
    <h3>Questions 16-20</h3>
    </p>
    <p>Label the map below.</p>
    <p>Write the correct letter,<b>A–H</b>, next to
        questions.</i></p>
</fieldset>

<div class="map-side-by-side">
    <div class="map-figure">
        <p><b>Farley House</b></p>
        <img src="{{ asset('own_assets/images/cambridge-ielts-19-academic-listening-test-1-16-20.png') }}"
            alt="Farley House Map" style="max-width: 100%; height: auto;" />
    </div>

    <div class="map-questions">
        <fieldset class="q-item" data-q="16">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            Farm shop
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-1" class="q-dropdown">
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

<fieldset class="q-item" data-q="17">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            Disabled entry
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-2" class="q-dropdown">
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

<fieldset class="q-item" data-q="18">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            Adventure playground
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-3" class="q-dropdown">
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

<fieldset class="q-item" data-q="19">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">19</span>
        <span style="flex: 1;">
            Kitchen gardens
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-4" class="q-dropdown">
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

<fieldset class="q-item" data-q="20">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">20</span>
        <span style="flex: 1;">
            The Temple of the Four Winds
            <span class="q-question">
                <select name="{{ $part['tipe'][1]}}-{{ $id }}-5" class="q-dropdown">
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
    </div>
</div>