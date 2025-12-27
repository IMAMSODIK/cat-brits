@props(['part', 'id'])

<fieldset class="q-item">
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>

<ul style="padding-left: 0; margin-bottom: 20px;">
    <li>
        <strong>The impact of digital technology on the Icelandic language</strong>
        <ul>
            <li>
                The Icelandic language has approximately
                <div class="q-item" data-q="1" style="display:inline-block;">
                    <span class="q-number-box">31</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text"
                        placeholder="">
                </div>
                speakers.
            </li>
            <li>
                has a
                <div class="q-item" data-q="2" style="display:inline-block;">
                    <span class="q-number-box">32</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-text"
                        placeholder="">
                </div>
                that is still growing
            </li>
            <li>has not changed a lot over the last thousand years</li>
            <li>
                has its own words for computer-based concepts, such as web browser and
                <div class="q-item" data-q="3" style="display:inline-block;">
                    <span class="q-number-box">33</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-text"
                        placeholder="">
                </div>
            </li>
        </ul>
    </li>

    <li>
        <strong>Young speakers</strong>
        <ul>
            <li>
                are big users of digital technology, such as
                <div class="q-item" data-q="4" style="display:inline-block;">
                    <span class="q-number-box">34</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-11" class="q-text"
                        placeholder="">
                </div>
            </li>
            <li>
                are becoming
                <div class="q-item" data-q="5" style="display:inline-block;">
                    <span class="q-number-box">35</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-12" class="q-text"
                        placeholder="">
                </div>
                very quickly
            </li>
            <li>
                are having discussions using only English while they are in the
                <div class="q-item" data-q="6" style="display:inline-block;">
                    <span class="q-number-box">36</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-13" class="q-text"
                        placeholder="">
                </div>
                at school
            </li>
            <li>
                are better able to identify the content of a
                <div class="q-item" data-q="7" style="display:inline-block;">
                    <span class="q-number-box">37</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-14" class="q-text"
                        placeholder="">
                </div>
                in English than Icelandic
            </li>
        </ul>
    </li>

    <li>
        <strong>Technology and internet companies</strong>
        <ul>
            <li>
                write very little in Icelandic because of the small number of speakers and because of how
                complicated its
                <div class="q-item" data-q="8" style="display:inline-block;">
                    <span class="q-number-box">38</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-15" class="q-text"
                        placeholder="">
                </div>
                is
            </li>
        </ul>
    </li>

    <li>
        <strong>The Icelandic government</strong>
        <ul>
            <li>has set up a fund to support the production of more digital content in the language</li>
            <li>believes that Icelandic has a secure future</li>
            <li>
                is worried that young Icelanders may lose their
                <div class="q-item" data-q="9" style="display:inline-block;">
                    <span class="q-number-box">39</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-16" class="q-text"
                        placeholder="">
                </div>
                as Icelanders
            </li>
            <li>
                is worried about the consequences of children not being
                <div class="q-item" data-q="10" style="display:inline-block;">
                    <span class="q-number-box">40</span>
                    <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-17" class="q-text"
                        placeholder="">
                </div>
                in either Icelandic or English
            </li>
        </ul>
    </li>
</ul>
