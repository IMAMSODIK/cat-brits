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
                            <h3 class="passage-title">The impact of climate change on butterflies in Britain</h3>
                            <div class="passage-body">
                                <p>According to conservationists, populations of around two thirds of butterfly species have declined in Britain over the past 40 years. If this trend continues, it might have unpredictable knock-on effects for other species in the ecosystem. Butterfly eggs develop into caterpillars and these insects, which are the second stage in a new butterfly’s lifecycle, consume vast quantities of plant material, and in turn act as prey for birds as well as bats and other small mammals. Only by arming themselves with an understanding of why butterfly numbers are down can conservationists hope to halt or reverse the decline.</p>
                                <p>Butterflies prefer outdoor conditions to be ‘just right’, which means neither too hot nor too cold. Under the conditions of climate change, the temperature at any given time in summer is generally getting warmer, leaving butterflies with the challenge of how to deal with this. One of the main ways in which species are ensuring conditions suit them is by changing the time of year at which they are active and reproduce. Scientists refer to the timing of such lifecycle events as ‘phenology’, so when an animal or plant starts to do something earlier in the year than it usually does, it is said to be ‘advancing its phenology’.</p>
                                <p>These advances have been observed already in a wide range of butterflies – indeed, most species are advancing their phenology to some extent. In Britain, as the average spring temperature has increased by roughly 0.5°C over the past 20 years, species have advanced by between three days and a week on average, to keep in line with cooler temperatures. Is this a sign that butterflies are well equipped to cope with climate change, and readily adjust to new temperatures? Or are these populations under stress, being dragged along unwillingly by unnaturally fast changes? The answer is still unknown, but a new study is seeking to answer these questions.</p>
                                <p>First, the researchers pulled together data from millions of records that had been submitted by butterfly enthusiasts-people who spend their free time observing the activities of different species. This provided information on 130 species of butterflies in Great Britain every year for a 20-year period. They then estimated the abundance and distribution of each species across this time, along with how far north in the country they had moved. The data also, crucially, allowed researchers to estimate subtle changes in what time of the year each species was changing into an adult butterfly.</p>
                                <p>Analyzing the trends in each variable, the researchers discovered that species with more flexible lifecycles were more likely to be able to benefit from an earlier emergence driven by climate change. Some species are able to go from caterpillar to butterfly twice or more per year, so that the individual butterflies you see flying in the spring are the grandchildren or great-grandchildren of the individuals seen a year previously.</p>
                                <p>Among these species, researchers observed that those which have been advancing their phenology the most over the 20-year study period also had the most positive trends in abundance, distribution and northwards extent. For these species, such as Britain’s tiniest butterfly, the dainty Small Blue, whose colonies are up to a hundred strong, some develop into butterflies early in spring, allowing their summer generations to complete another reproductive cycle by autumn so that more population growth occurs.</p>
                                <p>Other species, however, are less flexible and restricted to a single reproductive cycle per year. For these species, there was no evidence of any benefit to emerging earlier. Indeed, worryingly, it was found that the species in this group that specialize in very specific habitat types, often related to the caterpillar’s preferred diet, actually tended to be most at harm from advancing phenology. The beautiful High Brown Fritillary, often described as Britain’s most endangered butterfly, is in this group. It is found only in coppiced woodland and limestone pavement habitats. It is also a single-generation butterfly that has advanced its phenology. This suggests that climate change, while undoubtedly not the sole cause, might have played a part in the downfall of this species.</p>
                                <p>All is not lost, however. Many of Britain’s single-generation species show the capacity, in continental Europe, to add a second generation in years that are sufficiently warm. Therefore, as the climate continues to warm, species like the Silver-studded Blue might be able to switch to multiple generations in the UK as well, and so begin to extract benefits from the additional warmth, potentially leading to population increases.</p>
                                <p>More immediately, conservationists can arm themselves with all this knowledge to spot the warning signs of species that may be at risk. The White Admiral of southern England, a much sought-after butterfly, experienced a significant increase in numbers from the 1920s but has shown a considerable decline in the past 20 years. This may be because the caterpillar exists solely on a diet of a plant called honeysuckle. But it is also likely to be due to climate change.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <h3>Question 1-6</h3>
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
                                <fieldset class="q-item" data-type="tfng" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        Forty years ago, there were fewer butterflies in Britain than at present.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        Caterpillars are eaten by a number of different predators.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        ‘Phenology’ is a term used to describe a creature’s ability to alter the location of a lifecycle event.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        Some species of butterfly have a reduced lifespan due to spring temperature increases.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        There is a clear reason for the adaptations that butterflies are making to climate change.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        The data used in the study was taken from the work of amateur butterfly watchers.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-IgWhHunhjhOYd3hb-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- nc --}}
                                <fieldset class="q-item">
                                    <h3>Questions 7-13</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p>Write your answers in boxes on your answer sheet.</p>

                                    <p>The Small Blue</p>
                                    <p>
                                        * lives in large
                                        <span class="q-number-box">7</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="nc" name="nc-IgWhHunhjhOYd3hb-1" data-q="7" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                    </p>
                                    <p>
                                        * first appears at the start of
                                        <span class="q-number-box">8</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="nc" name="nc-IgWhHunhjhOYd3hb-2" data-q="8" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                    </p>
                                    <p>* completes more than one reproductive cycle per year</p>

                                    <p>The High Brown Fritillary</p>
                                    <p>* has one reproductive cycle</p>
                                    <p>
                                        * is considered to be more
                                        <span class="q-number-box">9</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="nc" name="nc-IgWhHunhjhOYd3hb-3" data-q="9" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        than other species
                                    </p>
                                    <p>
                                        * its caterpillars occupy a limited range of
                                        <span class="q-number-box">10</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="nc" name="nc-IgWhHunhjhOYd3hb-4" data-q="10" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                    </p>

                                    <p>The Silver-studded Blue</p>
                                    <p>
                                        * is already able to reproduce twice a year in warm areas of
                                        <span class="q-number-box">11</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="nc" name="nc-IgWhHunhjhOYd3hb-5" data-q="11" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                    </p>

                                    <p>The White Admiral</p>
                                    <p>
                                        * is found in
                                        <span class="q-number-box">12</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="nc" name="nc-IgWhHunhjhOYd3hb-6" data-q="12" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        areas of England
                                    </p>
                                    <p>
                                        * both climate change and the
                                        <span class="q-number-box">13</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="nc" name="nc-IgWhHunhjhOYd3hb-7" data-q="13" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        of the caterpillar are possible reasons for decline
                                    </p>
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
                            <h3 class="passage-title">Deep-sea Mining</h3>
                            <div class="passage-body">
                                <p><i>Bacteria from the ocean floor can beat superbugs and cancer. But habitats are at risk from the hunger for marine minerals</i></p>
                                <h3>C</h3>
                                <p>The deep sea contains more nickel, cobalt and rare earth metals than all land reserves combined, according to the US Geological Survey. Mining corporations argue that deep-sea exploration could help diversify the supply of metals and point to the fact that demand for resources such as copper, aluminum, cobalt for electric car batteries and other metals to power technology and smartphones, is soaring. They say that deep-sea mining could yield far superior ore to land mining with little, if any, waste. Different methods of extraction exist, but most involve employing some form of converted machinery previously used in terrestrial mining to excavate materials from the sea floor, at depths of up to 6,000 meters, then drawing a seawater slurry, containing rock and other solid particles, from the sea floor to ships on the surface. The slurry is then ‘de-watered ’ and transferred to another vessel for shipping. Extracted seawater is pumped back down and discharged close to the sea floor.</p>
                                <h3>D</h3>
                                <p>But environmental and legal groups have urged caution, arguing there are potentially massive and unknown ramifications for the environment and for nearby communities, and that the global regulatory framework is not yet drafted. ‘Despite arising in the last half century, the “new global gold rush” of deep-sea mining shares many features with past resource scrambles -including a general disregard for environmental and social impacts, and the marginalisation of indigenous peoples and their rights,a paper, written by Julie Hunter and Julian Aguon, from Blue Ocean Law,and Pradeep Singh, from the Center for Marine Environmental Sciences, Bremen, argues, ‘flic authors say that knowledge of the deep seabed remains extremely limited.‘The surface of the Moon, Mars and even Venus have all been mapped and studied in much greater detail, leading marine scientists to commonly remark that, with respect to the deep sea, “We don’t yet know what we need to know”.</p>
                                <h3>E</h3>
                                <p>Scientific research-including a recent paper in Marine Policy journal has suggested the deep seabed, and hydrothermal vents, which are created when seawater meets volcanic magma, have crucial impacts upon biodiversity and the global climate. The mineral-rich vents and their surrounds are also home to many well-known animals including crustaceans, tubeworms, clams, slugs, anemones and fish. ‘It is becoming increasingly clear that deep- sea mining poses a grave threat to these vital seabed functions,’ the paper says. ‘Extraction methods would produce large sediment plumes and involve the discharge of waste back into the ocean, significantly disturbing seafloor environments,’ the paper continues.‘On deep sea vents, scientists are clear,’ says Dr Jon Copley of the National Oceanography Centre, Southampton: ‘We don’t want mining on them.’</p>
                                <h3>F</h3>
                                <p>The oceans occupy around 70% of the planet and arc relatively unexplored, says Mike Johnston, chief executive of Nautilus, a Canadian underwater exploration company: ‘It makes sense to explore this untapped potential in an environmentally sustainable way, instead of continually looking at the fast depleting land resources of the planet to meet society’s rising needs.’Those leading the global rush to place giant mining machines thousands of metres below the sea surface say the environmental impacts will be far lower than on land. But critics say exotic and little-known ecosystems in the deep oceans could be destroyed and must be protected. ‘Mining will be the greatest assault on deep-sea ecosystems ever inflicted by humans,’ according to hydrothermal vent expert Vcrena TunniclifTe, at the University of Victoria in Canada. She argues that active vents must be off-limits for mining to protect the new knowledge and biotechnology spin-offs they can deliver, and that strict controls must be in place elsewhere.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 14-17</b></p>
                                    <p class="lead">Reading Passage has six paragraphs, <b>A-F</b>.</p>
                                    <p><i>Which paragraph contains the following information?</i></p>
                                    <p class="lead"><i>Write the correct letter, <b>A-F</b>, in boxes on your answer sheet.</i></p>
                                </fieldset>

                                {{-- matching_information --}}
                                <fieldset class="q-item" data-type="matching_information" data-q="14">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">14</span>
                                        <span style="flex: 1;">
                                            reference to the rapidly increasing need for one raw material in the transport industry
                                            <span class="q-question">
                                                <select name="matching_information-IgWhHunhjhOYd3hb-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="15">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">15</span>
                                        <span style="flex: 1;">
                                            a rough estimate of the area of the Earth covered by the oceans
                                            <span class="q-question">
                                                <select name="matching_information-IgWhHunhjhOYd3hb-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="16">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">16</span>
                                        <span style="flex: 1;">
                                            how a particular underwater habitat, where minerals and organisms co-exist, is formed
                                            <span class="q-question">
                                                <select name="matching_information-IgWhHunhjhOYd3hb-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="17">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">17</span>
                                        <span style="flex: 1;">
                                            reference to the fact that the countries of the world have yet to agree on rules for the exploration of the seabed
                                            <span class="q-question">
                                                <select name="matching_information-IgWhHunhjhOYd3hb-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- matching_features --}}
                                <fieldset class="q-item">
                                    <h3>Questions 18-23</h3>
                                    <p class="lead"><i>Look at the following statements and the list of people below.</i></p>
                                    <p><i>Match each statement with the correct person or people, <b>A-E</b>.</i></p>
                                    <p><i>Write the correct letter, <b>A-E</b>, in boxes on your answer sheet.</i></p>
                                    <p><b>NB</b>   You may use any letter more than once.</p>
                                    <b>List of People</b>
                                    <ul class="legend">
                                        <li><strong>A</strong> Professor Mat Upton</li>
                                        <li><strong>B</strong> Julie Hunter, Julian Aguon and Pradeep Singh</li>
                                        <li><strong>C</strong> Dr Jon Copley</li>
                                        <li><strong>D</strong> Mike Johnston</li>
                                        <li><strong>E</strong> Verena Tunnicliffe</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="18">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">18</span>
                                        <span style="flex: 1;">
                                             A move away from the exploration of heavily mined reserves on land is a good idea.
                                            <span class="q-question">
                                                <select name="matching_features-IgWhHunhjhOYd3hb-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="19">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">19</span>
                                        <span style="flex: 1;">
                                            The negative effects of undersea exploration on local areas and their inhabitants are being ignored. 
                                            <span class="q-question">
                                                <select name="matching_features-IgWhHunhjhOYd3hb-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="20">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">20</span>
                                        <span style="flex: 1;">
                                            There are more worthwhile things to extract from the sea than minerals. 
                                            <span class="q-question">
                                                <select name="matching_features-IgWhHunhjhOYd3hb-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="21">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">21</span>
                                        <span style="flex: 1;">
                                            No other form of human exploration will have such a destructive impact on marine life as deep-sea mining. 
                                            <span class="q-question">
                                                <select name="matching_features-IgWhHunhjhOYd3hb-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="22">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">22</span>
                                        <span style="flex: 1;">
                                            More is known about outer space than about what lies beneath the oceans.
                                            <span class="q-question">
                                                <select name="matching_features-IgWhHunhjhOYd3hb-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="23">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">23</span>
                                        <span style="flex: 1;">
                                            There is one marine life habitat where experts agree mining should not take place.
                                            <span class="q-question">
                                                <select name="matching_features-IgWhHunhjhOYd3hb-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 24-26</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                                    <h3 style="text-align: center">Mining the sea floor</h3>

                                    <p>
                                        Mining corporations believe that the mineral resources lying under the sea may be superior to those found in the earth. They also say that these can be removed without producing much
                                        <span class="q-number-box">24</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="summary_completion-IgWhHunhjhOYd3hb-1" data-q="24" data-type="summary_completion" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        .
                                    </p>

                                    <p>
                                        The extraction is often done by adapting the
                                        <span class="q-number-box">25</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="summary_completion-IgWhHunhjhOYd3hb-2" data-q="25" data-type="summary_completion" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        that has already been used to work on land. The method of excavation involves removing the seawater from the slurry that is brought up to ships and returning it to the seabed. However, concerned groups strongly believe that
                                        <span class="q-number-box">26</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" name="summary_completion-IgWhHunhjhOYd3hb-3" data-q="26" data-type="summary_completion" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        is necessary due to the possible number of unidentified consequences.
                                    </p>
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
                            <h3 class="passage-title">The Unselfish Gene</h3>
                            <div class="passage-body">
                                <p><i>A psychologist gives his view on how humans became self-centred</i></p>
                                <p>There has long been a general assumption that human beings are essentially selfish. We’re apparently ruthless, with strong impulses to compete against each other for resources and to accumulate power and possessions. If we are kind to one another, it’s usually because we have ulterior motives. If we are good, it’s only because we have managed to control and transcend our innate selfishness and brutality.</p>
                                <p>This bleak view of human nature is closely associated with the science writer Richard Dawkins, whose 1976 book The Selfish Gene became popular because it fitted so well with-and helped to justify-the competitive and individualistic ethos that was so prevalent in late 20th-century societies. Like many others, Dawkins justifies his views with reference to the field of evolutionary psychology. Evolutionary psychology theorises that present-day human traits developed in prehistoric times, during what is termed the ‘environment of evolutionary adaptedness’.</p>
                                <p>Prehistory is usually seen as a period of intense competition, when life was such a brutal battle that only those with traits such as selfishness, aggression and ruthlessness survived. And because survival depended on access to resources – such as rivers, forests and animals – there was bound to be conflict between rival groups, which led to the development of traits such as racism and warfare. This seems logical. But, in fact, the assumption on which this all rests – that prehistoric life was a desperate struggle for survival – is false.</p>
                                <p>It’s important to remember that in the prehistoric era, the world was very sparsely populated. According to some estimates, around 15,000 years ago, the population of Europe was only 29,000, and the population of the whole world was less than half a million. Humans at that time were hunter-gatherers: people who lived by hunting wild animals and collecting wild plants. With such small population densities, it seems unlikely that prehistoric hunter-gatherer groups had to compete against each other for resources or had any need to develop ruthlessness and competitiveness, or to go to war.</p>
                                <p>There is significant evidence to back this notion from contemporary hunter-gatherer groups, who live in the same way as prehistoric humans did. As the anthropologist Bruce Knauft has remarked, hunter-gatherers are characterized by ‘extreme political and sexual egalitarianism’. Knauft has observed that individuals in such groups don’t accumulate property or possessions and have an ethical obligation to share everything. They also have methods of preserving egalitarianism by ensuring that disparities of status don’t arise.</p>
                                <p>The !Kung people of southern Africa, for example, swap arrows before going hunting and when an animal is killed, the acclaim does not go to the person who fired the arrow, but to the person the arrow belongs to. And if a person becomes too domineering, the other members of the group ostracise them, exiling the offender from society. Typically in such groups, men do not dictate what women do. Women in hunter-gatherer groups worldwide often benefit from a high level of autonomy, being able to select their own marriage partners, decide what work they do and work whenever they choose to. And if a marriage breaks down, they have custody rights over their children.</p>
                                <p>Many anthropologists believe that societies such as the !Kung were normal until a few thousand years ago, when population growth led to the development of agriculture and a settled lifestyle. In view of the above, there seems little reason to assume that traits such as racism, warfare and male domination should have been selected by evolution-as they would have been of little benefit in the prehistoric era. Individuals who behaved selfishly and ruthlessly would be less likely to survive, since they would have been ostracised from their groups.</p>
                                <p>It makes more sense, then, to see traits such as cooperation, egalitarianism, altruism and peacefulness as innate characteristics of human beings. These were the traits that were prevalent in human life for tens of thousands of years. So presumably these traits are still strong in us now.</p>
                                <p>But if prehistoric life wasn’t really as brutal as has often been assumed, why do modern humans behave so selfishly and ruthlessly? Perhaps these negative traits should be seen as a later development, the result of environmental and psychological factors. Research has shown repeatedly that when the natural habitats of primates such as apes and gorillas are disrupted, they tend to become more violent and hierarchical.</p>
                                <p>So, it could well be that the same thing has happened to us. I believe that the end of the hunter-gatherer lifestyle and the advent of farming was connected to a psychological change that occurred in some groups of people. There was a new sense of individuality and separateness, which led to a new selfishness, and ultimately to hierarchical societies, patriarchy and warfare. At any rate, these negative traits appear to have developed so recently that it doesn’t seem feasible to explain them in adaptive or evolutionary terms.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body"> 
                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <h3>Question 27-30</h3>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-type="oc" data-q="27">
                                    <legend class="q-text">
                                        <span class="q-number">27</span>
                                        What is the writer doing in the first paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">setting out two opposing views about human nature</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">justifying his opinion about our tendency to be greedy</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">describing a commonly held belief about people’s behaviour</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">explaining why he thinks that humans act in a selfish manner</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="28">
                                    <legend class="q-text">
                                        <span class="q-number">28</span>
                                        What point is made about Richard Dawkins’ book The Selfish Gene?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Its appeal lay in the radical nature of its ideas.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Its success was due to the scientific support it offered.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It presented a view that was in line with the attitudes of its time.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It took an innovative approach to the analysis of human psychology.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="29">
                                    <legend class="q-text">
                                        <span class="q-number">29</span>
                                        What does the writer suggest about the prehistoric era in the fourth paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Societies were more complex than many people believe.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Supplies of natural resources were probably relatively plentiful.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Most estimates about population sizes are likely to be inaccurate.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Humans moved across continents more than was previously thought.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="30">
                                    <legend class="q-text">
                                        <span class="q-number">30</span>
                                        The writer refers to Bruce Knauft’s work as support for the idea that
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">selfishness is a relatively recent development in human societies.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">only people in isolated communities can live in an unselfish manner.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">very few lifestyles have survived unchanged since prehistoric times.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-IgWhHunhjhOYd3hb-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">hunter-gatherer cultures worldwide are declining in number.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 31-35</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                                    <h3 style="text-align: center">Contemporary hunter-gatherer societies</h3>

                                    <p>
                                        Bruce Knauft’s research shows that contemporary hunter-gatherer societies tend to exhibit a high level of
                                        <span class="q-number-box">31</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="summary_completion" data-q="31" name="summary_completion-IgWhHunhjhOYd3hb-4" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        in all areas of life. In these cultures, distributing resources fairly among all members is a moral obligation. These societies also employ strategies to prevent differences in
                                        <span class="q-number-box">32</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="summary_completion" data-q="32" name="summary_completion-IgWhHunhjhOYd3hb-5" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        occurring: for example, the !Kung follow a custom whereby the credit for one person’s success at
                                        <span class="q-number-box">33</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="summary_completion" data-q="33" name="summary_completion-IgWhHunhjhOYd3hb-6" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        is given to another member of the group. Individuals who behave in a
                                        <span class="q-number-box">34</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="summary_completion" data-q="34" name="summary_completion-IgWhHunhjhOYd3hb-7" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        manner are punished by being excluded from the group, and women have a considerable amount of
                                        <span class="q-number-box">35</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <input type="text" data-type="summary_completion" data-q="35" name="summary_completion-IgWhHunhjhOYd3hb-8" class="q-text" placeholder="">
                                            </span>
                                        </span>
                                        in choices regarding work and marriage.
                                    </p>
                                </fieldset>

                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <h3>Question 36-40</h3>
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
                                        Some anthropologists are mistaken about the point when the number of societies such as the !Kung began to decline.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 36 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="37">
                                    <legend class="q-text">
                                        <span class="q-number">37</span>
                                        Humans who developed warlike traits in prehistory would have had an advantage over those who did not.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 37 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="38">
                                    <legend class="q-text">
                                        <span class="q-number">38</span>
                                        Being peaceful and cooperative is a natural way for people to behave.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 38 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="39">
                                    <legend class="q-text">
                                        <span class="q-number">39</span>
                                        Negative traits are more apparent in some modern cultures than in others.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 39 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="40">
                                    <legend class="q-text">
                                        <span class="q-number">40</span>
                                        Animal research has failed to reveal a link between changes in the environment and the emergence of aggressive tendencies.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 40 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-IgWhHunhjhOYd3hb-5" value="NOT GIVEN" />
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
