<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi_Rak extends Model
{
    use HasFactory;

    public $table = "lokasi_raks";
    public $timestamps = true;
    protected $fillable = [
        'id_gudang',
        'rak'
    ];
}
