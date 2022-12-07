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
    protected $queryString = ['search'=> ['except' => '']];

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $users = User::latest()->paginate(2);

        if($this->search !== null) {
            $users = User::where('nama', 'like', '%' . $this->search . '%')
            ->orwhere('alamat', 'like', '%' . $this->search . '%')
            ->orwhere('level', 'like', '%' . $this->search . '%')
            ->orwhere('jenis_kelamin', 'like', '%' . $this->search . '%')
            ->orwhere('username', 'like', '%' . $this->search . '%')
            ->latest()->paginate(2);
        }
        $this->emit('superadmin.accounts-show');

        // $users = DB::table('users')
        //             ->select('users.*', 'users.nama as nama_user', 'outlets.nama as nama_outlet')
        //             ->join('outlets', 'users.id_outlet', '=', 'outlets.id')
        //             ->select('users.*', 'outlets.nama', 'users.nama')
        //             ->get();
        return view('livewire.superadmin.accounts-show', [
            'users' => $users,
            'outlets' => Outlet::all()
        ]);

    }

    public function destroy($id_user)
    {
        $user = User::find($id_user);

        if($user) {
            $user->delete();
        }

        Alert::success('OK','You have removed the user');
        session()->flash('message', 'You have removed the user');

        return redirect()->route('accounts_show');

    }


}
