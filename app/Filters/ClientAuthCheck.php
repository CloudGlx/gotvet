<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class ClientAuthCheck implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(!session()->get('client_is_logged_in')){
        return redirect()->to('userlogin');
        }
    }




    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}