@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'blsodB9LLhUn0zcg',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given',
                    'namaTipe' => 'True/False/Not Given',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.tfng',
                ],
                [
                    'id' => 'tc',
                    'tipe' => 'tc',
                    'title' => 'Table Completion',
                    'namaTipe' => 'Table Completion',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.tc',
                ],
                [
                    'id' => 'mh',
                    'tipe' => 'mh',
                    'title' => 'Matching Headings',
                    'namaTipe' => 'Matching Headings',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.mh',
                ],
                [
                    'id' => 'nc',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'namaTipe' => 'Note Completion',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.nc',
                ],
                [
                    'id' => 'two_choice',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'namaTipe' => 'Two Choices',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.two_choice',
                ],
                [
                    'id' => 'one',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.one_choice',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'namaTipe' => 'Summary Completion',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.summary_completion',
                ],
                [
                    'id' => 'matching_features',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features',
                    'namaTipe' => 'Matching Features',
                    'content' => 'partials.blsodB9LLhUn0zcg.practice.reading.matching_features',
                ],
            ],
        ];
    @endphp
@endsection
