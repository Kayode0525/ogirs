<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaxAgents;
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
use App\Mail\SendRegistrationDetails;
//use App\Mail\SuperAdminAssignment;
use App\Mail\SuperAdminAssignment;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;


class VerificationController extends Controller
{
    public function tin(Request $request)
    {
        return view('tin_confirmation');//, $data);

    }

    public function register(Request $request)
    {
        $tax_stations = TaxStation::all();      
        $data['tax_stations']  =  $tax_stations;

        $business_types = BusinessTypes::all();      
        $data['business_types']  =  $business_types;


        return view('register', $data);

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


    public function verify_agent(Request $request)
    {

        //dd($request->all());

        $agents = TaxAgents::where('tax_identification_id',$request->id)->get();

        Session::put("tax_identification_id", $request->id);

       if (!$agents->isEmpty())
       {
          return view('unique_details');//, $data);
       }
       else
       {
        return Redirect::back()->withErrors("You cannot open this bid at the moment!.The Bid opening date is ");//->withInput($request->all());
       }
    }


    public function update_email_phone(Request $request)
    {

        $agentss = TaxAgents::where("tax_identification_id", Session::get("tax_identification_id"))->first();

        $input = $request->all();

        $password = generate_random_password();

        $input['email'] =$input['email'];
        $input['name'] =$agentss->name;
        $input['company_id'] =$agentss->id;
        $input['phone'] = $input['phone_number'];
       // $input['password'] = Hash::make($password);
        $input['role'] =3;//$fromMDA? 2 : $input['role'];

        


        $input['user_type'] = 'taxagent';

        DB::beginTransaction();

        $this->request = $request;
        $this->input = $input;

        $this->userController = new UserController();

        $this->user = $user = User::where( 'email', $input['email'] )->first();

      //  dd( $this->user);

        if (empty($this->user )) {
            // dd( $this->user );
            $this->user = $createdUser = $this->userController->create(
                $this->request,
                false,
                $this->input,
                true
            );

        } else if ( $this->user->isAdmin ) {

            throw new \Exception( 'This admin user already belongs to a company!' );
        }

        
        $agentss->fill($input)->save();



        // $this->user= TaxAgents::where("tax_identification_id", Session::get("tax_identification_id"))->first();
        // $this->password = $password;
      
      
       //  dd($this->user);

        //    Mail::to($this->user->email)->send(new SendRegistrationDetails(
        //             $this->user,
        //             $this->user->name,
        //             $this->password
        //         ));


        return Redirect::route("login");//->with('success',"Record successfully uploaded !.");

    }



}
