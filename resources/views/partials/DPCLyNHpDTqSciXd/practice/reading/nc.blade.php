@props(['tab'])

<div class="x-panel-inner">Content: Note Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3 class="passage-title">The Dead Sea Scrolls</h3>
                <p>
                    In late 1946 or early 1947, three Bedouin teenagers were tending their goats and sheep near the
                    ancient settlement of Qumran, located on the northwest shore of the Dead Sea in what is now known as
                    the West Bank. One of these young shepherds tossed a rock into an opening on the side of a cliff and
                    was surprised to hear a shattering sound. He and his companions later entered the cave and stumbled
                    across a collection of large clay jars, seven of which contained scrolls with writing on them. The
                    teenagers took the seven scrolls to a nearby town where they were sold for a small sum to a local
                    antiquities dealer. Word of the find spread, and Bedouins and archaeologists eventually unearthed
                    tens of thousands of additional scroll fragments from 10 nearby caves; together they make up between
                    800 and 900 manuscripts. It soon became clear that this was one of the greatest archaeological
                    discoveries ever made.
                </p>
                <p>
                    The origin of the Dead Sea Scrolls, which were written around 2,000 years ago between 150 BCE and 70
                    CE, is still the subject of scholarly debate even today. According to the prevailing theory, they
                    are the work of a population that inhabited the area until Roman troops destroyed the settlement
                    around 70 CE. The area was known as Judea at that time, and the people are thought to have belonged
                    to a group called the Essenes, a devout Jewish sect.
                </p>
                <p>
                    The majority of the texts on the Dead Sea Scrolls are in Hebrew, with some fragments written in an
                    ancient version of its alphabet thought to have fallen out of use in the fifth century BCE. But
                    there are other languages as well. Some scrolls are in Aramaic, the language spoken by many
                    inhabitants of the region from the sixth century BCE to the siege of Jerusalem in 70 CE. In
                    addition, several texts feature translations of the Hebrew Bible into Greek.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>
        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-nc">
                <fieldset class="q-item">
                    <h3>Questions 1-5</h3>
                    <p class="lead">Complete the notes below.</p>
                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                </fieldset>
                <fieldset class="q-item">
                    <p><b>The Dead Sea Scrolls</b></p>
                    <ul>
                        <p><b>Discovery</b></p>
                        <p>Qumran, 1946/7</p>
                        <li>
                            three Bedouin shepherds in their teens were near an opening on side of cliff
                        </li>
                        <li>
                            <div class="q-list" data-q="1">
                                heard a noise of breaking when one teenager threw a
                                <span class="q-number-box">1</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-1" class="q-text" placeholder="">
                            </div>
                        </li>
                        <li>
                            <div class="q-list" data-q="2">
                                teenagers went into the
                                <span class="q-number-box">2</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-2" class="q-text" placeholder="">
                                and found a number of containers
                            </div>
                        </li>
                        <li>
                            <div class="q-list" data-q="3">
                                made of
                                <span class="q-number-box">3</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-3" class="q-text" placeholder="">
                            </div>
                        </li>
                        <p><b>The scrolls</b></p>
                        <li>
                            date from between 150 BCE and 70 CE
                        </li>
                        <li>
                            <div class="q-list" data-q="4">
                                thought to have been written by group of people known as the
                                <span class="q-number-box">4</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-4" class="q-text" placeholder="">
                            </div>
                        </li>
                        <li>
                            <div class="q-list" data-q="5">
                                written mainly in the
                                <span class="q-number-box">5</span>
                                <input type="text" name="DPCLyNHpDTqSciXd-5" class="q-text" placeholder="">
                                language
                            </div>
                        </li>
                        <li>
                            most are on religious topics, written using ink on parchment or papyrus
                        </li>
                    </ul>
                </fieldset>
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
