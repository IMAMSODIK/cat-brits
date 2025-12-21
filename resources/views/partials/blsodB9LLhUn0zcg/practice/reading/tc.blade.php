@props(['tab'])

<div class="x-panel-inner">Content: Table Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
                <div class="passage-body">
                    <p>
                        The medical benefits of the polar bear for humanity certainly have their importance in our
                        conservation efforts, but these should not be the only factors taken into consideration. We tend
                        to want to protect animals we think are intelligent and possess emotions, such as elephants and
                        primates. Bears, on the other hand, seem to be perceived as stupid and in many cases violent.
                        And yet anecdotal evidence from the field challenges those assumptions, suggesting for example
                        that polar bears have good problem-solving abilities. A male bear called GoGo in Tennoji Zoo,
                        Osaka, has even been observed making use of a tool to manipulate his environment. The bear used
                        a tree branch on multiple occasions to dislodge a piece of meat hung out of his reach.
                        Problem-solving ability has also been witnessed in wild polar bears, although not as obviously
                        as with GoGo. A calculated move by a male bear involved running and jumping onto barrels in an
                        attempt to get to a photographer standing on a platform four metres high.
                    </p>
                    <p>
                        In other studies, such as one by Alison Annes in 2008, polar bears showed deliberate and
                        focussed manipulation. For example, Annes observed bears putting objects in piles and then
                        knocking them over in what appeared to be a game. The study demonstrates that bears are capable
                        of agile and thought-out behaviours. These examples suggest bears have greater creativity and
                        problem-solving abilities than previously thought.
                    </p>
                    <p>
                        As for emotions while the evidence is once again anecdotal, many bears have been seen to hit out
                        at ice and snow — seemingly out of frustration — when they have just missed out on a kill.
                        Moreover, polar bears can form unusual relationships with other species, including playing with
                        the dogs used to pull sleds in the Arctic. Remarkably, one hand-raised polar bear called Agee
                        has formed a close relationship with her owner Mark Dumas to the point where they even swim
                        together. This is even more astonishing since polar bears are known to actively hunt humans in
                        the wild.
                    </p>
                </div>
            </article>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-tc">
                <fieldset class="q-item">
                    <p>Questions 1-6</p>
                    <p>Complete the table below.</p>
                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                </fieldset>

                <table border="1" cellpadding="8" cellspacing="0"
                    style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">

                    <tr>
                        <th colspan="2"><b>Reasons why polar bears should be protected</b></th>
                    </tr>

                    <tr>
                        <td colspan="2">
                            People think of bears as unintelligent and
                            <div class="q-item" data-q="1" style="display:inline-block;">
                                <span class="q-number-box">1</span>
                                <input type="text" name="blsodB9LLhUn0zcg-1" class="q-text" placeholder="">
                            </div>.
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><b>However, this may not be correct. For example:</b></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            In Tennoji Zoo, a bear has been seen using a branch as a
                            <div class="q-item" data-q="2" style="display:inline-block;">
                                <span class="q-number-box">2</span>
                                <input type="text" name="blsodB9LLhUn0zcg-2" class="q-text" placeholder="">
                            </div>.
                            This allowed him to knock down some
                            <div class="q-item" data-q="3" style="display:inline-block;">
                                <span class="q-number-box">3</span>
                                <input type="text" name="blsodB9LLhUn0zcg-3" class="q-text" placeholder="">
                            </div>.
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            A wild polar bear worked out a method of reaching a platform where a
                            <div class="q-item" data-q="4" style="display:inline-block;">
                                <span class="q-number-box">4</span>
                                <input type="text" name="blsodB9LLhUn0zcg-4" class="q-text" placeholder="">
                            </div>
                            was located.
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            Polar bears have displayed behaviour such as conscious manipulation of objects and
                            activity similar to a
                            <div class="q-item" data-q="5" style="display:inline-block;">
                                <span class="q-number-box">5</span>
                                <input type="text" name="blsodB9LLhUn0zcg-5" class="q-text" placeholder="">
                            </div>.
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><b>Bears may also display emotions. For example:</b></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            They may make movements suggesting
                            <div class="q-item" data-q="6" style="display:inline-block;">
                                <span class="q-number-box">6</span>
                                <input type="text" name="blsodB9LLhUn0zcg-6" class="q-text" placeholder="">
                            </div>
                            if disappointed when hunting.
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            They may form relationships with other species.
                        </td>
                    </tr>
                </table>

                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display: none">
                        Try Again
                    </button>
                </div>
            </form>
        </aside>
    </div>
</div>
