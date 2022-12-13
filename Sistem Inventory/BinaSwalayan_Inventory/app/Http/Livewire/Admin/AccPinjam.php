<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\View_Req_Peminjaman;


class AccPinjam extends Component
{

    public function onAcc($id){

        $barang = View_Barang::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $barang->Nama;
        $this->updatedKategori = $barang->id_Kategori;
        $this->updatedOutlet = $barang->id_Outlet;
        $this->updatedWarehouse = $barang->id_Gudang;
        $this->updatedRack = $barang->id_Rak;
        $this->updatedSupplier = $barang->id_Supplier;

        $this->gudangs = Lokasi_Gudang::where('id_outlet',$barang->id_Outlet)->get();       
        $this->raks = Lokasi_Rak::where('id_gudang',$barang->id_Gudang)->get();
        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function render()
    {
        return view('livewire.admin.acc-pinjam',[
            'pinjams' => View_Req_Peminjaman::all(),
        ]);

        
    }
}
