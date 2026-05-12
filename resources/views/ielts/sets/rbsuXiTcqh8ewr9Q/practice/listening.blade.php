@extends('layouts.ielts.listeningLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'rbsuXiTcqh8ewr9Q',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'namaTipe' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-1-audio-1.mp3',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.listening.note_completion',
                ],
                [
                    'id' => 'one_choice',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-1-audio-2.mp3',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.listening.one_choice',
                ],
                [
                    'id' => 'map_labeling',
                    'tipe' => 'map_labeling',
                    'title' => 'Map Labeling',
                    'namaTipe' => 'Map Labeling',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-1-audio-2.mp3',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.listening.map_labeling',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice',
                    'namaTipe' => 'Two Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.listening.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice 2',
                    'namaTipe' => 'Two Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.listening.two_choices2',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'namaTipe' => 'Matching Information',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.listening.matching_information',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'namaTipe' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-1-audio-4.mp3',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
