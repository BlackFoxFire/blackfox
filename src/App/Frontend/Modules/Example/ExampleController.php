<?php

/*
*
* ExampleController.php
*
*/

namespace App\Frontend\Modules\Example;

use Blackfox\BackController;
use Blackfox\HTTPRequest;

class ExampleController extends BackController
{

    /*
		Les méthodes
		------------
	*/

    protected function executeIndex(HTTPRequest $request): void
    {
        $this->view->setData('hello', "Hello World !");
    }

}
