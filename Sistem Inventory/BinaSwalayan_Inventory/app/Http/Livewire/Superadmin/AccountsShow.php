<?php

namespace App\Http\Livewire\Superadmin;

use DB;
use App\Models\User;
use App\Models\Outlet;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AccountsShow extends Component
{
    public $selectedOutlet;
    public $search;
    protected $queryString = ['search'=> ['except' => ''],
                            'page' => ['except' => 1]];

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $id_user = '';
    public $nama_update = '';
    public $level_update = '';
    public $jenis_kelamin_update = '';
    public $alamat_update = '';
    public $no_telp_update = '';
    public $id_outlet_update = '';

    public $id_delete;

    public function render()
    {
        $users = User::latest()->paginate(5);

        if($this->search !== null) {
            $users = User::where('nama', 'like', '%' . $this->search . '%')
            ->orwhere('alamat', 'like', '%' . $this->search . '%')
            ->orwhere('level', 'like', '%' . $this->search . '%')
            ->orwhere('jenis_kelamin', 'like', '%' . $this->search . '%')
            ->orwhere('username', 'like', '%' . $this->search . '%')
            ->latest()->paginate(5);
        }

        // $users = \DB::table('users')
        //         ->join('outlets', 'users.id_outlet', '=', 'outlets.id')
        //         ->select('users.*', 'users.nama as nama_user', 'outlets.nama as nama_outlet')
        //         ->get();

        return view('livewire.superadmin.accounts-show', [
            'users' => $users,
            'outlets' => Outlet::all()
            ]);



    }

    public function formUpdate($id)
    {
        $user = User::where('id', $id)->first();
            $this->id_user = $user->id;
            $this->nama_update = $user->nama;
            $this->level_update = $user->level;
            $this->jenis_kelamin_update = $user->jenis_kelamin;
            $this->alamat_update = $user->alamat;
            $this->no_telp_update = $user->no_telp;
            $this->id_outlet_update = $user->id_outlet;

            $this->dispatchBrowserEvent('show-edit-item-modal');

    }


    public function sendUpdate()
    {
        $user = User::where('id', $this->id_user)->first();
        $user->nama = $this->nama_update;
        $user->level = $this->level_update;
        $user->jenis_kelamin = $this->jenis_kelamin_update;
        $user->alamat = $this->alamat_update;
        $user->no_telp = $this->no_telp_update;
        $user->id_outlet = $this->id_outlet_update;

        $user->save();

        Alert::success('OK','You have updated the user');
        session()->flash('message', 'You have updated the user');

        $this->dispatchBrowserEvent('close-modal');

        return redirect()->route('accounts_show');
    }

    public function id_delete($id)
    {
        $this->id_delete = $id;
    }

    public function delete()
    {
        // $user = User::find($id_user);
        User::find($this->id_delete)->delete();

        // if($user) {
        //     $user->delete();
        // }

        Alert::success('OK','You have removed the user');
        session()->flash('message', 'You have removed the user');

        return redirect()->route('accounts_show');
    }






}
