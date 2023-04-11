<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PhpParser\Node\Expr\FuncCall;

//require 'vendor/autoload.php';
class Email extends BaseController
{
    public function __construct() {
		helper(['Code_helper','Email_helper']);
    }

    public function sendmail_view(){
    	    	
      return view('client/orders/support_mails');
    }
 
}
