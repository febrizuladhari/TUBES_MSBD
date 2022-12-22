<?php

namespace App\Exports;

use App\Models\Log_Delete_User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LogUpdateUserExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Log_Delete_User::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'User ID',
            'Name Updated',
            'Old Name',
            'Username',
            'Level Updated',
            'Old Level',
            'Gender Updated',
            'Old Gender',
            'Adress Updated',
            'Old Adress',
            'Phone Number Updated',
            'Old Phone Number',
            'Outlet ID Updated',
            'Old Outlet ID',
            'Updated At'
        ];
    }
}
