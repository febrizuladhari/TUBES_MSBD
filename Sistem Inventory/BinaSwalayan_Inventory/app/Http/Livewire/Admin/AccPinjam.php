<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\View_Req_Peminjaman;
use App\Models\Req_Peminjaman;
use App\Models\View_Barang;
use App\Models\Perpindahan;

use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class AccPinjam extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $needItems=[];
    public $query;
    public $items;
    public $name;
    public $deleteId='';


    public function mount(){
    }
    public $showdiv = true;
    public $showresult;
    public $search = "";
    public $records = NULL;
    public $empDetails;

    // Fetch records
    public function searchResult()
    {
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

    public function onAcc($id)
    {
        $this->needItems = View_Req_Peminjaman::query()->where('id',$id)->get();
        $this->deleteId = $id;
    }

    public function submitAcc($empDetails,$Items)
    {
        // dd($empDetails,$Items);
        DB::beginTransaction();
        try {
            Perpindahan::create([
                'tanggal_keluar' => now(),
                'id_barang' => $empDetails['id'],
                'id_outlet_peminjam' => $Items['id_outlet'],
                'id_user' => $Items['id_user'],
            ]);
    
            $this->delete($Items['id']);
            $this->empDetails = NULL;
            $this->items = NULL;
    
            Req_Peminjaman::where('id', $this->deleteId)->delete();
            DB::commit();
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::success('OK', 'Item has been approved !');
                    return redirect()->route('accshifting_sa');
                } elseif ($user->level == 'admin') {
                    Alert::success('OK', 'Item has been approved !');
                    return redirect()->route('accshifting');
                }
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Error, Please try again!');
                    return redirect()->route('accshifting_sa');
                } elseif ($user->level == 'admin') {
                    Alert::error('Error, Please try again!');
                    return redirect()->route('accshifting');
                }
            }
        }

        Alert::error('Opps !', 'You cannot access this page');

    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete(){
        Req_Peminjaman::where('id', $this->deleteId)->delete();

        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                Alert::success('OK', 'Reject completed !');
                return redirect()->route('accshifting_sa');
            } elseif ($user->level == 'admin') {
                Alert::success('OK', 'Reject completed !');
                return redirect()->route('accshifting');
            }
        }
        Alert::error('Opps !', 'You cannot access this page');
    }

    public function render()
    {
        return view('livewire.admin.acc-pinjam',[
            'pinjams' => View_Req_Peminjaman::paginate(5),
            // 'barangs' => $barang,
        ]);


    }
}
