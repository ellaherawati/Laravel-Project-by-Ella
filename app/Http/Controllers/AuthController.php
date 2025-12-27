<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');

    }

    public function login (Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',

        ]);

        if (Auth::attempt(($request->only('email','password')))){
            return redirect()->route('dashboard');
        } else {
            return back()->withError(['email'=> 'The provided credentials do not match our records.']);
        }
    }

    public function dashboard()
    { 
        return view ('dashboard.index');

    }

    public function indexregister()
    {
        return view('auth.register');
    }

    public function register (Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    return redirect()->route('login-index')->with('status', 'registrasi berhasil');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'anda telah logout');
    }
}
