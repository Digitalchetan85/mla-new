<?php

namespace App\Exports;

use App\Models\RegisterModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisteredUsersExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'ID',
            'Name',
            'Email',
            'Contact',
            'Mandal',
            'Village',
            'Address',
            'SSC YOP',
            'SSC Percentage',
            'Inter YOP',
            'Inter Percentage',
            'Qualification',
            'Graduation Stream',
            'Graduation YOP',
            'Graduation Percentage',
            'Post Graduation YOP',
            'Post Graduation Percentage',
            'Trainings',
            'Resume',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return RegisterModel::all();
        return collect(RegisterModel::getRegisteredUsers());
    }
}
