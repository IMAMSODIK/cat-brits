@extends('layouts.ielts.mockListeningLayouts')

@section('content')
    @php
        $tabs = [
            'kategori' => 'listening',
            'id' => 'cwwPbLf22UsNEqIp',
            'data' => [
                'part1' => [
                    'label' => 'Part 1',
                    'subtitle' => 'Listen and answer questions 1-10',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 1.mp3'),
                    'tipe' => ['tc'],
                    'contents' => 'partials.cwwPbLf22UsNEqIp.mock.listening.part1',
                ],
                'part2' => [
                    'label' => 'Part 2',
                    'subtitle' => 'Listen and answer questions 11-20',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 2.mp3'),
                    'tipe' => ['map_labeling', 'oc', 'two_choices'],
                    'contents' => 'partials.cwwPbLf22UsNEqIp.mock.listening.part2',
                ],
                'part3' => [
                    'label' => 'Part 3',
                    'subtitle' => 'Listen and answer questions 21-30',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 3.mp3'),
                    'tipe' => ['nc', 'map_labeling'],
                    'contents' => 'partials.cwwPbLf22UsNEqIp.mock.listening.part3',
                ],
                'part4' => [
                    'label' => 'Part 4',
                    'subtitle' => 'Listen and answer questions 31-40',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-02/SECTION 4.mp3'),
                    'tipe' => ['summary_completion', 'map_labeling', 'nc'],
                    'contents' => 'partials.cwwPbLf22UsNEqIp.mock.listening.part4',
                ],
            ],
        ];
    @endphp
@endsection
