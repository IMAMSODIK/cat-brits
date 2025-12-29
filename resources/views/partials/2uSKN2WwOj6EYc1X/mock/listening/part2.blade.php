@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 11-17</h3>
    </p>
    <p>Label the map below.</p>
    <p>Write <b>NO MORE THAN THREE WORDS</b> for each answer.</p>
    <p><b>Daisy day care centre</b></p>
    <div class="d-flex">
        <img src="{{ asset('own_assets/images/p01-1.png') }}" alt="Farley House Map"
            style="max-width: 100%; height: auto;" />
    </div>

</fieldset>

<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="1">
            <span class="q-number-box">11</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" />
        </span>
    </legend>
</fieldset>


<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="2">
            <span class="q-number-box">12</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="3">
            <span class="q-number-box">13</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="4">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="4">
            <span class="q-number-box">14</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="5">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="5">
            <span class="q-number-box">15</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="6">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="6">
            <span class="q-number-box">16</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="7">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-item" data-q="7">
            <span class="q-number-box">17</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text" />
        </span>
    </legend>
</fieldset>
<fieldset class="q-item">
    <h3>Questions 18-20</h3>
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>NO MORE THAN ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>


<fieldset class="q-item" data-q="1">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">18</span>
        <span style="flex: 1;">
            The official ratio of adults to children who are two or older is one adult to
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-11" class="q-text" />
            </span>
            children.
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="2">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">19</span>
        <span style="flex: 1;">
            Parents who are often late may be asked to
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-12" class="q-text" />
            </span>
        </span>
    </legend>
</fieldset>
<fieldset class="q-item" data-q="3">
    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
        <span class="q-number">20</span>
        <span style="flex: 1;">
            The quickest waiting time for a place in the Day Care is
            <span class="q-question">
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-13" class="q-text" />
            </span>
        </span>
    </legend>
</fieldset>
