<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Barang;
use App\Models\Req_Pembelian;
use App\Models\Laporan_Rusak;
use App\Models\Perpindahan;
use App\Models\Req_Peminjaman;
use DB;

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

        Alert::success('Nice !', 'Request has been added');
        return redirect()->route('reqbelistaff');
    }

    public function storeAddDamage(Request $request)
    {
        $adddamage = new Laporan_Rusak();
        $adddamage->id_barang = $request->id_barang;
        $adddamage->id_user = Auth::user()->id;
        $adddamage->tanggal = now();
        $adddamage->catatan = $request->catatan;
        $adddamage->save();

        Alert::success('Nice !', 'Report has been added');
        return redirect()->route('adddamagedstaff');
    }

    public function index()
    {
        return view('staff.homestaff');
    }

    public function chartStaff()
    {
    //     /* Staff Pending Shifting */
    //     $shifting = Req_Peminjaman::select(DB::raw("COUNT(*) as countPinjam"))
    //                 ->pluck('countPinjam');

    //     /* Staff Pending Damaged */
    //     $damaged = Laporan_Rusak::select(DB::raw("COUNT(*) as countRusak"))
    //                 ->pluck('countRusak');

    //     /* Staff Pending Incoming */
    //     $incoming = Req_Pembelian::select(DB::raw("COUNT(*) as countBeli"))
    //                 ->pluck('countBeli');

        // Total Items
        $totalItems = Barang::count();

        // Total Approve Shifting
        $totalAccShifting = Req_Peminjaman::count();

        // Total Approve Damaged
        $totalAccDamaged = Laporan_Rusak::count();

        // Total Approve Incoming
        $totalAccIncoming = Req_Pembelian::count();

        $dataShifting = $totalAccShifting;
        $dataDamaged = $totalAccDamaged;
        $dataIncoming = $totalAccIncoming;

        return view('staff.homestaff',

            compact('dataShifting', 'dataDamaged', 'dataIncoming',
                    'totalItems', 'totalAccShifting', 'totalAccDamaged', 'totalAccIncoming'
            ));
    }
}
