<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\ModelTourguide;
use App\Models\ModelWisata;


class IndexController extends Controller
{
    public function index()
    {

        //get Model Tourguide 
        $data = ModelTourguide::all();
        //untuk menampilkan data tourguide di halaman index
        $initialMarkers = [];
        foreach ($data as $key => $value) {
            $initialMarkers[] = [
                'title' => $value->nama_wisata,
                'lat' => $value->latitude,
                'lng' => $value->longitude
            ];
        }

      
        return view('APPS.index', compact('initialMarkers'))->with([
            'data' => $data,
        ]);
    }

    public function detail($id)
    {
        
        $dataKuliner = ModelWisata:: where('kategori', 'kuliner')->where('wisata_tg_id', $id)->get();
        $dataSpotFoto = ModelWisata:: where('kategori', 'spot_foto')->where('wisata_tg_id', $id)->get();
        $tourguide = ModelTourguide::with('user')->where('users_id', $id)->first();
        return view('APPS.wisata')->with([
            'dataKuliner' => $dataKuliner,
            'dataSpotFoto' => $dataSpotFoto,
            'tourguide' => $tourguide,
        ]);
    }



}
