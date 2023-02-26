<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ModelTourguide;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

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
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => 'Nama tidak boleh kosong',
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );
        
        $dataUser = User::where('username', $request->username)->first();
            
        if ($dataUser) {
            return redirect()->back()->with('error', 'Username Sudah Terdaftar');
        } else {

            $dataUser = User::where('username', $request->username)->first();
            if ($dataUser) {
                Alert::error('Gagal', 'Username sudah digunakan');
                return back();
            } else {

                $dataUser = new User();
                $dataUser->name = $request->name;
                $dataUser->username = $request->username;
                $dataUser->password = Hash::make($request->password);
                $dataUser->role = 2;
                $dataUser->save();
                
                Alert::success('Berhasil', 'Akun berhasil dibuat');
                return back();
            }
        }

    }
}
