<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Yajra\DataTables\DataTables;


class UserController extends Controller
{

    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $dataUser = User::all();
            return DataTables::of($dataUser)->addIndexColumn()->addColumn(
                'action',
                function ($row) {
                    $button = '<button type="button" name="edit" id="' . $row->id . '" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" id="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                }
            )->make(true);
        }
        
        return view('ADMIN.user')->with(
            [
                'user' => Auth::user(),
            ]
        );
        
    }
   

   
}
