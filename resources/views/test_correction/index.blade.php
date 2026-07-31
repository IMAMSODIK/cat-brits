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

        #writingAssessmentModal .modal-content {
            border-radius: 18px;
            border: none;
            box-shadow: 0 12px 45px rgba(0, 0, 0, 0.18);
            overflow: hidden;
            background: linear-gradient(145deg, #ffffff 0%, #f8fbff 100%);
        }

        /* Header Styling */
        #writingAssessmentModal .modal-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border-bottom: none;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        @keyframes gradientFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
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
            content: '📝';
            font-size: 1.8rem;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        /* Body Styling */
        #writingAssessmentModal .modal-body {
            padding: 30px;
            max-height: 70vh;
            overflow-y: auto;
            background: #ffffff;
        }

        /* Student Answer Box */
        #writingAssessmentModal #writingAnswerBox {
            background: linear-gradient(145deg, #f8faff 0%, #ffffff 100%);
            border: 2px solid #e0e8ff;
            border-radius: 12px;
            padding: 20px;
            font-size: 15px;
            line-height: 1.7;
            color: #2c3e50;
            box-shadow:
                inset 0 2px 10px rgba(0, 0, 0, 0.03),
                0 3px 15px rgba(106, 17, 203, 0.05);
            position: relative;
            min-height: 120px;
            transition: all 0.3s ease;
        }

        #writingAssessmentModal #writingAnswerBox:hover {
            border-color: #a1c4fd;
            box-shadow:
                inset 0 2px 15px rgba(0, 0, 0, 0.05),
                0 5px 20px rgba(106, 17, 203, 0.08);
        }

        #writingAssessmentModal #writingAnswerBox::before {
            content: '"';
            position: absolute;
            top: -15px;
            left: 20px;
            font-size: 80px;
            color: #6a11cb;
            opacity: 0.0;
            font-family: Georgia, serif;
            font-weight: bold;
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

        #writingAssessmentModal h6::before {
            content: '✍️';
            font-size: 1.2rem;
        }

        /* Form Styling */
        #writingAssessmentForm {
            margin-top: 25px;
        }

        #writingAssessmentModal .mb-3 {
            margin-bottom: 25px !important;
            position: relative;
        }

        #writingAssessmentModal label {
            display: block;
            font-weight: 700;
            color: #4a5568;
            margin-bottom: 10px;
            font-size: 15px;
            display: flex;
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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        #writingAssessmentModal input[type="number"]:focus {
            border-color: #6a11cb;
            box-shadow:
                0 0 0 4px rgba(106, 17, 203, 0.15),
                0 4px 12px rgba(106, 17, 203, 0.1);
            outline: none;
            transform: translateY(-2px);
        }

        /* Score Input Indicators */
        #writingAssessmentModal .mb-3::after {
            content: '';
            position: absolute;
            right: 15px;
            top: 45px;
            width: 6px;
            height: 40%;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            border-radius: 3px;
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        #writingAssessmentModal input[type="number"]:focus+.mb-3::after {
            opacity: 1;
        }

        /* Score Range Indicators */
        #writingAssessmentModal input[type="number"]::-webkit-inner-spin-button {
            height: 30px;
            opacity: 0.7;
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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        #writingAssessmentModal textarea:focus {
            border-color: #2575fc;
            box-shadow:
                0 0 0 4px rgba(37, 117, 252, 0.15),
                0 4px 15px rgba(37, 117, 252, 0.1);
            outline: none;
            transform: translateY(-2px);
        }

        #writingAssessmentModal textarea::placeholder {
            color: #a0aec0;
            font-style: italic;
        }

        /* Modal Footer */
        #writingAssessmentModal .modal-footer {
            background: linear-gradient(145deg, #f8fbff 0%, #ffffff 100%);
            padding: 20px 30px;
            border-top: 1px solid #e0e8ff;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        /* Save Button */
        #writingAssessmentModal #saveWritingAssessmentBtn {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 12px;
            padding: 14px 35px;
            font-weight: 700;
            font-size: 16px;
            color: white;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow:
                0 6px 20px rgba(106, 17, 203, 0.3),
                0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        #writingAssessmentModal #saveWritingAssessmentBtn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s;
        }

        #writingAssessmentModal #saveWritingAssessmentBtn:hover {
            transform: translateY(-3px);
            box-shadow:
                0 10px 25px rgba(106, 17, 203, 0.4),
                0 4px 8px rgba(0, 0, 0, 0.15);
        }

        #writingAssessmentModal #saveWritingAssessmentBtn:hover::before {
            left: 100%;
        }

        #writingAssessmentModal #saveWritingAssessmentBtn::after {
            content: '💾';
            font-size: 1.2rem;
            filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.2));
        }

        /* Scrollbar Styling */
        #writingAssessmentModal .modal-body::-webkit-scrollbar {
            width: 10px;
        }

        #writingAssessmentModal .modal-body::-webkit-scrollbar-track {
            background: #f1f5ff;
            border-radius: 10px;
            margin: 8px 0;
        }

        #writingAssessmentModal .modal-body::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border-radius: 10px;
            border: 2px solid #f1f5ff;
        }

        #writingAssessmentModal .modal-body::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #5a0db5 0%, #1c68e8 100%);
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

        /* Score Labels with Icons */
        #writingAssessmentModal label[for*="ta"]::before {
            content: '🎯';
        }

        #writingAssessmentModal label[for*="cc"]::before {
            content: '🔗';
        }

        #writingAssessmentModal label[for*="lr"]::before {
            content: '📚';
        }

        #writingAssessmentModal label[for*="gra"]::before {
            content: '⚙️';
        }

        #writingAssessmentModal label[for*="feedback"]::before {
            content: '💬';
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #writingAssessmentModal .modal-dialog {
                margin: 15px;
                max-width: calc(100% - 30px);
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

        /* Loading State */
        #writingAssessmentModal #writingAnswerBox.loading {
            background: linear-gradient(90deg, #f0f5ff 25%, #e6eeff 50%, #f0f5ff 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        /* Score Validation */
        #writingAssessmentModal input[type="number"]:invalid {
            border-color: #ff6b6b;
            background: linear-gradient(145deg, #fff5f5 0%, #ffffff 100%);
        }

        #writingAssessmentModal input[type="number"]:valid {
            border-color: #4274BA;
        }

        /* Tooltip for Band Scores */
        #writingAssessmentModal .mb-3 {
            position: relative;
        }

        #writingAssessmentModal .mb-3:hover::before {
            content: 'Band: 0-9 (use 0.5 increments)';
            position: absolute;
            top: -30px;
            left: 0;
            background: #2c3e50;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            white-space: nowrap;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        #writingAssessmentModal .mb-3:hover::after {
            content: '';
            position: absolute;
            top: -6px;
            left: 20px;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 6px solid #2c3e50;
            z-index: 1000;
        }

        /* Hover Effects for Form Elements */
        #writingAssessmentModal .mb-3 {
            transition: transform 0.3s ease;
        }

        #writingAssessmentModal .mb-3:hover {
            transform: translateX(5px);
        }

        /* Highlight Current Focus */
        #writingAssessmentModal .mb-3:has(input:focus),
        #writingAssessmentModal .mb-3:has(textarea:focus) {
            background: rgba(106, 17, 203, 0.02);
            border-radius: 10px;
            padding: 10px;
            margin-left: -10px;
            margin-right: -10px;
        }

        /* Section Divider */
        #writingAssessmentModal hr {
            margin: 30px 0;
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, #a1c4fd, #6a11cb, #a1c4fd, transparent);
            opacity: 0.3;
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
                            <h2 class="f-w-600">{{ $video_request->count() }}</h2>
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
                    <span class="badge bg-danger text-white">
                        {{ $video_request->count() }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content">

                            @forelse ($video_request as $v)
                                <div class="list-group-item list-group-item-action list-hover-primary btn-review-speaking"
                                    style="cursor: pointer" data-id="{{ $v->id }}"
                                    data-video="{{ asset('storage/recordings/' . $v->video) }}"
                                    data-student="{{ $v->student->name }}">
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
                                                <h6 class="mb-1">{{ $v->student->name }}</h6>

                                                <p class="mb-1 text-muted" style="font-size:13px;">
                                                    <i class="fa fa-calendar"></i> {{ $v->created_at->format('Y-m-d') }}
                                                    &nbsp; • &nbsp;
                                                    <i class="fa fa-clock"></i>
                                                    <span id="duration-{{ $v->id }}">Loading…</span>
                                                </p>
                                                <p class="text-dark" style="font-size: 13px;">
                                                    <b>{{ $v->setSoal->name }}</b><br>
                                                    Topic: {{ $v->setSoal->thumbnail }} <br>
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
                    <span class="badge bg-danger text-white">
                        {{ $writing_request->count() }}
                    </span>
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

                                                <!-- STUDENT NAME -->
                                                <h6 class="mb-1">
                                                    {{ $w->student->name ?? 'Unknown Student' }}
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
                                                    <small class="text-primary">{{ $w->task }} &nbsp; • &nbsp; Number {{ $w->no_soal }} &nbsp; • &nbsp; {{ ($w->tipe == 'mock') ? "Mock Test" : "Practice" }}</small>
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
        <div class="modal-dialog modal-md modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Writing Assessment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <h6><b>Student Answer</b></h6>
                    <div id="writingAnswerBox" class="border rounded p-2 mb-3"
                        style="background:#f9f9f9; white-space:pre-wrap;">
                        Loading...
                    </div>

                    <form id="writingAssessmentForm">

                        <input type="hidden" name="writing_id" id="writing_id">

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

                <div class="modal-footer">
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
        $(".btn-review-speaking").on("click", function() {

            let video = $(this).data("video");
            let videoId = $(this).data("id");

            $("#modalVideoSource").attr("src", video);
            $("#video_id").val(videoId);

            $("#modalVideoPlayer")[0].load();

            $("#assessmentModal").modal("show");
        });

        $("#saveAssessmentBtn").on("click", function() {

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

                        Swal.fire({
                            icon: "success",
                            title: "Saved!",
                            text: res.message,
                            timer: 1500,
                            showConfirmButton: false
                        });

                        $("#assessmentModal").modal("hide");
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

                    $("#writingAnswerBox").text(res.answer);

                    // isi nilai jika sudah ada assessment sebelumnya
                    if (res.assessment) {
                        $("[name=ta_band]").val(res.assessment.ta_band);
                        $("[name=cc_band]").val(res.assessment.cc_band);
                        $("[name=lr_band]").val(res.assessment.lr_band);
                        $("[name=gra_band]").val(res.assessment.gra_band);
                        $("[name=feedback]").val(res.assessment.feedback);
                    } else {
                        $("#writingAssessmentForm")[0].reset();
                    }

                    $("#writingAssessmentModal").modal("show");
                }
            });
        });

        $("#saveWritingAssessmentBtn").on("click", function() {

            let formData = $("#writingAssessmentForm").serialize();

            $.ajax({
                url: "{{ route('writing.assessment.store') }}",
                type: "POST",
                data: formData,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },

                beforeSend: function() {
                    $("#saveWritingAssessmentBtn")
                        .prop("disabled", true)
                        .html("Saving...");
                },

                success: function(res) {

                    $("#saveWritingAssessmentBtn")
                        .prop("disabled", false)
                        .html("Save Assessment");

                    if (res.status === "success") {

                        Swal.fire({
                            icon: "success",
                            title: "Saved",
                            text: res.message,
                            timer: 1500
                        });

                        $("#writingAssessmentModal").modal("hide");

                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Failed",
                            text: res.message
                        });
                    }
                },

                error: function(xhr) {

                    $("#saveWritingAssessmentBtn")
                        .prop("disabled", false)
                        .html("Save Assessment");

                    Swal.fire({
                        icon: "error",
                        title: "Server Error",
                        text: xhr.responseJSON?.message ?? "Unknown error"
                    });
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

            // Save button loading state
            $('#saveWritingAssessmentBtn').on('click', function() {
                const btn = $(this);
                const originalText = btn.html();

                btn.html('<span class="spinner-border spinner-border-sm me-2"></span> Saving...');
                btn.prop('disabled', true);

                // Simulate save process
                setTimeout(() => {
                    btn.html('✓ Saved Successfully!');
                    btn.css('background', 'linear-gradient(135deg, #4274BA 0%, #40c057 100%)');

                    setTimeout(() => {
                        btn.html(originalText);
                        btn.prop('disabled', false);
                        btn.css('background',
                            'linear-gradient(135deg, #6a11cb 0%, #2575fc 100%)');
                    }, 2000);
                }, 1500);
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
