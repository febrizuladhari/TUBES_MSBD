<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Lokasi_Rak;
use App\Models\Lokasi_Gudang;
use App\Models\Outlet;

class AdminController extends Controller
{
    protected $limit = 10;

    public function index()
    {
        return view('admin.homeadmin');
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

}
