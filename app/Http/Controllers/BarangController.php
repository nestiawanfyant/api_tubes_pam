<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    //get data barang
    public function get()
    {
        $data = Barang::get();
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
        $nama_barang = $request->namaBarang;
        $merk_barang = $request->merekbarang;
        $warna_barang = $request->warnaBarang;
        $jenis_barang = $request->jenisBarang;
        $no_seri = $request->noSeriBarang;
        $batas_penitipan = $request->batasPenitipan;
        $catatan = $request->catatan;
        $status = $request->status;
        $confirm = $request->confirmed;

        $post = Barang::create([
            'user_id' => $user_id,
            'namaPemilik' => $nama_pemilik,
            'NIKPemilik' => $nik,
            'alamatRumah' => $alamat,
            'noTelfon' => $no_telp,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kodePos' => $kodepos,
            'namaBarang' => $nama_barang,
            'merekbarang' => $merk_barang,
            'warnaBarang' => $warna_barang,
            'jenisBarang' => $jenis_barang,
            'noSeriBarang' => $no_seri,
            'batasPenitipan' => $batas_penitipan,
            'catatan' => $catatan,
            'status' => $status,
            'confirmed' => $confirm
        ]);

        if ($post) {
            return response()->json([
                'status' => "Berhasil Menambah Barang",
                'data' => $post
            ]);
        } else {
            return response()->json([
                'status' => "Gagal Menambah Barang",
                'data' => null
            ]);
        }
    }
}
