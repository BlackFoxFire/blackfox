<?php

/**
 * ExampleController.php
 * @Auteur: Christophe Dufour
 * 
 * Exemple d'application
 */

namespace App\Frontend\Controllers\Example;

use Blackfox\BackController;
use Blackfox\HTTPRequest;

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
        $this->view->setData('hello', "Hello World !");
    }

}
