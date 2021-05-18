<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = "tbl_penitipan_barang";
    protected $fillable = [
        'user_id',
        'namaPemilik',
        'NIKPemilik',
        'alamatRumah',
        'noTelfon',
        'provinsi',
        'kota',
        'kodePos',
        'namaBarang',
        'merekbarang',
        'warnaBarang',
        'jenisBarang',
        'noSeriBarang',
        'batasPenitipan',
        'catatan',
        'status',
        'confirmed'
    ];
}
