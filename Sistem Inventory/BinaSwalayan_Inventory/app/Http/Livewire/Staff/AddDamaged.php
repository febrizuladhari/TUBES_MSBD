<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;
use App\Models\View_Barang;
use Livewire\WithPagination;
use App\Models\Laporan_Rusak;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AddDamaged extends Component
{
    use WithFileUploads;

    public $search = '';
    public $note = '';
    public $bukti;

    protected $listeners = [
        'getBid'
    ];


    public function getBid($value)
    {
    if(!is_null($value))
        $this->search = $value;
    }

    public function render()
    {
        return view('livewire.staff.add-damaged',[
            'barangs' => View_Barang::all()->where('id',$this->search)
        ]);
    }

    public function store()
    {
        DB::beginTransaction();
            try{
                $this->validate([
                    'bukti' => 'required|image|mimes:png,jpg,jpeg|max:10240',
                ]);
        
                if($this->bukti)
                    // $fileName = $this->bukti->getClientOriginalName();
                    // $filepath = $this->bukti->storeAs('bukti_rusak', $fileName,'public');
                    $filepath = $this->bukti->store('bukti_rusak', 'public');
        
                Laporan_Rusak::create([
                    'id_barang' => $this->search,
                    'tanggal' => now(),
                    'catatan' => $this->note,
                    'id_user' => Auth::user()->id,
                    'bukti' => $filepath,
                ]);
                DB::commit();
        
                // toast('Your Post as been submited!','success');
                Alert::success('Nice !', 'Request has been added');
                return redirect()->route('adddamagedstaff');
                
            }catch(\Throwable $th){
                DB::rollBack();
                Alert::error('Error, Please Try again');
                return redirect()->route('adddamagedstaff');
            }
    }

}
