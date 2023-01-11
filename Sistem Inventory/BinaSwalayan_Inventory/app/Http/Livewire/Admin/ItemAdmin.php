<?php

namespace App\Http\Livewire\Admin;

use App\Models\Barang;
use App\Models\Outlet;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Lokasi_Rak;
use App\Models\View_Barang;
use Livewire\WithPagination;
use App\Models\Lokasi_Gudang;
use Barryvdh\DomPDF\Facade\PDF;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ItemAdmin extends Component
{
    public $selectedOutlet = '';
    public $selectedCategory = '';
    public $searchadmin = '';

    public $idb ='';
    public $checked = [];
    public $gudangs = NULL;
    public $raks = NULL;

    public $updatedOutlet = '';
    public $updatedWarehouse = '';
    public $updatedRack = '';
    public $updatedNama ='';
    public $updatedKategori = '';
    public $updatedSupplier = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function updatedUpdatedOutlet($updatedOutlet)
    {
        if(!is_null($updatedOutlet)){
        $this->gudangs = Lokasi_Gudang::where('id_outlet',$updatedOutlet)->get();
        }
    }

    public function updatedUpdatedWarehouse($updatedWarehouse)
    {
        if(!is_null($updatedWarehouse)){
        $this->raks = Lokasi_Rak::where('id_gudang',$updatedWarehouse)->get();
        }
    }

    public function onEdit($id){

        $barang = View_Barang::where('id', $id)->first();
        $this->idb = $id;
        $this->updatedNama = $barang->Nama;
        $this->updatedKategori = $barang->id_Kategori;
        $this->updatedOutlet = $barang->id_Outlet;
        $this->updatedWarehouse = $barang->id_Gudang;
        $this->updatedRack = $barang->id_Rak;
        $this->updatedSupplier = $barang->id_Supplier;

        $this->gudangs = Lokasi_Gudang::where('id_outlet',$barang->id_Outlet)->get();
        $this->raks = Lokasi_Rak::where('id_gudang',$barang->id_Gudang)->get();
        $this->dispatchBrowserEvent('show-edit-item-modal');

    }

    public function onDelete($id)
    {
        $this->idb = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    public function submitEdit()
    {
        DB::beginTransaction();
        try {
            $barang = Barang::where('id', $this->idb)->first();
            $barang->nama = $this->updatedNama;
            $barang->id_kategori = $this->updatedKategori;
            $barang->id_rak = $this->updatedRack;
            $barang->id_supplier = $this->updatedSupplier;
            $barang->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }



        session()->flash('message', 'Items has been updated successfully');

        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                Alert::success('OK', 'Item has been updated successfully !');
                return redirect()->route('itemsuperadmin');
            } elseif ($user->level == 'admin') {
                Alert::success('OK', 'Item has been updated successfully !');
                return redirect()->route('itemadmin');
            }
        }
        Alert::error('Opps !', 'You cannot access this page');

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }

    //Single Delete
    public function deleteItem($idb)
    {
        $student = Barang::findOrFail($idb);
        $barang = View_Barang::findOrFail($idb);

        if($barang->Status == 'Perbaikan') {
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemadmin');
                }
            }
        } elseif($barang->Status == 'Rusak'){
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemadmin');
                }
            }
        } elseif($barang->Status == 'Dipinjam') {
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemadmin');
                }
            }
        } elseif($barang->Status == 'Hilang') {
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this item');
                    return redirect()->route('itemadmin');
                }
            }
        } else {
            $student->delete();
            $this->checked = array_diff($this->checked, [$idb]);

            session()->flash('info', 'Item deleted successfully');

            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::success('OK', 'Item deleted successfully !');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::success('OK', 'Item deleted successfully !');
                    return redirect()->route('itemadmin');
                }
            }
            Alert::error('Opps !', 'You cannot access this page');
        }
    }

    //Bulk Delete
    public function deleteItems()
    {
        // $pilihBarang = View_Barang::all();
        $barang = View_Barang::whereKey($this->checked)->first();
        if($barang->Status == 'Perbaikan') {
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemadmin');
                }
            }
        } elseif($barang->Status == 'Rusak'){
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemadmin');
                }
            }
        } elseif($barang->Status == 'Hilang') {
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemadmin');
                }
            }
        } elseif($barang->Status == 'Dipinjam') {
            if ($user = Auth::user()) {
                if ($user->level == 'superadmin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemsuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::error('Opps !', 'You cannot delete this items');
                    return redirect()->route('itemadmin');
                }
            }
        } else {
            DB::beginTransaction();
            try{
                Barang::whereKey($this->checked)->delete();
                DB::commit();
                session()->flash('message', 'Items have been deleted');
                if ($user = Auth::user()) {
                    if ($user->level == 'superadmin') {
                        Alert::success('OK', 'Many items deleted successfully !');
                        return redirect()->route('itemsuperadmin');
                    } elseif ($user->level == 'admin') {
                        Alert::success('OK', 'Many items deleted successfully !');
                        return redirect()->route('itemadmin');
                    }
                }
            $this->checked = [];

            }catch(\Throwable $th){
                DB::rollBack();
                session()->flash('message', 'ERROR');

                if ($user = Auth::user()) {
                    if ($user->level == 'superadmin') {
                        Alert::error('Error, Please try again!');
                        return redirect()->route('itemsuperadmin');
                    } elseif ($user->level == 'admin') {
                        Alert::error('Error, Please try again!');
                        return redirect()->route('itemadmin');
                    }
                }

            }


            Alert::error('Opps !', 'You cannot access this page');
        }
    }

    public function cetakBarcode()
    {

        $dataproduk = [];
        $dataproduk = $this->checked;

        $no  = 1;
        $pdf = PDF::loadView('admin.barcode', compact('dataproduk','no'));
        $pdf->setPaper('a4', 'potrait')->output();


        return response()->streamDownload(function () use($pdf) {
            echo  $pdf->stream();
        }, 'Selected QR Code Items.pdf');
    }

    public function render()
    {

        return view('livewire.admin.item-admin', [
            'barangs' => View_Barang::searchadmin(trim($this->searchadmin))
            ->when($this->selectedOutlet, function ($query) {
                $query->where('id_Outl        et',$this->selectedOutlet);
            })
            ->when($this->selectedCategory, function ($query) {
                $query->where('Kategori', $this->selectedCategory);
            })
            ->paginate(10),

            'kategoris' => Kategori::all(),
            'suppliers' => Supplier::all(),
            'outlets' => Outlet::all(),

        ]);
    }


}
