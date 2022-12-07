<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Http\Request;

use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AccountsEdit extends Component
{

    public $id_user;
    public $nama;
    public $level;
    public $jenis_kelamin;
    public $alamat;
    public $no_telp;
    public $id_outlet;

    public function mount($id)
    {
        $user = User::find($id);

        if($user) {
            $this->id_user = $user->id;
            $this->nama = $user->nama;
            $this->level = $user->level;
            $this->jenis_kelamin = $user->jenis_kelamin;
            $this->alamat = $user->alamat;
            $this->no_telp = $user->no_telp;
            $this->id_outlet = $user->id_outlet;
        }
    }


    public function update()
    {
        $this->validate([
            'nama'=>'required',
            'level'=>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required|max:15',
            'id_outlet'=>'required',
            // 'outlets' => Outlet::all()
        ]);

        if($this->id_user) {

            $user = User::find($this->id_user);

            if($user) {
                $user->update([
                    'nama' => $this->nama,
                    'level' => $this->level,
                    'jenis_kelamin' => $this->jenis_kelamin,
                    'alamat' => $this->alamat,
                    'no_telp' => $this->no_telp,
                    'id_outlet' => $this->id_outlet
                ]);
            }
        }

        Alert::success('OK','You have updated the user');
        session()->flash('message', 'You have updated the user');

        return redirect()->route('accounts_show');
    }

    public function render()
    {
        return view('livewire.superadmin.accounts-edit');
    }
}
