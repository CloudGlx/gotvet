<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\ClientsModel;
use App\Models\AdminModel;
use App\Models\StudentsModel;
use CodeIgniter\I18n\Time;

class AuthUser extends BaseController

{

  public function __construct()
  {
    helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url']);
  }

  public function StudentLoginView()
  {
    return view('students/auth/login');
  }
  //LOGIN 
  public function userLogin()
  {
    $rules = [

      'email'      =>  'required|valid_email',
      'password'   =>  'required|min_length[4]|max_length[20]|validateUser[email,password]',

    ];
    $errors = [
      'password' => [
        'validateUser' => 'Email or password incorrect'
      ]

    ];

    if (!$this->validate($rules, $errors)) {
      $data['validation'] = $this->validator;
      echo view('students/auth/login', $data);
    } else {
      //LOGIN USER
      $model = new StudentsModel();
      $client = $model->where('Email', $this->request->getVar('email'))
        ->first();

      $this->setUserSession($client);
      return redirect()->to('client');
    }
  }

  private function SetUserSession($client)
  {
    $data = [
      'id'                      =>  $client['id'],
      'fname'                   =>  $client['FirstName'],
      'lname'                   =>  $client['LastName'],
      'email'                   =>  $client['Email'],
      'regnum'                  =>  $client['StudentID'],
      'client_is_logged_in'     =>  true,

    ];

    session()->set($data);
    return true;
  }


  //REGISTER USER ACTION
  public function userRegister()
  {
    $data = [];

    $rules = [
      'First_Name'         =>  'required|min_length[3]',
      'Last_Name'          =>  'required|min_length[3]',
      'Email'              =>  'required|valid_email|is_unique[clients.email]',
      'Password'           =>  'required|min_length[4]|max_length[20]',
      'Confirm_Password'   =>  'required|matches[Password]'

    ];
    if (!$this->validate($rules)) {
      $data['validation'] = $this->validator;
      echo view('students/auth/register', $data);
    } else {

      //INSERT DATA TO DATABASE
      //GET USER DATA
      $fname = $this->request->getPost('First_Name');
      $lname = $this->request->getPost('Last_Name');
      $email = $this->request->getPost('Email');
      $pass = $this->request->getPost('Confirm_Password');
      $date = new Time('now', 'Africa/Nairobi', 'en_US');


      //HASH USER PASSWORD
      $passhash = new Hash();
      $newpassword = $passhash->encrypt($pass);


      //CLIENT ID

      $id = randomNum();

      //INSER DATA
      $newdata = [
        'fname'        =>  $fname,
        'lname'        =>  $lname,
        'email'        =>  $email,
        'password'     =>  $newpassword,
        'registerno'   =>  $id,
        'date_created' => $date


      ];

      $ClientModel = new ClientsModel();
      $query = $ClientModel->insert($newdata);
      MailAcctCreate($fname, $email);
      return redirect()->to('userlogin')->with('success', 'Account Created successfully');
    }
  }





  //REGISTER USER VIEW
  public function userRegisterView()
  {

    return view('students/auth/register');
  }

  //forgot pass USER VIEW
  public function forgotPassView()
  {

    return view('client/forgotpass');
  }


  public function userLogout()
  {
    //session_destroy();
    session()->destroy();
    return redirect()->to('userlogin');
  }
}
