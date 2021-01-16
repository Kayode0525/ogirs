<?php

namespace App\Imports;

use App\TaxAgent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class TaxAgentsImport implements ToModel, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        //dd($row);
        return new TaxAgent([

           'reference_number' => $row[0],
           'name' => $row[1],
           'tax_identification_id' => $row[2], 
           'company_reg_number' => $row[3],
           'phone_number' => $row[6],
           'email' => $row[7],
           'office_address' => $row[12],
           'city' => $row[14],
           'tax_station_id' => $row[20],
           'business_type_id' => $row[21],
         

        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
