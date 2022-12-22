<?php

namespace App\Exports;

use App\Models\Log_Update_Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LogUpdateItemExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Log_Update_Barang::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Item ID',
            'Name Updated',
            'Old Name',
            'Category Updated',
            'Old Category',
            'Rack Updated',
            'Old Rack',
            'Supplier Updated',
            'Old Supplier',
            'Updated At'
        ];
    }
}
