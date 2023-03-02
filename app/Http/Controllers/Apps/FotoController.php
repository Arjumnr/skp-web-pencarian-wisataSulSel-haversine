<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\ModelWisata;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        $dataSpotFoto = ModelWisata:: where('kategori', 'spot_foto')->get();
        return view('APPS.wisata-foto')->with([
            'dataSpotFoto' => $dataSpotFoto,    
        ]);
    }
}
