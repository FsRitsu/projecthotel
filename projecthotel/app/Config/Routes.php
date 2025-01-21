<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get(' /about', 'About::index');
$routes->get(' /fasilitas', 'Services::index');
$routes->get(' /rooms', 'Rooms::index');
$routes->get(' /booking', 'Booking::index');
$routes->get(' /team', 'Team::index');
$routes->get(' /testimoni', 'Testimoni::index');

// Bagian login
$routes->get(' /login', 'Login::index', ['filter' => 'userfilter']);
$routes->post(' /login/action', 'Login::loginAction');
$routes->get('/admin', 'Admin::admin', ['filter' => 'adminfilter']);

// Setelah login
$routes->get(' /admin/logout', 'Login::logout');


// Bagian register
// $routes->get(' /register', 'Register::register');
$routes->setDefaultController('Register');
$routes->get('/', 'Register::index');
$routes->get('/register', 'Register::index');
$routes->post('/register', 'Register::addData');
$routes->get('/register/errorData', 'Register::errorData',);
