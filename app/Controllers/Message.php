<?php

namespace App\Controllers;

class Message extends BaseController
{
    public function modifier($idMessage): string
    {
        return '<h1> id employe : '.$idMessage.'</h1>';
    }

    public function supprimer($idMessage): string
    {
        return '<h1> id employe : '.$idMessage.'</h1>';
    }
}
