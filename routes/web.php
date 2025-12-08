<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\IeltsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentVerificationController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestCorrectionController;
use App\Http\Controllers\TestHistoryController;
use App\Http\Controllers\VideoAsessmentController;
use App\Http\Controllers\VideoCallController;
use App\Http\Controllers\WritingAssessmentController;
use App\Http\Controllers\WritingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginCheck']);

    Route::post('/register/send-otp', [AuthController::class, 'sendOtp']);
    Route::post('/register/verify-otp', [AuthController::class, 'verifyOtp']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::post('/teacher/store', [TeacherController::class, 'store']);
    Route::get('/teacher/detail', [TeacherController::class, 'detail']);
    Route::post('/teacher/update', [TeacherController::class, 'update']);
    Route::post('/teacher/reset-password', [TeacherController::class, 'resetPasssword']);
    Route::post('/teacher/delete', [TeacherController::class, 'delete']);
    Route::post('/teacher/activate', [TeacherController::class, 'activate']);
    Route::get('/teacher/search', [TeacherController::class, 'search']);
    Route::get('/teacher/load-more', [TeacherController::class, 'loadMore']);

    Route::get('/students', [StudentController::class, 'index']);
    Route::post('/students/store', [StudentController::class, 'store']);
    Route::get('/students/detail', [StudentController::class, 'detail']);
    Route::post('/students/update', [StudentController::class, 'update']);
    Route::post('/students/reset-password', [StudentController::class, 'resetPasssword']);
    Route::post('/students/delete', [StudentController::class, 'delete']);
    Route::post('/students/activate', [StudentController::class, 'activate']);
    Route::get('/students/search', [StudentController::class, 'search']);
    Route::get('/students/load-more', [StudentController::class, 'loadMore']);

    Route::get('/students-verification', [StudentVerificationController::class, 'index']);
    Route::get('/students-verification/detail', [StudentVerificationController::class, 'detail']);
    Route::post('/students-verification/delete', [StudentVerificationController::class, 'delete']);
    Route::post('/students-verification/activate', [StudentVerificationController::class, 'activate']);
    Route::get('/students-verification/search', [StudentVerificationController::class, 'search']);
    Route::get('/students-verification/load-more', [StudentVerificationController::class, 'loadMore']);

    Route::get('/ielts', [IeltsController::class, 'index']);
    Route::get('/ielts/categories', [IeltsController::class, 'categories']);

    Route::get('/ielts/practice', [IeltsController::class, 'practice']);
    Route::post('/ielts/practice/check', [IeltsController::class, 'check']);

    Route::get('/ielts/mock-test/instructuion', function(Request $r){
        return view('ielts.instruction', [
            'redirect' => '/ielts/mock-test?set-id=' . $r->query('set-id') . '&section=' . $r->query('section') 
        ]);
    });
    Route::get('/ielts/mock-test', [IeltsController::class, 'mockTest']);
    Route::post('/ielts/mock-test/check', [IeltsController::class, 'mockTestCheck']);

    // Route::get('/history', [TestHistoryController::class, 'index']);
    // Route::get('/history/load-data', [TestHistoryController::class, 'loadData']);

    Route::get('/history', [TestHistoryController::class, 'index']);
    Route::get('/history/detail', [TestHistoryController::class, 'detail']);
    Route::get('/history/search', [TestHistoryController::class, 'search']);
    Route::get('/history/load-more', [TestHistoryController::class, 'loadMore']);

    Route::get('/test-correction', [TestCorrectionController::class, 'index']);
    Route::get('/writing/get/{id}', [WritingAssessmentController::class, 'detail']);
    Route::post('/writing/assessment/store', [WritingAssessmentController::class, 'store'])->name('writing.assessment.store');


    Route::post('/video-assessment/store', [VideoAsessmentController::class, 'store'])->name('video.assessment.store');


    Route::get('/profile', [ProfileController::class, 'index']);
});

Route::get('/test', function () {
    return view('test');
});
