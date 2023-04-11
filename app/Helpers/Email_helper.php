<?php

use App\Controllers\BaseController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PhpParser\Node\Expr\FuncCall;

require "vendor/autoload.php";


//NEW ORDER MAIL TO ADMIN
function SendEmailToAdmin($Subject)
{
    /**EMAIL CONST START */
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Subject = "Congratulations! You have successfully placed your order";
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host         = EMAILHOST; //smtp.google.com
    $mail->SMTPAuth     = true;
    $mail->Username     = SERVEREMAIL;
    $mail->Password     = EMAILPASS;
    $mail->SMTPSecure   = 'tls';
    $mail->Port         = 587;
    $mail->isHTML(true);
    /**EMAIL CONST END */



    $body = '
  <!Doctype hmtl>
  <html lang="en">

  <body>
      <div class="wrapper">
      <img src="https://toplineessay.com/images/email.png" alt="logo">
  <p> Hi Admin<p>

          <p>

          You have a new order placement form <a href="www.toplineessay.com">Topline Essays</a>. <br><br> Please login to admin dashboard to view more -->

              <span> <a href="https//toplineessys.com/admin">Login  </a> <span>
          </p>

      </div>
  </body>

  </html>

  ';

    $mail->Subject = 'New Order: ' . $Subject;
    $mail->setFrom(SERVEREMAIL, 'CLOD_G');
    $mail->addAddress(ADMINEMAIL, 'CLOUD_G');
    $mail->isHTML(true);
    $mail->send();
}
/******CLINTS EMAILS FUNCTIONS**** */

//when client place a new order
function MailOrderPlace($fname, $email)
{
    /**EMAIL CONST START */
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Subject = "Congratulations! You have successfully placed your order";
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host         = EMAILHOST; //smtp.google.com
    $mail->SMTPAuth     = true;
    $mail->Username     = SERVEREMAIL;
    $mail->Password     = EMAILPASS;
    $mail->SMTPSecure   = 'tls';
    $mail->Port         = 587;
    $mail->isHTML(true);
    /**EMAIL CONST END */

    $EmailToName = "Astute Writers";
    $body = '
<!Doctype hmtl>
<html lang="en">

<body>
    <div class="wrapper">
    <img src="https://www.toplineessay.com/images/email.png">
<p> Hi ' . $fname . '<p>

        <p>

        We have successfully received your order placed on <a href="www.toplineessay.com">Topline Essays</a>. <br><br> Please login to your dashboard and upload all necessarily documents -->

            <span> <a href="https://toplineessay.com/users">Login  </a> <span>
        </p>

    </div>
</body>
</html>
';

    $mail->setFrom(SERVEREMAIL, 'Astute_Writers');
    $mail->addAddress($email, $EmailToName);
    $mail->msgHTML($body);
    $mail->send();
}


//WHEN CLIENT CREATES ACCOUT
function MailAcctCreate($fname, $email)
{
    /**EMAIL CONST START */
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Subject = "Congratulations! You have successfully Created an account with Astute Writers";
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host         = EMAILHOST; //smtp.google.com
    $mail->SMTPAuth     = true;
    $mail->Username     = SERVEREMAIL;
    $mail->Password     = EMAILPASS;
    $mail->SMTPSecure   = 'tls';
    $mail->Port         = 587;
    $mail->isHTML(true);
    /**EMAIL CONST END */

    $EmailToName = "Astute Writers";
    $body = '
  <!Doctype hmtl>
  <html lang="en">

  <body>
      <div class="wrapper">
      <img src="https://astutewriters.net/wp-content/uploads/2022/04/diploma-parchment-graduation-152024-50x45.png">
  <p> Hi ' . $fname . '<p>

          <p>

          Your account was successfully created on <a href="www.toplineessay.com">Astute Writers</a>. <br><br> Please login to your dashboard for more -->

              <span> <a href="https://toplineessay.com/users">Login  </a> <span>
          </p>

      </div>
  </body>

  </html>

  ';

    $mail->setFrom(SERVEREMAIL, 'Astute_Writers');
    $mail->addAddress($email, $EmailToName);
    $mail->msgHTML($body);
    $mail->send();
}


//Password reset
function MailResetPass($email)
{
    /**EMAIL CONST START */
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Subject = "";
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host         = EMAILHOST; //smtp.google.com
    $mail->SMTPAuth     = true;
    $mail->Username     = SERVEREMAIL;
    $mail->Password     = EMAILPASS;
    $mail->SMTPSecure   = 'tls';
    $mail->Port         = 587;
    $mail->isHTML(true);
    /**EMAIL CONST END */

    $EmailToName = "Astute Writers";
}
//when order is completed
function MailOrderComplete()
{
    /**EMAIL CONST START */
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Subject = "";
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host         = EMAILHOST; //smtp.google.com
    $mail->SMTPAuth     = true;
    $mail->Username     = SERVEREMAIL;
    $mail->Password     = EMAILPASS;
    $mail->SMTPSecure   = 'tls';
    $mail->Port         = 587;
    $mail->isHTML(true);
    /**EMAIL CONST END */

    $EmailToName = "Astute Writers";
}


function SupportMail()
{
    /**EMAIL CONST START */
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Subject = "";
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host         = EMAILHOST; //smtp.google.com
    $mail->SMTPAuth     = true;
    $mail->Username     = SERVEREMAIL;
    $mail->Password     = EMAILPASS;
    $mail->SMTPSecure   = 'tls';
    $mail->Port         = 587;
    $mail->isHTML(true);
    /**EMAIL CONST END */

    $EmailToName = "Astute Writers";
}
