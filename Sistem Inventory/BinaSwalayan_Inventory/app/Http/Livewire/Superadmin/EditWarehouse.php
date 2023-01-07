<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\Outlet;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Lokasi_Gudang;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EditWarehouse extends Component
{
    public $selectedOutlet = '';
    public $idb ='';

    public $updatedNama ='';
    public $checked = [];

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $gudangs = Lokasi_Gudang::join('outlets', 'lokasi_gudangs.id_outlet','=','outlets.id')->select('lokasi_gudangs.id','lokasi_gudangs.gudang', 'outlets.nama')->when($this->selectedOutlet, function ($query) {
            $query->where('id_Outlet',$this->selectedOutlet);
        })->paginate(5);

        return view('livewire.superadmin.edit-warehouse', [
            'outlets' => Outlet::all(),
            'gudangs' => $gudangs,
        ]);
    }

    public function onEdit($id){

        $gudangs = Lokasi_Gudang::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $gudangs->gudang;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit(){
        DB::startTransaction();
        try {
            $gudangs = Lokasi_Gudang::where('id', $this->idb)->first();
            $gudangs->gudang = $this->updatedNama;
            $gudangs->save();
            DB::commit();

            Alert::success('OK','Warehouse has been updated successfully');
            return redirect()->route('editwarehouse_sa.edit');
            session()->flash('message', 'Warehouse has been updated successfully');


        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error('Error, Please try again!');
            return redirect()->route('editwarehouse_sa.edit');
        }

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
        DB::beginTransaction();
        try {
            $student = Lokasi_Gudang::findOrFail($idb);
            $student->delete();
            $this->checked = array_diff($this->checked, [$idb]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        session()->flash('info', 'Warehouse deleted Successfully');
    }

}
