<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get(' /about', 'About::about');
$routes->get(' /services', 'Services::services');
$routes->get(' /rooms', 'Rooms::rooms');
$routes->get(' /booking', 'Booking::booking');
$routes->get(' /login', 'Login::login');
$routes->get(' /register', 'Register::register');
