<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'PageController::about');
$routes->get('/contact', 'PageController::contact');
$routes->get('/vision', 'PageController::vision');
$routes->get('/mission', 'PageController::mission');
// Auth
$routes->get('/admin/login', 'AuthController::index');
// Services
$routes->get('/repairs', 'PageController::repair');
$routes->get('/sales', 'PageController::sales');
$routes->get('/maintenance', 'PageController::maintenance');
$routes->get('/installation', 'PageController::installation');

$routes->post('admin/login', 'AuthController::attemptLogin');
$routes->get('admin/register', 'AuthController::getRegister');
$routes->post('create-account', 'AuthController::attemptRegister');
$routes->get('logout', 'AuthController::logout');

// Services
$routes->get('service/(:any)', 'PageController::service/$1');

$routes->group('admin', ['namespace' => 'App\Controllers\Admin',"filter" => "auth"], function($routes) {

	// ADMIN DASHBOARD
	
	$routes->get('dashboard', 'AdminController::index',['as'=>'dashboard']);
	$routes->get('add', 'AdminController::add',['as'=>'add']);
	$routes->get('services', 'AdminController::viewServices',['as'=>'viewServices']);
	$routes->post('addService', 'AdminController::addService',['as'=>'addService']);
    $routes->get('service/edit/(:num)', 'AdminController::editService/$1');
    $routes->get('service/delete/(:num)', 'AdminController::deleteService/$1');
	$routes->post('service/update/(:num)', 'AdminController::updateService/$1');
	// USERS
	$routes->get('users','UserController::index');
  });

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
