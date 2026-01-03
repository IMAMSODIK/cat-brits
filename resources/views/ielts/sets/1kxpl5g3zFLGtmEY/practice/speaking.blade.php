<!DOCTYPE html>
<html lang="id">

@include('ielts.sets.layouts.practice.speaking.head')

<body>
    @include('ielts.sets.layouts.practice.speaking.header')

    <section class="parts-section" aria-label="Pilihan Part Soal">
        <div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="tfng">
            <button class="x-tab is-active" role="tab" id="tab-tfng" aria-controls="panel-tfng"
                aria-selected="true" data-id="tfng">Part 1</button>
            <button class="x-tab" role="tab" id="tab-tfng2" aria-controls="panel-tfng2" aria-selected="true"
                data-id="tfng2">Part 2</button>
            <button class="x-tab" role="tab" id="tab-ynng" aria-controls="panel-ynng" aria-selected="false"
                data-id="ynng">Part 3</button>
        </div>

        <div class="x-panels">
            <div id="panel-tfng" class="x-panel is-open" role="tabpanel" aria-labelledby="tab-tfng">
                <div class="x-panel-inner">

                    <div class="x-panel-inner">Content: Part 1</div>

                    <fieldset class="q-item">
                        <p><b>Questions 1-4</b></p>
                    </fieldset>

                    <div class="progress-dots"></div>

                    <div class="speaking-question" data-q="1" data-part="1">
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev" disabled>Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 1.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="2" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 2.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="3" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 3.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="4" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 4.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="5" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 5.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="6" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 6.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="7" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next">Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 7.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="speaking-question" data-q="8" data-part="1" hidden>
                        <div class="sq-navigation">
                            <div class="nav-buttons">
                                <button class="sq-prev">Previous</button>
                                <button class="sq-next" disabled>Next</button>
                            </div>
                            <div class="sq-text">
                                <div class="video-container">
                                    <div class="video-player">
                                        <h3>Instruction Video</h3>
                                        <div class="video-wrapper">
                                            <div class="video-placeholder">
                                                <video class="video-element" data-role="instruction-video">
                                                    <source
                                                        src="{{ asset('own_assets/videos/C14-t1/Part 1 - Question 8.mp4') }}"
                                                        type="video/mp4">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="video-controls">
                                            <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                            <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                                Pause</button>
                                        </div>
                                    </div>


                                    <div class="recorder-container">
                                        <h3>Answer Recorder</h3>
                                        <div class="recorder-wrapper">
                                            <div class="recorder-placeholder">
                                                <video class="preview-video" autoplay muted playsinline></video>
                                                <div class="recorder-placeholder">
                                                    <i class="fas fa-video"></i>
                                                    <p>Camera Preview</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recorder-controls">
                                            <button class="record-btn"><i class="fas fa-video"></i> Start
                                                Recording</button>
                                            <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                                Stop</button>
                                        </div>
                                        <div class="recording-indicator">
                                            <div class="recording-dot"></div>
                                            <span>Recording in progress...</span>
                                        </div>
                                        <div class="timer" data-timer>00:00</div>


                                        <div class="recorded-video" style="display:none; margin-top:15px;">
                                            <h4>Recorded Video:</h4>
                                            <video class="recorded-video-element" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sq-submit">
                            <button class="sq-submit-btn">Submit</button>
                        </div>
                    </div>

                </div>
            </div>

            <div id="panel-tfng2" class="x-panel" role="tabpanel" aria-labelledby="tab-tfng2">
                <div class="x-panel-inner">Content: Part 2</div>

                <fieldset class="q-item">
                    <p><b>Questions 1-1</b></p>
                </fieldset>

                <div class="progress-dots" style="display: none"></div>

                <div class="speaking-question" data-q="1" data-part="2">
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev" disabled>Previous</button>
                            <button class="sq-next" disabled>Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C14-t1/PART 2.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
                                    </div>
                                </div>


                                <div class="recorder-container">
                                    <h3>Answer Recorder</h3>
                                    <div class="recorder-wrapper">
                                        <div class="recorder-placeholder">
                                            <video class="preview-video" autoplay muted playsinline></video>
                                            <div class="recorder-placeholder">
                                                <i class="fas fa-video"></i>
                                                <p>Camera Preview</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recorder-controls">
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
                                    </div>
                                    <div class="recording-indicator">
                                        <div class="recording-dot"></div>
                                        <span>Recording in progress...</span>
                                    </div>
                                    <div class="timer" data-timer>00:00</div>


                                    <div class="recorded-video" style="display:none; margin-top:15px;">
                                        <h4>Recorded Video:</h4>
                                        <video class="recorded-video-element" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sq-submit">
                        <button class="sq-submit-btn">Submit</button>
                    </div>
                </div>
            </div>

            <div id="panel-ynng" class="x-panel" role="tabpanel" aria-labelledby="tab-ynng" hidden>
                <div class="x-panel-inner">Content: Part 3</div>

                <fieldset class="q-item">
                    <p><b>Questions 1-6</b></p>
                </fieldset>

                <div class="progress-dots"></div>

                <div class="speaking-question" data-q="1" data-part="3">
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev" disabled>Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C14-t1/Part 3 - Question 1.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
                                    </div>
                                </div>


                                <div class="recorder-container">
                                    <h3>Answer Recorder</h3>
                                    <div class="recorder-wrapper">
                                        <div class="recorder-placeholder">
                                            <video class="preview-video" autoplay muted playsinline></video>
                                            <div class="recorder-placeholder">
                                                <i class="fas fa-video"></i>
                                                <p>Camera Preview</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recorder-controls">
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
                                    </div>
                                    <div class="recording-indicator">
                                        <div class="recording-dot"></div>
                                        <span>Recording in progress...</span>
                                    </div>
                                    <div class="timer" data-timer>00:00</div>


                                    <div class="recorded-video" style="display:none; margin-top:15px;">
                                        <h4>Recorded Video:</h4>
                                        <video class="recorded-video-element" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sq-submit">
                        <button class="sq-submit-btn">Submit</button>
                    </div>
                </div>

                <div class="speaking-question" data-q="2" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C14-t1/Part 3 - Question 2.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
                                    </div>
                                </div>


                                <div class="recorder-container">
                                    <h3>Answer Recorder</h3>
                                    <div class="recorder-wrapper">
                                        <div class="recorder-placeholder">
                                            <video class="preview-video" autoplay muted playsinline></video>
                                            <div class="recorder-placeholder">
                                                <i class="fas fa-video"></i>
                                                <p>Camera Preview</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recorder-controls">
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
                                    </div>
                                    <div class="recording-indicator">
                                        <div class="recording-dot"></div>
                                        <span>Recording in progress...</span>
                                    </div>
                                    <div class="timer" data-timer>00:00</div>


                                    <div class="recorded-video" style="display:none; margin-top:15px;">
                                        <h4>Recorded Video:</h4>
                                        <video class="recorded-video-element" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sq-submit">
                        <button class="sq-submit-btn">Submit</button>
                    </div>
                </div>

                <div class="speaking-question" data-q="3" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C14-t1/Part 3 - Question 3.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
                                    </div>
                                </div>


                                <div class="recorder-container">
                                    <h3>Answer Recorder</h3>
                                    <div class="recorder-wrapper">
                                        <div class="recorder-placeholder">
                                            <video class="preview-video" autoplay muted playsinline></video>
                                            <div class="recorder-placeholder">
                                                <i class="fas fa-video"></i>
                                                <p>Camera Preview</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recorder-controls">
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
                                    </div>
                                    <div class="recording-indicator">
                                        <div class="recording-dot"></div>
                                        <span>Recording in progress...</span>
                                    </div>
                                    <div class="timer" data-timer>00:00</div>


                                    <div class="recorded-video" style="display:none; margin-top:15px;">
                                        <h4>Recorded Video:</h4>
                                        <video class="recorded-video-element" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sq-submit">
                        <button class="sq-submit-btn">Submit</button>
                    </div>
                </div>

                <div class="speaking-question" data-q="4" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C14-t1/Part 3 - Question 4.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
                                    </div>
                                </div>


                                <div class="recorder-container">
                                    <h3>Answer Recorder</h3>
                                    <div class="recorder-wrapper">
                                        <div class="recorder-placeholder">
                                            <video class="preview-video" autoplay muted playsinline></video>
                                            <div class="recorder-placeholder">
                                                <i class="fas fa-video"></i>
                                                <p>Camera Preview</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recorder-controls">
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
                                    </div>
                                    <div class="recording-indicator">
                                        <div class="recording-dot"></div>
                                        <span>Recording in progress...</span>
                                    </div>
                                    <div class="timer" data-timer>00:00</div>


                                    <div class="recorded-video" style="display:none; margin-top:15px;">
                                        <h4>Recorded Video:</h4>
                                        <video class="recorded-video-element" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sq-submit">
                        <button class="sq-submit-btn">Submit</button>
                    </div>
                </div>

                <div class="speaking-question" data-q="5" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next">Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C14-t1/Part 3 - Question 5.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
                                    </div>
                                </div>


                                <div class="recorder-container">
                                    <h3>Answer Recorder</h3>
                                    <div class="recorder-wrapper">
                                        <div class="recorder-placeholder">
                                            <video class="preview-video" autoplay muted playsinline></video>
                                            <div class="recorder-placeholder">
                                                <i class="fas fa-video"></i>
                                                <p>Camera Preview</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recorder-controls">
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
                                    </div>
                                    <div class="recording-indicator">
                                        <div class="recording-dot"></div>
                                        <span>Recording in progress...</span>
                                    </div>
                                    <div class="timer" data-timer>00:00</div>


                                    <div class="recorded-video" style="display:none; margin-top:15px;">
                                        <h4>Recorded Video:</h4>
                                        <video class="recorded-video-element" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sq-submit">
                        <button class="sq-submit-btn">Submit</button>
                    </div>
                </div>

                <div class="speaking-question" data-q="6" data-part="3" hidden>
                    <div class="sq-navigation">
                        <div class="nav-buttons">
                            <button class="sq-prev">Previous</button>
                            <button class="sq-next" disabled>Next</button>
                        </div>
                        <div class="sq-text">
                            <div class="video-container">
                                <div class="video-player">
                                    <h3>Instruction Video</h3>
                                    <div class="video-wrapper">
                                        <div class="video-placeholder">
                                            <video class="video-element" data-role="instruction-video">
                                                <source
                                                    src="{{ asset('own_assets/videos/C14-t1/Part 3 - Question 6.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="video-controls">
                                        <button class="play-btn"><i class="fas fa-play"></i> Play Video</button>
                                        <button class="pause-btn" disabled><i class="fas fa-pause"></i>
                                            Pause</button>
                                    </div>
                                </div>


                                <div class="recorder-container">
                                    <h3>Answer Recorder</h3>
                                    <div class="recorder-wrapper">
                                        <div class="recorder-placeholder">
                                            <video class="preview-video" autoplay muted playsinline></video>
                                            <div class="recorder-placeholder">
                                                <i class="fas fa-video"></i>
                                                <p>Camera Preview</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recorder-controls">
                                        <button class="record-btn"><i class="fas fa-video"></i> Start
                                            Recording</button>
                                        <button class="stop-btn" disabled><i class="fas fa-stop"></i>
                                            Stop</button>
                                    </div>
                                    <div class="recording-indicator">
                                        <div class="recording-dot"></div>
                                        <span>Recording in progress...</span>
                                    </div>
                                    <div class="timer" data-timer>00:00</div>


                                    <div class="recorded-video" style="display:none; margin-top:15px;">
                                        <h4>Recorded Video:</h4>
                                        <video class="recorded-video-element" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sq-submit">
                        <button class="sq-submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('ielts.sets.layouts.practice.speaking.script')
</body>

</html>
