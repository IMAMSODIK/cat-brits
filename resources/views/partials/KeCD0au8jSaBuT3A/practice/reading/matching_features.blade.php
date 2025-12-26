@props(['tab'])
<div class="x-panel-inner">Content: Matching Features</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3>E</h3>
                <p>Another approach that might yield a high amount of low-use wood is a Salvage Cut. With the many pests
                    and pathogens visiting forests including hemlock wooly adelgid, Asian longhomed beetle, emerald ash
                    borer, and gypsy moth, to name just a few, it is important to remember that those working in the
                    forests can help ease these issues through cutting procedures. These types of cut reduce the number
                    of sick trees and seek to manage the future spread of a pest problem. They leave vigorous trees that
                    have stayed healthy enough to survive the outbreak.</p>

                <h3>F</h3>
                <p>A Shelterwood Cut, which only takes place in a mature forest that has already been thinned several
                    times, involves removing all the mature trees when other seedlings have become established. This
                    then allows the forester to decide which tree species are regenerated. It leaves a young forest
                    where all trees are at a similar point in their growth. It can also be used to develop a two-tier
                    forest so that there are two harvests and the money that comes in is spread out over a decade or
                    more.</p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <p><b>Questions 1-3</b></p>
                    <p class="lead">Look at the following purposes and the list of timber cuts below.</p>
                    <p class="lead">Match each purpose with the correct timber cut, A, B or C.</p>
                    <p>Write the correct letter, <b>A, B or C</b>, in boxes on your answer sheet.</p>
                    <p>NB &nbsp;&nbsp;You may use any letter more than once.</p>
                </fieldset>

                <fieldset class="q-item">
                    <p><b>List of Timber Cuts</b></p>
                    <p><b>A</b>&nbsp;&nbsp;&nbsp;&nbsp;a TSI Cut</p>
                    <p><b>B</b>&nbsp;&nbsp;&nbsp;&nbsp;a Salvage Cut</p>
                    <p><b>C</b>&nbsp;&nbsp;&nbsp;&nbsp;a Shelterwood Cut</p>
                </fieldset>

                <fieldset class="q-item" data-q="1">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">1</span>
                        <span style="flex: 1;">
                            to remove trees that are diseased
                            <span class="q-question">
                                <select name="KeCD0au8jSaBuT3A-1" class="q-dropdown">
                                    <option value=""></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </span>
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item" data-q="2">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">2</span>
                        <span style="flex: 1;">
                            to generate income across a number of years
                            <span class="q-question">
                                <select name="KeCD0au8jSaBuT3A-2" class="q-dropdown">
                                    <option value=""></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </span>
                        </span>
                    </legend>
                </fieldset>

                <fieldset class="q-item" data-q="3">
                    <legend class="q-text" style="display: flex; align-items: center; gap: 6px;">
                        <span class="q-number">3</span>
                        <span style="flex: 1;">
                            to create a forest whose trees are close in age
                            <span class="q-question">
                                <select name="KeCD0au8jSaBuT3A-3" class="q-dropdown">
                                    <option value=""></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </span>
                        </span>
                    </legend>
                </fieldset>

                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}" style="display: none">
                        Try Again
                    </button>
                </div>
            </form>
        </aside>
    </div>
</div>
