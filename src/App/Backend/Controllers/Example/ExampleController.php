<?php

/**
 * ExampleController.php
 * @Auteur: Christophe Dufour
 * 
 * Exemple d'application
 */

namespace App\Backend\Controllers\Example;

use Blackfox\BackController;
use Blackfox\HTTPRequest;

class ExampleController extends BackController
{
    /**
	 * Méthodes
	 */

    /**
     * Affiche la page d'exemple
     * 
     * @param HTTPRequest $request
     * Objet HTTPRequest représentant une requête html
     * @return void
	 * Ne retourne aucune valeur
     */
    protected function executeIndex(HTTPRequest $request): void
    {
        $this->view->setData('hello', "Bienvenue dans la zone d'administration");
    }

}
