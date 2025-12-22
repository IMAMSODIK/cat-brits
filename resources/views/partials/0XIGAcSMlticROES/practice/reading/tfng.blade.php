@props(['tab'])
<div class="x-panel-inner">Content: True/False/Not Given</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">The Industrial Revolution in Britain</h3>
            <div class="passage-body">
                <p>
                    The foundations of the Industrial Revolution date back to the early 1700s, when the English inventor
                    Thomas Newcomen designed the first modern steam engine. Called the ‘atmospheric steam engine’,
                    Newcomen’s invention was originally used to power machines that pumped water out of mines.
                </p>

                <p>
                    In the 1760s, the Scottish engineer James Watt adapted one of Newcomen’s models, making it far more
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
                    Liverpool.
                </p>

                <p>
                    Britain had been producing textiles like wool, linen, and cotton for hundreds of years, but before
                    the Industrial Revolution, the textile industry was a cottage industry, with work done in small
                    workshops or homes by individual spinners, weavers, and dyers. Starting in the mid-1700s,
                    innovations like the spinning jenny and the power loom made weaving cloth and spinning yarn much
                    easier, so that mechanised textile factories could meet domestic and international demand.
                </p>

                <p>
                    The British iron industry also underwent major changes through new innovations. Chief among these
                    was smelting iron ore with coke (made by heating coal) instead of traditional charcoal. This method
                    was cheaper and produced higher-quality metals, enabling Britain’s iron and steel production to
                    expand. Demand increased particularly due to the Napoleonic Wars and the expansion of railways from
                    the 1830s.
                </p>

                <p>
                    Advances in communication were also key in the latter part of the Industrial Revolution, as
                    efficient long-distance communication became essential. In 1837, British inventors William Cooke and
                    Charles Wheatstone patented the first commercial telegraphy system. The system was soon used for
                    railway signalling to prevent locomotives colliding.
                </p>

                <p>
                    The Industrial Revolution had a profound impact on people’s lives. Urban migration accelerated as
                    large factories turned small towns into major cities in just a few decades. These new cities were
                    overcrowded, dirty, and lacked adequate sanitation.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id']}}">
                <fieldset class="q-item">
                    <h3>Questions 1-6</h3>
                    <p class="lead">
                        Do the following statements agree with the information given in the
                        Reading Passage?
                    </p>
                    <p>In boxes on your answer sheet, write</p>
                    <ul class="legend">
                        <li><strong>TRUE</strong> if the statement agrees with the claims of the writer</li>
                        <li><strong>FALSE</strong> if the statement contradicts the claims of the writer</li>
                        <li><strong>NOT GIVEN</strong> if it is impossible to say what the writer thinks about this</li>
                    </ul>
                </fieldset>
                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        Britain’s canal network grew rapidly so that more goods could be transported around the country.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-1" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-1" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-1" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        Costs in the iron industry rose when the technique of smelting iron ore with coke was
                        introduced.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-2" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-2" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-2" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        Samuel Morse's communication system was more reliable than that developed by William Cooke and
                        Charles Wheatstone.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-3" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-3" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-3" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        The economic benefits of industrialisation were limited to certain sectors of society.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-4" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-4" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-4" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Some skilled weavers believed that the introduction of the new textile machines would lead to
                        job losses.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-5" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-5" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-5" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <fieldset class="q-item" data-q="6">
                    <legend class="q-text">
                        <span class="q-number">6</span>
                        There was some sympathy among local people for the Luddites who were arrested near Huddersfield.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-6" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-6" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="0XIGAcSMlticROES-6" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
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