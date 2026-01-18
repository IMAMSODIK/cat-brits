@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 14–19</b></p>
    <p class="lead">The Reading Passage has seven paragraphs, <b>A–G</b>.</p>
    <p>Which paragraph contains the following information?</p>
    <p class="lead">
        Write the correct letter, <b>A–G</b>, in boxes on your answer sheet.
        <b>NB</b> You may use any letter more than once.
    </p>
</fieldset>

<fieldset class="q-item" data-q="14">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">14</span>
        <span style="flex: 1;">
            a reference to a denial of involvement in piracy
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-1" class="q-dropdown">
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

<fieldset class="q-item" data-q="15">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">15</span>
        <span style="flex: 1;">
            details of how a campaign to eradicate piracy was carried out
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-2" class="q-dropdown">
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

<fieldset class="q-item" data-q="16">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            a mention of the circumstances in which states in the ancient world would make use of
            pirates
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-3" class="q-dropdown">
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

<fieldset class="q-item" data-q="17">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            a reference to how people today commonly view pirates
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-4" class="q-dropdown">
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

<fieldset class="q-item" data-q="18">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            an explanation of how some people were encouraged not to return to piracy
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-5" class="q-dropdown">
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

<fieldset class="q-item" data-q="19">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">19</span>
        <span style="flex: 1;">
            a mention of the need for many sailing vessels to stay relatively close to land
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-6" class="q-dropdown">
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
    <p class="lead"><b>Questions 20-21</b></p>
    <p class="lead"><i>Choose Two Letters<b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
</fieldset>
<fieldset class="q-item" data-q="20" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <p><span class="q-number-box">20</span><span class="q-number-box">21</span> Which
            <b>TWO</b> of the following statements does the writer make about inhabitants of the
            Mediterranean region in the ancient world?
        </p>
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">They often used stolen vessels to carry out pirate attacks.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">They managed to escape capture by the authorities because they knew
                the area so well.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label"> They paid for information about the routes merchant ships would
                take.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label"> They depended more on the sea for their livelihood than on
                farming.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][1]}}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label"> They stored many of the goods taken in pirate attacks in coves
                along
                the coastline.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 22-23</b></p>
    <p class="lead"><i>Choose Two Letters<b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
</fieldset>
<fieldset class="q-item" data-q="22" data-type="two_choices" data-q-multi="1,2" data-max="2">
    <legend class="q-text">
        <p><span class="q-number-box">22</span><span class="q-number-box">23</span> Which
            <b>TWO</b> Which TWO of the following statements does the writer make about piracy and ancient
            Greece?
        </p>
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">
                The state estimated that very few people were involved in piracy.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">Attitudes towards piracy changed shortly after the Iliad and the
                Odyssey were written.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">
                Important officials were known to occasionally take part in piracy.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">Every citizen regarded pirate attacks on cities as
                unacceptable.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">A favourable view of piracy is evident in certain ancient Greek
                texts.</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <h3>Questions 24-26</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>
    <h3>Ancient Rome and piracy</h3>
    <p>
    <div>
        Piracy was an issue ancient Rome had to deal with, but it also brought some benefits for
        Rome. For example, pirates supplied slaves that were important for Rome’s industries.
        However, attacks on vessels transporting
        <span class="q-number-box">24</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][3]}}-{{ $id }}-1" class="q-text" placeholder="" data-q="24" >
            </span>
        </span>
        resulted in calls for
        <span class="q-number-box">25</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][3]}}-{{ $id }}-2" class="q-text" placeholder="" data-q="25" >
            </span>
        </span>
        for the pirates responsible. Nevertheless, piracy continued, with some pirates demanding a
        <span class="q-number-box">26</span>
        <span style="flex: 1;">
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][3]}}-{{ $id }}-3" class="q-text" placeholder="" data-q="26" >
            </span>
        </span>
        for the return of the Roman officials they captured.
    </div>
    </p>
</fieldset>