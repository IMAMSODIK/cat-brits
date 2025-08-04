<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendOtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginCheck(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'email' => 'required|string',
            'password' => 'required|min:5'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        if (Auth::attempt(['email' => $r['email'], 'password' => $r['password']])) {
            $r->session()->regenerate();

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'redirect' => '/dashboard'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials'
        ], 401);
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);

        $otp = rand(100000, 999999);
        $email = $request->email;

        session([
            'otp' => $otp,
            'otp_email' => $email,
            'otp_data' => $request->only('name', 'password')
        ]);

        Mail::to($request->email)->send(new SendOtpMail($otp, $request->name));

        return response()->json([
            'status' => 'otp_sent',
            'message' => 'OTP sent to your email.'
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        if ($request->otp != session('otp')) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid OTP.'
            ], 422);
        }

        $userData = session('otp_data');
        $email = session('otp_email');

        $user = User::create([
            'name' => $userData['name'],
            'email' => $email,
            'password' => Hash::make($userData['password']),
            'role' => 'student'
        ]);

        Auth::login($user);

        session()->forget(['otp', 'otp_email', 'otp_data']);

        return response()->json([
            'status' => 'success',
            'message' => 'Registration successful!',
            'redirect' => '/dashboard'
        ]);
    }



    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|max:255|unique:users|regex:/^[a-zA-Z0-9_]+$/',
    //         'password' => 'required|string|min:5|confirmed',
    //     ], [
    //         'name.required' => 'The full name is required.',
    //         'email.required' => 'A Email is required.',
    //         'email.unique' => 'This Email is already taken.',
    //         'email.regex' => 'Email can only contain letters, numbers, and underscores.',
    //         'password.required' => 'A password is required.',
    //         'password.min' => 'Password must be at least 5 characters.',
    //         'password.confirmed' => 'Passwords do not match.',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Validation failed',
    //             'errors' => $validator->errors()
    //         ], 422);
    //     }

    //     $user = User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'password' => Hash::make($request->password),
    //         'role' => 'student'
    //     ]);

    //     Auth::login($user);

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Registration successful!',
    //         'redirect' => '/dashboard'
    //     ]);
    // }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerate();

        return redirect('/login');
    }
}
