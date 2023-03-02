<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelWisata;

class KulinerController extends Controller
{
    public function index()
    {
        $dataKuliner = ModelWisata:: where('kategori', 'kuliner')->get();
        return view('APPS.wisata-kuliner')->with([
            'dataKuliner' => $dataKuliner,
        ]);
    }
}
