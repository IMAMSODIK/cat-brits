@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'NmeBcwURSR2ZPfdX',
            'kategori' => 'reading',
            'contents' => [
                //part 1
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True False Not Given',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.tfng',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.summary_completion',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.matching_information',
                ],
                [
                    'id' => 'summary_completion2',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion 2',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.summary_completion2',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.two_choices2',
                ],
                [
                    'id' => 'tfng2',
                    'tipe' => 'tfng',
                    'title' => 'True False Not Given 2',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.tfng2',
                ],
                [
                    'id' => 'matching_information2',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information 2',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.matching_information2',
                ],
                [
                    'id' => 'sc',
                    'tipe' => 'sc',
                    'title' => 'Sentence Completion',
                    'content' => 'partials.NmeBcwURSR2ZPfdX.practice.reading.sentence_completion',
                ],
            ],
        ];
    @endphp
@endsection
