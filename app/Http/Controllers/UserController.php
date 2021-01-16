<?php

namespace App\Http\Controllers;

use function App\Helpers\api_request_response;
use function App\Helpers\generate_random_password;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use function App\Helpers\success_status_code;
use function App\Helpers\bad_response_status_code;

use App\Mail\SendRegistrationDetails;
//use App\Mail\SuperAdminAssignment;
use App\Mail\SuperAdminAssignment;
use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $user;
    private $fromCompany;
    private $is_super_admin;
    private $password;
    private $company_name;

    public function index()
    {

        $users = User::all();

        $data["users"] = $users;

        return view('admin.user', $data);
    }

    public function companyUser()
    {
        $id = Auth::user()->company_id;

        $users= User::where('company_id', $id )
        ->get();



        $data["users"] = $users;

        return view('company.user', $data);
    }

    public function create(
        Request $request,
        $fromCompany = false,
        $inputArray = [],
        $fromMDA=false
    ) {
        $input = ($fromCompany || $fromMDA) ? $inputArray : $request->all();

       // dd($input);

        $this->company_name = $input['name'];

        $password =Str::random(10); // "password@123";// generate_random_password();

        $now = new \DateTime();

        $input['uuid'] = generate_uuid();
        $input['is_first_time'] = 1;
        $input['last_login'] =  $now;
        $input['email'] =$input['email'];
        $input['name'] = $input['name'];
        $input['phone'] = $input['phone'];
        $input['password'] = Hash::make($password);
        $input['role'] =3;//$fromMDA? 2 : $input['role'];
        $input['company_id']=$fromMDA? $input['company_id'] : Auth::user()->company_id;

        $input['user_type']="admin";

        if($fromCompany)
        {
            $input['user_type']="company";
            $input['role'] =1;
        }

        if($fromMDA)
        {
            $input['user_type']="mda";
            $input['role'] =2;
        }

        $this->input = $input;
        $this->validateUserRegister($request);
     

        $this->password = $password;

        $this->fromCompany = $fromCompany;

        $this->fromMDA=$fromMDA;

        try {
            if ($this->user = User::where('email', $this->input['email'])->first())
            {
                throw new \Exception("This user already exists!");
            }

            $this->user = User::create($this->input);

                Mail::to($this->user->email)->send(new SendRegistrationDetails(
                    $this->user,
                    $this->company_name,
                    $this->password
                ));

             dd($this->$fromMDA);

                if (!$this->fromCompany && !$this->fromMDA)
                {
                   // return Redirect::back()->with(["success" => "User created successfully!"]);
                    return api_request_response(
                        "ok",
                        "Data Update successful!",
                        success_status_code(),
                        $this->user
                    );
                }
                else
                {
                    return $this->user;
                }

        } catch (\Exception $exception) {
          //  dd($e->getMessage());
            return api_request_response(
                "error",
                $exception->getMessage(),
                bad_response_status_code()
            );
          //  return Redirect::back()->withErrors(["exception" => $e->getMessage()])->withInput($request->all());
        }


    }

    protected function validateUserRegister(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:80',
        //     'email' => 'required|email|max:80'
        // ]);
//dd($request->all());

        $this->validate($request, [
            'phone_number' => 'required',
            'email' => 'required|email'
        ]);
    }

    public  function delete(Request $request){
        $id=$request->id;


        $user = User::find($id);
        $user->delete(); //delete the client
       // User::where('id', '=', $id)->delete();
        return redirect()->back()->with('deleted', 'Delete Success!');
        //Session::flash('message','Delete successfully.');
     }

    public function createSuperAdmin(Request $request)
    {
        $this->is_super_admin = true;

        $this->createUser($request);
    }

    public function getCurrentUser(Request $request)
    {
        return Auth::user();
    }
}
