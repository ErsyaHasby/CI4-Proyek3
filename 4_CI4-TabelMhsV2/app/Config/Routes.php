<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('mahasiswa/display', 'Mahasiswa::display');
$routes->get('mahasiswa/detail/(:num)', 'Mahasiswa::detail/$1');

