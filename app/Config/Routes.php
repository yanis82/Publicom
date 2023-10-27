<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes -> get('/', 'Utilisateur::authForm'); // authentification formulaire
$routes -> post('/', 'Utilisateur::auth'); // authentification
// Ce sera juste des vues avec un formulaire qui ensuite enverront vers les vrais pages qui feront les requetes \\
$routes -> get('/creer-utilisateur', 'Utilisateur::creerForm'); //FORMULAIRE CREER UTILISATEUR
$routes -> post('/creer-utilisateur', 'Utilisateur::creer'); //FORMULAIRE CREER UTILISATEUR

$routes -> get('/creer-message', 'Message::creerForm'); //FORMULAIRE CREER UTILISATEUR
$routes -> post('/creer-message', 'Message::creer'); //FORMULAIRE CREER UTILISATEUR

$routes -> get('/liste-messages', 'Message::lister'); //liste des messages
$routes -> get('/visualiser-messages-actifs', 'Message::visualiserActifs');  // visualiser les messages actifs

$routes -> get('/modifier-message/(:num)', 'Message::modifierForm/$1'); // modifier un message
$routes -> post('/modifier-message', 'Message::modifier'); // modifier un message

$routes -> post('/supprimer-message', 'Message::supprimer'); // supprimer message

$routes -> get('/historique-message/(:num)', 'Historique::lister/$1'); //historique d'un message



