<?php

namespace App\Http\Livewire\Admin;

use App\Models\Laporan_Rusak;
use App\Models\Perbaikan;
use App\Models\View_Rusak;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

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
    public $updatedID= '';
    public $updatedNamaBarang= '';
    public $updatedGudang= '';
    public $updatedCatatan= '';
    public $updatedBukti= '';
    public $deleteId='';
    public $gambarId = '';

    public function render()
    {
        return view('livewire.admin.acc-damaged-item', [
            'damages' => View_Rusak::paginate(5),
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
        $this->updatedBukti = $catatan->bukti;
        $this->dispatchBrowserEvent('show-confirm-damage-item-modal');
    }

    public function destroy($id)
    {
        $this->deleteId = $id;
    }

    public function destroyer()
    {
        Laporan_Rusak::where('id_barang', $this->deleteId)->delete();

        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                Alert::success('OK', 'Reject completed !');
                return redirect()->route('accdamaged_sa');
            } elseif ($user->level == 'admin') {
                Alert::success('OK', 'Reject completed !');
                return redirect()->route('accdamaged');
            }
        }
        Alert::error('Opps !', 'You cannot access this page');
    }

    public function submitConfirmDamage()
    {
        $perbaikan = Perbaikan::create([
            'id_barang' => $this->updatedID,
            'tanggal_keluar' => $this->updatedKeluar,
            'tanggal_kembali' => $this->updatedKembali,
            'lokasi' => $this->updatedLokasi,
            'catatan'=> $this->updatedCatatan,
            // 'bukti'=> $this->updatedBukti,
        ]);

        $delete = Laporan_Rusak::where('id_barang', $this->updatedID);
        $delete->delete();

        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                Alert::success('Great', 'Item has been approved !');
                return redirect()->route('accdamaged_sa');
            } elseif ($user->level == 'admin') {
                Alert::success('Great', 'Item has been approved !');
                return redirect()->route('accdamaged');
            }
        }
        Alert::error('Opps !', 'You cannot access this page');

    }

    // public function showImage($id)
    // {
    //     $this->gambarId = $id;
    //     // Laporan_Rusak::where('id_barang', $id)->first();
    // }

    // public function showModalImage()
    // {
    //     Laporan_Rusak::where('id_barang', $this->gambarId)->first();
    // }
}
