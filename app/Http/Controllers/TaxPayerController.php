<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TaxPayer;
use App\TaxStation;
use App\BusinessTypes;

use function App\Helpers\api_request_response;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use function App\Helpers\success_status_code;
use function App\Helpers\bad_response_status_code;

class TaxPayerController extends Controller
{
    public function index()
    {
      //  $data['agents']=$agents=TaxAgent::all()->paginate(1000);
        $data['stations']= TaxStation::all();
        $data['business']= BusinessTypes::all();
        $data['agents']=$agents=TaxPayer::paginate(1000);

      //  dd($agents);
        return view('admin.tax_payer',$data);


    }

    public function upload()
    {
       
        return view('admin.tax_payer_upload');//,$data);
    }
}
