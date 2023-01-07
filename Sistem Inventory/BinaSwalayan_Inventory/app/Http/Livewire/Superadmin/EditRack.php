<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\Outlet;
use Livewire\Component;
use App\Models\view_rak;
use App\Models\Lokasi_Rak;
use Livewire\WithPagination;
use App\Models\Lokasi_Gudang;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EditRack extends Component
{
    public $selectedOutlet = '';
    public $selectedCategory = '';
    public $searchadmin = '';

    public $idr ='';
    public $checked = [];
    // public $gudangs = NULL;
    // public $raks = NULL;

    public $updatedOutlet = '';
    public $updatedWarehouse = '';
    public $updatedRack = '';
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
        DB::beginTransaction();
        try {
            $raks  = Lokasi_Rak::where('id', $this->idr)->first();
            $raks ->rak = $this->updatedNama;
            $raks ->id_gudang = $this->updatedWarehouse;
            $raks ->save();

            DB::commit();
            Alert::success('OK','Rack has been updated successfully');
            return redirect()->route('editrack_sa.edit');
            session()->flash('message', 'Rack has been updated successfully');
    
            //For hide modal after add student success
            $this->dispatchBrowserEvent('close-modal');
            
        } catch (\Throwable $th) {
            Alert::error('Error, Please try again!');
            return redirect()->route('editrack_sa.edit');
            DB::rollback();
        }
    }

    public function onDelete($id){
        $this->idr = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Single Delete

    public function deleteItem($idr)
    {
        DB::beginTransaction();
        try {
            $student = Lokasi_Rak::findOrFail($idr);
            $student->delete();
            $this->checked = array_diff($this->checked, [$idr]);
            DB::commit();
            session()->flash('info', 'Rack deleted Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            session()->flash('Error, Please try again');

        }

    }
}