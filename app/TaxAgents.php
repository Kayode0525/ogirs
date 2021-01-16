<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxAgents extends Model
{
    protected $table = "tax_agents";

    protected $fillable = [
        'id',
        'reference_number',
        'name',
        'tax_identification_id',
        'office_address',
        'city',
        'company_reg_number',
        'registration_date',
        'phone_number',
        'tax_station_id',
        'business_type_id',
        'business_category',
        'email',
        'password'
        
        
    ];
}
