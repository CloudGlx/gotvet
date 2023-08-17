<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class StudentAuthCheck implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(!session()->get('student_is_logged_in')){
        return redirect()->to('stud_login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}