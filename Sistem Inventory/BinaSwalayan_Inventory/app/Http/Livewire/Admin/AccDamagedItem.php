<?php

namespace App\Http\Livewire\Admin;

use App\Models\Laporan_Rusak;
use App\Models\Perbaikan;
use App\Models\View_Rusak;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class AccDamagedItem extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $idb ='';
    public $updatedNamadamage ='';
    public $updatedKategori = '';
    public $updatedRak = '';
    public $updatedWarehouse = '';
    public $updatedOutlet = '';
    public $updatedKeluar= '';
    public $updatedKembali= '';
    public $updatedLokasi= '';
    public $updatedBiaya='';
    
    public function render()
    {
        return view('livewire.admin.acc-damaged-item', [
            'damages' => View_Rusak::all(),
        ]);
    }

    public function confirmDamage($id)
    {
        $damage = View_Rusak::where('id', $id)->first();
        $catatan = Laporan_Rusak::where('id_barang', $id)->first();
        $this->idb = $damage->id;
        $this->updatedID = $damage->id;
        $this->updatedNamaBarang = $damage->nama_barang;
        $this->updatedKategori = $damage->kategori;
        $this->updatedRak = $damage->id_rak;
        $this->updatedGudang = $damage->gudang;
        $this->updatedOutlet = $damage->outlet;
        $this->updatedCatatan = $catatan->catatan;
        $this->dispatchBrowserEvent('show-confirm-damage-item-modal');
    }

    public function destroyer($id)
    {
        $delete = Laporan_Rusak::where('id_barang', $id);
        $delete->delete();
        Alert::success('OK','You have reject this request');
        session()->flash('message', 'You have reject this request');
        return redirect()->route('accdamaged');
    }

    public function submitConfirmDamage()
    {
        $perbaikan = Perbaikan::create([
            'id_barang' => $this->updatedID,
            'tanggal_keluar' => $this->updatedKeluar,
            'tanggal_kembali' => $this->updatedKembali,
            'lokasi' => $this->updatedLokasi
        ]);

        $delete = Laporan_Rusak::where('id_barang', $this->updatedID);
        $delete->delete();

        Alert::success('OK','Item has been approved');

        return redirect()->route('accdamaged');
    }
}