<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    //
    protected $table = "tbl_penitipan_rumah";
    protected $fillable = [
        'user_id',
        'namaPemilik',
        'NIKPemilik',
        'alamatRumah',
        'noTelfon',
        'provinsi',
        'kota',
        'kodePos',
        'batasPenitipan',
        'catatan',
        'status',
        'confirmed'
    ];
}
