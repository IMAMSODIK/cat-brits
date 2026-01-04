@extends('layouts.ielts.mockListeningLayouts')
@section('content')
    @php
        $tabs = [
            'kategori' => 'listening',
            'id' => '2uSKN2WwOj6EYc1X',
            'data' => [
                'part1' => [
                    'label' => 'Part 1',
                    'subtitle' => 'Listen and answer questions 1-10',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 1.mp3'),
                    'tipe' => ['nc'],
                    'contents' => 'partials.2uSKN2WwOj6EYc1X.mock.listening.part1',
                ],
                'part2' => [
                    'label' => 'Part 2',
                    'subtitle' => 'Listen and answer questions 11-20',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 2.mp3'),
                    'tipe' => ['map_labeling', 'nc'],
                    'contents' => 'partials.2uSKN2WwOj6EYc1X.mock.listening.part2',
                ],
                'part3' => [
                    'label' => 'Part 3',
                    'subtitle' => 'Listen and answer questions 21-30',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 3.mp3'),
                    'tipe' => ['nc'],
                    'contents' => 'partials.2uSKN2WwOj6EYc1X.mock.listening.part3',
                ],
                'part4' => [
                    'label' => 'Part 4',
                    'subtitle' => 'Listen and answer questions 31-40',
                    'audioUri' => asset('own_assets/audio/AUDIO-PT-01/SECTION 4.mp3'),
                    'tipe' => ['map_labeling', 'summary_completion'],
                    'contents' => 'partials.2uSKN2WwOj6EYc1X.mock.listening.part4',
                ],
            ],
        ];
    @endphp
@endsection
