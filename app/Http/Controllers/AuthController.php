<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Fungsi untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Fungsi untuk melakukan proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman dashboard atau halaman lain yang sesuai
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    // Fungsi untuk melakukan proses logout
    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
