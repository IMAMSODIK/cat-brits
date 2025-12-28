@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">D</h3>
            <div class="passage-body">
                <p>
                    In addition to this, there is also the education that can take place in zoos through signs,
                    talks and presentations which directly communicate information to visitors about the animals
                    they are seeing and their place in the world. This was an area where zoos used to be lacking,
                    but they are now increasingly sophisticated in their communication and outreach work. Many zoos
                    also work directly to educate conservation workers in other countries, or send their animal
                    keepers abroad to contribute their knowledge and skills to those working in zoos and reserves,
                    thereby helping to improve conditions and reintroductions all over the world.
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
                        Which <b>TWO</b> of the following are stated about zoo staff in the text?
                    </p>
                </fieldset>

                <fieldset class="q-item" data-q="1" data-q-multi="1,2" data-max="2">
                    <div class="q-options" role="group" aria-label="Question 1 options">
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-1[]" value="A" />
                            <span class="opt-code">A</span>
                            <span class="opt-label">Some take part in television documentaries about animals.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-1[]" value="B" />
                            <span class="opt-code">B</span>
                            <span class="opt-label">Some travel to overseas locations to join teams in zoos.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-1[]" value="C" />
                            <span class="opt-code">C</span>
                            <span class="opt-label">Some get experience with species in the wild before taking up zoo
                                jobs.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-1[]" value="D" />
                            <span class="opt-code">D</span>
                            <span class="opt-label">Some teach people who are involved with conservation
                                projects.</span>
                        </label>
                        <label class="q-option">
                            <input type="checkbox" name="5k29sSZyLQgQjLWX-1[]" value="E" />
                            <span class="opt-code">E</span>
                            <span class="opt-label">Some specialise in caring for species which are under threat.</span>
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
