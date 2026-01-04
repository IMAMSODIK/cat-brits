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
                            <h3 class="passage-title">Manatees</h3>
                            <div class="passage-body">
                                <p>Manatees, also known as sea cows, are aquatic mammals that belong to a group of animals called Sirenia. This group also contains dugongs. Dugongs and manatees look quite alike – they are similar in size, colour and shape, and both have flexible flippers for forelimbs. However, the manatee has a broad, rounded tail, whereas the dugongs is fluked, like that of a whale. There are three species of manatees: the West Indian manatee (Trichechus manatus), the African manatee (Trichechus senegalensis) and the Amazonian manatee (Trichechus inunguis).</p>
                                <p>Unlike most mammals, manatees have only six bones in their neck – most others, including humans and giraffes, have seven. This short neck allows a manatee to move its head up and down, but not side to side. To see something on its left or its right, a manatee must turn its entire body, steering with its flippers. Manatees have pectoral flippers but no back limbs, only a tail for propulsion. They do have pelvic bones, however – a leftover from their evolution from a four-legged to a fully aquatic animal. Manatees share some visual similarities to elephants. Like elephants, manatees have thick, wrinkled skin. They also have some hairs covering their bodies which help them sense vibrations in the water around them.</p>
                                <p>Seagrasses and other marine plants make up most of a manatee’s diet. Manatees spend about eight hours each day grazing and uprooting plants. They eat up to 15% of their weight in food each day. African manatees are omnivorous – studies have shown that molluscs and fish make up a small part of their diets. West Indian and Amazonian manatees are both herbivores.</p>
                                <p>Manatees’ teeth are all molars – flat, rounded teeth for grinding food. Due to manatees’ abrasive aquatic plant diet, these teeth get worn down and they eventually fall out, so they continually grow new teeth that get pushed forward to replace the ones they lose. Instead of having incisors to grasp their food, manatees have lips which function like a pair of hands to help tear food away from the seafloor.</p>
                                <p>Manatees are fully aquatic, but as mammals, they need to come up to the surface to breathe. When awake, they typically surface every two to four minutes, but they can hold their breath for much longer. Adult manatees sleep underwater for 10-12 hours a day, but they come up for air every 15-20 minutes. Active manatees need to breathe more frequently. It’s thought that manatees use their muscular diaphragm and breathing to adjust their buoyancy. They may use diaphragm contractions to compress and store gas in folds in their large intestine to help them float.</p>
                                <p>The West Indian manatee reaches about 3.5 metros long and weighs on average around 500 kilo grammes. It moves between fresh water and salt water, taking advantage of coastal mangroves and coral reefs, rivers, lakes and inland lagoons. There are two subspecies of West Indian manatee: the Antillean manatee is found in waters from the Bahamas to Brazil, whereas the Florida manatee is found in US waters, although some individuals have been recorded in the Bahamas. In winter, the Florida manatee is typically restricted to Florida. When the ambient water temperature drops below 20°C, it takes refuge in naturally and artificially warmed water, such as at the warm-water outfalls from powerplants.</p>
                                <p>The African manatee is also about 3.5 metros long and found in the sea along the west coast of Africa, from Mauritania down to Angola. The species also makes use of rivers, with the mammals seen in landlocked countries such as Mali and Niger. The Amazonian manatee is the smallest species, though it is still a big animal. It grows to about 2.5 metros long and 350 kilo grammes. Amazonian manatees favour calm, shallow waters that are above 23°C This species is found in fresh water in the Amazon Basin in Brazil, as well as in Colombia, Ecuador and Peru.</p>
                                <p>All three manatee species are endangered or at a heightened risk of extinction. The African manatee and Amazonian manatee are both listed as Vulnerable by the International Union for Conservation of Nature (IUCN). It is estimated that 140,000 Amazonian manatees were killed between 1935 and 1954 for their meat, fat and skin, with the latter used to make leather. In more recent years, African manatee decline has been tied to incidental capture in fishing nets and hunting. Manatee hunting is now illegal in every country the African species is found in.</p>
                                <p>The two subspecies of West Indian manatee are listed as Endangered by the IUCN. Both are also expected to undergo a decline of 20% over the next 40 years. A review of almost 1,800 cases of entanglement in fishing nets and of plastic consumption among marine mammals in US waters from 2009 to 2020 found that at least 700 cases involved manatees. The chief cause of death in Florida manatees is boat strikes. However, laws in certain parts of Florida now limit boat speeds during winter, allowing slow-moving manatees more time to respond.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- nc --}}
                                <fieldset class="q-item">
                                    <h3>Questions 1-6</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD AND/OR A NUMBER</b> from the passage for each answer.</p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <p><b>Appearance</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="1">
                                                look similar to dugongs, but with a differently shaped
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>Movement</b></p>
                                    <ul>
                                        <li>have fewer neck bones than most mammals</li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="2">
                                                need to use their
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-2" class="q-text" placeholder="">
                                                to help to turn their bodies around in order to look sideways
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="3">
                                                sense vibrations in the water by means of
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-3" class="q-text" placeholder="">
                                                on their skin
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>Feeding</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="4">
                                                eat mainly aquatic vegetation, such as
                                                <span class="q-number-box">4</span>
                                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-4" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="5">
                                                grasp and pull up plants with their
                                                <span class="q-number-box">5</span>
                                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-5" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                    <p><b>Breathing</b></p>
                                    <ul>
                                        <li>come to the surface for air every 2-4 minutes when awake and every 15-20 while sleeping</li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="6">
                                                may regulate the
                                                <span class="q-number-box">6</span>
                                                <input type="text" name="nc-EKX6hyJgeV3x0pxB-6" class="q-text" placeholder="">
                                                of their bodies by using muscles of diaphragm to store air internally
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>

                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 7-13</b></p>
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
                                        West Indian manatees can be found in a variety of different aquatic habitats.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="8">
                                    <legend class="q-text">
                                        <span class="q-number">8</span>
                                        The Florida manatee lives in warmer waters than the Antillean manatee.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="9">
                                    <legend class="q-text">
                                        <span class="q-number">9</span>
                                        The African manatee’s range is limited to coastal waters between the West African countries of Mauritania and Angola.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="10">
                                    <legend class="q-text">
                                        <span class="q-number">10</span>
                                        The extent of the loss of Amazonian manatees in the mid-twentieth century was only revealed many years later.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="11">
                                    <legend class="q-text">
                                        <span class="q-number">11</span>
                                        It is predicted that West Indian manatee populations will fall in the coming decades.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="12">
                                    <legend class="q-text">
                                        <span class="q-number">12</span>
                                        The risk to manatees from entanglement and plastic consumption increased significantly in the period 2009-2020.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 6 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-6" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-6" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="13">
                                    <legend class="q-text">
                                        <span class="q-number">13</span>
                                        There is some legislation in place which aims to reduce the likelihood of boat strikes on manatees in Florida.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 7 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-7" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-7" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-EKX6hyJgeV3x0pxB-7" value="NOT GIVEN" />
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
                            <div class="passage-body">
                                <h3>Procrastination</h3>
                                <p>A psychologist explains why we put off important tasks and how we can break this habit</p>
                                <h3>A</h3>
                                <p>Procrastination is the habit of delaying a necessary task, usually by focusing on less urgent, more enjoyable, and easier activities instead. We all do it from time to time. We might be composing a message to a friend who we have to let down, or putting together an important report for college or work, we’re doing our best to avoid doing the job at hand, but deep down we know that we should just be getting on with it. Unfortunately, berating ourselves won’t stop us procrastinating again. In fact, it’s one of the worst things we can do. This matters because, as my research shows, procrastination doesn’t just waste time, but is actually linked to other problems, too.</p>
                                <h3>B</h3>
                                <p>Contrary to popular belief, procrastination is not due to laziness or poor time management. Scientific studies suggest procrastination is, in fact, caused by poor mood management. This makes sense if we consider that people are more likely to put off starting or completing tasks that they are really not keen to do. If just thinking about the task threatens our sense of self-worth or makes us anxious, we will be more likely to put it off. Research involving brain imaging has found that areas of the brain linked to detection of threats and emotion regulation are actually different in people who chronically procrastinate compared to those who don’t procrastinate frequently.</p>
                                <h3>C</h3>
                                <p>Tasks that are emotionally loaded or difficult, such as preparing for exams, are prime candidates for procrastination. People with low self-esteem are more likely to procrastinate. Another group of people who tend to procrastinate are perfectionists, who worry their work will be judged harshly by others. We know that if we don’t finish that report or complete those home repairs, then what we did can’t be evaluated. When we avoid such tasks, we also avoid the negative emotions associated with them. This is rewarding, and it conditions us to use procrastination to repair our mood. If we engage in more enjoyable tasks instead, we get another mood boost. In the long run, however, procrastination isn’t an effective way of managing emotions. The ‘mood repair’ we experience is temporary. Afterwards, people tend to be left with a sense of guilt that not only increases their negative mood, but also reinforces their tendency to procrastinate.</p>
                                <h3>D</h3>
                                <p>So why is this such a problem? When most people think of the costs of procrastination, they think of the toll on productivity. For example, studies have shown that procrastination negatively impacts on student performance. But putting off reading textbooks and writing essays may affect other areas of students’ lives. In one study of over 3,000 German students over a six-month period, those who reported procrastinating over their university work were also more likely to engage in study-related misconduct, such as cheating and plagiarism. But the behaviour that procrastination was most closely linked with was using fraudulent excuses to get deadline extensions. Other research shows that employees on average spend almost a quarter of their workday procrastinating, and again this is linked with negative outcomes. In fact, in one US survey of over 22,000 employees, participants who said they regularly procrastinated had less annual income and less employment stability. For every one-point increase on a measure of chronic procrastination, annual income decreased by US$15,000.</p>
                                <h3>E</h3>
                                <p>Procrastination also correlates with serious health and well-being problems. A tendency to procrastinate is linked to poor mental health, including higher levels of depression and anxiety. Across numerous studies, I’ve found people who regularly procrastinate report a greater number of health issues, such as headaches, flu and colds, and digestive issues. They also experience higher levels of stress and poor sleep quality. They are less likely to practise healthy behaviours, such as eating a healthy diet and regularly exercising, and use destructive coping strategies to manage their stress. In one study of over 700 people, I found people prone to procrastination had a 63% greater risk ofpoor heart health after accounting for other personality traits and demographics.</p>
                                <h3>F</h3>
                                <p>Finding better ways of managing our emotions is one route out of the vicious cycle of procrastination. An important first step is to manage our environment and how we view the task. There are a number of evidence-based strategies that can help us fend off distractions that can occupy our minds when we should be focusing on the thing we should be getting on with. For example, reminding ourselves about why the task is important and valuable can increase positive feelings towards it. Forgiving ourselves and feeling compassion when we procrastinate can help break the procrastination cycle. We should admit that we feel bad, but not be overly critical of ourselves. We should remind ourselves that we’re not the first person to procrastinate, nor the last. Doing this can take the edge off the negative feelings we have about ourselves when we procrastinate. This can all make it easier to get back on track.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- matching_information --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 14-16</b></p>
                                    <p class="lead">Reading Passage has six paragraphs,</p>
                                    <p class="lead">Which paragraph contains the following information?</p>
                                    <p>Write the correct letter,<b>A-F</b>, in boxes on your answer sheet.</p>
                                    <p><b>NB</b> You may use any letter more than once.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="14">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">14</span>
                                        <span style="flex: 1;">
                                            mention of false assumptions about why people procrastinate
                                            <span class="q-question">
                                                <select name="matching_information-EKX6hyJgeV3x0pxB-1" class="q-dropdown">
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
                                            reference to the realisation that others also procrastinate
                                            <span class="q-question">
                                                <select name="matching_information-EKX6hyJgeV3x0pxB-2" class="q-dropdown">
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
                                            neurological evidence of a link between procrastination and emotion
                                            <span class="q-question">
                                                <select name="matching_information-EKX6hyJgeV3x0pxB-3" class="q-dropdown">
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

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 17-22</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p>Write your answers in boxes on your answer sheet.</p>

                                    <p><b>What makes us procrastinate?</b></p>
                                    <p>
                                        Many people think that procrastination is the result of
                                        <span class="q-number-box">17</span>
                                        <input type="text" name="summary_completion-EKX6hyJgeV3x0pxB-1" data-q="1" data-type="summary_completion" class="q-text" placeholder="">
                                        Others believe it to be the result of an inability to organise time efficiently.
                                    </p>
                                    <p>
                                        But scientific studies suggest that procrastination is actually due to poor mood management. The tasks we are most likely to put off are those that could damage our self-esteem or cause us to feel
                                        <span class="q-number-box">18</span>
                                        <input type="text" name="summary_completion-EKX6hyJgeV3x0pxB-2" data-q="2" data-type="summary_completion" class="q-text" placeholder="">
                                        when we think about them. Research comparing chronic procrastinators with other people even found differences in the brain regions associated with regulating emotions and identifying 
                                        <span class="q-number-box">19</span>
                                        <input type="text" name="summary_completion-EKX6hyJgeV3x0pxB-3" data-q="3" data-type="summary_completion" class="q-text" placeholder="">
                                    </p>
                                    <p>
                                        Emotionally loaded and difficult tasks often cause us to procrastinate. Getting ready to take
                                        <span class="q-number-box">20</span>
                                        <input type="text" name="summary_completion-EKX6hyJgeV3x0pxB-4" data-q="4" data-type="summary_completion" class="q-text" placeholder="">
                                        might be a typical example of one such task.
                                    </p>
                                    <p>
                                        People who are likely to procrastinate tend to be either
                                        <span class="q-number-box">21</span>
                                        <input type="text" name="summary_completion-EKX6hyJgeV3x0pxB-5" data-q="5" data-type="summary_completion" class="q-text" placeholder="">
                                        or those with low self-esteem.
                                    </p>
                                    <p>
                                        Procrastination is only a short-term measure for managing emotions. It’s often followed by a feeling of
                                        <span class="q-number-box">22</span>
                                        <input type="text" name="summary_completion-EKX6hyJgeV3x0pxB-6" data-q="6" data-type="summary_completion" class="q-text" placeholder="">
                                        , which worsens our mood and leads to more procrastination.
                                    </p>
                                </fieldset>

                                {{-- two_choices --}}
                                <fieldset class="q-item">
                                    <p>Questions 23-24</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="two_choices" data-q="1" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">23</span>
                                        <span class="q-number">24</span>
                                        Which <b>TWO</b> comparisons between employees who often procrastinate and those who do not are mentioned in the text?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-1[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">Their salaries are lower.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-1[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">The quality of their work is inferior.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-1[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">They don’t keep their jobs for as long.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-1[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">They don’t enjoy their working lives as much.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-1[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">They have poorer relationships with colleagues.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- two_choices 2 --}}
                                <fieldset class="q-item">
                                    <p>Questions 25-26</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="two_choices" data-q="3" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">25</span>
                                        <span class="q-number">26</span>
                                        Which <b>TWO</b> recommendations for getting out of a cycle of procrastination does the writer give?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-3[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">not judging ourselves harshly</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-3[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">setting ourselves manageable aims</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-3[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">rewarding ourselves for tasks achieved</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-3[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">prioritising tasks according to their importance</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-EKX6hyJgeV3x0pxB-3[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">avoiding things that stop us concentrating on our tasks</span>
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
                            <div class="passage-body">
                                <h3 class="passage-title">Invasion of the Robot Umpires</h3>
                                <p>A few years ago, Fred DeJesus from Brooklyn, New York became the first umpire in a minor league baseball game to use something called the Automated Ball-Strike System (ABS), often referred to as the ‘rob-umpire’. Instead of making any judgments himself about a strike*, DeJesus had decisions fed to him through an earpiece, connected to a modified missile-tracking system. The contraption looked like a large black pizza box with one glowing green eye, it was mounted above the press stand.</p>
                                <p>Major League Baseball (MLB), who had commissioned the system, wanted human umpires to announce the calls, just as they would have done in the past. When the first pitch came in, a recorded voice told DeJesus it was a strike. Previously, calling a strike was a judgment call on the part of the umpire. Even if the batter does not hit the ball, a pitch that passes through the ‘strike zone’ (an imaginary zone about seventeen inches wide, stretching from the batter’s knees to the middle of his chest) is considered a strike. During that first game, when DeJesus announced calls, there was no heckling and no shouted disagreement. Nobody said a word.</p>
                                <p>For a hundred and fifty years or so, the strike zone has been the game’s animating force – countless arguments between a team’s manager and the umpire have taken place over its boundaries and whether a ball had crossed through it. The rules of play have evolved in various stages. Today, everyone knows that you may scream your disagreement in an umpire’s face, but you must never shout personal abuse at them or touch them. That’s a no-no. When the robe-umpires came, however, the arguments stopped.</p>
                                <p>During the first robe-umpire season, players complained about some strange calls. In response, MLB decided to tweak the dimensions of the zone, and the following year the consensus was that ABS is profoundly consistent. MLB says the device is near-perfect, precise to within fractions of an inch. “It’ll reduce controversy in the game, and be good for the game,” says Rob Manfred, who is Commissioner for MLB. But the question is whether controversy is worth reducing, or whether it is the sign of a human hand.</p>
                                <p>A human, at least, yells back. When I spoke with Frank Viola, a coach for a North Carolina team, he said that ABS works as designed, but that it was also unforgiving and pedantic, almost legalistic. “Manfred is a lawyer,” Viola noted. Some pitchers have complained that, compared with a humans, the robot’s strike zone seems too precise. Viola was once a major-league player himself. When he was pitching, he explained, umpires rewarded skill. “Throw it where you aimed, and it would be a strike, even if it was an inch or two outside. There was a dialogue between pitcher and umpire.”</p>
                                <p>The executive tasked with running the experiment for MLB is Morgan Sword, who’s in charge of baseball operations. According to Sword, ABS was part of a larger project to make baseball more exciting since executives are terrified of losing younger fans, as has been the case with horse racing and boxing. He explains how they began the process by asking fans what version of baseball they found most exciting. The results showed that everyone wanted more action: more hits, more defense, more baserunning. This type of baseball essentially hasn’t existed since the 1960s, when the hundred-mile-an-hour fastball, which is difficult to hit and control, entered the game. It flattened the game into strikeouts, walks, and home runs – a type of play lacking much action.</p>
                                <p>Sword’s team brainstormed potential fixes. Any rule that existed, they talked about changing – from changing the bats to changing the geometry of the field. But while all of these were ruled out as potential fixes, ABS was seen as a perfect vehicle for change. According to Sword, once you get the technology right, you can load any strike zone you want into the system. “It might be a triangle, or a blob, or something shaped like Texas. Over time, as baseball evolves, ABS can allow the zone to change with it.”</p>
                                <p>“In the past twenty years, sports have moved away from judgment calls. Soccer has Video Assistant Referees (for offside decisions, for example). Tennis has Hawk-Eye (for line calls, for example). For almost a decade, baseball has used instant replay on the base paths. This is widely liked, even if the precision can sometimes cause problems. But these applications deal with something physical: bases, lines, goals. The boundaries of action are precise, delineated like the keys of a piano. This is not the case with ABS and the strike zone. Historically, a certain discretion has been appreciated.”</p>
                                <p>I decided to email Alva Noe, a professor at Berkeley University and a baseball fan, for his opinion. “Hardly a day goes by that I don’t wake up and run through the reasons that this [robe-umpires] is such a terrible idea,” he replied. He later told me, “This is part of a movement to use algorithms to take the hard choices of living out of life.” Perhaps he’s right. We watch baseball to kill time, not to maximize it. Some players I have met take a dissenting stance toward the robots too, believing that accuracy is not the answer.</p>
                                <p>According to Joe Russo, who plays for a New Jersey team, “With technology, people just want everything to be perfect. That’s not reality. I think perfect would be weird. Your teams are always winning, work is always just great, there’s always money in your pocket, your car never breaks down. What is there to talk about?”</p>
                                <p>*strike: a strike is when the batter swings at a ball and misses or when the batter does not swing at a ball that passes through the strike zone.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- ynng --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 27-32</b></p>
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
                                <fieldset class="q-item" data-type="ynng" data-q="27">
                                    <legend class="q-text">
                                        <span class="q-number">27</span>
                                        When DeJesus first used ABS, he shared decision-making about strikes with it.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 27 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="28">
                                    <legend class="q-text">
                                        <span class="q-number">28</span>
                                        MLB considered it necessary to amend the size of the strike zone when criticisms were received from players.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 28 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="29">
                                    <legend class="q-text">
                                        <span class="q-number">29</span>
                                        MLB is keen to justify the money spent on improving the accuracy of ABS’s calculations.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 29 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="30">
                                    <legend class="q-text">
                                        <span class="q-number">30</span>
                                        The hundred-mile-an-hour fastball led to a more exciting style of play.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 30 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="31">
                                    <legend class="q-text">
                                        <span class="q-number">31</span>
                                        The differing proposals for alterations to the baseball bat led to fierce debate on Sword’s team.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 31 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-5" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-5" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-5" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="32">
                                    <legend class="q-text">
                                        <span class="q-number">32</span>
                                        ABS makes changes to the shape of the strike zone feasible.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 32 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-6" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-6" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-EKX6hyJgeV3x0pxB-6" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion2 --}}
                                <fieldset class="q-item">
                                    <h3>Questions 33-37</h3>
                                    <p class="lead">Complete the summary using the list of words and phrases, <b>A-H</b>, below.</p>
                                    <p><i>Write the correct letter, <b>A-H</b>, in boxes on your answer sheet.</i></p>
                                    <table cellpadding="10">
                                        <tr>
                                            <td><b>A</b> pitch boundary</td>
                                        </tr>
                                        <tr>
                                            <td><b>B</b> numerous disputes</td>
                                        </tr>
                                        <tr>
                                            <td><b>C</b> team tactics</td>
                                        </tr>
                                        <tr>
                                            <td><b>D</b> subjective assessment</td>
                                        </tr>
                                        <tr>
                                            <td><b>E</b> widespread approval</td>
                                        </tr>
                                        <tr>
                                            <td><b>F</b> former roles</td>
                                        </tr>
                                        <tr>
                                            <td><b>G</b> total silence</td>
                                        </tr>
                                        <tr>
                                            <td><b>H</b> perceived area</td>
                                        </tr>
                                    </table>

                                    <h3>Calls by the umpire</h3>

                                    <p>
                                        <div>
                                            Even after ABS was developed, MLB still wanted human umpires to shout out decisions as they had in their
                                            <span class="q-number-box">33</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-EKX6hyJgeV3x0pxB-7" data-type="summary_completion" data-q="33" class="q-dropdown">
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
                                            . The umpire’s job had, at one time, required a
                                            <span class="q-number-box">34</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-EKX6hyJgeV3x0pxB-8" data-type="summary_completion" data-q="34" class="q-dropdown">
                                                        <option value=""></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                    </select>,
                                                </span>
                                            </span>
                                            about whether a ball was a strike. A ball is considered a strike when the batter does not hit it and it crosses through a
                                            <span class="q-number-box">35</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-EKX6hyJgeV3x0pxB-9" data-type="summary_completion" data-q="35" class="q-dropdown">
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
                                            extending approximately from the batter’s knee to his chest.
                                        </div>
                                    </p>

                                    <p>
                                        <div>
                                            In the past,
                                            <span class="q-number-box">36</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-EKX6hyJgeV3x0pxB-10" data-type="summary_completion" data-q="36" class="q-dropdown">
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
                                            over strike calls were not uncommon, but today everyone accepts the complete ban on pushing or shoving the umpire. One difference, however, is that during the first game DeJesus used ABS, strike calls were met with
                                            <span class="q-number-box">37</span>
                                            <span style="flex: 1;">
                                                <span class="q-question">
                                                    <select name="summary_completion-EKX6hyJgeV3x0pxB-11" data-type="summary_completion" data-q="37" class="q-dropdown">
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
                                        </div>
                                    </p>
                                </fieldset>

                                {{-- oc --}}
                                <fieldset class="q-item">
                                    <p><b>Questions 38-40</b></p>
                                    <p class="lead">Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or
                                        <b>D</b>.
                                    </p>
                                </fieldset>
                                <fieldset class="q-item" data-type="oc" data-q="38">
                                    <legend class="q-text">
                                        <span class="q-number">38</span>
                                        What does the writer suggest about ABS in the fifth paragraph?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 38 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It is bound to make key decisions that are wrong.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It may reduce some of the appeal of the game.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It will lead to the disappearance of human umpires.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-1" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">lt may increase calls for the rules of baseball to be changed.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="39">
                                    <legend class="q-text">
                                        <span class="q-number">39</span>
                                        Morgan Sword says that the introduction of ABS
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 39 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">was regarded as an experiment without a guaranteed outcome.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">was intended to keep up with developments in other sports.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">was a response to changing attitudes about the role of sport.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-2" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">was an attempt to ensure baseball retained a young audience</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="oc" data-q="40">
                                    <legend class="q-text">
                                        <span class="q-number">40</span>
                                        Why does the writer include the views of Not and Russo?
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 40 options">
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">to show that attitudes to technology vary widely</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">to argue that people have unrealistic expectations of sport</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">to indicate that accuracy is not the same thing as enjoyment</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="oc-EKX6hyJgeV3x0pxB-3" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">to suggest that the number of baseball fans needs to increase</span>
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
