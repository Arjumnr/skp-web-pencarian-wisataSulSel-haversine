<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\ModelTourguide;
use App\Models\ModelWisata;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

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

        // $initialMarkers = [
        //    // pantai losari || bugis waterpark 
        //     [
        //         'title' => 'Pantai Losari',
        //         'lat' =>  -5.14018573065,
        //         'lng' => 119.406559467
        //     ],
        //     // pantai losari || bugis waterpark 
        //     [
        //         'title' => 'Bugis Waterpark',
        //         'lat' =>  -5.15430183771,
        //         'lng' => 119.493916333
        //     ],
        // ];
        return view('APPS.index', compact('initialMarkers'))->with([
            'data' => $data,
        ]);
    }

    public function detail($id)
    {
        
        $dataKuliner = ModelWisata:: where('kategori', 'kuliner')->where('wisata_tg_id', $id)->get();
        $dataSpotFoto = ModelWisata:: where('kategori', 'spot_foto')->where('wisata_tg_id', $id)->get();
        return view('APPS.wisata')->with([
            'dataKuliner' => $dataKuliner,
            'dataSpotFoto' => $dataSpotFoto,
        ]);
    }


}
