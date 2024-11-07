<?php

/*
*
* FrontendApplication.php
* Application orientée utilisateur.
*
*/

namespace App\Frontend;

use Blackfox\Application;

class FrontendApplication extends Application
{

	/**
	 * Constructeur
	 * 
	 */
	public function __construct(string $rootDir, string $appDir, string $appName)
	{
		$this->name = "Frontend";
		parent::__construct($rootDir, $appDir, $appName);
	}

	/**
	 * Méthodes
	 */
	
	/**
	 * Lance l'application
	 * 
	 * @return void
	 * Ne retourne aucune valeur
	 */
	public function run(): void
	{
		$controller = $this->getController();
		$controller->execute();

		$this->httpResponse->setView($controller->view());
		$this->httpResponse->render();
	}
}
