<?php

namespace App\Controllers;

use App\Models\MessageModel;

class Historique extends BaseController
{
    private $messageModel;

    public function __construct()
    {
        $this->messageModel = new MessageModel();
    }
    public function lister($idHistoriquemessage): string
    {
        $historiquemessage = $this->messageModel->where(['idMessage' => $idHistoriquemessage])->first();
        if (!$historiquemessage) {
            Utilitaires::error('Ce message n\'existe pas');
            return $this->lister();
        }
        return view('message/lister', ['historiquemessage' => $historiquemessage]);
    }
}
