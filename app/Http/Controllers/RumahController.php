<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    //get data rumah
    public function get()
    {
        $data = Rumah::get();
        return response()->json($data);
    }
    public function post(Request $request)
    {
        $user_id = $request->user_id;
        $nama_pemilik = $request->namaPemilik;
        $nik = $request->NIKPemilik;
        $alamat = $request->alamatRumah;
        $no_telp = $request->noTelfon;
        $provinsi = $request->provinsi;
        $kota = $request->kota;
        $kodepos = $request->kodePos;
        $batas_penitipan = $request->batasPenitipan;
        $catatan = $request->catatan;
        $status = $request->status;
        $confirm = $request->confirmed;

        $post = Rumah::create([
            'user_id' => $user_id,
            'namaPemilik' => $nama_pemilik,
            'NIKPemilik' => $nik,
            'alamatRumah' => $alamat,
            'noTelfon' => $no_telp,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kodePos' => $kodepos,
            'batasPenitipan' => $batas_penitipan,
            'catatan' => $catatan,
            'status' => $status,
            'confirmed' => $confirm
        ]);

        if ($post) {
            return response()->json([
                'status' => "Berhasil Menambah Data Rumah",
                'data' => $post
            ]);
        } else {
            return response()->json([
                'status' => "Gagal Menambah Data Rumah",
                'data' => null
            ]);
        }
    }
}
