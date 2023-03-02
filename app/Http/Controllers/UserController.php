<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $dataUser = User::all();
            return DataTables::of($dataUser)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser ti-pencil"></a>';
                    $btn = $btn . ' <button href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser ti-trash"></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('ADMIN.users.index')->with(
            [
                'user' => Auth::user(),
            ],

        );
    }

    public function store(Request $request)
    {
       try{
            

            $user = User::find($request->data_id);

            if ($request->password == null || Hash::check($request->password, $user->password))
                $password = $user->password;
            else
                $password = bcrypt($request->password);

            

            User::updateOrCreate(
                ['id' => $request->data_id],
                [
                    'name' => $request->name,
                    'username' => $request->username,
                    'password' => $password,
                    'role' => $request->role,
                ]
            );

            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan']);
       }catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
       }
    }

    public function edit($id)
    {
        $dataUser = User::find($id);
        return response()->json($dataUser);
    }

    

    public function destroy($id)
    {
        $dataUser = User::find($id);
        $dataUser->delete();

        return response()->json(['success' => 'Post deleted successfully.']);
    }
}
