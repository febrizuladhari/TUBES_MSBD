<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req_Pembelian extends Model
{
    use HasFactory;

    protected $table = 'req_pembelians';

    public $timestamps = true;

    protected $fillable = [
        'id_kategori',
        'id_user',
        'nama_barang'
    ];
}
