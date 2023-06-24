<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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
}

// <?php

// namespace App\Http\Controllers;
// use App\Models\Siswa;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Validation\Rule;

// class SiswaController extends Controller
// {
//     public function register()
//     {
//         return view('user.register.index');
//     }
//     public function registerPost(Request $request)
//     {

//         $request->validate([
//             'username' => 'required',
//             'email' => ['required', 'email', Rule::unique('siswas', 'email')->ignore($request->id)],
//             'password' => 'required',
//         ]);

//         $siswa = new Siswa();

//         $siswa->username=$request->username;
//         $siswa->email=$request->email;
//         $siswa->password = Hash::make($request->password);
//         $siswa->kode_kelas = null;

//         $siswa->save();
//         return back()->with('success','Register successfullyi');
//     }
// }

