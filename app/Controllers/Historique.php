<?php

namespace App\Controllers;

class Historique extends BaseController
{
    public function lister($idMessage): string
    {
        return '<h1> id employe : '.$idMessage.'</h1>';
    }
}
