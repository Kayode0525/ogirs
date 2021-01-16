<?php

namespace App\Exports;

use App\Models\ExcelUpload;
use App\Models\Company;
use App\Models\MyRequest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Support\Facades\DB;

class TemplateExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       

    //   $requesst= DB::table('my_requests')->where('payment_status',1)

    //   ->select('created_at', DB::raw("CONCAT('RRR :',rrr , ' ', firstname,' ',lastname)
    //   AS particulars,my_request,amount ,rrr"))->get();

    //  return $requesst;

    return $collection = collect([]);
    
    
    }

    public function headings() : array{
        return [
            'SN',
            'Staff ID Number',
            'Staff TIN Number',
            'Surname',
            'Othernames',
            'Designation',
            'Staff Location Status',
            'Subsidiary Company',
            'Total Month Earnings',
            'Total Tax Deducted',
            'Total Tax Remited',

        ];
    }
}
