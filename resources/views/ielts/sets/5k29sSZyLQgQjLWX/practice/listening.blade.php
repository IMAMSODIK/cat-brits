@extends('layouts.ielts.listeningLayouts')

@section('content')
    @php
        $tabs = [
            'id' => '5k29sSZyLQgQjLWX',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-1.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.note_completion',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-1.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.matching_information',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-2.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.matching_information2',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-2.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-2.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.two_choices2',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-3.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.oc',
                ],
                [
                    'id' => 'matching_information3',
                    'tipe' => 'matching_information',
                    'title' => 'Matching 3',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-3.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.matching_information3',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-4-audio-4.mp3',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
