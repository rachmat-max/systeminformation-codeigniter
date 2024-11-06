<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/employee', 'EmployeeController::index');
$routes->get('/employee/create', 'EmployeeController::create');
$routes->post('/employee/store', 'EmployeeController::store');
$routes->get('/employee/edit/(:segment)', 'EmployeeController::edit/$1');
$routes->put('/employee/update/(:segment)', 'EmployeeController::update/$1');
$routes->get('/employee/delete/(:segment)', 'EmployeeController::delete/$1');
