<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

class Client extends BaseController
{
    public function dashboard()
    {
        return view('client/dashboard');
    }
}
