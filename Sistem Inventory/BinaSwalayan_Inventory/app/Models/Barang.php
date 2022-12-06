<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [ 
        'id',
        'nama',
        'id_kategori',
        'id_rak',
        'id_supplier'
    ];
}
