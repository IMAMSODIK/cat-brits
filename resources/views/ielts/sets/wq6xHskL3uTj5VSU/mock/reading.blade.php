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

                                <fieldset class="q-item" data-q="21" data-type="two_choices" data-q-multi="1,2" data-max="2">
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
                            <h3 class="passage-title">Building the Skyline: The Birth and Growth of Manhattan’s Skyscrapers</h3>
                            <div class="passage-body">
                                <p><i>Katharine L. Shester reviews a book by Jason Barr about the development of New York City</i></p>
                                <p>In Building the Skyline, Jason Barr takes the reader through a detailed history of New York City. The book combines geology, history, economics, and a lot of data to explain why business clusters developed where they did and how the early decisions of workers and firms shaped the skyline we see today. Building the Skyline is organized into two distinct parts. The first is primarily historical and addresses New York’s settlement and growth from 1609 to 1900; the second deals primarily with the 20th century and is a compilation of chapters commenting on different aspects of New York’s urban development. The tone and organization of the book changes somewhat between the first and second parts, as the latter chapters incorporate aspects of Barr’s related research papers.</p>
                                <p>Barr begins chapter one by taking the reader on a ‘helicopter time-machine’ ride – giving a fascinating account of how the New York landscape in 1609 might have looked from the sky. He then moves on to a subterranean walking tour of the city, indicating the location of rock and water below the subsoil, before taking the reader back to the surface. His love of the city comes through as he describes various fun facts about the location of the New York residence of early 19th-century vice-president Aaron Burr as well as a number of legends about the city.</p>
                                <p>Chapters two and three take the reader up to the Civil War (1861-1865), with chapter two focusing on the early development of land and the implementation of a grid system in 1811. Chapter three focuses on land use before the Civil War. Both chapters are informative and well researched and set the stage for the economic analysis that comes later in the book. I would have liked Barr to expand upon his claim that existing tenements* prevented skyscrapers in certain neighborhoods because ‘likely no skyscraper developer was interested in performing the necessary “slum clearance’”. Later in the book, Barr makes the claim that the depth of bedrock** was not a limiting factor for developers, as foundation costs were a small fraction of the cost of development. At first glance, it is not obvious why slum clearance would be limiting, while more expensive foundations would not.</p>
                                <p>Chapter four focuses on immigration and the location of neighborhoods and tenements in the late 19th century. Barr identifies four primary immigrant enclaves and analyzes their locations in terms of the amenities available in the area. Most of these enclaves were located on the least valuable land, between the industries located on the waterfront and the wealthy neighborhoods bordering Central Park.</p>
                                <p>Part two of the book begins with a discussion of the economics of skyscraper height. In chapter five, Barr distinguishes between engineering height, economic height, and developer height — where engineering height is the tallest building that can be safely made at a given time, economic height is the height that is most efficient from society’s point of view, and developer height is the actual height chosen by the developer, who is attempting to maximize return on investment.</p>
                                <p>Chapter five also has an interesting discussion of the technological advances that led to the construction of skyscrapers. For example, the introduction of iron and steel skeletal frames made thick, load-bearing walls unnecessary, expanding the usable square footage of buildings and increasing the use of windows and availability of natural light. Chapter six then presents data on building height throughout the 20th century and uses regression analysis to ‘predict’ building construction. While less technical than the research paper on which the chapter is based, it is probably more technical than would be preferred by a general audience.</p>
                                <p>Chapter seven tackles the ‘bedrock myth’, the assumption that the absence of bedrock close to the surface between Downtown and Midtown New York is the reason for skyscrapers not being built between the two urban centers. Rather, Barr argues that while deeper bedrock does increase foundation costs, these costs were neither prohibitively high nor were they large compared to the overall cost of building a skyscraper. What I enjoyed the most about this chapter was Barr’s discussion of how foundations are actually built. He describes the use of caissons, which enable workers to dig down for considerable distances, often below the water table, until they reach bedrock. Barr’s thorough technological history discusses not only how caissons work, but also the dangers involved. While this chapter references empirical research papers, it is a relatively easy read.</p>
                                <p>Chapters eight and nine focus on the birth of Midtown and the building boom of the 1920s. Chapter eight contains lengthy discussions of urban economic theory that may serve as a distraction to readers primarily interested in New York. However, they would be well-suited for undergraduates learning about the economics of cities. In the next chapter, Barr considers two of the primary explanations for the building boom of the 1920s — the first being exuberance, and the second being financing. He uses data to assess the viability of these two explanations and finds that supply and demand factors explain much of the development of the 1920s; though it enabled the boom, cheap credit was not, he argues, the primary cause.</p>
                                <p>In the final chapter (chapter 10), Barr discusses another of his empirical papers that estimates Manhattan land values from the mid-19th century to the present day. The data work that went into these estimations is particularly impressive. Toward the end of the chapter, Barr assesses ‘whether skyscrapers are a cause or an effect of high land values’. He finds that changes in land values predict future building height, but the reverse is not true. The book ends with an epilogue, in which Barr discusses the impact of climate change on the city and makes policy suggestions for New York going forward.</p>
                                <p><i>*a tenement: a multi-occupancy building of any sort, but particularly a run-down apartment building or slum building</i></p>
                                <p><i>**bedrock: the solid, hard rock in the ground that lies under a loose layer of soil</i></p>
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
