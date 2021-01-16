<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";

    protected $fillable = [
        'first_name',
        'last_name',
        'other_names', 
        'designation', 
        'date_employed', 
        'company_id',
        'email', 
        'tin_number',
        'phone_number',
        'basic_salary',
        'housing_allowance',
        'transport_allowance',
        'other_allowances',
        'annual_income',
        'annual_pension_relief',
        'annual_nhf_relief',
        'annual_nhis_relief'

    ];
}
