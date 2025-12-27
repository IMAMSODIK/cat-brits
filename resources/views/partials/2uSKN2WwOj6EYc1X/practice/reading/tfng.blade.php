@props(['tab'])
<div class="x-panel-inner">{{ $tab['title'] }}</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <h3 class="passage-title">Roman shipbuilding and navigation</h3>

            <div class="passage-body">
                <p>
                    Shipbuilding today is based on science and ships are built using computers and sophisticated
                    tools. Shipbuilding in ancient Rome, however, was more of an art relying on estimation,
                    inherited techniques and personal experience. The Romans were not traditionally sailors but
                    mostly land-based people, who learned to build ships from the people that they conquered,
                    namely the Greeks and the Egyptians.
                </p>

                <p>
                    There are a few surviving written documents that give descriptions and representations of
                    ancient Roman ships, including the sails and rigging. Excavated vessels also provide some
                    clues about ancient shipbuilding techniques. Studies of these have taught us that ancient
                    Roman shipbuilders built the outer hull first, then proceeded with the frame and the rest of
                    the ship. Planks used to build the outer hull were initially sewn together. Starting from the
                    6th century BCE, they were fixed using a method called mortise and tenon, whereby one plank
                    locked into another without the need for stitching.
                </p>

                <p>
                    Then in the first centuries of the current era, Mediterranean shipbuilders shifted to another
                    shipbuilding method, still in use today, which consisted of building the frame first and then
                    proceeding with the hull and the other components of the ship. This method was more
                    systematic and dramatically shortened ship construction times. The ancient Romans built
                    large merchant ships and warships whose size and technology were unequalled until the 16th
                    century CE.
                </p>

                <p>
                    Warships were built to be lightweight and very speedy. They had to be able to sail near the
                    coast, which is why they had no ballast or excess load and were built with a long, narrow
                    hull. They did not sink when damaged and often would lie crippled on the sea’s surface
                    following naval battles. They had a bronze battering ram, which was used to pierce the timber
                    hulls or break the oars of enemy vessels.
                </p>

                <p>
                    Warships used both wind (sails) and human power (oarsmen) and were therefore very fast.
                    Eventually, Rome’s navy became the largest and most powerful in the Mediterranean, and the
                    Romans had control over what they therefore called <b>Mare Nostrum</b> meaning ‘our sea’.
                </p>

                <p>
                    There were many kinds of warship. The ‘trireme’ was the dominant warship from the 7th to 4th
                    century BCE. It had rowers in the top, middle and lower levels, and approximately 50 rowers in
                    each bank. The rowers at the bottom had the most uncomfortable position as they were under the
                    other rowers and were exposed to the water entering through the oar-holes. It is worth noting that
                    contrary to popular perception, rowers were not slaves but mostly
                    Roman citizens enrolled in the military. The trireme was superseded by larger ships with even
                    more rowers.
                </p>
            </div>

        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-5</h3>
                    <p class="lead">
                        Do the following statements agree with the information given in the
                        Reading Passage?
                    </p>
                    <p>In boxes on your answer sheet, write</p>
                    <ul class="legend">
                        <li><strong>TRUE</strong> if the statement agrees with the information</li>
                        <li><strong>FALSE</strong> if the statement contradicts the information</li>
                        <li><strong>NOT GIVEN</strong> if there is no information on this</li>
                    </ul>
                </fieldset>

                <!-- Question 1 -->
                <fieldset class="q-item" data-q="1">
                    <legend class="q-text">
                        <span class="q-number">1</span>
                        The Romans’ shipbuilding skills were passed on to the Greeks and the Egyptians.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-1" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-1" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-1" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 2 -->
                <fieldset class="q-item" data-q="2">
                    <legend class="q-text">
                        <span class="q-number">2</span>
                        Skilled craftsmen were needed for the mortise and tenon method of fixing planks.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-2" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-2" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-2" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 3 -->
                <fieldset class="q-item" data-q="3">
                    <legend class="q-text">
                        <span class="q-number">3</span>
                        The later practice used by Mediterranean shipbuilders involved building the hull before the
                        frame.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-3" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-3" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-3" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 4 -->
                <fieldset class="q-item" data-q="4">
                    <legend class="q-text">
                        <span class="q-number">4</span>
                        The Romans called the Mediterranean Sea Mare Nostrum because they dominated its use.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-4" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-4" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-4" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <!-- Question 5 -->
                <fieldset class="q-item" data-q="5">
                    <legend class="q-text">
                        <span class="q-number">5</span>
                        Most rowers on ships were people from the Roman army.
                    </legend>
                    <div class="q-options">
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-5" value="TRUE">
                            <span class="opt-code">A</span>
                            <span class="opt-label">TRUE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-5" value="FALSE">
                            <span class="opt-code">B</span>
                            <span class="opt-label">FALSE</span>
                        </label>
                        <label class="q-option">
                            <input type="radio" name="NmeBcwURSR2ZPfdX-5" value="NOT GIVEN">
                            <span class="opt-code">C</span>
                            <span class="opt-label">NOT GIVEN</span>
                        </label>
                    </div>
                </fieldset>

                <div style="text-align: center;">
                    <button type="button" class="btn btn-primary" id="submit-{{ $tab['id'] }}">
                        Submit
                    </button>
                    <button class="btn btn-info" type="button" id="again-{{ $tab['id'] }}"
                        style="display: none">Try
                        Again</button>
                </div>
            </form>

        </aside>
    </div>
</div>
