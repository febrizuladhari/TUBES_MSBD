<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

use DB;
use App\Models\View_Dipinjam;
use App\Models\View_Barang;
use App\Models\View_Req_Pembelian;
use App\Models\View_Req_Peminjaman;
use App\Models\View_Rusak;
use App\Models\view_rak;
use App\Models\Log_Update_Barang;
use App\Models\Log_Delete_Barang;
use App\Models\Log_Update_User;
use App\Models\Log_Delete_User;
use App\Models\History_Rusak;

use Illuminate\Support\Facades\Auth;

use App\Exports\ListBarangExport;
use App\Models\History_Pinjam;
use Maatwebsite\Excel\Facades\Excel;

class LogController extends Controller
{
    public function showLogUpdateBarang()
    {
        $logUpdateBarangs = Log_Update_Barang::all();

        return view('superadmin.logupdatebarangsuperadmin', compact('logUpdateBarangs'));
    }

    public function showLogDeleteBarang()
    {
        $logDeleteBarangs = Log_Delete_Barang::all();

        return view('superadmin.logdeletebarangsuperadmin', compact('logDeleteBarangs'));
    }

    public function showLogUpdateUser()
    {
        $logUpdateUsers = Log_Update_User::all();

        return view('superadmin.logupdateusersuperadmin', compact('logUpdateUsers'));
    }

    public function showLogDeleteUser()
    {
        $logDeleteUsers = Log_Delete_User::all();

        return view('superadmin.logdeleteusersuperadmin', compact('logDeleteUsers'));
    }

    public function historyitem()
    {
        // $pinjams = History_Pinjam::join('outlets','history_perpindahans.id_outlet_peminjam','=','outlets.id')->join('users','history_perpindahans.id_user','=','users.id')->select('history_perpindahans.id','history_perpindahans.id_barang','history_perpindahans.id_outlet_peminjam','history_perpindahans.tanggal_keluar','history_perpindahans.tanggal_kembali','users.nama')->get();
        // $rusaks = History_Rusak::all();

        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                $pinjams = History_Pinjam::join('outlets','history_perpindahans.id_outlet_peminjam','=','outlets.id')->join('users','history_perpindahans.id_user','=','users.id')->select('history_perpindahans.id','history_perpindahans.id_barang','history_perpindahans.id_outlet_peminjam','history_perpindahans.tanggal_keluar','history_perpindahans.tanggal_kembali','users.nama')->get();
                $rusaks = History_Rusak::all();

                return view('admin.historyitemadmin', [
                    'pinjams'=>$pinjams,
                    'rusaks'=>$rusaks,
                ]);
            } elseif ($user->level == 'superadmin') {
                $pinjams = History_Pinjam::join('outlets','history_perpindahans.id_outlet_peminjam','=','outlets.id')->join('users','history_perpindahans.id_user','=','users.id')->select('history_perpindahans.id','history_perpindahans.id_barang','history_perpindahans.id_outlet_peminjam','history_perpindahans.tanggal_keluar','history_perpindahans.tanggal_kembali','users.nama')->get();
                $rusaks = History_Rusak::all();

                return view('superadmin.historyitem', [
                    'pinjams'=>$pinjams,
                    'rusaks'=>$rusaks,
                ]);
            }
        }

    }
}
