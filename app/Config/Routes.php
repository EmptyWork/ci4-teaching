<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about_index');
$routes->get('/about/contact', 'Home::about_contact');
$routes->get('/about/contact/(:any)/(:num)', 'Home::about_contact/$1/$2');
$routes->get('/about/(:any)/(:num)', 'Home::about_contact/$1/$2');
