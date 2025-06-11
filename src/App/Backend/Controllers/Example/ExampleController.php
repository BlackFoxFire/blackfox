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
use Blackfox\Config\Link;

class ExampleController extends BackController
{
    /**
     * Affiche la page d'exemple
     * 
     * @param HTTPRequest $request
     * 
     * @return void
     */
    protected function executeIndex(HTTPRequest $request): void
    {
        $this->view->setData('hello', "Bienvenue dans la zone d'administration");
    }

    /**
     * Déconnexion de la zone d'administration
     * 
     * @param HTTPRequest $request
     * 
     * @return void
     */
    protected function executeLogout(HTTPRequest $request): void
    {
        $this->app()->user()->destroy();
        $this->app()->httpResponse()->redirect(Link::get('index'));
    }

}
