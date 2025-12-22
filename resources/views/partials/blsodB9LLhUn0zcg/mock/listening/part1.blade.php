@props(['part', 'id'])
{{-- part 1 --}}
<p>Questions 1-10</p>
<fieldset class="q-item">
    <p class="lead"><i>Complete The Note Below</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2">Children’s Engineering Workshops</th>
    </tr>

    <tr>
        <td><b>Tiny Engineers (ages 4–5)</b></td>
        <td></td>
    </tr>

    <tr>
        <td><b>Activities:</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            <div class="q-item" data-q="1">
                Create a cover for an
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
                so they can drop it from a height without breaking it.
            </div>

            <div class="q-item" data-q="2" style="margin-top:6px;">
                Take part in a competition to build the tallest
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" placeholder="">
            </div>

            <div class="q-item" data-q="3" style="margin-top:6px;">
                Make a
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
                powered by a balloon.
            </div>
        </td>
    </tr>

    <tr>
        <td><b>Junior Engineers (ages 6–8)</b></td>
        <td></td>
    </tr>

    <tr>
        <td><b>Activities:</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            <div class="q-item" data-q="4">
                Build model cars, trucks and
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" placeholder="">
                and learn how to program them so they can move.
            </div>

            <div class="q-item" data-q="5" style="margin-top:6px;">
                Take part in a competition to build the longest
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" placeholder="">
                using card and wood.
            </div>

            <div class="q-item" data-q="6" style="margin-top:6px;">
                Create a short
                <span class="q-number-box">6</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text"
                    placeholder="">
                with special software.
            </div>

            <div class="q-item" data-q="7" style="margin-top:6px;">
                Build,
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text"
                    placeholder="">
                and program a humanoid robot.
            </div>
        </td>
    </tr>

    <tr>
        <td><b>Cost:</b></td>
        <td></td>
    </tr>

    <tr>
        <td>Cost for a five-week block: £50</td>
    </tr>

    <tr>
        <td><b>Schedule:</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Held on
            <span class="q-number-box">8</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text" placeholder="">
            from 10 am to 11 am
        </td>
    </tr>

    <tr>
        <td><b>Location:</b></td>
        <td></td>
    </tr>

    <tr>
        <td>
            Building 10A,
            <span class="q-number-box">9</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-text" placeholder="">
            Industrial Estate, Grasford
        </td>
    </tr>

    <tr>
        <td>
            Plenty of
            <span class="q-number-box">10</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-text" placeholder="">
            is available.
        </td>
    </tr>
</table>
