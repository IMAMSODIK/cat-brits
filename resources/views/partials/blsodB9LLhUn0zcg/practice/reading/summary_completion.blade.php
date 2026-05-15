@props(['tab'])
<div class="x-panel-inner">Content: Summary Completion</div>
<div class="reading-section" aria-label="Reading and Questions">
    <div class="reading-grid resizable-grid highlighted-content">
        <article class="passage" aria-label="Reading Passage" tabindex="0">
            <div class="passage-body">
                <h3 class="passage-title">The ‘algorithmication’ of jobs</h3>
                <p>
                    Dr Stella Pachidi from Cambridge Judge Business School believes that some of the most fundamental
                    changes are happening as a result of the ‘algorithmication’ of jobs that are dependent on data
                    rather than on production — the so-called knowledge economy. Algorithms are capable of learning from
                    data to undertake tasks that previously needed human judgement, such as reading legal contracts,
                    analysing medical scans and gathering market intelligence.
                </p>
                <p>
                    ‘In many cases, they can outperform humans,’ says Pachidi. ‘Organisations are attracted to using
                    algorithms because they want to make choices based on what they consider is “perfect information”,
                    as well as to reduce costs and enhance productivity.’
                </p>
                <p>
                    ‘But these enhancements are not without consequences,’ says Pachidi. ‘If routine cognitive tasks are
                    taken over by AI, how do professions develop their future experts?’ she asks. ‘One way of learning
                    about a job is “legitimate peripheral participation”— a novice stands next to experts and learns by
                    observation. If this isn’t happening, then you need to find new ways to learn.’
                </p>
                <p>
                    Another issue is the extent to which the technology influences or even controls the workforce. For
                    over two years, Pachidi monitored a telecommunications company. ‘The way telecoms salespeople work
                    is through personal and frequent contact with clients, using the benefit of experience to assess a
                    situation and reach a decision. However, the company had started using a[n] … algorithm that defined
                    when account managers should contact certain customers about which kinds of campaigns and what to
                    offer them.’
                </p>
                <p>
                    The algorithm — usually built by external designers — often becomes the keeper of knowledge, she
                    explains. In cases like this, Pachidi believes, a short-sighted view begins to creep into working
                    practices whereby workers learn through the ‘algorithm’s eyes’ and become dependent on its
                    instructions. Alternative explorations — where experimentation and human instinct lead to progress
                    and new ideas — are effectively discouraged.
                </p>
                <p>
                    Pachidi and colleagues even observed people developing strategies to make the algorithm work to
                    their own advantage. ‘We are seeing cases where workers feed the algorithm with false data to reach
                    their targets,’ she reports.
                </p>
                <p>
                    It’s scenarios like these that many researchers are working to avoid. Their objective is to make AI
                    technologies more trustworthy and transparent, so that organisations and individuals understand how
                    AI decisions are made. In the meantime, says Pachidi, ‘We need to make sure we fully understand the
                    dilemmas that this new world raises regarding expertise, occupational boundaries and control.’
                </p>
            </div>
        </article>

        <div class="resize-handle" role="separator" aria-orientation="vertical"></div>
        <aside class="qa" aria-label="Questions">
            <form class="qa-body" id="form-{{ $tab['id'] }}">
                <fieldset class="q-item">
                    <h3>Questions 1-4</h3>
                    <p class="lead">Complete the summary using the list of words, <b>A-G</b> below.</p>
                    <p><i>Write the correct letter, <b>A-G</b>, in boxes 1-4 on your answer sheet</i></p>
                    <table style="width: 100%; border-collapse: collapse; text-align: left;">
                        <tr>
                            <td style="width: 33.33%;"><b>A</b>&nbsp;&nbsp;pressure</td>
                            <td style="width: 33.33%;"><b>B</b>&nbsp;&nbsp;satisfaction</td>
                            <td style="width: 33.33%;"><b>C</b>&nbsp;&nbsp;intuition</td>
                        </tr>
                        <tr>
                            <td><b>D</b>&nbsp;&nbsp;promotion</td>
                            <td><b>E</b>&nbsp;&nbsp;reliance</td>
                            <td><b>F</b>&nbsp;&nbsp;confidence</td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>G</b>&nbsp;&nbsp;information</td>
                        </tr>
                    </table>
                    <h3>The ‘algorithmication’ of jobs</h3>
                    <p>
                    <div>
                        Stella Pachidi of Cambridge Judge Business School has been focusing on the ‘algorithmication’ of
                        jobs which rely not on production but on
                        <span class="q-number-box">1</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="blsodB9LLhUn0zcg-1" class="q-text" placeholder="">
                            </span>
                        </span>
                        .
                    </div>
                    </p>
                    <p>
                    <div>
                        While monitoring a telecommunications company, Pachidi observed a growing
                        <span class="q-number-box">2</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="blsodB9LLhUn0zcg-2" class="q-text" placeholder="">
                            </span>
                        </span>
                        on the recommendations made by AI, as workers begin to learn through the ‘algorithm’s eyes’.
                    </div>
                    </p>
                    <p>
                    <div>
                        Meanwhile, staff are deterred from experimenting and using their own
                        <span class="q-number-box">3</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="blsodB9LLhUn0zcg-3" class="q-text" placeholder="">
                            </span>
                        </span>
                        , and are therefore prevented from achieving innovation.
                    </div>
                    </p>
                    <p>
                    <div>
                        To avoid the kind of situations which Pachidi observed, researchers are trying to make AI’s
                        decision-making process easier to comprehend, and to increase users’
                        <span class="q-number-box">4</span>
                        <span style="flex: 1;">
                            <span class="q-question">
                                <input type="text" name="blsodB9LLhUn0zcg-4" class="q-text" placeholder="">
                            </span>
                        </span>
                        with regard to the technology.
                    </div>
                    </p>
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
