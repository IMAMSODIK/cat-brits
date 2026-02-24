@extends('layouts.ielts.readingLayouts')

@section('content')
    @php
        $tabs = [
            'id' => '5k29sSZyLQgQjLWX',
            'kategori' => 'reading',
            'contents' => [
                [
                    'id' => 'nc',
                    'tipe' => 'nc',
                    'title' => 'Note Completion',
                    'namaTipe' => 'Note Completion',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.nc',
                ],
                [
                    'id' => 'tfng',
                    'tipe' => 'tfng',
                    'title' => 'True False Not Given',
                    'namaTipe' => 'True/False/Not Given',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.tfng',
                ],
                [
                    'id' => 'matching_information',
                    'tipe' => 'matching_information',
                    'title' => 'Matching Information',
                    'namaTipe' => 'Matching Information',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.matching_information',
                ],
                [
                    'id' => 'tfng2',
                    'tipe' => 'tfng',
                    'title' => 'True False Not Given 2',
                    'namaTipe' => 'True/False/Not Given',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.tfng2',
                ],
                [
                    'id' => 'two_choices',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices',
                    'namaTipe' => 'Two Choices',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.two_choices',
                ],
                [
                    'id' => 'two_choices2',
                    'tipe' => 'two_choices',
                    'title' => 'Two Choices 2',
                    'namaTipe' => 'Two Choices',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.two_choices2',
                ],
                [
                    'id' => 'tfng3',
                    'tipe' => 'tfng',
                    'title' => 'True False Not Given 3',
                    'namaTipe' => 'True/False/Not Given',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.tfng3',
                ],
                [
                    'id' => 'nc2',
                    'tipe' => 'nc',
                    'title' => 'Note Completion 2',
                    'namaTipe' => 'Note Completion',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.nc2',
                ],
                [
                    'id' => 'oc',
                    'tipe' => 'oc',
                    'title' => 'One Choice',
                    'namaTipe' => 'One Choice',
                    'content' => 'partials.5k29sSZyLQgQjLWX.practice.reading.oc',
                ],
            ],
        ];
    @endphp
@endsection
