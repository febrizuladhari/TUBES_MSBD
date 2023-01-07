<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\Outlet;
use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EditCategory extends Component
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
        $outlets = Outlet::all();
        $kategoris = Kategori::paginate(5);
        return view('livewire.superadmin.edit-category',[
            'outlets'=> $outlets,
            'kategoris' => $kategoris
        ]);
    }

    public function onEdit($id)
    {

        $kategoris = Kategori::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $kategoris->nama_kategori;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function submitEdit()
    {
        DB::beginTransaction();
        try {
            $kategoris = Kategori::where('id', $this->idb)->first();
            $kategoris->nama_kategori = $this->updatedNama;
            $kategoris->save();
            
            DB::commit();

            Alert::success('OK','Category has been updated successfully');
            return redirect()->route('editkategori_sa.edit');
            session()->flash('message', 'Category has been updated successfully');
        
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error('Error, Please try again!');
            return redirect()->route('editkategori_sa.edit');
        }

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }

    public function onDelete($id)
    {
        $this->idb = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Single Delete

    public function deleteItem($idb)
    {
        DB::beginTransaction();
        try {
            $student = Kategori::findOrFail($idb);
            $student->delete();
            $this->checked = array_diff($this->checked, [$idb]);
            DB::commit();
            session()->flash('info', 'Category deleted Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            session()->flash('info', 'Please try again!');

        }
    }
}