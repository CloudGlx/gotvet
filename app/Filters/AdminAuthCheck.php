<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminAuthCheck implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(!session()->get('admin_is_logged_in')){
        return redirect()->to('adminlogin');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}