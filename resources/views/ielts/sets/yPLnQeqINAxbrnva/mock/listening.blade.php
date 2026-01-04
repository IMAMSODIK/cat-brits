@extends('layouts.ielts.mockListeningLayouts')

@section('content')
    @php
        $tabs = [
            'kategori' => 'listening',
            'id' => 'yPLnQeqINAxbrnva',
            'data' => [
                'part1' => [
                    'label' => 'Part 1',
                    'subtitle' => 'Listen and answer questions 1-10',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-1.mp3',
                    'tipe' => ['nc'],
                    'contents' => 'partials.yPLnQeqINAxbrnva.mock.listening.part1',
                ],
                'part2' => [
                    'label' => 'Part 2',
                    'subtitle' => 'Listen and answer questions 11-20',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-2.mp3',
                    'tipe' => ['oc', 'matching_information'],
                    'contents' => 'partials.yPLnQeqINAxbrnva.mock.listening.part2',
                ],
                'part3' => [
                    'label' => 'Part 3',
                    'subtitle' => 'Listen and answer questions 21-30',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-3.mp3',
                    'tipe' => ['two_choices', 'matching_information', 'oc'],
                    'contents' => 'partials.yPLnQeqINAxbrnva.mock.listening.part3',
                ],
                'part4' => [
                    'label' => 'Part 4',
                    'subtitle' => 'Listen and answer questions 31-40',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-4.mp3',
                    'tipe' => ['nc'],
                    'contents' => 'partials.yPLnQeqINAxbrnva.mock.listening.part4',
                ],
            ],
        ];
    @endphp
@endsection
