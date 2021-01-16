<?php

namespace App\Imports;

use App\TaxPayer;



use App\TaxAgents;
use App\TaxPayers;
use App\TaxStation;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;

class TaxPayerImport implements ToModel, WithHeadingRow, WithChunkReading,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function rules(): array
    {
        return [
            'surname'             => 'required|max:50',
            'othernames'             => 'required|max:50',
            'email'            => 'required|email',
            'phone'            => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11',
            'gender'              => 'required|max:10',
            'address'          => 'required|max:200',
            'city'             => 'required|max:50',
          
    
        ];
 
    }

    public function model(array $row)
    {

        $importtype=Session::get('importtype');

        //$company_id=Session::get('company_id');
         $company = TaxAgents::where('id',Auth::user()->company_id)->first();

         $importtype=Session::get('importtype');
        

         return new TaxPayers([

            
            'reference_number' => $company->reference_number,
            'surname' =>  $importtype==0? $row[2]:$row['surname'],
            'othername' =>$importtype==0? $row[4]:$row['othernames'],// $row[4],
            'tax_identification_id' =>$importtype==0? $row[0]:"38". rand(10000000,99999999),//Carbon::now()->timestamp,
            'company_reg_number' =>$company->company_reg_number,
            'phone_number' =>$importtype==0? '0'.$row[10]:$row['phone'],
            'email' =>$importtype==0? '':$row['email'], 
            'gender' => $importtype==0?  $row[5]:$row['gender'],
            'office_address' =>$importtype==0?  $row[6]:$row['address'],
            'city' =>$importtype==0?  $row[7]:$row['city'], 
            'tax_station_id' =>$company->tax_station_id,
            
            'company_id'=>  Auth::user()->company_id,
           

        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }

   

    public function customValidationMessages()
    {
    return [
 
                #All Email Validation for Teacher Email
                'email.required'    => ' Email must not be empty!',
                'email.email'       => 'Incorrect  email address!',
                'email.unique'      => 'The  email has already been used',
 
 
                #Max Lenght Validation
                'surname.required'                 => 'Surname must not be empty!',
                'othername.max'                    => 'The maximun length of The Teacher name must not exceed :max',
                
                'gender.required'                  => 'Teacher gender must not be empty!',
                'gender.max'                       => 'The maximun length of The Teacher gender must not exceed :max',
               
                'city.required'                    => 'Citys must not be empty!',
                'city.max'                         => 'The maximun length of The city must not exceed :max',
               
                'office_address.required'            => 'Address  must not be empty!',
                'office_address.max'                 => 'The maximun length of The Address must not exceed :max',
 
 
              
                'phone.required'      => 'Phone contact must not be empty!',
                'phone.regex'         => 'Incorrect format of phone number Contact',
 
 
       ];
  }

   
   
 
}
