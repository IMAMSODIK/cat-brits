@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">

    {{-- modal assessment speaking --}}
    <style>
        #assessmentModal .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        #assessmentModal .modal-header {
            background: linear-gradient(135deg, #3a8ffe 0%, #1e5cb3 100%);
            color: white;
            border-bottom: none;
            position: relative;
        }

        #assessmentModal .modal-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 5%;
            width: 90%;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        #assessmentModal .modal-title {
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #assessmentModal .modal-title::before {
            content: '🎯';
            font-size: 1.3rem;
        }

        #assessmentModal .btn-close {
            color: red;
            transition: all 0.3s ease;
        }

        /* #assessmentModal .btn-close:hover {
                                                        background: rgba(255, 255, 255, 0.3);
                                                        opacity: 1;
                                                        transform: rotate(90deg);
                                                    } */

        /* Video Player Styling */
        #assessmentModal #modalVideoPlayer {
            border-radius: 12px;
            background: #000;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            transition: transform 0.3s ease;
        }

        #assessmentModal #modalVideoPlayer:hover {
            transform: scale(1.005);
        }

        /* Section Headers */
        #assessmentModal h5 {
            color: #2c3e50;
            font-weight: 700;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f5ff;
            position: relative;
        }

        #assessmentModal h5::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, #3a8ffe, #5a9cff);
            border-radius: 2px;
        }

        /* Assessment Categories */
        #assessmentModal hr {
            margin: 30px 0;
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, #e0e6ff, transparent);
        }

        /* Checkbox Styling */
        #assessmentModal .row {
            margin-bottom: 15px;
        }

        #assessmentModal .col-3,
        #assessmentModal .col-4 {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        #assessmentModal input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #3a8ffe;
            position: relative;
            transition: all 0.2s ease;
        }

        #assessmentModal input[type="checkbox"]:hover {
            transform: scale(1.1);
        }

        #assessmentModal input[type="checkbox"]:checked {
            box-shadow: 0 0 0 2px rgba(58, 143, 254, 0.2);
        }

        #assessmentModal label {
            cursor: pointer;
            font-weight: 500;
            color: #4a5568;
            transition: color 0.3s ease;
        }

        #assessmentModal label:hover {
            color: #2c3e50;
        }

        /* Band Input Styling */
        #assessmentModal .col-3:has(input[name$="_band"]),
        #assessmentModal .col-4:has(input[name$="_band"]) {
            background: #f8fbff;
            padding: 15px;
            border-radius: 10px;
            border-left: 4px solid #3a8ffe;
            margin-top: 10px;
        }

        #assessmentModal .col-3:has(input[name$="_band"])>*,
        #assessmentModal .col-4:has(input[name$="_band"])>* {
            margin-bottom: 0;
        }

        #assessmentModal input[name$="_band"] {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 12px;
            font-weight: 600;
            color: #2c3e50;
            transition: all 0.3s ease;
            max-width: 100px;
        }

        #assessmentModal input[name$="_band"]:focus {
            border-color: #3a8ffe;
            box-shadow: 0 0 0 3px rgba(58, 143, 254, 0.1);
            outline: none;
        }

        /* Remark Textarea */
        #assessmentModal textarea {
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            padding: 15px;
            font-size: 14px;
            resize: vertical;
            transition: all 0.3s ease;
            background: #f8fbff;
        }

        #assessmentModal textarea:focus {
            border-color: #3a8ffe;
            box-shadow: 0 0 0 3px rgba(58, 143, 254, 0.1);
            outline: none;
            background: white;
        }

        /* Modal Footer */
        #assessmentModal .modal-footer {
            background: #f8fbff;
            border-top: 1px solid #e0e6ff;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        /* Save Button */
        #assessmentModal #saveAssessmentBtn {
            background: linear-gradient(135deg, #00b894 0%, #00a085 100%);
            border: none;
            border-radius: 8px;
            /* padding: 12px 30px; */
            font-weight: 600;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 184, 148, 0.3);
        }

        #assessmentModal #saveAssessmentBtn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 184, 148, 0.4);
        }

        #assessmentModal #saveAssessmentBtn::before {
            content: '💾';
            font-size: 1.1rem;
        }

        /* Modal Body */
        #assessmentModal .modal-body {
            padding: 30px;
            max-height: 70vh;
            overflow-y: auto;
        }

        /* Scrollbar Styling */
        #assessmentModal .modal-body::-webkit-scrollbar {
            width: 8px;
        }

        #assessmentModal .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        #assessmentModal .modal-body::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3a8ffe 0%, #1e5cb3 100%);
            border-radius: 4px;
        }

        #assessmentModal .modal-body::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2c7de8 0%, #1650a8 100%);
        }

        /* Animation for Modal */
        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #assessmentModal .modal-content {
            animation: modalSlideIn 0.3s ease-out;
        }

        /* Category Icons */
        #assessmentModal h5:nth-child(1)::before {
            content: '🎯 ';
        }

        /* Fluency */
        #assessmentModal h5:nth-child(3)::before {
            content: '📚 ';
        }

        /* Lexical */
        #assessmentModal h5:nth-child(5)::before {
            content: '⚙️ ';
        }

        /* Grammar */
        #assessmentModal h5:nth-child(7)::before {
            content: '🎤 ';
        }

        /* Pronunciation */
        #assessmentModal h5:nth-child(9)::before {
            content: '💬 ';
        }

        /* Remark */

        /* Responsive Design */
        @media (max-width: 768px) {

            #assessmentModal .col-3,
            #assessmentModal .col-4 {
                width: 50%;
            }

            #assessmentModal .modal-dialog {
                margin: 10px;
            }

            #assessmentModal .modal-body {
                padding: 20px;
            }

            #assessmentModal input[name$="_band"] {
                max-width: 100%;
            }
        }

        @media (max-width: 576px) {

            #assessmentModal .col-3,
            #assessmentModal .col-4 {
                width: 100%;
            }

            #assessmentModal .modal-header {
                padding: 15px 20px;
            }

            #assessmentModal .modal-footer {
                flex-direction: column;
            }

            #assessmentModal #saveAssessmentBtn {
                width: 100%;
                justify-content: center;
            }
        }

        /* Checkbox Labels with Icons */
        #assessmentModal .col-3:nth-child(1)::before,
        #assessmentModal .col-4:nth-child(1)::before {
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            margin-right: 5px;
        }

        /* Tooltip for Inputs */
        #assessmentModal input[name$="_band"] {
            position: relative;
        }

        #assessmentModal input[name$="_band"]::after {
            content: attr(title);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #333;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
        }

        #assessmentModal input[name$="_band"]:hover::after {
            opacity: 1;
        }

        /* Card-like Effect for Sections */
        #assessmentModal .row.mb-3 {
            background: #f8fbff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            border: 1px solid #e0e6ff;
        }
    </style>

    {{-- modal assesment writing --}}
    <style>
        /* Writing Assessment Modal Custom Styles */
        #writingAssessmentModal .modal-dialog {
            max-width: 800px;
        }

        /* Mode checklist (Cambridge 10 Test 1) lebih lebar */
        #writingAssessmentModal .modal-dialog.modal-xl {
            max-width: 1320px;
            width: calc(100% - 40px);
        }

        #writingAssessmentModal .modal-content {
            border-radius: 18px;
            border: none;
            box-shadow: 0 12px 45px rgba(0, 0, 0, 0.18);
            overflow: hidden;
            background: linear-gradient(145deg, #ffffff 0%, #f7fafd 100%);
        }

        /* Header Styling */
        #writingAssessmentModal .modal-header {
            background: #4274B9;
            color: white;
            border-bottom: none;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #writingAssessmentModal .modal-title {
            font-weight: 800;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: 0.5px;
        }

        #writingAssessmentModal .modal-title::before {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f14b";
            font-size: 1.6rem;
        }

        /* Body Styling */
        #writingAssessmentModal .modal-body {
            padding: 30px;
            max-height: 72vh;
            overflow-y: auto;
            background: #ffffff;
        }

        /* Student Answer Box */
        #writingAssessmentModal #writingAnswerBox,
        #writingAssessmentModal #wcAnswerBox,
        #writingAssessmentModal #wcQuestionBox {
            background: linear-gradient(145deg, #f8fafd 0%, #ffffff 100%);
            border: 2px solid #dde7f4;
            border-radius: 12px;
            padding: 20px;
            font-size: 15px;
            line-height: 1.7;
            color: #2c3e50;
            box-shadow:
                inset 0 2px 10px rgba(0, 0, 0, 0.03),
                0 3px 15px rgba(66, 116, 185, 0.06);
            position: relative;
        }

        /* Section Titles */
        #writingAssessmentModal h6 {
            color: #34495e;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        #writingAssessmentModal #writingChecklistWrap h6::before {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f303";
            font-size: 1rem;
            color: #4274B9;
        }

        #writingAssessmentModal #writingLegacyWrap h6::before {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f303";
            font-size: 1.2rem;
            color: #4274B9;
        }

        /* Form Styling */
        #writingAssessmentForm {
            margin-top: 25px;
        }

        #writingAssessmentModal label {
            display: flex;
            font-weight: 700;
            color: #4a5568;
            margin-bottom: 10px;
            font-size: 15px;
            align-items: center;
            gap: 8px;
        }

        /* Band Score Inputs */
        #writingAssessmentModal input[type="number"] {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
            background: white;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        #writingAssessmentModal input[type="number"]:focus {
            border-color: #4274B9;
            box-shadow:
                0 0 0 4px rgba(66, 116, 185, 0.15),
                0 4px 12px rgba(66, 116, 185, 0.1);
            outline: none;
        }

        /* Feedback Textarea */
        #writingAssessmentModal textarea {
            width: 100%;
            padding: 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 15px;
            line-height: 1.6;
            color: #2c3e50;
            background: white;
            resize: vertical;
            min-height: 120px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        #writingAssessmentModal #writingChecklistForm textarea {
            min-height: auto;
        }

        #writingAssessmentModal textarea:focus {
            border-color: #4274B9;
            box-shadow:
                0 0 0 4px rgba(66, 116, 185, 0.15),
                0 4px 15px rgba(66, 116, 185, 0.1);
            outline: none;
        }

        #writingAssessmentModal textarea::placeholder {
            color: #a0aec0;
            font-style: italic;
        }

        /* Modal Footer */
        #writingAssessmentModal .modal-footer {
            background: linear-gradient(145deg, #f7fafd 0%, #ffffff 100%);
            padding: 20px 30px;
            border-top: 1px solid #dde7f4;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        /* Save Button */
        #writingAssessmentModal #saveWritingAssessmentBtn {
            background: #4274B9;
            border: none;
            border-radius: 12px;
            padding: 14px 35px;
            font-weight: 700;
            font-size: 16px;
            color: white;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            box-shadow:
                0 6px 20px rgba(66, 116, 185, 0.3),
                0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #writingAssessmentModal #saveWritingAssessmentBtn:hover {
            background: #35609b;
            box-shadow:
                0 10px 25px rgba(66, 116, 185, 0.4),
                0 4px 8px rgba(0, 0, 0, 0.15);
        }

        #writingAssessmentModal #saveWritingAssessmentBtn::after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f0c7";
            font-size: 1.1rem;
        }

        #writingAssessmentModal #saveWritingAssessmentBtn.is-loading::after {
            content: none;
        }

        #writingAssessmentModal #writingSaveProgress {
            min-width: 220px;
        }

        #writingAssessmentModal #writingSaveProgress .progress {
            height: 6px;
            background: #e5edf7;
        }

        #writingAssessmentModal #writingSaveProgress .progress-bar {
            width: 45%;
            background: #4274B9;
            animation: writingSaveProgress 1.1s ease-in-out infinite;
        }

        @keyframes writingSaveProgress {
            0% { transform: translateX(-110%); }
            100% { transform: translateX(240%); }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #writingAssessmentModal .modal-content {
            animation: fadeInUp 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Checklist section (criterion cards) */
        #writingAssessmentModal #writingChecklistWrap .border.rounded {
            border-color: #dde7f4 !important;
            border-radius: 12px !important;
            overflow: hidden;
        }

        #writingAssessmentModal #writingChecklistWrap .bg-light {
            background: #eef4fb !important;
            color: #2c3e50;
        }

        #writingAssessmentModal #writingChecklistWrap .wc-check {
            cursor: pointer;
        }

        #writingAssessmentModal #writingChecklistWrap .wc-band {
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-weight: 600;
        }

        #writingAssessmentModal #writingChecklistWrap .wc-band:focus {
            border-color: #4274B9;
            box-shadow: 0 0 0 4px rgba(66, 116, 185, 0.15);
            outline: none;
        }

        /* Info cards & overall panel */
        #writingAssessmentModal #writingChecklistWrap .text-muted.small {
            color: #6b7a90 !important;
        }

        #writingAssessmentModal #writingChecklistWrap .badge.bg-secondary {
            background: #4274B9 !important;
        }

        /* Score Validation */
        #writingAssessmentModal input[type="number"]:invalid {
            border-color: #ff6b6b;
            background: linear-gradient(145deg, #fff5f5 0%, #ffffff 100%);
        }

        #writingAssessmentModal input[type="number"]:valid {
            border-color: #4274B9;
        }

        /* Section Divider */
        #writingAssessmentModal hr {
            margin: 30px 0;
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, #4274B9, transparent);
            opacity: 0.3;
        }

        /* Highlight Student Answer */
        #writingAssessmentModal #wcAnswerBox,
        #writingAssessmentModal #wcAnswerBox * {
            cursor: default !important;
            -webkit-user-select: text !important;
            -moz-user-select: text !important;
            user-select: text !important;
        }

        #writingAssessmentModal #wcAnswerBox {
            color: #212529 !important;
            caret-color: #212529 !important;
        }

        #writingAssessmentModal #wcAnswerBox .wc-hl {
            border-radius: 2px;
            padding: 0 1px;
        }

        #writingAssessmentModal #wcAnswerBox .wc-note {
            background: #fff3c4;
            border-bottom: 2px dotted #e6a817;
            border-radius: 2px;
            padding: 0 1px;
            cursor: pointer !important;
        }

        #writingAssessmentModal #wcAnswerBox .wc-note::after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f27a";
            font-size: 0.7em;
            color: #b3860a;
            margin-left: 3px;
            vertical-align: super;
        }

        #writingAssessmentModal #wcHlToolbar {
            position: absolute;
            z-index: 1060;
            display: flex;
            align-items: center;
            gap: 6px;
            background: #ffffff;
            border: 1px solid #dde7f4;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(66, 116, 185, 0.25);
            padding: 6px 10px;
        }

        #writingAssessmentModal #wcHlToolbar .wc-hl-btn {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            box-shadow: 0 0 0 1px #c9d6e8;
            cursor: pointer;
            padding: 0;
        }

        #writingAssessmentModal #wcHlToolbar .wc-hl-btn:hover {
            transform: scale(1.15);
        }

        #writingAssessmentModal #wcHlToolbar .wc-hl-eraser,
        #writingAssessmentModal #wcHlToolbar .wc-hl-note {
            border: none;
            background: transparent;
            color: #4274B9;
            cursor: pointer;
            font-size: 15px;
            padding: 0 2px;
        }

        #writingAssessmentModal #wcHlToolbar .wc-hl-eraser:hover,
        #writingAssessmentModal #wcHlToolbar .wc-hl-note:hover {
            color: #35609b;
        }

        /* SweetAlert comment dialog must stay inside the writing modal */
        #writingAssessmentModal > .swal2-container {
            z-index: 2000;
            box-sizing: border-box;
            padding: 1rem;
        }

        #writingAssessmentModal > .swal2-container .swal2-popup {
            width: 32em;
            max-width: calc(100% - 2rem);
            box-sizing: border-box;
        }

        #writingAssessmentModal > .swal2-container .swal2-textarea {
            display: block;
            width: 90%;
            max-width: 90%;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            resize: vertical;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #writingAssessmentModal .modal-dialog,
            #writingAssessmentModal .modal-dialog.modal-xl {
                margin: 15px;
                max-width: calc(100% - 30px);
                width: auto;
            }

            #writingAssessmentModal .modal-header {
                padding: 20px 25px;
            }

            #writingAssessmentModal .modal-body {
                padding: 25px 20px;
            }

            #writingAssessmentModal .modal-footer {
                padding: 15px 20px;
                flex-direction: column;
            }

            #writingAssessmentModal #saveWritingAssessmentBtn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    {{-- mobile version video call --}}
    <style>
        <style>

        /* Hide card layout by default (desktop) */
        .mobile-card {
            display: none;
        }

        /* Mobile behavior */
        @media (max-width: 768px) {
            .desktop-table {
                display: none !important;
            }

            .mobile-card {
                display: block;
            }

            .mobile-card .card {
                border: 1px solid #e5e5e5;
                margin-bottom: 12px;
            }

            .mobile-card .card-body strong {
                color: #444;
            }
        }
    </style>

    {{-- style modal --}}
    <style>
        .modal-content {
            border: none;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background: linear-gradient(135deg, #4361ee, #3f37c9);
            border-bottom: none;
            padding: 20px 25px;
        }

        .modal-title {
            color: white;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .modal-body {
            padding: 25px;
        }

        .modal-footer {
            border-top: 1px solid #e9ecef;
            padding: 20px 25px;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-2">
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-3">
                <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
    </div>

    <div class="row mt-2">
        <div class="col-12">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <h2 class="f-w-600">Task Correction</h2>
                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-light f-w-500 f-14">Manage speaking corrections, essay corrections, and student
                                live test requests</span>

                        </div>
                        <div class="product-sub bg-primary-light">
                            <svg class="invoice-icon">
                                <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#color-swatch') }}"></use>
                            </svg>
                        </div>
                    </div>
                    <ul class="bubbles">
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <span class="f-light f-w-500 f-14">Speaking Video Awaiting Review</span>

                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-w-600" id="video-pending-widget">{{ $video_pending_count }}</h2>
                        </div>

                        <div class="product-sub bg-primary-light">
                            <i class="fas fa-video text-primary"></i>
                        </div>
                    </div>

                    <ul class="bubbles">
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <span class="f-light f-w-500 f-14">Essay Awaiting Review</span>

                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-w-600">{{ $writing_request->count() }}</h2>
                        </div>

                        <div class="product-sub bg-primary-light">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                    </div>

                    <ul class="bubbles">
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Speaking Test Requests</h4>
                        <p class="f-m-light mt-1">
                            A list of students who submitted speaking tests.
                        </p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <a href="{{ route('test-correction.submissions', ['kategori' => 'speaking']) }}"
                            class="btn btn-sm btn-outline-primary">
                            View All <i class="fa fa-arrow-right ms-1"></i>
                        </a>
                    <span class="badge bg-danger text-white" id="video-pending-badge">
                        {{ $video_pending_count }} pending
                    </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content">

                            @forelse ($video_request as $v)
                                <div class="list-group-item list-group-item-action list-hover-primary btn-review-speaking"
                                    style="cursor: pointer" data-id="{{ $v->id }}"
                                    data-video="{{ asset('storage/recordings/' . $v->video) }}"
                                     data-student="{{ optional($v->student)->name ?? 'Unknown Student' }}">
                                    <div class="row">
                                        <div class="col-5 d-flex align-items-center">
                                            <video width="100%" controls class="preview-video"
                                                data-duration-target="duration-{{ $v->id }}">
                                                <source src="{{ asset('storage/recordings/' . $v->video) }}"
                                                    type="video/webm">
                                            </video>
                                        </div>

                                        <div class="col-7">
                                            <div class="list-content">
                                                 <h6 class="mb-1 d-flex align-items-center gap-2 flex-wrap">
                                                     {{ optional($v->student)->name ?? 'Unknown Student' }}
                                                     @if ($v->teacher_id)
                                                         <span class="badge bg-success">
                                                             <i class="fa fa-check"></i> Reviewed
                                                             @if ($v->teacher) — {{ $v->teacher->name }} @endif
                                                         </span>
                                                     @else
                                                         <span class="badge bg-warning text-dark">Not Reviewed</span>
                                                     @endif
                                                 </h6>

                                                <p class="mb-1 text-muted" style="font-size:13px;">
                                                    <i class="fa fa-calendar"></i> {{ $v->created_at->format('Y-m-d') }}
                                                    &nbsp; • &nbsp;
                                                    <i class="fa fa-clock"></i>
                                                    <span id="duration-{{ $v->id }}">Loading…</span>
                                                </p>
                                                <p class="text-dark" style="font-size: 13px;">
                                                    @if ($v->setSoal)
                                                        <b>{{ $v->setSoal->name }}</b><br>
                                                        Topic: {{ $v->setSoal->thumbnail }} <br>
                                                    @endif
                                                    <small class="text-primary">Part {{ $v->part_soal }} &nbsp; • &nbsp;
                                                        Number {{ $v->no_soal }}</small>
                                                </p>

                                                <button class="btn btn-sm btn-primary mt-2">
                                                    <i class="fas fa-play-circle"></i> Review and Correct
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-muted py-3">
                                    No writing submissions found.
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Writing Test Requests</h4>
                        <p class="f-m-light mt-1">
                            A list of students who submitted writing tests.
                        </p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <a href="{{ route('test-correction.submissions', ['kategori' => 'writing']) }}"
                            class="btn btn-sm btn-outline-primary">
                            View All <i class="fa fa-arrow-right ms-1"></i>
                        </a>
                    <span class="badge bg-danger text-white" id="writing-pending-badge">
                        {{ $writing_pending_count }} pending
                    </span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content">

                            @forelse ($writing_request as $w)
                                <div style="cursor: pointer" data-id="{{ $w->id }}"
                                    class="list-group-item list-group-item-action list-hover-primary btn-review-writing">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="list-content">

                                <!-- STUDENT NAME + STATUS -->
                                <h6 class="mb-1 d-flex align-items-center gap-2">
                                    {{ $w->student->name ?? 'Unknown Student' }}
                                    @if ($w->teacher_id)
                                        <span class="badge bg-success">
                                            <i class="fa fa-check"></i> Reviewed
                                            @if ($w->teacher) — {{ $w->teacher->name }} @endif
                                        </span>
                                    @else
                                        <span class="badge bg-warning text-dark">Not Reviewed</span>
                                    @endif
                                </h6>

                                                <!-- DATE + WORD COUNT -->
                                                <p class="mb-1 text-muted" style="font-size: 13px;">
                                                    <i class="fa fa-calendar"></i>
                                                    {{ $w->created_at->format('Y-m-d') }}

                                                    &nbsp; • &nbsp;

                                                    <i class="fa fa-clock"></i>
                                                    {{ str_word_count($w->answer) }} words
                                                </p>

                                                <!-- TOPIC -->
                                                <p class="text-dark" style="font-size: 13px;">
                                                    <b>{{ $w->setSoal->name }}</b><br>
                                                    Topic: {{ $w->setSoal->thumbnail }} <br>
                                                    <small class="text-primary">{{ $w->task }} &nbsp; • &nbsp; {{ ($w->tipe == 'mock') ? "Mock Test" : "Practice" }}</small>
                                                </p>

                                                <!-- BUTTON -->
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                    Review & Correct Writing
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-muted py-3">
                                    No writing submissions found.
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <span class="f-light f-w-500 f-14">Request Video Call Live Test</span>

                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-w-600">{{ $pendingSessions->count() }}</h2>
                        </div>

                        <div class="product-sub bg-primary-light">
                            <i class="fas fa-phone-alt text-primary"></i>
                        </div>
                    </div>

                    <ul class="bubbles">
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6">
            <div class="card o-hidden small-widget">
                <div class="card-body total-project border-b-primary border-2">
                    <span class="f-light f-w-500 f-14">Upcoming Sessions</span>

                    <div class="project-details">
                        <div class="project-counter">
                            <h2 class="f-w-600">{{ $upcomingSessions->count() }}</h2>
                        </div>

                        <div class="product-sub bg-primary-light">
                            <i class="fas fa-phone-alt text-primary"></i>
                        </div>
                    </div>

                    <ul class="bubbles">
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                        <li class="bubble"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row video-call-row">
        <div class="col-12 col-xxl-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Completed Video Call Sessions</h4>
                    <p class="f-m-light mt-1">Displays the history of video call sessions that have already ended.</p>
                </div>

                <div class="card-body">

                    <ul class="nav nav-tabs" id="videoCallTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#completedSessions"
                                type="button">
                                Completed
                                <span class="badge bg-secondary ms-1">{{ $completedSessions->count() }}</span>
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        {{-- COMPLETED SESSIONS TAB --}}
                        <div class="tab-pane fade show active" id="completedSessions">

                            @if ($completedSessions->isEmpty())
                                <div class="text-center py-4 text-muted">
                                    <i class="fa fa-calendar-times fa-2x mb-2"></i>
                                    <p class="mb-0">No completed sessions</p>
                                </div>
                            @else
                                {{-- DESKTOP TABLE --}}
                                <div class="table-responsive d-none d-md-block">
                                    <table class="table table-bordered align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Student</th>
                                                <th>Title</th>
                                                <th>Scheduled Time</th>
                                                <th>Duration</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($completedSessions as $session)
                                                <tr>
                                                    <td>{{ $session->student->name }}</td>
                                                    <td>{{ $session->title }}</td>
                                                    <td>
                                                        <i class="fa fa-clock text-success me-1"></i>
                                                        {{ $session->scheduled_time->format('M d, Y H:i') }} <br>
                                                        <small style="color: green">Completed {{ $session->scheduled_time->diffForHumans() }}</small>
                                                    </td>
                                                    <td><span class="badge bg-success">{{ $session->duration_minutes }}
                                                            min</span></td>
                                                    <td class="text-center">

                                                        <button class="btn btn-info btn-sm btn-detail"
                                                            data-id="{{ $session->id }}">
                                                            <i class="fa fa-eye"></i> Details
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{-- MOBILE CARDS --}}
                                <div class="d-block d-md-none">
                                    @foreach ($completedSessions as $session)
                                        <div class="card mb-3 shadow-sm">
                                            <div class="card-body">
                                                <small style="color: green">Completed {{ $session->scheduled_time->diffForHumans() }}</small><br>
                                                <strong>Student:</strong> {{ $session->student->name }} <br>
                                                <strong>Title:</strong> {{ $session->title }} <br>
                                                <strong>Scheduled:</strong>
                                                {{ $session->scheduled_time->format('M d, Y H:i') }} <br>
                                                <strong>Duration:</strong> {{ $session->duration_minutes }} min <br>

                                                <div class="mt-3">
                                                    <button class="btn btn-info btn-sm btn-detail"
                                                        data-id="{{ $session->id }}">
                                                        <i class="fa fa-eye"></i> Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </div>

                    </div>

                </div>


            </div>
        </div>

    </div>

    <div class="modal fade" id="assessmentModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Video Assessment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <video id="modalVideoPlayer" width="100%" controls class="mb-3">
                        <source id="modalVideoSource" src="" type="video/mp4">
                    </video>

                    <form id="assessmentForm">

                        <input type="hidden" name="video_id" id="video_id">

                        <h5>Fluency & Coherence</h5>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="fc_repetition"> Repetition</div>
                            <div class="col-3"><input type="checkbox" name="fc_hesitation"> Hesitation</div>
                            <div class="col-3"><input type="checkbox" name="fc_speech_rate"> Speech Rate</div>
                            <div class="col-3"><input type="checkbox" name="fc_connectives"> Connectives</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="fc_discourse_markers"> Discourse Markers
                            </div>
                            <div class="col-3"><input type="checkbox" name="fc_relevant_answers"> Relevant Answers</div>
                            <div class="col-3">
                                Band:
                                <input type="number" step="0.1" max="9" name="fc_band"
                                    class="form-control">
                            </div>
                        </div>

                        <hr>

                        <h5>Lexical Resource</h5>
                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="lr_range_vocab"> Range of vocab</div>
                            <div class="col-3"><input type="checkbox" name="lr_idiomatic"> Idiomatic</div>
                            <div class="col-3"><input type="checkbox" name="lr_less_common"> Less common</div>
                            <div class="col-3"><input type="checkbox" name="lr_collocation"> Collocation</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3"><input type="checkbox" name="lr_paraphrase"> Paraphrase</div>
                            <div class="col-3">
                                Band:
                                <input type="number" step="0.1" max="9" name="lr_band"
                                    class="form-control">
                            </div>
                        </div>

                        <hr>

                        <h5>Grammar Range & Accuracy</h5>
                        <div class="row mb-3">
                            <div class="col-4"><input type="checkbox" name="gra_range_structure"> Range of structure
                            </div>
                            <div class="col-4"><input type="checkbox" name="gra_error_free"> Error-free</div>
                            <div class="col-4"><input type="checkbox" name="gra_grammar_features"> Grammar features
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            Band:
                            <input type="number" step="0.1" max="9" name="gra_band" class="form-control">
                        </div>

                        <hr>

                        <h5>Pronunciation</h5>
                        <div class="row mb-3">
                            <div class="col-4"><input type="checkbox" name="pr_features"> Features</div>
                            <div class="col-4"><input type="checkbox" name="pr_understood"> Easy to understand</div>
                            <div class="col-4">
                                Band:
                                <input type="number" step="0.1" max="9" name="pr_band"
                                    class="form-control">
                            </div>
                        </div>

                        <h5>Remark</h5>
                        <textarea class="form-control mb-3" name="remark" rows="4"></textarea>

                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" id="saveAssessmentBtn">Save Assessment</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="writingAssessmentModal" tabindex="-1">
        <div class="modal-dialog modal-md modal-dialog-scrollable" id="writingModalDialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="writingModalTitle">Writing Assessment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <input type="hidden" name="writing_id" id="writing_id">

                    {{-- ============ LEGACY FORM (set selain Cambridge 10 Test 1) ============ --}}
                    <div id="writingLegacyWrap">
                        <h6><b>Student Answer</b></h6>
                        <div id="writingAnswerBox" class="border rounded p-2 mb-3"
                            style="background:#f9f9f9; white-space:pre-wrap;">
                            Loading...
                        </div>

                        <form id="writingAssessmentForm">

                            <div class="mb-3">
                                <label><b>Task Achievement (Band)</b></label>
                                <input type="number" step="0.1" max="9" min="0" name="ta_band"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label><b>Coherence & Cohesion (Band)</b></label>
                                <input type="number" step="0.1" max="9" min="0" name="cc_band"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label><b>Lexical Resource (Band)</b></label>
                                <input type="number" step="0.1" max="9" min="0" name="lr_band"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label><b>Grammatical Range & Accuracy (Band)</b></label>
                                <input type="number" step="0.1" max="9" min="0" name="gra_band"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label><b>Feedback</b></label>
                                <textarea name="feedback" rows="4" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>

                    {{-- ============ WRITING SCORE PREDICTION CHECKLIST (all writing sets) ============ --}}
                    <div id="writingChecklistWrap" style="display:none;">

                        <h5 class="text-center fw-bold mb-3">Writing Score Prediction Checklist</h5>

                        {{-- Info --}}
                        <div class="row g-2 mb-3">
                            <div class="col-md-4">
                                <div class="border rounded p-2 h-100">
                                    <div class="text-muted small">Student</div>
                                    <div class="fw-bold" id="wcStudent">-</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-2 h-100">
                                    <div class="text-muted small">Test Set Code</div>
                                    <div class="fw-bold" id="wcSetCode">-</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-2 h-100">
                                    <div class="text-muted small">Assessment Date</div>
                                    <div class="fw-bold" id="wcAssessDate">-</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-2 h-100">
                                    <div class="text-muted small mb-1">Prediction Score</div>
                                    <input type="number" step="0.5" min="0" max="9"
                                        class="form-control form-control-sm fw-bold" name="predicted_band"
                                        id="wc_predicted_band" placeholder="Auto">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-2 h-100">
                                    <div class="text-muted small">Submission Date</div>
                                    <div class="fw-bold" id="wcSubmitDate">-</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-2 h-100">
                                    <div class="text-muted small">Tutor</div>
                                    <div class="fw-bold" id="wcTutor">-</div>
                                </div>
                            </div>
                        </div>

                        {{-- Soal & Jawaban --}}
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <h6 class="fw-bold mb-1">Soal <span class="badge bg-secondary"
                                        id="wcTaskLabel"></span></h6>
                                <div id="wcQuestionBox" class="border rounded p-2"
                                    style="background:#f9f9f9; max-height:300px; overflow:auto;"></div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <h6 class="fw-bold mb-1 d-flex justify-content-between align-items-center">
                                    <span>Student Answer</span>
                                    <span class="badge text-dark fw-semibold" id="wcWordCount"
                                        style="background:#eef4fb;"><i class="fas fa-calculator me-1"></i><span
                                            id="wcWordCountVal">0</span> words</span>
                                </h6>
                                <div id="wcAnswerBox" class="border rounded p-2" contenteditable="plaintext-only"
                                    spellcheck="false"
                                    style="background:#f9f9f9; white-space:pre-wrap; max-height:300px; overflow:auto;"></div>
                                <div class="form-text"><i class="fas fa-highlighter me-1"></i>Select text to highlight.
                                </div>

                                {{-- Toolbar highlight --}}
                                <div id="wcHlToolbar" style="display:none;">
                                    <button type="button" class="wc-hl-btn" data-color="#ffeb3b"
                                        style="background:#ffeb3b" title="Yellow"></button>
                                    <button type="button" class="wc-hl-btn" data-color="#a5d6a7"
                                        style="background:#a5d6a7" title="Green"></button>
                                    <button type="button" class="wc-hl-btn" data-color="#ef9a9a"
                                        style="background:#ef9a9a" title="Red"></button>
                                    <button type="button" class="wc-hl-btn" data-color="#90caf9"
                                        style="background:#90caf9" title="Blue"></button>
                                    <button type="button" class="wc-hl-note" title="Add comment on selected text"><i
                                            class="far fa-comment-dots"></i></button>
                                    <button type="button" class="wc-hl-eraser" title="Remove highlight"><i
                                            class="fas fa-eraser"></i></button>
                                </div>
                            </div>
                        </div>

                        @php
                            $wcCriteria = [
                                [
                                    'key' => 'ta',
                                    'title' => 'Task Achievement',
                                    'items' => [
                                        'Did the candidate write at least 150 words?',
                                        'Did the candidate provide an overview?',
                                        'Did the candidate identify the key features?',
                                        'Did the candidate provide supporting details for the key features?',
                                        'Did the candidate use an appropriate format?',
                                    ],
                                ],
                                [
                                    'key' => 'cc',
                                    'title' => 'Coherence and Cohesion',
                                    'items' => [
                                        'Did the candidate organise information and ideas logically?',
                                        'Did the candidate use cohesive devices?',
                                        'Did the candidate use referencing and substitution?',
                                    ],
                                ],
                                [
                                    'key' => 'lr',
                                    'title' => 'Lexical Resource',
                                    'items' => [
                                        'Did the candidate use a range of vocabulary?',
                                        'Did the candidate use academic style?',
                                        'Did the candidate use collocation?',
                                        'Did the candidate use correct spelling and word formation?',
                                    ],
                                ],
                                [
                                    'key' => 'gra',
                                    'title' => 'Grammatical Range and Accuracy',
                                    'items' => [
                                        'Did the candidate use a range of structures?',
                                        'Did the candidate produce correct grammar and punctuation?',
                                    ],
                                ],
                            ];
                        @endphp

                        {{-- Penilaian --}}
                        <form id="writingChecklistForm">
                            <input type="hidden" name="answer_highlights" id="wc_answer_highlights" value="[]">
                            @foreach ($wcCriteria as $ci => $c)
                                <div class="border rounded mb-3">
                                    <div class="bg-light px-3 py-2 fw-bold border-bottom rounded-top">
                                        {{ $ci + 1 }}. {{ $c['title'] }}
                                    </div>
                                    <div class="p-3">
                                        @foreach ($c['items'] as $ii => $item)
                                            <div
                                                class="d-flex justify-content-between align-items-center py-1 {{ $ii < count($c['items']) - 1 ? 'border-bottom' : '' }}">
                                                <span class="pe-2">{{ $item }}</span>
                                                <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input wc-check" type="radio"
                                                            name="checklist[{{ $c['key'] }}_{{ $ii + 1 }}]"
                                                            id="wc_{{ $c['key'] }}_{{ $ii + 1 }}_yes" value="yes">
                                                        <label class="form-check-label"
                                                            for="wc_{{ $c['key'] }}_{{ $ii + 1 }}_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input wc-check" type="radio"
                                                            name="checklist[{{ $c['key'] }}_{{ $ii + 1 }}]"
                                                            id="wc_{{ $c['key'] }}_{{ $ii + 1 }}_no" value="no">
                                                        <label class="form-check-label"
                                                            for="wc_{{ $c['key'] }}_{{ $ii + 1 }}_no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="row g-2 mt-3">
                                            <div class="col-md-3">
                                                <label class="form-label fw-bold mb-1">Band Score</label>
                                                <input type="number" step="0.5" min="0" max="9"
                                                    name="{{ $c['key'] }}_band" id="wc_{{ $c['key'] }}_band"
                                                    class="form-control wc-band">
                                            </div>
                                            <div class="col-md-9">
                                                <label class="form-label fw-bold mb-1">Notes</label>
                                                <textarea name="{{ $c['key'] }}_notes" rows="2"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- Overall & Remark --}}
                            <div class="border rounded p-3 mb-2" style="background:#eef4fb; border-color:#dde7f4 !important;">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold mb-1">Overall Band Score</label>
                                        <input type="number" step="0.5" min="0" max="9" name="overall_band"
                                            id="wc_overall_band" class="form-control">
                                        <div class="form-text">Auto-calculated from the four band scores — editable.
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label fw-bold mb-1">Additional Remark</label>
                                        <textarea name="feedback" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="modal-footer">
                    <div id="writingSaveProgress" class="d-none align-items-center gap-2 text-muted small"
                        role="status" aria-live="polite">
                        <div class="progress flex-grow-1">
                            <div class="progress-bar"></div>
                        </div>
                        <span>Saving assessment...</span>
                    </div>
                    <button class="btn btn-primary" id="saveWritingAssessmentBtn">
                        Save Assessment
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Modals accept or reject -->
    @foreach ($pendingSessions as $session)
        <!-- Accept Modal -->
        <div class="modal fade" id="acceptModal{{ $session->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('mock-test.accept', $session) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-check-circle me-2"></i>Accept Mock Test Session
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <p class="text-muted">You are about to accept the session:
                                    <strong>"{{ $session->title }}"</strong> from
                                    <strong>{{ $session->student->name }}</strong>.
                                </p>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Scheduled Time:</label>
                                <input type="datetime-local" name="scheduled_time" class="form-control" required
                                    min="{{ now()->format('Y-m-d\TH:i') }}">
                                <div class="form-text">Please select a time that works for both you and the student.</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Notes (Optional):</label>
                                <textarea name="teacher_notes" class="form-control" rows="3"
                                    placeholder="Add any notes or instructions for the student..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i>Cancel
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check me-1"></i>Accept Session
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Reject Modal -->
        <div class="modal fade" id="rejectModal{{ $session->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('mock-test.reject', $session) }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-times-circle me-2"></i>Reject Mock Test Session
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <p class="text-muted">You are about to reject the session:
                                    <strong>"{{ $session->title }}"</strong> from
                                    <strong>{{ $session->student->name }}</strong>.
                                </p>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Reason for Rejection:</label>
                                <textarea name="rejection_reason" class="form-control" rows="4"
                                    placeholder="Please provide a reason for rejecting this session..." required></textarea>
                                <div class="form-text">This feedback will be shared with the student.</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i>Cancel
                            </button>
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-times me-1"></i>Reject Session
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="detailModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Session Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body" id="detailModalContent">
                    <div class="p-5 text-center">
                        <i class="fa fa-spinner fa-spin fa-2x"></i>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('own_script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk memformat durasi
            function formatDuration(seconds) {
                const minutes = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${minutes}:${secs.toString().padStart(2, '0')}`;
            }

            // Fungsi untuk menangani durasi video
            function handleVideoDuration(video) {
                const targetId = $(video).data('duration-target');
                const durationSpan = $('#' + targetId);

                // Jika metadata sudah dimuat
                if (video.readyState >= 1) {
                    updateDuration(video, durationSpan);
                } else {
                    // Tunggu metadata dimuat
                    $(video).on('loadedmetadata', function() {
                        updateDuration(this, durationSpan);
                    });

                    // Fallback jika error
                    $(video).on('error', function() {
                        durationSpan.text('N/A');
                    });

                    // Timeout setelah 3 detik
                    setTimeout(() => {
                        if (durationSpan.text() === 'Loading…') {
                            durationSpan.text('N/A');
                        }
                    }, 3000);
                }
            }

            function updateDuration(videoElement, durationSpan) {
                if (videoElement.duration && !isNaN(videoElement.duration)) {
                    durationSpan.text(formatDuration(videoElement.duration));
                } else {
                    durationSpan.text('N/A');
                }
            }

            // Proses semua video
            $('.preview-video').each(function() {
                handleVideoDuration(this);
            });
        });

        // ketika list item diklik
        $(document).on("click", ".btn-review-speaking", function() {

            let videoId = $(this).data("id");

            $.ajax({
                url: "/video/get/" + videoId,
                type: "GET",
                success: function(res) {
                    if (!res.status) {
                        Swal.fire({
                            icon: "error",
                            title: "Failed",
                            text: res.message || "Failed to load video"
                        });
                        return;
                    }

                    $("#modalVideoSource").attr("src", res.data.url);
                    $("#video_id").val(videoId);
                    $("#modalVideoPlayer")[0].load();

                    // reset lalu isi nilai assessment sebelumnya
                    const form = $("#assessmentForm");
                    form[0].reset();
                    form.find("input[type=checkbox]").trigger("change");
                    if (res.data.assessment) {
                        const a = res.data.assessment;
                        form.find("[name=fc_band]").val(a.fc_band);
                        form.find("[name=lr_band]").val(a.lr_band);
                        form.find("[name=gra_band]").val(a.gra_band);
                        form.find("[name=pr_band]").val(a.pr_band);
                        form.find("[name=remark]").val(a.remark);
                        $.each(a.checkboxes || {}, function(name, checked) {
                            const cb = form.find("[name=" + name + "]");
                            cb.prop("checked", checked);
                            if (checked) cb.trigger("change");
                        });
                    }

                    $("#assessmentModal").modal("show");
                },
                error: function() {
                    Swal.fire({
                        icon: "error",
                        title: "Server Error",
                        text: "Failed to load video"
                    });
                }
            });
        });

        $("#saveAssessmentBtn").on("click", function() {

            const videoId = $("#video_id").val();
            let formData = $("#assessmentForm").serialize();

            $.ajax({
                url: "{{ route('video.assessment.store') }}",
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    if (res.status === "success") {

                        $("#assessmentModal").modal("hide");

                        const wasPending = markReviewed(".btn-review-speaking[data-id='" + videoId + "']", false);
                        if (wasPending) {
                            decCount("video-pending-widget");
                            decCount("video-pending-badge");
                        }

                        Swal.fire({
                            icon: "success",
                            title: "Saved!",
                            text: res.message,
                            timer: 1800,
                            showConfirmButton: false
                        });
                    } else {

                        Swal.fire({
                            icon: "error",
                            title: "Failed",
                            text: "Failed to save assessment"
                        });

                    }
                },
                error: function(xhr) {

                    let msg = xhr.responseJSON?.message ?? "Unknown server error";

                    Swal.fire({
                        icon: "error",
                        title: "Server Error",
                        text: msg
                    });
                }
            });

        });

        $(document).on("click", ".btn-review-writing", function() {
            let writingId = $(this).data("id");

            $("#writing_id").val(writingId);

            $.ajax({
                url: "/writing/get/" + writingId,
                type: "GET",
                success: function(res) {

                    // Semua writing request menggunakan checklist penilaian yang sama.
                    const isChecklist = true;

                    $("#writingModalTitle").text(isChecklist ? "Writing Score Prediction Checklist" : "Writing Assessment");
                    $("#writingModalDialog").toggleClass("modal-xl", isChecklist);
                    $("#writingLegacyWrap").toggle(!isChecklist);
                    $("#writingChecklistWrap").toggle(isChecklist);

                    if (isChecklist) {

                        $("#wcStudent").text(res.student || "-");
                        $("#wcSetCode").text(res.topic || "-");
                        $("#wcTaskLabel").text(res.task || "");
                        $("#wcSubmitDate").text(res.submitted_at || "-");
                        $("#wcTutor").text(res.tutor || "-");
                        $("#wcAssessDate").text(res.assessed_at ||
                            new Date().toLocaleDateString("en-GB", {
                                weekday: "long",
                                day: "numeric",
                                month: "long",
                                year: "numeric"
                            }));

                        $("#wcAnswerBox").text(res.answer || "-");
                        $("#wcQuestionBox").html(res.question ||
                            "<em class='text-muted'>Question not available.</em>");

                        // word count jawaban student
                        const wcAnswerText = res.answer || "";
                        const wcWords = wcAnswerText.trim() ? wcAnswerText.trim().split(/\s+/).length : 0;
                        $("#wcWordCountVal").text(wcWords);

                        // reset highlights lalu terapkan yang tersimpan
                        wcApplyStoredHighlights(res.assessment?.answer_highlights || []);

                        const form = $("#writingChecklistForm");
                        form[0].reset();
                        form.find("input[type=radio]").prop("checked", false);
                        $("#wc_predicted_band").val("");
                        $("#wc_overall_band").val("");

                        if (res.assessment) {
                            form.find("[name=ta_band]").val(res.assessment.ta_band);
                            form.find("[name=cc_band]").val(res.assessment.cc_band);
                            form.find("[name=lr_band]").val(res.assessment.lr_band);
                            form.find("[name=gra_band]").val(res.assessment.gra_band);
                            form.find("[name=ta_notes]").val(res.assessment.ta_notes);
                            form.find("[name=cc_notes]").val(res.assessment.cc_notes);
                            form.find("[name=lr_notes]").val(res.assessment.lr_notes);
                            form.find("[name=gra_notes]").val(res.assessment.gra_notes);
                            form.find("[name=feedback]").val(res.assessment.feedback);
                            $("#wc_overall_band").val(res.assessment.overall_band ?? "");
                            $("#wc_predicted_band").val(res.assessment.predicted_band ?? "");

                            const cl = res.assessment.checklist || {};
                            Object.keys(cl).forEach(function(k) {
                                form.find("[name='checklist[" + k + "]'][value='" + cl[k] + "']")
                                    .prop("checked", true);
                            });
                        }

                        // hidden input di-set setelah form.reset() agar tidak ter-reset
                        wcSyncHighlights();

                    } else {

                        $("#writingAnswerBox").text(res.answer);

                        // isi nilai jika sudah ada assessment sebelumnya
                        const form = $("#writingAssessmentForm");
                        form[0].reset();
                        if (res.assessment) {
                            form.find("[name=ta_band]").val(res.assessment.ta_band);
                            form.find("[name=cc_band]").val(res.assessment.cc_band);
                            form.find("[name=lr_band]").val(res.assessment.lr_band);
                            form.find("[name=gra_band]").val(res.assessment.gra_band);
                            form.find("[name=feedback]").val(res.assessment.feedback);
                        }

                    }

                    $("#writingAssessmentModal").modal("show");
                }
            });
        });

        /* ================= HIGHLIGHT STUDENT ANSWER ================= */

        // Matikan focustrap modal Bootstrap agar input SweetAlert2 bisa diketik
        // (focustrap mencuri fokus dari elemen di luar modal saat muncul)
        (function() {
            const modalEl = document.getElementById("writingAssessmentModal");
            if (!modalEl) return;
            modalEl.addEventListener("shown.bs.modal", function() {
                try {
                    const inst = (window.bootstrap && bootstrap.Modal) ?
                        bootstrap.Modal.getInstance(modalEl) :
                        ($(modalEl).data && $(modalEl).data("bs.modal"));
                    if (inst && inst._focustrap) {
                        inst._focustrap.deactivate();
                    }
                } catch (e) {}
            });
        })();

        function wcDisableModalFocusTrap() {
            const modalEl = document.getElementById("writingAssessmentModal");
            try {
                const inst = window.bootstrap && bootstrap.Modal
                    ? bootstrap.Modal.getInstance(modalEl)
                    : null;
                if (inst && inst._focustrap) inst._focustrap.deactivate();
            } catch (e) {}
        }

        function wcFitCommentDialog() {
            const input = Swal.getInput();
            if (!input) return;

            input.style.width = "90%";
            input.style.maxWidth = "90%";
            input.style.marginLeft = "auto";
            input.style.marginRight = "auto";
            input.focus();
        }

        // Kumpulkan semua text node di dalam container
        function wcTextNodes(container) {
            const walker = document.createTreeWalker(container, NodeFilter.SHOW_TEXT);
            const nodes = [];
            while (walker.nextNode()) nodes.push(walker.currentNode);
            return nodes;
        }

        // Hitung offset [start, end] selection terhadap teks penuh container
        function wcSelectionOffsets(container, range) {
            let start = null,
                end = null,
                pos = 0;
            for (const node of wcTextNodes(container)) {
                const len = node.nodeValue.length;
                if (node === range.startContainer) start = pos + range.startOffset;
                if (node === range.endContainer) end = pos + range.endOffset;
                pos += len;
            }
            return (start !== null && end !== null) ? [start, end] : null;
        }

        // Bungkus teks pada offset [start,end) dengan span berwarna / span catatan
        function wcWrapOffsets(container, start, end, color, note) {
            const nodes = wcTextNodes(container);
            let pos = 0;
            for (const node of nodes) {
                const len = node.nodeValue.length;
                const s = Math.max(start, pos);
                const e = Math.min(end, pos + len);
                if (s < e) {
                    const relS = s - pos;
                    const relE = e - pos;
                    let target = node;
                    if (relE < len) target.splitText(relE);
                    if (relS > 0) target = target.splitText(relS);
                    const span = document.createElement("span");
                    if (note) {
                        span.className = "wc-note";
                        span.setAttribute("data-note", note);
                        span.title = note;
                    } else {
                        span.className = "wc-hl";
                        span.style.backgroundColor = color;
                    }
                    target.parentNode.replaceChild(span, target);
                    span.appendChild(target);
                }
                pos += len;
                if (pos >= end) break;
            }
        }

        // Lepaskan span .wc-hl / .wc-note yang berpotongan dengan selection
        function wcUnwrapSelection(container, range) {
            $(container).find("span.wc-hl, span.wc-note").each(function() {
                const spanRange = document.createRange();
                spanRange.selectNodeContents(this);
                if (range.compareBoundaryPoints(Range.END_TO_START, spanRange) < 0 &&
                    range.compareBoundaryPoints(Range.START_TO_END, spanRange) > 0) {
                    const parent = this.parentNode;
                    while (this.firstChild) parent.insertBefore(this.firstChild, this);
                    parent.removeChild(this);
                    parent.normalize();
                }
            });
        }

        // Terapkan highlights tersimpan [{text, color, note}] pada teks jawaban
        function wcApplyStoredHighlights(highlights) {
            if (!Array.isArray(highlights) || !highlights.length) return;
            const box = document.getElementById("wcAnswerBox");
            const full = box.textContent;
            let from = 0;
            highlights.forEach(function(h) {
                if (!h || !h.text) return;
                const idx = full.indexOf(h.text, from);
                if (idx >= 0) {
                    wcWrapOffsets(box, idx, idx + h.text.length, h.color, h.note || null);
                    from = idx + h.text.length;
                }
            });
        }

        // Sinkronkan hidden input dari span yang ada di DOM
        function wcSyncHighlights() {
            const data = $("#wcAnswerBox span.wc-hl, #wcAnswerBox span.wc-note").map(function() {
                return {
                    text: this.textContent,
                    color: this.className.indexOf("wc-note") >= 0 ? null : this.style.backgroundColor,
                    note: this.getAttribute("data-note") || null
                };
            }).get();
            $("#wc_answer_highlights").val(JSON.stringify(data));
        }

        // Tampilkan toolbar di dekat seleksi teks
        function wcShowToolbar(x, y) {
            const $tb = $("#wcHlToolbar");
            const $col = $tb.closest(".position-relative");
            const colRect = $col[0].getBoundingClientRect();
            $tb.show().css({
                left: Math.min(Math.max(x - colRect.left - 60, 0), colRect.width - 130),
                top: y - colRect.top + 12
            });
        }

        let wcSelRange = null;

        $(document).on("mouseup keyup", "#wcAnswerBox", function(e) {
            const sel = window.getSelection();
            if (!sel || sel.rangeCount === 0 || sel.isCollapsed) return;
            const range = sel.getRangeAt(0);
            if (!this.contains(range.commonAncestorContainer)) return;
            wcSelRange = range.cloneRange();
            const rect = range.getBoundingClientRect();
            wcShowToolbar(rect.left + rect.width / 2, rect.bottom);
        });

        $(document).on("mousedown", function(e) {
            if (!$(e.target).closest("#wcHlToolbar").length &&
                !$(e.target).closest("#wcAnswerBox").length) {
                $("#wcHlToolbar").hide();
                wcSelRange = null;
            }
        });

        $(document).on("click", "#wcHlToolbar .wc-hl-btn", function() {
            if (!wcSelRange) return;
            const box = document.getElementById("wcAnswerBox");
            const offsets = wcSelectionOffsets(box, wcSelRange);
            if (offsets && offsets[1] > offsets[0]) {
                wcWrapOffsets(box, offsets[0], offsets[1], $(this).data("color"));
                wcSyncHighlights();
            }
            $("#wcHlToolbar").hide();
            window.getSelection().removeAllRanges();
            wcSelRange = null;
        });

        // Tambah catatan pada teks terpilih
        $(document).on("click", "#wcHlToolbar .wc-hl-note", function() {
            if (!wcSelRange) return;
            const box = document.getElementById("wcAnswerBox");
            const offsets = wcSelectionOffsets(box, wcSelRange);
            $("#wcHlToolbar").hide();

            if (!offsets || offsets[1] <= offsets[0]) {
                wcSelRange = null;
                return;
            }

            wcDisableModalFocusTrap();
            Swal.fire({
                title: '<span style="font-size:1.2rem;">Add Comment</span>',
                input: "textarea",
                inputPlaceholder: "Write a comment about the selected text...",
                target: document.getElementById("writingAssessmentModal"),
                showCancelButton: true,
                confirmButtonText: '<i class="fas fa-check"></i> Save',
                cancelButtonText: "Cancel",
                confirmButtonColor: "#4274B9",
                focusConfirm: false,
                didOpen: function() {
                    wcFitCommentDialog();
                }
            }).then(function(result) {
                if (result.isConfirmed && result.value && result.value.trim()) {
                    wcWrapOffsets(box, offsets[0], offsets[1], null, result.value.trim());
                    wcSyncHighlights();
                }
                window.getSelection().removeAllRanges();
                wcSelRange = null;
            });
        });

        // Lihat / edit / hapus catatan saat span catatan diklik
        $(document).on("click", "#wcAnswerBox span.wc-note", function(e) {
            e.stopPropagation();
            const span = this;
            const note = span.getAttribute("data-note") || "";

            wcDisableModalFocusTrap();
            Swal.fire({
                title: '<span style="font-size:1.2rem;"><i class="far fa-comment-dots"></i> Comment</span>',
                input: "textarea",
                inputValue: note,
                target: document.getElementById("writingAssessmentModal"),
                showCancelButton: true,
                showDenyButton: true,
                confirmButtonText: '<i class="fas fa-check"></i> Update',
                denyButtonText: '<i class="fas fa-trash"></i> Delete',
                cancelButtonText: "Close",
                confirmButtonColor: "#4274B9",
                denyButtonColor: "#d33",
                didOpen: function() {
                    wcFitCommentDialog();
                }
            }).then(function(result) {
                if (result.isConfirmed && result.value && result.value.trim()) {
                    span.setAttribute("data-note", result.value.trim());
                    span.title = result.value.trim();
                    wcSyncHighlights();
                } else if (result.isDenied) {
                    const parent = span.parentNode;
                    while (span.firstChild) parent.insertBefore(span.firstChild, span);
                    parent.removeChild(span);
                    parent.normalize();
                    wcSyncHighlights();
                }
            });
        });

        $(document).on("click", "#wcHlToolbar .wc-hl-eraser", function() {
            if (!wcSelRange) return;
            wcUnwrapSelection(document.getElementById("wcAnswerBox"), wcSelRange);
            wcSyncHighlights();
            $("#wcHlToolbar").hide();
            window.getSelection().removeAllRanges();
            wcSelRange = null;
        });

        // Prediction score otomatis dari rasio jawaban "Yes" pada checklist
        $(document).on("change", ".wc-check", function() {
            const names = new Set($(".wc-check").map(function() {
                return this.name;
            }).get());
            const total = names.size;
            const yes = $(".wc-check[value='yes']:checked").length;
            if (total > 0) {
                $("#wc_predicted_band").val(Math.round((yes / total) * 9 * 2) / 2);
            }
        });

        // Overall band otomatis dari rata-rata 4 band score (masih bisa diedit manual)
        $(document).on("input change", ".wc-band", function() {
            const bands = ["ta", "cc", "lr", "gra"].map(function(k) {
                return parseFloat($("#wc_" + k + "_band").val());
            });
            if (bands.every(function(v) {
                    return !isNaN(v);
                })) {
                const avg = bands.reduce(function(a, b) {
                    return a + b;
                }, 0) / bands.length;
                $("#wc_overall_band").val(Math.round(avg * 10) / 10);
            }
        });

        const currentUserName = "{{ auth()->user()->name }}";

        function escHtml(s) {
            const d = document.createElement("div");
            d.textContent = s == null ? "" : String(s);
            return d.innerHTML;
        }

        function decCount(id) {
            const el = $("#" + id);
            const m = el.text().match(/\d+/);
            if (m) el.text(el.text().replace(/\d+/, Math.max(0, parseInt(m[0], 10) - 1)));
        }

        function markReviewed(selector, withName) {
            const item = $(selector).first();
            if (!item.length) return false;
            const h6 = item.is("h6") ? item : item.find("h6").first();
            const wasPending = h6.find(".badge.bg-warning").length > 0;
            h6.find(".badge").remove();
            h6.append('<span class="badge bg-success"><i class="fa fa-check"></i> Reviewed' +
                (withName && currentUserName ? ' — ' + escHtml(currentUserName) : '') + '</span>');
            return wasPending;
        }

        function setWritingSaveLoading(isLoading) {
            const button = $("#saveWritingAssessmentBtn");
            const progress = $("#writingSaveProgress");

            button.prop("disabled", isLoading).toggleClass("is-loading", isLoading);
            button.html(isLoading
                ? '<i class="fas fa-spinner fa-spin me-2"></i>Saving Assessment'
                : 'Save Assessment');
            progress.toggleClass("d-none", !isLoading).toggleClass("d-flex", isLoading);
            $("#writingChecklistForm, #writingAssessmentForm")
                .find("input, textarea, button")
                .prop("disabled", isLoading);
        }

        $("#saveWritingAssessmentBtn").on("click", function() {

            const writingId = $("#writing_id").val();
            const useChecklist = $("#writingChecklistWrap").is(":visible");
            const form = useChecklist ? $("#writingChecklistForm") : $("#writingAssessmentForm");

            if (useChecklist) {
                wcSyncHighlights();
                const missing = ["ta", "cc", "lr", "gra"].filter(function(k) {
                    return $("#wc_" + k + "_band").val() === "";
                });
                if (missing.length) {
                    Swal.fire({
                        icon: "warning",
                        title: "Incomplete",
                        text: "Please fill all band scores before saving."
                    });
                    return;
                }
            }

            let formData = "writing_id=" + encodeURIComponent(writingId) + "&" + form.serialize();

            $.ajax({
                url: "{{ route('writing.assessment.store') }}",
                type: "POST",
                data: formData,
                beforeSend: function() {
                    setWritingSaveLoading(true);
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },

                success: function(res) {

                    if (res.status === "success") {

                        $("#writingAssessmentModal").modal("hide");

                        const wasPending = markReviewed(".btn-review-writing[data-id='" + writingId + "']", true);
                        if (wasPending) {
                            decCount("writing-pending-badge");
                        }

                        Swal.fire({
                            icon: "success",
                            title: "Saved",
                            text: res.message,
                            timer: 1800,
                            showConfirmButton: false
                        });

                    } else {

                        Swal.fire({
                            icon: "error",
                            title: "Failed",
                            text: res.message
                        });
                    }
                },

                error: function(xhr) {

                    Swal.fire({
                        icon: "error",
                        title: "Server Error",
                        text: xhr.responseJSON?.message ?? "Unknown error"
                    });
                },
                complete: function() {
                    setWritingSaveLoading(false);
                }
            });

        });

        $(document).on("click", ".btn-detail", function() {
            let id = $(this).data("id");

            $("#detailModalContent").html(`
                <div class="p-5 text-center">
                    <i class="fa fa-spinner fa-spin fa-2x"></i>
                </div>
            `);

            $("#detailModal").modal("show");

            $.ajax({
                url: "/mock-test/" + id + "/show",
                method: "GET",
                success: function(res) {
                    $("#detailModalContent").html(res.html);
                },
                error: function() {
                    $("#detailModalContent").html(`
                        <div class="alert alert-danger m-3">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            Failed to load session details.
                        </div>
                    `);
                }
            });
        });
    </script>

    <script>
        // script assessment speaking
        $(document).ready(function() {
            // Animasi checkbox ketika dicentang
            $('input[type="checkbox"]').on('change', function() {
                const label = $(this).parent();
                if ($(this).is(':checked')) {
                    label.css({
                        'color': '#3a8ffe',
                        'font-weight': '600'
                    });
                    label.prepend('<span class="check-icon">✓ </span>');
                } else {
                    label.css({
                        'color': '',
                        'font-weight': ''
                    });
                    label.find('.check-icon').remove();
                }
            });

            // Auto-format band score
            $('input[name$="_band"]').on('input', function() {
                let value = parseFloat($(this).val());
                if (value > 9) $(this).val(9);
                if (value < 0) $(this).val(0);
                if (!isNaN(value) && value % 1 !== 0) {
                    $(this).val(value.toFixed(1));
                }
            });

            // Highlight section ketika fokus
            $('input, textarea').on('focus', function() {
                $(this).parent().addClass('active-field');
            }).on('blur', function() {
                $(this).parent().removeClass('active-field');
            });

            // Tambahkan CSS untuk active field
            const style = document.createElement('style');
            style.textContent = `
                .active-field {
                    background: rgba(58, 143, 254, 0.05) !important;
                    border-radius: 8px;
                    transition: all 0.3s ease;
                }
                .check-icon {
                    color: #00b894;
                    font-weight: bold;
                    margin-right: 5px;
                }
            `;
            document.head.appendChild(style);
        });

        $(document).ready(function() {
            // Animated gradient border for answer box
            function animateAnswerBox() {
                const answerBox = $('#writingAnswerBox');
                if (answerBox.text() === 'Loading...') {
                    answerBox.addClass('loading');
                }
            }

            animateAnswerBox();

            // Score validation and formatting
            $('input[type="number"]').on('input', function() {
                let value = parseFloat($(this).val());

                // Validate range
                if (value > 9) {
                    $(this).val(9);
                    value = 9;
                }
                if (value < 0) {
                    $(this).val(0);
                    value = 0;
                }

                // Format to one decimal place
                if (!isNaN(value)) {
                    const decimal = value % 1;
                    if (decimal !== 0 && decimal !== 0.5) {
                        // Round to nearest 0.5
                        const rounded = Math.round(value * 2) / 2;
                        $(this).val(rounded.toFixed(1));
                    }
                }

                // Color coding based on score
                const scoreColor = getScoreColor(value);
                $(this).css({
                    'border-color': scoreColor.border,
                    'background': scoreColor.background
                });
            });

            function getScoreColor(score) {
                if (score >= 7) return {
                    border: '#4274BA',
                    background: 'linear-gradient(145deg, #f0fff4 0%, #ffffff 100%)'
                };
                if (score >= 5) return {
                    border: '#ffd43b',
                    background: 'linear-gradient(145deg, #fff9db 0%, #ffffff 100%)'
                };
                if (score >= 3) return {
                    border: '#ff922b',
                    background: 'linear-gradient(145deg, #fff4e6 0%, #ffffff 100%)'
                };
                return {
                    border: '#ff6b6b',
                    background: 'linear-gradient(145deg, #fff5f5 0%, #ffffff 100%)'
                };
            }

            // Character counter for feedback
            $('textarea[name="feedback"]').on('input', function() {
                const charCount = $(this).val().length;
                const counter = $(this).parent().find('.char-counter') ||
                    $(
                        '<small class="char-counter text-muted" style="display:block; margin-top:5px;"></small>'
                    )
                    .appendTo($(this).parent());

                counter.text(`${charCount} characters`);

                if (charCount > 1000) {
                    counter.css('color', '#ff6b6b');
                } else if (charCount > 500) {
                    counter.css('color', '#ff922b');
                } else {
                    counter.css('color', '#868e96');
                }
            });

            // Auto-expand textarea
            $('textarea[name="feedback"]').on('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });

            // Remove loading class when content is loaded
            setTimeout(() => {
                $('#writingAnswerBox').removeClass('loading');
            }, 2000);
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Failed!',
                text: '{{ session('error') }}',
            });
        </script>
    @endif


    <script src="{{ asset('own_assets/scripts/history.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/input-groups.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/product-tab.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/scrollable/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/scrollable/scrollable-custom.js') }}"></script>
@endsection
