@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'DPCLyNHpDTqSciXd',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-1.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.note_completion',
                ],
                [
                    'id' => 'tc',
                    'tipe' => 'tc',
                    'title' => 'Table Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-1.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.tc',
                ],
                [
                    'id' => 'one_choice',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-2.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.one_choice',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-2.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.matching_information',
                ],
                [
                    'id' => 'two_choice',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-3.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.two_choice',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-3.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.matching_information2',
                ],
                [
                    'id' => 'one_choice2',
                    'tipe' => 'oc',
                    'title' => 'One Choice 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-3.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.one_choice2',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-17-academic-listening-2-audio-4.mp3',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
