<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    //
    protected $table = "tbl_penitipan_kendaraan";
    protected $fillable = [
        'user_id',
        'namaPemilik',
        'NIKPemilik',
        'alamatRumah',
        'noTelfon',
        'provinsi',
        'kota',
        'kodePos',
        'jenisKendaraan',
        'merekKendaraan',
        'warnaKendaraan',
        'typeKendaraan',
        'nomorRangkaKendaraan',
        'nomotMesinKendaraan',
        'nomotPlatKendaraan',
        'batasPenitipan',
        'catatan',
        'status',
        'confirmed'
    ];
}
