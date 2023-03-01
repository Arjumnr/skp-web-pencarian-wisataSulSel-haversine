<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
use App\Models\ModelWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahUser = ModelUser::count();
        $jumlahKuliner = ModelWisata::where('kategori', 'kuliner')->count();
        $jumlahSpotFoto = ModelWisata::where('kategori', 'spot_foto')->count();
        return view('ADMIN.index')->with([
            'user' => Auth::user(),
            'jumlahUser' => $jumlahUser,
            'jumlahKuliner' => $jumlahKuliner,
            'jumlahSpotFoto' => $jumlahSpotFoto,
        ]);
    }
}
