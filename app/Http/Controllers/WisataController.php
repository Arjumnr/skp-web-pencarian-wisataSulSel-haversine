<?php

namespace App\Http\Controllers;

use App\Models\ModelWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class WisataController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            // $dataWisata = ModelWisata::with('tourguide')->with('tourguide.user')->get();
            $dataWisata = ModelWisata::all();
            return DataTables::of($dataWisata)
                ->addIndexColumn()
                // ->addColumn('action', function ($row) {
                //     $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editWisata ti-pencil"></a>';
                //     $btn = $btn . ' <button href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteWisata ti-trash"></button>';
                //     return $btn;
                // })
                // ->rawColumns(['action'])
                ->make(true);
        }

        return view('ADMIN.wisata.index')->with([
            'user' => Auth::user(),
        ]);
    }
}
