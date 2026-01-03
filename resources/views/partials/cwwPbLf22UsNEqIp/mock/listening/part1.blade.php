@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>NO MORE THAN ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>
<table border="1" cellpadding="6" cellspacing="0" style="border-collapse: collapse; width: 100%; text-align: justify;">
    <tr>
        <th colspan="2" style="text-align: center"><b>Second-hand Bedroom Furniture for Sale</b></th>
    </tr>
    <tr>
        <td>Construction</td>
        <td>wood</td>
    </tr>
    <tr>
        <td>Colour</td>
        <td>
            <div class="q-item" data-q="1" style="display:inline-block;">
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
            </div>
        </td>
    </tr>
    <tr>
        <td>Drawers</td>
        <td>two (in each table), handles made of
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" placeholder="">
            </div>
        </td>
    </tr>
    <tr>
        <td>Height</td>
        <td>
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
            </div> cm
        </td>
    </tr>
    <tr>
        <td>Condition</td>
        <td>
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" placeholder="">
            </div>
        </td>
    </tr>
    <tr>
        <td>Price</td>
        <td>
            <div class="q-item" data-q="5" style="display:inline-block;">
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" placeholder="">
            </div> (for both)
        </td>
    </tr>
    <tr>
        <th colspan="2" style="text-align: center">Dressing Table</th>
    </tr>
    <tr>
        <td>Drawers</td>
        <td>five (two are <div class="q-item" data-q="6" style="display:inline-block;">
                <span class="q-number-box">6</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text"
                    placeholder="">
            </div>)</td>
    </tr>
    <tr>
        <td>Width</td>
        <td>
            <div class="q-item" data-q="7" style="display:inline-block;">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>
    <tr>
        <td>Mirrors</td>
        <td>three: one large, two small (all <div class="q-item" data-q="8" style="display:inline-block;">
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text"
                    placeholder="">
            </div>)</td>
    </tr>
    <tr>
        <td>Condition</td>
        <td>good</td>
    </tr>
    <tr>
        <td>Price</td>
        <td>
            <div class="q-item" data-q="9" style="display:inline-block;">
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>
    <tr>
        <th colspan="2" style="text-align: center"><b>Seller’s details</b></th>
    </tr>
    <tr>
        <td>Name</td>
        <td>Carolyn Kline</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>19 <div class="q-item" data-q="10" style="display:inline-block;">
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-text"
                    placeholder="">
            </div>
        </td>
    </tr>
</table>
