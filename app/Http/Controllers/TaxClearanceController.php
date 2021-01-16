<?php

namespace App\Http\Controllers;

use App\TaxAgents;
use App\TaxClearanceCertificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function App\Helpers\api_request_response;
use function App\Helpers\generate_random_password;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use function App\Helpers\success_status_code;
use function App\Helpers\bad_response_status_code;



use Illuminate\Http\Request;

class TaxClearanceController extends Controller
{
    public function index()
    {
        return view('tcc');
    }


    public function create(Request $request)
    {
        $id = Auth::user()->company_id;  

        $agents = TaxAgents::where('id',$id)->first();

        $input = $request->all();

            try{
    
                $input['company_id'] = $id;
                $input['tax_payer_name'] = $agents->name;
                $input['tin'] = $agents->tax_identification_id;
                $input['status'] = 1;

                $employee = TaxClearanceCertificate::create($input);
    
                $success['employee'] = $employee;
    
                // return api_request_response(
                //     "ok",
                //     "Data Update successful!",
                //     success_status_code(),
                //     $employee
                // );

                return Redirect()->route('tax_clearance_certificate_home')->with('success', 'Tax clearance application created successfully !');

            } 
    
            catch (\Exception $exception) {
            // DB::rollback();
    
            return api_request_response(
                "error",
                $exception->getMessage(),
                bad_response_status_code()
            );


        }           
    }

}
