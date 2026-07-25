@extends('layouts.ielts.readingLayouts')
@section('content')
    @php
        $tabs = [
            'id' => '2uSKN2WwOj6EYc1X',
            'kategori' => 'reading',
            'contents' => [
                // part 1
                [
                    'id' => 'mh',
                    'tipe' => 'mh',
                    'namaTipe' => 'Matching Headings',
                    'title' => 'Matching Headings',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.mh',
                ],
                [
                    'id' => 'picture_completion',
                    'tipe' => 'picture_completion',
                    'namaTipe' => 'Picture Completion',
                    'title' => 'Picture Completion',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.picture_completion',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'namaTipe' => 'Matching Information',
                    'title' => 'Matching Information',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.matching_information',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'namaTipe' => 'Matching Information',
                    'title' => 'Matching Information 2',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.matching_information2',
                ],
                [
                    'id' => 'matching_information3',
                    'tipe' => 'matching_information',
                    'namaTipe' => 'Matching Information',
                    'title' => 'Matching Information 3',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.matching_information3',
                ],
                [
                    'id' => 'sentence_completion',
                    'tipe' => 'sentence_completion',
                    'title' => 'Sentence Completion',
                    'namaTipe' => 'Sentence Completion',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.sentence_completion',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'namaTipe' => 'Yes/No/Not Given',
                    'title' => 'Yes/No/Not Given',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.ynng',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'namaTipe' => 'One Choice',
                    'title' => 'One Choice',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.oc',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'namaTipe' => 'Summary Completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.summary_completion',
                ],
            ],
        ];
    @endphp
@endsection
