<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_Hilang extends Model
{
    use HasFactory;
    public $table = "laporan_hilangs";
    public $timestamps = true;
    protected $fillable = [
        'id_barang',
        'tanggal_hilang',
        'id_user'
    ];
}
