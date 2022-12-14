<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi_Gudang extends Model
{
    use HasFactory;

    public $table = "lokasi_gudangs";
    public $timestamps = true;
    protected $fillable = [
        'id_outlet',
        'gudang'
    ];
}
