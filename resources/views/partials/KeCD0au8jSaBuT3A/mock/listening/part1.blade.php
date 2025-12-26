@props(['part', 'id'])

<fieldset class="q-item">
    <p class="lead"><i>Complete the notes below</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2">Transport survey</th>
    </tr>
    <tr>
        <td><i>Name</i></td>
    </tr>
    <tr>
        <td>Sadie Jones</td>
    </tr>

    <tr>
        <td><b>Year of birth 1991</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            <b>Postcode</b>
            <div class="q-item" data-q="1" style="display:inline-block;">
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td><b>Travelling by bus</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Date of bus journey:
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Reason for trip: shopping and visit to the
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Travelled by bus because cost of
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" placeholder="">
            </div>
            too high
        </td>
    </tr>

    <tr>
        <td>
            Got on bus at
            <div class="q-item" data-q="5" style="display:inline-block;">
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" placeholder="">
            </div>
            Street
        </td>
    </tr>

    <tr>
        <td><b>Complaints about bus service</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            bus today was
            <div class="q-item" data-q="6" style="display:inline-block;">
                <span class="q-number-box">6</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            frequency of buses in the
            <div class="q-item" data-q="7" style="display:inline-block;">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td><b>Travelling by car</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Goes to the
            <div class="q-item" data-q="8" style="display:inline-block;">
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text"
                    placeholder="">
            </div>
            by car
        </td>
    </tr>

    <tr>
        <td><b>Travelling by bicycle</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Dislikes travelling by bike in the city centre because of the
            <div class="q-item" data-q="9" style="display:inline-block;">
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Doesn’t own a bike because of a lack of
            <div class="q-item" data-q="10" style="display:inline-block;">
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>
</table>
