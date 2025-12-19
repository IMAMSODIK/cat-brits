@props(['tabs'])

{{-- TABS --}}
<div class="x-tabs" role="tablist" aria-label="Jenis Soal" data-active="{{ array_key_first($tabs['data']) }}">
    @foreach ($tabs['data'] as $partId => $part)
        <button class="x-tab {{ $loop->first ? 'is-active' : '' }}" role="tab" id="tab-{{ $partId }}"
            aria-controls="panel-{{ $partId }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"
            data-id="{{ $partId }}">
            {{ $part['label'] }}
        </button>
    @endforeach
</div>

{{-- PANELS --}}
<div class="x-panels">
    @foreach ($tabs['data'] as $partId => $part)
        <div id="panel-{{ $partId }}" class="x-panel {{ $loop->first ? 'is-open' : '' }}" role="tabpanel"
            aria-labelledby="tab-{{ $partId }}">
            <div class="x-panel-inner">
                Content: {{ $part['label'] }}
            </div>

            <div class="reading-section highlighted-content" aria-label="Reading and Questions">
                <form class="qa-body">
                    <fieldset class="q-item">
                        <p class="lead">{{ $part['subtitle'] }}</p>
                        <div class="audio-player">
                            <audio src="{{ $part['audioUri'] }}"></audio>
                            <input type="range" class="timeline" value="0" disabled>
                            <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
                        </div>
                    </fieldset>

                    @include($part['contents'], ['part' => $part, 'id' => $tabs['id']])

                </form>
            </div>
        </div>
    @endforeach
</div>