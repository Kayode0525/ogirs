<?php

namespace App\Http\Controllers;

use function App\Helpers\api_request_response;
use function App\Helpers\bad_response_status_code;
use function App\Helpers\generate_uuid;
use function App\Helpers\success_status_code;
use App\Imports\TaxAgentsImport;
use App\Imports\TaxPayerImport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Models\TaxAgent;
use Illuminate\Support\Facades\Session;
use File;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;
use App\Payments;
use App\Imports\MonthlyReturnsImport;
use App\Imports\AnnualReturnsImport;
use App\Imports\TaxDeductionCardImport;
use App\Imports\WitholdingTaxImport;
use App\Imports\EmployeesImport;
use App\SupportingDocuments;
use Illuminate\Support\Facades\Auth;
use App\AnnualReturns;
use App\Mail\FeedBack;
use App\Mail\SendAnnualReturnDetails;
use Illuminate\Support\Facades\Mail;


class ExcelUploadController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('fileuploads');
    }


    /**
     * Works fine for maatwebsite/excel version 2.1.0
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
   

    public function importExcel(Request $request) {

      

     set_time_limit(0);

        \Excel::import(new TaxAgentsImport, request()->file('file')->store('temp'));

        return Redirect::back()->with('success',"Record successfully uploaded !.");

    
    }

    public function importEmployeeRecord(Request $request) {

      
      Session::put('importtype',1);
      set_time_limit(0);
 
         \Excel::import(new TaxPayerImport, request()->file('filess')->store('temp'));
 
         return Redirect::back()->with('success',"Record successfully uploaded !.");
 
     
     }

    

    public function importTaxPayer(Request $request) {

      

      set_time_limit(0);
 
         \Excel::import(new TaxPayerImport, request()->file('file')->store('temp'));
 
         return Redirect::back()->with('success',"Record successfully uploaded !.");
 
     
     }



    public function testt(Request $request) {

      //  dd($request->all());

         $image = $request->file('file');

         $fileName = time() . '.' . $image->extension();

      //  dd($fileName);
   
         $image->move(public_path('images'), $fileName);

         $documents= new SupportingDocuments();
         $documents->filename=$fileName;
         $documents->annual_return_uuid=Session::get("DataID");
		   $documents->save();

         //return response()->json(['success' => $imageName]);
    }







    public function importAnnualReturns(Request $request) {

        //dd($request->all());
       
        set_time_limit(0);

        if($request->hasfile('filess'))
        {
          $this->year =$request->transaction_date;
          $this->username=Auth::user()->name;
          $this->email=Auth::user()->email;
  
         // dd( $this->email);
   
          $check =AnnualReturns::where('company_id',Auth::user()->company_id)->first();
  
          if(empty($check))
          {
              Session::put('operations',"annualreturns");
     
              $period =  date("F Y", strtotime($request->transaction_date));
     
              Session::put('period',$period);
     
     
              Session::put("uuid",Session::get("DataID"));
     
              \Excel::import(new AnnualReturnsImport, request()->file('filess')->store('temp'));
  
            //   Mail::to($this->email)->send(new FeedBack(
            //    //  $this->user,
            //      $this->year,
            //      $this->username
            //  ));
  
  
     
              return Redirect::back()->with('success',"Record successfully uploaded !.");
          }
          else
          {
            return Redirect::back()->withErrors("You have already submitted for this period!. ");//->withInput($request->all());
          }
   
        }
        else
        {
          return Redirect::back()->withErrors("Please select a file to upload!. ");//->withInput($request->all());
        }

       
        
 
      //  return Redirect::route("show_invoice");//->with('success',"Record successfully uploaded !.");
 
     }


     public function importMonthlyReturns(Request $request) {

       
        set_time_limit(0);
 
        $uid=generate_uuid();
        Session::put('DataID',$uid);
 
        Session::put('operations',"monthlyreturns");
 
        $period =  date("F Y", strtotime($request->transaction_date));
 
        Session::put('period',$period);
 
         $input['rrr']='';
         $input['order_id']='';
         $input['payment_status']=0;
         $input['tax_station_id']= Session::get("station");
         $input['tax_payer_id']=Session::get("company_id");// Auth::user()->company_id;
         $input['amount'] =$request->amount;
         $input['revenue_id'] =31;
         $input['uuid'] =$uuid= $uid;
         $input['period'] = $period;
         $input['description'] = $request->description;
         
 
         Session::put("uuid", $uuid);
 
         $requestss = Payments::create($input);
 
           
 
         \Excel::import(new MonthlyReturnsImport, request()->file('filess')->store('temp'));
 
        // return Redirect::back()->with('success',"Record successfully uploaded !.");
 
        return Redirect::route("show_invoice");//->with('success',"Record successfully uploaded !.");
 
     }
 
 
     public function importTaxDeductionCard(Request $request) {
 
         // dd("here");
         set_time_limit(0);
  
         // $uid=generate_uuid();
         // Session::put('DataID',$uid);
  
          \Excel::import(new TaxDeductionCardImport, request()->file('filess')->store('temp'));
  
          return Redirect::back()->with('success',"Record successfully uploaded !.");
  
         //return Redirect::route("show_invoice");//->with('success',"Record successfully uploaded !.");
  
      }
 
      public function importWitholdingTax(Request $request) {
 
          //dd($request->all()//);
         set_time_limit(0);
  
         $uid=generate_uuid();
         Session::put('DataID',$uid);
 
       //  dd("here");
          Session::put('operations',"witholdingtax");
          \Excel::import(new WitholdingTaxImport, request()->file('filess')->store('temp'));
  
         // return Redirect::back()->with('success',"Record successfully uploaded !.");
  
         return Redirect::route("show_invoice");//->with('success',"Record successfully uploaded !.");
  
      }

      function fetch()
      {
       $images = \File::allFiles(public_path('images'));
       $output = '<div class="row">';
       foreach($images as $image)
       {
        $output .= '
        <div class="col-md-2" style="margin-bottom:16px;" align="center">
                  <img src="'.asset('images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                  <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
              </div>
        ';
       }
       $output .= '</div>';
       echo $output;
      }
  
      function delete(Request $request)
      {
       if($request->get('name'))
       {
        \File::delete(public_path('images/' . $request->get('name')));
       }
      }

  

  
}
