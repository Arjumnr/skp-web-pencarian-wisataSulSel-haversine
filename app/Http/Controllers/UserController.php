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

        return view('ADMIN.users.index')->with(
            [
                'user' => Auth::user(),
            ],

        );
    }

    public function store(Request $request)
    {

        User::updateOrCreate(
            ['id' => $request->id],
            [
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]
        );

        return response()->json(['success' => 'Post saved successfully.']);
    }

    public function edit($id)
    {
        $dataUser = User::find($id);
        return response()->json($dataUser);
    }

    public function update(Request $request, $id)
    {
        $dataUser = User::find($id);
        $cekUsername = User::where('username', $request->username)->first();
        if ($cekUsername) {
            if ($cekUsername->id != $id) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Username sudah digunakan'
                ]);
            }
        }

        $dataUser->update(
            [
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]
        );
        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil diubah',
        ]);
    }

    public function destroy($id)
    {
        $dataUser = User::find($id);
        $dataUser->delete();

        return response()->json(['success' => 'Post deleted successfully.']);
    }
}
