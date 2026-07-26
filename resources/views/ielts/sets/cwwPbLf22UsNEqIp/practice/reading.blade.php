@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'cwwPbLf22UsNEqIp',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'namaTipe' => 'Summary Completion',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.summary_completion',
                ],
                [
                    'id' => 'matching_features',
                    'tipe' => 'matching_features',
                    'title' => 'Matching Features',
                    'namaTipe' => 'Matching Features',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.matching_features',
                ],
                [
                    'id' => 'sentence_completion',
                    'tipe' => 'sentence_completion',
                    'title' => 'Sentence Completion',
                    'namaTipe' => 'Sentence Completion',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.sentence_completion',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.oc',
                ],
                [
                    'id' => 'sa',
                    'tipe' => 'sa',
                    'title' => 'Short Answer',
                    'namaTipe' => 'Short Answer',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.sa',
                ],
                [
                    'id' => 'oc2',
                    'tipe' => 'oc',
                    'title' => 'One Choice 2',
                    'namaTipe' => 'One Choice',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.oc2',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'namaTipe' => 'Matching Information',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.matching_information',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'title' => 'Yes / No / Not Given',
                    'namaTipe' => 'Yes No Not Given',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.ynng',
                ],
                [
                    'id' => 'summary_completion2',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion 2',
                    'namaTipe' => 'Summary Completion',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.summary_completion2',
                ],
            ],
        ];
    @endphp
@endsection
