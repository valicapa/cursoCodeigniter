<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/saludo', 'Saludo::saludar');
$routes->get('/formulario', 'AlumnosController::formulario');
$routes->post('/guardarAlumno', 'AlumnosController::guardarAlumno');
