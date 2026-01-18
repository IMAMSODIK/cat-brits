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
                            <div class="passage-body">
                                <p><b>Archaeologists discover evidence of prehistoric island settlers</b></p>
                                <p>In early April 2019, Dr Ceri Shipton and his colleagues from Australian National University became the first archaeologists to explore Obi, one of many tropical islands in Indonesia’s Maluku Utara province. The research team’s discoveries suggest that the prehistoric people who lived on Obi were adept on both land and sea, hunting in the dense rainforest, foraging on the seashore, and possibly even voyaging between islands.</p>
                                <p>The excavations were part of a project to learn more about how people first dispersed from mainland Asia, through the Indonesian archipelago and into the prehistoric continent that once connected Australia and New Guinea. The team’s earlier research suggested that the northernmost islands in the group, known as the Wallacean islands,including Obi, would have offered the easiest migration route. It also seemed likely that these islands were crucial ‘stepping stones’ on humans’ island-hopping voyages through this region millennia ago. But to support this idea, they needed archaeological evidence for humans living in this remote area in the ancient past. So, they travelled to Obi to look for sites that might reveal evidence of early occupation.</p>
                                <p>Just inland from the village of Kelo on Obi’s northern coast, Shipton and his colleagues found two caves containing prehistoric rock shelters that were suitable for excavation. With the permission and help of the local people of Kelo, they dug a small test excavation in each shelter. There they found numerous artefacts, including fragments of axes, some dating to about 14,000 years ago. The earliest axes at Kelo were made using clam shells. Axes made from clam shells from roughly the same time had also previously been found elsewhere in this region, including on the nearby island of Gebe to the northeast. As on Gebe, it is highly likely that Obi’s axes were used in the construction of canoes, thus allowing these early peoples to maintain connections between communities on neighbouring islands.</p>
                                <p>The oldest cultural layers from the Kelo site provided the team with the earliest record for human occupation on Obi, dating back around 18,000 years. At this time the climate was drier and colder than today, and the island’s dense rainforests would likely have been much less impenetrable than they are now. Sea levels were about 120 metres lower, meaning Obi was a much larger island, encompassing what is today the separate island of Bisa, as well as several other small islands nearby.</p>
                                <p>Roughly 11,700 years ago, as the most recent ice age ended, the climate became significantly warmer and wetter, no doubt making Obi’s jungle much thicker. According to the researchers, it is no coincidence that around this time the first axes crafted from stone rather than sea shells appear, likely in response to their heavy-duty use for clearing and modification of the increasingly dense rainforest. While stone takes about twice as long to grind into an axe compared to shell, the harder material keeps its sharp edge for longer.</p>
                                <p>Judging by the bones which the researchers unearthed in the Kelo caves, people living there mainly hunted the Rothschild’s cuscus, a possum-like creature that still lives on Obi today. As the forest grew more dense, people probably used axes to clear patches of forest and make hunting easier. Shipton’s team’s excavation of the shelters at the Kelo site unearthed a volcanic glass substance called obsidian, which must have been brought over from another island, as there is no known source on Obi. It also revealed particular types of beads, similar to those previously found on islands in southern Wallacea. These finds again support the idea that Obi islanders routinely travelled to other islands.</p>
                                <p>The excavations suggest people successfully lived in the two Kelo shelters for about 10,000 years. But then, about 8,000 years ago, both were abandoned. Did the residents leave Obi completely, or move elsewhere on the island? Perhaps the jungle had grown so thick that axes were no longer a match for the dense undergrowth. Perhaps people simply moved to the coast and turned to fishing rather than hunting as a means of survival.</p>
                                <p>Whatever the reason for the departure, there is no evidence for use of the Kelo shelters after this time, until about 1,000 years ago, when they were re-occupied by people who owned pottery as well as items made out of gold and silver. It seems likely, in view of Obi’s location, that this final phase of occupation also saw the Kelo shelters used by people involved in the historic trade in spices between the Maluku islands and the rest of the world.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <h3>Question 1-7</h3>
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
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        Archaeological research had taken place on the island of Obi before the arrival of Ceri Shipton and his colleagues.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="2">
                                    <legend class="q-text">
                                        <span class="q-number">2</span>
                                        At the Kelo sites, the researchers found the first clam shell axes ever to be discovered in the region.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="3">
                                    <legend class="q-text">
                                        <span class="q-number">3</span>
                                        The size of Obi today is less than it was 18,000 years ago.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="4">
                                    <legend class="q-text">
                                        <span class="q-number">4</span>
                                        A change in the climate around 11,700 years ago had a greater impact on Obi than on the surrounding islands.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="5">
                                    <legend class="q-text">
                                        <span class="q-number">5</span>
                                        The researchers believe there is a connection between warmer, wetter weather and a change in the material used to make axes.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        Shipton's team were surprised to find evidence of the Obi islanders’ hunting practices.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="7">
                                    <legend class="q-text">
                                        <span class="q-number">7</span>
                                        It is thought that the Kelo shelters were occupied continuously until about 1,000 years ago.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-GEf4EtQ1AZxTFhTw-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- nc --}}
                                <fieldset class="q-item">
                                    <h3>Questions 8-13</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3 style="text-align: center">Archaeological findings on Obi</h3>
                                    <p>
                                        Excavations of rock shelters inside
                                        <span class="q-number-box">8</span>
                                        <input type="text" name="nc-GEf4EtQ1AZxTFhTw-1" class="q-text" placeholder="" data-q="8">
                                        near the village of Kelo revealed:
                                    </p>
                                    <p>– axes from around 14,000 years ago, probably used to make canoes</p>
                                    <p>
                                        – axes made out of
                                        <span class="q-number-box">9</span>
                                        <input type="text" name="nc-GEf4EtQ1AZxTFhTw-2" class="q-text" placeholder="" data-q="9">
                                        , dating from around 11,700 years ago
                                    </p>
                                    <p>
                                        – 
                                        <span class="q-number-box">10</span>
                                        <input type="text" name="nc-GEf4EtQ1AZxTFhTw-3" class="q-text" placeholder="" data-q="10">
                                        of an animal: evidence of what ancient islanders ate
                                    </p>
                                    <p>– evidence of travel between islands:</p>
                                    <div style="margin-left: 20px">
                                        <p>+ obsidian: a material that is not found naturally on Obi</p>
                                        <p>
                                            <span class="q-number-box">11</span>
                                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-4" class="q-text" placeholder="" data-q="11">
                                            + which resembled ones found on other islands.
                                        </p>
                                    </div>

                                    <p>It is thought that from 8,000 years ago, Obi islanders:</p>
                                    <div style="margin-left: 20px">
                                        <p>– may have switched from hunting to fishing</p>
                                        <p>
                                            – had 
                                            <span class="q-number-box">12</span>
                                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-5" class="q-text" placeholder="" data-q="12">
                                            as well as items made out of metal
                                        </p>
                                        <p>
                                            – probably took part in the production and sale of 
                                            <span class="q-number-box">13</span>
                                            <input type="text" name="nc-GEf4EtQ1AZxTFhTw-6" class="q-text" placeholder="" data-q="13">
                                        </p>
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
                            <h3 class="passage-title">The global importance of wetlands</h3>
                            <div class="passage-body">
                                <h3>A</h3>
                                <p>Wetlands are areas where water covers the soil, or is present either at or near the surface of the soil, for all or part of the year. These are complex ecosystems, rich in unique plant and animal life. But according to the World Wide Fund for Nature (WWFN), half of the world’s wetlands have disappeared since 1990 – converted or destroyed for commercial development, drainage schemes and the extraction of minerals and peat. Many of those that remain have been damaged by agricultural pesticides and fertilizers, industrial pollutants, and construction works.</p>
                                <h3>B</h3>
                                <p>Throughout history, humans have gathered around wetlands, and their fertile ecosystems have played an important part in human development. Consequently, they are of considerable religious, historical and archaeological value to many communities around the world. ‘Wetlands directly support the livelihoods and well-being of millions of people,’ says Dr Matthew McCartney, principal researcher and hydrologist at the International Water Management Institute (IWMI). ‘In many developing countries, large numbers of people are dependent on wetland agriculture for their livelihoods.’</p>
                                <h3>C</h3>
                                <p>They also serve a crucial environmental purpose. ‘Wetlands are one of the key tools in mitigating climate change across the planet,’ says Pieter van Eijk, head of Climate Adaptation at Wetlands International (WI), pointing to their use as buffers that protect coastal areas from sea-level rise and extreme weather events such as hurricanes and flooding. Wetland coastal forests provide food and water, as well as shelter from storms, and WI and other agencies are working to restore those forests which have been lost. ‘It can be as simple as planting a few trees per hectare to create shade and substantially change a microclimate,’ he says. ‘Implementing climate change projects isn’t so much about money.’</p>
                                <h3>D</h3>
                                <p>The world’s wetlands are, unfortunately, rich sources for in-demand commodities, such as palm oil and pulpwood. Peatlands – wetlands with a waterlogged organic soil layer – are particularly targeted. When peatlands are drained for cultivation, they become net carbon emitters instead of active carbon stores, and, according to Marcel Silvius, head of Climate-smart Land-use at WI, this practice causes six per cent of all global carbon emissions. The clearance of peatlands for planting also increases the risk of forest fires, which release huge amounts of CO₂. ‘We’re seeing huge peatland forests with extremely high biodiversity value being lost for a few decades of oil palm revenues,’ says Silvius.</p>
                                <h3>E</h3>
                                <p>The damage starts when logging companies arrive to clear the trees. They dig ditches to enter the peat swamps by boat and then float the logs out the same way. These are then used to drain water out of the peatlands to allow for the planting of corn, oil palms or pulpwood trees. Once the water has drained away, bacteria and fungi then break down the carbon in the peat and turn it into CO₂ and methane. Meanwhile, the remainder of the solid matter in the peat starts to move downwards, in a process known as subsidence. Peat comprises 90 per cent water, so this is one of the most alarming consequences of peatland clearances. ‘In the tropics, peat subsides at about four centimetres a year, so within half a century, very large landscapes on Sumatra and Borneo will become flooded as the peat drops below water level,’ says Silvius. ‘It’s a huge catastrophe that’s in preparation. Some provinces will lose 40 per cent of their landmass.’</p>
                                <h3>F</h3>
                                <p>And while these industries affect wetlands in ways that can easily be documented, Dr Dave Tickner of the WWFN believes that more subtle impacts can be even more devastating. ‘Sediment run-off and fertilizers can be pretty invisible,’ says Tickner. ‘Over-extraction of water is equally invisible. You do get shock stories about rivers running red, or even catching fire, but there’s seldom one big impact that really hurts a wetland.’ Tickner does not blame anyone for deliberate damage, however. ‘I’ve worked on wetland issues for 20 years and have never met anybody who wanted to damage a wetland,’ he says. ‘It isn’t something that people generally set out to do. Quite often, the effects simply come from people trying to make a living.’</p>
                                <h3>G</h3>
                                <p>Silvius also acknowledges the importance of income generation. ‘It’s not that we just want to restore the biodiversity of wetlands – which we do – but we recognise there’s a need to provide an income for local people.’ This approach is supported by IWMI. ‘The idea is that people in a developing country will only protect wetlands if they value and profit from them,’ says McCartney. ‘For sustainability, it’s essential that local people are involved in wetland planning and decision making and have clear rights to use wetlands.’</p>
                                <h3>H</h3>
                                <p>The fortunes of wetlands would be improved, Silvius suggests, if more governments recognized their long-term value. ‘Different governments have different attitudes,’ he says, and goes on to explain that some countries place a high priority on restoring wetlands, while others still deny the issue. McCartney is cautiously optimistic, however. ‘Awareness of the importance of wetlands is growing,’ he says. ‘It’s true that wetland degradation still continues at a rapid pace, but my impression is that things are slowly changing.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- matching_information --}}
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 14-17</b></p>
                                    <p>Which paragraph contains the following information?</p>
                                    <p>Write the correct letter, <b>A-H</b>, in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="14">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">14</span>
                                        <span style="flex: 1;">
                                            reference to the need to ensure that inhabitants of wetland regions continue to benefit from them
                                            <span class="q-question">
                                                <select name="matching_information-GEf4EtQ1AZxTFhTw-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="15">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">15</span>
                                        <span style="flex: 1;">
                                            the proportion of wetlands which have already been lost
                                            <span class="q-question">
                                                <select name="matching_information-GEf4EtQ1AZxTFhTw-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="16">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">16</span>
                                        <span style="flex: 1;">
                                            reference to the idea that people are beginning to appreciate the value of wetlands
                                            <span class="q-question">
                                                <select name="matching_information-GEf4EtQ1AZxTFhTw-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="17">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">17</span>
                                        <span style="flex: 1;">
                                            mention of the cultural significance of wetlands
                                            <span class="q-question">
                                                <select name="matching_information-GEf4EtQ1AZxTFhTw-4" class="q-dropdown">
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

                                {{-- sentence_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 18-22</h3>
                                    <p class="lead">Complete the sentences below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="18">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">18</span>
                                        <span style="flex: 1;">
                                            Peatlands which have been drained begin to release
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                            instead of storing it.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="19">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">19</span>
                                        <span style="flex: 1;">
                                            Once peatland areas have been cleared,
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                            are more likely to occur.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="20">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">20</span>
                                        <span style="flex: 1;">
                                            Clearing peatland forests to make way for oil palm plantations destroys the
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                            of the local environment.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="21">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">21</span>
                                        <span style="flex: 1;">
                                            Water is drained out of peatlands through the
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-4" class="q-text"
                                                    placeholder="">
                                            </span>
                                            which are created by logging companies.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-q="22">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">22</span>
                                        <span style="flex: 1;">
                                            Draining peatlands leads to
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-5" class="q-text"
                                                    placeholder="">
                                            </span>
                                            : a serious problem which can eventually result in coastal flooding and land loss.
                                        </span>
                                    </legend>
                                </fieldset>

                                {{-- matching_features --}}
                                <fieldset class="q-item">
                                    <h3>Questions 23-26</h3>
                                    <p class="lead">Look at the following statements and the list of experts below.</p>
                                    <p>Match each statement with the correct expert, <b>A-D</b>.</p>
                                    <p>Write the correct letter, <b>A-D</b>, in boxes on your answer sheet.</p>
                                    <b>List of Experts</b> <br>
                                    <strong>A</strong>&nbsp;&nbsp; Matthew McCartney<br>
                                    <strong>B</strong>&nbsp;&nbsp; Pieter van Eijk<br>
                                    <strong>C</strong>&nbsp;&nbsp; Marcel Silvius<br>
                                    <strong>D</strong>&nbsp;&nbsp; Dave Tickner<br>
                                </fieldset>

                                <fieldset class="q-item" data-q="23">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">23</span>
                                        <span style="flex: 1;">
                                            Communities living in wetland regions must be included in discussions about the future of these areas
                                            <span class="q-question">
                                                <select name="matching_features-GEf4EtQ1AZxTFhTw-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="24">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">24</span>
                                        <span style="flex: 1;">
                                            Official policies towards wetlands vary from one nation to the next
                                            <span class="q-question">
                                                <select name="matching_features-GEf4EtQ1AZxTFhTw-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="25">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">25</span>
                                        <span style="flex: 1;">
                                            People cause harm to wetlands without having any intention to do so
                                            <span class="q-question">
                                                <select name="matching_features-GEf4EtQ1AZxTFhTw-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="26">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">26</span>
                                        <span style="flex: 1;">
                                            Initiatives to reverse environmental damage need not be complex.
                                            <span class="q-question">
                                                <select name="matching_features-GEf4EtQ1AZxTFhTw-4" class="q-dropdown">
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
            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Konten: Part 3</div>
                <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <h3 class="passage-title">Is the era of artificial speech translation upon us?</h3>
                            <div class="passage-body">
                                <p>Noise, Alex Waibel tells me, is one of the major challenges that artificial speech translation has to meet. A device may be able to recognize speech in a laboratory, or a meeting room, but will struggle to cope with the kind of background noise I can hear in my office surrounding Professor Waibel as he speaks to me from Kyoto station in Japan. I’m struggling to follow him in English, on a scratchy line that reminds me we are nearly 10,000 kilometers apart-and that distance is still an obstacle to communication even if you’re speaking the same language, as we are. We haven’t reached the future yet. If we had, Waibel would have been able to speak more comfortably in his native German and I would have been able to hear his words in English.</p>
                                <p>At Karlsruhe Institute of Technology, where he is a professor of computer science, Waibel and his colleagues already give lectures in German that their students can follow in English via an electronic translator. The system generates text that students can read on their laptops or phones, so the process is somewhat similar to subtitling. It helps that lecturers speak clearly, don’t have to compete with background chatter, and say much the same thing each year.</p>
                                <p>The idea of artificial speech translation has been around for a long time. Douglas Adams’ science fiction novel, The Hitchhiker’s Guide to the Galaxy, published in 1979, featured a life form called the ‘Babel fish’ which, when placed in the ear, enabled a listener to understand any language in the universe. It came to represent one of those devices that technology enthusiasts dream of long before they become practically realizable, like TVs flat enough to hang on walls: objects that we once could only dream of having but that are now commonplace. Now devices that look like prototype Babel fish have started to appear, riding a wave of advances in artificial translation and voice recognition.</p>
                                <p>At this stage, however, they seem to be regarded as eye-catching novelties rather than steps towards what Waibel calls ‘making a language-transparent society.’ They tend to be domestic devices or applications suitable for hotel check-ins, for example, providing a practical alternative to speaking traveler’s English. The efficiency of the translator is less important than the social function. However, ‘Professionals are less inclined to be patient in a conversation,’ founder and CEO at Waverly Labs, Andrew Ochoa, observes. To redress this, Waverly is now preparing a new model for professional applications, which entails performance improvements in speech recognition, translation accuracy and the time it takes to deliver the translated speech.</p>
                                <p>For a conversation, both speakers need to have devices called Pilots (translator earpieces) in their ears. ‘We find that there’s a barrier with sharing one of the earphones with a stranger,’ says Ochoa. That can’t have been totally unexpected. The problem would be solved if earpiece translators became sufficiently prevalent that strangers would be likely to already have their own in their ears. Whether that happens, and how quickly, will probably depend not so much on the earpieces themselves, but on the prevalence of voice-controlled devices and artificial translation in general.</p>
                                <p>Waibel highlights the significance of certain Asian nations, noting that voice translation has really taken off in countries such as Japan with a range of systems. There is still a long way to go, though. A translation system needs to be simultaneous, like the translator’s voice speaking over the foreign politician being interviewed on the TV, rather than in sections that oblige speakers to pause after every few remarks and wait for the translation to be delivered. It needs to work offline, for situations where internet access isn’t possible, and to address apprehensions about the amount of private speech data accumulating in the cloud, having been sent to servers for processing.</p>
                                <p>Systems not only need to cope with physical challenges such as noise, they will also need to be socially aware by addressing people in the right way. Some cultural traditions demand solemn respect for academic status, for example, and it is only polite to respect this. Etiquette-sensitive artificial translators could relieve people of the need to know these differing cultural norms. At the same time, they might help to preserve local customs, slowing the spread of habits associated with international English, such as its readiness to get on first-name terms.</p>
                                <p>Professors and other professionals will not outsource language awareness to software, though. If the technology matures into seamless, ubiquitous artificial speech translation, it will actually add value to language skills. Whether it will help people conduct their family lives or relationships is open to question-though one noteworthy possibility is that it could overcome the language barriers that often arise between generations after migration, leaving children and their grandparents without a shared language.</p>
                                <p>Whatever uses it is put to, though, it will never be as good as the real thing. Even if voice-morphing technology simulates the speaker’s voice, their lip movements won’t match, and they will look like they are in a dubbed movie. The contrast will underline the value of shared languages, and the value of learning them. Sharing a language can promote a sense of belonging and community, as with the international scientists who use English as a lingua franca, where their predecessors used Latin. Though the practical need for a common language will diminish, the social value of sharing one will persist. And software will never be a substitute for the subtle but vital understanding that comes with knowledge of a language.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 27-30</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p>Write the correct letter in boxes on your answer sheet.</p>
                                </fieldset>
                                <fieldset class="q-item" data-q="27">
                                    <legend class="q-text">
                                        <span class="q-number">27</span>
                                        What does the reader learn about the conversation in the first paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">The speakers are communicating in different languages.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Neither of the speakers is familiar with their environment.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">The topic of the conversation is difficult for both speakers.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Aspects of the conversation are challenging for both speakers.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="28">
                                    <legend class="q-text">
                                        <span class="q-number">28</span>
                                        What assists the electronic translator during lectures at Karlsruhe Institute of Technology?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">the repeated content of lectures</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">the students’ reading skills</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">the languages used</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">the lecturers’ technical ability</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="29">
                                    <legend class="q-text">
                                        <span class="q-number">29</span>
                                        When referring to The Hitchhiker's Guide to the Galaxy, the writer suggests that
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">the Babel fish was considered undesirable at the time.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">this book was not seriously intending to predict the future.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">artificial speech translation was not a surprising development.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">some speech translation techniques are better than others.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="30">
                                    <legend class="q-text">
                                        <span class="q-number">30</span>
                                        What does the writer say about sharing earpieces?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It is something people will get used to doing.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">The reluctance to do this is understandable.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">The equipment will be unnecessary in the future.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It is something few people need to worry about.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- mse --}}
                                <fieldset class="q-item">
                                    <h3>Question 31-34</h3>
                                    <p class="lead">Complete each sentence with the correct ending, <b>A-F</b>, below.
                                    </p>
                                    <p>Write the correct letter, <b>A-F</b>, in boxes on your answer sheet</p>
                                    <ul class="legend">
                                        <li><strong>A</strong> but there are concerns about this</li>
                                        <li><strong>B</strong> as systems do not need to conform to standard practices.</li>
                                        <li><strong>C</strong> but they are far from perfect.</li>
                                        <li><strong>D</strong> despite the noise issues</li>
                                        <li><strong>E</strong> because translation is immediate.</li>
                                        <li><strong>F</strong> and have an awareness of good manners.</li>
                                    </ul>
                                </fieldset>

                                <fieldset class="q-item" data-q="31">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">31</span>
                                        <span style="flex: 1;">
                                            Speech translation methods are developing fast in Japan
                                            <span class="q-question">
                                                <select name="mse-XJ3XOcvqPbgdZwyl-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="32">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">32</span>
                                        <span style="flex: 1;">
                                            TV interviews that use translation voiceover methods are successful
                                            <span class="q-question">
                                                <select name="mse-XJ3XOcvqPbgdZwyl-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="33">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">33</span>
                                        <span style="flex: 1;">
                                            Future translation systems should address people appropriately
                                            <span class="q-question">
                                                <select name="mse-XJ3XOcvqPbgdZwyl-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-q="34">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">34</span>
                                        <span style="flex: 1;">
                                            Users may be able to maintain their local customs
                                            <span class="q-question">
                                                <select name="mse-XJ3XOcvqPbgdZwyl-4" class="q-dropdown">
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

                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <h3>Question 35-40</h3>
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
                                <fieldset class="q-item" data-q="35">
                                    <legend class="q-text">
                                        <span class="q-number">35</span>
                                        Language translation systems will be seen as very useful throughout the academic and professional worlds.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 35 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="36">
                                    <legend class="q-text">
                                        <span class="q-number">36</span>
                                        The overall value of automated translation to family life is yet to be shown.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 36 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="37">
                                    <legend class="q-text">
                                        <span class="q-number">37</span>
                                        Automated translation could make life more difficult for immigrant families. 
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 37 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="38">
                                    <legend class="q-text">
                                        <span class="q-number">38</span>
                                        Visual aspects of language translation are being considered by scientists.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 38 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="39">
                                    <legend class="q-text">
                                        <span class="q-number">39</span>
                                        International scientists have found English easier to translate into other languages than Latin.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 39 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-q="40">
                                    <legend class="q-text">
                                        <span class="q-number">40</span>
                                        As far as language is concerned, there is a difference between people’s social and practical needs.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 40 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-6" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-6" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-GEf4EtQ1AZxTFhTw-6" value="NOT GIVEN" />
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
