@props(['tab'])

<div class="x-panel-inner">Content: Matching Information</div>

<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-section" aria-label="Reading and Questions">
        <div class="reading-grid resizable-grid highlighted-content">

            <article class="passage" aria-label="Reading Passage" tabindex="0">
                <div class="passage-body">
                    <h2><b>The concept of intelligence</b></h2>
                    <h3 class="passage-title">A</h3>
                    <p>
                        Looked at in one way, everyone knows what intelligence is; looked at in another way,
                        no one does. In other words, people all have unconscious notions – known as ‘implicit
                        theories’ – of intelligence, but no one knows for certain what it actually is. This
                        chapter addresses how people conceptualize intelligence, whatever it may actually be.
                        But why should we even care what people think intelligence is, as opposed only to
                        valuing whatever it actually is? There are at least four reasons people’s
                        conceptions of intelligence matter.
                    </p>

                    <h3 class="passage-title">B</h3>
                    <p>
                        First, implicit theories of intelligence drive the way in which people perceive and
                        evaluate their own intelligence and that of others. To better understand the
                        judgments people make about their own and others’ abilities, it is useful to learn
                        about people’s implicit theories. For example, parents’ implicit theories of their
                        children’s language development will determine at what ages they will be willing to
                        make various corrections in their children’s speech. More generally, parents’
                        implicit theories of intelligence will determine at what ages they believe their
                        children are ready to perform various cognitive tasks. Job interviewers will make
                        hiring decisions on the basis of their implicit theories of intelligence. People
                        will decide who to be friends with on the basis of such theories. In sum, knowledge
                        about implicit theories of intelligence is important because this knowledge is so
                        often used by people to make judgments in the course of their everyday lives.
                    </p>

                    <h3 class="passage-title">C</h3>
                    <p>
                        Second, the implicit theories of scientific investigators ultimately give rise to
                        their explicit theories. Thus it is useful to find out what these implicit theories
                        are. Implicit theories provide a framework that is useful in defining the general
                        scope of a phenomenon – especially a not-well-understood phenomenon. These implicit
                        theories can suggest what aspects of the phenomenon have been more or less attended
                        to in previous investigations.
                    </p>

                    <h3 class="passage-title">D</h3>
                    <p>
                        Third, implicit theories can be useful when an investigator suspects that existing
                        explicit theories are wrong or misleading. If an investigation of implicit theories
                        reveals little correspondence between the extant implicit and explicit theories, the
                        implicit theories may be wrong. But the possibility also needs to be taken into
                        account that the explicit theories are wrong and in need of correction or
                        supplementation. For example, some implicit theories of intelligence suggest the
                        need for expansion of some of our explicit theories of the construct.
                    </p>

                </div>
            </article>

            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

            <aside class="qa" aria-label="Questions">
                <form class="qa-body" id="form-{{ $tab['id'] }}">

                    <fieldset class="q-item">
                        <p class="lead"><b>Questions 1–3</b></p>
                        <p class="lead">The Reading Passage has ten sections, <b>A–J</b>.</p>
                        <p>Which section contains the following information?</p>
                        <p class="lead">
                            Write the correct letter, <b>A–J</b>, in boxes on your answer sheet.
                        </p>
                    </fieldset>

                    <fieldset class="q-item" data-q="1">
                        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                            <span class="q-number">1</span>
                            <span style="flex: 1;">
                                information about how non-scientists’ assumptions about intelligence influence
                                their behavior towards others
                                <span class="q-question">
                                    <select name="YuuZXlhsVNh26gHr-1" class="q-dropdown">
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
                        </legend>
                    </fieldset>

                    <fieldset class="q-item" data-q="2">
                        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                            <span class="q-number">2</span>
                            <span style="flex: 1;">
                                a reference to lack of clarity over the definition of intelligence
                                <span class="q-question">
                                    <select name="YuuZXlhsVNh26gHr-2" class="q-dropdown">
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
                        </legend>
                    </fieldset>

                    <fieldset class="q-item" data-q="3">
                        <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                            <span class="q-number">3</span>
                            <span style="flex: 1;">
                                the point that a researcher’s implicit and explicit theories may be very
                                different
                                <span class="q-question">
                                    <select name="YuuZXlhsVNh26gHr-3" class="q-dropdown">
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
                        </legend>
                    </fieldset>

                    <div style="text-align: center;">
                        <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                            Submit
                        </button>
                        <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}"
                            style="display: none">
                            Try Again
                        </button>
                    </div>

                </form>
            </aside>
        </div>
    </div>
</div>
