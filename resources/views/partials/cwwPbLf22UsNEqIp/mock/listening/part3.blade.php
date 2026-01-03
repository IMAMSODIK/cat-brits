@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 21-25</h3>
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>NO MORE THAN THREE WORDS AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<ul>
    <li>
        Write an
        <span class="q-item" data-q="1">
            <span class="q-number-box">21</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" />
        </span>
        - keep it brief.
    </li>
    <li>
        List relevant<span class="q-item" data-q="2">
            <span class="q-number-box">22</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" />
        </span>
    </li>
    <li>
        Have two academic advisors read over your<span class="q-item" data-q="3">
            <span class="q-number-box">23</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" />
        </span>
    </li>
    <li>
        Choose the journal you want to submit to.
    </li>
    <li>
        Apply the journal’s<span class="q-item" data-q="4">
            <span class="q-number-box">24</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" />
        </span>to your article.
    </li>
    <li>
        Sign the<span class="q-item" data-q="5">
            <span class="q-number-box">25</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" />
        </span>
    </li>
</ul>
<fieldset class="q-item">
    <p>
    <h3>Questions 26–30</h3>
    </p>
    <p>Label the diagrams below</p>
    <p>Write <b>NO MORE THAN THREE WORDS</b> for each answer.</p>
    <div class="d-flex">
        <img src="{{ asset('own_assets/images/P02-2.png') }}" alt="Part Two - Process"
            style="max-width: 100%; height: auto;" />
    </div>

</fieldset>
<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="1">
            <span class="q-number-box">26</span>
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-8" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="2">
            <span class="q-number-box">27</span>
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-9" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="3">
            <span class="q-number-box">28</span>
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-10" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="4">
            <span class="q-number-box">29</span>
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-11" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="5">
            <span class="q-number-box">30</span>
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-12" class="q-text" />
        </span>
    </legend>
</fieldset>
