<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\Outlet;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use App\Models\Supplier;
use App\Models\Barang;
use RealRashid\SweetAlert\Facades\Alert;



class AddItems extends Component
{
    public $namab = '';
    public $idb = '';
    public $selectedOutlet = '';
    public $gudangs = NULL;
    public $selectedWarehouse = '';
    public $raks = NULL;
    public $selectedRack = '';
    public $selectedCategory = '';
    public $selectedSupplier = '';

    public function render()
    {
        return view('livewire.add-items',[
            'kategoris' => Kategori::all(),
            'outlets' => Outlet::all(),
            'suppliers' => Supplier::all(),

        ]);
    }

    public function updatedSelectedOutlet($selectedOutlet)
    {
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$selectedOutlet)->get();
    }

    public function updatedSelectedWarehouse($selectedWarehouse)
    {
        $this->raks = Lokasi_Rak::where('id_gudang',$selectedWarehouse)->get();
    }

    

    public function store()
    {
        Barang::create([
            'id' => $this->idb,
            'nama' => $this->namab,
            'id_kategori' => $this->selectedCategory,
            'id_rak' => $this->selectedRack,
            'id_supplier' => $this->selectedSupplier,
        
    ]);

    }
    
}
