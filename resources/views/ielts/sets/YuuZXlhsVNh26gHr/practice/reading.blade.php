@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'YuuZXlhsVNh26gHr',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'namaTipe' => 'Matching Information',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.matching_information',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'title' => 'Yes/No/Not Given',
                    'namaTipe' => 'Yes/No/Not Given',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.ynng',
                ],
                [
                    'id' => 'matching_features',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features',
                    'namaTipe' => 'Matching Features',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.matching_features',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information 2',
                    'namaTipe' => 'Matching Information',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.matching_information2',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choice',
                    'namaTipe' => 'Two Choice',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.two_choice',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'namaTipe' => 'Summary Completion',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.summary_completion',
                ],
                [
                    'id' => 'matching_features2',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features 2',
                    'namaTipe' => 'Matching Features',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.matching_features2',
                ],
                [
                    'id' => 'ynng2',
                    'tipe' => 'ynng',
                    'title' => 'Yes/No/Not Given 2',
                    'namaTipe' => 'Yes/No/Not Given',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.ynng2',
                ],
                [
                    'id' => 'summary_completion2',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion 2',
                    'namaTipe' => 'Summary Completion',
                    'content' => 'partials.YuuZXlhsVNh26gHr.practice.reading.summary_completion2',
                ],
            ],
        ];
    @endphp
@endsection
