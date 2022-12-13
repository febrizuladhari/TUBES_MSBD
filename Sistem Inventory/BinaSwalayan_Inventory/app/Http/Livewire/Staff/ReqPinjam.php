<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;
use App\models\Kategori;
use App\models\Req_Peminjaman;
use App\Models\Outlet;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use Illuminate\Support\Facades\Auth;


class ReqPinjam extends Component
{
    public $gudangs = NULL;
    public $raks = NULL;
    public $selectedName = '';
    public $selectedKategori = '';
    public $selectedDate = '';
    public $selectedOutlet = '';
    public $selectedWarehouse = '';
    public $selectedRack = '';
    


    public function render()
    {
        return view('livewire.staff.req-pinjam',[
            'kategoris' => Kategori::all(),
            'outlets' => Outlet::where('id',1)->get(),
        
        ]);
    }

    public function updatedSelectedOutlet($selectedOutlet)
    {
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$selectedOutlet)->get();
    }

    public function updatedSelectedWarehouse($selectedWarehouse)
    {
        $this->raks = Lokasi_Rak::where('id_gudang',$selectedWarehouse)->get();
    }

    public function store(){
        Req_Peminjaman::create([
            'id_user' => Auth::user()->id,
            'id_kategori' => $this->selectedKategori,
            'id_rak_peminjam' => $this->selectedRack,
            'nama_barang' => $this->selectedName,
            'tanggal_diperlukan' => $this->selectedDate,
        ]);
    }
}
