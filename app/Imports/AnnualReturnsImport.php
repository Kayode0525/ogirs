<?php

namespace App\Imports;

use App\AnnualReturns;
use App\AnnualReturnsSummary;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;

class AnnualReturnsImport implements ToModel, WithHeadingRow, WithChunkReading,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      //  dd(Auth::user()->company_id);

     //   dd($row);
        return new AnnualReturns([

              
                'company_id'=>Session::get('company_id'),
                'staff_id'=>$row["staff_tin_number"],
                'total_months_worked'=>$row["number_of_months_worked"],
                'basic_salary'=>$row["basic_salary"],
                'housing'=> $row["housing_allowance"],
                'transport'=> $row["transport_allowance"],
                'other_allowances'=> $row["other_allowances"],
              //  'tax_identification_id'=>$row["staff_tin_number"],

                'total_income'=>$row["total_income"],

                'total_contribution'=>$row["pension_contribution"],
                'nhf'=>$row["nhf"],

                'total_tax_deducted'=>$row["total_tax_deducted"],
                'total_tax_remitted'=>$row["total_tax_remitted"],

                'upload_id'=>Session::get('DataID'),
                'period'=>Session::get('period'),
        ]);
    }

    public function chunkSize(): int
    {
        return 5;
    }

    public function rules(): array
    {
      return [
          'surname'             => 'required|max:50',
          'othernames'            =>  'required|max:50',
          'staff_tin_number'              => 'required|numeric|max:10',
          'total_months_worked'    => 'required|numeric|min:1|max:12',
          'basic_salary'          => "required|regex:/^\d*(\.\d{1,2})?$/",
          'housing_allowance'          => "required|regex:/^\d*(\.\d{1,2})?$/",
          'transport_allowance'             => "required|regex:/^\d*(\.\d{1,2})?$/",
          'other_allowances'          => "required|regex:/^\d*(\.\d{1,2})?$/",
          'total_income'          => "required|regex:/^\d*(\.\d{1,2})?$/",
          'pension_contribution'             => "required|regex:/^\d*(\.\d{1,2})?$/",
          'nhf'          => "required|regex:/^\d*(\.\d{1,2})?$/",
          'total_tax_deducted'             => "required|regex:/^\d*(\.\d{1,2})?$/",
          'total_tax_remitted'          => "required|regex:/^\d*(\.\d{1,2})?$/",
          
  
      ];
 
    }

    public function customValidationMessages()
    {
        return [
    
                    #All Email Validation for Teacher Email
                    'surname.required'    => ' Surname must not be empty!',
                    'surname.max'    => 'The maximun length of the surname  must not exceed :max',

                    'othernames.required'                 => 'Othernames must not be empty!',
                    'othernames.max'                    => 'The maximun length of The  othernames must not exceed :max',
                    
                    'staff_tin_number.required'                  => 'TIN must not be empty!',
                    'staff_tin_number.max'                       => 'The maximun length of TIN must not exceed :max',
                  
                  
    
          ];
  }

}
