<?php

/**
 * ConnectionController.php
 * @Auteur : Christophe Dufour
 * 
 * 
 */

namespace App\Backend\Controllers\Connection;

use Blackfox\BackController;
use Blackfox\HTTPRequest;

class ConnectionController extends BackController
{
    /**
	 * Méthodes
	 */

    /**
     * Affiche la page de connexion
     * 
     * @param HTTPRequest $request
     * Objet HTTPRequest représentant une requête html
     * @return void
	 * Ne retourne aucune valeur
     */
    public function executeIndex(HTTPRequest $request): void
    {
        $config = $this->app->config()['backend'];
        
        if($request->formIsSubmit()) {
            $username = $request->getFromPost("user");
            $password = $request->getFromPost("password");

            $datas = array(
                'username' => $username,
                'password' => $password
            );

            if($config['admin'] == $username && password_verify($password, $config['password'])) {
                $this->app->user()->setAuthenticated(true);
                $this->app->httpResponse()->redirect($this->app->link()['adminArea']);
            }
            else {
                $this->view->setData(["error" => true]);
            }

            $this->view->setData($datas);
        }
    }

}