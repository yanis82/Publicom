<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes -> get('/', 'Home::index', ['filter' => 'isConnected']); // authentification formulaire

$routes -> get('/logout', 'Utilisateur::logout', ['filter' => 'isConnected']); // Logout
// $routes -> post('/', 'Utilisateur::auth', ['filter' => 'isConnected']); // authentification
// Ce sera juste des vues avec un formulaire qui ensuite enverront vers les vrais pages qui feront les requetes \\
$routes -> get('/creer-utilisateur', 'Utilisateur::creerForm'); //FORMULAIRE CREER UTILISATEUR
$routes -> post('/creer-utilisateur', 'Utilisateur::creer'); //FORMULAIRE CREER UTILISATEUR

$routes -> get('/se-connecter', 'Utilisateur::seConnecterForm'); //FORMULAIRE CONNECTION UTILISATEUR
$routes -> post('/se-connecter', 'Utilisateur::seConnecter'); //FORMULAIRE CONNECTION UTILISATEUR


$routes -> get('/creer-message', 'Message::creerForm', ['filter' => 'isConnected']); //FORMULAIRE CREER UTILISATEUR
$routes -> post('/creer-message', 'Message::creer', ['filter' => 'isConnected']); //FORMULAIRE CREER UTILISATEUR

$routes -> get('/liste-messages', 'Message::lister', ['filter' => 'isConnected']); //liste des messages
$routes -> get('/visualiser-messages-actifs', 'Message::visualiserActifs', ['filter' => 'isConnected']);  // visualiser les messages actifs

$routes -> get('/modifier-message/(:num)', 'Message::modifierForm/$1', ['filter' => 'isConnected']); // modifier un message
$routes -> post('/modifier-message', 'Message::modifier', ['filter' => 'isConnected']); // modifier un message

$routes -> post('/supprimer-message', 'Message::supprimer', ['filter' => 'isConnected']); // supprimer message

$routes -> get('/historique-message/(:num)', 'Historique::lister/$1', ['filter' => 'isConnected']); //historique d'un message
$routes -> get('/test-dev', 'Utilisateur::testDev', ['filter' => 'isConnected']); //historique d'un message



