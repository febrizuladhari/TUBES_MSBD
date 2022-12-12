<?php

namespace App\Http\Livewire\Staff;


use App\Models\View_Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithPagination;


class ItemStaff extends Component
{
        public $selectedCategory = '';
    public $search = "";

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        return view('livewire.staff.item-staff', [
            'barangs' => View_Barang::where('id_Outlet',Auth::user()->id_outlet)->search(trim($this->search))
            ->when($this->selectedCategory, function ($query) {
                $query->where('Kategori', $this->selectedCategory);
            })
            ->paginate(10),

            'kategoris' => Kategori::all(),
        ]);
    }

}
