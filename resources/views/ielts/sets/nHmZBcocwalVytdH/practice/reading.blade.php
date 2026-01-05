@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => 'nHmZBcocwalVytdH',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.reading.tfng',
                ],
                [
                    'id' => 'nc',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.reading.nc',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.reading.matching_information',
                ],
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.reading.summary_completion',
                ],
                [
                    'id' => 'mh',
                    'tipe' => 'mh',
                    'title' => 'Matching Headings',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.reading.mh',
                ],
                [
                    'id' => 'sentence_completion',
                    'tipe' => 'sentence_completion',
                    'title' => 'Sentence Completion',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.reading.sentence_completion',
                ],
                [
                    'id' => 'tfng2',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given 2',
                    'content' => 'partials.nHmZBcocwalVytdH.practice.reading.tfng2',
                ],
            ],
        ];
    @endphp
@endsection
