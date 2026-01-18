@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 14–17</b></p>
    <p class="lead">The Reading Passage has six paragraphs, <b>A–F</b>.</p>
    <p>Which paragraph contains the following information?</p>
    <p class="lead">
        Write the correct letter, <b>A–F</b>, in boxes on your answer sheet.
    </p>
</fieldset>

<fieldset class="q-item" data-q="14">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">14</span>
        <span style="flex: 1;">
            a reference to how quickly animal species can die out
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="15">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">15</span>
        <span style="flex: 1;">
            reasons why it is preferable to study animals in captivity rather than in the wild
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="16">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            mention of two ways of learning about animals other than visiting them in zoos
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item" data-q="17">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            reasons why animals in zoos may be healthier than those in the wild
            <span class="q-question">
                <select name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-dropdown">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </span>
        </span>
    </legend>
</fieldset>

<fieldset class="q-item">
    <h3>Questions 18-22</h3>
    <p class="lead">
        Do the following statements agree with the information given in the
        Reading Passage?
    </p>
    <p>In boxes on your answer sheet, write</p>
    <ul class="legend">
        <li><strong>TRUE</strong> if the statement agrees with the information</li>
        <li><strong>FALSE</strong> if the statement contradicts the information</li>
        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
    </ul>
</fieldset>

<!-- Question 1 -->
<fieldset class="q-item" data-q="18">
    <legend class="q-text">
        <span class="q-number">18</span>
        An animal is likely to live longer in a zoo than in the wild.
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

<!-- Question 2 -->
<fieldset class="q-item" data-q="19">
    <legend class="q-text">
        <span class="q-number">19</span>
        There are some species in zoos which can no longer be found in the wild.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-7" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 3 -->
<fieldset class="q-item" data-q="20">
    <legend class="q-text">
        <span class="q-number">20</span>
        Improvements in the quality of TV wildlife documentaries have resulted in increased numbers of
        zoo visitors.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-8" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 4 -->
<fieldset class="q-item" data-q="21">
    <legend class="q-text">
        <span class="q-number">21</span>
        Zoos have always excelled at transmitting information about animals to the public.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-9" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>

<!-- Question 5 -->
<fieldset class="q-item" data-q="22">
    <legend class="q-text">
        <span class="q-number">22</span>
        Studying animals in zoos is less stressful for the animals than studying them in the wild.
    </legend>
    <div class="q-options">
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="TRUE">
            <span class="opt-code">A</span>
            <span class="opt-label">TRUE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="FALSE">
            <span class="opt-code">B</span>
            <span class="opt-label">FALSE</span>
        </label>
        <label class="q-option">
            <input type="radio" name="{{ $part['tipe'][1] }}-{{ $id }}-10" value="NOT GIVEN">
            <span class="opt-code">C</span>
            <span class="opt-label">NOT GIVEN</span>
        </label>
    </div>
</fieldset>
<fieldset class="q-item">
    <p class="lead"><b>Questions 23-24</b></p>
    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
</fieldset>

<fieldset class="q-item" data-q="23" data-q-multi="1,2" data-max="2" data-type="two_choices">
    <legend class="q-text no-border">
        <p>
            <span class="q-number-box">23</span>
            <span class="q-number-box">24</span>
            Which <b>TWO</b> of the following are stated about zoo staff in the text?
        </p>
    </legend>
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">Some take part in television documentaries about animals.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">Some travel to overseas locations to join teams in zoos.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">Some get experience with species in the wild before taking up zoo
                jobs.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">Some teach people who are involved with conservation
                projects.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2] }}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">Some specialise in caring for species which are under threat.</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 25-26</b></p>
    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
</fieldset>

<fieldset class="q-item" data-q="25" data-q-multi="1,2" data-max="2" data-type="two_choices">
    <legend class="q-text no-border">
        <p>
            <span class="q-number-box">25</span>
            <span class="q-number-box">26</span>
            Which <b>TWO</b> of these beliefs about zoos does the writer mention in the text?
        </p>
    </legend>

    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">They can help children overcome their fears of wild animals.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">They can increase public awareness of environmental issues.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">They can provide employment for a range of professional
                people.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">They can generate income to support wildlife conservation
                projects.</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3] }}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">They can raise animals which can later be released into the
                wild.</span>
        </label>
    </div>
</fieldset>
