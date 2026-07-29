<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.mock.writing.head')

<body>
    @include('ielts.sets.layouts.mock.writing.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng" aria-selected="true"
                data-id="tfng">Task 1</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="false"
                data-id="tfng2">Task 2</button>
        </div>

        <form id="combined-writing-form" data-set-id="{{ $set->kode }}">
            @csrf
            <div class="x-panels">

                <!-- ✅ TASK 1 -->
                <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                    <div class="x-panel-inner">
                        Content: <strong>Task 1</strong> <br><br>
                        You should write at least 150 words on this task.
                    </div>
                    <div class="reading-section" aria-label="Reading and Questions">
                        <div class="reading-grid resizable-grid">
                            <article class="passage" aria-label="Reading Passage" tabindex="0">
                                <div class="passage-body">
                                    <p>The diagrams below show the life cycle of a speicies of large fish called the
                                        salmon.</p>
                                    <p>Summarise the information by selecting and reporting the main features, and make
                                        comparisons where relevant.</p>
                                    <img src="{{ asset('own_assets/images/cambridge-ielts-10-academic-writing-test-4-1.png') }}"
                                        alt="" width="100%">
                                </div>
                            </article>

                            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                            <aside aria-label="Questions">
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text"><span class="q-number">Task 1 Answer</span></legend>
                                    <div class="form-container">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <!-- Perhatikan atribut name="answers[Task 1]" dan data-task="Task 1" -->
                                                <textarea name="answers[Task 1]" class="form-textarea js-response" data-task="Task 1" data-no-soal="1"
                                                    placeholder="Enter your Task 1 Answer" spellcheck="false"></textarea>
                                                <div class="char-counter">
                                                    <span class="char-info"><span class="char-count">0</span>
                                                        Words</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </aside>
                        </div>
                    </div>
                </div>

                <!-- ✅ TASK 2 -->
                <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                    <div class="x-panel-inner">
                        Content: <strong>Task 2</strong> <br><br>
                        You should write at least 150 words on this task.
                    </div>
                    <div class="reading-section" aria-label="Reading and Questions">
                        <div class="reading-grid resizable-grid">
                            <article class="passage" aria-label="Reading Passage" tabindex="0">
                                <div class="passage-body">
                                    <p>Many museums charge for admission while others are free.</p>
                                    <p>Do you think the advantages of charging people for admission to museums outweigh
                                        the disadvantages?</p>
                                </div>
                            </article>

                            <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                            <aside aria-label="Questions">
                                <fieldset class="q-item" data-q="1">
                                    <legend class="q-text"><span class="q-number">Task 2 Answer</span></legend>
                                    <div class="form-container">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <!-- Perhatikan atribut name="answers[Task 2]" dan data-task="Task 2" -->
                                                <textarea name="answers[Task 2]" class="form-textarea js-response" data-task="Task 2" data-no-soal="1"
                                                    placeholder="Enter your Task 2 Answer" spellcheck="false"></textarea>
                                                <div class="char-counter">
                                                    <span class="char-info"><span class="char-count">0</span>
                                                        Words</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </aside>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-actions-global" style="margin-top: 25px; text-align: right;">
                <button type="button" class="btn btn-secondary js-clear-all">Clear All</button>
                <button type="submit" class="btn btn-primary js-submit-all">Submit All Tasks</button>
            </div>

            <div class="success-message js-success" style="display:none; margin-top: 10px;">
                Your responses have been submitted successfully!
            </div>
        </form>
    </section>

    @include('ielts.sets.layouts.mock.writing.component')
    @include('ielts.sets.layouts.mock.writing.script')
</body>

</html>
