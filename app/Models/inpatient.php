<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inpatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_patiens',
        'id_kamar',
        'tangal_penerima',
        'tanggal_dismisi',
        'lab_no',
    ];
}
