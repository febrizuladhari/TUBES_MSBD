<?php

namespace App\Http\Livewire\Staff;

use App\Models\View_Barang;
use App\Models\Kategori;
use App\Models\Barang;
use App\Models\Perpindahan;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithPagination;

class ListpinjamStaff extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $userid;

    public function mount(){
        $this->userid = Auth::user()->id;
    }
    public function render()
    {
        return view('livewire.staff.listpinjam-staff',[
        'perpindahans' => Perpindahan::where('id_user',$this->userid)

        ]);
    }
}
