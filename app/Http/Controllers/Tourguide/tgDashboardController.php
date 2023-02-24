<?php

namespace App\Http\Controllers\Tourguide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tgDashboardController extends Controller
{
    public function index()
    {
        return view('ADMIN.TOURGUIDE.index')->with([
            'user' => Auth::user(),
        ]);
    }
}
