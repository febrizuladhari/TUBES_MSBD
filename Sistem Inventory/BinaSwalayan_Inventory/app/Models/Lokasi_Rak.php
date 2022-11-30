<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi_Rak extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_outlet',
        'rak'
    ];
}
