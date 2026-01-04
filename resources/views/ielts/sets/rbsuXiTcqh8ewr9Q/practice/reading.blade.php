@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'rbsuXiTcqh8ewr9Q',
            'kategori' => 'reading',
            'contents' => [
                // part 1
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.tfng',
                ],
                [
                    'id' => 'nc',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.nc',
                ],
                // part 2
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.matching_information',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.two_choice',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.two_choice2',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.summary_completion',
                ],
                // part 3
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.oc',
                ],
                [
                    'id' => 'summary_completion2',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion 2',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.summary_completion2',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'title' => 'Yes/No/Not Given',
                    'content' => 'partials.rbsuXiTcqh8ewr9Q.practice.reading.ynng',
                ],
            ],
        ];
    @endphp
@endsection
