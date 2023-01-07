<?php

namespace App\Http\Livewire\Staff;

use App\Models\Outlet;
use Livewire\Component;
use App\models\Kategori;
use App\Models\Lokasi_Rak;
use Livewire\WithPagination;
use App\Models\Lokasi_Gudang;

use App\models\Req_Peminjaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReqPinjam extends Component
{
    public $raks = NULL;
    public $selectedName = '';
    public $selectedKategori = '';
    public $selectedDate = '';
    public $selectedOutlet = '';
    public $selectedWarehouse = '';
    public $selectedRack = '';



    public function render()
    {   $uid = Auth::user()->id_outlet;
        return view('livewire.staff.req-pinjam',[
            'kategoris' => Kategori::all(),
            'outlets' => Outlet::where('id',$uid)->get(),
            'gudangs' => Lokasi_Gudang::where('id_outlet',$uid)->get(),

        ]);
    }

    public function updatedSelectedWarehouse($selectedWarehouse)
    {
        $this->raks = Lokasi_Rak::where('id_gudang',$selectedWarehouse)->get();
    }

    public function store(){
        DB::beginTransaction();
        try {
            Req_Peminjaman::create([
                'id_user' => Auth::user()->id,
                'id_kategori' => $this->selectedKategori,
                'id_rak_peminjam' => $this->selectedRack,
                'nama_barang' => $this->selectedName,
                'tanggal_diperlukan' => $this->selectedDate,
            ]);
    
            Alert::success('Nice !', 'Request has been added');
            return redirect()->route('reqitemstaff');
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error('Error, Please try again!');
            return redirect()->route('reqitemstaff');
        }
    }
}
