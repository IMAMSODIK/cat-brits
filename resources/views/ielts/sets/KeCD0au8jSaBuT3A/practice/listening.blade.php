@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'KeCD0au8jSaBuT3A',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-1.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.note_completion',
                ],
                [
                    'id' => 'one_choice',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-2.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.one_choice',
                ],
                [
                    'id' => 'two_choice',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-2.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.two_choice',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-2.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.matching_information',
                ],
                [
                    'id' => 'one_choice2',
                    'tipe' => 'oc',
                    'title' => 'One Choice 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.one_choice2',
                ],
                [
                    'id' => 'two_choice2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.two_choice2',
                ],
                [
                    'id' => 'two_choice3',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice 3',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.two_choice3',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-1-audio-4.mp3',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
