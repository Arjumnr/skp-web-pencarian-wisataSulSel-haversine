<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    public function index()
    {
        return view('ADMIN.wisata')->with([
            'user' => Auth::user(),
        ]);
    }
}
