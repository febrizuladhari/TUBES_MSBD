<?php

namespace App\Http\Livewire\Admin;

use App\Models\View_Barang;
use App\Models\Kategori;
use App\Models\Outlet;
use App\Models\Barang;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use App\Models\Supplier;


use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithPagination;

class ItemAdmin extends Component
{
    public $selectedOutlet = '';
    public $selectedCategory = '';
    public $searchadmin = "";
    public $idb ='';

    public $updatedNama ='';
    public $updatedKategori = '';
    public $updatedRak = '';
    public $updatedGudang = '';
    public $updatedOutlet = '';
    public $updatedSupplier = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    

    public function updatedSelectedOutlet($selectedOutlet)
    {
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$selectedOutlet)->get();
    }

    public function updatedSelectedWarehouse($selectedWarehouse)
    {
        $this->raks = Lokasi_Rak::where('id_gudang',$selectedWarehouse)->get();
    }

    public function onEdit($id){

        $barang = View_Barang::where('id', $id)->first();
        $this->updatedNama = $barang->Nama;
        $this->updatedKategori = $barang->Kategori;
        $this->updatedRak = $barang->Rak;
        $this->updatedGudang = $barang->Gudang;
        $this->updatedOutlet = $barang->Outlet;
        $this->updatedSupplier = $barang->Supplier;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit(){
        $barang = Barang::where('id', $this->id)->first();
        $barang->nama = $this->updatedNama;
        $barang->id_kategori = $this->updatedKategori;
        $barang->id_rak = $this->updatedRak;
        $barang->id_supplier = $this->updatedSupplier;

        $barang->save();

        session()->flash('message', 'Items has been updated successfully');

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {

        return view('livewire.admin.item-admin', [
            'barangs' => View_Barang::searchadmin(trim($this->searchadmin))
            ->when($this->selectedOutlet, function ($query) {
                $query->where('id_Outlet',$this->selectedOutlet);
            })
            ->when($this->selectedCategory, function ($query) {
                $query->where('Kategori', $this->selectedCategory);
            })
            ->paginate(10),
            
            'kategoris' => Kategori::all(),
            'suppliers' => Supplier::all(),
            'outlets' => Outlet::all(),
        ]);
    }

    
}
