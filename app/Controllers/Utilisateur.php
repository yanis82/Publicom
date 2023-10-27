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
        $mdp = $this->request->getPost('pass');
        $hashMdp = password_hash($mdp, PASSWORD_BCRYPT);
        $inputs = [
            'nomUtilisateur' => $this->request->getPost('nom'),
            'prenomUtilisateur' => $this->request->getPost('prenom'),
            'emailUtilisateur' => strtolower($this->request->getPost('email')),
            'mdpUtilisateur' => $hashMdp,
            'verifPass' => $this->request->getPost('verifPass'),
        ];
        $validateUser = $this->validateUser($inputs);
        array_push($inputs, ['isADmin' => 0]);
        if($validateUser[0]){
            $UtilisateurModel = new UtilisateurModel();
            $isAlreadyExistant = $UtilisateurModel -> where(['EMAILUTILISATEUR' => $inputs['emailUtilisateur']]) -> first();
            if($isAlreadyExistant) {
                return Utilitaires::error('Utilisateur déjà existant');
            }
            $UtilisateurModel->insert($inputs);

            $res = ['message' => 'ok'];
            return Utilitaires::success('Utilisateur cree avec succes');
        }else {

            return Utilitaires::error('Erreur lors de la creation de l\'utilisateur');
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

        $user = $utilisateurModel -> where(['emailUtilisateur' => $datas['email']]) -> first();

        if(!$user) return Utilitaires::error('email ne correspond à aucun utilisateur');

        $passwordOk = password_verify($datas['pass'], $user['MDPUTILISATEUR']);
        if($passwordOk){
            session() -> set(['isConnected' => $user]);
            return Utilitaires::success('connecté avec succès', 'liste-messages');
        } else {
            return Utilitaires::error('connexion échoué: mot de passe ou email incorrect');
        }
    }

    public function logout() {
        session()->remove('isConnected');
        return Utilitaires::success('Deconnecté avec succès', 'se-connecter');
    }

    public function testDev() {
        return json_encode([
            'session() -> has()' => session() -> has('isConnected'),
            'session() -> get()' => session() -> get(),
        ]);
    }

    static function isConnected(): bool {
        return session() -> has('isConnected');
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
