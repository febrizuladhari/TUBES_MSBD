<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpindahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_keluar',
        'id_barang',
        'id_outlet_peminjam',
        'id_user'
    ];
}
