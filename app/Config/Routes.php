<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index');
$routes->get('/about', 'About::index');
$routes->get('/about/contact', 'About::contact');
$routes->get('/about/contact/(:any)/(:num)', 'About::contact/$1/$2');
$routes->get('/about/(:any)/(:num)', 'About::contact/$1/$2');
