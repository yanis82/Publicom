<?php

namespace App\Filters;

use App\Controllers\Utilisateur;
use App\Controllers\Utilitaires;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class isAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!Utilisateur::isAdmin()){
            return Utilitaires::error(('Connectez vous en tant qu\'administrateur'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}