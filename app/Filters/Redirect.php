<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Redirect implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
    
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->has('isLoggedIn')){
            return redirect()->to('/contact');
        }
    }
}