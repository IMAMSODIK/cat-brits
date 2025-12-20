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
                <div class="reading-grid resizable-grid">

                    {{-- PASSAGE --}}
                    <article class="passage" aria-label="Reading Passage" tabindex="0">
                        @include($part['contents']['question'], ['part' => $part])
                    </article>

                    {{-- RESIZE HANDLE --}}
                    <div class="resize-handle" role="separator" aria-orientation="vertical"></div>

                    {{-- QUESTIONS --}}
                    <aside class="qa" aria-label="Questions">
                        <form class="qa-body">
                            @include($part['contents']['answer'], ['part' => $part, 'id' => $tabs['id']])
                        </form>
                    </aside>

                </div>
            </div>
        </div>
    @endforeach
</div>