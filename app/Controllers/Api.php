<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use PhpParser\Node\Expr\FuncCall;

class Api extends BaseController
{
  public function __construct()
  {
    helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url', 'Webhook_helper']);
  }

  public function registerApi()
  {
    //succesull response
    $response = 0;

    //error response
    $error = 1;


    //get payload data
    $content = file_get_contents('php://input'); //
    $res = json_decode($content, true);

    $FirstName = $res['FirstName'];
    $Email = $res['Email'];
    $studentPhone = $res['Phone'];
   

    $GotvetId = $res['GotvetId'];
    $link = "http://gotvet.gtntv.co.ke/studen_login";
    $support = ADMIN1PHONE;
    //sms body
    function SmsBody($FirstName, $GotvetId, $link, $support)
    {
      $MsgBody = "Hi " . $FirstName . " Congratulations on successfully creating your GOTVET account" . "\n" .
        "Your Gotvet ID is: " . $GotvetId . "" . "\n" .
        "Please log in to your dashboard and complete the registration process." . "\n" .
        "Link: " . $link . "" . "\n" .
        "Need help? " . $support . "";

      return $MsgBody;
    }
    $MsgBody = SmsBody($FirstName, $GotvetId, $link, $support);
    //SEND SMS
    $data = sendsms($studentPhone, $MsgBody);
    $res = json_decode($data, true);
    $ReCode = $res['responses'][0]['response-code'];
    //if sms sent
    if ($ReCode == 200) {

    //  echo $response;
    } else {
      //send Email
     // echo $error;
    }
  }

  public function LoginApi(){
      //get payload data
      $content = file_get_contents('php://input'); //
      $res = json_decode($content, true);
  }

  public function CheckPaymentsApi(){
    //This checks if the students has paid
    
       //get payload data
       $content = file_get_contents('php://input'); //
       $res = json_decode($content, true);

  }
}
