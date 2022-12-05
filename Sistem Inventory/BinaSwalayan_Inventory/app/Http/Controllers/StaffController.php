<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Req_Pembelian;
use App\Models\Laporan_Rusak;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function storeReqBuy(Request $request)
    {
        $reqbuy = new Req_Pembelian();
        $reqbuy->id_user = Auth::user()->id;
        $reqbuy->id_kategori = $request->id_kategori;
        $reqbuy->nama_barang = $request->nama_barang;
        $reqbuy->save();        
        Alert::success('Nice !', 'Request Has Been Added');
        return redirect('/reqbelistaff');
    }

    public function storeAddDamage(Request $request)
    {
        $adddamage = new Laporan_Rusak();
        $adddamage->id_barang = $request->id_barang;
        $adddamage->id_user = Auth::user()->id;
        $adddamage->tanggal = now();
        $adddamage->catatan = $request->catatan;
        $adddamage->save();        
        Alert::success('Nice !', 'Report Has Been Added');
        return redirect('/adddamagedstaff');
    }
}