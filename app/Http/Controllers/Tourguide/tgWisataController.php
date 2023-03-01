<?php

namespace App\Http\Controllers\Tourguide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelWisata;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class tgWisataController extends Controller
{
    public function index(Request $request)
    {
        $user_id = auth()->user()->id;
        

        if ($request->ajax()) {
            $data = ModelWisata::where('wisata_tg_id', $user_id)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editWisata ti-pencil"></a>';
                    $btn = $btn . ' <button href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteWisata ti-trash"></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('ADMIN.TOURGUIDE.wisata.index')->with([
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'foto' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'nama' => 'required',
                'kategori' => 'required',
                'deskripsi' => 'required',
            ],
            [
                'foto.required' => 'Foto tidak boleh kosong',
                'nama.required' => 'Nama tidak boleh kosong',
                'kategori.required' => 'Kategori tidak boleh kosong',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            ]
        );

        if ($validasi == false){
            return response()->json(['status' => 'error', 'message' => 'Data tidak boleh kosong.']);
        }


        if (  $request->file('foto')) {
            $file =  $request->file('foto');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/img/wisata/', $name);
        }else{
            return response()->json(['status' => 'error', 'message' => 'File not found.']);
        }

        $user_id = auth()->user()->id;
        try {
            ModelWisata::updateOrCreate(
                ['id' => $request->data_id],
                [
                    'wisata_tg_id' => $user_id,
                    'foto' => $name,
                    'nama' => $request->nama,
                    'kategori' => $request->kategori,
                    'deskripsi' => $request->deskripsi,
                ]
            );
            return response()->json(['status' => 'success', 'message' => 'Save data successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
        // return response()->json($request->file('foto'));
    }

    public function edit($id)
    {
        $dataWisata = ModelWisata::find($id);
        return response()->json($dataWisata);
    }

    public function destroy($id)
    {
        try {
            ModelWisata::find($id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Data deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

}


