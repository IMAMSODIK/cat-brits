@props(['tab'])

<div class="x-panel-inner">Content: Table Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <article class="passage" aria-label="Reading Passage" tabindex="0">
                <div class="passage-body">
                    <p>
                        Perhaps most significantly, however, this is a real-life showcase for the work of Hardy’s
                        flourishing urban agriculture consultancy, Agripolis, which is currently fielding enquiries
                        from around the world to design, build and equip a new breed of soil-free inner-city farm.
                        ‘The method’s advantages are many,’ he says. ‘First, I don’t much like the fact that most of
                        the fruit and vegetables we eat have been treated with something like 17 different pesticides,
                        or that the intensive farming techniques that produced them are such huge generators of
                        greenhouse gases.
                    </p>
                    <p>
                        I don’t much like the fact, either, that they’ve travelled an average of 2,000 refrigerated
                        kilometres to my plate, that their quality is so poor, because the varieties are selected for
                        their capacity to withstand such substantial journeys, or that 80% of the price I pay goes to
                        wholesalers and transport companies, not the producers.’
                    </p>
                    <p>
                        Produce grown using this soil-free method, on the other hand- which relies solely on a small
                        quantity of water, enriched with organic nutrients, pumped around a closed circuit of pipes,
                        towers and trays- is ‘produced up here, and sold locally, just down there. It barely travels at
                        all,’ Hardy says. ‘You can select crop varieties for their flavour, not their resistance to the
                        transport and storage chain, and you can pick them when they’re really at their best, and not
                        before.’ No soil is exhausted, and the water that gently showers the plants’ roots every 12
                        minutes is recycled, so the method uses 90% less water than a classic intensive farm for the
                        same yield.
                    </p>

                </div>
            </article>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-tc">
                <fieldset class="q-item">
                    <p><i>Questions 1-4</i></p>
                    <p><i>Complete the table below.</i></p>
                    <p><i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i></p>
                </fieldset>

                <p style="text-align: center"><b>Intensive farming versus aeroponic urban farming</b></p>

                <table border="1" cellpadding="8" cellspacing="0"
                    style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">

                    <tr style="text-align: center">
                        <td></td>
                        <td><b>Growth</b></td>
                        <td><b>Selection</b></td>
                        <td><b>Sale</b></td>
                    </tr>

                    <tr>
                        <td><b>Intensive farming</b></td>
                        <td>
                            <ul>
                                <li>
                                    wide range of
                                    <div class="q-item" data-q="1" style="display:inline-block;">
                                        <span class="q-number-box">1</span>
                                        <input type="text" name="KeCD0au8jSaBuT3A-1" class="q-text" placeholder="">
                                    </div>
                                    used
                                </li>
                                <li>
                                    techniques pollute air
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>quality not good</li>
                                <li>
                                    varieties of fruit and vegetables chosen that can survive long
                                    <div class="q-item" data-q="2" style="display:inline-block;">
                                        <span class="q-number-box">2</span>
                                        <input type="text" name="KeCD0au8jSaBuT3A-2" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="q-item" data-q="3" style="display:inline-block;">
                                <span class="q-number-box">3</span>
                                <input type="text" name="KeCD0au8jSaBuT3A-3" class="q-text" placeholder="">
                            </div>
                            receive very little of overall income
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center"><b>Aeroponic urban farming</b></td>
                        <td>
                            <ul>
                                <li>no soil used</li>
                                <li>nutrients added to water, which is recycled</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    produce chosen because of its
                                    <div class="q-item" data-q="4" style="display:inline-block;">
                                        <span class="q-number-box">4</span>
                                        <input type="text" name="KeCD0au8jSaBuT3A-4" class="q-text" placeholder="">
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>

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
