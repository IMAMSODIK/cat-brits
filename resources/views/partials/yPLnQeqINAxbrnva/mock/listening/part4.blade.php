@props(['part', 'id'])

<fieldset class="q-item">
    <p class="lead"><i>Complete The Note Below</i></p>
    <p>Write <strong>ONE WORD ONLY</strong> for each answer.</p>
</fieldset>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
    <tr>
        <th colspan="2">Victor Hugo</th>
    </tr>

    <!-- Les Misérables -->
    <tr>
        <td colspan="2"><b>His novel, Les Misérables</b></td>
    </tr>
    <tr>
        <td colspan="2">
            <ul style="margin:0; padding-left:18px;">
                <li>It has been adapted for theatre and cinema.</li>
                <li>
                    We know more about its overall
                    <div class="q-item" data-q="31" style="display:inline-block;">
                        <span class="q-number-box">31</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-11" class="q-text" placeholder="">
                    </div>
                    than about its author.
                </li>
            </ul>
        </td>
    </tr>

    <!-- Early career -->
    <tr>
        <td colspan="2"><b>His early career</b></td>
    </tr>
    <tr>
        <td colspan="2">
            <ul style="margin:0; padding-left:18px;">
                <li>In Paris, his career was successful and he led the Romantic movement.</li>
                <li>
                    He spoke publicly about social issues, such as
                    <div class="q-item" data-q="32" style="display:inline-block;">
                        <span class="q-number-box">32</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-12" class="q-text" placeholder="">
                    </div>
                    and education.
                </li>
                <li>Napoleon III disliked his views and exiled him.</li>
            </ul>
        </td>
    </tr>

    <!-- Exile -->
    <tr>
        <td colspan="2"><b>His exile from France</b></td>
    </tr>
    <tr>
        <td colspan="2">
            <ul style="margin:0; padding-left:18px;">
                <li>
                    Victor Hugo had to live elsewhere in
                    <div class="q-item" data-q="33" style="display:inline-block;">
                        <span class="q-number-box">33</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-13" class="q-text" placeholder="">
                    </div>.
                </li>
                <li>
                    He used his income from the sale of some
                    <div class="q-item" data-q="34" style="display:inline-block;">
                        <span class="q-number-box">34</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-14" class="q-text" placeholder="">
                    </div>
                    he had written to buy a house on Guernsey.
                </li>
            </ul>
        </td>
    </tr>

    <!-- House on Guernsey -->
    <tr>
        <td colspan="2"><b>His house on Guernsey</b></td>
    </tr>
    <tr>
        <td colspan="2">
            <ul style="margin:0; padding-left:18px;">
                <li>Victor Hugo lived in this house until the end of the Empire in France.</li>
                <li>
                    The ground floor contains portraits,
                    <div class="q-item" data-q="35" style="display:inline-block;">
                        <span class="q-number-box">35</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-15" class="q-text" placeholder="">
                    </div>
                    and tapestries that he valued.
                </li>
                <li>
                    He bought cheap
                    <div class="q-item" data-q="36" style="display:inline-block;">
                        <span class="q-number-box">36</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-16" class="q-text" placeholder="">
                    </div>
                    made of wood and turned this into beautiful wall carvings.
                </li>
                <li>
                    The first floor consists of furnished areas with wallpaper and
                    <div class="q-item" data-q="37" style="display:inline-block;">
                        <span class="q-number-box">37</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-17" class="q-text" placeholder="">
                    </div>
                    that have a Chinese design.
                </li>
                <li>The library still contains many of his favourite books.</li>
                <li>
                    He wrote in a room at the top of the house that had a view of the
                    <div class="q-item" data-q="38" style="display:inline-block;">
                        <span class="q-number-box">38</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-18" class="q-text" placeholder="">
                    </div>.
                </li>
                <li>
                    He entertained other writers as well as poor
                    <div class="q-item" data-q="39" style="display:inline-block;">
                        <span class="q-number-box">39</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-19" class="q-text" placeholder="">
                    </div>
                    in his house.
                </li>
                <li>
                    Victor Hugo’s
                    <div class="q-item" data-q="40" style="display:inline-block;">
                        <span class="q-number-box">40</span>
                        <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-20" class="q-text" placeholder="">
                    </div>
                    gave ownership of the house to the city of Paris in 1927.
                </li>
            </ul>
        </td>
    </tr>
</table>