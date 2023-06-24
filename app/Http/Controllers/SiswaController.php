<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function register()
    {
        return view('user.register.index');
    }
    public function registerPost(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'email' => ['required', 'email', Rule::unique('siswas', 'email')->ignore($request->id)],
            'password' => 'required',
        ]);

        $siswa = new Siswa();

        $siswa->username=$request->username;
        $siswa->email=$request->email;
        $siswa->password = Hash::make($request->password);
        $siswa->kode_kelas = null;

        $siswa->save();
        return back()->with('success','Register successfullyi');
    }

    public function login()
    {
        return view('user.login.index');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) 
        {
            return redirect()->route('user.dashboard')->with('success', 'Login Berhasil');
        }
        return back()->with('error','Email or Password salah');
    }
}
