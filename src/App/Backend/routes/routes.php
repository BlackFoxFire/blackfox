<?php

/**
 * Routes.php
 * @Auteur: Christophe Dufour
 * 
 * Gére les différentes route de l'application
 */

namespace App\Backend\Routes;

use Blackfox\Router\Router;

Router::set("/admin/", "Example", "index", "un, deux");