<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hallo', 'Home::hallo');
$routes->get('beranda', 'Home::index');
$routes->get('tabel-dinamis', 'TabelDinamis::index');
$routes->get('tabel-mhs', 'Mahasiswa::display');

