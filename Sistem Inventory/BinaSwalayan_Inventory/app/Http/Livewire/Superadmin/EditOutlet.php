<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\Outlet;
use Livewire\Component;
use Livewire\WithPagination;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EditOutlet extends Component
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

    public function render()
    {
        $outlets = Outlet::paginate(5);
        return view('livewire.superadmin.edit-outlet',[
            'outlets' => $outlets,
        ]);
    }

    public function onEdit($id){

        $outlet = Outlet::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $outlet->nama;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit(){
        DB::beginTransaction();
        try {
            $outlet = Outlet::where('id', $this->idb)->first();
            $outlet->nama = $this->updatedNama;
            $outlet->save();
            DB::commit();

            Alert::success('OK','Outlet has been updated successfully');
            return redirect()->route('editoutlet_sa.edit');
            session()->flash('message', 'Outlet has been updated successfully');

        } catch (\Throwable $th) {
            DB::rollBack();
            
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
                $student = Outlet::findOrFail($idb);
                $student->delete();
                $this->checked = array_diff($this->checked, [$idb]);
                DB::commit();
            } catch (\Throwable $th) {
                DB::rollBack();
            }
            session()->flash('info', 'Outlet deleted Successfully');
        }



}
