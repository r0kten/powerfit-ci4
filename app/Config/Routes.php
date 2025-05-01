<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('members',          ['controller' => 'MembersController']);
$routes->resource('trainers',         ['controller' => 'TrainersController']);
$routes->resource('membership_plans', ['controller' => 'MembershipPlansController']);
$routes->resource('classes',          ['controller' => 'ClassesController']);
$routes->resource('sessions',         ['controller' => 'SessionsController']);
$routes->resource('bookings',         ['controller' => 'BookingsController']);

