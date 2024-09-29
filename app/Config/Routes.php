<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contacto', 'Home::contacto');
$routes->post('/envioForm', 'Contacto::send');
$routes->get('/productos', 'Home::productos');
$routes->get('/productos/(:segment)', 'ProductosController::detalle/$1');