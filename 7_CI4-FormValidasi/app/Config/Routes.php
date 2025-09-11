<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('mahasiswa/display', 'Mahasiswa::display');
$routes->get('mahasiswa/detail/(:num)', 'Mahasiswa::detail/$1');
// route login & logout
$routes->get('login', 'Auth::login');                         // form login
$routes->post('auth/loginProcess', 'Auth::loginProcess');     // proses login
$routes->get('auth/logout', 'Auth::logout');                  // logout


