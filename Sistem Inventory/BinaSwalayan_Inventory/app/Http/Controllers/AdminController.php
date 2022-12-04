<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;

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
        // Model nya Belom Ada, Isi Databasenya pun Belom Ada :<
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

    public function formInsertItem()
    {
        return view('admin.additemadmin');
    }

    public function insertItem()
    {

    }

    public function formInsertKategori()
    {
        return view('admin.addkategoriadmin');
    }

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

    public function formInsertSupplier()
    {
        return view('admin.addsuppliersadmin');
    }

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

}
