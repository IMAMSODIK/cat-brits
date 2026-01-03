<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.mock.reading.head')

<body>
    @include('ielts.sets.layouts.mock.reading.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">Part 1</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Part 2</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Part 3</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">Content: Part 1</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Roman tunnels</h3>
                            <div class="passage-body">
                                <p><i><b>The Romans, who once controlled areas of Europe, North Africa and Asia Minor, adopted the construction techniques of other civilizations to build tunnels in their territories</b></i></p>
                                <p>The Persians, who lived in present-day Iran, were one of the first civilizations to build tunnels that provided a reliable supply of water to human settlements in dry areas. In the early first millennium BCE, they introduced the qanat method of tunnel construction, which consisted of placing posts over a hill in a straight line, to ensure that the tunnel kept to its route, and then digging vertical shafts down into the ground at regular intervals. Underground, workers removed the earth from between the ends of the shafts, creating a tunnel. The excavated soil was taken up to the surface using the shafts, which also provided ventilation during the work. Once the tunnel was completed, it allowed water to flow from the top of a hillside down towards a canal, which supplied water for human use. Remarkably, some qanats built by the Persians 2,700 years ago are still in use today.</p>
                                <p>They later passed on their knowledge to the Romans, who also used the qanat method to construct water-supply tunnels for agriculture. Roman qanat tunnels were constructed with vertical shafts dug at intervals of between 30 and 60 meters. The shafts were equipped with handholds and footholds to help those climbing in and out of them and were covered with a wooden or stone lid. To ensure that the shafts were vertical, Romans hung a plumb line from a rod placed across the top of each shaft and made sure that the weight at the end of it hung in the center of the shaft. Plumb lines were also used to measure the depth of the shaft and to determine the slope of the tunnel. The 5.6 kilometer Long Claudius tunnel, built in 41 CE to drain the Fucine Lake in central Italy, had shafts that were up to 122 meters deep, took 11 years to build and involved approximately 30,000 workers.</p>
                                <p>By the 6th century BCE, a second method of tunnel construction appeared called the counter- excavation method, in which the tunnel was constructed from both ends. It was used to cut through high mountains when the qanat method was not a practical alternative. This method required greater planning and advanced knowledge of surveying, mathematics and geometry as both ends of a tunnel had to meet correctly at the center of the mountain. Adjustments to the direction of the tunnel also had to be made whenever builders encountered geological problems or when it deviated from its set path. They constantly checked the tunnel’s advancing direction.</p>
                                <p>For example, by looking back at the light that penetrated through the tunnel mouth, and made corrections whenever necessary. Large deviations could happen, and they could result in one end of the tunnel not being usable. An inscription written on the side of a 428-meter tunnel, built by the Romans as part of the Saldae aqueduct system in modern-day Algeria, describes how the two teams of builders missed each other in the mountain and how the later construction of a lateral link between both corridors corrected the initial error.</p>
                                <p>The Romans dug tunnels for their roads using the counter-excavation method, whenever they encountered obstacles such as hills or mountains that were too high for roads to pass over. An example is the 37-meter-long, 6-meter-high, Furlo Pass Tunnel built in Italy in 69-79 CE. Remarkably, a modern road still uses this tunnel today. Tunnels were also built for mineral extraction. Miners would locate a mineral vein and then pursue it with shafts and tunnels underground. Traces of such tunnels used to mine gold can still be found at the Dolaucothi mines in Wales. When the sole purpose of a tunnel was mineral extraction, construction required less planning, as the tunnel route was determined by the mineral vein.</p>
                                <p>Roman tunnel projects were carefully planned and carried out. The length of time it took to construct a tunnel depended on the method being used and the type of rock being excavated. The qanat construction method was usually faster than the counter-excavation method as it was more straightforward. This was because the mountain could be excavated not only from the tunnel mouths but also from shafts. The type of rock could also influence construction times. When the rock was hard, the Romans employed a technique called fire quenching which consisted of heating the rock with fire, and then suddenly cooling it with cold water so that it would crack.</p>
                                <p>Progress through hard rock could be very slow, and it was not uncommon for tunnels to take years, if not decades, to be built. Construction marks left on a Roman tunnel in Bologna show that the rate of advance through solid rock was 30 centimeters per day. In contrast, the rate of advance of the Claudius tunnel can be calculated at 1.4 meters per day. Most tunnels had inscriptions showing the names of patrons who ordered construction and sometimes the name of the architect. For example, the 1.4-kilometer Cevlik tunnel in Turkey, built to divert the floodwater threatening the harbor of the ancient city of Seleuceia Pieria, had inscriptions on the entrance, still visible today, that also indicate that the tunnel was started in 69 CE and was completed in 81 CE.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- diagram_labeling --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 1-6</b></p>
                                    <p class="lead">Label the diagrams below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                    <img src="{{asset('own_assets/images/ielts-reading-testscambridge-ielts-16-academic-reading-test-4-1-3.jpg')}}" width="100%" alt="">
                                    <img src="{{asset('own_assets/images/ielts-reading-testscambridge-ielts-16-academic-reading-test-4-4-6.jpg')}}" width="100%" alt="">
                                </fieldset>
                                <fieldset class="q-item questions-item" data-type="diagram_labeling" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="diagram_labeling" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="diagram_labeling" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="diagram_labeling" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-4" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="diagram_labeling" data-q="5">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">5</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-5" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="diagram_labeling" data-q="6">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">6</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="diagram_labeling-TqMfMy8BLvZp0JDm-6" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 7-10</b></p>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-type="tfng" data-q="7">
                                    <legend class="q-text">
                                        <span class="q-number">7</span>
                                        The counter-excavation method completely replaced the qanat method in the 6th century BCE.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="8">
                                    <legend class="q-text">
                                        <span class="q-number">8</span>
                                        Only experienced builders were employed to construct a tunnel using the counter-excavation method.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 8 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="9">
                                    <legend class="q-text">
                                        <span class="q-number">9</span>
                                        The information about a problem that occurred during the construction of the Saldae aqueduct system was found in an ancient book.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 9 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="10">
                                    <legend class="q-text">
                                        <span class="q-number">10</span>
                                        The mistake made by the builders of the Saldae aqueduct system was that the two parts of the tunnel failed to meet.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 10 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-TqMfMy8BLvZp0JDm-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- sa --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 11-13</b></p>
                                    <p class="lead">Answer the questions below.</p>
                                    <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sa" data-q="11">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">11</span>
                                        <span style="flex: 1;">
                                            What type of mineral were the Dolaucothi mines in Wales built to extract?
                                            <span class="q-question">
                                                <input type="text" name="sa-TqMfMy8BLvZp0JDm-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sa" data-q="12">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">12</span>
                                        <span style="flex: 1;">
                                            In addition to the patron, whose name might be carved onto a tunnel?
                                            <span class="q-question">
                                                <input type="text" name="sa-TqMfMy8BLvZp0JDm-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sa" data-q="13">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">13</span>
                                        <span style="flex: 1;">
                                            What part of Seleuceia Pieria was the Çevlik tunnel built to protect?
                                            <span class="q-question">
                                                <input type="text" name="sa-TqMfMy8BLvZp0JDm-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Changes in reading habits</h3>
                            <div class="passage-body">
                                <p><i><b>What are the implications of the way we read today?</b></i></p>
                                <p>Look around on your next plane trip. The iPad is the new pacifier for babies and toddlers. Younger school-aged children read stories on smartphones; older kids don’t read at all, but hunch over video games. Parents and other passengers read on tablets or skim a flotilla of email and news feeds. Unbeknown to most of us, an invisible, game-changing transformation links everyone in this picture: the neuronal circuit that underlies the brain’s ability to read is subtly, rapidly changing and this has implications for everyone from the pre-reading toddler to the expert adult.</p>
                                <p>As work in neurosciences indicates, the acquisition of literacy necessitated a new circuit in our species’ brain more than 6,000 years ago. That circuit evolved from a very simple mechanism for decoding basic information, like the number of goats in one’s herd, to the present, highly elaborated reading brain. My research depicts how the present reading brain enables the development of some of our most important intellectual and affective processes: internalized knowledge, analogical reasoning, and inference; perspective-taking and empathy; critical analysis and the generation of insight. Research surfacing in many parts of the world now cautions that each of these essential ‘deep reading’ processes may be under threat as we move into digital- based modes of reading.</p>
                                <p>This is not a simple, binary issue of print versus digital reading and technological innovation. As MIT scholar Sherry Turkle has written, we do not err as a society when we innovate but when we ignore what we disrupt or diminish while innovating. In this hinge moment between print and digital cultures, society needs to confront what is diminishing in the expert reading circuit, what our children and older students are not developing, and what we can do about it.</p>
                                <p>We know from research that the reading circuit is not given to human beings through a genetic blueprint like vision or language; it needs an environment to develop. Further, it will adapt to that environment’s requirements — from different writing systems to the characteristics of whatever medium is used. If the dominant medium advantages processes that are fast, multi-task oriented and well-suited for large volumes of information, like the current digital medium, so will the reading circuit. As UCLA psychologist Patricia Greenfield writes, the result is that less attention and time will be allocated to slower, time-demanding deep reading processes.</p>
                                <p>Increasing reports from educators and from researchers in psychology and the humanities bear this out. English literature scholar and teacher Mark Edmundson describes how many college students actively avoid the classic literature of the 19th and 20th centuries in favour of something simpler as they no longer have the patience to read longer, denser, more difficult texts. We should be less concerned with students’ ‘cognitive impatience’, however, than by what may underlie it: the potential inability of large numbers of students to read with a level of critical analysis sufficient to comprehend the complexity of thought and argument found in more demanding texts.</p>
                                <p>Multiple studies show that digital screen use may be causing a variety of troubling downstream effects on reading comprehension in older high school and college students. In Stavanger, Norway, psychologist Anne Mangen and her colleagues studied how high school students comprehend the same material in different mediums. Mangen’s group asked subjects questions about a short story whose plot had universal student appeal; half of the students read the story on a tablet, the other half in paperback. Results indicated that students who read on print were superior in their comprehension to screen-reading peers, particularly in their ability to sequence detail and reconstruct the plot in chronological order.</p>
                                <p>Ziming Liu from San Jose State University has conducted a series of studies which indicate that the ‘new norm’ in reading is skimming, involving word-spotting and browsing through the text. Many readers now use a pattern when reading in which they sample the first line and then word- spot through the rest of the text. When the reading brain skims like this, it reduces time allocated to deep reading processes. In other words, we don’t have time to grasp complexity, to understand another’s feelings, to perceive beauty, and to create thoughts of the reader’s own.</p>
                                <p>The possibility that critical analysis, empathy and other deep reading processes could become the unintended ‘collateral damage’ of our digital culture is not a straightforward binary issue about print versus digital reading. It is about how we all have begun to read on various mediums and how that changes not only what we read, but also the purposes for which we read. Nor is it only about the young. The subtle atrophy of critical analysis and empathy affects us all equally. It affects our ability to navigate a constant bombardment of information. It incentivizes a retreat to the most familiar stores of unchecked information, which require and receive no analysis, leaving us susceptible to false information and irrational ideas.</p>
                                <p>There’s an old rule in neuroscience that does not alter with age: use it or lose it. It is a very hopeful principle when applied to critical thought in the reading brain because it implies choice. The story of the changing reading brain is hardly finished. We possess both the science and the technology to identify and redress the changes in how we read before they become entrenched. If we work to understand exactly what we will lose, alongside the extraordinary new capacities that the digital world has brought us, there is as much reason for excitement as caution.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 14-17</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-type="oc" data-q="14">
                                    <legend class="q-text">
                                        <span class="q-number">14</span>
                                        What is the writer’s main point in the first paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 14 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Our use of technology is having a hidden effect on us.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Technology can be used to help youngsters to read.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Travellers should be encouraged to use technology on planes.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Playing games is a more popular use of technology than reading.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="15">
                                    <legend class="q-text">
                                        <span class="q-number">15</span>
                                        What main point does Sherry Turkle make about innovation?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 15 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Technological innovation has led to a reduction in print reading.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">We should pay attention to what might be lost when innovation occurs.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">We should encourage more young people to become involved in innovation.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">There is a difference between developing products and developing ideas.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="16">
                                    <legend class="q-text">
                                        <span class="q-number">16</span>
                                        What point is the writer making in the fourth paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 16 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Humans have an inborn ability to read and write.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Reading can be done using many different mediums.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Writing systems make unexpected demands on the brain.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Some brain circuits adjust to whatever is required of them.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="17">
                                    <legend class="q-text">
                                        <span class="q-number">17</span>
                                        According to Mark Edmundson, the attitude of college students
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 17 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">has changed the way he teaches.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">has influenced what they select to read.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">does not worry him as much as it does others.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">does not match the views of the general public.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 18-22</h3>
                                    <p class="lead">Complete the summary using the list of words, <b>A-H</b>, below.</p>
                                    <p>Write the correct letter, A-H, in boxes on your answer sheet.</p>

                                    <table cellspacing="20" class="q-table q-table-letters">
                                        <tr>
                                            <td><b>A</b></td><td>fast</td>
                                            <td><b>B</b></td><td>isolated</td>
                                            <td><b>C</b></td><td>emotional</td>
                                            <td><b>D</b></td><td>worrying</td>
                                        </tr>
                                        <tr>
                                            <td><b>E</b></td><td>many</td>
                                            <td><b>F</b></td><td>hard</td>
                                            <td><b>G</b></td><td>combined</td>
                                            <td><b>H</b></td><td>thorough</td>
                                        </tr>
                                    </table>

                                    <h3>Studies on digital screen use</h3>

                                    <p>
                                        There have been many studies on digital screen use, showing some
                                        <span class="q-number-box">18</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-1" data-type="summary_completion" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        trends. Psychologist Anne Mangen gave high-school students a short story to read, half using digital and half using print mediums. Her team then used a question-and-answer technique to find out how
                                        <span class="q-number-box">19</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-2" data-type="summary_completion" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        each group’s understanding of the plot was. The findings showed a clear pattern in the responses, with those who read screens finding the order of information
                                        <span class="q-number-box">20</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-3" data-type="summary_completion" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        to recall.
                                    </p>

                                    <p>
                                        Studies by Ziming Liu show that students are tending to read
                                        <span class="q-number-box">21</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-4" data-type="summary_completion" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        words and phrases in a text to save time. This approach, she says, gives the reader a superficial understanding of the
                                        <span class="q-number-box">22</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-TqMfMy8BLvZp0JDm-5" data-type="summary_completion" data-q="1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>
                                            </span>
                                        </span>
                                        content of material, leaving no time for thought.
                                    </p>
                                </fieldset>

                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 23-26</b></p>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>YES</strong> if the statement agrees with the information</li>
                                        <li><strong>NO</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
                                            about this.</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-type="ynng" data-q="23">
                                    <legend class="q-text">
                                        <span class="q-number">23</span>
                                        The medium we use to read can affect our choice of reading content.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="24">
                                    <legend class="q-text">
                                        <span class="q-number">24</span>
                                        Some age groups are more likely to lose their complex reading skills than others.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 24 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="25">
                                    <legend class="q-text">
                                        <span class="q-number">25</span>
                                        False information has become more widespread in today’s digital era.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 25 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="26">
                                    <legend class="q-text">
                                        <span class="q-number">26</span>
                                        We still have opportunities to rectify the problems that technology is presenting.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 26 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Konten: Part 3</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Attitudes towards Artificial Intelligence</h3>
                            <div class="passage-body">
                                <h3 class="passage-title">A</h3>
                                <p>Artificial intelligence (AI) can already predict the future. Police forces are using it to map when and where crime is likely to occur. Doctors can use it to predict when a patient is most likely to have a heart attack or stroke. Researchers are even trying to give AI imagination so it can plan for unexpected consequences.</p>
                                <p>Many decisions in our lives require a good forecast, and AI is almost always better at forecasting than we are. Yet for all these technological advances, we still seem to deeply lack confidence in Al predictions. Recent cases show that people don’t like relying on AI and prefer to trust human experts, even if these experts are wrong.</p>
                                <p>If we want AI to really benefit people, we need to find a way to get people to trust it. To do that, we need to understand why people are so reluctant to trust AI in the first place.</p>
                                <h3 class="passage-title">B</h3>
                                <p>Take the case of Watson for Oncology, one of technology giant IBM’s supercomputer programs. Their attempt to promote this program to cancer doctors was a PR disaster. The AI promised to deliver top-quality recommendations on the treatment of 12 cancers that accounted for 80% of the world’s eases. But when doctors first interacted with Watson, they found themselves in a rather difficult situation. On the one hand, if Watson provided guidance about a treatment that coincided with their own opinions, physicians did not see much point in Watson’s recommendations. The supercomputer was simply telling them what they already knew, and these recommendations did not change the actual treatment.</p>
                                <p>On the other hand, if Watson generated a recommendation that contradicted the experts’ opinion, doctors would typically conclude that Watson wasn’t competent. And the machine wouldn’t be able to explain why its treatment was plausible because its machine-learning algorithms were simply too complex to be fully understood by humans. Consequently, this has caused even more suspicion and disbelief, leading many doctors to ignore the seemingly outlandish AI recommendations and stick to their own expertise.</p>
                                <h3 class="passage-title">C</h3>
                                <p>This is just one example of people’s lack of confidence in AI and their reluctance to accept what AI has to offer. Trust in other people is often based on our understanding of how others think and having experience of their reliability. This helps create a psychological feeling of safety. AI, on the other hand, is still fairly new and unfamiliar to most people. Even if it can be technically explained (and that’s not always the case), AI’s decision-making process is usually too difficult for most people to comprehend. And interacting with something we don’t understand can cause anxiety and give us a sense that we’re losing control.</p>
                                <p>Many people are also simply not familiar with many instances of AI actually working, because it often happens in the background. Instead they are acutely aware of instances where AI goes wrong. Embarrassing AI failures receive a disproportionate amount of media attention, emphasising the message that we cannot rely on technology. Machine learning is not foolproof, in part because the humans who design it aren’t.</p>
                                <h3 class="passage-title">D</h3>
                                <p>Feelings about AI run deep. In a recent experiment, people from a range of backgrounds were given various sci-fi films about AI to watch and then asked questions about automation in everyday life. It was found that, regardless of whether the film they watched depicted AI in a positive or negative light, simply watching a cinematic vision of our technological future polarised the participants’ attitudes. Optimists became more extreme in their enthusiasm for AI and sceptics became even more guarded.</p>
                                <p>This suggests people use relevant evidence about AI in a biased manner to support their existing attitudes, a deep-rooted human tendency known as “confirmation bias”. As AI is represented more and more in media and entertainment, it could lead to a society split between those who benefit from AI and those who reject it. More pertinently, refusing to accept the advantages offered by AI could place a large group of people at a serious disadvantage.</p>
                                <h3 class="passage-title">E</h3>
                                <p>Fortunately, we already have some ideas about how to improve trust in AI. Simply having previous experience with AI can significantly improve people’s opinions about the technology, as was found in the study mentioned above. Evidence also suggests the more you use other technologies such as the internet, the more you trust them.</p>
                                <p>Another solution may be to reveal more about the algorithms which AI uses and the purposes they serve. Several high-profile social media companies and online marketplaces already release transparency reports about government requests and surveillance disclosures. A similar practice for AI could help people have a better understanding of the way algorithmic decisions are made.</p>
                                <h3 class="passage-title">F</h3>
                                <p>Research suggests that allowing people some control over AI decision-making could also improve trust and enable AI to learn from human experience. For example, one study showed that when people were allowed the freedom to slightly modify an algorithm, they felt more satisfied with its decisions, more likely to believe it was superior and more likely to use it in the future.</p>
                                <p>We don’t need to understand the intricate inner workings of AI systems, but if people are given a degree of responsibility for how they are implemented, they will be more willing to accept AI into their lives.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- mh --}}
                                <fieldset class="q-item">
                                    <h3>Questions 27-32</h3>
                                    <p class="lead">The Reading Passage has six sections, <b>A-F</b>.</p>
                                    <p>Choose the correct heading for each section from the list of headings below.</p>
                                    <p>Write the correct number, <b>i-viii</b>, in boxes on your answer sheet.</p>
                                    <p><b>List of Headings</b></p>
                                    <ul class="legend">
                                        <li><strong>i</strong> An increasing divergence of attitudes towards AI</li>
                                        <li><strong>ii</strong> Reasons why we have more faith in human judgement than in AI</li>
                                        <li><strong>iii</strong> The superiority of AI projections over those made by humans</li>
                                        <li><strong>iv</strong> The process by which AI can help us make good decisions</li>
                                        <li><strong>v</strong> The advantages of involving users in AI processes</li>
                                        <li><strong>vi</strong> Widespread distrust of an AI innovation</li>
                                        <li><strong>vii</strong> Encouraging openness about how AI functions</li>
                                        <li><strong>viii</strong> A surprisingly successful AI application</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-type="mh" data-q="27">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">27</span>
                                        <span style="flex: 1;">
                                            Section <b>A</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="mh" data-q="28">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">28</span>
                                        <span style="flex: 1;">
                                            Section <b>B</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="mh" data-q="29">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">29</span>
                                        <span style="flex: 1;">
                                            Section <b>C</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="mh" data-q="30">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">30</span>
                                        <span style="flex: 1;">
                                            Section <b>D</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="mh" data-q="31">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">31</span>
                                        <span style="flex: 1;">
                                            Section <b>E</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="mh" data-q="32">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">32</span>
                                        <span style="flex: 1;">
                                            Section <b>F</b>
                                            <span class="q-question">
                                                <select name="mh-TqMfMy8BLvZp0JDm-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="i">i</option>
                                                    <option value="ii">ii</option>
                                                    <option value="iii">iii</option>
                                                    <option value="iv">iv</option>
                                                    <option value="v">v</option>
                                                    <option value="vi">vi</option>
                                                    <option value="vii">vii</option>
                                                    <option value="viii">viii</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 33-35</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-type="oc" data-q="33">
                                    <legend class="q-text">
                                        <span class="q-number">33</span>
                                        What is the writer doing in Section A?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 33 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">providing a solution to a concern</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">justifying an opinion about an issue</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">highlighting the existence of a problem</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-5" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">explaining the reasons for a phenomenon</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="34">
                                    <legend class="q-text">
                                        <span class="q-number">34</span>
                                        According to Section C, why might some people be reluctant to accept AI?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 34 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">They are afraid it will replace humans in decision-making jobs.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Its complexity makes them feel that they are at a disadvantage.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">They would rather wait for the technology to be tested over a period of time.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-6" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Misunderstandings about how it works make it seem more challenging than it is.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="35">
                                    <legend class="q-text">
                                        <span class="q-number">35</span>
                                        What does the writer say about the media in Section C of the text?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 35 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It leads the public to be mistrustful of AI.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It devotes an excessive amount of attention to AI.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Its reports of incidents involving AI are often inaccurate.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-TqMfMy8BLvZp0JDm-7" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It gives the impression that AI failures are due to designer error.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 36-40</b></p>
                                    <p class="lead">Do the following statements agree with the information given in
                                        the
                                        Reading Passage?
                                    </p>
                                    <p>In boxes on your answer sheet, write</p>
                                    <ul class="legend">
                                        <li><strong>YES</strong> if the statement agrees with the information</li>
                                        <li><strong>NO</strong> if the statement contradicts the information</li>
                                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks
                                            about this.</li>
                                    </ul>
                                </fieldset>
                                <fieldset class="q-item" data-type="ynng" data-q="36">
                                    <legend class="q-text">
                                        <span class="q-number">36</span>
                                        Subjective depictions of AI in sci-fi films make people change their opinions about automation.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 36 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="37">
                                    <legend class="q-text">
                                        <span class="q-number">37</span>
                                        Portrayals of AI in media and entertainment are likely to become more positive.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 37 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-6" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-6" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="38">
                                    <legend class="q-text">
                                        <span class="q-number">38</span>
                                        Rejection of the possibilities of AI may have a negative effect on many people’s lives.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 38 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-7" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-7" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="39">
                                    <legend class="q-text">
                                        <span class="q-number">39</span>
                                        Familiarity with AI has very little impact on people’s attitudes to the technology.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 39 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-8" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-8" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-8" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="40">
                                    <legend class="q-text">
                                        <span class="q-number">40</span>
                                        AI applications which users are able to modify are more likely to gain consumer approval.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 40 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-9" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-9" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-TqMfMy8BLvZp0JDm-9" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.reading.component')
    @include('ielts.sets.layouts.mock.reading.script')

</body>

</html>
