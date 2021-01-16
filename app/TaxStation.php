<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxStation extends Model
{
    protected $table = "tax_stations";

    protected $fillable = [
        'id',
        'description',
        
    ];
}
