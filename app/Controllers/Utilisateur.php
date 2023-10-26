<?php

namespace App\Controllers;
use App\Models\UtilisateurModel;


class Utilisateur extends BaseController
{
    private $utilisateurModel;
    public function __construct()
    {
        $this->utilisateurModel = new UtilisateurModel();
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
            $UtilisateurModel = new UtilisateurModel();
            $UtilisateurModel->insert($inputs);

            $res = ['message' => 'ok'];
            return json_encode($res);
        }else {
            return json_encode(['error' => $validateUser['error']]);
        }
    }

    public function seConnecterForm() {
        return view('seConnecter');
    }

    public function seConnecter() {
        $utilisateurModel = new UtilisateurModel();
        $datas = [
            'email' => $this -> request -> getPost('email'),
            'pass' => $this -> request -> getPost('pass'),
        ];

        $user = $utilisateurModel -> where(['emailUtilisateur' => $datas['email'], 'mdpUtilisateur' => $datas['pass']]) -> first();
        if($user){
            session() -> setFlashdata(['success' => 'connecté avec succès']);
            session() -> set(['isConnected' => $user]);
            return redirect() ->back();
        } else {
            session() -> setFlashdata(['error' => 'connexion échoué: mot de passe ou email incorrect']);
            return redirect() ->back();
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
