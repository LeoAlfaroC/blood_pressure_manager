<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function attempt(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('dashboard'));
        } else {
            return back()->with(['failure' => 'Incorrect credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
