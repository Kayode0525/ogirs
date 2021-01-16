<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxDeductionCard extends Model
{
    protected $table="tax_deduction_cards";

    public $timestamps = false;

    protected  $fillable = [

        'company_id',
        'staff_tin_number',
        'staff_id',
        'surname',
        'othername',
        'basic',
        'housing',
        'transport',
        'total_income',
        'other_allowances',
        'pension',
        'nhf',
        'nhis',
        'annual_tax_payable',
        'tax_prorated',
        'uuid',
       
    ];
}
