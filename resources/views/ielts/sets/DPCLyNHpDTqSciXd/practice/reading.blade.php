@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'DPCLyNHpDTqSciXd',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'nc',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'namaTipe' => 'Note Completion',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.nc',
                ],
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given',
                    'namaTipe' => 'True/False/Not Given',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.tfng',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'namaTipe' => 'Matching Information',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.matching_information',
                ],
                [
                    'id' => 'matching_features',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features',
                    'namaTipe' => 'Matching Features',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.matching_features',
                ],
                [
                    'id' => 'sentence_completion',
                    'tipe' => 'sentence_completion',
                    'title' => 'Sentence Completion',
                    'namaTipe' => 'Sentence Completion',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.sentence_completion',
                ],
                [
                    'id' => 'one_choice',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.one_choice',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'title' => 'Yes/No/Not Given',
                    'namaTipe' => 'Yes/No/Not Given',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.ynng',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'namaTipe' => 'Summary Completion',
                    'content' => 'partials.DPCLyNHpDTqSciXd.practice.reading.summary_completion',
                ],
            ],
        ];
    @endphp
@endsection
