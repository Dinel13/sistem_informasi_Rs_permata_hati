<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laboratory extends Model
{
    use HasFactory;

    protected $fillable = [
        'lab_no',
        'id_pasien',
        'id_dokter',
        'jenis_tes',
        'tanggal_tes',
        'jumlah',
    ];
}
