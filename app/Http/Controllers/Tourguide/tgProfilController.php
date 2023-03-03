<?php

namespace App\Http\Controllers\Tourguide;

use App\Http\Controllers\Controller;
use App\Models\ModelTourguide;
use App\Models\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Dd;

class tgProfilController extends Controller
{
    public function index()
    {
        


        // $tourguide = ModelTourguide::where
        //panggil fungsi user di  model tourguide
        $tourguide = ModelTourguide::with('user')->where('users_id', Auth::user()->id)->first();

        if ($tourguide == null) {
            
            return view('ADMIN.TOURGUIDE.profil.index')->with([
                'user' => Auth::user(),
                'username' => Auth::user()->username,
                'name' => Auth::user()->name,
                'password' => Auth::user()->password,
                'nama_wisata' => '',
                'fp_wisata' => asset('img/foto_profil_wisata/default.png'),
                'no_telp' => '',
                'alamat' => '',
                'email' => '',
                'deskripsi' => '',
                'latitude' => '',
                'longitude' => '',
                'jam_buka' => '',
                'jam_tutup' => '',
            ]);
        }else {
            return view('ADMIN.TOURGUIDE.profil.index')->with([
                'user' => Auth::user(),
                'username' => Auth::user()->username,
                'name' => Auth::user()->name,
                'password' => Auth::user()->password,
                'nama_wisata' => $tourguide->nama_wisata,
                'fp_wisata' => asset('img/foto_profil_wisata/' . $tourguide->fp_wisata),
                'no_telp' => $tourguide->no_telp,
                'alamat' => $tourguide->alamat,
                'email' => $tourguide->email,
                'deskripsi' => $tourguide->deskripsi,
                'latitude' => $tourguide->latitude,
                'longitude' => $tourguide->longitude,
                'jam_buka' => $tourguide->jam_buka,
                'jam_tutup' => $tourguide->jam_tutup,
            ]);
        }




        
    }


    public function update(Request $request)
    {
        //validasi name, username, password, nama_wisata, fp_wisata, no_telp, alamat, email, deskripsi, latitude, longitude, jam_buka, jam_tutup, deskripsi
        try {
            $user = ModelUser::where('id', Auth::user()->id)->first();
            $cekData = ModelTourguide::where('users_id', $user->id)->first();

            if ($cekData) {
                $tourguide = ModelTourguide::where('users_id', $user->id)->first();
                if ($request->password == null) {
                } else if (Hash::check($request->password, $user->password)) {
                } else {
                    $user->password = Hash::make($request->password);
                    $user->save();
                }
                $user->name = $request->name;
                $tourguide->nama_wisata = $request->nama_wisata;
                if ($request->hasFile('fp_wisata')) {
                    $file = $request->file('fp_wisata');
                    $nama_file = time() . "_" . $file->getClientOriginalName();
                    $tujuan_upload = 'img/foto_profil_wisata';
                    $file->move($tujuan_upload, $nama_file);
                    $tourguide->fp_wisata = $nama_file;
                } else {
                    return back()->response()->json(['status' => 'error', 'message' => 'Foto wisata tidak boleh kosong.']);
                }
                $tourguide->no_telp = $request->no_telp;
                $tourguide->alamat = $request->alamat;
                $tourguide->email = $request->email;
                $tourguide->deskripsi = $request->deskripsi;
                $tourguide->latitude = $request->latitude;
                $tourguide->longitude = $request->longitude;
                $tourguide->jam_buka = $request->jam_buka;
                $tourguide->jam_tutup = $request->jam_tutup;
                $tourguide->save();
                return response()->json(['status' => 'success', 'message' => 'Data berhasil diubah.']);
            } else {
                $tourguide = new ModelTourguide();
                $tourguide->users_id = $user->id;
                $user->name = $request->name;
                $tourguide->nama_wisata = $request->nama_wisata;
                if ($request->hasFile('fp_wisata')) {
                    $file = $request->file('fp_wisata');
                    $nama_file = time() . "_" . $file->getClientOriginalName();
                    $tujuan_upload = 'img/foto_profil_wisata';
                    $file->move($tujuan_upload, $nama_file);
                    $tourguide->fp_wisata = $nama_file;
                }
                $tourguide->no_telp = $request->no_telp;
                $tourguide->alamat = $request->alamat;
                $tourguide->email = $request->email;
                $tourguide->deskripsi = $request->deskripsi;
                $tourguide->latitude = $request->latitude;
                $tourguide->longitude = $request->longitude;
                $tourguide->jam_buka = $request->jam_buka;
                $tourguide->jam_tutup = $request->jam_tutup;
                $tourguide->save();
                return back()->response()->json(['status' => 'success', 'message' => 'Data berhasil diubah.']);
            }
        } catch (\Exception $e) {
            return back()->response()->json(['status' => 'error', 'message' => 'Data gagal diubah.']);
        }
        // return response()->json(['status' => 'error', 'message' => $request->all()]);
    }
}
