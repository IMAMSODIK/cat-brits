@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>Green roofs</h3>
                <h3>A</h3>
                <p>
                    Rooftops covered with grass, vegetable gardens and lush foliage are now a common
                    sight in many cities around the world. More and more private companies and city
                    authorities are investing in green roofs, drawn to their wide-ranging benefits.
                    Among the benefits are saving on energy costs, mitigating the risk of floods, making
                    habitats for urban wildlife, tackling air pollution and even growing food. These
                    increasingly radical urban designs can help cities adapt to the monumental problems
                    they face, such as access to resources and a lack of green space due to development.
                    But the involvement of city authorities, businesses and other institutions is
                    crucial to ensuring their success – as is research investigating different options
                    to suit the variety of rooftop spaces found in cities. The UK is relatively new to
                    developing green roofs, and local governments and institutions are playing a major
                    role in spreading the practice. London is home to much of the UK’s green roof
                    market, mainly due to forward-thinking policies such as the London Plan, which has
                    paved the way to more than doubling the area of green roofs in the capital.
                </p>
                <h3>B</h3>
                <p>
                    Ongoing research is showcasing how green roofs in cities can integrate with ‘living
                    walls’: environmentally friendly walls which are partially or completely covered
                    with greenery, including a growing medium, such as soil or water. Research also
                    indicates that green roofs can be integrated with drainage systems on the ground,
                    such as street trees, so that the water is managed better and the built environment
                    is made more sustainable. There is also evidence to demonstrate the social value of
                    green roofs. Doctors are increasingly prescribing time spent gardening outdoors for
                    patients dealing with anxiety and depression. And research has found that access to
                    even the most basic green spaces can provide a better quality of life for dementia
                    sufferers and help people avoid obesity.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-4</h3>
                    <p class="lead">Complete the summary below.</p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                    <h3>Advantages of green roofs</h3>

                    <p>
                    <div>
                        City rooftops covered with greenery have many advantages. These include
                        lessening the likelihood that floods will occur, reducing how much money is
                        spent on
                        <span class="q-number-box">1</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="yPLnQeqINAxbrnva-1" class="q-text" placeholder="">
                            </span>
                        </span>
                        and creating environments that are suitable for wildlife. In many cases, they
                        can also be used for producing
                        <span class="q-number-box">2</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="yPLnQeqINAxbrnva-2" class="q-text" placeholder="">
                            </span>
                        </span>
                    </div>
                    </p>

                    <p>
                    <div>
                        There are also social benefits of green roofs. For example, the medical
                        profession recommends
                        <span class="q-number-box">3</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="yPLnQeqINAxbrnva-3" class="q-text" placeholder="">
                            </span>
                        </span>
                        as an activity to help people cope with mental health issues. Studies have also
                        shown that the availability of green spaces can prevent physical problems such
                        as
                        <span class="q-number-box">4</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="yPLnQeqINAxbrnva-4" class="q-text" placeholder="">
                            </span>
                        </span>
                    </div>
                    </p>
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