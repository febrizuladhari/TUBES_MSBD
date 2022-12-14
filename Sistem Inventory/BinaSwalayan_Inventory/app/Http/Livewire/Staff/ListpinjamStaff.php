<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;
use App\Models\Perpindahan;
use Livewire\WithPagination;
use App\Models\View_Dipinjam;
use App\Models\History_Pinjam;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ListpinjamStaff extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $userid;

    public function mount(){
        $this->userid = Auth::user()->id;
    }

    public function return($pinjam){

        DB::beginTransaction();
        try {
            History_Pinjam::create([
                'tanggal_keluar' => $pinjam['tanggal_keluar'],
                'tanggal_kembali' => now(),
                'id_barang' => $pinjam['id_barang'],
                'id_outlet_peminjam' => $pinjam['id_outlet_peminjam'],
                'id_user' => $pinjam['id_user'],
            ]);
            Perpindahan::where('id_barang', $pinjam['id_barang'])->delete();
            DB::commit();

            Alert::success('Nice','Item has been returned');
            return redirect()->route('listpinjamstaff');

        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error('Error, Please try again!');
            return redirect()->route('listpinjamstaff');
        }
    }

    public function render()
    {
        return view('livewire.staff.listpinjam-staff',[
        'pinjams' => View_Dipinjam::where('id_user',Auth::user()->id)->paginate(5),


        ]);
    }
}
