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