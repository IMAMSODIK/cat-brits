@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => '0XIGAcSMlticROES',
            'kategori' => 'reading',
            'contents' => [
                // part 1
                [
                    'id' => 'nc',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.nc',
                ],
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True/False/Not Given',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.tfng',
                ],
                // part 2
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.matching_information',
                ],
                [
                    'id' => 'sc',
                    'tipe' => 'sc',
                    'title' => 'Sentence Completion',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.sc',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.two_choices2',
                ],
                // part 3
                [
                    'id' => 'summary_completion',
                    'tipe' => 'summary_completion',
                    'title' => 'Summary Completion',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.summary_completion',
                ],
                [
                    'id' => 'ynng',
                    'tipe' => 'ynng',
                    'title' => 'Yes/No/Not Given',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.ynng',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'content' => 'partials.0XIGAcSMlticROES.practice.reading.oc',
                ],
            ],
        ];
    @endphp
@endsection
