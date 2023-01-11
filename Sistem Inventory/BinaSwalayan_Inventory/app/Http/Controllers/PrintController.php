<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Barang;
use App\Models\Outlet;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Lokasi_Rak;
use App\Models\Lokasi_Gudang;
use App\Models\Perpindahan;
use App\Models\Perbaikan;
use App\Models\Req_Pembelian;
use App\Models\Req_Peminjaman;
use App\Models\View_Rusak;
use App\Models\View_Dipinjam;
use App\Models\View_Barang;
use App\Models\History_Pinjam;
use App\Models\History_Rusak;
use App\Models\Laporan_Hilang;
use App\Models\Laporan_Rusak;
use App\Models\View_Perbaikan;
use Barryvdh\DomPDF\Facade\PDF;
use Carbon\Carbon;

class PrintController extends Controller
{
    // public $startDate;
    // public $endDate;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function printBarang()
    {
        return view('admin.printitemadmin');
    }

    public function printBarangPdf($startDate, $endDate)
    {
        $no = 1;
        $cetakBarang = DB::table('barangs')->whereBetween('barangs.created_at',[$startDate, $endDate])
                    ->join('suppliers', 'barangs.id_supplier', '=', 'suppliers.id')->join('kategoris', 'barangs.id_kategori', '=', 'kategoris.id')->join('lokasi_raks', 'barangs.id_rak', '=', 'lokasi_raks.id')->join('lokasi_gudangs', 'lokasi_raks.id_gudang', '=', 'lokasi_gudangs.id')->join('outlets', 'lokasi_gudangs.id_outlet', '=', 'outlets.id')
                    ->select('barangs.id', 'barangs.nama', 'kategoris.nama_kategori AS kategori', 'lokasi_raks.rak', 'lokasi_gudangs.gudang', 'outlets.nama AS outlet', 'suppliers.nama AS supplier')
                    // ->DB::selectOne('select exists(select barangs.id from perbaikans where barangs.id = perbaikans.id_barang LIMIT 1) = 1 then "Perbaikan"')
                    // ->DB::selectOne('select exists(select barangs.id from laporan_rusak where barangs.id = laporan_rusak.id_barang LIMIT 1) = 1 then "Rusak"')
                    // ->DB::selectOne('select exists(select barangs.id from perpindahans where barangs.id = perpindahans.id_barang LIMIT 1) = 1 then "Dipinjam"')
                    // ->DB::selectOne('select exitts(select barangs.id from laporan_hilangs where barangs.id = laporan_hilangs.id_barang LIMIT 1) = 1 then "Hilang"')
                    ->latest('barangs.created_at')->get();

        $waktuPrint = Carbon::now();

        $pdf = PDF::loadView('admin.hasilprintbarangadmin', compact('no', 'cetakBarang', 'waktuPrint'));
        $pdf->setPaper('a4', 'landscape')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Items.pdf');

    }

    public function printKategori()
    {
        return view('admin.printkategoriadmin');
    }

    public function printKategoriPdf($startDate, $endDate)
    {
        // dd("Mulai : ".$startDate, "Akhir : ".$endDate);

        $no = 1;
        $cetakKategori = Kategori::whereBetween('created_at',[$startDate, $endDate])->latest()->get();

        $kategoris = Barang::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("id_kategori"))->orderBy('id','ASC')->pluck('count');

        $jumlah = $kategoris->values();
        $waktuPrint = Carbon::now();
        // $dataKategoris = Barang::join('kategoris', 'barangs.id_kategori', '=', 'kategoris.id')->select('barangs.id', 'barangs.id_kategori', 'kategoris.nama_kategori', 'barangs.created_at')->whereBetween('created_at',[$startDate, $endDate])->latest()->get();

        $pdf = PDF::loadView('admin.hasilprintkategoriadmin', compact('no', 'cetakKategori', 'jumlah', 'waktuPrint'));
        $pdf->setPaper('a4', 'portrait')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Categories.pdf');

        // return view('admin.hasilprintkategoriadmin', compact('no', 'cetakKategori', 'kategoris', 'dataKategoris'));
    }

    public function printSupplier()
    {
        return view('admin.printsupplieradmin');
    }

    public function printSupplierPdf($startDate, $endDate)
    {
        $no = 1;
        $cetakSupplier = Supplier::whereBetween('created_at',[$startDate, $endDate])->latest()->get();

        $suppliers = Barang::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("id_supplier"))->orderBy('id','ASC')->pluck('count');

        $jumlah = $suppliers->values();
        $waktuPrint = Carbon::now();

        $pdf = PDF::loadView('admin.hasilprintsupplieradmin', compact('no', 'cetakSupplier', 'jumlah', 'waktuPrint'));
        $pdf->setPaper('a4', 'portrait')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Suppliers.pdf');

    }

    public function printFinishRepair()
    {
        return view('admin.printfinishrepairadmin');
    }

    public function printFinishRepairPdf($startDate, $endDate)
    {
        $no = 1;
        $cetakFinishRepair = DB::table('perbaikans')->whereBetween('perbaikans.created_at',[$startDate, $endDate])->join('barangs', 'perbaikans.id_barang', '=', 'barangs.id')->join('kategoris', 'barangs.id_kategori', '=', 'kategoris.id')->join('lokasi_raks', 'barangs.id_rak', '=', 'lokasi_raks.id')->join('lokasi_gudangs', 'lokasi_raks.id_gudang', '=', 'lokasi_gudangs.id')->join('outlets', 'lokasi_gudangs.id_outlet', '=', 'outlets.id')
                            ->select('perbaikans.id_barang AS id', 'barangs.nama AS nama_barang', 'kategoris.nama_kategori AS kategori', 'lokasi_raks.rak AS rak', 'lokasi_gudangs.gudang AS gudang', 'outlets.nama AS nama', 'perbaikans.tanggal_kembali', 'perbaikans.tanggal_keluar', 'perbaikans.lokasi', 'perbaikans.catatan')
                            ->latest('perbaikans.created_at')->get();

        $waktuPrint = Carbon::now();

        $pdf = PDF::loadView('admin.hasilprintfinishrepairadmin', compact('no', 'cetakFinishRepair', 'waktuPrint'));
        $pdf->setPaper('a4', 'landscape')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Repair Items.pdf');

    }

    public function printLostItem()
    {
        return view('admin.printlostitemadmin');
    }

    public function printLostItemPdf($startDate, $endDate)
    {
        $no = 1;
        $cetakLost = DB::table('laporan_hilangs')->whereBetween('laporan_hilangs.created_at',[$startDate, $endDate])
                    ->join('barangs', 'laporan_hilangs.id_barang', '=', 'barangs.id')->join('kategoris', 'barangs.id_kategori', '=', 'kategoris.id')->join('lokasi_raks', 'barangs.id_rak', '=', 'lokasi_raks.id')->join('lokasi_gudangs', 'lokasi_raks.id_gudang', '=', 'lokasi_gudangs.id')->join('users', 'laporan_hilangs.id_user', '=', 'users.id')->join('outlets', 'lokasi_gudangs.id_outlet', '=', 'outlets.id')
                    ->select('laporan_hilangs.id_barang AS id', 'barangs.nama AS nama_barang', 'kategoris.nama_kategori AS kategori', 'lokasi_raks.rak', 'lokasi_gudangs.gudang', 'outlets.nama', 'laporan_hilangs.tanggal_hilang', 'users.nama AS nama_user')
                    ->latest('laporan_hilangs.created_at')->get();

        $waktuPrint = Carbon::now();

        $pdf = PDF::loadView('admin.hasilprintlostitemadmin', compact('no', 'cetakLost', 'waktuPrint'));
        $pdf->setPaper('a4', 'landscape')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Lost Items.pdf');

    }

    public function printAccShifting()
    {
        return view('admin.printaccshiftingadmin');
    }

    public function printAccShiftingPdf($startDate, $endDate)
    {
        $no = 1;
        $cetakShifting = DB::table('req_peminjamans')->whereBetween('req_peminjamans.created_at',[$startDate, $endDate])
                        ->join('lokasi_raks', 'lokasi_raks.id', '=', 'req_peminjamans.id_rak_peminjam')->join('lokasi_gudangs', 'lokasi_raks.id_gudang', '=', 'lokasi_gudangs.id')->join('outlets', 'lokasi_gudangs.id_outlet', '=', 'outlets.id')->join('kategoris', 'req_peminjamans.id_kategori', '=', 'kategoris.id')->join('users', 'req_peminjamans.id_user', '=', 'users.id')
                        ->select('req_peminjamans.id AS id', 'kategoris.nama_kategori AS kategori', 'users.nama AS user', 'lokasi_raks.rak', 'lokasi_gudangs.gudang', 'outlets.nama AS outlet', 'req_peminjamans.nama_barang as nama_barang', 'req_peminjamans.tanggal_diperlukan')
                        ->latest('req_peminjamans.created_at')->get();

        $waktuPrint = Carbon::now();

        $pdf = PDF::loadView('admin.hasilprintshiftingadmin', compact('no', 'cetakShifting', 'waktuPrint'));
        $pdf->setPaper('a4', 'landscape')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Request Shifting Items.pdf');

    }

    public function printAccDamaged()
    {
        return view('admin.printaccdamagedadmin');
    }

    public function printAccDamagedPdf($startDate, $endDate)
    {
        $no = 1;
        $cetakDamaged = DB::table('laporan_rusaks')->whereBetween('laporan_rusaks.created_at',[$startDate, $endDate])
                        ->join('barangs', 'laporan_rusaks.id_barang', '=', 'barangs.id')->join('kategoris', 'barangs.id_kategori', '=', 'kategoris.id')->join('lokasi_raks', 'barangs.id_rak', '=', 'lokasi_raks.id')->join('lokasi_gudangs', 'lokasi_raks.id_gudang', '=', 'lokasi_gudangs.id')->join('outlets', 'lokasi_gudangs.id_outlet', '=', 'outlets.id')->join('users', 'users.id', '=', 'laporan_rusaks.id_user')
                        ->select('laporan_rusaks.id_barang AS id', 'barangs.nama AS nama_barang', 'kategoris.nama_kategori AS kategori', 'lokasi_raks.rak', 'lokasi_gudangs.gudang', 'outlets.nama', 'users.nama AS nama_user')
                        ->latest('laporan_rusaks.created_at')->get();

        $waktuPrint = Carbon::now();

        $pdf = PDF::loadView('admin.hasilprintdamagedadmin', compact('no', 'cetakDamaged', 'waktuPrint'));
        $pdf->setPaper('a4', 'landscape')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Report Damaged Items.pdf');

    }

    public function printAccIncoming()
    {
        return view('admin.printaccincomingadmin');
    }

    public function printAccIncomingPdf($startDate, $endDate)
    {
        $no = 1;
        $cetakIncoming = DB::table('req_pembelians')->whereBetween('req_pembelians.created_at',[$startDate, $endDate])
                        ->join('kategoris', 'req_pembelians.id_kategori', '=', 'kategoris.id')->join('users', 'req_pembelians.id_user', '=', 'users.id')->join('outlets', 'users.id_outlet', '=', 'outlets.id')
                        ->select('req_pembelians.nama_barang', 'kategoris.nama_kategori', 'users.nama AS nama_user', 'outlets.nama')
                        ->latest('req_pembelians.created_at')->get();

        $waktuPrint = Carbon::now();

        $pdf = PDF::loadView('admin.hasilprintincomingadmin', compact('no', 'cetakIncoming', 'waktuPrint'));
        $pdf->setPaper('a4', 'landscape')->output();

        return response()->streamDownload(function () use($pdf) {
            echo $pdf->stream();
        }, 'Request Incoming Items.pdf');

    }
}
