<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/authenticate', 'Login::authenticate');
$routes->get('/logout', 'Login::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/user_management', 'UserManagement::index');
$routes->get('/user_management/create', 'UserManagement::create');
$routes->post('/user_management/save', 'UserManagement::save');
$routes->get('/user_management/edit/(:num)', 'UserManagement::edit/$1');
$routes->post('/user_management/update/(:num)', 'UserManagement::update/$1');
$routes->get('/user_management/delete/(:num)', 'UserManagement::delete/$1');
$routes->get('/user_management/view/(:num)', 'UserManagement::view/$1');
