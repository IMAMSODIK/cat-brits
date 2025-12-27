@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">

                <h3>B</h3>
                <p>
                    Firstly, zoos aid conservation. Colossal numbers of species are becoming extinct across the
                    world, and many more are increasingly threatened and therefore risk extinction. Moreover, some
                    of these collapses have been sudden, dramatic and unexpected, or were simply discovered very
                    late in the day. A species protected in captivity can be bred up to provide a reservoir
                    population against a population crash or extinction in the wild. A good number of species only
                    exist in captivity, with many of these living in zoos. Still more only exist in the wild because
                    they have been reintroduced from zoos, or have wild populations that have been boosted by
                    captive bred animals. Without these efforts there would be fewer species alive today. Although
                    reintroduction successes are few and far between, the numbers are increasing, and the very fact
                    that species have been saved or reintroduced as a result of captive breeding proves the value of
                    such initiatives.
                </p>

                <h3>C</h3>
                <p>
                    Zoos also provide education. Many children and adults, especially those in cities, will never
                    see a wild animal beyond a fox or pigeon. While it is true that television documentaries are
                    becoming ever more detailed and impressive, and many natural history specimens are on display in
                    museums, there really is nothing to compare with seeing a living creature in the flesh, hearing
                    it, smelling it, watching what it does and having the time to absorb details. That alone will
                    bring a greater understanding and perspective to many, and hopefully give them a greater
                    appreciation for wildlife, conservation efforts and how they can contribute.
                </p>

                <h3>D</h3>
                <p>
                    In addition to this, there is also the education that can take place in zoos through signs,
                    talks and presentations which directly communicate information to visitors about the animals
                    they are seeing and their place in the world. This was an area where zoos used to be lacking,
                    but they are now increasingly sophisticated in their communication and outreach work. Many zoos
                    also work directly to educate conservation workers in other countries, or send their animal
                    keepers abroad to contribute their knowledge and skills to those working in zoos and reserves,
                    thereby helping to improve conditions and reintroductions all over the world.
                </p>
                <h3>E</h3>
                <p>
                    Zoos also play a key role in research. If we are to save wild species and restore and repair
                    ecosystems we need to know about how key species live, act and react. Being able to undertake
                    research on animals in zoos where there is less risk and fewer variables means real changes can
                    be effected on wild populations. Finding out about, for example, the oestrus cycle of an animal
                    of its breeding rate helps us manage wild populations. Procedures such as capturing and moving
                    at-risk or dangerous individuals are bolstered by knowledge gained in zoos about doses for
                    anaesthetics, and by experience in handling and transporting animals. This can make a real
                    difference to conservation efforts and to the reduction of human-animal conflicts, and can
                    provide a knowledge base for helping with the increasing threats of habitat destruction and
                    other problems.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p class="lead"><b>Questions 1-2</b></p>
                    <p class="lead"><i>Choose TWO letters <b>A-E</b>.</i></p>
                    <p><i>Write the correct letters in boxes on your answer sheet.</i></p>
                    <p>
                        <span class="q-number-box">1</span>
                        <span class="q-number-box">2</span>
                        Which <b>TWO</b> of these beliefs about zoos does the writer mention in the text?
                    </p>
                </fieldset>

                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-2[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">They can help children overcome their fears of wild animals.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-2[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">They can increase public awareness of environmental issues.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-2[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">They can provide employment for a range of professional
                                people.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-2[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">They can generate income to support wildlife conservation
                                projects.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-2[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">They can raise animals which can later be released into the
                                wild.</span>
                        </label>
                    </div>
                </fieldset>


                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display: none">Try
                        Again</button>
                </div>

            </form>
        </aside>
    </div>
</div>
