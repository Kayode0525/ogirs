<?php

namespace App\Exports;

use App\TaxDeductionCard;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TaxDeductionCardExport implements FromCollection, WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      //  return TaxDeductionCard::all();

        return $collection = collect([]);
    }

    public function headings() : array{
        return [
            'staff_tin_number',
            'staff_id',
            'surname',
            'othername',
            'basic',
            'housing',
            'transport',
            'other_allowances',
            'total_income',
            'pension',
            'nhf',
            'nhis',
            'annual_tax_payable',
            'tax_prorated'

        ];
    }

  
   }
