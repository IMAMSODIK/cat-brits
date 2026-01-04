@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'yPLnQeqINAxbrnva',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.matching_information',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.summary_completion',
                ],
                [
                    'id' => 'two_choice',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.two_choice',
                ],
                [
                    'id' => 'two_choice2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice 2',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.two_choice2',
                ],
                [
                    'id' => 'one',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.one_choice',
                ],
                [
                    'id' => 'matching_features',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.matching_features',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'title' => 'Yes/No/Not Given',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.ynng',
                ],
                [
                    'id' => 'ynng2',
                    'tipe' => 'ynng',
                    'title' => 'Yes/No/Not Given 2',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.ynng2',
                ],
                [
                    'id' => 'summary_completion2',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion 2',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.summary_completion2',
                ],
                [
                    'id' => 'one2',
                    'tipe' => 'oc',
                    'title' => 'One Choice 2',
                    'content' => 'partials.yPLnQeqINAxbrnva.practice.reading.one2',
                ],
            ],
        ];
    @endphp
@endsection
