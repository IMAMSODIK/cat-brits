@extends('layouts.ielts.listeningLayouts')
@section('content')
    @php
        $tabs = [
            'id' => '0XIGAcSMlticROES',
            'kategori' => 'listening',
            'contents' => [
                [
                    'id' => 'form_completion',
                    'tipe' => 'form_completion',
                    'title' => 'Form Completion',
                    'namaTipe' => 'Form Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-1.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.form_completion',
                ],
                [
                    'id' => 'table_completion',
                    'tipe' => 'table_completion',
                    'title' => 'Table Completion',
                    'namaTipe' => 'Table Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-1.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.table_completion',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-2.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.oc',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'namaTipe' => 'Two Choices',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-2.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'namaTipe' => 'Two Choices',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-2.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.two_choices2',
                ],
                [
                    'id' => 'oc2',
                    'tipe' => 'oc',
                    'title' => 'One Choice 2',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-3.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.oc2',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching',
                    'namaTipe' => 'Matching Information',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2023/08/cambridge-ielts-18-academic-listening-4-audio-3.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.matching_information',
                ],
                [
                    'id' => 'oc3',
                    'tipe' => 'oc',
                    'title' => 'One Choice 3',
                    'namaTipe' => 'One Choice',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-3.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.oc3',
                ],
                [
                    'id' => 'note_completion',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'namaTipe' => 'Note Completion',
                    'audioUri' =>
                        'https://engnovate.com/wp-content/uploads/2024/08/cambridge-ielts-19-academic-listening-2-audio-4.mp3',
                    'content' => 'partials.0XIGAcSMlticROES.practice.listening.note_completion',
                ],
            ],
        ];
    @endphp
@endsection
