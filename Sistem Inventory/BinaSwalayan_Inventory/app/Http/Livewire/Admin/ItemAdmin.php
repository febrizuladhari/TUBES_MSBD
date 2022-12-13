<?php

namespace App\Http\Livewire\Admin;

use App\Models\View_Barang;
use App\Models\Kategori;
use App\Models\Outlet;
use App\Models\Barang;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use App\Models\Supplier;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithPagination;

class ItemAdmin extends Component
{
    public $selectedOutlet = '';
    public $selectedCategory = '';
    public $searchadmin = '';

    public $idb ='';
    public $checked = [];
    public $gudangs = NULL;
    public $raks = NULL;

    public $updaterdOutlet = '';
    public $updaterdWarehouse = '';
    public $updaterdRack = '';
    public $updatedNama ='';
    public $updatedKategori = '';
    public $updatedSupplier = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function updatedUpdatedOutlet($updatedOutlet)
    {
        if(!is_null($updatedOutlet)){
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$updatedOutlet)->get();
        }
    }

    public function updatedUpdatedWarehouse($updatedWarehouse)
    {
        if(!is_null($updatedWarehouse)){
        $this->raks = Lokasi_Rak::where('id_gudang',$updatedWarehouse)->get();
        }
    }

    public function onEdit($id){

        $barang = View_Barang::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $barang->Nama;
        $this->updatedKategori = $barang->id_Kategori;
        $this->updatedOutlet = $barang->id_Outlet;
        $this->updatedWarehouse = $barang->id_Gudang;
        $this->updatedRack = $barang->id_Rak;
        $this->updatedSupplier = $barang->id_Supplier;

        $this->gudangs = Lokasi_Gudang::where('id_outlet',$barang->id_Outlet)->get();
        $this->raks = Lokasi_Rak::where('id_gudang',$barang->id_Gudang)->get();
        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function onDelete($id){
        $this->idb = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }
    public function submitEdit(){
        $barang = Barang::where('id', $this->idb)->first();
        $barang->nama = $this->updatedNama;
        $barang->id_kategori = $this->updatedKategori;
        $barang->id_rak = $this->selectedRak;
        $barang->id_supplier = $this->updatedSupplier;

        $barang->save();
        Alert::success('OK','Item has been updated successfully');
        session()->flash('message', 'Items has been updated successfully');

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }

    //Single Delete

    public function deleteItem($idb)
    {
        $student = Barang::findOrFail($idb);
        $student->delete();
        $this->checked = array_diff($this->checked, [$idb]);

        session()->flash('info', 'Item deleted Successfully');
    }

    //Bulk Delete

    public function deleteItems(){

        Barang::whereKey($this->checked)->delete();
        $this->checked = [];

        session()->flash('message', 'Items have been deleted');
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
