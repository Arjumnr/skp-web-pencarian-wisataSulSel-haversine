<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('ADMIN.user')->with([
            'user' => Auth::user(),
        ]);
    }
}
