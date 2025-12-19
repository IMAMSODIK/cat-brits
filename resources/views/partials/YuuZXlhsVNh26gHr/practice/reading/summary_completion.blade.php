@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>G</h3>
                <p>
                    My colleagues and I at Aberystwyth University in the UK have developed an approach in
                    which we use our knowledge of ecology as a guide to target our efforts. The creatures
                    that particularly interest us are the many insects that secrete powerful poison for
                    subduing prey and keeping it fresh for future consumption. There are even more insects
                    that are masters of exploiting filthy habitats, such as faeces and carcasses, where
                    they are regularly challenged by thousands of micro-organisms. These insects have
                    many antimicrobial compounds for dealing with pathogenic bacteria and fungi,
                    suggesting that there is certainly potential to find many compounds that can serve as
                    or inspire new antibiotics.
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1–4</h3>
                    <p class="lead">Complete the summary below.</p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                    <p><i>Write your answers in boxes on your answer sheet.</i></p>

                    <h3>Research at Aberystwyth University</h3>

                    <p>
                    <div>
                        Ross Piper and fellow zoologists at Aberystwyth University are using their
                        expertise in
                        <span class="q-number-box">1</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-1" class="q-text">
                            </span>
                        </span>
                        when undertaking bioprospecting with insects. They are especially interested in
                        the compounds that insects produce to overpower and preserve their
                        <span class="q-number-box">2</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-2" class="q-text">
                            </span>
                        </span>.
                    </div>
                    </p>

                    <p>
                    <div>
                        They are also interested in compounds which insects use to protect themselves
                        from pathogenic bacteria and fungi found in their
                        <span class="q-number-box">3</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-3" class="q-text">
                            </span>
                        </span>.
                        Piper hopes that these substances will be useful in the development of drugs such
                        as
                        <span class="q-number-box">4</span>
                        <span style="flex:1;">
                            <span class="q-question">
                                <input type="text" name="YuuZXlhsVNh26gHr-4" class="q-text">
                            </span>
                        </span>.
                    </div>
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
