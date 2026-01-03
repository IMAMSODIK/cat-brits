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
                            <h3 class="passage-title">The thylacine</h3>
                            <div class="passage-body">
                                <p>The extinct thylacine, also known as the Tasmanian tiger, was a marsupial* that bore a superficial resemblance to a dog. Its most distinguishing feature was the 13-19 dark brown stripes over its back, beginning at the rear of the body and extending onto the tail. The thylacine’s average nose-to-tail length for adult males was 162.6 cm, compared to 153.7 cm for females.</p>
                                <p>The thylacine appeared to occupy most types of terrain except dense rainforest, with open eucalyptus forest thought to be its prime habitat. In terms of feeding, it was exclusively carnivorous, and its stomach was muscular with an ability to distend so that it could eat large amounts of food at one time, probably an adaptation to compensate for long periods when hunting was unsuccessful and food scarce. The thylacine was not a fast runner and probably caught its prey by exhausting it during a long pursuit. During long-distance chases, thylacines were likely to have relied more on scent than any other sense. They emerged to hunt during the evening, night and early morning and tended to retreat to the hills and forest for shelter during the day. Despite the common name ‘tiger’, the thylacine had a shy, nervous temperament. Although mainly nocturnal, it was sighted moving during the day and some individuals were even recorded basking in the sun.</p>
                                <p>The thylacine had an extended breeding season from winter to spring, with indications that some breeding took place throughout the year. The thylacine, like all marsupials, was tiny and hairless when born. Newborns crawled into the pouch on the belly of their mother, and attached themselves to one of the four teats, remaining there for up to three months. When old enough to leave the pouch, the young stayed in a lair such as a deep rocky cave, well-hidden nest or hollow log, whilst the mother hunted.</p>
                                <p>Approximately 4,000 years ago, the thylacine was widespread throughout New Guinea and most of mainland Australia, as well as the island of Tasmania. The most recent, well-dated occurrence of a thylacine on the mainland is a carbon-dated fossil from Murray Cave in Western Australia, which is around 3,100 years old. Its extinction coincided closely with the arrival of wild dogs called dingoes in Australia and a similar predator in New Guinea. Dingoes never reached Tasmania, and most scientists see this as the main reason for the thylacine’s survival there.</p>
                                <p>The dramatic decline of the thylacine in Tasmania, which began in the 1830s and continued for a century, is generally attributed to the relentless efforts of sheep farmers and bounty hunters** with shotguns. While this determined campaign undoubtedly played a large part, it is likely that various other factors also contributed to the decline and eventual extinction of the species. These include competition with wild dogs introduced by European settlers, loss of habitat along with the disappearance of prey species, and a distemper-like disease which may also have affected the thylacine.</p>
                                <p>There was only one successful attempt to breed a thylacine in captivity, at Melbourne Zoo in 1899. This was despite the large numbers that went through some zoos, particularly London Zoo and Tasmania’s Hobart Zoo. The famous naturalist John Gould foresaw the thylacine’s demise when he published his Mammals of Australia between 1848 and 1863, writing, ‘The numbers of this singular animal will speedily diminish, extermination will have its full sway, and it will then, like the wolf of England and Scotland, be recorded as an animal of the past.’</p>
                                <p>However, there seems to have been little public pressure to preserve the thylacine, nor was much concern expressed by scientists at the decline of this species in the decades that followed. A notable exception was T.T. Flynn, Professor of Biology at the University of Tasmania. In 1914, he was sufficiently concerned about the scarcity of the thylacine to suggest that some should be captured and placed on a small island. But it was not until 1929, with the species on the very edge of extinction, that Tasmania’s Animals and Birds Protection Board passed a motion protecting thylacines only for the month of December, which was thought to be their prime breeding season. The last known wild thylacine to be killed was shot by a farmer in the north-east of Tasmania in 1930, leaving just captive specimens. Official protection of the species by the Tasmanian government was introduced in July 1936, 59 days before the last known individual died in Hobart Zoo on 7th September, 1936.</p>
                                <p>There have been numerous expeditions and searches for the thylacine over the years, none of which has produced definitive evidence that thylacines still exist. The species was declared extinct by the Tasmanian government in 1986.</p>
                                <p><i>*marsupial: a mammal, such as a kangaroo, whose young are born incompletely developed and are typically carried and suckled in a pouch on the mother’s belly</i></p>
                                <p><i>**bounty hunters: people who are paid a reward for killing a wild animal</i></p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- nc --}}
                                <fieldset class="q-item">
                                    <h3>Questions 1-5</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><b>The London underground railway</b></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3>The thylacine</h3>
                                    <p><b>Appearance and behaviour</b></p>
                                    <ul>
                                        <li>looked rather like a dog</li>
                                        <li>had a series of stripes along its body and tail</li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="1">
                                                ate an entirely
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="nc-wq6xHskL3uTj5VSU-1" class="q-text" placeholder="">
                                                diet
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="2">
                                                probably depended mainly on
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="nc-wq6xHskL3uTj5VSU-2" class="q-text" placeholder="">
                                                when hunting
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="3">
                                                young spent first months of life inside its mother’s
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="wq6xHskL3uTj5VSU-3" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>Decline and extinction</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="4">
                                                last evidence in mainland Australia is a 3,100-year-old
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="nc-wq6xHskL3uTj5VSU-4" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>probably went extinct in mainland Australia due to animals known as dingoes</li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="5">
                                                reduction in
                                                <span class="q-number-box">5</span>
                                                <input type="text" name="nc-wq6xHskL3uTj5VSU-5" class="q-text" placeholder="">
                                                and available sources of food were partly responsible for decline in Tasmania
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>

                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 6-13</b></p>
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
                                <fieldset class="q-item" data-type="tfng" data-q="6">
                                    <legend class="q-text">
                                        <span class="q-number">6</span>
                                        Significant numbers of thylacines were killed by humans from the 1830s onwards.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="7">
                                    <legend class="q-text">
                                        <span class="q-number">7</span>
                                        Several thylacines were born in zoos during the late 1800s.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="8">
                                    <legend class="q-text">
                                        <span class="q-number">8</span>
                                        John Gould’s prediction about the thylacine surprised some biologists.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 8 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="9">
                                    <legend class="q-text">
                                        <span class="q-number">9</span>
                                        In the early 1900s, many scientists became worried about the possible extinction of the thylacine.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 9 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="10">
                                    <legend class="q-text">
                                        <span class="q-number">10</span>
                                        T.T. Flynn’s proposal to rehome captive thylacines on an island proved to be impractical.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 10 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="11">
                                    <legend class="q-text">
                                        <span class="q-number">11</span>
                                        There were still reasonable numbers of thylacines in existence when a piece of legislation protecting the species during their breeding season was passed.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 11 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>
                                
                                <fieldset class="q-item" data-type="tfng" data-q="12">
                                    <legend class="q-text">
                                        <span class="q-number">12</span>
                                        From 1930 to 1936, the only known living thylacines were all in captivity.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 12 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-7" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="13">
                                    <legend class="q-text">
                                        <span class="q-number">13</span>
                                        Attempts to find living thylacines are now rarely made.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 13 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-8" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-8" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-wq6xHskL3uTj5VSU-8" value="NOT GIVEN" />
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
                            <h3 class="passage-title">Palm oil</h3>
                            <div class="passage-body">
                                <h3 class="passage-title">A</h3>
                                <p>Palm oil is an edible oil derived from the fruit of the African oil palm tree, and is currently the most consumed vegetable oil in the world. It’s almost certainly in the soap we wash with in the morning, the sandwich we have for lunch, and the biscuits we snack on during the day. Why is palm oil so attractive for manufacturers? Primarily because its unique properties – such as remaining solid at room temperature – make it an ideal ingredient for long-term preservation, allowing many packaged foods on supermarket shelves to have ‘best before’ dates of months, even years, into the future.</p>
                                <h3 class="passage-title">B</h3>
                                <p>Many farmers have seized the opportunity to maximise the planting of oil palm trees. Between 1990 and 2012, the global land area devoted to growing oil palm trees grew from 6 to 17 million hectares, now accounting for around ten percent of total cropland in the entire world. From a mere two million tonnes of palm oil being produced annually globally 50 years ago, there are now around 60 million tonnes produced every single year, a figure looking likely to double or even triple by the middle of the century.</p>
                                <h3 class="passage-title">C</h3>
                                <p>However, there are multiple reasons why conservationists cite the rapid spread of oil palm plantations as a major concern. There are countless news stories of deforestation, habitat destruction and dwindling species populations, all as a direct result of land clearing to establish oil palm tree monoculture on an industrial scale, particularly in Malaysia and Indonesia. Endangered species – most famously the Sumatran orangutan, but also rhinos, elephants, tigers, and numerous other fauna – have suffered from the unstoppable spread of oil palm plantations.</p>
                                <h3 class="passage-title">D</h3>
                                <p>‘Palm oil is surely one of the greatest threats to global biodiversity,’ declares Dr Farnon Ellwood of the University of the West of England, Bristol. ‘Palm oil is replacing rainforest, and rainforest is where all the species are. That’s a problem.’ This has led to some radical questions among environmentalists, such as whether consumers should try to boycott palm oil entirely.</p>
                                <p>Meanwhile Bhavani Shankar, Professor at London’s School of Oriental and African Studies, argues, ‘It’s easy to say that palm oil is the enemy and we should be against it. It makes for a more dramatic story, and it’s very intuitive. But given the complexity of the argument, I think a much more nuanced story is closer to the truth.’</p>
                                <h3 class="passage-title">E</h3>
                                <p>One response to the boycott movement has been the argument for the vital role palm oil plays in lifting many millions of people in the developing world out of poverty. Is it desirable to have palm oil boycotted, replaced, eliminated from the global supply chain, given how many low-income people in developing countries depend on it for their livelihoods? How best to strike a utilitarian balance between these competing factors has become a serious bone of contention.</p>
                                <h3 class="passage-title">F</h3>
                                <p>Even the deforestation argument isn’t as straightforward as it seems. Oil palm plantations produce at least four and potentially up to ten times more oil per hectare than soybean, rapeseed, sunflower or other competing oils. That immensely high yield – which is predominantly what makes it so profitable – is potentially also an ecological benefit. If ten times more palm oil can be produced from a patch of land than any competing oil, then ten times more land would need to be cleared in order to produce the same volume of oil from that competitor.</p>
                                <p>As for the question of carbon emissions, the issue really depends on what oil palm trees are replacing. Crops vary in the degree to which they sequester carbon – in other words, the amount of carbon they capture from the atmosphere and store within the plant. The more carbon a plant sequesters, the more it reduces the effect of climate change. As Shankar explains: ‘[Palm oil production] actually sequesters more carbon in some ways than other alternatives. […] Of course, if you’re cutting down virgin forest it’s terrible – that’s what’s happening in Indonesia and Malaysia, it’s been allowed to get out of hand. But if it’s replacing rice, for example, it might actually sequester more carbon.’</p>
                                <h3 class="passage-title">G</h3>
                                <p>The industry is now regulated by a group called the Roundtable on Sustainable Palm Oil (RSPO), consisting of palm growers, retailers, product manufacturers, and other interested parties. Over the past decade or so, an agreement has gradually been reached regarding standards that producers of palm oil have to meet in order for their product to be regarded as officially ‘sustainable’. The RSPO insists upon no virgin forest clearing, transparency and regular assessment of carbon stocks, among other criteria. Only once these requirements are fully satisfied is the oil allowed to be sold as certified sustainable palm oil (CSPO). Recent figures show that the RSPO now certifies around 12 million tonnes of palm oil annually, equivalent to roughly 21 percent of the world’s total palm oil production.</p>
                                <h3 class="passage-title">H</h3>
                                <p>There is even hope that oil palm plantations might not need to be such sterile monocultures, or ‘green deserts’, as Ellwood describes them. New research at Ellwood’s lab hints at one plant which might make all the difference. The bird’s nest fern (Asplenium nidus) grows on trees in an epiphytic fashion (meaning it’s dependent on the tree only for support, not for nutrients), and is native to many tropical regions, where as a keystone species it performs a vital ecological role. Ellwood believes that reintroducing the bird’s nest fern into oil palm plantations could potentially allow these areas to recover their biodiversity, providing a home for all manner of species, from fungi and bacteria, to invertebrates such as insects, amphibians, reptiles and even mammals.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 14-20</b></p>
                                    <p class="lead">The passage has eight paragraphs, <b>A-H</b>.</p>
                                    <p>Write the correct letter, <b>A-H</b>, in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="14">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">14</span>
                                        <span style="flex: 1;">
                                            examples of a range of potential environmental advantages of oil palm tree cultivation
                                            <span class="q-question">
                                                <select name="matching_information-wq6xHskL3uTj5VSU-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="15">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">15</span>
                                        <span style="flex: 1;">
                                            description of an organisation which controls the environmental impact of palm oil production
                                            <span class="q-question">
                                                <select name="matching_information-wq6xHskL3uTj5VSU-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="16">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">16</span>
                                        <span style="flex: 1;">
                                            examples of the widespread global use of palm oil
                                            <span class="q-question">
                                                <select name="matching_information-wq6xHskL3uTj5VSU-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="17">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">17</span>
                                        <span style="flex: 1;">
                                            reference to a particular species which could benefit the ecosystem of oil palm plantations
                                            <span class="q-question">
                                                <select name="matching_information-wq6xHskL3uTj5VSU-4" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="18">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">18</span>
                                        <span style="flex: 1;">
                                            figures illustrating the rapid expansion of the palm oil industry
                                            <span class="q-question">
                                                <select name="matching_information-wq6xHskL3uTj5VSU-5" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="19">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">19</span>
                                        <span style="flex: 1;">
                                            an economic justification for not opposing the palm oil industry
                                            <span class="q-question">
                                                <select name="matching_information-wq6xHskL3uTj5VSU-6" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="20">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">20</span>
                                        <span style="flex: 1;">
                                            examples of creatures badly affected by the establishment of oil palm plantations  
                                            <span class="q-question">
                                                <select name="matching_information-wq6xHskL3uTj5VSU-7" class="q-dropdown">
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

                                {{-- two_choices --}}
                                <fieldset class="q-item">
                                    <p>Questions 21-22</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">21</span>
                                        <span class="q-number">22</span>
                                        Which <b>TWO</b> statements are made about the Roundtable on Sustainable Palm Oil (RSPO)?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-wq6xHskL3uTj5VSU-1[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Its membership has grown steadily over the course of the last decade.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-wq6xHskL3uTj5VSU-1[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It demands that certified producers be open and honest about their practices.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-wq6xHskL3uTj5VSU-1[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It took several years to establish its set of criteria for sustainable palm oil certification.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-wq6xHskL3uTj5VSU-1[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Its regulations regarding sustainability are stricter than those governing other industries.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-wq6xHskL3uTj5VSU-1[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">It was formed at the request of environmentalists concerned about the loss of virgin forests.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- sentence_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 23-26</h3>
                                    <p class="lead">Complete the sentences below.</p>
                                    <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="23">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">23</span>
                                        <span style="flex: 1;">
                                            One advantage of palm oil for manufacturers is that it stays
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-1" class="q-text"
                                                    placeholder="">
                                            </span>
                                            even when not refrigerated.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="24">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">24</span>
                                        <span style="flex: 1;">
                                            The 
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-2" class="q-text"
                                                    placeholder="">
                                            </span>
                                            is the best known of the animals suffering habitat loss as a result of the spread of oil palm plantations.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="25">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">25</span>
                                        <span style="flex: 1;">
                                            As one of its criteria for the certification of sustainable palm oil, the RSPO insists that growers check
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-3" class="q-text"
                                                    placeholder="">
                                            </span>
                                            on a routine basis.
                                        </span>
                                    </legend>
                                </fieldset>

                                <fieldset class="q-item questions-item" data-type="sentence_completion" data-q="26">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">26</span>
                                        <span style="flex: 1;">
                                            Ellwood and his researchers are looking into whether the bird’s nest fern could restore
                                            <span class="q-question">
                                                <input type="text" name="sentence_completion-wq6xHskL3uTj5VSU-4" class="q-text"
                                                    placeholder="">
                                            </span>
                                            in areas where oil palm trees are grown.
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
                            <h3 class="passage-title">To catch a king</h3>
                            <div class="passage-body">
                                <p><i>Anna Keay reviews Charles Spencer’s book about the hunt for King Charles II during the English Civil War of the seventeenth century</i></p>
                                <p>Charles Spencer’s latest book, To Catch a King, tells us the story of the hunt for King Charles II in the six weeks after his resounding defeat at the Battle of Worcester in September 1651. And what a story it is. After his father was executed by the Parliamentarians in 1649, the young Charles II sacrificed one of the very principles his father had died for and did a deal with the Scots, thereby accepting Presbyterianism* as the national religion in return for being crowned King of Scots. His arrival in Edinburgh prompted the English Parliamentary army to invade Scotland in a pre-emptive strike. This was followed by a Scottish invasion of England. The two sides finally faced one another at Worcester in the west of England in 1651. After being comprehensively defeated on the meadows outside the city by the Parliamentarian army, the 21-year-old king found himself the subject of a national manhunt, with a huge sum offered for his capture, through a series of heart-poundingly close escapes, to evade the Parliamentarians before seeking refuge in France. For the next nine years, the penniless and defeated Charles wandered around Europe with only a small group of loyal supporters.</p>
                                <p>Years later, after his restoration as king, the 50-year-old Charles II requested a meeting with the writer and diarist Samuel Pepys. His intention when asking Pepys to commit his story to paper was to ensure that this most extraordinary episode was never forgotten. Over two three-hour sittings, the king related to him in great detail his personal recollections of the six weeks he had spent as a fugitive. As the king and secretary settled down (a scene that is surely a gift for a future scriptwriter), Charles commenced his story: ‘After the battle was so absolutely lost as to be beyond hope of recovery, I began to think of the best way of saving myself.’</p>
                                <p>One of the joys of Spencer’s book, a result not least of its use of Charles II’s own narrative as well as those of his supporters, is just how close the reader gets to the action. The day-by-day retelling of the fugitives’ doings provides delicious details: the cutting of the king’s long hair with agricultural shears, the use of walnut leaves to dye his pale skin, and the day Charles spent lying on a branch of the great oak tree in Boscobel Wood as the Parliamentary soldiers scoured the forest floor below. Spencer draws out both the humour – such as the preposterous refusal of Charles’s friend Henry Wilmot to adopt disguise on the grounds that it was beneath his dignity – and the emotional tension when the secret of the king’s presence was cautiously revealed to his supporters.</p>
                                <p>Charles’s adventures after losing the Battle of Worcester hide the uncomfortable truth that whilst almost everyone in England had been appalled by the execution of his father, they had not welcomed the arrival of his son with the Scots army, but had instead firmly bolted their doors. This was partly because he rode at the head of what looked like a foreign invasion force and partly because, after almost a decade of civil war, people were desperate to avoid it beginning again. This makes it all the more interesting that Charles II himself loved the story so much ever after. As well as retelling it to anyone who would listen, causing eye-rolling among courtiers, he set in train a series of initiatives to memorialise it. There was to be a new order of chivalry, the Knights of the Royal Oak. A series of enormous oil paintings depicting the episode were produced, including a two-metre-wide canvas of Boscobel Wood and a set of six similarly enormous paintings of the king on the run. In 1660, Charles II commissioned the artist John Michael Wright to paint a flying squadron of cherubs* carrying an oak tree to the heavens on the ceiling of his bedchamber. It is hard to imagine many other kings marking the lowest point in their life so enthusiastically, or indeed pulling off such an escape in the first place.</p>
                                <p>Charles Spencer is the perfect person to pass the story on to a new generation. His pacey, readable prose steers deftly clear of modern idioms and elegantly brings to life the details of the great tale. He has even-handed sympathy for both the fugitive king and the fierce republican regime that hunted him, and he succeeds in his desire to explore far more of the background of the story than previous books on the subject have done. Indeed, the opening third of the book is about how Charles II found himself at Worcester in the first place, which for some will be reason alone to read To Catch a King.</p>
                                <p>The tantalising question left, in the end, is that of what it all meant. Would Charles II have been a different king had these six weeks never happened? The days and nights spent in hiding must have affected him in some way. Did the need to assume disguises, to survive on wit and charm alone, to use trickery and subterfuge to escape from tight corners help form him? This is the one area where the book doesn’t quite hit the mark. Instead its depiction of Charles II in his final years as an ineffective, pleasure-loving monarch doesn’t do justice to the man (neither is it accurate), or to the complexity of his character. But this one niggle aside, To Catch a King is an excellent read, and those who come to it knowing little of the famous tale will find they have a treat in store.</p>
                                <p><i>*Presbyterianism: part of the reformed Protestant religion</i></p>
                                <p><i>*cherub: an image of angelic children used in paintings</i></p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 27-31</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                    <p><i>Write the correct letter in boxes on your answer sheet.</i></p>
                                </fieldset>
                                <fieldset class="q-item" data-type="oc" data-q="27">
                                    <legend class="q-text">
                                        <span class="q-number">27</span>
                                        What point does Shester make about Barr’s book in the first paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It gives a highly original explanation for urban development.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">Elements of Barr’s research papers are incorporated throughout the book.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">Other books that are available on the subject have taken a different approach.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It covers a range of factors that affected the development of New York.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="28">
                                    <legend class="q-text">
                                        <span class="q-number">28</span>
                                        How does Shester respond to the information in the book about tenements?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">She describes the reasons for Barr’s interest.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">She indicates a potential problem with Barr’s analysis.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">She compares Barr’s conclusion with that of other writers.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">She provides details about the sources Barr used for his research.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="29">
                                    <legend class="q-text">
                                        <span class="q-number">29</span>
                                        What does Shester say about chapter six of the book?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It contains conflicting data.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It focuses too much on possible trends.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It is too specialised for most readers.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It draws on research that is out of date.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="30">
                                    <legend class="q-text">
                                        <span class="q-number">30</span>
                                        What does Shester suggest about the chapters focusing on the 1920s building boom?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                        <label class="q-option">
                                            <input type="radio" name="30-wq6xHskL3uTj5VSU-4" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">The information should have been organised differently.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="30-wq6xHskL3uTj5VSU-4" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">More facts are needed about the way construction was financed.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="30-wq6xHskL3uTj5VSU-4" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">The explanation that is given for the building boom is unlikely.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="30-wq6xHskL3uTj5VSU-4" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">Some parts will have limited appeal to certain people.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="31">
                                    <legend class="q-text">
                                        <span class="q-number">31</span>
                                        What impresses Shester the most about the chapter on land values?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 31 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-5" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">the broad time period that is covered</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-5" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">the interesting questions that Barr asks</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-5" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">the nature of the research into the topic</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-wq6xHskL3uTj5VSU-5" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">the recommendations Barr makes for the future</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 32-35</b></p>
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
                                <fieldset class="q-item" data-type="ynng" data-q="32">
                                    <legend class="q-text">
                                        <span class="q-number">32</span>
                                        The description in the first chapter of how New York probably looked from the air in the early 1600s lacks interest.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 32 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="33">
                                    <legend class="q-text">
                                        <span class="q-number">33</span>
                                        Chapters two and three prepare the reader well for material yet to come.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 33 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="34">
                                    <legend class="q-text">
                                        <span class="q-number">34</span>
                                        The biggest problem for many nineteenth-century New York immigrant neighbourhoods was a lack of amenities.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 34 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="35">
                                    <legend class="q-text">
                                        <span class="q-number">35</span>
                                        In the nineteenth century, New York’s immigrant neighbourhoods tended to concentrate around the harbour.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 35 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-wq6xHskL3uTj5VSU-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 36-40</h3>
                                    <p class="lead">Complete the summary using the list of words, <b>A-J</b>, below.</p>
                                    <p><i>Write the correct letter, <b>A-J</b>, in boxes on your answer sheet.</i></p>

                                    <table cellspacing="20" class="q-table q-table-letters">
                                        <tr>
                                            <td><b>A</b></td><td>development plans</td>
                                            <td><b>B</b></td><td>deep excavations</td>
                                        </tr>
                                        <tr>
                                            <td><b>C</b></td><td>widgreat distance</td>
                                            <td><b>D</b></td><td>excessive expense</td>
                                        </tr>
                                        <tr>
                                            <td><b>E</b></td><td>impossible tasks</td>
                                            <td><b>F</b></td><td>associated risks</td>
                                        </tr>
                                        <tr>
                                            <td><b>G</b></td><td>water level</td>
                                            <td><b>H</b></td><td>specific areas</td>
                                        </tr>
                                        <tr>
                                            <td><b>I</b></td><td>total expenditure</td>
                                            <td><b>J</b></td><td>construction guidelines</td>
                                        </tr>
                                    </table>

                                    <h3>The bedrock myth</h3>

                                    <p>
                                        In chapter seven, Barr indicates how the lack of bedrock close to the surface does not explain why skyscrapers are absent from
                                        <span class="q-number-box">36</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-wq6xHskL3uTj5VSU-1" data-type="summary_completion" data-q="36" class="q-dropdown">
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
                                                    <option value="J">J</option>
                                                </select>
                                            </span>
                                        </span>
                                        . He points out that although the cost of foundations increases when bedrock is deep below the surface, this cannot be regarded as
                                        <span class="q-number-box">37</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-wq6xHskL3uTj5VSU-2" data-type="summary_completion" data-q="37" class="q-dropdown">
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
                                                    <option value="J">J</option>
                                                </select>
                                            </span>
                                        </span>
                                        , especially when compared to
                                        <span class="q-number-box">38</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-wq6xHskL3uTj5VSU-3" data-type="summary_completion" data-q="38" class="q-dropdown">
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
                                                    <option value="J">J</option>
                                                </select>
                                            </span>
                                        </span>
                                        . A particularly enjoyable part of the chapter was Barr’s account of how foundations are built. He describes not only how
                                        <span class="q-number-box">39</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-wq6xHskL3uTj5VSU-4" data-type="summary_completion" data-q="39" class="q-dropdown">
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
                                                    <option value="J">J</option>
                                                </select>
                                            </span>
                                        </span>
                                        are made possible by the use of caissons, but he also discusses their
                                        <span class="q-number-box">40</span>
                                        <span style="flex: 1;">
                                            <span class="q-question">
                                                <select name="summary_completion-wq6xHskL3uTj5VSU-5" data-type="summary_completion" data-q="40" class="q-dropdown">
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
                                                    <option value="J">J</option>
                                                </select>
                                            </span>
                                        </span>
                                        . The chapter is well researched but relatively easy to understand.
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
