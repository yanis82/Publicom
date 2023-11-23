<?php

namespace App\Controllers;

use App\Models\UtilisateurModel;
use Stringable;

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
        $verifMdp = $this->request->getPost('verifPass');
        if ($mdp === $verifMdp) {
            $UtilisateurModel = new UtilisateurModel();
            $hashMdp = password_hash($mdp, PASSWORD_BCRYPT);
            $inputs = [
                'nomUtilisateur' => $this->request->getPost('nom'),
                'prenomUtilisateur' => $this->request->getPost('prenom'),
                'emailUtilisateur' => strtolower($this->request->getPost('email')),
                'mdpUtilisateur' => $hashMdp,
                'verifPass' => $this->request->getPost('verifPass'),
            ];

            $isAlreadyEmail = count($UtilisateurModel->where(['emailUtilisateur' => $inputs['emailUtilisateur']])->find()) >= 1;
            if (!$isAlreadyEmail) {
                $validateUser = $this->validateUser($inputs);
                array_push($inputs, ['isADmin' => 0]);
                if ($validateUser[0]) {
                    $isAlreadyExistant = $UtilisateurModel->where(['EMAILUTILISATEUR' => $inputs['emailUtilisateur']])->first();
                    if ($isAlreadyExistant) {
                        return Utilitaires::error('Utilisateur déjà existant');
                    }

                    $UtilisateurModel->insert($inputs);
                    return Utilitaires::success('Utilisateur cree avec succes');
                } else {
                    return Utilitaires::error('Erreur, tous les champs doivent etre remplis');
                }
            }
            return Utilitaires::error('Erreur, Email déjà utilisé ');
        } else {
            return Utilitaires::error('Erreur, les mot de passes ne correspondent ');
        }
    }

    public function seConnecterForm()
    {
        return view('seConnecter');
    }

    public function seConnecter()
    {
        $utilisateurModel = new UtilisateurModel();
        $datas = [
            'email' => $this->request->getPost('email'),
            'pass' => $this->request->getPost('pass'),
        ];

        $user = $utilisateurModel->where(['emailUtilisateur' => $datas['email']])->first();

        if (!$user)
            return Utilitaires::error('email ne correspond à aucun utilisateur');

        $passwordOk = password_verify($datas['pass'], $user['MDPUTILISATEUR']);
        if ($passwordOk) {
            session()->set(['isConnected' => $user]);
            return Utilitaires::success('connecté avec succès', 'liste-messages');
        } else {
            return Utilitaires::error('connexion échoué: mot de passe ou email incorrect');
        }
    }

    public function logout()
    {
        session()->remove('isConnected');
        return Utilitaires::success('Deconnecté avec succès', 'se-connecter');
    }

    public function testDev()
    {
        return json_encode([
            'session() -> has()' => session()->has('isConnected'),
            'session() -> get()' => session()->get(),
        ]);
    }

    static function isConnected(): bool
    {
        return session()->has('isConnected');
    }

    static function isAdmin(): bool
    {
        if (Utilisateur::isConnected()) {
            return (bool)session()->get('isConnected')['ISADMIN'];
        } else
            return getenv('CI_ENVIRONMENT') === "development";
    }

    // si un champ est vide, renvoi un tableau dont ke preimer element est vide avec 'error' => erreur
    //sinon renvoin [true]
    private function validateUser($inputs)
    {

        foreach ($inputs as $key => $value) {
            if (empty($value)) {
                return [false, 'error' => "$key est vide"];
            }
        }
        return [true];
    }



}
