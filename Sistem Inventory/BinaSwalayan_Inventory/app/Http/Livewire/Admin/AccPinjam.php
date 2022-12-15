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
    public $needItems=[];
    public $query;
    public $items;
    public $name;


    public function mount(){
    }
    public $showdiv = true;
    public $showresult;
    public $search = "";
    public $records = NULL;
    public $empDetails;

    // Fetch records
    public function searchResult(){

        if(!empty($this->search)){

            $this->records = View_Barang::where('Nama','like','%'.$this->search.'%')
                      ->limit(5)
                      ->get();

            $this->showdiv = true;
        }else{
            $this->showdiv = false;
        }
    }

    // Fetch record by ID
    public function fetchItemDetail($id){

        $record = View_Barang::select('*')
                    ->where('id',$id)
                    ->first();

        $this->search = $record->Nama;
        $this->empDetails = $record;
        $this->search = NULL;
        $this->records = NULL;

    }


    public function onAcc($id){
        
        $this->needItems = View_Req_Peminjaman::query()->where('id',$id)->get();
        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    
    public function render()
    {
        return view('livewire.admin.acc-pinjam',[
            'pinjams' => View_Req_Peminjaman::all(),
            // 'barangs' => $barang,
        ]);

        
    }
}
