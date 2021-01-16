<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaxAgents;
use App\TaxPayers;
use App\TaxStation;
use App\BusinessTypes;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function App\Helpers\api_request_response;
use function App\Helpers\generate_random_password;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use function App\Helpers\success_status_code;
use function App\Helpers\bad_response_status_code;
use App\User;
use App\Mail\SendRegistrationDetails2;
//use App\Mail\SuperAdminAssignment;
use App\Mail\SuperAdminAssignment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;


class VerificationController extends Controller
{
    public function tin(Request $request)
    {
        return view('tin_confirmation');//, $data);

    }
   public function index(Request $request)
    {
        return view('tin_confirmation');//, $data);

    }


    public function tax_clearance_app_home(Request $request)
    {
        $uid=generate_uuid();
       // Session::put('DataID',$uid);

        $start = '2010-12-02';
        //$end  = '2016-05-06';
        $end = now();
        $getRangeYear   = range(gmdate('Y', strtotime($start)), gmdate('Y', strtotime($end)));

        $data['years']=$getRangeYear ;

        return view('tax_clearance_certificate', $data);

    }

    public function register()
    {
        $tax_stations = TaxStation::all();      
        $data['tax_stations']  =  $tax_stations;

        $business_types = BusinessTypes::all();      
        $data['business_types']  =  $business_types;


        return view('registrations', $data);

    }

    public function registerIndividual()
    {
        $tax_stations = TaxStation::all();      
        $data['tax_stations']  =  $tax_stations;

        $business_types = BusinessTypes::all();      
        $data['business_types']  =  $business_types;

        $tax_agents = TaxAgents::all();      
        $data['tax_agents']  =  $tax_agents;


        return view('register_individual', $data);

    }

    public function createAgent(Request $request)
    {

        $input = $request->all();

      //  dd($input);

       $timestamp =Carbon::now()->timestamp;

       $timestamp=substr($timestamp,0,8);

      // dd(  $timestamp);

        // $input['status'] = 0;
         $input['password'] = 'fggd';

        $this->company_name = $input['name'];

        $this->password =Str::random(8);// generate_random_password();

        $this->tin_number ="37" . $timestamp. rand(1000,9999);

      //  dd( $this->tin_number);

       $input['password'] = Hash::make($this->password);
       $input['reference_number']=Str::random(20);
      
       $this->tax_agent = $tax_agent = TaxAgents::where( 'email', $input['email'] )->first();

        //dd($this->user);

          if (empty($this->tax_agent )) {
          
                   $this->tax_agent = TaxAgents::create($input);
            
                  return Redirect()->route('registration')->with('success', 'Your registration has been sent for approval!..');

        } else {
          
         // dd("here");
            //return Redirect::back()->withErrors("The email supplied already belong to a company!");//->withInput($request->all());

            throw new \Exception('This email already belong to a company!' );
        }


     
      

       

           
    }       
    

    public function createTaxPayer(Request $request)
    {

        $input = $request->all();

            try{

                $input['tax_agent_id'] = 0;

                $tax_payer = TaxPayers::create($input);
    
                $success['tax_payer'] = $tax_payer;
    
                return api_request_response(
                    "ok",
                    "Data Update successful!",
                    success_status_code(),
                    $tax_payer
                );

                return Redirect()->route('personal_registration')->with('success', 'Tax Agent Registered Successfully !');

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
  
    public function udetails()
    {
      
       return view('unique_details');//, $data);
    
    }


    public function verify_agent(Request $request)
    {

       // dd($request->all());

        $agents = TaxAgents::where('tax_identification_id',$request->id)->get();

        Session::put("tax_identification_id", $request->id);

       if (!$agents->isEmpty())
       {
         // return view('unique_details');//, $data);
         
         return redirect()->route('udetails_tin_home');
         
         
       }
       else
       {
        // dd("here");
        //  return Redirect()->route('tin_home')->withErrors('The TIN supplied is not valid!.Kindly contact OGIRS team!');//->withInput($request->all());
         return redirect()->route('tin_home')->withErrors(['error' => 'The TIN supplied is not valid!.Kindly contact OGIRS team!.']);
            
         // return Redirect::back()->withErrors("The TIN supplied is not valid!.Kindly contact OGIRS team!. ");//->withInput($request->all());
       }
    }


    public function update_email_phone(Request $request)
    {
     // dd("here");

        $this->agentss = TaxAgents::where("tax_identification_id", Session::get("tax_identification_id"))->first();
      
     //dd( Session::get("tax_identification_id"));

    if(!empty($this->agentss))
    {
        $input = $request->all();

        //$password = generate_random_password();

        $input['email'] = $this->email =$input['email'];
        $input['name'] =$this->agentss->name;
        $input['company_id'] =$this->agentss->id;
        $input['phone'] =$this->phone_number= $input['phone_number'];
       // $input['password'] = Hash::make($password);
        $input['role'] =3;//$fromMDA? 2 : $input['role'];

        


        $input['user_type'] = 'taxagent';

        DB::beginTransaction();

        $this->request = $request;
        $this->input = $input;

        $this->userController = new UserController();
      
    
         $user  = User::where( 'email', $input['email'] )->first();
      
          if (empty($user)) {

           
            $affectedRows=  $this->agentss->update(['email'=>$this->email ,'phone_number' =>$this->phone_number]);

            dd($affectedRows);

            if($affectedRows){

                $this->user = $createdUser = $this->userController->create(
                    $this->request,
                    false,
                    $this->input,
                    true
                );
            }
          
           
             return Redirect::route("login");

        } else {
            
            return redirect()->route('udetails_tin_home')->withErrors(['error' => 'This email already belongs to a company!']);
            
         
        }


    }
}

      


}
