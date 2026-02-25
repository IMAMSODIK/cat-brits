@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => 'nHmZBcocwalVytdH',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'namaTipe' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-2-audio-1.mp3',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.listening.note_completion',
                ],
                [
                    'id' => 'one_choice',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-2-audio-2.mp3',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.listening.one_choice',
                ],
                [
                    'id' => 'plan_labeling',
                    'tipe' => 'plan_labeling',
                    'title' => 'Plan Labeling',
                    'namaTipe' => 'Plan Labeling',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-2-audio-2.mp3',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.listening.plan_labeling',
                ],
                [
                    'id' => 'one_choice2',
                    'tipe' => 'oc',
                    'title' => 'One Choice 2',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-2-audio-3.mp3',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.listening.one_choice2',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'namaTipe' => 'Matching Information',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-2-audio-3.mp3',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.listening.matching_information',
                ],
                [
                    'id' => 'note_completion2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'namaTipe' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/07/cambridge-ielts-14-academic-listening-2-audio-4.mp3',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.listening.note_completion2',
                ],
            ],
        ];
    @endphp
@endsection
