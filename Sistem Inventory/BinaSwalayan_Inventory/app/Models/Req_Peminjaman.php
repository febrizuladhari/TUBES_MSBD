<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req_Peminjaman extends Model
{
    use HasFactory;

    public $table = "req_peminjamans";

    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_kategori',
        'id_rak_peminjam',
        'nama_barang',
        'tanggal_diperlukan'
    ];
}
