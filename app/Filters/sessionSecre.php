<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class sessionSecre implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(!session('rol')=='Secretaria'){
            return redirect()->to(base_url('/IniciarSesion'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        if(!session('rol')=='Secretaria'){
            return redirect()->to(base_url('/IniciarSesion'));
        }
    }
}