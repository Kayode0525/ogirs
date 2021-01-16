<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table="payments";

    public $timestamps = false;

    protected  $fillable = [

        'id',
        'uuid',
        'tax_payer_id', 
        'tax_station_id',
        'revenue_id',
        'amount',
        'rrr',
        'order_id',
        'description',
        'period',
       
       
    ];
}
