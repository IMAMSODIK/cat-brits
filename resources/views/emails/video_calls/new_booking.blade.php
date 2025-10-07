@component('mail::message')
# Permintaan Video Call Baru

Murid **{{ $call->murid->name }}** meminta sesi:
- Tanggal & Jam: **{{ $call->scheduled_at->format('d M Y H:i') }}**
- Durasi: **{{ $call->duration_minutes }} menit**
@if($call->note)
- Catatan: {{ $call->note }}
@endif

Silakan buka dashboard untuk **terima** atau **tolak** permintaan.

@component('mail::button', ['url' => route('video-calls.guru.index')])
Buka Dashboard Guru
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
