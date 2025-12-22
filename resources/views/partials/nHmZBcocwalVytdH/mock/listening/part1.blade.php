@props(['part', 'id'])
<fieldset class="q-item">
    <p>Questions 1-10</p>
    <p>Complete the notes below.</p>
    <p><i>Write <b>ONE WORD</b> for each answer.</i></p>
</fieldset>
<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2">TOTAL HEALTH CLINIC<br>PATIENT DETAILS</th>
    </tr>
    <tr>
        <td colspan="2"><b>Personal information</b></td>
    </tr>
    <tr>
        <td colspan="2"><i>Example</i></td>
    </tr>
    <tr>
        <td>Name</td>
        <td>Julie Anne <i>......Garcia.....</i></td>
    </tr>
    <tr>
        <td>Contact phone</td>
        <td>
            <span class="q-number-box">1</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text">
        </td>
    </tr>
    <tr>
        <td>Date of birth</td>
        <td>
            <span class="q-number-box">2</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text">
            , 1992
        </td>
    </tr>
    <tr>
        <td>Occupation</td>
        <td>
            works as a
            <span class="q-number-box">3</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text">
        </td>
    </tr>
    <tr>
        <td>Insurance company</td>
        <td>
            <span class="q-number-box">4</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text">
            Life Insurance
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>Details of the problem</b></td>
    </tr>
    <tr>
        <td>Type of problem</td>
        <td>
            pain in her left
            <span class="q-number-box">5</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text">
        </td>
    </tr>
    <tr>
        <td>When it began</td>
        <td>
            <span class="q-number-box">6</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text">
            ago
        </td>
    </tr>
    <tr>
        <td>Action already taken</td>
        <td>has taken painkillers and applied ice</td>
    </tr>
    <tr>
        <td colspan="2"><b>Other information</b></td>
    </tr>
    <tr>
        <td>Sports played</td>
        <td>
            belongs to a
            <span class="q-number-box">7</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text">
            club
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            goes
            <span class="q-number-box">8</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text">
            regularly
        </td>
    </tr>
    <tr>
        <td>Medical history</td>
        <td>
            injured her
            <span class="q-number-box">9</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-text">
            last year
        </td>
    </tr>
    <tr>
        <td></td>
        <td>no allergies</td>
    </tr>
    <tr>
        <td></td>
        <td>
            no regular medication apart from
            <span class="q-number-box">10</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-text">
        </td>
    </tr>
</table>
