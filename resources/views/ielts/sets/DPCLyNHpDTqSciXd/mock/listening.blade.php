@extends('layouts.ielts.mockListeningLayouts')

@section('content')
    @php
        $tabs = [
            'kategori' => 'listening',
            'id' => 'DPCLyNHpDTqSciXd',
            'data' => [
                'part1' => [
                    'label' => 'Part 1',
                    'subtitle' => 'Listen and answer questions 1-10',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-1.mp3',
                    'tipe' => ['nc', 'tc'],
                    'contents' => 'partials.DPCLyNHpDTqSciXd.mock.listening.part1',
                ],
                'part2' => [
                    'label' => 'Part 2',
                    'subtitle' => 'Listen and answer questions 11-20',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-2.mp3',
                    'tipe' => ['oc', 'matching_information'],
                    'contents' => 'partials.DPCLyNHpDTqSciXd.mock.listening.part2',
                ],
                'part3' => [
                    'label' => 'Part 3',
                    'subtitle' => 'Listen and answer questions 21-30',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-3.mp3',
                    'tipe' => ['two_choices', 'matching_information', 'oc'],
                    'contents' => 'partials.DPCLyNHpDTqSciXd.mock.listening.part3',
                ],
                'part4' => [
                    'label' => 'Part 4',
                    'subtitle' => 'Listen and answer questions 31-40',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-4.mp3',
                    'tipe' => ['nc'],
                    'contents' => 'partials.DPCLyNHpDTqSciXd.mock.listening.part4',
                ],
            ],
        ];
    @endphp
@endsection
