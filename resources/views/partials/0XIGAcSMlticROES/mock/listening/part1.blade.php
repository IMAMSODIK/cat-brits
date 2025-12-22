@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 1-6</h3>
    <p class="lead"><i>Complete The Note Below</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<div class="q-item" data-q="1">
    <p><b>Coordinator:</b>
        <span class="q-number-box">1</span>
        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text" placeholder="">
    </p>
</div>

<div class="q-item" data-q="2">
    <p><b>Level:</b>
        <span class="q-number-box">2</span>
        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text" placeholder="">
    </p>
</div>

<div class="q-item" data-q="3">
    <p><b>Place:</b> the
        <span class="q-number-box">3</span>
        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text" placeholder="">
    </p>
</div>

<div class="q-item" data-q="4">
    <p>
        <span class="q-number-box">4</span>
        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text" placeholder="">
        Street
    </p>
</div>
<p>First floor, Room T347</p>


<div class="q-item" data-q="5">
    <p><b>Time:</b> Thursday morning at
        <span class="q-number-box">5</span>
        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text" placeholder="">
    </p>
</div>

<div class="q-item" data-q="6">
    <p><b>Recommended website:</b> ‘The perfect
        <span class="q-number-box">6</span>
        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text" placeholder="">
        ’
    </p>
</div>

<fieldset class="q-item">
    <h3>Questions 7-10</h3>
    <p class="lead"><i>Complete The Note Below</i></p>
    <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th>Time</th>
        <th>Activity</th>
        <th>Notes</th>
    </tr>

    <tr>
        <td>5 minutes</td>
        <td>tuning guitars</td>
        <td>
            using an app or by
            <div class="q-item" data-q="1" style="display:inline-block;">
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text" placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>10 minutes</td>
        <td>strumming chords using our thumbs</td>
        <td>
            keeping time while the teacher is
            <div class="q-item" data-q="2" style="display:inline-block;">
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text" placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>15 minutes</td>
        <td>playing songs</td>
        <td>
            often listening to a
            <div class="q-item" data-q="3" style="display:inline-block;">
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text" placeholder="">
            </div>
            of a song
        </td>
    </tr>

    <tr>
        <td>10 minutes</td>
        <td>playing single notes and simple tunes</td>
        <td>
            playing together, then
            <div class="q-item" data-q="4" style="display:inline-block;">
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" class="q-text" placeholder="">
            </div>
        </td>
    </tr>

    <tr>
        <td>5 minutes</td>
        <td>noting things to practise at home</td>
        <td></td>
    </tr>
</table>