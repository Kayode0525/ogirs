<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxPayers extends Model
{
    protected $table = "tax_payers";

    protected $fillable = [
      
        'reference_number',
        'surname',
        'othername',
        'tax_identification_id',
        'company_reg_number',
        'phone_number',
        'email',
        'gender',
        'office_address',
        'city',
        'tax_station_id',
        'company_id',
        
        
    ];
}
