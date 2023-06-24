<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('user/dashboard/index');
        } else {
            // Jika autentikasi gagal
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }
    }
}
