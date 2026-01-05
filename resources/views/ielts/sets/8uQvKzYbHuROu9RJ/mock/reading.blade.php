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
                            <h3 class="passage-title">Materials to take us beyond concrete</h3>
                            <div class="passage-body">
                                <p><i>Concrete is everywhere, but it’s bad for the planet, generating large amounts of carbon dioxide – alternatives are being developed</i></p>
                                <h3>A</h3>
                                <p>Concrete is the second most used substance in the global economy, after water – and one of the world’s biggest single sources of greenhouse gas emissions. The chemical process by which cement, the key ingredient of concrete, is created results in large quantities of carbon dioxide. The UN estimates that there will be 9.8 billion people living on the planet by mid-century. They will need somewhere to live. If concrete is the only answer to the construction of new cities, then carbon emissions will soar, aggravating global warming. And so scientists have started innovating with other materials, in a scramble for alternatives to a universal commodity that has underpinned our modem life for many years.</p>
                                <h3>B</h3>
                                <p>The problem with replacing concrete is that it is so very good at what it does. Chris Cheeseman, an engineering professor at Imperial College London, says the key thing to consider is the extent to which concrete is used around the world, and is likely to continue to be used. ‘Concrete is not a high-carbon product. Cement is high carbon, but concrete is not. But it is the scale on which it is used that makes it high carbon. The sheer scale of manufacture is so huge, that is the issue.’</p>
                                <h3>C</h3>
                                <p>Not only are the ingredients of concrete relatively cheap and found in abundance in most places around the globe, the stuff itself has marvellous properties: Portland cement, the vital component of concrete, is mouldable and pourable, but quickly sets hard. Cheeseman also notes another advantage: concrete and steel have similar thermal expansion properties, so steel can be used to reinforce concrete, making it far stronger and more flexible as a building material than it could be on its own. According to Cheeseman, all these factors together make concrete hard to beat. ‘Concrete is amazing stuff. Making anything with similar properties is going to be very difficult.’</p>
                                <h3>D</h3>
                                <p>A possible alternative to concrete is wood. Making buildings from wood may seem like a rather medieval idea, but climate change is driving architects to turn to treated timber as a possible resource. Recent years have seen the emergence of tall buildings constructed almost entirely from timber. Vancouver, Vienna and Brumunddal in Norway are all home to constructed tall, wooden buildings.</p>
                                <h3>E</h3>
                                <p>Using wood to construct buildings, however, is not straightforward. Wood expands as it absorbs moisture from the air and is susceptible to pests, not to mention fire. But treating wood and combining it with other materials can improve its properties. Cross-laminated timber is engineered wood. An adhesive is used to stick layers of solid-sawn timber together, crosswise, to form building blocks. This material is light but has the strength of concrete and steel. Construction experts say that wooden buildings can be constructed at a greater speed than ones of concrete and steel and the process, it seems, is quieter.</p>
                                <h3>F</h3>
                                <p>Stora Enso is Europe’s biggest supplier of cross-laminated timber, and its vice-president Markus Mannstrom reports that the company is seeing increasing demand globally for building in wood, with climate change concerns the key driver. Finland, with its large forests, where Stora Enso is based, has been leading the way, but the company is seeing a rise in demand for its timber products across the world, including in Asia. Of course, using timber in a building also locks away the carbon that it absorbed as it grew. But even treated wood has its limitations and only when a wider range of construction projects has been proven in practice will it be possible to see wood as a real alternative to concrete in constructing tall buildings.</p>
                                <h3>G</h3>
                                <p>Fly ash and slag from iron ore are possible alternatives to cement in a concrete mix. Fly ash, a byproduct of coal-burning power plants, can be incorporated into concrete mixes to make up as much as 15 to 30% of the cement, without harming the strength or durability of the resulting mix. Iron-ore slag, a byproduct of the iron-ore smelting process, can be used in a similar way. Their incorporation into concrete mixes has the potential to reduce greenhouse gas emissions.</p>
                                <p>But Anna Surgenor, of the UK’s Green Building Council, notes that although these waste products can save carbon in the concrete mix, their use is not always straightforward. ‘It’s possible to replace the cement content in concrete with waste products to lower the overall carbon impact. But there are several calculations that need to be considered across the entire life cycle of the building- these include factoring in where these materials are being shipped from. If they are transported over long distances, using fossil fuels, the use of alternative materials might not make sense from an overall carbon reduction perspective.’</p>
                                <h3>H</h3>
                                <p>While these technologies are all promising ideas, they are either unproven or based on materials that are not abundant. In their overview of innovation in the concrete industry, Felix Preston and Johanna Lehne of the UK’s Royal Institute of International Affairs reached the conclusion that, ‘Some novel cements have been discussed for more than a decade within the research community, without breaking through. At present, these alternatives are rarely as cost-effective as conventional cement, and they face raw-material shortages and resistance from customers.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- matching_information --}}
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 1-4</b></p>
                                    <p class="lead">The Reading Passage has eight sections, <b>A-H</b>.</p>
                                    <p>Which section contains the following information?</p>
                                    <p class="lead">Write the correct letter, <b>A-H</b>, in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="1">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">1</span>
                                        <span style="flex: 1;">
                                            an explanation of the industrial processes that create potential raw materials for concrete
                                            <span class="q-question">
                                                <select name="matching_information-8uQvKzYbHuROu9RJ-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="2">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">2</span>
                                        <span style="flex: 1;">
                                            a reference to the various locations where high-rise wooden buildings can be found
                                            <span class="q-question">
                                                <select name="matching_information-8uQvKzYbHuROu9RJ-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="3">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">3</span>
                                        <span style="flex: 1;">
                                            an indication of how widely available the raw materials of concrete are
                                            <span class="q-question">
                                                <select name="matching_information-8uQvKzYbHuROu9RJ-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="4">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">4</span>
                                        <span style="flex: 1;">
                                            the belief that more high-rise wooden buildings are needed before wood can be regarded as a viable construction material
                                            <span class="q-question">
                                                <select name="matching_information-8uQvKzYbHuROu9RJ-4" class="q-dropdown">
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

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 5-8</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                                    <h3>Making buildings with wood</h3>

                                    <p>
                                        <div>
                                            Wood is a traditional building material, but current environmental concerns are encouraging
                                            <span class="q-number-box">5</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <input type="text" name="summary_completion-8uQvKzYbHuROu9RJ-1" data-q="1" data-type="summary_completion" class="q-text" placeholder="">
                                                </span>
                                            </span>
                                            to use wood in modern construction projects. Using wood, however, has its challenges. For example, as
                                            <span class="q-number-box">6</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <input type="text" name="summary_completion-8uQvKzYbHuROu9RJ-2" data-q="2" data-type="summary_completion" class="q-text" placeholder="">
                                                </span>
                                            </span>
                                            in the atmosphere enters wood, it increases in size. In addition, wood is prone to pests and the risk of fire is greater. However, wood can be turned into a better construction material if it is treated and combined with other materials. In one process,
                                            <span class="q-number-box">7</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <input type="text" name="summary_completion-8uQvKzYbHuROu9RJ-3" data-q="3" data-type="summary_completion" class="q-text" placeholder="">
                                                </span>
                                            </span>
                                            of solid wood are glued together to create building blocks. These blocks are lighter than concrete and steel but equal them in strength. Experts say that wooden buildings are an improvement on those made of concrete and steel in terms of the
                                            <span class="q-number-box">8</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <input type="text" name="summary_completion-8uQvKzYbHuROu9RJ-4" data-q="4" data-type="summary_completion" class="q-text" placeholder="">
                                                </span>
                                            </span>
                                             with which they can be constructed and how much noise is generated by the process.
                                        </div>
                                    </p>
                                </fieldset>

                                {{-- matching_features --}}
                                <fieldset class="q-item">
                                    <h3>Questions 9-13</h3>
                                    <p class="lead">Look at the following statements and the list of people below.</p>
                                    <p>Match each statement with the correct person, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.</p>
                                    <p>Write the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>, in boxes on your answer sheet.</p>
                                    <p><b>NB</b>   You may use any letter more than once.</p>
                                    <b>List of People</b>
                                    <ul class="legend">
                                        <li><strong>A</strong> Chris Cheeseman</li>
                                        <li><strong>B</strong> Markus Mannstrom</li>
                                        <li><strong>C</strong> Anna Surgenor</li>
                                        <li><strong>D</strong> Felix Preston and Johanna Lehne</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="9">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">9</span>
                                        <span style="flex: 1;">
                                            The environmental advantage of cement alternatives may not be as great as initially assumed.
                                            <span class="q-question">
                                                <select name="matching_features-8uQvKzYbHuROu9RJ-1" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="10">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">10</span>
                                        <span style="flex: 1;">
                                            It would be hard to create a construction alternative to concrete that offers so many comparable benefits.
                                            <span class="q-question">
                                                <select name="matching_features-8uQvKzYbHuROu9RJ-2" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="11">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">11</span>
                                        <span style="flex: 1;">
                                            Worries about the environment have led to increased interest in wood as a construction material.
                                            <span class="q-question">
                                                <select name="matching_features-8uQvKzYbHuROu9RJ-3" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="12">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">12</span>
                                        <span style="flex: 1;">
                                            Expense has been a factor in the negative response to the development of new cements.
                                            <span class="q-question">
                                                <select name="matching_features-8uQvKzYbHuROu9RJ-4" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </span>
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="13">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">13</span>
                                        <span style="flex: 1;">
                                            The environmental damage caused by concrete is due to it being produced in large quantities.
                                            <span class="q-question">
                                                <select name="matching_features-8uQvKzYbHuROu9RJ-5" class="q-dropdown">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
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
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">The steam car</h3>
                            <div class="passage-body">
                                <p>The successes and failures of the Doble brothers and their steam cars</p>
                                <h3>A</h3>
                                <p>When primitive automobiles first began to appear in the 1800s, their engines were based on steam power. Steam had already enjoyed a long and successful career in the railways, so it was only natural that the technology evolved into a miniaturized version which was separate from the trains. But these early cars inherited steam’s weaknesses along with its strengths. The boilers had to be lit by hand, and they required about twenty minutes to build up pressure before they could be driven. Furthermore, their water reservoirs only lasted for about thirty miles before needing replenishment. Despite such shortcomings, these newly designed self-propelled carriages offered quick transportation, and by the early 1900s it was not uncommon to see such machines shuttling wealthy citizens around town.</p>
                                <h3>B</h3>
                                <p>But the glory days of steam cars were few. A new technology called the Internal Combustion Engine soon appeared, which offered the ability to drive down the road just moments after starting up. At first, these noisy gasoline cars were unpopular because they were more complicated to operate and they had difficult hand-crank starters, which were known to break arms when the engines backfired. But in 1912 General Motors introduced the electric starter, and over the following few years steam power was gradually phased out.</p>
                                <h3>C</h3>
                                <p>Even as the market was declining, four brothers made one last effort to rekindle the technology. Between 1906 and 1909, while still attending high school, Abner Doble and his three brothers built their first steam car in their parents’ basement. It comprised parts taken from a wrecked early steam car but reconfigured to drive an engine of their own design. Though it did not run well, the Doble brothers went on to build a second and third prototype in the following years. Though the Doble boys’ third prototype, nicknamed the Model B, still lacked the convenience of an internal combustion engine, it drew the attention of automobile trade magazines due to its numerous improvements over previous steam cars. The Model B proved to be superior to gasoline automobiles in many ways. Its high-pressure steam drove the engine pistons in virtual silence, in contrast to clattering gas engines which emitted the aroma of burned hydrocarbons. Perhaps most impressively, the Model B was amazingly swift. It could accelerate from zero to sixty miles per hour in just fifteen seconds, a feat described as ‘remarkable acceleration’ by Automobile magazine in 1914.</p>
                                <h3>D</h3>
                                <p>The following year Abner Doble drove the Model B from Massachusetts to Detroit in order to seek investment in his automobile design, which he used to open the General Engineering Company. He and his brothers immediately began working on the Model C, which was intended to expand upon the innovations of the Model B. The brothers added features such as a key-based ignition in the cabin, eliminating the need for the operator to manually ignite the boiler. With these enhancements, the Dobles’ new car company promised a steam vehicle which would provide all of the convenience of a gasoline car, but with much greater speed, much simpler driving controls, and a virtually silent powerplant. By the following April, the General Engineering Company had received 5,390 deposits for Doble Detroits, which were scheduled for delivery in early 1918.</p>
                                <h3>E</h3>
                                <p>Later that year Abner Doble delivered unhappy news to those eagerly awaiting the delivery of their modem new cars. Those buyers who received the handful of completed cars complained that the vehicles were sluggish and erratic, sometimes going in reverse when they should go forward. The new engine design, though innovative, was still plagued with serious glitches.</p>
                                <h3>F</h3>
                                <p>The brothers made one final attempt to produce a viable steam automobile. In early 1924, the Doble brothers shipped a Model E to New York City to be road-tested by the Automobile Club of America. After sitting overnight in freezing temperatures, the car was pushed out into the road and left to sit for over an hour in the frosty morning air. At the turn of the key, the boiler lit and reached its operating pressure inside of forty seconds. As they drove the test vehicle further, they found that its evenly distributed weight lent it surprisingly good handling, even though it was so heavy. As the new Doble steamer was further developed and tested, its maximum speed was pushed to over a hundred miles per hour, and it achieved about fifteen miles per gallon of kerosene with negligible emissions.</p>
                                <h3>G</h3>
                                <p>Sadly, the Dobles’ brilliant steam car never was a financial success. Priced at around $18,000 in 1924, it was popular only among the very wealthy. Plus, it is said that no two Model Es were quite the same, because Abner Doble tinkered endlessly with the design. By the time the company folded in 1931, fewer than fifty of the amazing Model E steam cars had been produced. For his whole career, until his death in 1961, Abner Doble remained adamant that steam-powered automobiles were at least equal to gasoline cars, if not superior. Given the evidence, he may have been right. Many of the Model E Dobles which have survived are still in good working condition, some having been driven over half a million miles with only normal maintenance. Astonishingly, an unmodified Doble Model E runs clean enough to pass the emissions laws in California today, and they are pretty strict. It is true that the technology poses some difficult problems, but you cannot help but wonder how efficient a steam car might be with the benefit of modem materials and computers. Under the current pressure to improve automotive performance and reduce emissions, it is not unthinkable that the steam car may rise again.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- mh --}}
                                <fieldset class="q-item">
                                    <h3>Question 14-20</h3>
                                    <p class="lead">The Reading Passage has seven paragraphs, <b>A-G</b>.</p>
                                    <p><i>Choose the correct heading for each paragraph from the list of headings below.</i></p>
                                    <p>Write the correct number, <b>i-viii</b>, in boxes on your answer sheet.</p>
                                    <p><b>List of Headings</b></p>
                                    <ul class="legend">
                                        <li><strong>i</strong> A period in cold conditions before the technology is assessed</li>
                                        <li><strong>ii</strong> Marketing issues lead to failure</li>
                                        <li><strong>iii</strong> Good and bad aspects of steam technology are passed on</li>
                                        <li><strong>iv</strong> A possible solution to the issues of today</li>
                                        <li><strong>v</strong> Further improvements lead to commercial orders</li>
                                        <li><strong>vi</strong> Positive publicity at last for this quiet, clean, fast vehicle</li>
                                        <li><strong>vii</strong> A disappointing outcome for customers</li>
                                        <li><strong>viii</strong> A better option than the steam car arises</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-type="mh" data-q="14">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">14</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>A</b>
                                            <span class="q-question">
                                                <select name="mh-8uQvKzYbHuROu9RJ-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="mh" data-q="15">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">15</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>B</b>
                                            <span class="q-question">
                                                <select name="mh-8uQvKzYbHuROu9RJ-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="mh" data-q="16">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">16</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>C</b>
                                            <span class="q-question">
                                                <select name="mh-8uQvKzYbHuROu9RJ-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="mh" data-q="17">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">17</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>D</b>
                                            <span class="q-question">
                                                <select name="mh-8uQvKzYbHuROu9RJ-4" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="mh" data-q="18">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">18</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>E</b>
                                            <span class="q-question">
                                                <select name="mh-8uQvKzYbHuROu9RJ-5" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="mh" data-q="19">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">19</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>G</b>
                                            <span class="q-question">
                                                <select name="mh-8uQvKzYbHuROu9RJ-6" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="mh" data-q="20">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">20</span>
                                        <span style="flex: 1;">
                                            Paragraph <b>H</b>
                                            <span class="q-question">
                                                <select name="mh-8uQvKzYbHuROu9RJ-7" class="q-dropdown">
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
                                    <h3>Question 21-23</h3>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-type="oc" data-q="21">
                                    <legend class="q-text">
                                        <span class="q-number">21</span>
                                        What point does the writer make about the steam car in Paragraph B?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 21 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Its success was short-lived.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Not enough cars were made.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Car companies found them hard to sell.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">People found them hard to drive.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="22">
                                    <legend class="q-text">
                                        <span class="q-number">22</span>
                                        When building their first steam car, the Doble brothers
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 22 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">constructed all the parts themselves.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">made written notes at each stage of the construction.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">needed several attempts to achieve a competitive model.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">sought the advice of experienced people in the car industry.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="23">
                                    <legend class="q-text">
                                        <span class="q-number">23</span>
                                        In order to produce the Model C, the Doble brothers
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 23 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">moved production to a different city.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">raised financial capital.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">employed an additional worker.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">abandoned their earlier designs.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 24-26</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD AND/OR A NUMBER</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                                    <h3>The Model E</h3>

                                    <p>
                                        <div>
                                            The Model E was road-tested in 1924 by the Automobile Club of America. They found it easy to drive, despite its weight, and it impressed the spectators. A later version of the Model E raised its
                                            <span class="q-number-box">24</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <input type="text" name="summary_completion-8uQvKzYbHuROu9RJ-5" data-q="5" data-type="summary_completion" class="q-text" placeholder="">
                                                </span>
                                            </span>
                                            , while keeping its emissions extremely low.
                                        </div>
                                    </p>
                                    <p>
                                        <div>
                                            The steam car was too expensive for many people and its design was constantly being altered. Under
                                            <span class="q-number-box">25</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <input type="text" name="summary_completion-8uQvKzYbHuROu9RJ-6" data-q="6" data-type="summary_completion" class="q-text" placeholder="">
                                                </span>
                                            </span>
                                            cars were produced before the company went out of business. However, even today, there are Model Es on the road in the US. They are straightforward to maintain, and they satisfy California’s
                                            <span class="q-number-box">26</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <input type="text" name="summary_completion-8uQvKzYbHuROu9RJ-7" data-q="7" data-type="summary_completion" class="q-text" placeholder="">
                                                </span>
                                            </span>
                                            emissions laws. Perhaps today’s technology and materials would help us revive the steam car.
                                        </div>
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
                            <h3 class="passage-title">The case for mixed-ability classes</h3>
                            <div class="passage-body">
                                <p>Picture this scene. It’s an English literature lesson in a UK school, and the teacher has just read an extract from Shakespeare’s Romeo and Juliet with a class of 15-year-olds. He’s given some of the students copies of No Fear Shakespeare, a kid-friendly translation of the original. For three students, even these literacy demands are beyond them. Another girl simply can’t focus and he gives her pens and paper to draw with. The teacher can ask the No Fear group to identify the key characters and maybe provide a tentative plot summary. He can ask most of the class about character development, and five of them might be able to support their statements with textual evidence. Now two curious students are wondering whether Shakespeare advocates living a life of moderation or one of passionate engagement.</p>
                                <p>As a teacher myself, I’d think my lesson would be going rather well if the discussion went as described above. But wouldn’t this kind of class work better if there weren’t such a huge gap between the top and the bottom? If we put all the kids who needed literacy support into one class, and all the students who want to discuss the virtue of moderation into another?</p>
                                <p>The practice of ‘streaming’, or ‘tracking’, involves separating students into classes depending on their diagnosed levels of attainment. At a macro level, it requires the establishment of academically selective schools for the brightest students, and comprehensive schools for the rest. Within schools, it means selecting students into a ‘stream’ of general ability, or ‘sets’ of subject-specific ability. The practice is intuitively appealing to almost every stakeholder.</p>
                                <p>I have heard the mixed-ability model attacked by way of analogy: a group hike. The fittest in the group take the lead and set a brisk pace, only to have to stop and wait every 20 minutes. This is frustrating, and their enthusiasm wanes. Meanwhile, the slowest ones are not only embarrassed but physically struggling to keep up. What’s worse, they never get a long enough break. They honestly just want to quit. Hiking, they feel, is not for them.</p>
                                <p>Mixed-ability classes bore students, frustrate parents and bum out teachers. The brightest ones will never summit Mount Qomolangma, and the stragglers won’t enjoy the lovely stroll in the park they are perhaps more suited to. Individuals suffer at the demands of the collective, mediocrity prevails. So: is learning like hiking?</p>
                                <p>The current pedagogical paradigm is arguably that of constructivism, which emerged out of the work of psychologist Lev Vygotsky. In the 1930s, Vygotsky emphasised the importance of targeting a student’s specific ‘zone of proximal development’ (ZPD). This is the gap between what they can achieve only with support – teachers, textbooks, worked examples, parents and so on – and what they can achieve independently. The purpose of teaching is to provide and then gradually remove this ‘scaffolding’ until they are autonomous. If we accept this model, it follows that streaming students with similar ZPDs would be an efficient and effective solution. And that forcing everyone on the same hike – regardless of aptitude – would be madness.</p>
                                <p>Despite all this, there is limited empirical evidence to suggest that streaming results in better outcomes for students. Professor John Hattie, director of the Melbourne Education Research Institute, notes that ‘tracking has minimal effects on learning outcomes’. What is more, streaming appears to significantly – and negatively – affect those students assigned to the lowest sets. These students tend to have much higher representation of low socioeconomic class. Less significant is the small benefit for those lucky clever students in the higher sets. The overall result is that the smart stay smart and the dumb get dumber, further entrenching the social divide.</p>
                                <p>In the latest update of Hattie’s influential meta-analysis of factors influencing student achievement, one of the most significant factors is the teachers’ estimate of achievement. Streaming students by diagnosed achievement automatically limits what the teacher feels the student is capable of. Meanwhile, in a mixed environment, teachers’ estimates need to be more diverse and flexible.</p>
                                <p>While streaming might seem to help teachers effectively target a student’s ZPD, it can underestimate the importance of peer-to-peer learning. A crucial aspect of constructivist theory is the role of the MKO – ‘more knowledgeable other’ – in knowledge construction. While teachers are traditionally the MKOs in classrooms, the value of knowledgeable student peers must not go unrecognised either.</p>
                                <p>I find it amazing to watch students get over an idea to their peers in ways that I would never think of. They operate with different language tools and different social tools from teachers and, having just learnt it themselves, they possess similar cognitive structures to their struggling classmates. There is also something exciting about passing on skills and knowledge that you yourself have just mastered – a certain pride and zeal, a certain freshness to the interaction between ‘teacher’ and ‘learner’ that is often lost by the expert for whom the steps are obvious and the joy of discovery forgotten.</p>
                                <p>Having a variety of different abilities in a collaborative learning environment provides valuable resources for helping students meet their learning needs, not to mention improving their communication and social skills. And today, more than ever, we need the many to flourish – not suffer at the expense of a few bright stars. Once a year, I go on a hike with my class, a mixed bunch of students. It is challenging. The fittest students realise they need to encourage the reluctant. There are lookouts who report back, and extra items to carry for others. We make it – together.</p>
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
                                        The writer describes the Romeo and Juliet lesson in order to demonstrate
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">how few students are interested in literature.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">how a teacher handles a range of learning needs.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">how unsuitable Shakespeare is for most teenagers.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">how weaker students can disrupt their classmates’ learning.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="28">
                                    <legend class="q-text">
                                        <span class="q-number">28</span>
                                        What does the writer say about streaming in the third paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It has a very broad appeal.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It favours cleverer students.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It is relatively simple to implement.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-5" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It works better in some schools than others.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="29">
                                    <legend class="q-text">
                                        <span class="q-number">29</span>
                                        What idea is suggested by the reference to Mount Qomolangma in the fifth paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-6" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">students following unsuitable paths</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-6" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">students attempting interesting tasks</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-6" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">students not achieving their full potential</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-6" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">students not being aware of their limitations</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="30">
                                    <legend class="q-text">
                                        <span class="q-number">30</span>
                                        What does the word ‘scaffolding’ in the sixth paragraph refer to?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-7" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">the factors which prevent a student from learning effectively</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-7" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">the environment where most of a student’s learning takes place</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-7" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">the assistance given to a student in their initial stages of learning</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-8uQvKzYbHuROu9RJ-7" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">the setting of appropriate learning targets for a student’s aptitude</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 31-35</h3>
                                    <p class="lead">Complete the summary using the list of words, <b>A-L</b>, below.</p>
                                    <p><i>Write the correct letter, <b>A-L</b>, in boxes on your answer sheet.</i></p>
                                    <table cellpadding="10">
                                        <tr>
                                            <td><b>A</b> wrong classes</td>
                                            <td><b>B</b> lower expectations</td>
                                        </tr>
                                        <tr>
                                            <td><b>C</b> average learners</td>
                                            <td><b>D</b> bottom sets</td>
                                        </tr>
                                        <tr>
                                            <td><b>E</b> brightest pupils</td>
                                            <td><b>F</b> disadvantaged backgrounds</td>
                                        </tr>
                                        <tr>
                                            <td><b>G</b> weaker students</td>
                                            <td><b>H</b> higher achievements</td>
                                        </tr>
                                        <tr>
                                            <td><b>I</b> positive impressions</td>
                                        </tr>
                                    </table>

                                    <h3>Is streaming effective?</h3>

                                    <p>
                                        <div>
                                            According to Professor John Hattie of the Melbourne Education Research Institute there is very little indication that streaming leads to
                                            <span class="q-number-box">32</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-8uQvKzYbHuROu9RJ-8" data-type="summary_completion" data-q="31" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                    </select>
                                                </span>
                                            </span>
                                            . He points out that, in schools which use streaming, the most significant impact is on those students placed in the
                                            <span class="q-number-box">32</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-8uQvKzYbHuROu9RJ-9" data-type="summary_completion" data-q="32" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                    </select>
                                                </span>
                                            </span>
                                            , especially where a large proportion of them have
                                            <span class="q-number-box">33</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-8uQvKzYbHuROu9RJ-10" data-type="summary_completion" data-q="33" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                    </select>
                                                </span>
                                            </span>
                                            . Meanwhile, for the 
                                            <span class="q-number-box">34</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-8uQvKzYbHuROu9RJ-11" data-type="summary_completion" data-q="34" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                    </select>
                                                </span>
                                            </span>
                                            , there appears to be only minimal advantage. A further issue is that teachers tend to have 
                                            <span class="q-number-box">35</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-8uQvKzYbHuROu9RJ-12" data-type="summary_completion" data-q="35" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                        <option value="I">I</option>
                                                    </select>
                                                </span>
                                            </span>
                                            of students in streamed groups.
                                        </div>
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
                                        The Vygotsky model of education supports the concept of a mixed-ability class.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 36 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="37">
                                    <legend class="q-text">
                                        <span class="q-number">37</span>
                                        Some teachers are uncertain about allowing students to take on MKO roles in the classroom.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 37 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="38">
                                    <legend class="q-text">
                                        <span class="q-number">38</span>
                                        It can be rewarding to teach knowledge which you have only recently acquired.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 38 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="39">
                                    <legend class="q-text">
                                        <span class="q-number">39</span>
                                        The priority should be to ensure that the highest-achieving students attain their goals.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 39 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="40">
                                    <legend class="q-text">
                                        <span class="q-number">40</span>
                                        Taking part in collaborative outdoor activities with teachers and classmates can improve student outcomes in the classroom.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 40 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-8uQvKzYbHuROu9RJ-5" value="NOT GIVEN" />
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
