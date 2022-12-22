<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

use DB;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Lokasi_Rak;
use App\Models\Lokasi_Gudang;
use App\Models\Outlet;
use App\Models\Req_Peminjaman;
use App\Models\Laporan_Rusak;
use App\Models\Req_Pembelian;

use App\Exports\ListBarangExport;
use Maatwebsite\Excel\Facades\Excel;



class AdminController extends Controller
{
    protected $limit = 10;

    public function index()
    {
        return view('admin.homeadmin');
    }

    public function chartAdmin()
    {
        /* Chart Kategori */
        $kategoris = Barang::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("id_kategori"))
                    ->orderBy('id','ASC')
                    ->pluck('count');

        $labels1 = Kategori::select(DB::raw("nama_kategori as kategori"))
                    ->orderBy('id', 'ASC')
                    ->pluck('kategori');;

        for ($i = 0; $i <= count($kategoris); $i++) {
            $colors1[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $labels1 = $labels1;
        $data1 = $kategoris->values();
        $colors1 = $colors1;


        /* Chart Supplier */
        $suplliers = Barang::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("id_supplier"))
                    ->orderBy('id','ASC')
                    ->pluck('count');

        $labels2 = Supplier::select(DB::raw("nama as supplier"))
                    ->orderBy('id', 'ASC')
                    ->pluck('supplier');;

        for ($i = 0; $i <= count($suplliers); $i++) {
            $colors2[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $labels2 = $labels2;
        $data2 = $suplliers->values();
        $colors2 = $colors2;

        // Total Items
        $totalItems = Barang::count();

        // Total Approve Shifting
        $totalAccShifting = Req_Peminjaman::count();

        // Total Approve Damaged
        $totalAccDamaged = Laporan_Rusak::count();

        // Total Approve Incoming
        $totalAccIncoming = Req_Pembelian::count();


        return view('admin.homeadmin',

            compact('labels1', 'data1', 'colors1',
                    'labels2', 'data2', 'colors2',
                    'totalItems', 'totalAccShifting', 'totalAccDamaged', 'totalAccIncoming'
        ));
    }


    public function showitem()
    {
        return view('admin.itemadmin');
        $kategoris = Kategori::all();
        $barangs = Barang::paginate($this->limit);
        return view('admin.itemadmin', compact('barangs'), compact('kategoris'));
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

    // View Insert Item
    public function formInsertItem()
    {
        return view('admin.additemadmin');
    }

    // Proses Insert Item
    public function insertItem()
    {

    }

    // View Insert Kategori
    public function formInsertKategori()
    {
        return view('admin.addkategoriadmin');
    }

    // Proses Insert Kategori
    public function insertKategori(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required'
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        if($kategori) {
            Alert::success('OK', 'Category successfully added');
            return redirect()->route('additem.edit')->with(['success' => 'Category successfully added']);
        } else {
            Alert::error('Opps', 'Failed to add category');
            return redirect()->route('additem.edit')->with(['error' => 'Failed to add category']);
        }
    }

    // View Insert Supplier
    public function formInsertSupplier()
    {
        return view('admin.addsuppliersadmin');
    }

    // Proses Insert Supplier
    public function insertSupplier(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required'
        ]);

        $supplier = Supplier::create([
            'nama' => $request->nama
        ]);

        if($supplier) {
            Alert::success('OK', 'Supplier successfully added');
            return redirect()->route('additem.edit')->with(['success' => 'Supplier successfully added']);
        } else {
            Alert::error('Opps', 'Failed to add supplier');
            return redirect()->route('additem.edit')->with(['error' => 'Failed to add supplier']);
        }
    }

    // View Insert Rack
    public function formInsertRack()
    {
        $gudangs = Lokasi_Gudang::all();
        return view('admin.addrackadmin', compact('gudangs'));
    }

    // Proses Insert Rack
    public function insertRack(Request $request)
    {

        $this->validate($request, [
            'id_gudang' => 'required',
            'rak' => 'required'
        ]);

    }

    public function exportListBarang()
    {
        return Excel::download(new ListBarangExport, 'List Barang.xlsx');
    }

}
