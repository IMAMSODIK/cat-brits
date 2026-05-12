@props(['part', 'id'])
<fieldset class="q-item">
    <h3>Questions 1-10</h3>
    <p class="lead"><i>Complete the notes below.</i></p>
    <p>Write <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</p>
</fieldset>
<fieldset class="q-item">
    <p><b>JUNIOR CYCLE CAMP</b></p>
    <p>The course focuses on skills and safety</p>
    <ul>
        <li>Charlie would be placed in Level 5.</li>
        <li>
            <div class="q-list" data-q="1">
                First of all, children at this level are taken to practise in a
                <span class="q-number-box">1</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-1" data-q="1" class="q-text" placeholder="">
            </div>
        </li>
    </ul>
    <b>Instructors</b>
    <ul>
        <li>
            <div class="q-list" data-q="2">
                Instructors wear
                <span class="q-number-box">2</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-2" data-q="2" class="q-text" placeholder="">
                shirts.
            </div>
        </li>
        <li>
            <div class="q-list" data-q="3">
                A
                <span class="q-number-box">3</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-3" data-q="3" class="q-text" placeholder="">
                is required and training is given.
            </div>
        </li>
    </ul>
    <b>Classes</b>
    <ul>
        <li>The size of the classes is limited.</li>
        <li>
            <div class="q-list" data-q="4">
                There are quiet times during the morning for a
                <span class="q-number-box">4</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-4" data-q="4" class="q-text" placeholder="">
                or a game.
            </div>
        </li>
        <li>
            <div class="q-list" data-q="5">
                Classes are held even if there is
                <span class="q-number-box">5</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-5" data-q="5" class="q-text" placeholder="">
                .
            </div>
        </li>
    </ul>
    <b>What to bring</b>
    <ul>
        <li>a change of clothing</li>
        <li>
            <div class="q-list" data-q="6">
                a
                <span class="q-number-box">6</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-6" data-q="6" class="q-text"
                    placeholder="">
            </div>
        </li>
        <li>shoes (not sandals)</li>
        <li>
            <div class="q-list" data-q="7">
                Charlie’s
                <span class="q-number-box">7</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-7" data-q="7" class="q-text"
                    placeholder="">
            </div>
        </li>
    </ul>
    <b>Day 1</b>
    <ul>
        <li>Charlie should arrive at 9.20 am on the first day.</li>
        <li>
            <div class="q-list" data-q="8">
                Before the class, his
                <span class="q-number-box">8</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-8" data-q="8" class="q-text"
                    placeholder="">
                will be checked.
            </div>
        </li>
        <li>
            <div class="q-list" data-q="9">
                He should then go to the
                <span class="q-number-box">9</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-9" data-q="9" class="q-text"
                    placeholder="">
                to meet his class instructor.
            </div>
        </li>
    </ul>
    <b>Costs</b>
    <ul>
        <li>
            <div class="q-list" data-q="10">
                The course costs $
                <span class="q-number-box">10</span>
                <input type="text" name="{{ $part['tipe'][0] }}-{{ $id }}-10" data-q="10" class="q-text"
                    placeholder="">
                per week.
            </div>
        </li>
    </ul>
</fieldset>
