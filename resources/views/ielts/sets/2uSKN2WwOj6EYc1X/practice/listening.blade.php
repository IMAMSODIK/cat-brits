@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => '2uSKN2WwOj6EYc1X',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'namaTipe' => 'Note Completion',
                    'title' => 'Note Completion',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 1.mp3'),
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.listening.note_completion',
                ],
                [
                    'id' => 'map_labeling',
                    'tipe' => 'map_labeling',
                    'namaTipe' => 'Map Labeling',
                    'title' => 'Map Labeling',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 2.mp3'),
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.listening.map_labeling',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'namaTipe' => 'Note Completion',
                    'title' => 'Note Completion 2',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 2.mp3'),
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.listening.note_completion2',
                ],
                [
                    'id' => 'note_completion3',
                    'tipe' => 'nc',
                    'namaTipe' => 'Note Completion',
                    'title' => 'Note Completion 3',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 3.mp3'),
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.listening.note_completion3',
                ],
                [
                    'id' => 'map_labeling2',
                    'tipe' => 'map_labeling',
                    'namaTipe' => 'Map Labeling',
                    'title' => 'Map Labeling 2',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 4.mp3'),
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.listening.map_labeling2',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'namaTipe' => 'Summary Completion',
                    'title' => 'Summary Completion',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 4.mp3'),
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.listening.summary_completion',
                ],
            ],
        ];
    @endphp
@endsection
