<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Req_Pembelian;
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
}