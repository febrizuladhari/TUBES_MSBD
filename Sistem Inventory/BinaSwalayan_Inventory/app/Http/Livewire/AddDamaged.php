<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\View_Barang;
use App\Models\Laporan_Rusak;
use Illuminate\Support\Facades\Auth;


class AddDamaged extends Component
{
    public $search = '';
    public $note = '';


    public function render()
    {   
        return view('livewire.add-damaged',[
            'barangs' => View_Barang::all()->where('id',$this->search)
        ]);
    }

    public function store(){
        Laporan_Rusak::create([
            'id_barang' => $this->search,
            'tanggal' => now(),
            'catatan' => $this->note,
            'id_user' => Auth::user()->id,
        ]);
    }

}
