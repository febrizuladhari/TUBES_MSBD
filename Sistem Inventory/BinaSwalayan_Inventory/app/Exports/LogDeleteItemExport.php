<?php

namespace App\Exports;

use App\Models\Log_Delete_Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LogDeleteItemExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Log_Delete_Barang::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Item ID',
            'Name',
            'Category ID',
            'Rack ID',
            'Supplier ID',
            'Deleted At'
        ];
    }
}
