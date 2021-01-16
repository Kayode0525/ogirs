<?php

namespace App\Http\Controllers;
use function App\Helpers\api_request_response;
use function App\Helpers\generate_random_password;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use function App\Helpers\success_status_code;
use function App\Helpers\bad_response_status_code;
use App\Employee;
use App\TaxPayers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = TaxPayers::where('company_id',Auth::user()->company_id)->get();  
        
     //  dd($employees);
        $data['employees']  =  $employees;

        return view('employee', $data);
    }

    public function employeeHome()
    {
        return view('create_employee_home');
    }

    public function uploademployeeHome()
    {
        return view('upload_employees');
    }

    

    public function create(Request $request)
    {
        $id = Auth::user()->company_id;  

        $input = $request->all();

            try{
    
                $input['company_id'] = $id;

                $employee = TaxPayers::create($input);
    
                $success['employee'] = $employee;
    

                return Redirect()->route('employee_home')->with('success', 'Employee Created Successfully !');

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

    public function employeeDetail( Request $request ) {

        $data['employee']=$company=TaxPayers::where('id', $request->id)->first();

        // $data['mdas']=$directors =Mda::where('id', $request->id)->get();


        return view( 'employee_details',$data);
    }

    public function employeeDetailView( Request $request ) {

        $data['employee']=$company=TaxPayers::where('id', $request->id)->first();

        // $data['mdas']=$directors =Mda::where('id', $request->id)->get();


        return view( 'employee_details_home',$data);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $id = $request->id;
        // dd($id);
        $employee = TaxPayers::where('id', $id)->firstOrFail();

        $input = $request->all();
        $employee->fill($input)->save();

        return redirect()->route('employee_home')
        ->with('success','Employee Data updated successfully');
    }

    public function employeeDelete(Request $request)
    {
        $id = $request->id;
        TaxPayers::find($id)->delete();
        return redirect()->route('employee_home')
        ->with('success','Employee deleted successfully');
    }

}
