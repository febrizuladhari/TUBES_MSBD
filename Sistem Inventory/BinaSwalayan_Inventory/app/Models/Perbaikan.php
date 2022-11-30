<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_barang',
        'tanggal_keluar',
        'tanggal_kembali',
        'lokasi',
        'biaya'
    ];
}
