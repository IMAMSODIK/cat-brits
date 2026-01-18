@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 31-34</h3>
    </p>
    <p>Label the diagrams below</p>
    <p>Write <b>NO MORE THAN THREE WORDS</b> for each answer.</p>
    <div class="d-flex">
        <img src="{{ asset('own_assets/images/p01-2.jpeg') }}" alt="Farley House Map"
            style="max-width: 100%; height: auto;" />
    </div>

</fieldset>

<ul>
    <li style="margin-bottom: 10px">
        <span class="q-item" data-q="31">
            <span class="q-number-box">31</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" class="q-text" />
        </span>
    </li>

    <li style="margin-bottom: 10px">
        <span class="q-item" data-q="32">
            <span class="q-number-box">32</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" class="q-text" />
        </span>
    </li>

    <li style="margin-bottom: 10px">
        <span class="q-item" data-q="33">
            <span class="q-number-box">33</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" class="q-text" />
        </span>
    </li>

    <li style="margin-bottom: 10px">
        <span class="q-item" data-q="34">
            <span class="q-number-box">34</span>
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-11" class="q-text" />
        </span>
    </li>
</ul>

<fieldset class="q-item">
    <p>
    <h3>Questions 35–40</h3>
    </p>
    <p>Complete the summary below</p>
    <p>Write <b>NO MORE THAN TWO WORDS</b> for each answer..</p>
</fieldset>

<p>
<div>
    Hearing aids
    <span class="q-number-box">35</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-1" data-q="35" class="q-text" placeholder="">
        </span>
    </span>
    normal sounds, so they are good for mild hearing loss but
    not for severe loss. Cochlear implants help some people a lot, but do not work so well for
    everyone. The brain gets different
    <span class="q-number-box">36</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-2" data-q="36" class="q-text" placeholder="">
        </span>
    </span>
    from an implant, so users must relearn
    how to hear. Cochlear implants are not a cure. Users need ongoing training in
    <span class="q-number-box">37</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-3" data-q="37" class="q-text" placeholder="">
        </span>
    </span>
    lip-reading and sign language. The surgery can damage nerves. It may
    also destroy any
    <span class="q-number-box">38</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-4" data-q="38" class="q-text" placeholder="">
        </span>
    </span>
    ; in such cases, those users cannot go back to using a
    hearing aid. The most important factor for selecting users is the
    <span class="q-number-box">39</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-5" data-q="39" class="q-text" placeholder="">
        </span>
    </span>
    of their
    deafness, and also age and previous speaking ability. Finally, the condition of the nerve
    cells in the cochlea is a factor, because
    <span class="q-number-box">40</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-6" data-q="40" class="q-text" placeholder="">
        </span>
    </span>
    can damage these cells.
</div>
</p>
