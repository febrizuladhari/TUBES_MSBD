<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;
use App\Models\Outlet;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use App\Models\view_rak;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class EditRack extends Component
{
    public $selectedOutlet = '';
    public $selectedCategory = '';
    public $searchadmin = '';

    public $idr ='';
    public $checked = [];
    // public $gudangs = NULL;
    // public $raks = NULL;

    public $updaterdOutlet = '';
    public $updaterdWarehouse = '';
    public $updaterdRack = '';
    public $updatedNama ='';
    public $updatedKategori = '';
    public $updatedSupplier = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // $raks = Lokasi_Rak::join('lokasi_gudangs', 'lokasi_raks.id_gudang', '=', 'lokasi_gudangs.id')->join('outlets','lokasi_gudangs.id_outlet','=','outlets.id')->select('lokasi_raks.id','lokasi_raks.rak','lokasi_gudangs.gudang','outlets.nama')->get();
        $raks = view_rak::when($this->selectedOutlet, function ($query) {
            $query->where('id_Outlet',$this->selectedOutlet);
        })->paginate(10);
        $gudangs = Lokasi_Gudang::join('outlets','lokasi_gudangs.id_outlet','=','outlets.id')->select('lokasi_gudangs.id','lokasi_gudangs.gudang','outlets.nama')->get();
        // dd($gudangs);
        return view('livewire.superadmin.edit-rack',[
            'raks' => $raks,
            'gudangs' => $gudangs,
            'outlets' => Outlet::all(),
        ]);
    }


    public function onEdit($id){
        // dd($id);
        $raks = view_rak::where('id_rak', $id)->first();
        $this->idr=$id;
        $this->updatedNama = $raks->rak;
        $this->updatedRack = $raks->id_rak;

        $this->updatedWarehouse = $raks->id_gudang;
        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit(){
        $raks  = Lokasi_Rak::where('id', $this->idr)->first();
        $raks ->rak = $this->updatedNama;
        $raks ->id_gudang = $this->updatedWarehouse;


        $raks ->save();
        Alert::success('OK','Item has been updated successfully');
        session()->flash('message', 'Items has been updated successfully');

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }

    public function onDelete($id){
        $this->idb = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Single Delete

    public function deleteItem($idb)
    {
        $student = Lokasi_Rak::findOrFail($idb);
        $student->delete();
        $this->checked = array_diff($this->checked, [$idb]);

        session()->flash('info', 'Item deleted Successfully');
    }

    //Bulk Delete

    public function deleteItems(){

        Lokasi_Rak::whereKey($this->checked)->delete();
        $this->checked = [];

        session()->flash('message', 'Items have been deleted');
    }
}
