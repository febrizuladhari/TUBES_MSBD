<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;
use App\Models\View_Barang;
use App\Models\Laporan_Rusak;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;


class AddDamaged extends Component
{
    public $search = '';
    public $note = '';

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

    public function store(){
        Laporan_Rusak::create([
            'id_barang' => $this->search,
            'tanggal' => now(),
            'catatan' => $this->note,
            'id_user' => Auth::user()->id,
        ]);

        // toast('Your Post as been submited!','success');
        Alert::success('Nice !', 'Request has been added');
        return redirect()->route('adddamagedstaff');
    }

}
