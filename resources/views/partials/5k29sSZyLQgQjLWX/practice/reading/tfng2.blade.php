@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-title">
                <h3>Why zoos are good</h3>
                <h4>Scientist David Hone makes the case for zoos</h4>
            </div>
            <div class="passage-body">
                <h3>A</h3>
                <p>
                    In my view, it is perfectly possible for many species of animals living in zoos or wildlife
                    parks to have a quality of life as high as, or higher than, in the wild. Animals in good zoos
                    get a varied and high-quality diet with all the supplements required, and any illnesses they
                    might have will be treated. Their movement might be somewhat restricted, but they have a safe
                    environment in which to live, and they are spared bullying and social ostracism by others of
                    their kind. They do not suffer from the threat or stress of predators, or the irritation and
                    pain of parasites or injuries. The average captive animal will have a greater life expectancy
                    compared with its wild counterpart, and will not die of drought, of starvation or in the jaws of
                    a predator. A lot of very nasty things happen to truly ‘wild’ animals that simply don’t happen
                    in good zoos, and to view a life that is ‘free’ as one that is automatically ‘good’ is, I think,
                    an error. Furthermore, zoos serve several key purposes.
                </p>

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
                    <h3>Questions 1-5</h3>
                    <p class="lead">
                        Do the following statements agree with the information given in the
                        Reading Passage?
                    </p>
                    <p>In boxes on your answer sheet, write</p>
                    <ul class="legend">
                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                    </ul>
                </fieldset>

                <!-- Question 1 -->
                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        An animal is likely to live longer in a zoo than in the wild.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-6" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-6" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-6" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 2 -->
                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        There are some species in zoos which can no longer be found in the wild.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-7" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-7" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-7" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 3 -->
                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        Improvements in the quality of TV wildlife documentaries have resulted in increased numbers of
                        zoo visitors.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-8" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-8" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-8" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 4 -->
                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        Zoos have always excelled at transmitting information about animals to the public.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-9" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-9" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-9" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 5 -->
                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Studying animals in zoos is less stressful for the animals than studying them in the wild.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-10" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-10" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="5k29sSZyLQgQjLWX-10" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>


                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}"
                        style="display: none">Try
                        Again</button>
                </div>
            </form>

        </aside>
    </div>
</div>
