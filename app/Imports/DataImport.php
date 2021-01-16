<?php

namespace App\Imports;

use App\Models\ExcelUpload;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, WithHeadingRow, WithChunkReading
{

    /**
     * @param array $row
     * @return ExcelUpload|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|null
     * @throws \Exception
     */
    public function model(array $row)
    {
        $i=0;
        return new ExcelUpload([
            ++$i,
            'Postdate'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row["postdate"])->format('Y-m-d'),// date("y-m-d H:i:s", strtotime($row0)),
            'Valdate'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row["valdate"])->format('Y-m-d'),// date("y-m-d H:i:s", strtotime($row[1])),

            $details= strtolower($row["details"]),
            'Details' => $details,

            $area_of_interest_chq =strpos($details, "chq") !== false? explode ("chq", $details):$details,
            preg_match_all('!\d+!', $area_of_interest_chq[1], $matches_chq),

          //  dd($matches_chq),

            $area_of_interest_trf =strpos($details, "trf") !== false? explode ("trf", $details):$details,
            preg_match_all('!\d+!', $area_of_interest_trf[1], $matches_trf),

            $debit = str_replace( ',', '', $row["debits"]),
            $credit = str_replace( ',', '', $row["credits"]),

            'Debits' => $debit,
            'Credits'=>$credit,
            'CrDr'=> ($debit == ''|| $debit==0)? 2:1,
            $amount = ($debit == ''|| $debit==0)?  $credit : $debit ,// $credit:$debit;
            'Amount'=>$amount,
            'Id'=>Session::get('DataID'),
            'Username'=>Auth::user()->id,
            'SN'=>$i,
           // $ud1=count($matches_chq[0]) >= 1 ? $matches_chq[0][0]: "",$str = ltrim($str, '0');
           // dd($ud1),
            'ud1'=> count($matches_chq[0]) >= 1 ? ltrim($matches_chq[0][0],'0'): "",
            'ud2' => count($matches_trf[0]) >= 2 ?  ltrim($matches_trf[0][1],'0'): "",
            'ud3' => "",//count($matches[0]) >= 3 ? $matches[0][2]: "";
            'ud4' =>"",// count($matches[0]) >= 4 ? $matches[0][3]: "";
            'ud5' => Session::get('dbDate'),//count($matches[0]) >= 5 ? $matches[0][4]: "";
        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
