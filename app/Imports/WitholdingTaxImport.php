<?php

namespace App\Imports;

use App\WitholdingTax;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WitholdingTaxImport implements ToModel, WithHeadingRow, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       // dd($row);
        return new WitholdingTax([

            'company_id'=>Auth::user()->company_id,
            'contractor_name'=>$row["contractor_name"],
            'business_outfit' =>$row["business_outfit"],
            'nature_of_business'=>$row["nature_of_business"],
            'contarct_sum'=>$row["contarct_sum"],
            'wht_percent'=>$row["wht_percent"],
            'amount'=>$row["amount"],
           
            //
        ]);

       
    }


    public function chunkSize(): int
    {
        return 5;
    }
}
