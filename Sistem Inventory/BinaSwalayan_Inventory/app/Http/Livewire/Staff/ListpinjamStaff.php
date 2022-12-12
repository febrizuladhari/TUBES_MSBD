<?php

namespace App\Http\Livewire\Staff;

use App\Models\View_Barang;
use App\Models\Kategori;
use App\Models\Barang;
use App\Models\Req_Peminjaman;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithPagination;

class ListpinjamStaff extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.staff.listpinjam-staff');
    }
}
