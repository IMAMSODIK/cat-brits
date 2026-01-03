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
                            <h3 class="passage-title">THE IMPORTANCE OF CHILDREN’S PLAY</h3>
                            <div class="passage-body">
                                <p>Brick by brick, six-year-old Alice is building a magical kingdom. Imagining fairy-tale turrets and fire-breathing dragons, wicked witches and gallant heroes, she’s creating an enchanting world. Although she isn’t aware of it, this fantasy is helping her take her first steps towards her capacity for creativity and so it will have important repercussions in her adult life.</p>
                                <p>Minutes later, Alice has abandoned the kingdom in favour of playing schools with her younger brother. When she bosses him around as his ‘teacher’, she’s practising how to regulate her emotions through pretence. Later on, when they tire of this and settle down with a board game, she’s learning about the need to follow rules and take turns with a partner.</p>
                                <p>‘Play in all its rich variety is one of the highest achievements of the human species,’ says Dr David Whitebread from the Faculty of Education at the University of Cambridge, UK. ‘It underpins how we develop as intellectual, problem-solving adults and is crucial to our success as a highly adaptable species.’</p>
                                <p>Recognizing the importance of play is not new: over two millennia ago, the Greek philosopher Plato extolled its virtues as a means of developing skills for adult life, and ideas about play-based learning have been developing since the 19th century.</p>
                                <p>But we live in changing times, and Whitebread is mindful of a worldwide decline in play, pointing out that over half the people in the world now live in cities. ‘The opportunities for free play, which I experienced almost every day of my childhood, are becoming increasingly scarce,’ he says. Outdoor play is curtailed by perceptions of risk to do with traffic, as well as parents’ increased wish to protect their children from being the victims of crime, and by the emphasis on ‘earlier is better’ which is leading to greater competition in academic learning and schools.</p>
                                <p>International bodies like the United Nations and the European Union have begun to develop policies concerned with children’s right to play, and to consider implications for leisure facilities and educational programmes. But what they often lack is the evidence to base policies on.</p>
                                <p>‘The type of play we are interested in is child-initiated, spontaneous and unpredictable – but, as soon as you ask a five-year-old “to play”, then you as the researcher have intervened,’ explains Dr Sara Baker. ‘And we want to know what the long-term impact of play is. It’s a real challenge.’</p>
                                <p>Dr Jenny Gibson agrees, pointing out that although some of the steps in the puzzle of how and why play is important have been looked at, there is very little data on the impact it has on the child’s later life.</p>
                                <p>Now, thanks to the university’s new Centre for Research on Play in Education, Development and Learning (PEDAL), Whitebread, Baker, Gibson and a team of researchers hope to provide evidence on the role played by play in how a child develops.</p>
                                <p>‘A strong possibility is that play supports the early development of children’s self-control,’ explains Baker. ‘This is our ability to develop awareness of our own thinking progresses – it influences how effectively we go about undertaking challenging activities.’</p>
                                <p>In a study carried out by Baker with toddlers and young pre-schoolers, she found that children with greater self-control solved problems more quickly when exploring an unfamiliar set-up requiring scientific reasoning. ‘This sort of evidence makes up think that giving children the chance to play will make them more successful problem-solvers in the long run.’</p>
                                <p>If playful experiences do facilitate this aspect of development, say the researchers, it could be extremely significant for educational practices, because the ability to self-regulate has been shown to be a key predictor of academic performance.</p>
                                <p>Gibson adds: ‘Playful behavior is also an important indicator of healthy social and emotional development. In my previous research, I investigated how observing children at play can give us important clues about their well-being and can even be useful in the diagnosis of neurodevelopmental disorders like autism.’</p>
                                <p>Whitebread’s recent research has involved developing a play-based approach to supporting children’s writing. ‘Many primary school children find writing difficult, but we showed in a previous study that a playful stimulus was far more effective than an instructional one.’ Children wrote longer and better-structured stories when they first played with dolls representing characters in the story. In the latest study, children first created their story with Lego*, with similar results. ‘Many teachers commented that they had always previously had children saying they didn’t know what to write about. With the Lego building, however, not a single child said this through the whole year of the project.’</p>
                                <p>Whitebread, who directs PEDAL, trained as a primary school teacher in the early 1970s, when, as he describes, ‘the teaching of young children was largely a quiet backwater, untroubled by any serious intellectual debate or controversy.’ Now, the landscape is very different, with hotly debated topics such as school starting age.</p>
                                <p>‘Somehow the importance of play has been lost in recent decades. It’s regarded as something trivial, or even as something negative that contrasts with “work”. Let’s not lose sight of its benefits, and the fundamental contributions it makes to human achievements in the arts, sciences and technology. Let’s make sure children have a rich diet of play experiences.’</p>
                                <hr>
                                <p>* Lego: coloured plastic building blocks and other pieces that can be joined together</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">

                                {{-- nc --}}
                                <fieldset class="q-item">
                                    <h3>Questions 1-8</h3>
                                    <p class="lead">Complete the notes below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3>Children’s play</h3>

                                    <p><b>Uses of children’s play</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="1">
                                                building a ‘magical kingdom’ may help develop
                                                <span class="q-number-box">1</span>
                                                <input type="text" name="nc-1kxpl5g3zFLGtmEY-1" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="2">
                                                board games involve
                                                <span class="q-number-box">2</span>
                                                <input type="text" name="nc-1kxpl5g3zFLGtmEY-2" class="q-text" placeholder="">
                                                and turn-taking
                                            </div>
                                        </li>
                                    </ul>

                                    <p><b>Recent changes affecting children’s play</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="3">
                                                population of
                                                <span class="q-number-box">3</span>
                                                <input type="text" name="nc-1kxpl5g3zFLGtmEY-3" class="q-text" placeholder="">
                                                have grown
                                            </div>
                                        </li>
                                        <li>opportunities for free play are limited due to</li>
                                        <ul>
                                            <li>
                                                <div class="q-list" data-type="nc" data-q="4">
                                                    fear of
                                                    <span class="q-number-box">4</span>
                                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-4" class="q-text" placeholder="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-list" data-type="nc" data-q="5">
                                                    fear of
                                                    <span class="q-number-box">5</span>
                                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-5" class="q-text" placeholder="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="q-list" data-type="nc" data-q="6">
                                                    increased 
                                                    <span class="q-number-box">6</span>
                                                    <input type="text" name="nc-1kxpl5g3zFLGtmEY-6" class="q-text" placeholder="">
                                                    in schools
                                                </div>
                                            </li>
                                        </ul>
                                    </ul>

                                    <p><b>International policies on children’s play</b></p>
                                    <ul>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="7">
                                                it is difficult to find
                                                <span class="q-number-box">7</span>
                                                <input type="text" name="nc-1kxpl5g3zFLGtmEY-7" class="q-text" placeholder="">
                                                to support new policies
                                            </div>
                                        </li>
                                        <li>
                                            <div class="q-list" data-type="nc" data-q="8">
                                                research needs to study the impact of play on the rest of the child’s
                                                <span class="q-number-box">8</span>
                                                <input type="text" name="nc-1kxpl5g3zFLGtmEY-8" class="q-text" placeholder="">
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>

                                {{-- tfng --}}
                                <fieldset class="q-item">
                                    <h3>Questions 9-13</h3>
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
                                <fieldset class="q-item" data-type="tfng" data-q="9">
                                    <legend class="q-text">
                                        <span class="q-number">9</span>
                                        Children with good self-control are known to be likely to do well at school later on.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-1" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-1" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="10">
                                    <legend class="q-text">
                                        <span class="q-number">10</span>
                                        The way a child plays may provide information about possible medical problems.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 2 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-2" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-2" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="11">
                                    <legend class="q-text">
                                        <span class="q-number">11</span>
                                        Playing with dolls was found to benefit girls’ writing more than boys’ writing.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 3 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-3" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-3" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="12">
                                    <legend class="q-text">
                                        <span class="q-number">12</span>
                                        Children had problems thinking up ideas when they first created the story with Lego.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 4 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-4" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-4" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="tfng" data-q="13">
                                    <legend class="q-text">
                                        <span class="q-number">13</span>
                                        People nowadays regard children’s play as less significant than they did in the past.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 5 options">
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-5" value="TRUE" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">TRUE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-5" value="FALSE" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">FALSE</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="tfng-1kxpl5g3zFLGtmEY-5" value="NOT GIVEN" />
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
                            <h3 class="passage-title">The growth of bike-sharing schemes around the world</h3>
                            <div class="passage-body">
                                <p><i>How Dutch engineer Luud Schimmelpennink helped to devise urban bike-sharing schemes</i></p>
                                <h3>A</h3>
                                <p>The original idea for an urban bike-sharing scheme dates back to a summer’s day in Amsterdam in 1965. Provo, the organization that came up with the idea, was a group of Dutch activists who wanted to change society. They believed the scheme, which was known as the Witte Fietsenplan, was an answer to the perceived threats of air pollution and consumerism. In the centre of Amsterdam, they painted a small number of used bikes white. They also distributed leaflets describing the dangers of cars and inviting people to use the white bikes. The bikes were then left unlocked at various locations around the city, to be used by anyone in need of transport.</p>
                                <h3>B</h3>
                                <p>Luud Schimmelpennink, a Dutch industrial engineer who still lives and cycles in Amsterdam, was heavily involved in the original scheme. He recalls how the scheme succeeded in attracting a great deal of attention – particularly when it came to publicising Provo’s aims – but struggled to get off the ground. The police were opposed to Provo’s initiatives and almost as soon as the white bikes were distributed around the city, they removed them. However, for Schimmelpennink and for bike-sharing schemes in general, this was just the beginning. ‘The first Witte Fietsenplan was just a symbolic thing,’ he says. ‘We painted a few bikes white, that was all. Things got more serious when I became a member of the Amsterdam city council two years later.’</p>
                                <h3>C</h3>
                                <p>Schimmelpennink seized this opportunity to present a more elaborate Witte Fietsenplan to the city council. ‘My idea was that the municipality of Amsterdam would distribute 10,000 white bikes over the city, for everyone to use,’ he explains. ‘I made serious calculations. It turned out that a white bicycle – per person, per kilometer – would cost the municipality only 10% of what it contributed to public transport per person per kilometer.’ Nevertheless, the council unanimously rejected the plan. ‘They said that the bicycle belongs to the past. They saw a glorious future for the car,’ says Schimmelpennink. But he was not in the least discouraged.</p>
                                <h3>D</h3>
                                <p>Schimmelpennink never stopped believing in bike-sharing, and in the mid-90s, two Danes asked for his help to set up a system in Copenhagen. The result was the world’s first large-scale bike-share programme. It worked on a deposit: ‘You dropped a coin in the bike and when you returned it, you got your money back.’ After setting up the Danish system, Schimmelpennink decided to try his luck again in the Netherlands – and this time he succeeded in arousing the interest of the Dutch Ministry of Transport. ‘Times had changed,’ he recalls. ‘People had become more environmentally conscious, and the Danish experiment had proved that bike-sharing was a real possibility.’ A new Witte Fietsenplan was launched in 1999 in Amsterdam. However, riding a white bike was no longer free; it cost one guilder per trip and payment was made with a chip card developed by the Dutch bank Postbank. Schimmelpennink designed conspicuous, sturdy white bikes locked in special racks which could be opened with the chip card – the plan started with 250 bikes, distributed over five stations.</p>
                                <h3>E</h3>
                                <p>Theo Molenaar, who was a system designer for the project, worked alongside Schimmelpennink. ‘I remember when we were testing the bike racks, he announced that he had already designed better ones. But of course, we had to go through with the ones we had.’ The system, however, was prone to vandalism and theft. ‘After every weekend there would always be a couple of bikes missing,’ Molenaar says. ‘I really have no idea what people did with them, because they could instantly be recognised as white bikes.’ But the biggest blow came when Postbank decided to abolish the chip card, because it wasn’t profitable. ‘That chip card was pivotal to the system,’ Molenaar says. ‘To continue the project we would have needed to set up another system, but the business partner had lost interest.’</p>
                                <h3>F</h3>
                                <p>Schimmelpennink was disappointed, but – characteristically – not for long. In 2002 he got a call from the French advertising corporation JC Decaux, who wanted to set up his bike-sharing scheme in Vienna. ‘That went really well. After Vienna, they set up a system in Lyon. Then in 2007, Paris followed. That was a decisive moment in the history of bike-sharing.’ The huge and unexpected success of the Parisian bike-sharing programme, which now boasts more than 20,000 bicycles, inspired cities all over the world to set up their own schemes, all modelled on Schimmelpennink’s. ‘It’s wonderful that this happened,’ he says. ‘But financially I didn’t really benefit from it, because I never filed for a patent.’</p>
                                <h3>G</h3>
                                <p>In Amsterdam today, 38% of all trips are made by bike and, along with Copenhagen, it is regarded as one of the two most cycle-friendly capitals in the world – but the city never got another Witte Fietsenplan. Molenaar believes this may be because everybody in Amsterdam already has a bike. Schimmelpennink, however, cannot see that this changes Amsterdam’s need for a bike-sharing scheme. ‘People who travel on the underground don’t carry their bikes around. But often they need additional transport to reach their final destination.’ Although he thinks it is strange that a city like Amsterdam does not have a successful bike-sharing scheme, he is optimistic about the future. ‘In the ‘60s we didn’t stand a chance because people were prepared to give their lives to keep cars in the city. But that mentality has totally changed. Today everybody longs for cities that are not dominated by cars.’</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- matching_information --}}
                                <fieldset class="q-item">
                                    <p class="lead"><b>Questions 14-18</b></p>
                                    <p class="lead">The Reading Passage has seven paragraphs,  <b>A-G</b>.</p>
                                    <p>Which paragraph contains the following information?</p>
                                    <p class="lead">Write the correct letter, <b>A-G</b>, in boxes on your answer sheet <br> <b>NB</b> You may use any letter more than once.</p>
                                    <p><b>NB</b>  You may use any letter more than once.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_information" data-q="14">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">14</span>
                                        <span style="flex: 1;">
                                            a description of how people misused a bike-sharing scheme
                                            <span class="q-question">
                                                <select name="matching_information-1kxpl5g3zFLGtmEY-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="15">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">15</span>
                                        <span style="flex: 1;">
                                            an explanation of why a proposed bike-sharing scheme was turned down
                                            <span class="q-question">
                                                <select name="matching_information-1kxpl5g3zFLGtmEY-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="16">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">16</span>
                                        <span style="flex: 1;">
                                            a reference to a person being unable to profit their work
                                            <span class="q-question">
                                                <select name="matching_information-1kxpl5g3zFLGtmEY-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="17">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">17</span>
                                        <span style="flex: 1;">
                                            an explanation of the potential savings a bike-sharing scheme would bring
                                            <span class="q-question">
                                                <select name="matching_information-1kxpl5g3zFLGtmEY-4" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_information" data-q="18">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">18</span>
                                        <span style="flex: 1;">
                                            a reference to the problems a bike-sharing scheme was intended to solve
                                            <span class="q-question">
                                                <select name="matching_information-1kxpl5g3zFLGtmEY-5" class="q-dropdown">
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

                                {{-- two_choices --}}
                                <fieldset class="q-item">
                                    <p>Questions 19-20</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-type="two_choices" data-q="1" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">19</span>
                                        <span class="q-number">20</span>
                                        Which <b>TWO</b> of the following statements are made in the text about the Amsterdam bike-sharing scheme of 1999?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">It was initially opposed by a government department.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">It failed when a partner in the scheme withdrew support.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">It aimed to be more successful than the Copenhagen scheme.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">It was made possible by a change in people’s attitudes.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-1[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">It attracted interest from a range of bike designers.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item">
                                    <p>Questions 21-22</p>
                                    <p>Choose <b>TWO</b> letters <b>A-E</b>.</p>
                                    <p>Write the correct letters in boxes on your answer sheet.</p>
                                </fieldset>

                                <fieldset class="q-item" data-q="1" data-type="two_choices" data-q-multi="1,2" data-max="2">
                                    <legend class="q-text">
                                        <span class="q-number">1</span>
                                        <span class="q-number">2</span>
                                        Which <b>TWO</b> of the following statements are made in the text about Amsterdam today?
                                    </legend>
                                    <div class="q-options" role="group" aria-label="Question 1 options">
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="A" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">The majority of residents would like to prevent all cars from entering the city.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="B" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">There is little likelihood of the city having another bike-sharing scheme.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="C" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">More trips in the city are made by bike than by any other form of transport.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="D" />
                                            <span class="opt-code">D</span>
                                            <span class="opt-label">A bike-sharing scheme would benefit residents who use public transport.</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="checkbox" name="two_choices-1kxpl5g3zFLGtmEY-3[]" value="E" />
                                            <span class="opt-code">E</span>
                                            <span class="opt-label">The city has a reputation as a place that welcomes cyclists.</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 23-26</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3>The first urban bike-sharing scheme</h3>
                                    <p>
                                        The first bike-sharing scheme was the idea of the Dutch group Provo. The people who belonged to this group were
                                        <span class="q-number-box">23</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-1" data-q="1" data-type="summary_completion" class="q-text" placeholder="">
                                        . They were concerned about damage to the environment and about
                                        <span class="q-number-box">24</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-2" data-q="2" data-type="summary_completion" class="q-text" placeholder="">
                                        , and believed that the bike-sharing scheme would draw attention to these issues. As well as painting some bikes white, they handed out
                                        <span class="q-number-box">25</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-3" data-q="3" data-type="summary_completion" class="q-text" placeholder="">
                                        that condemned the use of cars.
                                    </p>
                                    <p>
                                        However, the scheme was not a great success: almost as quickly as Provo left the bikes around the city, the
                                        <span class="q-number-box">26</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-4" data-q="4" data-type="summary_completion" class="q-text" placeholder="">
                                        Took them away. According to Schimmelpennink, the scheme was intended to be symbolic. The idea was to get people thinking about the issues.
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
                            <h3 class="passage-title">Motivational factors and the hospitality industry</h3>
                            <div class="passage-body">
                                <p>A critical ingredient in the success of hotels is developing and maintaining superior performance from their employees. How is that accomplished? What Human Resource Management (HRM) practices should organizations invest in to acquire and retain great employees?</p>
                                <p>Some hotels aim to provide superior working conditions for their employees. The idea originated from workplaces – usually in the non-service sector – that emphasized fun and enjoyment as part of work-life balance. By contrast, the service sector, and more specifically hotels, has traditionally not extended these practices to address basic employee needs, such as good working conditions.</p>
                                <p>Pfeffer (1994) emphasizes that in order to succeed in a global business environment, organizations must make investment in Human Resource Management (HRM) to allow them to acquire employees who possess better skills and capabilities than their competitors. This investment will be to their competitive advantage. Despite this recognition of the importance of employee development, the hospitality industry has historically been dominated by underdeveloped HR practices (Lucas, 2002).</p>
                                <p>Lucas also points out that ‘the substance of HRM practices does not appear to be designed to foster constructive relations with employees or to represent a managerial approach that enables developing and drawing out the full potential of people, even though employees may be broadly satisfied with many aspects of their work’ (Lucas, 2002). In addition, or maybe as a result, high employee turnover has been a recurring problem throughout the hospitality industry. Among the many cited reasons are low compensation, inadequate benefits, poor working conditions and compromised employee morale and attitudes (Maroudas et al., 2008).</p>
                                <p>Ng and Sorensen (2008) demonstrated that when managers provide recognition to employees, motivate employees to work together, and remove obstacles preventing effective performance, employees feel more obligated to stay with the company. This was succinctly summarized by Michel et al. (2013): ‘[P]roviding support to employees gives them the confidence to perform their jobs better and the motivation to stay with the organization.’ Hospitality organizations can therefore enhance employee motivation and retention through the development and improvement of their working conditions. These conditions are inherently linked to the working environment.</p>
                                <p>While it seems likely that employees’ reactions to their job characteristics could be affected by a predisposition to view their work environment negatively, no evidence exists to support this hypothesis (Spector et al., 2000). However, given the opportunity, many people will find something to complain about in relation to their workplace (Poulston, 2009). There is a strong link between the perceptions of employees and particular factors of their work environment that are separate from the work itself, including company policies, salary and vacations.</p>
                                <p>Such conditions are particularly troubling for the luxury hotel market, where high-quality service, requiring a sophisticated approach to HRM, is recognized as a critical source of competitive advantage (Maroudas et al., 2008). In a real sense, the services of hotel employees represent their industry (Schneider and Bowen, 1993). This representation has commonly been limited to guest experiences. This suggests that there has been a dichotomy between the guest environment provided in luxury hotels and the working conditions of their employees.</p>
                                <p>It is therefore essential for hotel management to develop HRM practices that enable them to inspire and retain competent employees. This requires an understanding of what motivates employees at different levels of management and different stages of their careers (Enz and Siguaw, 2000). This implies that it is beneficial for hotel managers to understand what practices are most favorable to increase employee satisfaction and retention.</p>
                                <p>Herzberg (1966) proposes that people have two major types of needs, the first being extrinsic motivation factors relating to the context in which work is performed, rather than the work itself. These include working conditions and job security. When these factors are unfavorable, job dissatisfaction may result. Significantly, though, just fulfilling these needs does not result in satisfaction, but only in the reduction of dissatisfaction (Maroudas et al., 2008).</p>
                                <p>Employees also have intrinsic motivation needs or motivators, which include such factors as achievement and recognition. Unlike extrinsic factors, motivator factors may ideally result in job satisfaction (Maroudas et al., 2008). Herzberg’s (1966) theory discusses the need for a ‘balance’ of these two types of needs.</p>
                                <p>The impact of fun as a motivating factor at work has also been explored. For example, Tews, Michel and Stafford (2013) conducted a study focusing on staff from a chain of themed restaurants in the United States. It was found that fun activities had a favorable impact on performance and manager support for fun had a favorable impact in reducing turnover. Their findings support the view that fun may indeed have a beneficial effect, but the framing of that fun must be carefully aligned with both organizational goals and employee characteristics. ‘Managers must learn how to achieve the delicate balance of allowing employees the freedom to enjoy themselves at work while simultaneously high levels of performance’ (Tews et al., 2013).</p>
                                <p>Deery (2008) has recommended several actions that can be adopted at the organizational level to retain good staff as well as assist in balancing work and family life. Those particularly appropriate to the hospitality industry include allowing adequate breaks during the working day, staff functions that involve families, and providing health and well-being opportunities.</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside class="qa" aria-label="Questions">
                            <form class="qa-body">
                                {{-- matching_features --}}
                                <fieldset class="q-item">
                                    <h3>Questions 27-31</h3>
                                    <p class="lead">Look at the following statements and the list of researchers below.</p>
                                    <p>Match each statement with the correct researcher, <b>A-F</b>.</p>
                                    <p><i>WWrite the correct letter, <b>A-F</b>, in boxes on your answer sheet.</i></p>
                                    <p><b>NB</b>  You may use any letter more than once.</p>
                                    <b>List of Researchers</b> <br>
                                    <strong>A</strong>&nbsp;&nbsp; Pfeffer<br>
                                    <strong>B</strong>&nbsp;&nbsp; Lucas<br>
                                    <strong>C</strong>&nbsp;&nbsp; Maroudas et al.<br>
                                    <strong>D</strong>&nbsp;&nbsp; Ng and Sorensen<br>
                                    <strong>E</strong>&nbsp;&nbsp; Enz and Siguaw<br>
                                    <strong>F</strong>&nbsp;&nbsp; Deery
                                </fieldset>

                                <fieldset class="q-item" data-type="matching_features" data-q="27">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">27</span>
                                        <span style="flex: 1;">
                                            Hotel managers need to know what would encourage good staff to remain.
                                            <span class="q-question">
                                                <select name="matching_features-1kxpl5g3zFLGtmEY-1" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="28">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">28</span>
                                        <span style="flex: 1;">
                                            The actions of managers may make staff feel they shouldn’t move to a different employer.
                                            <span class="q-question">
                                                <select name="matching_features-1kxpl5g3zFLGtmEY-2" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="29">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">29</span>
                                        <span style="flex: 1;">
                                            Little is done in the hospitality industry to help workers improve their skills.
                                            <span class="q-question">
                                                <select name="matching_features-1kxpl5g3zFLGtmEY-3" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="30">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">30</span>
                                        <span style="flex: 1;">
                                            Staff are less likely to change jobs if cooperation is encouraged.
                                            <span class="q-question">
                                                <select name="matching_features-1kxpl5g3zFLGtmEY-4" class="q-dropdown">
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

                                <fieldset class="q-item" data-type="matching_features" data-q="31">
                                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                                        <span class="q-number">31</span>
                                        <span style="flex: 1;">
                                            Dissatisfaction with pay is not the only reason why hospitality workers change jobs.
                                            <span class="q-question">
                                                <select name="matching_features-1kxpl5g3zFLGtmEY-5" class="q-dropdown">
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
                                    <h3>Question 32-35</h3>
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
                                        One reason for high staff turnover in the hospitality industry is poor morale.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 32 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-1" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-1" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-1" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="33">
                                    <legend class="q-text">
                                        <span class="q-number">33</span>
                                        Research has shown that staff have a tendency to dislike their workplace.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 33 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-2" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-2" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-2" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="34">
                                    <legend class="q-text">
                                        <span class="q-number">34</span>
                                        An improvement in working conditions and job security makes staff satisfied with their jobs.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 34 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-3" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-3" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-3" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                <fieldset class="q-item" data-type="ynng" data-q="35">
                                    <legend class="q-text">
                                        <span class="q-number">35</span>
                                        Staff should be allowed to choose when they take breaks during the working day.
                                    </legend>
                                    <div class="q-options" role="radiogroup" aria-label="Question 35 options">
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-4" value="YES" />
                                            <span class="opt-code">A</span>
                                            <span class="opt-label">YES</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-4" value="NO" />
                                            <span class="opt-code">B</span>
                                            <span class="opt-label">NO</span>
                                        </label>
                                        <label class="q-option">
                                            <input type="radio" name="ynng-1kxpl5g3zFLGtmEY-4" value="NOT GIVEN" />
                                            <span class="opt-code">C</span>
                                            <span class="opt-label">NOT GIVEN</span>
                                        </label>
                                    </div>
                                </fieldset>

                                {{-- summary_completion --}}
                                <fieldset class="q-item">
                                    <h3>Questions 36-40</h3>
                                    <p class="lead">Complete the summary below.</p>
                                    <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</p>
                                    <p><i>Write your answers in boxes on your answer sheet.</i></p>
                                </fieldset>

                                <fieldset class="q-item">
                                    <h3>Fun at work</h3>
                                    <p>
                                        Tews, Michel and Stafford carried out research on staff in an American chain of
                                        <span class="q-number-box">36</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-5" data-q="5" data-type="summary_completion" class="q-text" placeholder="">
                                        . They discovered that activities designed for staff to have fun improved their
                                        <span class="q-number-box">37</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-6" data-q="6" data-type="summary_completion" class="q-text" placeholder="">
                                        , and that management involvement led to lower staff
                                        <span class="q-number-box">38</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-7" data-q="7" data-type="summary_completion" class="q-text" placeholder="">
                                        . They also found that the activities needed to fit with both the company’s
                                        <span class="q-number-box">39</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-8" data-q="8" data-type="summary_completion" class="q-text" placeholder="">
                                        and the
                                        <span class="q-number-box">40</span>
                                        <input type="text" name="summary_completion-1kxpl5g3zFLGtmEY-9" data-q="9" data-type="summary_completion" class="q-text" placeholder="">
                                        Of the staff. A balance was required between a degree of freedom and maintaining work standards.
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
