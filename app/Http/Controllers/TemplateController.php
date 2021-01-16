<?php

namespace App\Http\Controllers;
use App\Models\ExcelUpload;
use App\Exports\TemplateExport;
use App\Exports\AnnualTemplateExport;
use App\Exports\PendingReqguest;
use App\Exports\TaxDeductionCardExport;
use App\Exports\WitholdingTaxExport;
use App\Exports\EmployeeExport;
use File;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $posts = ExcelUpload::paginate(1);
 
        return view('welcome', ['posts' => $posts]);
    }
 
    public function monthly($type)
    {
        return \Excel::download(new TemplateExport, 'monthly_remittance.' . $type);
    }

    public function annual($type)
    {
        return \Excel::download(new AnnualTemplateExport, 'annual_returns.' . $type);
    }


    public function pending($type)
    {
        return \Excel::download(new PendingReqguest, 'template.' . $type);
    }

    public function taxdeductions($type)
    {
        return \Excel::download(new TaxDeductionCardExport, 'taxduction.' . $type);
    }

    public function witholding($type)
    {
        return \Excel::download(new WitholdingTaxExport, 'template.' . $type);
    }

    public function employee($type)
    {
        return \Excel::download(new EmployeeExport, 'employees_record.' . $type);
    }
}
