<?php

namespace App\Http\Livewire\Admin;


use App\Models\Kategori;
use App\Models\Outlet;
use App\Models\Barang;
use App\Models\Lokasi_Gudang;
use App\Models\Lokasi_Rak;
use App\Models\Supplier;
use App\Models\View_Barang;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\PDF;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class QritemAdmin extends Component
{

    public $searchadmin = '';
    public $qrData = '';
    public $image;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // Single QR Generator
    // public function generateSingleQr($idb)
    // {
    //     $datas = Barang::findOrFail($idb);
    //     $datas->get();
    //     $qrItem = QrCode::size(400)->generate($datas->name);
    //     $this->checked = array_diff($this->checked, [$idb]);


    //     return view('admin.qritemadmin', compact('qrItem'));
    // }

    // Multiple QR Generator
    public function generateMultipleQr($id)
    {
        // $data = View_Barang::findOrFail($id);
        // $qrCode = QrCode::size(400)->generate($data->id);

        $data = View_Barang::get()->find($id);
        $image = QrCode::format('png')
                ->merge(public_path('logo.png'), 0.4, true)
                ->size(200)->errorCorrection('H')
                ->generate($id);
        $output_file = '/img/qr-code/Bina_QR_Item-' . $id . '.PNG';
        Storage::disk('local')->put($output_file, $image); //storage/app/public/img/qr-code/img-1557309130.png

        return view('livewire.admin.qritem-admin',
                compact('image')
        );
    }

    public function cetakQrCode()
    {
        $dataBarangs = View_Barang::all();
        $no  = 1;

        $pdf = PDF::loadView('admin.printqrcode', compact('dataBarangs', 'no'));
        $pdf->setPaper('a4', 'potrait')->output();

        return response()->streamDownload(function () use($pdf) {
            echo  $pdf->stream();
        }, 'QR Code Items.pdf');
    }

    public function render()
    {

        return view('livewire.admin.qritem-admin', [
            'datas'  => View_Barang::searchadmin(trim($this->searchadmin))->paginate(10),

            'kategoris' => Kategori::all(),
            'suppliers' => Supplier::all(),
            'outlets' => Outlet::all(),
        ]);
    }
}
