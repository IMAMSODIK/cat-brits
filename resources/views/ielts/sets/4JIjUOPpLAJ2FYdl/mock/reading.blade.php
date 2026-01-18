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
                            <h3 class="passage-title">Georgia O’Keeffe</h3>
                            <div class="passage-body">
                                <p>For seven decades, Georgia O’Keeffe (1887-1986) was a major figure in American art. Remarkably, she remained independent from shifting art trends and her work stayed true to her own vision, which was based on finding the essential, abstract forms in nature. With exceptionally keen powers of observation and great finesse with a paintbrush, she recorded subtle nuances of colour, shape, and light that enlivened her paintings and attracted a wide audience.</p>
                                <p>Born in 1887 near Sun Prairie, Wisconsin to cattle breeders Francis and Ida O’Keeffe, Georgia was raised on their farm along with her six siblings. By the time she graduated from high school in 1905, she had determined to make her way as an artist. She studied the techniques of traditional painting at the Art Institute of Chicago school (1905) and the Art Students League of New York (1907-8). After attending university and then training college, she became an art teacher and taught in elementary schools, high schools, and colleges in Virginia, Texas, and South Carolina from 1911 to 1918.</p>
                                <p>During this period, O’Keeffe began to experiment with creating abstract compositions in charcoal, and produced a series of innovative drawings that led her art in a new direction. She sent some of these drawings to a friend in New York, who showed them to art collector and photographer Alfred Stieglitz in January 1916. Stieglitz was impressed, and exhibited the drawings later that year at his gallery on Fifth Avenue, New York City, where the works of many avant-garde artists and photographers were introduced to the American public.</p>
                                <p>With Stieglitz’s encouragement and promise of financial support, O’Keeffe arrived in New York in June 1918 to begin a career as an artist. For the next three decades, Stieglitz vigorously promoted her work in twenty-two solo exhibitions and numerous group installations. The two were married in 1924. The ups and downs of their personal and professional relationship were recorded in Stieglitz’s celebrated black-and-white portraits of O’Keeffe, taken over the course of twenty years (1917-37).</p>
                                <p>By the mid-1920s, O’Keeffe was recognized as one of America’s most important and successful artists, widely known for the architectural pictures that dramatically depict the soaring skyscrapers of New York. But most often, she painted botanical subjects, inspired by annual trips to the Stieglitz family summer home. In her magnified images depicting flowers, begun in 1924, O’Keeffe brings the viewer right into the picture.</p>
                                <p>Enlarging the tiniest details to fill an entire metre-wide canvas emphasized their shapes and lines and made them appear abstract. Such daring compositions helped establish O’Keeffe’s reputation as an innovative modernist.</p>
                                <p>In 1929, O’Keeffe made her first extended trip to the state of New Mexico. It was a visit that had a lasting impact on her life, and an immediate effect on her work. Over the next two decades she made almost annual trips to New Mexico, staying up to six months there, painting in relative solitude, then returning to New York each winter to exhibit the new work at Stieglitz’s gallery. This pattern continued until she moved permanently to New Mexico in 1949.</p>
                                <p>There, O’Keeffe found new inspiration: at first, it was the numerous sun-bleached bones she came across in the state’s rugged terrain that sparked her imagination. Two of her earliest and most celebrated Southwestern paintings exquisitely reproduce a cow skull’s weathered surfaces, jagged edges, and irregular openings. Later, she also explored another variation on this theme in her large series of Pelvis pictures, which focused on the contrasts between convex and concave surfaces, and solid and open spaces.</p>
                                <p>However, it was the region’s spectacular landscape, with its unusual geological formations, vivid colours, clarity of light, and exotic vegetation, that held the artist’s imagination for more than four decades. Often, she painted the rocks, cliffs, and mountains in striking close-up, just as she had done with her botanical subjects.</p>
                                <p>O’Keeffe eventually owned two homes in New Mexico – the first, her summer retreat at Ghost Ranch, was nestled beneath 200-metre cliffs, while the second, used as her winter residence, was in the small town of Abiquiú. While both locales provided a wealth of imagery for her paintings, one feature of the Abiquiú house – the large walled patio with its black door – was particularly inspirational. In more than thirty pictures between 1946 and 1960, she reinvented the patio into an abstract arrangement of geometric shapes.</p>
                                <p>From the 1950s into the 1970s, O’Keeffe travelled widely, making trips to Asia, the Middle East, and Europe. Flying in planes inspired her last two major series – aerial views of rivers and expansive paintings of the sky viewed from just above clouds. In both series, O’Keeffe increased the size of her canvases, sometimes to mural proportions, reflecting perhaps her newly expanded view of the world. When in 1965 she successfully translated one of her cloud motifs to a monumental canvas measuring 6 metres in length (with the help of assistants), it was an enormous challenge and a special feat for an artist nearing eighty years of age.</p>
                                <p>The last two decades of the artist’s life were relatively unproductive as ill health and blindness hindered her ability to work. O’Keeffe died in 1986 at the age of ninety-eight, but her rich legacy of some 900 paintings has continued to attract subsequent generations of artists and art lovers who derive inspiration from these very American images.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- nc --}}
                                <fieldset class="q-item">
                                    <h3>Questions 1-7</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p>Write your answers in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <p><b>The Life and Work of Georgia O’Keefe</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="1">
                                                studied art, then worked as a
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="nc-4JIjUOPpLAJ2FYdl-1" class="q-text" placeholder="">
                                                in various places in the USA
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="2">
                                                created drawings using
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="nc-4JIjUOPpLAJ2FYdl-2" class="q-text" placeholder="">
                                                which were exhibited in New York City
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="3">
                                                moved to New York and became famous for her paintings of the city’s
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="nc-4JIjUOPpLAJ2FYdl-3" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="4">
                                                produced a series of innovative close-up paintings of
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="nc-4JIjUOPpLAJ2FYdl-4" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="5">
                                                went to New Mexico and was initially inspired to paint the many
                                                <span class="q-number-box">5</span>
                                                <input type="text" name="nc-4JIjUOPpLAJ2FYdl-5" class="q-text" placeholder="">
                                                that could be found there
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="6">
                                                continued to paint various features that together formed the dramatic
                                                <span class="q-number-box">6</span>
                                                <input type="text" name="nc-4JIjUOPpLAJ2FYdl-6" class="q-text" placeholder="">
                                                of New Mexico for over forty years
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="7">
                                                travelled widely by plane in later years, and painted pictures of clouds and
                                                <span class="q-number-box">7</span>
                                                <input type="text" name="nc-4JIjUOPpLAJ2FYdl-7" class="q-text" placeholder="">
                                                seen from above.
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>

                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 8-13</b></p>
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
                                <fieldset class="q-item" data-type="tfng" data-q="8">
                                    <legend class="q-text">
                                        <span class="q-number">8</span>
                                        Georgia O’Keeffe’s style was greatly influenced by the changing fashions in art over the seven decades of her career.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 8 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="9">
                                    <legend class="q-text">
                                        <span class="q-number">9</span>
                                        When O’Keeffe finished high school, she had already made her mind up about the career that she wanted.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 9 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="10">
                                    <legend class="q-text">
                                        <span class="q-number">10</span>
                                        Alfred Stieglitz first discovered O’Keeffe’s work when she sent some abstract drawings to his gallery in New York City.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 10 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="11">
                                    <legend class="q-text">
                                        <span class="q-number">11</span>
                                        O’Keeffe was the subject of Stieglitz’s photographic work for many years.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="12">
                                    <legend class="q-text">
                                        <span class="q-number">12</span>
                                        O’Keeffe’s paintings of the patio of her house in Abiquiu were among the artist’s favourite works.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="13">
                                    <legend class="q-text">
                                        <span class="q-number">13</span>
                                        O’Keeffe produced a greater quantity of work during the 1950s to 1970s than at any other time in her life.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-4JIjUOPpLAJ2FYdl-6" value="NOT GIVEN" />
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
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Adapting to the effects of climate change</h3>
                            <div class="passage-body">
                                <h3>A</h3>
                                <p>All around the world, nations are already preparing for, and adapting to, climate change and its impacts. Even if we stopped all CO2 emissions tomorrow, we would continue to see the impact of the CO2 already released since industrial times, with scientists forecasting that global warming would continue for around 40 years. In the meantime, ice caps would continue to melt and sea levels rise. Some countries and regions will suffer more extreme impacts from these changes than others. It’s in these places that innovation is thriving.</p>
                                <h3>B</h3>
                                <p>In Miami Beach, Florida, USA, seawater isn’t just breaching the island city’s walls, it’s seeping up through the ground, so the only way to save the city is to lift it up above sea level. Starting in the lowest and most vulnerable neighbourhoods, roads have been raised by as much as 61 centimetres. The elevation work was carried out as part of Miami Beach’s ambitious but much-needed stormwater-management programme. In addition to the road adaptations, the city has set up new pumps that can remove up to 75,000 litres of water per minute. In the face of floods, climate-mitigation strategies have often been overlooked, says Yanira Pineda, a senior sustainability coordinator. She knows that they’re essential and that the job is far from over. ‘We know that in 20, 30, 40 years, we’ll need to go back in there and adjust to the changing environment,’ she says.</p>
                                <h3>C</h3>
                                <p> Seawalls are a staple strategy for many coastal communities, but on the soft, muddy northern shores of Java, Indonesia, they frequently collapse, further exacerbating coastal erosion. There have been many attempts to restore the island’s coastal mangroves: ecosystems of trees and shrubs that help defend coastal areas by trapping sediment in their net-like root systems, elevating the sea bed and dampening the energy of waves and tidal currents. But Susanna Tol of the not-for-profit organisation Wetlands International says that, while hugely popular, the majority of mangrove-planting projects fail. So, Wetlands International started out with a different approach, building semi-permeable dams, made from bamboo poles and brushwood, to mimic the role of mangrove roots and create favourable conditions for mangroves to grow back naturally. The programme has seen moderate success, mainly in areas with less subsidence. “Unfortunately, traditional infrastructure is often single-solution focused,’ says Tol. ‘For long-term success, it’s critical that we transition towards multifunctional approaches that embed natural processes and that engage and benefit communities and local decision-makers.”</p>
                                <h3>D</h3>
                                <p>As the floodwaters rose in the rice fields of the Mekong Delta in September 2018, four small houses rose with them. Homes in this part of Vietnam are traditionally built on stilts but these ones had been built to float. The modifications were made by the Buoyant Foundation Project, a not-for-profit organisation that has been researching and retrofitting amphibious houses since 2006. ‘When I started this,’ explains founder Elizabeth English, ‘climate change was not on the tip of everybody’s tongue,’ but this technology is becoming necessary in places that didn’t previously need it. It’s much cheaper than permanently elevating houses, English explains – about a third of what it would cost to completely replace a building’s foundations. It also avoids the problem of taller houses being at greater risk from wind damage. Another plus comes from the fact that amphibious structures can be sensitively adapted to meet cultural needs and match the kind of houses that are already common in a community.</p>
                                <h3>E</h3>
                                <p>Bangladesh is especially vulnerable to climate change. Most of the country is less than a metre above sea level and 80 per cent of its land lies on floodplains. ‘Almost 35 million people living on the coastal belt of Bangladesh are currently affected by soil and water salinity,’ says Raisa Chowdhury of the international development organisation ICCO Cooperation. Rather than fighting against it, one project is helping communities adapt to salt-affected soils. ICCO Cooperation has been working with 10,000 farmers in Bangladesh to start cultivating naturally salt-tolerant crops in the region. Certain varieties of carrot, potato, kohlrabi, cabbage and beetroot have been found to be better suited to salty soil than the rice and wheat that is typically grown there. Chowdhury says that the results are very visible, comparing a barren plot of land to the ‘beautiful, lush green vegetable garden’ sitting beside it, in which he and his team have been working with the farmers. Since the project began, farmers trained in saline agriculture have reported increases of two to three more harvests per year.</p>
                                <h3>F</h3>
                                <p>Greg Spotts from Los Angeles (LA) in the USA is chief sustainability officer of the city’s street services department. He leads the Cool Streets LA programme, a series of pilot projects, which include the planting of trees and the installation of a ‘cool pavement’ system, designed to help reach the city’s goal of bringing down its average temperature by 1.5°C. ‘Urban cooling is literally a matter of life and death for our future in LA,’ says Spotts. Using a Geographic Information System data mapping tool, the programme identified streets with low tree canopy cover in three of the city’s neighbourhoods and covered them with a light-grey, light-reflecting coating, which had already been shown to lower road surface temperature in Los Angeles by 6°C. Spotts says one of these streets, in the Winnetka neighbourhood of San Fernando Valley, can now be seen as a pale crescent, the only cool spot on an otherwise red thermal image, from the International Space Station.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- matching_information --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 14-17</b></p>
                                    <p>Reading Passage has six paragraphs, <b>A–F</b>.</p>
                                    <p>Which paragraph contains the following information?</p>
                                    <p>Write the correct letter, <b>A–F</b>, in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="14">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">14</span>
                                        <span style="flex: 1;">
                                            how a type of plant functions as a natural protection for coastlines
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-1" class="q-dropdown">
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
                                            a prediction about how long it could take to stop noticing the effects of climate change
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-2" class="q-dropdown">
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
                                            a reference to the fact that a solution is particularly cost-effective
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-3" class="q-dropdown">
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
                                            a mention of a technology used to locate areas most in need of intervention
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-4" class="q-dropdown">
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

                                {{-- sentence_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 18-22</h3>
                                    <p class="lead">Complete the sentences below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="18">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">18</span>
                                        <span style="flex: 1;">
                                            The stormwater-management programme in Miami Beach has involved the installation of efficient 
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-4JIjUOPpLAJ2FYdl-1" class="q-text"
                                                    placeholder="" data-q="18">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="19">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">19</span>
                                        <span style="flex: 1;">
                                            The construction of
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-4JIjUOPpLAJ2FYdl-2" class="q-text"
                                                    placeholder="" data-q="19">
                                            </span>
                                            was the first stage of a project to ensure the success of mangroves in Indonesia.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="20">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">20</span>
                                        <span style="flex: 1;">
                                            As a response to rising floodwaters in the Mekong Delta, a not-for-profit organisation has been building houses that can
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-4JIjUOPpLAJ2FYdl-3" class="q-text"
                                                    placeholder="" data-q="20">
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="21">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">21</span>
                                        <span style="flex: 1;">
                                            Rising sea levels in Bangladesh have made it necessary to introduce various
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-4JIjUOPpLAJ2FYdl-4" class="q-text"
                                                    placeholder="" data-q="21">
                                            </span>
                                            that are suitable for areas of high salt content.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="22">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">22</span>
                                        <span style="flex: 1;">
                                            A project in LA has increased the number of
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-4JIjUOPpLAJ2FYdl-5" class="q-text"
                                                    placeholder="" data-q="22">
                                            </span>
                                            on the city’s streets.
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- matching_features --}}
                                <fieldset class="q-item">
                                    <h3>Questions 23-26</h3>
                                    <p class="lead">Look at the following statements and the list of people below.</p>
                                    <p>Match each statement with the correct person,</p>
                                    <p>Write the correct letter, <b>A E</b>, in boxes on your answer sheet.</p>
                                    <b>List of People</b>
                                    <ul class="legend">
                                        <li><strong>A</strong>. Yanira Pineda</li>
                                        <li><strong>B</strong>. Susanna Tol</li>
                                        <li><strong>C</strong>. Elizabeth English</li>
                                        <li><strong>D</strong>. Raisa Chowdhury</li>
                                        <li><strong>E</strong>. Greg Spotts</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="23">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">23</span>
                                        <span style="flex: 1;">
                                            It is essential to adopt strategies which involve and help residents of the region.
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-1" class="q-dropdown">
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
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="24">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">24</span>
                                        <span style="flex: 1;">
                                            Interventions which reduce heat are absolutely vital for our survival in this location.
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-2" class="q-dropdown">
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
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="25">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">25</span>
                                        <span style="flex: 1;">
                                            More work will need to be done in future decades to deal with the impact of rising water levels.
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-3" class="q-dropdown">
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
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="26">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">26</span>
                                        <span style="flex: 1;">
                                            The number of locations requiring action to adapt to flooding has grown in recent years.
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-4" class="q-dropdown">
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
                                    </legend>
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
                            <h3 class="passage-title">A new role for livestock guard dogs</h3>
                            <div class="passage-body">
                                <p>Livestock guard dogs, traditionally used to protect farm animals from predators, are now being used to protect the predators themselves</p>
                                <h3>A</h3>
                                <p>For thousands of years, livestock guard dogs worked alongside shepherds to protect their sheep, goats and cattle from predators such as wolves and bears. But in the 19th and 20th centuries, when such predators were largely exterminated, most guard dogs lost their jobs. In recent years, however, as increased efforts have been made to protect wild animals, predators have become more widespread again. As a result, farmers once more need to protect their livestock, and guard dogs are enjoying an unexpected revival.</p>
                                <h3>B</h3>
                                <p>Today there are around 50 breeds of guard dogs on duty in various parts of the world. These dogs are raised from an early age with the animals they will be watching and eventually these animals become the dog’s family. The dogs will place themselves between the livestock and any threat, barking loudly. If necessary, they will chase away predators, but often their mere presence is sufficient. ‘Their initial training is to make them understand that livestock is going to be their life,’ says Dan Macon, a shepherd with three guard dogs. ‘A fluffy white puppy is fun to be around, but too much human affection makes it a great dog for guarding the front porch, rather than a great livestock guard dog.’</p>
                                <h3>C</h3>
                                <p>The evidence indicates that guard dogs are highly effective. For example, in Portugal, biologist Silvia Ribeiro has found that more than 90 per cent of the farmers participating in a programme to train and use guard dogs to protect their herds against attack from wolves rate the performance of the dogs as very good or excellent. In a study carried out in Australia by Linda van Bommel and Chris Johnson at the University of Tasmania, more than 65 per cent of herders reported that predation stopped completely after they got the dogs, and almost all the rest saw a decrease in attacks. ‘If they are managed and used properly, livestock guard dogs are the most efficient control method that we have in terms of the amount of livestock that they save from predation,’ says van Bommel.</p>
                                <h3>D</h3>
                                <p>But today’s guard dogs also have a new role – to help preserve the predators. It is hoped that reductions in livestock losses can make farmers more tolerant of predators and less likely to kill them. In Namibia, more than 90 per cent of cheetahs live outside protected areas, close to humans raising livestock. As a result, the cheetahs are often held responsible for animal losses, and large numbers have been killed by farmers. When guard dogs were introduced, more than 90 per cent of farmers reported a dramatic reduction in livestock losses, and said that as a result they were less likely to kill predators. Julie Young, at Utah State University in the US, believes this result applies widely. “There is common ground from the livestock perspective and from the conservation perspective,’ she says. ‘If ranchers don’t have a dead cow, they will not make a call to apply for a permit to kill a wolf.’</p>
                                <h3>E</h3>
                                <p>Looking at all the published evidence, Bethany Smith at Nottingham Trent University in the UK found that up to 88 per cent of farmers said they no longer killed predators after using dogs – but warned that such self-reported results must be taken with a pinch of salt. What’s more, it is possible that livestock guard dogs merely displace predators to unprotected neighbouring properties, where their fate isn’t recorded. ‘In some regions, we work with almost every farmer, but in others only one or two have dogs,’ says Ribeiro. ‘If we are not working with everybody, we are transferring the wolf pressure to the neighbour’s herd and he can use poison and kill an entire pack of wolves.’</p>
                                <h3>F</h3>
                                <p>Another concern is whether there may be unintended ecological effects of using guard dogs. Studies suggest that reducing deaths of one type of predator may have a negative impact on other species. The extent of this problem isn’t known, but the consequences are clear in Namibia. Cheetahs aren’t the only species that cause sheep and goat losses there: other predators also attack livestock. In 2015, researchers reported that in spite of the impact farmers obtaining guard dogs had on cheetahs, the number of jackals killed by dogs and people actually increased. Guard dogs have other ecological impacts too. They have been found to spread diseases to wild animals, including endangered Ethiopian wolves. They may also compete with other carnivores for food. And by creating a ‘landscape of fear’, their mere presence can influence the behaviour of prey animals.</p>
                                <h3>G</h3>
                                <p>The evidence so far, however, indicates that these consequences aren’t always negative. Guard dogs can deliver unexpected benefits by protecting vulnerable wildlife from predators. For example, their presence has been found to protect birds which build their nests on the ground in fields, where foxes would normally raid them. Indeed, Australian researchers are now using dogs to enhance biodiversity and create refuges for species threatened by predation. So if we can get this right, there may be a bright future for guard dogs in promoting harmonious coexistence between humans and wildlife.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- matching_information 2 --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 27-31</b></p>
                                    <p>Which paragraph contains the following information ?</p>
                                    <p>Write the correct letter, <b>A-G</b>, in boxes on your answer sheet.</p>
                                    <p><b>NB</b> You may use any letter more than once.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="27">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">27</span>
                                        <span style="flex: 1;">
                                            An example of how one predator has been protected by the introduction of livestock guard dogs
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="28">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">28</span>
                                        <span style="flex: 1;">
                                            An optimistic suggestion about the possible positive developments in the use of livestock guard dogs
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-6" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="29">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">29</span>
                                        <span style="flex: 1;">
                                            A description of how the methods used by livestock guard dogs help to keep predators away
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-7" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="30">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">30</span>
                                        <span style="flex: 1;">
                                            Claims by different academics that the use of livestock guard dogs is a successful way of protecting farmers’ herds
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-8" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="31">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">31</span>
                                        <span style="flex: 1;">
                                            A reference to how livestock guard dogs gain their skills
                                            <span class="q-question">
                                                <select name="matching_information-4JIjUOPpLAJ2FYdl-9" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- matching_features 2 --}}
                                <fieldset class="q-item">
                                    <h3>Questions 32-36</h3>
                                    <p class="lead">Look at the following statements and the list of people below.</p>
                                    <p>Match each statement with the correct person,</p>
                                    <p>Write the correct letter, <b>A E</b>, in boxes on your answer sheet.</p>
                                    <b>List of People</b>
                                    <ul class="legend">
                                        <li><strong>A</strong>. Dan Macon</li>
                                        <li><strong>B</strong>. Silvia Ribeiro</li>
                                        <li><strong>C</strong>. Linda van Bommel</li>
                                        <li><strong>D</strong>. Julie Young</li>
                                        <li><strong>E</strong>. Bethany Smith</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="32">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">32</span>
                                        <span style="flex: 1;">
                                            The use of guard dogs may save the lives of both livestock and wild animals.
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-5" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="33">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">33</span>
                                        <span style="flex: 1;">
                                            Claims of a change in behaviour from those using livestock guard dogs may not be totally accurate.
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-6" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="34">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">34</span>
                                        <span style="flex: 1;">
                                            There may be negative results if the use of livestock guard dogs is not sufficiently widespread.
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-7" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="35">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">35</span>
                                        <span style="flex: 1;">
                                            Livestock guard dogs are the best way of protecting farm animals, as long as the dogs are appropriately handled. 
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-8" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="36">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">36</span>
                                        <span style="flex: 1;">
                                            Teaching a livestock guard dog how to do its work needs a different focus from teaching a house guard dog. 
                                            <span class="q-question">
                                                <select name="matching_features-4JIjUOPpLAJ2FYdl-9" class="q-dropdown">
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
                                    <h3>Questions 37-40</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p>Write your answers in boxes on your answer sheet.</p>

                                    <p><b>Unintended Ecological Effects of Using Guard Dogs</b></p>
                                    <p>In Namibia, livestock guard dogs have been used to protect domestic animals from attacks by cheetahs.</p>
                                    <p>
                                        This has led to a rise in the deaths of other predators, particularly
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="summary_completion-4JIjUOPpLAJ2FYdl-1" data-q="37" data-type="summary_completion" class="q-text" placeholder="">
                                        . In addition, it has been suggested that the dogs could have
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="summary_completion-4JIjUOPpLAJ2FYdl-2" data-q="38" data-type="summary_completion" class="q-text" placeholder="">
                                        which may affect other species, and that they may reduce the amount of
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="summary_completion-4JIjUOPpLAJ2FYdl-3" data-q="39" data-type="summary_completion" class="q-text" placeholder="">
                                        available to certain wild animals.
                                    </p>
                                    <p>
                                        On the other hand, these dogs may help birds by protecting their nests. These might otherwise be threatened by predators such as
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="summary_completion-4JIjUOPpLAJ2FYdl-4" data-q="40" data-type="summary_completion" class="q-text" placeholder="">
                                    </p>
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
