@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'NmeBcwURSR2ZPfdX',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-1.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.note_completion',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-2.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-2.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.two_choices2',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-2.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.matching_information',
                ],
                [
                    'id' => 'two_choices3',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 3',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-3.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.two_choices3',
                ],
                [
                    'id' => 'two_choices4',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 4',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-3.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.two_choices4',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-3.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.oc',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-16-academic-listening-3-audio-4.mp3',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
