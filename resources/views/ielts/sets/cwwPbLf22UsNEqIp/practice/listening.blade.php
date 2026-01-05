@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'cwwPbLf22UsNEqIp',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'tc',
                    'tipe' => 'tc',
                    'title' => 'Table Completion',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 1.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.tc',
                ],
                [
                    'id' => 'map_labeling',
                    'tipe' => 'map_labeling',
                    'title' => 'Map Labeling',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 2.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.map_labeling',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 2.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.oc',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 2.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.two_choices',
                ],
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 3.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.note_completion',
                ],
                [
                    'id' => 'map_labeling2',
                    'tipe' => 'map_labeling',
                    'title' => 'Map Labeling 2',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 3.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.map_labeling2',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 4.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.summary_completion',
                ],
                [
                    'id' => 'map_labeling3',
                    'tipe' => 'map_labeling',
                    'title' => 'Map Labeling 3',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 4.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.map_labeling3',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 4.mp3'),
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
