<?php

namespace App\Http\Livewire\Admin;

use App\Models\View_Hilang;
use App\Models\Laporan_Hilang;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Livewire\Component;
use Livewire\WithPagination;

class LostItemAdmin extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $userid;

    public function mount(){
        $this->userid = Auth::user()->id;
    }

    public function return($lost){
        Laporan_Hilang::where('id_barang', $lost['id'])->delete();
        Alert::success('Nice','Item has been Founded');
        return redirect()->route('lostitemadmin');
    }

    public function render()
    {
        return view('livewire.admin.lost-item-admin',[
            'losts' => View_Hilang::all(),
        ]);
    }
}