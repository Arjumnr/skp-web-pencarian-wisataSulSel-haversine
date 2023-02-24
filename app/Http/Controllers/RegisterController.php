<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $cek = $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Nama tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );
        
        $dataUser = User::where('username', $request->username)->first();
            
        if ($dataUser) {
            //toast
            return redirect()->back()->with('error', 'Username Sudah Terdaftar');
        } else {
            // $data = [
            //     'username' => $request->username,
            //     'password' => $request->password,
            //     'role' => 'user',
            // ];

            // User::create($data);
            // Alert::success('Berhasil', 'Akun Berhasil Dibuat');
            // return redirect()->route('login');
        }
    
        

        // if ($cek == false) {
        //     //send error message to alert session status
        //     return redirect()->back()->withErrors($cek)->withInput();
        // } else {
        //     $dataUser = User::where('username', $request->username)->first();

        //     if ($dataUser){
        //         Alert::error('Username Sudah Terdaftar');
        //     }
        // }
    }
}
