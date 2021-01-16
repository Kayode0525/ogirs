<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxClearanceCertificate extends Model
{
    protected $table = "tax_clearance_certificates";

    protected $fillable = [
        'id',
        'application_date',
        'tax_payer_name',
        'tin',
        'description',
        'status'
        
    ];
}
