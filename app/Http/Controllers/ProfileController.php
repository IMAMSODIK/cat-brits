<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            $data = [
                'pageTitle' => "Profile",
                'data' => User::find(Auth::id())
            ];

            return view('profile.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }

    public function profilePublic($id)
    {
        try {
            $data = [
                'pageTitle' => "Profile",
                'data' => User::find($id)
            ];

            return view('profile.index_public', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048'
        ]);

        $user = auth()->user();
        $user->name = $request->name;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('profile', 'public');
            $user->foto = $path;
        }

        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Profile updated successfully'
        ]);
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:5|confirmed',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Current password is incorrect'
            ], 422);
        }

        if (Hash::check($request->new_password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'New password must be different from current password'
            ], 422);
        }
        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        Auth::logout();
        session()->invalidate();
        session()->regenerate();

        return response()->json([
            'status' => true,
            'message' => 'Password updated successfully'
        ]);
    }
}
