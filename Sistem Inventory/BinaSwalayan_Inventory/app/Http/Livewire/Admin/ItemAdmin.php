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
use RealRashid\SweetAlert\Facades\Alert;

class ItemAdmin extends Component
{
    public $selectedOutlet = '';
    public $selectedCategory = '';
    public $searchadmin = "";
    public $idb ='';

    public $gudangs = '';
    public $taks = '';

    public $updatedNama ='';
    public $updatedKategori = '';
    public $updatedRak = '';
    public $updatedGudang = '';
    public $updatedOutlet = '';
    public $updatedSupplier = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function updatedUpdatedOutlet($updatedOutlet)
    {
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$updatedOutlet)->get();
    }

    public function updatedUpdatedWarehouse($updatedWarehouse)
    {
        $this->raks = Lokasi_Rak::where('id_gudang',$updatedWarehouse)->get();
    }

    public function onEdit($id){

        $barang = View_Barang::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $barang->Nama;
        $this->updatedKategori = $barang->id_Kategori;
        $this->updatedRak = $barang->id_Rak;
        $this->updatedGudang = $barang->id_Gudang;
        $this->updatedOutlet = $barang->id_Outlet;
        $this->updatedSupplier = $barang->id_Supplier;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit(){
        $barang = Barang::where('id', $this->idb)->first();
        $barang->nama = $this->updatedNama;
        $barang->id_kategori = $this->updatedKategori;
        $barang->id_rak = $this->updatedRak;
        $barang->id_supplier = $this->updatedSupplier;

        $barang->save();

        Alert::success('OK','Item has been updated successfully');
        session()->flash('message', 'Item has been updated successfully');

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');

        return redirect()->route('itemadmin');
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
