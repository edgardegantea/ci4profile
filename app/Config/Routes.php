<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/usuarios', 'UsuarioController::index');
$routes->get('/usuarios/create', 'UsuarioController::create');
$routes->post('/usuarios/store', 'UsuarioController::store');
$routes->get('/usuarios/edit/(:num)', 'UsuarioController::edit/$1');
$routes->post('/usuarios/update/(:num)', 'UsuarioController::update/$1');
$routes->post('/usuarios/delete/(:num)', 'UsuarioController::delete/$1');


$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');


$routes->get('/admin', 'AdminController::index');
$routes->get('/docente', 'DocenteController::index');
$routes->get('/estudiante', 'EstudianteController::index');

$routes->get('/complete-profile', 'ProfileController::completeProfile');
$routes->post('/update-profile', 'ProfileController::updateProfile');

$routes->get('/reset-password', 'PasswordController::requestReset');
$routes->post('/send-reset-link', 'PasswordController::sendResetLink');
$routes->get('/reset-password/(:any)', 'PasswordController::resetPassword/$1');
$routes->post('/update-password', 'PasswordController::updatePassword');

