<?php

namespace App\Exports;

use App\TaxPayer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return TaxPayer::all();
        return $collection = collect([]);
    }


    public function headings() : array{
        return [
            
            'Surname',
            'Othernames',
            'Phone',
            'Email',
            'Gender',
            'Address',
            'City',
            

        ];
    }
}
