@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'KeCD0au8jSaBuT3A',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'sentence_completion',
                    'tipe' => 'sentence_completion',
                    'title' => 'Sentence Completion',
                    'namaTipe' => 'Sentence Completion',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.sentence_completion',
                ],
                [
                    'id' => 'tc',
                    'tipe' => 'tc',
                    'title' => 'Table Completion',
                    'namaTipe' => 'Table Completion',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.tc',
                ],
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given',
                    'namaTipe' => 'True/False/Not Given',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.tfng',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'namaTipe' => 'Matching Information',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.matching_information',
                ],
                [
                    'id' => 'matching_features',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features',
                    'namaTipe' => 'Matching Features',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.matching_features',
                ],
                [
                    'id' => 'sentence_completion2',
                    'tipe' => 'sentence_completion',
                    'title' => 'Sentence Completion 2',
                    'namaTipe' => 'Sentence Completion',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.sentence_completion2',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information 2',
                    'namaTipe' => 'Matching Information',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.matching_information2',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'namaTipe' => 'Summary Completion',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.summary_completion',
                ],
                [
                    'id' => 'matching_features2',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features 2',
                    'namaTipe' => 'Matching Features',
                    'content' => 'partials.KeCD0au8jSaBuT3A.practice.reading.matching_features2',
                ],
            ],
        ];
    @endphp
@endsection
