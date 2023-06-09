<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/projek', 'Pages::projek');
$routes->get('/profil', 'Pages::profil');

// login
$routes->get('/login', 'User::login');
$routes->get('user/login', 'User::login');
$routes->get('registrasi', 'User::registration', ['as' => 'user.registration']);
$routes->get('dashboard/index', 'Dashboard::index');
$routes->add('user/processLogin', 'User::processLogin', ['as' => 'login']);
$routes->get('dashboard/signout', 'Dashboard::logout');

$routes->group('user', ['namespace' => 'App\Controllers'], function($routes) {
    // Route untuk halaman login
    $routes->get('login', 'User::login', ['as' => 'user.login']);
    // Route untuk proses login
    $routes->post('processLogin', 'User::processLogin', ['as' => 'user.processLogin']);
    // Route untuk halaman registrasi
    $routes->get('registration', 'User::registration', ['as' => 'user.registration']);
    // Route untuk proses registrasi
    $routes->post('processRegistration', 'User::processRegistration', ['as' => 'user.processRegistration']);
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
