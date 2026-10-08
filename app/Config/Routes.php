<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home and About pages route to the Pages controller
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');

// Customers and Users pages route to their respective controllers
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
