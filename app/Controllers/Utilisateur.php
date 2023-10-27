<?php

namespace App\Controllers;

use App\Models\Utilisateur as ModelsUtilisateur;

class Utilisateur extends BaseController
{
    private $utilisateurModel;
    public function __construct()
    {
        $this->utilisateurModel = new ModelsUtilisateur();
    }
    public function auth(): string
    {
        return 'auth';
    }
    public function creerForm(): string
    {
        return view('creerUtilisateur');
    }
    public function creer()
    {
        $inputs = [
            "nomUtilisateur" => $this->request->getPost('nom'),
            "prenomUtilisateur" => $this->request->getPost('prenom'),
            "emailUtilisateur" => $this->request->getPost('email'),
            "mdpUtilisateur" => $this->request->getPost('pass'),
            "verifPass" => $this->request->getPost('verifPass'),
        ];
        $validateUser = $this->validateUser($inputs);
        array_push($inputs, ['isADmin' => 0]);
        if($validateUser[0]){
            $UtilisateurModel = new ModelsUtilisateur();
            $UtilisateurModel->insert($inputs);

            $res = ['message' => 'ok'];
            return json_encode($res);
        }else {
            return json_encode(['error' => $validateUser['error']]);
        }
    }

    private function validateUser($inputs) 
    {
        
        foreach ($inputs as $key => $value) {
            if(empty($value)){
                return [false, 'error' => "$key est vide"];
            }
        }
        return [true];   
    }
}
