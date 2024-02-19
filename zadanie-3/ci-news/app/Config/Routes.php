<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/profile', 'Home::profile');
$routes->get('/loginwithmicrosoft', 'Home::loginwithmicrosoft');
