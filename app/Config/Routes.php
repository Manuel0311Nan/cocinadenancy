<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->post('/envioForm', 'Contacto::send');
$routes->get('/productos', 'Home::productos');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/producto/(:segment)', 'ProductosController::obtenerDetallesProducto/$1');
$routes->post('/carrito/agregar', 'CarritoController::agregarAlCarrito');
$routes->get('/contacto', 'CarritoController::verCarrito');
$routes->post('carrito/eliminar', 'CarritoController::eliminarDelCarrito');
$routes->get('/carrito/cantidad', 'CarritoController::cantidadCarrito');

