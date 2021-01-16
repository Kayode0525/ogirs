<?php

namespace App\Http\Controllers;
use function App\Helpers\api_request_response;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use App\User;
use App\TaxAgents;
use App\TaxStation;
use App\BusinessTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $tax_stations = TaxStation::all();      
        $data['tax_stations']  =  $tax_stations;

        $business_types = BusinessTypes::all();      
        $data['business_types']  =  $business_types;

       // dd(Auth::user()->company_id);

       $data["tax_agent"] =$agentss= TaxAgents::where('id', Auth::user()->company_id)->first();
     
       Session::put("station", $agentss->tax_station_id);

        return view('profile', $data);
    }
   

    public function update(Request $request)
    {
        //dd($request->all());
        $agent = TaxAgents::where('id', Auth::user()->company_id)->firstOrFail();

        $input = $request->all();
        $agent->fill($input)->save();

        return back()->with('success', 'Record Successfully Updated!');

    }
}
