<?php

namespace App\Http\Livewire\Admin;

use App\Models\Supplier;
use App\Models\Barang;
use App\Models\Lokasi_Rak;
use App\Models\Lokasi_Gudang;
use App\Models\Req_Pembelian;
use App\Models\View_Req_Pembelian;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class AccIncomingItem extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $selectedID ='';
    public $selectedNamaBarang ='';
    public $selectedNamaKategori = '';
    public $selectedRack = '';
    public $selectedWarehouse = '';
    public $selectedOutlet = '';
    public $selectedSupplier = '';
    public $idb='';
    public $gudangs = [];
    public $raks = [];
    public $deleteId='';

    public function render()
    {
        return view('livewire.admin.acc-incoming-item', [
            'incomings' => View_Req_Pembelian::all(),
            'suppliers' => Supplier::all()
        ]);
    }

    public function updatedSelectedWarehouse($selectedWarehouse)
    {
        $this->raks = Lokasi_Rak::where('id_gudang',$selectedWarehouse)->get();
    }

    public function confirmBuyRequest($id)
    {
        $incoming = View_Req_Pembelian::where('id', $id)->first(); 
        $suppliers = Supplier::all()->first();   
        $this->idb = $incoming->id;   
        $this->selectedID = $incoming->id;
        $this->selectedNamaBarang = $incoming->nama_barang;
        $this->selectedKategori = $incoming->id_kategori;
        $this->selectedOutlet = $incoming->nama_outlet;
        $this->gudangs = Lokasi_Gudang::where('id_outlet', $incoming->id_outlet)->get();
        $this->selectedSupplier = $suppliers->nama;
        $this->dispatchBrowserEvent('show-confirm-incoming-item-modal');
    }

    public function rejectConfirm($id)
    {
        $this->deleteId = $id;
    }

    public function reject()
    {
        Req_Pembelian::where('id', $this->deleteId)->delete();
        Alert::success('OK','Reject Completed');
        session()->flash('message', 'You have removed this request');
        return redirect()->route('accincoming');
    }

    public function submitConfirmIncoming()
    {
        $barang = Barang::create([
            'nama' => $this->selectedNamaBarang,
            'id_kategori' => $this->selectedKategori,
            'id_rak' => $this->selectedRack,
            'id_supplier' => $this->selectedSupplier
        ]);

        $delete = Req_Pembelian::where('id', $this->selectedID);
        $delete->delete();

        Alert::success('OK','Item has been approved');

        return redirect()->route('accincoming');
    }
}
