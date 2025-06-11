<?php

/**
 * FrontendApplication.php
 * @Auteur: Christophe Dufour
 * 
 * Application orientée utilisateur
 */

namespace App\Frontend;

use Blackfox\Application;

class FrontendApplication extends Application
{
	/**
	 * Lance l'application
	 * 
	 * @return void
	 */
	public function run(): void
	{
		$controller = $this->getController();
		$controller->execute();

		$this->httpResponse->setView($controller->view());
		$this->httpResponse->render();
	}
	
}
