<?php

namespace App\Exports;

use App\Models\Log_Update_User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LogDeleteUserExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Log_Update_User::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'User ID',
            'Name',
            'Username',
            'Level',
            'Gender',
            'Adress',
            'Phone Number',
            'Outlet ID',
            'Deleted At'
        ];
    }
}
