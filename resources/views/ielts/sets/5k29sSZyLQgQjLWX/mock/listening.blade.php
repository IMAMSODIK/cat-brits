@extends('layouts.ielts.mockListeningLayouts')
@section('content')
    @php
        $tabs = [
            'kategori' => 'listening',
            'id' => '5k29sSZyLQgQjLWX',
            'data' => [
                'part1' => [
                    'label' => 'Part 1',
                    'subtitle' => 'Listen and answer questions 1-10',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-1.mp3',
                    'tipe' => ['nc', 'matching_information'],
                    'contents' => 'partials.5k29sSZyLQgQjLWX.mock.listening.part1',
                ],
                'part2' => [
                    'label' => 'Part 2',
                    'subtitle' => 'Listen and answer questions 11-20',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-2.mp3',
                    'tipe' => ['matching_information', 'two_choices', 'two_choices'],
                    'contents' => 'partials.5k29sSZyLQgQjLWX.mock.listening.part2',
                ],
                'part3' => [
                    'label' => 'Part 3',
                    'subtitle' => 'Listen and answer questions 21-30',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-3.mp3',
                    'tipe' => ['oc', 'matching_information'],
                    'contents' => 'partials.5k29sSZyLQgQjLWX.mock.listening.part3',
                ],
                'part4' => [
                    'label' => 'Part 4',
                    'subtitle' => 'Listen and answer questions 31-40',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-4.mp3',
                    'tipe' => ['nc'],
                    'contents' => 'partials.5k29sSZyLQgQjLWX.mock.listening.part4',
                ],
            ],
        ];
    @endphp
@endsection
