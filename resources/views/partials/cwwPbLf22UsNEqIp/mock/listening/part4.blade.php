@props(['part', 'id'])
<fieldset class="q-item">
    <p>
    <h3>Questions 31–33</h3>
    </p>
    <p>Complete the summary below</p>
    <p>Write <b>NO MORE THAN TWO WORDS</b> for each answer..</p>
</fieldset>
<div>
    If soil is healthy, it is a
    <span class="q-number-box">31</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" data-q="31" class="q-text" placeholder="">
        </span>
    </span>
    teeming with life such as
    worms, fungi and bacteria. If plants are grown in poor soil, they will lack
    <span class="q-number-box">32</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" data-q="32" class="q-text" placeholder="">
        </span>
    </span>
    and human health will suffer. Plants are nourished by
    organic matter,
    <span class="q-number-box">33</span>
    <span style="flex: 1;">
        <span class="q-question">
            <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" data-q="33" class="q-text" placeholder="">
        </span>
    </span>
    and other essential elements which
    are broken down by insects and other organisms in a synergistic
    relationship.
</div>

<fieldset class="q-item">
    <p>
    <h3>Questions 34-36</h3>
    </p>
    <p>Label the diagrams below</p>
    <p>Write <b>NO MORE THAN THREE WORDS</b> for each answer.</p>
</fieldset>

<div class="map-side-by-side">
    <div class="map-figure">
        <img src="{{ asset('own_assets/images/P02-3.png') }}" alt="Part Two - Process"
            style="max-width: 100%; height: auto;" />
    </div>

    <div class="map-questions">
        <ul>
            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="34">
                    <span class="q-number-box">34</span>
                    <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-13" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="35">
                    <span class="q-number-box">35</span>
                    <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-14" class="q-text" />
                </span>
            </li>

            <li style="margin-bottom: 10px">
                <span class="q-item" data-q="36">
                    <span class="q-number-box">36</span>
                    <input type="text" name="{{ $part['tipe'][1] }}-{{ $id }}-15" class="q-text" />
                </span>
            </li>
        </ul>
    </div>
</div>

<fieldset class="q-item">
    <h3>Questions 37-40</h3>
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>NO MORE THAN ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>
<ul>
    <h3><b>Problems :</b></h3>
    <li>
        Erosion
    </li>
    <li>
        <span class="q-number-box">37</span>
        <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-6" class="q-text" data-q="37"/>
        from various sources, including chemical fertilisers
    </li>
    <h3><b>Conventional farming methods:</b></h3>
    <li>
        monoculture
    </li>
    <li>
        synthetic fertiliser & chemicals used for
        <span class="q-number-box">38</span>
        <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-7" class="q-text" data-q="38"/>
    </li>
    <li>
        genetically modified seeds
    </li>
    <li>
        pesticide fungicide sprayed on crops after picking
    </li>
    <li>
        no need for documentation of
        <span class="q-number-box">39</span>
        <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-8" data-q="39" class="q-text" />
    </li>
    <h3><b>Organic farming methods:</b></h3>
    <li>
        crop rotation
    </li>
    <li>
        covering crops
    </li>
    <li>
        use of insects as natural
        <span class="q-number-box">40</span>
        <input type="text" name="{{ $part['tipe'][2] }}-{{ $id }}-9" data-q="40" class="q-text" />
    </li>
    <li>
        addition of manure & green waste
    </li>
</ul>
