<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RevenueLine extends Model
{
    protected $table="revenue_line";

    public $timestamps = false;

    protected  $fillable = [

        'id',
        'description', 
       
       
    ];
}
