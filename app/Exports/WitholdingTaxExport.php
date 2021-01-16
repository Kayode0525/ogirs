<?php

namespace App\Exports;

use App\WitholdingTax;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WitholdingTaxExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $collection = collect([]);
    }

    public function headings() : array{
        return [
            'contractor_name',
            'business_outfit',
            'nature_of_business',
            'contarct_sum',
            'wht_percent',
            'amount',
           

        ];
    }
}
