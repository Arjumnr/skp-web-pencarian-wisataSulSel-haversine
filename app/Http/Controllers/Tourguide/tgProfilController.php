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
        return view('ADMIN.TOURGUIDE.profil.index')->with([
            'user' => Auth::user(),
            'tourguide' => $tourguide,
        ]);
    }

    public function update(Request $request)
    {
        //validasi name, username, password, nama_wisata, fp_wisata, no_telp, alamat, email, deskripsi, latitude, longitude, jam_buka, jam_tutup, deskripsi

    }
}
