<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perhiasan extends Model
{
    //
    protected $table = "tbl_penitipan_perhiasan";
    protected $fillable = [
        'user_id',
        'namaPemilik',
        'NIKPemilik',
        'alamatRumah',
        'noTelfon',
        'provinsi',
        'kota',
        'kodePos',
        'jenisPerhiasan',
        'beratPerhiasan',
        'batasPenitipan',
        'catatan',
        'status',
        'confirmed'
    ];
}
