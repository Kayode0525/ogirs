<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Invoice;
use App\Company;
use App\MonthlyReturns;
use App\WitholdingTax;
use App\RevenueLine;
use App\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use function App\Helpers\api_request_response;
use function App\Helpers\generate_random_password;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use function App\Helpers\bad_response_status_code;
use function App\Helpers\success_status_code;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['company_name'] = Auth::user()->name;
        $data['invoices']=Invoice::where('company_id',Auth::user()->company_id)->get();

        return view('company.invoice',$data);
    }

    public function invoice(Request $request)
    {
      //  dd($request->id);

       $data['invoice'] =$invoice =Invoice::where('id',$request->id)->firstOrFail();

      // dd($invoice);

       $data['company']= $company =Company::where('id',$invoice->company_id)->firstOrFail();

        return view('company.invoice_details',$data);
    }

    public function make_payment_now(Request $request)
    {
        

        $revenue= RevenueLine::where('id',$request->revenue_id)->first();

        if(!$request->hasfile('filess') && $revenue->requirefile ==1)
        {
             return Redirect::back()->withErrors("Please upload the schedule!.");
        }
        else
        {
            
            $input= $request->all();
            $input['rrr']='';
            $input['order_id']='';
            $input['payment_status']=0;
            $input['tax_station_id']= Session::get("station");
            $input['tax_payer_id']= Auth::user()->company_id;
            $input['uuid'] =$uuid= generate_uuid();
    
            Session::put("uuid", $uuid);
    
            $requestss = Payments::create($input);
    
            return Redirect::route("pay");

        }

       
 
    }

    public function show_invoice(Request $request)
    {

        $data["dataID"] = $dataID = Session::get('DataID');

        $operations=Session::get('operations');

        if($operations == "monthlyreturns")
        {
            //$data["records"] =$records=MonthlyReturns::where('upload_id',$dataID)->get();
            $data["records"]= $records=DB::table('monthly_returns')->where([['upload_id',$dataID]])->get();
            $data['invoice_sum']=$sum=$records->sum('total_tax_deducted');

        }else if($operations == "witholdingtax")
        {
            $data["records"] =$records=WitholdingTax::where('upload_id',$dataID)->get();
        }

       
        return view('invoice', $data);

    }

    public function debtors_list()
    {

        $debtors = Invoice::all();
        
        $data["debtors"] = $debtors;

        return view('admin.debtors_list',$data);
 
    }
    public function payment()
    {

        $debtors = Invoice::all();
        $data["debtors"] = $debtors;

        return view('admin.payment',$data);
 
    }
}
