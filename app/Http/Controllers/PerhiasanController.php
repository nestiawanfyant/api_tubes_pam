<?php

namespace App\Http\Controllers;

use App\Models\Perhiasan;
use Illuminate\Http\Request;

class PerhiasanController extends Controller
{
    //get data perhiasan
    public function get()
    {
        $data = Perhiasan::get();
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
        $jenis_perhiasan = $request->jenisPerhiasan;
        $berat_perhiasan = $request->beratPerhiasan;
        $batas_penitipan = $request->batasPenitipan;
        $catatan = $request->catatan;
        $status = $request->status;
        $confirm = $request->confirmed;

        $post = Perhiasan::create([
            'user_id' => $user_id,
            'namaPemilik' => $nama_pemilik,
            'NIKPemilik' => $nik,
            'alamatRumah' => $alamat,
            'noTelfon' => $no_telp,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kodePos' => $kodepos,
            'jenisPerhiasan' => $jenis_perhiasan,
            'beratPerhiasan' => $berat_perhiasan,
            'batasPenitipan' => $batas_penitipan,
            'catatan' => $catatan,
            'status' => $status,
            'confirmed' => $confirm
        ]);

        if ($post) {
            return response()->json([
                'status' => "Berhasil Menambah Data Perhiasan",
                'data' => $post
            ]);
        } else {
            return response()->json([
                'status' => "Gagal Menambah Data Perhiasan",
                'data' => null
            ]);
        }
    }
}
