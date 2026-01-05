@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'cwwPbLf22UsNEqIp',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.matching_information',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.summary_completion',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.two_choices2',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'title' => 'Yes No Not Given',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.ynng',
                ],
                [
                    'id' => 'summary_completion2',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion 2',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.summary_completion2',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.oc',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information 2',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.matching_information2',
                ],
                [
                    'id' => 'ynng2',
                    'tipe' => 'ynng',
                    'title' => 'Yes No Not Given 2',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.ynng2',
                ],
                [
                    'id' => 'summary_completion3',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion 3',
                    'content' => 'partials.cwwPbLf22UsNEqIp.practice.reading.summary_completion3',
                ],
            ],
        ];
    @endphp
@endsection
