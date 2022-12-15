<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\View_Req_Peminjaman;
use App\Models\Req_Peminjaman;
use App\Models\View_Barang;
use App\Models\Perpindahan;




class AccPinjam extends Component
{
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

            $this->records = View_Barang::where("status",'GOOD')->where('Nama','like','%'.$this->search.'%')
                      ->limit(5)
                      ->get();

            $this->showdiv = true;
        }else{
            $this->showdiv = false;
        }
    }

    // Fetch record by ID
    public function fetchItemDetail($id){

        $record = View_Barang::where("Status",'GOOD')
                    ->where('id',$id)
                    ->first();

        $this->search = $record->Nama;
        $this->empDetails = $record;
        $this->search = NULL;
        $this->records = NULL;

    }


    public function onAcc($id){
        
        $this->needItems = View_Req_Peminjaman::query()->where('id',$id)->get();

    }

    public function submitAcc($empDetails,$Items){
        // dd($empDetails,$Items);
        Perpindahan::create([
            'tanggal_keluar' => now(),
            'id_barang' => $empDetails['id'],
            'id_outlet_peminjam' => $Items['id_outlet'],
            'id_user' => $Items['id_user'],

        ]);
        $this->destroy($Items['id']);
        $this->empDetails = NULL;
        $this->Items = NULL;

    }

    public function destroy($id){
        Req_Peminjaman::where('id', $id)->delete();
    }
    
    public function render()
    {
        return view('livewire.admin.acc-pinjam',[
            'pinjams' => View_Req_Peminjaman::all(),
            // 'barangs' => $barang,
        ]);

        
    }
}
