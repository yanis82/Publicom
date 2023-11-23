<?php

namespace App\Filters;

use App\Controllers\Utilisateur;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class isAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!Utilisateur::isAdmin()){
            session() -> setFlashdata(['error' => 'Connectez vous en tant qu\'administrateur']);
            return redirect() -> to(base_url('/se-connecter'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}