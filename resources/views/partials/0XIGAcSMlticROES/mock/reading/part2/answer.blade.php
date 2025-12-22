@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><b>Questions 14-18</b></p>
    <p class="lead">The Reading Passage has six paragraphs, <b>A-F</b>.</p>
    <p>Which paragraph contains the following information?</p>
    <p class="lead">Write the correct letter, <b>A-F</b>, in boxes on your answer
        sheet <b>NB</b> You may use any letter more than once.</p>
</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">14</span>
        <span style="flex: 1;">
            reference to two chemical compounds which impact on performance
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-1" class="q-dropdown">
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

<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">15</span>
        <span style="flex: 1;">
            examples of strategies for minimising the effects of stress
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-2" class="q-dropdown">
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

<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">16</span>
        <span style="flex: 1;">
            how a sportsperson accounted for their own experience of stress
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-3" class="q-dropdown">
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

<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">17</span>
        <span style="flex: 1;">
            study results indicating links between stress responses and performance
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-4" class="q-dropdown">
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

<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            mention of people who can influence how athletes perceive their stress responses
            <span class="q-question">
                <select name="{{ $part['tipe'][0]}}-{{ $id }}-5" class="q-dropdown">
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
    <h3>Questions 19-22</h3>
    <p class="lead">Complete the summary below.</p>
    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
    <p><i>Write your answers in boxes on your answer sheet.</i></p>
    <h3>Performance stress in athletes</h3>

    <ul>
        <li>
            Performance stress involves many demands on the athlete, for example, coping with the
            possible risk of
            <span class="q-number">19</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-1" class="q-text" placeholder="">
                </span>
            </span>
        </li>
        <li>
            Cortisol can cause tennis players to produce fewer good
            <span class="q-number">20</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-2" class="q-text" placeholder="">
                </span>
            </span>
        </li>
        <li>
            Psychologists can help athletes to view their physiological responses as the effect of a
            positive feeling such as
            <span class="q-number">21</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-3" class="q-text" placeholder="">
                </span>
            </span>
        </li>
        <li>
            <span class="q-number">22</span>
            <span style="flex: 1;">
                <span class="q-question">
                    <input type="text" name="{{ $part['tipe'][1]}}-{{ $id }}-4" class="q-text" placeholder="">
                </span>
            </span>
            is an example of a psychological technique which can reduce an athlete’s stress responses.
        </li>
    </ul>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 23-24</b></p>
    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
    <p><span class="q-number-box">23</span><span class="q-number-box">24</span> Which
        <b>TWO</b> facts about Emma Raducanu’s withdrawal from the Wimbledon tournament are mentioned in
        the text?
    </p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-1[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the stage at which she dropped out of the tournament</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-1[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">symptoms of her performance stress at the tournament</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-1[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">measures which she had taken to manage her stress levels</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-1[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">aspects of the Wimbledon tournament which increased her stress
                levels</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][2]}}-{{ $id }}-1[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">reactions to her social media posts about her experience at
                Wimbledon</span>
        </label>
    </div>
</fieldset>

<fieldset class="q-item">
    <p class="lead"><b>Questions 25-26</b></p>
    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
    <p><span class="q-number-box">25</span><span class="q-number-box">26</span> Which
        <b>TWO</b> facts about anxiety are mentioned in Paragraph E of the text?
    </p>
</fieldset>

<fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
    <div class="q-options" role="group" aria-label="Question 1 options">
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3]}}-{{ $id }}-2[]" value="A" />
            <span class="opt-code">A</span>
            <span class="opt-label">the factors which determine how severe it may be</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3]}}-{{ $id }}-2[]" value="B" />
            <span class="opt-code">B</span>
            <span class="opt-label">how long it takes for its effects to become apparent</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3]}}-{{ $id }}-2[]" value="C" />
            <span class="opt-code">C</span>
            <span class="opt-label">which of its symptoms is most frequently encountered</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3]}}-{{ $id }}-2[]" value="D" />
            <span class="opt-code">D</span>
            <span class="opt-label">the types of athletes who are most likely to suffer from it</span>
        </label>
        <label class="q-option">
            <input type="checkbox" name="{{ $part['tipe'][3]}}-{{ $id }}-2[]" value="E" />
            <span class="opt-code">E</span>
            <span class="opt-label">the harm that can result if athletes experience it too often</span>
        </label>
    </div>
</fieldset>