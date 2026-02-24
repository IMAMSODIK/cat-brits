@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'yPLnQeqINAxbrnva',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'namaTipe' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-1.mp3',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.listening.note_completion',
                ],
                [
                    'id' => 'one_choice',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-2.mp3',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.listening.one_choice',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'namaTipe' => 'Matching Information',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-2.mp3',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.listening.matching_information',
                ],
                [
                    'id' => 'two_choice',
                    'tipe' => 'two_choice',
                    'title' => 'Two Choice',
                    'namaTipe' => 'Two Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-3.mp3',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.listening.two_choice',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'namaTipe' => 'Matching Information',
                    'title' => 'Matching 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-3.mp3',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.listening.matching_information2',
                ],
                [
                    'id' => 'one_choice2',
                    'tipe' => 'oc',
                    'title' => 'One Choice 2',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-3.mp3',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.listening.one_choice2',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'namaTipe' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-4.mp3',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
