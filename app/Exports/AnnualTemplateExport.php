<?php

namespace App\Exports;

use App\Models\ExcelUpload;
use App\Models\Company;
use App\Models\MyRequest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AnnualTemplateExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
       // dd("here");
       //   $requesst= DB::table('my_requests')->where('payment_status',1)

    //   ->select('created_at', DB::raw("CONCAT('RRR :',rrr , ' ', firstname,' ',lastname)
    //   AS particulars,my_request,amount ,rrr"))->get();

    //  return $requesst;

      $requesst= DB::table('tax_payers')->where('company_id',Session::get('company_id'))

      //Total Month Earnings

      ->select('tax_identification_id', 'surname','othername' )->get();

     return $requesst;

 //   return $collection = collect([]);
    
    
    }

    public function headings() : array{

        return [

            'Staff_TIN_Number',
            'Surname',
            'Othernames',
            'Number_of_Months_Worked',
            'Basic_Salary',
            'Housing_Allowance',
            'Transport_Allowance',
            'Other Allowances',
            'Total_Income',
            'Pension_Contribution',
            'NHF',
            'Total_Tax_Deducted',
            'Total_Tax_Remitted',

        ];
    }
}
