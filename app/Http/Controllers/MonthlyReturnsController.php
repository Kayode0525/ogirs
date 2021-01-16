<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MonthlyReturnsController extends Controller
{
    //

    public function index()
    {
        return view('new_monthly_returns');
    }
}
