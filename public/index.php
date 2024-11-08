<?php

/**
 * index.php
 * @Auteur: Christophe Dufour
 * 
 * Controleur frontal
 */

 // Namespace de l'application
$appName = "App";

 // Dossier racine
$rootDir = dirname(__DIR__);

// Autoload de Composer
require $rootDir . str_replace('/', DIRECTORY_SEPARATOR, "/vendor/autoload.php");

// Gestion des erreurs
error_reporting(E_ALL);         // Toutes les erreurs sont rapportées
ini_set("display_errors", 1);   // Les erreurs sont affichées

// Déduction du dossier de l'application via le fichier autoload_psr4 de composer
$appDir = (require $rootDir . str_replace('/', DIRECTORY_SEPARATOR, "/vendor/composer/autoload_psr4.php"))[$appName . '\\'][0] . DIRECTORY_SEPARATOR;
$appDir = str_replace('/', DIRECTORY_SEPARATOR, $appDir);

// Si l'application n'est pas valide, on va charger l'application par défaut qui se chargera de générer une erreur 404
if(!isset($_GET['app']) || !file_exists($appDir . "App" . DIRECTORY_SEPARATOR . $_GET['app'])) {
    $_GET['app'] = "Frontend";
}

// Il ne nous suffit plus qu'à déduire le nom de la classe et de l'instancier
$appClass = $appName . "\\" . $_GET['app'] . '\\' . $_GET['app'] . "Application";

$app = new $appClass($rootDir, $appDir, $appName);
$app->run();
