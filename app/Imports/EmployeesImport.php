<?php

namespace App\Imports;

use App\TaxPayer;
use App\TaxAgent;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $company = TaxAgent::where('id',Session::get('company_id'))->first();

        return new TaxPayer([


            'reference_number' => '',
            'surname' => $row[1],
            'othername' => $row[2],
            'tax_identification_id' => $row[0], 
            'company_reg_number' => $company? $company->company_reg_number:'',
            'phone_number' => '0'.$row[3],
            'email' => $row[4],
            'gender' => $row[5],
            'office_address' => $row[6],
            'city' => $row[7],
            'tax_station_id' =>$company? $company->tax_station_id:0,
            
            'company_id'=> Session::get('company_id'),
          
 
         ]);
    }
}
