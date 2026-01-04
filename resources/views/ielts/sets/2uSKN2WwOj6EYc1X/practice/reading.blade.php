@extends('layouts.ielts.readingLayouts')
@section('content')
    @php
        $tabs = [
            'id' => '2uSKN2WwOj6EYc1X',
            'kategori' => 'reading',
            'contents' => [
                //part 1
                [
                    'id' => 'mh',
                    'tipe' => 'mh',
                    'title' => 'Matching Headings',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.mh',
                ],
                [
                    'id' => 'picture_completion',
                    'tipe' => 'picture_completion',
                    'title' => 'Picture Completion',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.picture_completion',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.matching_information',
                ],
                // part 2
                [
                    'id' => 'picture_completion2',
                    'tipe' => 'picture_completion',
                    'title' => 'Picture Completion 2',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.picture_completion2',
                ],
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.tfng',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.oc',
                ],
                // part 3
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information 2',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.matching_information2',
                ],
                [
                    'id' => 'matching_information3',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information 3',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.matching_information3',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.2uSKN2WwOj6EYc1X.practice.reading.summary_completion',
                ],
            ],
        ];
    @endphp
@endsection
