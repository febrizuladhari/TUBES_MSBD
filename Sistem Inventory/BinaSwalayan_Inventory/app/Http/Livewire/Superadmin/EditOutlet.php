<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;
use App\Models\Outlet;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

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
        return view('livewire.superadmin.edit-outlet',[
            'outlets' => Outlet::all(),
        ]);
    }

    public function onEdit($id){

        $outlet = Outlet::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $outlet->nama;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit(){
        $outlet = Outlet::where('id', $this->idb)->first();
        $outlet->nama = $this->updatedNama;


        $outlet->save();
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
            $student = Outlet::findOrFail($idb);
            $student->delete();
            $this->checked = array_diff($this->checked, [$idb]);
    
            session()->flash('info', 'Item deleted Successfully');
        }
    
        //Bulk Delete
    
        public function deleteItems(){
    
            Outlet::whereKey($this->checked)->delete();
            $this->checked = [];
    
            session()->flash('message', 'Items have been deleted');
        }


}
