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


use App\Exports\ListBarangExport;
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
}
