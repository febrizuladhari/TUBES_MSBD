<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

use DB;
use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Lokasi_Rak;
use App\Models\Lokasi_Gudang;
use App\Models\Outlet;
use App\Models\Req_Peminjaman;
use App\Models\Laporan_Rusak;
use App\Models\Req_Pembelian;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin.homesuperadmin');
    }

    public function chartSuperAdmin()
    {
        /* Chart User Per Outlet */
        $users = User::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("id_outlet"))
                    ->orderBy('id','ASC')
                    ->pluck('count');

        $labels1 = Outlet::select(DB::raw("nama as outlet"))
                    ->orderBy('id', 'ASC')
                    ->pluck('outlet');;

        for ($i = 0; $i <= count($users); $i++) {
            $colors1[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $labels1 = $labels1;
        $data1 = $users->values();
        $colors1 = $colors1;


        /* Chart Kategori */
        $kategoris = Barang::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("id_kategori"))
                    ->orderBy('id','ASC')
                    ->pluck('count');

        $labels2 = Kategori::select(DB::raw("nama_kategori as kategori"))
                    ->orderBy('id', 'ASC')
                    ->pluck('kategori');;

        for ($i = 0; $i <= count($kategoris); $i++) {
            $colors2[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $labels2 = $labels2;
        $data2 = $kategoris->values();
        $colors2 = $colors2;


        /* Chart Supplier */
        $suplliers = Barang::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("id_supplier"))
                    ->orderBy('id','ASC')
                    ->pluck('count');

        $labels3 = Supplier::select(DB::raw("nama as supplier"))
                    ->orderBy('id', 'ASC')
                    ->pluck('supplier');;

        for ($i = 0; $i <= count($suplliers); $i++) {
            $colors3[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $labels3 = $labels3;
        $data3 = $suplliers->values();
        $colors3 = $colors3;

        // Total Items
        $totalItems = Barang::count();

        // Total Approve Shifting
        $totalAccShifting = Req_Peminjaman::count();

        // Total Approve Damaged
        $totalAccDamaged = Laporan_Rusak::count();

        // Total Approve Incoming
        $totalAccIncoming = Req_Pembelian::count();


        return view('superadmin.homesuperadmin',

            compact('labels1', 'data1', 'colors1',
                    'labels2', 'data2', 'colors2',
                    'labels3', 'data3', 'colors3',
                    'totalItems', 'totalAccShifting', 'totalAccDamaged', 'totalAccIncoming'

        ));
    }

    public function showitem()
    {
        return view('superadmin.itemsuperadmin');
        $kategoris = Kategori::all();
        $barangs = Barang::paginate($this->limit);
        return view('superadmin.itemsuperadmin', compact('barangs'), compact('kategoris'));
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

    // Show Accounts
    public function showAllAccounts() {
        return view ('superadmin.accounts');
    }

    // View Insert Item
    public function formInsertItem()
    {
        return view('superadmin.additemsuperadmin');
    }

    // Proses Insert Item
    public function insertItem()
    {

    }

    // View Halaman Edit Environment
    public function editEnvironment()
    {
        return view('superadmin.editenvironmentsuperadmin');
    }


    // View Insert Kategori
    public function formInsertKategori()
    {
        return view('superadmin.addkategorisuperadmin');
    }

    // View Edit Kategori
    public function formEditKategori()
    {
        return view('superadmin.editkategorisuperadmin');
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
            return redirect()->route('additem_sa.edit')->with(['success' => 'Category successfully added']);
        } else {
            Alert::error('Opps', 'Failed to add category');
            return redirect()->route('additem_sa.edit')->with(['error' => 'Failed to add category']);
        }
    }

    // Proses Edit Kategori
    public function editKategori()
    {

    }

    // View Insert Supplier
    public function formInsertSupplier()
    {
        return view('superadmin.addsupplierssuperadmin');
    }

    // View Edit Supplier
    public function formEditSupplier()
    {
        return view('superadmin.editsuppliersuperadmin');
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
            return redirect()->route('additem_sa.edit')->with(['success' => 'Supplier successfully added']);
        } else {
            Alert::error('Opps', 'Failed to add supplier');
            return redirect()->route('additem_sa.edit')->with(['error' => 'Failed to add supplier']);
        }
    }

    // Proses Edit Supplier
    public function editSupplier()
    {

    }

    // View Insert Rack
    public function formInsertRack()
    {
        $gudangs = Lokasi_Gudang::all();
        return view('superadmin.addracksuperadmin', compact('gudangs'));
    }

    // Edit Edit Rack
    public function formEditRack()
    {
        return view('superadmin.editracksuperadmin');
    }

    // Proses Insert Rack
    public function insertRack(Request $request)
    {

        $this->validate($request, [
            'id_gudang' => 'required',
            'rak' => 'required'
        ]);

        $rak = Lokasi_Rak::create([
            'id_gudang' => $request->id_gudang,
            'rak' => $request->rak
        ]);

        if($rak) {
            Alert::success('OK', 'Rack successfully added');
            return redirect()->route('additem_sa.edit')->with(['success' => 'Rack successfully added']);
        } else {
            Alert::error('Opps', 'Failed to add rack');
            return redirect()->route('additem_sa.edit')->with(['error' => 'Failed to add rack']);
        }
    }

    // Proses Edit Rack
    public function editRack()
    {

    }

    // View Insert Outlet
    public function formInsertOutlet()
    {
        return view('superadmin.addoutletsuperadmin');
    }

    // View Edit Outlet
    public function formEditOutlet()
    {
        return view('superadmin.editoutletsuperadmin');
    }

    // Proses Insert Outlet
    public function insertOutlet(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required'
        ]);

        $outlet = Outlet::create([
            'nama' => $request->nama
        ]);

        if($outlet) {
            Alert::success('OK', 'Outlet successfully added');
            return redirect()->route('additem_sa.edit')->with(['success' => 'Outlet successfully added']);
        } else {
            Alert::error('Opps', 'Failed to add outlet');
            return redirect()->route('additem_sa.edit')->with(['error' => 'Failed to add outlet']);
        }
    }

    // Proses Edit Outlet
    public function editOutlet()
    {

    }

    // View Insert Warehouse
    public function formInsertWarehouse()
    {
        $outlets = Outlet::all();
        return view('superadmin.addwarehousesuperadmin', compact('outlets'));
    }

    // View Edit Warehouse
    public function formEditWarehouse()
    {
        return view('superadmin.editwarehousesuperadmin');
    }

    // Proses Insert Warehouse
    public function insertWarehouse(Request $request)
    {

        $this->validate($request, [
            'id_outlet' => 'required',
            'gudang' => 'required'
        ]);

        $warehouse = Lokasi_Gudang::create([
            'id_outlet' => $request->id_outlet,
            'gudang' => $request->gudang
        ]);

        if($warehouse) {
            Alert::success('OK', 'Warehouse successfully added');
            return redirect()->route('additem_sa.edit')->with(['success' => 'Warehouse successfully added']);
        } else {
            Alert::error('Opps', 'Failed to add warehouse');
            return redirect()->route('additem_sa.edit')->with(['error' => 'Failed to add warehouse']);
        }
    }

    // Proses Edit warehouse
    public function editWarehouse()
    {

    }

}
