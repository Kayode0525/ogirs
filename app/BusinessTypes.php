<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessTypes extends Model
{
    protected $table = "business_types";

    protected $fillable = [
        'id',
        'description',
        
        
    ];

    
}
