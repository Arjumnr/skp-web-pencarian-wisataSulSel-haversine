<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        return view('APPS.wisata-foto');
    }
}
