@extends('layouts.ielts.mockListeningLayouts')

@section('content')
    @php
        $tabs = [
            'kategori' => 'listening',
            'id' => 'KeCD0au8jSaBuT3A',
            'data' => [
                'part1' => [
                    'label' => 'Part 1',
                    'subtitle' => 'Listen and answer questions 1-10',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-1.mp3',
                    'tipe' => ['nc'],
                    'contents' => 'partials.KeCD0au8jSaBuT3A.mock.listening.part1',
                ],
                'part2' => [
                    'label' => 'Part 2',
                    'subtitle' => 'Listen and answer questions 11-20',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-2.mp3',
                    'tipe' => ['oc', 'two_choices', 'matching_information'],
                    'contents' => 'partials.KeCD0au8jSaBuT3A.mock.listening.part2',
                ],
                'part3' => [
                    'label' => 'Part 3',
                    'subtitle' => 'Listen and answer questions 21-30',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-3.mp3',
                    'tipe' => ['oc', 'two_choices', 'two_choices'],
                    'contents' => 'partials.KeCD0au8jSaBuT3A.mock.listening.part3',
                ],
                'part4' => [
                    'label' => 'Part 4',
                    'subtitle' => 'Listen and answer questions 31-40',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-4.mp3',
                    'tipe' => ['nc'],
                    'contents' => 'partials.KeCD0au8jSaBuT3A.mock.listening.part4',
                ],
            ],
        ];
    @endphp
@endsection
