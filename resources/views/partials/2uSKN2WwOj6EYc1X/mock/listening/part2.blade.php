@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 11-17</h3>
    </p>
    <p>Label the map below.</p>
    <p>Write <b>NO MORE THAN THREE WORDS</b> for each answer.</p>
</fieldset>

<div class="map-side-by-side">
    <div class="map-figure">
        <p><b>Daisy day care centre</b></p>
        <img src="{{ asset('own_assets/images/p01-1.png') }}" alt="Daisy day care centre Map"
            style="max-width: 100%; height: auto;" />
    </div>

    <div class="map-questions">
        <ul>
            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="11">
                    <span class="q-number-box">11</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="12">
                    <span class="q-number-box">12</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="13">
                    <span class="q-number-box">13</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="14">
                    <span class="q-number-box">14</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="15">
                    <span class="q-number-box">15</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="16">
                    <span class="q-number-box">16</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="17">
                    <span class="q-number-box">17</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text" />
                </span>
            </li>
        </ul>
    </div>
</div>

<fieldset class="q-item">
    <h3>Questions 18-20</h3>
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>NO MORE THAN ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>


<fieldset class="q-item" data-q="18">
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
<fieldset class="q-item" data-q="19">
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
<fieldset class="q-item" data-q="20">
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
