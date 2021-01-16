<?php

namespace App\Imports;

use App\TaxDeductionCard;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TaxDeductionCardImport implements ToModel, WithHeadingRow, WithChunkReading
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TaxDeductionCard([

                'company_id'=>Auth::user()->company_id,
                'staff_tin_number'=>$row["staff_tin_number"],
                'staff_id'=>$row["staff_id"],
                'surname'=>$row["surname"],
                'othername'=>$row["othername"],
                'basic'=> $row["basic"],
                'housing'=> $row["housing"],
                'transport'=> $row["transport"],
                'other_allowances'=>$row["other_allowances"],
                'total_income'=>$row["total_income"],
                'pension'=>$row["pension"],
                'nhf'=>$row["nhf"],
                'nhis'=>$row["nhis"],
                'annual_tax_payable'=>$row["annual_tax_payable"],
                'tax_prorated'=>$row["tax_prorated"],
                'uuid'=>Session::get('DataID'),
        ]);

     
    }
    public function chunkSize(): int
    {
        return 5;
    }
}
