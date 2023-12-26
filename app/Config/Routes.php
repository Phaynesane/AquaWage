<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('signup', 'Auth::register');
$routes->post('api/signin', 'Auth::login');
$routes->get('api/getEmployeeDetails', 'Auth::getEmployeeDetails');
$routes->post('api/updateEmployeeDetails', 'Auth::updateEmployeeDetails');
$routes->post('api/create', 'Logs::create');
$routes->get('api/fetchEmployeeData', 'Leave::fetchEmployeeData');
$routes->post('submitLeaveRequest', 'Leave::submitLeaveRequest');