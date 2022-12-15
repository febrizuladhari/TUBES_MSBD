<?php

namespace App\Http\Livewire\Staff;

use App\Models\View_Dipinjam;
use App\Models\History_Pinjam;
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

    public function return($pinjam){ 
        History_Pinjam::create([
            'tanggal_keluar' => $pinjam['tanggal_keluar'],
            'tanggal_kembali' => now(),
            'id_barang' => $pinjam['id_barang'],
            'id_outlet_peminjam' => $pinjam['id_outlet_peminjam'],
            'id_user' => $pinjam['id_user'],

        ]);

        Perpindahan::where('id_barang', $pinjam['id_barang'])->delete();
    }
    public function render()
    {
        return view('livewire.staff.listpinjam-staff',[
        'pinjams' => View_Dipinjam::where('id_user',3)->get(),
        

        ]);
    }
}
