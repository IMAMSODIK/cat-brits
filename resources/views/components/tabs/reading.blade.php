@props(['tabs'])

<div class="x-tabs" role="tablist" aria-label="{{ $label ?? 'Jenis Soal' }}" data-active="{{ $active ?? '' }}">
    @foreach ($tabs as $tab)
        <button class="x-tab {{ $loop->first ? 'is-active' : '' }}" role="tab" id="tab-{{ $tab['id'] }}"
            aria-controls="panel-{{ $tab['id'] }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"
            data-id="{{ $tab['id'] }}">
            {{ $tab['title'] }}
        </button>
    @endforeach
</div>

<div class="x-panels">
    @foreach ($tabs as $tab)
        <div id="panel-{{ $tab['id'] }}" class="x-panel {{ $loop->first ? 'is-open' : '' }}" role="tabpanel"
            aria-labelledby="tab-{{ $tab['id'] }}" @if (!$loop->first) hidden @endif>
            {{-- i want to send data tab inside this content --}}
            @include($tab['content'], ['tab' => $tab])
        </div>
    @endforeach
</div>