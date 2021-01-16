<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportingDocuments extends Model
{
    protected $table = "annual_return_supporting_documents";

    protected $fillable = [
      
        'filename',
        'annual_returns_uuid',
      
        
    ];
}
