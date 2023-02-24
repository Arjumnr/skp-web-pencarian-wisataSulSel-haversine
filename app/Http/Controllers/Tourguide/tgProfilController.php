<?php

namespace App\Http\Controllers\Tourguide;

use App\Http\Controllers\Controller;
use App\Models\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Termwind\Components\Dd;

class tgProfilController extends Controller
{
    public function index()
    {
        $tourguide = ModelUser::where('id', Auth::user()->id)->first();
        // dd ($tourguide);
        return view('ADMIN.TOURGUIDE.profil.index')->with([
            'user' => Auth::user(),
            'tourguide' => $tourguide,

        ]);
    }

    public function update(Request $request)
    {
        dd ($request->all());
        try {
            //req pasword
            $password = $request->password;
            $cekUser = ModelUser::where('id', Auth::user()->id)->first();
            //cek password
            if ($password == '' || $password == $cekUser->password) {
                $password = $cekUser->password;
            } else {
                $password = encrypt($password);
            }
            
            
            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Diubah'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Gagal Diubah'
            ]);
        }
    }
}
