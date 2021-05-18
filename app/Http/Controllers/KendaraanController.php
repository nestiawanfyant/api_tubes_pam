<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    //get data kendaraan
    public function get()
    {
        $data = Kendaraan::get();
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
        $jenis_kendaraan = $request->jenisKendaraan;
        $merk_kendaraan = $request->merekKendaraan;
        $warna_kendaraan = $request->warnaKendaraan;
        $type_kendaraan = $request->typeKendaraan;
        $no_rangka = $request->nomorRangkaKendaraan;
        $no_mesin = $request->nomotMesinKendaraan;
        $no_plat = $request->nomotPlatKendaraan;
        $batas_penitipan = $request->batasPenitipan;
        $catatan = $request->catatan;
        $status = $request->status;
        $confirm = $request->confirmed;

        $post = Kendaraan::create([
            'user_id' => $user_id,
            'namaPemilik' => $nama_pemilik,
            'NIKPemilik' => $nik,
            'alamatRumah' => $alamat,
            'noTelfon' => $no_telp,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kodePos' => $kodepos,
            'jenisKendaraan' => $jenis_kendaraan,
            'merekKendaraan' => $merk_kendaraan,
            'warnaKendaraan' => $warna_kendaraan,
            'typeKendaraan' => $type_kendaraan,
            'nomorRangkaKendaraan' => $no_rangka,
            'nomotMesinKendaraan' => $no_mesin,
            'nomotPlatKendaraan' => $no_plat,
            'batasPenitipan' => $batas_penitipan,
            'catatan' => $catatan,
            'status' => $status,
            'confirmed' => $confirm
        ]);

        if ($post) {
            return response()->json([
                'status' => "Berhasil Menambah Data Kendaraan",
                'data' => $post
            ]);
        } else {
            return response()->json([
                'status' => "Gagal Menambah Data Kendaraan",
                'data' => null
            ]);
        }
    }
}
