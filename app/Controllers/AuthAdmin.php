<?php

namespace App\Controllers;
use App\Libraries\Hash;
use App\Models\AdminModel;
use CodeIgniter\I18n\Time;

class AuthAdmin extends BaseController
{
    public function AdminLogin()
    {
        if(!isset($_POST['login_admin'])){
            return view('admin/auth/login');
        }
      //IF IS SET TO LOGIN
      $rules = [

        'Email'      =>  'required|valid_email',
        'password'   =>  'required|min_length[4]|max_length[20]|validateAdmin[Email,password]',
  
      ];
      $errors = [
          'password' => [
          'validateAdmin' => 'Email or password incorrect'
        ]
  
      ];
      if (!$this->validate($rules, $errors)) {
        $data['validation'] = $this->validator;
        echo view('admin/auth/login', $data);
      } else {
        //LOGIN USER
        $model = new AdminModel();
        $admin = $model->where('Email', $this->request->getVar('Email'))
          ->first();
  
        $this->setUserSession($admin);
        return redirect()->to('admin');
      }

    }

    private function SetUserSession($admin)
    {
      $data = [
        'id'                      =>  $admin['id'],
        'fname'                   =>  $admin['FirstName'],
        'email'                   =>  $admin['Email'],
        'regnum'                  =>  $admin['AdminId'],
        'admin_is_logged_in'      =>  true,
   ];
  
      session()->set($data);
      return true;
    }

    
    public function admin_logout(){
         //session_destroy();
    session()->destroy();
    return redirect()->to('adminlogin');
    }
}
