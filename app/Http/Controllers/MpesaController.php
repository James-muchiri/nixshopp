<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MpesaController;
use Carbon\Carbon;
use function Psy\sh;

class MpesaController extends Controller
{
    
    public function getPassword()
    {
        $timestamp = Carbon::now()->format('YmdHms');
       // $password  = base64_encode($this->short_code. "" . $this->passkey ."". $timestamp);
        $password  ='MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjMwMTE2MTAwMzU4';
        return $password;
    }



    public function lipaNaMpesa($amount,$phone,$accountReference){
        $this->phone = $phone;
        $this->amount=$amount;
        $this->accountReference=$accountReference;

        $Mpesacontroller = new MpesaController;

        $Password =  $Mpesacontroller->getPassword();

        $timestamp = Carbon::now()->format('YmdHms');

        $headers = ['Content-Type:application/json; charset=utf8'];

        $access_token_url ='IMB6Si8na1C7dqQm2XMvgJJ8W0pV';
        $initiate_url =  "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest"; 


 


        # header for stk push
        $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token_url];
        # initiating the transaction
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $initiate_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'BusinessShortCode' => 174379,
            'Password' => $Password,
            'Timestamp' => "20230116100358",
            'TransactionType' => 'CustomerBuyGoodsOnline',
            'Amount' => $this->amount,
            'PartyA' => $phone,
            'PartyB' => 174379,
            'PhoneNumber' => $phone,
            'CallBackURL' => "https://f503-197-232-142-104.ngrok.io/api/confirmstkpush",
            'AccountReference' => $this->accountReference,
            'TransactionDesc' => $phone." has paid ".$this->amount." to 174379",
        );

        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $response = curl_exec($curl);

        return $response;
    }

    public function status($transactionCode){
        $type = 4;
        $command = "TransactionStatusQuery";
        $remarks = "Transaction Status Query"; 
        $occasion = "Transaction Status Query";
        $results_url = "https://mydomain.com/TransactionStatus/result/"; //Endpoint to receive results Body
        $timeout_url = "https://mydomain.com/TransactionStatus/queue/"; //Endpoint to to go to on timeout

        $access_token = ($this->env == "live") ? "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials" : "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials"; 
        $credentials = base64_encode($this->consumer_key . ':' . $this->consumer_secret); 
        
        $ch = curl_init($access_token);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Basic " . $credentials]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $response = curl_exec($ch);
        curl_close($ch);
        
        $result = json_decode($response); 

        //echo $result->{'access_token'};
        
        $token = isset($result->{'access_token'}) ? $result->{'access_token'} : "N/A";

        $publicKey = file_get_contents(__DIR__ . "/mpesa_public_cert.cer"); 
        $isvalid = openssl_public_encrypt($this->initiatorPassword, $encrypted, $publicKey, OPENSSL_PKCS1_PADDING); 
        $password = base64_encode($encrypted);

        //echo $token;

        $curl_post_data = array( 
            "Initiator" => $this->initiatorName, 
            "SecurityCredential" => $password, 
            "CommandID" => $command, 
            "TransactionID" => $transactionCode, 
            "PartyA" => $this->short_code, 
            "IdentifierType" => $type, 
            "ResultURL" => $results_url, 
            "QueueTimeOutURL" => $timeout_url, 
            "Remarks" => $remarks, 
            "Occasion" => $occasion,
        ); 

        $data_string = json_encode($curl_post_data);

        //echo $data_string;

        $endpoint = ($env == "live") ? "https://api.safaricom.co.ke/mpesa/transactionstatus/v1/query" : "https://sandbox.safaricom.co.ke/mpesa/transactionstatus/v1/query"; 

        $ch2 = curl_init($endpoint);
        curl_setopt($ch2, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.$token,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        $response     = curl_exec($ch2);
        curl_close($ch2);

        //echo "Authorization: ". $response;

        $result = json_decode($response); 
        
        return $result;

}

public function storeResults(Request $requests){
        
    $request=file_get_contents('php://input');
    
    //process the received content into an array
    $array = json_decode($request, true);
    $transactiontype= $array['TransactionType']; 
    $transid=$array['TransID']; 
    $transtime=$array['TransTime']; 
    $transamount=$array['TransAmount']; 
    $businessshortcode=$array['BusinessShortCode']; 
    $billrefno=$array['BillRefNumber']; 
    $invoiceno=$array['InvoiceNumber']; 
    $msisdn=$array['MSISDN']; 
    $orgaccountbalance=$array['OrgAccountBalance']; 
    $firstname=$array['FirstName']; 
    $middlename=$array['MiddleName']; 
    $lastname=$array['LastName'];
    
   // Log::info('RECEIVED TRANSAMOUNT: '.$transamount);
    
    
                        
echo'{"ResultCode":0,"ResultDesc":"Confirmation received successfully"}';
    
}


}