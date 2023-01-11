<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Pinjam extends Model
{
    use HasFactory;
    public $table = "history_perpindahans";
    public $timestamps = true;

    protected $fillable = [
        'id_barang',
        'id_outlet_peminjam',
        'tanggal_keluar',
        'tanggal_kembali',
        'id_user'
    ];
}
