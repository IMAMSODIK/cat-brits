@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'YuuZXlhsVNh26gHr',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-3-audio-1.mp3',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.listening.note_completion',
                ],
                [
                    'id' => 'two_choice',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-3-audio-2.mp3',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.listening.two_choice',
                ],
                [
                    'id' => 'two_choice2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-3-audio-2.mp3',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.listening.two_choice2',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-3-audio-2.mp3',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.listening.matching_information',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-3-audio-3.mp3',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.listening.note_completion2',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching 2',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-3-audio-3.mp3',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.listening.matching_information2',
                ],
                [
                    'id' => 'note_completion3',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 3',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-3-audio-4.mp3',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.listening.note_completion3',
                ],
            ],
        ];
    @endphp
@endsection
