<?php

namespace App\Http\Livewire\Admin;

use App\Models\View_Perbaikan;
use App\Models\Perbaikan;
use App\Models\History_Rusak;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Livewire\Component;
use Livewire\WithPagination;

class ListRusakAdmin extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $userid;

    public function mount(){
        $this->userid = Auth::user()->id;
    }

    public function return($rusak){
        History_Rusak::create([
            'tanggal_rusak' => $rusak['tanggal_keluar'],
            'tanggal_bagus' => $rusak['tanggal_kembali'],
            'id_barang' => $rusak['id'],
            'lokasi' => $rusak['lokasi'],
            'catatan' => $rusak['catatan'],
        ]);

        Perbaikan::where('id_barang', $rusak['id'])->delete();

        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                Alert::success('Great', 'Item has been returned from repair !');
                return redirect()->route('listrusaksuperadmin');
            } elseif ($user->level == 'admin') {
                Alert::success('Great', 'Item has been returned from repair !');
                return redirect()->route('listrusakadmin');
            }
        }
        Alert::error('Opps !', 'You cannot access this page');
    }

    public function render()
    {
        return view('livewire.admin.list-rusak-admin',[
            'rusaks' => View_Perbaikan::all(),
        ]);
    }
}
