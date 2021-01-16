<?php

namespace App\Imports;

use App\MonthlyReturns;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MonthlyReturnsImport implements ToModel, WithHeadingRow, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      //  dd(Auth::user()->company_id);
        return new MonthlyReturns([

              
                'company_id'=>Session::get('company_id'),
                'staff_id'=>$row["staff_id"],
                'firstname'=>$row["firstname"],
                'othername'=>$row["othernames"],
                'designation'=> $row["designation"],
                'location_status'=> $row["location"],
                'subsidiary'=> $row["subsidiary"],
                'total_monthly_earning'=>$row["total_monthly_earning"],
                'total_tax_deducted'=>$row["total_tax_deducted"],
                'total_tax_remitted'=>$row["total_tax_remitted"],
                'upload_id'=>Session::get('DataID'),
                'period'=>Session::get('period'),

              

            //
        ]);
    }

    public function chunkSize(): int
    {
        return 5;
    }
}
