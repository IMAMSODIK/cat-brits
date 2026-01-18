@props(['part', 'id'])

<fieldset class="q-item">
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
</fieldset>

<ul style="list-style: none; padding-left: 0; margin-bottom: 20px;">
    <li>
        <strong>Opportunities for voluntary work in Southoe village</strong>
        <ul>
            <b>Library</b>
            <li>
                Help with
                <div class="q-item" data-q="1" style="display:inline-block;">
                    <span class="q-number-box">1</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" class="q-text"
                        placeholder="">
                </div>
                books (times to be arranged)
            </li>
            <li>
                Help needed to keep
                <div class="q-item" data-q="2" style="display:inline-block;">
                    <span class="q-number-box">2</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" class="q-text"
                        placeholder="">
                </div>
                of books up to date
            </li>
            <li>
                Library is in the
                <div class="q-item" data-q="3" style="display:inline-block;">
                    <span class="q-number-box">3</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" class="q-text"
                        placeholder="">
                </div>
                Room in the village hall
            </li>
            <b>Lunch club</b>
            <li>
                Help by providing
                <div class="q-item" data-q="4" style="display:inline-block;">
                    <span class="q-number-box">4</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" class="q-text"
                        placeholder="">
                </div>
            </li>
            <li>
                Help with hobbies such as
                <div class="q-item" data-q="5" style="display:inline-block;">
                    <span class="q-number-box">5</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" class="q-text"
                        placeholder="">
                </div>
            </li>
            <b>Help for individuals needed next week</b>
            <li>
                Taking Mrs Carroll to
                <div class="q-item" data-q="6" style="display:inline-block;">
                    <span class="q-number-box">6</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" class="q-text"
                        placeholder="">
                </div>
            </li>
            <li>
                Work in the
                <div class="q-item" data-q="7" style="display:inline-block;">
                    <span class="q-number-box">7</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" class="q-text"
                        placeholder="">
                </div>
                at Mr Selsbury’s house
            </li>
        </ul>
    </li>
</ul>

<fieldset class="q-item">
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
</fieldset>
<div style="overflow-x:auto;">
    <table border="1" cellpadding="8" cellspacing="0"
        style="border-collapse: collapse; width: 100%; text-align: justify;">
        <tr style="text-align: center;">
            <th colspan="4">Village social events</th>
        </tr>
        <tr>
            <th>Date</th>
            <th>Event</th>
            <th>Location</th>
            <th>Help needed</th>
        </tr>
        <tr>
            <td>19 Oct</td>
            <td>
                <div class="q-item" data-q="8" style="display:inline-block;">
                    <span class="q-number-box">8</span>
                    <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" class="q-text"
                        placeholder="">
                </div>
            </td>
            <td>Village hall</td>
            <td>providing refreshments</td>
        </tr>
        <tr>
            <td>18 Nov</td>
            <td>dance</td>
            <td>Village hall</td>
            <td>
                checking
                <div class="q-item" data-q="9" style="display:inline-block;">
                    <span class="q-number-box">9</span>
                    <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" class="q-text"
                        placeholder="">
                </div>
            </td>
        </tr>
        <tr>
            <td>31 Dec</td>
            <td>New Year’s Eve party</td>
            <td>Mountfort Hotel</td>
            <td>
                designing the
                <div class="q-item" data-q="10" style="display:inline-block;">
                    <span class="q-number-box">10</span>
                    <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" class="q-text"
                        placeholder="">
                </div>
            </td>
        </tr>
    </table>
</div>
