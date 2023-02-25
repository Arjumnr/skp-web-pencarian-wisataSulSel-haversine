<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index()
    {
        return view('APPS.wisata-kuliner');
    }
}
