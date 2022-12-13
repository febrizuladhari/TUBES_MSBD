<?php

namespace App\Http\Livewire\Admin;


use App\Models\Kategori;
use App\Models\Outlet;
use App\Models\Barang;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use App\Models\Supplier;
use App\Models\View_Barang;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class QritemAdmin extends Component
{
    // Single QR Generator
    public function generateSingleQr($idb)
    {
        $datas = Barang::findOrFail($idb);
        $datas->get();
        $qrItem = QrCode::size(400)->generate($datas->name);
        $this->checked = array_diff($this->checked, [$idb]);


        return view('admin.qritemadmin', compact('qrItem'));
    }

    // Multiple QR Generator
    public function generateMultipleQr()
    {
        Barang::whereKey($this->checked)->get();

        $this->checked = [];

        return view('admin.qritemadmin');
    }

    public function render()
    {
        return view('livewire.admin.qritem-admin', [
            'datas'  => View_Barang::all(),
            // searchadmin(trim($this->searchadmin))
            // ->when($this->selectedOutlet, function ($query) {
            //     $query->where('id_Outlet',$this->selectedOutlet);
            // })
            // ->when($this->selectedCategory, function ($query) {
            //     $query->where('Kategori', $this->selectedCategory);
            // })
            // ->paginate(10),

            'kategoris' => Kategori::all(),
            'suppliers' => Supplier::all(),
            'outlets' => Outlet::all(),
        ]);
    }
}
