<?php

namespace App\Http\Controllers\Tourguide;

use App\Http\Controllers\Controller;
use App\Models\ModelWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tgDashboardController extends Controller
{
    public function index()
    {
        $idTG = Auth::user()->id;
        //count wisata kuliner
        $jumlahKuliner = ModelWisata::where('kategori', 'kuliner')->where('wisata_tg_id', $idTG)->count();
        $jumlahSpotFoto = ModelWisata::where('kategori', 'spot_foto')->where('wisata_tg_id', $idTG)->count();
        return view('ADMIN.TOURGUIDE.index')->with([
            'user' => Auth::user(),
            'jumlahKuliner' => $jumlahKuliner,
            'jumlahSpotFoto' => $jumlahSpotFoto,

        ]);
    }
}
