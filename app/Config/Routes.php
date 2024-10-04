<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Agrupando rutas para Admin
$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'role:admin'], function($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('/usuarios', 'AdminController::usuarios');
    $routes->get('/reportes', 'AdminController::reportes');
});

// Agrupando rutas para Docente
$routes->group('docente', ['namespace' => 'App\Controllers\Docente', 'filter' => 'role:docente'], function($routes) {
    $routes->get('/', 'DocenteController::index');
    $routes->get('/clases', 'DocenteController::clases');
});

// Agrupando rutas para Estudiante
$routes->group('estudiante', ['namespace' => 'App\Controllers\Estudiante', 'filter' => 'role:estudiante'], function($routes) {
    $routes->get('/', 'EstudianteController::index');
    $routes->get('/notas', 'EstudianteController::notas');
});

// Rutas adicionales
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/reset-password', 'PasswordController::requestReset');
$routes->post('/reset-password', 'PasswordController::sendResetLink');
$routes->get('/reset-password/(:any)', 'PasswordController::resetPassword/$1');
$routes->post('/reset-password/update', 'PasswordController::updatePassword');
$routes->get('/errors/access_denied', 'ErrorsController::accessDenied');