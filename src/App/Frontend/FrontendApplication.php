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

	protected string $nameSpace;

	/**
	 * Constructeur
	 * 
	 * @param string $rootDir
	 * Dossier racine de l'application
	 */
	public function __construct(string $rootDir)
	{
		$this->name = "Frontend";
		parent::__construct($rootDir, __DIR__, __NAMESPACE__);
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
