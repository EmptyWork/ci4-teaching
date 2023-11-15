<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
// $routes->get('/about', 'Home::about_index');
// $routes->get('/about/contact', 'Home::about_contact');
// $routes->get('/about/contact/(:any)/(:num)', 'Home::about_contact/$1/$2');
// $routes->get('/about/(:any)/(:num)', 'Home::about_contact/$1/$2');

// Kita akan mengubah Routes dari yang diatas menjadi seperti yang ada
// dibawah ini, dengan membuat 2 Controllers baru, yaitu: Page dan About

$routes->get('/', 'Page::index');
$routes->get('/about', 'About::index');
$routes->get('/about/contact', 'About::contact');
$routes->get('/about/contact/(:any)/(:num)', 'About::contact/$1/$2');
$routes->get('/about/(:any)/(:num)', 'About::contact/$1/$2');

$routes->get('/users/', 'PenggunaController::list');
$routes->get('/users/new', 'PenggunaController::index');
$routes->post('/users/new', 'PenggunaController::create');
$routes->delete('/users/delete/(:num)', 'PenggunaController::delete/$1');
$routes->get('/users/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('/users/update/(:num)', 'PenggunaController::update/$1');
$routes->get('/users/view/(:num)', 'PenggunaController::view/$1');
