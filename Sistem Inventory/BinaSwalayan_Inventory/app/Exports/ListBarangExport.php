<?php

namespace App\Exports;

use App\Models\View_Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ListBarangExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return View_Barang::all();
    }

    public function headings(): array
    {
        return [
            'Item ID',
            'Name',
            'Category ID',
            'Category',
            'Rack ID',
            'Rack',
            'Warehouse ID',
            'Warehouse',
            'Outlet ID',
            'Outlet',
            'Status',
            'Supplier ID',
            'Supplier'
        ];
    }
}
