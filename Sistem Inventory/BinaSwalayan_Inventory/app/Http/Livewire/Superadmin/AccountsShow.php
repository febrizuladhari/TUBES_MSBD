<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class AccountsShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.superadmin.accounts-show', [
            'users' => User::latest()->paginate(2)
        ]);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if($user) {
            $user->delete();
        }

        Alert::success('OK','You have removed the user');
        session()->flash('message', 'You have removed the user');

        return redirect()->route('accounts_show');

    }

}
