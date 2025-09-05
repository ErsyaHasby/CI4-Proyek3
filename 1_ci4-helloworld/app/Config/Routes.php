<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hello', 'Home::index');
$routes->get('hallo', 'Home::hallo');
$routes->get('beranda', 'Home::index');