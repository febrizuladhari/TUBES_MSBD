<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;
use App\Models\Supplier;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class EditSupplier extends Component
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
        $suppliers = Supplier::paginate(5);
        return view('livewire.superadmin.edit-supplier',[
            'suppliers' => $suppliers,
        ]);
    }

    public function onEdit($id){

        $supplier = Supplier::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $supplier->nama;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit(){
        $supplier = Supplier::where('id', $this->idb)->first();
        $supplier->nama = $this->updatedNama;


        $supplier->save();
        Alert::success('OK','Supplier has been updated successfully');
        return redirect()->route('editsupplier_sa.edit');
        session()->flash('message', 'Supplier has been updated successfully');

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
            $student = Supplier::findOrFail($idb);
            $student->delete();
            $this->checked = array_diff($this->checked, [$idb]);

            session()->flash('info', 'Supplier deleted Successfully');
        }

        //Bulk Delete

        public function deleteItems(){

            Supplier::whereKey($this->checked)->delete();
            $this->checked = [];

            session()->flash('message', 'Suppliers have been deleted');
        }
}
