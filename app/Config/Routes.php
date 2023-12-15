<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/core', 'Core::index');
$routes->get('/dbrestoran', 'MenuController::index');
$routes->get('/dbrestoranAPI', 'DbrestoranAPI::index');

