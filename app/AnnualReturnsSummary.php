<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualReturnsSummary extends Model
{
    protected $table="annual_returns";

    public $timestamps = false;

    protected  $fillable = [

        'company_id',
        'basic_total', 
        'hosuing_allowance_total',
        'transport_allowance_total',
        'other_allowance_total',
        'upload_id',
        'period',
    ];

    public function companies()
    {
        return $this->belongsTo('App\TaxAgent','company_id')->withDefault(['name'=>'Anonymous']);
    }
}
