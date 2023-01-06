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

        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                Alert::success('Great', 'Item has been found !');
                return redirect()->route('lostitemsuperadmin');
            } elseif ($user->level == 'admin') {
                Alert::success('Great', 'Item has been found !');
                return redirect()->route('lostitemadmin');
            }
        }
        Alert::error('Opps !', 'You cannot access this page');
    }

    public function render()
    {
        return view('livewire.admin.lost-item-admin',[
            'losts' => View_Hilang::all(),
        ]);
    }
}
