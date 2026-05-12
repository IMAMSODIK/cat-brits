<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.mock.writing.head')

<body>
    @include('ielts.sets.layouts.mock.writing.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">Task 1</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="false"
                data-id="tfng2">Task 2</button>
        </div>

        <div class="x-panels">
            <!-- ✅ TASK 1 -->
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">
                    Content: <strong>Task 1</strong> <br><br>
                    You should spend about 20 minutes on this task. Write at least 250 words.
                </div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>The charts below give information about a public library in a town called Little Chalfont. Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</p>
                                <img src="{{ asset('own_assets/images/Cambridge-IELTS-20-Academic-Writing-Test-3-1.png') }}"
                                    alt="" width="100%">
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside aria-label="Questions">
                            <form class="response-form" data-task="task1">
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text"><span class="q-number">Task 1 Answer</span></legend>
                                    <div class="form-container">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <textarea class="form-textarea js-response" placeholder="Enter your Task 1 Answer" required spellcheck="false"></textarea>
                                                <div class="char-counter">
                                                    <span class="char-info"><span class="char-count">0</span>
                                                        Words</span>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button"
                                                    class="btn btn-secondary js-clear">Clear</button>
                                                <button type="submit"
                                                    class="btn btn-primary js-submit">Submit</button>
                                            </div>

                                            <div class="success-message js-success" style="display:none;">
                                                ✅ Your response has been submitted successfully!
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>

            <!-- ✅ TASK 2 -->
            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">
                    Content: <strong>Task 2</strong> <br><br>
                    You should spend about 40 minutes on this task. Write at least 250 words.
                </div>
                <div class="reading-section" aria-label="Reading and Questions">
                    <div class="reading-grid resizable-grid">
                        <article class="passage" aria-label="Reading Passage" tabindex="0">
                            <div class="passage-body">
                                <p>Some people have decided to reduce the number of times they fly every year or to stop flying altogether. Do you think the environmental benefits of this development outweigh the disadvantages for individuals and businesses?</p>
                            </div>
                        </article>

                        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                        <aside aria-label="Questions">
                            <form class="response-form" data-task="task2">
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text"><span class="q-number">Task 2 Answer</span></legend>
                                    <div class="form-container">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <textarea class="form-textarea js-response" placeholder="Enter your Task 2 Answer" required spellcheck="false"></textarea>
                                                <div class="char-counter">
                                                    <span class="char-info"><span class="char-count">0</span>
                                                        Words</span>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button"
                                                    class="btn btn-secondary js-clear">Clear</button>
                                                <button type="submit"
                                                    class="btn btn-primary js-submit">Submit</button>
                                            </div>

                                            <div class="success-message js-success" style="display:none;">
                                                ✅ Your response has been submitted successfully!
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.mock.writing.component')
    @include('ielts.sets.layouts.mock.writing.script')
</body>

</html>
