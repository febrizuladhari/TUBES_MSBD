<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;
use App\Models\View_Barang;
use App\Models\Laporan_Hilang;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AddLost extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.staff.add-lost',[
            'barangs' => View_Barang::all()->where('id',$this->search)
        ]);
    }

    public function store(){
        Laporan_Hilang::create([
            'id_barang' => $this->search,
            'tanggal_hilang' => now(),
            'id_user' => Auth::user()->id,
        ]);

        Alert::success('Nice !', 'Report has been added');
        return redirect()->route('addloststaff');
    }

}