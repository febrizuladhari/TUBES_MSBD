<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\Outlet;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Lokasi_Rak;
use App\Models\Lokasi_Gudang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class AddItems extends Component
{
    public $namab = '';
    public $idb = '';
    public $selectedOutlet = '';
    public $gudangs = NULL;
    public $selectedWarehouse = '';
    public $raks = NULL;
    public $selectedRack = '';
    public $selectedCategory = '';
    public $selectedSupplier = '';

    public function render()
    {
        return view('livewire.add-items',[
            'kategoris' => Kategori::all(),
            'outlets' => Outlet::all(),
            'suppliers' => Supplier::all(),

        ]);
    }

    public function updatedSelectedOutlet($selectedOutlet)
    {
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$selectedOutlet)->get();
    }

    public function updatedSelectedWarehouse($selectedWarehouse)
    {
        $this->raks = Lokasi_Rak::where('id_gudang',$selectedWarehouse)->get();
    }



    public function store()
    {
        DB::beginTransaction();
        try {
            Barang::create([
                'id' => $this->idb,
                'nama' => $this->namab,
                'id_kategori' => $this->selectedCategory,
                'id_rak' => $this->selectedRack,
                'id_supplier' => $this->selectedSupplier,
    
            ]);
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::success('OK', 'You have successfully added item !');
                    return redirect()->route('additem_sa.edit');
                } elseif ($user->level == 'admin') {
                    Alert::success('OK', 'You have successfully added item !');
                    return redirect()->route('additem.edit');
                }
            }
        DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Error, Please try again!');
                    return redirect()->route('additem_sa.edit');
                } elseif ($user->level == 'admin') {
                    Alert::error('Error, Please try again!');
                    return redirect()->route('additem.edit');
                }
            }
        }

    Alert::error('Opps !', 'You cannot access this page');


    }

}
