@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><i>Complete the notes below</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2">Flanders Conference Hotel</th>
    </tr>
    <tr>
        <td><i>Example</i></td>
    </tr>
    <tr>
        <td>Customer Services Manager: <i>…………Angela……….</i>.</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><b>Date available</b></td>
        <td></td>
    </tr>
    <tr>
        <td>weekend beginning February 4th</td>
    </tr>
    <tr>
        <td><b>Conference facilities</b></td>
        <td></td>
    </tr>
    <tr>
        <td>
            the
            <div class="q-item" data-q="1" style="display:inline-block;">
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
            </div>
            room for talks
            (projector and
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" placeholder="">
            </div>
            available)
        </td>
    </tr>

    <tr>
        <td>
            area for coffee and an
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            free
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" placeholder="">
            </div>
            throughout
        </td>
    </tr>

    <tr>
        <td>
            a standard buffet lunch costs $
            <div class="q-item" data-q="5" style="display:inline-block;">
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" placeholder="">
            </div>
            per head
        </td>
    </tr>

    <tr>
        <td><b>Accommodation</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Rooms will cost $
            <div class="q-item" data-q="6" style="display:inline-block;">
                <span class="q-number-box">6</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text"
                    placeholder="">
            </div>
            including breakfast.
        </td>
    </tr>

    <tr>
        <td><b>Other facilities</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            The hotel also has a spa and rooftop
            <div class="q-item" data-q="7" style="display:inline-block;">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            There’s a free shuttle service to the
            <div class="q-item" data-q="8" style="display:inline-block;">
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td><b>Location</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Wilby Street (quite near the
            <div class="q-item" data-q="9" style="display:inline-block;">
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-text"
                    placeholder="">
            </div>
            )
        </td>
    </tr>

    <tr>
        <td>
            near to restaurants and many
            <div class="q-item" data-q="10" style="display:inline-block;">
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>
</table>
