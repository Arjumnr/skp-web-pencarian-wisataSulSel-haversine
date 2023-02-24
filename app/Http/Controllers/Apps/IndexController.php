<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class IndexController extends Controller
{
    public function index()
    {

        //tampilkan lokasi saya 
        $ip = request()->ip();
        $location = Location::get($ip);
        $lat = $location->latitude;
        $long = $location->longitude;
        $initialMarkers = [
            [
                'title' => 'Lokasi Saya',
                'lat' => $lat,
                'lng' => $long,
                'description' => 'Lokasi Saya',
                'icon' => 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png',
            ],
        ];
        return view('APPS._layouts.index', compact('initialMarkers'));
    }
}
