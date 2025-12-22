@props(['part', 'id'])
<fieldset class="q-item">
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2">Hinchingbrooke Country Park</th>
    </tr>

    <tr>
        <td><b>The Park</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Area:
            <div class="q-item" data-q="1">
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-1" class="q-text" />
                hectares
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Habitats: wetland, grassland and woodland
        </td>
    </tr>

    <tr>
        <td>
            Wetland: lakes, ponds and a
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-2" class="q-text" />
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Wildlife includes birds, insects and animals
        </td>
    </tr>

    <tr>
        <td><b>Subjects studied in educational visits include</b></td>
    </tr>

    <tr>
        <td>
            Science: Children look at
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-3" class="q-text" />
            </div>
            about plants, etc.
        </td>
    </tr>

    <tr>
        <td>
            Geography: includes learning to use a
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-4" class="q-text" />
            </div>
            and compass
        </td>
    </tr>

    <tr>
        <td>
            History: changes in land use
        </td>
    </tr>

    <tr>
        <td>
            Leisure and tourism: mostly concentrates on the {{ $part['tipe'][0]}}-{{ $id }}’s
            <div class="q-item" data-q="5" style="display:inline-block;">
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-5" class="q-text" />
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Music: Children make
            <div class="q-item" data-q="6" style="display:inline-block;">
                <span class="q-number-box">6</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-6" class="q-text" />
            </div>
            with natural materials, and experiment with rhythm and speed.
        </td>
    </tr>

    <tr>
        <td><b>Benefits of outdoor educational visits</b></td>
    </tr>

    <tr>
        <td>
            They give children a feeling of
            <div class="q-item" data-q="7" style="display:inline-block;">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-7" class="q-text" />
            </div>
            that they may not have elsewhere.
        </td>
    </tr>

    <tr>
        <td>
            Children learn new
            <div class="q-item" data-q="8" style="display:inline-block;">
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-8" class="q-text" />
            </div>
            and gain self-confidence.
        </td>
    </tr>

    <tr>
        <td><b>Practical issues</b></td>
    </tr>

    <tr>
        <td>
            Cost per child: £
            <div class="q-item" data-q="9" style="display:inline-block;">
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-9" class="q-text" />
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Adults, such as
            <div class="q-item" data-q="10" style="display:inline-block;">
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][0]}}-{{ $id }}-10" class="q-text" />
            </div>
            , free
        </td>
    </tr>
</table>