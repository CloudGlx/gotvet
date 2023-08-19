<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\ClientsModel;
use App\Models\AdminModel;
use App\Models\EducationModel;
use App\Models\StudentsModel;
use CodeIgniter\I18n\Time;

class AuthUser extends BaseController

{

  public function __construct()
  {
    helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url', 'Webhook_helper', 'Functions_helper']);
  }

  public function StudentLoginView()
  {
    return view('students/auth/login');
  }
  //LOGIN 
  public function StudentLogin()
  {
    $rules = [

      'gotvetid'      =>  'required',
      'password'   =>  'required|min_length[4]|max_length[30]|validateStudent[gotvetid,password]',

    ];
    $errors = [
      'password' => [
        'validateStudent' => 'GOTVET ID Or Password Incorrect'
      ]

    ];

    if (!$this->validate($rules, $errors)) {
      $data['validation'] = $this->validator;
      echo view('student/auth/login', $data);
    } else {
      //LOGIN USER
      $model = new StudentsModel();
      $student = $model->where('GotvetId', $this->request->getVar('gotvetid'))
        ->first();

      $this->setUserSession($student);
      return redirect()->to('stud_dashboard');
    }
  }

  private function SetUserSession($student)
  {
    $data = [
      'id'                      =>  $student['id'],
      'FirstName'               =>  $student['FirstName'],
      'SecondName'              =>  $student['LastName'],
      'Email'                   =>  $student['Email'],
      'GotvetId'                =>  $student['GotvetId'],
      'isvarified'              =>  $student['isvarified'],
      'Phone'                   =>  $student['Phone'],
      'isprofilecompleted'      =>  $student['isprofilecompleted'],
      'UpdateLevel'             =>  $student['UpdateLevel'],
      'student_is_logged_in'     =>  true,

    ];

    session()->set($data);
    return true;
  }


  //REGISTER USER ACTION
  public function StudentRegister()
  {
    $data = [];

    $rules = [
      'First_Name'         =>  'required|min_length[3]',
      'Second_Name'        =>  'required|min_length[3]',

      'Phone'              =>  'required|is_unique[students.Phone]|max_length[10]',
      'Password'           =>  'required|min_length[4]|max_length[20]',
      'Confirm_Password'   =>  'required|matches[Password]'

    ];
    if (!$this->validate($rules)) {
      $data['validation'] = $this->validator;
      echo view('student/auth/register', $data);
    } else {

      //INSERT DATA TO DATABASE
      //GET USER DATA
      $fname = $this->request->getPost('First_Name');
      $sname = $this->request->getPost('Second_Name');
      $email = $this->request->getPost('Email');
      $phone= $this->request->getPost('Phone');
      $pass = $this->request->getPost('Confirm_Password');
      $date = new Time('now', 'Africa/Nairobi', 'en_US');
      $updatelevel=0;

     // Convert the first name to uppercase
$fname = strtoupper($fname);
// Convert the last name to uppercase
$sname = strtoupper($sname);

//$phone=modifyPhoneNumber($phone);

      //HASH USER PASSWORD
      $passhash = new Hash();
      $newpassword = $passhash->encrypt($pass);

      //CLIENT ID

       $gotvetid = GotvetId();
       $profile=0;
      //INSER DATA
      $newdata = [
        'FirstName'    =>  $fname,
        'SecondName'   =>  $sname,
        'Phone'         => $phone,
        'Email'        =>  $email,
        'Password'     =>  $newpassword,
        'GotvetId'     =>  $gotvetid,
        'UpdateLevel'  =>  $updatelevel,
        'isprofilecompleted' =>$profile,
        'DateCreated' => $date
       ];

       $edudata=[
        'FirstName' =>$fname,
        'GotvetId'  =>$gotvetid
       ];

       $apidata=[
        'FirstName'    =>$fname,
        'Phone'        =>$phone,
        'Email'        =>$email,
        'GotvetId'     =>$gotvetid,
       ];
//insert dataa to student
      $StudentModel = new StudentsModel();
      $query = $StudentModel->insert($newdata);
//inset data to education
$edu=new EducationModel();
$query=$edu->insert($edudata);

     // MailAcctCreate($fname, $email);
     $url=base_url('reg/Api');

     $response = sendPayloadToEndpoint($url,$apidata);
    
      // Request successful
      return redirect()->to('stud_login')->with('success', 'Account successfully created. SMS sent  to your provided phone number with your Gotvet ID.');
    
     // return redirect()->to('stud_login')->with('success', 'Account Created successfully');
}
    
  }
  //REGISTER USER VIEW
  public function userRegisterView()
  {

    return view('student/auth/register');
  }

  //forgot pass USER VIEW
  public function forgotPassView()
  {

    return view('client/forgotpass');
  }

  public function student_logout()
  {
    //session_destroy();
    session()->destroy();
    return redirect()->to('stud_login');
  }
}
