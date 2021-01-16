<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\AnnualReturns;

use function App\Helpers\api_request_response;
use function App\Helpers\bad_response_status_code;
use function App\Helpers\generate_uuid;
use function App\Helpers\success_status_code;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnnualReturnsController extends Controller
{
    //
    public function index()
    {
        $uid=generate_uuid();
        Session::put('DataID',$uid);

        $start = '2010-12-02';
        //$end  = '2016-05-06';
        $end = now();
        $getRangeYear   = range(gmdate('Y', strtotime($start)), gmdate('Y', strtotime($end)));

        $data['years']=$getRangeYear ;

        return view('annual_returns',$data);
    }
}
