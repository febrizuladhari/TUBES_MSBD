<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Rusak extends Model
{
    use HasFactory;

    public $table = "history_rusak";
    public $timestamps = true;
    protected $fillable = [
        'id_barang',
        'tanggal_rusak',
        'tanggal_bagus',
        'lokasi',
        'catatan',
        'bukti'
    ];

}
