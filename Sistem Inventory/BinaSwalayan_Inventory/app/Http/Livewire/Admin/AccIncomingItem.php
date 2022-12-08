<?php

namespace App\Http\Livewire\Admin;

use App\Models\Req_Pembelian;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class AccIncomingItem extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.admin.acc-incoming-item', [
            'incomings' => Req_Pembelian::all(),
        ]);
    }

    public function destroy($id)
    {
        $req_pembelian = Req_Pembelian::find($id);

        if($req_pembelian) {
            $req_pembelian->delete();
        }

        Alert::success('OK','You have reject this request');
        session()->flash('message', 'You have reject this request');

        return redirect()->route('acc_incoming_item');

    }
}