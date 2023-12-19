<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/core', 'Core::index');
$routes->get('/dbrestoran', 'MenuController::index');
$routes->get('/dbrestoranAPI', 'DbrestoranAPI::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
// $routes->post('/login_action', 'LoginController::login_action');
$routes->get('/rekomendasi', 'RecommendAPI::index');
$routes->post('/login_action', 'LoginController::login_action');



$routes->get('/orderAPI', 'OrderAPI::index');
$routes->get('/report','ReportController::index');
$routes->get('/insightAPI','InsightAPI::index');
$routes->get('/insightAPI/(:num)', 'InsightAPI::index/$1');






