@props(['tab'])
<div class="x-panel-inner">Content: {{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">The Industrial Revolution in Britain</h3>
            <div class="passage-body">
                <p>
                    The foundations of the Industrial Revolution date back to the early 1700s, when the English inventor
                    Thomas Newcomen designed the first modern steam engine. Called the ‘atmospheric steam engine’,
                    Newcomen’s invention was originally used to power machines that pumped water out of mines. In the
                    1760s, the Scottish engineer James Watt adapted one of Newcomen’s models, making it far more
                    efficient. Watt later worked with the English manufacturer Matthew Boulton to invent a new steam
                    engine driven by both the forward and backward strokes of the piston, while the gear mechanism it
                    was connected to produced rotary motion. This innovation allowed steam power to spread across
                    British industries.
                </p>

                <p>
                    The demand for coal, a relatively cheap energy source, grew rapidly during the Industrial
                    Revolution. Coal was needed not only to run factories producing manufactured goods but also to power
                    steam transportation. In the early 1800s, the English engineer Richard Trevithick built a
                    steam-powered locomotive, and by 1830 goods and passengers were transported between Manchester and
                    Liverpool. Steam-powered boats and ships were also widely used to carry goods along Britain’s canals
                    and across the Atlantic.
                </p>

                <p>
                    Britain had been producing textiles like wool, linen, and cotton for hundreds of years, but before
                    the Industrial Revolution, the textile industry was a cottage industry, with work done in small
                    workshops or homes by individual spinners, weavers, and dyers. Starting in the mid-1700s,
                    innovations like the spinning jenny and the power loom made weaving cloth and spinning yarn much
                    easier. Mechanised textile factories quickly met customer demand for cloth both domestically and
                    abroad.
                </p>

                <p>
                    The British iron industry also underwent major changes through new innovations. Chief among these
                    was smelting iron ore with coke (made by heating coal) instead of traditional charcoal. This method
                    was cheaper and produced higher-quality metals, enabling Britain’s iron and steel production to
                    expand, especially in response to demand from the Napoleonic Wars (1803-15) and the expansion of
                    railways from the 1830s.
                </p>

                <p>
                    Advances in communication were also key in the latter part of the Industrial Revolution, as
                    efficient long-distance communication became essential. In 1837, British inventors William Cooke and
                    Charles Wheatstone patented the first commercial telegraphy system. Around the same time, Samuel
                    Morse and others developed their own versions in the United States. Cooke and Wheatstone’s system
                    was used for railway signalling in the UK, which became crucial as locomotives grew faster.
                </p>

                <p>
                    The Industrial Revolution had a profound impact on people’s lives. Although urban migration had
                    begun before industrialisation, it accelerated as large factories turned small towns into major
                    cities in just a few decades. Rapid urbanisation created challenges, as overcrowded cities suffered
                    from pollution and inadequate sanitation.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id']}}">
                <fieldset class="q-item" data-q="1">
                    <h3>Questions 1-7</h3>
                    <p class="lead">
                        Complete the notes below.
                    </p>
                    <p>Choose ONE WORD ONLY from the passage for each answer.</p>
                    <p>Write your answers in boxes on your answer sheet.</p>
                    <p>Britain’s Industrial Revolution</p>

                    <div>
                        <ul class="completion-list">
                            <li>
                                In Watt and Boulton’s steam engine, the movement of the
                                <span class="q-number">1</span>
                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="0XIGAcSMlticROES-1" class="q-text" placeholder="" />
                                    </span>
                                </span>
                                was linked to a gear system.
                            </li>

                            <li>
                                A greater supply of
                                <span class="q-number">2</span>
                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="0XIGAcSMlticROES-2" class="q-text" placeholder="" />
                                    </span>
                                </span>
                                was required to power steam engines.
                            </li>

                            <li>
                                Before the Industrial Revolution, spinners and weavers worked at home and in
                                <span class="q-number">3</span>
                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="0XIGAcSMlticROES-3" class="q-text" placeholder="" />
                                    </span>
                                </span>.
                            </li>

                            <li>
                                Not as much
                                <span class="q-number">4</span>
                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="0XIGAcSMlticROES-4" class="q-text" placeholder="" />
                                    </span>
                                </span>
                                was needed to produce cloth once the spinning jenny and power loom were invented.
                            </li>

                            <li>
                                Smelting of iron ore with coke resulted in material that was better
                                <span class="q-number">5</span>
                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="0XIGAcSMlticROES-5" class="q-text" placeholder="" />
                                    </span>
                                </span>.
                            </li>

                            <li>
                                Demand for iron increased with the growth of the
                                <span class="q-number">6</span>
                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="0XIGAcSMlticROES-6" class="q-text" placeholder="" />
                                    </span>
                                </span>.
                            </li>

                            <li>
                                The new cities were dirty, crowded and lacked sufficient
                                <span class="q-number">7</span>
                                <span style="flex: 1;">
                                    <span class="q-question">
                                        <input type="text" name="0XIGAcSMlticROES-7" class="q-text" placeholder="" />
                                    </span>
                                </span>.
                            </li>
                        </ul>
                    </div>
                </fieldset>


                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id']}}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display: none">Try
                        Again</button>
                </div>
            </form>

        </aside>
    </div>
</div>