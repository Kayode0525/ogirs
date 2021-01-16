<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyReturns extends Model
{
    protected $table="monthly_returns";

    public $timestamps = false;

    protected  $fillable = [

        'company_id',
        'staff_id', 
        'firstname',
        'othername',
        'designation',
        'location_status',
        'subsidiary',
        'total_monthly_earning',
        'total_tax_deducted',
        'total_tax_remitted',
        'upload_id',
        'period',
       
    ];
}

