<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req_Peminjaman extends Model
{
    use HasFactory;

    public $table = "req_peminjamans";

    protected $fillable = [
        'id_user',
        'id_barang',
        'tanggal_diperlukan'
    ];
}
