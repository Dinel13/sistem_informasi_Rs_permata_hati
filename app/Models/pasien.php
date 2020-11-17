<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pasien',
        'nama',
        'umur',
        'gender',['pria','wanita'],
        'alamat',
        'penyakit',
        'id_dokter',
       'id_dokter',
    ];
}
