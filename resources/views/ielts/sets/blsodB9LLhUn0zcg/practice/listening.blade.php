@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'blsodB9LLhUn0zcg',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-1-audio-1.mp3',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.listening.note_completion',
                ],
                [
                    'id' => 'one_choice',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-1-audio-2.mp3',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.listening.one_choice',
                ],
                [
                    'id' => 'map_labeling',
                    'tipe' => 'map_labeling',
                    'title' => 'Map Labeling',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-1-audio-2.mp3',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.listening.map_labeling',
                ],
                [
                    'id' => 'two_choice',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.listening.two_choice',
                ],
                [
                    'id' => 'two_choice2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.listening.two_choice2',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-1-audio-3.mp3',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.listening.matching_information',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-1-audio-4.mp3',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
