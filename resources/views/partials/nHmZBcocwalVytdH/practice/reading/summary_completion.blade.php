@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>D</h3>
                <p>Short’s book highlights a developing and sophisticated art and science of ventilating buildings
                    through the 19th and earlier-20th centuries, including the design of ingeniously ventilated
                    hospitals. Of particular interest were those built to the designs of John Shaw Billings, including
                    the first Johns Hopkins Hospital in the US city of Baltimore (1873-1889).</p>
                <p>‘We spent three years digitally modelling Billings’ final designs,’ says Short. ‘We put pathogens* in
                    the airstreams, modelled for someone with tuberculosis (TB) coughing in the wards and we found the
                    ventilation systems in the room would have kept other patients safe from harm.</p>
                <p>—————</p>
                <p>* pathogens: microorganisms that can cause disease</p>
                <h3>E</h3>
                <p>‘We discovered that 19th-century hospital wards could generate up to 24 air changes an hour – that’s
                    similar to the performance of a modern-day, computer-controlled operating theatre. We believe you
                    could build wards based on these principles now.</p>
                <p>Single rooms are not appropriate for all patients. Communal wards appropriate for certain patients –
                    older people with dementia, for example – would work just as well in today’s hospitals, at a
                    fraction of the energy cost.’</p>
                <p>Professor Short contends the mindset and skill-sets behind these designs have been completely lost,
                    lamenting the disappearance of expertly designed theatres, opera houses, and other buildings where
                    up to half the volume of the building was given over to ensuring everyone got fresh air.</p>
                <h3>F</h3>
                <p>Much of the ingenuity present in 19th-century hospital and building design was driven by a panicked
                    public clamouring for buildings that could protect against what was thought to be the lethal threat
                    of miasmas – toxic air that spread disease. Miasmas were feared as the principal agents of disease
                    and epidemics for centuries, and were used to explain the spread of infection from the Middle Ages
                    right through to the cholera outbreaks in London and Paris during the 1850s. Foul air, rather than
                    germs, was believed to be the main driver of ‘hospital fever’, leading to disease and frequent
                    death. The prosperous steered clear of hospitals.</p>
                <p>While miasma theory has been long since disproved, Short has for the last 30 years advocated a return
                    to some of the building design principles produced in its wake.</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-8</h3>
                    <p class="lead">Complete the summary below.</p>
                    <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</p>
                    <p><i>on your answer sheet.</i></p>
                    <p><b>Ventilation in 19th-century hospital wards</b></p>
                    <p>
                        Professor Alan Short examined the work of John Shaw Billings, who influenced the architectural
                        <span class="q-number-box">1</span>
                        <input type="text" name="nHmZBcocwalVytdH-1" data-q="1" class="q-text" placeholder="">
                        of hospitals to ensure they had good ventilation. He calculated that
                        <span class="q-number-box">2</span>
                        <input type="text" name="nHmZBcocwalVytdH-2" data-q="2" class="q-text" placeholder="">
                        in the air coming from patients suffering form
                        <span class="q-number-box">3</span>
                        <input type="text" name="nHmZBcocwalVytdH-3" data-q="3" class="q-text" placeholder="">
                        would not have harmed other patients. He also found that the air in
                        <span class="q-number-box">4</span>
                        <input type="text" name="nHmZBcocwalVytdH-4" data-q="4" class="q-text" placeholder="">
                        In hospitals could change as often as in a modern operating theatre. He suggests that energy use
                        could be reduced by locating more patients in
                        <span class="q-number-box">5</span>
                        <input type="text" name="nHmZBcocwalVytdH-5" data-q="5" class="q-text" placeholder="">
                        areas. A major reason for improving ventilation in 19th-century hospitals was the demand from
                        the
                        <span class="q-number-box">6</span>
                        <input type="text" name="nHmZBcocwalVytdH-6" data-q="6" class="q-text" placeholder="">
                        for protection against bad air, known as
                        <span class="q-number-box">7</span>
                        <input type="text" name="nHmZBcocwalVytdH-7" data-q="7" class="q-text" placeholder="">
                        . These were blamed for the spread of disease for hundreds of years, including epidemics of
                        <span class="q-number-box">8</span>
                        <input type="text" name="nHmZBcocwalVytdH-8" data-q="8" class="q-text" placeholder="">
                        n London and Paris in the middle of the 19th century.
                    </p>
                </fieldset>
                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display:none">
                        Try Again
                    </button>
                </div>
            </form>
        </aside>
    </div>
</div>
