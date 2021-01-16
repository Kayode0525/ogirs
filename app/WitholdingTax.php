<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WitholdingTax extends Model
{
    protected $table="witholding_taxes";

    public $timestamps = false;

    protected  $fillable = [

           
         'company_id',
           'contractor_name',
            'business_outfit',
            'nature_of_business',
            'contarct_sum',
            'wht_percent',
            'amount',
       
    ];
}
