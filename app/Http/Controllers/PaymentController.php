<?php

namespace App\Http\Controllers;

use function App\Helpers\api_request_response;
use function App\Helpers\generate_random_password;
use function App\Helpers\generate_uuid;
use function App\Helpers\unauthorized_status_code;
use function App\Helpers\success_status_code;
use function App\Helpers\bad_response_status_code;

use App\TaxAgents;
use App\TaxPayers;
use App\Payments;
use App\RevenueLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedBack;
use Illuminate\Support\Facades\Auth;


// define("MERCHANTID", "578494662");
// define("SERVICETYPEID", "968999908");
// define("APIKEY", "832741");
// define("GATEWAYURL", "https://login.remita.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit");
// define("GATEWAYRRRPAYMENTURL", "https://login.remita.net/remita/ecomm/finalize.reg");
// define("CHECKSTATUSURL", "https://login.remita.net/remita/ecomm");
// define("PATH", 'http://'.$_SERVER['HTTP_HOST']);//.dirname($_SERVER['PHP_SELF']));


// ///for demo
 define("MERCHANTID", "2547916");
 define("SERVICETYPEID", "4430731");
 define("APIKEY", "1946");
 define("GATEWAYURL", "https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit");
 define("GATEWAYRRRPAYMENTURL", "https://remitademo.net/remita/ecomm/finalize.reg");

 define("CHECKSTATUSURL", "https://remitademo.net/remita/ecomm");
 define("PATH", 'http://'.$_SERVER['HTTP_HOST']);



class PaymentController extends Controller
{

	public function index()
	{
		
		$data['revenues'] = RevenueLine::all();      
   

		return view('make-payment',$data);

	}


	public function pay()
	{
		$this->generateRRRdemo();

	}

	function generateServiceTypeId($type) {
	    switch($type) {
	        case 1: //transcript
	            return "968999908";
            case 2: //notification of result
                return "1023773151";
          case 5: //certificate
                return "2913751810";
           case 6: //convocation gown
                return "2913747776";
            default:
                return "";
	    }
	}

	public function make_payment_now(Request $request)
    {

        Session::put("company_id", 11);

        return Redirect::route("pay");

    }

	public function generateRRRdemo()
    {
		
		$payment_id= Session::get("uuid");

	//	dd($payment_id);
		$request = Payments::where("uuid", $payment_id)->first();

		$payer = TaxAgents::where('id',$request->tax_payer_id)->first();
		
	//	dd($request);

       
    	$totalAmount = $request->amount;

    	$this->merchantId = MERCHANTID;

    	$timestamp=DATE("dmyHis");

		$orderID = $timestamp;

		$hash_string = MERCHANTID . SERVICETYPEID . $orderID . $totalAmount . APIKEY;

		$hash = hash('sha512', $hash_string);

	

		$itemTimestamp = $timestamp;

		$responseurl = PATH . "/receipt";


    	$content = '
			{"serviceTypeId":"'.SERVICETYPEID.'"'.",".'"amount":"'.$totalAmount.'"'.",".'
			  "hash":"'.$hash.'"'.",".'
			  "orderId":"'.$orderID.'"'.",".'
			  "payerName":"'.$payer->name.'"'.",".'
			  "payerEmail":"'.$payer->email.'"'.",
			  ".'"payerPhone":"'.$payer->phone_number.'"
			}';
		$curl = curl_init();

		//dd($content);


		curl_setopt_array($curl, array(
		  CURLOPT_URL => GATEWAYURL,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_SSL_VERIFYPEER => false,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $content,
		  CURLOPT_HTTPHEADER => array(
		    "Authorization: remitaConsumerKey=$this->merchantId,remitaConsumerToken=$hash",
		    "Content-Type: application/json",
		    "cache-control: no-cache"
		  ),
		));

		$json_response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		$jsonData = substr($json_response, 7, -1);

		//dd($jsonData);

		$response = json_decode($jsonData, true);


		$statuscode = $response['statuscode'];

		$statusMsg = $response['status'];

		if($statuscode=='025'){
			
			$rrr = trim($response['RRR']);

			$new_hash_string = MERCHANTID . $rrr . APIKEY;

			$new_hash = hash('sha512', $new_hash_string);

			$data = [
				"gatewayURL" => GATEWAYRRRPAYMENTURL,
				"merchantID" => MERCHANTID,
				"responseURL" => $responseurl,
				"hash" => $new_hash,
				"rrr" => $rrr,
			];

			return view("launch-remita", $data);

		} else {
			dd($statusMsg);
			Redirect::back()
			->withErrors(
				"Error Generating RRR - " .$statusMsg
			);
		}
 	}


















    public function generateRRR()
    {
		$request = MyRequest::where("uuid", Session::get("request_id"))->first();

		//dd($request);

		$service_charge=$request->my_request  ==1? 1000 : 500;



		  //$description = $request->my_request > ==1?1000:500;

		//$serviceTypeID = SERVICETYPEID;

		$serviceTypeID =$this->generateServiceTypeId($request->my_request);// SERVICETYPEID;

		$totalAmount =  $request->amount + $service_charge;


		//dd($serviceTypeID);
    	$this->merchantId = MERCHANTID;

		$timestamp=DATE("dmyHis");

		$itemtimestamp = $timestamp;

		$orderID = $timestamp;

		$hash_string = MERCHANTID . $serviceTypeID . $orderID . $totalAmount . APIKEY;

		$hash = hash('sha512', $hash_string);

		$request->update(['order_id' => $orderID]);

		$itemTimestamp = $timestamp;
		$itemid1="itemid1";
		$beneficiaryName ="Federal University of Agriculture,Abeokuta e-collection";
		$beneficiaryAccount ="0220217161018";
		$beneficiaryAmount =$request->amount;
		$bankCode="000" ;
		$deductFeeFrom =1 ;

		$itemid3="8694".$itemtimestamp;

		$itemid2="34444".$itemtimestamp;
		$beneficiaryName2 ="Brookes Software Research Ventures";
		$beneficiaryAccount2 ="2893002252";
		$beneficiaryAmount2 =$service_charge ;
		$bankCode2="050" ;
		$deductFeeFrom2 =0 ;


		$responseurl =  PATH . "/receipt";


    	// $content = '
		// 	{"serviceTypeId":"'.SERVICETYPEID.'"'.",".'"amount":"'.$totalAmount.'"'.",".'
		// 	  "hash":"'.$hash.'"'.",".'
		// 	  "orderId":"'.$orderID.'"'.",".'
		// 	  "payerName":"'.$request->firstname." ". $request->lastname.'"'.",".'
		// 	  "payerEmail":"'.$request->applicant_email.'"'.",
		// 	  ".'"payerPhone":"'.$request->applicant_phone_number.'"
		// 	}';


		  $payerName =$request->firstname." ". $request->lastname;

		  //dd($payerName);

			$content = "{\"serviceTypeId\": \"$serviceTypeID\",
				\"amount\": \"$totalAmount\",
				\"orderId\": \"$orderID\",
				\"payerName\": \"$payerName \",
				\"payerEmail\": \"$request->applicant_email\",
				\"payerPhone\": \"$request->applicant_phone_number\",
				\"description\": \"Payment for Test\",
				\"lineItems\":[
					{\"lineItemsId\":\"$itemid1\",\"beneficiaryName\":\"$beneficiaryName\", \"beneficiaryAccount\":\"$beneficiaryAccount\",\"bankCode\":\"$bankCode\",\"beneficiaryAmount\":\"$beneficiaryAmount\",\"deductFeeFrom\":\"$deductFeeFrom\"},
					{\"lineItemsId\":\"$itemid2\",\"beneficiaryName\":\"$beneficiaryName2\",\t\r\n\"beneficiaryAccount\":\"$beneficiaryAccount2\",\"bankCode\":\"$bankCode2\",\"beneficiaryAmount\":\"$beneficiaryAmount2\",\"deductFeeFrom\":\"$deductFeeFrom2\"}]}";


				//	dd($content);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => GATEWAYURL,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_SSL_VERIFYPEER => false,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $content,
		  CURLOPT_HTTPHEADER => array(
		    "Authorization: remitaConsumerKey=$this->merchantId,remitaConsumerToken=$hash",
		    "Content-Type: application/json",
		    "cache-control: no-cache"
		  ),
		));

		$json_response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		$jsonData = substr($json_response, 7, -1);

	//	dd($jsonData);

		$response = json_decode($jsonData, true);



		$statuscode = $response['statuscode'];

		$statusMsg = $response['status'];

		if($statuscode=='025'){
			$rrr = trim($response['RRR']);

			$new_hash_string = MERCHANTID . $rrr . APIKEY;

			$new_hash = hash('sha512', $new_hash_string);

			$data = [
				"gatewayURL" => GATEWAYRRRPAYMENTURL,
				"merchantID" => MERCHANTID,
				"responseURL" => $responseurl,
				"hash" => $new_hash,
				"rrr" => $rrr,
			];

			return view("launch_remita", $data);

		} else {

		//	dd($statusMsg);
			Redirect::back()
			->withErrors(
				"Error Generating RRR - " .$statusMsg
			);
		}
	 }

	 public function remita_transaction_details_rrr($rrr)
	 {


		$mert =  MERCHANTID;
		$api_key =  APIKEY;
		$concatString = $rrr . $api_key . $mert;
		$hash = hash('sha512', $concatString);
		$url 	= CHECKSTATUSURL . '/' . $mert  . '/' . $rrr . '/' . $hash . '/' . 'status.reg';

		//define("GATEWAYRRRPAYMENTURL","https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/{{merchantId}}/{{rrr}}/{{apiHash}}/status.reg");
		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);
		$response = json_decode($result, true);


		return $response;
	 }

	 public function confirmPayment(Request $request)
	 {

//	dd($request->id);
		$response =$this->remita_transaction_details_rrr($request->id);
	//	dd($response);

			$data["response_code"]=$response_code = $response['status'];

    	if($response_code == '01' || $response_code == '00'){

		//script to update db should be added here

		   $status=1; $rrr=$response['RRR']; $amount =$response['amount'];


            $order_id =$response['orderId'];
		   $requestss = MyRequest::where("order_id", $order_id)->first();

		 //  	dd($requestss);

		   $requestss->update(['payment_status' => $status,'rrr'=> $rrr]);

		    return api_request_response(
                    "ok",
                    "Payment Confirmed, Data Update successful!",
                    success_status_code(),
                    $requestss
                );
          // dd($response);

		}
		else
		{
			return api_request_response(
                "ok",
                "Payment status cannot be ascertained!.",
				success_status_code(),
				$response
            );
		}
	 }

	 public function remita_transaction_details($orderID)
	 {
		$mert =  MERCHANTID;
		$api_key =  APIKEY;
		$concatString = $orderID . $api_key . $mert;
		$hash = hash('sha512', $concatString);
		$url 	= CHECKSTATUSURL . '/' . $mert  . '/' . $orderID . '/' . $hash . '/' . 'orderstatus.reg';
		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);
		$response = json_decode($result, true);
		return $response;
	 }



	public function showReceipt(Request $request)
	 {

		//dd("here");
		$orderID = $request->get('orderID');

		//dd($orderID);
		if($orderID !=null){


			$response =$this->remita_transaction_details($orderID);
			$data["response_code"]=$response_code = $response['status'];
			if (isset($response['RRR']))
				{
				  $data["rrr"] = $response['RRR'];
				}
				$data["response_message"]=$response_message = $response['message'];
		}

		if($response_code == '01' || $response_code == '00'){

		//script to update db should be added here

		   $status=1; $rrr=$response['RRR'];


		   $request = MyRequest::where("order_id", $orderID)->first();

		   Session::put("id", $request->id);

		   $this->requests=$request;
		   $this->RRR=$rrr;

		   $email=$request->applicant_email;

		   $this->applicant_fullnames = $request->firstname . ''. $request->lastname;

		   //dd($email);
		   $request->update(['payment_status' => $status,'rrr'=> $rrr]);

		   Mail::to($email)   //->cc(['adekolaha@funaab.edu.ng'])
		   ->send(new FeedBack(
			$this->requests
		   ));

	// 	   Mail::to($email)
    // ->cc(['name1@domain.com','name2@domain.com'])
    // ->send(new document());

			if($request->my_request==1)
			{
				return redirect()->route('transcript_form');
			}
			else
			{
				return redirect()->route('completed');
			}


			//return view('sample_receipt',$data);
		}


	 }
}
