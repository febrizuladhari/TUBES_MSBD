<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\View_Req_Peminjaman;
use App\Models\View_Barang;



class AccPinjam extends Component
{
    public $selectedItem = '';
    public $NamaDiperlukan = '';
    public $selectedNama = '';
    public $selectediKategori = '';
    public $selectedKategori = '';
    public $selectediOutlet = '';
    public $selectedOutlet = '';
    public $selectediWarehouse = '';
    public $selectedWarehouse = '';
    public $selectediRack = '';
    public $selectedRack = '';
    public $selectediUser = '';
    public $selectedUser = '';
    public $selectedTanggal = '';
    public $needItems;
    public $query;
    public $items;
    public $name;


    
    public $userId;
    public $users;

    public $user;

    public function mount(){
        $this->query = '';
        $this->getItems();
    }

    protected $rules = [
        'items.*.id' => '',
        'items.*.name' => '',

        'item.id' => '',
        'item.name' => '',
    ];

    public function onAcc($id){
        
        $needItems = View_Req_Peminjaman::where('id',$id)->first();
        $this->selectedNama = $needItems->nama_barang;
        $this->selectediOutlet = $needItems->id_outlet;
        $this->selectedOutlet = $needItems->outlet;
        $this->selectediWarehouse = $needItems->id_gudang;
        $this->selectedWarehouse = $needItems->gudang;
        $this->selectediRack = $needItems->id_rak;
        $this->selectedRack = $needItems->rak;
        $this->selectediUser = $needItems->id_user;
        $this->selectedUser = $needItems->USER;
        $this->selectedTanggal = $needItems->tanggal_diperlukan;

        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function updatedItemId()
    {
        $this->item = View_Barang::find($this->itemid)->dd();
    }

    public function updatedName()
    {
        $this->getItems();
    }

    public function getitems()
    {
        $this->items = View_Barang::query()
            ->when($this->name, function ($query, $name) {
                return $query->where('Nama', 'LIKE', '%' . $name . '%');
            })
            ->orderBy('Nama')
            ->get();
    }




    
    public function render()
    {
        return view('livewire.admin.acc-pinjam',[
            'pinjams' => View_Req_Peminjaman::all(),
            // 'barangs' => $barang,
        ]);

        
    }
}
