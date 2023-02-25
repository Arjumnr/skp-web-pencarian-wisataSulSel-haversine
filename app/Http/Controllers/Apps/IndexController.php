<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $initialMarkers = [
           // pantai losari || bugis waterpark 
            [
                'title' => 'Pantai Losari',
                'lat' =>  -5.14018573065,
                'lng' => 119.406559467
            ],
            // pantai losari || bugis waterpark 
            [
                'title' => 'Bugis Waterpark',
                'lat' =>  -5.15430183771,
                'lng' => 119.493916333
            ],
        ];
        return view('APPS.index', compact('initialMarkers'));
    }
}
