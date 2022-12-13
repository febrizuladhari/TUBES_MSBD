<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Outlet;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AddRack extends Component
{
    public $selectedOutlet = '';
    public $gudangs = NULL;
    public $selectedWarehouse = '';
    public $rack = '';
    public function render()
    {
        return view('livewire.add-rack',[
            'outlets' => Outlet::all(),

        ]);
    }

    public function updatedSelectedOutlet($selectedOutlet)
    {
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$selectedOutlet)->get();
    }

    public function store()
    {
        Lokasi_Rak::create([
            'id_gudang' => $this->selectedWarehouse,
            'rak' => $this->rack,

    ]);

    if($user = Auth::user()) {

        if($user->level == 'admin') {
            Alert::success('OK', 'You have successfully added rack !');
            session()->flash('message', 'You have successfully added rack');

            return redirect()->route('additem.edit');
        } else {
            Alert::success('OK', 'You have successfully added rack !');
            session()->flash('message', 'You have successfully added rack');

            return redirect()->route('additem_sa.edit');
        }
    }
    Alert::error('Opps!', 'You cannot access this page');

    }
}
