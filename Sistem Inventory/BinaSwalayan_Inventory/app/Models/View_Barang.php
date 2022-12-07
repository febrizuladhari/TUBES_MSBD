<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View_Barang extends Model
{
    use HasFactory;

    public $table = "view_barang";

    public function scopeSearch($query,$term){

        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('id','like',$term)
                 ->orwhere('Nama','like',$term)
                 ->orwhere('Kategori','like',$term)
                 ->orwhere('Gudang','like',$term)
                 ->orwhere('Status','like',$term)
                 ->orwhere('Rak','like',$term)
                ;
        });
    }

    public function scopeSearchadmin($query,$term){

        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('id','like',$term)
                 ->orwhere('Nama','like',$term)
                 ->orwhere('Kategori','like',$term)
                 ->orwhere('Gudang','like',$term)
                 ->orwhere('Status','like',$term)
                 ->orwhere('Rak','like',$term)
                 ->orwhere('Outlet','like',$term)
                 //->orwhere('Supplier','like',$term)

                ;
        });
    }
}
