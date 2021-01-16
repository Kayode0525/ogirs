<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxDeductionController extends Controller
{
    public function index()
    {
      
        return view('taxdeduction');
    }
}
