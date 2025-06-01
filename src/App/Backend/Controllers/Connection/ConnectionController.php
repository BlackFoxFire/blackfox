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
use Blackfox\Config\Config;
use Blackfox\Config\Link;
use Blackfox\Config\Enums\AreaConfig;


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
        $config = Config::get(AreaConfig::Backend);
        
        if($request->formIsSubmit()) {
            $username = $request->getFromPost("user");
            $password = $request->getFromPost("password");

            $datas = array(
                'username' => $username,
                'password' => $password
            );

            if($config['admin'] == $username && password_verify($password, $config['password'])) {
                $this->app->user()->setAuthenticated(true);
                $this->app->httpResponse()->redirect(Link::get('adminArea'));
            }
            else {
                $this->view->setData(["error" => true]);
            }

            $this->view->setData($datas);
        }
    }

}