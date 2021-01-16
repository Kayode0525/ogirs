<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualReturns extends Model
{
    protected $table="annual_returns";

    public $timestamps = false;

    protected  $fillable = [

        'company_id',
        'staff_id', 
        'total_months_worked',
        'basic_salary',
        'housing',
        'transport',
        'other_allowances',
        'total_income',
        'total_contribution',
        'nhf',
        'total_tax_deducted',
        'total_tax_remitted',
        'upload_id',
        'period',
 
       
    ];

    public function companies()
    {
        return $this->belongsTo('App\TaxAgent','company_id')->withDefault(['name'=>'Anonymous']);
    }
}

